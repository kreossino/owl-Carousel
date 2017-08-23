<?php
/*
* e107 website system
*
* Copyright (C) 2008-2013 e107 Inc (e107.org)
* Released under the terms and conditions of the
* GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
*
* Custom install/uninstall/update routines for owl_carousel plugin
**
*/


if(!class_exists("owl_carousel_setup"))
{
	class owl_carousel_setup
	{
/*	
 	function install_pre($var)
	{
		// print_a($var);
		// echo "custom install 'pre' function<br /><br />";
	}
*/
	function install_post($var)
	   {
		
            $sql = e107::getDb();
    		$mes = e107::getMessage();
    		
    		$query = "INSERT INTO #page_chapters (`chapter_id`, `chapter_parent`, `chapter_name`, `chapter_sef`, `chapter_meta_description`, `chapter_meta_keywords`, `chapter_manager`, `chapter_icon`, `chapter_order`, `chapter_template`, `chapter_visibility`, `chapter_fields`) VALUES 
                     (NULL, '0', 'owlcarousel', 'owlcarousel', '', '', '0', '', '0', '', '0', NULL)";
            
            $status = ($sql->db_Select_gen($query)) ? E_MESSAGE_SUCCESS : E_MESSAGE_ERROR;
    		
            $mes->add("Insert default chapter : owlcarousel", $status);

	   }
    }

}