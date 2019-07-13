@extends('layouts.app')

@section('content')
  <h1 class="text-center"> <strong>Edit This Book: #{{ $book->id }}, "{{ $book->title }}"</strong> </h1>
  @include('partials.error_banner')
  <form method="POST" action="{{ route("books.update", $book->id) }}">
    @method("PUT")
    @csrf
  <div class="form-group">
    <label for="title">Book Title</label>
    <input name="title" value="{{$book->title}}" type="text" class="form-control" placeholder="Enter Book Title">
    @error('title')
      @include('partials.error_line')

  </div>
  <div class="form-group">
    <label for="author">Book Author</label>
    <input name="author" value="{{$book->author}}" type="text" class="form-control" placeholder="Enter Book Author">
    @error('author')
      @include('partials.error_line')

  </div>
  <div class="form-group">
    <label for="language">Book Language</label>
    <input name="language" value="{{$book->language}}" type="text" class="form-control" placeholder="Enter Book Language">
    <small class="form-text text-muted">(Example EN)</small>
    @error('language')
      @include('partials.error_line')

  </div>
  <div class="form-group">
    <label for="price">Book Price</label>
    <input name="price" step="0.01"  value="{{$book->price}}" type="number" class="form-control" placeholder="Enter Book Price">
    <small class="form-text text-muted">(Example 9.99)</small>
    @error('price')
      @include('partials.error_line')

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
