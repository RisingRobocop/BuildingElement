@extends('admin.layout.master')

@section('content')
  <form class="form-inline" method="POST" action='{{url('admin/nations/')}}'>
    {{ csrf_field() }}
    <div class="form-group">
      <div class="text-muted">EN name</div>
      <input type="text" class="form-control mx-sm-3" name="name_en">
    </div>
    <div class="form-group">
      <div class="text-muted">IT name</div>
      <input type="text" class="form-control mx-sm-3" name="name_en">
    </div>
    <div class="form-group">
      <div class="text-muted">DE name</div>
      <input type="text" class="form-control mx-sm-3" name="name_en">
    </div>

  </form>
@endsection
