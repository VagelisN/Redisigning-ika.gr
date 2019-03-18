-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2018 at 09:20 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdi1400123`
--
CREATE DATABASE IF NOT EXISTS `sdi1400123` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sdi1400123`;

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `first` varchar(256) CHARACTER SET utf8 NOT NULL,
  `last` varchar(30) CHARACTER SET utf8 NOT NULL,
  `afm` int(9) NOT NULL,
  `start_date` date NOT NULL,
  `expire_date` date NOT NULL,
  `num_employees` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`first`, `last`, `afm`, `start_date`, `expire_date`, `num_employees`) VALUES
('Î“Î•Î©Î¡Î“Î™Î‘', 'ÎœÎ‘ÎšÎ¡Î™ÎÎŸÎ¥', 112233445, '2017-01-23', '2019-01-23', 3),
('Î•Î¥Î¤Î¥Î§Î—Î£', 'ÎÎ™ÎšÎŸÎ›Î‘ÎŸÎ¥', 223344556, '2017-01-23', '2019-01-23', 14);

-- --------------------------------------------------------

--
-- Table structure for table `insured`
--

CREATE TABLE `insured` (
  `first` varchar(256) CHARACTER SET utf8 NOT NULL,
  `last` varchar(256) CHARACTER SET utf8 NOT NULL,
  `father` varchar(256) CHARACTER SET utf8 NOT NULL,
  `afm` int(9) NOT NULL,
  `amka` bigint(11) NOT NULL,
  `ins_children` int(2) NOT NULL,
  `start_date` date NOT NULL,
  `expire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insured`
--

INSERT INTO `insured` (`first`, `last`, `father`, `afm`, `amka`, `ins_children`, `start_date`, `expire_date`) VALUES
('Î•Î¥Î‘Î“Î“Î•Î›ÎŸÎ£', 'ÎÎ•Î‘ÎœÎŸÎÎ™Î¤Î—Î£', 'ÎœÎ‘Î¡ÎšÎŸÎ£', 123456789, 12345678909, 4, '2017-01-23', '2019-01-23'),
('Î£ÎŸÎ¦Î™Î‘', 'Î•Î¥Î‘Î“Î“Î•Î›ÎŸÎ¥', 'Î“Î•Î©Î¡Î“Î™ÎŸÎ£', 123456788, 12345678888, 1, '2017-01-23', '2019-01-23'),
('Î‘Î ÎŸÎ£Î¤ÎŸÎ›ÎŸÎ£', 'Î£ÎŸÎ¥Î¡Î“ÎšÎ‘ÎšÎ—Î£', 'ÎÎ™ÎšÎŸÎ£', 123456777, 12345678999, 4, '2017-03-27', '2019-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `users_employers`
--

CREATE TABLE `users_employers` (
  `user_username` varchar(30) NOT NULL,
  `user_pass` varchar(256) NOT NULL,
  `user_first` varchar(30) CHARACTER SET utf8 NOT NULL,
  `user_last` varchar(30) CHARACTER SET utf8 NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_afm` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_employers`
--

INSERT INTO `users_employers` (`user_username`, `user_pass`, `user_first`, `user_last`, `user_email`, `user_afm`) VALUES
('georgia', '$2y$10$O6ME9sC9IymhagXBWlWezuYplcldZBc4/owT3dz1xL6ZjiWjwcJ6W', 'Î“Î•Î©Î¡Î“Î™Î‘', 'ÎœÎ‘ÎšÎ¡Î™ÎÎŸÎ¥', 'georgia@gmail.com', 112233445);

-- --------------------------------------------------------

--
-- Table structure for table `users_insured`
--

CREATE TABLE `users_insured` (
  `user_username` varchar(30) NOT NULL,
  `user_pass` varchar(256) NOT NULL,
  `user_first` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `user_last` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `user_father` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_afm` int(9) NOT NULL,
  `user_amka` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_insured`
--

INSERT INTO `users_insured` (`user_username`, `user_pass`, `user_first`, `user_last`, `user_father`, `user_email`, `user_afm`, `user_amka`) VALUES
('vagelis', '$2y$10$muFveGbLl.FKU4RvP15fo.Fgi5XcHe2PRwZ5W1cygRLEh4YCSX2V6', 'Î•Î¥Î‘Î“Î“Î•Î›ÎŸÎ£', 'ÎÎ•Î‘ÎœÎŸÎÎ™Î¤Î—Î£', 'ÎœÎ‘Î¡ÎšÎŸÎ£', 'vagelis@gmail.com', 123456789, 12345678909);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`afm`);

--
-- Indexes for table `users_employers`
--
ALTER TABLE `users_employers`
  ADD PRIMARY KEY (`user_afm`);

--
-- Indexes for table `users_insured`
--
ALTER TABLE `users_insured`
  ADD PRIMARY KEY (`user_afm`),
  ADD UNIQUE KEY `user_amka` (`user_amka`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
