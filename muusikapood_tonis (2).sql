-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Loomise aeg: Juuni 04, 2024 kell 01:00 PL
-- Serveri versioon: 10.4.32-MariaDB
-- PHP versioon: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Andmebaas: `muusikapood tonis`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `albumid`
--

CREATE TABLE `albumid` (
  `id` int(11) NOT NULL,
  `artist` varchar(30) NOT NULL,
  `album` varchar(50) NOT NULL,
  `aasta` year(4) NOT NULL,
  `hind` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Andmete tõmmistamine tabelile `albumid`
--

INSERT INTO `albumid` (`id`, `artist`, `album`, `aasta`, `hind`) VALUES
(1, 'Prudence Hanes', 'Mr', '1961', 0.00),
(2, 'Worth Rennenbach', 'Dr', '1933', 0.00),
(3, 'Brittney Haslock', 'Dr', '1965', 0.00),
(4, 'Reinaldos Conklin', 'Mrs', '1920', 0.00),
(5, 'Channa Gerger', 'Dr', '1943', 0.00),
(6, 'Jorry Chamney', 'Dr', '1935', 0.00),
(7, 'Eliza Paty', 'Honorable', '1989', 0.00),
(8, 'Ashley Okenden', 'Mr', '1912', 0.00),
(9, 'Inge Pepi', 'Honorable', '1915', 0.00),
(10, 'Addia Littrell', 'Mrs', '2002', 0.00),
(11, 'Elvyn Hargey', 'Ms', '1936', 0.00),
(12, 'Janel Careswell', 'Honorable', '2000', 0.00),
(13, 'Nerty Saunderson', 'Honorable', '2003', 0.00),
(14, 'Orton Porcher', 'Mr', '1978', 0.00),
(15, 'Kristine Atcherley', 'Ms', '1967', 0.00),
(16, 'Margie Thomassin', 'Mr', '1902', 0.00),
(17, 'Bernete Albin', 'Mrs', '1960', 0.00),
(18, 'Mavra Dennistoun', 'Mr', '1944', 0.00),
(19, 'Kermie Adrienne', 'Mrs', '1905', 0.00),
(20, 'Tammie Rolance', 'Honorable', '1944', 0.00),
(21, 'Mace Knightly', 'Mrs', '1902', 0.00),
(22, 'Georgeanne Assad', 'Honorable', '1958', 0.00),
(23, 'Rocky Ludovico', 'Honorable', '1919', 0.00),
(24, 'Alard Attarge', 'Mrs', '1929', 0.00),
(25, 'Trix Gillham', 'Honorable', '1914', 0.00),
(26, 'Kathe Giacobo', 'Mr', '2018', 0.00),
(27, 'Ailina Dillingston', 'Dr', '1901', 0.00),
(28, 'Perrine Ellick', 'Rev', '2021', 0.00),
(29, 'Elsbeth Elliman', 'Mrs', '1950', 0.00),
(30, 'Monte Bennet', 'Mrs', '1953', 0.00),
(31, 'Alanah Lemon', 'Ms', '2001', 0.00),
(32, 'Malinda Mingardo', 'Mrs', '1902', 0.00),
(33, 'Gifford Tuppeny', 'Dr', '1959', 0.00),
(34, 'Natassia Burlingame', 'Honorable', '1997', 0.00),
(35, 'Gunner Creek', 'Dr', '1951', 0.00),
(36, 'Kristal Dowdell', 'Rev', '1934', 0.00),
(37, 'Garrot Kuhnwald', 'Honorable', '2019', 0.00),
(38, 'Emile Record', 'Mr', '1923', 0.00),
(39, 'Parry Wellard', 'Mr', '1957', 0.00),
(40, 'Karel Scopyn', 'Mrs', '1993', 0.00),
(41, 'Ware Dain', 'Ms', '1904', 0.00),
(42, 'Lyman Strowlger', 'Honorable', '1983', 0.00),
(43, 'Thain Alecock', 'Mrs', '1976', 0.00),
(44, 'Yehudit Tankus', 'Ms', '1924', 0.00),
(45, 'Ysabel Frostdick', 'Mr', '1983', 0.00),
(46, 'Earle Bisley', 'Dr', '1963', 0.00),
(47, 'Fey Gaule', 'Rev', '1999', 0.00),
(48, 'Rosemaria Lampett', 'Ms', '1957', 0.00),
(49, 'Wren Duell', 'Mrs', '1959', 0.00),
(50, 'Christiano Avramovich', 'Mr', '1991', 0.00),
(51, 'Kaia Jansen', 'Mrs', '1918', 0.00),
(52, 'Fianna Scurrer', 'Mrs', '1973', 0.00),
(53, 'Elisabetta McDuall', 'Mr', '2022', 0.00),
(54, 'Trueman Barabisch', 'Dr', '1990', 0.00),
(55, 'Geordie Matura', 'Honorable', '1937', 0.00),
(56, 'Clemens Artus', 'Rev', '1974', 0.00),
(57, 'Anders Buncher', 'Rev', '1922', 0.00),
(58, 'Cammy Czyz', 'Rev', '1990', 0.00),
(59, 'Lon Laye', 'Dr', '1919', 0.00),
(60, 'Revkah Strooband', 'Mr', '2019', 0.00),
(61, 'Zacherie Roocroft', 'Ms', '2016', 0.00),
(62, 'Malissa Moggach', 'Mrs', '1992', 0.00),
(63, 'Nessie Dyer', 'Mrs', '1956', 0.00),
(64, 'Laurie Ratley', 'Ms', '1918', 0.00),
(65, 'Farrah Rigts', 'Rev', '1959', 0.00),
(66, 'Kalie Olliffe', 'Mr', '1969', 0.00),
(67, 'Lanette Benian', 'Honorable', '1934', 0.00),
(68, 'Aluin Castellan', 'Mr', '1927', 0.00),
(69, 'Raf Shemwell', 'Ms', '2015', 0.00),
(70, 'Dayna Veld', 'Mrs', '1939', 0.00),
(71, 'Addy Fawke', 'Mr', '1968', 0.00),
(72, 'Ginnie Gregoretti', 'Rev', '1926', 0.00),
(73, 'Minni Lefort', 'Mr', '1983', 0.00),
(74, 'Jon Najara', 'Mrs', '1960', 0.00),
(75, 'Carney McGuirk', 'Mrs', '1996', 0.00),
(76, 'Pip Cary', 'Honorable', '2015', 0.00),
(77, 'Paige Garretson', 'Rev', '1924', 0.00),
(78, 'Imogene Aidler', 'Mr', '1951', 0.00),
(79, 'Fons Brownsill', 'Mr', '1987', 0.00),
(80, 'Merrill Ayerst', 'Mrs', '1984', 0.00),
(81, 'Ninetta Snaith', 'Mr', '1983', 0.00),
(82, 'Danya Chidzoy', 'Rev', '2005', 0.00),
(83, 'Gwenora Deelay', 'Dr', '1934', 0.00),
(84, 'Hermie Gorch', 'Ms', '1930', 0.00),
(85, 'Olga Romushkin', 'Dr', '1972', 0.00),
(86, 'Falito O\' Timony', 'Honorable', '1904', 0.00),
(87, 'Yettie Marwick', 'Rev', '1908', 0.00),
(88, 'Angus Opie', 'Mr', '1905', 0.00),
(89, 'Quintina Marshallsay', 'Mr', '1971', 0.00),
(90, 'Anstice Gudde', 'Mr', '1963', 0.00),
(91, 'Cecily Pettendrich', 'Mr', '1928', 0.00),
(92, 'Mateo Cauley', 'Honorable', '1938', 0.00),
(93, 'Gerri Websdale', 'Mrs', '1954', 0.00),
(94, 'Artus Bawles', 'Ms', '1953', 0.00),
(95, 'Pru Gunson', 'Honorable', '2011', 0.00),
(96, 'Dur Rymell', 'Mr', '1930', 0.00),
(97, 'May Harses', 'Dr', '1967', 0.00),
(98, 'Manda Kirby', 'Honorable', '1999', 0.00),
(99, 'Viviyan Satterly', 'Mr', '1901', 0.00),
(100, 'Ileana Hatliffe', 'Rev', '1928', 0.00),
(101, 'Shannon Emms', 'Rev', '2011', 15.00),
(102, 'Orbadiah Giddy', 'Dr', '1952', 78.00),
(103, 'Natalee Grigoriev', 'Mrs', '2020', 55.00),
(104, 'Dolley Assaf', 'Mr', '1995', 68.00),
(105, 'Lolita Annetts', 'Honorable', '1968', 86.00),
(106, 'Cly Kent', 'Mr', '1926', 16.00),
(107, 'Dannie Harrigan', 'Mrs', '1980', 44.00),
(108, 'Clarissa Eyles', 'Honorable', '2000', 36.00),
(109, 'Myriam Lugard', 'Mrs', '1987', 35.00),
(110, 'Felita Jeppensen', 'Mr', '1925', 33.00),
(111, 'Demeter Lapthorn', 'Honorable', '1967', 38.00),
(112, 'Marlie Dripp', 'Ms', '0000', 20.00),
(113, 'Beilul Lemerle', 'Mrs', '1955', 52.00),
(114, 'Victor Reisk', 'Ms', '1994', 94.00),
(115, 'Florenza Durban', 'Honorable', '1938', 75.00),
(116, 'Markos Ridulfo', 'Honorable', '1942', 33.00),
(117, 'Dalia Steddall', 'Dr', '1937', 43.00),
(118, 'Hirsch Ousley', 'Rev', '1987', 66.00),
(119, 'Lazar Cleynaert', 'Honorable', '1974', 17.00),
(120, 'Waylon Larsen', 'Dr', '1969', 70.00),
(121, 'Lizbeth Hrishchenko', 'Honorable', '1976', 14.00),
(122, 'Bealle Coppard', 'Mr', '1916', 2.00),
(123, 'Mycah Prahl', 'Ms', '1966', 33.00),
(124, 'Kristina Tyre', 'Dr', '1937', 50.00),
(125, 'Eliza Largen', 'Dr', '1967', 35.00),
(126, 'Dixie Safell', 'Dr', '1951', 52.00),
(127, 'Inness Redmond', 'Rev', '1956', 90.00),
(128, 'Sherm Meadowcraft', 'Mr', '1966', 72.00),
(129, 'Holmes Garfath', 'Honorable', '1978', 98.00),
(130, 'Roobbie Benedek', 'Dr', '1902', 50.00),
(131, 'Ave Valasek', 'Rev', '1917', 58.00),
(132, 'Tabina Larchiere', 'Dr', '1908', 13.00),
(133, 'Kissiah Watson', 'Honorable', '1975', 99.00),
(134, 'Juan Kefford', 'Dr', '1915', 10.00),
(135, 'Duky Raddenbury', 'Mrs', '1999', 53.00),
(136, 'Sansone Abramsky', 'Dr', '1954', 46.00),
(137, 'Haleigh Creak', 'Rev', '2010', 29.00),
(138, 'Christina Chessman', 'Mr', '2019', 53.00),
(139, 'Ranna Kirke', 'Mrs', '1972', 32.00),
(140, 'Clare Elletson', 'Honorable', '1915', 50.00),
(141, 'Willyt Newsome', 'Mrs', '1956', 85.00),
(142, 'Quentin Skipworth', 'Ms', '2006', 11.00),
(143, 'Charlean Trippack', 'Honorable', '2003', 31.00),
(144, 'Sula Brunton', 'Ms', '2020', 68.00),
(145, 'Lazaro Jankovic', 'Dr', '1925', 73.00),
(146, 'Valenka Leete', 'Mr', '1925', 38.00),
(147, 'Rachelle Weekland', 'Rev', '1929', 86.00),
(148, 'Tabatha Gifkins', 'Dr', '1920', 31.00),
(149, 'Hetti Kimmerling', 'Rev', '2000', 67.00),
(150, 'Nancee Kornel', 'Mr', '1980', 83.00),
(151, 'Dedra Wabey', 'Honorable', '1994', 45.00),
(152, 'Norrie Drepp', 'Honorable', '1956', 13.00),
(153, 'Lynnett Methley', 'Dr', '1983', 79.00),
(154, 'Kitti Garrelts', 'Ms', '1924', 77.00),
(155, 'Constance Ollerton', 'Mrs', '1977', 1.00),
(156, 'Saleem Gremane', 'Mrs', '2002', 19.00),
(157, 'Ryan Bromont', 'Honorable', '1970', 44.00),
(158, 'Araldo Smiz', 'Mrs', '2016', 9.00),
(159, 'Carla Flanigan', 'Dr', '1986', 51.00),
(160, 'Osbourne Cranidge', 'Mrs', '1992', 64.00),
(161, 'Johannah Spellacey', 'Mrs', '1972', 16.00),
(162, 'Valeda Summerell', 'Dr', '1962', 62.00),
(163, 'Mill Ponting', 'Ms', '1918', 80.00),
(164, 'Ginny Bucknall', 'Dr', '2013', 100.00),
(165, 'Son Kenryd', 'Mr', '1998', 68.00),
(166, 'Si Priditt', 'Rev', '1952', 94.00),
(167, 'Joscelin MacPaik', 'Dr', '2021', 82.00),
(168, 'Kristofor Haugh', 'Mr', '1967', 66.00),
(169, 'Euell Andriesse', 'Ms', '1983', 25.00),
(170, 'Ronnie Camden', 'Rev', '2014', 30.00),
(171, 'Bartholomeus Langlois', 'Dr', '1966', 57.00),
(172, 'Abbot Marchenko', 'Rev', '1912', 52.00),
(173, 'Ainslee Guttridge', 'Dr', '1904', 69.00),
(174, 'Dallis Bethune', 'Mr', '1962', 25.00),
(175, 'Charlton Radnedge', 'Mrs', '1994', 1.00),
(176, 'Hamilton Esselen', 'Rev', '1909', 54.00),
(177, 'Irving Muggleston', 'Mr', '1907', 51.00),
(178, 'Carla Nehls', 'Rev', '1911', 86.00),
(179, 'Harcourt Growy', 'Mr', '1903', 40.00),
(180, 'Randy Eytel', 'Dr', '1990', 99.00),
(181, 'Niven Hellens', 'Dr', '1930', 65.00),
(182, 'Florenza Dredge', 'Mr', '1929', 15.00),
(183, 'Goldia Halford', 'Ms', '1943', 72.00),
(184, 'Scarface Binny', 'Dr', '2011', 33.00),
(185, 'Patric McCrae', 'Mr', '1929', 67.00),
(186, 'Gardener Standingford', 'Ms', '1909', 28.00),
(187, 'Darya Bartell', 'Rev', '1984', 79.00),
(188, 'Wallie McCuaig', 'Mrs', '0000', 43.00),
(189, 'Melantha Ribou', 'Mr', '1957', 68.00),
(190, 'Margy Lyster', 'Mr', '1973', 78.00),
(191, 'Dody Bridgestock', 'Mrs', '1961', 85.00),
(192, 'Florance Durdy', 'Dr', '1988', 87.00),
(193, 'Odette Monsey', 'Mr', '1975', 57.00),
(194, 'Lester Taylorson', 'Mrs', '1960', 23.00),
(195, 'Orren Easterbrook', 'Dr', '1966', 22.00),
(196, 'Moria Corfield', 'Honorable', '1945', 2.00),
(197, 'Milena Vallery', 'Ms', '1961', 40.00),
(198, 'Welch Bottomer', 'Mr', '1930', 40.00),
(199, 'Eleonora Cazin', 'Dr', '1904', 26.00),
(200, 'Gerrie Cushion', 'Ms', '1938', 11.00);

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `arved`
--

CREATE TABLE `arved` (
  `id` int(11) NOT NULL,
  `albumid_id` int(3) NOT NULL,
  `kliendid_id` int(3) NOT NULL,
  `kogus` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Andmete tõmmistamine tabelile `arved`
--

INSERT INTO `arved` (`id`, `albumid_id`, `kliendid_id`, `kogus`) VALUES
(1, 1, 1, 295),
(2, 2, 2, 164),
(3, 3, 3, 888),
(4, 4, 4, 2),
(5, 5, 5, 529),
(6, 6, 6, 437),
(7, 7, 7, 885),
(8, 8, 8, 47),
(9, 9, 9, 55),
(10, 10, 10, 976),
(11, 11, 11, 627),
(12, 12, 12, 970);

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `kasutajad`
--

CREATE TABLE `kasutajad` (
  `id` int(11) NOT NULL,
  `kasutajanimi` varchar(5) NOT NULL,
  `kasutajaparool` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Andmete tõmmistamine tabelile `kasutajad`
--

INSERT INTO `kasutajad` (`id`, `kasutajanimi`, `kasutajaparool`) VALUES
(1, 'gion0', 'eeeee'),
(2, 'dmcet', 'xQ'),
(3, 'ecorn', 'vWD'),
(4, 'rshal', 'cY|%'),
(5, 'mrudd', 'rA'),
(6, 'hboyl', 'uU'),
(7, 'cpeac', 'nXN'),
(8, 'mturb', 'uO9H'),
(9, 'smcmu', 'dT&'),
(10, 'lreol', 'cS'),
(11, 'cgoss', 'qAC'),
(12, 'nanto', 'mDE'),
(13, 'raspo', 'tOi'),
(14, 'ohead', 'iL4B'),
(15, 'bcarl', 'jZb'),
(16, 'lmacf', 'dU'),
(17, 'ahalm', 'rT'),
(18, 'pfibb', 'lGNV'),
(19, 'ddill', 'aYV='),
(20, 'gjant', 'cZvE'),
(21, 'vhayd', 'zP2$'),
(22, 'spich', 'jT6'),
(23, 'jantr', 'bZgW'),
(24, 'kcran', 'jP'),
(25, 'tlong', 'lO'),
(26, 'cstol', 'fD'),
(27, 'bcowd', 'pC'),
(28, 'lknol', 'gF'),
(29, 'nshir', 'lNF'),
(30, 'cblun', 'cH\''),
(31, 'tonis', 'tavTajsDLbjCE'),
(32, 'marti', 'taE3FLOdd8JNQ'),
(33, 'marti', 'taE3FLOdd8JNQ'),
(34, 'testk', 'taFhmPMvTTblM'),
(35, 'partm', '$2y$10$mdOfBI92sTrpX75nOlGt.ePNEWgQbYdLdxYeUDZQsEyG/yftVoPxe'),
(36, 'martm', '$2y$10$gxaWdr5FVtMXGk0BWZipVeMDJBhctiKtolqbr2Jr3lMSg4dE78Ahq'),
(37, 'dasfa', '$2y$10$Q/NjATSFENYQJpstTa1q7.Gjn/LhEpwnrUVYS3/SLAuh7EfTvk.SC');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `kliendid`
--

CREATE TABLE `kliendid` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_number` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Andmete tõmmistamine tabelile `kliendid`
--

INSERT INTO `kliendid` (`id`, `first_name`, `last_name`, `phone_number`) VALUES
(1, 'Lee', 'Baughn', 612),
(2, 'Marty', 'Pinke', 750),
(3, 'Leonie', 'Barttrum', 755),
(4, 'Quinn', 'Uren', 972),
(5, 'Eric', 'Sworn', 406),
(6, 'Harriot', 'Servis', 783),
(7, 'Verne', 'Tolemache', 266),
(8, 'Edd', 'Sturror', 843),
(9, 'Ebonee', 'Beceril', 675),
(10, 'Dwight', 'Pedri', 453),
(11, 'Jeannette', 'Massy', 292),
(12, 'Creigh', 'Dyster', 499),
(13, 'Minny', 'Normavell', 598),
(14, 'Kingston', 'Phillipson', 491),
(15, 'Hilliard', 'Oldfield-Cherry', 183),
(16, 'Samson', 'Mewburn', 846),
(17, 'Zitella', 'Wiltshaw', 627),
(18, 'Milissent', 'Tures', 366),
(19, 'Gertrud', 'Corley', 229),
(20, 'Katrinka', 'Schaumann', 405),
(21, 'Reube', 'Spencock', 605),
(22, 'Isacco', 'Alvarado', 984),
(23, 'Vergil', 'Urch', 374),
(24, 'Annalee', 'D\'Hooghe', 959),
(25, 'Moss', 'Headford', 251),
(26, 'Maxy', 'Shegog', 106),
(27, 'Raddy', 'Ferrolli', 781),
(28, 'Pierre', 'Wandrey', 141);

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `albumid`
--
ALTER TABLE `albumid`
  ADD PRIMARY KEY (`id`);

--
-- Indeksid tabelile `arved`
--
ALTER TABLE `arved`
  ADD PRIMARY KEY (`id`);

--
-- Indeksid tabelile `kasutajad`
--
ALTER TABLE `kasutajad`
  ADD PRIMARY KEY (`id`);

--
-- Indeksid tabelile `kliendid`
--
ALTER TABLE `kliendid`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT tõmmistatud tabelitele
--

--
-- AUTO_INCREMENT tabelile `albumid`
--
ALTER TABLE `albumid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT tabelile `arved`
--
ALTER TABLE `arved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT tabelile `kasutajad`
--
ALTER TABLE `kasutajad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT tabelile `kliendid`
--
ALTER TABLE `kliendid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
