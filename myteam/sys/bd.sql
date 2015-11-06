CREATE TABLE IF NOT EXISTS `ll_myteam` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `job_title` varchar(250) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `text` text
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `ll_myteam_tags` (
  `id` int(11) NOT NULL,
  `person` int(11) DEFAULT NULL,
  `tag` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;