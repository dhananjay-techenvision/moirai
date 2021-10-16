-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 03:00 PM
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
  `updated_at` timestamp NULL DEFAULT current_timestamp()
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
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `coupons_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(100) DEFAULT NULL,
  `copoun_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copoun_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `type` int(25) DEFAULT 1 COMMENT '0 fixed 1 percentage',
  `from` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_uses` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0-activate,1-de-activate',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`coupons_id`, `product_id`, `copoun_name`, `copoun_code`, `amount`, `type`, `from`, `to`, `no_of_uses`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'paint 02', 'welcome20', 10, 1, '2021-10-10', '2021-10-31', 40, 1, '2021-10-12 11:08:39', '2021-10-12 12:08:40'),
(2, 6, 'craft art', 'craftart12', 3, 1, '2021-11-01', '2021-11-30', 50, 1, '2021-10-12 11:17:44', '2021-10-12 12:41:53');

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_id`, `cancel_reason`, `cancel_comment`, `address_id`, `amount`, `order_status`, `copoun_code`, `payment_mode`, `payment_id`, `payment_status`, `shipping_charge`, `created_at`, `updated_at`) VALUES
(2, 3, 'moirai31634128412', NULL, NULL, 1, '500', 1, NULL, '1', NULL, 'success', 50, '2021-10-13 12:33:32', '2021-10-13 12:33:32'),
(3, 4, 'moirai41634209261', NULL, NULL, 2, '1000', 1, NULL, '1', NULL, 'success', 0, '2021-10-14 11:01:01', '2021-10-14 11:01:01'),
(7, 4, 'moirai41634209822', NULL, NULL, 2, '1500', 1, NULL, '1', NULL, 'success', 0, '2021-10-16 11:10:22', '2021-10-14 11:10:22'),
(8, 3, 'moirai31634388632', NULL, NULL, 4, '50', 1, NULL, '1', NULL, 'Success', 50, '2021-10-16 12:50:32', '2021-10-16 12:50:32'),
(9, 3, 'moirai31634388939', NULL, NULL, 4, '1500', 1, NULL, '1', NULL, 'Success', 0, '2021-10-16 12:55:39', '2021-10-16 12:55:39'),
(10, 3, 'moirai31634389051', NULL, NULL, 4, '50', 1, NULL, '1', NULL, 'Success', 50, '2021-10-16 12:57:31', '2021-10-16 12:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `order_coupon_histories`
--

CREATE TABLE `order_coupon_histories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_id` varchar(100) DEFAULT NULL,
  `coupon_id` int(11) DEFAULT NULL,
  `coupon_count` int(11) NOT NULL DEFAULT 0,
  `coupon_code` varchar(200) DEFAULT NULL,
  `coupon_price` int(11) DEFAULT NULL,
  `coupon_type` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_coupon_histories`
--

INSERT INTO `order_coupon_histories` (`id`, `user_id`, `order_id`, `coupon_id`, `coupon_count`, `coupon_code`, `coupon_price`, `coupon_type`, `created_at`, `updated_at`) VALUES
(1, 3, 'moirai31634128412', NULL, 0, 'welcome20', 10, '1', '2021-10-13 12:33:32', '2021-10-13 12:33:32'),
(2, 4, 'moirai41634209261', NULL, 0, '0', 0, '0', '2021-10-14 11:01:01', '2021-10-14 11:01:01'),
(3, 4, 'moirai41634209822', NULL, 0, '0', 0, '0', '2021-10-14 11:10:22', '2021-10-14 11:10:22'),
(4, 3, 'moirai31634388632', NULL, 0, 'welcome20', 10, '1', '2021-10-16 12:50:32', '2021-10-16 12:50:32'),
(5, 3, 'moirai31634388939', NULL, 0, '0', 0, '0', '2021-10-16 12:55:39', '2021-10-16 12:55:39'),
(6, 3, 'moirai31634389051', NULL, 0, 'welcome20', 10, '1', '2021-10-16 12:57:31', '2021-10-16 12:57:31');

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

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `sub_order_id`, `assign_vendor_id`, `prod_name`, `prod_id`, `attribute_id`, `quantity`, `sub_total`, `order_status`, `created_at`, `updated_at`) VALUES
(2, 'moirai31634128412', 'moirai301634128412', NULL, 'Craft art', 6, 5, 4, '150', '1', '2021-10-13 12:33:32', '2021-10-13 12:33:32'),
(3, 'moirai41634209261', 'moirai401634209261', NULL, 'photograph', 7, 6, 1, '1000', '1', '2021-10-14 11:01:01', '2021-10-14 11:01:01'),
(4, 'moirai41634209727', 'moirai401634209727', NULL, 'painting', 4, 1, 1, '1500', '1', '2021-10-14 11:08:47', '2021-10-14 11:08:47'),
(5, 'moirai41634209771', 'moirai401634209771', NULL, 'painting', 4, 1, 1, '1500', '1', '2021-10-14 11:09:31', '2021-10-14 11:09:31'),
(6, 'moirai41634209806', 'moirai401634209806', NULL, 'painting', 4, 1, 1, '1500', '1', '2021-10-14 11:10:06', '2021-10-14 11:10:06'),
(7, 'moirai41634209822', 'moirai401634209822', NULL, 'painting', 4, 1, 1, '1500', '1', '2021-10-14 11:10:22', '2021-10-14 11:10:22'),
(8, 'moirai31634388632', 'moirai301634388632', NULL, 'photograph', 7, 6, 2, '1000', '1', '2021-10-16 12:50:32', '2021-10-16 12:50:32'),
(9, 'moirai31634388632', 'moirai311634388632', NULL, 'painting', 4, 3, 1, '5000', '1', '2021-10-16 12:50:32', '2021-10-16 12:50:32'),
(10, 'moirai31634388939', 'moirai301634388939', NULL, 'painting', 4, 1, 1, '1500', '1', '2021-10-16 12:55:39', '2021-10-16 12:55:39'),
(11, 'moirai31634389051', 'moirai301634389051', NULL, 'painting', 4, 1, 1, '1500', '1', '2021-10-16 12:57:31', '2021-10-16 12:57:31');

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
  `expected_delivery` bigint(20) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0-activate,1-de-activate',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `product_name`, `slug`, `product_code`, `short_description`, `long_description`, `category_id`, `vendor_id`, `tags`, `rating`, `expected_delivery`, `status`, `created_at`, `updated_at`) VALUES
(4, 'painting', 'C1ortT59G4', 'paint01', 'demo painting', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 2, '3', NULL, NULL, 3, 1, '2021-10-05 07:03:45', '2021-10-05 07:42:47'),
(5, 'musical cd', 'a3yEbud8Lu', 'music 10', 'music cds', 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 2, '3', NULL, NULL, NULL, 1, '2021-10-05 07:59:43', '2021-10-05 07:59:43'),
(6, 'Craft art', '0e6i6kYrnf', '1245gfdre', 'paper craft', 'home decoration Idea Paper craft', 2, '3', NULL, NULL, NULL, 1, '2021-10-08 10:24:34', '2021-10-08 10:24:34'),
(7, 'photograph', 'cQDIN9Cu36', 'BHGF', 'Digital photo', 'lorem ipsum dummy text', 2, '3', NULL, NULL, NULL, 1, '2021-10-08 10:35:19', '2021-10-08 10:35:19'),
(8, 'demo', '6eWafhTNb4', 'demo012', 'demo demo', 'demo demo', 2, '3', NULL, NULL, 5, 1, '2021-10-16 11:49:06', '2021-10-16 11:49:06');

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
(1, 4, '10*20 inch', 'black', '1500', NULL, '1', '1', 1, '2021-10-05 12:17:41', '2021-10-06 05:47:47'),
(3, 4, '20*30 inches', 'Red', '5000', NULL, '1', '1', 1, '2021-10-06 04:53:46', '2021-10-06 05:47:41'),
(5, 6, NULL, 'blue', '150', NULL, '1', '1', 1, '2021-10-08 10:25:24', '2021-10-08 10:25:24'),
(6, 7, '4*8', NULL, '1000', NULL, '2', '1', 1, '2021-10-08 10:36:18', '2021-10-08 10:36:18');

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
(9, 4, 'images/product/product_sub_image19752.jpeg', 1, 1, '2021-10-05 10:48:21', '2021-10-05 10:48:21'),
(10, 6, 'images/product/product_main_image1633688674.jpeg', 2, 1, '2021-10-08 10:24:35', '2021-10-08 10:24:35'),
(11, 7, 'images/product/product_main_image1633689319.png', 2, 1, '2021-10-08 10:35:19', '2021-10-08 10:35:19'),
(12, 8, 'images/product/product_main_image1634384946.webp', 2, 1, '2021-10-16 11:49:07', '2021-10-16 11:49:07');

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
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `user_type`, `vendor_approval`, `status`, `token`, `account_verify`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, NULL, '$2y$10$w24PG7/VcghhKFZfHszFR.N4lRuVPtw9hmA3KSTl0i4nYNu7JcG8a', 'BLhM715zs1OdsWd8UHlxWBW8iIrKhZmZIYWc838td51eUPKfjzfhOvfQqwCm', 1, 0, 1, NULL, 0, '2021-08-27 04:51:43', '2021-10-04 08:32:32'),
(2, 'rahul', 'rahul@gmail.com', '9876543210', NULL, '$2y$10$aXA0da5tuuB4lt//LIsOIuLCMUz3/7d1xIXaBZ2ymy5I1HoLMY5d2', NULL, 2, 0, 1, NULL, 1, '2021-09-01 11:25:19', '2021-10-04 10:19:56'),
(3, 'Prakash', 'prakash@gmail.com', '9876543210', NULL, '$2y$10$SCkIhehyQdlvMF5S9qToHeRxSKUrZhhwMFWAfmpcMb.yGg8b/DlR6', NULL, 2, 1, 1, NULL, 1, '2021-09-13 11:07:48', '2021-10-08 11:40:30'),
(4, 'Akshay', 'akshay@gmail.com', '9876543210', NULL, '$2y$10$SCkIhehyQdlvMF5S9qToHeRxSKUrZhhwMFWAfmpcMb.yGg8b/DlR6', NULL, 2, 1, 1, NULL, 1, '2021-09-13 11:07:48', '2021-10-08 11:40:30');

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `locality` varchar(255) DEFAULT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `phone_alt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `user_id`, `name`, `phone`, `email`, `selected`, `address`, `address_type`, `apartment`, `country`, `state`, `city`, `pin_code`, `created_at`, `updated_at`, `locality`, `landmark`, `phone_alt`) VALUES
(1, 3, 'prakash Ilage', '987654310', 'prakash@gmail.com', 0, 'Rajarampuri 1st Lane kolahpur', 'Work', NULL, 'India', 'MAHARASHTRA', 'Kolhapur', 416001, '2021-10-13 08:25:13', '2021-10-15 08:06:15', 'rajarampuri', 'janata bazar chouck', '9876543233'),
(2, 4, 'Akshay', '987654310', 'akshay@gmail.com', 0, 'Rajarampuri !st Lane kolahpur', 'work', 'flat no 2', 'india', 'maharashtra', 'Kolhapur', 416001, '2021-10-13 08:25:13', '2021-10-13 08:03:02', NULL, NULL, NULL),
(4, 3, 'vaibhav kadam', '9865327845', 'vaibhav@gmail.com', 1, 'Shahupuri Main Road near IDBI bank  Kolhapur', 'Work', NULL, 'India', 'MAHARASHTRA', 'Kolhapur', 416001, '2021-10-15 07:12:59', '2021-10-15 08:03:30', 'Kolhapur', 'kolhapur', '9876543210');

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
(4, 3, NULL, NULL, 'images/profile/profile_pic1633693230.jpeg', 'images/timeline/timeline_picture1632207036.jpeg', NULL, NULL, 'kolhapur', NULL, 21, NULL, 1, '2021-09-15 10:56:24', '2021-10-08 11:40:30'),
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
  `aadhar_card` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifsc_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upi_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `vendors` (`id`, `user_id`, `vendor_name`, `category_id`, `aadhar_card`, `pan_number`, `business_name`, `gst_number`, `bank_name`, `account_name`, `account_number`, `ifsc_number`, `upi_id`, `address`, `city`, `pin_code`, `state`, `email`, `mobile`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 3, 'Prakash', 2, '123412341234', 'PTRS1203FDS', 'Educational Motivational speaker', 'FDER1234', 'SBI', 'Rahul Tukaram Kadam', '12345678954215', 'SBI1548KOP', '9876543210@hdfc', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Belgavi', '1452326', '18', 'prakash@gmail.com', 9876543210, 'demo demo demo', 1, '2021-10-04 09:51:30', '2021-10-08 12:14:53');

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
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupons_id`),
  ADD UNIQUE KEY `coupons_copoun_name_unique` (`copoun_name`);

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
-- Indexes for table `order_coupon_histories`
--
ALTER TABLE `order_coupon_histories`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupons_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_coupon_histories`
--
ALTER TABLE `order_coupon_histories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `products_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `product_images_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `temp_carts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `what_is_section`
--
ALTER TABLE `what_is_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
