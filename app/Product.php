<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [ 'title','description','price' ];


    // category belogins to products
    public function categories()
    {
        return $this->belongsToMany(category::class);
    }




}



