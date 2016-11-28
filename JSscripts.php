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