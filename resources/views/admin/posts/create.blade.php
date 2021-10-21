@extends('layouts.app')

@section('content')

<section id="create-post" class="container">
    <form action="{{route('admin.posts.store')}}" method="post">
     @csrf
      <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title">
        <small id="emailHelp" class="form-text text-muted">Inserire titolo</small>
      </div>
      <div class="form-group">
        <label for="category_id">Seleziona categoria</label>
        <select class="form-control" id="category_id" name="category_id">
          <option>Nessuna categoria</option>
          @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
        <div class="form-group mt-4">
          <label for="content">Inserirre contenuto</label>
          <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-success">Salva</button>
    </form>
</section>

@endsection