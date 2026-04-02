<h2>Edit Book</h2>

<div class="card">
    <form method="POST" action="/books/update/{{ $book->id }}">
        @csrf

        <input type="text" name="title" value="{{ $book->title }}"><br>
        <input type="text" name="author" value="{{ $book->author }}"><br>
        <input type="text" name="isbn" value="{{ $book->isbn }}"><br>
        <input type="number" name="copies" value="{{ $book->copies }}"><br>

        <button type="submit">Update Book</button>
    </form>
</div>