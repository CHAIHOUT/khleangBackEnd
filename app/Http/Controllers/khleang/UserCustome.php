<?php

namespace App\Http\Controllers\khleang;

use App\Http\Controllers\Controller;
use App\Models\khleang\calenderModel;
use App\Models\khleang\noteModel;
use App\Models\khleang\UploadModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCustome extends Controller
{
    public function getalluser(){
        $data = User::all();
        return ($data);
    }

    public function getallnote(){
        $data = noteModel::all();
        return ($data);
    }

    public function getallupload(){
        $data = UploadModel::all();
        return ($data);
    }

    public function getallcalender(){
        $data = calenderModel::all();
        return ($data);
    }

    public function changePass(Request $req){
        $current_user_id = Auth::user()->id;
        $data = User::where('id',$current_user_id)->where('password',$req->oldpassword)->first();
        if(!$data){
            return 'false';
        }else{
            $data->update([
                'password' => $req->password,
            ]);
            return 'true';
        }
    }
}
