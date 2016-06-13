@extends('layouts.app')

@section('content')
<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">
        <div class="page-content-inner">
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Live camera</h3>
                </div>
            </div>
            <!-- /page header -->

            <!-- Page tabs -->
            <div class="tabbable page-tabs centered">
                <div class="tab-content centered">
                    <div class="panel-body center-block">
                        @if ($exists)
				<img class="img-responsive center-block" src="{{ url('/webcam') }}">
                        @else
				<h1><span class='center-block'>Can't get stream connection!<span></h1>
			@endif
			<!-- <img id="liveCam" src="{{URL::asset('/images/motion/index.jpg')}}"> -->
                    </div>
                </div>
            </div>
            <!-- /page tabs -->
        </div>

    </div>
    <!-- /page content -->
</div>
<!-- /page container -->
@endsection
