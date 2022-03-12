@if($col !== '')
  <div class=" @if(isset($col)) col-md-{{$col}} @endif mb-4">
    @endif
    <div class="form-group">
      <label for="{{$name}}">{{$label}}</label>
      <input type="{{$type}}" name="{{$name}}" class="form-control" id="{{$name}}" {{$attributes}} autocomplete="off">
    </div>
    @if($col !== '')
  </div>
@endif
