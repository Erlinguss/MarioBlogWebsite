{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/mario.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ ('css/mario.css') }}" rel="stylesheet">

</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-gray-800 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    <a class="no-underline hover:underline" href="/">Home</a>
                    <a class="no-underline hover:underline" href="/blog">Blog</a>
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>
</html> --}}


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/mario.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ ('css/mario.css') }}" rel="stylesheet">
</head>
<body class="bg-white-100 h-screen antialiased leading-none font-sans">
    <div id="app">

        {{-- <header class="bg-red-700 py-2 sm:py-4">
            <div class="container mx-auto flex items-center justify-between px-6 flex-col sm:flex-row">
              <a href="{{ url('/') }}" class="flex items-center text-lg font-bold text-white">
                <img src="{{ asset('images/nintend.png') }}" alt="Mario Logo" class="w-35 h-16 mr-2">
              </a>
              <nav class="flex space-x-6 sm:space-x-8 text-white text-base sm:text-lg">
                @guest
                <a class="no-underline hover:underline transition duration-300 ease-in-out transform hover:-translate-y-1" href="{{ route('login') }}"><strong> {{ __('Login') }} </strong></a>
                @if (Route::has('register'))
                <a class="no-underline hover:underline transition duration-300 ease-in-out transform hover:-translate-y-1" href="{{ route('register') }}"><strong> {{ __('Register') }} </strong></a>
                @endif
                @else
                <span class="transition duration-300 ease-in-out transform hover:-translate-y-1">{{ Auth::user()->name }}</span>
                <a href="{{ route('logout') }}" class="no-underline hover:underline transition duration-300 ease-in-out transform hover:-translate-y-1" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                  {{ csrf_field() }}
                </form>
                @endguest
              </nav>
            </div>
          </header>
          
          <header class="bg-gray-900 py-6 fixed top-0 w-full z-10 second-header"  style="background-image: url('{{ asset('images/mario5.jpg') }}'); background-size: cover; background-position: center;">
            <div class="container mx-auto flex flex-col items-center justify-center px-6">
              <nav class="flex mt-6">
                <a class="no-underline text-white hover:underline transition duration-300 ease-in-out transform hover:-translate-y-1 mx-4" href="/"><strong>Home </strong></a>
                <a class="no-underline text-white hover:underline transition duration-300 ease-in-out transform hover:-translate-y-1 mx-4" href="/blog"> <strong>Blog </strong></a>
              </nav>
            </div>
          </header>  --}}



          <header class="bg-red-700 py-2 fixed top-0 w-full z-20">
            <div class="container mx-auto flex items-center justify-between px-6 flex-col sm:flex-row">
              <a href="{{ url('/') }}" class="flex items-center text-lg font-bold text-white">
                <img src="{{ asset('images/nintend.png') }}" alt="Mario Logo" class="w-35 h-16 mr-2">
              </a>
              <nav class="flex space-x-6 sm:space-x-8 text-white text-base sm:text-lg">
                @guest
                <a class="no-underline hover:underline transition duration-300 ease-in-out transform hover:-translate-y-1" href="{{ route('login') }}"><strong> {{ __('Login') }} </strong></a>
                @if (Route::has('register'))
                <a class="no-underline hover:underline transition duration-300 ease-in-out transform hover:-translate-y-1" href="{{ route('register') }}"><strong> {{ __('Register') }} </strong></a>
                @endif
                @else
                <span class="transition duration-300 ease-in-out transform hover:-translate-y-1">{{ Auth::user()->name }}</span>
                <a href="{{ route('logout') }}" class="no-underline hover:underline transition duration-300 ease-in-out transform hover:-translate-y-1" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                  {{ csrf_field() }}
                </form>
                @endguest
              </nav>
            </div>
          </header>
          
          <header  class="bg-gray-900 py-6 fixed top-0 w-full z-30 second-header" style="background-image: url('{{ asset('images/mario5.jpg') }}'); background-size: cover; background-position: center; top: 60px;">
              <div class="container mx-auto flex flex-col items-center justify-center px-6">
                  <nav class="flex mt-6">
                      <a class="no-underline text-white hover:underline transition duration-300 ease-in-out transform hover:-translate-y-1 mx-4" href="/"><strong>Home </strong></a>
                      <a class="no-underline text-white hover:underline transition duration-300 ease-in-out transform hover:-translate-y-1 mx-4" href="/blog"> <strong>Blog </strong></a>
                  </nav>
              </div>
          </header>
        

        

        <div class="container mx-auto px-4 py-8 mt-24">
            @yield('content')
        </div>

        <div class="bg-gray-700 py-8">
            @include('layouts.footer')
        </div>
    </div>
</body>
</html>

