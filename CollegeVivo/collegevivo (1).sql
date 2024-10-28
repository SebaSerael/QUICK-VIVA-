-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2024 at 05:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegevivo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admcardforvivo`
--

CREATE TABLE `admcardforvivo` (
  `Examid` varchar(10) NOT NULL,
  `SubId` varchar(10) NOT NULL,
  `studid` varchar(10) NOT NULL,
  `Batchcode` varchar(10) NOT NULL,
  `CourseCode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `BatchId` varchar(10) NOT NULL,
  `CourseId` varchar(19) NOT NULL,
  `RunningSem` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`BatchId`, `CourseId`, `RunningSem`) VALUES
('BT1000', '20MCA101', 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Coursecode` varchar(10) NOT NULL,
  `CourseName` varchar(15) NOT NULL,
  `YearofAdm` varchar(5) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Coursecode`, `CourseName`, `YearofAdm`, `status`) VALUES
('CR1000', '20MCA101', '2023', 'Doing'),
('CR1001', '20MCA103', '2023', 'Doing');

-- --------------------------------------------------------

--
-- Table structure for table `examdates`
--

CREATE TABLE `examdates` (
  `ExamId` varchar(10) NOT NULL,
  `SubjectId` varchar(10) NOT NULL,
  `ExamDt` date NOT NULL,
  `Examtim` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `examdates`
--

INSERT INTO `examdates` (`ExamId`, `SubjectId`, `ExamDt`, `Examtim`, `Status`) VALUES
('EX1000', 'SB1000', '2024-10-20', '11:30 am -', 'Declared');

-- --------------------------------------------------------

--
-- Table structure for table `logtab`
--

CREATE TABLE `logtab` (
  `Logid` varchar(10) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logtab`
--

INSERT INTO `logtab` (`Logid`, `Password`, `usertype`) VALUES
('Admin', '000', 'Admin'),
('EXT00', '123', 'false'),
('TC1000', 'treasamary@gmail.com', 'Teacher'),
('ST1000', 'seba@gmail.com', 'Student'),
('ST1001', 'hasee@gmail.com', 'Student'),
('ST1002', 'anandhu@gmail.com', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `QuestionId` varchar(10) NOT NULL,
  `SubjectId` varchar(10) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `opt1` varchar(100) NOT NULL,
  `opt2` varchar(100) NOT NULL,
  `opt3` varchar(100) NOT NULL,
  `opt4` varchar(100) NOT NULL,
  `ans` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`QuestionId`, `SubjectId`, `Question`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`, `status`) VALUES
('QN1000', 'SB1000', 'Which component is used to compile, debug and execute the java programs?', 'JRE', ' JIT', 'JDK', ' JVM', 'Opt3', 'Added'),
('QN1001', 'SB1000', 'Which statement is true about Java?', 'Java is a sequence-dependent programming language', ' Java is a code dependent programming language', 'Java is a platform-dependent programming language', 'Java is a platform-independent programming language', 'Opt4', 'Added'),
('QN1002', 'SB1000', 'Which one of the following is not a Java feature?', 'Object-oriented', 'Use of pointers', ' Portable', ' Dynamic and Extensible', 'Opt2', 'Added'),
('QN1003', 'SB1000', ' What will be the output of the following Java code?\r\n\r\n    class increment {\r\n        public static', '32', '33', '24', '25', 'Opt1', 'Added'),
('QN1004', 'SB1000', 'Which of the following is not an OOPS concept in Java?', 'Polymorphism', 'Inheritance', 'Compilation', 'Encapsulation', 'Opt3', 'Added'),
('QN1005', 'SB1000', 'Which of these are selection statements in Java?', 'break', 'continue', 'for()', 'if()', 'Opt4', 'Added'),
('QN1006', 'SB1000', 'Which of the following is a superclass of every class in Java?', 'ArrayList', ' Abstract class', 'Object class', 'String', 'Opt3', 'Added'),
('QN1007', 'SB1000', 'Which of these keywords are used for the block to be examined for exceptions?\r\n', 'check', 'throw', 'catch', 'try', 'Opt4', 'Added'),
('QN1008', 'SB1000', 'Which one of the following is not an access modifier?', 'Protected', 'Void', 'Public', 'Private', 'Opt2', 'Added'),
('QN1009', 'SB1000', 'Which package contains the Random class?', 'java.util package\r\n', 'java.lang package', 'java.awt package', 'java.io package', 'Opt1', 'Added'),
('QN1010', 'SB1001', 'Who developed Python Programming Language?', 'Wick van Rossum', 'Rasmus Lerdorf', 'Guido van Rossum', 'Niene Stom', 'Opt3', 'Added'),
('QN1011', 'SB1001', 'Which of the following is the correct extension of the Python file?', '.python', '.pl', ' .py', '.p', 'Opt3', 'Added'),
('QN1012', 'SB1001', 'What does pip stand for python?\r\n', 'Pip Installs Python', 'Pip Installs Packages', 'Preferred Installer Program', 'All of the mentioned', 'Opt3', 'Added'),
('QN1013', 'SB1001', ' Which of the following is not a core data type in Python programming?', 'Tuples', 'Lists', 'Class', 'Dictionary', 'Opt3', 'Added');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `resid` varchar(10) NOT NULL,
  `examid` varchar(10) NOT NULL,
  `studid` varchar(10) NOT NULL,
  `Nqn` varchar(15) NOT NULL,
  `crtAns` varchar(15) NOT NULL,
  `totmark` varchar(15) NOT NULL,
  `feedback` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shuffledones`
--

CREATE TABLE `shuffledones` (
  `Shuffleid` varchar(10) NOT NULL,
  `ExamId` varchar(15) NOT NULL,
  `QuestionId` varchar(10) NOT NULL,
  `SubjId` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentId` varchar(10) NOT NULL,
  `StudentName` varchar(30) NOT NULL,
  `Batchcode` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `CourseCode` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Age` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentId`, `StudentName`, `Batchcode`, `Gender`, `CourseCode`, `DOB`, `Age`, `email`, `phone`, `status`) VALUES
