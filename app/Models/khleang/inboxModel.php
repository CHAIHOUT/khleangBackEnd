<?php

namespace App\Models\khleang;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inboxModel extends Model
{
    use HasFactory;

    protected $table = 'inbox';
    protected $guarded = ['id'];

    public function getUser(){
        return $this->belongsTo(User::class,'user_id');
    }

}
