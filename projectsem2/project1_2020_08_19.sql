-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 19, 2020 lúc 06:22 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_category` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `name_category` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_category`, `id_user`, `name_category`, `created_at`, `updated_at`) VALUES
(21, 3, 'Meat - Seafood - Eggs', '2020-08-10 08:03:39', '2020-08-10 08:03:39'),
(22, 3, 'Vegetables - Tubers - Fruits', '2020-08-10 08:03:39', '2020-08-10 08:03:39'),
(23, 3, 'Cooking oil - Spices - Dry Food', '2020-08-10 08:07:59', '2020-08-10 08:07:59'),
(24, 3, 'Frozen/ Cooled Food', '2020-08-10 08:07:59', '2020-08-10 08:07:59'),
(25, 3, 'Milk - Dairy product', '2020-08-10 08:07:59', '2020-08-10 08:07:59'),
(26, 3, 'Drinks - Refreshments', '2020-08-10 08:07:59', '2020-08-10 08:07:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id_contact` bigint(20) UNSIGNED NOT NULL,
  `content_contact` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Cấu trúc bảng cho bảng `image_product`
--

CREATE TABLE `image_product` (
  `id_image` bigint(20) UNSIGNED NOT NULL,
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `link_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_27_072759_create_roles_table', 1),
(5, '2020_07_27_073830_create_position_table', 1),
(6, '2020_07_27_074132_create_contact_table', 1),
(7, '2020_07_27_074517_create_category_table', 1),
(8, '2020_07_27_074657_create_product_table', 1),
(9, '2020_07_27_075208_create_image_product_table', 1),
(10, '2020_07_27_075225_create_order_table', 1),
(11, '2020_07_27_075256_create_order_detail_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id_order` bigint(20) UNSIGNED NOT NULL,
  `id_employee` bigint(20) UNSIGNED DEFAULT NULL,
  `id_customer` bigint(20) UNSIGNED NOT NULL,
  `total_money` double NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wards` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id_order`, `id_employee`, `id_customer`, `total_money`, `status`, `wards`, `district`, `city`, `created_at`, `updated_at`) VALUES
(13, 1, 2, 65000, 'Success', '8 Tôn Thất Thuyết, Hà Nội', 'Nam Tu Liem', 'ha noi', '2020-08-14 18:46:19', '2020-08-14 18:46:19'),
(14, NULL, 1, 51000, 'Pending', 'thang loi', 'mai dinh', 'bac giang', '2020-08-15 02:37:52', '2020-08-15 02:37:52'),
(15, 1, 2, 41000, 'Success', 'thang loi', 'mai dinh', 'bac giang', '2020-08-15 03:40:26', '2020-08-15 03:40:26'),
(16, NULL, 2, 7000, 'Pending', 'Thắng lợi, Mai Đình, Hiệp Hòa, Bắc Giang', 'mai tinhf', 'Bắc Giang', '2020-08-17 00:55:53', '2020-08-17 00:55:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order_detail` bigint(20) UNSIGNED NOT NULL,
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `id_order` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `price` double NOT NULL,
  `total_money` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id_order_detail`, `id_product`, `id_order`, `amount`, `price`, `total_money`, `created_at`, `updated_at`) VALUES
(7, 20, 13, 1, 65000, 65000, '2020-08-14 18:46:19', '2020-08-14 18:46:19'),
(8, 55, 14, 1, 36000, 36000, '2020-08-15 02:37:52', '2020-08-15 02:37:52'),
(9, 26, 14, 1, 15000, 15000, '2020-08-15 02:37:52', '2020-08-15 02:37:52'),
(10, 75, 15, 2, 16000, 32000, '2020-08-15 03:40:26', '2020-08-15 03:40:26'),
(11, 71, 15, 1, 9000, 9000, '2020-08-15 03:40:26', '2020-08-15 03:40:26'),
(12, 61, 16, 1, 7000, 7000, '2020-08-17 00:55:53', '2020-08-17 00:55:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `position`
--

CREATE TABLE `position` (
  `id_position` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_roles` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `position`
--

INSERT INTO `position` (`id_position`, `id_user`, `id_roles`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 3, '2020-08-03 00:55:34', '2020-08-03 00:55:34'),
(6, 7, 2, '2020-08-14 18:44:31', '2020-08-14 18:44:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `id_category` bigint(20) UNSIGNED NOT NULL,
  `name_product` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Inventory_number` int(11) DEFAULT NULL,
  `Inventory_sold` int(11) DEFAULT NULL,
  `describe` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_user`, `id_product`, `id_category`, `name_product`, `Inventory_number`, `Inventory_sold`, `describe`, `price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 14, 21, 'MeatDeli', 20, 1, '350g in 1 pack hahahahahhahahahaha', 80000, 'https://lh3.googleusercontent.com/zpSknJH524_sfR5miySyrygcz6acQtIwWxRyeAXH9XyhnZK942dC6EbPbcT87WEdC_TkbBYcRWLy7A1NZbY=w185', 1, '2020-08-18 21:02:19', '2020-08-10 08:15:42'),
(3, 15, 21, 'Industrial chicken', 20, 1, '500g in 1 pack', 35000, 'https://lh3.googleusercontent.com/z5XzThbeGQAGCB1PUcHD6JznzfbW3qCbS-jD98z_c8NyoFmA1QsdGvS727JUTzoLzJIVFE2TY4LieAP-7g=w185', 0, '2020-08-10 08:22:06', '2020-08-10 08:22:06'),
(3, 16, 21, 'Industrial chicken', 20, 1, '500g in 1 pack', 39000, 'https://lh3.googleusercontent.com/QiIhkZBig7xr1figdS55MJY4RTDj-utaIAKUZawQ0uohgB3LC7o2laeJN-9wIiF-AIaCOwtkP0w-j1kTAQ=w185', 0, '2020-08-10 08:22:06', '2020-08-10 08:22:06'),
(3, 17, 21, '\r\nAmerican beef', 20, 1, '500g in 1 pack', 120000, 'https://lh3.googleusercontent.com/eyvzoKtboIE2N1cR-DD5m4FMbo9fV8kvbE6sbcsdkVSLtxJlFOPOClSOKpOO3c2GvIFlnuxDsSSVfwJfGMRR=w185', 0, '2020-08-10 08:25:49', '2020-08-10 08:25:49'),
(3, 18, 21, 'Eggs', 20, 1, 'Box of 10', 30000, 'https://lh3.googleusercontent.com/sdGB1gKTGxwNL5qwvwcRBl6P4YUtDwhs9zer7WwJB0luMv-q6OhNffPxGQfMLeDD2BZh8e8FcSDjRDUFJg=w185', 0, '2020-08-10 08:25:49', '2020-08-10 08:25:49'),
(3, 19, 21, 'Basa Fish', 30, 1, '500g in 1 pack', 35000, 'https://lh3.googleusercontent.com/CvAH-AKMHhk7s-GtaXNm-bdkYJdfTPDu2QcBfEFIL6KfoUNgBg7n3Rc1dTVrlbgvmdNuDJrCSj3vZ4cW_7zJ=w185', 0, '2020-08-09 17:25:49', '2020-08-10 08:25:49'),
(3, 20, 21, 'Clean Cleam Lenger', 29, 2, 'Tray 1.2kg', 65000, 'https://lh3.googleusercontent.com/yPtmFstoicRX9F7nWYaf-_RbrRpQL9vPcQGF5F3B_RNhcFvctp4aoM2xA4KduzPO3u9fuGKJV3jMiH1nbnQ=w185', 0, '2020-08-10 08:25:49', '2020-08-10 08:25:49'),
(3, 21, 21, 'DHA Dabaco chicken eggs', 20, 1, 'Box of 10', 50000, 'https://lh3.googleusercontent.com/oZUSNDrvpaTe0AB2hRsRhJBT1Ys62bDp9KYFstUnXkBywmT-f6JsBRseqFAEhve9aDhJhKhpY0z1Z3NOzA=w185', 0, '2020-08-10 08:25:49', '2020-08-10 08:25:49'),
(3, 22, 22, 'Bean Sprouts Eco', 20, 1, '300g in 1 pack', 9000, 'https://lh3.googleusercontent.com/31tsfG6Fn7iB_DC09-v1IPWp8OoKU-Vd9iQU0mSAC92t4WFLavSIJYqMZZCtbxTkXo0enT8tAhdMf3dHmmM=w185', 0, '2020-08-10 08:34:55', '2020-08-10 08:34:55'),
(3, 23, 22, 'Cucumber', 20, 1, '500g in 1 pack', 10000, 'https://lh3.googleusercontent.com/ZcFmWZ2xiZJ5mdGFTbnKSWOzRp9nU9Mo2DQPC8C-WAU4U390FDfebhGTF3MtCdqA5k7zXr7lZ5z7-5rAsB-y=w185', 0, '2020-08-10 08:34:55', '2020-08-10 08:34:55'),
(3, 24, 22, 'White enoki mushroom', 20, 1, '150g - 200g in 1 pack', 21000, 'https://lh3.googleusercontent.com/lcgvdttB1uEPOIsB3EIFaxkA7eqGZ8ADNxnojeQHDVIoCH3vfqdhP7PpV09gtdlAaLylZuMnovYZTCdvkE9o=w185', 0, '2020-08-10 08:34:55', '2020-08-10 08:34:55'),
(3, 25, 22, 'Breeze New Zealand apple', 25, 1, '500g in 1 pack', 40000, 'https://lh3.googleusercontent.com/HPwh_9ZYrz3a4w5SQlbTmo8CNQ8w7sYy_YY6yx1gThaSfR9q3mlumwRUT3zHQshgW29dYeFE6S0kF18Qrw=w185', 0, '2020-08-10 08:34:55', '2020-08-10 08:34:55'),
(3, 26, 22, 'Potato', 20, 1, '500g in pack', 15000, 'https://lh3.googleusercontent.com/OuSUH-0cLasnEGgWgEq-q0kXWABQoWZmHjQqgfm_VQz-anjDX-0G_hAQAQmd4DwCFRW8OEYETCUJhonlDho=w185', 0, '2020-08-10 08:34:55', '2020-08-10 08:34:55'),
(3, 27, 22, 'US blueberries ', 20, 1, '125g in box', 90000, 'https://lh3.googleusercontent.com/CCGaU2cwZf1vLhoBvx318Fv0vRBJx3Q45jtfrje6C_91150OIbU6oi8xB8z5n5AsgZIQehdKOqTkCUBAPQ=w185', 0, '2020-08-10 08:34:55', '2020-08-10 08:34:55'),
(3, 28, 22, 'Spinach', 20, 1, '500g in pack', 10000, 'https://lh3.googleusercontent.com/lh8cEnGzemZvmf3lfBoGOfedUjkiVcBOxbLtaQeQIKfiAWQSSX5dAz9XT6GcRjkpJpyqz6QDF2vKWkgEaA=w185', 0, '2020-08-10 08:34:55', '2020-08-10 08:34:55'),
(3, 29, 22, 'Cabbage', 20, 1, '450 - 500g in pack', 17000, 'https://lh3.googleusercontent.com/cOMR1-wI2nlBbD-MwtuCqihw_gafURcLcg1HYRzUANjdgIRPKJP5UTVQYqfTEinmyULz983ia1AEkjtLAA=w185', 0, '2020-08-10 08:34:55', '2020-08-10 08:34:55'),
(3, 30, 22, 'Star Vote', 20, 1, '500g - 550g', 12000, 'https://lh3.googleusercontent.com/JYaTNYf9G-iVq1rvpD1glKfz8UU5NJmIkdrkodTRJkYlAZqQYL5yZZPJ4KSMW9XKneMcRuWxGxiJOfip8A=w185', 0, '2020-08-10 08:34:55', '2020-08-10 08:34:55'),
(3, 31, 22, 'Watermelon', 20, 1, '3kg', 90000, 'https://lh3.googleusercontent.com/Ax6chAFVIzfsTSXd3sCAtl9tpgXyIsBGFV39ULdwKqC46AxYhAVcUdgJyeWRKxhgkLlJU-ReRDQcOvPKiZk=w185', 0, '2020-08-10 08:34:55', '2020-08-10 08:34:55'),
(3, 32, 22, 'Guava', 20, 1, '1kg in pack', 17000, 'https://lh3.googleusercontent.com/ThgqobheT4zMyMppss5YW-rpmLq6VBP9nag6KUMT6X6_z8GPQ0FiSoeoPyq7cvQcJv0QGzJWLIed3g-wY2s=w185', 0, '2020-08-10 08:45:42', '2020-08-10 08:45:42'),
(3, 33, 22, 'Mango', 20, 1, '1kg in pack', 55000, 'https://lh3.googleusercontent.com/eaiKWirnc6NUYDfWK4crOU0Q5eXQc8UoUPSneDjIs2qGIv3QV2ChuYcdJdeTWB2LCehWQkJiuWlJg8HCWQ=w185', 0, '2020-08-10 08:45:42', '2020-08-10 08:45:42'),
(3, 34, 23, 'Chin-Su beef Pho', 140, 1, 'box 132g', 30000, 'https://lh3.googleusercontent.com/81deCTe9grTO_OobYsS6OG7ZuBfZH4lkNpZMJnqHm-qjP-XNU9CiexCDL8ye3x6i4HeU_qfQCmM5CaUCmw=w185', 0, '2020-08-10 08:48:01', '2020-08-10 08:48:01'),
(3, 35, 23, 'Vifon broth powder', 40, 1, '200g in pack', 5000, 'https://lh3.googleusercontent.com/L3uWCV_L_dBczkdLhPoeRBW1pgtD9XsiEPSW0fK-adpZpQofpYei2eYkSRvYcN-Ft3diKRA8_A5hC51n0A=w185', 0, '2020-08-10 08:48:01', '2020-08-10 08:48:01'),
(3, 36, 23, 'Beijing Ottogi Black Soybean Nodles', 40, 1, '500g in pack', 14000, 'https://lh3.googleusercontent.com/EZmloKHw_g33PGLQ7ybFrQNbs6yiqstMWuTqE0a80xeqF5jy5cMS6UsNyQUS1Z7yOrDePQgq_WG1FS4Jd0U=w185', 0, '2020-08-10 08:50:16', '2020-08-10 08:50:16'),
(3, 37, 23, 'Beef noodle soup Vina Acecook', 40, 1, '65g in pack', 5500, 'https://lh3.googleusercontent.com/QGTpwUcCsrrI9v4YM-jtzcyLJiP03g8i9ZCZow3L5ClP1sdNLq8xJl7kKZ1jyYPRLwAmVpSjelfG47HJ3w=w185', 0, '2020-08-10 08:50:16', '2020-08-10 08:50:16'),
(3, 38, 23, 'Vifon chicken Pho', 40, 1, '65g in pack', 6000, 'https://lh3.googleusercontent.com/ReENQbtpyk7pciC9727dGBjfsKtcPz9NIXGRfhauxLboQ7wdPJu9QBeBH31emxKetMjrFQy2hj9QtignBW6S=w185', 0, '2020-08-10 08:50:16', '0000-00-00 00:00:00'),
(3, 39, 23, 'Chin-Su chili garlic soy sauce', 50, 1, '250ml bottle', 13000, 'https://lh3.googleusercontent.com/b7hvbHRaRVpX1Pgt5388G0BgERQ-HRjxAVFE8eN0psT1kDYt4iZM0WzJeGHYPmLWq2k4_oGkDAPcQOqstg8=w185', 0, '2020-08-10 08:50:16', '2020-08-10 08:50:16'),
(3, 40, 23, 'Knorr', 50, 1, '900g', 75000, 'https://lh3.googleusercontent.com/QmscHa3EgLIhUIF_WuVFWW-gP7SyvmRoWrAGmej5PgQa87xgRC4iHtEY2DXYkuqfcPubwRQL4fytGzY_w7aq=w185', 0, '2020-08-10 08:50:16', '2020-08-10 08:50:16'),
(3, 41, 23, 'Meizan Soybean oil', 50, 1, 'bottle 1L', 42000, 'https://lh3.googleusercontent.com/gZk6TdEYOvTO8JCYB6HbL1mAKxfCmGsEY1ELhGuUEpfIGREAd6AhtGfJmx6VnTFsTmkvplqKc1tcnqSMdhg=w185', 0, '2020-08-10 08:50:16', '2020-08-10 08:50:16'),
(3, 42, 23, 'Cholimex ketchup', 40, 1, 'Bottle 270g', 12000, 'https://lh3.googleusercontent.com/rlaIqIAW8IXE5avsClp44GV9whC36IFwpKzw31em3DGPj39GhJT5ZeVcjTIHasv1A3u4xqJujDAQGm3E8d4=w185', 0, '2020-08-10 08:50:16', '2020-08-10 08:50:16'),
(3, 43, 23, 'Tuong An soybean oil', 60, 1, 'Bottle 1L', 50000, 'https://lh3.googleusercontent.com/Rtud9K0fgMpeElNBlAVTQlC5zO89wxEgP8HtXnDeCwaT3zEWMXNM4mbDthsNiGWu5RQTHXw56kjVvRNYAg=w185', 0, '2020-08-10 08:50:16', '2020-08-10 08:50:16'),
(3, 44, 23, 'Sugar', 50, 1, '1kg in pack', 20000, 'https://lh3.googleusercontent.com/LdGLHlUZILFDern7Wdjyg_2ZdsAHRLz-qnDwTb0Uzx1f4Nzqt6EJ6vtKGDauzqCCGqcimRWYQJT0wmn5Cg=w185', 0, '2020-08-10 08:50:16', '2020-08-10 08:50:16'),
(3, 45, 23, 'Korean seaweed', 40, 1, '20g in pack', 17000, 'https://lh3.googleusercontent.com/T7XouqUbFEwrIYITHFHD2qW2-kqBuLr7zx0JjjKNMEWuIhcG02N8rJR1K9tqrt_6FuaM2UqxT_3K8a1DE5M=w185', 0, '2020-08-10 08:50:16', '2020-08-10 08:50:16'),
(3, 46, 23, 'Koreno shrimp flavored noodle packs', 500, 1, '100g in pack', 12000, 'https://lh3.googleusercontent.com/aNAFnhlTkpds8h11B5rkTblyCmJT0UKnZnwyAmF1RzhYJstG_vJdJYXl3pPDxTSu0HtHQOwWi9z7drfbn7c=w185', 0, '2020-08-10 08:50:16', '2020-08-10 08:50:16'),
(3, 47, 24, 'Fụi Beef Steak', 30, 1, '200g in pack', 160000, 'https://lh3.googleusercontent.com/0vVwhocT0epSPvjNh2ktENfCYRrAljrcIaTFKwzhhcp3RatSqr4qaNK6vkffwz8re5dFssbaFNfFQnE_9A=w185', 0, '2020-08-10 09:09:11', '2020-08-10 09:09:11'),
(3, 48, 24, 'American beef', 20, 1, '1300g in pack', 276000, 'https://lh3.googleusercontent.com/bOdeREuwV0LKM_3ykyMT9S0eM4E4rAGBcpkilA02392g-EAGg0jBwSKKVJ28_B_ar9cTF_Rcw0u5r-fDlAA=w185', 0, '2020-08-10 09:09:11', '2020-08-10 09:09:11'),
(3, 49, 24, 'Frozen fíh balls', 20, 1, '500g in pack', 60000, 'https://lh3.googleusercontent.com/cmcAG3y4_YVflaRev_BnPoPytILuHk6uQ6yMr9-LwCwak_WMT3sWjvqZP_N00hEM2os9_ftmm3MrcWE2bKhP=w185', 0, '2020-08-10 09:09:11', '2020-08-11 09:09:11'),
(3, 50, 24, 'Pig Sausage', 50, 1, 'box of 60g', 20000, 'https://lh3.googleusercontent.com/OruqHsPcrzcfgxilmcjUkzVTxzIIoGZEPQCu0XxnZ7G5la9Nu9hya30S6xQcMbbaIpEw8lZfI1xU-J-pkO8=w185', 0, '2020-08-10 09:09:11', '2020-08-10 09:09:11'),
(3, 51, 24, 'Frozen potatoes', 30, 1, '60g in pack', 80000, 'https://lh3.googleusercontent.com/yLALB_Y5we_81TOFY6AW2U91hwNWWNo0dxL1GHGCSO9jbEZ75jo3YYX3pwMtV0oXrcVbE215uKpdPD-NqA=w185', 0, '2020-08-10 09:09:11', '2020-08-10 09:09:11'),
(3, 52, 24, 'Vissan fish sauce', 40, 1, 'Box of 170g', 15000, 'https://lh3.googleusercontent.com/7EHfDf772FcPm0ViwvkucIe8W9j_yVTpFu5_GCTn1tldW3aDgwW2j4VLefCgBTcTyidkEd_FvkOe5Z3_DqE=w185', 0, '2020-08-10 09:09:11', '2020-08-10 09:09:11'),
(3, 53, 24, 'Kimchi', 40, 1, '100g in bag', 15000, 'https://lh3.googleusercontent.com/eBCyM-RFKBckIE7tazMF5OAYd1RW5oK8sby4qdS8KKtedav8BfnKOc2uaNZTsnBmC_eYnLGzdIbfWHpJSBM=w185', 0, '2020-08-10 09:09:11', '2020-08-10 09:09:11'),
(3, 54, 25, 'Ong Tho condensed milk', 40, 1, '40g box', 5000, 'https://lh3.googleusercontent.com/I6V-MYTfpKbNNLBScmGLm9pp9TPIvflUGlArXbZMGTo7BhN_ia_XF_uyzClLCDJH60Hdpg-s1mM7uigFaY0=w185', 0, '2020-08-10 09:40:50', '2020-08-10 09:40:50'),
(3, 55, 25, 'TH True Milk', 40, 1, 'Box 1L', 36000, 'https://lh3.googleusercontent.com/ocau6JUlHeuLkH3iZiirC-Hr8Ypn3uB9f95bi-1jge0oJgTEnpcQChK7NE4griQzI2haadLXuyqzJOhFDhk=w185', 0, '2020-08-10 09:42:10', '2020-08-10 09:42:10'),
(3, 56, 25, 'Vinasoy Fami', 20, 1, '200ml', 4000, 'https://lh3.googleusercontent.com/uSTnLXj3P0F_beAIRnNSXLpd4KzRHiiBFVZzGtRdRbklUunfr7U0SZJIAjt_7cw3jHjlYCy1dLR-onVhnMQ=w185', 0, '2020-08-10 09:42:10', '2020-08-10 09:42:10'),
(3, 57, 25, 'Low-Sugar fresh milk', 20, 1, '220ml 1 bag', 7000, 'https://lh3.googleusercontent.com/QJCrumyN0l4aLb3Npd3PiR0Nkxe-hjqVY4Ynq_oS-TbKq5kRIf6giHysNDxtGgTj8sP3eT1znIVNvfjApoM=w185', 0, '2020-08-10 09:42:10', '2020-08-10 09:42:10'),
(3, 58, 25, 'Vinamilk sugar-free yogurt', 30, 1, 'Box of 100g', 6000, 'https://lh3.googleusercontent.com/WCHqDjKRdJtPzRPy25VgOKG1VR-vLSPMEgf90vXe_vLtBeXl41etrgZ_eShPN9XNtV-JGwXaohYw_5cHgg=w185', 0, '2020-08-10 09:42:10', '2020-08-10 09:42:10'),
(3, 59, 25, 'SuSu Banana apple yogurt', 50, 1, 'box 80g', 7000, 'https://lh3.googleusercontent.com/9QFXhJm2pUbxwG5jyu3NXDWtIqPdT1u-E8GwfdFsWTgejloEH9qwmjM4cmsNT7Aqb9ZpfdAIgj8RiPOWXw=w185', 0, '2020-08-10 09:42:10', '2020-08-10 09:42:10'),
(3, 60, 25, 'Vinamil probi yogurt has sugar', 300, 1, '100g in box', 7000, 'https://lh3.googleusercontent.com/9QFXhJm2pUbxwG5jyu3NXDWtIqPdT1u-E8GwfdFsWTgejloEH9qwmjM4cmsNT7Aqb9ZpfdAIgj8RiPOWXw=w185', 0, '2020-08-10 09:42:10', '2020-08-10 09:42:10'),
(3, 61, 25, 'Milk chocolate', 500, 1, '220ml in bag', 7000, 'https://lh3.googleusercontent.com/vhpOBbwEI9VAGwPOXN2dhv3V7EDZC0LhUawaPOEYj9_iK0c_iwpaf1VH2-uIdwBYYCG1Qmf_XvgXgDhlfDg=w185', 0, '2020-08-10 09:42:10', '2020-08-10 09:42:10'),
(3, 62, 25, 'Cheese Beef Laughing', 1200, 1, '120g box', 31000, 'https://lh3.googleusercontent.com/2OAwHjwitXui8T9pbutK0DcPKNjf_MxkzKnANj-QEJ7w9Vh1-XjuoJP5eUe2lgPiCxVoHA9KH62jStm-sZ8=w185', 0, '2020-08-10 09:42:10', '2020-08-10 09:42:10'),
(3, 63, 25, 'Ong Tho sweetened condensed milk', 30, 1, '380g box', 23000, 'https://lh3.googleusercontent.com/nbTTcHmSOqNbCO9jmzY8XG3YAipyRFc_5lof9cDhNPEICnYo6Zdtx_Ay-dLPA_tJRnBkPnKrGgWLHcloMw=w185', 0, '2020-08-10 09:42:10', '2020-08-10 09:42:10'),
(3, 64, 25, 'Pediasure', 200, 1, '237ml', 40000, 'https://lh3.googleusercontent.com/Zl6XkwXhdSEsBCQ3GSwtrlWuKkIN93O1zo3keuBm_9YBP42OPgOgdad024Ik58ve47GJ9q3pwHYOJkts4GuH=w185', 0, '2020-08-10 09:42:10', '2020-08-10 09:42:10'),
(3, 65, 25, 'Betagen', 40, 1, '4 bottle', 23000, 'https://lh3.googleusercontent.com/VewNEsPcMhYlZihldOJ1AAKzVRRk8G2EA77Y287gf63NfxfGCgDQJb7x-hLkV3a9GlSgQo5uIDictn-0Xg=w185', 0, '2020-08-10 09:42:10', '2020-08-10 09:42:10'),
(3, 66, 25, 'Pure fresh avocado', 30, 1, '100g in pack', 33000, 'https://lh3.googleusercontent.com/nQrxP1DQSutjtjgwkzHx0LzODy1UVFIaxxOxMtyWHIt3vhGt5IKDvODbgINEuKAcGvExzfukxQqn3x7XQA=w185', 0, '2020-08-10 09:42:10', '2020-08-10 09:42:10'),
(3, 67, 25, 'Parmesan cheese ', 30, 1, 'pack 100g', 72000, 'https://lh3.googleusercontent.com/_iOcu8Ma9H_ln0kWRNI10UhjVqUT6fVclJl_tAibparX7GzbmG4rN9Tl8x1q2fRuKHsDUh6diScgaky15MsL=w185', 0, '2020-08-10 09:42:10', '2020-08-10 09:42:10'),
(3, 68, 25, 'Ensure Gold', 100, 1, '560g pack', 355000, 'https://lh3.googleusercontent.com/4TfFNiacoYtzARh0w8fNRdc39AZiHYreIXh582rBQ0x3OBE3zcZoGa6t6eG55lbXdVku9tCyxtHv-x9Jo-62=w185', 0, '2020-08-10 09:42:10', '2020-08-10 09:42:10'),
(3, 69, 26, 'Milo 400g', 30, 1, '400g bottle', 68000, 'https://lh3.googleusercontent.com/2-2n1jSdGx8c8in7K64L8unfHgQGqb6c8auOJ3_ENKV3U5ok993lIZ8CelPuInD5qHzWLGD_NalbDrwk1Q=w185', 0, '2020-08-10 16:56:36', '2020-08-10 16:56:36'),
(3, 70, 26, 'Aquafina', 20, 1, '500ml bottle', 4500, 'https://lh3.googleusercontent.com/3wfPs-2u4ECupTLoqT1_RSQeAruxEatcmhUAmGO1fN_IBtJVM8AkQJEHrjaXBL7T_Rg0_gQg4onquoZC_G7V=w185', 0, '2020-08-10 16:56:36', '2020-08-10 16:56:36'),
(3, 71, 26, 'Coca Cola ', 19, 2, '330ml in', 9000, 'https://lh3.googleusercontent.com/wGAH06T2OgpnqdUWYKfFeNQtsDyfZpdOlxuCAeMKXulLI9HwU2mFaU6C6QBEgs4fE_FcUZNj-l1zqLwjTmg=w185', 0, '2020-08-10 16:56:36', '2020-08-10 16:56:36'),
(3, 72, 26, 'Habeco Hanoi beer', 300, 1, 'https://lh3.googleusercontent.com/XJKQGZE44ZovWh8vc6dfKVnN-7lmbkf0M3dI1HV-WOFxa_r-rQ1_YTqgiGc2DxssxmtrkstBfUe9RY93aGM=w185', 10000, 'https://lh3.googleusercontent.com/XJKQGZE44ZovWh8vc6dfKVnN-7lmbkf0M3dI1HV-WOFxa_r-rQ1_YTqgiGc2DxssxmtrkstBfUe9RY93aGM=w185', 0, '2020-08-10 16:56:36', '2020-08-10 16:56:36'),
(3, 73, 26, 'Strongbow ', 300, 1, '330ml', 18000, 'https://lh3.googleusercontent.com/s2UPKrxkMoj2_zuBJh6SkKGbxCFfyzujwe1wWM4yhES5Ueb12gMDAM0-qNc1gp-at8xDRbQK9vzNW-GJfw=w185', 0, '2020-08-10 16:56:36', '2020-08-10 16:56:36'),
(3, 74, 26, 'Lavie water', 30, 1, 'Bottle 350ml', 4000, 'https://lh3.googleusercontent.com/RumI8wakUQsAe0FC6Tho78CWa2G99JnJlEkYRkLcib7P91zrRN59TZt3fWmycRXzLKafrQZfuodIsr9ZtmE=w185', 0, '2020-08-10 16:56:36', '2020-08-10 16:56:36'),
(3, 75, 26, 'Tiger beer', 28, 3, '330ml', 16000, 'https://lh3.googleusercontent.com/0ZGx8SJbGrS8BrOoCWEOFX4ekPsofzYn01AajUQcuw3wkHJ4Y8wP3UkcxuUUBQFNIV9v-SAIjXcdCW3109Y=w185', 0, '2020-08-10 16:56:36', '2020-08-10 16:56:36'),
(3, 76, 26, 'Fanta orange-flavored', 20, 1, '330ml', 9000, 'https://lh3.googleusercontent.com/dNmyt5ZJcotKQ4y8_BsBo24dWzZaYuj1uCGR8iU_py8nCS4fLg9hQh5pR1D79VCnTllvxeKZ5ffrtoB3Qo0=w185', 0, '2020-08-10 16:56:36', '2020-08-10 16:56:36'),
(3, 77, 26, 'Lipton Ice Tea', 30, 1, '224g', 29000, 'https://lh3.googleusercontent.com/kbUych3GVsofsc_GGIQj1Al7vQolrGQpbFW_iSk_QmMaXs3Pfz9q83yLH_C9ecv5_TmB8SEPX9_vl1WMNvn9=w185', 0, '2020-08-10 16:56:36', '2020-08-10 16:56:36'),
(3, 78, 26, 'C2 green tea apple', 20, 1, '360ml bottle', 6600, 'https://lh3.googleusercontent.com/_fd44fBoQPvEkIm_c8WgvShukShdvL4XPsdqz52sS_yQA9yi_EF6XiAXWMf3wbDlSPBi4Fgby6Gz5MBcHS0=w185', 0, '2020-08-10 16:56:36', '2020-08-10 16:56:36'),
(3, 79, 26, 'G7 3 in 1', 0, 0, '336g', 52000, 'https://lh3.googleusercontent.com/aqyZPXGImKK8dJTckLUwgly9X3J1_bpGyUYW3hH34S0oe4IT5Ni0Wtkj_sIHskGXdqlE5Z2cDu5LKLtYS9Nc=w185', 0, '2020-08-10 08:07:59', '2020-08-10 08:07:59'),
(3, 81, 26, 'Nescafe', 30, 1, '30g box', 23000, 'https://lh3.googleusercontent.com/-pX3vUMVHDXnOcHOr_J1e_1wa47i1whbiIDWvz6goZSAsvKOAAFKb5rzakn9S62BlBDzVMcFjwTTNOR2TP4=w185', 0, '2020-08-10 16:56:36', '2020-08-10 16:56:36'),
(3, 82, 26, '7up bottle 1.5L', 40, 1, '1.5L in bottle', 15000, 'https://lh3.googleusercontent.com/o7PFeYt4U1IDOGHB7Lz_et0OlL5Y7HFQNfrhbrtmvo203dRCtCLQJoAornzLgMkPOtwSqmlPLfhqZkgalw=w185', 0, '2020-08-10 16:56:36', '2020-08-10 16:56:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id_roles` bigint(20) UNSIGNED NOT NULL,
  `name_roles` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id_roles`, `name_roles`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-08-03 02:23:40', '2020-08-03 02:23:40'),
(2, 'customer', '2020-08-02 02:24:10', '2020-08-02 02:24:10'),
(3, 'employee', '2020-08-03 00:55:34', '2020-08-03 00:55:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identity_cart` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wards` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `gender`, `phone`, `identity_cart`, `wards`, `district`, `city`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'test1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test1@gmail.com', NULL, '$2y$10$l0WrH8XjJY0lrx/sN1xZw.rH/xZB1BvzlMPNuDSazlcE2tHP9T0mu', NULL, '2020-08-02 19:22:26', '2020-08-02 19:22:26', 1),
(2, 'smileahjhj', NULL, NULL, '0987456123', NULL, '8 Tôn Thất Thuyết, Hà Nội', NULL, NULL, 'test2@gmail.com', NULL, '$2y$10$snTIUde660ZkRAMgk6bJVuzaXmcUQca5xjzQC0SKZXMmPpk3ljuEq', NULL, '2020-08-02 19:26:13', '2020-08-17 00:58:12', 1),
(3, 'test3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test3@gmail.com', NULL, '$2y$10$a/RJYLnFCUy6YuhHJbG1QOPXvwZOsczY6GWFwK.M32UK9REtwjzUO', NULL, '2020-08-03 00:10:58', '2020-08-14 18:44:47', 0),
(6, 'tran Ngoc hai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kimgaru0110@gmail.com', NULL, '$2y$10$FMRtlcFw6yhJnJc.uTkbbuHsw4CPTdBSozm.rpzkSFdylNbcRi4ii', NULL, '2020-08-10 00:45:48', '2020-08-14 18:43:58', 0),
(7, 'thienphu07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thienphu.dev97@gmail.com', NULL, '$2y$10$XQsFA3Vy71tt7TOOQmlxde7KrVG3uNAEAKOxITO.RzIoly2bGAY1e', NULL, '2020-08-14 18:44:31', '2020-08-14 18:44:31', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`),
  ADD KEY `category_id_user_foreign` (`id_user`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`),
  ADD KEY `contact_id_user_foreign` (`id_user`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `image_product`
--
ALTER TABLE `image_product`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `image_product_id_product_foreign` (`id_product`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `order_id_employee_foreign` (`id_employee`),
  ADD KEY `order_id_customer_foreign` (`id_customer`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id_order_detail`),
  ADD KEY `order_detail_id_product_foreign` (`id_product`),
  ADD KEY `order_detail_id_order_foreign` (`id_order`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id_position`),
  ADD KEY `position_id_user_foreign` (`id_user`),
  ADD KEY `position_id_roles_foreign` (`id_roles`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `product_id_user_foreign` (`id_user`),
  ADD KEY `product_id_category_foreign` (`id_category`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

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
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `image_product`
--
ALTER TABLE `image_product`
  MODIFY `id_image` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id_order` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id_order_detail` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `position`
--
ALTER TABLE `position`
  MODIFY `id_position` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `image_product`
--
ALTER TABLE `image_product`
  ADD CONSTRAINT `image_product_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `order_id_employee_foreign` FOREIGN KEY (`id_employee`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_id_order_foreign` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`),
  ADD CONSTRAINT `order_detail_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Các ràng buộc cho bảng `position`
--
ALTER TABLE `position`
  ADD CONSTRAINT `position_id_roles_foreign` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_roles`),
  ADD CONSTRAINT `position_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`),
  ADD CONSTRAINT `product_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
