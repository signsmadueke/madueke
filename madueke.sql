-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 09:37 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

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
(1, 'Signs', 'signsmadueke@gmail.com', '6bb6403c2ed82bd52804e482d8e2e4e94604cf1d');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(150) NOT NULL,
  `book_author` varchar(150) NOT NULL,
  `book_image` varchar(150) NOT NULL,
  `book_description` longtext NOT NULL,
  `total_book_page` int(11) NOT NULL,
  `book_isbn` varchar(150) NOT NULL,
  `book_kindle_price` varchar(150) NOT NULL,
  `book_paperback_price` varchar(150) NOT NULL,
  `book_paperback_asin` varchar(150) NOT NULL,
  `book_kindle_asin` varchar(150) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_title`, `book_author`, `book_image`, `book_description`, `total_book_page`, `book_isbn`, `book_kindle_price`, `book_paperback_price`, `book_paperback_asin`, `book_kindle_asin`, `date_added`) VALUES
(72, 'Prayers For Mercy', 'Prayer M Madueke', 'book6.jpg', 'The journey to greatness can be very difficult outside the mercy of God. Do you know about God\'s mercy? Mercy can be translated as kindness, loving-kindness, good, goodness, pity, and compassion. It is a deep and tender feeling of compassion. God\'s mercy entails His having a deep and tender feeling of compassion towards us. It is being compassionate and aroused by the sight of weakness or suffering. It means to bend or stoop in kindness or loyalty to an inferior person, to favor or bestow something to him and to be considerate often when it is not expected or deserved. In this all-new message, Prayer Madueke teaches you practical keys on how:. The prayer of Mercy can change the situation. Mercy opens heaven on our prayer; mercy prevails over the judgment of the enemies. Mercy draws the attention of God to us. Mercy makes God forgive our sins and show us kindness. Mercy opens the door for miracles. The steadfast love of the LORD never ceases; his mercies never come to an end; they are new every morning; great is your faithfulness. The mercy of God is the anchor of deliverance for humanity. Get this book to know everything you need to know about God\'s Mercy!', 290, '1658537505', '5.99', '13.99', 'B083QNCZHL', '1658537505', '2020-04-09'),
(147, 'Your Dream Directory', 'Prayer M Madueke', 'book7.jpg', '\r\n        Dreams are series of thoughts, images or emotions that occur during sleep. It is an activity observed or enacted in one\'s sleep and impressed in one\'s memory so that when you wake up, it will be vividly remembered. If you forget your dreams, or think you do not dream at all, or dream but do not know the right prayers to pray, you may face great loss, sudden disaster or abortion of divine provisions. In this book, you will discover the meaning of your dreams, the right prayers to pray and how to handle dreams your forget, the prayers to pray when you dream and forget or fail to interpret rightly. This book is everyone\'s book because dream is common to all people, rich, poor, and people from all race in all the countries of the world, welcome to your dream directory.\r\n        ', 362, '1545525714', '5.99', '15.50', 'B071L5JHD3', '1545525714', '2020-04-09'),
(148, 'Prayers To Keep Your Marriage Out Of Troubles', 'Prayer M Madueke', 'book10.jpg', '\r\n        A power-packed prayer book you can use to guard your marriage from troubles in today\'s world. Are you facing divorce? Is your family in trouble over money, jobs or debts. Let God lend you a helping hand today.\r\n        ', 346, '146624416X', '6.00', '15.00', 'B0719GTFTD', '146624416X', '2020-04-09'),
(149, 'Dangerous Decrees to Destroy Your Destroyers (Book 1)', 'Prayer M Madueke', 'book11.jpg', '\r\n        Dangerous decrees to destroy your destroyers are a series of decrees that are designed to defend the defenceless and return evil arrows to their source. The decrees and prayers in these series of books stands as enemies to your enemies without taking no for an answer. These are books of decrees that can quarantine your problems, uncompromising enemies to an isolated place until they gave up the ghost. The decrees in this series of books can apprehend your enemies, put them into prison, recover your loss and confront every evil sacrifice against you until they are expired. The decrees are accompanied by a light that can expose evil activities in the dark, break evil chains and speaks to your problems until they bow. Get the series of this decrees and enjoy the rest of your life on earth.\r\n        ', 392, '979-8624497368', '5.99', '13.99', 'B0867GPTXM', 'B086BJZPL9', '2020-04-09'),
(150, 'Dangerous Decrees to Destroy Your Destroyers (Book 2)', 'Prayer M Madueke', 'book16.jpg', '\r\n        Dangerous decrees to destroy your destroyers are a series of decrees that are designed to defend the defenceless and return evil arrows to their source. The decrees and prayers in these series of books stands as enemies to your enemies without taking no for an answer. These are books of decrees that can quarantine your problems, uncompromising enemies to an isolated place until they gave up the ghost. The decrees in this series of books can apprehend your enemies, put them into prison, recover your loss and confront every evil sacrifice against you until they are expired. The decrees are accompanied by a light that can expose evil activities in the dark, break evil chains and speaks to your problems until they bow. Get the series of this decrees and enjoy the rest of your life on earth.\r\n        ', 392, '979-8624497368', '5.99', '13.99', 'B0866CT5XF', 'B086C9YJS1', '2020-04-09'),
(151, '21-40 Nights of Decrees and Your Enemies Will Surrender', 'Prayer M Madueke', 'book1.jpg', '\r\n        This book is a collection of powerful prayer points divided in two parts. The first part is made up of 21 prayer topics or decrees and the second, 40 decrees. It covers every conceivable problem a christian believer faces in their christian walk of faith, and gives prayer topics that provide answers to these problems.\r\n        ', 447, '9780720944', '7.99', '18.99', 'B0716DJZRN', '9780720944', '2020-04-09'),
(152, 'Leviathan The Beast', 'Prayer M Madueke', 'book12.jpg', '\r\n        Leviathan is the principality in charge of the dark region in the satanic kingdom. Only divine light sent in the name of Jesus in righteousness and faith can penetrate his kingdom or domain.His main kingdom is much below the water level but he also operates in the second heaven like any other principality. By right he is supposed to be next to Satan but the Queen of heaven has usurped the power of leviathan because of the favor she is currently receiving from Satan.Get this book to know everything you need to know about Leviathan, his tricks and how to stop him.\r\n        ', 177, '1657287564', '4.99', '9.99', 'B083LM75RD', '1657287564', '2020-04-09'),
(153, 'A Jump From Evil Altar', 'Prayer M Madueke', 'book9.jpg', '\r\n        The Lord is with many believers today but they do not know. many people of God today are still serving under great bondage. There is much great potential deposited in many believers today but these believers are still living in sin.An altar can be built to destroy an individual, a family, a group or even a whole nation. Once your enemies know what God has spoken concerning your life, marriage, business, academics, work, files containing what God has said about them are on evil altars and need to be withdrawn.\r\n        ', 256, '1650596138', '4.60', '14.99', 'B0834HH58H', '1650596138', '2020-04-09'),
(154, 'When Evil Altars are Multiplied', 'Prayer M Madueke', 'book14.jpg', '\r\n        Our generation is possessed, demonized, filled with fakes, magicians, iniquity, perversion, enchantments and divinations. Altars of darkness which are places where people\'s destinies, marriages, great greatness and promising stars are summoned, judged and condemned by the wicked are increasing. We are faced with multiple altars, places of evil sacrifices and demonstrations of demonic powers. You need to know how to deal with evil altar, evil priest and people who multiply altars around you. If you keep silent, words, negative utterances said against you in evil altars will control your life on earth and reduce you to the wish of altar users. This book will guide you on how to resist attacks, reject evil arrows from evil altars and empower you to fulfill your destiny, Gods purpose on earth.\r\n        ', 168, '1543156878', '5.50', '12.99', 'B0728186BC', '1543156878', '2020-04-09'),
(155, 'Speaking Things into Existence by Faith (Book 1)', 'Prayer M Madueke', 'book17.jpg', '\r\n        With this divine provided phone number, your situation can change. You can be prosperous, and great restoration can take place in your life because all things are possible to him that believes. Those who have this key have a unique language because they know that all things are possible. If you can only believe and say out what you believe, you will get to your Promised Land. No matter how sinful you are, you can still believe Christ, repent, and forsake your sins. Faith has a voice. So, when you believe, do not stop at that level. Say what you believe and stand on that even unto death. Faith brings man and God in unity in the realm of the spirit and makes impossibilities possible in a moment. Some of the powers to fight against to have this phone numbers of God are unbelief to God\'s word, fear, doubt, and discouragement. One good thing about this particular phone number is that it does not discriminate. Even sinners at times use this number to get to God. Many sinners out of coverage area have used this number and it worked for them. Here you can find 25 prayer points to guide you through your exercise of faith.\r\n        ', 101, '979-8624479869', '3.99', '9.99', 'B085W661SF', 'B085RP5M2D', '2020-04-09'),
(156, 'Speaking Things into Existence by Faith (Book 2)', 'Prayer M Madueke', 'book18.jpg', '\r\n        With this divine provided phone number, your situation can change. You can be prosperous, and great restoration can take place in your life because all things are possible to him that believes. Those who have this key have a unique language because they know that all things are possible. If you can only believe and say out what you believe, you will get to your Promised Land. No matter how sinful you are, you can still believe Christ, repent, and forsake your sins. Faith has a voice. So, when you believe, do not stop at that level. Say what you believe and stand on that even unto death. Faith brings man and God in unity in the realm of the spirit and makes impossibilities possible in a moment. Some of the powers to fight against to have this phone numbers of God are unbelief to God\'s word, fear, doubt, and discouragement. One good thing about this particular phone number is that it does not discriminate. Even sinners at times use this number to get to God. Many sinners out of coverage area have used this number and it worked for them. Here you can find 25 prayer points to guide you through your exercise of faith.\r\n        ', 66, '979-8624493292', '3.99', '9.99', 'B085XNCJC3', 'B085RNLQLK', '2020-04-09'),
(157, 'Prayer Retreat', 'Prayer M Madueke', 'book3.jpg', '\r\n        Are you suffering from setbacks in your business, health, marriage or personal relationships? Are you under the oppression of the enemy? Are you a victim of near-to-success syndrome? It does not matter to God what your problem is. What is important to Him is whether you\'re ready to turn all the burden over to Him. Prayer Retreat (Prayers to Possess Your Year) is an inspired prayer manual with just one aim: freeing you from the vindictive clutches of the enemy and set you on the path to success in every area of your life. Experience supernatural breakthroughs in your finances, divine health, love and happiness in your relationships and absolute freedom from demonic attacks.Prayer Retreat is a must have prayer manual for every family.\r\n        ', 425, '1466200847', '4.99', '16.99', 'B074P7CCDK', '1466200847', '2020-04-09');

-- --------------------------------------------------------

--
-- Table structure for table `devotions`
--

CREATE TABLE `devotions` (
  `devotion_id` int(11) NOT NULL,
  `devotion_title` varchar(150) NOT NULL,
  `devotion_subtitle` varchar(150) DEFAULT NULL,
  `devotion_author` varchar(150) NOT NULL,
  `devotion_body` longtext NOT NULL,
  `devotion_image` varchar(150) NOT NULL,
  `devotion_subimage` varchar(150) NOT NULL,
  `datePosted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devotions`
--

INSERT INTO `devotions` (`devotion_id`, `devotion_title`, `devotion_subtitle`, `devotion_author`, `devotion_body`, `devotion_image`, `devotion_subimage`, `datePosted`) VALUES
(15, 'Speaking things into Existence</b>s', 'The Word of Faith', 'Prayer M. Madueke', '<p>Faith is one of God&rsquo;s phone number and the key that unlocks the door of heaven&rsquo;s resources. Faith that believes the word of God without doubting can keep a believer in God&rsquo;s coverage area all the days of his life. Faith means to believe the word of God. You may not need to ask before you receive with this divine phone number. What you just need is only believe and you will receive whatever you want. <br /> <br />When in prayer or speak anything, you receive. But in faith, all things are possible with just believing. It then means that you can have anything just by identifying any part of the scriptures that promises you that. Merely identifying any scripture that promises you prosperity can easily cause you to prosper. You can have your healing and deliverance just by faith. What you need is just to believe and it will take place.</p>\r\n<p>Faith brings man and God in unity in the realm of the spirit and makes impossibilities possible in a moment. Some of the powers to fight against to have this phone numbers of God are unbelief to God&rsquo;s word, fear, doubt, and discouragement. One good thing about this particular phone number is that it does not discriminate. Even sinners at times use this number to get to God. Many sinners out of coverage area have used this number and it worked for them.</p>', 'devotional1.jpg', 'devotional1-lg.jpg', '2020-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `freebooks`
--

CREATE TABLE `freebooks` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(150) NOT NULL,
  `book_author` varchar(150) NOT NULL,
  `book_image` varchar(150) NOT NULL,
  `book_description` longtext NOT NULL,
  `total_book_page` int(11) NOT NULL,
  `book_isbn` varchar(150) NOT NULL,
  `book_kindle_price` varchar(150) NOT NULL,
  `book_paperback_price` varchar(150) NOT NULL,
  `book_paperback_asin` varchar(150) NOT NULL,
  `book_kindle_asin` varchar(150) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freebooks`
