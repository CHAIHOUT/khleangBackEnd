<?php

namespace App\Http\Controllers\khleang;

use App\Http\Controllers\Controller;
use App\Models\khleang\inboxModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class inboxController extends Controller
{
    public function index(){
        $data = inboxModel::all();
        return ($data);
    }

    public function store(Request $req){
        $req->merge(["user_id"=>Auth::user()->id]);
        $data = inboxModel::create($req->all());
        return ($data);
    }

    public function show($id){
        $data = inboxModel::where("id",$id)->first();
        return ($data);
    }

    public function destroy($id){
        $data = inboxModel::where('id',$id)->delete();
        return ($data);
    }

}
