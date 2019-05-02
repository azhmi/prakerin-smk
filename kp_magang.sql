-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2019 at 02:24 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp_magang`
--

-- --------------------------------------------------------

--
-- Table structure for table `buktipembayarans`
--

CREATE TABLE `buktipembayarans` (
  `bpid` int(10) UNSIGNED NOT NULL,
  `siswaid` int(10) NOT NULL,
  `berkas1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berkas2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berkas3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berkas4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berkas5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('belum','selesai') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'belum',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buktipembayarans`
--

INSERT INTO `buktipembayarans` (`bpid`, `siswaid`, `berkas1`, `berkas2`, `berkas3`, `berkas4`, `berkas5`, `status`, `created_at`, `updated_at`) VALUES
(9, 2, '', 'BLU.png', 'laporan.png', 'TP.png', 'Realisasi Cetak.png', 'selesai', '2019-02-06 08:20:13', '2019-02-06 17:34:41');

-- --------------------------------------------------------

--
-- Table structure for table `magangs`
--

CREATE TABLE `magangs` (
  `mgid` int(10) UNSIGNED NOT NULL,
  `magsisid` int(11) NOT NULL,
  `magpemid` int(11) NOT NULL,
  `magtemid` int(11) NOT NULL,
  `tahun` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `magangs`
--

INSERT INTO `magangs` (`mgid`, `magsisid`, `magpemid`, `magtemid`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, '2019', NULL, '2019-02-07 01:46:47'),
(3, 7, 1, 3, '2019', '2019-02-07 01:59:01', '2019-02-07 02:07:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_06_021736_create_tempatmagangs_table', 2),
(4, '2019_02_06_033108_create_pembimbings_table', 3),
(5, '2019_02_06_045626_create_buktipembayarans_table', 4),
(6, '2019_02_07_003754_create_magangs_table', 5),
(8, '2019_02_07_090841_create_nilais_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `nilais`
--

CREATE TABLE `nilais` (
  `nilid` int(10) UNSIGNED NOT NULL,
  `nilmagid` int(11) NOT NULL,
  `nil1` int(11) NOT NULL,
  `nil2` int(11) NOT NULL,
  `nil3` int(11) NOT NULL,
  `nil4` int(11) NOT NULL,
  `nil5` int(11) NOT NULL,
  `nil6` int(11) NOT NULL,
  `nil7` int(11) NOT NULL,
  `nil8` int(11) NOT NULL,
  `nil9` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembimbings`
--

CREATE TABLE `pembimbings` (
  `pbid` int(10) UNSIGNED NOT NULL,
  `pbnam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pbnip` bigint(20) NOT NULL,
  `pbtemla` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pbtangla` date NOT NULL,
  `pbjk` enum('perempuan','laki-laki') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembimbings`
--

INSERT INTO `pembimbings` (`pbid`, `pbnam`, `pbnip`, `pbtemla`, `pbtangla`, `pbjk`, `created_at`, `updated_at`) VALUES
(1, 'fauzal ST MT', 41231, 'batusangkar', '1997-07-18', 'laki-laki', NULL, '2019-02-05 22:31:04');

-- --------------------------------------------------------

--
-- Table structure for table `tempatmagangs`
--

CREATE TABLE `tempatmagangs` (
  `tmid` int(10) UNSIGNED NOT NULL,
  `tmnam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tamalt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tamprof` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tempatmagangs`
--

INSERT INTO `tempatmagangs` (`tmid`, `tmnam`, `tamalt`, `tamprof`, `created_at`, `updated_at`) VALUES
(1, 'disini', 'dalam goa', 'perusahaan ini merupakan', NULL, NULL),
(3, 'batu bata', 'dalam goa cebong', 'perusahaan ini merupakan', '2019-02-05 20:30:36', '2019-02-05 20:30:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nins` bigint(20) DEFAULT NULL,
  `temla` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tangla` date DEFAULT NULL,
  `jurusan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk` enum('perempuan','laki-laki') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` enum('admin','siswa') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'siswa',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `nins`, `temla`, `tangla`, `jurusan`, `jk`, `level`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, 'admin', NULL, '$2y$10$fFe.uWY9PEIAEijVHdG63.8RlIjgbUM1mHArbrtfvXvcMIGCOJFwq', 'AuGFcaeB2mgyWvbdtqdKpN2DmyANzOaJNaHN9p0iLULNCRYq391szb6npV15', '2019-02-05 08:43:41', '2019-02-05 08:43:41'),
(2, 'Ulfa Nada Diana', 'ulfa@mail.com', 155121, 'bangkinang kota', '1996-12-17', 'TKJ', 'perempuan', 'siswa', NULL, '$2y$10$fFe.uWY9PEIAEijVHdG63.8RlIjgbUM1mHArbrtfvXvcMIGCOJFwq', 'LWdShJyq3AWFhSbNhRoHw88MoJ2zJZtBq0jkUXT4sBVq11ioKw7NeqUUFujJ', NULL, '2019-02-05 19:11:12'),
(7, 'vira', 'vira@sayang.com', 12341, 'bangkinang', '2019-02-02', 'TKJ', 'perempuan', 'siswa', NULL, '$2y$10$f98dOYj3OA2YO96QYQkGt.LOnGSYoxDLPV1FSxtwzweLkdrO7LIkS', NULL, '2019-02-05 12:58:21', '2019-02-05 12:58:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buktipembayarans`
--
ALTER TABLE `buktipembayarans`
  ADD PRIMARY KEY (`bpid`);

--
-- Indexes for table `magangs`
--
ALTER TABLE `magangs`
  ADD PRIMARY KEY (`mgid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`nilid`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembimbings`
--
ALTER TABLE `pembimbings`
  ADD PRIMARY KEY (`pbid`),
  ADD UNIQUE KEY `pembimbings_pbnip_unique` (`pbnip`);

--
-- Indexes for table `tempatmagangs`
--
ALTER TABLE `tempatmagangs`
  ADD PRIMARY KEY (`tmid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nins_unique` (`nins`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buktipembayarans`
--
ALTER TABLE `buktipembayarans`
  MODIFY `bpid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `magangs`
--
ALTER TABLE `magangs`
  MODIFY `mgid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nilais`
--
ALTER TABLE `nilais`
  MODIFY `nilid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembimbings`
--
ALTER TABLE `pembimbings`
  MODIFY `pbid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tempatmagangs`
--
ALTER TABLE `tempatmagangs`
  MODIFY `tmid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
