@extends('admin.layout.master') @section('content')
<div class="row">
	<div class="col-md-3">
		<a href='{{url('admin/nations/create')}}'><button  class="custom btn btn-primary"> Add nation</button></a>
		<button  id='set-order' type="button" class='custom btn btn-primary' name="button">set order</button>
	</div>
</div>
<div class="col-md-1-12">
  <span class="label label-info">Double click to edit a nation</span>
</div>





<div class="row">
	<div class="col-md-12">
		<ul id='sortable' class="list-group">
			@foreach ($nazioni as $nazione)
				<li id='item-{{$nazione->id}}' class="list-group-item"><div class="textbox"> <p>{{$nazione->nome_it}}</p> <p>{{$nazione->nome_en}}</p> <p>{{$nazione->nome_de}}</p> </div></li>
			@endforeach
		</ul>
	</div>
</div>
@endsection

@section('scripts')
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>

	$( function() {
			var data;
			var url='{{url('admin/nations/sort')}}';
			var list=$( "#sortable" ).sortable();

			$( "#set-order" ).on( "click", function()
			{
				data=$( "#sortable" ).sortable('serialize');
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
		  	window.location.replace('{{url('admin/nations')}}/'+$(this).attr('id').substring(5,1000));
		});
	});

	</script>



@endsection
