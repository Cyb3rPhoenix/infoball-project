-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2018 at 08:42 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokeballs`
--

-- --------------------------------------------------------

--
-- Table structure for table `pokeballtable`
--

CREATE TABLE `pokeballtable` (
  `Pokeball_ID` int(11) NOT NULL,
  `Pokeball_Name` varchar(15) NOT NULL,
  `Pokeball_Pic` varchar(20) NOT NULL,
  `Pokeball_Desc` text NOT NULL,
  `Pokeball_Quote` varchar(100) NOT NULL,
  `Pokeball_Class` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pokeballtable`
--

INSERT INTO `pokeballtable` (`Pokeball_ID`, `Pokeball_Name`, `Pokeball_Pic`, `Pokeball_Desc`, `Pokeball_Quote`, `Pokeball_Class`) VALUES
(1, 'Poke Ball', 'poke ball.png', 'The Pokeball is the first ever pokeball. It doesn\'t have any specific statistic or benefits. It is available in pretty much every pokemart in the pokeworld.\r\n<br> <br>\r\nDescription: Stad	A Ball thrown at wild PokÃ©mon to catch them. <br>\r\nGSC	An item for catching PokÃ©mon. <br>\r\nRSE	A tool for catching wild PokÃ©mon. <br>\r\nFRLG	A Ball thrown to catch a wild PokÃ©mon. It is designed in a capsule style.  <br>\r\nColo. XD	A tool for catching wild PokÃ©mon.  <br>\r\nDPPt A tool for catching wild PokÃ©mon.  <br>\r\nHGSS	A device for catching wild PokÃ©mon. It is thrown like a ball at the target. It is designed as a capsule system.  <br>\r\nBWB2W2	A device for catching wild PokÃ©mon. It is thrown like a ball at the target. It is designed as a capsule system.  <br>\r\nXYORAS	A device for catching wild PokÃ©mon. It\'s thrown like a ball at a PokÃ©mon, comfortably encapsulating its target.  <br>\r\nSM	A device for catching wild PokÃ©mon. It\'s thrown like a ball at a PokÃ©mon, comfortably encapsulating its target.  <br>\r\nUSUM	A device for catching wild PokÃ©mon. It\'s thrown like a ball at a PokÃ©mon, comfortably encapsulating its target.  <br>\r\n <br> <br>\r\nCatch rate: 1x', 'Ahh... The classic Pokeball, the ball of a true pokemon trainer', 'Classic'),
(2, 'Great Ball', 'great ball.png', 'The description will be for an upcoming data update.', 'Poke ball, but 2x better', 'Classic'),
(3, 'Ultra Ball', 'ultra ball.png', 'Upcoming', 'Poke ball, but 4x better', 'Classic'),
(4, 'Quick Ball', 'quick ball.png', 'v1', 'Quick ball for quick', 'Turn-Based'),
(5, 'Fast Ball', 'fast ball.png', 'fast ball', 'Often mistaken as quick ball', ''),
(6, 'Dive Ball', 'dive ball.png', 'diving diving', 'A diver\'s best friend', 'Area-Specific');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `email`, `password`, `type`) VALUES
(1, 'Phoenix', 'adriel.timoteo@gmail.com', 'ielts1610', 'Admin'),
(2, 'Viewer', 'member@gmail.com', '12345', 'Member'),
(3, 'test', 'test@gmail.com', 'atest', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pokeballtable`
--
ALTER TABLE `pokeballtable`
  ADD PRIMARY KEY (`Pokeball_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pokeballtable`
--
ALTER TABLE `pokeballtable`
  MODIFY `Pokeball_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
