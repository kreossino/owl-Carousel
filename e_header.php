<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2014 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Related configuration module - News
 *
 *
*/

if (!defined('e107_INIT')) { exit; }


if(USER_AREA) // prevents inclusion of JS/CSS/meta in the admin area.
{
	e107::js('owl_carousel', 'lib/owl.carousel.js');
    e107::js('owl_carousel', 'lib/wow.min.js');      // loads e107_plugins/owl_carousel/js/owl_carousel.js on every page.
	e107::css('owl_carousel', 'lib/assets/owl.carousel.css');    // loads e107_plugins/owl_carousel/css/owl_carousel.css on every page
	e107::css('owl_carousel', 'lib/assets/owl.theme.default.css');
    e107::css('owl_carousel', 'lib/assets/custom.css');
    e107::css('owl_carousel', 'lib/assets/animate.css');
    e107::meta('keywords', 'owl,carousel,slider');   // sets meta keywords on every page.
    
    /** BUG FIX {display : hidden}
    *   Refresh Owl Carousel initialisation 
    */
    $jsinl="jQuery('.owl-carousel').trigger('refresh.owl.carousel');";
    e107::js('footer-inline',$jsinl);
        
    
    
}



?>