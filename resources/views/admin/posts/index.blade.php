@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Pubblicato il</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
            <tr>
              <td>{{$post->title}}</td>
              <td>{{$post->created_at}}</td>
              <td><a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-outline-primary">Vai</a></td>
            </tr>
                
            @empty
                <tr><td colspan="3">Nessun post trovato</td></tr>
            @endforelse
        </tbody>
      </table>
    
</div>
@endsection