<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pant extends Model
{

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'brand', 'lotNumber', 'imageString', 'color', 'gender', 'notes'
    ];
}
