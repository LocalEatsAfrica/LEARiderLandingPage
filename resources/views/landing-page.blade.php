@extends('layouts.head')
@extends('layouts.header')
@section('content')
<!-- Feature Section Start -->
    <section class="p-5 mt-6">
    <div class="container">
        <div class="row text-center g-4">

        <!-- First Card -->
        <div class="col-md d-flex">
            <div class="card bg-white text-dark h-100 w-100 border-0">
            <div class="card-body text-center d-flex flex-column">
                <div class="icon h3 mb-3">
                <i class="bi bi-people"></i>
                </div>
                <h3 class="card-title mb-3">
                Drive on Your Terms
                </h3>
                <p class="card-text flex-grow-1">
                You’re in control. Choose when to go online, where to deliver, and how much you want to earn. With LocalEats Africa, there’s no office, no boss — just the freedom to work your own way while delivering delicious local meals.
                </p>
            </div>
            </div>
        </div>

        <!-- Second Card -->
        <div class="col-md d-flex">
            <div class="card bg-white text-dark h-100 w-100 border-0">
            <div class="card-body text-center d-flex flex-column">
                <div class="icon h3 mb-3">
                <i class="bi bi-bag"></i>
                </div>
                <h3 class="card-title mb-3">
                Instant Start
                </h3>
                <p class="card-text flex-grow-1">
                Accept orders when it works for you, find high-demand areas nearby, and boost your earnings with special promos like Peak Hours and Bonus Runs — all from the LocalEats Driver app.
                </p>
            </div>
            </div>
        </div>

        <!-- Third Card -->
        <div class="col-md d-flex">
            <div class="card bg-white text-dark h-100 w-100 border-0">
            <div class="card-body text-center d-flex flex-column">
                <div class="icon h3 mb-3">
                <i class="bi bi-clock"></i>
                </div>
                <h3 class="card-title mb-3">
                Start Earning Fast
                </h3>
                <p class="card-text flex-grow-1">
                Sign up in minutes and hit the road in no time. Once approved, you can start delivering right away and cash out your earnings instantly* — no long waits, just quick payouts.
                </p>
            </div>
            </div>
        </div>

        <!-- Footnote -->
        <div class="my-5">
            *Subject to approval, availability, and activation of your LocalEats Wallet to access instant cashouts.
        </div>

        </div>
    </div>
    </section>

    <!-- Feature Section2 Start -->
    <section id="deliver" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
            
                <!-- Image Column -->
                <div class="col-md-6 mb-4 mb-md-0 text-center text-md-start me-md-5">
                    <img 
                    src="data:image/jpeg;base64,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"  
                    class="img-fluid" 
                    alt="Delivery driver" 
                    style="max-width: 100%; height: auto;"
                    >
                </div>

                <!-- Text Column -->
                <div class="col-md-5 p-3 text-center text-md-center text-lg-start text-dark">
                    <h2 class="fw-bold">
                        Your Safety Comes First
                    </h2>
                    <p class="lead">
                        We’ve got your back — with built-in safety features, responsive support, and tools that protect you every step of the way.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Feature Section3 Start -->
    <section class="p-5">
        <div class="container">        
            <h3 class="fw-bold text-center mb-4">Earn Based on Your Hustle</h3>
                    <div class="row text-center g-4">

                        <!-- First Card -->
                        <div class="col-md-4 d-flex">
                            <div class="card bg-white text-dark w-100 border-0">
                                <div class="card-body text-center d-flex flex-column">
                                    <div class="icon h3 mb-3">
                                        <img src="https://media.istockphoto.com/id/1441604803/photo/young-african-american-deliveryman-with-mobile-phone-sitting-on-bicycle.jpg?s=612x612&w=0&k=20&c=sIwUT5GlCLX922tZT4gIUkHeP_iDRTJ-Djm0BHBCv5Y=" class="img-fluid rounded" alt="Base Pay">
                                    </div>
                                    <h3 class="card-title mb-3 fw-bold">Base Pay</h3>
                                    <p class="card-text flex-grow-1">
                                        For every delivery you accept, you’ll always earn a guaranteed Base Pay. It’s calculated based on distance, delivery time, and how popular the order is — so the more challenging the trip, the higher your base.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Second Card -->
                        <div class="col-md-4 d-flex">
                            <div class="card bg-white text-dark w-100 border-0">
                                <div class="card-body text-center d-flex flex-column">
                                    <div class="icon h3 mb-3">
                                        <img src="https://media.istockphoto.com/id/1225572010/photo/african-people-delivery-man-on-a-motorcycle.jpg?s=612x612&w=0&k=20&c=zZY7xCEQBP0VFFwTZsHHrB5NWWh0ffMcOE1Okxin4mU=" class="img-fluid rounded" alt="Tips">
                                    </div>
                                    <h3 class="card-title mb-3 fw-bold">Plus Tips</h3>
                                    <p class="card-text flex-grow-1">
                                        Customers can tip you directly through the LocalEats app when you accept a delivery — and most of them do. You’ll always keep 100% of the tips you earn. No cuts, no sharing.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Third Card -->
                        <div class="col-md-4 d-flex">
                            <div class="card bg-white text-dark w-100 border-0">
                                <div class="card-body text-center d-flex flex-column">
                                    <div class="icon h3 mb-3">
                                        <img src="https://media.istockphoto.com/id/1441604738/photo/side-view-of-restful-courier-of-food-delivery-service.jpg?s=612x612&w=0&k=20&c=S70MWGMTh4uwPdUKe5cn7lIRo3bvAhh8iofpbFECDAY=" class="img-fluid rounded" alt="Promotions">
                                    </div>
                                    <h3 class="card-title mb-3 fw-bold">Plus Promotions</h3>
                                    <p class="card-text flex-grow-1">
                                        Earn even more with extra incentives tailored to boost your hustle.
                                    </p>
                                    <p class="card-text flex-grow-1">
                                        <span class="fw-bold">
                                            Peak Pay
                                        </span> gets you paid extra for each delivery during high-demand hours.
                                    </p>
                                    <p class="card-text flex-grow-1">
                                        <span class="fw-bold">
                                            Challenges
                                        </span> let you complete a set number of deliveries within a time frame and earn bonus cash.
                                    </p>
                                    <p class="card-text flex-grow-1">
                                        <span class="fw-bold">
                                            Delivery Streaks
                                        </span> allow riders to accept and complete multiple orders back-to-back to unlock extra rewards.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Section4 Start -->
    <section id="deliver2" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
            
                <!-- Text Column -->
                <div class="col-md-5 p-3 text-center text-md-center text-lg-start text-dark">
                    <h2 class="fw-bold">Starter Kit: Ready from Day One</h2>
                    <p class="lead">
                       Hit the ground running with gear that keeps your meals hot, your deliveries smooth, and your hustle looking sharp.
                    </p>
                    <p class="lead">
                        Want to upgrade your delivery game? Our gear shop lets you choose the items that suit your hustle and keep you looking sharp on the move.
                    </p>
                </div>

                <!-- Image Column -->
                <div class="col-md-6 mb-4 mb-md-0 text-center text-md-end ms-md-5">
                    <img 
                    src="https://media.istockphoto.com/id/1300686240/photo/african-rider-man-delivering-meal-to-customers-with-electric-scooter-while-wearing-face-mask.jpg?s=612x612&w=0&k=20&c=OAoJ__8sJkSdYzoti_BahS5jRJgygCsFFSSdF9Padgc="
                    class="img-fluid" 
                    alt="Delivery driver" 
                    style="max-width: 100%; height: auto;"
                    >
                </div>

            </div>
        </div>
    </section>

    <!-- Feature Section5 Start -->
    <section class="p-5" id="deliver3">
        <div class="container">
            <div class="row text-center g-4">
                <h3 class="fw-bold text-center mb-4">
                    Requirements
                </h3>

                <!-- First Circle -->
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="d-flex flex-column align-items-center">
                        <div 
                            class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center mb-2"
                            style="width: 30px; height: 30px; font-size: 1rem;">
                            1
                        </div>
                        <div class="lead fw-bold mb-4">Age</div>
                        <p>You must be at least 18 years old.</p>
                        <p>*Some cities or regions may have additional age or permit requirements based on local regulations.</p>
                    </div>
                </div>

                <!-- Second Circle -->
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="d-flex flex-column align-items-center">
                        <div 
                            class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center mb-2"
                            style="width: 30px; height: 30px; font-size: 1rem;">
                            2
                        </div>
                        <div class="lead fw-bold mb-4">Vehicle</div>
                        <p>You can deliver using a bike, motorcycle, or car — depending on your city.</p>
                    </div>
                </div>

                <!-- Third Circle -->
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="d-flex flex-column align-items-center">
                        <div 
                            class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center mb-2"
                            style="width: 30px; height: 30px; font-size: 1rem;">
                            3
                        </div>
                        <div class="lead fw-bold mb-4">Documentation</div>
                        <p>
                            You'll need a valid ID or driver’s license, bank or wallet details for payouts, and a smartphone (Android or iPhone) to access the LocalEats Driver app.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Accordion Section Start -->
    <section class="p-5">
        <div class="container">
            <div class="h2 mb-4 fw-bold">Frequently asked questions</div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
            
                <!-- Accordion 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button 
                        class="accordion-button collapsed fw-bold" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#flush-collapseOne" 
                        aria-expanded="false" 
                        aria-controls="flush-collapseOne">
                            How do I sign up to become a LocalEats delivery driver?
                        </button>
                    </h2>
                    <div 
                    id="flush-collapseOne" 
                    class="accordion-collapse collapse" 
                    aria-labelledby="flush-headingOne" 
                    data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            You can sign up to become a LocalEats delivery driver by filling out a quick online application, uploading your documents, and once approved, receiving your starter kit to begin delivering and earning on your own schedule.
                        </div>
                    </div>
                </div>

                <!-- Accordion 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button 
                        class="accordion-button collapsed fw-bold" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#flush-collapseTwo" 
                        aria-expanded="false" 
                        aria-controls="flush-collapseTwo">
                            What do I need to get started?
                        </button>
                    </h2>
                    <div 
                    id="flush-collapseTwo" 
                    class="accordion-collapse collapse" 
                    aria-labelledby="flush-headingTwo" 
                    data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            To get started as a LocalEats delivery driver, you’ll need a valid ID, a smartphone, a means of transportation (bike, motorcycle, or car), and to complete a brief online application.
                        </div>
                    </div>
                </div>

                <!-- Accordion 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button 
                        class="accordion-button collapsed fw-bold" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#flush-collapseThree" 
                        aria-expanded="false" 
                        aria-controls="flush-collapseThree">
                            How long does it take to start working with LocalEats?
                        </button>
                    </h2>
                    <div 
                    id="flush-collapseThree" 
                    class="accordion-collapse collapse" 
                    aria-labelledby="flush-headingThree" 
                    data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            You can start working with LocalEats within a few days — just complete the online application, upload your documents, and once approved, you’ll receive your starter kit and can begin delivering right away.
                        </div>
                    </div>
                </div>

                <!-- Accordion 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button 
                        class="accordion-button collapsed fw-bold" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#flush-collapseFour" 
                        aria-expanded="false" 
                        aria-controls="flush-collapseFour">
                            How do I get paid?
                        </button>
                    </h2>
                    <div 
                    id="flush-collapseFour" 
                    class="accordion-collapse collapse" 
                    aria-labelledby="flush-headingFour" 
                    data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            You get paid directly to your bank account through the LocalEats Driver App, with earnings calculated per delivery — and you can choose to receive payouts weekly or instantly, depending on your location and payment settings.
                        </div>
                    </div>
                </div>

                <!-- Accordion 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button 
                        class="accordion-button collapsed fw-bold" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#flush-collapseFive" 
                        aria-expanded="false" 
                        aria-controls="flush-collapseFive">
                            When can I work?
                        </button>
                    </h2>
                    <div 
                    id="flush-collapseFive" 
                    class="accordion-collapse collapse" 
                    aria-labelledby="flush-headingFive" 
                    data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            With LocalEats, you can work anytime you want — there are no set hours, so you’re free to go online and start delivering whenever it fits your schedule.
                        </div>
                    </div>
                </div>

                <!-- Accordion 6 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSix">
                        <button 
                        class="accordion-button collapsed fw-bold" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#flush-collapseSix" 
                        aria-expanded="false" 
                        aria-controls="flush-collapseSix">
                            How much can I earn per delivery?
                        </button>
                    </h2>
                    <div 
                    id="flush-collapseSix" 
                    class="accordion-collapse collapse" 
                    aria-labelledby="flush-headingSix" 
                    data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            On average, LocalEats delivery drivers earn about ₦1,000 per delivery.
                        </div>
                    </div>
                </div>

                <!-- Accordion 7 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSeven">
                        <button 
                        class="accordion-button collapsed fw-bold" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#flush-collapseSeven" 
                        aria-expanded="false" 
                        aria-controls="flush-collapseSeven">
                            What happens if I have an issue during delivery?
                        </button>
                    </h2>
                    <div 
                    id="flush-collapseSeven" 
                    class="accordion-collapse collapse" 
                    aria-labelledby="flush-headingSeven" 
                    data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                          If you have an issue during delivery, you can contact LocalEats support directly through the Driver App — our support team is available to assist you with problems like order delays, customer issues, or app errors, ensuring you're never alone on the road.
                        </div>
                    </div>
                </div>

                <!-- Accordion 8 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingEight">
                        <button 
                        class="accordion-button collapsed fw-bold" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#flush-collapseEight" 
                        aria-expanded="false" 
                        aria-controls="flush-collapseEight">
                            Is there a uniform or gear required?
                        </button>
                    </h2>
                    <div 
                    id="flush-collapseEight" 
                    class="accordion-collapse collapse" 
                    aria-labelledby="flush-headingEight" 
                    data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            No, the LocalEats delivery gear is not required.
                            While it's recommended for visibility and professionalism, you're free to deliver without it unless specified otherwise by certain restaurant partners or local guidelines.
                        </div>
                    </div>
                </div>

                <!-- Accordion 9 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingNine">
                        <button 
                        class="accordion-button collapsed fw-bold" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#flush-collapseNine" 
                        aria-expanded="false" 
                        aria-controls="flush-collapseNine">
                            What cities does LocalEats currently operate in?
                        </button>
                    </h2>
                    <div 
                    id="flush-collapseNine" 
                    class="accordion-collapse collapse" 
                    aria-labelledby="flush-headingNine" 
                    data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Local Eats Africa primarily serves Lagos, though they’re steadily onboarding more local restaurants across other Nigerian cities—aiming to bolster digital and financial inclusion for small and informal food businesses
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </section>
@endsection