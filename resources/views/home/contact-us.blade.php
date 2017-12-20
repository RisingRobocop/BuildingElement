@extends('home.includes.master')
@section('content')
<div class="container m_top20 m_bot20 content">
	<div class="row m_top">
		<div class="col-sm-4 m_bot">
			<h4><b>BUILDING ELEMENT</b></h4>
			<div>Via Pian Scairolo, 11<br>CH - 6915 Pambio Noranco<br>Switzerland</div>
			<div>+41 91 980 38 84</div>
			<div class="m_top20"><span class="form_button" data-toggle="modal" data-target="#contactModal">SCRIVICI</span></div>
		</div>
		<div class="col-sm-6 col-sm-offset-1">
			<a href="https://www.google.it/maps/dir//Via+Pian+Scairolo+11,+6912+Pazzallo,+Svizzera/@45.9850928,8.9292078,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x47842da62d2a01c3:0xb2e087a3a67408b8!2m2!1d8.9313484!2d45.9849479" target="_blank" title="Building Element - Via Pian Scairolo, 11 - CH - 6915 Pambio Noranco - Switzerland"><img src="img/map.jpg"></a>
		</div>
	</div>
</div>

<div class="modal fade" id="contactModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="m_bot20">
					email: <a href="info@buildingelement.ch">info@buildingelement.ch</a>
				</div>
				<hr>

				<form action='{{url('mail')}}' method="post">
					{{ csrf_field() }}
					<div class="form-group m_bot20">
						<label for="name">NOME</label>
						<input type="text" id="contact_name" name="nome" required="required" class="form-control" />
					</div>
					<div class="form-group m_bot20">
						<label for="email">EMAIL</label>
						<input type="email" id="contact_email" name="email" required="required" class="form-control"  />
					</div>
					<div class="form-group m_bot20">
						<label for="subject">OGGETTO</label>
						<input type="text" id="contact_subject" name="oggetto" required="required" class="form-control" />
					</div>
					<div class="form-group m_bot20">
						<label for="message">MESSAGGIO</label>
						<textarea id="contact_message" name="messaggio" required="required" class="form-control m_top10" rows="5" ></textarea>
					</div>
					<button type="submit" class="form_button m_top20">INVIA</button>
				</form>

			</div>
		</div>
	</div>
</div>
@endsection