('ST1000', 'Seba Roy', 'BT1000', 'FeMale', '20MCA101', '2024-10-19', 22, 'seba@gmail.com', '8589977589', 'Approved'),
('ST1001', 'Haseena.S', 'BT1000', 'FeMale', '20MCA101', '2002-11-22', 22, 'hasee@gmail.com', '12345678', 'Approved'),
('ST1002', 'Ananthu', 'BT1000', 'Male', '20MCA101', '2002-12-31', 22, 'anandhu@gmail.com', '52456789', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SubId` varchar(8) NOT NULL,
  `SubName` varchar(20) NOT NULL,
  `Batch` varchar(10) NOT NULL,
  `Syllubus` text NOT NULL,
  `Stype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SubId`, `SubName`, `Batch`, `Syllubus`, `Stype`) VALUES
('SB1000', 'Java', 'BT1000', '1.Loops & Arrays 2.Functions \r\n3.Exception \r\n4. Multithread', 'Lab'),
('SB1001', 'Python', 'BT1000', '1. Functions\r\n2.create, append, and remove lists in python\r\n3.dictionaries in python', 'Lab');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `TeacherId` varchar(10) NOT NULL,
  `tname` varchar(30) NOT NULL,
  `Qualification` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `DOJ` date NOT NULL,
  `Desig` varchar(25) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `Age` int(4) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`TeacherId`, `tname`, `Qualification`, `gender`, `DOJ`, `Desig`, `phone`, `email`, `Age`, `Address`, `status`) VALUES
('TC1000', 'Mary Treasa', 'M-tech', 'FeMale', '2024-06-11', 'Associate Proff', '8547213581', 'treasamary@gmail.com', 32, '21A , Near Pazhaveedu temple\r\npazhaveedu PO', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `teachersub`
--

CREATE TABLE `teachersub` (
  `TeacherId` varchar(20) NOT NULL,
  `SubjectId` varchar(20) NOT NULL,
  `batchid` varchar(20) NOT NULL,
  `CourseCode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachersub`
--

INSERT INTO `teachersub` (`TeacherId`, `SubjectId`, `batchid`, `CourseCode`) VALUES
('TC1000', 'SB1000', 'BT1000', '20MCA101'),
('TC1000', 'SB1000', 'BT1000', '20MCA101'),
('TC1000', 'SB1000', 'BT1000', '20MCA101');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
