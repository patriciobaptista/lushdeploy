@extends('layout')
@section('main')
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/about.css') }}">
    <title>LUSH - About us</title>
  </head>
    <body>
    <main id="main" class="container">
      <div class="row">
        <div class="col-12 text-center pt-5 mt-5">
          <h1>about us</h1>
          </div>
          <div id="feature" class="feature_divider">
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>We founded Lush Luxury Travel in 2019 as we wanted to share a way of travelling that didn’t yet exist in Argentina – a tailored approach to planning a holiday for discerning and well-informed travellers. Our guests are looking for a more exclusive way to discover the world, with insider advice to enhance each trip.

With offices in Singapore, Hong Kong, Dubai and London, we pride ourselves on delivering the most memorable travel experiences available. Our cosmopolitan team have all lived and worked around the globe, so they have a deep knowledge of different cultures. Our aim is to understand exactly what you are looking for when you travel, so that we can create the perfect holiday for your specific requirements. We operate internationally, so start ticking destinations off your bucket list now!</p>
          </div>
         </div>
          <div class="feature_divider_small">
          </div>
          <div class="row">
            <article class="texto col-12 text-center">
              <h2>our team</h2>
              <div class="feature_divider_small">
              </div>
            </article>
          </div>
          <div class="team row">
            <div class="col-12 col-md-12 col-lg-6 text-center">
              <img class="imagen" src="{{asset('/storage/pato.png')}}" alt="foto">
              <h3>Patricio Baptista</h3>
              <div class="feature_divider_small">
              </div>
              <p>Marketing Director</p>
            </div>
            <div class="col-12 col-md-12 col-lg-6 text-center">
              <img class="imagen" src="{{asset('storage/leo.png')}}" alt="foto">
              <h3>Leo Bagiu</h3>
              <div class="feature_divider_small">
              </div>
              <p>Product Manager</p>
            </div>
            <div class="feature_divider_small">
            </div>
           </div>
           <div class="row">
             <article class="texto col-12 text-center">
               <h2>Why lush luxyry travel</h2>
               <div class="feature_divider_small">
               </div>
               <p>EXPERTLY CRAFTED: By learning what inspires and excites you, we fuse our wealth of expertise and deep understanding of destinations together to create unparalleled day-by-day itineraries that perfectly suit your needs. However, challenging or unusual the request, at Lush Luxury Travel, we use our knowledge and expertise to deliver our guests with exceptional tailor-made holidays and unforgettable moments.</p>
               <p>EASE: When booking with Lush Luxury Travel we allocated you one point of contact who will seamlessly guide you through the booking process, providing you with reassurance and professionalism throughout research, booking and traveling stages of your holiday. All you have to do is enjoy the experience and we'll take care of the rest.</p>
               <p>PEACE OF MIND: With Lush Luxury Travel, you can feel safe in the knowledge that you are experiencing the best possible trip for you. From the accommodation to the activities, the food to the entertainment, there will be nothing that you are missing out on. You also gain the extra reassurance, that while you are traveling, we are constantly on hand to make sure that your holiday runs seamlessly.</p>
               <p>VALUE: We carefully nurture our relationships with global and local suppliers so that they can provide the best value to our clients. We know where to find the most attractive offer and prices, as a guest of Lush Luxury Travel, you can take advantage of our exclusive perks from partners around the world. With every booking, you are tapping into more than 100 years of combined experience, filtering out only the very best that luxury travel has to offer, saving you a huge amount of your precious time.</p>
               <p>KNOWLEDGE: Our Travel Designers spend the year crisscrossing the globe learning more about the countries they specialise in and ensuring their product knowledge is second-to-none. Having first-hand experience of our destinations and your requirements, we are able to craft itineraries that suit all your needs.</p>
               <p>BESPOKE: The personal connections that we make at Lush Luxury Travel, both on the ground with experts and our clients, enables us to create and craft experiences that are as special as you are.</p>
             </article>
            </div>
      </main>
    </body>
@endsection
