<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'company_id',
        'title',
        'description',
        'image',
        'alt',
        'srln',
        'status',
        'created_by_id',
        'updated_by_id',
    ];
}
