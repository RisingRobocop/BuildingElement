@extends('admin.layout.master')

@section('content')

  <div class="row">
    <div class="col-md-4">
      <form  method="post" action='{{url('admin/nations/'.$nazione->id)}}'>
        {{ csrf_field() }}
        <div class="form-group">
          <div class="text-muted">EN name</div>
          <input type="text" class="form-control mx-sm-3" name="name_en" value="{{$nazione->nome_en}}">
        </div>
        <div class="form-group">
          <div class="text-muted">IT name</div>
          <input type="text" class="form-control mx-sm-3" name="name_it" value="{{$nazione->nome_it}}">
        </div>
        <div class="form-group">
          <div class="text-muted">DE name</div>
          <input type="text" class="form-control mx-sm-3" name="name_de" value="{{$nazione->nome_de}}">
        </div>
        <div class="form-group">
          <input type="submit" name="edit" value="edit" class="btn btn-primary">
          <input type="submit" name="delete" value='delete' class="btn btn-danger">
        </div>
      </form>
    </div>
    <div class="col-md-2">
      <div class="text-muted">Background</div>
      @if ($nazione->sfondo==null)
        <img class="img-thumbnail" src="http://via.placeholder.com/800x800" class="img-thumbnail">
      @else
        <img class="img-thumbnail"  src="{{url('storage/uploads/'.$nazione->sfondo)}}">
      @endif

    </div>
    <div class="col-md-2">
      <div class="text-muted">Map</div>
      @if ($nazione->mappa==null)
        <img class="img-thumbnail" src="http://via.placeholder.com/800x800" class="img-thumbnail">
      @else
        <img class="img-thumbnail"  src="{{url('storage/uploads/'.$nazione->mappa)}}">
      @endif
    </div>

  </div>
  <hr>
    <div class="row">
        <form enctype="multipart/form-data" class="col-md-12 form-inline" method="post" action='{{url('/admin/nations/'.$nazione->id.'/images')}}'>
          {{ csrf_field() }}
          <div class="form-group mx-sm-3">
            <input type="file" name="image">
          </div>
          <button type="submit" class="btn btn-primary">Add image</button>
          <button id="set-order" class="btn btn-primary" type="button" name="button">set order</button>
        </form>


    </div>
    <hr>
    <div class="row">
      <div class="col-md-12">
        <span class="label label-info">Double click to delete an image or set it as background</span>
        <span class="label label-info">Sort images by dragging then press set order</span>
      </div>
    </div>



  <div class="row">
    <div class="col-md-12">
          <ul id="sortable-images">
              @foreach ($immagini as $immagine)
                <li id={{'item-'.$immagine->id}}> <img class="img-thumbnail" src="{{url('storage/uploads/'.$immagine->indirizzo)}}" alt=""> </li>
              @endforeach
          </ul>
    </div>
  </div>
@endsection

@section('popups')
  <div class="modal" tabindex="-1" role="dialog">
  <form class="" action='{{url('admin/nations/'.$nazione->id)}}' method="post">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Edit image </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
          {{ csrf_field() }}
          <input id='hidden' type="hidden" name="image-id" value="">
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name='background' value="background">
                Backgroud
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name='map' value="map">
                  Map
                </label>
              </div>
            </div>
      <div class="modal-footer">
        <button type="button" id='delete-img' class="btn btn-danger" name="button">delete</button>
        <input type="submit" class="btn btn-primary"name='save' value="Save changes">
      </div>
      </div>
    </div>
  </form>
</div>
@endsection



@section('scripts')
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
      var data;
      var url='{{url('admin/images/sort')}}';
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
                window.location.replace('{{url('admin/nations/'.$nazione->id)}}');
              }
            })
            .done(function( ) {
                })
            .fail(function()  {
                console.log(url);
                alert("Sorry. Server unavailable. ");
              });
            });
      var image_id;
      $( "li" ).dblclick(function() {
          $('.modal').modal('show');
          $('.modal #hidden').attr('value', $(this).attr('id').substring(5,1000));
          $('.modal .modal-title').html('image:'+$(this).attr('id').substring(5,1000));
          image_id=$(this).attr('id').substring(5,1000);
    });
    $('#delete-img').on('click', function()
    {
      $.ajax({
          data:{
                  id: image_id
              },
          type: 'post',
          url: '{{url('admin/images')}}'+'/'+image_id+'/delete',
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
              location.reload();
            }
          })
          .done(function( ) {
              })
          .fail(function()  {
              console.log(url);
              alert("Sorry. Server unavailable. ");
            });
    });
  });
	</script>
  <script>
      $( function() {

      });
  </script>

@endsection
