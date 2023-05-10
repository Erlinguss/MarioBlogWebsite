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
</div>
<div class="flex justify-end">
    <div class="scroll-image-wrapper">
        <img id="scroll-image" src="{{ asset('images/mariofly.png') }}" alt="">
    </div>
</div>
<a href="/blog" class="mt-8 inline-flex bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition-colors duration-300 text-sm ml-80">
    Read More
  </a>

    <div class="relative">
        <img class="" src="{{ asset('images/backgroundMario3.png') }}" alt="">
        <figcaption class="absolute inset-0 flex items-center justify-center text-white text-4xl font-bold  pt-20">
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
              <img  id="mario-image-9" class="marioTunelImages" src="{{ asset('images/supermario.jpg') }}" alt="">
            </div>

            <div class="image-container">
              <div class="year">1990</div>
              <img  id="mario-image-1" class="marioTunelImages" src="{{ asset('images/marioworld.jpg') }}" alt="">
            </div>
            <div class="image-container">
              <div class="year">1996</div>
              <img  id="mario-image-2" class="marioTunelImages" src="{{ asset('images/mari64o.jpg') }}" alt="">
            </div>

            <div class="image-container">
                <div class="year">2002</div>
                <img   id="mario-image-3" class="marioTunelImages" src="{{ asset('images/mario9.jpg') }}" alt="">
              </div>
              <div class="image-container">
                <div class="year">2006</div>
                <img  id="mario-image-4" class="marioTunelImages" src="{{ asset('images/mario10.jpg') }}" alt="">
              </div>
              
            <div class="image-container">
              <div class="year">2007</div>
              <img   id="mario-image-5" class="marioTunelImages" src="{{ asset('images/mariogalaxy.jpg') }}" alt="">
            </div>
            <div class="image-container">
                <div class="year">2011</div>
                <img   id="mario-image-6"class="marioTunelImages" src="{{ asset('images/mario11.jpg') }}" alt="">
              </div>
            <div class="image-container">
              <div class="year">2017</div>
              <img   id="mario-image-7" class="marioTunelImages" src="{{ asset('images/supermarioodyssey.jpg') }}" alt="">
            </div>
            <div class="image-container" style="margin-right: 0;">
              <div class="year">2021</div>
              <img  id="mario-image-8" class="marioTunelImages" src="{{ asset('images/mario3D.jpg') }}" alt="">
            </div>
          </div>
        </div>
        <button id="next-btn" class="navBtn1"><strong>&gt;</strong></button>
        <img class="tunnel" src="{{ asset('images/mariotunel1.jpeg') }}" alt="">
  </div>

  <img class="" src="{{ asset('images/backgroundMario6.png') }}" alt="">
  


<div class="flex items-center justify-center">
  <img id="mario-text-image-9" src="{{ asset('images/s1.jpg') }}" class="w-1/3 h-auto   mt-15 hidden ">
  <a id="mario-text-9" class="text-lg leading-7 text-justify hidden pt-20 px-15">
    <strong>Super Mario bros. Story </strong>
   <br><br>
    One day the kingdom of the peaceful mushroom people was invaded by the Koopa, a tribe of turtles famous for their black magic. The quiet, peace-loving Mushroom People were turned into mere stones,
     bricks and even field horsehair plants, and the Mushroom Kingdom fell into ruin.
    <br><br>
    The only one who can undo the magic spell on the Mushroom People and return them to their normal selves is the Princess Toadstool, the daughter of the Mushroom King.
     Unfortunately, she is presently in the hands of Bowser, the King of the Koopa.
    <br><br>
    Mario hears about the Mushroom People’s plight and sets out on a quest to free the Mushroom Princess from the evil Koopa and restore the fallen kingdom of the Mushroom People.
    You are Mario! It’s up to you to save the Mushroom People from the black magic of the Koopa!
   
  </a>
</div>


