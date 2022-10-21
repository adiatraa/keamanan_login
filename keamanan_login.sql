-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2022 pada 15.20
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keamanan_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `useraccount`
--

CREATE TABLE `useraccount` (
  `idUser` int(10) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `useraccount`
--

INSERT INTO `useraccount` (`idUser`, `fullname`, `email`, `password`) VALUES
(1, 'adiatra', 'ruzrkirxdrzctfd', '4874c743e772576ba5bd9a52b872f291'),
(2, 'Adiat Rahman', 'psxpivbpxardb', 'ad127e91073ba5be7adbc02e11b40028'),
(3, 'Adiat Ra', 'twbtmktzftbevhf', '182d8ca686499ff880e9bea58e703363'),
(4, 'ryan', 'elnatznvypbz', 'd73a84a85f7fde278683a9a1e9860add'),
(5, 'Adiat Rahman', 'psxpivbpxardb', 'ad127e91073ba5be7adbc02e11b40028');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `idUser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
