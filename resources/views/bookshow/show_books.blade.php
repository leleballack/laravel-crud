@extends('layouts.app')

@section('content')
  <div class="container text-center">
    <h1><strong>Book: #{{ $book->id }}, "{{ $book->title }}"</strong> </h1>
    <ul>
      <li><img src="http://i.imgur.com/J5LVHEL.jpg" alt=""> </li>
      <li><strong> Title: </strong><em>{{ $book->title }}</em></li>
      <li><strong> Author: </strong>{{ $book->author }}</li>
      <li><strong> Language: </strong>{{ $book->language }}</li>
      <li><strong> Price: </strong>{{ "£ ".$book->price }}</li>
      <li><strong> Sale Price: </strong><em>{{ $book->sale_price ? "£ ".$book->sale_price : "£ ---" }}</em></li>
    </ul>
  </div>
@endsection

@section('page_title')
 Check This Book
@endsection
