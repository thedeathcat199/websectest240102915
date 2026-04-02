<x-app-layout>

<h2>Books</h2>

<a href="/books/create">+ Add Book</a>

@foreach($books as $book)
    <div class="card">
        <strong>{{ $book->title }}</strong><br>
        Author: {{ $book->author }}<br>
        Copies: {{ $book->copies }}<br><br>

        <a href="/books/edit/{{ $book->id }}">Edit</a>
        <a href="/books/delete/{{ $book->id }}">Delete</a>
        <a href="/borrow/{{ $book->id }}">Borrow</a>
    </div>
@endforeach

</x-app-layout>