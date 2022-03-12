@if($col !== '')
  <div class=" @if(isset($col)) col-md-{{$col}} @endif mb-4">
    @endif
    <div class="form-group">
      <label for="{{$name}}">{{$label}}</label>
      <select name="{{$name}}" class="form-control" id="{{$name}}" {{$attributes}}>
        <option value="" selected>Select --</option>
        {{$slot}}
      </select>
    </div>
    @if($col !== '')
  </div>
@endif
