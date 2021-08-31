<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory,SoftDeletes;


    const TITLE = "title",
    SLUG = "slug";



    protected $fillable = [
      self::TITLE,
      self::SLUG
    ];
    public function blogtags()
    {
        return $this->belongsTo(blogTags::class);
    }

}
