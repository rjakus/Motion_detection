@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Data from recording</div>
                <div class="panel-body">
				    <h1>Car {{ $vision->id }}</h1>
				    <ul>
				      <li>Make: {{ $vision->img_name }}</li>
				      <li>Model: {{ $vision->description }}</li>
				      <li>Produced on: {{ $vision->percentage }}</li>
				      <li>Produced on: {{ $vision->created_at }}</li>
				    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection