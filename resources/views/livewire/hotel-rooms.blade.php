<div class="row form-group">
  <x-form-select name="hotel_id" label="Hotel" col="4" wire:model="hotel" required>
    @foreach($hotels as $item)
    <option value="{{$item->id}}">{{$item->name}}</option>
    @endforeach
  </x-form-select>
  <x-form-select name="room_id" label="Room" col="4" required>
    @if(isset($rooms))
    @foreach($rooms as $item)
    <option value="{{$item->id}}">{{$item->room_no}}, {{$item->room_type}}</option>
    @endforeach
    @endif
  </x-form-select>
</div>
