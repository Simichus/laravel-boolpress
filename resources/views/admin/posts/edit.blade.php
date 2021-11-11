@extends('layouts.app')

@section('content')

<section id="edit-post" class="container">
    <form action="{{route('admin.posts.update', $post->id)}}" method="post">
     @csrf
     @method('PATCH')
      <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
        <small id="emailHelp" class="form-text text-muted">Inserire titolo</small>
      </div>
      <div class="form-group">
        <label for="category_id">Seleziona categoria</label>
        <select class="form-control" id="category_id" name="category_id">
          <option>Nessuna categoria</option>
          @foreach($categories as $category)
          <option value="{{$category->id}}" @if($category->id == $post->category_id) selected @endif>{{$category->name}}</option>
          @endforeach
        </select>
        <div class="form-group mt-4">
          <label for="content">Inserirre contenuto</label>
          <textarea class="form-control" id="content" name="content" rows="3">{{$post->content}}</textarea>
        </div>
      </div>
      <fieldset class="d-flex align-items-center justify-content-start">
        @foreach($tags as $tag)
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="tag-{{$tag->id}}" value="{{$tag->id}}" name="tags[]">
          <label class="custom-control-label" for="tag-{{$tag->id}}">{{$tag->name}}</label>
        </div>
        @endforeach
      </fieldset>
      <button type="submit" class="btn btn-success">Salva</button>
    </form>
</section>

@endsection