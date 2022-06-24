<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "carts";

    public $timestamps = false;

    protected $fillable = [
        'id', 'user_id', 'movie_id', 'booking_date'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
}
