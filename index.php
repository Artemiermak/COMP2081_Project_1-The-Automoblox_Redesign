<?php ob_start();

$page_title = 'Home page. COMP2081. Project 1. Automoblox. Artem Iermak';
$a_class_active_home = 'class="is-active"';
require('nav.php');

ob_flush();
?>
<!-- ============ end of SUB NAV ============ -->

            <section class="SludgeLeft container Slider">
                <h2 id="header">Choose your Automoblox model.</h2>
                <div id="slides">
                    <a href="a9model.php"><img src="img/a9_large.png" alt="A9 model photo" /></a>
                    <a href="c9model.php"><img src="img/c9_large.png" alt="C9 model photo" /></a>
                    <a href="m9model.php"><img src="img/m9_large.png" alt="M9 model photo" /></a>
                    <a href="s9model.php"><img src="img/s9_large.png" alt="S9 model photo" /></a>
                    <a href="t9model.php"><img src="img/t9_large.png" alt="T9 model photo" /></a>
                </div>
            </section>

            <section class="SludgeLeft About">
                <h2 id="#about">About us</h2>
                <img src="img/autoblox-thumb.jpg" alt="Autoblox photo" >
                <p>Automoblox is a brand name of a wooden car construction toy designed by Patrick Calello and produced by Automoblox Company, LLC of Roseland, New Jersey.<br><br>
                 The toy consists of wooden car body sections with patented plastic interconnects, polycarbonate wheels and rubber tires, plastic passengers and polycarbonate screens. Each car can be disassembled into its component parts and re-assembled, parts from different cars can be combined to allow children to design their own models. They have also been noted for their extensive use in the PLTW program.</p>
            </section>
        </main>


<!-- ================== ALL JS IS HERE =============== -->
<?php ob_start();

require('JSscripts.php');

ob_flush();
?>
    </body>
</html>
