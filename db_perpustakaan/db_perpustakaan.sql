-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2026 at 04:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `koleksi`
--

CREATE TABLE `koleksi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` enum('Buku','Koran') NOT NULL,
  `penerbit` varchar(100) DEFAULT NULL,
  `tahun_terbit` year(4) DEFAULT NULL,
  `stok` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `koleksi`
--

INSERT INTO `koleksi` (`id`, `judul`, `kategori`, `penerbit`, `tahun_terbit`, `stok`) VALUES
(1, 'Laskar Pelangi', 'Buku', 'Bentang Pustaka', '2005', 6),
(2, 'Filosofi Teras', 'Buku', 'Kompas', '2018', 2),
(3, 'Kompas Edisi Jan 2024', 'Koran', 'PT Kompas Media', '2024', 9),
(4, 'Jawa Pos Edisi Feb 2024', 'Koran', 'Jawa Pos', '2024', 8),
(5, 'Book of fufufafa', 'Buku', 'Kioo', '2026', 5);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `koleksi_id` int(11) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `status` enum('dipinjam','kembali') DEFAULT 'dipinjam'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `user_id`, `koleksi_id`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(1, 3, 1, '2024-03-01', '2026-01-29', ''),
(2, 3, 2, '2026-01-29', NULL, 'dipinjam'),
(3, 2, 3, '2026-01-30', NULL, 'dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','penjaga','umum','kebersihan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `gender`, `tanggal_lahir`, `password`, `role`) VALUES
(1, 'admin1', 'Budi Sang Admin', 'Laki-laki', '1990-01-01', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(2, 'jaga1', 'Siti Penjaga', 'Perempuan', '1995-05-12', '$2y$10$8WvS/.vO7PUPf6Y6yYg9Se.vVv.q0T1BvG9R0Y2S3Y3eG8R6YmS6', 'penjaga'),
(3, 'budi_umum', 'Budi Pembaca', 'Laki-laki', '2000-10-20', '$2y$10$8WvS/.vO7PUPf6Y6yYg9Se.vVv.q0T1BvG9R0Y2S3Y3eG8R6YmS6', 'umum'),
(4, 'bersih1', 'Agus Kebersihan', 'Laki-laki', '1988-03-15', '$2y$10$8WvS/.vO7PUPf6Y6yYg9Se.vVv.q0T1BvG9R0Y2S3Y3eG8R6YmS6', 'umum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `koleksi`
--
ALTER TABLE `koleksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `koleksi_id` (`koleksi_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `koleksi`
--
ALTER TABLE `koleksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`koleksi_id`) REFERENCES `koleksi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
