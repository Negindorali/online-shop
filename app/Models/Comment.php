<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;


    const
        USER_ID = "user_id",
        USER_NAME = "user_name",
        CONTENT = "content",
        BLOG_ID="blog_id";

    protected $fillable = [
        self::CONTENT,
        self::USER_ID,
        self::USER_NAME,
        self::BLOG_ID,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}