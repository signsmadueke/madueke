-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 11:54 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madueke`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `name`, `email`, `password`) VALUES
(1, 'Signs', 'signsmadueke@gmail.com', '6bb6403c2ed82bd52804e482d8e2e4e94604cf1d'),
(3, 'James', 'james@gmail.com', '18156d5a76583a2c0991d01bd46b773b3b46c7c2');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(150) NOT NULL,
  `book_author` varchar(150) NOT NULL,
  `book_image` varchar(150) NOT NULL,
  `book_description` varchar(150) NOT NULL,
  `total_book_page` int(11) NOT NULL,
  `book_isbn` varchar(150) NOT NULL,
  `book_kindle_price` varchar(150) NOT NULL,
  `book_paperback_price` varchar(150) NOT NULL,
  `book_measurement` varchar(150) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_title`, `book_author`, `book_image`, `book_description`, `total_book_page`, `book_isbn`, `book_kindle_price`, `book_paperback_price`, `book_measurement`, `date_added`) VALUES
(16, 'Dangerous Decress', 'Prayer Madueke', 'book2.jpg', 'This book is a collection of powerful prayer points divided in two parts. The first part is made up of 21 prayer topics or decrees and the second, 40 ', 232, '978-9780720940', '232', '232', '323', '2020-04-04'),
(17, 'Breaking Evil Yokes', 'Prayer Madueke', 'book4.jpg', 'This book is a collection of powerful prayer points divided in two parts. The first part is made up of 21 prayer topics or decrees and the second, 40 ', 23, '978-9780720940', '456', '456', '345', '2001-04-20'),
(53, 'Prayer Retreat', 'Prayer M. Madueke', 'book3.jpg', 'Faith is one of Godâ€™s phone number and the key that unlocks the door of heavenâ€™s resources. Faith that believes the word of God without doubting c', 332, '323', '343', '433', '434', '2020-04-02'),
(55, '21/40 Nights of Decrees and Your Enemies Will Surrender', 'Prayer M. Madueke', 'book1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad commodi delectus, doloremque ex facere impedit ipsa iste laborum laudantium libero odio p', 345, '978-9780720940', '234', '234', '234', '2020-04-02'),
(56, 'The Joy of The Lord', 'Prayer M. Madueke', 'book3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad commodi delectus, doloremque ex facere impedit ipsa iste laborum laudantium libero odio p', 345, '234', '345', '234', '345', '2020-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `devotions`
--

CREATE TABLE `devotions` (
  `devotion_id` int(11) NOT NULL,
  `devotion_title` varchar(150) NOT NULL,
  `devotion_subtitle` varchar(150) NOT NULL,
  `devotion_author` varchar(150) NOT NULL,
  `devotion_body` varchar(150) NOT NULL,
  `devotion_image` varchar(150) NOT NULL,
  `devotion_subimage` varchar(150) NOT NULL,
  `datePosted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devotions`
--

INSERT INTO `devotions` (`devotion_id`, `devotion_title`, `devotion_subtitle`, `devotion_author`, `devotion_body`, `devotion_image`, `devotion_subimage`, `datePosted`) VALUES
(8, 'Speaking things into Existence', 'The Word of Faith', 'Prayer M. Madueke', 'gh', 'devotional1.jpg', 'devotional1-lg.jpg', '2020-04-07'),
(9, 'The Secrets Of The Kingdom', 'God</b>s Kingdom Principle', 'Prayer M. Madueke', 'cvbn', 'devotional1.jpg', 'devotional1-lg.jpg', '2020-04-07'),
(10, 'aaa', 'vghn', 'Prayer M. Madueke', 'nm', 'devotional1.jpg', 'devotional1-lg.jpg', '2020-04-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `devotions`
--
ALTER TABLE `devotions`
  ADD PRIMARY KEY (`devotion_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `devotions`
--
ALTER TABLE `devotions`
  MODIFY `devotion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
