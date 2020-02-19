@extends('layouts.master')
@section('title')
   
@endsection
@section('content')
        <h1>Post Num. {{$posts->id}}</h1>
        <hr>

        <div class="card mb-3" style="max-width: 40rem">
            <div class="card-header bg-dark text-white">
                Title: {{$posts->title}}
            </div>
            <div class="card-body">
                <div class="card-title">
                    <h4>{{$posts->title}}</h4>
                </div>
                <div class="card-text">
                    {{$posts->body}}
                </div>
                <hr>
                <a href="{{'/posts/'.$posts->id.'/edit'}}" class="btn btn-primary float-left mr-2">Edit</a>
                <form action="{{route('posts.destroy',['id' => $posts->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button></form>
            </div>
        </div>
        
    
   
    
@endsection