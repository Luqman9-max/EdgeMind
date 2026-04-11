<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'short_description',
        'cover_image',
        'author',
        'year',
        'category',
        'is_featured',
        'is_published',
        'is_free',
        'gumroad_url',
        'price',
        'sort_order',
        'admin_id',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'is_free' => 'boolean',
        'price' => 'decimal:2',
        'sort_order' => 'integer',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
