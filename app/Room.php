<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    protected $fillable = [
        'description',
        'info',
        'bedType',
        'price_perDay'

    ];


    public function reservations(){

        return $this->hasMany('App\Reservation');

    }

    public function images(){
        return $this->hasMany('App\Image');
    }




}
