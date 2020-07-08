@extends('layout')
@section('main')
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/faq.css') }}">
    <title>LUSH - FAQ</title>
  </head>
  <body class="body">

  <main id="main" class="container-fluid bora" style="background-image: url({{asset('/storage/bora.jpg')}})">
  <section class="container">
    <div class="row pt-5">
      <div class="col-12 text-center title pt-5">
        <h1 id="h1">frequently asked questions</h1>
        <div id="feature"class="feature_divider mt-3">
        </div>
      </div>
    </div>
    <button type="button" class="collapsible mt-3 mb-2"><h2>Why should I use LUSH Luxury Travel?</h2></button>
    <div class="content">
      <p>When you work with us, you are gaining access to over 40 years of luxury travel experience, important travel connections from around the world, access to exclusive tours, hotels, resorts and properties plus, undeniably, the top customer service a traveler could want.

Our professional Luxury Travel Advisors listen to what your idea of an ideal trip is and then by finding out more about you and your likes, our luxury travel advisers can customize a detailed, personalized itinerary for you. Travel should be more then hopping on a plane and going to a hotel or resort. Let our luxury travel advisers plan a special trip, designed around you and your travel dreams.</p>
    </div>
    <button type="button" class="collapsible mb-2"><h2>What is the difference between a Travel Agent and a Travel Advisor?</h2></button>
    <div class="content">
      <p>A travel agent recommends hotels and resorts, book flights and makes reservations.

A Travel Advisor, is a professional Travel Expert. Very importantly, they have traveled and visited many of the properties that they recommend. They find out about you; your likes, dislikes, wants, needs and most importantly, your travel dreams. Travel Advisors plan experiences arranging all the details from the time you depart for the airport to the time you arrive back home. A professional Travel Advisor has the contacts and connections around the world to make your trip seamless and perfect. They design tailored programs and one of a kind experiences for their clients. Imagine a private tour at your favorite art gallery, or an after-hours visit to a special landmark. Private Jets and Yachts, Top End Hotels and Resorts, Private Tours, Exclusive Outings… the list goes on, the only thing that limits it is your imagination.

Put our expert Luxury Travel Advisors to the test and wait to be amazed!</p>
    </div>
    <button type="button" class="collapsible mb-2"><h2>How do I pay for my reservations and hotel stay?</h2></button>
    <div class="content">
      <p>You will make your payments through LUSH Luxury Travel to each vendor, hotel, resort and or airline. Most major credit cards are accepted (American Express, Visa and MasterCard) and in some cases, payment is made at the end of your stay for certain hotel stays or car rentals. In most cases, a deposit may be needed to secure your reservation. This will be discussed during your chat with a Travel Advisor.</p>
    </div>
    <button type="button" class="collapsible mb-2"><h2>Are there any other costs or fees?</h2></button>
    <div class="content">
      <p>For simple reservations there is no fee. For more extensive journeys, we plan it all with YOU in mind. Every trip is unique, tailored to YOU. No two trips are ever exactly the same! This type of service requires hours of research, planning and preparation. Therefore, we charge a planning fee, contact us for more details.</p>
    </div>
    <button type="button" class="collapsible mb-2"><h2>CAN I BOOK LARGE GROUPS?</h2></button>
    <div class="content">
      <p>Definitely. We can tailor vacations for families and large groups with excellent rates and a first-class group management system that will take the stress out of planning. Just email us.</p>
    </div>
    <button type="button" class="collapsible mb-2"><h2>HOW DO I UPDATE MY ACCOUNT INFORMATION?</h2></button>
    <div class="content">
      <p>Kindly send us an email at admin@lushluxurytravel.com and we'll update your records. Reminder: never send sensitive information such as credit card numbers or passwords via e-mail. Give us a call.</p>
    </div>
    <button type="button" class="collapsible mb-3"><h2>¿Las comidas en el viaje estan incluidas?</h2></button>
    <div class="content mb-3">
      <p>Las comidas en el viaje no están incluidas dentro del paquete. En el viaje se realizan paradas en paradores turisticos donde brindan el servicio de comidas ya sea para desayuno, almuerzo o cena.</p>
    </div>
  </section>
  </main>

  <script>
  var coll = document.getElementsByClassName("collapsible");
  var i;

  for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
  }
  </script>
  </body>
  @endsection
