-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 06:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id`, `judul`, `isi`, `tanggal`, `foto`, `id_kategori`) VALUES
(12, 'Upacara Hari Pahlawan Tahun 20189', '									<p>Marilah kita panjatkan puji dan syukur kehadirat Allah SWT-Tuhan Yang Maha Esa, karena atas limpahan rahmat dan karunia-Nya, bangsa Indonesia pada hari ini memperingati Hari Pahlawan Tahun 2018.</p><p>Setiap tahun pada tanggal 10 Nopember, bangsa Indonesia memperingati Hari Pahlawan untuk mengenang peristiwa pertempuran di Surabaya pada 73 tahun silam yang merupakan perang fisik pertama setelah bangsa Indonesia menyatakan kemerdekaannya.</p><p>Di bulan Nopember ingatan kolektif bangsa akan tertuju pada keberanian, semangat pantang menyerah serta pengorbanan tanpa pamrih para pahlawan yang telah gugur mendahului kita. Para syuhada bangsa tersebut telah mewariskan Negara Kesatuan Republik Indonesia yang berdiri kokoh sampai saat ini dan untuk selamanya.</p><p> </p><p><strong>Saudara sebangsa dan setanah air</strong></p><p>Prosesi peringatan Hari Pahlawan khususnya Upacara Pengibaran Bendera Merah Putih serta mengheningkan Cipta Secara Serantak Selama 60 Detik seperti yang saat ini kita lakukan, juga dilaksanakan di seluruh pelosok tanah air, bahkan di Perwakilan Negara Republik Indonesia di luar negeri. Seluruh rangkaian kegiatan peringatan Hari Pahlawan tersebut bertujuan untuk memperkuat nilai-nilai kepahlawanan, mempertebal rasa cinta tanah air dan meneguhkan semangat pengabdian bagi bangsa dan Negara di hati sanubari bangsa Indonesia.</p><p>Peringatan Hari Pahlawan bukan semata sebuah acara namun harus sarat makna, bukan hanya sebagai prosesi namun substansi setiap peringatan Hari Pahlawan harus dapat menggali dan memunculkan semangat baru dalam implementasi nilai-nilai kepahlawanan dalam kehidupan sehari-hari. Hal ini penting karena nilai kepahlawanan bukan bersifat statis namun dinamis, bisa menguat bahkan dapat melemah. Untuk itu, kiranya seluruh rangkaian kegiatan peringatan Hari Pahlawan harus menjadi energi dan semangat baru mewarisi nilai kejuangan dan patriotisme dalam membangun bangsa Indonesia.</p><p> </p><p><strong>Hadirin Sekalian</strong></p><p>Peringatan Hari Pahlawan, menjadi momentum bagi bangsa Indonesia untuk melakukan introspeksi diri. Sampai seberapa jauh setiap komponen bangsa dapat mewarisi nilai-nilai kepahlawanan, melanjutkan perjuangan, mengisi kemerdekaan demi mencapai Negara Kesatuan Republik Indonesia yang sejahtera, adil dan makmur.</p><p>Pada hakekatnya setiap perjuangan pasti ada hasilnya namun tidak ada kata akhir/berhenti untuk berjuang. Setiap etape perjuangan berlanjut pada etape perjuangan berikutnya sesuai tuntutan lingkungan strategis. Oleh karenanya peringatan Hari Pahlawan harus melahirkan ide dan gagasan mentransformasikan semangat pahlawan menjadi keuletan dalam melaksanakan pembangunan. Mentransformasikan keberanian melawan penjajah menjadi inspirasi mengusir musuh bersama bangsa saat ini antara lain kemiskinan. Selanjutnya transformasi kecerdikan para pahlawan dalam mengatur strategi, menjadikan inspirasi rakyat Indonesia untuk melakukan inovasi cerdas memperkuat daya saing bangsa dalam pergaulan dunia.</p><p> </p><p><strong>Hadirin yang berbahagia</strong></p><p>Setiap zaman pasti ada pahlawannya dan setiap pahlawan pasti berkiprah di eranya. Terkait dengan hal tersebut, bangsa Indonesia memerlukan pahlawan baru. Indonesia saat ini membutuhkan sosok yang berdedikasi dan berprestasi pada bidangnya untuk memajukan negeri.</p><p>Terlebih lagi dibutuhkan sosok pemuda Indonesia sebagai generasi penerus yang mempunyai jiwa patriotisme, pantang menyerah, berdisiplin, berkarakter menguasai ilmu pegetahuan dan keterampilandi bidangnya. Sadar bahwa negerinya memiliki beragam agama, suku, adat istiadat namun mampu memanfaatkan keberagaman sebagai modal sosial dipergunakan untuk keunggulan Indonesia dalam pergaulan dunia. Bukan justru untuk memanfaatkan perbedaan demi kepentingan pribadi maupun golongan yang menjadi penghambat bagi kemajuan Indonesia.</p><p>Negeri ini membutuhkan pemuda yang kokoh dengan jati dirinya, mempunyai karakter lokal yang luhur, percaya diri dan peka terhadap permasalahan sosial sehingga mampu terlibat dalam usaha-usaha kesejahteraan sosial, memberikan pelayanan sosial bagi mereka yang membutuhkan pertolongan sosial.</p><p>Negeri ini juga membutuhkan pemuda yang mempunyai pandangan global, mampu berkolaborasi untuk kemajuan bangsa dan mampu memanfaatkan kemajuan teknologi untuk menjadikan Indonesia diperhitungkan dalam bersaing dan bersanding dengan Negara lain khususnya ketika negeri ini memasuki era revolusi industri 4.0.</p><p>Pada akhirnya melalui momentum Peringatan Hari Pahlawan, saya mengajak marilah kita berbuat yang terbaik bagi bangsa ini. Mari berkontribusi bagi kemajuan bangsa. Mulai dari yang dapat kita lakukan, mulai dari lingkungan terdekat yang pada akhirnya memberikan kekuatan dan ketahanan bagi bangsa dan Negara.</p>								', '2020-01-10', '20200110-upacara-hari-pahlawan-tahun-2018.jpg', 10),
(13, 'Seleksi Calon Siswa UT School Angkatan 26, 27 dan 28 Tahun 2019', '<p>UT School bekerjasama dengan SMK Negeri 1 Wanareja akan melaksanakan seleksi Calon Siswa UT School Angkatan 26, 27 dan 28 pada awal tahun 2019 nanti.</p><p>Kesempatan ini terbuka untuk umum baik Alumni SMK Negeri 1 Wanareja maupun dari sekolah lain boleh mengikuti asalkan memenuhi kriteria yang dipersyaratkan.</p><p>Tentang UT School :</p><ul><li><p>Visi</p><p>Menjadi lembaga pendidikan keterampilan mekanik dan operator alat &ndash; alat berat terbaik di dunia.</p></li><li><p>Misi</p><ul><li>Menciptakan sumberdaya manusia yang berkualitas, profesional dan berwawasan internasional.</li><li>Menjadi sumber IPTEK terapan.</li><li>Menciptakan jaringan yang luas dengan industri &ndash; industri didalam dan di luar negeri</li></ul></li><li><p>Tujuan</p><ul><li>Menciptakan tenaga terampil di bidang mekanik, operator dan instruktur alat berat profesional yang siap karya dan siap latih.</li><li>Menjadi lembaga pendidikan keterampilan mekanik terbaik di dunia.</li><li>Turut serta untuk mencerdaskan kehidupan bangsa.</li></ul></li><li><p>Nilai</p><ul><li>Integritas (integrity)</li><li>Santun (Good Manners)</li><li>Berani (Courageous)</li></ul></li></ul><p>============================================</p><ol><li>UT SCHOOL membuka kelas angkatan 26 tahun ajaran 2019/2020&nbsp;<strong>Prodi MEKANIK ALAT BERAT</strong>&nbsp;untuk alumni SMK/SMA tahun 2016/2017/2018 jurusan TKR/TSM/TAB, Mesin Produksi, Listrik Arus Kuat (TITL) dan IPA.</li></ol><ol><li>UT SCHOOL membuka kelas angkatan 27 dan 28 tahun ajaran 2019/2020/2021 Prodi&nbsp;<strong>MEKANIK DAN OPERATOR ALAT BERAT</strong>&nbsp;untuk siswa SMK/SMA yang masih duduk di kelas 3&nbsp; jurusan TKR/TSM/TAB, Mesin Produksi, Listrik Arus Kuat (TITL) dan IPA.</li></ol><p>Dengan kriteria jenis kelamin laki-laki, tinggi badan minimum 164 CM, Tidak berkacamata, Tidak Bertato, Tidak Butawarna, Tidak Bertindik serta Sehat Jasmani dan Rohani.</p><p>Waktu Pendaftaran mulai Sekarang sampai dengan akhir Desember 2018</p><p>Tempat Pendaftaran di BKK SMK Negeri 1 Wanareja</p><p><strong>Pelaksanaan test adalah:</strong></p><ul><li>Hari, tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Senin dan Selasa, 14 dan 15 Januari 2019</li><li>Waktu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 07.30 sampai selesai</li><li>Tempat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Aula SMK Negeri 1 Wanareja</li><li>Yang berminat bisa langsung mengisi Formulir disini&nbsp;<a target=\"_blank\" href=\"https://goo.gl/rsWEUv\">https://goo.gl/rsWEUv</a></li></ul><p>Demikian info dari BKK Mandiri SMK Negeri 1 Wanareja. Semoga informasi ini bermanfaat. Jangan lupa share melalui sosial media kepada sahabat, kerabat atau teman yang membutuhkan.</p>', '2020-01-10', '20200110-seleksi-calon-siswa-ut-school-angkatan-26,-27-dan-28-tahun-2019.jpg', 3),
(14, 'Belajar Sehari Di Luar Kelas', '<p>Menindaklanjuti Surat dari Cabang Dinas Pendidikan Wilayah X Pemerintah Provinsi Jawa Tengah nomor : 427/01520/XI/2019 dan Surat dari Dinas Pemberdayaan Perempuan, Perlindungan Anak dan Keluarga Berencana nomor : 421.7/35551 Tanggal 31 Oktober 2019 hal Pelaksanaan Sehari Belajar di Luar Kelas bahwa merupakan salah satu bentuk pengembangan Sekolah Ramah Anak.</p><p>Pada hari kamis, 7 November 2019 SMK Negeri 1 Wanareja melaksanakan Belajar sehari di luar kelas dengan urutan acara sebagai berikut :</p><ul><li>Menyambut siswa yang datang ke sekolah dengan senyum, sapa, salam. Kegiatan ini bertujuan untuk menanamkan Penguatan Pendidikan Karakter (PPK).</li><li>Apel Pagi bersama tim &amp; siswa Menyanyikan lagu Indonesia Raya (3 stanza).</li><li>Seluruh warga sekolah menyanyikan lagu Indonesia Raya 3 stanza dengan sikap siap sempurna.</li><li>Siswa diajak untuk melaksanakan cuci tangan sebelum makan. Kegiatan ini bertujuan untuk membiasakan Prilaku Hidup Bersih dan Sehat (PHBS).</li><li>Berdoa bersama sebelum makan dilakukan untuk meningkatkan keimanan dan ketakwaan terhadap Tuhan Yang Maha Esa Sarapan bersama, siswa memakan sarapan sehat yang disiapkan oleh orangtua masing-masing.</li><li>Berdoa setelah makan.</li><li>Cuci tangan setelah makan.</li><li>Siswa diajak untuk memeriksa lingkungan sekolah. Tanaman, barang, atau hal-hal yang membahayakan anak agar disingkirkan.</li><li>Memeriksa lampu, peralatan listrik, dan kran air. Jika tidak dipakai, agar dimatikan untuk menghemat energi.</li><li>Melaksanakan kegiatan membaca buku di luar kelas selama 15 menit untuk meningkatkan gerakan literasi sekolah (GLS).</li><li>Melaksanakan simulasi evakuasi bencana melalui lagu dan gerak selama 10 menit. Melaksanakan senam germas selama 5 menit.</li><li>Siswa diajak melaksanakan permainan tradisional selama 45 menit. Permainan ini disesuaikan dengan masing-masing daerah.</li><li>Melakukan tepuk hak anak dan yel-yel sekolah ramah anak selama 7 menit.</li><li>Melakukan deklarasi sekolah ramah anak selama 5 menit Pelantikan Tim Sekolah Ramah Anak selama 5 menit.</li><li>Masing-masing sekolah diharapkan membentuk Tim Sekolah Ramah Anak Kegiatan akhir yaitu penutupan.</li><li>Seluruh siswa diajak menyanyikan lagu Maju Tak Gentar (5 menit).</li></ul>', '2020-01-10', '20200110-belajar-sehari-di-luar-kelas.jpg', 3),
(20, 'Latihan Dasar Kepemimpinan (LDK)', '																		<p>Pengurus Osis SMA Darul Ulum Laren 2021/2022\r\nProgram LDK Ini Adalah program tahunan yang wajib  diikuti oleh pengurus osis, dengan kegiatan LDK ini diharapkan tumbuh kesadaran dan kemandirian serta jiwa kepemimpinan. Tidak bisa dipungkiri masih banyak siswa yang selalu bergantung pada orang tuanya, mulai dari hal kecil yang sebenarnya bisa dilakukan oleh siswa itu sendiri. Kebiasaan yang seperti itu sangat tidak baik jika terus menerus dibiarkan. Oleh karna itu Pembina dan pengurus OSIS SMADAR mengadakan kegiatan “Latihan Dasar Kepemimpinan(LDK)” \r\nKegiatan ini berbentuk pelatihan dan pemberian materi kepada seluruh pengurus OSIS priode 2021/2022. Pada tanggal 25-26 september 2021. Lokasi kegiatan dilakukan di pantai panyuran, Kec. Palang, Kabupaten Tuban, Jawa Timur.\r\nPeserta yang mengikuti kegiatan ini adalah seluruh pengurus OSIS SMADAR, serta panitia, guru dan Pembina Exstrakulikuler. Setiap peserta wajib mematuhi seluruh peraturan dan perintah yang telah ditetapkan oleh panitia penyelenggara kegiatan.kegiatan  yang dilakukan oleh peserta  yakni outbond, permainan-permainan yang memiliki nilai kepemimpinan serta materi-materi yang berbau  kepemimpinan dan kemandirian.\r\nHarapan setelah mengikuti  kegiatan LDK ini siswa tidak hanya mahir dalam bidang kepemimpinan organisasi tetapi juga mahir dalam memimpin diri serta menumbuhkan kesadaran tanggung jawap sebagai siswa dan terhadap diri sendiri.\r\n																', '2022-09-01', '20220901-latihan-dasar-kepemimpinan-(ldk).JPG', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bukutamu`
--

