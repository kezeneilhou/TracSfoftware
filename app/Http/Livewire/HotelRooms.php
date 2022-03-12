<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Hotels;
use App\Models\Room;

class HotelRooms extends Component
{
    public $hotel;
    public $rooms = [];

    public function updatedHotel()
    {
      $this->rooms = Room::where('hotel_id',$this->hotel)->get();
    }

    public function render()
    {
        $hotel = Hotels::all();
        return view('livewire.hotel-rooms',[
          'hotels' => $hotel,
        ]);
    }
}
