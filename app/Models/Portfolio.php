<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Portfolio extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable =
        [
            'title', 'url', 'body', 'start_date',
            'end_date', 'customer_name', 'user_id',
            'status', 'deleted_at', 'category_id', 'image'
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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function returnStatus($status)
    {
        return
            $status == 1 ?
                '<span class="badge badge-success">Publish</span>'
                :
                '<span class="badge badge-warning">Draft</span>';
    }

    public function scopeActivePortfolios($query)
    {
        return $query->where('deleted_at', null)->where('active', 1)->latest();
    }

    public function scopeNotDeletedPortfolios($query)
    {
        return $query->where('deleted_at', null)->latest();
    }

}
