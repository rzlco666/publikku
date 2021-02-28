-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2021 pada 13.55
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
(0, '-'),
(1, 'Administrasi Surat Menyurat'),
(2, 'Pengajuan Pelaporan'),
(3, '-');

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
  `id_kategori` int(11) NOT NULL,
  `waktu_update` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_ins` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fitur`
--

INSERT INTO `fitur` (`id_fitur`, `isi_lapor`, `lokasi`, `status`, `deskripsi`, `tanggal`, `id_dinas`, `foto`, `id_kategori`, `waktu_update`, `id`, `id_user`, `id_ins`) VALUES
(40, '  <p>percobaan</p>  ', 'klaten', 'Proses', 'sedang mengerjakan pelaporan atau menindak laanjuti', '2020-05-01', 1, 'tawuran_sekolah1.jpg', 6, '2020-11-13 22:22:22', 0, 0, 0),
(43, '<p>percobaan 3</p>', 'klaten', 'Ditolak', 'langsung ke lokasi', '2020-05-05', 2, 'kbkarn1.jpg', 1, '2020-11-13 22:15:40', 0, 0, 0),
(44, 'Test 123', 'Desa Keden', 'Diperiksa', 'Langsung ke lokasi', '2021-02-27', 1, 'default.png', 1, '2021-02-27 20:17:01', 0, 24, 1);

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
  `id_dinas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `instansi`
--

INSERT INTO `instansi` (`id_ins`, `username_ins`, `email_ins`, `password_ins`, `dinas`, `deskripsi`, `id_dinas`) VALUES
(1, 'daaeng', 'daaeng@mail.com', '321', 'Owner', 'percobaan', 1),
(2, 'dinas1', 'dinas@ins.pemerintah', '123', 'Petugas 1', '', 2),
(3, 'pend', 'pnedidikan@mail', '456', 'Petugas 2', 'nice', 3);

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
(0, '-'),
(1, 'Kebakaran'),
(2, 'Penyakit'),
(3, 'Imunisasi'),
(4, 'Tipes'),
(6, 'sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notif` int(11) NOT NULL,
  `id_fitur` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_ins` int(11) NOT NULL,
  `notif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `nama` varchar(255) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` text NOT NULL,
  `pesan` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `waktu_update` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id_surat`, `nama`, `nik`, `email`, `alamat`, `tanggal`, `jenis`, `pesan`, `status`, `waktu_update`, `id_user`) VALUES
(1, 'Syahrizal Hanif', '124', 'syahrizalhanif@gmail.com', 'Desa Keden', '2021-02-28', 'Surat Keterangan Penghasilan', '<p>Mau buat usaha2</p>', 'Diperiksa', '2021-02-28 19:49:45', 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(16) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `KTP` int(16) NOT NULL,
  `foto` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `alamat`, `email`, `KTP`, `foto`, `status`) VALUES
(1, 'Daeng', '', '', '', 0, 'default.png', '2'),
(3, 'baskoro', '123', 'Bandung', 'bas@mail.com', 2222, 'default.png', '1'),
(4, 'Ujang', '123', 'Jawa', 'ujang@mail.com', 66, 'default.png', ''),
(8, 'coba', '123', '', 'coba@gmail.cpm', 0, 'default.png', ''),
(9, 'fikri', '1234', 'sitiadi', 'fhaikal844@gmail.com', 111, 'default.png', ''),
(10, 'siska', 'siska1', 'puring', 'siska@gmail.com', 1212, 'default.png', ''),
(13, 'haikal', 'fikrihaikal11', 'sitiadi', 'fhaikal@gmail.com', 1234522, 'default.png', ''),
(14, 'bayu', 'bayu11', 'klaten', 'bayu88@gmail.com', 4444, 'default.png', ''),
(24, 'Syahrizal Hanif', '123456', 'Desa Keden', 'syahrizalhanif@gmail.com', 124, '', '');

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
  ADD KEY `id` (`id`);

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
-- Indeks untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rate`),
  ADD KEY `id_user` (`id_user`,`id_ins`);

--
-- Indeks untuk tabel `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

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
  MODIFY `id_fitur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id_ins` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `instansi`
--
ALTER TABLE `instansi`
  ADD CONSTRAINT `instansi_ibfk_1` FOREIGN KEY (`id_dinas`) REFERENCES `dinas` (`id_dinas`);

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
