@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-md-3">
      <x-card-with-header header='Add Driver'>
        <hr class="dotted">
        <form class="" action="{{route('driver.store')}}" method="post">
          @csrf
          <x-form-input type="text" name="name" label="Name *" required/>
          <x-form-input type="text" name="contact" label="Contact *" required/>
          <x-form-input type="text" name="department" label="Department *" required/>
          <x-form-select name="vehicle_id" label="Vehicle">
            @foreach($vehicles as $item)
            <option value="{{$item->id}}">{{$item->licence_number}}</option>
            @endforeach
          </x-form-select>
          <button type="submit" class="btn btn-primary btn-sm mt-4">Submit</button>
        </form>
      </x-card-with-header>
    </div>
    <div class="col-md-9">
      <x-card-with-header header="Drivers">
        <div class="col-md-9">
          <div class="table-responsive">
            <table class="table table-striped table-sm datatable">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Contact</th>
                  <th>Department</th>
                  <th>Vehicle Type</th>
                  <th>Vehicle No.</th>
                </tr>
              </thead>
              <tbody>
                @foreach($datas as $data)
                <tr>
                  <td>{{$data->name}}</td>
                  <td>{{$data->contact}}</td>
                  <td>{{$data->department}}</td>
                  <td>{{$data->driverVehicle->type}}</td>
                  <td>{{$data->driverVehicle->licence_number}}</td>
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
