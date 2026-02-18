<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LovePdf extends Model
{
    use HasFactory;


    protected $fillable = [
        'admin_token','secret_key','auth_access_token','ed','uid','server','task','file','remaining_files'
      ];
}
