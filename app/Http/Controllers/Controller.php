<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function responSuccessAjax($data=array(), $message, $status = 200, $header = 'application/json')
    {
        if (empty($data)){
            $data = [
                'success' => true,
                'message' => $message
            ];
        }
        return response($data, $status)
            ->header('Content-Type', $header);
    }

    function responErrorAjax($message, $status = 400, $header = 'application/json')
    {
        $data = [
            'success' => false,
            'message' => $message
        ];
        return response($data, $status)
            ->header('Content-Type', $header);
    }
}
