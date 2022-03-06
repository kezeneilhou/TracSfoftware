@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-md-3">
      <x-card-with-header header='Add Vehicle'>
        <hr class="dotted">
        <form class="" action="{{route('vehicles.store')}}" method="post">
          @csrf
          <x-form-input type="text" name="type" label="Vehicle Type *" required/>
          <x-form-input type="text" name="licence_number" label="License No. *" required/>
          <x-form-input type="text" name="department" label="Department *" required/>
          <button type="submit" class="btn btn-primary btn-sm mt-4">Submit</button>
        </form>
      </x-card-with-header>
    </div>
    <div class="col-md-9">
      <x-card-with-header header="Vehicles">
        <div class="col-md-9">
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Vehicle Type</th>
                  <th>Licence Number</th>
                  <th>Department</th>
                </tr>
              </thead>
              <tbody>
                @foreach($datas as $data)
                <tr>
                  <td>{{$data->type}}</td>
                  <td>{{$data->licence_number}}</td>
                  <td>{{$data->department}}</td>
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
