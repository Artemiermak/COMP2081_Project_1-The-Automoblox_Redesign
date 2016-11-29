<!DOCTYPE html>
	<html  lang="en">
	<!--
		Web site: 			http://automoblox-artem.azurewebsites.net/
		Author: 			Artem Iermak
	-->
	<head>
		<title><?php echo $page_title; ?></title>
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <meta name="description" content="school assignment,The Automoblox, web development, web design, boilerplate">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="school assignment,The Automoblox, web development, web design, boilerplate">
        <meta name="author" content="Artem Iermak">
        <meta name="Copyright" content="Copyright (c) 2016 Artem Iermak" >

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <!-- ================= NORMALIZE STUFF-->
        <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

        <!-- ================= NORMALIZE STUFF-->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">

        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- ================= CUSTOM CSS STYLES-->
        <link rel="stylesheet" href="css/style.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

        <!-- Add your site or application content here -->

        <header>
            <!--  of main navigation -->
            <nav id="mainNav">
                <ul>
                    <li>    <!-- logo section -->
                        <a href="index.php" > 
                            <img src="img/automoblox_logo.png" alt="automoblox logo"> 
                        </a>
                    </li> <!-- end of logo section -->
                    <li><a href="index.php" <?php echo $a_class_active_home; ?> >Home</a></li>
                    <li>
                        <span class="beforeLiNav"></span>
                        <a href="a9model.php" <?php echo $a_class_active_a9; ?> >- A9 model</a>
                    </li>
                    <li>
                        <span class="beforeLiNav"></span>
                        <a href="c9model.php" <?php echo $a_class_active_c9; ?> >- C9 model</a>
                    </li>
                    <li>
                        <span class="beforeLiNav"></span>
                        <a href="m9model.php" <?php echo $a_class_active_m9; ?> >- M9 model</a>
                    </li>
                    <li>
                        <span class="beforeLiNav"></span>
                        <a href="s9model.php" <?php echo $a_class_active_s9; ?> >- S9 model</a>
                    </li>
                    <li>
                        <span class="beforeLiNav"></span>
                        <a href="t9model.php" <?php echo $a_class_active_t9; ?> >- T9 model</a>
                    </li>
                </ul>
                <p class="navText">
                    Thanks for comming to our web site. We hope you will find the best toy you want! In case of questions, call or text us please!
                    <br>
                    #+1-123-45-78-90
                    <br>
                    e-mail: someemail@gmail.com
                </p>
                <div class="footer">
                    <small>
                        <p>Copyright 2016 ©. Artem Iermak. All rights reserved.</p>
                    </small>
                </div>
            </nav> <!-- end of main navigation -->
        </header>
        <main>
            <!-- ============ SUB NAV ============ -->
            <nav id="subNav">
                <ul>
                    <li><a href="a9model.php" <?php echo $a_class_active_a9; ?> >A9 model</a></li>
                    <li><a href="c9model.php" <?php echo $a_class_active_c9; ?> >C9 model</a></li>
                    <li><a href="m9model.php" <?php echo $a_class_active_m9; ?> >M9 model</a></li>
                    <li><a href="s9model.php" <?php echo $a_class_active_s9; ?> >S9 model</a></li>
                    <li><a href="t9model.php" <?php echo $a_class_active_t9; ?> >T9 model</a></li>
                    <li>
                        <a href="#">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
		    </nav>
            <!-- ============ end of SUB NAV ============ -->