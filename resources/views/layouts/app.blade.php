@extends('adminlte::page')
@livewireStyles
@vite(['resources/css/app.css', 'resources/js/app.js'])
@section('content_header')
    @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif
@stop
@section('content')
    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
    @stack('modals')
@stop
@livewireScripts
