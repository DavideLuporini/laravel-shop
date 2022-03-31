<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'image',
        'price',
        'description',
        'brand_id'
    ];
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }
    public function colors()
    {
        return $this->belongsToMany('App\Model\Color');
    }
}
