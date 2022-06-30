-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2022 at 04:52 PM
-- Server version: 5.7.38-0ubuntu0.18.04.1
-- PHP Version: 7.3.33-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `funfit`
--

-- --------------------------------------------------------

--
-- Table structure for table `Class`
--

CREATE TABLE `Class` (
  `ClassID` int(11) NOT NULL,
  `ClassName` varchar(30) NOT NULL,
  `Instructor` varchar(30) DEFAULT NULL,
  `Difficulty` varchar(5) DEFAULT NULL,
  `Description` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Class`
--

INSERT INTO `Class` (`ClassID`, `ClassName`, `Instructor`, `Difficulty`, `Description`) VALUES
(1, 'Yoga', 'Tom', '1/5', 'Keep it calm at FunFit Yoga, where pupils are instructed to increase awareness of their breath and posture, are guided through gentle movements and stretches, undergo a relaxing silent meditation and finish off with cool-down loose movements.'),
(2, 'Cardio Masters', 'Adrienne', '3/5', 'Let\'s get those heart rates up! At FunFit, Cardio Masters makes use of the elliptical machine, treadmill, and stair-climber to give members the cardiovascular health they\'ve always dreamt of. You\'ll be encouraged to push your limits. Sweat now, thank us later!'),
(3, 'BodyBuilding', 'Rachel', '4/5', 'Sculpt the body of your dreams! FunFit\'s BodyBuilding regime educates members on the different muscle groups while pushing the limits of their strength. Whether you\'re looking to be competition-ready or simply want a physique upgrade, FunFit\'s BodyBuilding will help you achieve dreams you never thought possible.'),
(4, 'Resistance Training', 'Rob', '4/5', 'Weak no more! FunFit\'s Resistance Training programme focuses on members\' physical strength, increasing their independence, confidence, and physical capabilities. FunFit educates students on proper form and how to push themselves without overworking.');

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `QueryID` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Contact`
--

INSERT INTO `Contact` (`QueryID`, `Name`, `Email`, `Message`) VALUES
(1, 'Mikiel', 'mcraem@tcd.ie', 'test'),
(2, 'Mikiel McRae', 'mcraem@tcd.ie', 'I was billed twice'),
(3, 'Mikiel McRae', 'mcraem@tcd.ie', 'Having trouble updating my card details');

-- --------------------------------------------------------

--
-- Table structure for table `Fee`
--

CREATE TABLE `Fee` (
  `MembershipType` varchar(10) NOT NULL,
  `Fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Fee`
--

INSERT INTO `Fee` (`MembershipType`, `Fee`) VALUES
('Basic', 28),
('Premium', 49),
('Student', 11);

-- --------------------------------------------------------

--
-- Table structure for table `Page`
--

CREATE TABLE `Page` (
  `PageID` int(11) NOT NULL,
  `page_name` varchar(30) NOT NULL,
  `Description` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Page`
--

INSERT INTO `Page` (`PageID`, `page_name`, `Description`) VALUES
(1, 'Classes', 'No commitment, no hassle! See which classes work for your schedule.'),
(2, 'Testimonials', 'Not sure? See what our loyal members love most about FunFit.'),
(3, 'Contact us', 'Get in touch. FunFit would love to hear from you.'),
(4, 'Events', 'See what our loyal members get up to after they finish working up a sweat at FunFit!');

-- --------------------------------------------------------

--
-- Table structure for table `Testimonial`
--

CREATE TABLE `Testimonial` (
  `TestimonialID` int(11) NOT NULL,
  `Test` mediumtext NOT NULL,
  `Class` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Testimonial`
--

INSERT INTO `Testimonial` (`TestimonialID`, `Test`, `Class`) VALUES
(1, 'test', 'yoga'),
(2, 'Loved it', 'Cardio Masters'),
(3, 'So intense but loved every second', 'BodyBuilding'),
(4, 'Obsessed with pilates!', 'Pilates'),
(5, 'Had an amazing time', 'Cardio Masters');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `MembershipType` varchar(10) NOT NULL,
  `Pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`UserID`, `FirstName`, `LastName`, `Email`, `MembershipType`, `Pass`) VALUES
(1, 'Mikiel', 'McRae', 'mcraem@tcd.ie', 'Student', 'test'),
(2, 'Test', 'Client', 'test@test.com', 'Premium', 'test'),
(6, 'Mikiel', 'McRae', 'mcraem@tcd.ie', 'Student', 'Numbertwo'),
(9, 'Mikiel', 'McRae', 'mcraem@tcd.ie', 'Premium', 'testing'),
(10, 'Mikiel', 'McRae', 'mcraem@tcd.ie', 'Basic', 'testing2'),
(11, 'Mikiel', 'McRae', 'mcraem@tcd.ie', 'Premium', 'test3');

-- --------------------------------------------------------

--
-- Table structure for table `User_Class`
--

CREATE TABLE `User_Class` (
  `UserID` int(11) NOT NULL,
  `ClassID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Class`
--
ALTER TABLE `Class`
  ADD PRIMARY KEY (`ClassID`);

--
-- Indexes for table `Contact`
--
ALTER TABLE `Contact`
  ADD PRIMARY KEY (`QueryID`);

--
-- Indexes for table `Fee`
--
ALTER TABLE `Fee`
  ADD PRIMARY KEY (`MembershipType`);

--
-- Indexes for table `Page`
--
ALTER TABLE `Page`
  ADD PRIMARY KEY (`PageID`);

--
-- Indexes for table `Testimonial`
--
ALTER TABLE `Testimonial`
  ADD PRIMARY KEY (`TestimonialID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `MembershipType` (`MembershipType`);

--
-- Indexes for table `User_Class`
--
ALTER TABLE `User_Class`
  ADD PRIMARY KEY (`UserID`,`ClassID`),
  ADD KEY `ClassID` (`ClassID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Class`
--
ALTER TABLE `Class`
  MODIFY `ClassID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Contact`
--
ALTER TABLE `Contact`
  MODIFY `QueryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Page`
--
ALTER TABLE `Page`
  MODIFY `PageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Testimonial`
--
ALTER TABLE `Testimonial`
  MODIFY `TestimonialID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `User`
--
ALTER TABLE `User`
  ADD CONSTRAINT `User_ibfk_1` FOREIGN KEY (`MembershipType`) REFERENCES `Fee` (`MembershipType`);

--
-- Constraints for table `User_Class`
--
ALTER TABLE `User_Class`
  ADD CONSTRAINT `User_Class_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `User` (`UserID`),
  ADD CONSTRAINT `User_Class_ibfk_2` FOREIGN KEY (`ClassID`) REFERENCES `Class` (`ClassID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
