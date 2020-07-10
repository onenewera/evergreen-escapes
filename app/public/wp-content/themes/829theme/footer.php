<?php wp_footer();?>   
    <footer id="footer">

        <div id="footer-top">

            <div id="footer-image">
                <ul id="footer-location-info">
                    <li class="footer-location">
                        <span><?php the_field('portland_footer_location_title'); ?></span>
                        <span>2305 SE 9th Ave Portland, OR 97214</span>
                        <span>(503)252-1931</span>
                    </li>
                    <li class="footer-location">
                        <span><?php the_field('seattle_footer_location_title'); ?></span>
                        <span>2305 SE 9th Ave Portland, OR 97214</span>
                        <span>(503)252-1931</span>
                    </li>
                </ul>

            </div>

            <div id="footer-links">

                <div id="footer-illustration">
                    <img src="http://evergreen-escapes.local/wp-content/uploads/2020/04/footer-tree-illo.png" alt="">
                </div>

                <div id="footer-form-container">
                    <h3>Specials & Expert Advice Delivered</h3>
                    <form id="footer-form">
                        <label for="fname">First name</label><br>
                        <input type="text" id="fname" name="fname"><br>
                        <label for="lname">Last Name</label><br>
                        <input type="text" id="lname" name="lname">
                        <input class="button" type="submit" value="Submit">
                    </form>
                </div>

                <div id="footer-nav">
                    footer nav
                </div>

            </div>

        </div>

        <div id="footer-bottom">
            Footer Bottom
        </div>
    </footer>
   
    </body>
</html>