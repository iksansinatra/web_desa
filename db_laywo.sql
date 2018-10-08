-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Okt 2018 pada 07.42
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laywo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_agenda`
--

CREATE TABLE IF NOT EXISTS `table_agenda` (
  `agenda_id` int(11) NOT NULL,
  `agenda_name` varchar(200) NOT NULL,
  `agenda_desc` text NOT NULL,
  `agenda_date` date NOT NULL,
  `agenda_time` time NOT NULL,
  `agenda_place` text NOT NULL,
  `agenda_organizer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_belanja`
--

CREATE TABLE IF NOT EXISTS `table_belanja` (
  `belanja_id` int(11) NOT NULL,
  `belanja_tahun` int(4) NOT NULL,
  `belanja_pemerintahan` double NOT NULL,
  `belanja_pembangunan` double NOT NULL,
  `belanja_pembinaan` double NOT NULL,
  `belanja_pemberdayaan` double NOT NULL,
  `belanja_lainlain` double NOT NULL,
  `belanja_total` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_belanja`
--

INSERT INTO `table_belanja` (`belanja_id`, `belanja_tahun`, `belanja_pemerintahan`, `belanja_pembangunan`, `belanja_pembinaan`, `belanja_pemberdayaan`, `belanja_lainlain`, `belanja_total`) VALUES
(13, 2017, 280988000, 633187000, 31500000, 82500000, 0, 1028175000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_berkas`
--

CREATE TABLE IF NOT EXISTS `table_berkas` (
  `berkas_id` int(11) NOT NULL,
  `berkas_name` varchar(200) NOT NULL,
  `berkas_desc` text NOT NULL,
  `berkas_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_desa`
--

CREATE TABLE IF NOT EXISTS `table_desa` (
  `sejarah_id` int(11) NOT NULL,
  `sejarah_title` varchar(200) NOT NULL,
  `sejarah_desa` text NOT NULL,
  `sejarah_pemerintahan` text NOT NULL,
  `sejarah_image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_desa`
--

INSERT INTO `table_desa` (`sejarah_id`, `sejarah_title`, `sejarah_desa`, `sejarah_pemerintahan`, `sejarah_image`) VALUES
(1, 'SEJARAH DESA LAYWO JAYA', '<p><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Desa Laywo&nbsp; Jaya merupakan salah satu desa di Kecamatan Wawonii Timur Kabupaten Konawe Kepulauan. Desa ini terletak tidak jauh dari ibukota kecamatan Wawonii Timur dengan jarak 0,5 km, sedangkan jarak ke ibukota kabupaten 38,5 km. Desa laywo Jaya berbatasan dengan Desa Laywo Jaya di sebelah utara, Kelurahan Munse di sebelah selatan, laut banda disebelah timur dan gunung waworete disebelah barat. Desa Laywo Jaya merupakan desa pemekaran dari Desa Munse Indah pada Tahun 2011 dan dipimpin oleh seorang Pejabat (PJ)&nbsp; Kepala Desa atas nama Sulasno Saleh.</span></span></p>\r\n', 'Desa Laywo Jaya sebagai sebuah organisasi yang berada di bawah kecamatan Wawonii Timur memiliki struktur organisasi yang bertujuan untuk menjalankan roda organisasi serta roda pemerintahan tingkat desa. Desa Laywo Jaya merupakan desa baru dimekarkan hal ini dibuktikan dengan pemilihan kepala desa yang diadaka baru satu kali. Namun, selama terbentuknya desa laywo jaya tercatat 3 orang sudah pernah menjadi pemimpin sekaligus “bapak” bagi seluruh penduduk desa laywo jaya.', 'file_1538713172.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_fasilitas`
--

CREATE TABLE IF NOT EXISTS `table_fasilitas` (
  `fasilitas_id` int(11) NOT NULL,
  `fasilitas_name` varchar(200) NOT NULL,
  `fasilitas_desc` text NOT NULL,
  `fasilitas_image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_fasilitas`
--

INSERT INTO `table_fasilitas` (`fasilitas_id`, `fasilitas_name`, `fasilitas_desc`, `fasilitas_image`) VALUES
(4, 'Pengadaan TV Kabel', '<p>Pengadaan TV Kabel Desa Laywo Jaya dengan menggunakan anggaran Badan Usaha Milik Desa</p>\r\n', 'file_1538666256.jpeg'),
(5, 'Jalan Desa', '<p>Jalan Desa Laywo Jaya yang belum diaspal</p>\r\n', 'file_1538666354.jpeg'),
(6, 'Pengadaan Alat Pertanian ', '<p>Pengadaan alat pertanian Desa Laywo Jaya</p>\r\n', 'file_1538666516.jpeg'),
(7, 'Bangunan Desa', '', 'file_1538668613.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_groups`
--

CREATE TABLE IF NOT EXISTS `table_groups` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(200) NOT NULL,
  `group_desc` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_groups`
--

INSERT INTO `table_groups` (`group_id`, `group_name`, `group_desc`) VALUES
(1, 'admin', 'only admin'),
(2, 'user', 'only user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_image`
--

CREATE TABLE IF NOT EXISTS `table_image` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(200) NOT NULL,
  `image_desc` text NOT NULL,
  `image_file` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_image`
--

INSERT INTO `table_image` (`image_id`, `image_name`, `image_desc`, `image_file`) VALUES
(18, 'Penimbunan', 'Penimbunan lahan desa untuk mendirikan bangunan', 'file_1538669068.jpeg'),
(19, 'Drainase', 'Drainase', 'file_1538669116.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_jobs`
--

CREATE TABLE IF NOT EXISTS `table_jobs` (
  `job_id` int(11) NOT NULL,
  `job_name` varchar(200) NOT NULL,
  `job_desc` text NOT NULL,
  `jobscategory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_jobscategory`
--

CREATE TABLE IF NOT EXISTS `table_jobscategory` (
  `jobscategory_id` int(11) NOT NULL,
  `jobscategory_name` varchar(200) NOT NULL,
  `jobscategory_desc` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_jobscategory`
--

INSERT INTO `table_jobscategory` (`jobscategory_id`, `jobscategory_name`, `jobscategory_desc`) VALUES
(1, 'Indra', 'Haluu'),
(2, 'xx', 'aa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_jobtips`
--

CREATE TABLE IF NOT EXISTS `table_jobtips` (
  `jobstips_id` int(11) NOT NULL,
  `jobstips_name` varchar(200) NOT NULL,
  `jobstips_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kegiatan`
--

CREATE TABLE IF NOT EXISTS `table_kegiatan` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(200) NOT NULL,
  `image_desc` text NOT NULL,
  `image_file` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_kegiatan`
--

INSERT INTO `table_kegiatan` (`image_id`, `image_name`, `image_desc`, `image_file`) VALUES
(7, 'Rapat Koordinasi', 'Kegiatan rapat koordinasi pembinaan dan pengawasan dana desa Provinsi Sulawesi Tenggara tahun 2017 yang dihadiri oleh Kepala Desa Laywo Jaya                                ', 'file_1538666992.jpeg'),
(8, 'Lomba Desa', 'Perwakilan lomba desa kecamatan wawonii timur                      ', 'file_1538667788.jpeg'),
(9, 'Rapat Desa', 'Kegiatan rapat desa', 'file_1538667364.jpeg'),
(10, 'Kegiatan PKK', 'Posyandu Desa Laywo Jaya', 'file_1538667850.jpeg'),
(11, 'Pelayanan', 'Pelayanan terhadap masyarakat', 'file_1538669249.jpeg'),
(12, 'Kegiatan PKK', 'Pembuatan baju untuk Majelis Taklim', 'file_1538669306.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kontak`
--

CREATE TABLE IF NOT EXISTS `table_kontak` (
  `kontak_id` int(11) NOT NULL,
  `kontak_name` varchar(200) NOT NULL,
  `kontak_desc` text NOT NULL,
  `kontak_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_link`
--

CREATE TABLE IF NOT EXISTS `table_link` (
  `link_id` int(10) NOT NULL,
  `link_title` varchar(100) NOT NULL,
  `link_url` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_link`
--

INSERT INTO `table_link` (`link_id`, `link_title`, `link_url`) VALUES
(2, 'google', 'https://www.google.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_news`
--

CREATE TABLE IF NOT EXISTS `table_news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(200) NOT NULL,
  `news_content` text NOT NULL,
  `news_image` text NOT NULL,
  `news_author` varchar(200) NOT NULL,
  `news_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_newscategory`
--

CREATE TABLE IF NOT EXISTS `table_newscategory` (
  `newscategory_id` int(11) NOT NULL,
  `newscategory_name` varchar(200) NOT NULL,
  `newscategory_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_pariwisata`
--

CREATE TABLE IF NOT EXISTS `table_pariwisata` (
  `pariwisata_id` int(11) NOT NULL,
  `pariwisata_name` varchar(200) NOT NULL,
  `pariwisata_desc` text NOT NULL,
  `pariwisata_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_pemerintahan`
--

CREATE TABLE IF NOT EXISTS `table_pemerintahan` (
  `sejarah_id` int(11) NOT NULL,
  `sejarah_name` varchar(200) NOT NULL,
  `sejarah_periode` text NOT NULL,
  `sejarah_keterangan` text NOT NULL,
  `sejarah_image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_pemerintahan`
--

INSERT INTO `table_pemerintahan` (`sejarah_id`, `sejarah_name`, `sejarah_periode`, `sejarah_keterangan`, `sejarah_image`) VALUES
(3, 'Sulasno Saleh', '2008 - 2010', 'Pejabat Kepala Desa', 'file_1538885851.jpeg'),
(4, 'Alimuddin, A. S.E', '2010 – 2012 ', 'Pejabat Kepala Desa', 'file_1538885932.jpeg'),
(5, 'Pirdaus', '2012 – 2014', 'Pejabat Kepala Desa', 'file_1538885973.jpeg'),
(6, 'Pirdaus', '2014 - 2020', 'Kepala Desa', 'file_1538885996.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_pendapatan`
--

CREATE TABLE IF NOT EXISTS `table_pendapatan` (
  `pendapatan_id` int(11) NOT NULL,
  `pendapatan_tahun` int(11) NOT NULL,
  `pendapatan_pad` double NOT NULL,
  `pendapatan_dd` double NOT NULL,
  `pendapatan_add` double NOT NULL,
  `pendapatan_bk` double NOT NULL,
  `pendapatan_total` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_pendapatan`
--

INSERT INTO `table_pendapatan` (`pendapatan_id`, `pendapatan_tahun`, `pendapatan_pad`, `pendapatan_dd`, `pendapatan_add`, `pendapatan_bk`, `pendapatan_total`) VALUES
(3, 2017, 0, 676687000, 351488000, 0, 1028175000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_perangkat`
--

CREATE TABLE IF NOT EXISTS `table_perangkat` (
  `perangkat_id` int(11) NOT NULL,
  `perangkat_name` varchar(200) NOT NULL,
  `perangkat_text` varchar(200) NOT NULL,
  `perangkat_place` varchar(200) NOT NULL,
  `perangkat_date` date NOT NULL,
  `perangkat_sk` varchar(200) NOT NULL,
  `perangkat_image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_perangkat`
--

INSERT INTO `table_perangkat` (`perangkat_id`, `perangkat_name`, `perangkat_text`, `perangkat_place`, `perangkat_date`, `perangkat_sk`, `perangkat_image`) VALUES
(20, 'PIRDAUS', 'Kepala Desa', 'Munse', '1972-11-20', '05 Tahun 2005 Tahun 2018', 'file_1538667612.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_potency`
--

CREATE TABLE IF NOT EXISTS `table_potency` (
  `potensi_id` int(11) NOT NULL,
  `potensi_name` varchar(200) NOT NULL,
  `potensi_desc` text NOT NULL,
  `potensi_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_suggestion`
--

CREATE TABLE IF NOT EXISTS `table_suggestion` (
  `suggestion_id` int(11) NOT NULL,
  `suggestion_title` varchar(200) NOT NULL,
  `suggestion_content` text NOT NULL,
  `suggestion_postdate` date NOT NULL,
  `suggestion_postime` time NOT NULL,
  `suggestion_accepted` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_suggestion`
--

INSERT INTO `table_suggestion` (`suggestion_id`, `suggestion_title`, `suggestion_content`, `suggestion_postdate`, `suggestion_postime`, `suggestion_accepted`, `user_id`) VALUES
(1, 'a', '<p>asdasd</p>\r\n', '2018-04-01', '01:00:00', 0, 3),
(2, 'vvvvv', '<p>asd</p>\r\n', '2018-04-06', '12:59:00', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_tarjihcategory`
--

CREATE TABLE IF NOT EXISTS `table_tarjihcategory` (
  `tarjihcategory_id` int(11) NOT NULL,
  `tarjihcategory_name` varchar(200) NOT NULL,
  `tarjihcategory_desc` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_tarjihcategory`
--

INSERT INTO `table_tarjihcategory` (`tarjihcategory_id`, `tarjihcategory_name`, `tarjihcategory_desc`) VALUES
(1, 'Bidang Ibadah', ''),
(2, 'Bidang Sosial Kemasyarakatan', ''),
(3, 'Bidang Ekonomi', ''),
(4, 'Bidang Hukum', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_topografi`
--

CREATE TABLE IF NOT EXISTS `table_topografi` (
  `topografi_id` int(11) NOT NULL,
  `topografi_name` varchar(200) NOT NULL,
  `topografi_desc` text NOT NULL,
  `topografi_image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_topografi`
--

INSERT INTO `table_topografi` (`topografi_id`, `topografi_name`, `topografi_desc`, `topografi_image`) VALUES
(8, 'Iklim dan Topografi Desa', '<p><span style="font-size:12.0pt">Secara umum keadaan iklim di Desa Laywo Jaya Kecamatan Wawonii Timur Kabupaten Konawe Kepulauan tidak jauh berbeda dengan keadaan iklim pada beberapa wilayah lain yang ada di Indonesia. Ciri iklim tropis dengan dua jenis musim dalam setahun merupakan sifat kondisi iklim secara umum yang terjadi di Indonesia khususnya di Desa Laywo Jaya. Dua jenis musim yang dimaksud adalah musim penghujan dan musim kemarau. Pada musim penghujan biasanya terjadi pada bulan April sampai bulan Juni, sedangkan musim kemarau terjadi pada bulan Juli sampai bulan Oktober dan terkadang musim hujan dan musim kemarau terjadi pada bulan November sampai bulan Maret. Kedua musim ini sangat mempengaruhi kehidupan masyarakat di Desa Laywo Jaya, hal ini disebabkan oleh dampak yang ditimbulkan oleh kedua musim tersebut. Sementara itu, Desa Laywo Jaya berada di ketinggian 10 mdpl.</span></p>\r\n', 'file_1538886786.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_user`
--

CREATE TABLE IF NOT EXISTS `table_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_user`
--

INSERT INTO `table_user` (`user_id`, `user_name`, `user_password`, `user_fullname`, `group_id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '192.168.1.1', 1),
(3, 'ivan', '2c42e5cf1cdbafea04ed267018ef1511', 'asgh', 2),
(4, 'admin', 'cacd5ea564694b0eefd8df909822f18a', 'cdvc', 1),
(5, 'iksan', '4edd2c92ddf876f150b4fe8360a4d0da', 'iksan sinatra', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_userprofile`
--

CREATE TABLE IF NOT EXISTS `table_userprofile` (
  `userprofile_id` int(11) NOT NULL,
  `userprofile_name` varchar(200) NOT NULL,
  `userprofile_address` text NOT NULL,
  `userprofile_phone` varchar(20) NOT NULL,
  `userprofile_email` varchar(255) NOT NULL,
  `userprofile_image` text NOT NULL,
  `group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_video`
--

CREATE TABLE IF NOT EXISTS `table_video` (
  `video_id` int(11) NOT NULL,
  `video_name` varchar(200) NOT NULL,
  `video_desc` text NOT NULL,
  `video_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_visi`
--

CREATE TABLE IF NOT EXISTS `table_visi` (
  `visi_id` int(11) NOT NULL,
  `visi_tahun` int(11) NOT NULL,
  `visi_visi` text NOT NULL,
  `visi_misi` text NOT NULL,
  `visi_image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_visi`
--

INSERT INTO `table_visi` (`visi_id`, `visi_tahun`, `visi_visi`, `visi_misi`, `visi_image`) VALUES
(4, 2015, '“Terwujudnya Masyarakat Desa Laywo Jaya  Yang Berakhlak Mulia, Sehat, Cerdas dan Sejahtera”  ', '<ol>\r\n	<li><span style="font-size:11pt"><span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Penempatan agama sebagai sumber motivasi dan inspirasi</span></span></span></span></li>\r\n	<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Menciptakan rasa aman dan tentram dalam suasana kehidupan masyarakat desa yang demokratis dan agamis</span></span></span></span></li>\r\n	<li><span style="font-size:11pt"><span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Meningkatkan profesionalisme perangkat desa sebagai pelayan masyarakat</span></span></span></span></li>\r\n	<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Menciptakan pemerintahan yang baik (<em>good goverment) </em>berdasarkan demokratisasi, transparansi yang efektif dan efisien.</span></span></span></span></li>\r\n	<li><span style="font-size:11pt"><span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Meningkatkan pemberdayaan masyarakat dari kekuatan ekonomi dan sosial budaya.</span></span></span></span></li>\r\n	<li><span style="font-size:11pt"><span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Menghidupkan kegiatan-kegiatan kepemudaan dan organisasi kepemudaan</span></span></span></span></li>\r\n	<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;"><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">Membangun dan meningkatkan hasil pertanian dengan penataan jalan usaha tani, pemupukan, pengendalian gulma dan bantuan alat-alat pertanian</span></span></span></span></li>\r\n</ol>\r\n', 'file_1538668887.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_agenda`
--
ALTER TABLE `table_agenda`
  ADD PRIMARY KEY (`agenda_id`);

--
-- Indexes for table `table_belanja`
--
ALTER TABLE `table_belanja`
  ADD PRIMARY KEY (`belanja_id`);

--
-- Indexes for table `table_berkas`
--
ALTER TABLE `table_berkas`
  ADD PRIMARY KEY (`berkas_id`);

--
-- Indexes for table `table_desa`
--
ALTER TABLE `table_desa`
  ADD PRIMARY KEY (`sejarah_id`);

--
-- Indexes for table `table_fasilitas`
--
ALTER TABLE `table_fasilitas`
  ADD PRIMARY KEY (`fasilitas_id`);

--
-- Indexes for table `table_groups`
--
ALTER TABLE `table_groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `table_image`
--
ALTER TABLE `table_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `table_jobs`
--
ALTER TABLE `table_jobs`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `jobscategory_id` (`jobscategory_id`);

--
-- Indexes for table `table_jobscategory`
--
ALTER TABLE `table_jobscategory`
  ADD PRIMARY KEY (`jobscategory_id`);

--
-- Indexes for table `table_jobtips`
--
ALTER TABLE `table_jobtips`
  ADD PRIMARY KEY (`jobstips_id`);

--
-- Indexes for table `table_kegiatan`
--
ALTER TABLE `table_kegiatan`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `table_kontak`
--
ALTER TABLE `table_kontak`
  ADD PRIMARY KEY (`kontak_id`);

--
-- Indexes for table `table_link`
--
ALTER TABLE `table_link`
  ADD PRIMARY KEY (`link_id`);

--
-- Indexes for table `table_news`
--
ALTER TABLE `table_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `table_newscategory`
--
ALTER TABLE `table_newscategory`
  ADD PRIMARY KEY (`newscategory_id`);

--
-- Indexes for table `table_pariwisata`
--
ALTER TABLE `table_pariwisata`
  ADD PRIMARY KEY (`pariwisata_id`);

--
-- Indexes for table `table_pemerintahan`
--
ALTER TABLE `table_pemerintahan`
  ADD PRIMARY KEY (`sejarah_id`);

--
-- Indexes for table `table_pendapatan`
--
ALTER TABLE `table_pendapatan`
  ADD PRIMARY KEY (`pendapatan_id`),
  ADD KEY `major_id` (`pendapatan_add`);

--
-- Indexes for table `table_perangkat`
--
ALTER TABLE `table_perangkat`
  ADD PRIMARY KEY (`perangkat_id`);

--
-- Indexes for table `table_potency`
--
ALTER TABLE `table_potency`
  ADD PRIMARY KEY (`potensi_id`);

--
-- Indexes for table `table_suggestion`
--
ALTER TABLE `table_suggestion`
  ADD PRIMARY KEY (`suggestion_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `table_tarjihcategory`
--
ALTER TABLE `table_tarjihcategory`
  ADD PRIMARY KEY (`tarjihcategory_id`);

--
-- Indexes for table `table_topografi`
--
ALTER TABLE `table_topografi`
  ADD PRIMARY KEY (`topografi_id`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `table_userprofile`
--
ALTER TABLE `table_userprofile`
  ADD PRIMARY KEY (`userprofile_id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `table_video`
--
ALTER TABLE `table_video`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `table_visi`
--
ALTER TABLE `table_visi`
  ADD PRIMARY KEY (`visi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_agenda`
--
ALTER TABLE `table_agenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_belanja`
--
ALTER TABLE `table_belanja`
  MODIFY `belanja_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `table_berkas`
--
ALTER TABLE `table_berkas`
  MODIFY `berkas_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_desa`
--
ALTER TABLE `table_desa`
  MODIFY `sejarah_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `table_fasilitas`
--
ALTER TABLE `table_fasilitas`
  MODIFY `fasilitas_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `table_groups`
--
ALTER TABLE `table_groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `table_image`
--
ALTER TABLE `table_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `table_jobs`
--
ALTER TABLE `table_jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_jobscategory`
--
ALTER TABLE `table_jobscategory`
  MODIFY `jobscategory_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `table_jobtips`
--
ALTER TABLE `table_jobtips`
  MODIFY `jobstips_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_kegiatan`
--
ALTER TABLE `table_kegiatan`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `table_kontak`
--
ALTER TABLE `table_kontak`
  MODIFY `kontak_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_link`
--
ALTER TABLE `table_link`
  MODIFY `link_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `table_news`
--
ALTER TABLE `table_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_newscategory`
--
ALTER TABLE `table_newscategory`
  MODIFY `newscategory_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_pariwisata`
--
ALTER TABLE `table_pariwisata`
  MODIFY `pariwisata_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_pemerintahan`
--
ALTER TABLE `table_pemerintahan`
  MODIFY `sejarah_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `table_pendapatan`
--
ALTER TABLE `table_pendapatan`
  MODIFY `pendapatan_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `table_perangkat`
--
ALTER TABLE `table_perangkat`
  MODIFY `perangkat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `table_potency`
--
ALTER TABLE `table_potency`
  MODIFY `potensi_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_suggestion`
--
ALTER TABLE `table_suggestion`
  MODIFY `suggestion_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `table_tarjihcategory`
--
ALTER TABLE `table_tarjihcategory`
  MODIFY `tarjihcategory_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `table_topografi`
--
ALTER TABLE `table_topografi`
  MODIFY `topografi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `table_userprofile`
--
ALTER TABLE `table_userprofile`
  MODIFY `userprofile_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_video`
--
ALTER TABLE `table_video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_visi`
--
ALTER TABLE `table_visi`
  MODIFY `visi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
