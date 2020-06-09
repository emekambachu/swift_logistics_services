<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    protected $fillable = [
        'name',
        'parcel_number',
        'weight',
        'description'
    ];

    public function shipments(){
        return $this->hasMany(Shipment::class);
    }
}