<div class="flex items-center justify-center">
  <img id="mario-text-image-1" src="{{ asset('images/s2.jpg') }}" class="w-1/3 h-auto   mt-15 hidden ">
  <a id="mario-text-1" class="text-lg leading-7 text-justify hidden pt-20 px-15">
    <strong>Super Mario World. Story </strong>
   <br><br>
   Having returned peace to Mushroom World, Mario and Luigi decide to take a leisurely vacation with Princess Peach. They set out for Yoshi’s Island in the magical island nation of Dinosaur Land far to the south.
   <br><br>
   But soon after arriving on the island, Princess Peach suddenly disappears. As Mario and Luigi desperately search for her, they discover a strange egg on the outskirts of the island. Then, before their very eyes,
    an odd little dragon hatches! The dragon calls himself Yoshi and says, "Monstrous turtles recently appeared here in this Dinosaur Land. They have used magic to seal my friends inside eggs. I tried to help them,
     but the turtles are incredibly strong and cast a spell on me, too… Will you please come with me to rescue my friends?"
   <br><br>
   What can this mean? Apparently, Bowser hasn’t learned his lesson, so it appears that his minions have yet again kidnapped Princess Peach.
   Mario and Luigi begin another adventure in hopes of rescuing Yoshi’s pals and Princess Peach! </a>
</div>




<div class="flex items-center justify-center">
  <img id="mario-text-image-2" src="{{ asset('images/s3.jpeg') }}" class="w-1/3 h-auto   mt-15 hidden ">
  <a id="mario-text-2" class="text-lg leading-7 text-justify hidden pt-20 px-15">
    <strong>Super Mario 64. Story </strong>
   <br><br>
   Mario receives an invitation from Princess Toadstool to come to the Mushroom Castle to receive a cake. 
   Excited to see the princess, he quickly dresses up and sets out for the castle. However, he senses that something is amiss when he arrives at the silent castle and is told to leave by an unknown voice. Mario begins to explore the castle
   , and upon finding an open door, discovers a large painting on the wall. Strange sounds emanate from behind it, and Mario jumps into the painting without hesitation.
   <br><br>
   Inside the painting, Mario finds himself battling against Bob-ombs who reveal that someone has stolen the "Power Stars," 
   which protect the castle, and plans to use them to take over the Mushroom Castle. Bowser is behind the plot, and he has also taken Princess Toadstool and Toad captive and sealed them inside the painting. 
   Mario must recover the Power Stars hidden throughout the painting world to prevent Bowser's army from taking over the castle and restore peace to the Mushroom Kingdom.
    </a>
</div>


<div class="flex items-center justify-center">
  <img id="mario-text-image-3" src="{{ asset('images/s4.jpeg') }}" class="w-1/3 h-auto   mt-15 hidden ">
  <a id="mario-text-3" class="text-lg leading-7 text-justify hidden pt-20 px-15">
    <strong>Super Mario SunShine. Story </strong>
   <br><br>
   Close your eyes and imagine…soothing sunshine accompanied by the sound of waves gently breaking on the shore. High above, seagulls turn lazy circles in a clear blue sky. This is Isle Delfino.
   Far from the hustle and bustle of the Mushroom Kingdom, this island resort glitters like a gem in the waters of a southern sea.
   Mario, Peach, and an entourage of Toads have come to Isle Delfino to relax and unwind. At least, that’s their plan…but when they arrive, they find things have gone horribly wrong...
   According to the island inhabitants, the person responsible for the mess has a round nose, a thick mustache, and a cap…
   What? But…that sounds like Mario!!
   <br><br>
   The islanders are saying that Mario's mess has polluted the island and caused their energy source, the Shine Sprites, to vanish.
   Now the falsely accused Mario has promised to clean up the island, but...how?
   Never fear! FLUDD, the latest invention from Gadd Science, Inc., can help Mario tidy up the island, take on baddies, and lend a nozzle in all kinds of sticky situations.
   Can Mario clean the island, capture the villain, and clear his good name? It’s time for another Mario adventure to get started!
   
    </a>
</div>


<div class="flex items-center justify-center">
  <img id="mario-text-image-4" src="{{ asset('images/s5.jpg') }}" class="w-1/3 h-auto   mt-15 hidden ">
  <a id="mario-text-4" class="text-lg leading-7 text-justify hidden pt-20 px-15">
    <strong>New Super Mario Bros. Story </strong>
   <br><br>
   Emergency News Flash!
   <br><br>
   Princess Peach has been kidnapped! While enjoying a picnic with Mario, the beloved ruler of the Mushroom Kingdom was whisked away by an unknown assailant. How could this happen with Mario around?
   According to Mario, the walk was going swimmingly when Mario and the princess spotted smoke billowing out of Peach’s Castle. 
   The mustachioed marvel immediately jumped into action and sped off toward the fire. The moment he left her side, the princess vanished!
   <br><br>
   Who’s behind Princess Peach’s disappearance? Who’s behind the attack on Peach’s Castle? Are the two incidents related? Didn’t Bowser Jr. once think Princess Peach might be his mother?
   Looks like Mario’s going to need all the Mega Mushrooms he can find to get to the bottom of this mess.
    </a>
