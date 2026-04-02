<x-app-layout>

<h2>Admin Dashboard</h2>

<h3>Users</h3>
@foreach($users as $user)
    <div class="card">
        <strong>{{ $user->name }}</strong><br>
        {{ $user->email }}<br>
        Role: {{ $user->role }}
    </div>
@endforeach

<h3>Books</h3>
@foreach($books as $book)
    <div class="card">
        {{ $book->title }} ({{ $book->copies }})
    </div>
@endforeach

<h3>Borrow Records</h3>
@foreach($borrows as $borrow)
    <div class="card">
        User ID: {{ $borrow->user_id }} → Book ID: {{ $borrow->book_id }}
    </div>
@endforeach

</x-app-layout>