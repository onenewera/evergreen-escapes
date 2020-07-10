<?php get_header();?>

    <!-- Cookie bar -->
    <!-- <div id="cookie-bar" class="fixed-bottom"> Gimme Your Cookies</div> -->

    <!-- Hero -->
    <div id="homepage-hero"> 

        <!-- Location Detail Widget Thingy -->
        <!-- <div id="location-widget">
            <div id="location">
                Location Numver
            </div>
        </div> -->
        
        <!-- Main content -->
        <div class="container content-container text-center">
            <div class="row">
                <div class="col-12" id="homepage-content">
                    <div>
                        <h3 id="sub-head">Award Winning</h3>
                        <h1 id="title"><?php echo esc_html( get_the_title() ); ?></h1>
                    </div>
                    <div id="scroll-indicator">
                        <span></span>
                    </div>
                </div>
            </div>
        </div> <!-- Main content -->

        <!-- Background image stuff -->
        <div id="homepage-hero-bg-container">
            <div id="hero-img-sky" class="hero-bg-img">
                <img src="<?php the_field('sky_image'); ?>" alt="" />
                <!-- <img src="/wp-content/uploads/2020/02/hero-img-sky.png"> -->
            </div>
            <div id="hero-img-background" class="hero-bg-img">
                <img src="<?php the_field('hero-img-background'); ?>" alt="" />
            </div>
            <div id="hero-img-skyride" class="hero-bg-img">
                <img src="<?php the_field('hero-img-skyride'); ?>" alt="" />
            </div>
            <div id="hero-img-people" class="hero-bg-img">
                <img src="<?php the_field('hero-img-people'); ?>" alt="" />
            </div>
        </div><!-- Background image stuff -->
    </div> <!-- homepage-hero -->

    <div id="awards-section" class="container">
        <div class="row text-center">
            <div class="col-3">
                Title
            </div>
            <div class="col-3">
                <img src="<?php the_field('2016_viator_award'); ?>" alt="">
            </div>
            <div class="col-2">
                <img src="/wp-content/uploads/2020/02/2018-TripAdvisor-Award.png" alt="">
            </div>
            <div class="col-2">
                <img src="/wp-content/uploads/2020/02/2017-Viator-Award.png" alt="">
            </div>
            <div class="col-2">
                <img src="/wp-content/uploads/2020/02/NatGEO-Award.png" alt="">
            </div>
        </div>
    </div>

    <!-- Full Width Block -->
    <div class="full-width-block container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div id="full-width-block-image"></div>
                </div>
                <div class="col-6" id="full-width-block-content">
                    <h4 id="full-width-block-subhead">Go Forth</h4>
                    <h2 id="full-width-block-title">See Amazing Sites</h2>
                    <p id="full-width-block-paragraph">Our hardworking guides are best in class and have deep roots in the Pacific Northwest. We’ve been <b>“Certified Excellent”</b> by TripAdvisor every year since 2011 and are designated TripAdvisor “Hall of Fame”</p>
                    <!-- <div>Trip Advisor Reviews</div> -->
                </div>
            </div>
        </div>
    </div> <!-- Full Width Block-->

    <div id="page-content">
        <h1>Page Content</h1>
    </div>


    <!-- GSAP & Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
    <script src="js/main.js"></script>

<?php get_footer();?>