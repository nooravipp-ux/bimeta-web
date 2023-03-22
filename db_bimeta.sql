-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 08:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bimeta`
--

-- --------------------------------------------------------

--
-- Table structure for table `cfg_beranda`
--

CREATE TABLE `cfg_beranda` (
  `id` int(11) NOT NULL,
  `meta_title` varchar(225) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `img_banner_1` text DEFAULT NULL,
  `img_banner_1_title` varchar(225) DEFAULT NULL,
  `vid_banner_link_1` text DEFAULT NULL,
  `img_banner_2` text DEFAULT NULL,
  `img_banner_2_title` varchar(225) DEFAULT NULL,
  `vid_banner_link_2` text DEFAULT NULL,
  `img_banner_3` text DEFAULT NULL,
  `img_banner_3_title` varchar(225) DEFAULT NULL,
  `vid_banner_link_3` text DEFAULT NULL,
  `section_1_title` varchar(225) DEFAULT NULL,
  `section_1_desc` varchar(225) DEFAULT NULL,
  `paralax_1_img` text DEFAULT NULL,
  `paralax_1_title` varchar(225) DEFAULT NULL,
  `paralax_1_desc` varchar(225) DEFAULT NULL,
  `section_2_title` varchar(225) DEFAULT NULL,
  `section_2_desc` varchar(225) DEFAULT NULL,
  `paralax_2_img` text DEFAULT NULL,
  `paralax_2_title` varchar(225) DEFAULT NULL,
  `paralax_2_desc` varchar(225) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(50) DEFAULT NULL,
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cfg_company_profile`
--

