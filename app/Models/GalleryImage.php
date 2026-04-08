<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $table = 'gallery_images';

    protected $fillable = [
        'image',
        'gallary_id',
    ];

    /**
     * If you want timestamps (already in table)
     */
    public $timestamps = true;

    /**
     * Optional: Relationship (if gallary_id refers to another table)
     */
    public function gallery()
    {
        return $this->belongsTo(Gallery::class, 'gallary_id');
    }
}