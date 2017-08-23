<?php

// Generated e107 Plugin Admin Area 

require_once('../../class2.php');
if (!getperms('P')) 
{
	e107::redirect('admin');
	exit;
}

// e107::lan('owl_carousel',true);


class owl_carousel_adminArea extends e_admin_dispatcher
{

	protected $modes = array(	
	
		'main'	=> array(
			'controller' 	=> 'owl_carousel_ui',
			'path' 			=> null,
			'ui' 			=> 'owl_carousel_form_ui',
			'uipath' 		=> null
		),
        	'other1'	=> array(
			'controller' 	=> 'owl_carousel_image_ui',
			'path' 			=> null,
			'ui' 			=> 'owl_carousel_image_form_ui',
			'uipath' 		=> null
		),
		

	);	
	
	
	protected $adminMenu = array(

		'main/list'		=> array('caption'=> 'Contents Carousel List', 'perm' => 'P'),
		'main/create'		=> array('caption'=> 'Create Contents Carousel', 'perm' => 'P'),
		//'main/prefs' 		=> array('caption'=> LAN_PREFS, 'perm' => 'P'),	
        	'other1/list'		=> array('caption'=> 'Images Carousel List', 'perm' => 'P'),
        	'other1/create'		=> array('caption'=> 'Create Images Carousel', 'perm' => 'P'),

		// 'main/custom'		=> array('caption'=> 'Custom Page', 'perm' => 'P')
	);

	protected $adminMenuAliases = array(
		'main/edit'	=> 'main/list'				
	);	
	
