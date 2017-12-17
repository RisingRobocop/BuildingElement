@extends('admin.layout.master') @section('content')
<div class="row">
	<div class="col-md-11">
		<ul id='sortable' class="list-group">
			@foreach ($nazioni as $nazione)
				<li class="list-group-item"><div class="textbox"> <p>{{$nazione->nome_it}}</p> <p>{{$nazione->nome_en}}</p> <p>{{$nazione->nome_de}}</p> </div></li>
			@endforeach
		</ul>
	</div>
	<div class="col-md-1">
		<a href='{{url('admin/nations/create')}}'><button class="btn btn-primary"> Add nation</button></a>
	</div>
</div>
@endsection

@section('scripts')
	<script>
$( function() {
	$( "#sortable" ).sortable();
	$( "#sortable" ).disableSelection();
} );
</script>
@endsection
