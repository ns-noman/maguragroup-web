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

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'created_by_id')->select(['id', 'name']);
    }

    public function blogcategory()
    {
        return $this->belongsTo(BlogCategory::class, 'cat_id')->select(['id', 'title']);
    }

}
