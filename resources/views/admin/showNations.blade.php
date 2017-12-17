@extends('admin.layout.master') @section('content')
<div class="row">
	<div class="col-md-11">
		<ul id='sortable' class="list-group">
			<li class="list-group-item"><div class="textbox"> <p>1/10</p> <p>02:27</p> <p>100%</p> </div></li>
			<li class="list-group-item">Dapibus ac facilisis in</li>
			<li class="list-group-item">Morbi leo risus</li>
			<li class="list-group-item">Porta ac consectetur ac</li>
			<li class="list-group-item">Vestibulum at eros</li>
		</ul>
	</div>
	<div class="col-md-1">
		<a href="nations/create"><button class="btn btn-primary"> Add nation</button></a>
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
