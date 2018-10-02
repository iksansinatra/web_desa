-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Okt 2018 pada 18.18
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_agenda`
--

INSERT INTO `table_agenda` (`agenda_id`, `agenda_name`, `agenda_desc`, `agenda_date`, `agenda_time`, `agenda_place`, `agenda_organizer`) VALUES
(2, 'dgf', 'hgh', '0064-03-19', '07:10:00', '25gtrf', 'dhfjgj');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_belanja`
--

INSERT INTO `table_belanja` (`belanja_id`, `belanja_tahun`, `belanja_pemerintahan`, `belanja_pembangunan`, `belanja_pembinaan`, `belanja_pemberdayaan`, `belanja_lainlain`, `belanja_total`) VALUES
(12, 2021, 120000000, 500000000, 300000000, 100000000, 50000000, 1070000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_berkas`
--

CREATE TABLE IF NOT EXISTS `table_berkas` (
  `berkas_id` int(11) NOT NULL,
  `berkas_name` varchar(200) NOT NULL,
  `berkas_desc` text NOT NULL,
  `berkas_image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_berkas`
--

INSERT INTO `table_berkas` (`berkas_id`, `berkas_name`, `berkas_desc`, `berkas_image`) VALUES
(2, 'iksan', '<p>Syarat</p>\r\n\r\n<p>1. Iksan</p>\r\n\r\n<p>2. Amsyar</p>\r\n\r\n<p>3. Adriyan</p>\r\n', 'file_1538241699.JPG'),
(5, 'bfnb', '<p>bfb</p>\r\n', 'file_1538242255.JPG');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_fasilitas`
--

CREATE TABLE IF NOT EXISTS `table_fasilitas` (
  `fasilitas_id` int(11) NOT NULL,
  `fasilitas_name` varchar(200) NOT NULL,
  `fasilitas_desc` text NOT NULL,
  `fasilitas_image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_fasilitas`
--

INSERT INTO `table_fasilitas` (`fasilitas_id`, `fasilitas_name`, `fasilitas_desc`, `fasilitas_image`) VALUES
(1, 'fsagdhg', '<p>wadaw</p>\r\n', 'file_1538247107.JPG'),
(3, 'iksan', '<p>iksan</p>\r\n', 'file_1538247163.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_image`
--

INSERT INTO `table_image` (`image_id`, `image_name`, `image_desc`, `image_file`) VALUES
(17, 'yuyiy', '                                  yukuk                                ', 'file_1538241258.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_job`
--

CREATE TABLE IF NOT EXISTS `table_job` (
  `job_id` int(11) NOT NULL,
  `job_name` varchar(200) NOT NULL,
  `job_desc` text NOT NULL,
  `jobscategory_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_job`
--

INSERT INTO `table_job` (`job_id`, `job_name`, `job_desc`, `jobscategory_id`) VALUES
(8, 'cc', 'ee', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_kegiatan`
--

INSERT INTO `table_kegiatan` (`image_id`, `image_name`, `image_desc`, `image_file`) VALUES
(6, 'gb', '                                                                    gvb                                                                ', 'file_1538239305.JPG');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_news`
--

INSERT INTO `table_news` (`news_id`, `news_title`, `news_content`, `news_image`, `news_author`, `news_date`) VALUES
(6, 'iksan', '<p>iksan</p>\r\n', 'file_1538243920.JPG', 'iksan', '2018-05-01');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_pariwisata`
--

INSERT INTO `table_pariwisata` (`pariwisata_id`, `pariwisata_name`, `pariwisata_desc`, `pariwisata_image`) VALUES
(1, 'iksan', '<p><!--?php echo $key->image_desc;?-->yoy</p>\r\n', 'file_1538245073.JPG');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_pendapatan`
--

INSERT INTO `table_pendapatan` (`pendapatan_id`, `pendapatan_tahun`, `pendapatan_pad`, `pendapatan_dd`, `pendapatan_add`, `pendapatan_bk`, `pendapatan_total`) VALUES
(2, 2016, 120000000, 1000000000, 300000000, 350000000, 1770000000);

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_perangkat`
--

INSERT INTO `table_perangkat` (`perangkat_id`, `perangkat_name`, `perangkat_text`, `perangkat_place`, `perangkat_date`, `perangkat_sk`, `perangkat_image`) VALUES
(19, 'Iksan', 'Kepala Desa', 'Raha', '1996-03-31', 'nk/20/123', 'file_1538268378.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_potency`
--

CREATE TABLE IF NOT EXISTS `table_potency` (
  `potensi_id` int(11) NOT NULL,
  `potensi_name` varchar(200) NOT NULL,
  `potensi_desc` text NOT NULL,
  `potensi_image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_potency`
--

INSERT INTO `table_potency` (`potensi_id`, `potensi_name`, `potensi_desc`, `potensi_image`) VALUES
(7, 'greg', '<p>gth</p>\r\n', 'file_1538247351.jpg');

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
-- Struktur dari tabel `table_user`
--

CREATE TABLE IF NOT EXISTS `table_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `username_active` char(5) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_user`
--

INSERT INTO `table_user` (`user_id`, `user_name`, `user_password`, `user_fullname`, `username_active`, `group_id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '192.168.1.1', '1', 1),
(3, 'ivan', '2c42e5cf1cdbafea04ed267018ef1511', 'asgh', '2', 2),
(4, 'admin', 'cacd5ea564694b0eefd8df909822f18a', 'cdvc', 'cscsd', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_video`
--

INSERT INTO `table_video` (`video_id`, `video_name`, `video_desc`, `video_file`) VALUES
(13, 'gdh', '                                                                                                                                        bvehbgf                                                                                                                                ', 'vid-20180929181823.MP4'),
(14, 'indra', 'BABI', 'vid-20180930193731.MP4');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_visi`
--

INSERT INTO `table_visi` (`visi_id`, `visi_tahun`, `visi_visi`, `visi_misi`, `visi_image`) VALUES
(2, 2008, 'mantap', '<p>ngeri</p>\r\n', 'file_1538318092.JPG');

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
-- Indexes for table `table_job`
--
ALTER TABLE `table_job`
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
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `table_belanja`
--
ALTER TABLE `table_belanja`
  MODIFY `belanja_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `table_berkas`
--
ALTER TABLE `table_berkas`
  MODIFY `berkas_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `table_desa`
--
ALTER TABLE `table_desa`
  MODIFY `sejarah_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_fasilitas`
--
ALTER TABLE `table_fasilitas`
  MODIFY `fasilitas_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `table_groups`
--
ALTER TABLE `table_groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `table_image`
--
ALTER TABLE `table_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `table_job`
--
ALTER TABLE `table_job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
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
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
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
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `table_newscategory`
--
ALTER TABLE `table_newscategory`
  MODIFY `newscategory_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_pariwisata`
--
ALTER TABLE `table_pariwisata`
  MODIFY `pariwisata_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `table_pendapatan`
--
ALTER TABLE `table_pendapatan`
  MODIFY `pendapatan_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `table_perangkat`
--
ALTER TABLE `table_perangkat`
  MODIFY `perangkat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `table_potency`
--
ALTER TABLE `table_potency`
  MODIFY `potensi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
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
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `table_userprofile`
--
ALTER TABLE `table_userprofile`
  MODIFY `userprofile_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_video`
--
ALTER TABLE `table_video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `table_visi`
--
ALTER TABLE `table_visi`
  MODIFY `visi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
