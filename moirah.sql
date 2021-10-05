-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 02:56 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moirah`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `banner_name` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `banner_title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 Active 0 inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_name`, `banner_image`, `banner_title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(6, 'banner 1', 'images/banner/banner_image1631862454.jpeg', 'banner 1', 'banner 1', 1, '2021-09-17 07:07:34', '2021-09-17 07:07:34'),
(7, 'banner 2', 'images/banner/banner_image1631862481.jpeg', 'banner 2', 'banner 2', 1, '2021-09-17 07:08:01', '2021-09-17 07:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(200) NOT NULL,
  `blog_title` varchar(255) DEFAULT NULL,
  `blog_date` date DEFAULT NULL,
  `blog_content` text DEFAULT NULL,
  `blog_images` varchar(200) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 active 0 inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_date`, `blog_content`, `blog_images`, `status`, `created_at`, `updated_at`) VALUES
(1, 'blog 2', '2021-09-30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/blog/blog_image1630569187.jpeg', 1, '2021-09-02 07:47:06', '2021-09-02 07:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `attribute_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 active 0 inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Art', 'images/category/category_image1632909709.jpeg', 1, '2021-08-30 08:23:27', '2021-09-29 10:01:49'),
(2, 'Entertainment', 'images/category/category_image1632909740.jpeg', 1, '2021-08-30 08:24:47', '2021-09-29 10:02:20'),
(3, 'Educational & Innovation', 'images/category/category_image1632909762.jpeg', 1, '2021-09-01 06:51:46', '2021-09-29 10:02:42'),
(4, 'Life Skills', 'images/category/category_image1632909782.jpeg', 1, '2021-09-29 06:37:15', '2021-09-29 10:03:02'),
(5, 'Music', 'images/category/category_image1632909828.jpeg', 1, '2021-09-29 10:03:48', '2021-09-29 10:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(100) NOT NULL,
  `user_id` bigint(200) DEFAULT NULL,
  `user_ip_address` varchar(250) DEFAULT NULL,
  `post_id` bigint(200) DEFAULT NULL,
  `comment` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `user_ip_address`, `post_id`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, '127.0.0.1', 3, 'this is the best comments section', 1, '2021-09-25 12:36:27', '2021-09-25 12:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `footer_banner`
--

CREATE TABLE `footer_banner` (
  `id` int(100) NOT NULL,
  `footer_banner_title` varchar(200) DEFAULT NULL,
  `footer_banner_image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(20) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_banner`
--

INSERT INTO `footer_banner` (`id`, `footer_banner_title`, `footer_banner_image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Footer Banner', 'images/banner/footer_banner_image1632119056.jpeg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 1, '2021-09-20 06:24:16', '2021-09-20 06:24:16');

-- --------------------------------------------------------

--
-- Table structure for table `footer_slider`
--

CREATE TABLE `footer_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(20) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_slider`
--

INSERT INTO `footer_slider` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'slider 10', 'images/banner/footer_slider_image1632134751.jpeg', 1, '2021-09-20 10:06:04', '2021-09-20 10:45:51'),
(2, 'slider 2', 'images/banner/footer_slider_image1632132578.jpeg', 1, '2021-09-20 10:09:38', '2021-09-20 10:09:38'),
(4, 'slider 3', 'images/banner/footer_slider_image1632134331.jpeg', 1, '2021-09-20 10:38:51', '2021-09-20 10:38:52'),
(5, 'slider 4', 'images/banner/footer_slider_image1632134354.jpeg', 1, '2021-09-20 10:39:14', '2021-09-20 10:39:14'),
(6, 'slider 5', 'images/banner/footer_slider_image1632134373.jpeg', 1, '2021-09-20 10:39:33', '2021-09-20 10:39:34'),
(7, 'slider 6', 'images/banner/footer_slider_image1632134399.jpeg', 1, '2021-09-20 10:39:59', '2021-09-20 10:39:59');

-- --------------------------------------------------------

--
-- Table structure for table `main_section`
--

CREATE TABLE `main_section` (
  `id` int(11) NOT NULL,
  `main_section` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_section`
--

INSERT INTO `main_section` (`id`, `main_section`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Something About Me', 1, '2021-09-17 11:03:19', '2021-09-17 12:32:09'),
(2, 'Working Zone', 1, '2021-09-17 11:05:03', '2021-09-17 11:05:03'),
(3, 'Educational Qualification', 1, '2021-09-17 11:05:26', '2021-09-17 11:05:26'),
(5, 'Friends & Family', 1, '2021-09-17 11:06:05', '2021-09-17 11:06:05');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_id` varchar(50) DEFAULT NULL,
  `cancel_reason` text DEFAULT NULL,
  `cancel_comment` text DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `order_status` int(11) NOT NULL DEFAULT 1,
  `copoun_code` varchar(200) DEFAULT NULL,
  `payment_mode` varchar(50) NOT NULL,
  `payment_id` varchar(50) DEFAULT NULL,
  `payment_status` varchar(50) DEFAULT NULL,
  `shipping_charge` int(11) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_phone` varchar(20) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_address` varchar(200) DEFAULT NULL,
  `user_address_type` varchar(100) DEFAULT NULL,
  `user_country` varchar(100) DEFAULT NULL,
  `user_state` varchar(100) DEFAULT NULL,
  `user_city` varchar(150) DEFAULT NULL,
  `pin_code` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `sub_order_id` varchar(50) NOT NULL,
  `assign_vendor_id` int(11) DEFAULT NULL,
  `prod_name` varchar(255) DEFAULT NULL,
  `prod_id` int(11) NOT NULL,
  `attribute_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `sub_total` varchar(20) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_payment_transactions`
--

CREATE TABLE `order_payment_transactions` (
  `id` int(11) NOT NULL,
  `order_id` varchar(50) DEFAULT NULL,
  `payment_id` varchar(100) DEFAULT NULL,
  `response_data` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `page_content`
--

CREATE TABLE `page_content` (
  `id` int(100) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `status` int(50) NOT NULL DEFAULT 1 COMMENT '1 active 0 inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(255) NOT NULL,
  `plan_name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `status` int(20) DEFAULT 1 COMMENT '1 active 0 inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `plan_name`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'golden', '200', 1, '2021-09-02 10:02:02', '2021-09-02 10:25:29'),
(3, 'silver', '1000', 1, '2021-09-02 10:18:55', '2021-09-02 10:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `post_content`
--

CREATE TABLE `post_content` (
  `id` bigint(200) NOT NULL,
  `user_id` bigint(200) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `category_id` bigint(200) DEFAULT NULL,
  `post_image` varchar(255) DEFAULT NULL,
  `post_video` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 active 0 inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_content`
--

INSERT INTO `post_content` (`id`, `user_id`, `title`, `description`, `category_id`, `post_image`, `post_video`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'demo demo', 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. \r\ndemo', 1, NULL, 'images/post/video/post_video1632742704.mp4', 1, '2021-09-21 11:52:23', '2021-09-27 11:38:24'),
(2, 3, 'post 2', 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.', 1, 'images/post/images/post_image1632225181.jpeg', NULL, 1, '2021-09-21 11:53:01', '2021-09-27 06:24:42'),
(3, 2, 'The Ship', 'The Vasa ship capsized and sank in Stockholm in 1628. After over 330 years on the sea bed, the warship was salvaged and the Vasa Museum built around the only completely intact and best-preserved 17th-century ships in existence', 1, 'images/post/images/post_image1632297255.png', NULL, 1, '2021-09-22 07:54:15', '2021-09-22 07:54:15'),
(4, 3, 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', NULL, 'images/post/images/post_image1632743514.png', NULL, 1, '2021-09-24 06:34:52', '2021-09-27 11:51:54'),
(5, 3, 'this is the demo', 'this is the demo post i created', 4, 'images/post/images/post_image1632744000.jpeg', NULL, 1, '2021-09-27 11:59:13', '2021-09-29 07:34:39'),
(6, 2, '28-sep', 'demo demo demo', 2, 'images/post/images/post_image1632810373.jpeg', NULL, 1, '2021-09-28 06:26:13', '2021-09-28 06:26:13'),
(7, 3, 'demo demo', 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. \r\ndemo', 2, NULL, 'images/post/video/post_video1632742704.mp4', 1, '2021-09-21 11:52:23', '2021-09-27 11:38:24'),
(8, 3, 'demo demo', 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. \r\ndemo', NULL, NULL, 'images/post/video/post_video1632742704.mp4', 1, '2021-09-21 11:52:23', '2021-09-27 11:38:24'),
(9, 3, 'post 2', 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.', NULL, 'images/post/images/post_image1632225181.jpeg', NULL, 1, '2021-09-21 11:53:01', '2021-09-27 06:24:42'),
(10, 2, 'The Ship', 'The Vasa ship capsized and sank in Stockholm in 1628. After over 330 years on the sea bed, the warship was salvaged and the Vasa Museum built around the only completely intact and best-preserved 17th-century ships in existence', NULL, 'images/post/images/post_image1632297255.png', NULL, 1, '2021-09-22 07:54:15', '2021-09-22 07:54:15'),
(11, 3, 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', NULL, 'images/post/images/post_image1632743514.png', NULL, 1, '2021-09-24 06:34:52', '2021-09-27 11:51:54'),
(12, 3, 'this is the demo', 'this is the demo post i created', NULL, 'images/post/images/post_image1632744000.jpeg', NULL, 1, '2021-09-27 11:59:13', '2021-09-27 12:00:00'),
(13, 3, 'this is the demo', 'this is the demo post i created', NULL, 'images/post/images/post_image1632744000.jpeg', NULL, 1, '2021-09-27 11:59:13', '2021-09-27 12:00:00'),
(14, 3, 'art gallery', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, 'images/post/images/post_image1632899741.jpeg', NULL, 1, '2021-09-29 07:15:42', '2021-09-29 07:15:42'),
(15, 3, 'art 2', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,', 1, 'images/post/images/post_image1632900181.jpeg', NULL, 1, '2021-09-29 07:23:01', '2021-09-29 07:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(100) DEFAULT NULL,
  `vendor_id` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0-activate,1-de-activate',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `product_name`, `slug`, `product_code`, `short_description`, `long_description`, `category_id`, `vendor_id`, `tags`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(4, 'painting', 'C1ortT59G4', 'paint01', 'demo painting', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 2, '3', NULL, NULL, 1, '2021-10-05 07:03:45', '2021-10-05 07:42:47'),
(5, 'musical cd', 'a3yEbud8Lu', 'music 10', 'music cds', 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 2, '3', NULL, NULL, 1, '2021-10-05 07:59:43', '2021-10-05 07:59:43');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `products_id` int(11) NOT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `multiple_attribute` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `products_id`, `product_size`, `product_color`, `price`, `special_price`, `quantity`, `status`, `multiple_attribute`, `created_at`, `updated_at`) VALUES
(1, 4, '10*20 inch', 'black', '1500', NULL, '1', '1', 1, '2021-10-05 12:17:41', '2021-10-05 12:41:51');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `product_images_id` bigint(20) UNSIGNED NOT NULL,
  `products_id` int(11) NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '2-main-image,1-sub-image',
  `status` int(20) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`product_images_id`, `products_id`, `product_image`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'images/product/product_main_image1633419719.jpeg', 2, 1, '2021-10-05 07:03:45', '2021-10-05 07:41:59'),
(2, 5, 'images/product/product_main_image1633420783.jpeg', 2, 1, '2021-10-05 07:59:43', '2021-10-05 07:59:43'),
(9, 4, 'images/product/product_sub_image19752.jpeg', 1, 1, '2021-10-05 10:48:21', '2021-10-05 10:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `rating_info`
--

CREATE TABLE `rating_info` (
  `id` bigint(200) NOT NULL,
  `user_id` bigint(200) DEFAULT NULL,
  `user_ip_address` varchar(255) DEFAULT NULL,
  `post_id` bigint(200) DEFAULT NULL,
  `rating_action` int(50) DEFAULT NULL COMMENT '1: Like 2: Dislike',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating_info`
--

INSERT INTO `rating_info` (`id`, `user_id`, `user_ip_address`, `post_id`, `rating_action`, `created_at`, `updated_at`) VALUES
(5, 2, '127.0.0.1', 3, 1, '2021-09-23 11:21:42', '2021-09-23 11:21:42'),
(6, 2, '127.0.0.1', 1, 1, '2021-09-23 11:22:05', '2021-09-23 11:22:05'),
(7, 3, '127.0.0.1', 3, 1, '2021-09-24 06:13:14', '2021-09-24 06:13:14'),
(8, 2, '127.0.0.1', 4, 1, '2021-09-24 06:36:56', '2021-09-24 06:36:56'),
(9, 3, '127.0.0.1', 4, 1, '2021-09-25 06:36:19', '2021-09-25 06:36:19'),
(10, 2, '127.0.0.1', 6, 1, '2021-09-28 10:24:29', '2021-09-28 10:24:29'),
(11, 2, '127.0.0.1', 5, 1, '2021-09-28 10:24:31', '2021-09-28 10:24:31'),
(12, 2, '127.0.0.1', 12, 1, '2021-09-28 10:24:35', '2021-09-28 10:24:35'),
(13, 2, '127.0.0.1', 13, 1, '2021-09-28 10:24:37', '2021-09-28 10:24:37'),
(14, 2, '127.0.0.1', 11, 1, '2021-09-28 10:24:41', '2021-09-28 10:24:41'),
(15, 2, '127.0.0.1', 10, 1, '2021-09-28 10:24:45', '2021-09-28 10:24:45'),
(16, 2, '127.0.0.1', 2, 1, '2021-09-28 10:24:48', '2021-09-28 10:24:48'),
(17, 2, '127.0.0.1', 9, 1, '2021-09-28 10:24:51', '2021-09-28 10:24:51'),
(18, 2, '127.0.0.1', 7, 1, '2021-09-28 10:24:55', '2021-09-28 10:24:55'),
(19, 2, '127.0.0.1', 8, 1, '2021-09-28 10:24:57', '2021-09-28 10:24:57'),
(20, 3, '127.0.0.1', 6, 1, '2021-09-28 12:39:09', '2021-09-28 12:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `user_name` varchar(150) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `status` int(11) DEFAULT 0 COMMENT '0-active, 1-inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state_list`
--

CREATE TABLE `state_list` (
  `id` int(10) UNSIGNED NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_list`
--

INSERT INTO `state_list` (`id`, `state`) VALUES
(1, 'ANDAMAN AND NICOBAR ISLANDS'),
(2, 'ANDHRA PRADESH'),
(3, 'ARUNACHAL PRADESH'),
(4, 'ASSAM'),
(5, 'BIHAR'),
(6, 'CHATTISGARH'),
(7, 'CHANDIGARH'),
(8, 'DAMAN AND DIU'),
(9, 'DELHI'),
(10, 'DADRA AND NAGAR HAVELI'),
(11, 'GOA'),
(12, 'GUJARAT'),
(13, 'HIMACHAL PRADESH'),
(14, 'HARYANA'),
(15, 'JAMMU AND KASHMIR'),
(16, 'JHARKHAND'),
(17, 'KERALA'),
(18, 'KARNATAKA'),
(19, 'LAKSHADWEEP'),
(20, 'MEGHALAYA'),
(21, 'MAHARASHTRA'),
(22, 'MANIPUR'),
(23, 'MADHYA PRADESH'),
(24, 'MIZORAM'),
(25, 'NAGALAND'),
(26, 'ORISSA'),
(27, 'PUNJAB'),
(28, 'PONDICHERRY'),
(29, 'RAJASTHAN'),
(30, 'SIKKIM'),
(31, 'TAMIL NADU'),
(32, 'TRIPURA'),
(33, 'UTTARAKHAND'),
(34, 'UTTAR PRADESH'),
(35, 'WEST BENGAL'),
(36, 'TELANGANA');

-- --------------------------------------------------------

--
-- Table structure for table `sub_section`
--

CREATE TABLE `sub_section` (
  `id` int(11) NOT NULL,
  `main_section_id` int(100) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_section`
--

INSERT INTO `sub_section` (`id`, `main_section_id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'Mili Raoulin', 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.\r\n\r\nMany desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search', 1, '2021-09-18 05:23:41', '2021-09-18 05:23:41'),
(3, 2, 'Demo', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2021-09-18 06:58:28', '2021-09-18 06:58:28'),
(4, 3, 'demo3', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,', 1, '2021-09-18 06:59:02', '2021-09-18 06:59:02'),
(5, 4, 'demo4', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 1, '2021-09-18 07:02:25', '2021-09-18 07:02:25'),
(6, 5, 'demo 5', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 1, '2021-09-18 07:02:46', '2021-09-18 07:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `tabs`
--

CREATE TABLE `tabs` (
  `id` int(100) NOT NULL,
  `tab_name` varchar(200) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabs`
--

INSERT INTO `tabs` (`id`, `tab_name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fresh', 'fresh', 1, '2021-09-22 10:29:51', '2021-09-22 11:33:40'),
(2, 'Trending', 'trending', 1, '2021-09-22 10:30:14', '2021-09-22 11:34:06'),
(3, 'Hot', 'hot', 1, '2021-09-22 10:30:31', '2021-09-22 11:34:23'),
(4, 'Best in India', 'best-in-india', 1, '2021-09-22 10:30:50', '2021-09-22 11:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `temp_carts`
--

CREATE TABLE `temp_carts` (
  `temp_carts_id` int(11) NOT NULL,
  `session_id` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `attribute_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` int(20) NOT NULL DEFAULT 2 COMMENT '1 admin 2 user',
  `vendor_approval` int(50) NOT NULL DEFAULT 0,
  `status` int(20) NOT NULL DEFAULT 1 COMMENT '1 Active 0 inactive',
  `token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_verify` int(11) NOT NULL DEFAULT 0 COMMENT '0 inactive 1 active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `user_type`, `vendor_approval`, `status`, `token`, `account_verify`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, NULL, '$2y$10$w24PG7/VcghhKFZfHszFR.N4lRuVPtw9hmA3KSTl0i4nYNu7JcG8a', NULL, 1, 0, 1, NULL, 0, '2021-08-27 04:51:43', '2021-10-04 08:32:32'),
(2, 'rahul', 'rahul@gmail.com', '9876543210', NULL, '$2y$10$aXA0da5tuuB4lt//LIsOIuLCMUz3/7d1xIXaBZ2ymy5I1HoLMY5d2', NULL, 2, 0, 1, NULL, 1, '2021-09-01 11:25:19', '2021-10-04 10:19:56'),
(3, 'Prakash', 'prakash@gmail.com', '9876543210', NULL, '$2y$10$SCkIhehyQdlvMF5S9qToHeRxSKUrZhhwMFWAfmpcMb.yGg8b/DlR6', NULL, 2, 1, 1, NULL, 1, '2021-09-13 11:07:48', '2021-10-04 10:38:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `selected` tinyint(4) NOT NULL DEFAULT 0,
  `address` varchar(255) NOT NULL,
  `address_type` varchar(100) DEFAULT NULL,
  `apartment` varchar(150) DEFAULT NULL,
  `country` varchar(150) NOT NULL,
  `state` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `pin_code` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `locality` varchar(255) DEFAULT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `phone_alt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `name`, `phone`, `email`, `selected`, `address`, `address_type`, `apartment`, `country`, `state`, `city`, `pin_code`, `user_id`, `created_at`, `updated_at`, `locality`, `landmark`, `phone_alt`) VALUES
(1, 'Rajni', '9317060940', 'drhelpdesk2016@gmail.com', 0, 'mohali', 'Home Address', 'null', 'india', 'punjab', 'Mohali', 140301, 13, '2020-08-13 08:01:47', '2020-08-17 06:09:44', NULL, NULL, NULL),
(6, 'Ritik', '+911234567898', NULL, 0, 'Noida', NULL, 'Alpfa 1', 'india', 'uttar_pradesh', 'Morena', 123455, 27, '2020-08-14 08:36:42', '2020-08-22 05:46:42', NULL, NULL, NULL),
(8, 'ritik', '9340564510', 'ritikb001@gmail.com', 0, 'kansana Wali Gali', 'Home Address', NULL, 'india', 'harayana', 'Panchkula', 123456, 136, '2020-08-14 14:05:12', '2020-08-14 14:05:12', NULL, NULL, NULL),
(9, 'ANUJ RATHOURE', '07404197726', NULL, 0, 'URBAN ESTATE', NULL, 'flat no 1935 ff tdi city mohali', 'india', 'punjab', 'mohali', 160066, 40, '2020-08-15 03:55:37', '2020-08-15 03:55:37', NULL, NULL, NULL),
(11, 'Ritik', '9340564510', NULL, 0, 'Duttpura Morena', NULL, 'Kansana wali gali', 'india', 'madhya_pradesh', 'Morena', 476001, 49, '2020-08-17 05:25:29', '2020-08-17 05:25:29', NULL, NULL, NULL),
(12, 'test', '9317060940', 'wattsrajni@gmail.com', 0, 'chandigarh', 'Home Address', NULL, 'india', 'punjab', 'Chandigarh', 140301, 13, '2020-08-18 10:36:08', '2020-08-18 10:36:08', NULL, NULL, NULL),
(14, 'testet', '9317060940', 'drhelpdesk2016@gmail.com', 0, 'mohali', 'Home Address', NULL, 'india', 'punjab', 'Mohali', 140301, 68, '2020-08-21 09:28:02', '2020-08-21 09:28:02', NULL, NULL, NULL),
(15, 'rajni', '9317060940', 'drhelpdesk2016@gmail.com', 0, 'Chandigarh', 'Work Address', NULL, 'india', 'punjab', 'Sahibzada Ajit Singh Nagar', 140301, 68, '2020-08-21 11:13:49', '2020-08-21 11:13:49', NULL, NULL, NULL),
(16, 'Ritik Bansal', '9340564510', 'ritikb001@gmail.com', 0, 'Kansana Wali Gali', 'null', 'Duttpura', 'india', 'madhya_pradesh', 'Mohali', 123455, 78, '2020-08-22 10:54:50', '2020-09-02 12:25:04', NULL, NULL, NULL),
(17, 'Rajni', '9875937515', 'drhelpdesk2016@gmail.com', 0, 'Mohali', 'Home Address', 'Sunny Enclave', 'india', 'punjab', 'Mohali', 140301, 79, '2020-08-22 12:45:42', '2020-08-25 14:53:14', NULL, NULL, NULL),
(18, 'shobhna behera', '9323105990', NULL, 0, 'A-104, ochna, pride park, manpada, ghodbunder road, near R-mall', NULL, 'A-104, ochna, pride park', 'india', 'maharashtra', 'thane', 400607, 82, '2020-08-23 10:42:41', '2020-08-23 10:44:20', NULL, NULL, NULL),
(26, 'Test User', '7009236178', 'sunandasahore598@gmail.com', 0, 'Bestech Business Tower', 'Home Address', '12', 'india', 'punjab', 'Mohali', 160062, 24, '2020-08-25 04:34:52', '2020-08-26 11:20:46', NULL, NULL, NULL),
(30, 'testing', '9317609400', 'drhelpdesk2016@gmail.com', 0, 'Chandigarh', 'Home Address', NULL, 'india', 'punjab', 'Kharar', 140301, 79, '2020-08-25 14:54:28', '2020-08-25 14:54:28', NULL, NULL, NULL),
(34, 'saa', '9855262', NULL, 0, 'sadadasd', NULL, 'dasdasd', 'india', 'andaman_nicobar_island', 'sdsd', 1456320, 67, '2020-08-26 10:11:02', '2020-08-26 10:11:02', NULL, NULL, NULL),
(37, 'Test User 3', '9317060940', NULL, 0, 'Neighborhood Park Phase 10', NULL, '12', 'india', 'punjab', 'Mohali', 160062, 24, '2020-08-27 05:45:57', '2020-08-27 05:48:57', NULL, NULL, NULL),
(41, 'Ritik Bansal', '1234567890', NULL, 0, 'Alpha1 Greater Noida', NULL, 'Block E-198', 'india', 'uttar_pradesh', 'Greater Noida', 123455, 117, '2020-08-28 04:34:38', '2020-08-28 04:35:11', NULL, NULL, NULL),
(44, 'Ritik', '9340564510', NULL, 0, 'Noida', NULL, NULL, 'india', 'andaman_nicobar_island', 'Mohali', 123455, 119, '2020-08-28 07:33:38', '2020-09-02 12:23:29', NULL, NULL, NULL),
(46, 'User sunanda', '9875937515', 'sunandasahore07@gmail.com', 0, 'Neighborhood Park', 'Home Address', NULL, 'India', 'Punjab', 'Mohali', 160062, 97, '2020-08-28 10:49:35', '2020-08-28 10:49:35', NULL, NULL, NULL),
(50, 'Ritik', '7894561230', NULL, 0, 'xyz', NULL, '133', 'india', 'punjab', 'mohali', 140055, 27, '2020-08-29 08:39:00', '2020-08-29 08:39:00', NULL, NULL, NULL),
(54, 'Rajesh', '09971035955', NULL, 0, 'xyz', NULL, '133', 'india', 'punjab', 'mohali', 140055, 124, '2020-08-30 14:10:15', '2020-08-30 14:10:15', NULL, NULL, NULL),
(58, 'Rajni', '9875937515', 'drhelpdesk2016@gmail.com', 0, '11phase', 'Home Address', NULL, 'india', 'punjab', 'Sahibzada Ajit Singh Nagar', 160062, 128, '2020-09-01 09:51:49', '2020-09-01 09:51:49', NULL, NULL, NULL),
(59, 'Tesr', '9875937515', 'wattsrajnj@gmail.com', 0, 'Sec 1', 'Work Address', NULL, 'india', 'Haryana', 'Chandigarh', 160059, 128, '2020-09-01 09:54:07', '2020-09-01 09:54:07', NULL, NULL, NULL),
(60, 'tester', '9875937515', 'drhelpdesk2016@gmail.com', 0, 'main raod', 'Work Address', NULL, 'india', 'utter pradesh', 'Ghaziabad', 110093, 128, '2020-09-01 10:03:42', '2020-09-01 10:03:42', NULL, NULL, NULL),
(63, 'Rajni', '9875937515', 'drhelpdesk2016@gmail.com', 0, 'Lakshmi Narayan Mandir Phase 11', 'Home Address', NULL, 'India', 'PUNJAB', 'Mohali', 160062, 128, '2020-09-02 06:37:43', '2020-09-02 06:37:43', NULL, NULL, NULL),
(65, 'Sunanda Sahore', '9041747365', 'sunandasahore598@gmail.com', 0, 'Aensa Health Pvt Ltd Bestech Business Tower Mohali', NULL, '401', 'india', 'punjab', 'sahibzada ajit singh nagar', 160062, 120, '2020-09-02 11:07:07', '2020-09-21 03:57:31', NULL, NULL, NULL),
(69, 'Ajay ee', '9971128612', 'support@drhelpdesk.in', 0, 'Unit no 401 4th floor tower', 'null', 'Mohali', 'india', 'andaman_nicobar_island', 'Mohali', 302213, 116, '2020-09-03 10:34:14', '2020-09-03 17:56:26', NULL, NULL, NULL),
(71, 'Android', '7011637007', 'android@gmail.com', 0, 'b47, mu 1', 'Home Address', NULL, 'India', 'PUNJAB', 'Mohali', 201310, 120, '2020-09-03 12:48:26', '2020-09-03 12:48:26', NULL, NULL, NULL),
(72, 'Sharad', '7011637007', 'shradbca15@gmail.com', 0, 'B47,Mu1', 'Home Address', NULL, 'India', 'PUNJAB', 'Mohali', 201310, 5, '2020-09-03 13:21:02', '2020-09-03 13:21:02', NULL, NULL, NULL),
(73, 'Gandhi', '7011637007', 'shradbca15@gmail.com', 0, 'Sharad', 'Home Address', NULL, 'Inadia', 'PUNJAB', 'Mohali', 201310, 5, '2020-09-03 13:24:50', '2020-09-03 13:24:50', NULL, NULL, NULL),
(74, 'Kundan', '8375976617', 'kundan@gmail.com', 0, 'b151,mu1', 'Work Address', NULL, 'India', 'PUNJAB', 'Mohali', 201310, 5, '2020-09-03 13:26:24', '2020-09-03 13:26:24', NULL, NULL, NULL),
(75, 'Ajay', '9971128612', 'ajay@xpertwebtech.in', 0, 'Alpha', 'Home Address', NULL, 'india', 'UTTAR PRADESH', 'Greater Noida', 201308, 6, '2020-09-04 02:49:21', '2020-09-04 02:49:21', NULL, NULL, NULL),
(76, 'Mohit', '9999999999', 'ajaychaudhary2614@gmail.com', 0, 'Alpha 1 Block B Rd', 'Home Address', NULL, 'India', 'UTTAR PRADESH', 'Greater Noida', 944946, 6, '2020-09-04 02:49:56', '2020-09-04 02:49:56', NULL, NULL, NULL),
(77, 'jana', '9494949949', 'ajay@xpertwebtech.in', 0, 'ananajaj', 'Work Address', NULL, 'nsnajaj', 'UTTAR PRADESH', 'Greater Noida', 64664646, 6, '2020-09-04 02:50:25', '2020-09-04 02:50:25', NULL, NULL, NULL),
(80, 'Rajni', '9875937515', 'drhelpdesk2016@gmail.com', 0, 'sec 1, Near  Lake.', 'Home Address', NULL, 'india', 'PUNJAB', 'Chandigarh', 160062, 138, '2020-09-04 06:59:03', '2020-09-04 06:59:03', NULL, NULL, NULL),
(81, 'Shaurya', '7011637007', 'shaurya@gmail.com', 0, 'b45,mu1', 'Home Address', NULL, 'India', 'ASSAM', 'Adari', 201310, 5, '2020-09-04 07:11:32', '2020-09-04 07:11:32', NULL, NULL, NULL),
(83, 'Divyanshu Raj Karan', '9711620602', 'karandivyanshuraj@gmail.com', 0, 'Paschim Darwaza', 'Home Address', NULL, 'India', 'BIHAR', 'Patna', 800008, 113, '2020-09-04 07:28:25', '2020-09-04 07:28:25', NULL, NULL, NULL),
(85, 'Test', '9875937515', 'drhelpdesk2016@gmail.com', 0, 'phase  66,', 'Work Address', NULL, 'india', 'PUNJAB', 'Mohali', 160062, 138, '2020-09-04 09:27:37', '2020-09-04 09:27:37', NULL, NULL, NULL),
(86, 'Test', '9875937515', 'wattsrajni@gmail.com', 0, 'Dharampur', 'Other Address', NULL, 'india', 'GUJRAT', '\"Dharampur', 173209, 138, '2020-09-04 09:30:24', '2020-09-04 09:30:24', NULL, NULL, NULL),
(87, 'Ritik Bansal', '9340564510', 'ritikb001@gmail.com', 0, 'Kansana Wali Gali', NULL, NULL, 'india', 'madhya_pradesh', 'Morena', 476001, 144, '2020-09-05 08:46:50', '2020-09-05 08:46:50', NULL, NULL, NULL),
(88, 'Ritik', '9752409869', 'ritikb001@gmail.com', 0, 'Kansana Wali Gali', NULL, 'Duttpura', 'india', 'madhya_pradesh', 'Gwalior', 476001, 120, '2020-09-07 05:59:48', '2020-09-07 06:04:15', NULL, NULL, NULL),
(89, 'Ritik Bansal', '9340564510', 'ritikb001@gmail.com', 0, 'Kansana Wali Gali', NULL, 'Duttpura', 'india', 'chandigarh', 'Mohali', 234561, 146, '2020-09-07 09:03:50', '2020-09-07 09:04:11', NULL, NULL, NULL),
(94, 'preeti singh', '07838132665', 'preeti.singh@drhelpdesk.in', 0, 'Unit No - 401 , 4th Floor, Tower - A , Bestech Business Towers , Mohali, Punjab - 160066', NULL, 'Bestech Business Towers', 'india', 'chandigarh', 'Mohali', 160066, 157, '2020-09-08 07:13:22', '2020-09-08 07:13:22', NULL, NULL, NULL),
(95, 'Divyanshu Raj Karan', '9711620602', 'karandivyanshuraj@gmail.com', 0, 'T.P.lane Paschim Darwaza patna city', 'null', 'null', 'india', 'PUNJAB', 'sahibzada ajit singh nagar', 160043, 167, '2020-09-09 07:00:49', '2020-09-09 08:51:31', NULL, NULL, NULL),
(97, 'etst', '140307', 'test@gmail.com', 0, 'test', NULL, NULL, 'india', 'punjab', 'Select a Location...', 835235, 169, '2020-09-09 08:46:44', '2020-09-09 08:46:44', NULL, NULL, NULL),
(98, 'Divyanshu Raj Karan', '09711620602', 'karandivyanshuraj@gmail.com', 0, 'T.P.lane Paschim Darwaza patna city', NULL, NULL, 'india', 'bihar', 'Patna', 800008, 167, '2020-09-11 18:00:12', '2020-09-11 18:00:12', NULL, NULL, NULL),
(99, 'SUNIL M NAVALGI', '9945631591', 'smnavalgi@gmail.com', 1, 'NO. 468/1, 14TH CROSS, 3RD MAIN, SHASTRINAGAR, OFF K R ROAD, BANGALORE', NULL, NULL, 'india', 'karnataka', 'Bangalore', 560028, 177, '2020-09-15 14:39:57', '2020-09-15 14:39:57', NULL, NULL, NULL),
(100, 'Sunanda Sahore', '9041747365', 'sunanda@gmail.com', 0, '468/1 14TH  CROSS,3RD MAIN SHASTRI NAGAR OFF', NULL, NULL, 'india', 'karnataka', 'Bangalore', 560028, 120, '2020-09-15 15:18:18', '2020-09-15 15:21:56', NULL, NULL, NULL),
(101, 'Kapil', '9821876364', 'securedkapil@gmail.com', 0, '1192 sector -9', NULL, NULL, 'india', 'haryana', 'Karnal', 132001, 178, '2020-09-15 15:57:34', '2020-09-15 15:57:34', NULL, NULL, NULL),
(102, 'kapil', '9821876364', 'kapil.k444@gmail.com', 0, '1192 sector-9 Urban Estate, Karnal', NULL, NULL, 'india', 'haryana', 'Karnal', 132001, 211, '2020-09-17 16:45:27', '2020-09-17 16:45:27', NULL, NULL, NULL),
(103, 'simranjeet kaur', '7657988262', 'brycewalker102@gmail.com', 1, '401, aensa health solutions pvt ltd, bestech business tower, sector 66, SAS nagar', NULL, '4th floor, 401 office', 'india', 'punjab', 'Mohali', 160062, 214, '2020-09-18 04:39:01', '2020-09-18 04:39:01', NULL, NULL, NULL),
(104, 'Sachin Bharat Khimji', '9880742600', 'sachinkhimji@gmail.com', 0, 'DivyaSree Technopolis 77 East FE 45', NULL, 'Yamalur Main Road', 'india', 'karnataka', 'Bangalore', 560037, 215, '2020-09-18 04:52:26', '2020-09-19 06:59:59', NULL, NULL, NULL),
(105, 'Bhaskar Chatterjee', '9342201538', 'bhaskarchatt@gmail.com', 0, 'B-701,Sethna Power Tower, Babusapalya, Agara Main Road, Kalyannagar', NULL, 'Sethna Power Tower', 'india', 'karnataka', 'Bangalore', 560043, 216, '2020-09-18 05:00:11', '2020-09-18 05:00:11', NULL, NULL, NULL),
(106, 'Ruchika', '8725882368', 'ruchikakatoch268@gmail.com', 0, 'Aensa health solutions sco 401 tower-A bestech business tower sector- 66 mohali', 'Work Address', NULL, 'india', 'PUNJAB', 'Mohali', 160066, 213, '2020-09-18 05:19:25', '2020-09-18 05:19:25', NULL, NULL, NULL),
(108, 'Shilpa Sriramanan', '9886638682', 'shilpajvn@gmail.com', 0, 'Bannerghatta Main Road', NULL, 'B1006, Mantri Elegance', 'india', 'karnataka', 'Bangalore', 560076, 218, '2020-09-18 05:42:35', '2020-09-18 05:42:35', NULL, NULL, NULL),
(109, 'parul saini', '9875937506', 'sainiparul296@gmail.com', 0, '1344/sec-9 urban estate Karnal Hariyana 132001', 'Home Address', NULL, 'india', 'HARYANA', 'Karnal', 132001, 224, '2020-09-18 06:02:09', '2020-09-18 06:02:09', NULL, NULL, NULL),
(110, 'Esha', '9875937503', 'esha.trishal1123@gmail.com', 1, '401  bestech business Tower mohali', 'Work Address', 'near Bestech Mall', 'india', 'PUNJAB', 'Mohali', 160062, 223, '2020-09-18 06:05:48', '2020-10-26 06:03:40', NULL, NULL, NULL),
(111, 'Sheela Devi', '9896018255', 'sheeladevi13453@gmail.com', 0, 'house no 1344 sector 9 karnal', 'Home Address', NULL, 'india', 'HARYANA', 'Karnal', 132001, 226, '2020-09-18 06:52:56', '2020-09-18 06:52:56', NULL, NULL, NULL),
(112, 'Mukesh', '9459094339', 'mukesh@webhopers.in', 1, '#2940', NULL, NULL, 'india', 'haryana', 'Panchkula', 134113, 227, '2020-09-18 10:10:05', '2020-09-25 06:10:36', NULL, NULL, NULL),
(113, 'Raghothama', '9845985737', 'rvijendr@gmail.com', 0, '428, STREET 81, CONCORDE NAPA VALLEY,', NULL, 'KANAKAPURA ROAD, KAGGALI PURA', 'india', 'karnataka', 'Bangalore', 560082, 212, '2020-09-18 11:59:34', '2020-09-18 11:59:34', NULL, NULL, NULL),
(114, 'Varadaraju chandrashekar', '9902504444', 'chandrutribhuvan@gmail.com', 0, '17, 1st cross road,', NULL, 'Raj Mahal Vilas extension', 'india', 'karnataka', 'Bangalore', 560080, 247, '2020-09-18 16:29:51', '2020-09-18 16:29:51', NULL, NULL, NULL),
(115, 'Bikramjeet Singh', '9671211222', 'bslaich@gmail.com', 0, 'F 1702, KLV SIGNATURE TOWER, SECTOR 66A', 'Home Address', NULL, 'india', 'PUNJAB', 'Mohali', 140308, 183, '2020-09-18 17:28:48', '2020-09-18 17:28:48', NULL, NULL, NULL),
(116, 'Deepika Thakur', '7009236178', 'webdsgn25@gmail.com', 0, 'Aensa 401A Bestech Business tower Mohali', NULL, NULL, 'india', 'punjab', 'Mohali', 160062, 251, '2020-09-19 03:42:52', '2020-09-19 03:42:52', NULL, NULL, NULL),
(117, 'Sriramanan', '9591812495', 'sriramanan.r@wellnestindia.com', 0, 'B1006 Mantri Elegance Bannerghatta road', NULL, NULL, 'india', 'karnataka', 'Bangalore', 560078, 150, '2020-09-19 11:48:43', '2020-09-19 11:48:43', NULL, NULL, NULL),
(118, 'Jay Amaran', '9916590186', 'jay5.amaran@gmail.com', 0, '219 15th Main', NULL, 'Sah Jeevan Apartment, Apartment 6C', 'india', 'karnataka', 'Bangalore', 560080, 264, '2020-09-20 09:07:29', '2020-09-20 09:07:29', NULL, NULL, NULL),
(119, 'Ritik', '9340564510', 'ritik@gmail.com', 0, 'Noida', NULL, NULL, 'india', 'andaman_nicobar_island', 'Morena', 123455, 268, '2020-09-21 05:24:24', '2020-09-21 05:24:24', NULL, NULL, NULL),
(120, 'User Test 2', '8264692886', 'sharma.harpreet2716@gmail.com', 0, '12', NULL, '12', 'india', 'punjab', 'Mohali', 160062, 269, '2020-09-21 05:34:37', '2020-09-21 05:34:37', NULL, NULL, NULL),
(121, 'Narender', '8930157111', 'kumarnarender602@gmail.com', 0, 'verma computers,near tosham road,shiwani mandi', NULL, NULL, 'india', 'haryana', 'Bhiwani', 145023, 275, '2020-09-22 06:52:00', '2020-09-22 07:08:59', NULL, NULL, NULL),
(122, 'ashok', '9041865149', 'nayal.ashok@gmail.com', 0, '# 104 Old India Colony Mani Majra', NULL, 'Chandigarh', 'india', 'chandigarh', 'Chandigarh', 160101, 274, '2020-09-22 07:01:12', '2020-09-22 07:01:12', NULL, NULL, NULL),
(123, 'Ritik', '9340564510', 'ritik@gmail.com', 0, 'Noida', NULL, 'noida', 'india', 'andaman_nicobar_island', 'Greater Noida', 123455, 276, '2020-09-22 10:53:44', '2020-09-22 10:53:55', NULL, NULL, NULL),
(124, 'SEEMA SHENOY', '9901972733', 'seemashenoyy@gmail.com', 1, 'No.3, Chennamma Garden, Raghuvanahalli', NULL, 'Kanakapura Road, Opp KSIT college', 'india', 'karnataka', 'Bangalore', 560062, 277, '2020-09-22 12:23:37', '2020-09-22 12:23:37', NULL, NULL, NULL),
(125, 'Sharuti Singla', '9817475180', 'singlasharuti5@gmail.com', 0, '#923, Sector 64', NULL, 'Phase 10, Mohali', 'india', 'punjab', 'Mohali', 160062, 278, '2020-09-23 10:06:20', '2020-09-23 10:06:20', NULL, NULL, NULL),
(126, 'Vidhi Dhiman', '9560791440', 'Vidhi1984rathoure@gmail.com', 0, 'house no 227, sector 10 housing board colony', 'Home Address', NULL, 'india', 'HARYANA', 'Faridabad', 121006, 224, '2020-09-24 04:28:27', '2020-09-24 04:28:27', NULL, NULL, NULL),
(127, 'Aditya Pandey', '9023133008', 'aditya.world@gmail.com', 0, 'house no 3235 , 2rd floor sector 21D chandigarh', 'Home Address', NULL, 'india', 'CHANDIGARH', 'Chandigarh', 160022, 255, '2020-09-28 09:09:22', '2020-09-28 09:09:22', NULL, NULL, NULL),
(128, 'Rajni', '9875937515', 'wattsrajni@gmail.com', 1, 'Main Road', NULL, 'Phase 11, Mohali', 'india', 'chandigarh', 'Mohali', 160062, 99, '2020-10-01 09:19:13', '2020-10-01 09:19:13', NULL, NULL, NULL),
(129, 'kunal', '+919899884818', 'kkunarsingh@gmail.com', 0, '1/56 D, lalita park , Laxmi nagar', NULL, NULL, 'india', 'delhi', 'Delhi', 110092, 296, '2020-10-05 06:08:43', '2020-10-05 06:08:43', NULL, NULL, NULL),
(131, 'Anchal Singla', '9878194289', 'anchal.singla55@gmail.com', 0, 'House no. 1840, Sector 21, Panchkula', NULL, NULL, 'india', 'haryana', 'Panchkula', 134112, 300, '2020-10-06 19:30:15', '2020-10-06 19:30:15', NULL, NULL, NULL),
(132, 'Test', '9875937515', 'rajni05@yopmail.com', 0, 'mohali', 'Home Address', 'null', 'india', 'PUNJAB', 'Mohali', 140301, 304, '2020-10-07 11:25:15', '2020-10-08 04:13:55', NULL, NULL, NULL),
(143, 'gurpreet kaur', '9643050588', 'gurpreet1kaur333@gmail.com', 0, 'hno 172 street no 4 new baselwa colony , heera mandir road , opp sector 29 faridabad , haryana', 'Home Address', NULL, 'india', 'PUNJAB', 'Faridabad', 121002, 266, '2020-10-08 09:50:43', '2020-10-08 09:50:43', NULL, NULL, NULL),
(145, 'VAISHALI DAS', '9875937502', 'hr.manager@drhelpdesk.in', 0, 'Sector-66,', NULL, 'SCO-401, Tower-A, AENSA Health Solutions Private Limited', 'india', 'punjab', 'Mohali', 160066, 310, '2020-10-10 05:08:49', '2020-10-10 05:08:49', NULL, NULL, NULL),
(147, 'tushar gupta', '9023328820', 'tushargupta.ca18@gmail.com', 0, 'best tech', 'Other Address', NULL, 'india', 'CHANDIGARH', 'Mohali', 1600025, 255, '2020-10-10 08:00:58', '2020-10-10 08:00:58', NULL, NULL, NULL),
(148, 'Bupinder', '6280191909', 'preetipreet678@gmail.com', 0, 'Bestech Business Towers', NULL, 'Unit No - 401 , 4th Floor, Tower - A , Bestech Business Towers , Mohali,', 'india', 'punjab', 'Mohali', 160066, 266, '2020-10-12 04:38:44', '2020-10-17 05:22:29', NULL, NULL, NULL),
(150, 'Sahil', '9875937504', 'iamsahil@gmail.com', 0, 'Neighborhood Park', NULL, 'Bestech Tower, sector 66 ,Mohali', 'india', 'punjab', 'Mohali', 160066, 316, '2020-10-14 06:36:36', '2020-10-14 06:37:51', NULL, NULL, NULL),
(153, 'Jatin Handa', '9816306686', 'jatin06handa@gmail.com', 0, 'Ward #11 Neelaghat  Una ( Himachal Pradesh)', NULL, 'Ward # 11 Neelaghat Una', 'india', 'himachal_pradesh', 'Una', 174303, 318, '2020-10-14 16:32:14', '2020-10-14 16:32:14', NULL, NULL, NULL),
(154, 'Pankaj rana', '9041645999', 'pankhrana@gmail.com', 0, 'Sco 6', NULL, 'Guru govind Singh avenue Jalandhar', 'india', 'punjab', 'Jalandhar', 144004, 319, '2020-10-14 17:37:17', '2020-10-14 17:37:17', NULL, NULL, NULL),
(156, 'Meena Arora', '8894254685', 'ashwinunapk@gmail.com', 0, 'kuldeep studio', NULL, 'arvind market  UNA (Himachal Pradesh)', 'india', 'himachal_pradesh', 'Una', 174303, 324, '2020-10-15 07:34:12', '2020-10-15 07:34:12', NULL, NULL, NULL),
(157, 'Neha Jaswal', '9816498987', 'jaswalneha28@gmail.com', 1, 'Flat # B5 701 Maya Garden City', NULL, 'Maya Garden City', 'india', 'punjab', 'Zirakpur', 140603, 329, '2020-10-15 09:22:12', '2020-10-16 12:13:17', NULL, NULL, NULL),
(158, 'sachin', '9875937515', 'sachinkumar2301@gmail.com', 0, 'Flora Exports, Sector 29, HUDA, Panipat', 'Home Address', '12', 'india', 'gujarat', 'Ahmedabad', 132103, 272, '2020-10-15 10:02:39', '2020-10-26 11:08:38', NULL, NULL, NULL),
(162, 'Deeksha', '8558993032', 'going21ds@gmail.com', 1, 'Bestech Business Tower', NULL, 'Office No 401', 'india', 'punjab', 'Mohali', 160066, 336, '2020-10-16 05:06:54', '2020-10-16 05:06:54', NULL, NULL, NULL),
(165, 'ANAND KUMAR S', '8050000435', 'krs.anand@gmail.com', 0, 'RUAHALAYA,2/1(12),GROUND FLOOR,72ND CROSS,JD HALLI,5TH BLOCK RAJAJINAGAR', NULL, 'NEXT TO POORNA TORCH', 'india', 'karnataka', 'Bangalore', 560010, 56, '2020-10-16 07:01:44', '2020-10-16 07:01:44', NULL, NULL, NULL),
(167, 'PREETI', '7838132665', 'Reena1968@gmail.com', 1, 'Unit No - 401 , 4th Floor, Tower - A , Bestech Business Towers , Mohali, Punjab - 160066', NULL, 'nit No - 401 , 4th Floor, Tower - A , Bestech Business Towers , Mohali, Punjab - 160066', 'india', 'punjab', 'Mohali', 160066, 342, '2020-10-17 06:12:03', '2020-10-20 10:20:57', NULL, NULL, NULL),
(168, 'yogesh', '07878784578', 'yogeshpandhare14092018@gmail.com', 0, 'test form', NULL, 'test', 'india', 'maharashtra', 'Achhnera', 146006, 345, '2020-10-17 12:09:25', '2020-10-17 12:09:25', NULL, NULL, NULL),
(170, 'Hema', '09515067788', 'hmanogna@gmail.com', 0, '501, MS9 Soumya Deluxe, Near Dharmapeta, Srinivas nagar,', NULL, NULL, 'india', 'andhra_pradesh', 'Kurnool', 518003, 346, '2020-10-18 01:00:59', '2020-10-18 01:00:59', NULL, NULL, NULL),
(171, 'Moti Chandan', '8106186332', 'b9arjuna@gmail.com', 0, 'Professors Colony', NULL, 'B-9', 'india', 'punjab', 'Patiala', 147001, 347, '2020-10-18 04:29:52', '2020-10-18 04:29:52', NULL, NULL, NULL),
(173, 'Ankur Jain', '9915836890', 'ankurjain021@gmail.com', 0, 'Maxxus Elanza, Adjoining Shemrock School, PR-7 road, ZIrakpur', NULL, NULL, 'india', 'punjab', 'Zirakpur', 140603, 353, '2020-10-19 06:51:29', '2020-10-19 06:51:29', NULL, NULL, NULL),
(174, 'sonali', '9875937504', 'bhagatsonali741@gmail.com', 1, 'bestech business tower', NULL, 'sector 66 mohali', 'india', 'punjab', 'Mohali', 160066, 255, '2020-10-19 07:07:13', '2020-10-19 07:07:13', NULL, NULL, NULL),
(175, 'Mandeep Singh', '8894483944', 'mandeep98765@gmail.com', 0, 'Ward # 11 Neelaghat una', NULL, 'Himachal Pradesh', 'india', 'himachal_pradesh', 'Una', 174303, 354, '2020-10-19 07:18:53', '2020-10-19 07:18:53', NULL, NULL, NULL),
(176, 'Test', '9875937515', 'drhelpdesk2016@gmail.com', 0, 'gujrat', 'Home Address', NULL, 'india', 'GUJRAT', 'Ambaji', 380001, 99, '2020-10-19 07:38:13', '2020-10-19 07:38:13', NULL, NULL, NULL),
(177, 'Priyanka Thakur', '8580615263', 'thakurpriyanka4455@gmail.com', 0, 'House # 2595', NULL, 'Sector 70 Mohali', 'india', 'punjab', 'Mohali', 160071, 358, '2020-10-19 09:08:50', '2020-10-19 09:08:50', NULL, NULL, NULL),
(183, 'Komal', '07696739600', 'Ks078787@gmail.com', 0, 'House no 386 sector 25', NULL, 'Near wings hospital', 'india', 'haryana', 'Panchkula', 134112, 361, '2020-10-19 10:54:56', '2020-10-19 10:54:56', NULL, NULL, NULL),
(187, 'Rahul Rajendra Bothra', '9820453683', 'rahulrbothra@gmail.com', 0, 'At. Post. Savta, House No. 2069, Ganesh Krupa', NULL, 'Tal - Dahanu, Dist - Palghar', 'india', 'maharashtra', 'Select a Location...', 401602, 362, '2020-10-19 11:20:59', '2020-10-19 11:20:59', NULL, NULL, NULL),
(190, 'Testing', '9899987777', 'test@gmail.com', 0, 'Hhhhh', NULL, 'Hhhhhh', 'india', 'punjab', 'Mohali', 160066, 1, '2020-10-20 03:26:15', '2020-10-20 03:26:15', NULL, NULL, NULL),
(191, 'Sukhmander Singh', '7889183037', 'sukhdhillon39@gmail.com', 0, 'Dhakoli, Wadhawa Nagar, Flat No 179 , Zirakpur', 'Home Address', NULL, 'INDIA', 'PUNJAB', 'Zirakpur', 140603, 365, '2020-10-20 06:23:19', '2020-10-20 06:23:19', NULL, NULL, NULL),
(192, 'TEST', '4563786567', 'dhdhealth@gmail.com', 1, 'TEST', 'Work Address', 'Test', 'india', 'PUNJAB', 'Mohali', 2345678, 350, '2020-10-20 08:40:45', '2020-10-20 08:44:34', NULL, NULL, NULL),
(193, 'Ashish prasher', '9805465096', 'ash26455@gmail.com', 0, 'house no 246 model gram  near eva hospital, ludhiana', NULL, NULL, 'india', 'punjab', 'Ludhiana', 141001, 255, '2020-10-20 09:44:11', '2020-10-20 09:44:11', NULL, NULL, NULL),
(194, 'Jaspal singh', '7888622976', 'jazish2729@gmail.com', 0, 'Godown Area, Zirakpur punjab 140604', 'Work Address', NULL, 'India', 'PUNJAB', 'Zirakpur', 140604, 333, '2020-10-20 11:36:29', '2020-10-20 11:36:29', NULL, NULL, NULL),
(195, 'Manjit Kumar Thakur', '8685865856', 'manjit@gmail.com', 1, 'VPO Dangoli, Tehsil & Distt. Una', 'Home Address', 'near shiv temple', 'India', 'HIMACHAL PRADESH', 'Una', 174303, 372, '2020-10-20 12:10:01', '2020-10-20 12:10:01', NULL, NULL, NULL),
(196, 'yogesh pandhare', '78756782628', 'pandhareyogeshetc@gmail.com', 0, 'kolhapur', NULL, 'test', 'india', 'maharashtra', 'Select a Location...', 146006, 344, '2020-10-20 14:12:16', '2020-10-20 14:12:16', NULL, NULL, NULL),
(197, 'johan', '8546134541', 'johan@yopmail.com', 1, 'Johan st', 'Home Address', 'Spencer plaza', 'india', 'ASSAM', 'Adalaj', 213562, 376, '2020-10-21 03:48:14', '2020-10-21 03:48:41', NULL, NULL, NULL),
(198, 'baskaran', '8745689153', 'baskaran@yopmail.com', 0, 'baskar', 'Work Address', 'landmark', 'India', 'ASSAM', 'Adalaj', 2345464, 376, '2020-10-21 03:58:12', '2020-10-21 03:58:12', NULL, NULL, NULL),
(199, 'Raj', '6897423687', 'raj@yopmail.com', 1, 'adress', 'Work Address', 'landmark', 'india', 'CHANDIGARH', 'Akaltara', 625016, 377, '2020-10-21 04:20:33', '2020-10-21 04:20:33', NULL, NULL, NULL),
(200, 'baskaran', '9654123722', 'shiny@yopmail.com', 1, 'address', 'Home Address', 'landmark', 'India', 'JAMMU & KASHMIR', 'Achabbal', 584123, 378, '2020-10-21 05:13:31', '2020-10-21 05:13:31', NULL, NULL, NULL),
(203, 'Deeksha', '8558993032', 'going21ds@gmail.com', 0, 'bestech business towers', 'Work Address', NULL, 'india', 'PUNJAB', 'Mohali', 160066, 368, '2020-10-21 09:37:10', '2020-10-21 09:37:10', NULL, NULL, NULL),
(204, 'Sunaina Reddy', '9899187319', 'geshman2018@gmail.com', 0, 'Plot No- 5 and 6, Flat No - D-2, Shalimar Garden, Sahibabad, Ghaziabad, UP- 201005', 'Home Address', 'Near Shiv Chowk', 'India', 'UTTAR PRADESH', 'Ghaziabad', 201005, 163, '2020-10-21 17:14:45', '2020-10-21 17:14:45', NULL, NULL, NULL),
(206, 'Simran kaur', '9999220870', 'simrankaur0870@gmail.com', 0, 'E-88/89 raghubir nagar near central school', 'Home Address', 'tagore garden', 'India', 'DELHI', 'Delhi', 110027, 381, '2020-10-21 19:53:00', '2020-10-21 19:53:00', NULL, NULL, NULL),
(208, 'AMARDIP SINGH CHHATWAL', '7376501949', 'amar_delhi2001@yahoo.com', 1, 'HQ 9 CORPS EME Br Yol Cantonement Dharamshala', NULL, NULL, 'india', 'himachal_pradesh', 'Dharamsala', 176052, 390, '2020-10-22 19:10:26', '2020-10-22 19:10:26', NULL, NULL, NULL),
(209, 'Geetimala Saikia', '9560619893', 'geetimalabarua@gmail.com', 1, 'Gautam Buddha Nagar', NULL, 'Tower 4 Flat No 1708 Greater Noida West Tech Zone IV', 'india', 'uttar_pradesh', 'Greater Noida', 201306, 392, '2020-10-23 03:57:06', '2020-10-23 03:57:06', NULL, NULL, NULL),
(210, 'Local', '84545455411', 'local@yopmail.com', 0, 'Street', NULL, '38N', 'india', 'punjab', 'Kharar', 147852, 378, '2020-10-23 04:19:32', '2020-10-23 04:35:21', NULL, NULL, NULL),
(211, 'Neha', '9988045685', 'neha.choudhary@drhelpdesk.in', 1, 'BESTECH', NULL, NULL, 'india', 'chandigarh', 'Chandigarh', 160001, 393, '2020-10-23 04:38:17', '2020-10-23 04:40:02', NULL, NULL, NULL),
(214, 'Ch.Udaybhaskar', '9940046726', 'ch.udaybhaskar@gmail.com', 1, 'C/O P.Ashok, H-NO: 11-11-185/6,New Bypass road,Sri Ramagiri Road no 1,Khammam, Telangana,Pin code: 507002', NULL, NULL, 'india', 'telangana', 'Khammam', 507002, 397, '2020-10-24 02:17:23', '2020-10-24 02:17:23', NULL, NULL, NULL),
(215, 'Raj Testing', '9763637282', 'raja@gmail.com', 1, 'Test', NULL, 'Test', 'india', 'punjab', 'Mohali', 647472, 400, '2020-10-25 10:55:24', '2020-10-25 10:55:24', NULL, NULL, NULL),
(216, 'harpreet kaur', '08264692886', 'sharma.harpreet2716@gmail.com', 1, 'Bestech Business towers, Gate no.3,Block-A , 4TH FLOOR ,Unit NO.401', NULL, NULL, 'india', 'punjab', 'Mohali', 160062, 402, '2020-10-26 04:32:41', '2020-10-26 04:32:41', NULL, NULL, NULL),
(218, 'sunita', '9855590818', 'sunita121@gmail.com', 0, 'hno.2013, sector 66 Mohali', NULL, NULL, 'india', 'chandigarh', 'Mohali', 160066, 342, '2020-10-27 04:07:38', '2020-10-27 04:07:38', NULL, NULL, NULL),
(219, 'test', '9876543211', 'sachinkumar2301@gmail.com', 1, 'main road', NULL, '105', 'india', 'haryana', 'Mohali', 160062, 272, '2020-10-27 06:00:36', '2020-10-27 06:00:36', NULL, NULL, NULL),
(221, 'Sachin', '9138100999', 'sachinkumar2301@gmail.com', 1, 'Bestech Tower, Gate number 3 , Level 4 , phase - 11', NULL, 'Mohali', 'india', 'punjab', 'Mohali', 160062, 406, '2020-10-27 07:40:36', '2020-10-27 07:47:42', NULL, NULL, NULL),
(222, 'K. Lakshmi', '9963051444', 'kaynisha.hemitha@gmail.com', 1, 'Near Zilla Parishad high school', NULL, 'T. Babu Rao, H.no:3-1,Kodali(p,o),ghantasala(m. d),krishna(D. T),near Zilla Parishad high school.', 'india', 'andhra_pradesh', 'Vijayawada', 521132, 408, '2020-10-28 04:15:43', '2020-10-28 04:15:43', NULL, NULL, NULL),
(223, 'Elisha paikray', '9776962903', 'elishapaikray@gmail.com', 1, 'Flat no 103, subhashree complex, bomikhal,  bhubaneswar', NULL, 'Flat no 103, subhashree  complex,  bomikhal,  bhubaneswar', 'india', 'odisha', 'Bhubaneswar', 751010, 410, '2020-10-28 05:17:23', '2020-10-28 05:17:59', NULL, NULL, NULL),
(224, 'Elisha paikray', '9776962903', 'elishapaikray@gmail.com', 0, 'Bhubaneswar', NULL, 'Flat no 103, subhashree  complex,  bomikhal,  bhubaneswar', 'india', 'odisha', 'Bhubaneswar', 751010, 410, '2020-10-28 05:17:23', '2020-10-28 05:17:23', NULL, NULL, NULL),
(225, 'Elisha paikray', '9776962903', 'elishapaikray@gmail.com', 0, 'Bhubaneswar', NULL, 'Flat no 103, subhashree  complex,  bomikhal,  bhubaneswar', 'india', 'odisha', 'Bhubaneswar', 751010, 410, '2020-10-28 05:17:23', '2020-10-28 05:17:23', NULL, NULL, NULL),
(226, 'Test1', '9875937515', 'drhelpdesk2016@gmail.com', 0, 'Main Road', NULL, 'Kartarpur', 'india', 'punjab', 'Kartarpur', 144801, 152, '2020-10-28 05:23:44', '2020-10-30 11:24:06', NULL, NULL, NULL),
(227, 'Sumedha mehta', '9871512506', 'sumedha.mehta@rediffmail.com', 1, 'Recruitment & Assessment Centre (RAC), Lucknow Road, Timarpur, DRDO', NULL, 'Lucknow Road, Timarpur', 'india', 'delhi', 'Select a Location...', 110054, 412, '2020-10-28 05:33:00', '2020-11-06 11:51:27', NULL, NULL, NULL),
(228, 'Sumedha mehta', '9871512506', 'sumedha.mehta@rediffmail.com', 1, '463 ground floor mukherjee nagar', NULL, 'Mukherjee nagar', 'india', 'delhi', 'Select a Location...', 110009, 413, '2020-10-28 05:57:12', '2020-10-28 05:57:12', NULL, NULL, NULL),
(229, 'SUmedha mehta', '9313541708', 'sumedha.march@gmail.com', 1, '463 ground floor, mukherjee nagar', NULL, 'Mukherjee nagar', 'india', 'delhi', 'Select a Location...', 110009, 415, '2020-10-28 06:32:21', '2020-10-28 06:33:14', NULL, NULL, NULL),
(230, 'Shiva Sharma', '9875937512', 'shivasharma04051997@gmail.com', 1, 'bestech tower', NULL, NULL, 'india', 'punjab', 'Mohali', 160001, 287, '2020-10-28 07:17:14', '2020-10-28 07:17:14', NULL, NULL, NULL),
(231, 'shiva', '9875937512', 'imcool.shivasharma@gmail.com', 0, 'imcool.shivasharma@gmail.com', 'Work Address', 'bestech tower', 'india', 'PUNJAB', 'Mohali', 160001, 33, '2020-10-28 07:27:00', '2020-10-28 07:27:00', NULL, NULL, NULL),
(232, 'swetha', '7794855052', 'siva.uu123@gmail.com', 0, '19p/18p, jyothinagar colony, medchal', 'Home Address', 'opp water tank', 'india', 'ANDHRA PRADESH', 'Hyderabad', 501401, 427, '2020-10-28 12:27:34', '2020-10-28 12:27:34', NULL, NULL, NULL),
(233, 'AleN Mathew', '8848904277', 'alen08267@gmail.com', 1, 'Trident hotel', NULL, 'Hotel', 'india', 'kerala', 'Kochi', 682033, 428, '2020-10-28 12:29:12', '2020-10-28 12:29:12', NULL, NULL, NULL),
(234, 'Vinod Janardhanan', '9892857853', 'vinodjan1970@gmail.com', 1, 'B 106 Nalanda CHS P. Ltd , Opp Nahur Railway Station (East)', NULL, NULL, 'india', 'maharashtra', 'Mumbai', 400042, 435, '2020-10-28 14:59:54', '2020-10-28 15:00:34', NULL, NULL, NULL),
(235, 'Tamanna', '9622992403', 'tamanna97@gmail.com', 1, 'Vashishta Marg, Hanuman Nagar', NULL, '501, Ujjwal Tower', 'india', 'rajasthan', 'Jaipur', 302021, 439, '2020-10-28 16:08:56', '2020-10-28 16:08:56', NULL, NULL, NULL),
(236, 'Shweta', '9811282333', 'shwetapurv@gmail.com', 1, '122/72, Silver oaks apartment, DLF Phase 1', NULL, '122/72, Silver oaks apartment, DLF Phase 1,', 'india', 'haryana', 'Gurgaon', 122002, 438, '2020-10-28 18:41:24', '2020-10-28 18:43:16', NULL, NULL, NULL),
(237, 'Ethiraj Rajamohan', '9739140343', 'ethiraj.r@gmail.com', 1, '71,sivan kovil  street,mahalaxmi nagar,noombal,velappanchavadi', NULL, NULL, 'india', 'tamil_nadu', 'Chennai', 600077, 442, '2020-10-29 05:15:36', '2020-10-29 05:15:36', NULL, NULL, NULL),
(238, 'MD. Afsar Pasha', '+919553541909', 'afsar0109@gmail.com', 1, 'H No. 6-77,Rathancolony, Shadnagar, Farooqnagar, RangaReddy', NULL, NULL, 'india', 'telangana', 'Farooqnagar', 509216, 445, '2020-10-29 08:35:41', '2020-10-29 08:35:41', NULL, NULL, NULL),
(239, 'nayagaon dasmesh nagar house number 2019', '6280205763', 'jindalpooja239@gmail.com', 0, 'nayagaon mohali', 'Home Address', 'dhilion farm', 'india', 'PUNJAB', 'Mohali', 160103, 460, '2020-10-29 14:16:50', '2020-10-29 14:16:50', NULL, NULL, NULL),
(240, 'test', '9875937515', 'drhelpdesk2016@gmail.com', 0, '24  Natraj Mkt', 'Home Address', 'Station Road, Malad (west)', 'india', 'maharashtra', 'Mumbai', 400064, 152, '2020-10-29 15:09:32', '2020-11-07 06:37:08', NULL, NULL, NULL),
(241, 'S Nisar Ahmed', '9790561048', 'ahmednisae988@gmail.com', 0, '33/3 Mohammed Ali 2ndStreet 2nd cross', 'Home Address', 'IOB BANK', 'pernambut', 'TAMIL NADU', 'Vellore', 635810, 471, '2020-10-30 00:38:41', '2020-10-30 00:38:41', NULL, NULL, NULL),
(242, 'ravindra Patil', '9623539867', 'ravindrapatil9009@gmail.com', 0, 'bharti vidyapeeth pune', 'Other Address', 'bharti hospital', 'india', 'MAHARASHTRA', 'Pune', 416213, 467, '2020-10-30 02:55:22', '2020-10-30 02:55:22', NULL, NULL, NULL),
(243, 'Rajwinder', '9875937503', 'rajwinderbansal1233@gmail.com', 1, '502/5 VIP Road Zirakpur,  Mohali Punjab', 'Home Address', 'Near Easy day', 'India', 'PUNJAB', 'Mohali', 140603, 483, '2020-10-30 07:21:56', '2020-10-30 07:21:56', NULL, NULL, NULL),
(244, 'teja', '7389673306', 'tteja399@gmail.com', 0, 'p3c 528, near ICICi bank, sector 27, Naya raipur', 'Home Address', 'behind ICICi bank', 'India', 'CHATTISGARH', 'Raipur', 492015, 487, '2020-10-30 09:10:50', '2020-10-30 09:10:50', NULL, NULL, NULL),
(245, 'Soumya Aneesh', '8138010301', 'soumya6240@gmail.com', 1, 'Ponnurunni East', NULL, 'Thalayanapadam house mythri Lane RRRRA7', 'india', 'kerala', 'Select a Location...', 682019, 492, '2020-10-30 12:36:59', '2020-10-30 12:38:47', NULL, NULL, NULL),
(246, 'Ravindra Babu Raju', '9966172563', 'smstpty@gmail.com', 0, 'D-No,3-109 Andhra Bank Colony Rd', 'Home Address', 'Avilala Tirupati Rural', 'tpty', 'ANDHRA PRADESH', 'Tirupati', 517507, 502, '2020-10-31 05:13:46', '2020-10-31 05:13:46', NULL, NULL, NULL),
(247, 'Seethalakshmi', '9846920424', 'lseetha21@gmail.com', 1, 'HDFCLIFE, OPP Cochin shipyard', NULL, 'Ravipuram', 'india', 'kerala', 'Kochi', 682015, 504, '2020-10-31 09:18:36', '2020-10-31 09:18:36', NULL, NULL, NULL),
(248, 'sarita', '9663645981', 'web@gmail.com', 1, 'test', NULL, 'test', 'india', 'karnataka', 'Gulbarga', 0, 330, '2020-10-31 09:58:13', '2020-10-31 10:30:02', NULL, NULL, NULL),
(253, 'Rakibul', '7407972703', 'raki15775@gmail.com', 1, 'পেপুলদা', 'Home Address', 'ঘটকপুকুর', 'পেপুলদা', 'WEST BENGAL', 'Kolkata', 400614, 506, '2020-10-31 14:24:16', '2020-10-31 14:24:24', NULL, NULL, NULL),
(255, 'C Bhatnagar', '09818462426', 'chhavijp90@gmail.com', 1, 'House 142 , 2nd floor , State Bank Colony , Gate No. 2 , G T Karnal Road , Near Gujrawala Town', NULL, NULL, 'india', 'delhi', 'Delhi', 110009, 512, '2020-11-01 02:15:50', '2020-11-01 02:15:50', NULL, NULL, NULL),
(256, 'Ravi Patil', '9623539867', 'ravindrapatil9009@gmail.com', 0, 'A/P-Ghanwade Tak-Karveer', 'Home Address', 'Karveer', 'India', 'MAHARASHTRA', 'Akaltara', 416001, 500, '2020-11-01 03:52:21', '2020-11-01 03:52:21', NULL, NULL, NULL),
(257, 'Bimal kr.nayak', '7366921340', 'kumariana7869@gmail.com', 1, 'Rajnagar bazar,Tata chaibasa main road', NULL, 'Ganesh vastralaya Rajnagar', 'india', 'jharkhand', 'Jamshedpur', 831002, 514, '2020-11-01 04:55:30', '2020-11-01 04:55:30', NULL, NULL, NULL),
(258, 'Angad L Rao', '9902566554', 'sharada.narasimha@gmail.com', 1, '103, Srilakshmi, Vijayanagar 4th Stage 1st phase', NULL, 'Near KGB bank', 'india', 'karnataka', 'Mysore', 570030, 519, '2020-11-01 10:06:49', '2020-11-01 10:06:49', NULL, NULL, NULL),
(259, 'prajyoti dedsai', '7798549808', 'prajyotidessai06@gmail.com', 0, 'maddewada veroda cuncolim salcete Goa', 'Home Address', 'near shani temple', 'india', 'GOA', 'Madgaon', 403703, 510, '2020-11-01 10:09:50', '2020-11-01 10:09:50', NULL, NULL, NULL),
(260, 'Testing', '9875937515', 'drhelpdesk2016@gmail.com', 0, 'No.3', NULL, 'Chenammam Garden', 'india', 'karnataka', 'Bengaluru', 560062, 152, '2020-11-02 04:40:46', '2020-11-06 04:22:05', NULL, NULL, NULL),
(262, 'Manikanta', '8185900614', 'djjmani2580@gmail.com', 1, 'Gachibowli, financial district,nanakramguda', NULL, 'Prestige high fileds tower 1', 'india', 'telangana', 'Hyderabad', 500032, 535, '2020-11-02 08:56:42', '2020-11-02 08:56:42', NULL, NULL, NULL),
(263, 'Niraj Kumar', '7903429978', 'nirajkumar1187619@gmail.com', 0, 'meral', 'Other Address', 'Raj sweets', 'india', 'JHARKHAND', 'Garhwa', 822133, 521, '2020-11-02 16:23:39', '2020-11-02 16:23:39', NULL, NULL, NULL),
(269, 'Test', '9875937515', 'Test@gmail.com', 0, 'Street no -3', NULL, 'near bus stand', 'india', 'uttar_pradesh', 'Ghaziabad', 201019, 152, '2020-11-05 23:59:21', '2020-11-06 04:19:11', NULL, NULL, NULL),
(273, 'Test', '9875937515', 'drhelpdesk2016@gmail.com', 1, 'Street number 4,mohai', 'null', 'main Road', 'india', 'PUNJAB', 'Mohali', 140301, 356, '2020-11-06 02:36:35', '2020-11-09 04:30:45', NULL, NULL, NULL),
(274, 'Test', '9875937515', 'drhelpdesk2016@gmail.com', 0, '4', NULL, 'dfasfdasg', 'india', '13', '1148', 132001, 356, '2020-11-06 02:37:42', '2020-11-06 02:37:42', NULL, NULL, NULL),
(275, 'Testing', '9875937515', 'drhelpdesk2016@gmail.com', 0, 'Mohali', NULL, 'mohali', 'india', '32', '3237', 160066, 356, '2020-11-06 03:31:40', '2020-11-06 03:31:40', NULL, NULL, NULL),
(279, 'Arun Kumar', '9505001695', 'arunghanta41@gmail.com', 0, 'VIJAYAWADA', 'Home Address', 'bujjulu tower\'s', 'India', 'ANDHRA PRADESH', 'Vijayawada', 520810, 554, '2020-11-09 09:04:49', '2020-11-09 09:04:49', NULL, NULL, NULL),
(280, 'Monalisa', '9871288794', 'monalisa.mahendra@gmail.com', 1, 'House no 41 guru Nanak colony dhakoli', NULL, 'Near mom and me hospital', 'india', 'punjab', 'Zirakpur', 160104, 567, '2020-11-09 12:59:38', '2020-11-09 12:59:38', NULL, NULL, NULL),
(281, 'Akhila', '9849477377', 'bh.akhila@yahoo.in', 1, 'H.no-2; Daffodils block; Nectar gardens; Madhapur; Hyderabad', NULL, NULL, 'india', 'telangana', 'Hyderabad', 500081, 568, '2020-11-09 21:59:37', '2020-11-09 21:59:37', NULL, NULL, NULL),
(283, '11111111111111111111111', '8657549043', 'fgdg@fhfghj.cgfg', 1, 'dfgrgrtgrttgbt5', NULL, 'mohali', 'india', 'punjab', 'Mohali', 140301, 152, '2020-11-10 02:09:45', '2020-11-10 02:11:40', NULL, NULL, NULL),
(284, 'bestech tower 401', '6280191909', 'surjitkuwait1313@gmail.com', 0, '401 bestech tower', 'Work Address', 'near bestech square', 'India', 'PUNJAB', 'Mohali', 140301, 420, '2020-11-10 06:30:25', '2020-11-10 06:30:25', NULL, NULL, NULL),
(285, 'Test', '657676768779887', 'test@gmail.com', 0, 'Mohali', NULL, NULL, 'india', 'punjab', 'Mohali', 140301, 152, '2020-11-10 06:38:25', '2020-11-10 06:40:22', NULL, NULL, NULL),
(303, 'nikhil', '9876543212', 'test@gmail.com', 1, 'main road', NULL, '105', 'india', 'maharashtra', 'Mohali', 416201, 363, '2020-11-20 00:43:59', '2020-11-20 00:43:59', NULL, NULL, NULL),
(310, 'nikhil', '09876543212', 'test@gmail.com', 0, 'main road', NULL, '105', 'india', 'maharashtra', 'Kolhapur', 416201, 363, '2020-11-26 05:28:14', '2020-11-26 05:28:14', NULL, NULL, NULL),
(316, 'Swapnil', '9876543212', 'test@gmail.com', 0, 'main road\r\n2015', 'Work', NULL, 'india', 'andaman_nicobar_island', 'Kolhapur', 416201, 343, '2020-12-10 03:02:31', '2020-12-10 06:14:45', 'rajarampuri', 'dominose pizza', '09876543212'),
(317, 'nikhil', '9876543212', 'test@gmail.com', 0, 'main road\r\n105', 'Home', NULL, 'india', 'maharashtra', 'Ahmadpur', 416201, 343, '2020-12-10 05:17:56', '2020-12-10 05:17:56', 'rajarampuri', 'dominose pizza', '09876543212'),
(318, 'test', '9876543212', 'test@gmail.com', 0, 'main road\r\n105', NULL, NULL, 'india', 'maharashtra', 'Kolhapur', 416201, 343, '2021-01-22 05:58:58', '2021-01-22 05:58:58', NULL, NULL, NULL),
(319, 'test', '9876543212', 'test@gmail.com', 1, 'rajarampuri 3rd lane', NULL, NULL, 'india', 'maharashtra', 'Kolhapur', 416201, 343, '2021-03-17 02:43:13', '2021-03-17 03:28:24', 'rajarampuri', 'dominose pizza', '09876543212'),
(320, 'prakash devane', '9834152845', 'dhanaprakash2gmail.com', 0, 'shahupuri 3rd lane', NULL, NULL, 'india', 'maharashtra', 'kolhapur', 152635, 343, '2021-03-17 03:30:22', '2021-03-17 03:30:22', 'shaupuri', 'idbi bank', '9876548798548'),
(325, 'XYZ', '9966332255', 'xyz@', 0, 'MG', NULL, NULL, 'india', 'maharashtra', 'pune', 416012, 343, '2021-03-24 06:31:56', '2021-03-24 06:31:56', 'Pune', 'MG road', NULL),
(326, 'Nikhil Kamble', '9021182154', 'demo@demo.com', 1, 'kolhapur\r\n105', NULL, NULL, 'india', 'maharashtra', 'Kolhapur', 416216, 596, '2021-05-14 06:13:45', '2021-05-14 06:13:45', 'kolhapur', 'kolhapur', NULL),
(331, 'Dhananjay Sawant', '9021182154', 'dhananjay.sawant91@gmail.com', 0, 'Babasaheb Ambedkar Nagal Kagal Dist Kolhapur', NULL, NULL, 'india', 'maharashtra', 'Kagal', 416216, 343, '2021-05-26 02:38:16', '2021-05-26 02:38:16', 'dsertv', NULL, NULL),
(332, 'Dhananjay Sawant', '9021182154', 'dhananjay.sawant91@gmail.com', 1, 'Babasaheb Ambedkar Nagal Kagal Dist Kolhapur', NULL, NULL, 'india', 'maharashtra', 'Kagal', 416216, 609, '2021-05-29 04:54:48', '2021-05-29 04:54:48', 'asde', NULL, NULL),
(334, 'dhananjay sawant', '9876543210', 'dhananajay@techenvision@gmail.com', 1, 'Rajarampuri kolhapur', NULL, NULL, 'india', 'andaman_nicobar_island', 'kolhapur', 416216, 617, '2021-07-14 01:28:46', '2021-07-14 02:24:13', 'kolhapur', 'rajarampuri', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(255) NOT NULL,
  `user_id` bigint(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `timeline_picture` varchar(255) DEFAULT NULL,
  `aadhar_card` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pin_code` varchar(20) DEFAULT NULL,
  `state` bigint(200) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 active 0 inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_id`, `dob`, `gender`, `profile_photo`, `timeline_picture`, `aadhar_card`, `address`, `city`, `pin_code`, `state`, `country`, `status`, `created_at`, `updated_at`) VALUES
(4, 3, NULL, NULL, 'images/profile/profile_pic1632207036.jpeg', 'images/timeline/timeline_picture1632207036.jpeg', NULL, NULL, 'kolhapur', NULL, 21, NULL, 1, '2021-09-15 10:56:24', '2021-09-21 07:16:28'),
(5, 2, NULL, NULL, 'images/profile/profile_pic1632467819.jpeg', 'images/timeline/timeline_picture1632298615.jpeg', NULL, NULL, 'kolhapur', NULL, 21, NULL, 1, '2021-09-22 08:16:55', '2021-09-24 07:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vendor_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(100) DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0-activate,1-de-activate',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `user_id`, `vendor_name`, `category_id`, `address`, `city`, `pin_code`, `state`, `email`, `mobile`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 3, 'Prakash', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Belgavi', '1452326', '18', 'prakash@gmail.com', 9876543210, 'demo demo demo', 1, '2021-10-04 09:51:30', '2021-10-04 10:38:27');

-- --------------------------------------------------------

--
-- Table structure for table `what_is_section`
--

CREATE TABLE `what_is_section` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `what_is_section`
--

INSERT INTO `what_is_section` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Office Hangout (06)', 'images/image1631964722.jpeg', 1, '2021-09-18 11:32:02', '2021-09-18 11:32:02'),
(2, 'Dream Land (12)', 'images/image1631964768.jpeg', 1, '2021-09-18 11:32:48', '2021-09-18 11:32:48'),
(3, 'Travel Zone (34)', 'images/image1631964804.jpeg', 1, '2021-09-18 11:33:24', '2021-09-18 11:33:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_banner`
--
ALTER TABLE `footer_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_slider`
--
ALTER TABLE `footer_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_section`
--
ALTER TABLE `main_section`
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
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_payment_transactions`
--
ALTER TABLE `order_payment_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_content`
--
ALTER TABLE `page_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_content`
--
ALTER TABLE `post_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`product_images_id`);

--
-- Indexes for table `rating_info`
--
ALTER TABLE `rating_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_list`
--
ALTER TABLE `state_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_section`
--
ALTER TABLE `sub_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabs`
--
ALTER TABLE `tabs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `temp_carts`
--
ALTER TABLE `temp_carts`
  ADD PRIMARY KEY (`temp_carts_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `what_is_section`
--
ALTER TABLE `what_is_section`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_banner`
--
ALTER TABLE `footer_banner`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `footer_slider`
--
ALTER TABLE `footer_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `main_section`
--
ALTER TABLE `main_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_payment_transactions`
--
ALTER TABLE `order_payment_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_content`
--
ALTER TABLE `page_content`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_content`
--
ALTER TABLE `post_content`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `product_images_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rating_info`
--
ALTER TABLE `rating_info`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state_list`
--
ALTER TABLE `state_list`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `sub_section`
--
ALTER TABLE `sub_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tabs`
--
ALTER TABLE `tabs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `temp_carts`
--
ALTER TABLE `temp_carts`
  MODIFY `temp_carts_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=335;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `what_is_section`
--
ALTER TABLE `what_is_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
