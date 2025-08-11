<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Field yang boleh diisi
    protected $fillable = [
        'title',
        'content',
        'image',
        'category'
    ];
}
