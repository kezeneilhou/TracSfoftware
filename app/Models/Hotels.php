<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LiasonOfficer;

class Hotels extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function hotelLo()
    {
      return $this->hasOne(LiasonOfficer::class,'id','liason_id');
    }
}
