<?php ob_start();

$page_title = 'a9 model page. COMP2081. Project 1. Automoblox. Artem Iermak';
require('nav.php');

ob_flush();
?>
<!-- ============ end of SUB NAV ============ -->

<article>
	<section class="productPhoto">
		<img src="img/a9_large.png" alt="A9 model photo">
	</section>

	<section class="rightSideContainer">

                <!--*************** Product headers ***************-->
                <h4 class="capitalLetters">a9 model</h4>
                <h2 class="capitalLetters">Mini concept, maxi fun.</h2>

                <h3 class="capitalLetters">$15</h3>
                <!--*************** end of Product headers ***************-->

                <!--<><><><><><><><><> < CHOOSE SIZE and QUANTITY > <><><><><><><><><><>-->
                <div class="SizeQuantity">
                    <div class="chooseSize">
                        <form action="#" class="smallLetters">
                            <select name="size" id="size">
                                <option value="">Select size</option>
                                <option value="">small</option>
								<option value="">medium</option>
								<option value="">large</option>
                            </select>
                        </form>
                    </div><!-- end of div.chooseSize-->

                    <div class="chooseQuantity">
                        <form action="#" class="smallLetters">
                            <select name="quantity" id="quantity">
                                <option value="">Quantity</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9</option>
                                <option value="">10</option>
                            </select>
                        </form>
                    </div> <!-- end of div.chooseQuantity-->
                </div> <!-- end of div.SizeQuantity-->

                <a href="#" title="Buy">
                    <button class="AddToBag capitalLetters hoverBlue">add to bag
                        <i  class="fa fa-shopping-cart fa-1x" aria-hidden="true"></i>
                    </button>
                </a>


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