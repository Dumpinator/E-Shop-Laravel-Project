<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name','description','price','size','online','state','category'
    ];

    public function category() {
        return $this->belongsto('App\Category');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
