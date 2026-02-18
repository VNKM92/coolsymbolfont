<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminDocUpload extends Model
{
    use HasFactory;

    protected $fillable = [
        'title' ,'document', 'comment','ed'
    ];

    protected $dates = ['deleted_at'];
}
