// TO DO
// - Add Babas.js for page transitions
// - Finish styling page
// - Get gsap transitions setup


document.addEventListener('DOMContentLoaded', () => {

    let nav = document.getElementById('navigation')
    let scrollPosContainer = document.getElementById('scroll-position')
    let distanceContainer = document.getElementById('distance-to-top')

    var scrollPos = 0

    let scrollIndicatorContainer = document.getElementById('scroll-indicator')
    let navLogo = document.getElementById('nav-logo')

    let last_known_scroll_position = 0;
    let ticking = false;

    function doSomething(scroll_pos) {
        scrollPosContainer.innerHTML = scroll_pos

        let scrollPosition = window.pageYOffset;
        let windowSize     = window.innerHeight;
        let bodyHeight     = document.body.offsetHeight;
        distanceContainer.innerHTML = Math.max(bodyHeight - (scrollPosition + windowSize), 0)
        
        if (scroll_pos > 0) {
            scrollIndicatorContainer.style.opacity = 0;
            scrollIndicatorContainer.style.transform = "translateY(-1.1vh)";
        } else {
            scrollIndicatorContainer.style.opacity = 1;
            scrollIndicatorContainer.style.transform = "translateY(0)";
        }
    }

    window.addEventListener('scroll', function(e) {
        last_known_scroll_position = window.scrollY;
        

        if (!ticking) {
            window.requestAnimationFrame(function() {
            doSomething(last_known_scroll_position);
            ticking = false;
            });

            ticking = true;
        }

            // The Scroll based on direction Stuff
            // detects new state and compares it with the new one
            if ((document.body.getBoundingClientRect()).top > scrollPos) {
                // Scrolling Down
                nav.classList.remove('hide-nav')
                // nav.style.transform = "translateY(-35px)";
                // console.log('scrolling')
            } else {
                // Scrolling Up
                nav.classList.add('hide-nav')
                // nav.style.transform = "translateY(0)";
            } 
            // saves the new position for iteration.
            scrollPos = (document.body.getBoundingClientRect()).top;
        });


    // GSAP Hero timelines
    let heroTL = new TimelineMax()

    heroTL
        .to('#homepage-hero-bg-container', 6, {
            opacity: 0
        }, '-=6')
        .to('#hero-img-people', 6, {
            y: 600,
            scale: 1.2
        }, '-=6')
        .to('#hero-img-skyride', 6, {
            y: 500,
            scale: 4.2
        }, '-=6')
        .to('#hero-img-background', 6, {
            y: 800,
        }, '-=6')
        // .to('#hero-img-sky', 6, {
        //     y: 700
        // }, '-=6')
        .to('#title, #sub-head', 6, {
            y: 300
        }, '-=6')

    // Hero Scroll magic controller
    let heroController = new ScrollMagic.Controller()

    let heroScene = new ScrollMagic.Scene({
        triggerElement: '.homepage-hero',
        duration: '300%',
        triggerHook: 0
    })
    .setTween(heroTL)
    .addTo(heroController)


    // Full Width Block timeline
    let fullWidthBlockTL = new TimelineMax()

    fullWidthBlockTL
        .to('.full-width-block', 24, {
            y: 55,
            scale: 1.1
        }, '-=2')
        .to('#full-width-block-title', 12, {
            y: -25,
            opacity: 1
        }, '-=4')
        .to('#full-width-block-image', 12, {
            x: 0,
            opacity: 1
        }, '-=4')
        .to('#full-width-block-subhead', 12, {
            y: -25,
            opacity: 1
        }, '-=6')
        .to('#full-width-block-paragraph', 12, {
            y: -25,
            opacity: 1
        }, '-=8')
        

    // Full Width Block Scroll magic controller
    let fullWidthBlockController = new ScrollMagic.Controller()

    let FullWidthBlockScene = new ScrollMagic.Scene({
        triggerElement: '#full-width-block-content',
        duration: '50%',
        offset: -300
        // triggerHook: 0
    })
    // .setClassToggle('.full-width-block', 'hide')
    .setTween(fullWidthBlockTL)
    .addTo(fullWidthBlockController)


    // Page content placeholder section animation to show how the logo will transition to black on lighter color
    let pageContentTL = new TimelineMax()

    pageContentTL
        .to('#page-content h1', 24, {
            y: 155
            // scale: 1.1
        }, '-=2')
        

    // Full Width Block Scroll magic controller
    let pageContentTLController = new ScrollMagic.Controller()

    let pageContentTLScene = new ScrollMagic.Scene({
        triggerElement: '#page-content',
        duration: '50%',
        offset: -300
        // triggerHook: 0
    })
    // .setClassToggle('.full-width-block', 'hide')
    .setTween(pageContentTL)
    .addTo(pageContentTLController)

    function removeCookies() {
        console.log('trigger')
    }

    setTimeout(function() { 
        removeCookies(); 
    }, 5000);
})
