-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 07:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `redlock`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Jabatan` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Nama`, `Alamat`, `Jabatan`) VALUES
(1, 'kevin', 'Cipete RayaNo. 6', 'Internship'),
(2, 'Benedict', 'Kemanggisan no.1', 'Supervisur'),
(3, 'Budi', 'Manggsa besar No.6', 'Manager'),
(4, 'Ani', 'Kemayoran Indah Permai No.34', 'Vice Responding'),
(5, 'Tono', 'Lenteng Agung No.76', 'Staff');


COMMIT;