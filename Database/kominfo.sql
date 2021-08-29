-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 27 Jun 2021 pada 15.53
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `kominfo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Yoga Pratama', 'yoga', '12345', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id_galeri` int(11) NOT NULL AUTO_INCREMENT,
  `No_Kamar` int(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_galeri`),
  KEY `No_Kamar` (`No_Kamar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `No_Kamar`, `gambar`, `kategori`) VALUES
(1, 1, 'IMG-20210319-WA0006.JPG', 'Ruang Utama'),
(2, 2, 'IMG-20210319-WA0007.JPG', 'Ruang Kedua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri2`
--

CREATE TABLE IF NOT EXISTS `galeri2` (
  `id_galeri2` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`id_galeri2`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `galeri2`
--

INSERT INTO `galeri2` (`id_galeri2`, `nama`, `gambar`) VALUES
(1, 'Ruangan Utama', 'IMG-20210319-WA0006.jpg'),
(2, 'Ruangan kedua', 'IMG-20210319-WA0007.jpg'),
(3, 'Gubernur Sumatera Selatan', 'IMG-20210319-WA0008.jpg'),
(4, 'Gubernur Sumatera Selatan', 'IMG-20210319-WA0011.jpg'),
(5, '', 'IMG-20210319-WA0012.jpg'),
(6, '', 'IMG-20210319-WA0010.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `jk` varchar(11) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `username`, `password`, `no_hp`, `jk`, `alamat`, `email`) VALUES
(1, 'afri yulianti', 'afri', 'afri', '082389132606', 'wanita', 'jkhhjghvghb', 'shellyasali@gmail.com'),
(2, 'Ridho Agustin', 'ridho', '12345', '08221702170', 'pria', 'Padang', 'shellyasali@gmail.com'),
(3, 'Yoga Pratama', 'yoga02', '12345', '083800802820', 'pria', 'indralaya', 'yogap591@gmail.com'),
(4, 'Reza', 'reza100', '12345', '087811876075', 'pria', 'palembang', 'minartitisya12@gmail.com'),
(6, 'Ahmad Jalaludin-Arumi', 'jalaludin', 'jalaludin', '098876543', 'pria', 'DIpalembang', 'adasdasd@gmail.com'),
(8, 'Yulia Aneka Putri', 'putri100', '12345', '087811876075', 'wanita', 'palembang', 'kisumsel@sumselprov.go.id'),
(9, 'Lionel Messi', 'Lm10', '12345', '087811876075', 'pria', 'Argentina', 'lm10@gmail.com'),
(10, 'yoga pratama', 'yoga500', '12345', '083800802820', 'pria', 'indralaya', 'yogap591@gmail.com'),
(11, 'Helda Yudiastuti', 'helda100', '12345', '087811876075', 'wanita', 'Palembang', 'heldayudis@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE IF NOT EXISTS `reservasi` (
  `No_Faktur` varchar(50) NOT NULL,
  `ruangan` char(15) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `waktu_mulai` time DEFAULT NULL,
  `waktu_selesai` time NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Telpon` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `asal_instansi` varchar(100) NOT NULL,
  `jumlah_anggota` int(5) NOT NULL,
  `keperluan` text NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`No_Faktur`),
  KEY `No_Kamar` (`ruangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`No_Faktur`, `ruangan`, `tanggal_pesan`, `waktu_mulai`, `waktu_selesai`, `Nama`, `Telpon`, `Email`, `asal_instansi`, `jumlah_anggota`, `keperluan`, `status`) VALUES
('60d3f69b514dd', '001', '2021-06-24', '12:00:00', '13:00:00', 'Yoga Pratama', '083800802820', 'yogap591@gmail.com', 'Universitas Bina darma', 2, 'rapat', ''),
('60d510f619b7a', '001', '2021-06-25', '09:00:00', '10:00:00', 'Yoga Pratama', '083800802820', 'yogap591@gmail.com', 'tebing gerinting', 1, 'perpisahan', ''),
('60d5113e9ee8a', '002', '2021-06-25', '10:00:00', '11:00:00', 'Yoga Pratama', '083800802820', 'yogap591@gmail.com', 'hh', 1, 'j', ''),
('60d5124445c7d', '001', '2021-06-25', '10:00:00', '11:00:00', 'Yoga Pratama', '083800802820', 'yogap591@gmail.com', 'jj', 1, 'siyap', ''),
('60d5143da93b9', '002', '2021-06-26', '10:00:00', '11:00:00', 'Yoga Pratama', '083800802820', 'yogap591@gmail.com', 'banung', 1, 'jjjj', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE IF NOT EXISTS `ruangan` (
  `No_ruangan` char(15) NOT NULL,
  `id_galeri` int(50) NOT NULL,
  `Jenis` varchar(50) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`No_ruangan`),
  KEY `id_galeri` (`id_galeri`),
  KEY `id_galeri_2` (`id_galeri`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`No_ruangan`, `id_galeri`, `Jenis`, `Type`, `deskripsi`) VALUES
('001', 1, 'Ruang utama', 'Single', 'Ruang untuk 1 orang'),
('002', 2, 'Ruang Kedua', 'Single', 'Ruang Kedua terdiri dari lebih dari 3 Orang atau lebih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE IF NOT EXISTS `saran` (
  `nama` varchar(35) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`nama`, `email`, `phone`, `pesan`) VALUES
('Yoga Pratama', 'yogap591@gmail.com', '083800802820', 'Ruangan nya cukup bagus dan nyaman '),
('Reza', 'yogap591@gmail.com', '083800802820', 'Ruang sangat keren'),
('Liyana Haryani', 'minartitisya12@gmail.com', '083800802820', 'Terima Kasih'),
('Akbar', 'adasdasd@gmail.com', '083800802820', 'Pelayanan sangat memuaskan'),
('Yulia Aneka Putri', 'adasdasd@gmail.com', '083800802820', 'terim kasih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id_slider` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(50) NOT NULL,
  `deskripsi1` varchar(50) NOT NULL,
  `deskripsi2` varchar(50) NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `gambar`, `deskripsi1`, `deskripsi2`) VALUES
(1, 'IMG-20210319-WA0006.jpg', 'Selamat Datang di Command Center', 'Ruang Meeting'),
(2, 'IMG-20210319-WA0011.JPG', 'Patuhi Protokol Kesehatan', ''),
(3, 'IMG-20210319-WA0012.JPG', 'Ruangan Yang Nyaman', 'tetap pakai masker');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id_staff` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` text NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_staff`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id_staff`, `gambar`, `nama`, `deskripsi`) VALUES
(1, 'Yulia Putrii.jpg', 'Yulia Aneka Putri, S.Pd', 'Tenaga Teknis Command Center'),
(2, 'fajar.jpeg', 'Muhammad Fajar, S.Kom', 'Tenaga Teknis Command Center'),
(3, 'darwinn.jpeg', 'Darwin Ricardo, S.H', 'Tenaga Teknis Command Center'),
(4, 'adit.jpeg', 'Aditia Yuda Pratama, S.H', 'Tenaga Teknis Command Center'),
(5, 'monikk.jpg', 'Monica Olivia Meyriska, AMd', 'Tenaga Teknis Command Center'),
(6, 'alinn.jpg', 'Disharlin Orvio Riensi, AMd', 'Tenaga Teknis Command Center');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
