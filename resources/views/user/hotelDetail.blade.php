@extends('layouts.app')

@section('user-content')
<div class="d-flex justify-content-center">
<div class="d-flex">
	<div class="col-md-8">
		<div class="row">
			<div class="fs-3">Booked Hotel</div>
			@foreach($hotels as $h)
			<div class="card p-4 mb-4">
				{{$h->hotel }}
				<br>
				<div class="">
				    <div class="d-flex align-items-center">
                        <i class="fas fa-map-marker-alt m-2"></i> {{$h->region}}
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-calendar m-2"></i> {{$h->check_in}} - {{$h->stays}} day(s) 
                    </div>
					
				</div>
                code
                    <br>
                    <img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl={{$h->code}}%20world&choe=UTF-8">
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection