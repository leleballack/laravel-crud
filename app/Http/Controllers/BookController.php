<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
      $books = Book::orderBy("id", "asc")->get();
      return view("bookshow.home_books", compact("books"));
    }

    public function create()
    {
        return view("bookshow.create_books");
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $new_book = new Book();
        // $new_book->title = $data['title'];
        // $new_book->author = $data['author'];
        // $new_book->language = $data['language'];
        // $new_book->price = $data['price'];
        // $new_book->sale_price = $data['sale_price'];
        $new_book->fill($data);
        $new_book->save();
        return redirect()->route("books.index");
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
