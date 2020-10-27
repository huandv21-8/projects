-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 04:45 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_topic_blog` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `id_topic` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_category` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `id_topic`, `id_user`, `name_category`, `image_category`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Asernal', 'https://scontent.fhan2-6.fna.fbcdn.net/v/t1.0-9/120393159_10158475081922713_3737630690179640248_o.jpg?_nc_cat=104&_nc_sid=730e14&_nc_ohc=gxnFYyRIi70AX9to1sc&_nc_ht=scontent.fhan2-6.fna&oh=2dd8c23ecd5cc19ed0328e598de6b141&oe=5F9B9519', 0, '2020-10-01 22:54:49', '2020-10-01 22:54:49'),
(2, 1, 2, 'Chelsea', 'https://scontent.fhan2-3.fna.fbcdn.net/v/t1.0-9/120301001_10159035115667259_556070956408622432_o.jpg?_nc_cat=108&_nc_sid=730e14&_nc_ohc=aRH_gA31vd0AX9_uiFp&_nc_ht=scontent.fhan2-3.fna&oh=d1ce8dc85d2fde51ac4d5227d3108846&oe=5F9C4FD8', 0, '2020-07-23 16:52:34', '2020-08-03 15:04:36'),
(3, 2, 2, 'Tuyển Anh', 'https://media.bongda.com.vn/files/ngocanh.nguyen/2018/06/15/harry-kane-1907.jpg', 0, '2020-07-25 21:38:37', '2020-07-26 10:24:29'),
(4, 2, 2, 'Tuyển Đức', 'https://dothethao.net.vn/wp-content/uploads/2019/11/tong-hop-ao-bong-da-cac-doi-tuyen-quoc-gia-euro-2020-6.jpg', 0, '2020-08-23 21:05:42', '2020-09-28 21:11:49'),
(5, 3, 2, 'Áo Polo', 'https://dothethao.net.vn/wp-content/uploads/2020/08/ao-bong-da-polo-tuyen-italia-euro-2020-7-768x768.jpg', 0, '2020-08-03 15:04:36', '2020-08-03 15:04:36'),
(6, 3, 2, 'Áo Riki', 'https://dothethao.net.vn/wp-content/uploads/2020/08/ao-bong-da-riki-quator-xanh-bich-4-768x768.jpg', 0, '2020-08-03 15:04:36', '2020-08-03 15:04:36'),
(7, 4, 2, 'Giày Mira', 'https://dothethao.net.vn/wp-content/uploads/2020/08/giay-da-bong-mira-lux-20-3-mau-xanh-ngoc-phoi-den-1-768x768.jpg', 0, '2020-08-03 15:04:36', '2020-08-03 15:04:36'),
(8, 4, 2, 'Giày Kamito', 'https://dothethao.net.vn/wp-content/uploads/2019/09/giay-bong-da-kamito-quang-hai-mau-xanh-3-768x768.png', 0, '2020-09-28 21:11:49', '2020-09-28 21:11:49'),
(9, 5, 2, 'Quả bóng dá size 3', 'https://dothethao.net.vn/wp-content/uploads/2020/04/qua-bong-da-ngoai-hang-anh-2020-768x768.jpg', 0, '2020-09-28 21:11:49', '2020-09-28 21:11:49'),
(10, 5, 2, 'Quả bóng đá size 4', 'https://dothethao.net.vn/wp-content/uploads/2020/03/qua-bong-da-serie-a-2020-mau-4-768x768.jpg', 0, '2020-08-23 14:51:09', '2020-09-28 21:11:49'),
(11, 5, 2, 'Quả bóng đá size 5', 'https://dothethao.net.vn/wp-content/uploads/2020/04/qua-bong-da-champion-league-1-1-768x768.png', 0, '2020-08-25 09:30:07', '2020-09-28 21:11:49'),
(12, 6, 2, 'Găng tay thủ môn', 'https://dothethao.net.vn/wp-content/uploads/2020/07/gang-tay-thu-mon-adidas-predator-20-urg-2-0-mau-3-1-768x768.jpg', 0, '2020-07-23 16:52:34', '2020-07-31 15:25:53'),
(13, 6, 2, 'Vớ, tất bóng đá', 'https://dothethao.net.vn/wp-content/uploads/2019/09/tat-bong-da-chong-tron-chong-truot-mau-do-768x768.jpg', 0, '2020-07-25 21:38:37', '2020-08-03 15:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `contact_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id_image` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `link_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_money` float NOT NULL,
  `delivery_address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `style` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order_detail` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `total_price` float NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id_position` int(11) NOT NULL,
  `name_position` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id_position`, `name_position`) VALUES
