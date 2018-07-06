-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2018 年 7 月 05 日 18:59
-- サーバのバージョン： 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_kadai3`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `mono_story`
--

CREATE TABLE `mono_story` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `mono_story`
--

INSERT INTO `mono_story` (`id`, `name`, `brand`, `tag`, `price`, `image`, `indate`) VALUES
(1, 'black diamond', 'DHD', 'surf', '100,000', NULL, '2018-07-04 16:51:51'),
(3, 'a', 'a', 'a', 'a', NULL, '2018-07-04 17:16:14'),
(4, 'a', 'a', 'a', 'a', NULL, '2018-07-04 17:22:28'),
(5, 'a', 'a', 'a', 'a', 'upload/20180704175437d41d8cd98f00b204e9800998ecf8427e.png', '2018-07-04 17:54:37'),
(6, 'a', 'a', 'a', 'a', 'upload/20180704175456d41d8cd98f00b204e9800998ecf8427e.png', '2018-07-04 17:54:56'),
(7, 'a亜亜ああ＠「亜亜＠「aa[', 's', 's', 's', 'upload/20180704180432d41d8cd98f00b204e9800998ecf8427e.png', '2018-07-04 18:04:32');

-- --------------------------------------------------------

--
-- テーブルの構造 `mono_user_table`
--

CREATE TABLE `mono_user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `mono_user_table`
--

INSERT INTO `mono_user_table` (`id`, `name`, `email`, `lid`, `lpw`) VALUES
(1, 'あ', 'a@s', 'a', 'as');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mono_story`
--
ALTER TABLE `mono_story`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mono_user_table`
--
ALTER TABLE `mono_user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mono_story`
--
ALTER TABLE `mono_story`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mono_user_table`
--
ALTER TABLE `mono_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
