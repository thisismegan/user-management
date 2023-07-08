-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 03:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_user_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `qty`) VALUES
(2, 3, 21, 2),
(3, 3, 17, 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_image`) VALUES
(10, 'Macbook', 'z5lmVfBU8ZXF2uhIDaTwJIj6kuf4jc8Iv8jz1g48.png'),
(11, 'iPhone', 'u5PmEifybAiySD3pVhjJHr4LYHxJXJrQrLOXPgBY.png'),
(12, 'iPad', 'xV1wDgD6t0rEEt3LqU1opyWwY19ruar4odMQtu4c.png'),
(13, 'Smart Watch', 'rkIM4Bx3fyPkH2hmKSN6b41QFeDgn4SmVevriNdh.png'),
(14, 'Air Pods', 'bjgLB53DGkjQy09rY3vkArpoiPvWzRw4yfAknYPt.png'),
(15, 'Aksesoris', 'Nx0Ia8IXqswysQVq1tToAQPlGtFpuhEps0AhRnhG.png');

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `image_name`) VALUES
(39, 11, 'tpkywFPKWplSPTLrWpFKRUP2TFKhLrE6h6VhMucY.jpg'),
(40, 11, 'eG5NqG9PebRTKUywKUJDaainzJJJpPCkKOBsZLjT.jpg'),
(41, 11, 'vkV7gWJdflr1KqLHu7miGulRbqYNeh3S85FUltLQ.jpg'),
(42, 12, 'TwtMJSBpEmMEUH8kc5kHIVPTHR86mQhycCfiEN2c.jpg'),
(43, 12, 'AYV9rO0XIuihNrNImwZbFpOgnHQanucEV0MXkMlQ.jpg'),
(44, 12, 'ps6MuyfJ29IYOnYBKqp8e4jZMI0vVsxiOCbsqWWR.jpg'),
(45, 13, 'QyjJgLCjyr51cYFwbnblK3ZjKukPeexngr9qvLPW.webp'),
(46, 13, 'vZ2CoA7ouVox8edhUVc92symr5TDgjOBwF8ms2LX.jpg'),
(47, 14, '9EfBYLUGvEX32BOJZsXVirKItZ8vBezBfvvErdCj.webp'),
(48, 14, '4dhQiOFsrznmPGlYRuT2iXRZW7FfOqiO9UO9G3MC.webp'),
(49, 14, 'rXZOHK0ehVRcqaSkiOVui8Xpb1mAo2JpdllCiRdp.jpg'),
(50, 14, 'q6ubllITwKohOF9kQpSQiUmM0gyoN08bk6TDUXJq.jpg'),
(51, 14, 'QujNYtmMxNtdPKyLrqDL7fyATvvXdIp75ypphA5Q.jpg'),
(52, 15, 'eGj4eQYQ3Tihr89MfohHf5vFWtfQamos9AerHlsO.jpg'),
(53, 15, 'BaWcNl3QIG3lqx1g1QC80GbtbM9fVD6dOiXmV6Jc.webp'),
(54, 15, 'C7bk42LQgmBYj3LBMDk3hPlM5uJh398dP3zF64ii.webp'),
(55, 15, 'q3V4Jj1xcXPBLKQRptuGVcStf0JcUysuq41w7AEI.webp'),
(56, 16, 'CC5mUjVVi5IkDJCO61GWBqtnlWvyOsTAmG0nZ1C2.jpg'),
(57, 16, 'Pk8TQSFDOKaZVuaxfxJOKNqCKgg1vRZjQzxohv6z.jpg'),
(58, 16, 'VgN0sMuithz526l9OWC1tBMdIvuPDgPetJRdObiY.jpg'),
(59, 16, 'PG5GLndyzQqBdCHgF3BCG8Q1iPBfYiaDPJlQ2MbQ.jpg'),
(60, 16, 'EGWPbavAReAhqU5oScEXBAaq8kOichzVY6cVPU9D.jpg'),
(61, 17, 'nRYEAk1tQwiZY2IPXtvN67okdYrDmIjltJ7lRo4d.jpg'),
(62, 17, 'B7JAnpFhJm2duk2xZUF2rZzs3KpCaSc1AFsabRXi.webp'),
(63, 17, 'XngwWc84CkaqEZxqWMPeo0FL876rXAlmoAOtBwnA.webp'),
(64, 17, 'kc8Gopy8IUXEG3AJmt5GxbxZqqITLAaUdlN5Sxtv.jpg'),
(65, 18, 'YpzUW6dfcTmnWakBezDI1Qfm31sREfh1ilJVo9Qe.webp'),
(66, 18, 'FheU4rmYAfZnigoo47NntME6pTePgA970ndjGYNh.webp'),
(67, 18, '9K0XHtNlAtbeVenmB4Gh7ODkPhy0XPgy8dBEFqb6.webp'),
(68, 18, 'Y1ByNvzSo1jwd4qDYQrpxc69Ly1alI1FPaKjLP0G.webp'),
(69, 19, 'fgEuWyFqyLWsenfkTH7JzTmk1HJM1DdeTypRw6ma.webp'),
(70, 19, '9UjP5SVSuMURNmy3Mch8aat6S78UXdREevRrOaCj.webp'),
(71, 19, 'gXk9GWWOrE1GH4PuMAMHrQSrMcQoLNhg3MGBkdZ9.jpg'),
(72, 19, 'TysOyp8KzKMaSvFvOHdeY7pvhgLFTFVcobisICJa.jpg'),
(73, 20, '6gSSQOKJOkRTtFk84diw9EDaleVgL6uuL80GUd80.jpg'),
(74, 20, '6r7RChYnSIBY9L6hKkDveSzKQxjeuGZk4whCb2cG.jpg'),
(75, 20, '77xSXiV2ps4LW4LUlvxGlwBJgM6Isx3rfnl74n8H.jpg'),
(76, 21, 'gTXL59S2AhGEM06T6D1xi5RiiaLxLdr8vSf3BoGy.jpg'),
(77, 21, 'REgy2tnnYyhYqrAdQg5g0CzDNkJIffMNYKElTU2d.jpg'),
(78, 21, 'UV3XgUgVQ1r28Mn3ct71rPPlx9YPP2s19UjeKaQo.jpg'),
(79, 21, '3tXrUMBH2bD7bgLWLQd9GdNgeZnM6qdJs5p7CL9F.jpg'),
(80, 21, 'I5CwGgohbXsMZqyh4JhVmrL1goHx7VG9uS2fbjpj.jpg');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_07_060054_create_roles_table', 1),
(6, '2023_07_07_060137_create_products_table', 1),
(7, '2023_07_07_060458_create_categories_table', 1),
(8, '2023_07_07_060551_create_orders_table', 1),
(9, '2023_07_07_060823_create_order_status_table', 1),
(10, '2023_07_07_060912_create_order_details_table', 1),
(11, '2023_07_07_061019_create_images_table', 1),
(12, '2023_07_08_081838_add_category_image_to_categories_table', 2),
(13, '2023_07_08_152233_create_carts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_total` bigint(20) NOT NULL,
  `order_status_id` int(11) NOT NULL,
  `invoice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_date`, `order_total`, `order_status_id`, `invoice`, `created_at`, `updated_at`) VALUES
