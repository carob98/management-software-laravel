<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdn.boxicons.com/fonts/basic/boxicons.min.css" rel="stylesheet" />
    @vite (['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="wrapper">
        @auth
            <x-sidebar></x-sidebar>
        @endauth
        <div class="main">
            @if (@isset($homepage))
                <x-nav align='justify-content-between'></x-nav>
            @elseif (@isset($authentication))
                <x-nav align='justify-content-between'>
                    <a href="{{ route('pages.homepage') }}"><i class='bx bx-arrow-left-stroke back-icon'></i></a>
                </x-nav>
            @else
                <x-nav></x-nav>
            @endif
            <main class="content px-3 py-4">
                <div class="container-fluid">
                    @auth
                        <div class="mb-3">
                            <h3 class="fw-bold fs-4 mb-3">
                                Ciao, {{ Auth::user()->name }}
                            </h3>
                        </div>
                    @endauth
                    {{ $slot }}
                </div>
            </main>
            <x-footer></x-footer>
        </div>
    </div>
</body>

</html>
