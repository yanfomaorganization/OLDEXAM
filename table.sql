CREATE TABLE IF NOT EXISTS `user_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) character set utf8 collate utf8_bin NOT NULL,
  `password` varchar(255) character set utf8 collate utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `annee1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  
  `annee` varchar(255)  character set utf8 collate utf8_bin NOT NULL,
  `prof` varchar(255)  character set utf8 collate utf8_bin NOT NULL,
   `examen` varchar(255)  character set utf8 collate utf8_bin NOT NULL,
	
  PRIMARY KEY (`id`)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `annee1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course1_id` int(11) NOT NULL,
  `annee` varchar(255)  character set utf8 collate utf8_bin NOT NULL,
  `prof` varchar(255)  character set utf8 collate utf8_bin NOT NULL,
   `examen` varchar(255)  character set utf8 collate utf8_bin NOT NULL,
	
  PRIMARY KEY (`id`),
  foreign key(course1_id) references course1(id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `annee2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course2_id` int(11) NOT NULL,
  `annee` varchar(255)  character set utf8 collate utf8_bin NOT NULL,
  `prof` varchar(255)  character set utf8 collate utf8_bin NOT NULL,
   `examen` varchar(255)  character set utf8 collate utf8_bin NOT NULL,
	
  PRIMARY KEY (`id`),
  foreign key(course2_id) references course2(id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `annee3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course3_id` int(11) NOT NULL,
  `annee` varchar(255)  character set utf8 collate utf8_bin NOT NULL,
  `prof` varchar(255)  character set utf8 collate utf8_bin NOT NULL,
   `examen` varchar(255)  character set utf8 collate utf8_bin NOT NULL,
	
  PRIMARY KEY (`id`),
  foreign key(course3_id) references course3(id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
   `course4_id` int(11) NOT NULL,
  `annee` varchar(255)  character set utf8 collate utf8_bin NOT NULL,
  `prof` varchar(255)  character set utf8 collate utf8_bin NOT NULL,
   `examen` varchar(255)  character set utf8 collate utf8_bin NOT NULL,
	
  PRIMARY KEY (`id`),
  foreign key(course4_id) references course4(id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `doctorat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  
  `annee` varchar(255)  character set utf8 collate utf8_bin NOT NULL,
  `prof` varchar(255)  character set utf8 collate utf8_bin NOT NULL,
   `examen` varchar(255)  character set utf8 collate utf8_bin NOT NULL,
	
  PRIMARY KEY (`id`)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `course1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(255)  character set utf8 collate utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
  
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `course1` (
  `USER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FILE_NAME` varchar(255)  character set utf8 collate utf8_bin NOT NULL,
  `FILE_SIZE`  NOT NULL ,
   `FILE_TYPE` varchar(255)  character set utf8 collate utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
  
)ENGINE=MyISAM DEFAULT CHARSET=utf8;
