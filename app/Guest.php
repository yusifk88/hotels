<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    //

    protected $fillable = [
        'fname',
        'lname',
        'sex',
        'email',
        'phone',
        'info'
    ];



    public function reservations(){


        return $this->hasMany(App\Reservation::class);

    }


}
