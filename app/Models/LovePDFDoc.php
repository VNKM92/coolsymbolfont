<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LovePDFDoc extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','doc_type','doc_name','loadid'
      ];
}
