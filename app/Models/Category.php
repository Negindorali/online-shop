<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;

    const TITLE = "title",
    SLUG = "slug",
    TYPE = "type";

    protected $fillable = [
      self::TITLE,
      self::TYPE,
      self::SLUG,
    ];

    public function food()
    {
        return $this->belongsTo("foods");

    }
}
