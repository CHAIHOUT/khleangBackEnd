<?php

namespace App\Http\Controllers\khleang;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $current_user_id = Auth::user()->id;
        $data = User::where('id',$current_user_id)->first();  
        return ($data);
    }
    public function update(Request $req , $id){
        $data = User::where('id',$id)->update($req->all());
        return ($data);
    }
    public function destroy($id){
        $data = User::where('id',$id)->delete();
        return ($data);
    }
}
