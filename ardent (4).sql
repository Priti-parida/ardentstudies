-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 09:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ardent`
--

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `ID` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`ID`, `title`, `subtitle`, `description`) VALUES
(10, 'ARDENT  Bilaspur Faculty requirement', 'Quantitative Aptitude/ Data Interpretation/ Logical Reasoning', '<ul>\r\n	<li><strong>Responsibilities and Tasks:</strong>\r\n	<ul>\r\n		<li>To be able to take classes of Quantitative Aptitude/Data Interpretation/Logical Reasoning</li>\r\n		<li>Be able to proactively interact with students</li>\r\n		<li>Provide Counselling to the students</li>\r\n		<li>Take up doubt clarification sessions</li>\r\n	</ul>\r\n	</li>\r\n	<li><strong>What we offer:</strong>\r\n	<ul>\r\n		<li>Good work environment</li>\r\n		<li>Flexible working hours</li>\r\n	</ul>\r\n	</li>\r\n	<li><strong>Training:&nbsp;</strong>Appropriate Training and guidance will be provided to the selected candidate.</li>\r\n	<li><strong>SALARY:&nbsp;</strong>Will not be a constraint for the right candidate.</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `examnotify`
--

CREATE TABLE `examnotify` (
  `ID` int(255) NOT NULL,
  `examname` varchar(255) NOT NULL,
  `examregdate` datetime(6) NOT NULL,
  `examendate` datetime(6) NOT NULL,
  `examdate` datetime(6) NOT NULL,
  `fees` int(255) NOT NULL,
  `websites` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examnotify`
--

INSERT INTO `examnotify` (`ID`, `examname`, `examregdate`, `examendate`, `examdate`, `fees`, `websites`) VALUES
(3, 'ssc', '2022-04-07 00:00:00.000000', '2022-04-07 00:00:00.000000', '2022-04-28 00:00:00.000000', 1600, 'https://www.google.com/');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(255) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img_name`, `created_at`) VALUES
(6, 'WhatsApp Image 2022-03-28 at 12.24.05 PM.jpeg', '2022-04-07 11:08:05'),
(7, 'WhatsApp Image 2022-03-28 at 12.25.00 PM.jpeg', '2022-04-07 11:08:25'),
(8, 'WhatsApp Image 2022-03-28 at 12.16.24 PM.jpeg', '2022-04-07 11:09:37'),
(10, 'WhatsApp Image 2022-03-28 at 12.25.00 PM.jpeg', '2022-04-11 13:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `popimg`
--

CREATE TABLE `popimg` (
  `id` int(255) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `popimg`
--

INSERT INTO `popimg` (`id`, `img_name`, `created_at`) VALUES
(4, 'WhatsApp Image 2022-03-28 at 1.33.30 PM.jpeg', '2022-04-11 13:12:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmapplications`
--

