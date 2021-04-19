-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2021 pada 08.58
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `publikku`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `backup_table` ()  BEGIN
TRUNCATE TABLE backuppublikku.rating;
TRUNCATE TABLE backuppublikku.user;
TRUNCATE TABLE backuppublikku.fitur;
TRUNCATE TABLE backuppublikku.instansi;

INSERT INTO backuppublikku.user(SELECT id_user, username, password, alamat, email, KTP FROM user);

INSERT INTO backuppublikku.rating(SELECT id_rate, rating, feedback, id_user, id_ins FROM rating);

INSERT INTO backuppublikku.fitur(SELECT id_fitur, isi_lapor, lokasi, status, foto, id_ins FROM fitur);

INSERT INTO backuppublikku.instansi(SELECT * FROM instansi);

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dinas`
--

CREATE TABLE `dinas` (
  `id_dinas` int(11) NOT NULL,
  `dinas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dinas`
--

INSERT INTO `dinas` (`id_dinas`, `dinas`) VALUES
(1, 'Kasi Pemerintahan'),
(2, 'Kasi Pembangunan'),
(3, 'Kasi Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fitur`
--

CREATE TABLE `fitur` (
  `id_fitur` int(11) NOT NULL,
  `isi_lapor` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `id_dinas` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'default.png',
  `jenis` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `waktu_update` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rating` int(11) NOT NULL,
  `feedback` text NOT NULL,
  `balasan` varchar(128) NOT NULL,
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_ins` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fitur`
--

INSERT INTO `fitur` (`id_fitur`, `isi_lapor`, `lokasi`, `status`, `deskripsi`, `tanggal`, `id_dinas`, `foto`, `jenis`, `id_kategori`, `waktu_update`, `rating`, `feedback`, `balasan`, `id`, `id_user`, `id_ins`) VALUES
(77, '  <p>hghghhg</p>  ', 'Dk Krangkeng RT 01 RW 05, Depan Masjid AN-Nur', 'Selesai', 'Terimakasih atas laporannya. akan segera di tindaklanjuti', '2021-04-09', 3, 'lampu2.jpg', 'Aspirasi', 7, '2021-04-09 15:34:41', 0, '', '', 0, 30, 0),
(78, '   <p>Jalan rusak</p>   ', 'Dk Krangkeng RT 01 RW 05, Depan Masjid AN-Nur', 'Selesai', 'sudah di kerjakan', '2021-04-09', 1, 'lampu3.jpg', 'Aspirasi', 10, '2021-04-09 15:51:36', 3, 'ok', '', 0, 32, 0),
(79, ' <p>Lampu roboh</p> ', 'Dk Krangkeng RT 01 RW 05, Depan Masjid AN-Nur', 'Selesai', 'sudah di kerjakan', '2021-04-09', 1, 'lampu4.jpg', 'Aspirasi', 1, '2021-04-09 15:54:55', 4, 'mantap', '', 0, 33, 0),
(80, '<p>Jelaskan hal yang ingin dilaporkan</p>', 'Masjid', 'Diperiksa', 'Menunggu diperiksa', '2021-04-17', 0, 'default.png', 'Kebakaran', 0, '2021-04-18 16:12:51', 0, '', '', 0, 33, 0);

--
-- Trigger `fitur`
--
DELIMITER $$
CREATE TRIGGER `before_notifikasi_pelaporan_update` BEFORE UPDATE ON `fitur` FOR EACH ROW BEGIN
    INSERT INTO notifikasi
    set id_receiver = OLD.id_user,
    statuss = CONCAT('Update Pelaporan ',NEW.status),
    jenis = 'Pelaporan'; 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `instansi`
--

CREATE TABLE `instansi` (
  `id_ins` int(11) NOT NULL,
  `username_ins` varchar(25) NOT NULL,
  `email_ins` varchar(30) NOT NULL,
  `password_ins` varchar(16) NOT NULL,
  `dinas` varchar(30) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `id_dinas` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `instansi`
--

INSERT INTO `instansi` (`id_ins`, `username_ins`, `email_ins`, `password_ins`, `dinas`, `deskripsi`, `id_dinas`, `foto`) VALUES
(1, 'pemerintahan', 'daaeng@mail.com', '111', 'Kasi Pemerintahan', 'percobaan', 1, 'Capture7.PNG'),
(2, 'pembangunan', 'dinas@ins.pemerintah', '222', 'Kasi Pembangunan', '', 2, 'download_(2).jpg'),
(3, 'umum', 'pnedidikan@mail', '333', 'Kasi Umum', 'nice', 3, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Kebakaran'),
(2, 'Penyakit'),
(7, 'Longsor'),
(10, 'Aspirasi'),
(11, 'Jalan Rusak'),
(12, 'Banjir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategorisurat`
--

CREATE TABLE `kategorisurat` (
  `id_kategorisurat` int(5) NOT NULL,
  `kategorisurat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategorisurat`
--

INSERT INTO `kategorisurat` (`id_kategorisurat`, `kategorisurat`) VALUES
(3, 'Surat Usaha'),
(4, 'Surat Kematian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notif` int(11) NOT NULL,
  `id_receiver` int(11) NOT NULL,
  `statuss` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `notifikasi`
--

INSERT INTO `notifikasi` (`id_notif`, `id_receiver`, `statuss`, `tanggal`, `jenis`) VALUES
(3, 24, 'Update Pelaporan Diproses', '2021-03-02 15:00:18', 'Pelaporan'),
(4, 24, 'Update Pengajuan Diproses', '2021-03-02 15:40:48', 'Pengajuan'),
(5, 24, 'Update Pelaporan Selesai', '2021-03-02 15:45:38', 'Pelaporan'),
(6, 24, 'Update Pelaporan Diperiksa', '2021-03-02 21:34:12', 'Pelaporan'),
(7, 24, 'Update Pelaporan Diperiksa', '2021-03-02 21:35:17', 'Pelaporan'),
(8, 14, 'Update Pengajuan Selesai', '2021-03-09 04:16:18', 'Pengajuan'),
(9, 14, 'Update Pengajuan Selesai', '2021-03-09 04:16:43', 'Pengajuan'),
(10, 14, 'Update Pengajuan Selesai', '2021-03-09 04:17:07', 'Pengajuan'),
(11, 25, 'Update Pengajuan selesai', '2021-03-09 12:50:06', 'Pengajuan'),
(12, 25, 'Update Pengajuan Selesai', '2021-03-09 12:50:20', 'Pengajuan'),
(13, 0, 'Update Pelaporan Diproses', '2021-03-10 21:22:50', 'Pelaporan'),
(14, 24, 'Update Pelaporan Selesai', '2021-03-10 21:23:00', 'Pelaporan'),
(15, 24, 'Update Pelaporan Diproses', '2021-03-13 11:10:17', 'Pelaporan'),
(16, 26, 'Update Pelaporan Diperiksa', '2021-03-24 10:53:37', 'Pelaporan'),
(17, 26, 'Update Pelaporan Diperiksa', '2021-03-24 10:56:20', 'Pelaporan'),
(18, 26, 'Update Pelaporan Diperiksa', '2021-03-28 23:08:36', 'Pelaporan'),
(19, 25, 'Update Pelaporan Diperiksa', '2021-03-28 23:08:46', 'Pelaporan'),
(20, 25, 'Update Pelaporan Diperiksa', '2021-03-30 22:46:28', 'Pelaporan'),
(21, 25, 'Update Pelaporan Diperiksa', '2021-03-30 22:51:55', 'Pelaporan'),
(22, 25, 'Update Pelaporan Diperiksa', '2021-03-30 22:53:32', 'Pelaporan'),
(23, 25, 'Update Pelaporan Diperiksa', '2021-03-30 22:54:01', 'Pelaporan'),
(24, 24, 'Update Pelaporan Diperiksa', '2021-03-30 23:02:35', 'Pelaporan'),
(25, 24, 'Update Pelaporan Diperiksa', '2021-03-30 23:02:41', 'Pelaporan'),
(26, 26, 'Update Pelaporan Diperiksa', '2021-03-30 23:02:48', 'Pelaporan'),
(27, 0, 'Update Pelaporan Diproses', '2021-03-31 22:20:54', 'Pelaporan'),
(28, 24, 'Update Pelaporan Selesai', '2021-03-31 22:27:12', 'Pelaporan'),
(29, 25, 'Update Pengajuan Selesai', '2021-03-31 22:59:46', 'Pengajuan'),
(30, 25, 'Update Pengajuan Selesai', '2021-03-31 22:59:53', 'Pengajuan'),
(31, 25, 'Update Pengajuan Selesai', '2021-03-31 23:00:02', 'Pengajuan'),
(32, 25, 'Update Pengajuan Diperiksa', '2021-03-31 23:53:56', 'Pengajuan'),
(33, 25, 'Update Pengajuan Selesai', '2021-03-31 23:54:02', 'Pengajuan'),
(34, 25, 'Update Pengajuan Selesai', '2021-03-31 23:55:15', 'Pengajuan'),
(35, 25, 'Update Pengajuan Diperiksa', '2021-03-31 23:55:30', 'Pengajuan'),
(36, 25, 'Update Pengajuan Diperiksa', '2021-03-31 23:56:34', 'Pengajuan'),
(37, 0, 'Update Pelaporan Diproses', '2021-04-05 21:29:56', 'Pelaporan'),
(38, 28, 'Update Pelaporan Diperiksa', '2021-04-05 21:56:11', 'Pelaporan'),
(39, 25, 'Update Pengajuan Selesai', '2021-04-05 22:04:03', 'Pengajuan'),
(40, 25, 'Update Pengajuan Selesai', '2021-04-05 22:28:17', 'Pengajuan'),
(41, 25, 'Update Pengajuan Selesai', '2021-04-05 22:28:45', 'Pengajuan'),
(42, 26, 'Update Pengajuan Selesai', '2021-04-05 22:42:20', 'Pengajuan'),
(43, 26, 'Update Pelaporan Diperiksa', '2021-04-06 10:03:16', 'Pelaporan'),
(44, 26, 'Update Pengajuan Diperiksa', '2021-04-06 10:09:40', 'Pengajuan'),
(45, 26, 'Update Pelaporan Proses', '2021-04-06 10:35:53', 'Pelaporan'),
(46, 26, 'Update Pelaporan Ditolak', '2021-04-06 17:28:25', 'Pelaporan'),
(47, 26, 'Update Pengajuan Proses', '2021-04-06 17:28:57', 'Pengajuan'),
(48, 26, 'Update Pengajuan Selesai', '2021-04-06 17:30:45', 'Pengajuan'),
(49, 26, 'Update Pelaporan Diperiksa', '2021-04-06 20:43:48', 'Pelaporan'),
(50, 26, 'Update Pelaporan Diperiksa', '2021-04-06 20:44:47', 'Pelaporan'),
(51, 26, 'Update Pelaporan Ditolak', '2021-04-06 20:50:31', 'Pelaporan'),
(52, 26, 'Update Pengajuan Diperiksa', '2021-04-06 21:04:31', 'Pengajuan'),
(53, 26, 'Update Pengajuan Diperiksa', '2021-04-06 21:06:05', 'Pengajuan'),
(54, 26, 'Update Pengajuan Diperiksa', '2021-04-06 21:09:59', 'Pengajuan'),
(55, 26, 'Update Pengajuan Diperiksa', '2021-04-06 21:11:42', 'Pengajuan'),
(56, 26, 'Update Pengajuan Selesai', '2021-04-06 21:17:26', 'Pengajuan'),
(57, 26, 'Update Pengajuan Diperiksa', '2021-04-07 10:25:55', 'Pengajuan'),
(58, 26, 'Update Pengajuan Diperiksa', '2021-04-07 10:26:01', 'Pengajuan'),
(59, 26, 'Update Pengajuan Diperiksa', '2021-04-07 10:26:07', 'Pengajuan'),
(60, 26, 'Update Pengajuan Selesai', '2021-04-07 17:33:30', 'Pengajuan'),
(61, 26, 'Update Pengajuan Selesai', '2021-04-07 17:35:34', 'Pengajuan'),
(62, 26, 'Update Pengajuan Selesai', '2021-04-07 17:35:35', 'Pengajuan'),
(63, 26, 'Update Pengajuan Diperiksa', '2021-04-07 17:47:43', 'Pengajuan'),
(64, 26, 'Update Pengajuan Diperiksa', '2021-04-07 17:47:45', 'Pengajuan'),
(65, 26, 'Update Pengajuan Diperiksa', '2021-04-07 17:54:26', 'Pengajuan'),
(66, 26, 'Update Pengajuan Diterima', '2021-04-07 17:55:39', 'Pengajuan'),
(67, 26, 'Update Pengajuan Diterima', '2021-04-08 00:07:09', 'Pengajuan'),
(68, 26, 'Update Pengajuan Diterima', '2021-04-08 17:23:57', 'Pengajuan'),
(69, 26, 'Update Pengajuan Diterima', '2021-04-08 17:50:04', 'Pengajuan'),
(70, 26, 'Update Pengajuan Selesai', '2021-04-08 20:05:20', 'Pengajuan'),
(71, 26, 'Update Pengajuan Selesai', '2021-04-08 21:13:05', 'Pengajuan'),
(72, 26, 'Update Pengajuan Diperiksa', '2021-04-08 21:20:03', 'Pengajuan'),
(73, 26, 'Update Pengajuan Diperiksa', '2021-04-08 21:20:40', 'Pengajuan'),
(74, 26, 'Update Pengajuan Selesai', '2021-04-08 21:21:45', 'Pengajuan'),
(75, 26, 'Update Pengajuan Selesai', '2021-04-08 21:27:29', 'Pengajuan'),
(76, 26, 'Update Pengajuan Selesai', '2021-04-08 21:29:47', 'Pengajuan'),
(77, 26, 'Update Pengajuan Selesai', '2021-04-08 21:37:30', 'Pengajuan'),
(78, 26, 'Update Pengajuan Selesai', '2021-04-08 21:42:12', 'Pengajuan'),
(79, 26, 'Update Pengajuan Selesai', '2021-04-08 22:42:38', 'Pengajuan'),
(80, 27, 'Update Pengajuan Diperiksa', '2021-04-09 00:40:22', 'Pengajuan'),
(81, 27, 'Update Pengajuan Diperiksa', '2021-04-09 00:40:50', 'Pengajuan'),
(82, 27, 'Update Pengajuan Diperiksa', '2021-04-09 00:42:16', 'Pengajuan'),
(83, 27, 'Update Pengajuan Diperiksa', '2021-04-09 00:43:08', 'Pengajuan'),
(84, 27, 'Update Pengajuan Selesai', '2021-04-09 00:43:44', 'Pengajuan'),
(85, 27, 'Update Pengajuan Selesai', '2021-04-09 00:45:59', 'Pengajuan'),
(86, 27, 'Update Pengajuan Selesai', '2021-04-09 01:51:46', 'Pengajuan'),
(87, 27, 'Update Pengajuan Selesai', '2021-04-09 02:50:19', 'Pengajuan'),
(88, 27, 'Update Pengajuan Selesai', '2021-04-09 02:50:26', 'Pengajuan'),
(89, 27, 'Update Pengajuan Selesai', '2021-04-09 02:50:31', 'Pengajuan'),
(90, 27, 'Update Pengajuan Selesai', '2021-04-09 02:50:51', 'Pengajuan'),
(91, 27, 'Update Pengajuan Selesai', '2021-04-09 02:51:26', 'Pengajuan'),
(92, 27, 'Update Pengajuan Selesai', '2021-04-09 03:10:58', 'Pengajuan'),
(93, 27, 'Update Pengajuan Selesai', '2021-04-09 03:11:12', 'Pengajuan'),
(94, 31, 'Update Pengajuan Diperiksa', '2021-04-09 03:25:40', 'Pengajuan'),
(95, 31, 'Update Pengajuan Diperiksa', '2021-04-09 03:27:01', 'Pengajuan'),
(96, 31, 'Update Pengajuan Selesai', '2021-04-09 03:27:10', 'Pengajuan'),
(97, 26, 'Update Pengajuan Diperiksa', '2021-04-09 03:30:50', 'Pengajuan'),
(98, 31, 'Update Pengajuan Selesai', '2021-04-09 03:31:48', 'Pengajuan'),
(99, 26, 'Update Pengajuan Selesai', '2021-04-09 03:31:57', 'Pengajuan'),
(100, 26, 'Update Pengajuan Selesai', '2021-04-09 03:36:16', 'Pengajuan'),
(101, 26, 'Update Pengajuan Diperiksa', '2021-04-09 03:38:31', 'Pengajuan'),
(102, 26, 'Update Pengajuan Diperiksa', '2021-04-09 03:41:22', 'Pengajuan'),
(103, 26, 'Update Pengajuan Selesai', '2021-04-09 03:41:49', 'Pengajuan'),
(104, 26, 'Update Pengajuan Selesai', '2021-04-09 03:41:51', 'Pengajuan'),
(105, 26, 'Update Pelaporan Diterima', '2021-04-09 03:54:20', 'Pelaporan'),
(106, 26, 'Update Pelaporan Selesai', '2021-04-09 03:54:30', 'Pelaporan'),
(107, 26, 'Update Pelaporan Selesai', '2021-04-09 03:54:45', 'Pelaporan'),
(108, 26, 'Update Pelaporan Selesai', '2021-04-09 03:55:11', 'Pelaporan'),
(109, 26, 'Update Pelaporan Selesai', '2021-04-09 03:56:43', 'Pelaporan'),
(110, 26, 'Update Pelaporan Selesai', '2021-04-09 03:59:39', 'Pelaporan'),
(111, 30, 'Update Pengajuan Diperiksa', '2021-04-09 06:45:31', 'Pengajuan'),
(112, 30, 'Update Pelaporan Diperiksa', '2021-04-09 07:02:35', 'Pelaporan'),
(113, 30, 'Update Pelaporan Diterima', '2021-04-09 07:03:14', 'Pelaporan'),
(114, 30, 'Update Pelaporan Selesai', '2021-04-09 07:05:55', 'Pelaporan'),
(115, 32, 'Update Pengajuan Diperiksa', '2021-04-09 07:29:57', 'Pengajuan'),
(116, 32, 'Update Pengajuan Selesai', '2021-04-09 07:31:24', 'Pengajuan'),
(117, 32, 'Update Pelaporan Diperiksa', '2021-04-09 07:32:56', 'Pelaporan'),
(118, 32, 'Update Pelaporan Selesai', '2021-04-09 07:33:28', 'Pelaporan'),
(119, 32, 'Update Pelaporan Selesai', '2021-04-09 07:34:03', 'Pelaporan'),
(120, 32, 'Update Pelaporan Selesai', '2021-04-09 07:34:31', 'Pelaporan'),
(121, 32, 'Update Pengajuan Selesai', '2021-04-09 07:36:53', 'Pengajuan'),
(122, 32, 'Update Pengajuan Selesai', '2021-04-09 07:43:50', 'Pengajuan'),
(123, 33, 'Update Pelaporan Diperiksa', '2021-04-09 15:33:27', 'Pelaporan'),
(124, 33, 'Update Pengajuan Diperiksa', '2021-04-09 15:33:57', 'Pengajuan'),
(125, 30, 'Update Pelaporan Selesai', '2021-04-09 15:34:41', 'Pelaporan'),
(126, 32, 'Update Pelaporan Ditolak', '2021-04-09 15:38:39', 'Pelaporan'),
(127, 33, 'Update Pengajuan Diperiksa', '2021-04-09 15:43:58', 'Pengajuan'),
(128, 32, 'Update Pelaporan Selesai', '2021-04-09 15:51:36', 'Pelaporan'),
(129, 33, 'Update Pelaporan Diperiksa', '2021-04-09 15:52:53', 'Pelaporan'),
(130, 33, 'Update Pelaporan Selesai', '2021-04-09 15:53:16', 'Pelaporan'),
(131, 33, 'Update Pelaporan Selesai', '2021-04-09 15:53:46', 'Pelaporan'),
(132, 33, 'Update Pelaporan Selesai', '2021-04-09 15:54:55', 'Pelaporan'),
(133, 33, 'Update Pengajuan Selesai', '2021-04-09 16:00:05', 'Pengajuan'),
(134, 33, 'Update Pengajuan Selesai', '2021-04-09 16:01:11', 'Pengajuan'),
(135, 33, 'Update Pengajuan Selesai', '2021-04-12 19:06:17', 'Pengajuan'),
(136, 32, 'Update Pengajuan Selesai', '2021-04-12 19:07:04', 'Pengajuan'),
(137, 33, 'Update Pengajuan Diperiksa', '2021-04-17 13:51:56', 'Pengajuan'),
(138, 32, 'Update Pengajuan Selesai', '2021-04-18 15:54:45', 'Pengajuan'),
(139, 33, 'Update Pengajuan Selesai', '2021-04-18 15:54:48', 'Pengajuan'),
(140, 33, 'Update Pengajuan Diperiksa', '2021-04-18 15:54:50', 'Pengajuan'),
(141, 33, 'Update Pengajuan Diperiksa', '2021-04-18 16:03:35', 'Pengajuan'),
(142, 33, 'Update Pengajuan Diperiksa', '2021-04-18 16:04:52', 'Pengajuan'),
(143, 33, 'Update Pengajuan Diperiksa', '2021-04-18 16:05:45', 'Pengajuan'),
(144, 33, 'Update Pengajuan Diperiksa', '2021-04-18 16:07:27', 'Pengajuan'),
(145, 33, 'Update Pengajuan Diperiksa', '2021-04-18 16:08:38', 'Pengajuan'),
(146, 33, 'Update Pengajuan Diperiksa', '2021-04-18 16:11:49', 'Pengajuan'),
(147, 33, 'Update Pengajuan Diperiksa', '2021-04-18 16:12:10', 'Pengajuan'),
(148, 33, 'Update Pengajuan Diperiksa', '2021-04-18 16:12:36', 'Pengajuan'),
(149, 33, 'Update Pengajuan Diperiksa', '2021-04-18 16:12:40', 'Pengajuan'),
(150, 33, 'Update Pelaporan Diperiksa', '2021-04-18 16:12:51', 'Pelaporan'),
(151, 33, 'Update Pengajuan Selesai', '2021-04-19 12:35:49', 'Pengajuan'),
(152, 33, 'Update Pengajuan Diperiksa', '2021-04-19 12:47:05', 'Pengajuan'),
(153, 33, 'Update Pengajuan Selesai', '2021-04-19 12:55:14', 'Pengajuan'),
(154, 33, 'Update Pengajuan Selesai', '2021-04-19 12:55:27', 'Pengajuan'),
(155, 33, 'Update Pengajuan Selesai', '2021-04-19 13:55:39', 'Pengajuan'),
(156, 33, 'Update Pengajuan Selesai', '2021-04-19 13:57:31', 'Pengajuan'),
(157, 33, 'Update Pengajuan Selesai', '2021-04-19 13:57:37', 'Pengajuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id_rate` int(11) NOT NULL,
  `rating` int(6) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_ins` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`id_rate`, `rating`, `feedback`, `deskripsi`, `id_user`, `id_ins`) VALUES
(21, 3, 'harap di perbaiki', 'terimakasih', 0, 3),
(22, 4, 'mantap', 'baik terima kasih', 0, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(1, 'baskoro', 'baskorobay17@gmail.com', '1234'),
(4, 'Saputroo', 'baskoro@yahoo.com', '3333'),
(5, 'fikrih', 'fhaikal844@gmail.com', '123'),
(6, 'haikal', 'fhaikal844@gmail.com', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `nomor_surat` varchar(250) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` varchar(250) NOT NULL,
  `pekerjaan` varchar(250) NOT NULL,
  `jenis_kelamin` varchar(250) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `hp` text NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` text NOT NULL,
  `pesan` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `link` text NOT NULL,
  `pengambil` varchar(128) NOT NULL,
  `waktu_update` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `foto` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `deskripsi` varchar(128) NOT NULL,
  `id_dinas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id_surat`, `nomor_surat`, `nama`, `umur`, `pekerjaan`, `jenis_kelamin`, `nik`, `hp`, `alamat`, `tanggal`, `jenis`, `pesan`, `status`, `link`, `pengambil`, `waktu_update`, `foto`, `id_user`, `id_kategori`, `deskripsi`, `id_dinas`) VALUES
(27, '', 'fikrih', '', '', 'perempuan', '3305031106990009', '0895414112157', 'DK Krangkeng RT 02 RW 01', '2021-04-09', 'Surat Keterangan Usaha', '<p>warung makan</p>', 'Selesai', '606fa1a581f54.pdf', 'nobita', '2021-04-18 15:54:45', 'default.png', 32, 3, 'Silahkan Ambil ke balai desa dan bawa berkas persyaratan', 1),
(28, '', 'fikri haikal', '', '', 'perempuan', '3305031106990004', '0891', 'DK Krangkeng RT 02 RW 01', '2021-04-09', 'Surat Keterangan Usaha', '<p>Buat Meminta Perizinan Membuka Usaha Warung</p>', 'Selesai', '6070179554695.pdf', 'baskoro', '2021-04-19 12:35:49', 'default.png', 33, 3, 'Silahkan Ambil ke balai desa dan bawa berkas persyaratam', 1),
(29, '', 'fikri haikal', '', '', '', '3305031106990004', '0891', 'DK Krangkeng RT 02 RW 01', '2021-04-17', 'Surat Kematian', '<p>Silahkan isi keperluan atau keterangan lainnya disini</p>', 'Diperiksa', '', '', '2021-04-18 15:54:50', 'default.png', 33, 0, '', 0),
(30, '', 'fikri haikal', '', '', '', '3305031106990004', '0891', 'DK Krangkeng RT 02 RW 01', '2021-04-18', 'Surat Keterangan Usaha', '<p>Coba upload5</p>', 'Diperiksa', '', '', '2021-04-18 16:12:36', 'default.png', 33, 0, '', 0),
(31, '', 'fikri haikal', '', '', '', '3305031106990004', '0891', 'DK Krangkeng RT 02 RW 01', '2021-04-18', 'Surat Keterangan Belum Pernah Menikah', '<p>coba foto</p>', 'Diperiksa', '', '', '2021-04-18 16:12:40', 'default.png', 33, 0, '', 0),
(32, '1904210001', 'fikri haikal', '', '', '', '3305031106990004', '0891', 'DK Krangkeng RT 02 RW 01', '2021-04-19', 'Surat Izin Acara', '<p>Coba resi surat2</p>', 'Selesai', '', '', '2021-04-19 13:57:31', 'default.png', 33, 0, 'Silahkan Ambil ke balai desa dan bawa berkas persyaratan', 0),
(33, '1904210002', 'fikri haikal', '', '', '', '3305031106990004', '0891', 'DK Krangkeng RT 02 RW 01', '2021-04-19', 'Surat Keterangan Kelahiran', 'Resi dashboard', 'Selesai', '', '', '2021-04-19 13:57:37', 'default.png', 33, 0, '', 0);

--
-- Trigger `surat`
--
DELIMITER $$
CREATE TRIGGER `before_notifikasi_pengajuan_update` BEFORE UPDATE ON `surat` FOR EACH ROW BEGIN
    INSERT INTO notifikasi
    set id_receiver = OLD.id_user,
    statuss = CONCAT('Update Pengajuan ',NEW.status),
    jenis = 'Pengajuan'; 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(16) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hp` text NOT NULL,
  `KTP` text NOT NULL,
  `foto` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'block'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `alamat`, `hp`, `KTP`, `foto`, `status`) VALUES
(32, 'fikrih', 'fikrihaikal11', 'DK Krangkeng RT 02 RW 01', '0895414112157', '3305031106990009', 'avatar-1.jpg', 'aktif'),
(33, 'fikri haikal', '123456', 'DK Krangkeng RT 02 RW 01', '0891', '3305031106990004', 'avatar-1.jpg', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dinas`
--
ALTER TABLE `dinas`
  ADD PRIMARY KEY (`id_dinas`);

--
-- Indeks untuk tabel `fitur`
--
ALTER TABLE `fitur`
  ADD PRIMARY KEY (`id_fitur`),
  ADD KEY `id_ins` (`id_ins`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id` (`id`),
  ADD KEY `id_dinas` (`id_dinas`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id_ins`),
  ADD KEY `id_dinas` (`id_dinas`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kategorisurat`
--
ALTER TABLE `kategorisurat`
  ADD PRIMARY KEY (`id_kategorisurat`);

--
-- Indeks untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rate`),
  ADD KEY `id_user` (`id_user`,`id_ins`),
  ADD KEY `id_ins` (`id_ins`);

--
-- Indeks untuk tabel `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `id_dinas` (`id_dinas`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dinas`
--
ALTER TABLE `dinas`
  MODIFY `id_dinas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `fitur`
--
ALTER TABLE `fitur`
  MODIFY `id_fitur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT untuk tabel `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id_ins` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kategorisurat`
--
ALTER TABLE `kategorisurat`
  MODIFY `id_kategorisurat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`id_ins`) REFERENCES `instansi` (`id_ins`);

DELIMITER $$
--
-- Event
--
CREATE DEFINER=`root`@`localhost` EVENT `event_backup_table` ON SCHEDULE EVERY 1 MINUTE STARTS '2020-04-13 20:02:34' ON COMPLETION NOT PRESERVE ENABLE DO CALL backup_table()$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
