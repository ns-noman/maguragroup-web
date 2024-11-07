<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'title',
        'status',
        'created_by_id',
        'updated_by_id',
    ];
}
