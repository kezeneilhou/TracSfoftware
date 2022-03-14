@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-md-12">
    <button class="btn btn-primary btn-sm mb-3" id="add_btn">Add Participant</button>
      <x-card-with-header header='Add Participant' display="d-none add-participant">
        <hr class="dotted">
        <form action="{{route('applicants.store')}}" method="post">
          @csrf
          <div class="row form-group">
            <x-form-input type="text" name="name" label="Name *" col="4" required/>
            <x-form-input type="text" name="phone" label="Contact No. *" col="4"/>
            <x-form-input type="email" name="email" label="Email *" col="4"/>
            <x-form-input type="text" name="designation" label="Designation *" col="4"/>
            <x-form-input type="text" name="country" label="Country *" col="4"/>
            <x-form-datepicker type="text" name="arrival_date" label="Arrival date *" col="4"/>
            <x-form-datepicker type="text" name="departure_date" label="Departure date *" col="4"/>
            <x-form-select name="liason_id" label="Liason Officer" col="4">
              @foreach($liason as $item)
              <option value="{{$item->id}}">{{$item->name}}</option>
              @endforeach
            </x-form-select>
            <x-form-select name="driver_id" label="Driver" col="4">
              @foreach($drivers as $item)
              <option value="{{$item->id}}">{{$item->name}}</option>
              @endforeach
            </x-form-select>

          </div>
          @livewire('hotel-rooms')
          <button type="submit" class="btn btn-primary btn-sm mt-4">Submit</button>
        </form>
      </x-card-with-header>
    </div>
    <div class="col-md-9">
      <x-card-with-header header="Participants">
        <div class="col-md-9">
          <div class="table-responsive">
            <table class="table table-striped table-sm datatable">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Contact</th>
                  <th>Email</th>
                  <th>Designation</th>
                  <th>Country</th>
                  <th>Liason Officer</th>
                  <th>Hotel</th>
                  <th>Room No.</th>
                  <th>Driver</th>
                  <th>Arrival Date</th>
                  <th>Departure Date</th>
                </tr>
              </thead>
              <tbody>
                @foreach($datas as $data)
                <tr>
                  <td>{{$data->name}}</td>
                  <td>{{$data->phone}}</td>
                  <td>{{$data->email}}</td>
                  <td>{{$data->designation}}</td>
                  <td>{{$data->country}}</td>
                  <td>{{$data->liason_id}}</td>
                  <td>{{$data->hotel_id}}</td>
                  <td>{{$data->room_id}}</td>
                  <td>{{$data->driver_id}}</td>
                  <td>{{$data->arrival_date}}</td>
                  <td>{{$data->departure_date}}</td>
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
<script type="text/javascript">
  $('#add_btn').click(function(){
    console.log('dsfdfsf');
    $('.add-participant').toggleClass('d-none');
  });
</script>
@endsection
