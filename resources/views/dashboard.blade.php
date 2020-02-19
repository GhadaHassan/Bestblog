@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Action 1</th>
                                <th scope="col">Action 2</th>
                            </tr>
                        </thead>
                    @if(count($posts) > 0)
                    @foreach ($posts as $post)
                    
                    <tbody>
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <th>{{$post->title}}</th>
                            <th><a href="/posts" class="btn btn-dark">Show All Posts</a></th>
                            <th><a href="{{'/posts/'.$post->id}}" class="btn btn-dark">Show Post</a></th>
                        </tr>
                    </tbody>
                    @endforeach
                    @endif
                    
                        
                    </table>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
