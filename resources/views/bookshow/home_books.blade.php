@extends('layouts.app')

@section('content')
  <h1 class="text-center"> <strong>All Books in Store</strong> </h1>
  <a href="{{ route("books.create") }}" class="btn btn-warning float-right">Add New Book</a>
  <table class="table table-dark text-center mt-5">
    <thead>
      <tr>
        <th>List #</th>
        <th>Title</th>
        <th>Author</th>
        <th>Language</th>
        <th>Price</th>
        <th>Sale Price</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

      @forelse ($books as $book)
        <tr>
          <th>{{ $book->id }}</th>
          <td>{{ $book->title }}</td>
          <td>{{ $book->author }}</td>
          <td>{{ $book->language }}</td>
          <td>{{"£ ".$book->price }}</td>
          <td>{{ $book->sale_price ? "£ ".$book->sale_price : "£ ---" }}
            {{-- @if ($book->sale_price)
              * £ {{ $book->sale_price }} *
            @else £ ---
            @endif --}}
          </td>
          <td>
            <a href="{{ route("books.show", $book->id) }}" class="btn btn-primary">Show</a>
            <a href="{{ route("books.edit", $book->id) }}" class="btn btn-success">Edit</a>
            <form class="delete_books" action="{{ route("books.destroy", $book->id) }}" method="post">
              @method("DELETE")
              @csrf
              <input type="submit" class="btn btn-danger" value="Delete">
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="4">There are no results</td>
        </tr>
      @endforelse
    </tbody>
  </table>
@endsection

@section('page_title')
 Books in Store
@endsection
