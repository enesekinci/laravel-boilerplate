<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'author_id',
        'title',
        'slug',
        'content',
        'image',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    public static $tableColumns = [
        'title',
        'authorName',
        'content',
        'image',
        'is_published',
        'published_at',
    ];

    public static $formFields = [
        'title' => [
            'type' => 'text',
            'label' => 'Başlık',
            'placeholder' => 'Başlık',
            'required' => true,
        ],
        'content' => [
            'type' => 'ckeditor',
            'label' => 'İçerik',
            'placeholder' => 'İçerik',
            'editor' => true,
            'required' => true,
        ],
        'image' => [
            'type' => 'file',
            'label' => 'Resim',
            'placeholder' => 'Resim',
            'required' => true,
        ],
        'is_published' => [
            'type' => 'status',
            'label' => 'Yayınla',
            'placeholder' => 'Yayınla',
            'required' => false,
        ],
        'published_at' => [
            'type' => 'datetime',
            'label' => 'Yayın Tarihi',
            'placeholder' => 'Yayın Tarihi',
            'required' => false,
        ],
    ];



    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function authorName()
    {
        return $this->author->name;
    }

    public function getAuthorNameAttribute()
    {
        return $this->authorName();
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeDraft($query)
    {
        return $query->where('is_published', false);
    }

    public function scopeLatest($query)
    {
        return $query->orderBy('published_at', 'desc');
    }
}
