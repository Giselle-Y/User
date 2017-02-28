CREATE TABLE `user-info` 

(
 
 `id` mediumint(8) unsigned NOT NULL auto_increment,
  
  `name` char(11) NOT NULL ,
  
  `password` varchar(32) NOT NULL ,
  
  `phone` int(20) NOT NULL ,
  
  `email` varchar(40) NOT NULL ,
  
  `address` mediumtext unsigned NOT NULL auto_increment,
 
   PRIMARY KEY  (`id`)

) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
