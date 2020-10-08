<?php

if ( have_posts() ) {
	while ( have_posts() ) {
        the_post(); 
        get_template_part ('partials/contents','index');
		//
		// Post Content here
		//
	} // end while
} // end if
?>

