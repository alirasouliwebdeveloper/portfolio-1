<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = ['title', 'body', 'status', 'type'];

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

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function scopeActiveCategories($query)
    {
        return $query->where('deleted_at', null);
    }

    public function returnLabel($label)
    {
        switch ($label) {
            case 'Post':
                return '<span class="badge badge-info">Post</span>';
            case 'Portfolio':
                return '<span class="badge badge-info">Portfolio</span>';
            default:
                return '<span class="badge badge-info">Free</span>';
        }
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
