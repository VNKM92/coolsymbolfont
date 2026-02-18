<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminDocHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'doc_id',  'title' ,'document', 'comment','ed'
    ];

    protected $dates = ['deleted_at'];
}