CREATE TABLE `cfg_company_profile` (
  `id` int(11) NOT NULL,
  `meta_title` varchar(225) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `img_banner_1` text DEFAULT NULL,
  `img_banner_1_title` varchar(225) DEFAULT NULL,
  `img_banner_1_desc` varchar(225) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(50) DEFAULT NULL,
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cfg_contact`
--

CREATE TABLE `cfg_contact` (
  `id` int(11) NOT NULL,
  `meta_title` varchar(225) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `img_banner_1` text DEFAULT NULL,
  `img_banner_1_title` varchar(225) DEFAULT NULL,
  `img_banner_1_desc` varchar(225) DEFAULT NULL,
  `img_banner_2` text DEFAULT NULL,
  `img_banner_2_title` varchar(225) DEFAULT NULL,
  `img_banner_2_desc` varchar(225) DEFAULT NULL,
  `img_banner_3` text DEFAULT NULL,
  `img_banner_3_title` varchar(225) DEFAULT NULL,
  `img_banner_3_desc` varchar(225) DEFAULT NULL,
  `marketing_1_img` text DEFAULT NULL,
  `marketing_1_name` varchar(225) DEFAULT NULL,
  `marketing_1_contact_no` varchar(225) DEFAULT NULL,
  `marketing_2_img` text DEFAULT NULL,
  `marketing_2_name` varchar(225) DEFAULT NULL,
  `marketing_2_contact_no` varchar(225) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(50) DEFAULT NULL,
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cfg_contact`
--

INSERT INTO `cfg_contact` (`id`, `meta_title`, `meta_description`, `meta_keyword`, `img_banner_1`, `img_banner_1_title`, `img_banner_1_desc`, `img_banner_2`, `img_banner_2_title`, `img_banner_2_desc`, `img_banner_3`, `img_banner_3_title`, `img_banner_3_desc`, `marketing_1_img`, `marketing_1_name`, `marketing_1_contact_no`, `marketing_2_img`, `marketing_2_name`, `marketing_2_contact_no`, `created_by`, `created_time`, `updated_by`, `updated_time`) VALUES
(1, 'Hubungi kami untuk pemesanan ', 'Produsen Karton Gelombang Dus Kemasan yang berbasis di Kabupaten Bandung Barat - Bimeta Karnusa', 'alamat bimeta karnusa, bimeta, bimeta box, kardus box murah ', 'pabrik.jpg', 'Hubungi Kami', 'Untuk mengetahui lebih lanjut mengenai produk dan pemesanan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Agus Yusuf', '+6285314708672', NULL, 'Dani Ramdani', '+6281222769991', NULL, '2023-01-03 17:43:10', NULL, '2023-01-03 17:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `cfg_product_portofolio`
--

CREATE TABLE `cfg_product_portofolio` (
  `id` int(11) NOT NULL,
  `meta_title` varchar(225) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `img_banner_1` text DEFAULT NULL,
  `img_banner_1_title` varchar(225) DEFAULT NULL,
  `img_banner_1_desc` varchar(225) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(50) DEFAULT NULL,
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_customer`
--

CREATE TABLE `m_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(50) DEFAULT NULL,
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_customer`
--

INSERT INTO `m_customer` (`id`, `name`, `logo`, `created_by`, `created_time`, `updated_by`, `updated_time`) VALUES
(4, 'Client 1', '1672863812_01-dark.png', 'admin', '2023-01-04 20:23:32', 'admin', '2023-01-04 20:23:32'),
(5, 'Client 2', '1672863825_02-dark.png', 'admin', '2023-01-04 20:23:45', 'admin', '2023-01-04 20:23:45'),
(7, 'Client 3', '1672863854_03-dark.png', 'admin', '2023-01-04 20:24:14', 'admin', '2023-01-04 20:24:14'),
(8, 'Client 4', '1672863869_04-dark.png', 'admin', '2023-01-04 20:24:29', 'admin', '2023-01-04 20:24:29'),
(9, 'Client 5', '1672863882_05-dark.png', 'admin', '2023-01-04 20:24:42', 'admin', '2023-01-04 20:24:42');

-- --------------------------------------------------------

--
-- Table structure for table `m_product_category`
--

CREATE TABLE `m_product_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(225) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(50) DEFAULT NULL,
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_product_category`
--

INSERT INTO `m_product_category` (`id`, `category_name`, `created_by`, `created_time`, `updated_by`, `updated_time`) VALUES
(1, 'Portofolio Product', 'ADMIN', '2023-01-03 04:43:51', 'ADMIN', '2023-01-03 04:43:51'),
(2, 'Core Product', 'ADMIN', '2023-01-03 04:43:51', 'ADMIN', '2023-01-03 04:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_company_profile`
--

CREATE TABLE `t_company_profile` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nama_pemilik` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `lokasi_latitude` varchar(100) DEFAULT NULL,
  `lokasi_longitude` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  `jumlah_karyawan` int(11) DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `tahun_berdiri` date DEFAULT NULL,
  `sejarah_singkat` text DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(50) DEFAULT NULL,
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_customer_testimoni`
--

CREATE TABLE `t_customer_testimoni` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(225) DEFAULT NULL,
  `pic` varchar(225) DEFAULT NULL,
  `testimoni` text DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(50) DEFAULT NULL,
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_customer_testimoni`
--

INSERT INTO `t_customer_testimoni` (`id`, `customer_name`, `pic`, `testimoni`, `created_by`, `created_time`, `updated_by`, `updated_time`) VALUES
(2, 'Jhon Dalton.Inc', 'Jhon', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'admin', '2023-01-03 20:02:22', 'admin', '2023-01-03 20:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `t_message`
--

CREATE TABLE `t_message` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `status_read` int(11) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(50) DEFAULT NULL,
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_message`
--

INSERT INTO `t_message` (`id`, `nama`, `email`, `no_telp`, `pesan`, `status_read`, `created_by`, `created_time`, `updated_by`, `updated_time`) VALUES
(3, 'Nurapip', 'nooravipp@gmail.com', '08991848066', 'test', 0, 'admin', '2023-01-03 17:53:55', 'admin', '2023-01-03 17:53:55'),
(5, 'Rizky Febrian', 'rizky@gmail.com', '08211232322', 'Selamat sore, apakah bisa pesan barang tapi dengan quantity kurang dari 100 pack ?', 0, NULL, '2023-01-20 12:48:41', NULL, '2023-01-20 12:48:41');

-- --------------------------------------------------------

--
-- Table structure for table `t_product`
--

CREATE TABLE `t_product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_name` varchar(225) DEFAULT NULL,
  `product_img_1` text DEFAULT NULL,
  `product_img_2` text DEFAULT NULL,
  `product_img_3` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(50) DEFAULT NULL,
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_product`
--

INSERT INTO `t_product` (`id`, `category_id`, `product_name`, `product_img_1`, `product_img_2`, `product_img_3`, `description`, `slug`, `created_by`, `created_time`, `updated_by`, `updated_time`) VALUES
(1, 1, 'Produk 1 edit', '1672773064_box1.jpg', NULL, NULL, 'test edit', NULL, NULL, '2023-01-03 04:51:23', 'admin', '2023-01-03 04:51:23'),
(2, 1, 'Produk 2 edit', '1672773064_box1.jpg', '1672773064_box2.jpg', '1672773064_box1.jpg', 'test edot 2', NULL, 'admin', '2023-01-03 19:11:04', 'admin', '2023-01-03 19:11:04'),
(5, 1, 'Produk 3', '1674760835_IMG_1952-removebg-preview.png', NULL, NULL, '-', NULL, 'admin', '2023-01-26 19:20:35', 'admin', '2023-01-26 19:20:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$UmDdI1qTOULbHfQcJ/FGROuKeW88u8B7nFt5XqX3KbyUXGud9O2jW', NULL, '2022-12-15 22:08:40', '2022-12-15 22:08:40');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `ip` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `ip`, `date`) VALUES
(2, '2f8748abdbb42c16f5d62251f8adea1f65443b6ed0ec063b49be332a6c8cc200892828deee3bbc44bffff040677446dfe0fe5d9dc5a2150d342dd93456b54e22', '2023-01-19 17:00:00'),
(3, '2f8748abdbb42c16f5d62251f8adea1f65443b6ed0ec063b49be332a6c8cc200892828deee3bbc44bffff040677446dfe0fe5d9dc5a2150d342dd93456b54e22', '2023-01-20 17:00:00'),
(4, '2f8748abdbb42c16f5d62251f8adea1f65443b6ed0ec063b49be332a6c8cc200892828deee3bbc44bffff040677446dfe0fe5d9dc5a2150d342dd93456b54e22', '2023-01-22 17:00:00'),
(5, '2f8748abdbb42c16f5d62251f8adea1f65443b6ed0ec063b49be332a6c8cc200892828deee3bbc44bffff040677446dfe0fe5d9dc5a2150d342dd93456b54e22', '2023-01-23 17:00:00'),
(6, '2f8748abdbb42c16f5d62251f8adea1f65443b6ed0ec063b49be332a6c8cc200892828deee3bbc44bffff040677446dfe0fe5d9dc5a2150d342dd93456b54e22', '2023-01-24 17:00:00'),
(7, '2f8748abdbb42c16f5d62251f8adea1f65443b6ed0ec063b49be332a6c8cc200892828deee3bbc44bffff040677446dfe0fe5d9dc5a2150d342dd93456b54e22', '2023-01-25 17:00:00'),
(8, '2f8748abdbb42c16f5d62251f8adea1f65443b6ed0ec063b49be332a6c8cc200892828deee3bbc44bffff040677446dfe0fe5d9dc5a2150d342dd93456b54e22', '2023-01-27 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cfg_beranda`
--
ALTER TABLE `cfg_beranda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cfg_company_profile`
--
ALTER TABLE `cfg_company_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cfg_contact`
--
ALTER TABLE `cfg_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cfg_product_portofolio`
--
ALTER TABLE `cfg_product_portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_customer`
--
ALTER TABLE `m_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_product_category`
--
ALTER TABLE `m_product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `t_company_profile`
--
ALTER TABLE `t_company_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_customer_testimoni`
--
ALTER TABLE `t_customer_testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_message`
--
ALTER TABLE `t_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_product`
--
ALTER TABLE `t_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cfg_beranda`
--
ALTER TABLE `cfg_beranda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cfg_company_profile`
--
ALTER TABLE `cfg_company_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cfg_contact`
--
ALTER TABLE `cfg_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cfg_product_portofolio`
--
ALTER TABLE `cfg_product_portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_customer`
--
ALTER TABLE `m_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `m_product_category`
--
ALTER TABLE `m_product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_company_profile`
--
ALTER TABLE `t_company_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_customer_testimoni`
--
ALTER TABLE `t_customer_testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_message`
--
ALTER TABLE `t_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_product`
--
ALTER TABLE `t_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
