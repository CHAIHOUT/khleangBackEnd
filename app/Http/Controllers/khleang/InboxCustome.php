<?php

namespace App\Http\Controllers\khleang;

use App\Http\Controllers\Controller;
use App\Models\khleang\inboxModel;
use App\Models\khleang\profileImageModel;
use App\Models\khleang\userModel;
use App\Models\User;
use Illuminate\Http\Request;

class InboxCustome extends Controller
{
    public function getProfileImageByID($id){
        $data = profileImageModel::where('user_id',$id)->first();
        return ($data);
    }

    public function getUserByID($id){
        $data = User::where('id',$id)->first();
        return ($data);
    }

    // public function getAllByUser($id){
    //     $data = userModel::where('id',$id)->first();
    //     $note = $data->getNote;
    //     $data->Note = $note;
    //     return ($data);
    // }
}
