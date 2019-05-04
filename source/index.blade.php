@extends('_layouts.pentireholidays')

@section('body')
    <div id="welcome" class="tw-w-full tw-py-4">
        <div class="tw-container tw-flex tw-flex-col">
            <div class="tw-w-full tw-flex-1"><h1 class="tw-m-0 tw-p-0 tw-py-8 tw-text-center">Luxury Holiday Accommodation</h1></div>
            <div class="tw-w-full tw-flex-1 tw-flex">
                <div class="tw-flex-1" style="width: 30rem;">
                    <h3 class="tw-pb-4 tw-text-center">Welcome to our apartment</h3>
                    <p class="tw-text-grey-darker">A self-catering ground floor apartment, ideally located on the desirable Pentire peninsular, on the outskirts of Newquay. Just minutes from Fistral Beach and a ten minute walk from Newquay town.</p>
                    <hr>
                    <h3 class="tw-pb-4 tw-text-center">Making the most of your holiday</h3>
                    <div class="tw-text-center tw-py-4">
                        <a href="#findus" class="tw-bg-blue hover:tw-bg-blue-dark tw-text-white tw-font-bold tw-py-3 tw-px-4 tw-rounded-lg tw-no-underline">How To Find Us</a>
                        <a href="#amenities" class="tw-bg-blue hover:tw-bg-blue-dark tw-text-white tw-font-bold tw-py-3 tw-px-4 tw-rounded-lg tw-no-underline">Local Amenities</a>
                        <a href="#explore" class="tw-bg-blue hover:tw-bg-blue-dark tw-text-white tw-font-bold tw-py-3 tw-px-4 tw-rounded-lg tw-no-underline">Let's Explore</a>
                    </div>
                    <hr>
                    <div class="tw-w-full tw-flex-col">
                        <div class="tw-mx-20">
                            <div class="tw-flex tw-justify-between tw-items-center">
                                <a href="http://holiday.booking-system.net/ContactUs.asp?odta=bVQ%3DEJDJ%26PVQ%3DD&tabs=65"         class="tw-bg-orange hover:tw-bg-orange-dark tw-text-white tw-font-bold tw-py-3 tw-px-8 tw-rounded-full tw-no-underline">Contact Us</a>
                                <a href="http://holiday.booking-system.net/Prices.asp?odta=bVQ%3DEJDJ%26PVQ%3DHMEK&copt=64&tabs=21" class="tw-bg-orange hover:tw-bg-orange-dark tw-text-white tw-font-bold tw-py-3 tw-px-4 tw-rounded-full tw-no-underline">Book your Stay</a>
                            </div>
                            <div class="tw-w-full tw-text-center tw-pt-4">
                                <span class="tw-font-bold">or</span>
                            </div>
                        </div>
                        <div class="tw-mx-20 tw-text-center tw-py-4">
                            <span class="tw-font-semibold">Call us 07856 853 899</span>
                        </div>
                    </div>

                </div>
                <div class="tw-flex-1 tw-pl-8">
                    <div id="carouselExampleControls" class="carousel slide tw-overflow-hidden" data-ride="carousel">
                        <div class="carousel-inner tw-rounded-xl">
                            <div class="carousel-item active">
                                <img class="tw-block w-100" src="assets/images/thumbnail-front.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/images/gallery02.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/images/gallery03.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/images/gallery04.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/images/gallery05.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/images/gallery06.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/images/gallery07.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/images/gallery08.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/images/gallery09.jpg" alt="Second slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="details-example" class="tw-w-full tw-py-4">
        <div class="tw-container">
            <h3 class="pb-4 text-center">The Apartment</h3>
            <div class="tw-flex tw-pb-8">
                <div class="tw-w-1/3 tw-flex-1">
                    <div class="tw-pr-4 tw-h-64">
                        <h4>Living Room</h4>
                        <p class="text-justify">Spacious, ground floor, open plan apartment fitted with underfloor heating in a luxurious living area
                            furnished to an exceptional standard with contemporary furniture for that <strong>'home away from home'</strong> feel,
                            a comfortable sofa bed is available in the living room area.</p>
                        <ul>
                            <li>Complimentary wifi</li>
                        </ul>
                    </div>
                </div>
                <div class="tw-w-1/3 tw-flex-1">
                    <div class="tw-px-4 tw-h-64 tw-border-0 tw-border-l-2 tw-border-r-2">
                        <h4>Hallway</h4>
                        <ul>
                            <li>Easy access and accommodation for coats and shoes</li>
                            <li>Utility cupboard with washer and dryer</li>
                        </ul>
                    </div>
                </div>
                <div class="tw-w-1/3 tw-flex-1">
                    <div class="tw-pl-4 tw-h-64">
                        <h4>Kitchen</h4>
                        <p class="text-justify">Fully equipped bespoke kitchen with integral dishwasher, fridge/freezer, range cooker and microwave.  InsinkErator for food waste disposal.  Large larder cupboard.</p>

                    </div>
                </div>
            </div>
            <div class="tw-flex tw-pt-8 tw-pb-4 tw-border-0 tw-border-t-2">
                <div class="tw-w-1/3 tw-flex-1">
                    <div class="tw-pr-4 tw-h-64">
                        <h4>Bedrooms</h4>
                        <ul>
                            <li>Sleeps 4 (2 bedrooms)</li>
                            <li>Master bedroom with king-size bed ample room to accommodate a travel cot</li>
                            <li>Second bedroom with full-size single beds</li>
                        </ul>
                    </div>
                </div>
                <div class="tw-w-1/3 tw-flex-1">
                    <div class="tw-px-4 tw-h-64 tw-border-0 tw-border-l-2 tw-border-r-2">
                        <h4>Bathrooms</h4>
                        <ul>
                            <li>1 large shower room including toilet and sink</li>
                            <li>1 en-suite bathroom in the Master bedroom, bath, sink toilet and separate enclosed shower</li>
                        </ul>
                    </div>
                </div>
                <div class="tw-w-1/3 tw-flex-1">
                    <div class="tw-pl-4 tw-h-64">
                        <h4>Outside</h4>
                        <ul>
                            <li>French doors leading out to large enclosed decked garden with raised bed of mature shrubs, outdoor furniture and a sea view!</li>
                            <li>Secure key pad entrance and allocated parking</li>
                            <li>Lockable surf shack for those precious boards</li>
                            <li>Outside communal shower</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="details" class="tw-hidden tw-w-full tw-py-4">
        <div class="tw-container">
            <h3 class="pb-4 text-center">The Apartment</h3>
            <h4>Living Room</h4>
            <p class="text-justify">Spacious, ground floor, open plan apartment fitted with underfloor heating in a luxurious living area
                furnished to an exceptional standard with contemporary furniture for that 'home away from home' feel,
                a comfortable sofa bed is available in the living room area.</p>

            <h4>Kitchen</h4>

            <p>Fully equipped bespoke kitchen with integral dishwasher, fridge/freezer, range cooker and microwave.  InsinkErator for food waste disposal.  Large larder cupboard.</p>

            <h4>Bedrooms</h4>

            <ul>
                <li>Sleeps 4 (2 bedrooms)</li>
                <li>Master bedroom with king-size bed ample room to accommodate a travel cot</li>
                <li>Second bedroom with full-size single beds</li>
            </ul>

            <h4>Bathrooms</h4>
            <ul>
                <li>1 large shower room including toilet and sink</li>
                <li>1 en-suite bathroom in the Master bedroom, bath, sink toilet and separate enclosed shower</li>
            </ul>

            <h4>Hallway</h4>

            <ul>
                <li>Easy access and accommodation for coats and shoes</li>
                <li>Utility cupboard with washer and dryer</li>
            </ul>

            <h4>Outside</h4>

            <ul>
                <li>French doors leading out to large enclosed decked garden with raised bed of mature shrubs, outdoor furniture and a sea view!</li>
                <li>Secure key pad entrance and allocated parking</li>
                <li>Lockable surf shack for those precious boards</li>
                <li>Outside communal shower</li>
                <li>Complimentary wifi</li>
                <li>Pet friendly</li>
                <li>Situated opposite Newquay Golf Club and a 2 minute walk to Fistral Beach</li>
            </ul>
        </div>
    </div>

    <div id="explore" class="tw-w-full tw-py-4 tw-bg-white tw-border tw-border-t" >
        <div class="tw-container">
            <div class="tw-w-full tw-flex-1"><h1 class="tw-m-0 tw-p-0 tw-py-8 tw-text-center">Let's Explore</h1></div>

            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="card border">
                        <div class="card-header">
                            <h4 style="padding: 0px; margin: 0px; font-weight: 500;">Newquay</h4>
                        </div>
                        <div class="card-body highlight">
                            <ul>
                                <li><a href="https://www.bbc.co.uk/weather/2641589" target="_blank">Local BBC Weather, Coast, Sea and Tidetimes</a></li>
                                <li><a href="https://www.newquayzoo.org.uk/" target="_blank">Newquay Zoo</a></li>
                                <li><a href="https://www.fistralbeachsurfschool.co.uk/" target="_blank">Fistral Beach Surf Shop</a></li>
                                <li><a href="https://rnli.org/find-my-nearest/lifeboat-stations/newquay-lifeboat-station" target="_blank">Newquay Lifeboat Station</a></li>
                                <li><a href="https://newquayorchard.co.uk/" target="_blank">Community Orchard.</a></li>
                                <li><a href="https://www.bluereefaquarium.co.uk/newquay/" target="_blank">Blue Reef Aquarium</a></li>
                                <li><a href="https://saltyseadogsgrooming.com/" target="_blank">Salty Sea dogs walking and daycare</a></li>
                                <li><a href=" https://www.visitnewquay.org/explore/trenance-gardens" target="_blank">Trenance Gardens</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="card border">
                        <div class="card-header">
                            <h4 style="padding: 0px; margin: 0px; font-weight: 500;">Cornwall</h4>
                        </div>
                        <div class="card-body highlight">
                            <ul>
                                <li><a href="http://www.edenproject.com/visit/whats-on/easter" target="_blank">Eden Project</a></li>
                                <li><a href="https://www.nationaltrust.org.uk/lists/poldarks-filming-locations" target="_blank">Poldark filming locations</a></li>
                                <li><a href="http://www.greatgardensofcornwall.co.uk/about/" target="_blank">Great Gardens of Cornwall</a></li>
                                <li><a href="https://www.minack.com/a-living-theatre/" target="_blank">Minack Open Air Theatre Porthcurno</a></li>
                                <li><a href="https://nmmc.co.uk/visit/opening-times/" traget="_blank">National Maritime Museum</a></li>
                                <li><a href="https://www.stmichaelsmount.co.uk/plan-your-visit/opening-days-times" target="_blank">St. Michael's Mount</a></li>
                                <li><a href="http://www.iwalkcornwall.co.uk/walks/featuring/coast" target="_blank">Coastal Walks in Cornwall</a></li>
                                <li><a href="https://www.visitcornwall.com/whats-on" target="_blank">Events in Cornwall</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="findus" class="tw-w-full tw-bg-blue-lighter">
        <div class="tw-container tw-py-6 tw-pb-20">
            <div class="tw-w-full tw-py-4">
                <div class="tw-w-full tw-flex-1"><h1 class="tw-m-0 tw-p-0 tw-py-8 tw-text-center">Where to Find Us</h1></div>
            </div>
            <div id="contactUsMap" class="big-map tw-pb-10" style="height: 300px;"></div>
        </div>
    </div>

    <div id="amenities" class="tw-w-full">
        <div class="tw-container tw-py-6 tw-pb-20">
            <div class="tw-w-full tw-py-4">
                <div class="tw-w-full tw-flex-1"><h1 class="tw-m-0 tw-p-0 tw-py-8 tw-text-center">Local Amenities</h1></div>
            </div>

            <div>
                <img src="./assets/images/IMG_0058.jpeg" style="padding-left: 20px; padding-bottom: 10px;" align="right">
                <p class="text-justify">Within a few minutes walk: A small shop Fistral Stores and off-licence.  A convenient Spar shop just a short walk past the Golf Course leading on to Tower Road.  Several Hotels offering meals to non-residents.</p>
                <p class="text-justify">Within a 10 minute walk: Sainsburys supermarket Alma Place Newquay TR7 1NF Open Monday-Saturday 7am-9pm and Sunday 10am-4pm.</p>
                <p class="text-justify">Within a five minutes drive: Just off the A392 in between Newquay & Quintrell Downs is <a href="https://en-gb.facebook.com/TrevilleyFarmShop" target="_blank">Trevilley Farm Shop</a> where you can buy local produce.  Why not take a look at their website where you can order a produce box, of your choice, to be delivered to you, at the start of your holiday. Please contact Errol on 01637 872 310 or email to discuss.</p>

                <h4 class="text-bold pb-4">Amenities Include</h4>
                <ul class="default">
                    <li>Morrison's Store with a Petrol Station at Treloggan Road Newquay TR7 2JQ<br>Open Monday-Saturday 8am-9pm and Sunday 10am-4pm.<br><br></li>
                    <li>Lidl Store at Treloggan Road, Newquay, TR7 2GZ. <br>Open Monday-Saturday 8am-9pm Sunday 10am-4pm<br><br></li>
                    <li>A new Asda Store at Oakleigh Terrace, Newquay TR7 1RN.<br>Monday-Wednesday 8am-8pm<br>Thursday-Friday 8am-9pm<br>Saturday 8am-8pm and Sunday 11am-5pm<br><br></li>
                    <li>Aldi Store at Cliffe Road, Newquay, TR7 1SW.<br><br></li>
                    <li>A new Tesco Express is now open on Hillgrove Road, Narrowcliff, Newquay. TR7 2RZ<br>6am - 11pm all week.<br><br></li>
                </ul>
                <h4 class="pb-2">Within walking distance</h4>
                <p class="text-justify">There are plenty of places to choose from if you fancy your Lunch out or Evening meal, without even getting the car out!</p>
                <p class="text-justify">On South Fistral Beach, just a couple of minutes walk away is Sea Spray Fistral where you will receive a warm welcome in a perfect location too.</p>
                <p class="text-justify">Tucked away on the Gannel Estury overlooking Crantock, is <a href="https://fernpit.co.uk" target="_blank"><strong>Fern Pit Cafe</strong></a>.  With a path down to the bridge accessible to Crantock Beach, at low tide or the ferry at high tide. They offer light refreshments, home made cake, cream teas, sandwiches & salads. With crab a speciality caught by their own fishing boat in the waters around Newquay.</p>
                <p class="text-justify"><strong>Lewinnick Lodge</strong>, on Pentire the Headland Telephone 01637 878 117</p>
                <p class="text-justify"><a href="https://www.rickstein.com/eat-with-us/fistral/" target="_blank"><strong>Rick Stein Fistral</strong></a> Telephone 01637 303 103 Open 10am-9pm</p>
                <p class="text-justify"><a href="https://www.thefishhousefistral.com" target="_blank"><strong>The Fish House Fistral</strong></a> Telephone 01637 872085 (see website for opening times)</p>
                <p class="text-justify"><a href="https://www.seasprayfistral.co.uk" target="_blank"><strong>Sea Spray Fistral</strong></a></p>
                <p class="text-justify">If you fancy treating yourselves to Afternoon Tea or an Evening meal, the Headland Hotel is located just above 'Little Fistral' on the Coastal Path.</p>
                <p class="text-justify">Walking to Newquay Town Centre: You can walk to Newquay town centre along the footpath by the Golf Course, turn left onto Tower Road then next right down Hope Terrace, which leads to Fore Street in Newquay.</p>
                <p class="text-justify">This means The Vista is close enough to Newquay for those who enjoy the night life and music, and far enough for those who want to ignore it!</p>
                <p class="text-justify">Outdoor Activities: The luxury self catering apartment is available all year round and is ideal for those interested in almost any outdoor activities, including surfing at the surfing capital of the UK - Fistral Beach, Surf hire is available too. The South West Coastal path offers breathtaking coastal walks.</p>
            </div>
        </div>
    </div>

@endsection
