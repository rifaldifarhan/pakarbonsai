-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 05:25 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakarbonsai`
--

-- --------------------------------------------------------

--
-- Table structure for table `basis_pengetahuan`
--

CREATE TABLE `basis_pengetahuan` (
  `id` int(11) NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL,
  `pengertian` text NOT NULL,
  `penanggulangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basis_pengetahuan`
--

INSERT INTO `basis_pengetahuan` (`id`, `nama_penyakit`, `pengertian`, `penanggulangan`) VALUES
(1, 'Bercak Daun', 'Bercak daun pada bonsai merupakan kondisi dimana daun bonsai mengalami perubahan warna, pola atau tekstur yang tidak normal. Bercak daun dapat berupa bercak berwarna, area pucat, bercak coklat, bercak hitam, atau perubahan lainnya pada permukaan daun.', '1. Pemangkasan daun yang terkena bercak daun dengan menggunakan pisau atau gunting yang steril untuk menghidari penyebaran penyakit.\n2. Menjaga kebersihan pada area bonsai untuk mengurangi resiko infeksi lebih lanjut\n3. Menggunakan fungisida yang sesuai\n'),
(2, 'Karat Daun', 'Karat daun merupakan penyakit jamur yang disebabkan oleh spesies Puccinia yang menyerang tanaman. Karat daun pada bonsai biasanya ditandai dengan bercak bertekstrur pada permukaan daun yang berwarna oranye atau kuning kecoklatan. Bercak ini biasanya terdapat pada bagian bawah daun dan dapat berkembang menjadi bercak berukuran lebih besar seiring berkembangnya infeksi.', '1. Pemangkasan daun yang terkena karat daun dengan menggunakan pisau atau gunting yang steril untuk menghidari penyebaran penyakit.\n2. Menjaga kebersihan pada area bonsai untuk mengurangi resiko infeksi lebih lanjut\n3. Menggunakan fungisida pada tahap awal infeksi\n'),
(3, 'Klorosis', 'Keadaan jaringan pada tumbuhan khusunya pada daun, yang mengalami kegagalan pada pembentukan klorofil sehingga warna daun tidak berwarna hijau melainkan berwana kuning. Gejala tersebut dikarenakan kekurangan zat besi.', '1. Pemulihan keasaman tanah dengan bahan penambah keasaman (pH down) atau penambah kebasaan (pH up) yang sesuai\n2. Pemangkasan menggunakan alat potong yang steril jika daun terlalu parah terkena klorosis\n'),
(4, 'Kerupuk', 'Kondisi dimana daun-daun tanaman menjadi rapuh, kering dan mudah patah. Hal ini bisa terjadi karena beberapa faktor seperti kekurangan air, paparan sinar matahari yang berlebihan, kekurangan nutrisi, dan serangan hama.', '1. Siram bonsai dengan air yang cukup\n2. Pemberian pupuk yang sesuai secara teratur mengikuti petunjuk pemakaian\n3. Penggunaan insektisida yang tepat\n4. Pangkas daun yang tidak sehat\n'),
(5, 'Kanker Batang', 'Kanker batang merupakan kondisi dimana terbentuknya lesi atau pertumbuhan yang tidak normal pada batang tanaman bonsai. Kaker batang dapat disebabkan oleh infeksi jamur, bakteri, atau faktor lingkungan yang merusak jaringan batang.', '1. Pemangkasan pada batang yang terkena hingga jauh dibawah area yang terinfeksi menggunakan alat potong yang steril\n2. Menggunakan fungisida yang sesuai\n'),
(6, 'Busuk Batang', 'Busuk batang adalah kondisi dimana jaringan batang bonsai mengalami pembusukan yang disebabkan oleh infeksi patogen, seperti jamur atau bakteri.', '1. Pemangkasan pada batang yang terkena hingga jauh dibawah area yang terinfeksi menggunakan alat potong yang steril\n2. Pastikan tanah tidak terlalu lembab agar tidak memperburuk kondisi busuk batang\n'),
(7, 'Busuk Akar', 'Busuk akar merupakan kondisi dimana akar bonsai mengalami pembusukan atau kerusakan yang disebabkan oleh infeksi jamur, bakteri, atau kondisi lingkungan yang tidak ideal. Hal tersebut dapat menyebabkan gangguan pada sistem akar, menghambat penyerapan nutrisi dan air, serta mengancam kesehatan dan kelangsungan hidup bonsai.', '1. Potong bagian akar yang terlihat busuk, hitam, atau berbau tidak sedap menggunakan alat yang steril \n2. Pindahkan tanaman bonsai ke pot baru dengan media tanam yang segar\n3. Pastikan tanah di sekitar bonsai tidak terlalu lembab\n4. Penggunaan fungisida yang tepat\n'),
(8, 'Busuk Daun', 'Busuk daun pada bonsai dapat disebabkan oleh beberapa faktor, termasuk infeksi jamur, serangga penghisap, kondisi lingkungan yang tidak ideal, atau kesalahan perawatan.', '1. Pemangkasan pada daun yang busuk\n2. Semprotkan air secara teratur pada tanaman atau meletakkan wadah air disekitae bonsai\n3. Tempatkan bonsai di tempat dengan sirkulasi udara yang baik\n4. Penggunaan fungisida yang tepat \n');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(10) NOT NULL,
  `nama_gejala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `nama_gejala`) VALUES
