<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * e107 Blank Plugin
 *
*/
if (!defined('e107_INIT'))
{
	require_once("../../class2.php");
}



class owl_carousel_front
{

	function __construct()
	{
		e107::js('owl_carousel','js/my.js','jquery');	// Load Plugin javascript and include jQuery framework
		e107::css('owl_carousel','css/my.css');		// load css file
		e107::lan('owl_carousel'); 					// load language file ie. e107_plugins/owl_carousel/languages/English.php
		e107::meta('keywords','some words');	// add meta data to <HEAD>

	}


	public function run()
	{

		$sql = e107::getDB(); 					// mysql class object
		$tp = e107::getParser(); 				// parser for converting to HTML and parsing templates etc.
		$frm = e107::getForm(); 				// Form element class.
		$ns = e107::getRender();				// render in theme box.

		$text = '';

		if($rows = $sql->retrieve('owl_carousel','*',false,'',true)) 	// combined select and fetch function - returns an array.
		{
			// print_a($rows);
			foreach($rows as $key=>$value)		// loop throug
			{
				$text .=  $tp->toHtml($value['owl_carousel_type'])."<br />";
			}

			$ns->tablerender("My Caption", $text);

		}



	}






}


$owl_carouselFront = new owl_carousel_front;
require_once(HEADERF); 					// render the header (everything before the main content area)
$owl_carouselFront->run();
require_once(FOOTERF);					// render the footer (everything after the main content area)
exit; 

// For a more elaborate plugin - please see e107_plugins/gallery

?>