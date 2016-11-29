<?php ob_start();

$page_title = 'c9 model page. COMP2081. Project 1. Automoblox. Artem Iermak';
$a_class_active_c9 = 'class="is-active"';
require('nav.php');

ob_flush();
?>
<!-- ============ end of SUB NAV ============ -->

<article>
	<div class="productPhoto">
		<img src="img/c9_large.png" alt="A9 model photo">
	</div>

	<section class="rightSideContainer">

                <!--*************** Product headers ***************-->
                <h4 class="capitalLetters">c9 model</h4>
                <h2 class="capitalLetters">Mini concept, maxi fun.</h2>

                <h3 class="capitalLetters">$22</h3>
                <!--*************** end of Product headers ***************-->

                <!--<><><><><><><><><> < CHOOSE SIZE and QUANTITY > <><><><><><><><><><>-->
				<?php ob_start();

				require('right-side-panel-models.php');

				ob_flush();
				?>


                <!--<><><><><><><><><> < end of CHOOSE SIZE and QUANTITY > <><><><><><><><><><>-->
	</section> <!-- end of Section.rightSideContainer-->


	<!-- ================== TABS =============== -->
	<?php ob_start();

	require('model-pages-tabs.php');

	ob_flush();
	?>
</article>








        </main>
<!-- ================== ALL JS IS HERE =============== -->
<?php ob_start();

require('JSscripts.php');

ob_flush();
?>
    </body>
</html>