<x-layouts.app>

<x-navbar.primary></x-navbar.primary>

<div class="p-20">
    @foreach ($users as $user)

    <div class="my-10">
        
        <h1 class="my-4 text-blue-500"><a href="">{{ $user->name }}</a></h1>
        <h1>{{ $user->email }}</h1>

    </div>

    @endforeach
</div>


</x-layouts.app>