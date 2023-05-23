-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 02, 2023 at 06:32 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plandstudios-main`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutcms`
--

DROP TABLE IF EXISTS `aboutcms`;
CREATE TABLE IF NOT EXISTS `aboutcms` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `about_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_inner_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_inner_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutcms`
--

INSERT INTO `aboutcms` (`id`, `about_title`, `about_description`, `about_inner_title`, `about_inner_description`, `about_image`, `page_type`, `created_at`, `updated_at`) VALUES
(9, 'Our About', 'Do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'Make it Simple', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation', '1675148803_img-6.png', 'about', '2023-01-31 02:06:43', '2023-01-31 02:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `blogcms`
--

DROP TABLE IF EXISTS `blogcms`;
CREATE TABLE IF NOT EXISTS `blogcms` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blogtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogdescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pagetype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogcms`
--

INSERT INTO `blogcms` (`id`, `blogtitle`, `blogdescription`, `pagetype`, `created_at`, `updated_at`) VALUES
(5, 'Blog title2', 'do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'blog', '2023-01-31 02:09:09', '2023-01-31 07:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `casinal_footers`
--

DROP TABLE IF EXISTS `casinal_footers`;
CREATE TABLE IF NOT EXISTS `casinal_footers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `contact_icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_information` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `casinal_footers`
--

INSERT INTO `casinal_footers` (`id`, `contact_icon`, `contact`, `email_icon`, `email`, `footer_information`, `footer_logo`, `created_at`, `updated_at`) VALUES
(1, '1675072735_call-icon1.png', '034278237311', '1675072735_mail-icon1.png', 'asd@gmail.com', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alterationss', '1675072735_footer-logo.png', '2023-01-26 05:06:27', '2023-01-30 04:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `casinal_navbars`
--

DROP TABLE IF EXISTS `casinal_navbars`;
CREATE TABLE IF NOT EXISTS `casinal_navbars` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `casinal_navbar_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `casinal_navbar_fb_icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `casinal_navbar_fb_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `casinal_navbar_insta_icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `casinal_navbar_insta_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `casinal_navbar_twitter_icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `casinal_navbar_twitter_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `casinal_navbar_linkedin_icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `casinal_navbar_linkedin_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `casinal_navbars`
--

INSERT INTO `casinal_navbars` (`id`, `casinal_navbar_logo`, `casinal_navbar_fb_icon`, `casinal_navbar_fb_link`, `casinal_navbar_insta_icon`, `casinal_navbar_insta_link`, `casinal_navbar_twitter_icon`, `casinal_navbar_twitter_link`, `casinal_navbar_linkedin_icon`, `casinal_navbar_linkedin_link`, `created_at`, `updated_at`) VALUES
(3, '1675072700_logo.png', '1675072700_fb-icon.png', 'facebook.com', '1675072700_instagram-icon.png', 'instagram.com', '1675072700_twitter-icon.png', 'twitter.com', '1675072700_linkedin-icon.png', 'linkedin.com', '2023-01-26 00:44:07', '2023-01-30 04:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `contactcms`
--

DROP TABLE IF EXISTS `contactcms`;
CREATE TABLE IF NOT EXISTS `contactcms` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `consultingtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consultingdescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `consultingbtntext` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consultingbtnlink` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `educationtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `educationbgimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `educationrightimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pagetype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactcms`
--

INSERT INTO `contactcms` (`id`, `consultingtitle`, `consultingdescription`, `consultingbtntext`, `consultingbtnlink`, `educationtitle`, `educationbgimage`, `educationrightimage`, `pagetype`, `created_at`, `updated_at`) VALUES
(8, 'Get Your free consulting', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip', 'Get A Quote', 'google.com', 'Best Educations In World Here', '1675149821_img-8.png', '1675149821_map-img.png', 'contact', '2023-01-31 02:09:50', '2023-01-31 02:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homecms`
--

DROP TABLE IF EXISTS `homecms`;
CREATE TABLE IF NOT EXISTS `homecms` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `coursesectiontitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutsectiontitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutsectiondescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutsectioninnertitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutsectioninnerdescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutsectionimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogsectiontitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogsectiondescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonialsectiontitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consultingsectiontitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consultingsectiondescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `consultingsectionbtntext` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consultingsectionbtnlink` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `educationsectiontitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `educationsectionimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `educationsectionimageright` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pagetype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homecms`
--

INSERT INTO `homecms` (`id`, `coursesectiontitle`, `aboutsectiontitle`, `aboutsectiondescription`, `aboutsectioninnertitle`, `aboutsectioninnerdescription`, `aboutsectionimage`, `blogsectiontitle`, `blogsectiondescription`, `testimonialsectiontitle`, `consultingsectiontitle`, `consultingsectiondescription`, `consultingsectionbtntext`, `consultingsectionbtnlink`, `educationsectiontitle`, `educationsectionimage`, `educationsectionimageright`, `pagetype`, `created_at`, `updated_at`) VALUES
(5, 'Our courses', 'Our About', 'Do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'Make it Simple', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation', '1675166909_img-6.png', 'Our Bolg', 'do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'Testimonial', 'Get Your free consuting', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip', 'Get A Quote', 'google.com', 'Best Educations In World Here', '1675166909_img-8.png', '1675166909_map-img.png', 'home', '2023-01-31 02:06:03', '2023-01-31 07:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_blogs`
--

DROP TABLE IF EXISTS `homepage_blogs`;
CREATE TABLE IF NOT EXISTS `homepage_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepage_blogs`
--

INSERT INTO `homepage_blogs` (`id`, `blog_title`, `blog_description`, `page`, `blog_image`, `created_at`, `updated_at`) VALUES
(1, 'blog title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 'blog', '1675236477_img-8.png', '2023-01-24 08:00:47', '2023-02-01 02:27:57'),
(3, 'Best Classes and study', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 'home', '1675145623_img-7.png', '2023-01-25 01:46:17', '2023-01-31 01:13:43'),
(5, 'Best Classes and study', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 'blog', '1675236734_img-7.png', '2023-01-31 06:22:23', '2023-02-01 02:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_courses`
--

DROP TABLE IF EXISTS `homepage_courses`;
CREATE TABLE IF NOT EXISTS `homepage_courses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepage_courses`
--

INSERT INTO `homepage_courses` (`id`, `course_title`, `course_page`, `course_image`, `created_at`, `updated_at`) VALUES
(2, 'Art and Design2', 'home', '1674639738_img-2.png', '2023-01-24 01:36:30', '2023-01-25 04:42:19'),
(3, 'Science', 'home', '1674639729_img-3.png', '2023-01-24 01:38:40', '2023-01-25 04:42:09'),
(4, 'Business Study', 'home', '1674639661_img-4.png', '2023-01-24 01:38:57', '2023-01-25 04:41:01'),
(8, 'English Speaking', 'services', '1674639460_img-5.png', '2023-01-24 05:52:34', '2023-01-25 04:37:40'),
(12, 'Art and Design', 'services', '1675149745_img-3.png', '2023-01-31 02:21:48', '2023-01-31 02:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_19_074156_create_aboutcms_table', 2),
(6, '2023_01_19_101052_create_servicescms_table', 3),
(7, '2023_01_19_102614_create_blogcms_table', 4),
(8, '2023_01_19_104255_create_contactcms_table', 5),
(9, '2023_01_19_113115_create_homecms_table', 6),
(10, '2023_01_19_115243_create_slidercms_table', 7),
(11, '2023_01_24_063236_create_homepage_courses_table', 8),
(12, '2023_01_24_125424_create_homepage_blogs_table', 9),
(13, '2023_01_25_072231_create_testimonials_table', 10),
(14, '2023_01_26_053015_create_casinal_navbars_table', 11),
(15, '2023_01_26_095801_create_casinal_footers_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('saylikhan97@gmail.com', '$2y$10$G.TTv0qw/XD/a3Wvl5bueehFqvXR7MzPQTPWfO/q6FbKiPRrDN9mC', '2023-01-31 07:17:39');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicescms`
--

DROP TABLE IF EXISTS `servicescms`;
CREATE TABLE IF NOT EXISTS `servicescms` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `servicestitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pagetype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servicescms`
--

INSERT INTO `servicescms` (`id`, `servicestitle`, `pagetype`, `created_at`, `updated_at`) VALUES
(7, 'Our Services', 'services', '2023-01-31 02:07:05', '2023-01-31 02:21:12');

-- --------------------------------------------------------

--
-- Table structure for table `slidercms`
--

DROP TABLE IF EXISTS `slidercms`;
CREATE TABLE IF NOT EXISTS `slidercms` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `slider_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_btn_one_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_btn_one_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_btn_two_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_btn_two_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_background_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_page_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slidercms`
--

INSERT INTO `slidercms` (`id`, `slider_title`, `slider_description`, `slider_image`, `slider_btn_one_text`, `slider_btn_one_link`, `slider_btn_two_text`, `slider_btn_two_link`, `slider_background_image`, `slider_page_type`, `created_at`, `updated_at`) VALUES
(5, 'Casinal Educations Coachings', 'Eiusmod tempor incididunt ut labore et dolore magna aliquar', '1674539763_img-1.png', 'About Usr', 'google.com', 'Get A Quote', 'youtube.comr', '1674539763_banner-bg.png', 'slider', '2023-01-23 03:05:15', '2023-01-24 00:56:03'),
(7, 'Slider title', 'slider desc', '1675147592_img-1.png', 'Button One', 'google.com', 'Youtube', 'youtube.com', '1675147592_img-1.png', 'slider', '2023-01-23 06:28:30', '2023-01-31 01:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `testimonial_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `testimonial_title`, `testimonial_description`, `testimonial_image`, `testimonial_page`, `created_at`, `updated_at`) VALUES
(10, 'testimonial 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip', '1675149569_client-img.png', 'home', '2023-01-31 02:16:36', '2023-01-31 02:19:29'),
(9, 'Jony Deno', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip', '1675149367_client-img.png', 'home', '2023-01-31 02:10:43', '2023-01-31 02:16:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Ilyas', 'saylikhan97@gmail.com', NULL, '$2y$10$7Um0HoAmBXwUE/fKCQw07.4uPrP6v2UzdhPFJ4E5eh2fHLLfpm37O', NULL, '2023-01-18 05:16:54', '2023-01-18 05:16:54'),
(7, 'ali', 'ali@gmail.com', NULL, '$2y$10$EeBUNJ.yPCToghG5WHVOV.cW/7JL8AYlP45J4p3S2Hi8gqGk0sxMy', NULL, '2023-01-31 07:34:29', '2023-01-31 07:34:29'),
(4, 'Admin', 'admin@gmail.com', NULL, '$2y$10$r/CtIU76HDVKe0uDioZ5sOKV/NClZ0C6fsuhwgHXUEEWO/WrxjUl.', NULL, '2023-01-31 05:54:09', '2023-01-31 05:54:09'),
(5, 'zohaib', 'zbcvbx@hgg.com', NULL, '$2y$10$jo.A82FenUX2J8NySgJARegyAh4UAQKYdcW93zLvlH6bXwjEZLwZm', NULL, '2023-01-31 06:55:55', '2023-01-31 06:55:55'),
(6, 'khan', 'khan@gmail.com', NULL, '$2y$10$WqLcTcLG4I.BVdHNa60MpOsUHGyhBdSRIJM8G6sg8ZD88P73XrAGK', NULL, '2023-01-31 07:32:11', '2023-01-31 07:32:11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
