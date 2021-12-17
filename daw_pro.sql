-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2021 at 09:50 AM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daw_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `arme`
--

CREATE TABLE `arme` (
  `id_arm` int NOT NULL,
  `nume_arm` varchar(20) DEFAULT NULL,
  `tip` varchar(20) DEFAULT NULL,
  `model` varchar(20) DEFAULT NULL,
  `calibru` varchar(20) DEFAULT NULL,
  `greutate` varchar(20) DEFAULT NULL,
  `capacitate` varchar(20) DEFAULT NULL,
  `id_stare` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `arme`
--

INSERT INTO `arme` (`id_arm`, `nume_arm`, `tip`, `model`, `calibru`, `greutate`, `capacitate`, `id_stare`) VALUES
(1, 'BROWNING SEMIAUTOMAT', 'Carabina', 'Semiautomat', '30.06SPRG', '3,3 kg', '	4+1 nr.cartuşe', 3),
(2, 'Taurus M 94', 'Pistol', 'M-94', '1.22 LR', '1.106 kg', '9 nr.cartuşe', 1),
(3, 'Sistemul Mosin', 'Carabina', 'Semiautomat', '7,62 mm', '4.26 kg', '4+1 nr.cartuşe', 4),
(4, 'Margolin - pistol MC', 'Pistol', 'MCM', '5,6 mm', '0,94 kg', '10 nr.cartuşe', 3),
(5, 'Ruger P-95 DC', 'Pistol', 'P-95 DC', '9mm Parabellum', '0,765 kg', '15/10 nr.cartuşe', 3),
(6, 'Carabină de auto înc', 'Carabina', 'auto-încărcare', '7.62×39 mm', '3.86 kg', '10 nr.cartuşe', 1),
(7, 'Tomson', 'Pulimeot', 'FS-154', '7.4 mm', '0,6 kg', '50 nr. cartușe', 3);

-- --------------------------------------------------------

--
-- Table structure for table `carti`
--

CREATE TABLE `carti` (
  `id_carte` int NOT NULL,
  `denumire` varchar(50) DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `colectia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carti`
--

INSERT INTO `carti` (`id_carte`, `denumire`, `autor`, `brand`, `colectia`) VALUES
(1, 'Tată bogat. Tată sărac.', 'Robert T. Kiyosaki', 'Curtea Veche', 'Serie Robert Kiyosaki'),
(2, 'Acolo unde cântă racii', 'Delia Owens', 'Pandora M', 'Anansi Contemporan'),
(3, 'Totul se termină cu noi', 'Colleen Hoover', 'Epica', 'EpicLove');

-- --------------------------------------------------------

--
-- Table structure for table `colectii`
--

CREATE TABLE `colectii` (
  `id_colectie` int NOT NULL,
  `poza` varchar(255) DEFAULT NULL,
  `nume_colectie` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `colectii`
--

INSERT INTO `colectii` (`id_colectie`, `poza`, `nume_colectie`) VALUES
(1, NULL, 'Mașini-mini'),
(2, NULL, 'Discuri de vinil'),
(12, NULL, 'Arme');

-- --------------------------------------------------------

--
-- Table structure for table `discuri`
--

CREATE TABLE `discuri` (
  `id_disc` int NOT NULL,
  `nume_disc` varchar(50) DEFAULT NULL,
  `gen_muz` varchar(20) DEFAULT NULL,
  `cantaret` varchar(20) DEFAULT NULL,
  `editor` varchar(20) DEFAULT NULL,
  `id_stare` int DEFAULT NULL,
  `anul` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `discuri`
--

INSERT INTO `discuri` (`id_disc`, `nume_disc`, `gen_muz`, `cantaret`, `editor`, `id_stare`, `anul`) VALUES
(1, 'Ed Sheeran-eq..1 LP (Limited Red Vinyl)', 'Popp', 'Ed Sheeran', 'Warner Music', 2, 2010),
(2, 'Frank Sinatra. Ultimate Sinatra (2 LP)', 'Pop / Retro', 'Frank Sinatra', '	Universal Music LLC', 3, 2015),
(3, 'Adele. 25 LP', 'Pop / Jazz/ Blues', 'Adele', 'XL Recordings Ltd.', 3, 2012),
(4, 'AC/DC. Back In Black (LP)', 'Hard Rock', 'AC/DC', 'Sony Legacy', 4, 2006),
(5, 'Queen. Greatest Hits II (LP)', 'Rock Classic', 'Queen', 'DigiPak', 1, 2016),
(6, 'Lil Peep. Come Over When You\'Re Sober, Pt. 1 & Pt.', 'Hip-Hop / Rap / R&B', 'Lil Peep', 'DigiPak', 1, 2018),
(8, 'LIAc', 'Popp', 'Vill', 'Booaa', 2, 2006);

-- --------------------------------------------------------

--
-- Table structure for table `figurine`
--

CREATE TABLE `figurine` (
  `id_fig` int NOT NULL,
  `nume_fig` varchar(30) DEFAULT NULL,
  `lung_fig` varchar(30) DEFAULT NULL,
  `lat_fig` varchar(30) DEFAULT NULL,
  `greut_fig` varchar(30) DEFAULT NULL,
  `material_fig` varchar(50) DEFAULT NULL,
  `pictat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `figurine`
--

INSERT INTO `figurine` (`id_fig`, `nume_fig`, `lung_fig`, `lat_fig`, `greut_fig`, `material_fig`, `pictat`) VALUES
(1, 'Biblo', '5.3 cm', '2 cm', '116 g', 'Metal, ipsos, plastic sau derivate din acestea', 'Manual'),
(2, 'Saruman', '7 cm', '3,5 cm', '208 g', 'Metal, ipsos, plastic sau derivate din acestea', 'Manual'),
(3, 'Ork-Krieger', '6 cm', '4,5 cm', '119 g', 'Metal, ipsos, plastic sau derivate din acestea', 'Manual');

-- --------------------------------------------------------

--
-- Table structure for table `machete`
--

CREATE TABLE `machete` (
  `id_macheta` int NOT NULL,
  `nume_machet` varchar(50) DEFAULT NULL,
  `lungime` varchar(20) DEFAULT NULL,
  `latime` varchar(20) DEFAULT NULL,
  `inaltime` varchar(20) DEFAULT NULL,
  `culoare` varchar(30) DEFAULT NULL,
  `varianta` int DEFAULT NULL,
  `producator` varchar(40) DEFAULT NULL,
  `material` varchar(40) DEFAULT NULL,
  `scara` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `machete`
--

INSERT INTO `machete` (`id_macheta`, `nume_machet`, `lungime`, `latime`, `inaltime`, `culoare`, `varianta`, `producator`, `material`, `scara`) VALUES
(1, 'Martin B-57 Canberra', '14 cm', '13.2 cm', '3.5 cm', 'Camuflaj verde', 1954, 'DeAgostini (Atlas)', 'Metal cu mici părți din plastic', '1:72'),
(2, 'Mikoyan Gurevitch MIG-3 USSR', '11.5 cm', '14 cm', '4.5 cm', 'Alb cu roșu', 1942, 'DeAgostini (Atlas)', 'Metal cu mici părți din plastic', '1:72'),
(3, 'Cant Z-1007bis Alcione', '12.6 cm', '17 cm', '3.6 cm', 'Verde', 1942, 'DeAgostini (Atlas)', 'Metal cu mici părți din plastic', '1:144');

-- --------------------------------------------------------

--
-- Table structure for table `masini`
--

CREATE TABLE `masini` (
  `id_ma` int NOT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `greutate` varchar(20) DEFAULT NULL,
  `dimensiune` varchar(20) DEFAULT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `id_stare` int DEFAULT NULL,
  `anul` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `masini`
--

INSERT INTO `masini` (`id_ma`, `marca`, `greutate`, `dimensiune`, `brand`, `id_stare`, `anul`) VALUES
(2, 'McLAREN Gt', '0,7 kg', '20*5*10 cm', 'Winiei', 4, 1984),
(5, 'MERCEDES X-CLASS', '0,6 kg', '18*5*8 cm', 'Wenyi', 3, 2016),
(15, 'PORSCHE CARRERA 4S', '0,5 KG', '20*5*10 cm', 'Wenyi', 3, 2000),
(16, 'McLAREN GTV', '0,6 kg', '20*5*10 cm', 'WellyY', 3, 2006),
(18, 'McLAREN GT', '0,6 kg', '20*5*10 cm', 'WellyYassss', 1, 2006);

-- --------------------------------------------------------

--
-- Table structure for table `minerale`
--

CREATE TABLE `minerale` (
  `id_mineral` int NOT NULL,
  `nume_mineral` varchar(50) DEFAULT NULL,
  `comorile_pamantului` varchar(50) DEFAULT NULL,
  `culori` varchar(50) DEFAULT NULL,
  `zodiile` varchar(50) DEFAULT NULL,
  `energie` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `minerale`
--

INSERT INTO `minerale` (`id_mineral`, `nume_mineral`, `comorile_pamantului`, `culori`, `zodiile`, `energie`) VALUES
(1, 'Obsidianul de mahon', 'nr.18 - Obsidianul de mahon', 'Roșu, mahon', 'Leu, Săgetător, Balanță', 'Yang'),
(2, 'Cuarțul roz', 'nr. 4 - Cuartul roz', 'Roz pal', 'Balanță, Gemeni, Taur, Fecioară', 'Yin'),
(3, 'Pirita', 'nr. 3 - Pirita', 'Galben cenușiu sau auriu', 'Leu, Berbec', 'Yang');

-- --------------------------------------------------------

--
-- Table structure for table `monede`
--

CREATE TABLE `monede` (
  `id_moneda` int NOT NULL,
  `nume` varchar(50) DEFAULT NULL,
  `valoarea` varchar(50) DEFAULT NULL,
  `calitatea` varchar(20) DEFAULT NULL,
  `metal` varchar(20) DEFAULT NULL,
  `compozitia` varchar(20) DEFAULT NULL,
  `masa` varchar(20) DEFAULT NULL,
  `forma` varchar(20) DEFAULT NULL,
  `margine` varchar(30) DEFAULT NULL,
  `tiraj` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `monede`
--

INSERT INTO `monede` (`id_moneda`, `nume`, `valoarea`, `calitatea`, `metal`, `compozitia`, `masa`, `forma`, `margine`, `tiraj`) VALUES
(1, '100 de ani de la Unirea Basarabiei cu România(aur)', '1000 lei', 'proof', 'aur', '999,9/1000', '31,1 grame', 'rotundă', 'zimţată', '300 exemplare'),
(2, '100 de ani de la Unirea Basarabiei cu România(arg)', '100 lei', 'proof', 'argint', '999/1000', '31,1 grame', 'rotundă', 'zimțată', '1200 exemplare'),
(3, '100 de ani de la înființarea Sfatului Țării', '100 lei', 'proof', 'argint', '999/1000', '31,1 grame', 'rotundă', 'zimţată', '750 exemplare');

-- --------------------------------------------------------

--
-- Table structure for table `stare`
--

CREATE TABLE `stare` (
  `id_stare` int NOT NULL,
  `nume_stare` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stare`
--

INSERT INTO `stare` (`id_stare`, `nume_stare`) VALUES
(1, 'excelentă'),
(2, 'foarte bună'),
(3, 'bună'),
(4, 'satisfăcătoare'),
(5, 'nesatisfăcătoare');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'lena.bejan', '$2y$10$PPRZN.Ct5RPtOa.dNDJE4.Bb9K9R8jkH7.nnACsXx.Dh8rndL.E16', 'elena.bejan@gmai.com'),
(2, 'ledyalbot', '$2y$10$68XzZNQZmSMwSUhtiA8fAes57BlVTmZ0Vv1DAAXr5OYzfUPJ5wih2', 'ledyalbot@gmail.com'),
(4, 'sebo', '$2y$10$smAXFL8oMVXReIaO9dmhs.JBK.cGmkh47fC8yfy8HL5fAQjNuHpEm', 'sebo@gmail.com'),
(5, 'darius', '$2y$10$/xBhkp0uUn1vn4kb18yfLOWNdnz/yPAdkldGadOal829lfokmAbbC', 'darius@gmail.com'),
(8, 'kornel', '$2y$10$NovdlZrmrcUIHRVFJnf6MujyzTiwNTAFsvfWC/maK9SBj8poHogGe', 'kornel@gmail.com'),
(9, 'kornelnegara', '$2y$10$edVi6MnSKKXkmsrrfeCdwucxg04GisonMOlvCG4D5dnaAFQ5mlqL.', 'kornel.25negara@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `vinuri`
--

CREATE TABLE `vinuri` (
  `id_vin` int NOT NULL,
  `nume_vin` varchar(30) DEFAULT NULL,
  `anul` int DEFAULT NULL,
  `gust` varchar(20) DEFAULT NULL,
  `alcool` varchar(20) DEFAULT NULL,
  `tara` varchar(20) DEFAULT NULL,
  `culoarea` varchar(20) DEFAULT NULL,
  `struguri` varchar(20) DEFAULT NULL,
  `volum` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vinuri`
--

INSERT INTO `vinuri` (`id_vin`, `nume_vin`, `anul`, `gust`, `alcool`, `tara`, `culoarea`, `struguri`, `volum`) VALUES
(1, 'Cojusna Porvein', 1979, 'dulce', '18%', 'Republica Moldova', 'alb', 'Rkatsiteli', '0,7 L'),
(2, 'Port Mereni', 2004, 'dulce', '15%', 'Republica Moldova', 'roșu', 'Cabernet Sauvignon', '0,75 L'),
(3, 'Denovi Di Fruct Plum', 2018, 'demidulce', '10%', 'Republica Moldova', 'roșu', 'Prune', '0,75 L');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arme`
--
ALTER TABLE `arme`
  ADD PRIMARY KEY (`id_arm`),
  ADD KEY `id_stare` (`id_stare`);

--
-- Indexes for table `carti`
--
ALTER TABLE `carti`
  ADD PRIMARY KEY (`id_carte`);

--
-- Indexes for table `colectii`
--
ALTER TABLE `colectii`
  ADD PRIMARY KEY (`id_colectie`);

--
-- Indexes for table `discuri`
--
ALTER TABLE `discuri`
  ADD PRIMARY KEY (`id_disc`),
  ADD KEY `id_stare` (`id_stare`);

--
-- Indexes for table `figurine`
--
ALTER TABLE `figurine`
  ADD PRIMARY KEY (`id_fig`);

--
-- Indexes for table `machete`
--
ALTER TABLE `machete`
  ADD PRIMARY KEY (`id_macheta`);

--
-- Indexes for table `masini`
--
ALTER TABLE `masini`
  ADD PRIMARY KEY (`id_ma`),
  ADD KEY `id_stare` (`id_stare`);

--
-- Indexes for table `minerale`
--
ALTER TABLE `minerale`
  ADD PRIMARY KEY (`id_mineral`);

--
-- Indexes for table `monede`
--
ALTER TABLE `monede`
  ADD PRIMARY KEY (`id_moneda`);

--
-- Indexes for table `stare`
--
ALTER TABLE `stare`
  ADD PRIMARY KEY (`id_stare`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vinuri`
--
ALTER TABLE `vinuri`
  ADD PRIMARY KEY (`id_vin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arme`
--
ALTER TABLE `arme`
  MODIFY `id_arm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `carti`
--
ALTER TABLE `carti`
  MODIFY `id_carte` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `colectii`
--
ALTER TABLE `colectii`
  MODIFY `id_colectie` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `discuri`
--
ALTER TABLE `discuri`
  MODIFY `id_disc` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `figurine`
--
ALTER TABLE `figurine`
  MODIFY `id_fig` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `machete`
--
ALTER TABLE `machete`
  MODIFY `id_macheta` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `masini`
--
ALTER TABLE `masini`
  MODIFY `id_ma` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `minerale`
--
ALTER TABLE `minerale`
  MODIFY `id_mineral` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `monede`
--
ALTER TABLE `monede`
  MODIFY `id_moneda` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stare`
--
ALTER TABLE `stare`
  MODIFY `id_stare` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vinuri`
--
ALTER TABLE `vinuri`
  MODIFY `id_vin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `arme`
--
ALTER TABLE `arme`
  ADD CONSTRAINT `arme_ibfk_1` FOREIGN KEY (`id_stare`) REFERENCES `stare` (`id_stare`);

--
-- Constraints for table `discuri`
--
ALTER TABLE `discuri`
  ADD CONSTRAINT `discuri_ibfk_1` FOREIGN KEY (`id_stare`) REFERENCES `stare` (`id_stare`);

--
-- Constraints for table `masini`
--
ALTER TABLE `masini`
  ADD CONSTRAINT `masini_ibfk_1` FOREIGN KEY (`id_stare`) REFERENCES `stare` (`id_stare`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
