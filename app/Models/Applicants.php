<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Driver;
use App\Models\Hotels;
use App\Models\LiasonOfficer;
use App\Models\Room;


class Applicants extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function appHotel()
    {
        return $this->hasOne(Hotels::class,'id','hotel_id');
    }

    public function appLiason()
    {
        return $this->hasOne(LiasonOfficer::class,'id','liason_id');
    }

    public function appDriver()
    {
        return $this->hasOne(Driver::class,'id','driver_id');
    }

    public function appRoom()
    {
      return $this->hasOne(Room::class,'id','room_id');
    }

}
