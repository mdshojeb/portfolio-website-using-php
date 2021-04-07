-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 05:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creative_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_me`
--

CREATE TABLE `about_me` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_me`
--

INSERT INTO `about_me` (`id`, `title`, `description`, `image`) VALUES
(1, 'About Me', 'I am  Shajeeb Mahmud . A professional web designer and web programmer.I am  Shajeeb Mahmud . A professional web designer and web programmer.I am  Shajeeb Mahmud . A professional web designer and web programmer.I am  Shajeeb Mahmud . A professional web designer and web programmer.I am  Shajeeb Mahmud . A professional web designer and web programmer.I am  Shajeeb Mahmud . A professional web designer and web programmer.', 'banner_img2.png');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `title1` varchar(50) NOT NULL,
  `title2` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title1`, `title2`, `description`, `image`) VALUES
(1, 'Hello!', 'I am Shajeeb Mahmud', 'A passionate programmer and web designer.', 'banner_img.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `description`, `address`, `phone`, `email`) VALUES
(1, 'Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.', 'Event Center park WT 22 New York', '+9 125 645 8654', 'info@exemple.com');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `year` int(11) NOT NULL,
  `result` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `name`, `year`, `result`) VALUES
(1, 'Diploma in Computer ', 2016, '85'),
(3, 'Advanced WordPress Theme Development', 2020, '90'),
(4, 'Digital Marketting And CPA ', 2019, '75');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `name`, `email`, `msg`, `status`) VALUES
(1, 'Shajeeb Mahmud', 'shajeebmahmud1947@gmail.com', 'Dhur faltu website . eder jonno ei deser aj ei obosta falao eigula re...tumi mia bhala hoo', 2),
(2, 'Saiful Islam', 'mdshojeb.official@gmail.com', 'VAloi to laglo mia ...tomar plm ace', 2);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) UNSIGNED NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `catagory`, `heading`, `description`, `img`) VALUES
(6, 'Web Design', 'Shajeeb Mahmud Project', 'Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software like Aldus PageMaker including versions.', 'burger-free-template.webp'),
(7, 'Web Design', 'UNLIMITED FEATURES', 'I am going to add anonther portfolio here.I am going to add anonther portfolio here.I am going to add anonther portfolio here.I am going to add anonther portfolio here.I am going to add anonther portfolio here.I am going to add anonther portfolio here.I am going to add anonther portfolio here.I am going to add anonther portfolio here.I am going to add anonther portfolio here.I am going to add anonther portfolio here.I am going to add anonther portfolio here.I am going to add anonther portfolio here.I am going to add anonther portfolio here.', 'manup-free-template.webp'),
(8, 'Web Design', 'CREATIVE IT INSTITUTE', '\r\nExpress dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software like Aldus PageMaker including versions.', 'specer-free-template.webp'),
(9, 'Web Design', 'A simple Law firm', 'Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software like Aldus PageMaker including versions.', 'web1.JPG'),
(10, 'Web Design', 'CREATIVE DESIGN', 'Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software like Aldus PageMaker including versions.', 'web2.JPG'),
(11, 'Web Design', 'UNLIMITED FEATURES', 'Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software like Aldus PageMaker including versions.', 'web3.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `review` varchar(300) NOT NULL,
  `rating` int(11) NOT NULL,
  `user_status` varchar(100) NOT NULL,
  `img` varchar(150) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=not approved 2=approved'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `review`, `rating`, `user_status`, `img`, `status`) VALUES
(1, 'Zhao liying', 'This is the best website i have ever seen. Thank you.', 5, 'Content Writer', 'jaan.jpg', 2),
(2, 'Zacki chan', 'I am new here. But can say it that  it is best. thank you really to smcreation company.', 4, 'Web Devlepor', 'images (1).jpg', 2),
(3, 'Zhao liying', 'Ami holam user . Tai ami ei website customize korte parbo na. But ami review dite parbo r msg korte parbo', 5, 'Content Writer', 'jaan.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `heading` text NOT NULL,
  `description` varchar(400) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `heading`, `description`, `img`) VALUES
(7, 'CREATIVE DESIGN', 'This is a service description. I am going to write about something about this subject. actually we are giving your project.', 'fa fa-rocket'),
(8, 'UNLIMITED FEATURES', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 'fab fa-react'),
(9, 'ULTRA RESPONSIVE', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 'fab fa-free-code-camp'),
(10, 'CREATIVE IDEAS', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 'fal fa-lightbulb-on'),
(11, 'EASY CUSTOMIZATION', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 'fal fa-edit'),
(12, 'SUPPER SUPPORT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 'fal fa-headset');

-- --------------------------------------------------------

--
-- Table structure for table `service_section`
--

CREATE TABLE `service_section` (
  `id` int(10) UNSIGNED NOT NULL,
  `short_title` varchar(50) NOT NULL,
  `head_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_section`
--

INSERT INTO `service_section` (`id`, `short_title`, `head_title`) VALUES
(1, 'What we do', 'Services and Solution');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) UNSIGNED NOT NULL,
  `label` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `label`, `link`) VALUES
(1, 'fab fa-facebook-f', 'https://facebook.com'),
(2, 'fab fa-twitter', 'https://twitter.com'),
(3, 'fab fa-linkedin-in', 'https://linkedin.com'),
(4, 'fab fa-instagram', 'https://instagram.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=user 2=admin',
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `status`, `email`, `phone`, `password`, `role`, `img`) VALUES
(3, 'Shajeeb Mahmud', 'Web Designer', 'mdshojeb.official@gmail.com', '01700964568', '$2y$10$.s.NWF7KoSWbfcDSmXmbZ.F6vFgUHPAJg1WcsIWlabjqxy9J01hjO', 2, 'casual-photo2.jpg'),
(7, 'Zhao liying', 'Content Writer', 'zhao@gmail.com', '01533653785', '$2y$10$C.s9ujAtiN9P6Sisprd2xuj8qGItysg7.90Ze.5XdhCMkVfRG2x2C', 1, 'jaan.jpg'),
(8, 'Zacki chan', 'Web Devlepor', 'zack@gmail.com', '01700964562', '$2y$10$vx4EsvpuUqpfR8nAAAl5SuKURfd1kSEJeNkst00GCzTgiFdTGXh6i', 1, 'images (1).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_me`
--
ALTER TABLE `about_me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_section`
--
ALTER TABLE `service_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_me`
--
ALTER TABLE `about_me`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `service_section`
--
ALTER TABLE `service_section`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
