<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * When a post is created, it will be bound to his parents(user and category)
     * During update category will be associated
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        self::creating(function ($post) {
            $post->user()->associate(auth()->user()->id);
            $post->category()->associate(request()->category);
        });

        self::updating(function ($post) {
            $post->category()->associate(request()->category);
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * First letter of each word in title attribute is majuscule
     *
     * @param $attribute
     * @return string
     */
    public function getTitleAttribute($attribute)
    {
        return Str::title($attribute);
    }
}
