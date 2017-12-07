@extends('home.includes.master')
@section('content')
<div class="container-fluid m_top20 m_bot20 content" id="projects">
	<div class="row">
		<div class="col-sm-3 col-xs-6">
			<div class="project" data-nation="1">
				<a href="uploads/ch_1.jpg" class="html5lightbox" data-group="svizzera">
					<img src="uploads/svizzera_copertina.jpg" alt="Svizzera" title="Svizzera">
					<div class="pr_overlay">
						<div class="map" style="background-image: url('uploads/svizzera_mappa.png')"></div>
						<div class="title">Svizzera</div>
					</div>
				</a>
				<a href="uploads/ch_2.jpg" class="html5lightbox" data-group="svizzera"></a>
				<a href="uploads/ch_3.jpg" class="html5lightbox" data-group="svizzera"></a>
				<a href="uploads/ch_4.jpg" class="html5lightbox" data-group="svizzera"></a>
			</div>
		</div>
		<div class="col-sm-3 col-xs-6">
			<div class="project" data-nation="3">
				<a href="uploads/ru_1.jpg" class="html5lightbox" data-group="russia">
					<img src="uploads/russia_copertina.jpg" alt="Russia" title="Russia">
					<div class="pr_overlay">
						<div class="map" style="background-image: url('uploads/russia_mappa.png')"></div>
						<div class="title">Russia</div>
					</div>
				</a>
				<a href="uploads/ru_2.jpg" class="html5lightbox" data-group="russia"></a>
				<a href="uploads/ru_3.jpg" class="html5lightbox" data-group="russia"></a>
				<a href="uploads/ru_4.jpg" class="html5lightbox" data-group="russia"></a>
			</div>
		</div>
	</div>
</div>
@endsection