--

INSERT INTO `freebooks` (`book_id`, `book_title`, `book_author`, `book_image`, `book_description`, `total_book_page`, `book_isbn`, `book_kindle_price`, `book_paperback_price`, `book_paperback_asin`, `book_kindle_asin`, `date_added`) VALUES
(1, 'Quarantined for God</b>s Deliverance', 'Prayer M. Madueke', 'book5.jpg', 'Plagues do not just happen without reason. When the Egyptians became steeped in evil and iniquity against the people of God, plagues were sent to humble them. Plagues are more horrifying and humiliating than shooting wars. They are a sign that something is terribly wrong. Man has deployed the revealed knowledge of God (science and technology) to wrong uses, destroying and polluting the earth, playing god with genomics and even attempting to slap its creator in the face. There is no depth of decadence that man has not plumbed in a vain attempt to normalize evil and abnormality. Plagues are a time of cleansing, cleansing the earth of pollutants and iniquity. For a child of God, it is a time to put things right in your relationship with God. This is what this book, Quarantined for Deliverance, is about. With over 75 deliverance prayer points, you will be purged to be in order to be saved. When the 10 plagues were unleashed on the Egyptians, the children of God were unaffected. God does not change. He will deliver his people. His promises never fail. Quarantined for Deliverance will help those who have gone astray retrace their steps while there\'s yet time. This book is for families, communities and nations to pray for deliverance from this terrible scourge.', 145, '978-8633820270', 'FREE', '6.99', 'B086PSL9BF', '8633820270', '2020-04-02');

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
-- Indexes for table `freebooks`
--
ALTER TABLE `freebooks`
  ADD PRIMARY KEY (`book_id`);

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
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `devotions`
--
ALTER TABLE `devotions`
  MODIFY `devotion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `freebooks`
--
ALTER TABLE `freebooks`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
