<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "movies";

    public $timestamps = false;

    protected $fillable = [
        'id', 'name', 'price', 'date', 'desc', 'category'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
}
