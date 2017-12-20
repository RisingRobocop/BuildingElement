@extends('home.includes.master')
@section('content')
	<div class="visible-xs visible-sm" id="home_shadow"></div>

	<div class="carousel slide" data-ride="carousel" id="home_car">
		<div class="carousel-inner" role="listbox">

			<div class="item active" id="item_01">
				<div class="inner_slide" style="background-image: url('img/home/01.jpg');"></div>
				<div class="caption">@lang('home.caption-1')</div>
			</div>


			<div class="item" id="item_03">
				<video id="video_03" poster="" playsinline muted><source src="img/home/03.mp4" type="video/mp4"></video>
				<div class="caption">@lang('home.caption-2')</div>
			</div>


			<div class="item" id="item_02">
				<div class="inner_slide" style="background-image: url('img/home/02.jpg');transform: scale(1.05,1.05);"></div>
				<div class="caption">@lang('home.caption-3')</div>
			</div>


			<div class="item" id="item_04">
				<div class="inner_slide" style="background-image: url('img/home/04.jpg');transform: scale(1.05,1.05);"></div>
				<div class="caption">@lang('home.caption-4')</div>
			</div>

			<div class="item" id="item_05">
				<video id="video_05" poster="" playsinline muted><source src="img/home/05.mp4" type="video/mp4"></video>
				<div class="caption">@lang('home.caption-5')</div>
			</div>
		</div>
	</div>
	@endsection
