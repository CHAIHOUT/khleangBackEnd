<?php

namespace App\Http\Controllers\khleang;

use App\Http\Controllers\Controller;
use App\Models\khleang\noteModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class noteController extends Controller
{
    public function index(){
        $current_user_id = Auth::user()->id;
        $data = noteModel::where('user_id',$current_user_id)->get();  
        return ($data);
    }

    public function store(Request $req){
        $req->merge(['user_id'=>Auth::user()->id]);
        $data = noteModel::create($req->all());
        return ($data);
    }

    public function update(Request $req, $id){
        $data = noteModel::where('id',$id)->update($req->all());
        return ($data);
    }

    public function destroy($id){
        $data = noteModel::where('id',$id)->delete();
        return ($data);
    }

    public function show($id){
        $data = noteModel::where('id',$id)->first();
        return ($data);
    }
}
