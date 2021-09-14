<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    const USER_ID='user_id',
    CHECK_IN='check_in',
    CLOCK='clock',
    GUEST = 'guest';



    protected $fillable = [
      self::USER_ID,
      self::CHECK_IN,
      self::CLOCK,
      self::GUEST
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
