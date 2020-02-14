<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function Author()   
    {
        return $this->belongsTo(Author::class);//pertenece a un author
    }
    protected $dates = ['publish_date']; // pasar fechas a carbon
}
