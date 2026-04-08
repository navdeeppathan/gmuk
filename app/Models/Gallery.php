<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'galleries';

    protected $fillable = [
        'title',
        'image',
        'category',
        'description',
        'status'
    ];

    // Optional: Casts
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Optional: Default values
    protected $attributes = [
        'status' => 'active',
        'category' => 'other',
    ];

    public function images()
    {
        return $this->hasMany(GalleryImage::class, 'gallary_id');
    }
   
}