<div class="form-group">
  <label for="{{$name}}">{{$label}}</label>
  <select name="{{$name}}" class="form-control" id="{{$name}}" {{$attributes}}>
    <option value="">Select</option>
    {{$slot}}
  </select>
</div>
