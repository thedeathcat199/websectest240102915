<h2>Books</h2>

@foreach($books as $book)
    <p>
        {{ $book->title }} - {{ $book->author }} ({{ $book->copies }})

        <a href="/books/edit/{{ $book->id }}">Edit</a>
        <a href="/books/delete/{{ $book->id }}">Delete</a>

        <!-- BORROW BUTTON (THIS IS THE NEW PART) -->
        <a href="/borrow/{{ $book->id }}">Borrow</a>
    </p>
@endforeach

<a href="/books/create">Add Book</a>