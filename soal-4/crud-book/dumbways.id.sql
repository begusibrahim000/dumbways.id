-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Okt 2020 pada 17.06
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dumbways.id`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `book_tb`
--

CREATE TABLE `book_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `writer_id` int(11) NOT NULL,
  `publication_year` date NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `book_tb`
--

INSERT INTO `book_tb` (`id`, `name`, `category_id`, `writer_id`, `publication_year`, `img`) VALUES
(1, 'begus ibrahim', 1, 1, '2020-10-24', 'vue.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_tb`
--

CREATE TABLE `category_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `category_tb`
--

INSERT INTO `category_tb` (`id`, `name`) VALUES
(1, 'programming');

-- --------------------------------------------------------

--
-- Struktur dari tabel `writer_tb`
--

CREATE TABLE `writer_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `writer_tb`
--

INSERT INTO `writer_tb` (`id`, `name`) VALUES
(1, 'evan you');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `book_tb`
--
ALTER TABLE `book_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `category_tb`
--
ALTER TABLE `category_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `writer_tb`
--
ALTER TABLE `writer_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `book_tb`
--
ALTER TABLE `book_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `category_tb`
--
ALTER TABLE `category_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `writer_tb`
--
ALTER TABLE `writer_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
