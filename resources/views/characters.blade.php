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
                    From ravishing royalty to menacing monsters, the Mushroom Kingdom has had its share of memorable
                    characters over the years…
                </p>
                <img class="w-1/3 mx-auto animate-fade-in-out pr-6" src="{{ asset('images/start.png') }}" alt="Mario Bros.">
                <img class="w-1/2 mx-auto animate-fade-in-out1" src="{{ asset('images/start.png') }}" alt="Mario Bros.">
            </div>
        </div>
    </div>


    <div class="character">
        <img src="{{ asset('images/char1.jpeg') }}" alt="Mario" data-modal="#modal1">
        <h2>Mario</h2>
    </div>
    <div id="modal1" class="modal">
        <span class="close">&times;</span>
        <div id="modal1-content" class="modal-content">
            <p id="modal-text1" class="text-lg leading-7  text-justify"><strong>MARIO:</strong>
                The main hero of the Mushroom Kingdom. Mario is always bright and cheerful and instantly
                recognizable with his blue overalls, red cap, and trademark moustache.
                He's a trusted friend of Princess Peach, and he and his brother Luigi are known across the land for their
                acts of bravery.
                Mario excels at sports including tennis, golf, baseball, soccer, and even kart racing. He's good at all of
                them! He's a plumber by profession but is really a jack of all trades.</p>
        </div>
    </div>

    <div class="character">
        <img src="{{ asset('images/char2.jpeg') }}" alt=" " data-modal="#modal2">
        <h2>Luigi</h2>
    </div>
    <div id="modal2" class="modal">
        <span class="close">&times;</span>
        <div id="modal2-content" class="modal-content">
            <p id="modal-text2" class="text-lg leading-7 text-justify"><strong>LUIGI:</strong>
                Mario's brother and fellow hero of the Mushroom Kingdom. Luigi is instantly recognizable in
                his trademark green hat and green shirt.
                Luigi is kind but can be a bit nervous, especially around ghosts. However, his abilities are on par with
                Mario's, so when these brothers team up, there's nothing they can't achieve.
                Luigi is taller and can jump higher than Mario. If you look closely, you may also notice that the shape of
                his moustache is a bit different as well.</p>
        </div>
    </div>


    <div class="character">
        <img src="{{ asset('images/char3.jpeg') }}" alt=" " data-modal="#modal3">
        <h2>Princess Peach</h2>
    </div>
    <div id="modal3" class="modal">
        <span class="close">&times;</span>
        <div id="modal3-content" class="modal-content">
            <p id="modal-text3" class="text-lg leading-7 text-justify"><strong>PRINCESS PEACH:</strong>
                The beloved princess of the Mushroom Kingdom. She's extremely kind and is always working to create a world
                where everyone can live together happily. Her signature pink dress is quite lovely.
                Princess Peach is always game for a variety of sports, and also enjoys baking and cooking.
                Princess Peach and Mario are good friends and help each other out whenever they can. </p>
        </div>
    </div>


    <div class="character">
        <img src="{{ asset('images/char4.png') }}" alt=" " data-modal="#modal4">
        <h2> Toad</h2>
    </div>
    <div id="modal4" class="modal">
        <span class="close">&times;</span>
        <div id="modal4-content" class="modal-content">
            <p id="modal-text4" class="text-lg leading-7 text-justify"><strong>TOAD:</strong>
                A resident of the Mushroom Kingdom who works in service of Princess Peach. Toad has red spots on his head,
                though others of his kind come in a variety of colors.
                Toad is very cheerful and loyal. He does his best to help Mario and Luigi in their efforts to protect the
                Mushroom Kingdom from Bowser, even if he ends endangering himself in the process.
            </p>
        </div>
    </div>


    <div class="character">
        <img src="{{ asset('images/char5.jpeg') }}" alt=" " data-modal="#modal5">
        <h2> Bowser</h2>
    </div>

    <div id="modal5" class="modal">
        <span class="close">&times;</span>
        <div id="modal5-content" class="modal-content">
            <p id="modal-text5" class="text-lg leading-7 text-justify"><strong>BOWSER:</strong>
                The King of the Koopas. Bowser is Mario's archrival and is always causing trouble in the Mushroom Kingdom.
                Bowser commands many underlings, including Koopas, Goombas, Bullet Bills, and Shy Guys. Whenever he sets his
                sights on the Mushroom Kingdom, his plans are often foiled by Mario and friends.
                Bowser is a mighty foe who possesses incredible strength and can even breathe fire.</p>
        </div>
    </div>


    <div class="character">
        <img src="{{ asset('images/char6.jpeg') }}" alt=" " data-modal="#modal6">
        <h2>Yoshi</h2>
    </div>
    <div id="modal6" class="modal">
        <span class="close">&times;</span>
        <div id="modal6-content" class="modal-content">
            <p id="modal-text6" class="text-lg leading-7 text-justify"><strong>YOSHI:</strong>
                Mario's dependable companion who hails from Yoshi's Island. He is green, but others of his kind may be other
                colors such as red, blue, pink, and yellow.
                Yoshi is kind and carefree. He uses his long tongue to gobble up fruit and enemies, which he can turn into
                eggs for throwing.</p>
        </div>
    </div>



    <div class="character">
        <img src="{{ asset('images/char7.png') }}" alt=" " data-modal="#modal7">
        <h2> Daisy</h2>
    </div>
    <div id="modal7" class="modal">
        <span class="close">&times;</span>
        <div id="modal7-content" class="modal-content">
            <p id="modal-text7" class="text-lg leading-7 text-justify"><strong>DAISY:</strong>
                The princess of Sarasaland. Her trademark style includes her yellow dress and flowery accessories.
                Daisy is cheerful, energetic, and a bit of a tomboy. She enjoys playing a variety of sports with Mario and
                friends.</p>
        </div>
    </div>


    <div class="character">
        <img src="{{ asset('images/char8.jpeg') }}" alt=" " data-modal="#modal8">
        <h2>Wario</h2>
    </div>
    <div id="modal8" class="modal">
        <span class="close">&times;</span>
        <div id="modal8-content" class="modal-content">
            <p id="modal-text8" class="text-lg leading-7 text-justify "><strong>WARIO:</strong>
                The self-professed archrival of Mario. Wario wears purple overalls, a yellow hat, and has an instantly
                recognizable zigzag moustache.
                Wario and Mario have known each other since they were babies. He's got a boisterous personality and doesn't
                sweat the small things. He loves garlic and making money.</p>
        </div>
    </div>



    <div class="character">
        <img src="{{ asset('images/char9.jpeg') }}" alt=" " data-modal="#modal9">
        <h2> Waluigi</h2>
    </div>
    <div id="modal9" class="modal">
        <span class="close">&times;</span>
        <div id="modal9-content" class="modal-content">
            <p id="modal-text9" class="text-lg leading-7 text-justify"><strong>WALUIGI:</strong>
                Wario's pal and accomplice. Waluigi is the self-proclaimed rival of Luigi.
                Waluigi is willing to put in a lot of effort to best Mario and Luigi, if only to annoy them. His long arms
                and long legs help keep him competitive at sports.</p>
        </div>
    </div>


    <div class="character">
        <img src="{{ asset('images/char10.jpeg') }}" alt=" " data-modal="#modal10">
        <h2>Rosalina</h2>
    </div>
    <div id="modal10" class="modal">
        <span class="close">&times;</span>
        <div id="modal10-content" class="modal-content">
            <p id="modal-text10" class="text-lg leading-7 text-justify"><strong>ROSALINA:</strong>
                A mysterious lady who travels the galaxy accompanied by her family of star-like creatures called Lumas.
                Rosalina may seem a bit distant, but she is actually quite kind-hearted. She is the adoptive mother of the
                Lumas. Though her home is among the stars, she'll sometimes joins Mario and friends on their adventures.</p>
        </div>
    </div>


    <div class="character">
        <img src="{{ asset('images/char11.png') }}" alt=" " data-modal="#modal11">
        <h2> Bowser Jr.</h2>
    </div>
    <div id="modal11" class="modal">
        <span class="close">&times;</span>
        <div id="modal11-content" class="modal-content">
            <p id="modal-text11" class="text-lg leading-7 text-justify"><strong>BOWSER Jr.:</strong>
                The only son of Bowser, the King of the Koopas. He's often seen wearing a mask with an intimidating mouth
                drawn on it.
                Bowser Jr. is small but has inherited great strength from his father.
                He may throw a tantrum if things don't go his way. He's know to cause plenty of trouble and can be a bit
                selfish.</p>
        </div>
    </div>


    <div class="character">
        <img src="{{ asset('images/char12.png') }}" alt=" " data-modal="#modal12">
        <h2> Boo</h2>
    </div>
    <div id="modal12" class="modal">
        <span class="close">&times;</span>
        <div id="modal12-content" class="modal-content">
            <p id="modal-text12" class="text-lg leading-7 text-justify "><strong>BOO:</strong>
                Mischievous ghosts who often appear in dark, abandoned places.
                They may be spooky ghosts, but they're also incredibly shy. They will freeze in place and cover their eyes
                if someone looks right at them.</p>
        </div>
    </div>


    <div class="character">
        <img src="{{ asset('images/char13.jpeg') }}" alt="Luigi" data-modal="#modal13">
        <h2> Donkey Kong</h2>
    </div>
    <div id="modal13" class="modal">
        <span class="close">&times;</span>
        <div id="modal13-content" class="modal-content">
            <p id="modal-text13" class="text-lg leading-7 text-justify"><strong>DONKY KONG:</strong>
                The king of the jungle whose trademark is his red necktie, which bears his initials.
                Donkey Kong can hurl giant barrels with the greatest of ease, and is so powerful the ground shakes when he
                pounds on the ground.
                He loves bananas and always keeps a large stash of them in his treehouse.</p>
        </div>
    </div>


    <div class="character">
        <img src="{{ asset('images/char14.jpeg') }}" alt="Luigi" data-modal="#modal14">
        <h2>Diddy Kong</h2>
    </div>
    <div id="modal14" class="modal">
        <span class="close">&times;</span>
        <div id="modal14-content" class="modal-content">
            <p id="modal-text14" class="text-lg leading-7 text-justify"><strong>DIDDY KONG:</strong>
                Donkey Kong's trusted friend and partner. His trademarks are his red shirt with yellow stars and red cap.
                Though not as strong as DK, Diddy Kong is agile and a great jumper. He's fast as well, and a great ally for
                helping DK protect his banana stash.</p>
        </div>
    </div>
@endsection
