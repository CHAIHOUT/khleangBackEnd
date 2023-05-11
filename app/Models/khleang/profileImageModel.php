<?php

namespace App\Models\khleang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profileImageModel extends Model
{
    use HasFactory;

    protected $table = 'profile_image';
    protected $guarded = ['id'];
}
