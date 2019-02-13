-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 
-- サーバのバージョン： 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs_f02_db16`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `zip` text COLLATE utf8_unicode_ci,
  `address` text COLLATE utf8_unicode_ci,
  `tel` text COLLATE utf8_unicode_ci,
  `comment` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `zip`, `address`, `tel`, `comment`, `indate`) VALUES
(1, 'ボイボイキャンプ場', '8780201', '大分県竹田市久住町大字久住4050-11', '09079272570', '何も遮るものがない、大分・くじゅう高原約１万坪もの広大な草原が広がる解放感抜群のキャンプ場！', '2019-02-02 18:15:43'),
(2, 'ボイボイキャンプ場', '8780201', '大分県竹田市久住町大字久住4050-11', '09079272570', '何も遮るものがない、大分・くじゅう高原約１万坪もの広大な草原が広がる解放感抜群のキャンプ場！', '2019-02-02 18:15:57');

-- --------------------------------------------------------

--
-- テーブルの構造 `php02_table`
--

CREATE TABLE `php02_table` (
  `id` int(12) NOT NULL,
  `task` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `comment` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `php02_table`
--

INSERT INTO `php02_table` (`id`, `task`, `deadline`, `comment`, `indate`) VALUES
(2, 'js', '2019-02-03', '大変', '2019-02-02 15:27:56'),
(3, 'jQuery', '2019-02-04', '便利', '2019-02-02 15:29:16'),
(4, 'js', '2019-02-03', '大変', '2019-02-02 15:31:13'),
(5, 'js', '2019-02-03', '大変', '2019-02-02 15:32:16'),
(6, 'js', '2019-02-03', '大変', '2019-02-02 15:32:48'),
(7, 'js', '2019-02-03', '大変', '2019-02-02 15:33:00'),
(8, 'js', '2019-02-13', '大変', '2019-02-02 15:33:31'),
(9, 'あああ', '2019-02-12', 'ああああ', '2019-02-02 16:44:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `php02_table`
--
ALTER TABLE `php02_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `php02_table`
--
ALTER TABLE `php02_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
