-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 11:56 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hg_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_headers`
--

CREATE TABLE `about_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_headers`
--

INSERT INTO `about_headers` (`id`, `title`, `sub_title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'About us Hexa\'s gobindaganj', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '202305230719about-img.jpg', '2023-05-23 01:19:32', '2023-05-23 01:19:32');

-- --------------------------------------------------------

--
-- Table structure for table `about_progresses`
--

CREATE TABLE `about_progresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_progresses`
--

INSERT INTO `about_progresses` (`id`, `title`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Student Happy', '100', '2023-05-23 01:20:23', '2023-05-23 01:20:23'),
(2, 'Course Complete', '1200', '2023-05-23 01:22:40', '2023-05-23 01:22:40');

-- --------------------------------------------------------

--
-- Table structure for table `about_services`
--

CREATE TABLE `about_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `title_1` varchar(255) NOT NULL,
  `description_1` mediumtext NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `title_2` varchar(255) NOT NULL,
  `description_2` mediumtext NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `title_3` varchar(255) NOT NULL,
  `description_3` mediumtext NOT NULL,
  `image_3` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `best_students`
--

CREATE TABLE `best_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `point` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Life Skill English spoken cours', 'Life Skill English spoken cours', '2023-05-23 10:46:01', '2023-05-23 11:15:21'),
(2, 'admin', 'admin', '2023-05-23 11:29:12', '2023-05-23 11:29:12');

-- --------------------------------------------------------

--
-- Table structure for table `blog_headers`
--

CREATE TABLE `blog_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_headers`
--

INSERT INTO `blog_headers` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Our Latest Blog', '202305231648choose.jpg', '2023-05-23 10:47:43', '2023-05-23 10:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description_1` mediumtext NOT NULL,
  `description_2` mediumtext NOT NULL,
  `description_3` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `category_id`, `title`, `description_1`, `description_2`, `description_3`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'sunny', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse..', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse..', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse..', '202305231657about-img.jpg', '0', '2023-05-23 10:57:12', '2023-05-23 10:57:59'),
(2, '1', 'sunny', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse..', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse..', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse..', '202305231704choose.jpg', '0', '2023-05-23 11:04:11', '2023-05-23 11:04:11');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sn` varchar(255) NOT NULL,
  `s_id` varchar(255) NOT NULL,
  `issue_date` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `result` varchar(255) DEFAULT NULL,
  `course_start_date` varchar(255) NOT NULL,
  `course_end_date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_titles`
--

CREATE TABLE `certificate_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `time` varchar(255) DEFAULT NULL,
  `fee` varchar(255) DEFAULT NULL,
  `student` varchar(255) DEFAULT NULL,
  `instructor_name` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `cat_id`, `image`, `title`, `description`, `time`, `fee`, `student`, `instructor_name`, `icon`, `created_at`, `updated_at`) VALUES
(5, '4', '202305230733edu.png', 'Life Skill English spoken cours', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '11:11', '5000', NULL, 'Sunny', '202305230733icon-1.jpg', '2023-05-23 01:33:53', '2023-05-23 01:33:53'),
(6, '3', '202305230833edu.png', 'Life Skill English spoken cours', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '11:11', '5000', NULL, 'Farhan', '202305230833fb.png', '2023-05-23 02:33:41', '2023-05-23 02:33:41'),
(7, '2', '202305230834edu.png', 'Life Skill English spoken cours', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '11:11', '5000', NULL, 'Sunny', '202305230834fb.png', '2023-05-23 02:34:40', '2023-05-23 02:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'English Spoken', 'English Spoken', '2023-05-23 01:31:53', '2023-05-23 01:31:53'),
(3, 'English Spoken', 'English Spoken', '2023-05-23 01:32:01', '2023-05-23 01:32:01'),
(4, 'English Spoken', 'English Spoken', '2023-05-23 01:32:08', '2023-05-23 01:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `course_headers`
--

CREATE TABLE `course_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_headers`
--

INSERT INTO `course_headers` (`id`, `title`, `sub_title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Hexe\'s Gobindganj is our popular course', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '202305230728about-img.jpg', '2023-05-23 01:28:56', '2023-05-23 01:30:47');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallery_id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1', '202305230930person.png', '2023-05-23 03:30:29', '2023-05-23 03:30:29'),
(2, '2', '202305230953edu.png', '2023-05-23 03:53:54', '2023-05-23 03:53:54'),
(3, '3', '202305230958person2.png', '2023-05-23 03:58:17', '2023-05-23 03:58:17');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'canawaqic@mailinator.com', '2023-05-23 03:12:32', '2023-05-23 03:12:32'),
(2, 'admin', '2023-05-23 03:53:44', '2023-05-23 03:53:44'),
(3, 'opstelit', '2023-05-23 03:58:07', '2023-05-23 03:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_titles`
--

CREATE TABLE `gallery_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_titles`
--

INSERT INTO `gallery_titles` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Our Gallery', '202305230927about-img.jpg', '2023-05-23 03:27:01', '2023-05-23 03:27:01');

-- --------------------------------------------------------

--
-- Table structure for table `home_abouts`
--

CREATE TABLE `home_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_abouts`
--

INSERT INTO `home_abouts` (`id`, `title`, `sub_title`, `description`, `video`, `image`, `created_at`, `updated_at`) VALUES
(1, 'About us', 'Hexa\'s Gobindaganj is one of the best IELTS center.', 'We are working in English language and computer education through a total of 14 campuses in Sylhet and Moulvibazar districts with the great objective of creating skilled human resources. We have Cambridge certified faculty and state-of the-art course materials. HEXA\'S EDUCATION received top performer award by British Council in IELTS course training in Bangladesh.', 'video Know More', '202305230642about-img.jpg', '2023-05-23 00:42:35', '2023-05-23 00:42:35');

-- --------------------------------------------------------

--
-- Table structure for table `home_apps`
--

CREATE TABLE `home_apps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `app_store` varchar(255) DEFAULT NULL,
  `google_play` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_apps`
--

INSERT INTO `home_apps` (`id`, `title`, `sub_title`, `description`, `app_store`, `google_play`, `image`, `created_at`, `updated_at`) VALUES
(1, 'DOWNLOAD APP', 'Hexa\'s Best English Solution Makes Your Better Skills', 'Nam ut hendrerit leo. Aenean vel ipsum nunc. Curabitur in tellus vitae nisi aliquet dapibus non et erat. Pellentesque porta sapien non accumsan dignissim curabitur sagittis nulla sit Pellentesque amet dolor feugiat.', 'App Store', 'GOOGLE PLAY', '202305230702download-app.png', '2023-05-23 01:02:51', '2023-05-23 01:02:51');

-- --------------------------------------------------------

--
-- Table structure for table `home_chooses`
--

CREATE TABLE `home_chooses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `icon` varchar(255) NOT NULL,
  `icon_title` varchar(255) NOT NULL,
  `icon_1` varchar(255) NOT NULL,
  `icon_title_1` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_chooses`
--

INSERT INTO `home_chooses` (`id`, `title`, `description`, `icon`, `icon_title`, `icon_1`, `icon_title_1`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Why choose Heax\'s Gobindaganj?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '202305230650icon-1.jpg', 'Best Education', '202305230650icon-2.jpg', 'Top IELTS Center', '202305230650choose.jpg', '2023-05-23 00:50:17', '2023-05-23 00:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `home_headers`
--

CREATE TABLE `home_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_headers`
--

INSERT INTO `home_headers` (`id`, `title`, `sub_title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'BEST ENGLISH IELTES', 'ENGLISH EDUCATION OF MANAGEMENT', '202305230634banner-home.jpg', '2023-05-23 00:34:25', '2023-05-23 00:34:25');

-- --------------------------------------------------------

--
-- Table structure for table `home_offer_contents`
--

CREATE TABLE `home_offer_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_offer_contents`
--

INSERT INTO `home_offer_contents` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ALL COURSE', 'Lorem ipsum dolor sit amet, cons ectetur adipiscing elit, sed do eius mod tempor incididunt', '202305230647fb.png', '2023-05-23 00:47:41', '2023-05-23 00:47:41'),
(2, 'VIRTUAL CLASS', 'Lorem ipsum dolor sit amet, cons ectetur adipiscing elit, sed do eius mod tempor incididunt', '202305230648fb.png', '2023-05-23 00:48:41', '2023-05-23 00:48:41'),
(3, 'REAL MEETING', 'Lorem ipsum dolor sit amet, cons ectetur adipiscing elit, sed do eius mod tempor incididunt', '202305230649fb.png', '2023-05-23 00:49:05', '2023-05-23 00:49:05');

-- --------------------------------------------------------

--
-- Table structure for table `home_offer_titles`
--

CREATE TABLE `home_offer_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_offer_titles`
--

INSERT INTO `home_offer_titles` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'What We Offer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut\r\nlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', '2023-05-23 00:45:00', '2023-05-23 00:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `home_testimonial_contents`
--

CREATE TABLE `home_testimonial_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` mediumtext NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_testimonial_contents`
--

INSERT INTO `home_testimonial_contents` (`id`, `description`, `name`, `position`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, con sectetur adipiscing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Adil', 'FrontEnd Devoloper', '202305230726person.png', '2023-05-23 01:15:04', '2023-05-23 01:26:59'),
(2, 'Lorem ipsum dolor sit amet, con sectetur adipiscing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Farhan', 'Chairman', '202305230726person.png', '2023-05-23 01:16:01', '2023-05-23 01:26:51'),
(3, 'Lorem ipsum dolor sit amet, con sectetur adipiscing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Adil', 'FrontEnd Devoloper', '202305230726person.png', '2023-05-23 01:17:02', '2023-05-23 01:26:45'),
(4, 'Lorem ipsum dolor sit amet, con sectetur adipiscing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'admin', 'Director', '202305230727person2.png', '2023-05-23 01:27:48', '2023-05-23 01:27:48');

-- --------------------------------------------------------

--
-- Table structure for table `home_testimonial_titles`
--

CREATE TABLE `home_testimonial_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_testimonial_titles`
--

INSERT INTO `home_testimonial_titles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Some of Our Happy Student Saying', '2023-05-23 01:14:25', '2023-05-23 01:14:25');

-- --------------------------------------------------------

--
-- Table structure for table `home_trainers`
--

CREATE TABLE `home_trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `name_1` varchar(255) NOT NULL,
  `fb_1` varchar(255) NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `name_2` varchar(255) NOT NULL,
  `fb_2` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `name_3` varchar(255) NOT NULL,
  `fb_3` varchar(255) NOT NULL,
  `image_3` varchar(255) NOT NULL,
  `name_4` varchar(255) NOT NULL,
  `fb_4` varchar(255) NOT NULL,
  `image_4` varchar(255) NOT NULL,
  `name_5` varchar(255) NOT NULL,
  `fb_5` varchar(255) NOT NULL,
  `image_5` varchar(255) NOT NULL,
  `name_6` varchar(255) NOT NULL,
  `fb_6` varchar(255) NOT NULL,
  `image_6` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_05_05_083942_create_home_headers_table', 1),
(7, '2023_05_05_113155_create_home_abouts_table', 1),
(8, '2023_05_05_145727_create_home_offer_titles_table', 1),
(9, '2023_05_05_154047_create_home_offer_contents_table', 1),
(10, '2023_05_05_161427_create_home_chooses_table', 1),
(11, '2023_05_05_170755_create_home_apps_table', 1),
(12, '2023_05_05_185756_create_home_testimonial_titles_table', 1),
(13, '2023_05_05_185814_create_home_testimonial_contents_table', 1),
(14, '2023_05_06_061434_create_home_trainers_table', 1),
(15, '2023_05_06_072250_create_about_headers_table', 1),
(16, '2023_05_06_072309_create_about_services_table', 1),
(17, '2023_05_06_091824_create_about_progresses_table', 1),
(18, '2023_05_06_095356_create_team_headers_table', 1),
(19, '2023_05_06_095406_create_team_members_table', 1),
(20, '2023_05_06_110139_create_course_headers_table', 1),
(22, '2023_05_06_121213_create_course_categories_table', 1),
(23, '2023_05_06_130441_create_site_settings_table', 1),
(26, '2023_05_06_111927_create_courses_table', 2),
(29, '2023_05_21_110514_create_best_students_table', 3),
(30, '2023_05_21_112345_create_gallery_titles_table', 3),
(31, '2023_05_21_114519_create_gallery_categories_table', 3),
(32, '2023_05_21_114733_create_galleries_table', 3),
(33, '2023_05_21_121730_create_certificate_titles_table', 3),
(34, '2023_05_21_121736_create_certificates_table', 3),
(39, '2023_05_22_051150_create_blog_categories_table', 4),
(40, '2023_05_22_051203_create_blog_posts_table', 4),
(41, '2023_05_23_005533_create_blog_headers_table', 4);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `social_1` varchar(255) DEFAULT NULL,
  `social_2` varchar(255) DEFAULT NULL,
  `social_3` varchar(255) DEFAULT NULL,
  `copy` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `logo`, `description`, `social_1`, `social_2`, `social_3`, `copy`, `created_at`, `updated_at`) VALUES
(1, '202305230859logo.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.', 'dscas', 'asddd', 'adasd', 'All rights reserved Opstelit', '2023-05-23 02:59:02', '2023-05-23 02:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `team_headers`
--

CREATE TABLE `team_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_headers`
--

INSERT INTO `team_headers` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Meet The Team Our Professionals', '202305230839img.png', '2023-05-23 02:38:44', '2023-05-23 02:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `social_1` varchar(255) DEFAULT NULL,
  `social_2` varchar(255) DEFAULT NULL,
  `social_3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `image`, `name`, `position`, `description`, `social_1`, `social_2`, `social_3`, `created_at`, `updated_at`) VALUES
(1, '202305230840person.png', 'Abodul Malek', 'Creative Designer', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'ddsd', 'ddd', 'ddd', '2023-05-23 02:40:42', '2023-05-23 02:40:42'),
(2, '202305230841person2.png', 'Abodul Malek', 'Creative Designer', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'ddadd', 'cddd', 'dasadad', '2023-05-23 02:41:07', '2023-05-23 02:41:07'),
(3, '202305230841person.png', 'Abodul Malek', 'Creative Designer', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'cfsfdsd', 'dcasdasd', 'dasdasd', '2023-05-23 02:41:36', '2023-05-23 02:41:36'),
(4, '202305230842person.png', 'Abodul Malek', 'Creative Designer', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'sssddd', 'dasdasd', 'dasd', '2023-05-23 02:42:52', '2023-05-23 02:42:52'),
(5, '202305230843person2.png', 'Abodul Malek', 'Creative Designer', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'sdad', 'dasdsd', 'csdad', '2023-05-23 02:43:26', '2023-05-23 02:43:26'),
(6, '202305230843person.png', 'Abodul Malek', 'Creative Designer', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'adad', 'dasd', 'dsad', '2023-05-23 02:43:50', '2023-05-23 02:43:50');

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
(14, 'hexa', 'hexa123@gmail.com', NULL, '$2y$10$zwmkVN.xJ4BUvoEaC0NeLOwVYgGgC0uEoHiLWZ2pPJV5t.TgLfbfu', NULL, '2023-05-21 01:14:55', '2023-05-21 01:14:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_headers`
--
ALTER TABLE `about_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_progresses`
--
ALTER TABLE `about_progresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_services`
--
ALTER TABLE `about_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `best_students`
--
ALTER TABLE `best_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_headers`
--
ALTER TABLE `blog_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate_titles`
--
ALTER TABLE `certificate_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_headers`
--
ALTER TABLE `course_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_titles`
--
ALTER TABLE `gallery_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_abouts`
--
ALTER TABLE `home_abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_apps`
--
ALTER TABLE `home_apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_chooses`
--
ALTER TABLE `home_chooses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_headers`
--
ALTER TABLE `home_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_offer_contents`
--
ALTER TABLE `home_offer_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_offer_titles`
--
ALTER TABLE `home_offer_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_testimonial_contents`
--
ALTER TABLE `home_testimonial_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_testimonial_titles`
--
ALTER TABLE `home_testimonial_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_trainers`
--
ALTER TABLE `home_trainers`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_headers`
--
ALTER TABLE `team_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
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
-- AUTO_INCREMENT for table `about_headers`
--
ALTER TABLE `about_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_progresses`
--
ALTER TABLE `about_progresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `about_services`
--
ALTER TABLE `about_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `best_students`
--
ALTER TABLE `best_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_headers`
--
ALTER TABLE `blog_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `certificate_titles`
--
ALTER TABLE `certificate_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_headers`
--
ALTER TABLE `course_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery_titles`
--
ALTER TABLE `gallery_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_abouts`
--
ALTER TABLE `home_abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_apps`
--
ALTER TABLE `home_apps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_chooses`
--
ALTER TABLE `home_chooses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_headers`
--
ALTER TABLE `home_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_offer_contents`
--
ALTER TABLE `home_offer_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_offer_titles`
--
ALTER TABLE `home_offer_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_testimonial_contents`
--
ALTER TABLE `home_testimonial_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_testimonial_titles`
--
ALTER TABLE `home_testimonial_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_trainers`
--
ALTER TABLE `home_trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_headers`
--
ALTER TABLE `team_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
