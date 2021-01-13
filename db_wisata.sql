-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 08:37 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `daerah`
--

CREATE TABLE `daerah` (
  `id` int(10) UNSIGNED NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daerah`
--

INSERT INTO `daerah` (`id`, `kecamatan`, `kabupaten`, `provinsi`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Pelabuhan Ratu', 'Sukabumi', 'Jawa Barat', NULL, '2021-01-04 19:44:02', '2021-01-04 19:44:02'),
(2, 'Borobudur', 'Magelang', 'Jawa Tengah', NULL, '2021-01-04 21:18:28', '2021-01-04 22:22:10'),
(3, 'Prambanan', 'Sleman', 'Jawa Tengah', '2021-01-05 03:20:54', '2021-01-04 21:18:41', '2021-01-05 03:20:54'),
(4, 'Kretek', 'Bantul', 'D.I Yogyakarta', NULL, '2021-01-04 21:52:59', '2021-01-04 21:52:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri_wisata`
--

CREATE TABLE `galeri_wisata` (
  `id` int(10) UNSIGNED NOT NULL,
  `wisata_id` int(11) NOT NULL,
  `url_foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` int(10) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri_wisata`
--

INSERT INTO `galeri_wisata` (`id`, `wisata_id`, `url_foto`, `is_default`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 7, 'assets/foto-wisata/M4aQ1iuseuq6XopxU5Kb9izKqgC9ggdgnzK1ZTJJ.jpg', 1, '2021-01-08 11:58:59', '2021-01-07 13:20:52', '2021-01-08 11:58:59'),
(2, 7, 'assets/foto-wisata/A9pOzciC6gRUdHk0zQJRK47YWNCpwPTC76ySiOXi.jpg', 0, '2021-01-08 11:58:59', '2021-01-08 10:42:53', '2021-01-08 11:58:59'),
(3, 9, 'assets/foto-wisata/EICxgB6e5LsjeGvVJsm8AfXxOh9GCEmduOcthdFj.jpg', 1, '2021-01-08 11:59:19', '2021-01-08 11:58:13', '2021-01-08 11:59:19'),
(4, 8, 'assets/foto-wisata/DQ1cyDSjmddBqFVIike0iXt3qV0TezCvWOmpP8RQ.png', 1, '2021-01-08 11:59:30', '2021-01-08 11:58:51', '2021-01-08 11:59:30'),
(5, 10, 'assets/foto-wisata/U19iUL7Z8Mh39jYgL4TckhQ5gCoinP87VjeUS1PJ.jpg', 1, NULL, '2021-01-08 12:00:25', '2021-01-08 12:00:25'),
(6, 10, 'assets/foto-wisata/ZDB6Li1fYbkGuAfmxodkNtNLP1gm8ooQ3tuNoMMh.jpg', 0, NULL, '2021-01-11 12:43:28', '2021-01-11 12:43:28'),
(7, 11, 'assets/foto-wisata/bLG88PaubJtA58D3RorQXY11HAowsl2gO71yFw7l.jpg', 1, NULL, '2021-01-11 12:58:49', '2021-01-11 12:58:49'),
(8, 11, 'assets/foto-wisata/VYmF91R8McFnkzt2Ge0CHn0LqiUovD4J9YL9LQD2.jpg', 0, NULL, '2021-01-11 12:59:03', '2021-01-11 12:59:03'),
(9, 12, 'assets/foto-wisata/F4WNTMrTLKHcqB4HfDUY2zvmKhUW4Qv17qAR7vzt.jpg', 1, NULL, '2021-01-11 13:09:47', '2021-01-11 13:09:47'),
(10, 13, 'assets/foto-wisata/BHJlqvyip0BaWJS0qhyJBAiHN9avEFOhDq2CmkFS.jpg', 1, NULL, '2021-01-11 13:19:10', '2021-01-11 13:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_03_065855_create_daerah_table', 1),
(5, '2021_01_03_191244_create_wisata_table', 1),
(6, '2021_01_03_201411_create_galeri_wisata_table', 1),
(7, '2021_01_05_140649_add_and_remove_column_from_wisata', 2),
(8, '2021_01_05_141802_add_column_jenis_wisata', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('jefriap28@gmail.com', '$2y$10$uXeD7hqLjqJGuINFwxwv9esUV/OvFke1Wdj12U/x5Rj963lXGipeG', '2021-01-04 01:38:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jefri Arnanda Putro', 'jefriap28@gmail.com', NULL, '$2y$10$TkL9QCh2toqYdlHKk/Q6Tuji5mBDIazPkWFqYh6vnRr2JBDSPwI6i', 'TyOMXMIxlK2rEzUnjemU572iMi1VaMXKvsw5N95JSl8zG6hvwLJnV3vr2nz3', '2021-01-03 14:40:25', '2021-01-03 14:40:25'),
(2, 'Alfirdan Ripani', 'alfirdan.ripani@trilogi.ac.id', NULL, '$2y$10$YaV417gWKws5OR5F2YtJyupj9RSLRW0UbTpiHVd/9tEmk2feexExO', NULL, '2021-01-04 01:37:32', '2021-01-04 01:37:32');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama_wisata`, `slug`, `deskripsi`, `kategori`, `kecamatan`, `kabupaten`, `provinsi`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, 'Candi Prambanan', 'candi-prambanan', 'Candi Prambanan atau Candi Roro Jonggrang (bahasa Jawa: ꦕꦤ꧀ꦝꦶꦥꦿꦩ꧀ꦧꦤꦤ꧀, translit. Candhi Prambanan) adalah kompleks candi Hindu terbesar di Indonesia yang dibangun pada abad ke-9 masehi. Candi ini dipersembahkan untuk Trimurti, tiga dewa utama Hindu yaitu Brahma sebagai dewa pencipta, Wisnu sebagai dewa pemelihara, dan Siwa sebagai dewa pemusnah. Berdasarkan prasasti Siwagrha nama asli kompleks candi ini adalah Siwagrha (bahasa Sanskerta yang bermakna \'Rumah Siwa\'), dan memang di garbagriha (ruang utama) candi ini bersemayam arca Siwa Mahadewa setinggi tiga meter yang menujukkan bahwa di candi ini dewa Siwa lebih diutamakan.\r\n\r\nKompleks candi ini terletak di kecamatan Prambanan, Sleman, DI Yogyakarta dan kecamatan Prambanan, Kabupaten Klaten, Jawa Tengah kurang lebih 17 kilometer timur laut Yogyakarta, 50 kilometer barat daya Surakarta dan 120 kilometer selatan Semarang, persis di perbatasan antara provinsi Jawa Tengah dan Daerah Istimewa Yogyakarta. Letaknya sangat unik, Candi Prambanan terletak di wilayah administrasi desa Bokoharjo, Prambanan, Sleman, sedangkan pintu masuk kompleks Candi Prambanan terletak di wilayah adminstrasi desa Tlogo, Prambanan, Klaten.\r\n\r\nCandi ini adalah termasuk Situs Warisan Dunia UNESCO, candi Hindu terbesar di Indonesia, sekaligus salah satu candi terindah di Asia Tenggara. Arsitektur bangunan ini berbentuk tinggi dan ramping sesuai dengan arsitektur Hindu pada umumnya dengan candi Siwa sebagai candi utama memiliki ketinggian mencapai 47 meter menjulang di tengah kompleks gugusan candi-candi yang lebih kecil. Sebagai salah satu candi termegah di Asia Tenggara, candi Prambanan menjadi daya tarik kunjungan wisatawan dari seluruh dunia.\r\n\r\nMenurut prasasti Siwagrha, candi ini mulai dibangun pada sekitar tahun 850 masehi oleh Rakai Pikatan, dan terus dikembangkan dan diperluas oleh Balitung Maha Sambu, pada masa kerajaan Medang Mataram.', 'Candi', 'Prambanan', 'Sleman', 'D.I Yogyakarta', '2021-01-08 11:58:59', '2021-01-06 15:18:00', '2021-01-08 11:58:59'),
(8, 'Pantai Pelabuhan Ratu', 'pantai-pelabuhan-ratu', 'Ini adalah wisata pantai yang terdapat di Provinsi Banten', 'Pantai', 'Pelabuhan Ratu', 'Sukabumi', 'Banten', '2021-01-08 11:59:30', '2021-01-07 01:15:31', '2021-01-08 11:59:30'),
(9, 'Candi  Borobudur', 'candi-borobudur', 'Borobudur (bahasa Jawa: ꦕꦤ꧀ꦝꦶꦧꦫꦧꦸꦝꦸꦂ, translit. Candhi Barabudhur) adalah sebuah candi Buddha yang terletak di Borobudur, Magelang, Jawa Tengah, Indonesia. Candi ini terletak kurang lebih 100 km di sebelah barat daya Semarang, 86 km di sebelah barat Surakarta, dan 40 km di sebelah barat laut Yogyakarta. Candi berbentuk stupa ini didirikan oleh para penganut agama Buddha Mahayana sekitar tahun 800-an Masehi pada masa pemerintahan wangsa Syailendra. Borobudur adalah candi atau kuil Buddha terbesar di dunia, sekaligus salah satu monumen Buddha terbesar di dunia.\r\n\r\nMonumen ini terdiri atas enam teras berbentuk bujur sangkar yang di atasnya terdapat tiga pelataran melingkar, pada dindingnya dihiasi dengan 2.672 panel relief dan aslinya terdapat 504 arca Buddha. Borobudur memiliki koleksi relief Buddha terlengkap dan terbanyak di dunia. Stupa utama terbesar teletak di tengah sekaligus memahkotai bangunan ini, dikelilingi oleh tiga barisan melingkar 72 stupa berlubang yang di dalamnya terdapat arca Buddha tengah duduk bersila dalam posisi teratai sempurna dengan mudra (sikap tangan) Dharmachakra mudra (memutar roda dharma).\r\n\r\nMonumen ini merupakan model alam semesta dan dibangun sebagai tempat suci untuk memuliakan Buddha sekaligus berfungsi sebagai tempat ziarah untuk menuntun umat manusia beralih dari alam nafsu duniawi menuju pencerahan dan kebijaksanaan sesuai ajaran Buddha. Para peziarah masuk melalui sisi timur dan memulai ritual di dasar candi dengan berjalan melingkari bangunan suci ini searah jarum jam, sambil terus naik ke undakan berikutnya melalui tiga tingkatan ranah dalam kosmologi Buddha. Ketiga tingkatan itu adalah Kāmadhātu (ranah hawa nafsu), Rupadhatu (ranah berwujud), dan Arupadhatu (ranah tak berwujud). Dalam perjalanannya para peziarah berjalan melalui serangkaian lorong dan tangga dengan menyaksikan tak kurang dari 1.460 panel relief indah yang terukir pada dinding dan pagar langkan.\r\n\r\nMenurut bukti-bukti sejarah, Borobudur ditinggalkan pada abad ke-14 seiring melemahnya pengaruh kerajaan Hindu dan Buddha di Jawa serta mulai masuknya pengaruh Islam. Dunia mulai menyadari keberadaan bangunan ini sejak ditemukan 1814 oleh Sir Thomas Stamford Raffles, yang saat itu menjabat sebagai Gubernur Jenderal Inggris atas Jawa. Sejak saat itu Borobudur telah mengalami serangkaian upaya penyelamatan dan pemugaran (perbaikan kembali). Proyek pemugaran terbesar digelar pada kurun waktu 1975 hingga 1982 atas upaya Pemerintah Republik Indonesia dan UNESCO, kemudian situs bersejarah ini masuk dalam daftar Situs Warisan Dunia.\r\n\r\nBorobudur kini masih digunakan sebagai tempat ziarah keagamaan; tiap tahun umat Buddha yang datang dari seluruh Indonesia dan mancanegara berkumpul di Borobudur untuk memperingati Trisuci Waisak. Dalam dunia pariwisata, Borobudur adalah objek wisata tunggal di Indonesia yang paling banyak dikunjungi wisatawan.', 'Candi', 'Borobudur', 'Magelang', 'Jawa Tengah', '2021-01-08 11:59:19', '2021-01-07 12:31:04', '2021-01-08 11:59:19'),
(10, 'Candi Prambanan', 'candi-prambanan', 'Candi Prambanan atau Candi Roro Jonggrang (bahasa Jawa: ꦕꦤ꧀ꦝꦶꦥꦿꦩ꧀ꦧꦤꦤ꧀, translit. Candhi Prambanan) adalah kompleks candi Hindu terbesar di Indonesia yang dibangun pada abad ke-9 masehi. Candi ini dipersembahkan untuk Trimurti, tiga dewa utama Hindu yaitu Brahma sebagai dewa pencipta, Wisnu sebagai dewa pemelihara, dan Siwa sebagai dewa pemusnah. Berdasarkan prasasti Siwagrha nama asli kompleks candi ini adalah Siwagrha (bahasa Sanskerta yang bermakna \'Rumah Siwa\'), dan memang di garbagriha (ruang utama) candi ini bersemayam arca Siwa Mahadewa setinggi tiga meter yang menujukkan bahwa di candi ini dewa Siwa lebih diutamakan.\r\n\r\nKompleks candi ini terletak di kecamatan Prambanan, Sleman, DI Yogyakarta dan kecamatan Prambanan, Kabupaten Klaten, Jawa Tengah kurang lebih 17 kilometer timur laut Yogyakarta, 50 kilometer barat daya Surakarta dan 120 kilometer selatan Semarang, persis di perbatasan antara provinsi Jawa Tengah dan Daerah Istimewa Yogyakarta. Letaknya sangat unik, Candi Prambanan terletak di wilayah administrasi desa Bokoharjo, Prambanan, Sleman, sedangkan pintu masuk kompleks Candi Prambanan terletak di wilayah adminstrasi desa Tlogo, Prambanan, Klaten.\r\n\r\nCandi ini adalah termasuk Situs Warisan Dunia UNESCO, candi Hindu terbesar di Indonesia, sekaligus salah satu candi terindah di Asia Tenggara. Arsitektur bangunan ini berbentuk tinggi dan ramping sesuai dengan arsitektur Hindu pada umumnya dengan candi Siwa sebagai candi utama memiliki ketinggian mencapai 47 meter menjulang di tengah kompleks gugusan candi-candi yang lebih kecil. Sebagai salah satu candi termegah di Asia Tenggara, candi Prambanan menjadi daya tarik kunjungan wisatawan dari seluruh dunia.\r\n\r\nMenurut prasasti Siwagrha, candi ini mulai dibangun pada sekitar tahun 850 masehi oleh Rakai Pikatan, dan terus dikembangkan dan diperluas oleh Balitung Maha Sambu, pada masa kerajaan Medang Mataram.', 'Candi', 'Prambanan', 'Sleman', 'D.I Yogyakarta', NULL, '2021-01-08 11:59:58', '2021-01-08 11:59:58'),
(11, 'Candi  Borobudur', 'candi-borobudur', 'Borobudur (bahasa Jawa: ꦕꦤ꧀ꦝꦶꦧꦫꦧꦸꦝꦸꦂ, translit. Candhi Barabudhur) adalah sebuah candi Buddha yang terletak di Borobudur, Magelang, Jawa Tengah, Indonesia. Candi ini terletak kurang lebih 100 km di sebelah barat daya Semarang, 86 km di sebelah barat Surakarta, dan 40 km di sebelah barat laut Yogyakarta. Candi berbentuk stupa ini didirikan oleh para penganut agama Buddha Mahayana sekitar tahun 800-an Masehi pada masa pemerintahan wangsa Syailendra. Borobudur adalah candi atau kuil Buddha terbesar di dunia, sekaligus salah satu monumen Buddha terbesar di dunia.\r\n\r\nMonumen ini terdiri atas enam teras berbentuk bujur sangkar yang di atasnya terdapat tiga pelataran melingkar, pada dindingnya dihiasi dengan 2.672 panel relief dan aslinya terdapat 504 arca Buddha. Borobudur memiliki koleksi relief Buddha terlengkap dan terbanyak di dunia. Stupa utama terbesar teletak di tengah sekaligus memahkotai bangunan ini, dikelilingi oleh tiga barisan melingkar 72 stupa berlubang yang di dalamnya terdapat arca Buddha tengah duduk bersila dalam posisi teratai sempurna dengan mudra (sikap tangan) Dharmachakra mudra (memutar roda dharma).\r\n\r\nMonumen ini merupakan model alam semesta dan dibangun sebagai tempat suci untuk memuliakan Buddha sekaligus berfungsi sebagai tempat ziarah untuk menuntun umat manusia beralih dari alam nafsu duniawi menuju pencerahan dan kebijaksanaan sesuai ajaran Buddha. Para peziarah masuk melalui sisi timur dan memulai ritual di dasar candi dengan berjalan melingkari bangunan suci ini searah jarum jam, sambil terus naik ke undakan berikutnya melalui tiga tingkatan ranah dalam kosmologi Buddha. Ketiga tingkatan itu adalah Kāmadhātu (ranah hawa nafsu), Rupadhatu (ranah berwujud), dan Arupadhatu (ranah tak berwujud). Dalam perjalanannya para peziarah berjalan melalui serangkaian lorong dan tangga dengan menyaksikan tak kurang dari 1.460 panel relief indah yang terukir pada dinding dan pagar langkan.\r\n\r\nMenurut bukti-bukti sejarah, Borobudur ditinggalkan pada abad ke-14 seiring melemahnya pengaruh kerajaan Hindu dan Buddha di Jawa serta mulai masuknya pengaruh Islam. Dunia mulai menyadari keberadaan bangunan ini sejak ditemukan 1814 oleh Sir Thomas Stamford Raffles, yang saat itu menjabat sebagai Gubernur Jenderal Inggris atas Jawa. Sejak saat itu Borobudur telah mengalami serangkaian upaya penyelamatan dan pemugaran (perbaikan kembali). Proyek pemugaran terbesar digelar pada kurun waktu 1975 hingga 1982 atas upaya Pemerintah Republik Indonesia dan UNESCO, kemudian situs bersejarah ini masuk dalam daftar Situs Warisan Dunia.\r\n\r\nBorobudur kini masih digunakan sebagai tempat ziarah keagamaan; tiap tahun umat Buddha yang datang dari seluruh Indonesia dan mancanegara berkumpul di Borobudur untuk memperingati Trisuci Waisak. Dalam dunia pariwisata, Borobudur adalah objek wisata tunggal di Indonesia yang paling banyak dikunjungi wisatawan.', 'Candi', 'Borobudur', 'Magelang', 'Jawa Tengah', NULL, '2021-01-11 12:58:31', '2021-01-11 12:58:31'),
(12, 'Pantai Ora', 'pantai-ora', 'Pantai Ora adalah suatu pantai yang terletak pulau Seram, kecamatan Seram Utara, Maluku Tengah, Maluku, Indonesia. Pantai yang berlokasi di ujung barat teluk Sawai ini berada di sebelah desa Saleman dan desa Sawai, di tepi hutan Taman Nasional Manusela. Pantai Ora memiliki karakteristik pantai yang berpasir putih dengan air yang sangat jernih dan tenang dengan kekayaan terumbu karang, ikan dan aneka ragam biota laut lainnya. Pantai Ora dan desa Sawai merupakan objek wisata di teluk Sawai yang setiap tahunnya dapat menyedot sekitar 500 wisatawan dari dalam dan luar negeri (2013).[1] Pantai Ora memiliki resor penginapan yang mengambang di atas pantai. Sementara di desa Sawai terdapat pondok wisata yang berada di antara pemukiman penduduk yang juga terapung di pantai. Berbagai kegiatan wisata yang dapat dilakukan di pantai Ora antara lain wisata alam, wisata tirta, snorkeling, selam, wisata kuliner, jelajah gua dan fotografi.', 'Pantai', 'Seram Utrara', 'Maluku Tengah', 'Maluku', NULL, '2021-01-11 13:09:23', '2021-01-11 13:09:23'),
(13, 'Gunung Bromo', 'gunung-bromo', 'Gunung Bromo (dari bahasa Sanskerta: Brahma, salah seorang Dewa Utama dalam agama Hindu) atau dalam bahasa Tengger dieja \"Brama\", adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur. Sebagai sebuah objek wisata, Bromo menjadi menarik karena statusnya sebagai gunung berapi yang masih aktif. Gunung Bromo termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru.\r\n\r\nBentuk tubuh Gunung Bromo bertautan antara lembah dan ngarai dengan kaldera atau lautan pasir seluas sekitar 10 kilometer persegi. Ia mempunyai sebuah kawah dengan garis tengah ± 800 meter (utara-selatan) dan ± 600 meter (timur-barat). Sedangkan daerah bahayanya berupa lingkaran dengan jari-jari 4 km dari pusat kawah Bromo.', 'Gunung', NULL, NULL, 'Jawa Timur', NULL, '2021-01-11 13:17:53', '2021-01-11 13:17:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daerah`
--
ALTER TABLE `daerah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeri_wisata`
--
ALTER TABLE `galeri_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daerah`
--
ALTER TABLE `daerah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri_wisata`
--
ALTER TABLE `galeri_wisata`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
