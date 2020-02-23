<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    public function arrivingFlights()
    {
        return $this->hasMany('App\Flght', 'arrivalAirport_id');
    }


    public function departingFlights()
    {
        return $this->hasMany('App\Flght', 'departureAirport_id');
    }

}
