@extends('layouts.app')

@section('content')
  @forelse ($books as $book)
    Title: {{ $book->title }} - Price: {{ $book->price }}
     <br>
  @empty
    <h2>There are no results</h2>
  @endforelse
@endsection
