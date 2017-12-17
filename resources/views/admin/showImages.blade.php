@extends('admin.layout.master')
@section('content')
	<div class="row">
  	<div class="col-md-12">
			<ul id="sortable-images">
				  <li class="ui-state-default">1</li>
				  <li class="ui-state-default">2</li>
				  <li class="ui-state-default">3</li>
				  <li class="ui-state-default">4</li>
				  <li class="ui-state-default">5</li>
				  <li class="ui-state-default">6</li>
				  <li class="ui-state-default">7</li>
				  <li class="ui-state-default">8</li>
				  <li class="ui-state-default">9</li>
				  <li class="ui-state-default">10</li>
				  <li class="ui-state-default">11</li>
				  <li class="ui-state-default">12</li>
				</ul>
		</div>

	</div>
@endsection

@section('scripts')
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	$( function() {
		$( "#sortable-images" ).sortable();
		$( "#sortable-images" ).disableSelection();
	});
	</script>
@endsection
