@extends('layouts.app')

@section('user-content')
<div class="d-flex justify-content-center">
<div class="d-flex">
	<div class="col-md-8">
		<div class="row">
			<div class="fs-3 d-flex">Booked Hotel</div>
			@foreach($hotels as $h)
			<div class="card p-4 mb-4">
				{{ $h->hotel }}
				<br>
				<div class="d-flex align-items-center">
					<i class="fas fa-map-marker-alt mx-1"></i> {{ $h->region }}
				</div>
				<div class="d-flex align-items-center">
					<i class="fas fa-calendar-week mx-1"></i> {{ $h->check_in }}
				</div>
                <div class="d-flex align-items-center">
					<a href="/myBook/{{ $h->id }}" class="btn btn-primary m-2"><i class="fas fa-search"></i></a>
                    <a href="/deleteBook/{{ $h->id }}" class="btn btn-danger m-2"><i class="fas fa-trash-alt"></i></a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection