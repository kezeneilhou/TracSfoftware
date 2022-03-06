@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-md-3">
      <x-card-with-header header='Add Hotel'>
        <hr class="dotted">
        <form class="" action="{{route('hotels.store')}}" method="post">
          @csrf
          <x-form-input type="text" name="name" label="Hotel name *" required/>
          <x-form-input type="text" name="contact" label="Hotel Contact *" required/>
          <x-form-select name="liason_id" label="Liason Officer">
            @foreach($liason as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
          </x-form-select>
          <button type="submit" class="btn btn-primary btn-sm mt-4">Submit</button>
        </form>
      </x-card-with-header>
    </div>
    <div class="col-md-9">
      <x-card-with-header header="Hotels">
        <div class="col-md-9">
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Hotel Name</th>
                  <th>Hotel Contact</th>
                  <th>Hotel Liason</th>
                </tr>
              </thead>
              <tbody>
                @foreach($datas as $data)
                <tr>
                  <td>{{$data->name}}</td>
                  <td>{{$data->contact}}</td>
                  <td>{{$data->liason_id}}</td>
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
