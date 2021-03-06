CREATE TABLE `threadboard` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `thread` int(11) unsigned NOT NULL,
  `depth` int(11) unsigned NOT NULL default '0',
  `name` varchar(20) NOT NULL,
  `email` varchar(30) default NULL,
  `pass` varchar(10) NOT NULL,
  `title` varchar(70) NOT NULL,
  `content` text NOT NULL,
  `wdate` int(11) NOT NULL,
  `ip` varchar(16) NOT NULL,
  `view` int(11) NOT NULL default '0',
  `filename` varchar(50),
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=euckr;