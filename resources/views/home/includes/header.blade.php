
<!-- da scrivere solo se si è in home -->
@if (Route::currentRouteName()=='home')
<div id="home">
@endif

<div id="wrapper">
	<div class="overlay"></div>
	<header>
		<nav class="navbar" id="sidebar-wrapper" role="navigation">
			<ul class="nav sidebar-nav navbar-nav">
				<li class="sidebar-brand"><a href="/"><img src="img/logo.png" title="Building Element" alt="Buiding Element"></a></li>
				<!-- esiste una maniera più pulita e modulare per gestire l'active? -->
				<li @if(Route::currentRouteName()=='home')class="active"@endif><a href='/'>@lang('nav.home')</a></li>
				<li @if(Route::currentRouteName()=='about')class="active"@endif><a href='/about'>@lang('nav.about')</a></li>
				<li @if(Route::currentRouteName()=='services')class="active"@endif><a href='/services'>@lang('nav.services')</a></li>
				<li @if(Route::currentRouteName()=='projects')class="active"@endif><a href='/projects'>@lang('nav.projects')</a></li>
				<li @if(Route::currentRouteName()=='contact')class="active"@endif><a href='/contact'>@lang('nav.contact')</a></li>
			</ul>
		</nav>
		<button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
			<span class="hamb-top"></span>
			<span class="hamb-middle"></span>
			<span class="hamb-bottom"></span>
		</button>
	</header>
