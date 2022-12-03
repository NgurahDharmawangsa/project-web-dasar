-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2022 pada 02.33
-- Versi server: 10.4.17-MariaDB-log
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evaluasi_rps`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(25) NOT NULL,
  `nidn` varchar(25) NOT NULL,
  `nama_dosen` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `kode_prodi` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nidn`, `nama_dosen`, `alamat`, `no_telp`, `user_id`, `password`, `kode_prodi`) VALUES
('1927612826', '1112', 'Ahmad Suahmad', 'Jl Bali 12', '08723671212', 'ahmad', 'ahmad12', 2323),
('1982534098', '2323', 'Bayu Hendriono', 'Jl. Pamungkas 78', '087678908772', 'bayu', 'bayyu', 1121);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurikulum_prodi`
--

CREATE TABLE `kurikulum_prodi` (
  `kode` int(15) NOT NULL,
  `kurikulum` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kurikulum_prodi`
--

INSERT INTO `kurikulum_prodi` (`kode`, `kurikulum`) VALUES
(2390, '2001'),
(3131, '2002'),
(2238, '2007'),
(1111, '2010'),
(2239, '2019'),
(2242, '2020'),
(2234, '2021'),
(2243, '2022'),
(2241, '2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_id` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `user_id`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin2', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(25) NOT NULL,
  `nama_mahasiswa` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `tahun_diterima` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `kode_prodi` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mahasiswa`, `alamat`, `no_telp`, `tahun_diterima`, `user_id`, `password`, `kode_prodi`) VALUES
('2015354002', 'I Made Suep', 'Jimbaran', '081642768900', 2020, 'madesu', '12345', 2323);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `kode_mk` varchar(15) NOT NULL,
  `nama_mk` varchar(100) NOT NULL,
  `sks` int(11) NOT NULL,
  `sks_teori` int(11) NOT NULL,
  `sks_praktek` int(11) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `kurikulum` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`kode_mk`, `nama_mk`, `sks`, `sks_teori`, `sks_praktek`, `semester`, `kurikulum`) VALUES
('1234', 'Bahasa Inggris', 2, 1, 1, 'Ganjil 2021/2022', '2021'),
('2121', 'Basis Data', 4, 2, 2, 'Ganjil 2018/2019', '2021'),
('3421', 'Aljabar', 4, 2, 2, 'Genap 2021/2022', '2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_studi`
--

CREATE TABLE `program_studi` (
  `kode_prodi` smallint(6) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `program_studi`
--

INSERT INTO `program_studi` (`kode_prodi`, `nama_prodi`, `nip`) VALUES
(1121, 'Teknik Mesin', '1122334455'),
(2323, 'Teknik Otomasi', '2134325431');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rps`
--

CREATE TABLE `rps` (
  `noid_rps` int(11) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `kode_mk` varchar(15) NOT NULL,
  `nip` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rps`
--

INSERT INTO `rps` (`noid_rps`, `semester`, `kode_mk`, `nip`) VALUES
(1234, 'Ganjil 2021/2022', '1234', '1927612826'),
(2222, 'Ganjil 2018/2019', '2121', '1927612826');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rps_detail`
--

CREATE TABLE `rps_detail` (
  `noid_detail` int(11) NOT NULL,
  `noid_rps` int(11) NOT NULL,
  `minggu` int(11) NOT NULL,
  `materi` varchar(255) NOT NULL,
  `sesuai` tinyint(1) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `kode_prodi` (`kode_prodi`);

--
-- Indeks untuk tabel `kurikulum_prodi`
--
ALTER TABLE `kurikulum_prodi`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `kurikulum` (`kurikulum`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `kode_prodi` (`kode_prodi`);

--
-- Indeks untuk tabel `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`kode_mk`),
  ADD KEY `kurikulum` (`kurikulum`),
  ADD KEY `semester` (`semester`);

--
-- Indeks untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`kode_prodi`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `rps`
--
ALTER TABLE `rps`
  ADD PRIMARY KEY (`noid_rps`),
  ADD KEY `nip` (`nip`),
  ADD KEY `kode_mk` (`kode_mk`),
  ADD KEY `semester` (`semester`);

--
-- Indeks untuk tabel `rps_detail`
--
ALTER TABLE `rps_detail`
  ADD PRIMARY KEY (`noid_detail`),
  ADD KEY `noid_rps` (`noid_rps`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kurikulum_prodi`
--
ALTER TABLE `kurikulum_prodi`
  MODIFY `kode` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3132;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`kode_prodi`) REFERENCES `program_studi` (`kode_prodi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`kode_prodi`) REFERENCES `program_studi` (`kode_prodi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD CONSTRAINT `mata_kuliah_ibfk_1` FOREIGN KEY (`kurikulum`) REFERENCES `kurikulum_prodi` (`kurikulum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rps`
--
ALTER TABLE `rps`
  ADD CONSTRAINT `rps_ibfk_2` FOREIGN KEY (`kode_mk`) REFERENCES `mata_kuliah` (`kode_mk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rps_ibfk_3` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rps_ibfk_4` FOREIGN KEY (`semester`) REFERENCES `mata_kuliah` (`semester`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rps_detail`
--
ALTER TABLE `rps_detail`
  ADD CONSTRAINT `rps_detail_ibfk_1` FOREIGN KEY (`noid_rps`) REFERENCES `rps` (`noid_rps`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
