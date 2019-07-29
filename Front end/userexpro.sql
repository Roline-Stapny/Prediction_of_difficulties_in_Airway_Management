-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 06:24 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `difficulties_in_airway`
--

-- --------------------------------------------------------

--
-- Table structure for table `userexpro`
--

CREATE TABLE `userexpro` (
  `Userid` int(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `ufname` varchar(255) NOT NULL,
  `umname` varchar(255) NOT NULL,
  `ulname` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `street1` varchar(255) NOT NULL,
  `street2` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userexpro`
--

INSERT INTO `userexpro` (`Userid`, `image`, `uname`, `ufname`, `umname`, `ulname`, `dept`, `designation`, `street1`, `street2`, `country`, `state`, `zipcode`, `city`, `phone_no`, `email`, `password`, `Cpassword`) VALUES
(1, '', '', 'pajja', 'm', 'k', 'anime', 'head', 'korea', 'busan', 'gyanju', 'busan', '574110', 'nitte', '8861436059', 'Su@gmail.com', '', ''),
(2, '', '', 'Prajna M K', 'M', 'K', 'General surgery', 'kk', 'DEVASABETT', 'MANOOR POST & VILLAGE', 'India', 'Karnataka', '576221', 'Kota', '8861436059', 'prajnamk05.pmkmk@gmail.com', '', ''),
(3, '', '', 'hh', 'hh', 'hh', 'Anaesthetics', 'hh', 'hh', 'hh', 'Heard Island and McDonald Islands', 'Heard Island and McDonald Islands', '574110', 'Nitte', '8875491643', 'pp@gmail.com', '', ''),
(4, '', '', 'yy', 'yy', 'yy', '-1', 'yyy', 'yyy', 'yyyy', 'Yemen', '', '574110', 'Nitte', '8754214689', 'kk@gmail.com', 'Pajj@1234', 'Pajj@1234'),
(5, '', '', 'ww', 'yy', 'yyy', '-1', 'yyy', 'yyy', 'yyy', 'Yemen', '', '574110', 'Nitte', '8754214369', 'kk@gmail.com', 'Pajja@123', 'Pajja@123'),
(6, 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAgAElEQVR4XmW9CbRd91Xm+Tvjnd4d3jxosiTLki3JYzzFjmMnjhMyJyQOlQAGAqFIKCiKMFXXSkEXq7qbYrEW3RSretFAUxBSTEXIQAY6g+MkdmzHsiRbs/T0NDy9+c73nvn02vt/n0OtkvOkp6v77j13nz18+9vf/sf6y9/9iTxJc0jhajPm6sUNx', 'Pajja', 'kk', 'kk', 'kk', '-1', 'kk', 'kk', 'kkk', 'Kiribati', 'Kiritimati', '574110', 'Nitte', '5487214578', 'kk@gmail.com', 'pp@123', 'pp@123'),
(7, 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAgAElEQVR4Xk1997NlZ3XlOvncHN67L4fOrRyQBFIjjGSEMVA1UGOP8dimasYz/8DUlG0hFLAS+CePfxp+8YxrxmMPjgUY22ODjREIhHIrdXzd/XK8OZ57wtTa+9zGqJp+4d5zz9nfDmuvvb6vjd9+8iuJYQOeacF0MrBMA7BtmJYJ27JhGUBkeXANA', 'Pajja', 'hai', 'M', 'K', 'Neonatal unit', 'hai', 'State High', 'NET Ladies Hostel', 'India', 'Karnataka', '574110', 'UDUPI', '8861436059', 'prajnamk05.pmkmk@gmail.com', 'jj@123', 'jj@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userexpro`
--
ALTER TABLE `userexpro`
  ADD PRIMARY KEY (`Userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userexpro`
--
ALTER TABLE `userexpro`
  MODIFY `Userid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
