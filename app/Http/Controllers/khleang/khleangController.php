<?php

namespace App\Http\Controllers\khleang;

use App\Http\Controllers\Controller;
use App\Models\khleang\UploadModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class khleangController extends Controller
{
    public function index(){
        $current_user_id = Auth::user()->id;
        $data = UploadModel::where('user_id',$current_user_id)->get();  
        return ($data);
    }

    public function store(Request $req){
        $req->merge(["user_id"=>Auth::user()->id]);
        $data = UploadModel::create($req->all());
        return ($data);
    }

    public function update(Request $req , $id){
        $data = UploadModel::where('id',$id)->update($req->all());
        return ($data);
    }

    public function show($id){
        $data = UploadModel::where("id",$id)->first();
        return ($data);
    }

    public function destroy($id){
        $data = UploadModel::where('id',$id)->delete();
        return ($data);
    }

}   
