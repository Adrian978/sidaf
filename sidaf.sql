-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Sep 2021 pada 01.55
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidaf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `apotek`
--

CREATE TABLE `apotek` (
  `id_apotek` int(11) NOT NULL,
  `nm_apotek` varchar(50) NOT NULL,
  `sia` varchar(100) NOT NULL,
  `nib` varchar(120) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `masa_apotek` date NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `apa` varchar(120) NOT NULL,
  `telp_apa` varchar(50) NOT NULL,
  `psa` varchar(120) NOT NULL,
  `telp_psa` varchar(20) NOT NULL,
  `sipa` varchar(120) NOT NULL,
  `masa_sipa` date NOT NULL,
  `apoteker_pendamping` varchar(120) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `apotek`
--

INSERT INTO `apotek` (`id_apotek`, `nm_apotek`, `sia`, `nib`, `tgl_daftar`, `masa_apotek`, `alamat`, `apa`, `telp_apa`, `psa`, `telp_psa`, `sipa`, `masa_sipa`, `apoteker_pendamping`, `keterangan`, `status`) VALUES
(9, '21', '445/026/SIA/11.04/IV/2017', 'a', '2021-05-21', '2021-05-21', 'JL. URIP SUMOHARJO WONOSARI, NGALIYAN', 'ZAMAL DAUD DANDHY,S.FARM,APT', '-', 'TRI ATIKAH DININA', '-', '1234', '2021-05-21', 'LENI NUR SETIAWATI, S.FARM,APT', '-', 'A'),
(10, '21', '445/026/SIA/11.04/IV/2017', 'a', '2021-05-21', '2021-05-21', 'JL. URIP SUMOHARJO WONOSARI, NGALIYAN', 'ZAMAL DAUD DANDHY,S.FARM,APT', '-', 'TRI ATIKAH DININA', '-', '1234', '2021-05-21', 'LENI NUR SETIAWATI, S.FARM,APT', '-', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepala_dinas`
--

CREATE TABLE `kepala_dinas` (
  `id_kd` int(11) NOT NULL,
  `nama_kd` varchar(256) NOT NULL,
  `nip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kepala_dinas`
--

INSERT INTO `kepala_dinas` (`id_kd`, `nama_kd`, `nip`) VALUES
(1, 'dr. Mochamad  Abdul  Hakam, Sp.PD', '19791114 200501 1 009');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ket_pirt`
--

CREATE TABLE `ket_pirt` (
  `id_ket_pirt` int(11) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ket_pirt`
--

INSERT INTO `ket_pirt` (`id_ket_pirt`, `keterangan`) VALUES
(1, 'Yang telah memenuhi persyaratan Produksi Pangan Industri Rumah Tangga (SPP-IRT) berdasarkan Peraturan Badan Pengawas Obat dan Makanan Nomor 22 Tahun 2018 tentang Pedoman Pemberian Sertifikat Produksi Pangan Industri Rumah Tangga , yang telah mengikuti Penyuluhan Keamanan Pangan yang diselenggarakan di');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ket_pkp`
--

CREATE TABLE `ket_pkp` (
  `id_ket_pkp` int(11) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ket_pkp`
--

INSERT INTO `ket_pkp` (`id_ket_pkp`, `keterangan`) VALUES
(1, 'yang telah mengikuti kegiatan Penyuluhan Keamanan Pangan dalam rangka Pemberian Sertifikat Produksi Pangan Industri Rumah Tangga (SPP-IRT) berdasarkan Peraturan Badan Pengawas Obat dan Makanan Republik Indonesia Nomor 22 Tahun 2018  tentang Pedoman Pemberian Sertifikat Produksi Pangan Industri Rumah Tangga yang diselenggarakan di :');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `toko_obat` varchar(50) NOT NULL,
  `si` varchar(100) NOT NULL,
  `nib` varchar(50) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `masa_toko` date NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `ap` varchar(120) NOT NULL,
  `telp_ap` varchar(50) NOT NULL,
  `ps` varchar(120) NOT NULL,
  `telp_ps` varchar(50) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `toko_obat`, `si`, `nib`, `tgl_daftar`, `masa_toko`, `alamat`, `ap`, `telp_ap`, `ps`, `telp_ps`, `keterangan`, `status`) VALUES
(6, '21', 'tes', 'tes', '2021-05-21', '2021-05-21', 'tes', 'tes', '081081081081', 'tes', '085085085085', 'tes', 'A'),
(7, 'tes', 'tes', 'tes', '2021-05-30', '2026-05-30', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'A'),
(8, '21', 'tes', 'tes', '2021-05-30', '2026-05-30', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemohon`
--

CREATE TABLE `pemohon` (
  `id_pemohon` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alm_pkp` varchar(256) NOT NULL,
  `alm_pr` varchar(256) NOT NULL,
  `berkas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemohon`
--

INSERT INTO `pemohon` (`id_pemohon`, `nik`, `nama`, `telp`, `jenis_kelamin`, `jabatan`, `alm_pkp`, `alm_pr`, `berkas`) VALUES
(1, '1', 'RONNY WIJAYA', '085640415051', 'L', 'Penanggung Jawab IRT', 'Dewi Sartika Barat VIII No 51 RT 03 RW 02 Kelurahan Sukorejo Kecamatan Gunung Pati Semarang', 'Dewi Sartika Barat VIII No 51 RT 03 RW 02 Kelurahan Sukorejo Kecamatan Gunung Pati Semarang', 'gambar/image001.png'),
(2, '2', 'RA NUR AMALINA', '081225925292', 'P', 'Penanggung Jawab IRT', 'Jl. Kp. Kulitan No. 198 RT 03 RW 07 Kelurahan Jagalan Kec. Semarang Tengah', 'Jl. Kp. Kulitan No. 198 RT 03 RW 07 Kelurahan Jagalan Kec. Semarang Tengah', 'gambar/image003.png'),
(3, '3', 'GIYANTO', '085647465162', 'L', '', 'Jalan Borobudur RT 10 RW 12 Kembang Arum Semarang Barat ', 'Jalan Borobudur RT 10 RW 12 Kembang Arum Semarang Barat ', 'gambar/default.png'),
(4, '4', 'MURNIATI', '08892416289 / 085641196699', 'P', '', 'Jl. Tanjung Sari 1 No.1 RT 03 RW 14 Pedurungan Tengah, Pedurungan  Semarang', 'Jl. Tanjung Sari 1 No.1 RT 03 RW 14 Pedurungan Tengah, Pedurungan  Semarang', 'gambar/default.png'),
(5, '5', 'VERA OLIVIA DANEA', '081325718758', 'P', '', 'Perumahan Permata Puri Jl. Watu Wila IV Blok D IX No. 25 RT 005 RW 10 Kel. Bringin Kec. Ngaliyan Semarang', 'Jalan Kalipepe III No. 17 RT 17 RW 01 Kel. Pudak Payung Kec. Banyumanik Semarang', 'gambar/default.png'),
(6, '6', 'PUJI HANJARWATI', '08122518362', 'P', '', 'Jl. Kruing Brt Dlm l No 98 RT 01 RW 03 Srondol Wetan Banyumanik Semarang ', 'Jl. Kruing Brt Dlm l No 98 RT 01 RW 03 Srondol Wetan Banyumanik Semarang ', 'gambar/default.png'),
(7, '7', 'AGUSTINE ANGELINA', '081228122633', 'P', '', 'Aryamuti Barat V / 26 RT 07 RW 03 Kel. Pedurungan Lor Kec. Pedurungan Semarang', 'Jl. Cilosari 567 RT 01 RW 02 Bugangan Semarang Timur ', 'gambar/default.png'),
(8, '8', 'SRI WIDIASTUTI', '0895360442731', 'P', '', 'Sendangguwo Arjuna RT 01 RW 10, Sendangguwo, Tembalang, Semarang', 'Sendangguwo Arjuna RT 01 RW 10, Sendangguwo, Tembalang, Semarang', 'gambar/default.png'),
(9, '9', 'LIESTIJANI', '081575082062', 'P', '', 'Jl Durian II No. 19 RT 05 RW 01 Kelurahan Lamper Kidul Kecamatan Semarang Selatan', 'Jl Durian II No. 19 RT 05 RW 01 Kelurahan Lamper Kidul Kecamatan Semarang Selatan', 'gambar/default.png'),
(10, '10', 'GILANG KRESNA MALIK', '087847518792', 'L', '', 'Villa Mulawarman Kav.16 RT 07 RW 02 Kelurahan Jabungan, Kecamatan Banyumanik Semarang', 'Villa Mulawarman Kav.16 RT 07 RW 02 Kelurahan Jabungan, Kecamatan Banyumanik Semarang', 'gambar/default.png'),
(16, '123123123123', 'Tes', '081081081081', 'L', '', 'yahoo', 'yahaha', 'gambar/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pirt`
--

CREATE TABLE `pirt` (
  `id_pirt` int(11) NOT NULL,
  `kode` varchar(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `produk` varchar(256) NOT NULL,
  `kemasan` varchar(128) NOT NULL,
  `merk` varchar(128) NOT NULL,
  `pirt` varchar(50) NOT NULL,
  `tgl_pirt` date NOT NULL,
  `masa_pirt` date NOT NULL,
  `irt` varchar(50) NOT NULL,
  `pre_test` varchar(256) NOT NULL,
  `post_test` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pirt`
--

INSERT INTO `pirt` (`id_pirt`, `kode`, `nik`, `produk`, `kemasan`, `merk`, `pirt`, `tgl_pirt`, `masa_pirt`, `irt`, `pre_test`, `post_test`) VALUES
(2, '2', '2', 'Kue Kering', 'Toples Plastik', 'PLAIRE', '2063374010002-26', '2021-01-26', '2026-01-26', ' -', '', ''),
(3, '3', '3', 'Telur Asin', 'Plastik Mika', 'A Y A ', '2033374010003-26', '2021-01-26', '2026-01-26', ' -', '', ''),
(4, '4', '4', 'Serundeng Kelapa', 'Plastik Pouch', 'SAEARTA ECO', '2053374010004-26', '2021-01-26', '2026-01-26', ' -', '', ''),
(5, '5', '5', 'Minuman Rempah', 'Botol Plastik, Plastik Pouch', 'DE JAVA REMPAH', '2133374010005-26', '2021-01-26', '2026-01-26', ' -', '', ''),
(6, '6', '6', 'Stik Keju', 'Plastik Pouch', 'WE\'S CHEESE STIK', '2063374010006-26', '2021-01-26', '2026-01-26', ' -', '', ''),
(7, '7', '7', 'Pindang Suwir', 'Plastik', 'CIMAT - CIMIT', '2023374010007-26', '2021-01-26', '2026-01-26', ' -', '', ''),
(8, '8', '8', 'Criping Pisang', 'Plastik', 'MUGI BERKAH', '2143374010008-26', '2021-01-26', '2026-01-26', ' -', '', ''),
(9, '9', '8', 'Criping Tela', 'Plastik', 'MUGI BERKAH', '2153374020008-26', '2021-01-26', '2026-01-26', ' -', '', ''),
(10, '10', '9', 'Kerupuk Gendar', 'Plastik', 'BL.OK', '2063374010009-26', '2021-01-26', '2026-01-26', 'GILANG PRATAMA FOOD', '', ''),
(11, '11', '9', 'Kacang Bawang', 'Toples Plastik', 'BL.OK', '2153374020009-26', '2021-01-26', '2026-01-26', ' -', '', ''),
(12, '12', '9', 'Telur Asin', 'Plastik Mika', 'BL.OK', '2033374030009-26', '2021-01-26', '2026-01-26', '  -', '', ''),
(13, '13', '10', 'Keripik Jagung', 'Aluminium Foil', 'CORN ELLIS', '5153374010010-26', '2021-01-26', '2026-01-26', ' -', '', ''),
(19, '1', '1', 'Serbuk Jahe', 'Aluminium Foil', 'BOS JAE NDA', '2133374010001-26', '2021-08-20', '2026-01-26', ' -', '-', ' -');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pkp`
--

CREATE TABLE `pkp` (
  `id_pkp` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `tgl_penyuluhan` date NOT NULL,
  `tgl_cetak` date NOT NULL,
  `sertifikat` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pkp`
--

INSERT INTO `pkp` (`id_pkp`, `nik`, `tgl_penyuluhan`, `tgl_cetak`, `sertifikat`, `status`) VALUES
(1, '1', '2021-01-19', '2021-01-22', '0001 / 3374 / 21', 'BARU'),
(2, '2', '2021-01-19', '2021-01-22', '0002 / 3374 / 21', 'BARU'),
(3, '3', '2021-01-19', '2021-01-22', '0003 / 3374 / 21', 'BARU'),
(4, '4', '2021-01-19', '2021-01-22', '0004 / 3374 / 21', 'BARU'),
(5, '5', '2021-01-19', '2021-01-22', '0005 / 3374 / 21', 'BARU'),
(6, '6', '2021-01-19', '2021-01-22', '0006 / 3374 / 21', 'BARU'),
(7, '7', '2021-01-19', '2021-01-22', '0007 / 3374 / 21', 'BARU'),
(8, '8', '2021-01-19', '2021-01-22', '0008 / 3374 / 21', 'BARU'),
(10, '9', '2021-01-19', '2021-01-22', '0009 / 3374 / 21', 'BARU'),
(13, '10', '2021-01-19', '2021-01-22', '0010 / 3374 / 21', 'BARU'),
(15, '123123123123', '2021-08-30', '2021-08-31', '123/4565/2000', 'BARU');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `level` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin'),
(2, 'adrian', '8c4205ec33d8f6caeaaaa0c10a14138c', 'Adriansyah Prasetya Nugraha', 'operator'),
(6, 'aga', 'fea30f2213e57de1a3c985f0cad303b7', 'Hafiz Aga Altamis', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `apotek`
--
ALTER TABLE `apotek`
  ADD PRIMARY KEY (`id_apotek`);

--
-- Indeks untuk tabel `kepala_dinas`
--
ALTER TABLE `kepala_dinas`
  ADD PRIMARY KEY (`id_kd`);

--
-- Indeks untuk tabel `ket_pirt`
--
ALTER TABLE `ket_pirt`
  ADD PRIMARY KEY (`id_ket_pirt`);

--
-- Indeks untuk tabel `ket_pkp`
--
ALTER TABLE `ket_pkp`
  ADD PRIMARY KEY (`id_ket_pkp`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `pemohon`
--
ALTER TABLE `pemohon`
  ADD PRIMARY KEY (`id_pemohon`);

--
-- Indeks untuk tabel `pirt`
--
ALTER TABLE `pirt`
  ADD PRIMARY KEY (`id_pirt`);

--
-- Indeks untuk tabel `pkp`
--
ALTER TABLE `pkp`
  ADD PRIMARY KEY (`id_pkp`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `apotek`
--
ALTER TABLE `apotek`
  MODIFY `id_apotek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kepala_dinas`
--
ALTER TABLE `kepala_dinas`
  MODIFY `id_kd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ket_pirt`
--
ALTER TABLE `ket_pirt`
  MODIFY `id_ket_pirt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ket_pkp`
--
ALTER TABLE `ket_pkp`
  MODIFY `id_ket_pkp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pemohon`
--
ALTER TABLE `pemohon`
  MODIFY `id_pemohon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pirt`
--
ALTER TABLE `pirt`
  MODIFY `id_pirt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pkp`
--
ALTER TABLE `pkp`
  MODIFY `id_pkp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
