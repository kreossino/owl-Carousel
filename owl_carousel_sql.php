<?php exit; ?>
CREATE TABLE `e107_owl_carousel` (
  `owl_id` int(11) NOT NULL AUTO_INCREMENT,
  `owl_name` varchar(100) NOT NULL,
  `owl_template` varchar(100) NOT NULL,
  `owl_chapter` int(5) NOT NULL,
  `item_number` int(5) NOT NULL,
  `margin` int(5) NOT NULL,
  `timeout` int(10) NOT NULL,
  `autoplay` int(1) NOT NULL,
  `owl_loop` int(1) NOT NULL,
  `navigation` int(1) NOT NULL,
  `dots` int(1) NOT NULL,
  PRIMARY KEY (`owl_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE `e107_owl_carousel_images` (
  `owl_id` int(11) NOT NULL AUTO_INCREMENT,
  `owl_name` varchar(100) NOT NULL,
  `owl_template` varchar(100) NOT NULL,
  `image_category` varchar(100) NOT NULL,
  `item_number` int(5) NOT NULL,
  `margin` int(5) NOT NULL,
  `timeout` int(10) NOT NULL,
  `autoplay` int(1) NOT NULL,
  `owl_loop` int(1) NOT NULL,
  `navigation` int(1) NOT NULL,
  `dots` int(1) NOT NULL,
  `mobile` int(1) NOT NULL,
  PRIMARY KEY (`owl_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
