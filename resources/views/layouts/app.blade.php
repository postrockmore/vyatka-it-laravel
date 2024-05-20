<!doctype html>
<html lang="ru">
    @include('blocks.head')

    <body class="font-inter min-h-screen grid grid-rows-layout grid-cols-1/1 text-main" x-data="{menu_open: false}">
        @section('header')
            @include('blocks.header', [
                'classes' => 'header-white',
                'is_opacity' => false
            ])
        @show

        <main class="z-10">
            @yield('content')
        </main>

        @include('blocks.footer')

        @livewireScripts
    </body>
</html>
