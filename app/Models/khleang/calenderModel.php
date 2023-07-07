<?php

namespace App\Models\khleang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calenderModel extends Model
{
    use HasFactory;

    protected $table = "calender";
    protected $guarded = ["id"];
}