CREATE TABLE `tbl_bukutamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(80) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bukutamu`
--

INSERT INTO `tbl_bukutamu` (`id`, `nama`, `email`, `isi`) VALUES
(3, 'Fakhrul Fanani Nugroho', 'fakhrulnugroho@gmail.com', 'Websitenya sangat bagus dan menarik!');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ekskul`
--

CREATE TABLE `tbl_ekskul` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `foto` varchar(110) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ekskul`
--

INSERT INTO `tbl_ekskul` (`id`, `nama`, `foto`) VALUES
(10, 'Pramuka', 'pramuka.JPG'),
(13, 'Voli', 'voli.jpg'),
(14, 'Banjari', 'banjari.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT current_timestamp(),
  `foto` varchar(100) DEFAULT NULL,
  `foto1` varchar(120) DEFAULT NULL,
  `foto2` varchar(120) DEFAULT NULL,
  `foto3` varchar(120) DEFAULT NULL,
  `foto4` varchar(120) DEFAULT NULL,
  `foto5` varchar(120) DEFAULT NULL,
  `foto6` varchar(120) DEFAULT NULL,
  `foto7` varchar(120) DEFAULT NULL,
  `foto8` varchar(120) DEFAULT NULL,
  `foto9` varchar(120) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id`, `tanggal`, `foto`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `foto6`, `foto7`, `foto8`, `foto9`, `id_kategori`) VALUES
(48, '0000-00-00', '1631021ce62d94-.JPG', '1631021ce62d94.1-.JPG', '1631021ce62d94.2-.JPG', '1631021ce62d94.3-.JPG', '1631021ce62d94.4-.JPG', '1631021ce62d94.5-.JPG', '1631021ce62d94.6-.JPG', '1631021ce62d94.7-.JPG', '1631021ce62d94.8-.JPG', '1631021ce62d94.9-.JPG', 14),
(49, '0000-00-00', '1631023ef63ce5-.JPG', '1631023ef63ce5.1-.JPG', '1631023ef63ce5.2-.JPG', '1631023ef63ce5.3-.JPG', '1631023ef63ce5.4-.JPG', '1631023ef63ce5.5-.JPG', '1631023ef63ce5.6-.JPG', '1631023ef63ce5.7-.JPG', '1631023ef63ce5.8-.JPG', '1631023ef63ce5.9-.JPG', 15),
(50, '0000-00-00', '16310245772062-.JPG', '16310245772062.1-.JPG', '16310245772062.2-.JPG', '16310245772062.3-.JPG', '16310245772062.4-.JPG', '16310245772062.5-.JPG', '16310245772062.6-.JPG', '16310245772062.7-.JPG', '16310245772062.8-.JPG', '16310245772062.9-.JPG', 16),
(51, '0000-00-00', '1631024b87e109-.JPG', '1631024b87e109.1-.JPG', '1631024b87e109.2-.JPG', '1631024b87e109.3-.JPG', '1631024b87e109.4-.JPG', '1631024b87e109.5-.JPG', '1631024b87e109.6-.JPG', '1631024b87e109.7-.JPG', '1631024b87e109.8-.JPG', '1631024b87e109.9-.JPG', 17);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nip` int(10) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `mata_pelajaran` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id`, `nama`, `nip`, `jenis_kelamin`, `no_hp`, `tempat_lahir`, `tanggal_lahir`, `mata_pelajaran`, `alamat`, `foto`) VALUES
(24, 'A', 123, 'L', '123', 'A', '2022-08-09', 'A', 'A', 'a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_galeri`
--

CREATE TABLE `tbl_kategori_galeri` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori_galeri`
--

INSERT INTO `tbl_kategori_galeri` (`id`, `nama_kategori`) VALUES
(14, 'Kunjungan Industri - Batik'),
(15, 'Kemah Pantai Kelapa'),
(16, 'LDK'),
(17, 'Persida');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id`, `nama`, `username`, `password`, `foto`) VALUES
(3, 'Administrator', 'admin', '$2y$10$9uAKnax9/7HoMVtMFWDUEe6GhtWdq5SIn75AWwHnYboKctXCfybVG', 'administrator.jpg'),
(4, 'Fathur', 'fathur', '$2y$10$Vq7q6K6OkmJPFpLUxR37Au9h609U9x6u0dK6.Xv/gRPLEhiBjP7nO', 'fathur.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_bukutamu`
--
ALTER TABLE `tbl_bukutamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ekskul`
--
ALTER TABLE `tbl_ekskul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kategori_galeri`
--
ALTER TABLE `tbl_kategori_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_bukutamu`
--
ALTER TABLE `tbl_bukutamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_ekskul`
--
ALTER TABLE `tbl_ekskul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_kategori_galeri`
--
ALTER TABLE `tbl_kategori_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD CONSTRAINT `tbl_artikel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori_artikel` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD CONSTRAINT `tbl_galeri_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori_galeri` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
