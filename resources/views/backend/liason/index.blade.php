@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-md-3">
      <x-card-with-header header='Add Liason Officer'>
        <hr class="dotted">
        <form class="" action="{{route('liasonOfficer.store')}}" method="post">
          @csrf
          <x-form-input type="text" name="name" label="Officer name *" required/>
          <x-form-input type="text" name="contact" label="Officer Contact *" required/>
          <x-form-input type="text" name="department" label="Department *" required/>
          <button type="submit" class="btn btn-primary btn-sm mt-4">Submit</button>
        </form>
      </x-card-with-header>
    </div>
    <div class="col-md-9">
      <x-card-with-header header="Liason Officers">
        <div class="col-md-9">
          <div class="table-responsive">
            <table class="table table-striped table-sm datatable">
              <thead>
                <tr>
                  <th>Officer Name</th>
                  <th>Officer Contact</th>
                  <th>Officer Department</th>
                </tr>
              </thead>
              <tbody>
                @foreach($datas as $data)
                <tr>
                  <td>{{$data->name}}</td>
                  <td>{{$data->contact}}</td>
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
