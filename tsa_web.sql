-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Sep 2022 pada 14.53
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
-- Database: `tsa_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `ipk` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `fakultas`, `jurusan`, `ipk`) VALUES
('13012012', 'James Situmorang', 'Medan', '1995-04-02', 'Kedokteran', 'Kedokteran Gigi', 2.7),
('14005011', 'Riana Putria', 'Padang', '1996-11-23', 'FMIPA', 'Kimia', 3.1),
('15002032', 'Rina Kumala Sari', 'Jakarta', '1997-06-28', 'Ekonomi', 'Akuntansi', 3.4),
('15003036', 'Sari Citra Lestari', 'Jakarta', '1997-12-31', 'Ekonomi', 'Manajemen', 3.5),
('15021044', 'Rudi Permana', 'Bandung', '1994-08-22', 'FASILKOM', 'Ilmu Komputer', 2.9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_desain`
--

CREATE TABLE `produk_desain` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `harga_produk` int(50) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk_desain`
--

INSERT INTO `produk_desain` (`id_produk`, `nama_produk`, `harga_produk`, `kategori`, `gambar`) VALUES
(1, 'Logo Pertamina', 100000, '1', '1.png'),
(2, 'Logo Garuda Indonesia', 100000, '1', '2.jpg'),
(3, 'Logo Djarum', 100000, '1', '3.jpg'),
(4, 'Logo Adidas', 50000, '2', '4.png'),
(5, 'Logo Starbucks', 50000, '2', '5.png'),
(6, 'Logo Nike', 50000, '2', '6.jpg'),
(7, 'Logo 1', 30000, '3', '7.jpg'),
(8, 'Logo 2', 30000, '3', '8.jpg'),
(9, 'Logo 3', 30000, '3', '9.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'adminWeb', 'ab9649db9840b8b08b58f5d2e4a23083', 'admin'),
(2, 'riannura', '25d55ad283aa400af464c76d713c07ad', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `produk_desain`
--
ALTER TABLE `produk_desain`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk_desain`
--
ALTER TABLE `produk_desain`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
