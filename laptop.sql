-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2023 pada 18.31
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli`
--

CREATE TABLE `beli` (
  `id_pembelian` int(20) NOT NULL,
  `id_penjaga` int(11) NOT NULL,
  `nama_penjaga` varchar(255) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `id_laptop` int(11) NOT NULL,
  `laptop_beli` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `beli`
--

INSERT INTO `beli` (`id_pembelian`, `id_penjaga`, `nama_penjaga`, `nama_pembeli`, `id_laptop`, `laptop_beli`, `harga`, `tanggal`, `waktu`, `status`) VALUES
(2, 7, 'Aditya Fajar', 'Waliyuddin', 1, 'Asus ROG Flow X16', 2000000, '2023-06-14', '13:38:52', 'Lunas'),
(7, 1, 'Abdi Naavial Umam Suleman', 'Sulaiman', 3, 'HP Gaming Victus 15-FB0009AX', 15000000, '2023-06-15', '11:39:46', 'Lunas'),
(8, 13, 'Sudirman', 'Akane', 4, 'Asus TUF Gaming F15 FX507ZE', 20000000, '2023-06-15', '17:56:36', 'Lunas'),
(9, 1, 'Abdi Naavial Umam Suleman', 'Sayu', 2, 'Apple Macbook Pro M2', 19000000, '2023-06-15', '21:56:05', 'Lunas'),
(10, 1, 'Abdi Naavial Umam Suleman', 'sapa hayo', 4, 'Asus TUF Gaming F15 FX507ZE', 20000000, '2023-06-15', '22:10:19', 'Lunas'),
(11, 1, 'Abdi Naavial Umam Suleman', 'Kagame', 1, 'Asus ROG Flow X16', 25000000, '2023-06-15', '22:58:22', 'Lunas'),
(13, 1, 'Abdi Naavial Umam Suleman', 'Tua bangka', 2, 'Apple Macbook Pro M2', 19000000, '2023-06-16', '13:34:04', 'Lunas'),
(14, 1, 'Abdi Naavial Umam Suleman', 'Bayu saputra', 1, 'Asus ROG Flow X16', 25000000, '2023-06-16', '13:34:42', 'Lunas'),
(15, 15, 'Bayu Saputra', 'Waliyuddin', 2, 'Apple Macbook Pro M2', 19000000, '2023-06-17', '13:56:08', 'Cicilan'),
(16, 1, 'Abdi Naavial Umam Suleman', 'Waliyuddin', 4, 'Asus TUF Gaming F15 FX507ZE', 20000000, '2023-06-17', '15:46:55', 'Lunas'),
(17, 3, 'Muhammad Waliyuddin', 'Hoshino', 3, 'HP Gaming Victus 15-FB0009AX', 15000000, '2023-06-17', '19:06:37', 'Lunas'),
(18, 1, 'Abdi Naavial Umam Suleman', 'Aqua', 3, 'HP Gaming Victus 15-FB0009AX', 15000000, '2023-06-17', '23:05:35', 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laptop`
--

CREATE TABLE `laptop` (
  `id_laptop` int(11) NOT NULL,
  `nama_laptop` varchar(255) NOT NULL,
  `cpu` varchar(255) NOT NULL,
  `gpu` varchar(255) NOT NULL,
  `storage` varchar(255) NOT NULL,
  `memory` varchar(255) NOT NULL,
  `display` varchar(255) NOT NULL,
  `keyboard` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `battery` varchar(255) NOT NULL,
  `wifi` varchar(255) NOT NULL,
  `harga` int(15) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laptop`
--

INSERT INTO `laptop` (`id_laptop`, `nama_laptop`, `cpu`, `gpu`, `storage`, `memory`, `display`, `keyboard`, `os`, `battery`, `wifi`, `harga`, `gambar`) VALUES
(1, 'Asus ROG Flow X16', 'AMD Ryzen 7', 'NVIDIA Geforce RTX 3060', '1 TB', '16 GB', '16 inch resolusi QHD', 'Keyboard Backlit', 'Windows 11', '90 WHrs', '802.11 ac', 25000000, '6489c6c3b25c9.jpg'),
(2, 'Apple Macbook Pro M2', 'M2 Chip', 'Intel iris plus Graphics', '1 TB', '8 GB', 'Retina True Tone 13.3 inch', 'Backlit Keyboard', 'macOS', '5000 whrs', '802.11 ac', 19000000, '64888a68f0122.jpeg'),
(3, 'HP Gaming Victus 15-FB0009AX', 'AMD Ryzen 5-5600H', 'NVIDIA GeForce RTX 3050', '512 GB', '16 GB', 'FHD 15.6 inch', 'Backlit Keyboard', 'Windows 11', '3-cell, 41 Wh Li-ion', 'Wifi 6 AX', 15000000, '648a87e902d7f.jpeg'),
(4, 'Asus TUF Gaming F15 FX507ZE', 'Intel core i7 12650H', 'NVIDIA GeForce RTX 3050 Ti', '512 GB', '16 GB', '15.6-inch FHD (1920 x 1080) Value IPS-level', 'Backlit Chiclet Keyboard', 'Windows 11 Home', '76Whrs', 'Wifi 6', 20000000, '648adf316dbdf.jpeg'),
(5, 'Lenovo Ideapad Gaming 3', 'AMD Ryzen 5-5600H', 'NVIDIA GeForce RTX 3050', '512 GB SSD', '16 GB DDR4', '15.6-inch FHD (1920 x 1080) IPS 300 units', '4-Zone RGB Backlit', 'Windows 11 Home', '45 Wh', 'Wifi 6', 11800000, '648dcd900b567.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `level` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `email`, `password`, `level`, `tanggal`, `alamat`, `nomor`, `foto`) VALUES
(1, 'Abdi Naavial Umam Suleman', 'discordzeppeto@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2002-04-17', 'Jln. KS Tubun', '082292805086', '648b12ad227c6.jpeg'),
(3, 'Muhammad Waliyuddin', 'mooontonn@gmail.com', 'bf8cd26e6c6732b8df17a31b54800ed8', 1, '2023-06-01', 'Jln. soekarno hatta', '0822324953', '648aa967c13e0.jpeg'),
(7, 'Aditya Fajar Rizki Djatim pratama', 'adit@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2022-10-14', 'jln. ks tubun', '08123423343', '6489ba045c3e7.jpeg'),
(10, 'Agung hidayatullah', 'agung@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, '1999-07-09', 'jln. ks tubun', '08123423343', '6489b65e4963e.jpeg'),
(13, 'Sudirman', 'sudirman@gmai.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2023-06-01', 'Jln. tondo', '08229938844', '648ad9e13a58d.jpeg'),
(15, 'Bayu Saputra', 'bayu@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2021-03-03', 'Jln. tondo', '8229272423222', '648d4aafa926b.jpeg'),
(16, 'Akane Kurokawa', 'akane@gmail.com', '65cb59645b852c2394ba3ff8b295e83c', 1, '0000-00-00', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id_laptop`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beli`
--
ALTER TABLE `beli`
  MODIFY `id_pembelian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id_laptop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
