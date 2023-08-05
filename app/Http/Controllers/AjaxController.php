<?php

namespace App\Http\Controllers;

use App\Models\Ajax;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //
    public function add(Request $request){
        $data['username']=$request->username;
        $data['email']=$request->email;
        return Ajax::create($data);

    }
    public function ajaxvalidate(Request $request){
        $request->validate([
            'username' =>'required',
            'email' =>'required',
        ]);

    }
}
