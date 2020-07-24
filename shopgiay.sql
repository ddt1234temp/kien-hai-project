-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 24, 2020 lúc 03:13 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopgiay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `productId`, `userId`, `created_at`, `updated_at`) VALUES
(14, 3, 1, '2020-07-22 10:55:49', '2020-07-22 10:55:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2020_07_20_163720_create_products_table', 2),
(11, '2020_07_22_165357_create_carts_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `thumbnail` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `thumbnail`, `created_at`, `updated_at`) VALUES
(3, 'Giày NMD HUMANRACE', 'Tối ưu hóa mô tả sản phẩm (product description) là yếu tố rất quan trọng giúp tăng hiệu quả của các chiến dịch chạy quảng cáo Facebook hay Google Shopping.', 9000000, 'https://bumshop.com.vn/wp-content/uploads/2019/12/giay-nmd-tulo-shop.jpg', '2020-07-20 11:34:20', '2020-07-22 06:37:14'),
(4, 'GIÀY GRAND COURT', 'Nét biến tấu dựa trên phong cách thập niên 70. Mẫu giày này lấy cảm hứng từ các phong cách thể thao huyền thoại trong quá khứ và đưa đến tương lai. Giày mang phong cách hàng ngày với thân giày bằng chất liệu giả da. Họa tiết 3 Sọc đặc trưng chạy dọc hai bên. Lớp đệm đế giữa êm ái mang đến cảm giác thoải mái cho từng bước chân.', 12321, 'https://assets.adidas.com/images/h_840,f_auto,q_auto:sensitive,fl_lossy/f8daa3996318420490c6a9810136ff67_9366/Giay_Grand_Court_Mau_trang_F36485_02_standard.jpg', '2020-07-20 11:48:38', '2020-07-22 06:51:15'),
(5, 'GIÀY SAMBA OG 1', 'CLOUD WHITE / CORE BLACK / SIGNAL PINK', 1000000, 'https://assets.adidas.com/images/w_385,h_385,f_auto,q_auto:sensitive,fl_lossy/798faf57cf204a60a85fabb300bbcc07_9366/ultraboost-s.rdy.jpg', '2020-07-20 11:48:43', '2020-07-22 06:53:46'),
(6, 'GIÀY SAMBA OG', 'Dùng những bài học trong quá khứ làm động lực cho tương lai. Mang đậm bản sắc di sản adidas, với chất liệu hiện đại. Bộ sưu tập quần áo và giày vượt thời gian: lấy cảm hứng từ quá khứ, được thiết kế cho hiện tại.', 5500000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto:sensitive,fl_lossy/eec9e5a976ad422999aeab96011f6e3e_9366/ULTRABOOST_S.RDY_Mau_trang_FW9771_01_standard.jpg', '2020-07-20 11:48:47', '2020-07-22 06:53:13'),
(7, 'Giày Adidas XZ 4000 4D', 'Giày xịn loại mới nhất', 2330000, 'https://sobyn.com/wp-content/uploads/2019/05/IMG_8883.jpg', '2020-07-22 06:08:49', '2020-07-22 06:08:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kiên Hải', 'erenmydemons@gmail.com', NULL, '$2y$10$pDC1b/ac5Cbu5ElFVvcmA.eMxUwpgmFMtzIKreBxHp.oVmtx4X64W', 1, NULL, '2020-07-20 09:47:36', '2020-07-22 10:54:08'),
(2, 'Dương Đức Trọng', 'erenmydemons1@gmail.com', NULL, '$2y$10$nC5ofWHhFxt9P7MSjsbBduMItETeq4nrdDSRs4M8iYIxRmxKyms4q', 0, NULL, '2020-07-20 10:56:16', '2020-07-20 10:56:16');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
