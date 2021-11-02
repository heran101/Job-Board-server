<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function successResponse($data = false,$responseCode = 200,$msg="success"){
        
        $response = array(
            "message"=>$msg
        );

        if($data){
            $response['data'] = $data;
        }

        return response()->json($response,$responseCode);
    }

    public function errorResponse($error,$responseCode = 500,$msg="Error"){
        
        $response = array(
            "message"=>$msg
        );

        if($error){
            $response['error'] = $error;
        }

        return response()->json($response,$responseCode);
    }
}
