<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CommonEnum;
use App\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    private $repo;

    public function __construct(CategoryRepositoryInterface $repository)
    {
        $this->repo = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $search = [
            's' => $request->query('s') ?? ""
        ];
        $listCategory = $this->repo->search($search);

        $listParent = [];
        $listCatname = [

        ];
        if ($request->query('active') == CommonEnum::active && !empty($request->query('checkbox'))) {

            $result = $this->repo->changeStatus($request->query('checkbox'));
            if ($result) {
                return redirect(route('category.index'))->with('success', trans('category.change_success'));
            }
        }
        if ($request->query('delete') == CommonEnum::active && !empty($request->query('checkbox'))) {

            $result = $this->repo->deleteManyByIds($request->query('checkbox'));
            if ($result) {
                return redirect(route('category.index'))->with('success', trans('category.delete_success'));
            }
        }
        foreach ($listCategory as $k => $row) {
            if ($row->parent_id == CommonEnum::category_parent && $row->status == CommonEnum::active) {
                array_push($listParent, $row);
            }
            $listCatname[$row->id] = $row->name;
        }

        return view('admin.category.index', compact('listCategory', 'listParent', 'listCatname','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->only('name', 'parent_id', 'description', 'status', 'image');
        $this->repo->create($data);
        return back()->with('success', trans('category.add_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $data = $this->repo->findOneById($id);
        $listCategory = $this->repo->findAll();

        $listParent = [];
        foreach ($listCategory as $k => $row) {
            if ($row->parent_id == CommonEnum::category_parent && $row->status == CommonEnum::active) {
                array_push($listParent, $row);
            }
            $listCatname[$row->id] = $row->name;
        }
        return view('admin.category.edit',compact('data','listParent'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $rules = array(
            'name'       => 'required',
        );
        $validator = \Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return back()
                ->withErrors($validator);
        } else {
            // store
            $update = $request->all();
            $update['status'] = isset($update['status']) ?  $update['status'] : 0;
            $data = $this->repo->updateOneById($id,$update);

            // redirect
            return redirect(route('category.index'))->with('success', trans('category.edit_success',['name' => $update['name']]));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
