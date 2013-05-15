--
-- Database: `mvc`
--
DROP DATABASE `mvc`;
CREATE DATABASE `mvc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
GRANT USAGE ON *.* TO mvcuser@localhost IDENTIFIED BY mvcpasswd;
USE `mvc`;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `idGroup` int(11) NOT NULL AUTO_INCREMENT,
  `namegroup` varchar(150) NOT NULL,
  `descriptiongroup` text,
  `dateCreatedgroup` date NOT NULL,
  `dateClosedgroup` date DEFAULT NULL,
  `statusgroup` varchar(20) NOT NULL,
  PRIMARY KEY (`idGroup`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `sprint`
--

DROP TABLE IF EXISTS `sprint`;
CREATE TABLE IF NOT EXISTS `sprint` (
  `idSprint` int(11) NOT NULL AUTO_INCREMENT,
  `idGroup` int(11) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  PRIMARY KEY (`idSprint`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `task`
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
  `taskID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `sprintID` int(11) NOT NULL,
  `state` varchar(10) NOT NULL,
  PRIMARY KEY (`taskID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `username` varchar(100) NOT NULL,
  `role` enum('default','admin','owner') NOT NULL DEFAULT 'default',
  `email` varchar(100) NOT NULL,
  `skype` varchar(50) DEFAULT NULL,
  `telefonnr` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Data dump for tabellen `user`
--

INSERT INTO `user` (`userid`, `login`, `password`, `username`, `role`, `email`, `skype`, `telefonnr`) VALUES
(1, 'admin', '36b664527d14f8b142dbcf29b5ac7ac7705ad9fa57956e3b08f03c834fd0396f', '', 'owner', '', NULL, ''),
(2, 'martin', '91a96e1a27214c5782f28c65bd042a6299d5ab52540b8c56d5f67487a57e4904', '', 'admin', 'martin@jespersgaard.com', 'martin_jespersgaard', '27292700');
