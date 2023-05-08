@extends('layouts.app')

@section('content')



  
<div class="grid grid-cols-2 gap-4 pt-20">
    <div class="flex items-center justify-center">
      <img src="{{ asset('images/mariobros.jpg') }}" alt="Mario Bros.">
    </div>
    <div class="flex flex-col justify-center">
      <h2 class="text-4xl font-bold mb-4">Official Home of Mario</h2>
      <p class="text-lg leading-7">
        Mario If you’re a Mario fan—or even if you’ve just found out about him today you’ve come to the right place! Learn everything there is to know about that multitalented, mustached marvel, and check out the latest news, videos, and more.
      </p>
    </div>
    <div class="scroll-image-wrapper" style="float: right;">
      <img id="scroll-image" src="{{ asset('images/mariofly.png') }}" alt="">
    </div>
  </div>
  
  <a href="/blog" class="mt-8 inline-flex bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition-colors duration-300 text-sm ml-80">
    Read More
  </a>

  
    <div class="relative">
        <img class="" src="{{ asset('images/backgroundMario3.png') }}" alt="">
        <figcaption class="absolute inset-0 flex items-center justify-center text-white text-4xl font-bold font-serif pt-20">
            The history of Super Mario
        </figcaption>
        <img class="" src="{{ asset('images/backgroundMario2.png') }}" alt="">
    </div>



    <div class="wrapper">
        <img class="tunnel" src="{{ asset('images/mariotunel.jpeg') }}" alt="">
        <button id="prev-btn" class="navBtn"><strong>&lt;</strong></button>
        <div class="container">
          <div class="images" style="display: flex; flex-direction: row;">
            <div class="image-container">
              <div class="year">1985</div>
              <img class="marioTunelImages" src="{{ asset('images/supermario.jpg') }}" alt="">
            </div>
            <div class="image-container">
              <div class="year">1990</div>
              <img class="marioTunelImages" src="{{ asset('images/marioworld.jpg') }}" alt="">
            </div>
            <div class="image-container">
              <div class="year">1996</div>
              <img class="marioTunelImages" src="{{ asset('images/mari64o.jpg') }}" alt="">
            </div>

            <div class="image-container">
                <div class="year">2002</div>
                <img class="marioTunelImages" src="{{ asset('images/mario9.jpg') }}" alt="">
              </div>
              <div class="image-container">
                <div class="year">2006</div>
                <img class="marioTunelImages" src="{{ asset('images/mario10.jpg') }}" alt="">
              </div>
              
            <div class="image-container">
              <div class="year">2007</div>
              <img class="marioTunelImages" src="{{ asset('images/mariogalaxy.jpg') }}" alt="">
            </div>
            <div class="image-container">
                <div class="year">2011</div>
                <img class="marioTunelImages" src="{{ asset('images/mario11.jpg') }}" alt="">
              </div>
            <div class="image-container">
              <div class="year">2017</div>
              <img class="marioTunelImages" src="{{ asset('images/supermarioodyssey.jpg') }}" alt="">
            </div>
            <div class="image-container" style="margin-right: 0;">
              <div class="year">2021</div>
              <img class="marioTunelImages" src="{{ asset('images/mario3D.jpg') }}" alt="">
            </div>
          </div>
        </div>
        <button id="next-btn" class="navBtn1"><strong>&gt;</strong></button>
        <img class="tunnel" src="{{ asset('images/mariotunel1.jpeg') }}" alt="">
  </div>

  <img class="" src="{{ asset('images/backgroundMario6.png') }}" alt="">
  <img class="" src="{{ asset('images/backgroundMario.png') }}" alt="">

  

   
@endsection