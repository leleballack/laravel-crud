<form class="delete_books" action="{{ route("books.destroy", $book->id) }}" method="post">
  @method("DELETE")
  @csrf
  <input type="submit" class="btn btn-danger" value="Delete">
</form>
