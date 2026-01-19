<x-layout title="YIOGS 2026 | Home">

    <!--==================================================-->
    <!-- Start Hero Area (Existing) -->
    <!--==================================================-->
    <div class="hero-slides owl-carousel">
        <div class="hero-area d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="hero-content">
                            <h1 class="main-title" data-animation="fadeInUp" data-delay="100ms">
                                SEIZE THE ORANGE BASIN OPPORTUNITY
                            </h1>
                            <p class="hero-desc" data-animation="fadeInUp" data-delay="400ms">
                                Namibia’s 11-Billion Barrel Revolution is Here. Join 800+ Future Leaders and Industry Titans at the Premier Summit Driving the Future of African Energies!
                            </p>
                        </div>

                        <div class="echofy-button" data-animation="fadeInUp" data-delay="600ms">
                            <a href="{{ url('/register') }}">REGISTER NOW</a>
                        </div>

                        <div class="echofy-button two" data-animation="fadeInUp" data-delay="800ms">
                            <a href="{{ url('/sponsor') }}">BECOME A PARTNER</a>
                        </div>
                    </div>
                </div>
            </div>

                <div class="hero-social-icon" data-animation="fadeInLeft" data-delay="1000ms">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="text">Follow Us</li>
                    </ul>
                </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End Hero Area -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start Welcome / Message from Ministry -->
    <!--==================================================-->
    <section class="welcome-area section-padding" style="background-color:#f9f9f9;">
        <div class="container">
            <h2 class="main-heading text-center" data-animation="fadeInUp" data-delay="100ms">
                A MESSAGE FROM THE MINISTRY OF MINES AND ENERGY
            </h2>
            <h4 class="sub-heading text-center" data-animation="fadeInUp" data-delay="200ms">
                Leading Namibia Towards an Inclusive Energy Future.
            </h4>
            <div class="row align-items-center mt-4">
                <div class="col-lg-4" data-animation="fadeInLeft" data-delay="400ms">
                    <img src="{{ asset('front_end/assets/images/home/hero-bg-1.jpg') }}" alt="Ministry Stakeholder" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-8" data-animation="fadeInRight" data-delay="600ms">
                    <p>Namibia stands at the precipice of a transformative era. With the vast potential of the Orange Basin, our mission is clear: to ensure that the wealth of our natural resources translates into the wealth of our people.</p>
                    <p>The Youth in Oil and Gas Summit 2026 (YIOGS 26) is the vital link in this chain.</p>
                    <p>I invite all stakeholders, global partners, and our ambitious youth to join us in Windhoek to shape a sector that is transparent, innovative, and uniquely Namibian!</p>
                    <p><strong>NAME SURNAME</strong><br>POSITION, COMPANY</p>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End Welcome Area -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- YIOGS 2025: Impact Stats -->
    <!--==================================================-->
    <section class="impact-stats section-padding text-center" style="background-color:#fff;">
        <div class="container">
            <h2 class="main-heading mb-5" data-animation="fadeInUp" data-delay="100ms">YIOGS 2025: BY THE NUMBERS</h2>
            <div class="row">
                @php
                    $stats = [
                        ['number' => '600+', 'label' => 'Delegates', 'icon' => 'fas fa-users'],
                        ['number' => '25+', 'label' => 'Nations', 'icon' => 'fas fa-flag'],
                        ['number' => '40+', 'label' => 'Industry Speakers', 'icon' => 'fas fa-microphone'],
                        ['number' => '15+', 'label' => 'Technical Workshops', 'icon' => 'fas fa-tools'],
                    ];
                @endphp
                @foreach($stats as $stat)
                    <div class="col-lg-3 col-md-6 mb-4" data-animation="fadeInUp" data-delay="{{ $loop->index * 200 }}ms">
                        <div class="stat-box p-4 shadow rounded">
                            <i class="{{ $stat['icon'] }} fa-2x mb-2" style="color:#F57C00;"></i>
                            <h3 class="stat-number">{{ $stat['number'] }}</h3>
                            <p>{{ $stat['label'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End Stats Section -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Strategic Vision 2026 -->
    <!--==================================================-->
    <section class="strategic-vision section-padding" style="background-color:#f9f9f9;">
        <div class="container">
            <h2 class="main-heading text-center mb-5" data-animation="fadeInUp" data-delay="100ms">THE 2026 STRATEGIC VISION</h2>

            <div data-animation="fadeInUp" data-delay="200ms">
                <h3 class="sub-heading mt-4">THE FUTURE IS HOMEGROWN: WHY YIOGS 2026 IS UNMISSABLE</h3>
                <p>As Namibia stands on the precipice of its first oil production – with Final Investment Decisions for world-class fields like Venus and Mopane expected in 2026 – the stakes have never been higher. This is a once-in-a-century opportunity for Namibia to get it right from day one.</p>
                <p>The Global Talent Crisis: The energy industry is facing a 'Great Retirement'. Within the next decade, 50% of the current workforce will exit the sector. Stakeholders can no longer afford to be spectators. Failing to invest in the next generation today ensures a costly reliance on foreign expertise tomorrow. YIOGS 2026 is the strategic intervention required to bridge the gap between Africa’s vast resources and its most untapped asset: its youth.</p>

                <h3 class="sub-heading mt-4">GROWTH STORY: WHAT’S NEW FOR 2026?</h3>
                <ul class="list-unstyled">
                    <li><i class="fas fa-cogs" style="color:#F57C00;"></i> <strong>Technology & Services Showcase:</strong> Dedicated exhibition floor giving SPEX partners direct access to procurement heads and future operators.</li>
                    <li><i class="fas fa-map-marked-alt" style="color:#F57C00;"></i> <strong>Extended Programme:</strong> Site Visits & Pre-Event activities for hands-on exposure to port infrastructure and onshore facilities.</li>
                    <li><i class="fas fa-user-graduate" style="color:#F57C00;"></i> <strong>Outcome-Driven Youth Development:</strong> Transforming 'Brain Drain' into 'Brain Gain' by matching elite local talent with innovation and sustainability goals.</li>
                </ul>

                <h3 class="sub-heading mt-4">BRIDGING THE SKILLS GAP IN A MULTI-BILLION-DOLLAR SECTOR</h3>
                <ul class="list-unstyled">
                    <li><i class="fas fa-users-cog" style="color:#F57C00;"></i> <strong>The Workforce is Ageing:</strong> Preparing the next generation to step into high-level leadership roles.</li>
                    <li><i class="fas fa-robot" style="color:#F57C00;"></i> <strong>Technology is Evolving:</strong> AI, sustainable drilling, and the energy transition ensure Namibian youth are 'future-proof'.</li>
                    <li><i class="fas fa-hand-holding-usd" style="color:#F57C00;"></i> <strong>Local Content is Non-Negotiable:</strong> Connecting local talent with international opportunity to ensure Namibia benefits first.</li>
                </ul>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End Strategic Vision -->
    <!--==================================================-->

</x-layout>