CREATE TABLE `tbladmapplications` (
  `ID` int(11) NOT NULL,
  `UserId` char(10) NOT NULL,
  `CourseApplied` varchar(120) DEFAULT NULL,
  `FatherName` varchar(120) DEFAULT NULL,
  `MotherName` varchar(120) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Nationality` varchar(120) DEFAULT NULL,
  `Gender` varchar(200) DEFAULT NULL,
  `Category` varchar(200) DEFAULT NULL,
  `CorrespondenceAdd` varchar(350) NOT NULL,
  `PermanentAdd` varchar(350) NOT NULL,
  `SecondaryBoard` varchar(120) DEFAULT NULL,
  `SecondaryBoardyop` varchar(120) DEFAULT NULL,
  `SecondaryBoardper` varchar(120) DEFAULT NULL,
  `SecondaryBoardstream` varchar(120) DEFAULT NULL,
  `SSecondaryBoard` varchar(120) DEFAULT NULL,
  `SSecondaryBoardyop` varchar(120) DEFAULT NULL,
  `SSecondaryBoardper` varchar(120) DEFAULT NULL,
  `SSecondaryBoardstream` varchar(120) DEFAULT NULL,
  `GraUni` varchar(120) DEFAULT NULL,
  `GraUniyop` varchar(120) DEFAULT NULL,
  `GraUnidper` varchar(120) DEFAULT NULL,
  `GraUnistream` varchar(120) DEFAULT NULL,
  `PGUni` varchar(120) DEFAULT NULL,
  `PGUniyop` varchar(120) DEFAULT NULL,
  `PGUniper` varchar(120) DEFAULT NULL,
  `PGUnistream` varchar(120) DEFAULT NULL,
  `Declaration` varchar(120) DEFAULT NULL,
  `Signature` varchar(120) DEFAULT NULL,
  `CourseApplieddate` timestamp NOT NULL DEFAULT current_timestamp(),
  `AdminRemark` varchar(255) DEFAULT NULL,
  `AdminStatus` varchar(20) DEFAULT NULL,
  `AdminRemarkDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `UserPic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmapplications`
--

INSERT INTO `tbladmapplications` (`ID`, `UserId`, `CourseApplied`, `FatherName`, `MotherName`, `DOB`, `Nationality`, `Gender`, `Category`, `CorrespondenceAdd`, `PermanentAdd`, `SecondaryBoard`, `SecondaryBoardyop`, `SecondaryBoardper`, `SecondaryBoardstream`, `SSecondaryBoard`, `SSecondaryBoardyop`, `SSecondaryBoardper`, `SSecondaryBoardstream`, `GraUni`, `GraUniyop`, `GraUnidper`, `GraUnistream`, `PGUni`, `PGUniyop`, `PGUniper`, `PGUnistream`, `Declaration`, `Signature`, `CourseApplieddate`, `AdminRemark`, `AdminStatus`, `AdminRemarkDate`, `UserPic`) VALUES
(3, '6', 'MBA', 'bijaya', 'sanju', '1997-08-01', 'indian', 'Male', 'General', 'ASDFRGHJK', 'RTGYHJUL', 'DFG', '2222', '89', 'CS', 'DFGH', '2222', '99', 'cd', 'SDFG', '2222', '99', 'cs', 'SADFGT', '2222', '89', 'cs', NULL, '', '2022-04-07 05:20:42', 'ASDFGHJKL', '2', '2022-04-07 11:35:27', 'd487114b0cc36d1fb9cccd6b43042377jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `username`, `email`, `password`) VALUES
(1, 'admin', 'priti@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `ID` int(11) NOT NULL,
  `CourseName` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`ID`, `CourseName`) VALUES
(15, 'SSC'),
(16, 'MBA'),
(18, 'CLAT'),
(19, 'CAT');

-- --------------------------------------------------------

--
-- Table structure for table `tbldocument`
--

CREATE TABLE `tbldocument` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `TransferCertificate` varchar(120) DEFAULT NULL,
  `TenMarksheeet` varchar(120) DEFAULT NULL,
  `TwelveMarksheet` varchar(120) DEFAULT NULL,
  `GraduationCertificate` varchar(120) DEFAULT NULL,
  `PostgraduationCertificate` varchar(120) DEFAULT NULL,
  `UploadDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblnotice`
--

CREATE TABLE `tblnotice` (
  `ID` int(11) NOT NULL,
  `Title` varchar(250) DEFAULT NULL,
  `Decription` text DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnotice`
--

INSERT INTO `tblnotice` (`ID`, `Title`, `Decription`, `CreationDate`) VALUES
(5, 'SSC EXAM DATE ', 'ON 6/3/2022', '2022-04-05 05:39:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `LastName` varchar(45) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(60) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `Email`, `Password`, `PostingDate`) VALUES
(6, 'pp', 'pp', 9999999999, 'priti@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-04-06 10:45:17'),
(7, 'GATE', 'gate', 9131227277, 'preetiparida109@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-04-07 11:47:01'),
(8, 'pp', 'pp', 9827170273, 'priti123@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-04-11 05:53:08'),
(9, 'priti', 'parida', 9039634924, 'pritiparida109@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-04-11 06:12:40');

-- --------------------------------------------------------

--
-- Table structure for table `testanalysis`
--

CREATE TABLE `testanalysis` (
  `ID` int(255) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `courseyear` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testanalysis`
--

INSERT INTO `testanalysis` (`ID`, `coursename`, `courseyear`, `description`) VALUES
(7, 'SSC', '2020', 'DFS 2010 was a very lengthy paper, consisting of 200 questions to be answered in 120 minutes. There were no sections in the paper, but fortunately, the questions in multiple areas were not jumbled. General Awareness was very difficult, with questions on Finance, Commerce, Securities markets and Corporate Affairs. Students with a good knowledge of economic affairs would have benefited from this paper. There were many questions in Probability, P & C, Limits and Integration in the Quant area which would have demoralized many students.\r\n\r\nAs with most lengthy papers, the key to scoring well in DFS 2010 was to scan the whole paper initially and not wasting time on any question. Questions on LR, DS and DI were easy and students who attempted more questions in these areas would have scored well.'),
(11, 'MBA', '2020', '<h2>NOTICES &amp; ANNOUNCEMENTS</h2>\r\n\r\n<ul>\r\n	<li><a href=\"https://csvtu.ac.in/ew/news/notice-of-research-degree-committee-rdc-2022/\">Notice of Research Degree Committee (RDC) 2022</a>\r\n\r\n	<p>April 7, 2022</p>\r\n	</li>\r\n	<li><a href=\"https://csvtu.ac.in/ew/news/notification-result-of-re-valuation-offline-application-apr-may-2021/\">Notification -Result of Re-Valuation (Offline Application -Apr-May 2021)</a>\r\n	<p>April 6, 2022</p>\r\n	</li>\r\n	<li><a href=\"https://csvtu.ac.in/ew/news/digivarsity-portal-opening-for-exam-form-filling-of-nov-dec-2021-exams-6/\">DIGivarsity Portal opening for Exam Form Filling of Nov-Dec 2021 Exams.</a>\r\n	<p>April 6, 2022</p>\r\n	</li>\r\n	<li><a href=\"https://csvtu.ac.in/ew/news/notice-regarding-refund-of-enrollment-fees-session_2021-2022/\">Notice Regarding refund of Enrollment fees session_2021-2022</a>\r\n	<p>April 5, 2022</p>\r\n	</li>\r\n	<li><a href=\"https://csvtu.ac.in/ew/news/digivarsity-portal-opening-for-exam-form-filling-of-nov-dec-2021-exams-5/\">DIGivarsity Portal opening for Exam Form Filling of Nov-Dec 2021 Exams.</a>\r\n	<p>April 4, 2022</p>\r\n	</li>\r\n	<li><a href=\"https://csvtu.ac.in/ew/news/regarding-fee-for-student-admitted-in-session-2021-2022new/\">Regarding Fee for Student admitted in Session 2021-2022(New)</a>\r\n	<p>April 2, 2022</p>\r\n	</li>\r\n	<li><a href=\"https://csvtu.ac.in/ew/news/calculated-scores-as-per-aicte-guidelines-for-finalization-of-the-authors-for-writing-technical-books/\">Calculated Scores as per AICTE Guidelines for finalization of the authors for writing Technical Books.</a>\r\n	<p>March 31, 2022</p>\r\n	</li>\r\n	<li><a href=\"https://csvtu.ac.in/ew/news/expression-of-interest-from-faculty-for-writing-books-under-aicte-technical-book-writing-tbw-scheme-for-under-graduate-courses-2nd-year-form/\">Expression of Interest from Faculty for Writing Books under AICTE Technical Book Writing (TBW) Scheme for Under Graduate Courses &ndash; 2nd Year form</a>\r\n	<p>March 30, 2022</p>\r\n	</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `ID` int(255) NOT NULL,
  `video_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`ID`, `video_name`, `location`, `description`) VALUES
(9, 'SSC', 'video (1).mp4', ''),
(10, 'SSC', 'Pexels Videos 1578318.mp4', ''),
(13, 'SSC', 'video (1).mp4', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `examnotify`
--
ALTER TABLE `examnotify`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popimg`
--
ALTER TABLE `popimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmapplications`
--
ALTER TABLE `tbladmapplications`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbldocument`
--
ALTER TABLE `tbldocument`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblnotice`
--
ALTER TABLE `tblnotice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `testanalysis`
--
ALTER TABLE `testanalysis`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `examnotify`
--
ALTER TABLE `examnotify`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `popimg`
--
ALTER TABLE `popimg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbladmapplications`
--
ALTER TABLE `tbladmapplications`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbldocument`
--
ALTER TABLE `tbldocument`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblnotice`
--
ALTER TABLE `tblnotice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testanalysis`
--
ALTER TABLE `testanalysis`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
