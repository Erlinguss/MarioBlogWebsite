
@extends('layouts.app')
@section('content')

<div class="mt-48 flex justify-center">
  <div class="w-full max-w-screen-lg flex flex-col md:flex-row justify-center  md:items-start px-4">
    <div class="w-full md:w-1/3 flex justify-center">
      <img src="{{ asset('images/luigi.png') }}" alt="Luigi" class="w-2/2">
    </div>
    <div class="w-full md:w-1/3 flex justify-center">
      <img src="{{ asset('images/mario.png') }}" alt="Mario" class="w-2/2">
    </div>
    <div class="w-full md:w-1/3 flex flex-col justify-center  md:items-start">
      <h2 class="text-4xl font-bold mb-4">Characters</h2>
      <p class="text-lg leading-7">
        From ravishing royalty to menacing monsters, the Mushroom Kingdom has had its share of memorable characters over the years…
      </p>
    </div>
  </div>
</div>

  
@endsection