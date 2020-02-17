-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 17, 2020 at 10:21 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE `komentari` (
  `id_comm` int(11) NOT NULL,
  `comm` text COLLATE utf8_unicode_ci NOT NULL,
  `id_post` int(222) NOT NULL,
  `id_user` int(222) NOT NULL,
  `datum` int(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`id_comm`, `comm`, `id_post`, `id_user`, `datum`) VALUES
(3, 'cao cao', 27, 4, 1521301711),
(4, 'dfghj', 25, 4, 1521306562),
(5, 'top', 31, 4, 1521392148),
(6, 'dadad', 31, 1, 1552827680),
(7, 'Dadasdsa', 31, 1, 1552828115),
(9, 'Leii, sta ti je to na celeku ?', 34, 1, 1552838331),
(46, 'fsdasdasdas', 32, 11, 1567217647),
(47, 'dsds', 32, 10, 1567217736),
(50, '1', 32, 1581948725, 0),
(51, '1', 32, 1581948758, 0),
(52, '1', 32, 1581948760, 0),
(53, '1', 32, 1581948763, 0),
(54, '1', 32, 1581948764, 0),
(55, '10', 32, 1581948796, 0),
(56, '32', 10, 0, 1581948893),
(57, '32', 10, 0, 1581948943),
(58, '32', 10, 0, 1581948972),
(59, 'dsadasd', 32, 10, 1581949031),
(60, 'dsadasdasdasdasdas', 32, 10, 1581949043),
(61, 'dadad', 31, 1, 1581949732),
(69, 'dsadasdasdas', 28, 1, 1581971236);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id_post` int(255) NOT NULL,
  `naslov` text COLLATE utf8_unicode_ci NOT NULL,
  `teks` text COLLATE utf8_unicode_ci NOT NULL,
  `kreiran` int(255) DEFAULT NULL,
  `izmenjen` int(255) DEFAULT NULL,
  `slika` text COLLATE utf8_unicode_ci NOT NULL,
  `opis` text COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id_post`, `naslov`, `teks`, `kreiran`, `izmenjen`, `slika`, `opis`, `id_user`) VALUES
(28, 'Alfa Romeo 156', 'Alfa Romeo 156 je jedan od najprodavanijih modela Alfa Romeo, pored modela 147', 1521391815, 1581968575, 'img/156.jpg', '156', 4),
(30, 'Alfa', 'Alfa Romeo Giulia', 1521392046, 1581969031, 'img/qv.jpg', 'qv', 4),
(31, 'Alfa', 'Alfa Romeo MitoO', 1521392135, 1557341165, 'img/mito.jpg', 'mito', 1),
(32, 'Alfa Romeo Probna', 'Alfa Romeo Probna je kreirana za potrebe testiranja ovog sajta', 1557263208, NULL, 'img/1557263208.jpg', 'Probna', 1),
(39, 'dsadsadasdasdasddsa', 'dsadasdassda', 1581960915, 1581970224, 'img/1581969326s123sbsela.PNG', 'dsadasdsaasdas', 1),
(45, 'asdasd', 'sadsadsadasd', 1581962128, 0, 'img/1581962128s123sbsela.PNG', 'asdasds', 1);

-- --------------------------------------------------------

--
-- Table structure for table `uloga`
--

CREATE TABLE `uloga` (
  `id_uloga` int(25) NOT NULL,
  `naziv` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `uloga`
--

INSERT INTO `uloga` (`id_uloga`, `naziv`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(25) NOT NULL,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `id_uloga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `id_uloga`) VALUES
(1, 'dule', '35d42bb7d3a5fc2b3ad088277017e5ea', '12', 1),
(8, 'Alfaman', '4e8a273b3543207fe94f17515b68f247', 'dada@gmail.com', 2),
(9, 'Alfaman', '72b2dc0d6fb192d352f803eb4ae9d78c', 'dada@gmail.com', 2),
(10, 'Luka', '4e8a273b3543207fe94f17515b68f247', 'lukic@luka.com', 1),
(11, 'Zafiworm', '72b2dc0d6fb192d352f803eb4ae9d78c', 'dn1@k.st', 2),
(12, 'Ddule', '076b16412f79b277bfeb87865e0423b9', 'dulence@gmail.com', 2),
(13, 'Ddddule', 'b89ba6d2133e8f181f3c2805d2bb28a9', 'dulence@gmail.com', 2),
(14, 'Mika', '1f25e21fd76dee2cab21d95d81e7bea5', 'dusan@gmail.com', 2),
(15, 'Silviska', '773e504207ea821bae95224c3fd2c054', 'Silviska@gmail.com', 2),
(56, 'Dasda', '1a7b8ba2a44c92db9b6e6ec9832002a4', 'bojan@gmail.com', 2),
(57, 'Dasda', 'daee9eabe3df48dde23e870aa6a8a538', 'bojan@gmail.com', 2),
(58, 'Dsadule', '1a7b8ba2a44c92db9b6e6ec9832002a4', 'dn1@k.st', 2),
(59, 'Dsaduled', 'daee9eabe3df48dde23e870aa6a8a538', 'dn1@k.st', 2),
(60, 'Dsaduleddddd', 'd28335197bbdfd38f38dfa40a666fd62', 'dn1@k.st', 2),
(61, 'Dsadasd', '53ea9972d50c41d2883120bc3fca2d82', 'dn1@k.st', 2),
(62, 'Dsadasdd', 'd28335197bbdfd38f38dfa40a666fd62', 'dn1@k.st', 2),
(63, 'Dsadasddd', '00e54cccf01abbe44f29d3e8e3ce4908', 'dn1@k.st', 2),
(64, 'Dsadasddd', '00e54cccf01abbe44f29d3e8e3ce4908', 'dn1@k.st', 2),
(66, 'Dsadasdddd', '7ba210f0de0498e79ce97f3e0c3b6198', 'dn1@k.st', 2),
(68, 'Dsads', 'aca7b1069fdb65fb8094f5869c086816', 'dn1@k.st', 2),
(70, 'Dsads', '6ccea50f0d2a52c4accf5062558b866f', 'bojan@gmail.com', 2),
(72, 'dsadsa', 'dsadasd', 'dsa', 2),
(73, 'dsadsa', 'dsadasd', 'dsa', 2),
(74, 'user', '6ad14ba9986e3615423dfca256d04e3f', 'user@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentari`
--
ALTER TABLE `komentari`
  ADD PRIMARY KEY (`id_comm`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `uloga`
--
ALTER TABLE `uloga`
  ADD PRIMARY KEY (`id_uloga`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentari`
--
ALTER TABLE `komentari`
  MODIFY `id_comm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `uloga`
--
ALTER TABLE `uloga`
  MODIFY `id_uloga` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
