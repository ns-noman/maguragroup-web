<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'service_type_id',
        'pn',
        'title',
        'description',
        'image',
        'alt',
        'status',
        'created_by_id',
        'updated_by_id',
    ];

    public function servicetype()
    {
        return $this->belongsTo(ServiceType::class, 'service_type_id', 'id');
    }
    
}
