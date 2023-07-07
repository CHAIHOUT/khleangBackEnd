<?php

namespace App\Http\Controllers\khleang;

use App\Http\Controllers\Controller;
use App\Models\khleang\calenderModel;
use Illuminate\Http\Request;

class calenderCustome extends Controller
{
    public function deleteByID($id){
        $data = calenderModel::where('user_id',$id)->delete();
        return ($data);
    }
}
