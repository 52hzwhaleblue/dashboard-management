<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Todo App' }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="max-w-[1440px] bg-white text-white overflow-x-hidden">
<nav class="nav-wrapper w-[17.3611111111%]  border-r-[2px] border-[#EEF2F6]">
    <div class="nav-logo p-[24px] flex flex-wrap justify-between items-center border-b-[2px] border-[#EEF2F6]">
        <img src="{{asset('assets/images/logo.png')}}" alt="">
        <img src="{{asset('assets/images/nav-icon.png')}}" alt="">
    </div>
    <ul class="nav-navigate p-[24px]">
        <li class="flex flex-wrap justify-start items-center h-[40px]">
            <img class="mr-[16px]" src="{{asset('assets/images/home-icon.png')}}" alt="">
            <a href="{{route('index')}}" class="text-[#94A3B8]" wire:navigate>Home</a>
        </li>
        <li class="flex flex-wrap justify-start items-center h-[40px]">
            <img class="mr-[16px]" src="{{asset('assets/images/task-icon.png')}}" alt="">
            <a href="{{route('index')}}" class="text-[#94A3B8]" wire:navigate>My Tasks</a>
        </li>
        <li class="flex flex-wrap justify-start items-center h-[40px]">
            <img class="mr-[16px]" src="{{asset('assets/images/cup-icon.png')}}" alt="">
            <a href="{{route('index')}}" class="text-[#94A3B8]" wire:navigate>Goals</a>
        </li>
        <li class="flex flex-wrap justify-start items-center h-[40px]">
            <img class="mr-[16px]" src="{{asset('assets/images/member-icon.png')}}" alt="">
            <a href="{{route('index')}}" class="text-[#94A3B8]" wire:navigate>Members</a>
        </li>
    </ul>
</nav>

<section class="w-full p-3">

    <div class="w-full">
        {{ $slot }}
    </div>
</section>


@livewireScripts
@vite('resources/js/app.js')
</body>
</html>
