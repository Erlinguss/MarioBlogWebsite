


@extends('layouts.app')

@section('content')


<img src="{{ asset('images/backgroundMario4.png') }}" alt="" >

<div class="w-4/5 m-auto text-center">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>
<div class="w-4/5 m-auto ">
    <span class="text-gray-500 ">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <div>
        <img src="{{ asset('images/' . $post->image_path) }}" alt="">
    </div>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light text-justify">
  {{ $post->description }}
</p>
</div>

<img src="{{ asset('images/friends.png') }}" alt="" class="mx-auto w-1/2 sm:w-1/2 lg:w-1/2">
@endsection 
