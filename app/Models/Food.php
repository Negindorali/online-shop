<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends Model
{
    use HasFactory,SoftDeletes;

    const
          TYPE="type",
          Name="name",
          PRICE="price";

    protected $fillable = [
        self::TYPE,
        self::PRICE,
        self::Name
    ];
    protected $table="foods";


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
