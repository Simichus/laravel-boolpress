@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$post->title}}</h1>
    <h5>Categoria: {{$post->category->name}}</h5>
    <p>{{$post->content}}</p>
    
</div>
@endsection