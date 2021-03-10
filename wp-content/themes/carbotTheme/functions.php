<?php>
//remove visual editor
add_filter( 'user_can_richedit' , '__return_false', 50 );

// create a menu
register_nav_manu( 'siteNavigation', 'Primary Navigation' );

?>