<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;

class Driver extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function driverVehicle()
    {
      return $this->hasOne(Vehicle::class,'id','vehicle_id');
    }
}