(1, 'admin'),
(2, 'employee'),
(3, 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_topic` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_product` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `size_list`
--

CREATE TABLE `size_list` (
  `id_size` int(11) NOT NULL,
  `size_number` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `size_product`
--

CREATE TABLE `size_product` (
  `id_size_product` int(11) NOT NULL,
  `id_size` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `goods_sold` int(11) NOT NULL,
  `inventory` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `id_topic` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_topic` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id_topic`, `id_user`, `name_topic`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Áo câu lạc bộ', 0, '2020-10-01 22:51:20', '2020-10-01 22:51:20'),
(2, 2, 'Áo đội tuyển quốc gia', 0, '2020-10-01 22:51:20', '2020-10-01 22:51:20'),
(3, 2, 'Áo không logo', 0, '2020-10-01 22:51:20', '2020-10-01 22:51:20'),
(4, 2, 'Giày đá bóng ', 0, '2020-10-01 22:51:20', '2020-10-01 22:51:20'),
(5, 2, 'Quả bóng đá', 0, '2020-10-01 22:51:20', '2020-10-01 22:51:20'),
(6, 2, 'Phụ kiện khác', 0, '2020-10-01 22:51:20', '2020-10-01 22:51:20');

-- --------------------------------------------------------

--
-- Table structure for table `topic_blog`
--

CREATE TABLE `topic_blog` (
  `id_topic_blog` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_topic_blog` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `id_position` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `identity_cart` int(11) NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `id_position`, `email`, `password`, `name_user`, `age`, `gender`, `phone`, `identity_cart`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin@gmail.com', '123456789', 'admin', 19, 'male', 966469746, 7656273, 'thang loi', '2020-07-23 16:52:34', '2020-10-01 21:43:35'),
(2, 2, 'employee@gmail.com', '123456789', 'employee', 20, 'female', 32142536, 12345676, 'bac giang', '2020-07-25 21:38:37', '2020-07-26 10:34:27'),
(3, 3, 'customer@gmail.com', '123456789', 'customer', 21, 'male', 765643, 678232, 'mai dinh', '2020-08-23 21:05:42', '2020-09-28 21:11:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_topic_blog` (`id_topic_blog`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_topic` (`id_topic`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id_order_detail`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id_position`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_topic` (`id_topic`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `size_list`
--
ALTER TABLE `size_list`
  ADD PRIMARY KEY (`id_size`);

--
-- Indexes for table `size_product`
--
ALTER TABLE `size_product`
  ADD PRIMARY KEY (`id_size_product`),
  ADD KEY `id_size` (`id_size`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id_topic`),
  ADD KEY `topic_ibfk_1` (`id_user`);

--
-- Indexes for table `topic_blog`
--
ALTER TABLE `topic_blog`
  ADD PRIMARY KEY (`id_topic_blog`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_position` (`id_position`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id_order_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id_position` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `size_list`
--
ALTER TABLE `size_list`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `size_product`
--
ALTER TABLE `size_product`
  MODIFY `id_size_product` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id_topic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `topic_blog`
--
ALTER TABLE `topic_blog`
  MODIFY `id_topic_blog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`id_topic_blog`) REFERENCES `topic_blog` (`id_topic_blog`);

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `category_ibfk_2` FOREIGN KEY (`id_topic`) REFERENCES `topic` (`id_topic`);

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_topic`) REFERENCES `topic` (`id_topic`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);

--
-- Constraints for table `size_product`
--
ALTER TABLE `size_product`
  ADD CONSTRAINT `size_product_ibfk_1` FOREIGN KEY (`id_size`) REFERENCES `size_list` (`id_size`),
  ADD CONSTRAINT `size_product_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `topic`
--
ALTER TABLE `topic`
  ADD CONSTRAINT `topic_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `topic_blog`
--
ALTER TABLE `topic_blog`
  ADD CONSTRAINT `topic_blog_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_position`) REFERENCES `position` (`id_position`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
