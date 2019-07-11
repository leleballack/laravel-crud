@extends('layouts.app')

@section('content')
  <h1 class="text-center"> <strong>Add New Book</strong> </h1>
  <form method="POST" action="{{ route("books.store") }}">
  <div class="form-group">
    <label for="title">Book Title</label>
    <input name="title "type="text" class="form-control" placeholder="Enter Book Title">
  </div>
  <div class="form-group">
    <label for="author">Book Author</label>
    <input name="author" type="text" class="form-control" placeholder="Enter Book Author">
  </div>
  <div class="form-group">
    <label for="price">Book Price</label>
    <input name="price" type="text" class="form-control" placeholder="Enter Book Price">
    <small class="form-text text-muted">Leave empty in unknown -- (Example 9.99)</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection




@section('page_title')
 New Books in Store
@endsection
