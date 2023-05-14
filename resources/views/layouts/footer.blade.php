<footer class="bg-gray-800 py-2  bg-no-repeat bg-center bg-cover"
    style="background-image: url('{{ asset('images/backgroundMario3.png') }}')">
    <div class="flex justify-between items-center">
        <div class="flex">
            <img src="{{ asset('images/coins.png') }}" alt="" class="w-1/3 max-w-xs mr-4 coin">
            <img src="{{ asset('images/coins.png') }}" alt="" class="w-1/3 max-w-xs mr-4 coin">
            <img src="{{ asset('images/coins.png') }}" alt="" class="w-1/3 max-w-xs mr-4 coin">
        </div>


        <div class="flex justify-end items-start">
            <img src="{{ asset('images/mario1.png') }}" alt="" class="w-56 h-auto">
        </div>
    </div>


    <div class="sm:grid grid-cols-3 w-4/5 pb-10 m-auto border-b-2 border-gray-700">



        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Customer Support:
            </h3>
            <div class="flex justify-center items-center">
                <a href="https://en-americas-support.nintendo.com/" target="_blank">
                    <img src="{{ asset('images/support.png') }}" alt="" class="w-10 h-20 coin">

                </a>

            </div>
        </div>

        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Follow Nintendo:
            </h3>
            <div class="flex justify-center items-center mt-5">
                <a href=" ">
                    <img src="">
                </a>
                <a href="https://www.facebook.com/NintendoUK/?brand_redir=119240841493711" target="_blank">
                    <img src="{{ asset('images/facebook.png') }}" alt="" class="w-10 h-10 mx-2">
                </a>
                <a href="https://www.instagram.com/nintendoamerica/" target="_blank">
                    <img src="{{ asset('images/Instagram.png') }}" alt="" class="w-10 h-10 mx-2">
                </a>
                <a href="https://twitter.com/NintendoAmerica" target="_blank">
                    <img src="{{ asset('images/t.png') }}" alt="" class="w-12 h-12 mx-2">
                </a>
                <a href="https://www.youtube.com/nintendo" target="_blank">
                    <img src="{{ asset('images/youtube.png') }}" alt="" class="w-12 h-12 mx-2">
                </a>
            </div>
        </div>



    </div>

    <p class="w-25 w-4/5 pb-3 m-auto text-xs text-gray-100 pt-6">
        Copyrights are properties of their respective owners.
        Nintendo properties are trademarks of Nintendo. © 2020 Nintendo.
    </p>

</footer>
