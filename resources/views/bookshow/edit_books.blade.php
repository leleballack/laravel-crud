@extends('layouts.app')

@section('content')
  <h1 class="text-center"> <strong>Edit This Book: #{{ $book->id }}, "{{ $book->title }}"</strong> </h1>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
  <form method="POST" action="{{ route("books.update", $book->id) }}">
    @method("PUT")
    @csrf
  <div class="form-group">
    <label for="title">Book Title</label>
    <input name="title" value="{{$book->title}}" type="text" class="form-control" placeholder="Enter Book Title">
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="author">Book Author</label>
    <input name="author" value="{{$book->author}}" type="text" class="form-control" placeholder="Enter Book Author">
    @error('author')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="language">Book Language</label>
    <input name="language" value="{{$book->language}}" type="text" class="form-control" placeholder="Enter Book Language">
    <small class="form-text text-muted">(Example EN)</small>
    @error('language')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="price">Book Price</label>
    <input name="price" step="0.01"  value="{{$book->price}}" type="number" class="form-control" placeholder="Enter Book Price">
    <small class="form-text text-muted">(Example 9.99)</small>
    @error('price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="sale_price">Book Sale Price</label>
    <input name="sale_price" step="0.01" type="number" value="{{$book->sale_price}}" class="form-control" placeholder="Enter Book Sale Price">
    <small class="form-text text-muted">(Example 9.99)</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection




@section('page_title')
 Edit This Book
@endsection