('G01', 'Daun Tampak basah dan berlendir'),
('G02', 'Daun kering '),
('G03', 'Daun layu'),
('G04', 'Daun menguning tidak merata'),
('G05', 'Daun keriting'),
('G06', 'Daun menguning '),
('G07', 'Bercak-bercak pada daun'),
('G08', 'bercak-bercak pada daun berbentuk bulat tidak teratur'),
('G09', 'Bercak pada daun kecil-kecil dan permukaannya kasar'),
('G10', 'Terdapat jamur pada daun'),
('G11', 'Batang berubah warna (lebih gelap, coklat atau hitam)'),
('G12', 'batangnya layu'),
('G13', 'Batang busuk'),
('G14', 'Batang menjadi bersisik dan berbelah'),
('G15', 'Akar berwarna cokelat kehitaman'),
('G16', 'Akar mengering atau busuk'),
('G17', 'Terdapat putih-putih pada akar'),
('G18', 'Tanaman terlihat layu'),
('G19', 'Daun berwarna kecoklatan');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` varchar(10) NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL,
  `pengendalian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nama_penyakit`, `pengendalian`) VALUES
('P01', 'Bercak Daun', '1. Pemangkasan daun yang terkena bercak daun dengan menggunakan pisau atau gunting yang steril untuk menghidari penyebaran penyakit.\n2. Menjaga kebersihan pada area bonsai untuk mengurangi resiko infeksi lebih lanjut\n3. Menggunakan fungisida yang sesuai\n            '),
('P02', 'Karat Daun', '1. Pemangkasan daun yang terkena karat daun dengan menggunakan pisau atau gunting yang steril untuk menghidari penyebaran penyakit.\n2. Menjaga kebersihan pada area bonsai untuk mengurangi resiko infeksi lebih lanjut\n3. Menggunakan fungisida pada tahap awal infeksi\n            '),
('P03', 'Klorosis', '1. Pemulihan keasaman tanah dengan bahan penambah keasaman (pH down) atau penambah kebasaan (pH up) yang sesuai\n2. Pemangkasan menggunakan alat potong yang steril jika daun terlalu parah terkena klorosis\n'),
('P04', 'Kerupuk', '1. Siram bonsai dengan air yang cukup\n2. Pemberian pupuk yang sesuai secara teratur mengikuti petunjuk pemakaian\n3. Penggunaan insektisida yang tepat\n4. Pangkas daun yang tidak sehat\n   '),
('P05', 'Kanker Batang', '1. Pemangkasan pada batang yang terkena hingga jauh dibawah area yang terinfeksi menggunakan alat potong yang steril\n2. Menggunakan fungisida yang sesuai\n'),
('P06', 'Busuk Batang', '1. Pemangkasan pada batang yang terkena hingga jauh dibawah area yang terinfeksi menggunakan alat potong yang steril\n2. Pastikan tanah tidak terlalu lembab agar tidak memperburuk kondisi busuk batang\n'),
('P07', 'Busuk Akar', '1. Potong bagian akar yang terlihat busuk, hitam, atau berbau tidak sedap menggunakan alat yang steril \n2. Pindahkan tanaman bonsai ke pot baru dengan media tanam yang segar\n3. Pastikan tanah di sekitar bonsai tidak terlalu lembab\n4. Penggunaan fungisida yang tepat\n'),
('P08', 'Busuk Daun', '1. Pemangkasan pada daun yang busuk\n2. Semprotkan air secara teratur pada tanaman atau meletakkan wadah air disekitae bonsai\n3. Tempatkan bonsai di tempat dengan sirkulasi udara yang baik\n4. Penggunaan fungisida yang tepat \n');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_konsultasi`
--

