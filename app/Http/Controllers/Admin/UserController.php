<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\User\UserEloquentRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public $res;

    public function __construct(UserEloquentRepository $repository)
    {
        $this->res = $repository;
    }

    public function index()
    {
        $data = $this->res->findAll();
        return view('admin.user.index', compact('data'));
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
}
