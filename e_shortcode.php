<?php
/*
* Copyright (c) e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
* $Id: e_shortcode.php 12438 2011-12-05 15:12:56Z secretr $
*
* Featurebox shortcode batch class - shortcodes available site-wide. ie. equivalent to multiple .sc files.
*/

if(!defined('e107_INIT'))
{
	exit;
}



class owl_carousel_shortcodes extends e_shortcode
{
	public $override = false; // when set to true, existing core/plugin shortcodes matching methods below will be overridden. 

	// Example: {_BLANK_CUSTOM} shortcode - available site-wide.
	function sc_owl_carousel($parm = null)  // Naming:  "sc_" + [plugin-directory] + '_uniquename'
	{
		
        //return "halooo";
        
	}
    function sc_image_item($parm=''){
        $image=$this->var['media_url'];
                
        //return e107::getParser()->parseTemplate($image)->render();
        //return '<image src='.e107::getParser()->toHtml($image).'/>';
        return e107::getParser()->toImage($image,$parm);
    }
    
    function sc_jsowl($parm=null){
        $jsinline="
        (function($) {
            'use strict';
            jQuery(document).ready(function (e) {
            if (jQuery.fn.owlCarousel) {

            e('.itemBg').css('display', 'none');

            var slider = e('.sliderplugin');
            slider.on('initialized.owl.carousel', function (x) {
                idx = x.item.index;
                e('.owl-item').eq(idx).addClass('middle');
                e('.owl-item').eq(idx + 1).addClass('next');
                e('.owl-item').eq(idx - 1).addClass('prev');
                imgChange();
            });

            slider.owlCarousel({
                stagePadding: 0,
                items: 1,
                singleItem: true,
                loop:".$parm['owl_loop'].",
                autoplay:".$parm['autoplay'].",
                margin:0,
                                
                autoplayTimeout:".$parm['timeout'].",
                nav:".$parm['navigation'].",
                navText: [
                    \"<i class='icofont icofont-thin-left'></i>\",
                    \"<i class='icofont icofont-thin-right'></i>\"
                ],
                
                
            });
            var idx;
            slider.on('translated.owl.carousel', function (x) {
                idx = x.item.index;
                e('.owl-item.middle').removeClass('left');
                e('.owl-item').eq(idx).addClass('left');

                e('.owl-item.next').removeClass('next');
                e('.owl-item').eq(idx + 1).addClass('next');

                e('.owl-item.prev').removeClass('prev');
                e('.owl-item').eq(idx - 1).addClass('prev');
                imgChange();
            });

            slider.on('translated.owl.carousel', function () {
                e(this).find('.owl-item.active .item  .owlContent> *').addClass('slideInLeft animated').show();
            });
            slider.on('translate.owl.carousel', function () {
                e(this).find('.owl-item .item .owlContent> *').removeClass('slideInLeft animated').hide();
            });
            imgChange();
       }
       function imgChange() {
           var activeImg = e('.owl-item.middle img.itemBg').attr('src');
           var nextImg = e('.owl-item.next img.itemBg').attr('src');
           var prevImg = e('.owl-item.prev img.itemBg').attr('src');
           var owlPrev = e('.owl-nav div.owl-prev');
           var owlNext = e('.owl-nav div.owl-next');
           var homeSliderBg = e('.sliderplugin .middle .item');
           var homeSliderPrevBg = e('.sliderplugin .prev .item');
           var homeSliderNextBg = e('.sliderplugin .next .item');

           owlNext.css({
               backgroundImage: 'url(' + nextImg + ')',
               backgroundSize: 'cover',
               backgroundPosition: 'left center'
           });
           owlPrev.css({
               backgroundImage: 'url(' + prevImg + ')',
               backgroundSize: 'cover',
               backgroundPosition: 'left center'
           });
           homeSliderBg.css({
               backgroundImage: 'url(' + activeImg + ')',
               backgroundSize: 'cover',
               backgroundPosition: 'center'
           });
           homeSliderPrevBg.css({
               backgroundImage: 'url(' + prevImg + ')',
               backgroundSize: 'cover',
               backgroundPosition: 'center'
           });
           homeSliderNextBg.css({
               backgroundImage: 'url(' + nextImg + ')',
               backgroundSize: 'cover',
               backgroundPosition: 'center'
           });

       }
        });

})(jQuery);
        ";
        return $jsinline;
    }
    

}
