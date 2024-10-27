<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = ['id', 'title', 'author_name', 'category', 'content', 'status', 'created_at', 'updated_at'];
}
