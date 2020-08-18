<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class MasterController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        $arr=['a','b','b'];
        $user="Hello <br/> Testing";

        $tmp=[
                "user"=> $user,
                "records"=>$arr
        ];
        return view('body.admin',$tmp);
    }
}