</div>


<div class="flex items-center justify-center">
  <img id="mario-text-image-5" src="{{ asset('images/s6.jpeg') }}" class="w-1/3 h-auto   mt-15 hidden ">
  <a id="mario-text-5" class="text-lg leading-7 text-justify hidden pt-20 px-15">
    <strong>Super Mario Galaxy. Story </strong>
   <br><br>
  
Every hundred years, a huge comet flies by in the skies above the Mushroom Kingdom. One year, that comet filled the entire sky, and from it fell a stream of shooting stars.
The Toads scooped up the Star Bits and brought them to the castle, where they were reborn as a great Power Star. It was a happy time in the Mushroom Kingdom. Then one night Mario received a letter...
<br><br>
“Dear Mario,
I’ll be waiting for you at the castle on the night of the Star Festival. There’s something I’d like to give you.
from Peach”
<br><br>
With invitation in hand, Mario headed off to the castle just as the Star Festival was getting into full swing. Surrounded by Toads gleefully trying to catch falling Star Bits, Mario was looking forward to the night’s festivities. But then, something happened...

</a>
</div>


<div class="flex items-center justify-center">
  <img id="mario-text-image-6" src="{{ asset('images/s7.jpeg') }}" class="w-1/3 h-auto   mt-15 hidden ">
  <a id="mario-text-6" class="text-lg leading-7 text-justify hidden pt-20 px-15">
    <strong>Super Mario 3D Land. Story </strong>
   <br><br>
   In the Mushroom Kingdom, there stands a mysterious tree. It has a branch in the shape of a tail and is known as the Tail Tree. One night, 
   a fierce storm assails the Mushroom Kingdom. Worried for the Tail Tree, Princess Peach goes to check on it, but when morning arrives, she has yet to return.
   Accompanied by Toads, Mario rushes to the Tail Tree only to find its leaves are gone. All that remains is the bare Tail Tree and an envelope.
   <br><br>
   Inside the envelope, they find a photograph of Princess Peach in Bowser’s grasp! The Toads are beside themselves. 
   Bowser is up to his dirty deeds again, so Mario rushes off to rescue Princess Peach!
</a>
</div>


<div class="flex items-center justify-center">
  <img id="mario-text-image-7" src="{{ asset('images/s8.jpeg') }}" class="w-1/3 h-auto   mt-15 hidden ">
  <a id="mario-text-7" class="text-lg leading-7 text-justify hidden pt-20 px-15">
    <strong>Super Mario Odyssey. Story </strong>
   <br><br>
   Explore incredible places far from the Mushroom Kingdom as you join Mario and his new ally Cappy on a massive, globe-trotting 3D adventure. Use amazing new abilities—like the power to capture and control objects, animals, 
   and enemies—to collect Power Moons so you can power up the Odyssey airship and save Princess Peach from Bowser’s wedding plans!   
</a>
</div>

<div class="flex items-center justify-center">
  <img id="mario-text-image-8" src="{{ asset('images/s9.jpg') }}" class="w-1/3 h-auto   mt-15 hidden ">
  <a id="mario-text-8" class="text-lg leading-7 text-justify hidden pt-20 px-15">
    <strong>Super Mario 3D World + Bowser`s Fury. Story </strong>
   <br><br>
   In Super Mario 3D World, pounce and climb through dozens of colorful courses! Mario (and his friends) can use a variety of power-ups like the Super Bell, which grants catlike abilities like climbing and scratching.
   Team up with up to three other players locally* or online** to reach the goal and see who can get a high score.
   <br><br>
  In Bowser’s Fury, Mario arrives on Lake Lapcat and is confronted with a rampaging Bowser! Join forces with Bowser Jr.
   and venture through an interconnected world made of cat-themed...well, everything. Enemies, flowers, and even birds take on a feline form. Pass a Joy-Con ™️ controller to a friend as they take control of Bowser Jr. in 2-player mode.
  
  </a>
</div>


<div class="background-container">
  <img class="foreground-image" src="{{ asset('images/mario2.png') }}" alt="">
</div>



 
@endsection