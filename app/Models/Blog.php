<?php

namespace App\Models;

use App\Http\Controllers\BlogTagsController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

    const
        USER_ID = "user_id",
        TITLE = "title",
        CONTENT = "content",
        SLUG = "slug",
        IMAGE = "image",
        TYPE = "type";


    const POST_TYPE = [
        "blog" => "پست بلند",
        "twitt" => "پست کوتاه"
    ];

    protected $fillable = [
        self::USER_ID,
        self::TITLE,
        self::CONTENT,
        self::SLUG,
        self::TYPE,
        self::IMAGE
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class,"blog_tags");
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);

    }

    public function likeable()
    {
        return $this->morphMany(Like::class,"likeable");
    }

}
