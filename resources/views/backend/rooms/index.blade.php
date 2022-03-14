@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-md-3">
      <x-card-with-header header='Add Rooms'>
        <hr class="dotted">
        <form class="" action="{{route('rooms.store')}}" method="post">
          @csrf
          <x-form-select name="hotel_id" label="Hotel" required>
            @foreach($hotels as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
          </x-form-select>
          <x-form-input type="text" name="room_no" label="Room No. *" required/>
          <x-form-input type="text" name="room_type" label="Room Type *" required/>
          <button type="submit" class="btn btn-primary btn-sm mt-4">Submit</button>
        </form>
      </x-card-with-header>
    </div>
    <div class="col-md-9">
      <x-card-with-header header="Rooms">
        <div class="col-md-9">
          <div class="table-responsive">
            <table class="table table-striped table-sm datatable">
              <thead>
                <tr>
                  <th>Hotel</th>
                  <th>Room No.</th>
                  <th>Room Type</th>
                </tr>
              </thead>
              <tbody>
                @foreach($datas as $data)
                <tr>
                  <td>{{$data->roomHotel->name}}</td>
                  <td>{{$data->room_no}}</td>
                  <td>{{$data->room_type}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </x-card-with-header>
    </div>
  </div>
</div>
@endsection
