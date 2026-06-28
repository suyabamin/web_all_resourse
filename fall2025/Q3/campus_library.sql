-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2026 at 12:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_loans`
--

CREATE TABLE `book_loans` (
  `LoanID` int(11) DEFAULT NULL,
  `StudentName` varchar(200) DEFAULT NULL,
  `BookTitle` varchar(200) DEFAULT NULL,
  `DaysOverdue` int(11) DEFAULT NULL,
  `PenaltyFee` int(11) DEFAULT NULL,
  `Status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_loans`
--

INSERT INTO `book_loans` (`LoanID`, `StudentName`, `BookTitle`, `DaysOverdue`, `PenaltyFee`, `Status`) VALUES
(101, 'Abdul', 'Data Structures', 0, 0, 'Returned'),
(102, 'Jabbar', 'Operating System', 12, 24, 'Overdue'),
(103, 'Baekat', 'Discrete math', 5, 10, 'Overdue'),
(104, 'Rahim', 'Linear Algebra', 2, 4, 'Overdue'),
(205, 'karim', 'Data Structures', 15, 30, 'Lost'),
(106, 'Fahim', 'Operating System', 0, 0, 'Returned');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
