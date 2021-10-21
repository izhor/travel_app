@extends('layouts.app')
@section('user-content')
<div class="px-5">
    <div class="row justify-content-center">
        @foreach($id as $ip)
        <div class="col-md-8 mb-5">
            <div class="card">
                <div class="card-header">
                    <div class="fw-bold"> {{$ip['title']}}  </div>
                </div>

                <div class="card-body">
                    {{$ip['body']}}
                  
                </div>
                <div class="card-footer">
                    <div class="mt-2">
                        <a href="/comments/{{$ip['id']}}" class="d-flex fs-4 link-dark text-decoration-none"><i class="fas fa-comment mx-2"></i> <div class="fs-6"> Comments</div> </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection