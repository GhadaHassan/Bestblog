
@extends('layouts.master')
@section('title')
   
@endsection
@section('content')
   <div class="row">
       <div class="col-md-9">
            <h1>Create Post</h1>
            <hr>
       </div>
   </div>
   <form action="/posts" method="POST">
    @csrf
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" class="form-control" id="title" name="title" >
        </div>
        <div class="form-group">
          <label for="body">Body</label>
          <textarea name="body" id="body" cols="30" rows="4" class="form-control"></textarea>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
@endsection