	protected $menuTitle = 'Owl Carousel';
}


				
class owl_carousel_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Owl Carousel';
		protected $pluginName		= 'owl_carousel';
	//	protected $eventName		= 'owl_carousel-owl_carousel'; // remove comment to enable event triggers in admin. 		
		protected $table		= 'owl_carousel';
		protected $pid			= 'owl_id';
		protected $perPage		= 10; 
		protected $batchDelete		= true;
		protected $batchExport     = true;
		protected $batchCopy		= true;

	//	protected $sortField		= 'somefield_order';
	//	protected $sortParent      = 'somefield_parent';
	//	protected $treePrefix      = 'somefield_title';

	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'owl_id DESC';
	
		protected $fields 		= array (  
          	'checkboxes'    =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		'owl_id'        =>   array ( 'title' => 'ID', 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		'owl_name'      =>   array ( 'title' => 'Carousel Name', 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '','required'=>'required', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		'owl_chapter'   =>   array ( 'title' => 'Chapter','type' => 'dropdown', 'data' => 'int', 'width' => 'auto','inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
          	'owl_template'  =>   array ('title'=> 'Select Template','type' => 'layouts','inline'=>true,'data' => 'str', 	'width' => 'auto', 'thclass' => 'left', 'writeParms' => 'plugin=owl_carousel&id=owl_carousel&merge=1', 'filter' => true),
          	'item_number'   =>   array ( 
                                'title' => 'Number of items',
                                'type' => 'number',
                                'data' => 'int',
                                'width' => 'auto',
                                'help'  => 'Number of items displayed on screen',
                                'class' => 'center',
                                'thclass' => 'center',  
                                ),
          	'timeout'       =>   array ( 
                                'title' => 'Autoplay Timeout',
                                'type' => 'number',
                                'data' => 'int',
                                'width' => 'auto',
                                'help'  => 'Autoplay interval timeout, example : 1000 = 1 second',
                                'class' => 'center',
                                'thclass' => 'center', 
                                ),
          	'margin'        =>   array ( 
                                'title' => 'Margin between item',
                                'type' => 'number',
                                'data' => 'int',
                                'width' => 'auto',
                                'help' => '',
                                'readParms' => '',
                                'writeParms' => '',
                                'class' => 'left',
                                'thclass' => 'left',  
                                ),
          	'autoplay'      =>   array ( 
                                'title' => 'Auto Play',
                                'type' => 'boolean',
                                'data' => 'int',
                                'width' => 'auto',
                                'help' => '',
                                'readParms' => '',
                                'writeParms' => '',
                                'class' => 'center',
                                'thclass' => 'center',  
                                ),
          	'navigation'    =>   array ( 
                                'title' => 'Arrow Navigation',
                                'type' => 'boolean',
                                'data' => 'int',
                                'width' => 'auto',
                                'help' => '',
                                'readParms' => '',
                                'writeParms' => '',
                                'class' => 'left',
                                'thclass' => 'left',  
                                ),
          	'dots'          =>   array ( 
                                'title' => 'Display dots',
                                'type' => 'boolean',
                                'data' => 'int',
                                'width' => 'auto',
                                'help' => '',
                                'readParms' => '',
                                'writeParms' => '',
                                'class' => 'left',
                                'thclass' => 'left',  
                                ),                       
          
          	'owl_loop'         =>   array ( 
                                'title' => 'Loop Carousel',
                                'type' => 'boolean',
                                'data' => 'int',
                                'width' => 'auto',
                                'help' => '',
                                'readParms' => '',
                                'writeParms' => '',
                                'class' => 'left',
                                'thclass' => 'left',  
                                ),
        /*  TODO : custom animation make a blank space between item.. weird!
	'animatein'       => array (
                                'title'  => 'Animation In',
                                'type'   => 'dropdown',
                                'data'   => 'str',
                                'writeParms' => '',
                                'class' => 'left',
                                'thclass' => 'left', 
                                'help' => 'This animation is for single carousel only',
                                 
                                ),
          'animateout'       => array (
                                'title'  => 'Animation Out',
                                'type'   => 'dropdown',
                                'data'   => 'str',
                                'writeParms' => '',
                                'class' => 'left',
                                'thclass' => 'left',
                                'help' => 'This animation is for single carousel only',                                  
                                ),
          */
          'options' 		=>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('owl_name','owl_chapter','item_number','time_offset');
		

	//	protected $preftabs        = array('General', 'Other' );		

	
		public function init()
		{
	      $sql = e107::getDb();
               //Category Dropdown
              $cid=$sql->retrieve('page_chapters','chapter_id', "chapter_sef='owlcarousel'");               
              
	          
              if($sql->select('page_chapters','*'," chapter_parent = '".$cid."'"))
        		{
        			while ($row = $sql->fetch())
        			{
        				$this->chapter[$row['chapter_id']] = $row['chapter_name'];
                        
        			}
        		}
               $this->fields['owl_chapter']['writeParms'] = $this->chapter;
               
               /*
               $animIn=array ('slideInLeft','slideInRight','slideInUp','slideInDown','fadeIn','fadeInLeft','fadeInLeftBig','fadeInRight','fadeInRightBig','fadeInDown','fadeInDownBig','fadeInUp','fadeInUpBig');
               $animOut=array('slideOutLeft','slideOutRight','slideOutUp','slideOutDown','fadeOut','fadeOutLeft','fadeOutLeftBig','fadeOutRight','fadeOutRightBig','fadeOutDown','fadeOutDownBig','fadeOutUp','fadeOutUpBig');
               $aIn=array_combine($animIn,$animIn);
               $aOut= array_combine($animOut,$animOut);        	   
               $this->fields['animatein']['writeParms']= $aIn;
               $this->fields['animateout']['writeParms'] = $aOut;
               */
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data)
		{
			if($new_data['item_number']==0)
    		{
    			$new_data['item_number'] = 1;
    		}
    		if($new_data['timeout']==0)
    		{
    			$new_data['timeout'] = 5000;
    		}
            if(empty($new_data['owl_template']))
    		{
    			$new_data['owl_template'] = 'default';
    		}
    		return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}		
		
			
	/*	
		// optional - a custom page.  
		public function customPage()
		{
			$text = 'Hello World!';
			$otherField  = $this->getController()->getFieldVar('other_field_name');
			return $text;
			
		}
	*/
			
}
				


class owl_carousel_form_ui extends e_admin_form_ui
{

}		


//images only Carousel
class owl_carousel_image_ui extends e_admin_ui
{
        protected $pluginTitle		= 'Owl Carousel';
		protected $pluginName	= 'owl_carousel';
	//	protected $eventName	= 'owl_carousel-owl_carousel'; // remove comment to enable event triggers in admin. 		
		protected $table	= 'owl_carousel_images';
		protected $pid		= 'owl_id';
		protected $perPage	= 10; 
		protected $batchDelete	= true;
		protected $batchExport  = true;
		protected $batchCopy	= true;

	//	protected $sortField		= 'somefield_order';
	//	protected $sortParent      = 'somefield_parent';
	//	protected $treePrefix      = 'somefield_title';

	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'owl_id DESC';
	
		protected $fields 	= array (  
          	  'checkboxes'    	=>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'owl_id'        	=>   array ( 'title' => 'ID', 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'owl_name'      	=>   array ( 'title' => 'Carousel Name', 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '','required'=>'required', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'image_category'   	=>   array ( 'title' => 'Image Category','type' => 'dropdown', 'data' => 'str', 'width' => 'auto','inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
          	  'owl_template' 	=>   array ('title'=> 'Select Template','type' => 'layouts','inline'=>true,'data' => 'str', 	'width' => 'auto', 'thclass' => 'left', 'writeParms' => 'plugin=owl_carousel&id=owl_carousel&merge=1', 'filter' => true),
          	  'item_number' =>   array ( 
                                'title' => 'Number of items',
                                'type' => 'number',
                                'data' => 'int',
                                'width' => 'auto',
                                'help'  => 'Number of items displayed on screen',
                                'class' => 'center',
                                'thclass' => 'center',  
                                ),
          	  'timeout'     =>   array ( 
                                'title' => 'Autoplay Timeout',
                                'type' => 'number',
                                'data' => 'int',
                                'width' => 'auto',
                                'help'  => 'Autoplay interval timeout, example : 1000 = 1 second',
                                'class' => 'center',
                                'thclass' => 'center', 
                                ),
          	  'margin'      =>   array ( 
                                'title' => 'Margin between item',
                                'type' => 'number',
                                'data' => 'int',
                                'width' => 'auto',
                                'help' => '',
                                'readParms' => '',
                                'writeParms' => '',
                                'class' => 'left',
                                'thclass' => 'left',  
                                ),
          	  'autoplay'    =>   array ( 
                                'title' => 'Auto Play',
                                'type' => 'boolean',
                                'data' => 'int',
                                'width' => 'auto',
                                'help' => '',
                                'readParms' => '',
                                'writeParms' => '',
                                'class' => 'center',
                                'thclass' => 'center',  
                                ),
          	  'navigation'  =>   array ( 
                                'title' => 'Arrow Navigation',
                                'type' => 'boolean',
                                'data' => 'int',
                                'width' => 'auto',
                                'help' => '',
                                'readParms' => '',
                                'writeParms' => '',
                                'class' => 'left',
                                'thclass' => 'left',  
                                ),
          	  'dots'        =>   array ( 
                                'title' => 'Display dots',
                                'type' => 'boolean',
                                'data' => 'int',
                                'width' => 'auto',
                                'help' => '',
                                'readParms' => '',
                                'writeParms' => '',
                                'class' => 'left',
                                'thclass' => 'left',  
                                ),                       
          
          	'owl_loop'      =>   array ( 
                                'title' => 'Loop Carousel',
                                'type' => 'boolean',
                                'data' => 'int',
                                'width' => 'auto',
                                'help' => '',
                                'readParms' => '',
                                'writeParms' => '',
                                'class' => 'left',
                                'thclass' => 'left',  
                                ),
          
          	'options' =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('owl_name','image_category','item_number','time_offset');
		

	//	protected $preftabs        = array('General', 'Other' );		

	
		public function init()
		{
			// Set drop-down values (if any). 
            	$sql = e107::getDb();
               //Gallery Dropdown

	           if($sql->select('core_media_cat','*',' ORDER BY media_cat_id',true))
        		{
        			while ($row = $sql->fetch())
        			{
        				$this->imagecat[$row['media_cat_category']] = $row['media_cat_category'];
        			}
        		}
        		
        		$this->fields['image_category']['writeParms'] = $this->imagecat;

	
		}
        public function beforeCreate($new_data)
		{
			if($new_data['item_number']==0)
    		{
    			$new_data['item_number'] = 1;
    		}
    		if($new_data['timeout']==0)
    		{
    			$new_data['timeout'] = 5000;
    		}
            if(empty($new_data['owl_template']))
    		{
    			$new_data['owl_template'] = 'default';
    		}
    		return $new_data;
		}
}

class owl_carousel_image_form_ui extends e_admin_form_ui
{

}		
		
new owl_carousel_adminArea();

require_once(e_ADMIN."auth.php");
e107::getAdminUI()->runPage();

require_once(e_ADMIN."footer.php");
exit;

?>
