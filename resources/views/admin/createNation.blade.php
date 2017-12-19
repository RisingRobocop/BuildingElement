

@extends('admin.layout.master')

@section('content')
<div class="row">
  <div class="col-md-12">
    <form class="" method="POST" action='{{url('admin/nations')}}' enctype="multipart/form-data">
      {{ csrf_field() }}
      <fieldset>
          <div class="form-group">
              <label>English name</label>
              <input class="form-control" name="name_en" type="text" placeholder="English name" required>
          </div>

          <div class="form-group">
              <label>Italian name</label>
              <input class="form-control" name="name_it" type="text" placeholder="Italian name" required>
          </div>

          <div class="form-group">
              <label>German name</label>
              <input class="form-control" name="name_de" type="text" placeholder="German name" required>
          </div>


              <button class="form-control" type="submit" class="pure-button pure-button-primary">Submit</button>

      </fieldset>
  </form>
  </div>

</div>
@endsection