CREATE TABLE `riwayat_konsultasi` (
  `id_riwayat` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `tgl_diagnosa` date NOT NULL,
  `penyakit` varchar(50) NOT NULL,
  `hasil` float NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_konsultasi`
--

INSERT INTO `riwayat_konsultasi` (`id_riwayat`, `username`, `tgl_diagnosa`, `penyakit`, `hasil`, `pilihan`) VALUES
(63, 'rifaldi', '2023-05-25', 'Bercak Daun', 0.457143, '[\"G09\",\"G11\",\"G13\",\"G16\"]'),
(66, 'aldi', '2023-05-25', 'Kerupuk', 0.444444, '[\"G05\",\"G07\",\"G09\",\"G10\"]'),
(68, 'rifaldi', '2023-05-25', 'Kanker Batang', 0.347826, '[\"G02\",\"G03\",\"G06\",\"G07\"]'),
(69, 'wahyu', '2023-05-25', 'Busuk Akar', 0.283784, '[\"G14\",\"G15\",\"G17\",\"G18\"]'),
(70, 'aldi', '2023-05-28', 'Bercak Daun', 0.571429, '[\"G08\",\"G09\",\"G11\",\"G14\"]'),
(71, 'aldi', '2023-05-28', 'Busuk Akar', 0.27027, '[\"G15\",\"G17\",\"G18\"]'),
(72, 'rifaldi', '2023-05-28', 'Bercak Daun', 0.571429, '[\"G08\",\"G09\",\"G11\",\"G13\"]'),
(73, 'rifaldi', '2023-05-28', 'Bercak Daun', 0.571429, '[\"G08\",\"G09\",\"G11\",\"G13\"]'),
(74, 'rifaldi', '2023-05-28', 'Bercak Daun', 0.342857, '[\"G09\",\"G12\",\"G13\",\"G14\"]'),
(75, 'rifaldi', '2023-05-28', 'Karat Daun', 0.457143, '[\"G08\",\"G10\",\"G12\",\"G13\"]'),
(76, 'rifaldi', '2023-05-28', 'Karat Daun', 0.457143, '[\"G08\",\"G10\",\"G12\",\"G13\"]');

-- --------------------------------------------------------

--
-- Table structure for table `skor_gejala`
--

CREATE TABLE `skor_gejala` (
  `idskor_gejala` int(11) NOT NULL,
  `gejala_idgejala` varchar(5) NOT NULL,
  `penyakit_idpenyakit` varchar(5) NOT NULL,
  `skor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skor_gejala`
--

INSERT INTO `skor_gejala` (`idskor_gejala`, `gejala_idgejala`, `penyakit_idpenyakit`, `skor`) VALUES
(1, 'G01', 'P01', 0.1),
(2, 'G02', 'P01', 0.1),
(3, 'G03', 'P01', 0.1),
(4, 'G04', 'P01', 0.1),
(5, 'G05', 'P01', 0.1),
(6, 'G06', 'P01', 0.1),
(7, 'G07', 'P01', 0.1),
(8, 'G08', 'P01', 0.5),
(9, 'G09', 'P01', 0.9),
(10, 'G10', 'P01', 0.1),
(11, 'G11', 'P01', 0.5),
(12, 'G12', 'P01', 0.1),
(13, 'G13', 'P01', 0.1),
(14, 'G14', 'P01', 0.1),
(15, 'G15', 'P01', 0.1),
(16, 'G16', 'P01', 0.1),
(17, 'G17', 'P01', 0.1),
(18, 'G18', 'P01', 0.1),
(19, 'G19', 'P01', 0.1),
(20, 'G01', 'P02', 0.1),
(21, 'G02', 'P02', 0.1),
(22, 'G03', 'P02', 0.1),
(23, 'G04', 'P02', 0.1),
(24, 'G05', 'P02', 0.1),
(25, 'G06', 'P02', 0.1),
(26, 'G07', 'P02', 0.1),
(27, 'G08', 'P02', 0.5),
(28, 'G09', 'P02', 0.1),
(29, 'G10', 'P02', 0.9),
(30, 'G11', 'P02', 0.5),
(31, 'G12', 'P02', 0.1),
(32, 'G13', 'P02', 0.1),
(33, 'G14', 'P02', 0.1),
(34, 'G15', 'P02', 0.1),
(35, 'G16', 'P02', 0.1),
(36, 'G17', 'P02', 0.1),
(37, 'G18', 'P02', 0.1),
(38, 'G19', 'P02', 0.1),
(39, 'G01', 'P03', 0.1),
(40, 'G02', 'P03', 0.1),
(41, 'G03', 'P03', 0.1),
(42, 'G04', 'P03', 0.9),
(43, 'G05', 'P03', 0.1),
(44, 'G06', 'P03', 0.8),
(45, 'G07', 'P03', 0.1),
(46, 'G08', 'P03', 0.1),
(47, 'G09', 'P03', 0.1),
(48, 'G10', 'P03', 0.1),
(49, 'G11', 'P03', 0.1),
(50, 'G12', 'P03', 0.1),
(51, 'G13', 'P03', 0.1),
(52, 'G14', 'P03', 0.1),
(53, 'G15', 'P03', 0.1),
(54, 'G16', 'P03', 0.1),
(55, 'G17', 'P03', 0.1),
(56, 'G18', 'P03', 0.1),
(57, 'G19', 'P03', 0.1),
(58, 'G01', 'P04', 0.1),
(59, 'G02', 'P04', 0.1),
(60, 'G03', 'P04', 0.1),
(61, 'G04', 'P04', 0.1),
(62, 'G05', 'P04', 0.9),
(63, 'G06', 'P04', 0.1),
(64, 'G07', 'P04', 0.1),
(65, 'G08', 'P04', 0.1),
(66, 'G09', 'P04', 0.1),
(67, 'G10', 'P04', 0.1),
(68, 'G11', 'P04', 0.1),
(69, 'G12', 'P04', 0.1),
(70, 'G13', 'P04', 0.1),
(71, 'G14', 'P04', 0.1),
(72, 'G15', 'P04', 0.1),
(73, 'G16', 'P04', 0.1),
(74, 'G17', 'P04', 0.1),
(75, 'G18', 'P04', 0.1),
(76, 'G19', 'P04', 0.1),
(77, 'G01', 'P05', 0.1),
(78, 'G02', 'P05', 0.4),
(79, 'G03', 'P05', 0.5),
(80, 'G04', 'P05', 0.3),
(81, 'G05', 'P05', 0.1),
(82, 'G06', 'P05', 0.4),
(83, 'G07', 'P05', 0.3),
(84, 'G08', 'P05', 0.1),
(85, 'G09', 'P05', 0.1),
(86, 'G10', 'P05', 0.1),
(87, 'G11', 'P05', 0.1),
(88, 'G12', 'P05', 0.8),
(89, 'G13', 'P05', 0.1),
(90, 'G14', 'P05', 0.1),
(91, 'G15', 'P05', 0.7),
(92, 'G16', 'P05', 0.1),
(93, 'G17', 'P05', 0.1),
(94, 'G18', 'P05', 0.1),
(95, 'G19', 'P05', 0.1),
(96, 'G01', 'P06', 0.1),
(97, 'G02', 'P06', 0.4),
(98, 'G03', 'P06', 0.5),
(99, 'G04', 'P06', 0.3),
(100, 'G05', 'P06', 0.1),
(101, 'G06', 'P06', 0.4),
(102, 'G07', 'P06', 0.3),
(103, 'G08', 'P06', 0.1),
(104, 'G09', 'P06', 0.1),
(105, 'G10', 'P06', 0.1),
(106, 'G11', 'P06', 0.1),
(107, 'G12', 'P06', 0.1),
(108, 'G13', 'P06', 0.1),
(109, 'G14', 'P06', 1),
(110, 'G15', 'P06', 0.1),
(111, 'G16', 'P06', 0.1),
(112, 'G17', 'P06', 0.1),
(113, 'G18', 'P06', 0.1),
(114, 'G19', 'P06', 0.5),
(115, 'G01', 'P07', 0.1),
(116, 'G02', 'P07', 0.5),
(117, 'G03', 'P07', 0.6),
(118, 'G04', 'P07', 0.3),
(119, 'G05', 'P07', 0.1),
(120, 'G06', 'P07', 0.4),
(121, 'G07', 'P07', 0.3),
(122, 'G08', 'P07', 0.1),
(123, 'G09', 'P07', 0.1),
(124, 'G10', 'P07', 0.1),
(125, 'G11', 'P07', 0.1),
(126, 'G12', 'P07', 0.5),
(127, 'G13', 'P07', 0.6),
(128, 'G14', 'P07', 0.1),
(129, 'G15', 'P07', 0.1),
(130, 'G16', 'P07', 0.9),
(131, 'G17', 'P07', 1),
(132, 'G18', 'P07', 0.9),
(133, 'G19', 'P07', 0.6),
(134, 'G01', 'P08', 0.9),
(135, 'G02', 'P08', 0.1),
(136, 'G03', 'P08', 0.1),
(137, 'G04', 'P08', 0.1),
(138, 'G05', 'P08', 0.1),
(139, 'G06', 'P08', 0.1),
(140, 'G07', 'P08', 0.4),
(141, 'G08', 'P08', 0.1),
(142, 'G09', 'P08', 0.1),
(143, 'G10', 'P08', 0.1),
(144, 'G11', 'P08', 0.1),
(145, 'G12', 'P08', 0.1),
(146, 'G13', 'P08', 0.1),
(147, 'G14', 'P08', 0.1),
(148, 'G15', 'P08', 0.1),
(149, 'G16', 'P08', 0.1),
(150, 'G17', 'P08', 0.1),
(151, 'G18', 'P08', 0.1),
(152, 'G19', 'P08', 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `alamat`, `telepon`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'Administrator', 'admin', 'rifaldifarhan23@gmail.com', 'Jember', '081357595144', '$2y$10$M8Mx4i9.h4EX6/tmFJpYcuIG1jwzvrTofNpKew9PCW7J1fPBy9G9O', 1, 1, 1679649426),
(6, 'coba nich', 'rifaldi', 'ridhotes@gmail.com', 'Golden Market City', '081357595144', '$2y$10$d7HC1h9477OST6aG3VrFWOZclXoCftpqvSXyyE3f3GbFqZDFcptsC', 2, 1, 1679650372),
(7, 'dok', '25dok', 'ridhoaw@gmail.com', 'GM city', '89', '$2y$10$yeCi5IQoc8Erzo7b4yTBPuQS0jxjX4XecFxfOsMU1siUkuek8TopO', 2, 1, 1679991354),
(8, 'rifaldi uhuyy', 'farhan', 'farhanrifaldi24@gmail.com', 'Green Garden', '2147483647', '$2y$10$6pJGjjOADd1NZU638jwmFuQq6UXIXN1S/ZY6PmydB9fLm47FVSPwK', 2, 1, 1681792761),
(9, 'aldi', 'aldi', 'test@gmail.com', 'Jember', '2147483647', '$2y$10$aUcga4uI/8b2cUVrbVtX7.I9sj1VISKMUZJDrgWqNIAhvzcNS9fOW', 2, 1, 1684160508),
(10, 'Wahyu Hatim Firmansyah', 'wahyu', 'wahyu@gmail.com', 'Sukowono', '082139845281', '$2y$10$6FUblnIoR3f9jA5X2c0zg.nJCQEPfCYAf1or7WwERLtNxLpmWsQHa', 2, 1, 1685039774);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'farhanrifaldi24@gmail.com', '4a43c38017990d344a2220a1b953392f1d9f06a5', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `riwayat_konsultasi`
--
ALTER TABLE `riwayat_konsultasi`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `skor_gejala`
--
ALTER TABLE `skor_gejala`
  ADD PRIMARY KEY (`idskor_gejala`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `riwayat_konsultasi`
--
ALTER TABLE `riwayat_konsultasi`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `skor_gejala`
--
ALTER TABLE `skor_gejala`
  MODIFY `idskor_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
