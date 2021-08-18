-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2015 at 12:40 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mail`
--

-- --------------------------------------------------------

--
-- Table structure for table `emailsave`
--

CREATE TABLE IF NOT EXISTS `emailsave` (
  `email_to` varchar(1000) NOT NULL,
  `email_from` varchar(1000) NOT NULL,
  `email_message` varchar(1000) NOT NULL,
  `email_subject` varchar(1000) NOT NULL,
  `name` varchar(10000) NOT NULL,
  `email_datetime` varchar(30) NOT NULL,
`id` int(255) NOT NULL,
  `pname` varchar(10000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emailsave`
--

INSERT INTO `emailsave` (`email_to`, `email_from`, `email_message`, `email_subject`, `name`, `email_datetime`, `id`, `pname`) VALUES
('pmbh@gmail.com', 'raj@gmail.com', 'come 12 march all in home.....', 'invite', 'uploads/khushboo-gujarat-ki---architectural---hindi.mp4', '02-11-2015 03:21:12 am', 17, 'tmp/collision-wallpaper-1280x960.jpg'),
('pmbh@gmail.com', 'raj@gmail.com', 'view this file.......', 'find  file', 'uploads/9-system-design.docx', '02-11-2015 03:20:19 am', 18, 'tmp/collision-wallpaper-1280x960.jpg'),
('pmbh@gmail.com', 'jay123@gmail.com', 'invite to all come....', 'invitation', 'uploads/03_-_chaar_kadam(mymp3song.com).mp3', '02-11-2015 03:15:23 am', 19, 'tmp/img2.jpg'),
('pmbh@gmail.com', 'raj@gmail.com', 'this attachment view understand', 'Attachment', 'uploads/03_-_chaar_kadam(mymp3song.com).mp3', '02-11-2015 03:19:13 am', 21, 'tmp/collision-wallpaper-1280x960.jpg'),
('pmbh@gmail.com', 'jay123@gmail.com', 'this attachment view understand', 'Attachment', 'uploads/03_-_chaar_kadam(mymp3song.com).mp3', '02-11-2015 03:13:47 am', 22, 'tmp/img2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `remaildetail`
--

CREATE TABLE IF NOT EXISTS `remaildetail` (
`id` int(255) NOT NULL,
  `email_to` varchar(10000) NOT NULL,
  `email_from` varchar(10000) NOT NULL,
  `email_message` longtext NOT NULL,
  `email_datetime` varchar(30) NOT NULL,
  `email_subject` varchar(10000) NOT NULL,
  `name` varchar(10000) NOT NULL,
  `pname` varchar(10000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5935 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remaildetail`
--

INSERT INTO `remaildetail` (`id`, `email_to`, `email_from`, `email_message`, `email_datetime`, `email_subject`, `name`, `pname`) VALUES
(5915, 'jay123@gmail.com', 'pmbh@gmail.com', 'invitation for you', '02-11-2015 03:11:17 am', 'invite', 'uploads/84229-5.mp4', 'tmp/BD19563_.GIF'),
(5916, 'jay123@gmail.com', 'pmbh@gmail.com', 'ok see you call letter', '02-11-2015 03:11:33 am', 'view this attachment', 'uploads/96837-movie.mp4', 'tmp/BD19563_.GIF'),
(5917, 'jay123@gmail.com', 'pmbh@gmail.com', 'view ok', '02-11-2015 03:11:49 am', 'find attachment', 'uploads/10-functions-of-system.docx', 'tmp/BD19563_.GIF'),
(5918, 'jay123@gmail.com', 'pmbh@gmail.com', 'this attachment view understand', '02-11-2015 03:12:03 am', 'Attachment', 'uploads/03_-_chaar_kadam(mymp3song.com).mp3', 'tmp/BD19563_.GIF'),
(5919, 'pmbh@gmail.com', 'jay123@gmail.com', 'this attachment view understand', '02-11-2015 03:13:47 am', 'Attachment', 'uploads/03_-_chaar_kadam(mymp3song.com).mp3', 'tmp/img2.jpg'),
(5920, 'pmbh@gmail.com', 'jay123@gmail.com', 'view ok', '02-11-2015 03:14:02 am', 'find attachment', 'uploads/10-functions-of-system.docx', 'tmp/img2.jpg'),
(5921, 'pmbh@gmail.com', 'jay123@gmail.com', 'ok see you call letter', '02-11-2015 03:14:16 am', 'view this attachment', 'uploads/96837-movie.mp4', 'tmp/img2.jpg'),
(5922, 'pmbh@gmail.com', 'jay123@gmail.com', 'invitation for you', '02-11-2015 03:14:30 am', 'invite', 'uploads/84229-5.mp4', 'tmp/img2.jpg'),
(5923, 'pmbh@gmail.com', 'jay123@gmail.com', 'invite to all come....', '02-11-2015 03:15:23 am', 'invitation', 'uploads/03_-_chaar_kadam(mymp3song.com).mp3', 'tmp/img2.jpg'),
(5924, 'pmbh@gmail.com', 'jay123@gmail.com', 'view the sedul of exam...', '02-11-2015 03:16:47 am', 'exam shadul', 'uploads/abstract_blue_background.jpg', 'tmp/img2.jpg'),
(5925, 'raj@gmail.com', 'jay123@gmail.com', 'this attachment view understand', '02-11-2015 03:17:09 am', 'Attachment', 'uploads/03_-_chaar_kadam(mymp3song.com).mp3', 'tmp/img2.jpg'),
(5926, 'raj@gmail.com', 'jay123@gmail.com', 'view ok', '02-11-2015 03:17:23 am', 'find attachment', 'uploads/10-functions-of-system.docx', 'tmp/img2.jpg'),
(5927, 'raj@gmail.com', 'jay123@gmail.com', 'ok see you call letter', '02-11-2015 03:17:38 am', 'view this attachment', 'uploads/96837-movie.mp4', 'tmp/img2.jpg'),
(5928, 'raj@gmail.com', 'jay123@gmail.com', 'invitation for you', '02-11-2015 03:17:55 am', 'invite', 'uploads/84229-5.mp4', 'tmp/img2.jpg'),
(5929, 'pmbh@gmail.com', 'raj@gmail.com', 'invitation for you', '02-11-2015 03:18:38 am', 'invite', 'uploads/84229-5.mp4', 'tmp/collision-wallpaper-1280x960.jpg'),
(5930, 'pmbh@gmail.com', 'raj@gmail.com', 'ok see you call letter', '02-11-2015 03:18:49 am', 'view this attachment', 'uploads/96837-movie.mp4', 'tmp/collision-wallpaper-1280x960.jpg'),
(5931, 'pmbh@gmail.com', 'raj@gmail.com', 'view ok', '02-11-2015 03:19:01 am', 'find attachment', 'uploads/10-functions-of-system.docx', 'tmp/collision-wallpaper-1280x960.jpg'),
(5932, 'pmbh@gmail.com', 'raj@gmail.com', 'this attachment view understand', '02-11-2015 03:19:13 am', 'Attachment', 'uploads/03_-_chaar_kadam(mymp3song.com).mp3', 'tmp/collision-wallpaper-1280x960.jpg'),
(5933, 'pmbh@gmail.com', 'raj@gmail.com', 'view this file.......', '02-11-2015 03:20:19 am', 'find  file', 'uploads/9-system-design.docx', 'tmp/collision-wallpaper-1280x960.jpg'),
(5934, 'pmbh@gmail.com', 'raj@gmail.com', 'come 12 march all in home.....', '02-11-2015 03:21:12 am', 'invite', 'uploads/khushboo-gujarat-ki---architectural---hindi.mp4', 'tmp/collision-wallpaper-1280x960.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `semaildetail`
--

CREATE TABLE IF NOT EXISTS `semaildetail` (
`id` int(255) NOT NULL,
  `email_to` varchar(2555) NOT NULL,
  `email_from` varchar(2555) NOT NULL,
  `email_message` mediumtext NOT NULL,
  `email_datetime` varchar(30) NOT NULL,
  `email_subject` mediumtext NOT NULL,
  `email_attachment` varchar(1000) NOT NULL,
  `name` varchar(10000) NOT NULL,
  `pname` varchar(10000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=297 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semaildetail`
--

INSERT INTO `semaildetail` (`id`, `email_to`, `email_from`, `email_message`, `email_datetime`, `email_subject`, `email_attachment`, `name`, `pname`) VALUES
(273, 'pmbh@gmail.com', 'jay123@gmail.com', 'this attachment view understand', '02-11-2015 00:50:28 am', 'Attachment', '', 'uploads/03_-_chaar_kadam(mymp3song.com).mp3', 'tmp/BD19563_.GIF'),
(274, 'pmbh@gmail.com', 'jay123@gmail.com', 'view ok', '02-11-2015 00:52:19 am', 'find attachment', '', 'uploads/10-functions-of-system.docx', 'tmp/BD19563_.GIF'),
(275, 'pmbh@gmail.com', 'jay123@gmail.com', 'ok see you call letter', '02-11-2015 00:53:16 am', 'view this attachment', '', 'uploads/96837-movie.mp4', 'tmp/BD19563_.GIF'),
(276, 'pmbh@gmail.com', 'jay123@gmail.com', 'invitation for you', '02-11-2015 00:54:17 am', 'invite', '', 'uploads/84229-5.mp4', 'tmp/BD19563_.GIF'),
(277, 'jay123@gmail.com', 'pmbh@gmail.com', 'invitation for you', '02-11-2015 03:11:17 am', 'invite', '', 'uploads/84229-5.mp4', 'tmp/img2.jpg'),
(278, 'jay123@gmail.com', 'pmbh@gmail.com', 'ok see you call letter', '02-11-2015 03:11:33 am', 'view this attachment', '', 'uploads/96837-movie.mp4', 'tmp/img2.jpg'),
(279, 'jay123@gmail.com', 'pmbh@gmail.com', 'view ok', '02-11-2015 03:11:49 am', 'find attachment', '', 'uploads/10-functions-of-system.docx', 'tmp/img2.jpg'),
(280, 'jay123@gmail.com', 'pmbh@gmail.com', 'this attachment view understand', '02-11-2015 03:12:03 am', 'Attachment', '', 'uploads/03_-_chaar_kadam(mymp3song.com).mp3', 'tmp/img2.jpg'),
(281, 'pmbh@gmail.com', 'jay123@gmail.com', 'this attachment view understand', '02-11-2015 03:13:47 am', 'Attachment', '', 'uploads/03_-_chaar_kadam(mymp3song.com).mp3', 'tmp/BD19563_.GIF'),
(282, 'pmbh@gmail.com', 'jay123@gmail.com', 'view ok', '02-11-2015 03:14:02 am', 'find attachment', '', 'uploads/10-functions-of-system.docx', 'tmp/BD19563_.GIF'),
(283, 'pmbh@gmail.com', 'jay123@gmail.com', 'ok see you call letter', '02-11-2015 03:14:16 am', 'view this attachment', '', 'uploads/96837-movie.mp4', 'tmp/BD19563_.GIF'),
(284, 'pmbh@gmail.com', 'jay123@gmail.com', 'invitation for you', '02-11-2015 03:14:30 am', 'invite', '', 'uploads/84229-5.mp4', 'tmp/BD19563_.GIF'),
(285, 'pmbh@gmail.com', 'jay123@gmail.com', 'invite to all come....', '02-11-2015 03:15:23 am', 'invitation', '', 'uploads/03_-_chaar_kadam(mymp3song.com).mp3', 'tmp/BD19563_.GIF'),
(286, 'pmbh@gmail.com', 'jay123@gmail.com', 'view the sedul of exam...', '02-11-2015 03:16:47 am', 'exam shadul', '', 'uploads/abstract_blue_background.jpg', 'tmp/BD19563_.GIF'),
(287, 'raj@gmail.com', 'jay123@gmail.com', 'this attachment view understand', '02-11-2015 03:17:09 am', 'Attachment', '', 'uploads/03_-_chaar_kadam(mymp3song.com).mp3', 'tmp/collision-wallpaper-1280x960.jpg'),
(288, 'raj@gmail.com', 'jay123@gmail.com', 'view ok', '02-11-2015 03:17:23 am', 'find attachment', '', 'uploads/10-functions-of-system.docx', 'tmp/collision-wallpaper-1280x960.jpg'),
(289, 'raj@gmail.com', 'jay123@gmail.com', 'ok see you call letter', '02-11-2015 03:17:38 am', 'view this attachment', '', 'uploads/96837-movie.mp4', 'tmp/collision-wallpaper-1280x960.jpg'),
(290, 'raj@gmail.com', 'jay123@gmail.com', 'invitation for you', '02-11-2015 03:17:55 am', 'invite', '', 'uploads/84229-5.mp4', 'tmp/collision-wallpaper-1280x960.jpg'),
(291, 'pmbh@gmail.com', 'raj@gmail.com', 'invitation for you', '02-11-2015 03:18:38 am', 'invite', '', 'uploads/84229-5.mp4', 'tmp/BD19563_.GIF'),
(292, 'pmbh@gmail.com', 'raj@gmail.com', 'ok see you call letter', '02-11-2015 03:18:49 am', 'view this attachment', '', 'uploads/96837-movie.mp4', 'tmp/BD19563_.GIF'),
(293, 'pmbh@gmail.com', 'raj@gmail.com', 'view ok', '02-11-2015 03:19:01 am', 'find attachment', '', 'uploads/10-functions-of-system.docx', 'tmp/BD19563_.GIF'),
(294, 'pmbh@gmail.com', 'raj@gmail.com', 'this attachment view understand', '02-11-2015 03:19:13 am', 'Attachment', '', 'uploads/03_-_chaar_kadam(mymp3song.com).mp3', 'tmp/BD19563_.GIF'),
(295, 'pmbh@gmail.com', 'raj@gmail.com', 'view this file.......', '02-11-2015 03:20:19 am', 'find  file', '', 'uploads/9-system-design.docx', 'tmp/BD19563_.GIF'),
(296, 'pmbh@gmail.com', 'raj@gmail.com', 'come 12 march all in home.....', '02-11-2015 03:21:12 am', 'invite', '', 'uploads/khushboo-gujarat-ki---architectural---hindi.mp4', 'tmp/BD19563_.GIF');

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE IF NOT EXISTS `userdetail` (
`id` int(255) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `name` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`id`, `firstname`, `lastname`, `password`, `gender`, `dob`, `email`, `contact_no`, `name`) VALUES
(1, 'paresh', 'bhatiya', '202cb962ac59075b964b07152d234b70', 'Male', '14/02/1998', 'pmbh@gmail.com', '8987674534', 'tmp/BD19563_.GIF'),
(2, 'jay', 'jadeja', 'baba327d241746ee0829e7e88117d4d5', 'Male', '17/5/1996', 'jay123@gmail.com', '7766543529', 'tmp/img2.jpg'),
(3, 'raj', 'karena', '65a1223dae83b8092c4edba0823a793c', 'Male', '12/3/1990', 'raj@gmail.com', '98989899887', 'tmp/collision-wallpaper-1280x960.jpg'),
(26, 'ravi', 'vasara', 'e9ad783838b07288d2daa6cc0e533e95', 'Male', '1989-02-14', 'ravi@ymail.com', '8987969333', 'tmp/light1.jpg'),
(27, 'manish', 'bhatiya', '59c95189ac895fcc1c6e1c38d067e244', 'Male', '1998-02-14', 'mm@outlook.com', '8987969333', 'images/user.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emailsave`
--
ALTER TABLE `emailsave`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remaildetail`
--
ALTER TABLE `remaildetail`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semaildetail`
--
ALTER TABLE `semaildetail`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetail`
--
ALTER TABLE `userdetail`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emailsave`
--
ALTER TABLE `emailsave`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `remaildetail`
--
ALTER TABLE `remaildetail`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5935;
--
-- AUTO_INCREMENT for table `semaildetail`
--
ALTER TABLE `semaildetail`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=297;
--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
