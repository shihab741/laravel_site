-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 07:55 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shihab_projects_laravel_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `articleHeading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `articleSlug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `articleContent` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryId` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `articleHeading`, `articleSlug`, `articleContent`, `categoryId`, `image`, `publicationStatus`, `created_at`, `updated_at`) VALUES
(1, 'Article one under health category', 'article-one', '<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia eget neque et finibus. Vestibulum felis orci, ullamcorper et metus a, tempus dignissim arcu. Pellentesque ut risus sem. Praesent commodo erat lorem, ac dignissim ipsum mattis et. Praesent scelerisque orci vulputate lacus dapibus tristique. Sed sed ullamcorper ligula, ut pharetra lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque bibendum egestas nisl. Vestibulum pellentesque tempor lectus, eget sodales lacus rutrum maximus. Sed malesuada tincidunt velit, vitae aliquet velit euismod ut.</p>\r\n\r\n<p style=\"text-align:justify\">Suspendisse auctor ligula augue, vel tincidunt nulla suscipit eget. Mauris tempor faucibus nulla vel accumsan. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur sagittis mollis lacus sed scelerisque. Nullam non velit dapibus justo faucibus cursus sit amet eget felis. Phasellus dapibus iaculis lectus a eleifend. Nunc pretium varius sapien, et porta lacus consequat ac. Quisque sagittis gravida bibendum. Proin vehicula leo quis nunc dignissim venenatis. Phasellus euismod euismod arcu, a consectetur ex maximus ac. Quisque viverra, nisl at semper mattis, mi quam porttitor odio, tristique volutpat dolor est sed lectus. Ut ultrices interdum quam, eget accumsan felis posuere rutrum. Nullam tincidunt, ante vitae mattis hendrerit, erat justo consequat mauris, eu semper ligula urna nec metus. In pellentesque finibus lacinia. Sed et ipsum eleifend lorem mollis sagittis. Fusce maximus maximus ligula ac ullamcorper.</p>\r\n\r\n<p style=\"text-align:justify\">Donec pretium, turpis at vehicula ultricies, sem nulla tempor arcu, sit amet egestas elit magna ut dui. Nulla facilisi. Curabitur pellentesque urna orci, vel tristique orci volutpat in. Nullam commodo tortor eget dignissim dictum. In consectetur posuere urna in interdum. Proin in enim dictum, vehicula arcu non, pharetra velit. Ut libero libero, ornare vitae orci vel, condimentum ullamcorper nulla. Integer eu urna eros. Aliquam libero sapien, varius ut tristique nec, finibus ac felis. Suspendisse aliquam cursus elit vel aliquet. Etiam mi elit, egestas et porttitor ac, sodales at enim. Phasellus et porttitor lacus. Etiam eu convallis leo. Pellentesque quis urna nec erat dignissim aliquam eu sed eros. Nulla in mauris nec quam pretium congue sit amet egestas ante. Aenean ullamcorper condimentum nisi, at cursus lectus malesuada vitae.</p>\r\n\r\n<p style=\"text-align:justify\">Praesent a eros elementum, suscipit nisl nec, fringilla augue. Maecenas at est dui. Ut neque tortor, vehicula sit amet diam ac, condimentum tempor sapien. Suspendisse lobortis velit in neque fringilla dictum. Quisque fringilla ultrices enim rutrum iaculis. Nam ut dolor urna. Nam massa lorem, viverra sit amet ex efficitur, bibendum convallis tellus. Pellentesque aliquam pulvinar tincidunt. Pellentesque rutrum porttitor nunc, sit amet mollis orci congue quis. Aliquam posuere nec erat id vehicula. Sed in enim eros. Phasellus convallis dolor tortor, a dapibus lacus dapibus a. Nam elementum felis mauris, eget suscipit neque aliquet vitae. Nullam nec leo rutrum, sagittis justo id, feugiat lectus.</p>\r\n\r\n<p style=\"text-align:justify\">Morbi suscipit malesuada dolor, at tempus diam vestibulum vitae. Cras sed lacinia ligula, a tempor eros. Integer ex libero, imperdiet a ipsum id, rutrum ultricies tortor. Integer lorem nisi, vestibulum non turpis sed, scelerisque dictum mi. In hac habitasse platea dictumst. Nullam mattis, mauris et tincidunt aliquet, dolor nulla pellentesque dui, vel finibus ante magna sit amet diam. Duis scelerisque ex ut aliquam egestas. Praesent eu rutrum elit. Sed varius leo nec nibh consequat pretium. In dignissim congue purus. Morbi rhoncus ultrices ante, ut congue purus laoreet ut. Vestibulum vitae metus ultrices, dignissim ligula eu, aliquet erat. Nam aliquet orci eu risus luctus, non pharetra sapien dignissim. Quisque at ultricies nulla.</p>', 6, 'health-demo-image.jpg', 1, '2019-03-27 01:17:08', '2019-03-27 09:33:13'),
(2, 'Article two under politics category', 'article-two', '<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia eget neque et finibus. Vestibulum felis orci, ullamcorper et metus a, tempus dignissim arcu. Pellentesque ut risus sem. Praesent commodo erat lorem, ac dignissim ipsum mattis et. Praesent scelerisque orci vulputate lacus dapibus tristique. Sed sed ullamcorper ligula, ut pharetra lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque bibendum egestas nisl. Vestibulum pellentesque tempor lectus, eget sodales lacus rutrum maximus. Sed malesuada tincidunt velit, vitae aliquet velit euismod ut.</p>\r\n\r\n<p style=\"text-align:justify\">Suspendisse auctor ligula augue, vel tincidunt nulla suscipit eget. Mauris tempor faucibus nulla vel accumsan. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur sagittis mollis lacus sed scelerisque. Nullam non velit dapibus justo faucibus cursus sit amet eget felis. Phasellus dapibus iaculis lectus a eleifend. Nunc pretium varius sapien, et porta lacus consequat ac. Quisque sagittis gravida bibendum. Proin vehicula leo quis nunc dignissim venenatis. Phasellus euismod euismod arcu, a consectetur ex maximus ac. Quisque viverra, nisl at semper mattis, mi quam porttitor odio, tristique volutpat dolor est sed lectus. Ut ultrices interdum quam, eget accumsan felis posuere rutrum. Nullam tincidunt, ante vitae mattis hendrerit, erat justo consequat mauris, eu semper ligula urna nec metus. In pellentesque finibus lacinia. Sed et ipsum eleifend lorem mollis sagittis. Fusce maximus maximus ligula ac ullamcorper.</p>\r\n\r\n<p style=\"text-align:justify\">Donec pretium, turpis at vehicula ultricies, sem nulla tempor arcu, sit amet egestas elit magna ut dui. Nulla facilisi. Curabitur pellentesque urna orci, vel tristique orci volutpat in. Nullam commodo tortor eget dignissim dictum. In consectetur posuere urna in interdum. Proin in enim dictum, vehicula arcu non, pharetra velit. Ut libero libero, ornare vitae orci vel, condimentum ullamcorper nulla. Integer eu urna eros. Aliquam libero sapien, varius ut tristique nec, finibus ac felis. Suspendisse aliquam cursus elit vel aliquet. Etiam mi elit, egestas et porttitor ac, sodales at enim. Phasellus et porttitor lacus. Etiam eu convallis leo. Pellentesque quis urna nec erat dignissim aliquam eu sed eros. Nulla in mauris nec quam pretium congue sit amet egestas ante. Aenean ullamcorper condimentum nisi, at cursus lectus malesuada vitae.</p>\r\n\r\n<p style=\"text-align:justify\">Praesent a eros elementum, suscipit nisl nec, fringilla augue. Maecenas at est dui. Ut neque tortor, vehicula sit amet diam ac, condimentum tempor sapien. Suspendisse lobortis velit in neque fringilla dictum. Quisque fringilla ultrices enim rutrum iaculis. Nam ut dolor urna. Nam massa lorem, viverra sit amet ex efficitur, bibendum convallis tellus. Pellentesque aliquam pulvinar tincidunt. Pellentesque rutrum porttitor nunc, sit amet mollis orci congue quis. Aliquam posuere nec erat id vehicula. Sed in enim eros. Phasellus convallis dolor tortor, a dapibus lacus dapibus a. Nam elementum felis mauris, eget suscipit neque aliquet vitae. Nullam nec leo rutrum, sagittis justo id, feugiat lectus.</p>\r\n\r\n<p style=\"text-align:justify\">Morbi suscipit malesuada dolor, at tempus diam vestibulum vitae. Cras sed lacinia ligula, a tempor eros. Integer ex libero, imperdiet a ipsum id, rutrum ultricies tortor. Integer lorem nisi, vestibulum non turpis sed, scelerisque dictum mi. In hac habitasse platea dictumst. Nullam mattis, mauris et tincidunt aliquet, dolor nulla pellentesque dui, vel finibus ante magna sit amet diam. Duis scelerisque ex ut aliquam egestas. Praesent eu rutrum elit. Sed varius leo nec nibh consequat pretium. In dignissim congue purus. Morbi rhoncus ultrices ante, ut congue purus laoreet ut. Vestibulum vitae metus ultrices, dignissim ligula eu, aliquet erat. Nam aliquet orci eu risus luctus, non pharetra sapien dignissim. Quisque at ultricies nulla.</p>', 10, 'politics-demo-image.jpg', 1, '2019-03-27 01:19:15', '2019-03-27 01:19:15'),
(3, 'Article three under culture category', 'article-three', '<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia eget neque et finibus. Vestibulum felis orci, ullamcorper et metus a, tempus dignissim arcu. Pellentesque ut risus sem. Praesent commodo erat lorem, ac dignissim ipsum mattis et. Praesent scelerisque orci vulputate lacus dapibus tristique. Sed sed ullamcorper ligula, ut pharetra lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque bibendum egestas nisl. Vestibulum pellentesque tempor lectus, eget sodales lacus rutrum maximus. Sed malesuada tincidunt velit, vitae aliquet velit euismod ut.</p>\r\n\r\n<p style=\"text-align:justify\">Suspendisse auctor ligula augue, vel tincidunt nulla suscipit eget. Mauris tempor faucibus nulla vel accumsan. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur sagittis mollis lacus sed scelerisque. Nullam non velit dapibus justo faucibus cursus sit amet eget felis. Phasellus dapibus iaculis lectus a eleifend. Nunc pretium varius sapien, et porta lacus consequat ac. Quisque sagittis gravida bibendum. Proin vehicula leo quis nunc dignissim venenatis. Phasellus euismod euismod arcu, a consectetur ex maximus ac. Quisque viverra, nisl at semper mattis, mi quam porttitor odio, tristique volutpat dolor est sed lectus. Ut ultrices interdum quam, eget accumsan felis posuere rutrum. Nullam tincidunt, ante vitae mattis hendrerit, erat justo consequat mauris, eu semper ligula urna nec metus. In pellentesque finibus lacinia. Sed et ipsum eleifend lorem mollis sagittis. Fusce maximus maximus ligula ac ullamcorper.</p>\r\n\r\n<p style=\"text-align:justify\">Donec pretium, turpis at vehicula ultricies, sem nulla tempor arcu, sit amet egestas elit magna ut dui. Nulla facilisi. Curabitur pellentesque urna orci, vel tristique orci volutpat in. Nullam commodo tortor eget dignissim dictum. In consectetur posuere urna in interdum. Proin in enim dictum, vehicula arcu non, pharetra velit. Ut libero libero, ornare vitae orci vel, condimentum ullamcorper nulla. Integer eu urna eros. Aliquam libero sapien, varius ut tristique nec, finibus ac felis. Suspendisse aliquam cursus elit vel aliquet. Etiam mi elit, egestas et porttitor ac, sodales at enim. Phasellus et porttitor lacus. Etiam eu convallis leo. Pellentesque quis urna nec erat dignissim aliquam eu sed eros. Nulla in mauris nec quam pretium congue sit amet egestas ante. Aenean ullamcorper condimentum nisi, at cursus lectus malesuada vitae.</p>\r\n\r\n<p style=\"text-align:justify\">Praesent a eros elementum, suscipit nisl nec, fringilla augue. Maecenas at est dui. Ut neque tortor, vehicula sit amet diam ac, condimentum tempor sapien. Suspendisse lobortis velit in neque fringilla dictum. Quisque fringilla ultrices enim rutrum iaculis. Nam ut dolor urna. Nam massa lorem, viverra sit amet ex efficitur, bibendum convallis tellus. Pellentesque aliquam pulvinar tincidunt. Pellentesque rutrum porttitor nunc, sit amet mollis orci congue quis. Aliquam posuere nec erat id vehicula. Sed in enim eros. Phasellus convallis dolor tortor, a dapibus lacus dapibus a. Nam elementum felis mauris, eget suscipit neque aliquet vitae. Nullam nec leo rutrum, sagittis justo id, feugiat lectus.</p>\r\n\r\n<p style=\"text-align:justify\">Morbi suscipit malesuada dolor, at tempus diam vestibulum vitae. Cras sed lacinia ligula, a tempor eros. Integer ex libero, imperdiet a ipsum id, rutrum ultricies tortor. Integer lorem nisi, vestibulum non turpis sed, scelerisque dictum mi. In hac habitasse platea dictumst. Nullam mattis, mauris et tincidunt aliquet, dolor nulla pellentesque dui, vel finibus ante magna sit amet diam. Duis scelerisque ex ut aliquam egestas. Praesent eu rutrum elit. Sed varius leo nec nibh consequat pretium. In dignissim congue purus. Morbi rhoncus ultrices ante, ut congue purus laoreet ut. Vestibulum vitae metus ultrices, dignissim ligula eu, aliquet erat. Nam aliquet orci eu risus luctus, non pharetra sapien dignissim. Quisque at ultricies nulla.</p>', 9, 'culture-demo-image.jpg', 1, '2019-03-27 01:20:32', '2019-03-27 01:20:32'),
(4, 'Article four, under health category', 'article-four', '<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia eget neque et finibus. Vestibulum felis orci, ullamcorper et metus a, tempus dignissim arcu. Pellentesque ut risus sem. Praesent commodo erat lorem, ac dignissim ipsum mattis et. Praesent scelerisque orci vulputate lacus dapibus tristique. Sed sed ullamcorper ligula, ut pharetra lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque bibendum egestas nisl. Vestibulum pellentesque tempor lectus, eget sodales lacus rutrum maximus. Sed malesuada tincidunt velit, vitae aliquet velit euismod ut.</p>\r\n\r\n<p style=\"text-align:justify\">Suspendisse auctor ligula augue, vel tincidunt nulla suscipit eget. Mauris tempor faucibus nulla vel accumsan. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur sagittis mollis lacus sed scelerisque. Nullam non velit dapibus justo faucibus cursus sit amet eget felis. Phasellus dapibus iaculis lectus a eleifend. Nunc pretium varius sapien, et porta lacus consequat ac. Quisque sagittis gravida bibendum. Proin vehicula leo quis nunc dignissim venenatis. Phasellus euismod euismod arcu, a consectetur ex maximus ac. Quisque viverra, nisl at semper mattis, mi quam porttitor odio, tristique volutpat dolor est sed lectus. Ut ultrices interdum quam, eget accumsan felis posuere rutrum. Nullam tincidunt, ante vitae mattis hendrerit, erat justo consequat mauris, eu semper ligula urna nec metus. In pellentesque finibus lacinia. Sed et ipsum eleifend lorem mollis sagittis. Fusce maximus maximus ligula ac ullamcorper.</p>\r\n\r\n<p style=\"text-align:justify\">Donec pretium, turpis at vehicula ultricies, sem nulla tempor arcu, sit amet egestas elit magna ut dui. Nulla facilisi. Curabitur pellentesque urna orci, vel tristique orci volutpat in. Nullam commodo tortor eget dignissim dictum. In consectetur posuere urna in interdum. Proin in enim dictum, vehicula arcu non, pharetra velit. Ut libero libero, ornare vitae orci vel, condimentum ullamcorper nulla. Integer eu urna eros. Aliquam libero sapien, varius ut tristique nec, finibus ac felis. Suspendisse aliquam cursus elit vel aliquet. Etiam mi elit, egestas et porttitor ac, sodales at enim. Phasellus et porttitor lacus. Etiam eu convallis leo. Pellentesque quis urna nec erat dignissim aliquam eu sed eros. Nulla in mauris nec quam pretium congue sit amet egestas ante. Aenean ullamcorper condimentum nisi, at cursus lectus malesuada vitae.</p>\r\n\r\n<p style=\"text-align:justify\">Praesent a eros elementum, suscipit nisl nec, fringilla augue. Maecenas at est dui. Ut neque tortor, vehicula sit amet diam ac, condimentum tempor sapien. Suspendisse lobortis velit in neque fringilla dictum. Quisque fringilla ultrices enim rutrum iaculis. Nam ut dolor urna. Nam massa lorem, viverra sit amet ex efficitur, bibendum convallis tellus. Pellentesque aliquam pulvinar tincidunt. Pellentesque rutrum porttitor nunc, sit amet mollis orci congue quis. Aliquam posuere nec erat id vehicula. Sed in enim eros. Phasellus convallis dolor tortor, a dapibus lacus dapibus a. Nam elementum felis mauris, eget suscipit neque aliquet vitae. Nullam nec leo rutrum, sagittis justo id, feugiat lectus.</p>\r\n\r\n<p style=\"text-align:justify\">Morbi suscipit malesuada dolor, at tempus diam vestibulum vitae. Cras sed lacinia ligula, a tempor eros. Integer ex libero, imperdiet a ipsum id, rutrum ultricies tortor. Integer lorem nisi, vestibulum non turpis sed, scelerisque dictum mi. In hac habitasse platea dictumst. Nullam mattis, mauris et tincidunt aliquet, dolor nulla pellentesque dui, vel finibus ante magna sit amet diam. Duis scelerisque ex ut aliquam egestas. Praesent eu rutrum elit. Sed varius leo nec nibh consequat pretium. In dignissim congue purus. Morbi rhoncus ultrices ante, ut congue purus laoreet ut. Vestibulum vitae metus ultrices, dignissim ligula eu, aliquet erat. Nam aliquet orci eu risus luctus, non pharetra sapien dignissim. Quisque at ultricies nulla.</p>', 6, '12.jpg', 1, '2019-03-27 09:30:28', '2019-03-29 03:05:01');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorySlug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`, `categorySlug`, `categoryDescription`, `publicationStatus`, `created_at`, `updated_at`) VALUES
(4, '0', '0ddd', '0', 0, NULL, '2019-03-23 02:49:38'),
(6, 'Health', 'health-articles', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque finibus diam. Cras hendrerit, arcu ut gravida accumsan, metus leo lacinia nulla, sit amet fringilla libero sapien quis dui. Aliquam tincidunt efficitur vehicula. Praesent imperdiet pellentesque lacinia. Suspendisse potenti. Sed id turpis et est blandit viverra vel vel lectus. Nullam non quam eu odio aliquam congue sit amet id mi. Vestibulum et malesuada orci, sed pellentesque urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus molestie urna in tincidunt semper.', 1, '2019-03-21 09:10:32', '2019-03-22 13:31:47'),
(9, 'Culture', 'culture', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque finibus diam. Cras hendrerit, arcu ut gravida accumsan, metus leo lacinia nulla, sit amet fringilla libero sapien quis dui. Aliquam tincidunt efficitur vehicula. Praesent imperdiet pellentesque lacinia. Suspendisse potenti. Sed id turpis et est blandit viverra vel vel lectus. Nullam non quam eu odio aliquam congue sit amet id mi. Vestibulum et malesuada orci, sed pellentesque urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus molestie urna in tincidunt semper.', 1, '2019-03-22 13:54:20', '2019-03-22 13:54:20'),
(10, 'Politics', 'politics', 'Description for politics category.', 1, '2019-03-27 01:14:38', '2019-03-27 01:14:38');

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
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_03_21_135555_create_categories_table', 2),
(6, '2019_03_23_090919_create_articles_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shihab Uddin Ahmed', 'Nayatola, Moghbazar, Dhaka, Bangladesh.', 'shihab@example.com', '$2b$10$isk9v9plZjfk/PYOhRI2WOXk8AAT.Qe3Po2aEwsOU6PTM68xKviQ.', '2s12AhwvojNlA4AoBFx8gTYd0v6uFtVrxSmDZDTyrDluvm9ugPeqg95DaVxX', '2019-03-18 15:25:11', '2019-03-18 15:25:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
