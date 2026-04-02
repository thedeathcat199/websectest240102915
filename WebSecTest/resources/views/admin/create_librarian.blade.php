<h2>Create Librarian</h2>

<form method="POST" action="/create-librarian">
    @csrf

    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>

    <button type="submit">Create Librarian</button>
</form>