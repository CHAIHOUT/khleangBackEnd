<?php

namespace App\Http\Controllers\khleang;

use App\Http\Controllers\Controller;
use App\Models\khleang\UploadModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class upload_type_Controller extends Controller
{   
    public function index(){
        $current_user_password = Auth::user()->password;
        $current_user_email = Auth::user()->email;
        $user = User::where('email',$current_user_email)->first();
        if(!$user){
            return ;
        }
        // $pass = Hash::check($current_user_password,$user->password);
        // if(!$pass){
        //     return ;
        // }
        
        $pass = hash::shouldReceive(Auth::user()->password,true);

        return response([
            'user' => $user,
            'password' => $pass,
        ]);
    }  
    public function show($type_file){
        $data = UploadModel::where("type_file",$type_file)->get();
        return ($data);
    }
}
