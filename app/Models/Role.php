<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Role extends Model
{
    use HasFactory,Notifiable;

    const NAME='name',
        SCOPE='scope';

    protected $fillable=[
        self::NAME,
        self::SCOPE
    ];

}

