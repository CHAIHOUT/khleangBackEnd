<?php

namespace App\Models\khleang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadModel extends Model
{
    use HasFactory;

    protected $table = "upload";
    protected $guarded = ["id"];
}
