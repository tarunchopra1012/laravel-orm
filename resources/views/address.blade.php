@if ($user->address)

{{ $user->address?->line_1 }}, {{ $user->address?->line_2 }}

@endif