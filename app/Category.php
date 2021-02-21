<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [ 'title','description']; 



    // category belogins to products
    public function products()
    {
        return $this->belongsToMany(product::class);
    }

}
