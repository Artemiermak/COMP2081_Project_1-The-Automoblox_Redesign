<?php ob_start();

$page_title = 'Home page. COMP2081. Project 1. Automoblox. Artem Iermak';
require('nav.php');

ob_flush();
?>
<!-- ============ end of SUB NAV ============ -->

            <section class="SludgeLeft container Slider">
                <h2 id="header">Choose your Automoblox model.</h2>
                <div id="slides">
                    <a href="a9model.html"><img src="img/a9_large.png" alt="A9 model photo" /></a>
                    <a href="c9model.html"><img src="img/c9_large.png" alt="C9 model photo" /></a>
                    <a href="m9model.html"><img src="img/m9_large.png" alt="M9 model photo" /></a>
                    <a href="s9model.html"><img src="img/s9_large.png" alt="S9 model photo" /></a>
                    <a href="t9model.html"><img src="img/t9_large.png" alt="T9 model photo" /></a>
                </div>
            </section>

            <section class="SludgeLeft About">
                <h2>About us</h2>
                <img src="img/autoblox-thumb.jpg" alt="Autoblox photo">
                <p>Automoblox is a brand name of a wooden car construction toy designed by Patrick Calello and produced by Automoblox Company, LLC of Roseland, New Jersey.<br><br>
                 The toy consists of wooden car body sections with patented plastic interconnects, polycarbonate wheels and rubber tires, plastic passengers and polycarbonate screens. Each car can be disassembled into its component parts and re-assembled, parts from different cars can be combined to allow children to design their own models. They have also been noted for their extensive use in the PLTW program.</p>
            </section>
        </main>


<!-- ================== Jquery =============== -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>

<!-- ================== Boilerplate stuff =============== -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- ================== custom JS =============== -->
        <script src="js/custom.js"></script>
        

<!-- ================== SLIDES JS =============== -->
        <script src="js/Slides-SlidesJS-3/source/jquery.slides.min.js"></script>

        <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
        <script>
            $(function() {
            $('#slides').slidesjs({
                width: 940,
                height: 528,
                play: {
                active: true,
                auto: true,
                interval: 5000,
                swap: true
                }
            });
            });
        </script>
        <!-- End SlidesJS Required -->

            <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
