<?php

namespace App\Http\Controllers\khleang;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePassController extends Controller
{
    public function ChangePassword(Request $req){
        $current_user_id = Auth::user()->id;
        $user = User::where('id',$current_user_id)->first();
        if(!$user){
            return '404 1';
        }
        $pass = Hash::check($req->password,$user->password);
        if(!$pass){
            return '404 2';
        }
        $newpass = Hash::make($req->Newpass);
        $data = User::where('id',$current_user_id)->first();
        $data->update([
            'password' => $newpass,
        ]);

        return $newpass;
    }
}
