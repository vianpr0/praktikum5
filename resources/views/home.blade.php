<h1 class="text-2xl font-bold text-gray-700">User List</h1>
<ul>
    @foreach ($users as $user)
        <li>{{ $user }}</li>
    @endforeach
</ul>
