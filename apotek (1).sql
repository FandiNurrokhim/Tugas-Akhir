-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 12:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembelian`
--

CREATE TABLE `detail_pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `jumlah_bayar` int(11) DEFAULT NULL,
  `sisa_saldo` int(11) DEFAULT NULL,
  `tanggal_transaksi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_pembelian`
--

INSERT INTO `detail_pembelian` (`id_pembelian`, `id_pembeli`, `id_barang`, `jumlah`, `harga`, `total`, `jumlah_bayar`, `sisa_saldo`, `tanggal_transaksi`) VALUES
(4, 1, 4, 2, 20000, 40000, 50000, 10000, '2023-04-06'),
(19, 1, 4, 1, 20000, 20000, 920000, 900000, '2023-04-16'),
(20, 1, 2, 2, 2111, 4222, 920000, 915778, '2023-04-16'),
(21, 1, 4, 5, 20000, 100000, 840000, 740000, '2023-04-16'),
(22, 1, 2, 1, 2111, 2111, 840000, 837889, '2023-04-16'),
(23, 1, 3, 1, 2111, 2111, 840000, 0, '2023-04-16');

--
-- Triggers `detail_pembelian`
--
DELIMITER $$
CREATE TRIGGER `set_tanggal_transaksi` BEFORE INSERT ON `detail_pembelian` FOR EACH ROW SET NEW.tanggal_transaksi = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_saldo` AFTER INSERT ON `detail_pembelian` FOR EACH ROW UPDATE pembeli, detail_pembelian
SET pembeli.saldo = pembeli.saldo - detail_pembelian.total
WHERE pembeli.id_pembeli = detail_pembelian.id_pembeli
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_stok_barang` AFTER INSERT ON `detail_pembelian` FOR EACH ROW UPDATE obat SET stok_obat = stok_obat - NEW.jumlah WHERE id_obat = NEW.id_barang
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `harga_obat` int(11) NOT NULL,
  `stok_obat` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `gambar`, `kategori`, `harga_obat`, `stok_obat`, `deskripsi`) VALUES
(2, 'Paramex', 'default-image.jpg', 'ssss', 2111, -1, 'obat'),
(3, 'Paracetamol', 'bodrexin.jpg', 'aaaaaaaa', 2111, 1, 'asssssssssss'),
(4, 'Paramex', 'paramex.jpg', 'obat abit', 20000, 9, 'obat');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama_pembeli` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `saldo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `alamat`, `no_telp`, `username`, `email`, `password`, `saldo`) VALUES
(1, 'pembeli1', 'bandar', '08888', 'user1', 'bandar', '81dc9bdb52d04dc20036dbd8313ed055', 720000),
(2, NULL, NULL, NULL, 'bambangGantenk', 'bangjonoeeee@gmail.com', '357c5eaefeda3bf103d525b58d3fef73', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `id_saldo` int(11) NOT NULL,
  `nominal` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saldo`
--

INSERT INTO `saldo` (`id_saldo`, `nominal`) VALUES
(1, 50000),
(2, 100000),
(3, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `top_up_saldo`
--

CREATE TABLE `top_up_saldo` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_saldo` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `tanggal_top_up` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_pembeli` (`id_pembeli`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id_saldo`);

--
-- Indexes for table `top_up_saldo`
--
ALTER TABLE `top_up_saldo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `id_saldo` (`id_saldo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id_saldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `top_up_saldo`
--
ALTER TABLE `top_up_saldo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD CONSTRAINT `detail_pembelian_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`),
  ADD CONSTRAINT `detail_pembelian_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `obat` (`id_obat`);

--
-- Constraints for table `top_up_saldo`
--
ALTER TABLE `top_up_saldo`
  ADD CONSTRAINT `top_up_saldo_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `pembeli` (`id_pembeli`),
  ADD CONSTRAINT `top_up_saldo_ibfk_2` FOREIGN KEY (`id_saldo`) REFERENCES `saldo` (`id_saldo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
