@extends('home.includes.master')
@section('content')
    <div class="container content">
        <div class="row">
            <div class="col-sm-7">
                <img src="img/services/services_01.jpg">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-6 text-right m_bot">
            	<p id="services_1">______</p>
                <p>@lang('services.caption-1')</p>
            </div>
        </div>

        <div class="row m_top">
        	<div class="col-sm-8 m_bot text-right">
        		<div style="padding:40px 40px 30px;border:1px solid #2e2d30;position:relative;z-index:1;">
        			@lang('services.caption-2')
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-7 col-sm-offset-5">
                <img id="services_4" src="img/services/services_04.jpg">
            </div>
        </div>

        <div class="row m_top">
            <div class="col-sm-6">
                <img src="img/services/services_02.jpg">
            </div>
            <div class="col-sm-6">
                <p>______</p>
                @lang('services.caption-3')
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div style="position: relative;z-index: 1">
                    <p id="services_2">@lang('services.caption-4')</p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 col-sm-6">
                <div style="margin-top:60px;">
                    <p>______</p>
                    <p class="m_top20">@lang('services.caption-5')</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-offset-2" id="services_3">
                <img src="img/services/services_03.jpg" style="position: relative;z-index:0">
            </div>
        </div>

        <div class="row m_top">
            <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 m_top text-center">
                <p>@lang('services.caption-6')</p>
            </div>
        </div>
        <div class="row m_top bottom">
            <div class="col-md-2 m_top20">
                <h3 class="archi">@lang('services.caption-7')
            </div>
            <div class="col-md-2 m_top20">
                <h3>@lang('services.caption-8')
            </div>
            <div class="col-md-2 m_top20">
                <h3>@lang('services.caption-9')
            </div>
            <div class="col-md-2 m_top20">
                <h3>@lang('services.caption-10')
            </div>
            <div class="col-md-2 m_top20">
                <h3>@lang('services.caption-11')
            </div>
        </div>
    </div>
@endsection
