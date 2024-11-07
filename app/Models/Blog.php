<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'cat_id',
        'title',
        'short_description',
        'description',
        'image',
        'alt',
        'pn',
        'is_in_home',
        'status',
        'created_by_id',
        'updated_by_id',
    ];
}
