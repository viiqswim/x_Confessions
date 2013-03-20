-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2013 at 02:47 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `xconfessions`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentproperty`
--

DROP TABLE IF EXISTS `commentproperty`;
CREATE TABLE IF NOT EXISTS `commentproperty` (
  `CommentId` int(11) NOT NULL,
  `PostPropertyTypeId` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL DEFAULT 'Anonymous',
  `IP` varchar(15) NOT NULL DEFAULT '255.255.255.255',
  `CreateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `commentproperty_postpropertytype_PostPropertyTypeId` (`PostPropertyTypeId`),
  KEY `commentproperty_storycomment_CommentId` (`CommentId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `postpropertytype`
--

DROP TABLE IF EXISTS `postpropertytype`;
CREATE TABLE IF NOT EXISTS `postpropertytype` (
  `PostPropertyTypeId` int(11) NOT NULL AUTO_INCREMENT,
  `CodeValue` varchar(3) NOT NULL,
  `Description` varchar(15) NOT NULL,
  PRIMARY KEY (`PostPropertyTypeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `postpropertytype`
--

INSERT INTO `postpropertytype` (`PostPropertyTypeId`, `CodeValue`, `Description`) VALUES
(1, 'L', 'Like'),
(2, 'D', 'Dislike'),
(3, 'S', 'Share');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

DROP TABLE IF EXISTS `story`;
CREATE TABLE IF NOT EXISTS `story` (
  `StoryId` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL DEFAULT 'Anonymous',
  `Image` blob,
  `Story` varchar(255) NOT NULL,
  `IP` varchar(15) NOT NULL DEFAULT '255.255.255.255',
  `CreateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`StoryId`),
  KEY `StoryId` (`StoryId`),
  KEY `StoryId_2` (`StoryId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `storycomment`
--

DROP TABLE IF EXISTS `storycomment`;
CREATE TABLE IF NOT EXISTS `storycomment` (
  `CommentId` int(11) NOT NULL AUTO_INCREMENT,
  `StoryId` int(11) NOT NULL,
  `Comment` varchar(255) NOT NULL,
  `IP` varchar(15) NOT NULL DEFAULT '255.255.255.255',
  `CreateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`CommentId`),
  KEY `StoryId` (`StoryId`),
  KEY `CommentId` (`CommentId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `storyproperty`
--

DROP TABLE IF EXISTS `storyproperty`;
CREATE TABLE IF NOT EXISTS `storyproperty` (
  `StoryId` int(11) NOT NULL,
  `PostPropertyTypeId` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL DEFAULT 'Anonymous',
  `IP` varchar(15) NOT NULL DEFAULT '255.255.255.255',
  `CreateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`StoryId`,`PostPropertyTypeId`),
  KEY `storyproperty_postpropertytype_PostPropertyTypeId` (`PostPropertyTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentproperty`
--
ALTER TABLE `commentproperty`
  ADD CONSTRAINT `commentproperty_postpropertytype_PostPropertyTypeId` FOREIGN KEY (`PostPropertyTypeId`) REFERENCES `postpropertytype` (`PostPropertyTypeId`),
  ADD CONSTRAINT `commentproperty_storycomment_CommentId` FOREIGN KEY (`CommentId`) REFERENCES `storycomment` (`CommentId`);

--
-- Constraints for table `storycomment`
--
ALTER TABLE `storycomment`
  ADD CONSTRAINT `storycomment_story_StoryId` FOREIGN KEY (`StoryId`) REFERENCES `story` (`StoryId`);

--
-- Constraints for table `storyproperty`
--
ALTER TABLE `storyproperty`
  ADD CONSTRAINT `storyproperty_postpropertytype_PostPropertyTypeId` FOREIGN KEY (`PostPropertyTypeId`) REFERENCES `postpropertytype` (`PostPropertyTypeId`),
  ADD CONSTRAINT `storyproperty_story_StoryId` FOREIGN KEY (`StoryId`) REFERENCES `story` (`StoryId`);
