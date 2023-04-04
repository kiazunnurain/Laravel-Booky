<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Books extends Model
{  
    use HasFactory;

    protected $guarded = ['id'];
    protected $dates = ['created_at'];
    protected $fillable= ['books', 'author', 'images', 'dokumen']; 
}
