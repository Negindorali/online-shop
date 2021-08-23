<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory, SoftDeletes;


    const
        USER_ID = "user_id",
        USER_NAME = "user_name",
        CONTENT = "content";

    protected $fillable = [
        self::CONTENT,
        self::USER_ID,
        self::USER_NAME
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}