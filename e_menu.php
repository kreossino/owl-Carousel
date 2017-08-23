<?php

if (!defined('e107_INIT')) { exit; }

class owl_carousel_menu{

public function config($menu='')
	{
		$fields = array();
        $sql=e107::getDb();
        switch($menu){
            
            case "owl_carousel":
                if($sql->gen('select owl_id,owl_name from #owl_carousel order by owl_id ASC'))
            		{
            			while ($row = $sql->fetch())
            			{
            				$this->owl[$row['owl_id']] = $row['owl_name'];
            			}
            		}
                    $fields['caption']  = array('title'=> "Caption", 'type'=>'text', 'multilan'=>true, 'writeParms'=>array('size'=>'xxlarge'), 'help'=>"optional");
                    $fields['name']     = array('title'=> 'Select Carousel', 'type'=>'dropdown', 'writeParms'=>array('optArray'=>$this->owl, 'default'=>'blank'), 'help'=>'');
            break;
            case "owl_carousel_images":
                if($sql->gen('select owl_id,owl_name from #owl_carousel_images order by owl_id ASC'))
            		{
            			while ($row = $sql->fetch())
            			{
            				$this->owl[$row['owl_id']] = $row['owl_name'];
            			}
            		}
                $fields['caption']  = array('title'=> "Caption", 'type'=>'text', 'multilan'=>true, 'writeParms'=>array('size'=>'xxlarge'), 'help'=>"optional");
                $fields['name']     = array('title'=> 'Select Images Carousel', 'type'=>'dropdown', 'writeParms'=>array('optArray'=>$this->owl, 'default'=>'blank'), 'help'=>'');
	        break;
            
        }
        
       	return $fields;

	}

}
?>