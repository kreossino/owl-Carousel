<?php
if(!defined('e107_INIT'))
	{
		exit;
	}
if(!empty($parm))
	{
	   
       $sql=e107::getDb();
       $tp=e107::getParser();
      
       $sc = e107::getScBatch('owl_carousel');   
       $data=$sql->retrieve('owl_carousel_images','*','owl_id='.$parm['name']);
       
       $template = e107::getTemplate('owl_carousel', 'owl_carousel_images',$data['owl_template']);
       
       if(empty($template)){
            echo "template error";
            return;
       }else{
            //print_r($parm);
            echo '<div class="container">
                    <div class="car-caption"><h3>'.$parm['caption']['English'].'</h3></div>
                    <div class="owl-img'.$parm['name'].' owl-carousel owl-theme">
                    
                 ';
            if(!empty($data)){
            $category=$data['image_category'];          
            if(!$item = $sql->retrieve("SELECT * from #core_media WHERE media_category='".$category."'", true))
            {
                echo "empty".$category;
            }
            foreach($item as $i)
		      {                
                $sc->setVars($i);                
                echo $tp->parseTemplate($template['item'], false, $sc);
	           }
               echo $tp->parseTemplate($template['end'], true, $sc);
               
               echo e107::js('footer-inline',"
               (function($) {
                    'use strict';
               jQuery('.owl-img".$parm['name']."').owlCarousel({
                items:".$data['item_number'].",
                loop:".$data['owl_loop'].",
                margin:".$data['margin'].",
                nav:".$data['navigation'].",
                autoplay:".$data['autoplay'].",
                dots:".$data['dots'].",
                autoplayTimeout:".$data['timeout'].",
                autoplayHoverPause:false,
                responsiveClass:true,
                responsive : {                
                    0 : {
                        items:1,
                        nav:false
                    },                
                    480 : {
                        items:1,
                        nav:false
                    },                
                    768 : {
                        items:".$data['item_number'].",
                    }
                }
    
                })
                })(jQuery);");
      // return $text;   
          
          
       }else{
          echo "Carousel Not Found";            
       }
    }
}

       
       //echo "carousel id = " . $parm['name'];
	