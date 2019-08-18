<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected  $fillable = [
        'room_id',
        'guest_id',
        'start_date',
        'end_date',
        'amount',
        'payment_method',
        'transaction_id',
        'info'
    ];


    public function room(){


        return $this->hasOne(App\Room::class);

    }

}