(1, 3, '2023-07-08 14:42:40', 3000000, 3, 'INVHSGJSD', '2023-07-08 07:43:19', '2023-07-08 07:43:21');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `description`, `stock`, `price`, `created_at`, `updated_at`) VALUES
(11, 14, 'AirPods Pro (generasi ke-2)', 'AirPods Pro dilengkapi Peredam Kebisingan Aktif 2x lebih baik,1 plus Transparansi Adaptif, dan Audio Spasial Personal dengan pelacakan gerakan kepala dinamis untuk suara yang menghanyutkan.2 Kini dengan berbagai ukuran ear tip (XS, S, M, L) serta waktu dengar hingga 6 jam.3', 3, 4000000, '2023-07-08 02:22:20', '2023-07-08 02:22:20'),
(12, 11, 'iPhone 14 Pro', 'iPhone 14 Pro. Memotret detail menakjubkan dengan kamera Utama 48 MP. Nikmati iPhone dalam cara yang sepenuhnya baru dengan layar yang Selalu Aktif dan Dynamic Island. Deteksi Tabrakan, sebuah fitur keselamatan baru, memanggil bantuan saat Anda tak bisa.', 3, 17000000, '2023-07-08 02:23:42', '2023-07-08 02:23:42'),
(13, 12, 'iPad Pro (Generasi ke-6)', 'iPad Pro. Dengan performa yang menakjubkan, konektivitas nirkabel super cepat, dan pengalaman Apple Pencil generasi berikutnya. Ditambah, fitur produktivitas dan kolaborasi baru yang andal di iPadOS 16. iPad Pro adalah pengalaman iPad terbaik.', 6, 14000000, '2023-07-08 02:25:28', '2023-07-08 02:25:28'),
(14, 12, 'iPad mini (Generasi ke-6)', 'iPad mini baru. Menghadirkan desain layar sepenuhnya dengan layar Liquid Retina 8,3 inci. Chip A15 Bionic andal dengan Neural Engine. Kamera depan Ultra Wide 12 MP dengan Center Stage. Konektivitas USB-C. Dan nirkabel ultra cepat. Buat catatan, tandai dokumen, atau tuangkan ide terbesar Anda dengan Apple Pencil (generasi ke-2) yang dapat menempel secara magnetis dan mengisi daya secara nirkabel.', 10, 9000000, '2023-07-08 02:26:25', '2023-07-08 02:26:25'),
(15, 10, 'MacBook Air M2 (2022)', 'Bertenaga super berkat chip M2 generasi berikutnya, MacBook Air yang didesain ulang menggabungkan performa andal dengan kekuatan baterai hingga 18 jam ke dalam penutup berbahan aluminium yang luar biasa tipis.', 4, 20000000, '2023-07-08 02:27:09', '2023-07-08 02:27:09'),
(16, 10, 'MacBook Pro M2 (2022)', 'MacBook Pro 13 inci lebih andal dari sebelumnya. Bertenaga super berkat chip M2 generasi berikutnya, MacBook Pro ini merupakan laptop pro Apple yang paling portabel, dengan kekuatan baterai hingga 20 jam (2)', 3, 21000000, '2023-07-08 02:27:50', '2023-07-08 02:27:50'),
(17, 14, 'AirTag Leather Loop', 'Kulit yang spesial didatangkan dari Eropa menambahkan kesan elegan pada loop serbaguna ini.\r\nLoop ini terpasang erat sekaligus memastikan AirTag tetap di tempatnya, jadi Anda selalu mengetahui lokasi barang Anda.\r\nJadikan AirTag milik Anda dengan berbagai aksesori warna-warni\r\nAirTag dijual terpisah', 4, 600000, '2023-07-08 02:30:17', '2023-07-08 02:30:17'),
(18, 13, 'Apple Watch Series 8', 'Apple Watch Series 8 dilengkapi aplikasi dan sensor kesehatan canggih, sehingga Anda dapat melakukan pengukuran EKG, detak jantung, dan kadar oksigen darah, serta memantau perubahan suhu untuk informasi mendalam tentang siklus menstruasi Anda. Dan dengan Deteksi Tabrakan, pemantauan tahap tidur, serta metrik olahraga canggih, Apple Watch Series 8 membantu Anda tetap aktif, sehat, selamat, dan terhubung.', 5, 8000000, '2023-07-08 02:31:29', '2023-07-08 02:31:29'),
(19, 10, 'iMac 24 inci (M1, Empat Port, 2021)', 'Anda tak pernah melihat komputer seperti ini. Dengan desain luar biasa tipis berkat chip Apple M1. Layar Retina 4.5K 24 inci yang menghanyutkan dengan lebih dari satu miliar warna yang memberikan gambar besar dengan detail yang menakjubkan.(1) Kamera dan mikrofon terbaik dalam Mac untuk menampilkan Anda dengan kualitas gambar dan suara terbaik. Dan suara dari enam speaker yang memenuhi ruangan membuat film dan musik terasa semakin menghanyutkan. Karena dapat bekerja mulus dengan iPhone, pesan teks dan panggilan langsung diteruskan ke iMac. Dan dengan serangkaian warna yang dapat dipilih, jadikan iMac komputer andal yang sesuai kepribadian Anda.', 4, 25000000, '2023-07-08 02:32:37', '2023-07-08 02:32:37'),
(20, 15, 'iPhone 14 Plus Leather Case with MagSafe', 'Terbuat dari bahan kulit lentur berkualitas tinggi\r\nMemberikan perlindungan ekstra dan menambahkan gaya pada iPhone Anda\r\nKompatibel dengan Apple iPhone 14 Plus\r\nBanyak pilihan warna menarik', 10, 1100000, '2023-07-08 02:36:29', '2023-07-08 02:36:29'),
(21, 10, 'Mac Studio (2022)', 'Memperkenalkan Mac Studio. Super bertenaga dan ringkas yang pas di meja Anda dengan konektivitas canggih untuk pengaturan studio Anda. Pilih M1 Max yang sangat cepat atau M1 Ultra yang sepenuhnya baru — chip paling andal yang pernah diciptakan untuk komputer pribadi.', 10, 33000000, '2023-07-08 02:37:27', '2023-07-08 02:37:27');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `created_at`, `updated_at`) VALUES
(1, 1, 'Super Admin', 'superadmin@gmail.com', '2023-07-07 09:16:56', '$2y$10$99LdGRkpJAkXhaqgp1CunuCzlp084/iumt5CBFIa22Oi6Gv51Fxjy', 'default.png', '2023-07-07 01:43:40', '2023-07-07 01:43:40'),
(2, 2, 'Admin', 'admin@gmail.com', '2023-07-08 05:27:09', '$2y$10$9Q/UHYUzHS1ir0H5FDSHquS4Q3fODhdNXs5as.gHRD0GEPWpXjpwO', 'default.png', '2023-07-07 01:46:24', '2023-07-07 01:46:24'),
(3, 3, 'Customer 1', 'customer@gmail.com', '2023-07-08 05:27:11', '$2y$10$2.jb6eDDQm3y38HUhOdaH.AsKE9ftlV56AlrypyA3HFydHVvpMCQG', 'default.png', '2023-07-07 01:47:10', '2023-07-08 00:26:36'),
(5, 3, 'Customer 2', 'customer2@gmail.com', NULL, '$2y$10$HBW86BdHhKNRxVViOvdrJeknlkZhlD9LVi/YikqSS.wiCLvu5ZezW', 'default.png', '2023-07-08 11:22:47', '2023-07-08 11:22:47'),
(6, 3, 'Customer 3', 'customer3@gmail.com', NULL, '$2y$10$CZvyDZCV4gRRHox1y822f.K/EhBKb9ycMtqIgKnmmczxxsfqvl4DK', 'default.png', '2023-07-08 11:24:43', '2023-07-08 11:24:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
