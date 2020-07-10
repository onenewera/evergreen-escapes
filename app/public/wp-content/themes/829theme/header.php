<!DOCTYPE html>

<html>
    <head>
        <?php wp_head();?>
    </head>
    <body <?php body_class();?> >

 <!-- Navigation -->
 <nav id="navigation">
        <div id="secondary-nav">
                <ul id="secondary-nav-left">
                    <li><a href="#" alt="Custom & Private Events">Custom & Private Events</a></li>
                    <li><a href="#" alt="The Evergreen Experience">The Evergreen Experience</a></li>
                    <li><a href="#" alt="Trip Advisor Reviews">Trip Advisor Reviews</a></li>
                </ul>

                <ul id="secondary-nav-right">
                    <li><a href="#" alt="FAQs">FAQs</a></li>
                    <li><a href="#" alt="Specials & Promotions">Specials & Promotions</a></li>
                    <li><a href="#" alt="(860) 262-4952">(860) 262-4952</a></li>
                </ul>
        </div>

        <!-- Primary Nav -->
        <div id="primary-nav">
            <div id="primary-nav-left">
                <img id="nav-logo" src="<?php the_field('primary_logo'); ?>" alt="primary_logo_alt_text">
                <!-- <ul class="tour-links">
                    <li class="tour-dropdown">
                        <a href="#">Seattle Tours</a>
                    </li>
                    <li class="tour-dropdown">
                        <a href="#">Portland Tours</a>
                    </li>
                </ul> -->
            </div>
            <div id="primary-nav-right">
                <ul id="primary-ctas">
                    <li><a href="#" class="secondary-button">Contact Us</a></li>
                    <li><a href="#" class="button">Book Now</a></li>
                </ul>
            </div>
        </div>

        <!-- Dev details DELET THESE -->
        <div id="dev-details-container">
            <div id="distance-to-top-container">
            <strong>Distance To Bottom:</strong>
                <span id="distance-to-top" style="margin-left: 8px;"> 0</span> 
            </div>
            <div id="scroll-position-container">
                <strong style="margin-left: 20px;">Scroll Position:</strong>
                <span id="scroll-position" style="margin-left: 8px;"> 0</span>
            </div>
        </div>
    </nav> <!-- Navigation -->
