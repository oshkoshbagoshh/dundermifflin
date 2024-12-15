<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_featured'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_featured' => 'boolean'
    ];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted(): void
    {
        static::creating(function ($tag) {
            if (empty($tag->slug)) {
                $tag->slug = Str::slug($tag->name);
            }
        });
    }

    /**
     * Get all posts with this tag.
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class)
            ->withTimestamps();
    }

    /**
     * Scope a query to only include featured tags.
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeFeatured($query): Builder
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope a query to order by most used tags.
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopePopular($query): Builder
    {
        return $query->withCount('posts')
            ->orderBy('posts_count', 'desc');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}