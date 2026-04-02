<h2>Add Book</h2>

<form method="POST" action="/books/store">
    @csrf
    <input type="text" name="title" placeholder="Title"><br><br>
    <input type="text" name="author" placeholder="Author"><br><br>
    <input type="text" name="isbn" placeholder="ISBN"><br><br>
    <input type="number" name="copies" placeholder="Copies"><br><br>
    <button type="submit">Add Book</button>
</form>