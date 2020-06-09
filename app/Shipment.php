<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = [

        'parcel_id',
        'user_id',
        'tracking_id',
        'origin',
        'stop1',
        'stop2',
        'stop3',
        'status',
        'destination',
        'is_active',

    ];

    public function parcel(){
        return $this->belongsTo(Parcel::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function shipmentHistories(){
        return $this->hasMany(ShipmentHistory::class);
    }
}
