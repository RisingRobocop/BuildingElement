<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-9">
				&copy; Building Element - Via Pian Scairolo 11, CH - 6915 Pambio Noranco - Switzerland . designed by <a href="http://www.asborsoniww.com" target="_blank">ASborsoniWorldWide</a>
			</div>
			<div class="col-sm-3 text-right">
				<form class="" action="setLocale" method="post">
					{{ csrf_field() }}
					<input id="submit" type="submit" name="locale" value="EN">|
					<input id="submit" type="submit" name="locale" value="IT">|
					<input id="submit" type="submit" name="locale" value="DE">|
				</form>

			</div>
		</div>
	</div>
</footer>
</div><!-- chiusura div id wrapper -->
@if (Route::currentRouteName()=='home')
</div>
@endif
<!-- chiusura div id home, da scrivere solo se si è in home -->
