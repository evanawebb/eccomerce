<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'brand', 'lotNumber', 'color', 'category', 'subCategory', 'gender', 'image', 'notes'
    ];

    public function scopeShirts($query)
    {
        return $query->where('category', 'Shirts');
    }
}
