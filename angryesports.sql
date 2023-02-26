-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 10:14 PM
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
-- Database: `angryesports`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ShtoUser` (IN `pEmri` VARCHAR(50), IN `pUsername` VARCHAR(32), IN `pEmail` VARCHAR(200), IN `pPassword` VARCHAR(200), IN `pQyteti` VARCHAR(50), IN `pFshati` VARCHAR(50), IN `pZipKodi` VARCHAR(20), IN `pRoli` VARCHAR(10), IN `pProfili` VARCHAR(200))   BEGIN
	INSERT INTO user(fullname, username, email, password, qyteti, fshati, zipkodi, roli, profili) 
	VALUES (pEmri, pUsername, pEmail, pPassword, pQyteti, pFshati, pZipKodi, CASE WHEN pRoli = 'Admin' THEN 2 ELSE 1 END, pProfili);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `year` int(4) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `author` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `year`, `content`, `author`) VALUES
(1, 2019, ' In October 2019, when esports was rapidly gaining popularity, and the number of championships with big prizes kept steadily increasing, 4 Albanian friends \"RABBIT,TIBU,SEVENTY and GJONI\" announced the idea of ​​creating an esports team of PUBG Mobile representing Kosovo. Arbalet set out to create a professional team for which he will become the main sponsor: he will provide players with a training ground and will take on the financial side of the issue, starting with salaries and ending with the payment for flights.The first to respond to the proposal was starix - he was given the task of creating the star squad. On October 17, 2019, organization called ANGRY E-SPORTS (fromLatin -borntowin) was built around the PUBG team. It is noteworthy that initially the abbreviation ANGRY was borrowed from the streaming chat and its final form was acquired after the competition for the team name, conducted among the fans. The first ANGRY lineup included TIBU, RABBIT, SEVENTY, GJONI and FATLIND, with Rabbit becoming also the manager. All the players were distinguished by high individual skill and had a lot of experience in tournaments...', 'db'),
(2, 2020, 'This year was very important first of all for the PUBG Mobile roster. The team continued to show high-class games, and won several major tournaments, as well as taking second places. But the transition to a new discipline was inevitable: by the end of 2019, the entire roster started to compete in PUBG Mobile. In 2011, FIFA, StarCraft II and League of Legends teams were created. The new rosters did not meet the expectations and were subsequently disbanded. The exception was RABBIT, who is considered one of the strongest PUBGMobiles players in the world at the moment and pleases the fans with victories. He has earned more than 20 medals in competitions of different rank. The main esports event of 2020 was The International, a STREAMERS MENA tournament with a record prize pool of $ 100,000.', 'db'),
(3, 2021, '2021 was very successful for ANGRY E-SPORTS: It was a difficult year for both ANGRY and esports in general. There were only a few LAN events and most competition moved online due to the COVID-19 pandemic. 2021 began with a replacement in ANGRY PUBGMobile Team. A young gun PAKEZ joined the team and replaced the fragger. The renewed roster won a spot in the SUBZERO LEAGUE and third place at that tournament before going to REVIVAL Winter League. And there, the team had no equal: it’s been 2 years since the incredible victory at MENA TOURNAMENT, the Born to Win once again lifted the coveted trophy and took home $5,000 in prize money. The ANGRY Academy continued to grow and nurture new players. At the end of the year, Akili the graduate of the Academy started occasionally playing for the main roster and consequently became a full-time member of the team. The turning point was in September when the full team of SORRY joined the forces of ANGRY E-SPORTS. Things gradually took off, and in December the team took first place at many tournaments. In 2021, the club reopened the VALORANT division, inviting young players Orges and Noride, while also making a move into mobile esports: PUBG Mobile division was launched in the fall. Within a few months, the two Valorant players made more than $ 1,000, and the PUBG Mobile team won the Streamers League.', 'db'),
(6, 2022, 'Despite the challenging period of the previous year, the ANGRY esports club went into 2022 with big plans and clear goals. The Born to Win focused on both consolidating achievements and reaching new heights, ANGRY began to appear not only on PUBG Mobile but also on VALORANT, conquering these disciplines is one of ANGRY’s missions. While existing teams boasted outstanding results: e.g. PUBG Mobile delivered great performances on the international stage and regularly made it to the top of the championships. ANGRY:PUBG Mobile achieved the greatest heights in 2022. The Born to Win triumphed in a number of tournaments, and victory at the Revival Winter League, Ramadan Pro League, Angry Masters League were the cherry on the cake. In addition, five ANGRY players (RABBIT, TIBU, PAKEZ, AKILI, BESARI) were included in the final Top10 rankings by HLTV.org, while RABBIT topped the rankings. Also in 2022, a high-tech office with gaming penthouses was built in Prishtina, and the club’s staff grew 4 times.', '');

-- --------------------------------------------------------

--
-- Table structure for table `sliderimg`
--

CREATE TABLE `sliderimg` (
  `id` int(11) NOT NULL,
  `imgpath` varchar(256) NOT NULL,
  `author` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sliderimg`
