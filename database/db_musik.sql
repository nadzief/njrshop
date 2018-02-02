-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 08, 2016 at 05:20 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_musik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `level` varchar(5) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_lengkap`, `username`, `password`, `email`, `jenis_kelamin`) VALUES
(3, 'Alibaba Saluja', 'alibaba', 'alibabasaluja', 'alibaba@yahoo.com', 'laki-laki'),
(4, 'hyouga', 'hyuga', '12345', 'hyuga@gmail.com', 'laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(50, 'Guitar'),
(51, 'Guitar Bass'),
(52, 'Drum'),
(53, 'Keyboard'),
(54, 'DJ'),
(55, 'Headphone'),
(56, 'Speaker');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE IF NOT EXISTS `keranjang` (
  `id_keranjang` int(5) NOT NULL AUTO_INCREMENT,
  `id_product` int(5) NOT NULL,
  `id_session` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tgl_keranjang` date NOT NULL,
  `qty` int(4) NOT NULL,
  PRIMARY KEY (`id_keranjang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE IF NOT EXISTS `order_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_pemesan` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'New',
  `jumlah` int(4) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `id_product`, `id_pemesan`, `nama`, `email`, `alamat`, `phone`, `status`, `jumlah`, `tanggal`) VALUES
(1, 1, '2g8m54h9s289b6u3pf7c0qefn0', 'Alibaba', 'alibaba@gmail.com', 'Jl. Mana aja udah', 83893373839, 'Lunas', 2, '2016-06-08'),
(2, 3, '2g8m54h9s289b6u3pf7c0qefn0', 'Alibaba', 'alibaba@gmail.com', 'Jl. Mana aja udah', 83893373839, 'Lunas', 1, '2016-06-08'),
(3, 1, 'mfjcaq3t3plrapmfp8q7n1uln7', 'Kokoh', 'kokoh@yahoo.com', 'Jl . jaauaua', 3999999999999, 'Lunas', 1, '2016-06-08'),
(4, 2, 'lqenaduciiabm00lpq7qirt0p4', 'munier', 'munier@yahoo.com', 'Jl. Belok kiri mentok', 93833663333, 'New', 2, '2016-06-19'),
(5, 3, 'lqenaduciiabm00lpq7qirt0p4', 'munier', 'munier@yahoo.com', 'Jl. Belok kiri mentok', 93833663333, 'Lunas', 1, '2016-06-19'),
(7, 9, 'o8pv3bl6gt927j5iebvjbodqr4', 'vskvsk', 'vnskvskn', 'svknvskn', 47294279, 'New', 1, '2016-08-06'),
(8, 9, 'o8pv3bl6gt927j5iebvjbodqr4', 'cssccs', 'sccs', 'cssc', 42242, 'New', 1, '2016-08-06'),
(9, 5, 'vb68f5q9ne8l9kg2fd5apfuag1', 'dgdg', 'dg', 'scvv', 42244242, 'New', 1, '2016-08-08'),
(10, 5, 'vb68f5q9ne8l9kg2fd5apfuag1', 'kvs', 'sbvk', 'svbk', 393232, 'New', 1, '2016-08-08'),
(11, 3, 'vb68f5q9ne8l9kg2fd5apfuag1', 'kvs', 'sbvk', 'svbk', 393232, 'New', 1, '2016-08-08'),
(12, 3, 'vb68f5q9ne8l9kg2fd5apfuag1', 'bdbdbd', 'dvmv@gmail.com', 'kcnkcnnkdbd', 24894248, 'New', 1, '2016-08-08'),
(13, 5, 'vb68f5q9ne8l9kg2fd5apfuag1', 'bdbdbd', 'dvmv@gmail.com', 'kcnkcnnkdbd', 24894248, 'New', 1, '2016-08-08'),
(14, 8, 'vb68f5q9ne8l9kg2fd5apfuag1', 'db', 'bd', 'fb', 42, 'New', 1, '2016-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(3) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `harga` int(20) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `nama_kategori`, `stok`, `id_category`, `harga`, `gambar`) VALUES
(1, 'Guitar Fender', 'Guitar Fender sangat cocok untuk kalian yang ingin memakai guitar bergenre rock. Karena suara yang dihasilkan gitar ini lebih ke arah genre rock', 'Guitar', 0, 50, 4000000, 'gitar1.jpg'),
(2, 'Drum Stack Neon', 'Drum Stack Neon ini mempunyai kelebihan dibandingkan Drum yang lain karena Drum ini memiliki double pedal pada bagian bawah drumnya', 'Drum', 18, 52, 3250000, 'drum1.jpg'),
(3, 'DJ Post Mix', 'DJ atau Disc Joki Post Mix ini memiliki 2 piringan yang bagus dan lebih mudah digunakan', 'DJ', 6, 54, 2800000, 'dj1.jpg'),
(4, 'Keyboard Alaska', 'Keyboard Super Mantap yang sangat mudah digunakan di rumah atau di studio musik', 'Keyboard', 16, 53, 3100000, 'keyboard1.jpg'),
(5, 'Guitar Gibson', 'Guitar Gibson yang luar biasa ini cocok dimainkan untuk genre apapun, suara yang dihasilkan pun sangat bersih dari gitar gibson ini.', 'Guitar', 23, 50, 4500000, 'gitar5.jpg'),
(6, 'Speaker Thunder', 'Suara yang dihasilkan oleh Speaker Thunder ini sangat hebat dengan kecepatan suara 20 Mach Turbo. Sebelum kehabisan lebih baik langsung saja dibeli', 'Speaker', 25, 56, 2550000, 'speaker1.jpg'),
(7, 'Guitar Bass Trix', 'Guitar Bass yang satu ini banyak kelebihan nya. Sebaiknya langsung saja dibeli', 'Guitar Bass', 16, 51, 3750000, 'guitar-bass-2.jpg'),
(8, 'Headphone Samson', 'Headphone dengan suara keren yang membuat telinga anda nyaman untuk di dengar', 'Headphone', 23, 55, 500000, 'headphone1.jpg'),
(9, 'Drum Tama', 'Drum Tama memiliki suara yang dahsyat. Silakan dicoba sendiri', 'Drum', 12, 52, 3500000, 'drum2.jpg'),
(10, 'Guitar Lightning', 'Guitar Lightning cocok bagi anda yang menyukai musik genre jazz', 'Guitar', 10, 50, 3000000, 'gitar4.jpg'),
(11, 'DJ Victory', 'Disc Joki Victory ini memiliki kelebihan luar biasa bagi anda yang ingin mencoba nya langsung saja dibeli', 'DJ', 8, 54, 3000000, 'dj2.jpg'),
(12, 'Guitar Bass Sky', 'Guitar Bass dengan warna biru langit ini memiliki suara rendah yang mantap', 'Guitar Bass', 14, 50, 3000000, 'guitar-bass-3.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
