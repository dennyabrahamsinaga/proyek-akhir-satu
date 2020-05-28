-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2020 pada 17.02
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_akhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `deskripsi`, `gambar`) VALUES
('GAL001', 'Spearfishing', 'Masyarakat lokal yang sedang melakukan spearfishing atau menembak ikan. Ikan yang didapat juga sangat banyak membuktikan kualitas ekosistem yang masih bagus. ', '5ece33f5cee8f.jpg'),
('GAL002', 'Berenang', 'Wisatawan yang sedang menikmati pantai dengan melakukan kegiatan berenang.', '5ece1771d01aa.jpg'),
('GAL003', 'Seluncur!', 'Anak-anak kecil yang menikmati wahana seluncuran di lokasi pantai.', '5ece17832f380.jpg'),
('GAL004', 'Ayunan', 'Dua anak kecil yang sedang bermain dengan menggunakan wahana ayunan di pantai.', '5ece1799a6df3.jpg'),
('GAL005', 'Santai bro!', 'Wisatawan yang sedang bersantai di pondok yang disediakan pemilik pantai untuk menghibur diri dengan pemandangan pantai yang indah dan membuat hati sejuk.', '5ece17adaae86.jpg'),
('GAL006', '#Family Time', 'Wisatawan yang membawa keluarganya untuk menikmati pantai dengan berteduh di sebuah kursi sambil memesan makanan dan souvenir pantai.', '5ece17c0d1558.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`) VALUES
('KAT001', 'Budaya'),
('KAT002', 'Ekonomi'),
('KAT003', 'Pendidikan'),
('KAT005', 'Film'),
('KAT006', 'Wisatawan'),
('KAT007', 'Wahana'),
('KAT008', 'Produk'),
('KAT009', 'Makanan'),
('KAT010', 'Event'),
('KAT011', 'Peta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tag`
--

CREATE TABLE `tag` (
  `id_tag` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tag`
--

INSERT INTO `tag` (`id_tag`, `nama`) VALUES
('TAG001', 'Aktivitas Wisatawan'),
('TAG002', 'Ekonomi'),
('TAG003', 'Budaya'),
('TAG004', 'Berenang'),
('TAG005', 'Spearfishing'),
('TAG006', 'Family Time'),
('TAG007', 'Swafoto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tanggal_registrasi` date NOT NULL,
  `status` enum('aktif','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `tanggal_registrasi`, `status`) VALUES
(1, 'denny22', '9f07f2b2c077c184aeb1b0527351712a3692efea', '2020-05-01', 'aktif'),
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2020-05-13', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
