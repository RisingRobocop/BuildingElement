@extends('admin.layout.master')
@section('content')
<div class="">
  <form class="pure-form pure-form-aligned" method="POST" action="/nations" enctype="multipart/form-data">
    {{ csrf_field() }}
    <fieldset>
        <div class="pure-control-group">
            <label>English name</label>
            <input name="nome_en" type="text" placeholder="English name" required>
        </div>

        <div class="pure-control-group">
            <label>Italian name</label>
            <input name="nome_it" type="text" placeholder="Italian name" required>
        </div>

        <div class="pure-control-group">
            <label>German name</label>
            <input name="nome_de" type="text" placeholder="German name" required>
        </div>

        <div class="pure-control-group">
            <label >Background image</label>
            <input type="file" name="sfondo" value="">
        </div>

        <div class="pure-control-group">
            <label >Map image</label>
            <input type="file" name="mappa" value="">
        </div>

        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Submit</button>
        </div>
    </fieldset>
</form>
</div>
@endsection
