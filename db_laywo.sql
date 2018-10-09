-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Okt 2018 pada 20.39
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_news`
--

INSERT INTO `table_news` (`news_id`, `news_title`, `news_content`, `news_image`, `news_author`, `news_date`) VALUES
(1, 'Ratna Sarumpaet Disebut Ahokers, Ini Kata Mantan Staf Ahok', '<p><strong>Jakarta</strong> - Wakil Ketua Majelis Syuro PKS, Hidayat Nur Wahid (HNW) menyebut <a href="https://www.detik.com/tag/ratna-sarumpaet" target="_blank">Ratna Sarumpaet </a>sebagai pendukung Ahok alias Ahokers di Pilgub DKI 2012 lalu. Mantan staf Ahok, Rian Ernest mengungkapkan tidak ada satupun tindakan yang dilakukan Ratna yang mencerminkan sebagai Ahokers.<br />\r\n<br />\r\n&quot;Selama saya bekerja sama Pak Ahok, dari 2015 sampai 2017, nggak pernah sekalipun saya dengar dukungan dari Bu Ratna Sarumpaet ke Pak Ahok. Seingat saya, nggak pernah tuh sekalipun saya melihat Bu Ratna Sarumpaet masuk bertamu ke Balai Kota. Banyak kok orang terkenal mampir ke Balai Kota, mampir ke ruangan gubernur,&quot; ujar Rian yang juga Jubir Partai Solidaritas Indonesia (PSI), Senin (8/10/2018). baca https://news.detik.com/berita/4247973/ratna-sarumpaet-disebut-ahokers-ini-kata-mantan-staf-ahok</p>\r\n', 'file_1539109109.jpeg', 'Niken Purnamasari - detikNews', '2018-10-09'),
(2, 'Gempa 3,8 SR Sempat Guncang Kendari', '<p>Badan Meteorologi klimatologi dan Geofisika (<a href="https://www.suara.com/tag/bmkg" rel="nofollow">BMKG</a>) menyatakan, telah terjadi <a href="https://www.suara.com/tag/gempa-bumi" rel="nofollow">gempa bumi</a> tektonik berkekuatan 3,8 SR yang mengguncang wilayah BaratLaut (<a href="https://www.suara.com/tag/kendari" rel="nofollow">Kendari</a>) - Sulawesi Tenggara pada hari Kamis (4/10/2018) malam.</p>\r\n\r\n<p>Kepala Stasiun Geofisika Kendari, Rosa Amelia, di Kendari, Kamis mengatakan hasil analisis BMKG menunjukan bahwa gempa terjadi pada pukul 23:19:31 wita dengan episenter 3.93 LS- 122.38 BT.</p>\r\n\r\n<p>&quot;Gempa terpusat sekitar 26.8 kilometer Barat laut Kendari- Sulawesi Tenggara berkekuatan M=3,8,&quot; katanya.</p>\r\n\r\n<p>Ia mengatakan, berdasarkan laporan masyarakat menunjukan bahwa dampak gempa bumi berupa goncangan keras dirasakan di wilayah Kendari dalam skala intensitas II SIG-BMKG (III MMI).</p>\r\n\r\n<p>&quot;Di daerah ini goncangan gempa bumi dilaporkan dirasakan oleh banyak orang,&quot; katanya.</p>\r\n\r\n<p>Dijelaskan, hasil koordinasi hingga saat laporan ini dibuat belum ada informasi adanya kerusakan akibat gempa bumi tersebut.</p>\r\n\r\n<p>&quot;Terkait dengan peristiwa gempabumi di wilayah Kendari ini, hingga laporan ini disusun pada pukul 00.30 wita, belum terjadi aktivitas gempabumi susulan. Masyarakat dihimbau agar tetap tenang,&quot; katanya.</p>\r\n\r\n<p>Ditinjau dari kedalamannya, kata Rosa, gempabumi ini merupakan gempabumi dangkal akibat aktivitas Sesar Kendari di wilayah Kendari-Sulawesi Tenggara.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'file_1539109349.jpg', ' Dythia Novianty', '2018-10-05'),
(3, '3 Bandar Narkoba Ditembak Mati', '<p>Tim gabungan narkoba Polda Sumsel dan Polresta Palembang menembak mati tiga gembong pengedar narkoba jenis sabu-sabu asal Kota <a href="https://www.suara.com/tag/kendari" rel="nofollow">Kendari</a>, <a href="https://www.suara.com/tag/sulawesi-tenggara" rel="nofollow">Sulawesi Tenggara</a>.</p>\r\n\r\n<p>Ketiganya yakni, Michael Ramon Rambang (30), Erwin Oron (26) dan Jonly Alvin Wowor (27). Polisi terpaksa menembak lantaran ketiganya berupaya kabur dari kejaran dan berusaha melawan polisi.</p>\r\n', 'file_1539109472.jpg', ' Ferry Noviandi', '2018-04-29'),
(4, 'Pembangunan Jembatan Teluk Kendari Ditargetkan Selesai Tahun 2018', '<p>Sekretaris Jenderal Kementerian Pekerjaan Umum dan Perumahan Rakyat (PUPR)Taufik Widjoyono mewakili Menteri PUPR, Basuki Hadimuljono meresmikan pembangunan awal &nbsp;(groundbreaking) <a href="https://www.suara.com/tag/jembatan-teluk-kendari" rel="nofollow">Jembatan Teluk Kendari</a>, Sulawesi Tenggara, Jumat (19/8/2016). Groundbreaking ditandai dengan penekanan tombol oleh Sekjen PUPR Taufik Widjoyono dan Gubernur Sulawesi Tenggara Nur Alam dan pemancangan tiang pondasi jembatan di tengah teluk kendari.</p>\r\n', 'file_1539109733.jpeg', ' Adhitya Himawan', '2016-08-21');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_pariwisata`
--

