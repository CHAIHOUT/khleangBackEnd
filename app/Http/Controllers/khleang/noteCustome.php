<?php

namespace App\Http\Controllers\khleang;

use App\Http\Controllers\Controller;
use App\Models\khleang\noteModel;
use Illuminate\Http\Request;

class noteCustome extends Controller
{
    public function delete_allnote($id){
        $data = noteModel::where('user_id',$id)->delete();
        return ($data);
    }
}
