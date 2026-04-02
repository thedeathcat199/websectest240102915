<h2>Edit Book</h2>

<form method="POST" action="/books/update/{{ $book->id }}">
    @csrf
    <input type="text" name="title" value="{{ $book->title }}"><br><br>
    <input type="text" name="author" value="{{ $book->author }}"><br><br>
    <input type="text" name="isbn" value="{{ $book->isbn }}"><br><br>
    <input type="number" name="copies" value="{{ $book->copies }}"><br><br>
    <button type="submit">Update</button>
</form>