<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    const USER_ID = "user_id",
    LIKEABLE_ID = "likeable_id",
    LIKEABLE_TYPE ="likeable_type";

    protected $fillable =[
        self::USER_ID,
        self::LIKEABLE_ID,
        self::LIKEABLE_TYPE
    ];


    public function likeable()
    {
        return $this->morphTo();
    }
}
