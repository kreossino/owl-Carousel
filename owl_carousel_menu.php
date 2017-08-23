<?php
if(!defined('e107_INIT'))
	{
		exit;
	}
if(!empty($parm))
	{
	   
       $sql=e107::getDb();
       $tp=e107::getParser();
       $owlsc = e107::getScBatch('owl_carousel');
       //$owlsc->sc_jsowl();
       
       $sc = e107::getScBatch('page', null, 'cpage');   
       $data=$sql->retrieve('owl_carousel','*','owl_id='.$parm['name']);
       
       $template = e107::getTemplate('owl_carousel', 'owl_carousel',$data['owl_template']);
       
       if(empty($template)){
            echo "template error";
            return;
       }else{
       
       if($data['owl_template']=="single"){
        echo '  
                <div class="sliderplugin owl-carousel">';
       }else{  
       echo '<div class="container">
                <div class="car-caption"><h3>'.$parm['caption']['English'].'</h3></div>
                <div class="owl-'.$parm['name'].' owl-carousel owl-theme">';
       }
       if(!empty($data)){
          $chapter=$data['owl_chapter'];
          
          if(!$item = $sql->retrieve("SELECT * from #page WHERE page_chapter='".$chapter."'", true))
            {
                echo "empty";
            }
            foreach($item as $i)
		      {
                
                $sc->setVars($i);
                
                echo $tp->parseTemplate($template['item'], false, $sc);
	}
       echo $tp->parseTemplate($template['end'], false, $sc);
       
       if($data['owl_template']=="single"){
        echo e107::js('footer-inline',$owlsc->sc_jsowl($data));
       }
       echo e107::js('footer-inline',"
            (function($) {
             'use strict';
            jQuery('.owl-".$parm['name']."').owlCarousel({
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
	