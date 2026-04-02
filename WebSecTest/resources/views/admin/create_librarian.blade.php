<x-app-layout>

<h2>Create Librarian</h2>

<div class="card">
    <form method="POST" action="/create-librarian">
        @csrf

        <input type="text" name="name" placeholder="Full Name">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">

        <button type="submit">Create Librarian</button>
    </form>
</div>

</x-app-layout>