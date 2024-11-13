-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2024 at 02:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webling`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_dictionary`
--

CREATE TABLE `add_to_dictionary` (
  `Propose_Word` varchar(50) NOT NULL,
  `Propose_Translation` varchar(50) NOT NULL,
  `Translation` varchar(50) NOT NULL,
  `Translation_Language` varchar(50) NOT NULL,
  `Descriptions` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_to_dictionary`
--

INSERT INTO `add_to_dictionary` (`Propose_Word`, `Propose_Translation`, `Translation`, `Translation_Language`, `Descriptions`) VALUES
('Magandang umaga', 'Tagalog', 'Maayong buntag', 'Bisaya', 'Pagbati sa umaga'),
('Mahal kita', 'Tagalog', 'Gihigugma tika', 'Bisaya', ''),
('dadasdasd', 'tag', 'dasdsadasdas', 'tag', 'dsadasdsadasdasdsad'),
('dadsadas', 'Tagalog', 'dasdsadsadas', 'Bicol', 'sdadadasd asd sadsa dsa sad sadsa '),
('Hindi', 'Tagalog', 'Dili', 'Cebuano', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Fullname` varchar(50) NOT NULL,
  `Email` text NOT NULL,
  `Concern` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Fullname`, `Email`, `Concern`) VALUES
('Arbel', 'balandoarbel@gmail.c', 'dasdasfasdasdsadasdsadsadsa'),
('Rose', 'rose@gmail.com', 'asdasdassadsadsada'),
('Arbelasdadad', 'asdasdsadsa', 'sadasdsadsadsadsa'),
('dasda', 'sadasdas', 'das das dsad sad asd sad sad sa dsa da'),
('Remark Maagma', 'maagmaremark@gmail.com', 'The system is not responsive');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `recent` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`recent`) VALUES
('mabait'),
('isa'),
('isa'),
('mabait'),
('isa'),
('isa'),
('isa'),
('isa'),
('Magandang umaga'),
('Magandang umaga'),
('Hindi ko alam'),
('di ko alam'),
('isa'),
('Gwapo'),
('Magandang umaga'),
('Hindi'),
('Kumusta'),
('Hindi ko alam'),
('Kasunduan'),
('Nakabili'),
('Di ko alam'),
('Magandang umaga'),
('Hindi'),
('Magandang gabi'),
('Magandang gabi'),
('Magandang gabi'),
('Hindi ko alam'),
('Isa'),
('Ako'),
('Isa'),
(''),
('Magandang umaga'),
('Isa'),
('Isa'),
('Ako'),
('Ako'),
('Ako'),
('Ako'),
('Isa'),
('isa'),
('Ako'),
('Ako'),
('magandang umaga'),
('Ako'),
('Ako'),
('Ako'),
('Ako'),
('Ako'),
('Ako'),
('Ako'),
('Ako'),
('Ako'),
('Isa'),
('Ako'),
('Ako'),
('Magandang umaga'),
('Ako'),
('Ako'),
('Salamat kaayo'),
('Maraming salamat'),
('Maraming salamat'),
('isa'),
('opo'),
('mabait'),
('Masaya'),
('Masaya'),
('Masaya'),
('Isa'),
('Maganda'),
('isa'),
('Maganda'),
('Kain na tayo'),
('Kain tayo'),
('isaa'),
('ano pangalan mo '),
('ano pangalan mo '),
('gwapo'),
('maganda'),
(''),
(' heelo'),
('hello'),
('magandang umaga'),
('magandang umaga'),
('magandang umaga'),
('magandang umaga'),
('magandang umaga'),
('magandang umaga'),
('magandang umaga'),
('adas'),
('asdas'),
('gwapa'),
('gwapa'),
('gwapa'),
('gwapa'),
('gwapa'),
('gwapa'),
('gwapa'),
('gwapa'),
('gwapa'),
('gwapa');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `acc_id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `acc_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`acc_id`, `Username`, `Password`, `acc_type`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'username1', 'username1', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leaderboard`
--

CREATE TABLE `tbl_leaderboard` (
  `leaderboard` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `score` varchar(100) DEFAULT NULL,
  `date_play` date NOT NULL,
  `category` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_leaderboard`
--

INSERT INTO `tbl_leaderboard` (`leaderboard`, `username`, `score`, `date_play`, `category`) VALUES
(28, 'user2', '10', '2024-11-05', 'Tagalog'),
(29, 'userlast', '28', '2024-11-05', 'Tagalog'),
(30, 'matass', '32', '2024-11-05', 'Tagalog'),
(31, 'mababa sa mataas', '14', '2024-11-05', 'Tagalog'),
(32, 'tama na', '18', '2024-11-05', 'Tagalog'),
(33, '90jjw', '28', '2024-11-05', 'Tagalog'),
(34, 'userbikol', '10', '2024-11-05', 'Bikol'),
(35, 'rose', '36', '2024-11-05', 'Tagalog'),
(36, 'hello world', '2', '2024-11-05', 'Tagalog'),
(37, 'helo', '26', '2024-11-05', 'Tagalog'),
(38, 'mark', '14', '2024-11-05', 'Tagalog');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE `tbl_question` (
  `question_id` int(11) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Correct_answer` varchar(100) NOT NULL,
  `Wrong_Answer1` varchar(100) NOT NULL,
  `Wrong_Answer2` varchar(100) NOT NULL,
  `Wrong_Answer3` varchar(100) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `question_level` varchar(100) NOT NULL,
  `question_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`question_id`, `Question`, `Correct_answer`, `Wrong_Answer1`, `Wrong_Answer2`, `Wrong_Answer3`, `category`, `question_level`, `question_image`) VALUES
(15, 'sino ang  taong ito', 'Jose Protacio Rizal Mercado y Alonso Realonda', 'mama mo', 'papa mo', 'di ko alam', 'tagalog', 'hard', 'question_images/promoting.png'),
(16, 'anong hayop ang matapang ', 'lion', 'ahas', 'kambing', 'tupa', 'tagalog', 'Easy', 'question_images/desktop-wallpaper-real-dr-jose-rizal-jose-rizal.jpg'),
(17, 'sino ang tama?', 'babae', 'lalaki ', 'wala', 'di ko ala', 'tagalog', 'Easy', 'question_images/desktop-wallpaper-real-dr-jose-rizal-jose-rizal.jpg'),
(18, 'who is this?', 'tama', 'mali', 'mali', 'mali', 'tagalog', 'Easy', 'question_images/desktop-wallpaper-real-dr-jose-rizal-jose-rizal.jpg'),
(19, 'Easy', 'easy tama yes', 'easy mali', 'easy mali', 'easy mali', 'tagalog', 'Easy', 'question_images/desktop-wallpaper-real-dr-jose-rizal-jose-rizal.jpg'),
(20, 'ano panglan ng bayani ng pilipinas?', 'Jose Protacio Rizal Mercado y Alonso Realonda', 'many qac', 'mali', 'wala sa pilian', 'tagalog', 'Medium', ''),
(21, 'mama mo', 'mama mo', 'ako', 'ikaw', 'mali', 'tagalog', 'Medium', ''),
(22, 'papa mo', 'tama ito', 'mali ito', 'mali ito', 'mali ito', 'tagalog', 'Medium', ''),
(23, 'ako ikaw ano sunod', 'tayo', 'wala', 'walang mali', 'mundo', 'tagalog', 'Medium', ''),
(24, 'sino ang unang tao sa mundo', 'adan', 'eva ', 'alien', 'ako', 'tagalog', 'Hard', ''),
(26, 'sino ang taong ito', 'Jose Protacio Rizal Mercado y Alonso Realonda', 'rizal ', 'bonifacio', 'ako', 'Cebuano', 'easy', 'question_images/desktop-wallpaper-real-dr-jose-rizal-jose-rizal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `translation`
--

CREATE TABLE `translation` (
  `Word` varchar(150) NOT NULL,
  `Language1` varchar(20) NOT NULL,
  `Translated` varchar(150) NOT NULL,
  `Language2` varchar(20) NOT NULL,
  `Descriptions` varchar(150) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `translation`
--

INSERT INTO `translation` (`Word`, `Language1`, `Translated`, `Language2`, `Descriptions`, `Status`) VALUES
('Gwapo', 'Tagalog', 'Gwapo', 'Hiligaynon', '', 'Accepted'),
('Maganda', 'Tagalog', 'Gwapa', 'Hiligaynon', '', 'Accepted'),
('Kasunduan', 'Tagalog', 'Kasugtanan', 'Hiligaynon', '', 'Accepted'),
('Ako', 'Tagalog', 'Aku', 'Hiligaynon', '', 'Accepted'),
('Nakabili', 'Tagalog', 'Nakabakal', 'Hiligaynon', '', 'Accepted'),
('Isa', 'Tagalog', 'Usa', 'Cebuano', 'One\r\nunang bilang ng numero', 'Accepted'),
('Bukas', 'Tagalog', 'Ugma', 'Cebuano', '', 'Accepted'),
('Magandang umaga', 'Tagalog', 'Maayong buntag', 'Cebuano', '', 'Accepted'),
('Ngayon', 'Tagalog', 'Karon', 'Cebuano', '', 'Pending'),
('Magandang tanghali', 'Tagalog', 'Maayong udto', 'Cebuano', '', 'Accepted'),
('Hindi', 'Tagalog', 'Dili', 'Cebuano', '', 'Accepted'),
('Hindi ko alam', 'Tagalog', 'ambot', 'Cebuano', 'You do not know', 'Accepted'),
('Di ko alam', 'Tagalog', 'ambot', 'Cebuano', 'You do not know', 'Accepted'),
('Maraming salamat', 'Tagalog', 'salamat kaayo', 'Cebuano', '', 'Accepted'),
('Maganda', 'Tagalog', 'Magayon', 'Bikol', 'Ginagamit sa pagpuri ng isang tao o sa isang bagay', 'Accepted'),
('Kain tayo', 'Tagalog', 'Mangaon ta', 'Cebuano', '', 'Accepted'),
('', 'Tagalog', '', 'Tagalog', '', 'Accepted'),
('maganda', 'Tagalog', 'gwapa\r\n', 'Cebuano', '', 'Accepted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `acc_id` (`acc_id`);

--
-- Indexes for table `tbl_leaderboard`
--
ALTER TABLE `tbl_leaderboard`
  ADD PRIMARY KEY (`leaderboard`);

--
-- Indexes for table `tbl_question`
--
ALTER TABLE `tbl_question`
  ADD PRIMARY KEY (`question_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_leaderboard`
--
ALTER TABLE `tbl_leaderboard`
  MODIFY `leaderboard` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_question`
--
ALTER TABLE `tbl_question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
