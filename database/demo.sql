-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 23, 2019 lúc 10:29 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `demo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` varchar(150) COLLATE utf8_estonian_ci DEFAULT NULL,
  `type` char(30) COLLATE utf8_estonian_ci DEFAULT NULL,
  `name` varchar(300) COLLATE utf8_estonian_ci DEFAULT NULL,
  `username` varchar(300) COLLATE utf8_estonian_ci DEFAULT NULL,
  `password` varchar(150) COLLATE utf8_estonian_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_estonian_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_estonian_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(15) DEFAULT NULL,
  `updated_by` varchar(300) COLLATE utf8_estonian_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `type`, `name`, `username`, `password`, `email`, `remember_token`, `status`, `created_by`, `updated_by`, `updated_at`, `created_at`) VALUES
('1548218230', NULL, '', 'thiennlp', '$2y$10$nhXKHqT7n7fpW9wGS31qS.pEU0iet58Erb1OrNOopz.0UEo3Gmbi2', 'nlpthien93@gmail.com', '85fXFBY0jcfgtkFkeL18VkCaBms0f9P7o1J3KlKgg5dMUN1yqu0QSz7eovJA', 1, NULL, NULL, '2019-01-23 04:37:10', '2019-01-23 04:37:10'),
(NULL, NULL, 'Thien', NULL, '$2y$10$pHtv00lOw3lCgY/oNTPJj.Dh65LLBZVSv8iZbVbq3KMkp67AbSow2', 'abc@gmail.com', NULL, NULL, NULL, NULL, '2019-01-23 08:46:58', '2019-01-23 08:46:58');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
