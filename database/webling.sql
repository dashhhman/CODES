-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2024 at 06:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `accepted_add_to_dictionary`
--

CREATE TABLE `accepted_add_to_dictionary` (
  `id` int(11) NOT NULL,
  `proposed_translation_language` varchar(255) NOT NULL,
  `target_translation_language` varchar(255) NOT NULL,
  `proposed_word` varchar(255) NOT NULL,
  `translated_word` varchar(255) NOT NULL,
  `accepted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accepted_add_to_dictionary`
--

INSERT INTO `accepted_add_to_dictionary` (`id`, `proposed_translation_language`, `target_translation_language`, `proposed_word`, `translated_word`, `accepted_at`) VALUES
(1, 'Tagalog', '', '', 'asdasdsa', '2024-11-19 11:59:54'),
(2, 'Tagalog', '', '', 'KA GWAPA NIMO', '2024-11-19 12:04:29'),
(3, 'Tagalog', '', '', 'sadas', '2024-11-19 12:16:48'),
(4, 'Tagalog', '', '', 'sadasd', '2024-11-19 12:18:00'),
(5, 'Tagalog', '', '', 'sadasd', '2024-11-19 12:20:23'),
(6, 'Tagalog', '', '', 'asdasd', '2024-11-19 12:32:55'),
(7, 'Tagalog', '', '', 'gwapaa', '2024-11-19 12:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `accepted_feedback`
--

CREATE TABLE `accepted_feedback` (
  `id` int(11) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Concern` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accepted_feedback`
--

INSERT INTO `accepted_feedback` (`id`, `Fullname`, `Email`, `Concern`) VALUES
(1, 'RD,', '', 'RDM');

-- --------------------------------------------------------

--
-- Table structure for table `add_to_dictionary`
--

CREATE TABLE `add_to_dictionary` (
  `id` int(11) NOT NULL,
  `proposed_translation_language` varchar(50) DEFAULT NULL,
  `target_translation_language` varchar(50) DEFAULT NULL,
  `proposed_word` text DEFAULT NULL,
  `translated_word` text DEFAULT NULL,
  `date_added` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deleted_add_to_dictionary`
--

CREATE TABLE `deleted_add_to_dictionary` (
  `id` int(11) NOT NULL,
  `proposed_translation_language` varchar(255) NOT NULL,
  `target_translation_language` varchar(255) NOT NULL,
  `proposed_word` varchar(255) NOT NULL,
  `translated_word` varchar(255) NOT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deleted_add_to_dictionary`
--

INSERT INTO `deleted_add_to_dictionary` (`id`, `proposed_translation_language`, `target_translation_language`, `proposed_word`, `translated_word`, `deleted_at`) VALUES
(1, 'Tagalog', '', '', 'bayot', '2024-11-19 12:07:50');

-- --------------------------------------------------------

--
-- Table structure for table `deleted_feedback`
--

CREATE TABLE `deleted_feedback` (
  `id` int(11) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Concern` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deleted_feedback`
--

INSERT INTO `deleted_feedback` (`id`, `Fullname`, `Email`, `Concern`) VALUES
(1, 'asd', '', 'asdlas[pd'),
(2, 'sadasd', '', 'asdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `Fullname` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Concern` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `Fullname`, `Email`, `Concern`) VALUES
(52, '', '', ''),
(53, '', '', ''),
(54, '', '', ''),
(55, '', '', ''),
(56, '', '', ''),
(57, '', '', ''),
(58, '', '', ''),
(59, '', '', ''),
(60, '', '', ''),
(61, '', '', ''),
(62, '', '', ''),
(63, 'remark maagma', 'mark.duran@gmail.com', 'okay lang naman po ako');

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
(34, 'userbikol', '10', '2024-11-05', 'Bikol'),
(39, 'Remark2002', '2', '2024-11-14', 'Iloko'),
(40, 'Remark2002', '0', '2024-11-14', 'Iloko'),
(41, 'Remark2002', '0', '2024-11-14', 'Iloko'),
(42, 'ARVIE2002', '0', '2024-11-14', 'Iloko'),
(43, 'Remark2002', '2', '2024-11-14', 'Iloko'),
(44, 'Remark2002', '0', '2024-11-14', 'Iloko'),
(45, 'Remark2002', '0', '2024-11-14', 'Iloko'),
(46, 'Remark2002', '0', '2024-11-14', 'Iloko'),
(47, 'sadasdas', '0', '2024-11-14', 'Iloko'),
(48, 'Remark2002', '0', '2024-11-14', 'Iloko'),
(49, 'remark2002', '2', '2024-11-14', 'Iloko'),
(50, 'remark2002', '0', '2024-11-14', 'Iloko'),
(51, 'ARVIE2002', '0', '2024-11-14', 'Iloko'),
(52, 'remark2002', '0', '2024-11-14', 'Iloko'),
(53, 'sadasdas', '0', '2024-11-15', 'Iloko'),
(54, 'Remark2002', '2', '2024-11-15', 'Iloko'),
(55, 'sadasdasasd', '0', '2024-11-16', 'Iloko'),
(56, 'maganda', '0', '2024-11-17', 'Iloko'),
(57, 'asdas', '0', '2024-11-17', 'Iloko'),
(58, 'asd', '2', '2024-11-17', 'Iloko'),
(59, 'MARK.DURAN235@GMAIL.COM', '2', '2024-11-17', 'Iloko'),
(60, 'MARK.DURAN235@GMAIL.COM', '2', '2024-11-17', 'Iloko'),
(61, 'asdsadas', '2', '2024-11-17', 'Iloko'),
(62, 'Jaina', '10', '2024-11-18', 'Iloko'),
(63, 'Jaina', '14', '2024-11-18', 'Surigaonon'),
(64, 'Jaina', '22', '2024-11-18', 'Aklanon'),
(65, 'Remark2002', '4', '2024-11-18', 'Kinaray-a'),
(66, '123', '0', '2024-11-18', 'Iloko'),
(67, 'sadasdas', '20', '2024-11-18', 'Iloko'),
(68, 'rdm', '10', '2024-11-18', 'Iloko'),
(69, 'remark2002', '32', '2024-11-19', 'Ivatan'),
(70, 'ASD', '20', '2024-11-19', 'Kapampangan'),
(71, 'RDM', '12', '2024-11-19', 'Kapampangan'),
(72, 'RDM', '20', '2024-11-19', 'Cebuano'),
(73, 'Remark2002', '16', '2024-11-26', 'Surigaonon'),
(74, 'mark', '0', '2024-11-26', 'Iloko'),
(75, 'q', '8', '2024-12-07', 'Bikol'),
(76, 'asd', '0', '2024-12-07', 'Kapampangan'),
(77, 'asda', '0', '2024-12-07', 'Iloko'),
(78, 'mark', '0', '2024-12-07', 'Iloko'),
(79, 'asdsadas', '0', '2024-12-07', 'Chavacano'),
(80, 'asdas', '0', '2024-12-07', 'Iloko'),
(81, 'asdas', '0', '2024-12-07', 'Iloko');

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
  `question_image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`question_id`, `Question`, `Correct_answer`, `Wrong_Answer1`, `Wrong_Answer2`, `Wrong_Answer3`, `category`, `question_level`, `question_image`) VALUES
(36, 'Ilang katao ang gumagamit ng salitang Iloko? ', '7.7 million (9.31%) ', '7 million (8.38%)', '21. 3 million (25.55%)', '2.5 million (2.99%)', 'Iloko', 'Hard', 0),
(38, 'Ano sa Surigaonon na salitang ang ‘Magandang umaga!’?', 'Maayong buntag! ', 'Assala mu alaikum!', 'Maong ya kabuasan!', 'Maayong buntag! ', 'Surigaonon', 'Easy', 0),
(39, 'Ano sa Surigaonon na salitang ang ‘Mahal kita.’?', 'Ginahigugma tika. ', 'Anlabyon cata.', 'Gihigugma tika.', 'Kaluguran daka.', 'Surigaonon', 'Easy', 0),
(40, 'Ano sa Surigaonon na salitang ang ‘Hindi ko alam.’?', 'Dili ko kabalo.', 'Saan ko nga ammo. ', 'Diri ako maaram.', 'Diri ako maaram.', 'Surigaonon', 'Easy', 0),
(41, 'Sa Tagalog: Kumain na ako., ano naman sa Surigaonon ito :________', 'Nakaon na ako. ', 'Angan ak la.', 'Nanganak metten.', 'Nagkaon na ako.', 'Surigaonon', 'Easy', 0),
(42, 'Ano ang tawag sa \'IBON\' sa surigaonon?', 'Tamsi', 'Tamsi', 'Billit', 'Manok', 'Surigaonon', 'Medium', 0),
(43, 'Ano ang tawag sa \'Guro\' sa surigaonon?', 'Maestra ', 'Maistro', 'Magturutdo', 'Maistra', 'Surigaonon', 'Medium', 0),
(44, 'Ano ang tawag sa numero \'Sampu\' sa surigaonon?', 'Sampu ', 'Apulu', 'Sapolo', 'Sangapulo ', 'Surigaonon', 'Medium', 0),
(45, 'Ano/ Ano-anong lalawigan ang gumagamit ng wikang Surigaonon?', 'Lungsod Surigao, Cantilan, Mainit, Guigaquit, Siargao sa Surigao del Sur ', 'Abra, Benguet, Cagayan, Pangasinan, Quirino, Isabela, Ifugao', 'Apayao, Kalinga, Mt. Povince, at Nueva Vizcaya ', 'Leyte, Eastern Samar, at Nueva Vizcaya', 'Surigaonon', 'Hard', 0),
(46, 'Ilang katao ang gumagamit ng salitang Surigaonon? ', '1 million ', '1.1 million', '5.5 million', '5 million', 'Surigaonon', 'Hard', 0),
(47, 'Ano ang ibig sabihin nito “ANG PILIPINAS TUNAY NGA NA USWAGON NGA NASUD.”', 'ANG PILIPINAS AY TUNAY NA MAYAMAN NA BANSA.  ', 'SA PILIPINAS AY MARAMING PASYAL DITO.', 'BANSANG MAITUTURING NA PUNTAHAN.', 'MARAMING IBA’T IBANG LUGAR DITO', 'Surigaonon', 'Hard', 0),
(48, 'Ano sa Kinaray-a na salitang ang ‘Magandang umaga!’?', 'Maayong aga! ', 'Naimbag a bigat!', 'Maupay nga aga!', 'Maayong buntag!', 'Kinaray-a', 'Easy', 0),
(49, 'Ano sa Kinaray-a na salitang ang ‘Mahal kita.’?', 'Palangga ko ikaw! ', 'Hinigugma ko ikaw!', 'Gihigugma tika.', 'Kaluguran daka.', 'Kinaray-a', 'Easy', 0),
(50, 'Ano sa Kinaray-a na salitang ang ‘Hindi ko alam.’?', 'Indi ko kamaan. ', 'Agko amta.', 'Diri ako maaram.', 'Wala ko kabalo', 'Kinaray-a', 'Easy', 0),
(51, 'Sa Tagalog: Kumain na ako., ano naman sa Kinaray-a ito :________', 'Nakaon na ako. ', 'Nagkaon na ako.', 'Nagkaon na ako.', 'Kaon na ako.', 'Kinaray-a', 'Easy', 0),
(52, 'Ano ang tawag sa \'IBON\' sa kinaray-a?', 'Pispis', 'Paru-paro', 'Tamsi', 'Kalapati', 'Kinaray-a', 'Medium', 0),
(53, 'Ano ang tawag sa \'Guro\' sa kinaray-a?', 'Maestro', 'Magturutdo', 'Maistra', 'Titser', 'Kinaray-a', 'Medium', 0),
(54, 'Ano ang tawag sa \'Guro\' sa kinaray-a?', 'Maestro', 'Magturutdo', 'Maistra', 'Titser', 'Kinaray-a', 'Medium', 0),
(55, 'Ano ang tawag sa numero \'Sampu\' sa kinaray-a?', 'Napulo', 'Mapulo', 'sangapulo ', 'sampo', 'Kinaray-a', 'Medium', 0),
(56, 'Ano-anong lalawigan ang gumagamit ng wikang Kinaray-a ?', 'Antique', 'Cagayan', 'Nueva Vizcaya', 'Manila', 'Kinaray-a', 'Medium', 0),
(57, 'Ano ang ibig sabihin nito “ANG PILIPINAS GARA NA MANGGADAN NGA BANWA.”', 'LIKAS NA MAYAMAN SA NATURAL NA YAMAN.', 'ANG PILIPINAS AY TUNAY NA MAYAMAN NA BANSA.     ', 'SA PILIPINAS AY MARAMING PASYAL DITO.', 'BANSANG MAITUTURING NA PUNTAHAN.', 'Kinaray-a', 'Hard', 0),
(58, 'Ano sa Aklanon na salitang ang ‘Magandang umaga!’?', 'Maayad nga agahon! ', 'Mayap a umaga!', 'Assala mu alaikum!', 'Maupay nga aga!', 'Aklanon', 'Easy', 0),
(59, 'Ano sa Aklanon na salitang ang ‘Mahal kita.’?', 'Palangga ta ikaw. ', 'Inaro ta ka.', 'Hinigugma ko ikaw.', 'Kaluguran daka.', 'Aklanon', 'Easy', 0),
(60, 'Ano sa Aklanon na salitang ang ‘Hindi ko alam.’?', 'Indi ko kabalo. ', 'Chapatak ku aya.', 'Diri ako maaram.', 'Wala ko kabalo.', 'Aklanon', 'Easy', 0),
(61, 'Sa Tagalog: Kumain na ako., ano naman sa Aklanon ito :________', 'Nakaon eon ako.  ', 'Nikaon ko', 'Kaon na ako.', 'Nakaon na ak.', 'Aklanon', 'Easy', 0),
(62, 'Ano ang tawag sa \'IBON\' sa aklanon?', 'Pispis ', 'Langgam', 'Tamsi', 'Manuk-manuk', 'Aklanon', 'Medium', 0),
(63, 'Ano ang tawag sa \'GURO\' sa aklanon?', 'Maestro ', 'Guro', 'Maistra', 'Titser', 'Aklanon', 'Medium', 0),
(64, 'Ano ang tawag sa numero \'Sampu\' sa aklanon?', 'Pulo', 'Mapulo', 'Sampo', 'Napulo ', 'Aklanon', 'Medium', 0),
(66, 'Ilang katao ang gumagamit ng salitang Aklanon? ', '560,000  ', '200,000', '1 million ', '879,590', 'Aklanon', 'Hard', 0),
(67, 'Ano/Ano-anong lalawigan ang gumagamit ng wikang Aklanon ?', 'Aklan, El Nido, Narra, Quezon, Roxas, at Sofronio Española sa Palawan', 'Las Pinas City, Cavite City, Tagaytay', 'Davao del Norte, Davao del Sul, Davao City', 'Batanes, Batangas, Zambales', 'Aklanon', 'Hard', 0),
(68, 'Ano ang ibig sabihin nito “ANG PILIPINAS GARA GID MANGGADAN NGA BANSA.”', 'ANG PILIPINAS AY TUNAY NA MAYAMAN NA BANSA.     ', 'LIKAS NA MAYAMAN SA NATURAL NA BAGAY ITO.', 'PILIPINAS AY MARAMING DESTINASYON.', 'BANSANG MAITUTURING NA KAAKIT-AKIT.', 'Aklanon', 'Hard', 0),
(69, '1.Ano sa Iloko na salitang ang ‘Magandang umaga!’?', 'Nanganak metten. ', 'Nagkaon na ako.', 'Diri ako maaram.', 'Maupay nga aga!', 'Iloko', 'Easy', 0),
(70, 'Ano sa Maranao na salitang ang ‘Magandang umaga!’?', 'Mapiya Kapipita! ', 'Assalamu-alaykum!', 'Maabig a Buklah!', 'Assala mu alaikum!', 'Maranao', 'Easy', 0),
(71, 'Ano sa Maranao na salitang ang ‘Mahal kita.’?', 'Kapia ka saken.    ', 'Mabaya kaymu.', 'Gihigugma tika.', 'Inaro ta ka.', 'tagalog', 'Easy', 0),
(72, 'Ano sa Yakan na salitang ang ‘Magandang umaga!’?', 'Kasanyangan si ellew bi', ' Mapia nga vahay! 	', 'Mapia mapita! ', 'Maabig a Buklah!', 'Yakan', 'Easy', 0),
(73, 'Ano sa Yakan na salitang ang ‘Hindi ko alam.’?', 'Endehé ku kunyo', 'Di aken katawan', 'Dii ku pegkebpengan. ', '   Di’ ako hibalu ', 'Yakan', 'Easy', 0),
(74, 'Ano sa Yakan na salitang ang ‘Mahal kita.’?', 'Piyagad taka', 'Piya kita.', 'Hinigugma ko ikaw ', 'Kaluguran daka.   ', 'Yakan', 'Easy', 0),
(75, 'ano ang IBON sa Yakan?', 'Baksil ', 'Tamsi ', 'lambitung ', 'Ambi     ', 'Yakan', 'Medium', 0),
(76, 'ano ang GURO sa Yakan?', 'Pagtutudju', 'Mamumuno', 'Mangngandila ', 'Maestra ', 'Yakan', 'Medium', 0),
(77, 'ano naman ang 10 sa yakan?', 'Sampuh ', 'Pulo   ', 'Sampulu', 'Napulu     ', 'Yakan', 'Medium', 0),
(78, '8Ano/ Ano-anong lalawigan ang gumagamit ng wikang Yakan?', 'Basilan ', ' Leyte', 'Sulu  ', 'Abra  ', 'Yakan', 'Hard', 0),
(79, 'Ilang katao ang gumagamit ng salitang Yakan ? ', '110,000 ', '312,00', '100,200', '200,000', 'Yakan', 'Hard', 0),
(80, 'Ano ang ibig sabihin nito  “IN PILIPINAS BUNGA MAGTUWID NA DAMU-DAMU IN KAWMAN NA BANGSA.”', 'ANG PILIPINAS AY TUNAY NA MAYAMAN NA BANSA.     ', 'LIKAS NA MAYAMAN SA KALIKASAN ANG AKING BANSA.', 'PILIPINAS AY KAAYA-AYA PUNTAHAN NA BANSA.', 'TUNAY NA MAYAMAN ANG BANSA KO.', 'Yakan', 'Hard', 0),
(81, 'Ano sa Pangasinense na salitang ang ‘Magandang umaga!’?', 'Maong ya kabuasan! ', 'Maupay nga aga!', 'mayap a umaga! ', 'Maayong aga!  ', 'Pangasinense', 'Easy', 0),
(82, 'Ano sa Pangasinense na salitang ang ‘Mahal kita.’?', 'Inaro ta ka', 'Namumutan ta ka.', 'Gihigugma tika.', 'Kaluguran daka.   ', 'Pangasinense', 'Easy', 0),
(83, 'Ano sa Pangasinense na salitang ang ‘Hindi ko alam.’?', 'Agko amta. ', 'Andi ko amta.   ', 'Dai ko aram.', 'Eku balu. ', 'Pangasinense', 'Easy', 0),
(84, 'Sa Tagalog: Kumain na ako., ano naman sa Kapampangan ito :________', 'Angan ak la', 'Kuman na ako. ', 'Nakaon na ako.', 'mengan naku. ', 'Pangasinense', 'Easy', 0),
(85, 'Ano ang IBON sa Pangaisinense?', 'Manok   ', 'Ambi      ', 'Tamsi', 'Bayong  ', 'Pangasinense', 'Medium', 0),
(86, 'Ano ang GURO sa Pangasinense?', 'Managbangat ', 'Mestro  ', 'Mamumuno', 'mestra   ', 'Pangasinense', 'hard', 0),
(87, 'Ano ang 10 sa Pangasinense?', 'samplora  ', 'Apulu ', 'Sampulu   ', 'Sapolo', 'Pangasinense', 'Medium', 0),
(88, 'Ano/ Ano-anong lalawigan ang gumagamit ng wikang Pangasinense?', 'Abra, Benguet, Cagayan, Pangasinan ', 'Ifugao, Apayao, Kalinga', 'Leyte, Eastern Samar, at Bohol', 'Southern Tarlac, northeastern Bataan, Bulacan, Nueva Ecija and Zambales. ', 'Pangasinense', 'Hard', 0),
(89, 'Ilang katao ang gumagamit ng salitang Pangasinense? ', '2.4 million ', '3.2 million ', '3 million', '1 million', 'Pangasinense', 'Hard', 0),
(90, 'Ano ang ibig sabihin nito  “TALAGAN MAYAMAN YA BANSA SO PILIPINAS.”', 'ANG PILIPINAS AY TUNAY NA MAYAMAN NA BANSA', 'TUNAY NA MAYAMAN ANG BANSA KO.', 'LIKAS NA MAYAMAN SA KALIKASAN ANG AKING BANSA.', 'PILIPINAS AY KAAYA-AYA PUNTAHAN NA BANSA.', 'Pangasinense', 'Hard', 0),
(91, 'Ano sa Kapampangan na salitang ang ‘Magandang umaga!’?', 'mayap a umaga! ', 'Maayong aga!  ', 'Maong ya kabuasan!', 'Maupay nga aga!', 'Kapampangan', 'Easy', 0),
(92, 'Ano sa Kapampangan na salitang ang ‘Mahal kita.’?', 'Kaluguran daka.    ', 'Gihigugma tika.', 'Ay-ayaten ka. ', 'Namumutan ta ka.', 'Kapampangan', 'Easy', 0),
(93, 'Ano sa Kapampangan na salitang ang ‘Hindi ko alam.’?', 'Eku balu. ', 'Dai ko aram.', 'Diri ako maaram.', 'Andi ko amta.   ', 'Kapampangan', 'Easy', 0),
(94, 'Sa Tagalog: Kumain na ako., ano naman sa Kapampangan ito :________', 'mengan naku', 'Nakaon na ako.', 'Angan ak la.', 'Kuman na ako. ', 'Kapampangan', 'Easy', 0),
(95, 'ano ang IBON sa Kapampangan?', 'ayop  ', 'Ambi      ', 'Bayong  ', 'Tamsi', 'Kapampangan', 'Medium', 0),
(96, 'Ano ang tawag sa \'Guro\' sa Kapampangan?', 'mestra  ', 'Mestro   ', 'Mamumuno ', 'Maistra', 'Kapampangan', 'Medium', 0),
(97, 'Ano ang tawag sa numero \'Sampu\' sa ?', 'Apulu ', 'Dyes ', 'Sampulu    ', 'Sapolo', 'Kapampangan', 'Medium', 0),
(98, 'Ano/ Ano-anong lalawigan ang gumagamit ng wikang Kapampangan?', 'Southern Tarlac, northeastern Bataan, Bulacan, Nueva Ecija and Zambales', 'Abra, Benguet, Cagayan, Pangasinan ', 'Ifugao, Apayao, Kalinga', 'Leyte, Eastern Samar, at Bohol', 'Kapampangan', 'Hard', 0),
(99, 'Ilang katao ang gumagamit ng salitang Kapampangan? ', '2.4 million ', '3.2 million ', '3 million', '1 million', 'Kapampangan', 'Hard', 0),
(100, 'Ano ang ibig sabihin nito “ING PILIPINAS TUNE YANG MUKALANG BANSA.”', 'ANG PILIPINAS AY TUNAY NA MAYAMAN NA BANSA.     ', ' TUNAY NA MAYAMAN ANG BANSA KO.', 'LIKAS NA MAYAMAN SA KALIKASAN ANG AKING BANSA.', 'PILIPINAS AY KAAYA-AYA PUNTAHAN NA BANSA.', 'Kapampangan', 'Hard', 0),
(101, 'Ano sa Bikol na salitang ang ‘Magandang umaga!’?', 'Marhay na aga! ', '  Maong ya kabuasan!  ', 'Maayong aga! ', 'mayap a umaga', 'Bikol', 'Easy', 0),
(102, 'Ano sa Bikol na salitang ang ‘Mahal kita.’?', 'Namumutan ta ka. ', ' Kaluguran daka.  ', 'Gihigugma tika.', '  Inaro ta ka. ', 'Bikol', 'Easy', 0),
(103, 'Ano sa Bikol na salitang ang ‘Hindi ko alam.’?', 'Dai ko aram', ' Eku balu. ', 'Andi ko amta. ', ' Agko amta. ', 'Bikol', 'Easy', 0),
(104, 'Sa Tagalog: Kumain na ako., ano naman sa Bikol ito :________', 'Nagkakan na ako. ', 'mengan naku.  ', ' Angan ak la. ', 'Nakaon na ako.', 'Bikol', 'Easy', 0),
(105, 'Ano ang tawag sa \'Guro\' sa bikol?', 'paratokdo', 'Mestro  ', 'Mamumuno ', 'Managbangat    ', 'Bikol', 'Medium', 0),
(106, 'Ano ang IBON sa Bikol?', 'Bayong ', ' Tamsi ', 'Ambi      ', 'Manok   ', 'Bikol', 'Medium', 0),
(107, 'Ano ang tawag sa numero \'Sampu\' sa bikol?', 'dyes  ', 'Apulu ', 'Sampulu    ', 'Sapolo', 'Bikol', 'Hard', 0),
(108, 'Ano/ Ano-anong lalawigan ang gumagamit ng wikang Bikol?', '    Albay, Camarines Norte, Camarines Sur, Catanduanes, Masbate, and Sorsogon ', 'Abra, Benguet, Cagayan, Pangasinan ', 'Ifugao, Apayao, Kalinga', 'Leyte, Eastern Samar, at Bohol', 'Bikol', 'Hard', 0),
(109, 'Ilang katao ang gumagamit ng salitang Bikol? ', '2.5 million ', '3.2 million ', '3 million', ' 2.4 million  ', 'Bikol', 'Hard', 0),
(110, 'Ano ang ibig sabihin nito  “AN PILIPINAS TALAGANG MAYAMAN NA BANWAAN.”', 'ANG PILIPINAS AY TUNAY NA MAYAMAN NA BANSA.     ', 'TUNAY NA MAYAMAN ANG BANSA KO.', 'LIKAS NA MAYAMAN SA KALIKASAN ANG AKING BANSA.', 'PILIPINAS AY KAAYA-AYA PUNTAHAN NA BANSA.', 'Bikol', 'Hard', 0),
(111, '1.Ano sa Cebuano na salitang ang ‘Magandang umaga!’?', 'maayong buntag! ', 'Maayong aga!   ', 'Maong ya kabuasan! ', 'Marhay na aga! ', 'Cebuano', 'Easy', 0),
(112, 'Ano sa Cebuano na salitang ang ‘Mahal kita.’?', 'Gihigugma tika', 'Kaluguran daka.     ', 'Inaro ta ka.', ' Namumutan ta ka. ', 'Cebuano', 'Easy', 0),
(113, 'Ano sa Cebuano na salitang ang ‘Hindi ko alam.’?', 'Dai ko aram', 'Andi ko amta.    ', 'Eku balu. ', 'Agko amta.  ', 'Cebuano', 'Easy', 0),
(114, 'Sa Tagalog: Kumain na ako., ano naman sa Cebuano ito :________', 'nikaon ko. ', 'mengan naku.  ', 'Nakaon na ako.', 'Nagkakan na ako. ', 'Cebuano', 'Easy', 0),
(115, 'Ano ang tawag sa \'IBON\' sa cebuano?', 'langgam', 'Ambi      ', 'Tamsi', 'Bayong  ', 'Cebuano', 'Medium', 0),
(116, 'Ano ang tawag sa \'Guro\' sa Cebuano?', 'magtutudlo ', 'paratokdo  ', 'Mamumuno ', 'Managbangat ', 'Cebuano', 'Medium', 0),
(117, 'Ano ang tawag sa numero \'Sampu\' sa cebuano?', 'napulo', 'Sampulu    ', 'Sapolo', 'Apulu ', 'Cebuano', 'Medium', 0),
(118, 'Ano/ Ano-anong lalawigan ang gumagamit ng wikang Cebuano ?', 'Cebu ', 'Ifugao  ', 'Bohol       ', 'Sorsogon ', 'Cebuano', 'Hard', 0),
(119, 'Ilang katao ang gumagamit ng salitang Cebuano ? ', '21.3 million', ' 23 million', ' 22.5 million ', '30.2 million  ', 'Cebuano', 'Hard', 0),
(120, 'Ano ang ibig sabihin nito  “ANG PILIPINAS USA KA TINUOD NGA DATO NGA NASOD.”', 'ANG PILIPINAS AY TUNAY NA MAYAMAN NA BANSA.     ', 'LIKAS NA MAYAMAN SA KALIKASAN ANG AKING BANSA.', 'TUNAY NA MAYAMAN ANG BANSA KO.', 'PILIPINAS AY KAAYA-AYA PUNTAHAN NA BANSA', 'Cebuano', 'Hard', 0),
(121, 'Ano sa Hiligaynon na salitang ang ‘Magandang umaga!’?', 'Mayad nga aga', 'maayong buntag! ', 'Maayong aga!', '   Maong ya kabuasan!  ', 'Hiligaynon', 'Easy', 0),
(122, 'Ano sa Hiligaynon na salitang ang ‘Mahal kita.’?', 'Palangga ta ikaw', 'Kaluguran daka.   ', 'Inaro ta ka. ', 'Namumutan ta ka. ', 'Hiligaynon', 'Easy', 0),
(123, 'Ano sa Hiligaynon na salitang ang ‘Hindi ko alam.’?', 'Wala ako kabalo.  ', 'Dai ko aram.  ', 'Andi ko amta.   ', 'Eku balu. ', 'Hiligaynon', 'Easy', 0),
(124, 'Sa Tagalog: Kumain na ako., ano naman sa Hiligaynon ito :________', 'Nagkaon na ako.', 'Nakaeon na ako.', 'nikaon ko. ', 'Nagkakan na ako. ', 'Hiligaynon', 'Easy', 0),
(125, 'ano ang IBON sa Hiligaynon?', 'pispi', 'tamsi', 'Ambi      ', 'Bayong ', 'Hiligaynon', 'Medium', 0),
(126, 'Ano ang tawag sa \'Guro\' sa Hiligaynon?', 'maistra', 'magtutudlo  ', 'Mamumuno', 'Managbangat    ', 'Hiligaynon', 'Medium', 0),
(127, 'Ano ang tawag sa numero \'Sampu\' sa hiligaynon?', 'Pulo', 'napulo  ', ' Sapolo', 'Sampulu   ', 'Hiligaynon', 'Medium', 0),
(128, 'Ano/Ano-anong lalawigan ang gumagamit ng wikang Hiligaynon ?', 'Iloilo, Capiz, and Guimaras  ', 'Abra, Benguet, Cagayan, Pangasinan ', 'Ifugao, Apayao, Kalinga', 'Leyte, Eastern Samar, at Bohol', 'Hiligaynon', 'Medium', 0),
(129, 'Ilang katao ang gumagamit ng salitang hiligaynon? ', '7 million ', '2 million  ', '5.3 million ', '6.5 million ', 'Hiligaynon', 'Medium', 0),
(130, 'Ano ang ibig sabihin nito  “ANG PILIPINAS TUOD NGA MANGGARANON NGA PUNGSOD.”', 'ANG PILIPINAS AY TUNAY NA MAYAMAN NA BANSA.     ', 'PILIPINAS AY KAAYA-AYA PUNTAHAN NA BANSA', ' LIKAS NA MAYAMAN SA KALIKASAN ANG AKING BANSA.', 'TUNAY NA MAYAMAN ANG BANSA KO.', 'Hiligaynon', 'Hard', 0),
(131, 'Ano sa Waray na salitang ang ‘Magandang umaga!’?', 'Maupay nga aga! ', 'Maayong aga!     ', 'Maong ya kabuasan!', 'Maayong buntag! ', 'Waray', 'Easy', 0),
(132, 'Ano sa Waray na salitang ang ‘Mahal kita.’?', 'Hinigugma ko ikaw ', 'Palangga ta ikaw.  ', 'Kaluguran daka.  ', 'Namumutan ta ka. ', 'Waray', 'Easy', 0),
(133, 'Ano sa Waray na salitang ang ‘Hindi ko alam.’?', 'Diri ako maaram', 'Wala ako kabalo', 'Dai ko aram.  ', 'Andi ko amta.', 'Waray', 'Easy', 0),
(134, 'Sa Tagalog: Kumain na ako., ano naman sa Waray ito :________', 'Nakaon na ako. ', 'Nagkaon na ako. ', 'nikaon ko.         ', ' Nagkakan na ako. ', 'Waray', 'Easy', 0),
(135, 'Ano tawag sa \'IBON\' sa Waray?', 'Tamsi ', 'Ambi    ', '  Bayong ', 'pispis ', 'Waray', 'Medium', 0),
(136, 'Ano ang tawag sa \'Guro\' sa Waray?', 'magturutdo ', 'magtutudlo  ', 'Mamumuno ', 'Managbangat ', 'Waray', 'Medium', 0),
(137, 'Ano ang tawag sa numero \'Sampu\' sa Waray?', 'napulo ', 'Pulo', 'Sampulu   ', ' Sapolo', 'Waray', 'Medium', 0),
(138, 'Ano/ Ano-anong lalawigan ang gumagamit ng wikang Waray?', 'Leyte, Eastern Samar, at Bohol', 'Ifugao, Apayao, Kalinga', 'Abra, Benguet, Cagayan, Pangasinan ', 'Iloilo, Capiz, and Guimaras  ', 'Waray', 'Hard', 0),
(139, 'Ilang katao ang gumagamit ng salitang Waray? ', '3.1 million ', '2 million ', '5 million ', ' 4.5 million ', 'Waray', 'Hard', 0),
(140, ' Ano ang ibig sabihin nito  “TINUOD NGA RIKO NGA NASUD AN PILIPINAS.”', 'ANG PILIPINAS AY TUNAY NA MAYAMAN NA BANSA.    ', 'TUNAY NA MAYAMAN ANG BANSA KO.', 'LIKAS NA MAYAMAN SA KALIKASAN ANG AKING BANSA.', 'PILIPINAS AY KAAYA-AYA PUNTAHAN NA BANSA.', 'Waray', 'Hard', 0),
(141, 'Ano sa Tausug na salitang ang ‘Magandang umaga!’?', 'Marayaw na buntag! ', 'Maupay nga aga', 'maayong buntag! ', 'Maong ya kabuasan! ', 'Tausug', 'Easy', 0),
(142, 'Ano sa Tausug na salitang ang ‘Mahal kita.’?', 'Piya kita', 'Hinigugma ko ikaw ', 'Namumutan ta ka. ', 'Kaluguran daka.   ', 'Tausug', 'Easy', 0),
(143, 'Ano sa Tausug na salitang ang ‘Hindi ko alam.’?', 'Di’ ako hibalu ', '    Indi ko kamaan.  ', '  Di aken katawan.   ', '   Chapatak ku aya.', 'Tausug', 'Easy', 0),
(144, 'Sa Tagalog: Kumain na ako., ano naman sa Tausug ito :________', 'Kinakaun na aku. ', 'nikaon ko.                 ', ' Nagkakan na ako. ', 'Nakaon na ako.', 'Tausug', 'Easy', 0),
(145, 'ano ang IBON sa Tausug?', 'lambitung', 'Ambi     ', 'Tamsi  ', 'langgam', 'Tausug', 'Medium', 0),
(146, 'Ano ang tawag sa \'Guro\' sa Tausug?', 'Maestra', 'Maestro     ', 'Mamumuno', 'Maistra', 'Tausug', 'Medium', 0),
(147, 'Ano ang tawag sa numero \'Sampu\' sa Tausug?', 'Hangpul', 'Sampulu    ', 'Sapolo', 'Pulo  ', 'Tausug', 'Medium', 0),
(148, 'Ano/ Ano-anong lalawigan ang gumagamit ng wikang Tausug?', 'sulu', 'Abra  ', ' Leyte', 'Ifugao ', 'Tausug', 'Hard', 0),
(149, 'Ilang katao ang gumagamit ng salitang Tausug ? ', '1.8 million ', '3.1 million ', '2 million ', '1.5 million ', 'Tausug', 'Hard', 0),
(150, ' Ano ang ibig sabihin nito  “IN PAGSA PILIPINAS HA PAGKATUHUD MAHAMBUUK NA BANSA.”', 'ANG PILIPINAS AY TUNAY NA MAYAMAN NA BANSA.     ', 'TUNAY NA MAYAMAN ANG BANSA KO.', 'LIKAS NA MAYAMAN SA KALIKASAN ANG AKING BANSA.', 'PILIPINAS AY KAAYA-AYA PUNTAHAN NA BANSA.', 'Tausug', 'Hard', 0),
(151, 'Ano sa Maguindanao na salitang ang ‘Magandang umaga!’?', 'Mapia mapita! ', 'Maabig a Buklah!', 'Assalamu-alaykum!    ', 'Mapia nga vahay! 	', 'Maguindanaoan', 'Easy', 0),
(152, 'Ano sa Maguindanao na salitang ang ‘Mahal kita.’?', 'Kalinian ko seka', '  Hinigugma ko ikaw ', 'Piya kita.', ' Kaluguran daka.  ', 'Maguindanaoan', 'Easy', 0),
(153, 'Ano sa Maguindanao na salitang ang ‘Hindi ko alam.’?', '   Dii ku pegkebpengan. ', '   Di aken katawan.   ', ' Indi ko kamaan.', '   Di’ ako hibalu ', 'Maguindanaoan', 'Easy', 0),
(154, 'Sa Tagalog: Kumain na ako., ano naman sa Maguindanao ito :________', 'Kanaken so kegkan', 'Kanaken so kegkan', 'Kinakaun na aku. ', ' Nakaon na ako.', 'Maguindanaoan', 'Easy', 0),
(155, 'ano ang IBON sa Maguindanao?', 'langgam', 'Tamsi ', 'lambitung ', 'Ambi', 'Maguindanaoan', 'Medium', 0),
(156, 'Ano ang tawag sa \'Guro\' sa Maguindanao?', 'Mangngandila', 'Maestro   ', '  Mamumuno', 'Maestra ', 'Maguindanaoan', 'Medium', 0),
(157, 'Ano ang tawag sa numero \'Sampu\' sa Maguindanao?', 'Napulu', 'Pulo', 'Sampulu  ', '  Sapolo', 'Maguindanaoan', 'Medium', 0),
(159, 'Ano/ Ano-anong lalawigan ang gumagamit ng wikang Maguindanao?', 'Zamboanga at Davao--- ', 'Palawan, Pampanga and General Trias', 'Bacoor, Imus, Novaleta and Cavite City', 'Leyte and Samar', 'Maguindanaoan', 'Hard', 0),
(160, 'Ilang katao ang gumagamit ng salitang Maguindanao ? ', '365,032 ', '301,206 ', '500,656', '600,000', 'Maguindanaoan', 'Hard', 0),
(161, ' Ano ang ibig sabihin nito  “TUNAY A MANGGINA SA BANSA SO PILIPINAS.”', 'ANG PILIPINAS AY TUNAY NA MAYAMAN NA BANSA.     ', 'TUNAY NA MAYAMAN ANG BANSA KO.', 'LIKAS NA MAYAMAN SA KALIKASAN ANG AKING BANSA.', 'PILIPINAS AY KAAYA-AYA PUNTAHAN NA BANSA.', 'Maguindanaoan', 'Hard', 0),
(162, 'Ano sa Maranao na salitang ang ‘Magandang umaga!’?', 'Mapiya Kapipita! ', 'Assalamu-alaykum!', 'Maabig a Buklah!', 'Assala mu alaikum!', 'Maranao', 'Easy', 0),
(163, 'Ano sa Maranao na salitang ang ‘Mahal kita.’?', 'Kapia ka saken.    ', ' Mabaya kaymu.', 'Inaro ta ka.', ' Gihigugma tika.', 'Maranao', 'Easy', 0),
(164, 'Ano sa Maranao na salitang ang ‘Hindi ko alam.’?', 'Di aken katawan.   ', 'Agko amta. ', 'Indi ko kamaan.', 'Chapatak ku aya.', 'Maranao', 'Easy', 0),
(165, 'Sa Tagalog: Kumain na ako., ano naman sa Maranao ito :________', 'Kagiaan ako ron.   ', 'Nangan na ko.', 'Angan ak la. ', 'Nanganak metten', 'Maranao', 'Easy', 0),
(168, 'Ano ang ipinakitang bilang ng nasa litrato?', 'Sapulo', 'Napulo ', ' Sangapulo', 'Hapu', 'Maranao', 'Medium', 0),
(169, 'ano ang IBON sa Maranao?', 'Manok', 'Sarakkay   ', 'Tamsi', 'langgam', 'Maranao', 'Medium', 0),
(170, 'Ano ang tawag sa \'Guro\' sa Maranao?', 'Sapulo', 'sangapulo', 'napulo', 'Hapu', 'Maranao', 'Medium', 0),
(171, 'Ano/ Ano-anong lalawigan ang gumagamit ng wikang Maranao ?', 'Lanao del Norte, Lanao del Sur    ', 'Davao del Norte, Davao del Sur, Palawan', 'Cebu, Antipolo, Manila', 'Ifugao, Cagayan Valley, Batangas', 'Maranao', 'Hard', 0),
(172, 'Ilang katao ang gumagamit ng salitang Maranao? ', '2.1 million (2.57%)  ', '2.5 million (2.99%)   ', '3.1 million (3.71%)', '2.4 million (2.91%)', 'Maranao', 'Hard', 0),
(173, ' Ano ang ibig sabihin nito “PILIPINAS I BARANDANG MAPIYA A NASUD.”', 'ANG PILIPINAS AY TUNAY NA MAYAMAN NA BANSA.     ', 'SA BANSANG PILIPINAS ANG BANSA KO.', 'LIKAS NA MAYAMAN SA KALIKASAN ITO.', 'PILIPINAS AY KAAYA-AYA PUNTAHAN.', 'Maranao', 'Hard', 0),
(174, 'Ano sa Chavacano na salitang ang ‘Magandang umaga!’?', 'Buenas dias!   ', 'Buenos diaz! ', ' Maupay nga aga!', 'Assala mu alaikum!', 'Chavacano', 'Easy', 0),
(175, 'Ano sa Chavacano na salitang ang ‘Mahal kita.’?', 'Te quiero.         ', 'Hinigugma ko ikaw.', ' Inaro ta ka.', 'Palangga ta ikaw. ', 'Chavacano', 'Easy', 0),
(176, 'Ano sa Chavacano na salitang ang ‘Hindi ko alam.’?', 'No sabe yo.    ', 'Chapatak ku aya.', ' Indi ko kabalo ', 'Wala ko kabalo.', 'Chavacano', 'Easy', 0),
(177, 'Sa Tagalog: Kumain na ako., ano naman sa Chavacano ito :________', 'Ya comí.      ', 'Kaon na ako', 'Nikaon ko. ', 'Nakaon eon ako.   ', 'Chavacano', 'Easy', 0),
(178, 'ano ang IBON sa Chabacano?', 'Pajaro ', 'Tamsi', 'Langgam', 'pispis ', 'Chavacano', 'Medium', 0),
(179, 'ano ang GURO sa Chabacano?', 'Maestro', 'guro', 'titsier', 'masitro', 'Chavacano', 'Medium', 0),
(180, 'Ano ang tawag sa numero \'Sampu\' sa Chabacano?', 'Dies  ', 'Sampulu    ', 'mapulo', 'sampo', 'Chavacano', 'Medium', 0),
(181, 'Ano/ Ano-anong lalawigan ang gumagamit ng wikang Chavacano ?', 'Zamboanga City and Basilan Island       ', 'Davao del Norte, Davao del Sul, Davao City', 'Bacoor, Imus, Novaleta and Cavite City', 'Palawan, Pampanga and General Trias', 'Chavacano', 'Hard', 0),
(182, 'Ilang katao ang gumagamit ng salitang Chavacano? ', '1.2 million   ', '200,000', '3 million ', '879,590', 'Chavacano', 'Hard', 0),
(183, 'Ano ang ibig sabihin nito “EL FILIPINAS TA VERDADAMENTE TIENE RIQUEZA NA NACION.”', 'ANG PILIPINAS AY TUNAY NA MAYAMAN NA BANSA.   ', 'PILIPINAS AY KAAYA-AYA PUNTAHAN NA BANSA', 'BANSANG MAITUTURING NA PUNTAHAN.', 'AKO AY LUMAKI SA PILIPINAS. ', 'Chavacano', 'Hard', 0),
(184, 'Ano sa Ybanag na salitang ang ‘Magandang umaga!’?', 'Mapia nga rabii!     ', 'Mapiya Kapipita! 	 ', ' Mapia nga aggaw!   ', 'Maabig a Buklah!', 'Ybanag', 'Easy', 0),
(185, 'Ano sa Ybanag na salitang ang ‘Mahal kita.’?', 'Namumutan ta ka.   ', ' Mabaya kaymu.', 'Inaro ta ka.', ' Gihigugma tika.', 'Ybanag', 'Easy', 0),
(186, 'Ano sa Ybanag na salitang ang ‘Hindi ko alam.’?', 'Adda la ngamin.    ', '   Chapatak ku aya.', 'Indi ko kamaan', ' Di aken katawan. ', 'Ybanag', 'Easy', 0),
(187, 'Sa Tagalog: Kumain na ako., ano naman sa Ybanag ito :________', 'Nangan nakuen.   ', 'Nangan na ko.    ', 'Kagiaan ako ron.', 'Nanganak metten.', 'Chavacano', 'Easy', 0),
(188, 'ano ang IBON sa Ybanag?', 'Takay', 'Langgam', 'sakaykay', 'Tamsi', 'Ybanag', 'Medium', 0),
(189, 'Ano ang tawag sa \'Guro\' sa Ybanag?', 'Magurru', 'Mamumuno ', ' magturuk', 'Maistra Mapia', 'Ybanag', 'Medium', 0),
(190, 'Ano ang tawag sa numero \'Sampu\' sa Ybanag?', 'Sangapulu ', 'Hapu ', ' Sangapulo', 'Napulo', 'Ybanag', 'Medium', 0),
(191, 'Ano/ Ano-anong lalawigan ang gumagamit ng wikang Ybanag ?', 'lalawigan ng Isabela; Cagayan    ', 'lalawigan ng Marinduque ', 'lalawigan ng Nueva Ecija', 'lalawigan ng Southern Leyte', 'Ybanag', 'Hard', 0),
(192, 'Ilang katao ang gumagamit ng salitang Ybanag? ', '500,000      ', '879,650  ', '3.1 million', '1 million ', 'Ybanag', 'Hard', 0),
(193, 'Ano ang ibig sabihin nito “AN PILIPINAS KAY TUNAY NGA MAYAMAN NGA BANSA.”', 'ANG PILIPINAS AY TUNAY NA MAYAMAN NA BANSA.     ', ' PILIPINAS AY KAAYA-AYA PUNTAHAN', 'LIKAS NA MAYAMAN SA KALIKASAN ITO.', 'KAY GANDA NG BANSANG PILIPINAS.', 'Ybanag', 'Hard', 0),
(194, 'Ano sa Ivatan na salitang ang ‘Magandang umaga!’?', 'Mapia nga vahay! ', 'Maabig a Buklah!', 'Assalamu-alaykum! ', 'Assala mu alaikum!', 'Ivatan', 'Easy', 0),
(195, 'Ano sa Ivatan na salitang ang ‘Mahal kita.’?', 'Ayayaten ka.      ', ' Mabaya kaymu.', 'Gihigugma tika.', 'Kapia ka saken.    ', 'Ivatan', 'Easy', 0),
(196, 'Ano sa Ivatan na salitang ang ‘Hindi ko alam.’?', 'Di ko maaram.     ', 'Agko amta. ', 'Indi ko kamaan.', 'Chapatak ku aya.', 'Ivatan', 'Easy', 0),
(197, 'Sa Tagalog: Kumain na ako., ano naman sa Ivatan ito :________', 'Kuman nakon', '   Angan ak la.', 'Nangan na ko.', ' Kagiaan ako ron. ', 'Ivatan', 'Easy', 0),
(198, 'Ang hayop ang nasa litrato?', 'Manon  ', 'tamsi', 'Langgam', 'Manok', 'Ivatan', 'Medium', 0),
(199, 'Ano ang tawag sa \'Guro\' sa Ivatan?', 'Maestro', 'Mamumuno ', ' Mapia    ', 'Maistra', 'Ivatan', 'Medium', 0),
(200, 'Ano ang tawag sa numero \'Sampu\' sa Ivatan?', 'Asa a poho  ', 'Napulo  ', 'Sapulo ', 'Sangapulo   ', 'Ivatan', 'Medium', 0),
(201, 'Ano/ Ano-anong lalawigan ang gumagamit ng wikang Ivatan ?', ' Batanes Islands    ', 'Cagayan Valley', 'Batangas', ' Basilan City', 'Ivatan', 'Hard', 0),
(202, 'Ilang katao ang gumagamit ng salitang Ivatan? ', '30,000           ', '90,550  ', ' 50,000', ' 3.1 million ', 'Ivatan', 'Hard', 0),
(203, 'Ano ang ibig sabihin nito “PILIPINAS I BARANDANG MAPIYA A NASUD.”', 'ANG PILIPINAS AY TUNAY NA MAYAMAN NA BANSA.  ', 'SA PILIPINAS AY MARAMING PASYALAN.  ', 'PILIPINAS AY TUNAY NA KAAKIT-AKIT.', 'BANSANG MAYAMAN.', 'Ivatan', 'Hard', 0),
(204, 'Ano sa Sambal na salitang ang ‘Magandang umaga!’?', 'Mapian a baley!   ', 'Maupay nga aga!', 'Maong ya kabuasan!', ' Mayad nga aga! ', 'Sambal', 'Easy', 0),
(205, 'Ano sa Sambal na salitang ang ‘Mahal kita.’?', 'Kaluguran daka.    ', '  Namumutan ta ka.', 'Ay-ayaten ka.', 'Ay-ayaten ka.', 'Sambal', 'Easy', 0),
(206, 'Ano sa Sambal na salitang ang ‘Hindi ko alam.’?', 'Andi ko amta.    ', 'Wala ko kabalo.', 'Diri ako maaram. ', 'Dai ko aram.', 'Sambal', 'Easy', 0),
(207, 'Sa Tagalog: Kumain na ako., ano naman sa Sambal ito :________', 'Kuman na ako', ' Nakaon na ako.', 'Nagkaon na ako.', 'Angan ak la.', 'Sambal', 'Easy', 0),
(208, 'ano ang IBON sa Sambal?', 'Ambi', 'Bayong ', 'Tamsi', 'Manok', 'Sambal', 'Medium', 0),
(209, 'Ano ang tawag sa \'Guro\' sa Sambal?', 'mestro  ', 'Maistra', 'Magurru   ', '   Mamumuno ', 'Sambal', 'Medium', 0),
(210, 'Ano ang tawag sa numero \'Sampu\' sa Maguindanao?', 'Sampulu ', ' Dyes', 'Napulo', 'Sapolo', 'Sambal', 'Medium', 0),
(211, 'Ano/ Ano-anong lalawigan ang gumagamit ng wikang Sambal ?', 'Zambales, Pangasinan      ', 'Abra, Benguet, Cagayan, Pangasinan ', 'Leyte, Eastern Samar, at Bohol', 'Ifugao, Cagayan Valley, Batangas', 'Sambal', 'Hard', 0),
(212, 'Ilang katao ang gumagamit ng salitang Sambal? ', '200,000', ' 1 million', '100,000', ' 50,000', 'Sambal', 'Hard', 0),
(213, ' Ano ang ibig sabihin nito “AN SANGLEY IBAT HAMBUS A BANWA.”', 'ANG PILIPINAS AY TUNAY NA MAYAMAN NA BANSA.     ', 'TUNAY NA MAYAMAN ANG BAYAN KO.', ' PILIPINAS AY KAAYA-AYA PUNTAHAN.', 'LIKAS NA MAYAMAN SA KALIKASAN ITO.', 'Sambal', 'Hard', 0),
(214, '1.Ano sa Iloko na salitang ang ‘Magandang umaga!’?', 'asdasdas', 'asda', 'asdas', 'asdasd', 'tagalog', 'easy', 0);

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
-- Indexes for table `accepted_add_to_dictionary`
--
ALTER TABLE `accepted_add_to_dictionary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accepted_feedback`
--
ALTER TABLE `accepted_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_to_dictionary`
--
ALTER TABLE `add_to_dictionary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deleted_add_to_dictionary`
--
ALTER TABLE `deleted_add_to_dictionary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deleted_feedback`
--
ALTER TABLE `deleted_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT for table `accepted_add_to_dictionary`
--
ALTER TABLE `accepted_add_to_dictionary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `accepted_feedback`
--
ALTER TABLE `accepted_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `add_to_dictionary`
--
ALTER TABLE `add_to_dictionary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `deleted_add_to_dictionary`
--
ALTER TABLE `deleted_add_to_dictionary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deleted_feedback`
--
ALTER TABLE `deleted_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_leaderboard`
--
ALTER TABLE `tbl_leaderboard`
  MODIFY `leaderboard` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tbl_question`
--
ALTER TABLE `tbl_question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
