<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>

        <title>DWESE2018</title>
    </head>
    <body class="antialiased">
        <div class="container px-4 mx-auto">
            <header class="bg-gray-100 rounded py-4 px-4 mt-5 flex flex-row justify-between items-center">
                    <nav class="font-sans flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-6 bg-white shadow sm:items-baseline w-full">
                        <div class="mb-2 sm:mb-0">
                            <a href="/" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark">Home</a>
                        </div>
                        <div>
                            @php
                                $segmentos = request()->segments();
                                $home = empty($segmentos);
                                $login = !empty($segmentos) && $segmentos[0] == 'login';
                            @endphp
                            <a href="/one" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">One</a>
                            <a href="/two" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Two</a>
                            <a href="/three" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Three</a>
                            @if (session()->has('usuario'))
                                <form action="/logout" method="post">
                                    @csrf
                                    <input type="submit" value="Logout" class="text-lg no-underline text-grey-darkest hover:text-blue-900 ml-2">
                                </form>
                            @else
                                <a href="/login" class="text-lg no-underline text-grey-darkest hover:text-blue-900 ml-2 @if($login) font-semibold @endif">Login</a>
                            @endif
                        </div>
                    </nav>
            </header>

            @if (session()->has('error'))
                <div class="bg-red-100 rounded-lg p-4 mt-4 mb-4 text-sm text-red-700" role="alert">
                    <span class="font-semibold">Error:</span> {{ session('error') }}
                </div>
            @endif

            @if (session()->has('success'))
                <div class="bg-green-100 rounded-lg p-4 mt-4 mb-4 text-sm text-green-700" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="mt-3 mb-3">
                {{ $slot }}
            </div>

            <footer class="flex justify-center mt-4 sm:items-center sm:justify-between bg-gray-100 rounded p-2">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>

                        <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                            Shop
                        </a>

                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>

                        <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                            Sponsor
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </footer>
        </div>
    </body>
</html>
