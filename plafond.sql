-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 18 Agu 2023 pada 19.55
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpr_maria_sidang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `plafond`
--

CREATE TABLE `plafond` (
  `id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `plafond`
--

INSERT INTO `plafond` (`id`, `value`) VALUES
(2, '2000000'),
(3, '3000000'),
(4, '4000000'),
(5, '5000000'),
(6, '6000000'),
(7, '7000000'),
(8, '8000000'),
(9, '9000000'),
(10, '10000000'),
(11, '11000000'),
(12, '12000000'),
(13, '13000000'),
(14, '14000000'),
(15, '15000000'),
(16, '16000000'),
(17, '17000000'),
(18, '18000000'),
(19, '19000000'),
(20, '20000000'),
(21, '21000000'),
(22, '22000000'),
(23, '23000000'),
(24, '24000000'),
(25, '25000000'),
(26, '26000000'),
(27, '27000000'),
(28, '28000000'),
(29, '29000000'),
(30, '30000000'),
(31, '31000000'),
(32, '32000000'),
(33, '33000000'),
(34, '34000000'),
(35, '35000000'),
(36, '36000000'),
(37, '37000000'),
(38, '38000000'),
(39, '39000000'),
(40, '40000000'),
(41, '41000000'),
(42, '42000000'),
(43, '43000000'),
(44, '44000000'),
(45, '45000000'),
(46, '46000000'),
(47, '47000000'),
(48, '48000000'),
(49, '49000000'),
(50, '50000000'),
(51, '51000000'),
(52, '52000000'),
(53, '53000000'),
(54, '54000000'),
(55, '55000000'),
(56, '56000000'),
(57, '57000000'),
(58, '58000000'),
(59, '59000000'),
(60, '60000000'),
(61, '61000000'),
(62, '62000000'),
(63, '63000000'),
(64, '64000000'),
(65, '65000000'),
(66, '66000000'),
(67, '67000000'),
(68, '68000000'),
(69, '69000000'),
(70, '70000000'),
(71, '71000000'),
(72, '72000000'),
(73, '73000000'),
(74, '74000000'),
(75, '75000000'),
(76, '76000000'),
(77, '77000000'),
(78, '78000000'),
(79, '79000000'),
(80, '80000000'),
(81, '81000000'),
(82, '82000000'),
(83, '83000000'),
(84, '84000000'),
(85, '85000000'),
(86, '86000000'),
(87, '87000000'),
(88, '88000000'),
(89, '89000000'),
(90, '90000000'),
(91, '91000000'),
(92, '92000000'),
(93, '93000000'),
(94, '94000000'),
(95, '95000000'),
(96, '96000000'),
(97, '97000000'),
(98, '98000000'),
(99, '99000000'),
(100, '100000000'),
(101, '110000000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `plafond`
--
ALTER TABLE `plafond`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `plafond`
--
ALTER TABLE `plafond`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
