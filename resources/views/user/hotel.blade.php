@extends('layouts.app')

@section('user-content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="fw-bold fs-5 my-2 mx-2">Book A Hotel</div>
				<form action="/getHotel" method="post">
                @csrf
                <div class="card-body">
                   
					<div class="mb-3 row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Select Region</label>
						<div class="col-sm-10">
                            <select class="form-select"  name="region">
                                <option value="Jakarta">Jakarta</option>
                                <option value="Bandung">Bandung</option>
                                <option value="Magelang">Magelang</option>
                                <option value="Surabaya">Surabaya</option>
                            </select>
						</div>
					</div>
                    <div class="mb-3 row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Select Hotel</label>
						<div class="col-sm-10">
                            <select class="form-select" name="hotel">
                                <option value="101 Hotel">101 Hotel</option>
                                <option value="Aston Hotel">Aston Hotel</option>
                                <option value="Grand Park">Grand Park</option>
                                <option value="Deluxe Platinum">Deluxe Platinum</option>
                            </select>
						</div>
					</div>
                    <div class="mb-3 row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Check in</label>
						<div class="col-sm-10">
                            <input type="date" class="form-control" name="check_in">
						</div>
					</div>
                    <div class="mb-3 row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Stays(days)</label>
						<div class="col-sm-10">
                            <input type="number" class="form-control" name="stay">
						</div>
					</div>
					<div class="mb-3 col-4 justify-content-center">
						<button type="submit" class="btn btn-primary"> <i class="fas fa-plus"></i> Add Book</button>
					</div>
				</div>
                </form>
			</div>
            @if(Session::has('success_add'))
						<div class="col-6 m-4">
							<div class="alert alert-success" role="alert">
								{{ Session::get('success_add') }}
							</div>
						</div>
						@endif
		</div>
	</div>
</div>
@endsection