INSERT INTO `table_pariwisata` (`pariwisata_id`, `pariwisata_name`, `pariwisata_desc`, `pariwisata_image`) VALUES
(1, 'Pulau Labengki', '<p>Banyak yang berkata bahwa pulau ini tak kalah menarik jika dibandingkan dengan Raja Ampat yang ada di bumi Papua&mdash;baik dari panoramanya, maupun keindahan bawah lautnya. Ya, nama pulau ini adalah Pulau Labengki. Lokasinya terletak di Desa Labengki, Kecamatan Lasolo, Kabupaten Konawe Utara, Provinsi Sulawesi Tenggara. Kalau kamu berangkat dari pusat Kota Kendari, maka kamu harus menempuh jarak sekitar 70 km untuk sampai ke lokasi.</p>\r\n', 'file_1539110143.jpg'),
(2, 'Pulau Bokori', '<p>Pulau Bokori merupakan sebuah pulau kecil yang terletak di depan Tanjung Soropia, Kecamatan Soropia, Sulawesi Tenggara. Untuk mencapainya, kamu bisa memulai perjalanan dari pusat Kota Kendari dengan waktu tempuh sekitar 30 menit perjalanan menuju perkampungan Bajo, Kecamatan Sorobia. Setelah itu, kamu masih harus menyewa perahu nelayan. Waktu tempuhnya sekitar 3 jam perjalanan. Harga sewa per-perahu dipatok dengan harga Rp. 400.000,00 &ndash; Rp. 500.000,00 (kapasitas 15 orang penumpang).</p>\r\n', 'file_1539110183.jpg'),
(3, 'Pulau Senja', '<p>Lokasi Pulau Senja hanya berjarak sekitar 50 km dari pusat Kota Kendari, atau sekitar &nbsp;45 menit perjalanan dengan menggunakan kendaraan bermotor. Tepatnya berada di Desa Wawatu, Kabupaten Konawe Selatan, Provinsi Sulawesi Tenggara. Lokasinya yang tidak terlalu jauh dengan pusat kota menjadikan pulau ini begitu diminati para wisatawan. Sesampainya di lokasi, kamu akan disuguhi pemandangan pantai yang memukau, lengkap dengan tebing-tebing karang dan pepohonan yang tinggi menjulang. Setelah puas menikmati wilayah pantainya, kamu juga bisa menyusuri jalan setapak bebatuan untuk sampai ke Bukit Pulau Senja. Dari atas bukit ini kamu bisa melihat betapa eksotisnya Pulau Senja.</p>\r\n', 'file_1539110219.jpg'),
(4, 'Pulau Tomia', '<p>Pulau Tomia merupakan salah satu pulau yang terletak di gugusan kepulauan Tukang Besi wilayah Kabupaten Wakatobi, Kendari, Provinsi Sulawesi Tenggara. Pulau ini terletak di sebelah selatan Pulau Kaledupa dan di sebelah utara Pulau Binongko. Selain Pulau Tomia, kamu juga bisa menemukan beberapa pulau-pulau lainnya, antara lain: Pulau Kaledupa, Pulau Binongko, Pulau Wangi-wangi, Pulau Hoga, dan Pulau Kapota.</p>\r\n', 'file_1539110253.jpg'),
(5, 'Pantai Nirwana', '<p>Pantai Nirwana dikenal karena keindahan alamnya yang sangat memesona, sehingga membuat siapapun yang berkunjung ke pantai ini serasa berada di surga (nirwana). Lokasinya terletak di Kelurahan Sula, Kecamatan Betoambari, Bau-Bau, Buton, Provinsi Sulawesi Tenggara. Kalau kamu berangkat dari pusat Kota Bau-Bau, maka jarak yang akan kamu tempuh untuk mencapai lokasi sekitar 9 km, atau setara dengan 15 menit perjalanan.</p>\r\n', 'file_1539110288.jpg'),
(6, 'Danau Biru: Surga Tersembunyi di Kolaka Utara', '<p>Danau Biru terletak di Kecamatan Wolu, Kabupaten Kolaka Utara, Sulawesi Tenggara. Danau ini memiliki luas diameter sekitar 164 meter persegi. Uniknya lagi, air Danau Biru ini terdiri dari campuran antara air asin dan air tawar, atau sering disebut sebagai air payau. Untuk kedalamannya pun cukup bervariasi, mulai dari 1 meter, hingga yang terdalam mencapai 7 meter. Ohya, di sini kamu juga bisa melakukan kegiatan snorkeling dengan mengamati berbagai spesies ikan dan tumbuhan air. Tapi ingat, kegiatan ini hanya diperuntukkan buat kamu-kamu yang bisa berenang. Oke, untuk memasukinya objek wisata ini, kamu diharuskan membayar mahar sebesar Rp. 10.000,00 lengkap dengan biaya parkir kendaraan.</p>\r\n', 'file_1539110331.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_perangkat`
--

INSERT INTO `table_perangkat` (`perangkat_id`, `perangkat_name`, `perangkat_text`, `perangkat_place`, `perangkat_date`, `perangkat_sk`, `perangkat_image`) VALUES
(20, 'PIRDAUS', 'Kepala Desa', 'Munse', '1972-11-20', '05 Tahun 2005 Tahun 2018', 'file_1538667612.jpeg'),
(22, 'HARUMIN', 'Sekretaris Desa', 'Munse', '1976-05-10', '05 Tahun 2018', 'file_1539108015.jpg'),
(23, 'MUAMAL, B', 'Kepala Dusun I', 'Munse', '1991-08-07', '05 Tahun 2018', 'blank.jpg'),
(24, 'AMAL HUDHA', 'Kepala Dusun II', 'Munse', '1988-02-10', '05 Tahun 2018', 'blank.jpg'),
(25, 'ARISMAN, A', 'Kepala Dusun III', 'Munse ', '1993-04-09', '05 Tahun 2018', 'blank.jpg'),
(26, 'HAERUDDIN', 'Kaur Keuangan', 'Munse', '1988-07-18', '05 Tahun 2018', 'blank.jpg'),
(27, 'MUH. DONG', 'Kaur Tata Usaha Dan Umum', 'Munse', '1980-08-09', '05 Tahun 2018', 'blank.jpg'),
(28, 'AJAD SUDRAJAD', 'Kaur  Perencanaan', 'Munse', '1990-11-05', '05 Tahun 2018', 'blank.jpg'),
(29, 'DIMAS ADRIANTO', 'Kepala Seksi Pemerintahan', 'Munse', '1989-01-03', '05 Tahun 2018', 'blank.jpg'),
(30, 'UMRIAH', 'Kepala Seksi Pelayanan', 'Munse ', '1972-03-11', '05 Tahun 2018', 'blank.jpg'),
(31, 'ST. DARMINA', 'Kepala Seksi Kesejahteraan', 'Munse', '1980-11-10', '05 Tahun 2018', 'blank.jpg'),
(32, 'ST. SAMRA', 'Guru TPQ', 'Munse', '1971-07-10', '05 Tahun 2018', 'blank.jpg'),
(33, 'MANSYUR, A', 'Bonto', 'Waworope', '1951-04-07', '05 Tahun 2018', 'blank.jpg'),
(34, 'SIRAJUDDIN', 'Imam Desa', 'Munse', '1952-05-05', '05 Tahun 2018', 'blank.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_potency`
--

CREATE TABLE IF NOT EXISTS `table_potency` (
  `potensi_id` int(11) NOT NULL,
  `potensi_name` varchar(200) NOT NULL,
  `potensi_desc` text NOT NULL,
  `potensi_image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_potency`
--

INSERT INTO `table_potency` (`potensi_id`, `potensi_name`, `potensi_desc`, `potensi_image`) VALUES
(1, 'Melihat arah pembangunan Kota Kendari', '<p>Kendari adalah ibu kota provinsi sulawesi tenggara. Dengan luas wilayah 296,00 km&sup2; dan jumlah penduduk sebanyak 289,709 jiwa, kota kendari menduduki urutan ke 63 dalam hal kepadatan penduduk dari 93 kota di Indonesia versi wikipedia. Namun menurut saya, walaupun kota kendari masih belum terlalu terjamah oleh euphoria kota kota besar, kota ini harus mempersiapkan diri mau dibawa kemana arah pembangunannya. <a class="more-link" href="https://isikepalakachfi.wordpress.com/2017/03/17/melihat-arah-pembangunan-kota-kendari/#more-515">Continue reading </a></p>\r\n', 'file_1539109882.jpg'),
(2, 'Kendari miliki potensi usaha pengolahan ikan', '<h1>Kendari miliki potensi usaha pengolahan ikan</h1>\r\n', 'file_1539109965.jpg'),
(3, 'Pemuda Kota Kendari', '<p><span style="font-family:&quot;georgia&quot;,&quot;times new roman&quot;,serif">Potensi pemuda Kota Kendari cukup tingga mencapai 117.285 jiwa atau 33,75% dari total jumlah penduduk. Rincian lihat tabel dibawah. Untuk itu dibutuhkan program kerja untuk membina karakter soft skill dan life skill pemuda, agar menjadikan manusia yang sehat, cerdas dan produktif kedepan. Setidaknya pemerintah mampu mencetak pemuda yang siap bersaing secara nasional maupun international. Kalau tidak ada program untuk peningkatan kemampuan pemuda, maka pengangguran baru akan tercipta lebih banyak lagi 5 tahun kedepan. </span></p>\r\n', 'file_1539110015.jpg');

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
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `table_newscategory`
--
ALTER TABLE `table_newscategory`
  MODIFY `newscategory_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_pariwisata`
--
ALTER TABLE `table_pariwisata`
  MODIFY `pariwisata_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
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
  MODIFY `perangkat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `table_potency`
--
ALTER TABLE `table_potency`
  MODIFY `potensi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
