<x-layouts.app>

<x-navbar.primary></x-navbar.primary>
{{-- @dd($users) --}}

@foreach ($users as $user)
    
<h1>{{ $user->name }}</h1>
<h1>{{ $user->email }}</h1>

@endforeach


</x-layouts.app>
