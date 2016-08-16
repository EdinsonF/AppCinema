CREATE TABLE `miTabla` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `correo` varchar(32) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `nivel` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;