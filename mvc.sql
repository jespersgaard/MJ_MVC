
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mvc`
--

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
-- Struktur-dump for tabellen `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `noteid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) unsigned NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`noteid`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Data dump for tabellen `note`
--

INSERT INTO `note` (`noteid`, `userid`, `title`, `content`, `date_added`) VALUES
(1, 1, 'Jesse', 'This is a note ', '0000-00-00 00:00:00'),
(2, 1, 'test', 'test\r\n', '2012-08-30 03:11:05'),
(3, 1, 'test2', 'test2', '2012-08-30 03:11:08'),
(4, 1, '', '', '2012-08-30 03:15:54'),
(5, 1, '', '', '2012-08-30 03:15:55'),
(6, 1, '', '', '2012-08-30 03:15:56'),
(7, 1, 'asdf', 'asdf', '2012-08-30 03:15:56'),
(8, 1, 'asdf233', 'asdf233', '2012-08-30 03:15:57'),
(9, 1, 'asdf', 'asdf', '2012-08-30 03:15:59'),
(10, 13, 'DOG FACE', '111', '2012-08-30 03:22:04'),
(11, 20, 'dsds', 'dsds', '2013-05-16 16:23:55'),
(12, 20, '', '', '2013-05-16 20:57:25'),
(13, 20, '', '', '2013-05-16 20:58:57'),
(14, 20, '', '', '2013-05-16 21:05:59'),
(15, 20, 'test', 'test', '2013-05-17 07:55:34');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `idProject` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  PRIMARY KEY (`idProject`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `project`
--

INSERT INTO `project` (`idProject`, `idUser`, `name`, `description`, `status`, `date_from`, `date_to`) VALUES
(1, 19, 'AAU SPM', 'This is the main project where we will add all the date', 'Private', '2013-01-01', '2013-06-30'),
(2, 1, 'Test Project 1', 'Test Project 1', 'Public', '2013-01-01', '2013-06-30'),
(3, 1, 'Test Project 2', 'Test Project 2', 'Closed', '2013-04-01', '2013-05-01');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Data dump for tabellen `sprint`
--

INSERT INTO `sprint` (`idSprint`, `idGroup`, `date_from`, `date_to`) VALUES
(1, 1, '2013-03-12', '2013-03-15'),
(2, 2, '2013-05-01', '2013-05-07');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Data dump for tabellen `task`
--

INSERT INTO `task` (`taskID`, `name`, `description`, `sprintID`, `state`) VALUES
(1, 'Task 1 - Main', 'task 1 Main from Sprint 1', 1, 'Ongoing');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `role` enum('default','admin','owner') NOT NULL DEFAULT 'default',
  `email` varchar(100) NOT NULL,
  `skype` varchar(50) DEFAULT NULL,
  `telefonnr` varchar(8) DEFAULT NULL,
  `profilepic` varchar(150) NOT NULL DEFAULT 'default',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Data dump for tabellen `user`
--

INSERT INTO `user` (`userid`, `login`, `password`, `fullname`, `role`, `email`, `skype`, `telefonnr`, `profilepic`) VALUES
(1, 'jesse', '3327a2154aa1900fa110ae3d20d27d051ba719ead0396f1a23d6865b2677ed4a', '', 'owner', '', NULL, '', '1'),
(19, 'martin', '91a96e1a27214c5782f28c65bd042a6299d5ab52540b8c56d5f67487a57e4904', '', 'admin', 'martin@jespersgaard.com', 'martin_jespersgaard', '27292700', '19'),
(20, 'admin', '36b664527d14f8b142dbcf29b5ac7ac7705ad9fa57956e3b08f03c834fd0396f', 'admin', 'owner', 'admin@spm.dk', 'admin_spm', '007', 'default'),
(29, 'test', 'dbc63eeded5452f7ed8d11d645de459d7027d8b19742521f4460119ba7b53e24', '', 'default', 'test', 'test', 'test', 'default');
