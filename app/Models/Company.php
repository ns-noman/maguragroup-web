<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'title',
        'description',
        'site_link',
        'logo',
        'alt',
        'pn',
        'is_in_home',
        'status',
        'created_by_id',
        'updated_by_id',
    ];
}
