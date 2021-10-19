-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 04:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuiszy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jawaban`
--

CREATE TABLE `tbl_jawaban` (
  `id` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `pilihan_jawab` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jawaban`
--

INSERT INTO `tbl_jawaban` (`id`, `id_soal`, `pilihan_jawab`) VALUES
(33, 10, 'kang lampu'),
(34, 10, 'junalah'),
(37, 10, 'sujono lagi'),
(38, 10, 'sukonto Legowo'),
(39, 13, 'inggris'),
(40, 13, 'indonesia'),
(41, 13, 'malaysia'),
(42, 13, 'nigeria'),
(43, 14, 'nigeria'),
(44, 14, 'indonesia'),
(45, 14, 'korea'),
(46, 14, 'inggris'),
(47, 15, '4'),
(48, 15, '3'),
(49, 15, '6'),
(50, 15, '16'),
(51, 16, 'nigeria'),
(52, 16, 'argentina'),
(53, 16, 'spanyol'),
(54, 16, 'italia'),
(55, 17, 'chelsea'),
(56, 17, 'newcastle united'),
(57, 17, 'man city'),
(58, 17, 'manchester united'),
(59, 18, 'sporting lisbon'),
(60, 18, 'benfica'),
(61, 18, 'manchester united'),
(62, 18, 'arsenal'),
(63, 19, 'rugby'),
(64, 19, 'baseball'),
(65, 19, 'sepak bola'),
(66, 19, 'renang'),
(67, 20, 'apple'),
(68, 20, 'fruit'),
(69, 20, 'eyes'),
(70, 20, 'hair'),
(71, 21, 'hidupkan'),
(72, 21, 'matikan'),
(73, 21, 'buang'),
(74, 21, 'tidur'),
(75, 22, 'toko hp'),
(76, 22, 'toko bunga'),
(77, 22, 'kang telor'),
(78, 22, 'material'),
(91, 26, 'duck'),
(92, 26, 'fish'),
(93, 26, 'pig'),
(94, 26, 'turtle'),
(95, 27, 'uchia sasuke'),
(96, 27, 'nara sikamaru'),
(97, 27, 'hatake kakasih'),
(98, 27, 'uzumaki naruto');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_score`
--

CREATE TABLE `tbl_score` (
  `id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_score`
--

INSERT INTO `tbl_score` (`id`, `score`, `waktu`) VALUES
(14, 8, '00:00:00'),
(16, 59, '00:00:53'),
(33, 20, '00:00:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id` int(11) NOT NULL,
  `soal` varchar(225) NOT NULL,
  `jawaban` varchar(225) NOT NULL,
  `kategori` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_soal`
--

INSERT INTO `tbl_soal` (`id`, `soal`, `jawaban`, `kategori`) VALUES
(10, 'siapa yang jualan lampu?', 'kang lampu', '1'),
(13, 'Manchester united club asal negara mana?', 'inggris', '1'),
(14, 'Persija club asal negara mana?', 'indonesia', '2'),
(15, '4 x 4 : 4', '4', '2'),
(16, 'Messi pemain asal negara mana?', 'argentina', '3'),
(17, 'Juara Liga inggris 20 kali adalah klub?', 'manchester united', '3'),
(18, 'cristiano ronaldo sebelum bermain untuk real madrid, dia membela klub mana?', 'manchester united', '4'),
(19, 'olahraga paling populer di dunia?', 'sepak bola', '4'),
(20, 'apa bahasa inggrisnya buah?', 'fruit', '1'),
(21, 'arti dari \"turn off\" adalah?', 'matikan', '2'),
(22, 'beli pasir di?', 'material', '3'),
(26, 'apa bahasa inggrisnya bebek?', 'duck', '4'),
(27, 'nama hokage di konoha sekarang adalah ?', 'uzumaki naruto', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `waktu_maks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `waktu_maks`) VALUES
(1, '', 'admin', '$2y$10$dmRDHBpBm/HU6qYXDfhyhuE4US9fsBekoWKuwWd00Im9vh2ke./8y', 0),
(9, '', 'jono', '$2y$10$7VFNoOsNvI/cPsHkPFnHsON8l/LWkC8w0gVYyt2xsdYVaTn86.psO', 0),
(14, '', 'user1234', '$2y$10$K0uOJCmd/mSB7EmRWaqPYOk2HlG5Ll1F0m9WfhDugZ7jzbJFiFdjm', 0),
(15, '', 'aan', '$2y$10$k7b/ISHJRbg9GiLSbgBEauNMkFhk8TACxDIzPWTwYSNIs47OMi9IK', 0),
(16, '', 'haha', '$2y$10$L7VLwMQjdpFUwm4i58PPQ.R//JQqBrqPIXOvjOQb8cJXA5Y5YKypS', 1),
(17, 'ff@ff.ff', 'hh', '$2y$10$PWHEm5iv1DaAWahi4sSifOrnS9n5CmxxaDZBAxxFwVtKfXhnOzvri', 1),
(20, 'guntur@gg.com', '123', '$2y$10$JRVR4sbyBxkgsMrBSagKuOfmx.mVm7QwXzuzaBO.Ae44MmYqFKeoW', 1),
(21, 'haha@gmail.com', 'ggg', '$2y$10$tV0qruN603530yig.4JKUuGMPlF5qw6Y7Lv9pO.gWqrXS7NM.VT/O', 1),
(22, 'a@gmail.com', '1234', '$2y$10$cBMMyY/AItgKQu2jbgeDEO1JwWLvI0qBU3Jfxjh9BWyOqF1OkHEXO', 1),
(23, 'asdasd@a.ad', '123', '$2y$10$0QdUctp1hVBueA.l2R.TmuDZcrRDKmtWiQrP54/2EC.5VWLj6rXpq', 1),
(24, 'qwe@asd.com', '123', '$2y$10$io7nZyqiBc4TUJlQB7OcNePWGTlYLrd9PuHvWRAL5j0X7Vim.5sMu', 1),
(25, 'qwe@asd.com', '123', '$2y$10$at4A3l4vNpU0uEOW9Sz1ieZT.8E2ncSkVOgiFlrLvSxFWJ7zsARGm', 1),
(26, 'da@d.d', 'asd', '$2y$10$dbkMm4of3C12Sers9AxGbuQN1CrL934UpJ99UPSWsoJxrliBKH86a', 1),
(27, 'asdasd@a.ad', '123', '$2y$10$mId5i6vjQnHobFhl6X/UR.YvPe7F3MFb08fzJUgJK133d6hXlaJYa', 1),
(28, 'asdasd@a.ad', '123', '$2y$10$FJwfTTTFyzVka5dlK0GpKuj0.RpqlwzI5JHtgy9JCfkXCCZ208neS', 1),
(29, 'qwe@asd.com', 'qeqeqwe', '$2y$10$kaFo7uUnbYeKNhelVPDYquKQnW77hREsAYX/6oIvzue7lmnOZlqti', 1),
(30, 'qwer@asd.x', '', '$2y$10$CLyX1zo7gOlT7fQHGjlcpeIyXEIK8wU2sGYf7LRhPgcJykKxHMERK', 1),
(31, 'qwer@asd.x', '', '$2y$10$3.jKLFm7d2HXogG.udBMw.D1S5hUNdPjLPYRAsqPRBqjL12Gk6pRO', 1),
(32, 'asdasd@a.dasd', 'adadas', '$2y$10$roMS2iSfjSFkSRFNAizBL.YWj27y9z3lEDSFqQs1I51Klo9K0ptVK', 1),
(33, 'putriislamiyah129@gmail.com', 'putrii.sl', '$2y$10$Q9tHTj.q5aKI2o2XOXxMqe//04dKSvQDscfYBRcGzCqK9k2A4PZRO', 1),
(34, 'web@gmail.com', 'web', '$2y$10$f0wsN2WgBhrvtCWJuyBqDu1/M8GgzTgEjgLtJ7X1LACDjShVmOvGy', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jawaban`
--
ALTER TABLE `tbl_jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_score`
--
ALTER TABLE `tbl_score`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
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
-- AUTO_INCREMENT for table `tbl_jawaban`
--
ALTER TABLE `tbl_jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
