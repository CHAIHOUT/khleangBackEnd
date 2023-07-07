<?php

namespace App\Http\Controllers\khleang;

use App\Http\Controllers\Controller;
use App\Models\khleang\calenderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class calenderController extends Controller
{   
    public function index(){
        $current_user_id = Auth::user()->id;
        $data = calenderModel::where('user_id',$current_user_id)->get();  
        return ($data);
    }
    public function store(Request $req){
        // $req->merge(["user_id"=>Auth::user()->id]);
        $data = calenderModel::create([
            'date' => $req->date,
            'user_id' => Auth()->user()->id,
            'name' => $req->name,
            'color' => $req->color,
            'id2' => $req->id2,
        ]);
        return ($data);
    }

    public function destroy($id){
        $data = calenderModel::where('id2',$id)->delete();
        return ($data);
    }
}
