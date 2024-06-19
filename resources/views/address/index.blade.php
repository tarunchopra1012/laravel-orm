@if ($user->address)
<div>
    {{ $user->address?->line_1 }}, {{ $user->address?->line_2 }}
    <a href="/address/edit">Edit</a>
    <form action="/address" method="post">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>
</div>
@endif

<a href="/address/create">Create Address</a>