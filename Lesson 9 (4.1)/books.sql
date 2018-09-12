-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 11, 2018 at 01:22 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netology4.1`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `year`, `isbn`, `genre`) VALUES
(1, 'Жесткий тайм-менеджмент. Возьмите свою жизнь под контроль', 'Дэн Кеннеди', 2015, '978-5-9614-5086-6', 'Самосовершенствование'),
(2, 'Совершенный код. Практическое руководство по разработке программного обеспечения', 'Стив Макконнелл', 2005, '978-5-7502-0064-1', 'Программирование'),
(3, 'Богатый папа, бедный папа', 'Роберт Кийосаки', 2011, '978-985-15-1659-5', 'Бизнес'),
(4, 'Scrum. Революционный метод управления проектами', 'Джефф Сазерленд', 2014, '978-5-00057-722-6', 'Менеджмент'),
(5, 'Пятьдесят оттенков серого', 'Э. Л. Джеймс', 2012, '978-5-699-78002-0', 'Современная зарубежная литература'),
(6, 'Remote. Офис не обязателен', 'Джейсон Фрайд', 2013, '978-500057-038-8', 'Карьера'),
(7, 'Rework: бизнес без предрассудков', 'Джейсон Фрайд', 2010, '978-5-91657-119-6', 'Бизнес'),
(8, 'Сначала скажите «нет». Секреты профессиональных переговорщиков', 'Джим Кэмп', 1998, '978-5-98124-453-7', 'Психология'),
(9, 'Квадрант денежного потока', 'Роберт Кийосаки', 2011, '978-9-8515-2315-9', 'Бизнес'),
(10, 'Руководство богатого папы по инвестированию', 'Роберт Кийосаки', 2008, '978-985-15-0420-2', 'Бизнес');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
