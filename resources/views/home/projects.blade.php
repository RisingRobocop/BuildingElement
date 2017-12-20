@extends('home.includes.master')
@section('content')
<div class="container-fluid m_top20 m_bot20 content" id="projects">
	<div class="row">

		@foreach ($nazioni as $nazione)
			<div class="col-sm-3 col-xs-6">
				<div class="project" data-nation="{{$nazione->id}}">
					<a href="{{url('storage/uploads/'.$nazione->sfondo)}}" class="html5lightbox" data-group="{{$nazione->$nome}}">
						<img src="{{url('storage/uploads/'.$nazione->sfondo)}}" alt="{{$nazione->nome_en}}" title="{{$nazione->$nome}}">
						<div class="pr_overlay">
							<div class="map" style="background-image: url('{{url('storage/uploads/'.$nazione->mappa)}}')"></div>
							<div class="title">{{$nazione->$nome}}</div>
						</div>
					</a>
					@php
						$immagini=$nazione->immagini->sortBy('ordine');
					@endphp
					@foreach ($immagini as $immagine)
						@if ($immagine->indirizzo!=$nazione->mappa)
							<a href="{{url('storage/uploads/'.$immagine->indirizzo)}}" class="html5lightbox" data-group="{{$nazione->$nome}}"></a>
						@endif
					@endforeach
				</div>
			</div>
		@endforeach
	</div>
</div>
@endsection
