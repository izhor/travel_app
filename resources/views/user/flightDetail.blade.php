@extends('layouts.app')

@section('user-content')
<div class="d-flex justify-content-center">
<div class="d-flex">
	<div class="col-md-8">
		<div class="row">
			<div class="fs-3">Booked Flights</div>
			@foreach($flights as $f)
			<div class="card p-4 mb-4">
				{{ $f->starting_point }} -  {{ $f->destination }}
				<br>
				<div class="">
					<div class="d-flex align-items-center">
						<i class="fas fa-plane-departure mx-1"></i> {{ $f->depart }}
					</div>
					<div class="d-flex align-items-center">
						<i class="fas fa-calendar-week mx-1"></i> {{ $f->return }}
					</div>
                    code
                    <br>
                    <img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl={{$f->code}}%20world&choe=UTF-8">
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection