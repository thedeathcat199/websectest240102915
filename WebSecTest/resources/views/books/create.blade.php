<x-app-layout>

<h2>Add Book</h2>

<div class="card">
    <form method="POST" action="/books/store">
        @csrf

        <input type="text" name="title" placeholder="Book Title">
        <input type="text" name="author" placeholder="Author">
        <input type="text" name="isbn" placeholder="ISBN">
        <input type="number" name="copies" placeholder="Copies">

        <button type="submit">Add Book</button>
    </form>
</div>

</x-app-layout>