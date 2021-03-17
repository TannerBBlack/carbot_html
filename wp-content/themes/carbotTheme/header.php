<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="Fill Me In">
<meta name="author" content="John Doe">
<title>Carbot Cruise<?php wp_title(); ?></title>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;700&display=swap" rel="stylesheet">

<!-- TELLS PHONES NOT TO LIE ABOUT THEIR WIDTH & stops the font from enlarging when a phone is turned sideways-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick-1.8.1/slick/slick.css"/>
<!--Add the new slick-theme.css if you want the default styling --> 
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick-1.8.1/slick/slick-theme.css"/>


<!-- STYLE SHEETS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">


</head>
<body>

<header class="clearfix">
  <figure class="logo">
    <img srcset="<?php echo get_template_directory_uri(); ?>/images/logo1.png 1x, <?php echo get_template_directory_uri(); ?>/images/logo2.png 2x, <?php echo get_template_directory_uri(); ?>/images/logo3.png 3x" 
    src="<?php echo get_template_directory_uri(); ?>/images/logo1.png" alt="logo">
  </figure>
  <a href="tel:123-456-7890">123-456-7890</a>
</header>

<div class="full-width-nav">
  <nav class="clearfix">
    <button id="hamburgerBtn">
      <span class="line top"></span>
      <span class="line middle"></span>
      <span class="line bottom"></span>
    </button>

    <!-- <ul id="primaryNav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="#">Cruises</a></li>
        <li class="menu-item-has-children"><a href="#">Agents</a>
          <ul>
            <li><a href="#">Sally Radgers</a></li>
            <li><a href="#">Bobby Sorrell</a></li>
          </ul>
        </li>
      <li><a href="#">Book</a></li>
    </ul> -->
    <?php wp_nav_menu()?>


    <div class="wrap">
      <div class="search">
         <input type="text" class="searchTerm" placeholder="Search...">
         <button type="submit" class="searchButton">
           <i class="fa fa-search"></i>
        </button>
      </div>
    </div>

  </nav>
</div>