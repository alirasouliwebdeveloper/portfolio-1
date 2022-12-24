<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'title', 'body', 'counts', 'status', 'deleted_at', 'user_id', 'category_id'
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeActivePosts($query)
    {
        return $query->where('deleted_at', null)->where('active', 1);
    }

    public function scopeNotDeletedPosts($query)
    {
        return $query->where('deleted_at', null);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function returnStatus($status)
    {
        return
            $status == 1 ?
                '<span class="badge badge-success">Publish</span>'
                :
                '<span class="badge badge-warning">Draft</span>';
    }
}
