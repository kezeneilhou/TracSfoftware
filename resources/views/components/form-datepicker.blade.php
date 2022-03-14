<div class="col-md-{{$col}}">
  <div class="form-group">
    <label class="control-label" for="{{$name}}">{{$label}}</label>
      <div class="input-group">
        <span class="input-group-prepend">
          <span class="input-group-text">
            <i class="fas fa-calendar-alt"></i>
          </span>
        </span>
        <input style="background:#fff" type="text" class="form-control datepicker" name="{{$name}}" id="{{$name}}" {{$attributes}} readonly>
      </div>
  </div>
</div>

<script>
  $( function() {
    $( ".datepicker" ).datepicker({
      dateFormat: 'dd-mm-yy',
      yearRange: '1940:2030',
      changeYear: true,
      changeMonth: true,
    });
  } );
 </script>
