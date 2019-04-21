<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public $res;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->res = $repository;
    }

    public function index()
    {
        $data = $this->res->findAll();
        return view('admin.user.index', compact('data'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Redirect form tạo mới
     */
    public function addHtml()
    {
        return view('admin.user.add');
    }

    /**
     * @param UserRequest $request
     * @return bool|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *
     * Xử lý form tạo mới
     */
    public function addAction(UserRequest $request)
    {

        if ($request->post()) {
            $post = $request->post();
            $input = $post;
            $input['created_at'] = date('Y-m-d H:i:s');
            $input['updated_at'] = date('Y-m-d H:i:s');
            $input['password'] = Hash::make($post['password']);
            try {
                $rs = $this->res->create($input);
                if ($rs) {
                    $request->session()->flash('status', 'Tạo tài khoản thành công!');
                    return redirect()->route('user.view', ['id' => $rs->id]);
                } else {
                    $request->session()->flash('status', 'Tạo tài khoản không thành công!');
                    return back();
                }
            } catch (\Exception $e) {
                dd($e);
                return back()->with('errors', 'Lỗi xảy ra !' . $e->getMessage());
            }
        }
        return FALSE;
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * Redirect form sửa thông báo
     */
    public function editHtml($id)
    {
        $this->authorize('edit-user');
        $data = $this->res->findOneById($id);
        return view('admin.user.edit', compact('data'));
    }

    /**
     * @param UserRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * Control form sửa thông báo
     */
    public function editAction(UserRequest $request, $id)
    {
        $post = $request->post();
        $input = $post;

        $input['updated_at'] = date('Y-m-d H:i:s');

        try {
            $rs = $this->res->updateOneById($id, $input);
            if ($rs) {
                $request->session()->flash('status', 'Sửa tài khoản thành công!');
                return redirect('/admin/user');
            } else {
                $request->session()->flash('status', 'Sửa tài khoản không thành công!');
                return back();
            }
        } catch (\Exception $e) {
            return back()->with('errors', 'Lỗi xảy ra !' . $e->getMessage());
        }
    }


    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Xem chi tiết thông báo.
     */
    public function view(Request $request, $id)
    {
        $data = $this->res->findOneById($id);
        return view('admin.user.view', compact('data'));
    }

    /**
     * @param Request $request
     * @return $this
     * Function xóa: Thêm này deleted_at vào trường dữ liệu: không xóa trực tiếp db
     */
    public function delete(Request $request)
    {
        if ($request->ajax()) {
            $id = $request->id;
            $data = $this->res->findOneById($id);
            try {
                $rs = $data->delete();
                if ($rs) {
                    $request->session()->flash('status', 'Xóa tài khoản thành công!');
                    return $this->responSuccessAjax(array(), "Xóa thông báo thành công");
                } else {
                    $request->session()->flash('status', 'Xóa tài khoản không thành công!');
                    return $this->responErrorAjax("Xóa không thành công");
                }
            } catch (\Exception $e) {
                return $this->responErrorAjax($e->getMessage());
            }
        }
    }

    /**
     * @param Request $request
     * @return $this|bool|\Illuminate\Http\RedirectResponse
     * Đổi trạng thái
     */
    public function changeStatus(Request $request)
    {
        $result = [
            'success' => false,
            'message' => "",
            'value' => ''
        ];
        if ($request->ajax()) {
            $status = $request->status;
            $id = $request->id;
            try {
                if ($status == \App\Models\Notifications::ACTIVE) {
                    $input['status'] = \App\Models\Notifications::INACTIVE;
                } else {
                    $input['status'] = \App\Models\Notifications::ACTIVE;
                }

                $rs = $this->servicesRepository->updateOneById($id, $input);

                if ($rs) {
                    $result['value'] = $input['status'];
                    $result['message'] = "Update trạng thái thành công";
                    return $this->responSuccessAjax($result, $result['message']);
                } else {
                    return $this->responErrorAjax("Update trạng thái không thành công");
                }
            } catch (Exception $e) {

                return back()->with('errors', 'Lỗi xảy ra !' . $e->getMessage());
            }
        }
        return false;

    }

    public function profileHtml($id)
    {
        $data = $this->res->findOneById($id);
        return view('admin.user.profile', compact('data'));
    }

    public function profileAction(UserRequest $request, $id)
    {
        $post = $request->post();
        $input = $post;
        $input['updated_at'] = date('Y-m-d H:i:s');
        try {
            $rs = $this->res->updateOneById($id, $input);
            if ($rs) {
                $request->session()->flash('status', 'Sửa tài khoản thành công!');
                return redirect('/user/profile/' . $id);
            } else {
                $request->session()->flash('status', 'Sửa tài khoản không thành công!');
                return back();
            }
        } catch (\Exception $e) {
            return back()->with('errors', 'Lỗi xảy ra !' . $e->getMessage());
        }
    }

}
