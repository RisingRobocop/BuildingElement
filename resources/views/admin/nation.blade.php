@extends('admin.layout.master')

@section('content')

  <div class="row">
    <div class="col-md-4">
      <form  method="POST" action='{{url('admin/nations/')}}'>
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
        <div class="form-group">
          <input class="btn btn-primary" type="button" value="edit">
        </div>

      </form>
    </div>
    <div class="col-md-2">
      <img src="http://via.placeholder.com/150x150" class="img-thumbnail">

    </div>
    <div class="col-md-2">
      <img src="http://via.placeholder.com/150x150" class="img-thumbnail">

    </div>

  </div>
  <hr>
  <div class="row">
    <div class="col-md-12">
          <ul id="sortable-images">
              <li id="item-1"><img src="http://via.placeholder.com/150x150" class="img-thumbnail"></li>
              <li id="item-2"><img src="http://via.placeholder.com/150x150" class="img-thumbnail"></li>
              <li id="item-3"><img src="http://via.placeholder.com/150x150" class="img-thumbnail"></li>
              <li class="ui-widget-content"><img src="http://via.placeholder.com/150x150" class="img-thumbnail"></li>
              <li class="ui-widget-content"><img src="http://via.placeholder.com/150x150" class="img-thumbnail"></li>
              <li class="ui-widget-content"><img src="http://via.placeholder.com/150x150" class="img-thumbnail"></li>
              <li class="ui-widget-content"><img src="http://via.placeholder.com/150x150" class="img-thumbnail"></li>
              <li class="ui-widget-content"><img src="http://via.placeholder.com/150x150" class="img-thumbnail"></li>
            </ul>
    </div>
  </div>
@endsection

@section('popups')
  <div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Edit image</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
          <form class="" action="index.html" method="post">
            {{ csrf_field() }}
          <input id='hidden' type="hidden" name="id" value="">
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">
                Backgroud
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value="">
                  Map
                </label>
              </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-danger" value="Delete image">
        <input type="submit" class="btn btn-primary" value="Save changes">
      </div>
      </form>
    </div>
  </div>
</div>
@endsection



@section('scripts')
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
      var data;
      var url='{{url('admin/nations/sort')}}';
      var list=$( "#sortable-images" ).sortable();

      $( "#set-order" ).on( "click", function()
      {
        data=$( "#sortable-images" ).sortable('serialize');
        $.ajax({
            data: data,
            type: 'post',
            url: url,
            beforeSend: function (xhr)
              {
                var token = $('meta[name="csrf_token"]').attr('content');
                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                  }
              },
            success: function(data)
              {
                console.log(data);
                window.location.replace('{{url('admin/nations')}}');
              }
            })
            .done(function( ) {
                })
            .fail(function()  {
                console.log(url);
                alert("Sorry. Server unavailable. ");
              });
            });

      $( "li" ).dblclick(function() {
          $('.modal').modal('show');
          $('.modal #hidden').attr('value', $(this).attr('id').substring(5,1000));
    });
  });
	</script>
@endsection
