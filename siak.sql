-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2017 at 04:36 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siak`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` varchar(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Password` int(11) NOT NULL,
  `foto_profil` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Nama`, `Password`, `foto_profil`) VALUES
('1', 'Maurendra', 123, 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `NIP` varchar(30) NOT NULL,
  `Jabatan` varchar(10) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `No_Telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`NIP`, `Jabatan`, `Nama`, `No_Telp`) VALUES
('114126352817', 'Kajur', 'Tri A. Kurniawan', '09578758'),
('198503302003100834', 'Kepala Din', 'SUGENG DARSONO, SH.,', '089754436465'),
('198503302003100840', 'Sekretaris', 'H. TARKIM HADI, SH.,', '08923456798'),
('198503302003100868', 'Ka. Bid. A', '	Drs. YADI WIKARSA, ', '08124578768'),
('198503302003101043', 'Ka. Bid. S', 'Ir. H. ADE HASAN, M.', '08538654696'),
('198503302003101044', 'Ka. Bid. P', 'SUJONO, SE.,MM.', '08327544488'),
('198503302003101326', 'Kasubag Um', 'YAYAH KOMARIYAH, S.I', '08123643234'),
('198503302003101327', 'Kasubag Ke', 'ETI YULIATI', '0888543546'),
('198503302003101808', 'Kasubag Pe', 'II SYARIF HIDAYAT, S', '086645432255'),
('198503302003101809', 'Kasi Persa', 'Dra. NENENG SUNENGSI', '0837676545'),
('198503302003101960', 'Kasi Stati', '	WIWIT PRASETYO AGUN', '0814785443'),
('198503302003102827', 'Kasi Penge', 'Dra. TRI PARIBANI, M', '08923456798'),
('198503302003102828', 'Kasi Penyi', 'TATI SUHARTI, SmHk', '08244555778'),
('198503302003102829', 'Kasi E-Gov', 'SOKO GURUNING GEMI, ', '08234567898'),
('198503302003102830', 'Kasi Infra', 'FAJAR SUTRISNO, S.Si', '08195863688'),
('198503302003102831', 'Kasi Penge', 'SYAFRUDIN ARYONO, SE', '085365765869'),
('198503302003102832', '	Arsiparis', 'Hj. Masmiah', '08522487599'),
('198503302003102925', 'Pelaksana', 'Sahidin', '0812548967885'),
('198503302003102926', '	Pelaksana', 'Iwan Yogaswara, S.So', '08123456789'),
('198503302003102927', 'Pelaksana', 'Drs. Jamal', '083276654488'),
('198503302003102928', 'Pelaksana', 'Dewi Apri Susanti, A', '085233986546');

-- --------------------------------------------------------

--
-- Table structure for table `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `NIK` varchar(30) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `TTL` varchar(100) NOT NULL,
  `Jenis_Kelamin` varchar(20) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Agama` varchar(10) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Pekerjaan` varchar(40) NOT NULL,
  `Status_User` int(5) NOT NULL,
  `foto_profil` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penduduk`
--

INSERT INTO `data_penduduk` (`NIK`, `Nama`, `TTL`, `Jenis_Kelamin`, `Alamat`, `Agama`, `Status`, `Pekerjaan`, `Status_User`, `foto_profil`) VALUES
('155150200111140', 'Maurendra', 'Lumajang, 16 July 1997', 'Laki - Laki', 'Jln. Bendungan Nawangan', 'Islam', 'Belum Kawin', 'Mahasiswa', 1, 'default.png'),
('155150207111084', 'wahyu sanjaya', 'Denpasar, 26 12 1997', 'Laki - Laki', 'Jalan Pantai Berawa', 'Hindu', 'Belum Kawin', 'Mahasiswa', 1, ''),
('3276020003740014', 'ARJUNA ANGGARA SADANA.P', 'Denpasar, 26 Juli 1983', 'Laki-laki', 'Jalan Jalak', 'Hindu', 'Kawin', 'Dosen', 1, 'default.png'),
('3507110009220005', 'AHMAD RAFI''I', 'Jakarta, 17 Agustus 1988', 'Laki-laki', 'Jalan Bromo', 'Islam', ' Belum Kawin', 'Mahasiswa', 1, 'default.png'),
('3578060006820009', 'DESI SONATA', 'Banjarmasin, 19 Maret 1989', 'Perempuan', 'Jalan Suka Cita', 'Islam', 'Kawin', 'Pengusaha', 1, 'default.png'),
('3578120127200001', 'SEPTIAN BUDI CAHYONO', 'Bogor, 13 Januari 1983', 'Laki-laki', 'Jalan Manggis', 'Islam', 'Belum Kawin', 'Manager', 1, 'default.png'),
('3578130003750003', 'ARLIKAH', 'Semarang, 11 Januari 1988', 'Perempuan', 'Jalan Batu Raden', 'Islam', 'Kristen', 'Dosen', 1, 'default.png'),
('3578130005530004', 'CHARLES NATA ONG', 'Balikpapan, 12 November 1985', 'Laki-laki', 'Jalan Mawar Putih', 'Kristen', 'Kawin', 'Pengusaha', 1, 'default.png'),
('3578130005590005', 'CHISHI RENNY', 'Padang, 3 September 1976', 'Perempuan', 'Jalan Merdeka', 'Katolik', 'Bleum Kawin', 'Perawat', 1, 'default.png'),
('3578130007670001', 'DJOKO SUBARDJO DJOHAN', 'Bogor, 20 Juni 1978', 'Laki-laki', 'Jalan Brantas', 'Hindu', 'Kawin', 'Pengusaha', 1, 'default.png'),
('3578130009190005', 'AHMAD MAHYANI, SH., Msi', 'Surabaya, 1 Januari 1983', 'Laki-laki', 'Jalan Letjen Pandjaitan', 'Islam', 'Kawin', 'Dosen', 1, 'default.png'),
('3578130009200001', 'AHMAD MUNTAHA', 'Surabaya, 8 Januari 1985', 'Laki-laki', 'Jalan Ahmad Yani', 'Islam', 'Belum Kawin', 'Karyawan', 0, ''),
('3578130009210004', 'AHMAD NUR SUBHAN', 'Malang, 5 Desember 1995', 'Laki-laki', 'Jalan Letjen Pandjaitan', 'Islam', 'Belum Kawin', 'Mahasiswa', 1, 'default.png'),
('3578130009230001', 'AHMAD RIFAI', 'Malang, 17 Agustus 1988', 'Laki-laki', 'Jalan Bromo Pandjaitan', 'Islam', 'Belum Kawin', 'Mahasiswa', 1, 'default.png'),
('3578130127160001', 'SEPTI WULANDARI IBNOE.,S.SOS\r\n', 'Magetan, 15 Januari 1977', 'Perempuan', 'Jalan Soeharto', 'Islam', 'Kawin', 'Guru', 1, 'default.png'),
('3578130127170001', 'SEPTIA RATNA DEWI', 'Jepara, 15 Juli 1966', 'Perempuan', 'Jalan Gatot Subroto', 'Kristen', 'Kawin', 'Dosen', 1, 'default.png'),
('3578130127180001', 'SEPTIAN ANDRIYANTO', 'Jpgjakarta, 8 Mei 1975', 'Laki-laki', 'Jalan Mawar', 'Islam', 'Kawin', 'Dosen', 1, 'default.png'),
('3578130127190002', 'SEPTIAN ARI DWIANTORO', 'Bandung, 15 April 1993', 'Laki-laki', 'Jalan Delima Putih', 'Katolik', 'Belum Kawin', 'Karyawan', 1, 'default.png'),
('3578130159850002', 'VENNY CITRA MULIA SARI', 'Tulungagung, 12 Juni 1999', 'Perempuan', 'Jalan Bunga', 'Kristen', 'Belum Kawin', 'Pelajar', 1, 'default.png'),
('3578130159860001', 'VENTA. ANANDA RAMADHANTY', 'Banjarmasin, 9 Mei 2000', 'Perempuan', 'Jalan Batu Bata', 'Islam', 'Belum Kawin', 'Pelajar', 1, 'default.png'),
('3578130159870002', 'VERA ANGGRAENI', 'Jakarta, 3 April 1977', 'Perempuan', 'Jalan Bandung', 'Kristen', 'Kawin', 'Karyawan', 1, 'default.png'),
('3578130159880002', 'VERA TJAHJONO', 'Belitung, 16 Mei 1988', 'Perempuan', 'Jalan Kenangan', 'Katolik', 'Kawin', 'Wirausaha', 1, 'default.png'),
('3578130159890003', 'VEROSH THOFANY', 'Denpasar, 13 Deseber 1983', 'Laki-laki', 'Jalan Tegal Besar', 'Hindu', 'Kawin', 'Dosen', 1, 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengumuman`
--

CREATE TABLE `data_pengumuman` (
  `ID` varchar(30) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Content` varchar(255) NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengumuman`
--

INSERT INTO `data_pengumuman` (`ID`, `Judul`, `Content`, `foto`) VALUES
('1', 'Pengumuman 1', 'Content 1', ''),
('2', 'Pengumuman 2', 'Content 2', ''),
('3', 'Pengumuman 3', 'Content', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_surat`
--

CREATE TABLE `data_surat` (
  `ID` int(40) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jenis` varchar(10) NOT NULL,
  `Content` varchar(999) NOT NULL,
  `ID_Pengaju` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_surat`
--

INSERT INTO `data_surat` (`ID`, `Nama`, `Jenis`, `Content`, `ID_Pengaju`) VALUES
(1, 'Surat 1', 'kk', 'Content 1', '155150200111140'),
(5, 'Surat 2', 'kk', 'Content 2', '155150200111140'),
(6, 'Surat 3', 'kk', 'Content', '155150200111140'),
(7, 'Surat 4', 'kk', 'Content', '155150200111140');

-- --------------------------------------------------------

--
-- Table structure for table `query_surat`
--

CREATE TABLE `query_surat` (
  `ID` int(40) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jenis` varchar(10) NOT NULL,
  `Content` varchar(999) NOT NULL,
  `ID_Pengaju` varchar(30) NOT NULL,
  `Status_ACC` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query_surat`
--

INSERT INTO `query_surat` (`ID`, `Nama`, `Jenis`, `Content`, `ID_Pengaju`, `Status_ACC`) VALUES
(4, 'Surat 5', 'kk', 'content 5', '155150200111140', 3),
(5, 'surat6', 'ktp', 'test', '155150200111140', 1),
(7, 'Surat 8', 'ktp', 'wow message', '155150200111140', 0),
(8, 'hai', 'kk', 'lalalala yeyeye', '155150200111140', 0),
(9, 'Surat 7', 'kk', 'A', '155150200111140', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `NIK` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`NIK`, `Email`, `Password`) VALUES
('155150200111140', 'Maurendra', '123'),
('155150207111084', 'wahyu', 'wahyu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `data_pengumuman`
--
ALTER TABLE `data_pengumuman`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `data_surat`
--
ALTER TABLE `data_surat`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Pengaju` (`ID_Pengaju`);

--
-- Indexes for table `query_surat`
--
ALTER TABLE `query_surat`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Pengaju` (`ID_Pengaju`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD KEY `NIK` (`NIK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_surat`
--
ALTER TABLE `data_surat`
  MODIFY `ID` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `query_surat`
--
ALTER TABLE `query_surat`
  MODIFY `ID` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_surat`
--
ALTER TABLE `data_surat`
  ADD CONSTRAINT `data_surat_ibfk_1` FOREIGN KEY (`ID_Pengaju`) REFERENCES `data_penduduk` (`NIK`);

--
-- Constraints for table `query_surat`
--
ALTER TABLE `query_surat`
  ADD CONSTRAINT `query_surat_ibfk_1` FOREIGN KEY (`ID_Pengaju`) REFERENCES `data_penduduk` (`NIK`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `data_penduduk` (`NIK`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
