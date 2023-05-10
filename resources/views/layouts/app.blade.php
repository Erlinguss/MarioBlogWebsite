

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
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> --}}
</head>
<body class="bg-white-100 h-screen antialiased leading-none font-sans">
    <div id="app">


          <header class="bg-red-700 py-2 fixed top-0 w-full z-20 ">
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
          
          <header  class="bg-gray-900 py-6 fixed top-0 w-full z-30 second-header" >
              <div class="container mx-auto flex flex-col items-center justify-center px-6">
                  <nav class="flex mt-6">
                      <a class="no-underline text-white hover:underline transition duration-300 ease-in-out transform hover:-translate-y-1 mx-4" href="/"><strong>Home </strong></a>
                      <a class="no-underline text-white hover:underline transition duration-300 ease-in-out transform hover:-translate-y-1 mx-4" href="/blog"> <strong>Blog </strong></a>
                      <a class="no-underline text-white hover:underline transition duration-300 ease-in-out transform hover:-translate-y-1 mx-4" href="{{ route('characters') }}"> <strong>Characters </strong></a>   </header>
        

        <div class="container mx-auto px-0 py-8 mt-24">
          @yield('content')
      </div>

      
        <div >
            @include('layouts.footer')
        </div>
    </div>
   
</body >
</html>

