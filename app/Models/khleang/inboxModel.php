<?php

namespace App\Models\khleang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inboxModel extends Model
{
    use HasFactory;

    protected $table = 'inbox';
    protected $guarded = ['id'];
}
