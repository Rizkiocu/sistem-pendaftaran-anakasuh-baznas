-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 05:30 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baznas`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_ab` int(3) NOT NULL,
  `nisn` varchar(13) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_ab`, `nisn`, `tanggal`, `keterangan`) VALUES
(1, '11631102132', '2019-05-02', 'Hadir'),
(2, '11651102112', '2019-05-02', 'Hadir'),
(3, '11651102122', '2019-05-02', 'Alfa'),
(4, '11651102444', '2019-05-02', 'Hadir'),
(5, '11651103212', '2019-05-02', 'Sakit'),
(6, '11651103422', '2019-05-02', 'Izin'),
(7, '11651103233', '2019-05-03', 'Hadir'),
(8, '11651103411', '2019-05-03', 'Hadir'),
(9, '11651103544', '2019-05-03', 'Hadir'),
(11, '11611311433', '2019-05-04', 'Hadir'),
(12, '11652211099', '2019-05-04', 'Hadir'),
(13, '11671123221', '2019-05-04', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id_bs` int(5) NOT NULL,
  `nisn` varchar(13) NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `nama_bank` varchar(30) NOT NULL,
  `nominal` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id_bs`, `nisn`, `no_rek`, `nama_bank`, `nominal`) VALUES
(1, '11611311433', '2147483647', 'Bri Syariah', 3),
(2, '11631102132', '2147483641', 'Bri Syariah', 1),
(3, '11651102112', '2147483642', 'Bri Syariah', 1),
(4, '11651102122', '1147483647', 'Bri Syariah', 1),
(5, '11651102444', '1327483647', 'Bri Syariah', 1),
(6, '11651103212', '7747483647', 'Bri Syariah', 1),
(7, '11651103233', '2123451247', 'Bri Syariah', 2),
(8, '11651103411', '2147483453', 'Bri Syariah', 2),
(9, '11651103422', '2147483654', 'Bri Syariah', 1),
(10, '11651103544', '2147484321', 'Bri Syariah', 2);

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `no_kk` varchar(13) NOT NULL,
  `nisn` varchar(13) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `kerja_ayah` varchar(30) NOT NULL,
  `kerja_ibu` varchar(30) NOT NULL,
  `anak` int(3) NOT NULL,
  `jumlah_saudara` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`no_kk`, `nisn`, `nama_ayah`, `nama_ibu`, `kerja_ayah`, `kerja_ibu`, `anak`, `jumlah_saudara`) VALUES
('115511442211', '11651102112', 'Narlis', 'Fika', 'Wiraswasta', 'Ibu rumah tangga', 2, 4),
('121212567813', '11651102444', 'Imza', 'Elvianora', 'Wiraswasta', 'Ibu rumah tangga', 2, 3),
('121321346521', '11671123221', 'Rosma', 'Inu', 'Wiraswasta', 'Ibu rumah tangga', 3, 6),
('123212313131', '11651102122', 'Oloan Rambe', 'Sarni', 'Wiraswasta', 'Ibu rumah tangga', 3, 5),
('146676878712', '11651103233', 'Ardi', 'Asmi', 'Wiraswasta', 'Ibu rumah tangga', 1, 3),
('151625157122', '11651103544', 'Saprizal', 'Asma', 'Wiraswasta', 'Ibu rumah tangga', 4, 6),
('221122112211', '11631102132', 'Trismedian', 'Ani', 'Wiraswasta', 'Ibu rumah tangga', 1, 5),
('255542112211', '11611311433', 'Nazari', 'Yusneti', 'Wiraswasta', 'Ibu rumah tangga', 3, 4),
('345676654567', '11651103411', 'Hasmi Hz', 'Rodiah', 'Wiraswasta', 'Ibu rumah tangga', 2, 4),
('556655332211', '11651103422', 'Nazari', 'Ely Yusneti', 'Wiraswasta', 'Ibu rumah tangga', 4, 4),
('615267177111', '11651103212', 'Rizki', 'Nuraini', 'Wiraswasta', 'Ibu rumah tangga', 3, 3),
('654312342167', '11652211099', 'Ramadhona', 'Rezi', 'Wiraswasta', 'Ibu rumah tangga', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `lampiran`
--

CREATE TABLE `lampiran` (
  `id_lamp` int(5) NOT NULL,
  `nisn` varchar(13) NOT NULL,
  `l_foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampiran`
--

INSERT INTO `lampiran` (`id_lamp`, `nisn`, `l_foto`) VALUES
(31, '11651103422', 'IMG_6227aaaaaa12.jpg'),
(32, '11651103411', 'IMG_6227aaaaaa13.jpg'),
(33, '11651103233', 'IMG_6227aaaaaa14.jpg'),
(34, '11651103544', 'IMG_6227aaaaaa15.jpg'),
(35, '11651102122', 'IMG_6227aaaaaa16.jpg'),
(36, '11651103212', 'IMG_6227aaaaaa17.jpg'),
(37, '11631102132', 'IMG_6227aaaaaa1.jpg'),
(38, '11651102444', 'IMG_6227aaaaaa11.jpg'),
(39, '11651102112', 'IMG_6227aaaaaa18.jpg'),
(40, '11611311433', 'IMG_6227aaaaaa19.jpg'),
(41, '11652211099', 'IMG_6227aaaaaa110.jpg'),
(42, '11671123221', 'IMG_6227aaaaaa111.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `npsn` int(15) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat_sekolah` varchar(100) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `jenjang` int(1) NOT NULL,
  `posisi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`npsn`, `nama_sekolah`, `alamat_sekolah`, `kecamatan`, `jenjang`, `posisi`) VALUES
(10403896, 'SMP NEGERI 4 PEKANBARU', 'Jl. Dr. Sutomo No. 110', 'Limah Puluh', 2, 0),
(10403897, 'SMP NEGERI 5 PEKANBARU', 'Jl.Sultan Syarif Qasim NO.155 Pekanbaru', 'Limah Puluh', 2, 0),
(10403899, 'SMP NEGERI 7 PEKANBARU', 'Jl. Lokomotif No.28', 'Limah Puluh', 2, 0),
(10403902, 'SMK NEGERI 1 PEKANBARU', 'Jl. Semeru No.16', 'Limah Puluh', 3, 0),
(10403903, 'SMK NEGERI 3 PEKANBARU', 'JL. DR. SUTOMO NO. 110', 'Sail', 3, 0),
(10403904, 'SMP NEGERI 3 PEKANBARU', 'Jl. Dahlia No. 102', 'Sukajadi', 2, 0),
(10403905, 'SMP NEGERI 29 PEKANBARU', 'Jl. Tegal Sari', 'Rumbai', 2, 0),
(10403907, 'SMP NEGERI 19 Pekanbaru', 'Jl. Yos Sudarso Km. 18', 'Rumbai', 2, 0),
(10403908, 'SMP NEGERI 2 PEKANBARU', 'Jl. Prof. M. Yamin No. 65', 'Senapelan', 2, 0),
(10403909, 'SMP NEGERI 20 PEKANBARU', 'Jl. Abadi', 'Tampan', 2, 0),
(10403911, 'SMP NEGERI 22 PEKANBARU', 'Jl. Sidodadi No.32', 'Bukit Raya', 2, 0),
(10403912, 'SMP NEGERI 23 PEKANBARU', 'Jl. Garuda Sakti Km. 3', 'Tampan', 2, 0),
(10403913, 'SMP NEGERI 24 PEKANBARU', 'Jl. Sri Palas Rumbai', 'Rumbai', 2, 0),
(10403918, 'SMKS KANSAI PEKANBARU', 'JL. DAMAI UJUNG NO.120', 'Tampan', 3, 1),
(10403919, 'SMKS LABOR BINAAN FKIP UNRI PEKANBARU', 'JL. THAMRIN NO.97 KEC. SAIL', 'Sail', 3, 1),
(10403923, 'SMKS MUHAMMADIYAH 1 PEKANBARU', 'SENAPELAN NO.10 A PEKANBARU	', 'Senapelan', 3, 1),
(10403924, 'SMKS MUHAMMADIYAH 2 PEKANBARU', 'K.H. AHMAD DAHLAN NO.90', 'Sukajadi', 3, 1),
(10403925, 'SMKS MULTI MEKANIK MASMUR PEKANBARU', 'JL. KH. AHMAD DAHLAN NO.96', 'Sukajadi', 3, 1),
(10403926, 'SMK NEGERI 2 PEKANBARU', 'JL. PATIMURA NO. 14 PEKANBARU', 'Sail', 3, 0),
(10403930, 'SMKS DAREL HIKMAH PEKANBARU', 'MANYAR SAKTI KM.12 SIM. BARU', 'Tampan', 3, 1),
(10403937, 'SMKS EKATAMA PEKANBARU', 'JL. SURABAYA NO.56', 'Bukit Raya', 3, 1),
(10403938, 'SMK NEGERI 4 PEKANBARU', 'PURWODADI PANAM', 'Tampan', 3, 1),
(10403939, 'SMP NEGERI 18 PEKANBARU', 'Jl. Lily I No. 95 Pekanbaru', 'Senapelan', 2, 0),
(10403943, 'SD NEGERI 173 PEKANBARU', 'Jl. Hang Tuah Ujung', 'Tenayan Raya', 1, 0),
(10403944, 'SD NEGERI 142 PEKANBARU', 'Jl. Budi Bakti Simpang Mentagor', 'Tenayan Raya', 1, 0),
(10403945, 'SD NEGERI 171 PEKANBARU', 'Jl. Sepakat Komp.Perum Mutiara Kulim Permai', 'Tenayan Raya', 1, 0),
(10403946, 'SD NEGERI 180 PEKANBARU', 'Jl. Rawa Wiri', 'Bukit Raya', 1, 0),
(10403947, 'SD NEGERI 177 PEKANBARU', 'Jl. Ikhwan Simpang Tiga', 'Bukit Raya', 1, 0),
(10403948, 'SD NEGERI 178 PEKANBARU', 'Jl. Temu Rasa', 'Tenayan Raya', 1, 0),
(10403949, 'SMP ADVENT', 'Jl. Melati No. 49', 'Sukajadi', 2, 1),
(10403951, 'SD NEGERI 155 PEKANBARU', 'Jl. Amilin / Jl. Semangka', 'Sukajadi', 1, 0),
(10403952, 'SD NEGERI 176 PEKANBARU', 'Jl. Cemara Kipas IV', 'Tampan', 1, 0),
(10403953, 'SD NEGERI 84 PEKANBARU', 'Jl. Hangtuah Ujung No. 23', 'Tenayan Raya', 1, 0),
(10403954, 'SD NEGERI 129 PEKANBARU', 'Jl. Banda Aceh No. 39', 'Bukit Raya', 1, 0),
(10403955, 'SD NEGERI 141 PEKANBARU', 'Jl. Utama, Tengku Bey.', 'Bukit Raya', 1, 0),
(10403956, 'SD NEGERI 47 PEKANBARU', 'Jl. Sialang Bungkuk No. 22', 'Tenayan Raya', 1, 0),
(10403957, 'SD NEGERI 179 PEKANBARU', 'Jl. Damai Palas', 'Rumbai', 1, 0),
(10403958, 'SD NEGERI 45 PEKANBARU', 'Jl. Badak No. 54', 'Tenayan Raya', 1, 0),
(10403960, 'SD NEGERI 146 PEKANBARU', 'Jl. Lintas Timur', 'Tenayan Raya', 1, 0),
(10403961, 'SMP AN NUR', 'Jl. Sisinga Mangaraja Kompleks. Mesjid Agung An Nur', 'Pekanbaru Kota', 2, 1),
(10403963, 'SMP WIDYA GRAHA', 'Jl. Sakuntala Gg. Nangka No.10', 'Bukit Raya', 2, 1),
(10403964, 'SMP NEGERI 1 PEKANBARU', 'Jl. Sultan Syarif Kasim 157', 'Limah Puluh', 2, 0),
(10403965, 'SMP N 10 PEKANBARU', 'Jl. Dr. Sutomo 108', 'Limah Puluh', 2, 0),
(10403967, 'SMP NEGERI 12 PEKANBARU', 'Jl. Guru H. Sulaiman No. 37', 'Senapelan', 2, 0),
(10403968, 'SMP NEGERI 13 PEKANBARU', 'Jl. Ronggowarsito I No. 15 Pekanbaru', 'Sail', 2, 0),
(10403969, 'SMP NEGERI 14 PEKANBARU', 'Jl. Hangtuah No. 43', 'Limah Puluh', 2, 0),
(10403971, 'SMP NEGERI 16 PEKANBARU', 'Jl. Cempaka', 'Sukajadi', 2, 0),
(10403972, 'SMP TUNAS KARYA', 'Jl. Ketitiran No.24', 'Sukajadi', 2, 1),
(10403979, 'SMP MASMUR', 'Jl. Kh. Ahmad Dahlan No. 96', 'Sukajadi', 2, 1),
(10403980, 'SMP MUHAMMADIYAH 1 PEKANBARU', 'JL.K.H.AHMAD DAHLAN NO. 92', 'Sukajadi', 2, 1),
(10403981, 'SMP NURUL FALAH', 'Jl. Panglima Undan No 49', 'Senapelan', 2, 1),
(10403982, 'SMP PGRI', 'Jl. Brigjen Katamso No. 42', 'Bukit Raya', 2, 1),
(10403983, 'SMP NEGERI 17 PEKANBARU', 'Jl. Pembangunan', 'Sukajadi', 2, 0),
(10403984, 'SMK NEGERI 5 PEKANBARU', 'YOS SUDARSO RUMBAI PEKANBARU', 'Rumbai', 3, 0),
(10403985, 'SMA NEGERI 1 PEKANBARU', 'JL. SULTAN SYARIF QASIM NO .159', 'Limah Puluh', 3, 0),
(10403987, 'SMAS HANDAYANI', 'JL.KAPTEN FADILAH NO. 1', 'Sail', 3, 1),
(10403989, 'SMAS KALAM KUDUS', 'JL.LOKOMOTIF NO. 118', 'Limah Puluh', 3, 1),
(10403993, 'SMAS MUHAMMADIYAH', 'JL.KH.AHMAD DAHLAN NO. 90', 'Sukajadi', 3, 1),
(10403994, 'SMAS NURUL FALAH', 'JL. Mesjid Raya No. 8', 'Senapelan', 3, 1),
(10403998, 'SMAS AL HUDA', 'JL.HR.SUBRANTAS KM. 9', 'Tampan', 3, 1),
(10404003, 'SMAS AN NUR', 'Jl. Sisinga Mangaraja', 'Pekanbaru Kota', 3, 1),
(10404006, 'SMAS BABUSSALAM', 'JL.H.R.Soebrantas No. 62', 'Tampan', 3, 1),
(10404008, 'SMAS PGRI', 'JL.BRIGJEND KATAMSO NO. 44', 'Bukit Raya', 3, 1),
(10404011, 'SMA NEGERI 12 PEKANBARU', 'JL.GARUDA SAKTI KM.3', 'Tampan', 3, 0),
(10404014, 'SMA NEGERI 3 PEKANBARU', 'JL.YOS SUDARSO 100 A', 'Rumbai', 3, 0),
(10404018, 'SMA NEGERI 7 PEKANBARU', 'JL. KAPUR NO. 3', 'Senapelan', 3, 0),
(10404019, 'SMA NEGERI 8 PEKANBARU', 'JL.ABDUL MUIS NO. 14', 'Sail', 3, 0),
(10404021, 'SMAS YLPI PEKANBARU', 'JL.KAHARUDDIN NASUTION KM 11', 'Bukit Raya', 3, 1),
(10404022, 'SMAS SANTA MARIA', 'JL.RONGGO WARSITO', 'Sail', 3, 1),
(10404024, 'SMAS SERI RAMA', 'JL.TERATAI NO. 29', 'Senapelan', 3, 1),
(10404026, 'SMAS SETIA DHARMA', 'JL.PROF. M. YAMIN SH. NO. 67', 'Senapelan', 3, 1),
(10404027, 'SMAS TARUNA', 'JL.MELUR GG.LYLI NO. 40', 'Sukajadi', 3, 1),
(10404030, 'SMAS WIDYA GRAHA', 'JL. BANDA ACEH GG. NANGKA', 'Bukit Raya', 3, 1),
(10404031, 'SMA NEGERI 9 PEKANBARU', 'JL.SEMERU NO. 12', 'Limah Puluh', 3, 0),
(10404032, 'SMP YLPI PERHENTIAN MARPOYAN', 'Jl. Kaharuddin Nasution Km 8.5', 'Bukit Raya', 2, 1),
(10404039, 'SMP AL ISHLAH', 'Jl. Jend. Sudirman No.01 Pekanbaru', 'Limah Puluh', 2, 1),
(10404041, 'SMP BABUSSALAM', 'Jl. HR. Soebrantas No. 62', 'Tampan', 2, 1),
(10404042, 'SMP BEERSEBA PEKANBARU', 'Jl. KH. Ahmad Dahlan No.80 Sukajadi', 'Sukajadi', 2, 1),
(10404043, 'SMKS TIGAMA PEKANBARU', 'Jalan Taman Karya xx', 'Tampan', 3, 1),
(10404045, 'SMKS NURUL FALAH PEKANBARU', 'MESJID RAYA NO. 8', 'Senapelan', 3, 1),
(10404046, 'SMKS YAPPI PEKANBARU', 'KAMBOJA NO.113', 'Sukajadi', 3, 1),
(10404048, 'SMKS PGRI PEKANBARU', 'JL.BRIGJEN KATAMSO NO.46 PEKANBARU', 'Bukit Raya', 3, 1),
(10404052, 'SMKS TARUNA PEKANBARU', 'RAJAWALI SAKTI , PANAM NO.90', 'Tampan', 3, 1),
(10404053, 'SMKS TARUNA SATRIA PEKANBARU', 'Jl. DELIMA NO.5 PANAM', 'Tampan', 3, 1),
(10404056, 'SMP SANTA MARIA', 'Jl. S. Parman No. 80', 'Sail', 2, 1),
(10404057, 'SMP SETIA DHARMA', 'Jl. Prof. M. Yamin. SH No.67', 'Senapelan', 2, 1),
(10404069, 'SMP ISLAM YLPI PEKANBARU', 'Jl. Prof M Yamin Sh No. 20', 'Senapelan', 2, 1),
(10404070, 'SMP KALAM KUDUS', 'Jl. Lokomotif No 118 Pekanbaru', 'Limah Puluh', 2, 1),
(10404071, 'SMP KARTIKA I-5', 'Jl. dr. Sutomo No.65', 'Sail', 2, 1),
(10404072, 'SMP Kemala Bhayangkari', 'Jl. Kartini', 'Pekanbaru Kota', 2, 1),
(10404077, 'SD NEGERI 140 PEKANBARU', 'JL. TUAH BERSAMA', 'Tenayan Raya', 1, 0),
(10404079, 'SD YKWI 003', 'Jl. Hasyim Asyari No 14', 'Pekanbaru Kota', 1, 1),
(10404081, 'SD NEGERI 36 PEKANBARU', 'Jl. Hang Tuah No. 59', 'Limah Puluh', 1, 0),
(10404082, 'SD NEGERI 1 PEKANBARU', 'Jl. Ahmad Yani No. 04 Pekanbaru', 'Senapelan', 1, 0),
(10404084, 'SDN 56 Pekanbaru', 'Jl. Tengku Cik Ditiro', 'Pekanbaru Kota', 1, 0),
(10404087, 'SD NEGERI 11 PEKANBARU', 'Jl. Rokan No. 72', 'Limah Puluh', 1, 0),
(10404089, 'SD Muhammadiyah 1', 'Jl. H. Agus Salim N0. 158', 'Pekanbaru Kota', 1, 1),
(10404092, 'SD AL-IRSYAD', 'Jl. Kh. Agus Salim Gg. Irsyad', 'Pekanbaru Kota', 1, 1),
(10404094, 'SD ANNUR', 'Jl. Hangtuah Komplek Mesjid Agung An Nur', 'Pekanbaru Kota', 1, 1),
(10404095, 'SD ISLAM PLUS YLPI', 'Jl. Kaharudin Nasution Km 11', 'Bukit Raya', 1, 1),
(10404097, 'SD KALAM KUDUS', 'Jl. Lokomotif No.118', 'Limah Puluh', 1, 1),
(10404098, 'SD KARTIKA I-9 SAIL', 'Jl. Dr. Sutomo No.63', 'Sail', 1, 1),
(10404099, 'SDN 71 Pekanbaru', 'Jl. Kartini Gg Kartini II No. 13', 'Pekanbaru Kota', 1, 0),
(10404100, 'SD NEGERI 38 PEKANBARU', 'Jl. Abdul Muis', 'Sail', 1, 0),
(10404102, 'SD NEGERI 15 PEKANBARU', 'Jl. Cut Nyak Dien', 'Sukajadi', 1, 0),
(10404104, 'SD NEGERI 76 PEKANBARU', 'Jl. Banda Aceh. No. 9', 'Bukit Raya', 1, 0),
(10404107, 'SD NEGERI 10 PEKANBARU', 'Jl. Ahmad Yani', 'Senapelan', 1, 0),
(10404110, 'SD NEGERI 4 PEKANBARU', 'Jl. Sultan Syarif Qasim', 'Limah Puluh', 1, 0),
(10404112, 'SD NEGERI 14 PEKANBARU', 'Jl. Cempaka', 'Sukajadi', 1, 0),
(10404113, 'SD NEGERI 2 PEKANBARU', 'Jl. Kesehatan. No. 37', 'Senapelan', 1, 0),
(10404116, 'SD NEGERI 39 PEKANBARU', 'Jl. Mulyorejo No. 4', 'Sail', 1, 0),
(10404117, 'SD NEGERI 33 PEKANBARU', 'Jl. Samanhudi No. 06', 'Senapelan', 1, 0),
(10404118, 'SD NEGERI 13 PEKANBARU', 'Jl. Cempaka No.01', 'Sukajadi', 1, 0),
(10404121, 'SD NEGERI 30 PEKANBARU', 'Jl. Sultan Syarif Qasim', 'Limah Puluh', 1, 0),
(10404122, 'SD NEGERI 18 PEKANBARU', 'Jl. Kulim. No.73', 'Senapelan', 1, 0),
(10404171, 'SD NEGERI 73 PEKANBARU', 'Jl. Sidomulyo', 'Senapelan', 3, 0),
(10404172, 'SD NEGERI 43 PEKANBARU', 'Jl. Banda Aceh No. 37', 'Bukit Raya', 1, 0),
(10404173, 'SD NEGERI 156 PEKANBARU', 'Jl. Teratai', 'Senapelan', 1, 0),
(10404174, 'SD NEGERI 48 PEKANBARU', 'Jl. Tengku Bey', 'Bukit Raya', 1, 0),
(10404176, 'SD NEGERI 136 PEKANBARU', 'Jl. Garuda Sakti No.25 A', 'Tampan', 1, 0),
(10404177, 'SD NEGERI 61 PEKANBARU', 'Jl. Sialang Bungkuk', 'Tenayan Raya', 1, 0),
(10404179, 'SD NEGERI 99 PEKANBARU', 'Jl. Durian, Komp Brimob, Sukajadi', 'Sukajadi', 1, 0),
(10404180, 'SD NEGERI 28 PEKANBARU', 'Jl. Utama No. 022', 'Tenayan Raya', 1, 0),
(10404181, 'SD NEGERI 87 PEKANBARU', 'Jl. Hangtuah / PHB', 'Limah Puluh', 1, 0),
(10404182, 'SD NEGERI 17 PEKANBARU', 'Jl. Pasir Putih', 'Bukit Raya', 1, 0),
(10404184, 'SD NEGERI 158 PEKANBARU', 'Jl. Patimura no. 40', 'Sail', 1, 0),
(10404186, 'SD NEGERI 50 PEKANBARU', 'Jl. Kapur', 'Senapelan', 1, 0),
(10404188, 'SD NEGERI 66 PEKANBARU', 'Jl. H. Imam Munandar No.58', 'Bukit Raya', 1, 0),
(10404190, 'SD NEGERI 72 PEKANBARU', 'Jl. Riau Gg. Riau', 'Senapelan', 1, 0),
(10404192, 'SD NEGERI 152 PEKANBARU', 'Jl. Ababil', 'Sukajadi', 1, 0),
(10404193, 'SD NEGERI 172 PEKANBARU', 'Jl Segar No. 36', 'Tenayan Raya', 1, 0),
(10404195, 'SD NEGERI 167 PEKANBARU', 'Jl. Muhajirin', 'Tampan', 1, 0),
(10404196, 'SD NEGERI 78 PEKANBARU', 'Jl. Dahlia Indah No. 57', 'Tenayan Raya', 1, 0),
(10404197, 'SD NEGERI 166 PEKANBARU', 'Jl. Nelayan', 'Rumbai', 1, 0),
(10404198, 'SD NEGERI 100 PEKANBARU', 'Jl. Lili Nomor.18', 'Sukajadi', 1, 0),
(10404200, 'SD NEGERI 49 PEKANBARU', 'Jl. Yos Sudarso Km 19 Rumbai', 'Rumbai', 1, 0),
(10404205, 'SD NEGERI 62 PEKANBARU', 'Jl. Hang Tuah Ujung Gg. Inpres No. 23', 'Tenayan Raya', 1, 0),
(10404206, 'SD NEGERI 126 PEKANBARU', 'Jl. Nenas', 'Senapelan', 1, 0),
(10404207, 'SD NEGERI 153 PEKANBARU', 'Jl. Semangka No. 17', 'Sukajadi', 1, 0),
(10404209, 'SD NEGERI 154 PEKANBARU', 'Jl. Semangka No.17', 'Sukajadi', 1, 0),
(10404211, 'SD NEGERI 144 PEKANBARU', 'Jl. Giam No. 3', 'Senapelan', 1, 0),
(10404214, 'SD NEGERI 37 PEKANBARU', 'Jl. Garuda Sakti No. 25', 'Tampan', 1, 0),
(10404215, 'SD NEGERI 104 PEKANBARU', 'Jl. Damar', 'Tenayan Raya', 1, 0),
(10404217, 'SD NEGERI 60 PEKANBARU', 'Jl. Yos Sudarso Km 12,5', 'Rumbai', 1, 0),
(10404219, 'SD NEGERI 3 PEKANBARU', 'Jl. Kesehatan. No.35', 'Senapelan', 1, 0),
(10404220, 'SD NEGERI 57 PEKANBARU', 'Jl. Mangga', 'Sukajadi', 1, 0),
(10404223, 'SD NEGERI 109 PEKANBARU', 'Jl. Lumba-lumba', 'Bukit Raya', 1, 0),
(10404224, 'SD NEGERI 31 PEKANBARU', 'Jl. Sultan Syarif Qasim', 'Limah Puluh', 1, 0),
(10404227, 'SD NEGERI 54 PEKANBARU', 'Jl. Murai No. 24', 'Sukajadi', 1, 0),
(10404228, 'SD NEGERI 51 PEKANBARU', 'Jl. Hang Tuah', 'Limah Puluh', 1, 0),
(10404230, 'SD NEGERI 134 PEKANBARU', 'Jl. Saman Hudi No. 12', 'Senapelan', 1, 0),
(10404231, 'SD NEGERI 53 PEKANBARU', 'Jl. Sawai', 'Sukajadi', 1, 0),
(10404232, 'SD NEGERI 130 PEKANBARU', 'Jl. Srikandi Permadi I', 'Tampan', 1, 0),
(10404233, 'SD NEGERI 108 PEKANBARU', 'Jl. Merak Gg Merpati Putih', 'Bukit Raya', 1, 0),
(10404235, 'SD NEGERI 59 PEKANBARU', 'Jl. Tegal Sari No. 99', 'Rumbai', 1, 0),
(10404236, 'SD NEGERI 88 PEKANBARU', 'Jl. Dr. Sutomo', 'Sail', 1, 0),
(10404237, 'SD NEGERI 27 PEKANBARU', 'Jl. Cempaka No.130', 'Senapelan', 1, 0),
(10404238, 'SD NEGERI 68 PEKANBARU', 'Jl. Balam', 'Sukajadi', 1, 0),
(10404239, 'SD NEGERI 34 PEKANBARU', 'Jl. Kuantan V', 'Limah Puluh', 1, 0),
(10404240, 'SD NEGERI 91 PEKANBARU', 'Jl. Nelayan No. 147', 'Rumbai', 1, 0),
(10404242, 'SD NEGERI 132 PEKANBARU', 'Jl. Kuantan I No. 08', 'Limah Puluh', 1, 0),
(10404243, 'SDN 125 Pekanbaru', 'Jl.Tengku Cik Ditiro', 'Pekanbaru Kota', 1, 0),
(10404245, 'SD NEGERI 20 PEKANBARU', 'Jl. Kulim No. 69', 'Senapelan', 1, 0),
(10404246, 'SD NEGERI 105 PEKANBARU', 'Jl. Soebrantas Km. 10.5', 'Tampan', 1, 0),
(10404247, 'SD NEGERI 74 PEKANBARU', 'Jl. Hang Tuah komplek PHB', 'Limah Puluh', 1, 0),
(10404248, 'SD NEGERI 92 PEKANBARU', 'Jl. Patin', 'Rumbai', 1, 0),
(10404249, 'SD NEGERI 52 PEKANBARU', 'Jl. Rokan No. 076', 'Limah Puluh', 1, 0),
(10404254, 'SD NEGERI 75 PEKANBARU', 'Jl. Angsa Dua', 'Sukajadi', 1, 0),
(10404256, 'SD NEGERI 131 PEKANBARU', 'Jl. Perkasa No. 04', 'Tenayan Raya', 1, 0),
(10404260, 'SD NEGERI 157 PEKANBARU', 'Jl. Rokan No. 51', 'Limah Puluh', 1, 0),
(10404380, 'SDIT AL MADINAH', 'Jl. Ampi No.99 P. Marpoyan Pekanbaru', 'Bukit Raya', 1, 1),
(10404381, 'SDIT IMAM ASY SYAFI I', 'Jl. Delima Gg Delima XII', 'Tampan', 1, 1),
(10404384, 'SD NEGERI 26 PEKANBARU', 'Jl. Abdul Muis', 'Sail', 1, 0),
(10404385, 'SD NEGERI 6 PEKANBARU', 'Jl. Pepaya No. 53', 'Sukajadi', 1, 0),
(10404386, 'SD NEGERI 12 PEKANBARU', 'Jl. Pepaya No. 53', 'Sukajadi', 1, 0),
(10404387, 'SD NEGERI 7 PEKANBARU', 'Jl. Tanjung Uban No. 17', 'Limah Puluh', 1, 0),
(10404388, 'SD NEGERI 58 PEKANBARU', 'Jl. Hang Jebat Gg. Puskesmas', 'Sail', 1, 0),
(10404389, 'SD NEGERI 83 PEKANBARU', 'Jl. Pontianak No. 8 Pekanbaru', 'Bukit Raya', 1, 0),
(10404390, 'SD NEGERI 82 PEKANBARU', 'Jl. Thamrin No. 69', 'Sail', 1, 0),
(10404392, 'SD NEGERI 23 PEKANBARU', 'Jl. Rokan No. 74', 'Limah Puluh', 1, 0),
(10404394, 'SD NEGERI 22 PEKANBARU', 'Jl. Sawai', 'Sukajadi', 1, 0),
(10404395, 'SD NEGERI 24 PEKANBARU', 'Jl. Tanjung Uban No. 17', 'Limah Puluh', 1, 0),
(10404397, 'SD NEGERI 122 PEKANBARU', 'Jl. Indra Pura', 'Tenayan Raya', 1, 0),
(10404398, 'SD NEGERI 133 PEKANBARU', 'Jl. Ikhlas', 'Tenayan Raya', 1, 0),
(10404399, 'SD NEGERI 69 PEKANBARU	', 'Jl. Tanjung Datuk Gg. Sd No. 01', 'Limah Puluh', 1, 0),
(10404401, 'SD NEGERI 93 PEKANBARU', 'Jl. Sri Indra No.17', 'Rumbai', 1, 0),
(10404407, 'SD NEGERI 44 PEKANBARU', 'Jl. Budi Luhur', 'Tenayan Raya', 1, 0),
(10404408, 'SD NEGERI 127 PEKANBARU', 'Jl. Tanjung Batu', 'Limah Puluh', 1, 0),
(10404411, 'SD NEGERI 79 PEKANBARU', 'Jl. Murai. No. 20', 'Sukajadi', 1, 0),
(10404412, 'SD NEGERI 46 PEKANBARU', 'Jl. Lintas Timur Km. 13', 'Tenayan Raya', 1, 0),
(10404413, 'SD NEGERI 67 PEKANBARU', 'Jl. H. Imam Munandar', 'Bukit Raya', 1, 0),
(10404414, 'SD NEGERI 121 PEKANBARU', 'Jl. Pepaya No. 53', 'Sukajadi', 1, 0),
(10404415, 'SD NEGERI 174 PEKANBARU', 'Jl. Yos Sudarso', 'Rumbai', 1, 0),
(10404416, 'SD NEGERI 135 PEKANBARU', 'Jl. Simpang Beringin', 'Tenayan Raya', 1, 0),
(10404418, 'SD NEGERI 182 PEKANBARU', 'Jl. Pasir Putih No. 10', 'Bukit Raya', 1, 0),
(10404419, 'SD NEGERI 170 PEKANBARU', 'Jl. T. Bey', 'Bukit Raya', 1, 0),
(10404420, 'SD NEGERI 116 PEKANBARU', 'Jl. Singgalang No. 39', 'Tenayan Raya', 1, 0),
(10404421, 'SD STANLEY PEKANBARU', 'Jl. Melur No.143', 'Sukajadi', 1, 1),
(10404422, 'SD ADVENT', 'Jl. Melati No. 49', 'Sukajadi', 1, 1),
(10404423, 'SD SANTA MARIA', 'Jl. Jend. Ahmad Yani 89 Pekanbaru', 'Pekanbaru Kota', 1, 1),
(10404425, 'SD HIKMAH', 'Jl. Melati No. 6', 'Sukajadi', 1, 1),
(10404426, 'SD ISLAM PLUS EKATAMA', 'Jl. Surabaya No. 54 Tangkerang Selatan', 'Bukit Raya', 1, 1),
(10404427, 'SD Kemala Bhayangkari 1', 'Jl. Kartini', 'Pekanbaru Kota', 1, 1),
(10404428, 'SD MUHAMMADIYAH 2', 'Jl. Kh.ahmad Dahlan No. 84', 'Sukajadi', 1, 1),
(10404429, 'SD MUHAMMADIYAH IV', 'Jl. Sekuntum Raya No 17', 'Tampan', 1, 1),
(10404430, 'SD SANTA VERONIKA', 'Jl. Pastoran Palas', 'Rumbai', 1, 1),
(10404432, 'SD TUNAS BANGSA', 'Jl. Lokomotif (Perum. Jondul Lama) Blok S 1-10', 'Limah Puluh', 1, 1),
(10404435, 'SD NEGERI 110 PEKANBARU', 'Jl. Mutiara No. 58', 'Tampan', 1, 0),
(10404437, 'SD NEGERI 147 PEKANBARU', 'Jl. Garuda Sakti / Anggrek No. 14', 'Tampan', 1, 0),
(10404438, 'SD NEGERI 181 PEKANBARU', 'Jl. Kubang Raya Gg. Hijrah', 'Tampan', 1, 0),
(10404439, 'SD NEGERI 183 PEKANBARU', 'Jl. Taman Karya / Citra Kecana', 'Tampan', 1, 0),
(10404450, 'SD NEGERI 184 PEKANBARU', 'Jl. Hr. Subrantas Perum Putri Tujuh', 'Tampan', 1, 0),
(10404453, 'SMAN PLUS PROP RIAU', 'JL. KUBANG RAYA', 'Bukit Raya', 3, 0),
(10404454, 'SMAS PLUS BINA BANGSA', 'JL.KETITIRAN NO. 24', 'Sukajadi', 3, 1),
(10404458, 'SMKS FARMASI IKASARI PEKANBARU', 'JL. BANGAU SAKTI/MAWAR NO. 98 PANAM', 'Tampan', 3, 1),
(10404461, 'SMKS TELKOM PEKANBARU', 'Jl. melati-jl. esemka no.5', 'Tampan', 3, 1),
(10404462, 'SMKS YKWI PEKANBARU', 'Jl. Banda Aceh Gg. Nangka No 10', 'Bukit Raya', 3, 1),
(10404464, 'SD NEGERI 150 PEKANBARU', 'Jl. Patria Sari', 'Rumbai', 1, 0),
(10404466, 'SD NEGERI 5 PEKANBARU', 'Jl. Cempaka No. 132', 'Senapelan', 1, 0),
(10404470, 'SD NEGERI 107 PEKANBARU', 'Jl. Sri Palas No. 184', 'Rumbai', 1, 0),
(10404472, 'SD NEGERI 97 PEKANBARU', 'Jl. Mangkubumi', 'Rumbai', 1, 0),
(10404473, 'SD NEGERI 163 PEKANBARU', 'Jl. HR SUBRANTAS', 'Tampan', 1, 0),
(10404474, 'SD NEGERI 128 PEKANBARU', 'Jl. Tengku Kasim Perkasa', 'Rumbai', 1, 0),
(10404475, 'SD NEGERI 165 PEKANBARU', 'Jl. Serasi Gg.semangka', 'Tampan', 1, 0),
(10404477, 'SD NEGERI 162 PEKANBARU', 'Jl. Sri Amanah', 'Rumbai', 1, 0),
(10404486, 'SMP IT DAR AL-MAARIF', 'Jl. Kh Ahmad Dahlan No. 98 A', 'Sukajadi', 2, 1),
(10404488, 'SMP MUHAMMADIYAH 2', 'Jl. T. BEY (UTAMA I) Gg. SWADAYA', 'Bukit Raya', 2, 1),
(10404489, 'SMP NEGERI 27 PEKANBARU', 'Jl. Nelayan No. 221', 'Rumbai', 2, 0),
(10494587, 'SD NEGERI 29 PEKANBARU', 'Jl. H. Imam Munandar No.66', 'Bukit Raya', 1, 0),
(10494588, 'SD NEGERI 164 PEKANBARU', 'JL. Swakarya No. 112', 'Tampan', 1, 0),
(10494589, 'SD NEGERI 111 Pekanbaru', 'Jl. Suka Karya', 'Tampan', 1, 0),
(10494590, 'SD NEGERI 89 PEKANBARU', 'Jl. Bunga Kertas', 'Sukajadi', 1, 0),
(10494593, 'SD BEERSEBA', 'Jl. Kh. Ahmad Dahlan', 'Sukajadi', 1, 1),
(10494594, 'SD BABUSSALAM', 'Jl. Hr Subrantas', 'Tampan', 1, 1),
(10494595, 'SD AN NAMIROH', 'Jl. Marsan Sejahtera', 'Tampan', 1, 1),
(10494596, 'SD AZIZIYYAH', 'Jl. Cipta Karya Gg. Bahagia I', 'Tampan', 1, 1),
(10494597, 'SDIT DARUL HIKMAH', 'Jl. Manyar Sakti Km. 12', 'Tampan', 1, 1),
(10494598, 'SDIT AL FITYAH', 'JL.KARYA PANAM', 'Tampan', 1, 1),
(10494599, 'SD AL KAUTSAR', 'Jl. Rajawali Sakti No. 34', 'Tampan', 1, 1),
(10494602, 'SD KUSUMA', 'Jl. Bukit Barisan', 'Tenayan Raya', 1, 1),
(10494609, 'SMP NEGERI 32 PEKANBARU', 'Jl. Balam No. 18', 'Sukajadi', 2, 0),
(10494614, 'SMP ISLAM TERPADU AL FITYAH', 'Jl. Swakarya Ujung RT 03 Rw 04', 'Tampan', 2, 1),
(10494616, 'SMP AL AZHAR SYIFA BUDI', 'Jl. S. Parman', 'Sail', 2, 1),
(10494617, 'SMA NEGERI 13 PEKANBARU', 'JL. YOS SUDARSO KM. 27 Muara Fajar', 'Rumbai', 3, 0),
(10494990, 'SD NEGERI 80 PEKANBARU', 'Jl. Sail No. 78', 'Tenayan Raya', 1, 0),
(10495028, 'SD WITAMA NASIONAL PLUS', 'Jl. Tanjung Datuk No. 339', 'Limah Puluh', 1, 1),
(10495029, 'SMP WITAMA NASIONAL PLUSSMP WITAMA NASIONAL PLUS', 'Jl. Tanjung Datuk No. 339', 'Limah Puluh', 2, 1),
(10495030, 'SMAS WITAMA NASIONAL PLUS', 'JL. TANJUNG DATUK NO. 339	', 'Limah Puluh', 3, 1),
(10495040, 'SD IT BINTANG CENDEKIA', 'Jl. Lobak', 'Tampan', 1, 1),
(10495043, 'SMP NEGERI 35 PEKANBARU', 'Jl. T. Bey/Reformasi 2', 'Bukit Raya', 2, 0),
(10495044, 'SMP AL ULUM', 'JL. TUANKU TAMBUSAI NO. 696', 'Tampan', 2, 1),
(10495148, 'SD MIT FATHRIZK LAMAN WAK ATAN', 'Jl. Taman Karya No. 70', 'Tampan', 1, 1),
(10495149, 'SD AL ULUM ISLAMIC SCHOOL	', 'Jl. Tuanku Tambusai No.696', 'Tampan', 1, 1),
(10495150, 'SD JUARA', 'Jl. Warta sari No 9', 'Bukit Raya', 1, 1),
(10495151, 'SMPIT AL IZHAR SCHOOL', 'Jl. HR. Subrantas KM 15', 'Tampan', 2, 1),
(10495226, 'SMA NEGERI 14 PEKANBARU', 'JL.TENGKU BAY', 'Bukit Raya', 3, 0),
(10495230, 'SD ANUGRAH', 'Jl. Kapau Sari 24', 'Tenayan Raya', 1, 1),
(10496493, 'SMP SANTA VERONIKA', '	Jl. Pastoran Palas', 'Rumbai', 2, 1),
(10496496, 'SMAS AL AZHAR SYIFA BUDHI PEKAN BARU II', 'JLN. S.PARMAN NO 27.A', 'Sail', 3, 1),
(10496503, 'SDIT BPMAA', 'Jl. Hangtuah Komplek Mesjid Agung An Nur', 'Pekanbaru Kota', 1, 1),
(10496578, 'SD BUNAYYA', 'Jl. Putra Panca', 'Bukit Raya', 1, 1),
(10496581, 'SMPIT AL BAYYINAH', 'Jl. Merak Sakti', 'Tampan', 2, 1),
(10496612, 'SDS MUHAMMADIYAH 6', 'JL. CIPTA KARYA - TAMPAN', 'Tampan', 1, 1),
(10496632, 'SD MUHAMMADIYAH 07 TERPADU', 'JL. Kapau Sari No.9', 'Tenayan Raya', 1, 1),
(10496642, 'SD NARWASTU', 'Jl. Perjuangan No.I', 'Rumbai', 1, 1),
(10497269, 'SDIT AZ-ZUHRA', 'Jl. Ketitiran', 'Tampan', 1, 1),
(10497277, 'SD AN NAMIROH 3', 'Jl. Kelapa Sawit Ujung', 'Bukit Raya', 1, 1),
(10497348, 'SMK KEHUTANAN NEGERI PEKANBARU', 'JL. SUKA KARYA / SIMPANG KUALU Km. 11, 5 PANAM', 'Tampan', 3, 1),
(10497370, 'SDS IT FADHILAH', 'JL. MUHAJIRIN SOEKARNO HATTA', 'Tampan', 1, 1),
(10497388, 'SMPIT AZ ZUHRA ISLAMIC SCHOOL', 'Jl. Ketitiran Panam', 'Tampan', 2, 1),
(10497424, 'SD IT AL IZHAR SCHOOL', 'Jl. Hr. Soebrantas Km. 15', 'Tampan', 1, 1),
(10497497, 'SMKS NASIONAL AL HUDA', 'JL. HR SUBRANTAS NO.57', 'Tampan', 3, 1),
(10498739, 'SMPIT MADANI', 'Jalan bangau sakti, Gang Pipit', 'Tampan', 2, 1),
(10498812, 'MAN 2 MODEL PEKANBARU', 'JL. DIPONEGORO NO. 55', 'Sail', 3, 0),
(10498813, 'MAS DINIYAH PUTRI', 'JL. KH. AHMAD DAHLAN NO. 100', 'Sukajadi', 3, 1),
(10498814, 'MAS MASMUR', 'JL. KH. AHMAD DAHLAN NO. 96', 'Sukajadi', 3, 1),
(10498815, 'MAS MUHAMMADIYAH', 'JL. LOBAK/SIMP. ARDATH NO.44', 'Tampan', 3, 1),
(10498816, 'MAS DARUL HIKMAH', 'JL. MANYAR SAKTI KM. 12', 'Tampan', 3, 1),
(10498817, 'MAS AL MUNAWWARAH', 'JL. PESANTREN NO. 42', 'Tenayan Raya', 3, 1),
(10498818, 'MAS AL-KAUTSAR', 'JALAN. HANGTUAH KM. 6.5', 'Tenayan Raya', 3, 1),
(10498819, 'MAS UMMATAN WASATHAN PTR', 'JL. LINTAS TIMUR KM.22 PEKANBARU', 'Tenayan Raya', 3, 1),
(10498820, 'MAS AL-IKHWAN', 'JL. PESANTREN NO. 52', 'Tenayan Raya', 3, 1),
(10499295, 'MTSN BUKIT RAYA', 'JL. UNGGAS NO. 453', 'Bukit Raya', 2, 0),
(10499296, 'MTSS AN NAJAH', 'JL. BANDA ACEH NO. 51', 'Bukit Raya', 2, 1),
(10499302, 'MTSS YKWI', 'Jl. Hasyim Asyari No 14 RT. 02 RW. 02', 'Pekanbaru Kota', 2, 1),
(10499303, 'MTSN MUARA FAJAR', 'JL. YOS SUDARSO KM. 15', 'Rumbai', 2, 0),
(10499305, 'MTSS TAUFIQ WAL HIDAYAH', 'JL. YOS SUDARSO KM. 3', 'Rumbai', 2, 1),
(10499306, 'MTSS QURRATA `AYUN', 'JL. DARMA NO. 137', 'Rumbai', 2, 1),
(10499307, 'MTSN ANDALAN PEKANBARU', 'JL. AMAL HAMZAH NO. 01', 'Sail', 2, 0),
(10499308, 'MTSS DINIYAH PUTRI', 'JL. KH. AHAMD DAHLAN NO. 100 B RT. 01 RW. 02', 'Sukajadi', 2, 1),
(10499309, 'MTSS MUHAMMADIYAH 01', 'JL. KESUMA NO.14 SUKAJADI', 'Sukajadi', 2, 1),
(10499310, 'MTSS AL-HUDA', 'Jl. HR Soebrantas KM. 12', 'Tampan', 2, 1),
(10499311, 'MTSS AL MUTTAQIN', 'JL. HR. SOEBRANTAS KM. 13.5', 'Tampan', 2, 1),
(10499312, 'MTSS MUHAMMADIYAH 02', 'JL. SRIKANDI NO. 207', 'Tampan', 2, 1),
(10499313, 'MTSS DARUL HIKMAH', 'JL.MANYAR SAK TI KM 12', 'Tampan', 2, 1),
(10499314, 'MTSS AL-MUNAWWARAH', 'JL. PESANTREN NO. 42', 'Tenayan Raya', 2, 1),
(10499315, 'MTSS AL-IKHWAN', 'JL. PESANTREN NO. 52', 'Tenayan Raya', 2, 1),
(10499316, 'MTSS BUSTANUL ULUM', 'JL. HANGTUAH BELAKANG PEMANCAR RCTI/SCTV', 'Tenayan Raya', 2, 1),
(10499317, 'MTSS AL-KAUTSAR', 'JL. HANGTUAH KM. 6.5', 'Tenayan Raya', 2, 1),
(10499318, 'MTSS HUBBULLAH', 'JL. SINGGALANG V NO. 313', 'Tenayan Raya', 2, 1),
(10499340, 'SMKS MUHAMMADIYAH 3 TERPADU', 'JL. CIPTA KARYA', 'Tampan', 3, 1),
(60704537, 'MIN 3 PEKANBARU', 'JL. TENGKU BEY', 'Bukit Raya', 1, 0),
(60704538, 'MIS YIRA', 'JL. BENGKULU KAPLING II NO. 2', 'Bukit Raya', 1, 1),
(60704539, 'MIS AL FATTAAH', 'JL. GUNUNG KELUD NO: 215', 'Limah Puluh', 1, 1),
(60704544, 'MIN 1 PEKANBARU', 'Jl. Sumatera No. 19 A', 'Pekanbaru Kota', 1, 0),
(60704545, 'MIN 2 AL-FAJAR', 'JL. YOS SUDARSO KM. 22', 'Rumbai', 1, 0),
(60704546, 'MIS MUHAMMADIYAH 01', 'JL. UMBAN SARI ATAS', 'Rumbai', 1, 1),
(60704548, 'MIS AL BAROKAH', 'JL. PURWODADI UJUNG NO. 501', 'Tampan', 1, 1),
(60704549, 'MIS AR RAHMAN', 'JL. HANGTUAH UJUNG', 'Tenayan Raya', 1, 1),
(60704550, 'MIS AZ ZAHIDIN', 'JL. HANGTUAH UJUNG', 'Tenayan Raya', 1, 1),
(60704551, 'MIS AL-IKHWAN', 'JL. LINTAS TIMUR KM. 13.5', 'Tenayan Raya', 1, 1),
(60704552, 'MIS HUBBULLAH', 'JL. SINGGALANG V NO 313 RT. 02/11', 'Tenayan Raya', 1, 1),
(60728997, 'SMKS GLOBAL PEKANBARU', 'Jl. Dr. Soetomo No 108', 'Sail', 3, 1),
(60729006, 'SMPS YABRI TERPADU', 'JL. KAHARUDDIN NASUTION', 'Bukit Raya', 2, 1),
(69726119, 'MIS DARUL ULUM', 'JL. MEKARSARI NO.103 RT. 03 RW. 03', 'Bukit Raya', 1, 1),
(69726328, 'MTSS AS-SHIDDIQI', 'JL. GARUDA SAKTI KM. 2,8', 'Tampan', 2, 1),
(69726760, 'MAS MAARIF NU RIAU', 'JL. KH. AHMAD DAHLAN NO. 98A', 'Sukajadi', 3, 1),
(69727094, 'MIS ISTIQOMAH', 'JL.EKA TUNGGAL UJUNG RT.02 RW.01', 'Tampan', 1, 1),
(69727095, 'MIS AL-BIRRA', 'JL. SUKARNO HATTA/PELITA NO.1 SIDOMULYO BARAT TAMPAN', 'Tampan', 1, 1),
(69727096, 'MIS TUNAS CENDIKIA MUSLIM', 'JL. SUKA KARYA GG. RUKUN NO. 88J PANAM', 'Tampan', 1, 1),
(69727194, 'MTSS FADHILAH', 'JL. MUHAJIRIN RT.01 RW.09 SIDOMULYO BARAT', 'Tampan', 2, 1),
(69728524, 'SMAS IT AL FITYAH', 'JL. SWAKARYA UJUNG PANAM', 'Tampan', 3, 1),
(69728526, 'SMKS KESEHATAN PRO SKILL INDONESIA', 'JL. CIPTA KARYA', 'Tampan', 3, 1),
(69734362, 'SMPS JUARA', 'JL. LEGA SARI', 'Bukit Raya', 2, 1),
(69755597, 'SD NEGERI 187 PEKANBARU', 'Jl. Melati', 'Tampan', 1, 0),
(69756235, 'MTSS UMMATAN WASATHAN', 'JL. LINTAS TIMUR KM 22 KULIM TENAYAN RAYA', 'Tenayan Raya', 2, 1),
(69756683, 'SMA AZ-ZUHRA ISLAMIC SCHOOL', 'JL. KETITIRAN', 'Tampan', 3, 1),
(69758136, 'SMKS UMMU AL QURA', 'JL. HR. SUBRANTAS', 'Tampan', 3, 1),
(69758827, 'SD NEGERI 186 PEKANBARU', 'Jl. Seroja', 'Tenayan Raya', 1, 0),
(69759009, 'SDS IT IBNU QOYYIM', 'JL. SUKA KARYA', 'Tampan', 1, 1),
(69761824, 'SD IT AL KINDI', 'Jl. Bukit Barisan, Gg. Bukit Barisan II No.48', 'Tenayan Raya', 1, 1),
(69761877, 'SDIT FADHILAH AMAL', 'Jl.Cipta karya gg.kwindra no.2 panam-pekanbaru', 'Tampan', 1, 1),
(69761878, 'SD IT AZ ZUHRA SIMPANG TIGA', 'JL. TENGKU BEY', 'Bukit Raya', 1, 1),
(69774623, 'SMAS ADVENT PEKANBARU', 'JL. MELATI No.49', 'Sukajadi', 3, 1),
(69775584, 'SMKS MIGAS TEKNOLOGI RIAU', 'Jl. Srikandi Rt 04 Rw 02 - Parit Indah', 'Bukit Raya', 3, 1),
(69786220, 'SMKS BINA PROFESI PEKANBARU', 'JL. SOEKARNO HATTA KOMPLEK GARDENIA NO. 4, 13-16', 'Tampan', 3, 1),
(69786234, 'SMKS YABRI TERPADU', 'JL. KAHARUDDIN NASUTION', 'Bukit Raya', 3, 1),
(69786378, 'SMPS TEKNOLOGI', 'Jl. Kubang Raya Km 1', 'Tampan', 2, 1),
(69786764, 'SMPIT AZIZIYYAH', 'JL. CIPTA KARYA', 'Tampan', 2, 1),
(69787185, 'SMP ISLAM NURUL HIDAYAH', 'JL. SRI PALAS No.143', 'Rumbai', 2, 1),
(69787645, 'SD AT THOIBA', 'Jl. Kapau Sari Perum. Lancang Kuning', 'Tenayan Raya', 1, 1),
(69788286, 'MTsS NURUL YAQIN', 'JL. HANGTUAH NO. 22 REJOSARI', 'Tenayan Raya', 2, 1),
(69814394, 'SMP IT ABDURRAB PEKANBARU', 'Jl. Lobak', 'Tampan', 2, 1),
(69814523, 'SD AN NAMIROH 4', 'Jl. Suka Karya', 'Tampan', 1, 1),
(69815321, 'SMP ISLAMIC SCHOOL TUAH DUA', 'Jl. Taman Karya Ujung', 'Tampan', 2, 1),
(69816324, 'SMA IT AL BAYYINAH', 'Jl. Merak Sakti', 'Tampan', 3, 1),
(69817036, 'SMP AZ ZUHRA SIMPANG TIGA', 'Jl. Tengku Bey', 'Bukit Raya', 2, 1),
(69823293, 'SMK IT AL IZHAR', 'Jl. HR Subrantas', 'Tampan', 3, 1),
(69830499, 'SD TEKNOLOGI', 'Jl. Budi Daya', 'Tampan', 1, 1),
(69830618, 'SMP AN NAMIROH', 'Jl. Delima no.099 panam', 'Tampan', 2, 1),
(69848751, 'SD IT FATIMAH', 'Jl. Cipta Karya', 'Tampan', 1, 1),
(69849429, 'SMK PLUS TERPADU', 'Jl. Damai Ujung No.121', 'Tampan', 3, 1),
(69849438, 'SMK SULTHAN MUAZZAM SYAH', 'Jl. Cut Nyak Dien No.3', 'Sukajadi', 3, 1),
(69855678, 'SD NEGERI 188 PEKANBARU', 'Jl. Garuda Sakti', 'Tampan', 1, 0),
(69855679, 'SD NEGERI 189 PEKANBARU', 'Jl. Cipta Karya Gg. sungkai', 'Tampan', 1, 0),
(69855680, 'SD NEGERI 190 Pekanbaru', 'Jl. Karya Bersama', 'Bukit Raya', 1, 0),
(69855681, 'SD NEGERI 191 PEKANBARU', 'Jl. Cendrawasih-Purwodadi Ujung	', 'Tampan', 1, 0),
(69855690, 'SMP NEGERI 40 PEKANBARU', 'Jl. Garuda Sakti', 'Tampan', 2, 0),
(69855691, 'SMA NEGERI 15 PEKANBARU', 'Jl. Cipta Karya', 'Tampan', 3, 0),
(69858815, 'SD Islam Terpadu Insan Utama 2', 'Jl. Karya/Ikhlas No. 223', 'Tampan', 1, 1),
(69864717, 'SMP TELEKOMUNIKASI PEKANBARU', 'JL. MELATI/JL. ESEMKA NO. 5', 'Tampan', 2, 1),
(69876677, 'SMK FARMATIKOM', 'Jl. Kubang Raya KM 1', 'Tampan', 3, 1),
(69877615, 'SD BRILLIANT ISLAMIC SCHOOL', 'JL. MELATI 1 - MAIN STADION', 'Tampan', 1, 1),
(69882340, 'SD IT AL HIDAYAH PEKANBARU', 'JL. RAWA BENING NO. 70 ARENGKA', 'Tampan', 1, 1),
(69882396, 'SMP IT IMAM AN NAWAWI PEKANBARU', 'JL. MARSAN SEJAHTERA', 'Tampan', 2, 1),
(69883303, 'SD ROYAL PRIME', 'Jl. Rajawali 38/40', 'Sukajadi', 1, 1),
(69883608, 'SD HEAVEN KIDS PEKANBARU', 'JL. SM AMIN Gg. SENTOSA NO. 1', 'Tampan', 1, 1),
(69888451, 'SD C9 School', 'Jl. Tanjung Datuk No. 29 A-Q', 'Limah Puluh', 1, 1),
(69888554, 'SD IT ARSYAD ISLAMIC SCHOOL', 'Jl. Imam Munandar No.321', 'Tenayan Raya', 1, 1),
(69888706, 'SD KASIH CAHAYA BUNDA PEKANBARU', 'JL. TANJUNG DATUK', 'Limah Puluh', 1, 1),
(69893348, 'SD IT INSAN MADANI', 'JL. CEMARA/PURWODADI UJUNG PANAM', 'Tampan', 1, 1),
(69899481, 'SMPIT BADRUL ISLAM', 'JL. Naga Sakti', 'Tampan', 2, 1),
(69899645, 'SD NEGERI 192 PEKANBARU', 'Jl. Teladan', 'Tampan', 1, 0),
(69899647, 'SD NEGERI 194 PEKANBARU', 'Jl. Uka', 'Tampan', 1, 0),
(69900223, 'SMA Plus Terpadu', 'Jl. Damai Ujung', 'Tampan', 3, 1),
(69900224, 'SMP Plus Terpadu', 'Jl. Damai Ujung', 'Tampan', 2, 1),
(69918529, 'SMP C9 SCHOOL', 'Jl. Tanjung Datuk No. 29 A-Q', 'Limah Puluh', 2, 1),
(69932087, 'SD IT MIFTAHUL IMAN', 'Jl. Kubang Raya, Simpang Panam No. 49', 'Tampan', 1, 1),
(69932094, 'SD IT TIARA ISLAMIC SCHOOL', 'Jl. Suka Bakti / Uka', 'Tampan', 1, 1),
(69932351, 'SD STELLA GRACIA SCHOOL', 'Jl. Harapan Utama RT. 004 / RW. 009', 'Tampan', 1, 1),
(69934505, 'SMP IT RAUDHATUR RAHMAH', 'Jl. Pelita No. 100', 'Tampan', 2, 1),
(69937647, 'SMA Teknologi Pekanbaru', 'Jl. Budi Daya', 'Tampan', 3, 1),
(69941331, 'MIS Muhammadiyah 3', 'Jl. Srikandi No. 207', 'Tampan', 1, 1),
(69943234, 'SMK SETIA DHARMA', 'JL. PROF. M. YAMIN NO. 67', 'Senapelan', 3, 1),
(69944293, 'SD MEKAR SARI', 'JL. MEKAR SARI RT.03/RW.06', 'Rumbai', 1, 1),
(69945000, 'SD ISLAM TERPADU DINIYAH', 'JL. KH. AHMAD DAHLAN NO. 100', 'Sukajadi', 1, 1),
(69945165, 'SMA IT FADHILAH', 'JL. MUHAJIRIN', 'Tampan', 3, 1),
(69946475, 'SMP IT INSAN UTAMA 2', 'JL. KARYA / IKHLAS NO. 224', 'Tampan', 2, 1),
(69946758, 'SD NEGERI 195 PEKANBARU', 'JL. BADAK/TUJUH PULUH', 'Tenayan Raya', 1, 0),
(69947471, 'SMA ISLAM TERPADU ABDURRAB', 'JL. Bakti No 32', 'Tampan', 3, 1),
(69953630, 'SMP UNGGULAN TERPADU IBNU AL MUBAROK', 'JL. SRI AMANAH NO. 29 PALAS KIRI', 'Rumbai', 2, 1),
(69955072, 'SD LITTLE BAMBINI PEKANBARU', 'JL. KUANTAN RAYA NO. 12 E', 'Limah Puluh', 1, 1),
(69955847, 'Imam Ibnu Katsir', 'Jl. Pekanbaru-Minas Km.18 /Jl. Belidang', 'Rumbai', 2, 1),
(69955848, 'Darul Muqomah', 'Jl. Kartika Sari', 'Rumbai', 2, 1),
(69957176, 'SD IT AN-NAJIYAH PEKANBARU', 'JL. SOEKARNO HATTA NO. 322', 'Tampan', 1, 1),
(69958537, 'SD IT Ibnu Abbas', 'Jl. Melati Indah No.30', 'Tampan', 1, 1),
(69959026, 'SMP IT BUNAYYA PEKANBARU', 'JL. PUTRA PANCA SEI. MINTAN', 'Bukit Raya', 2, 1),
(69964911, 'SMP Negeri 42 Pekanbaru', 'Jalan Datuk Tunggul', 'Tampan', 2, 0),
(69965839, 'SMP Negeri 44 Pekanbaru', '	Jalan Damai', 'Rumbai', 2, 0),
(69966433, 'SD SMART INDONESIA 2 PEKANBARU', 'JL. AIR HITAM (Komp. Smart Indonesia School)', 'Tampan', 1, 1),
(69966434, 'SD YNA CHRISTIAN SCHOOL', 'JL. PUTIH PUNGGUK NO. 17', 'Rumbai', 1, 1),
(69969240, 'SMK INOVASI RIAU', 'Jl. Damai Ujung (Depan Gedung Riau Pos)', 'Tampan', 3, 1),
(69969653, 'SD ISLAM PLUS AS SYAHIRA AMKA', 'JL. BUDI DAYA UJUNG', 'Tampan', 1, 1),
(69969654, 'SMP ISLAM PLUS AS SYAHIRA AMKA', 'JL. BUDI DAYA UJUNG', 'Tampan', 2, 1),
(69970727, 'SD IT AS-SYAFIIYAH', 'JL. HANGTUAH Gg. H. DAMIRI', 'Limah Puluh', 1, 1),
(69972419, 'SD IT AL-HISA', 'JL. BUKIT BATU LINTAS TIMUR', 'Tenayan Raya', 1, 1),
(69975788, 'MTS AL-MARZUQIN PEKANBARU', 'JL. TENGKU BEY / UTAMA KEL. AIR DINGIN KEC. BUKIT RAYA KOTA MADYA PEKANBARU', 'Bukit Raya', 2, 1),
(69975828, 'MA IMAM IBNU KATSIR', 'JL. BELIDANG', 'Rumbai', 3, 1),
(69979532, 'SMKN 8 PEKANBARU', 'Jl. Tengku Qasim Perkasa', 'Rumbai', 3, 0),
(69980253, 'SMK ALQURAN DAN DAKWAH ALAM', 'Jl. Pendidikan Rumbai', 'Rumbai', 3, 1),
(69980303, 'SD GUANG MING EDUCATION CENTRE', 'JL. RAJAWALI SAKTI UJUNG KOMP. REN YI YUAN NO. 31-39', 'Tampan', 1, 1),
(69981940, 'SMP TUNAS BANGSA PEKANBARU', 'JL. LOKOMOTIF PERUM. JONDUL BLOK S NO. 1-10', 'Limah Puluh', 2, 1),
(69982886, 'MIS AL-JALIIL', 'JL. BAKTI NO.07', 'Tenayan Raya', 1, 1),
(69982887, 'MIS AULIA CENDEKIA PEKANBARU', 'JL. BUANA KOMPLEK PURWODADI INDAH', 'Tampan', 1, 1),
(69982888, 'MIS AL-BUKHARI', 'JL. PANCA BAKTI', 'Tenayan Raya', 1, 1),
(69982895, 'MIS KANZUL ILMI', 'JL. RAYA PRABUMULIH-BATURAJA', 'Tampan', 1, 1),
(69983202, 'MTSS DARUT TAUHID ALMAKTUB', 'JL. LINTAS TIMUR KM. 20 KELURAHAN KULIM KECAMATAN TENAYAN RAYA', 'Tenayan Raya', 2, 1),
(69983346, 'MTSS TAHFIZH RABBANIY INTERNASIONAL', 'JL. AIR DINGIN', 'Bukit Raya', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(13) NOT NULL,
  `npsn` int(15) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `kelas` int(2) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `npsn`, `nama`, `tgl_lahir`, `alamat`, `jenis_kelamin`, `kelas`, `no_hp`, `tempat_lahir`, `status`) VALUES
