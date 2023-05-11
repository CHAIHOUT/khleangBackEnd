<?php

namespace App\Http\Controllers\khleang;

use App\Http\Controllers\Controller;
use App\Models\khleang\profileImageModel;
use App\Models\khleang\UploadModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class upload_type_Controller extends Controller
{   
    public function index(){
        $current_user_id = Auth::user()->id;
        $data = profileImageModel::where('user_id',$current_user_id)->first();  
        return ($data);
    }
    public function show($type_file){
        $data = UploadModel::where("type_file",$type_file)->where('user_id',Auth::user()->id)->get();
        return ($data);
    }
    public function store(Request $req){
        $req->merge(["user_id"=>Auth::user()->id]);
        $data = profileImageModel::create($req->all());
        return ($data);
    }
    public function update(Request $req , $id){
        $data = profileImageModel::where('user_id',$id)->update($req->all());
        return ($data);
    }
    public function destroy($id){
        $data = UploadModel::where('user_id',$id)->delete();
        return ($data);
    }
}