--

INSERT INTO `sliderimg` (`id`, `imgpath`, `author`) VALUES
(6, 'uploads/sliderimg/1angry.png', 'db'),
(7, 'uploads/sliderimg/DWDAWD.jpg', 'db'),
(8, 'uploads/sliderimg/turnuva111.png', 'db'),
(9, 'uploads/sliderimg/dwdwdw.png', 'db'),
(10, 'uploads/trophyimg/valteam.jpg', 'db');

-- --------------------------------------------------------

--
-- Table structure for table `trophy`
--

CREATE TABLE `trophy` (
  `id` int(11) NOT NULL,
  `trophy_name` varchar(100) NOT NULL,
  `trophy_place` varchar(50) NOT NULL,
  `trophy_prizepool` int(11) NOT NULL,
  `trophy_author` varchar(200) NOT NULL,
  `trophy_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trophy`
--

INSERT INTO `trophy` (`id`, `trophy_name`, `trophy_place`, `trophy_prizepool`, `trophy_author`, `trophy_img`) VALUES
(1, 'Ramadan Pro Leagueew', '1st place', 10000, 'db', 'uploads/trophyimg/ramadanproleague.png'),
(2, 'Angry Masters League', '1st place', 5000, 'db', 'uploads/trophyimg/ramadanproleague.png'),
(3, 'Revival Winter League', '1st place', 1000, 'db', 'uploads/trophyimg/ramadanproleague.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `qyteti` varchar(50) DEFAULT NULL,
  `fshati` varchar(50) DEFAULT NULL,
  `zipkodi` varchar(20) DEFAULT NULL,
  `roli` int(1) DEFAULT 1,
  `profili` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `email`, `password`, `qyteti`, `fshati`, `zipkodi`, `roli`, `profili`) VALUES
(1, 'Endrit Thaqi', 'endriti', 'endrit@gmail.com', 'endriti1234', 'Malisheve', 'Shkarashnik', '24000', 1, NULL),
(5, 'Ramiz Hoxha', 'ramizhoxha', 'ramizhoxha@gmail.com', 'ramizhoxha55', 'Lipjan', 'Kraishte', '11000', 1, NULL),
(6, 'Blerina Rrmoku', 'blerinarrmoku', 'blerinarrmoku@gmail.com', 'Blerinarrmoku..22', 'Prishtinee', 'Bregu i djellit', '10000', 1, ''),
(10, 'Endriti', 'endritbosi', 'endritbosi@gmail.com', 'endriti5', 'Malishevaaaaakkkk', '3232', '32', 2, 'uploads/userimg/RABBIT.png'),
(11, 'Blerim Zylfiu', 'blerimzylfiu', 'blerimzylfiu@gmail.com', 'Blerim..zyllfiu123', 'dsa', 'sds', 'sdsd33', 1, 'uploads/userimg/valteam.jpg'),
(12, 'Endriti Thaqi', 'rabbitpubg', 'endritthaqi33@gmail.com', 'Endritbossi..44', 'Malisheva', '3232', '3232', 2, 'uploads/userimg/logo128x.png');

-- --------------------------------------------------------

--
-- Table structure for table `websettings`
--

CREATE TABLE `websettings` (
  `web_title` varchar(200) DEFAULT NULL,
  `web_instagram` varchar(200) DEFAULT NULL,
  `web_youtube` varchar(200) DEFAULT NULL,
  `web_twitch` varchar(200) DEFAULT NULL,
  `web_discord` varchar(200) DEFAULT NULL,
  `web_twitter` varchar(200) DEFAULT NULL,
  `web_facebook` varchar(200) DEFAULT NULL,
  `web_logo` varchar(200) DEFAULT NULL,
  `webSettingsID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `websettings`
--

INSERT INTO `websettings` (`web_title`, `web_instagram`, `web_youtube`, `web_twitch`, `web_discord`, `web_twitter`, `web_facebook`, `web_logo`, `webSettingsID`) VALUES
('ANGRY E-SPORTS', 'https://www.instagram.com/angryteam.pubgm', 'https://www.youtube.com/@angryteam9441', 'https://www.twitch.tv/imtibu', 'https://discord.gg/6yt6T4J6Ur', 'https://twitter.com/AngryteamV', 'https://www.facebook.com/', 'uploads/trophyimg/angry2022logo.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `year` (`year`);

--
-- Indexes for table `sliderimg`
--
ALTER TABLE `sliderimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trophy`
--
ALTER TABLE `trophy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliderimg`
--
ALTER TABLE `sliderimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `trophy`
--
ALTER TABLE `trophy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
