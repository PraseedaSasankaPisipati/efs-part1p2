@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
<br>

                <div class="panel-body">
				
                   <font size="5"> Welcome to Eagle Financial Services.<a href="{{ url('/customers') }}">click here</a></font>
					<img src= "./images/eagle_PNG1227.png" height="700" width="800"> 
                </div>
				
            </div>
        </div>
    </div>
</div>
@endsection
