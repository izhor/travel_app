@extends('layouts.app')
@section('user-content')
<div class="px-5">
    <div class="row justify-content-center">
        @foreach($postId as $pi)
        <div class="col-md-10 mb-5">
            <div class="card">
                <div class="card-header">
                    <div class="fw-bold"> {{$pi['title']}}  </div>
                </div>

                <div class="card-body">
                    {{$pi['body']}}
                  
                </div>
            </div>
        </div>
        @endforeach
   
       
   <div class="col-md-8">
   <div class="fs-3">Comments</div>
   <table class="table">
    @foreach($id as $comment)
    <tr>
        <td>
            <div class="d-flex align-items-center">
                <i class="fas fa-user-circle fa-2x mx-2"></i> 
                <div class="tag">
                    {{$comment['name']}}
                    <br>
                    <div class="fw-lighter"> {{$comment['email']}} </div>
                </div>
            </div>
            <div class="comment p-2">
                {{$comment['body']}}
            </div>
        </td>
    </tr>
    @endforeach
    </table>
   </div>
   

    </div>
</div>
@endsection