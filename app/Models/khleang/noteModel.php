<?php

namespace App\Models\khleang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class noteModel extends Model
{
    use HasFactory;

    protected $table = "note";
    protected $guarded = ["id"];
}
