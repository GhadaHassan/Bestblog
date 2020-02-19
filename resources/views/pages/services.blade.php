

@extends('layouts.master')
@section('title')
    <h1>{{$title}}</h1>
@endsection
@section('content')
    <ul class="list-group">
    @if(count($programming) > 0)
        @foreach ($programming as $programmings)
            
                <li class="list-group-item">{{$programmings}}</li>
            
        @endforeach
    @else 
        <h3>no data</h3>    
    @endif       
       
    
    </ul>
        
  
@endsection 