('11611311433', 10404006, 'Rian Ari Putra', '2006-03-01', 'Jl. Tamprin Ujung', 'Laki-Laki', 10, '082283152721', 'Pekanbaru', 0),
('11631102132', 10404173, 'Ananda Dian Syaputra', '2009-01-22', 'Jl. Budi Daya', 'Laki-Laki', 4, '082385522598', 'Pekanbaru', 0),
('11651102112', 69761877, 'Dani Saputra', '2010-01-12', 'Jl. Gunung Agung', 'Laki-Laki', 2, '081378277631', 'Pekanbaru', 0),
('11651102122', 10403952, 'Abdul Rohman', '2007-02-22', 'Jl. Kenanga', 'Laki-Laki', 6, '082384499579', 'Pekanbaru', 0),
('11651102444', 10403948, 'Muhammad Abdi', '2010-01-22', 'jl. Taskuran No. 66', 'Laki-Laki', 3, '081262258679', 'Pekanbaru', 0),
('11651103212', 60704550, 'Adly Febriansyah', '2008-01-29', 'Jl. Saomati Tenayan Raya', 'Laki-Laki', 5, '082390709165', 'Pekanbaru', 0),
('11651103233', 10499295, 'Alya Zeneti Saputri', '2005-01-29', 'Dokagu Rt/Rw 02/05', 'Perempuan', 8, '081275844819', 'Pekanbaru', 0),
('11651103411', 10403965, 'Addurun Hafis', '2004-05-28', 'Jl. Cendrawasih No. 43', 'Laki-Laki', 9, '082385474453', 'Pekanbaru', 0),
('11651103422', 10403945, 'Adelia Nazira', '2013-06-03', 'Pekanbaru', 'Perempuan', 1, '082284163929', 'Pekanbaru', 0),
('11651103544', 10403965, 'Andri Setiawan', '2006-11-23', 'Jl. Tamprin Ujung', 'Laki-Laki', 7, '085263846289', 'Pekanbaru', 0),
('11652211099', 10403985, 'Putri Arni Nazira', '2003-01-01', 'Jl, Paus No. 54', 'Perempuan', 12, '081266771122', 'Pekanbaru', 0),
('11671123221', 10403985, 'Nova Rosma', '2004-01-01', 'Jl. Goba', 'Perempuan', 11, '082284112311', 'Pekanbaru', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `jabatan`, `email`, `level`, `no_hp`, `jenis_kelamin`) VALUES
(5598, 'staff', '827ccb0eea8a706c4c34a16891f84e7b', 'Ifit', '  Staff Baznas  ', 'Baznaspekanbaru@gmail.com', 2, '081236161122', 'Perempuan'),
(5599, 'rizki', '827ccb0eea8a706c4c34a16891f84e7b', 'Rizki Prasetia', '  Kepala Baznas  ', 'rizkiprasetia@gamil.com', 1, '082387042701', 'Laki-Laki'),
(5602, 'umum1', '827ccb0eea8a706c4c34a16891f84e7b', 'Nadila Utari', 'Bagian Umum', 'ayufransiska@gmail.com', 3, '081236161122', 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_ab`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id_bs`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`no_kk`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `lampiran`
--
ALTER TABLE `lampiran`
  ADD PRIMARY KEY (`id_lamp`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`npsn`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `npsn` (`npsn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_ab` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `beasiswa`
--
ALTER TABLE `beasiswa`
  MODIFY `id_bs` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `lampiran`
--
ALTER TABLE `lampiran`
  MODIFY `id_lamp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5603;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD CONSTRAINT `beasiswa_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD CONSTRAINT `keluarga_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lampiran`
--
ALTER TABLE `lampiran`
  ADD CONSTRAINT `lampiran_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`npsn`) REFERENCES `sekolah` (`npsn`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
