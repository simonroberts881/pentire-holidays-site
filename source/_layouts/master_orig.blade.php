<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pentire Holidays</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body class="font-sans antialiased bg-grey-lighter text-grey-darker">
        <div id="app">
            <div class="w-full bg-header" style="min-height: 26rem;">
                <nav class="w-full h-16 bg-white">
                    <div class="container h-full flex items-center">
                        <ul class="h-full list-reset flex-1 flex items-center">
                            <li><a href="#" class="inline-block py-2 px-3 text-grey-darkest hover:text-grey-dark no-underline">The Apartment</a></li>
                            <li><a href="#" class="inline-block py-2 px-3 text-grey-darkest hover:text-grey-dark no-underline">Contact Us</a></li>
                            <li><a href="#" class="inline-block py-2 px-3 text-grey-darkest hover:text-grey-dark no-underline">Terms & Conditions</a></li>
                            <li><a href="#" class="inline-block py-2 px-3 text-grey-darkest hover:text-grey-dark no-underline">Gallery</a></li>
                            <li><a href="#" class="inline-block py-2 px-3 text-grey-darkest hover:text-grey-dark no-underline">Let's Explore</a></li>
                            <li><a href="#" class="inline-block py-2 px-3 text-grey-darkest hover:text-grey-dark no-underline">Find Us</a></li>
                            <li><a href="#" class="inline-block py-2 px-3 text-grey-darkest hover:text-grey-dark no-underline">Local Amenities</a></li>
                        </ul>
                        <div class="flex-none">
                            <a href="http://holiday.booking-system.net/Prices.asp?odta=bVQ%3DEJDJ%26PVQ%3DHMEK&copt=64&tabs=21" class="bg-orange hover:bg-orange-dark text-white font-bold py-3 px-4 rounded-full no-underline">Book your Stay</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="container">
                <div class="bg-white w-full shadow-lg p-4 -mt-24">
                    <div class="w-full flex">
                        <div class="flex-1 overflow-hidden" v-cloak>
                            <div class="slideshow-container" style="width: 568px; height: 442px;">

                                <!-- Full-width images with number and caption text -->
                                <div class="mySlides fade">
                                    <img src="/assets/images/thumbnail-front.jpg" style="width:100%">
                                    <div class="text">A Warm Welcoming Site</div>
                                </div>

                                <div class="mySlides fade">
                                    <img src="/assets/images/kitchen.jpg" style="width:100%">
                                    <div class="text">Kitchen</div>
                                </div>

                                <!-- Next and previous buttons -->
                                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            </div>
                            <br>

                            <!-- The dots/circles -->
                            <div style="text-align:center">
                                <span class="dot" onclick="currentSlide(1)"></span>
                                <span class="dot" onclick="currentSlide(2)"></span>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="px-4 leading-normal tracking-normal">
                                <h2 class="p-0 m-0 pb-4 font-light text-3xl">Luxury Holiday Accommodation</h2>
                                <p>A self-catering ground floor apartment, ideally located on the desirable Pentire peninsular, on the outskirts of Newquay. Just minutes from Fistral Beach and a ten minute walk from Newquay town.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="w-full mt-8 min-h-64 bg-blue-light">
                <div class="container">
                    <div class="py-6">
                        <p>Section</p>
                    </div>
                </div>
            </section>

            <div>
                @yield('body')
            </div>
        </div>
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <script>

            var slideIndex = 1;

            showSlides(slideIndex);

            setInterval(function() {
                slideIndex++;
                showSlides(slideIndex);
                }, 5000
            ); // Change image every 2 seconds

            // Next/previous controls
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            // Thumbnail image controls
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
            }


        </script>
    </body>

</html>
