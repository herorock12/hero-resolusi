-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 04:16 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(3) NOT NULL,
  `kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'busur'),
(2, 'panah'),
(3, 'acc'),
(4, 'tas');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(3) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `id_kategori`, `nama_produk`, `deskripsi`, `harga`, `foto`) VALUES
(12, 2, 'ARROW PLATINUM', 'Easton Platinum Plus', 1500000, 'images.jpg'),
(13, 2, 'ARROW CARBON MUSEN MSTJ', 'Original Musen Import', 55000, '1.jpg'),
(14, 2, 'ARROW FIBER MUSEN 8MM', 'Original Musen Import', 38000, '2.jpg'),
(15, 2, 'ARROW BAMBU PETUNG SPON 6MM', 'Vanes dan Nock dari kayu\r\n', 240000, '3.jpg'),
(16, 2, 'ARROW FIBER MUSEN 6MM', 'Original Musen Import', 35000, '4.jpg'),
(17, 1, 'BUSUR ANAK JUNXING BOW', 'Sangat cocok untuk memperkenalkan panahan kepada putra-putri Anda. Terbuat dari fiberglass yang sangat kuat dan berkualitas, sama seperti bahan yang digunakan oleh busur Compnound dewasa.', 295000, 'busur 1.jpg'),
(18, 1, 'BUSUR PANAH MINDFUL', 'Alvo Archery', 450000, 'busur 2.jpg'),
(19, 1, 'BUSUR HUNTING EXTREME BOW', 'Bertype RECURVE BOW.\r\nBusur ini sangat cocok digunakan untuk berkuda yang tarikannya rendah, dan sangat kuat, dirakit oleh tangan-tangan kreatif ahli dibidangnya.\r\nBiasanya busur ini cocok untuk jarak efektif 15 Meter atau lebih, sudah teruji akurat.', 350000, 'busur 3.jpg'),
(20, 1, 'HUNTING BOW FIGHT BACK', 'Bertype HORSE BOW LONG BOW\r\nBusur ini sangat cocok digunakan untuk berkuda yang tarikannya rendah, dan sangat kuat, dirakit oleh tangan-tangan kreatif ahli dibidangnya.\r\nBiasanya busur ini cocok untuk jarak efektif 100 Meter atau lebih, sudah teruji akurat.', 400000, 'busur 4.jpg'),
(21, 1, 'BUSUR STREET FIGHTER', 'Bertype STANDAR BOW RECURVE BOW\r\nBusur ini sangat cocok digunakan untuk Pemula pengguna Standar Bow untuk Lomba yang tarikannya rendah, dan sangat kuat, dirakit oleh tangan-tangan kreatif ahli dibidangnya.\r\nBiasanya busur ini cocok untuk jarak efektif 90 Meter atau lebih, sudah teruji akurat.', 700000, 'busur 5.jpg'),
(22, 4, 'TAS BUSUR RECURVE', 'Tas busur untuk busur standar/recurve bow berukura 68cm*34cm*13cm. Simpel, elegant dengan desain multifungsi, dapat membawa 4 bowset/busur standar Terdapat kantong limb terpisah, kantong stastabilizer,muat untuk puluhan arrow, dan aksesoris memanah lainnya.', 350000, 'tas 1.jpg'),
(23, 4, 'Bow Bag JX88 Recurve Bow', 'tas yang simple dan praktis ini cocok untuk membawa aksesoris panahan seperti Busur, Limb, Sight, Stabilizer, Arm guard, finger tab.', 250000, 'tas 2.jpg'),
(24, 4, 'QUIVER', 'Tas Anak Panah', 55000, 'tas 3.jpg'),
(25, 3, 'SMART FINGER TAB CARTEL ARCHERY', 'Aksesoris', 300000, 'acc 1.jpg'),
(26, 3, 'ARM GUARD ARCHERY', 'Arm Guard', 90000, 'acc 2.jpg'),
(28, 3, 'STRING DACRON', 'String Dacron merk Cartel', 120000, 'acc 3.jpg'),
(29, 3, 'BANTALAN TARGET 50 CM X 50 CM X 2 CM', 'Aksesoris', 85000, 'acc 4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(14) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'hero', 'hero', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
