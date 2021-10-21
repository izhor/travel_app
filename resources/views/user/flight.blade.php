@extends('layouts.app')

@section('user-content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="fw-bold fs-5 my-2 mx-2">Add New Flight</div>
				<form action="/getFlight" method="post">
                @csrf
                <div class="card-body">
                   
					<div class="mb-3 row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Starting Point</label>
						<div class="col-sm-10">
                            <select class="form-select"  name="start">
                                <option value="Jakarta">Jakarta</option>
                                <option value="Bandung">Bandung</option>
                                <option value="Magelang">Magelang</option>
                                <option value="Surabaya">Surabaya</option>
                            </select>
						</div>
					</div>
                    <div class="mb-3 row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Destination</label>
						<div class="col-sm-10">
                            <select class="form-select" name="destination">
                                <option value="Jakarta">Jakarta</option>
                                <option value="Bandung">Bandung</option>
                                <option value="Magelang">Magelang</option>
                                <option value="Surabaya">Surabaya</option>
                            </select>
						</div>
					</div>
                    <div class="mb-3 row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Depart</label>
						<div class="col-sm-10">
                            <input type="date" class="form-control" name="depart">
						</div>
					</div>
                    <div class="mb-3 row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Return</label>
						<div class="col-sm-10">
                            <input type="date" class="form-control" name="return">
						</div>
					</div>
					<div class="mb-3 col-4 justify-content-center">
						<button type="submit" class="btn btn-primary"> <i class="fas fa-plus"></i> Add Flight</button>
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