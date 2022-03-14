<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotels;

class Room extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function roomHotel()
    {
      return $this->hasOne(Hotels::class,'id','hotel_id');
    }
}
