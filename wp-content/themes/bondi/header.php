<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 *
 * @package WordPress
 * @subpackage bondi
 * @since bondi 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title>
  <?php wp_title("|","true","right")?>  
  <?php bloginfo( 'name' ); ?></title>
  <link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
	<?php wp_head(); ?>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-inverse ">
 
<a class="navbar-brand p-2" href="<?php bloginfo( 'url' ); ?>" > <?php bloginfo( 'name' ); ?> </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
 


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php bondi_bootstrap_menu()?> 
      <form class="d-flex p-2"  >
        <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success " type="submit">Search</button>
      </form>
 
   
  </div>
</nav>
 














</html>













