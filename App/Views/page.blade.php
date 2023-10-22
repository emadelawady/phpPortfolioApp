<x-layouts.app>

@php
$the_title = 'the title is here';
@endphp

{{ $the_title }}

{{-- {{ dd($users) }} --}}

@if(isset($users))

@foreach($users as $user)

<h1 class="text-underline bg-white flex">{{ $user->name }}</h1>

@endforeach

@endif

newa

noe

</x-layouts.app>