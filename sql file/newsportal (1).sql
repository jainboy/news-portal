-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 06:00 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `adimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `adimage`) VALUES
(9, 'admin', 'admin@gmail.com', '123456', 'autority letter.jpg'),
(11, 'vaibhav jain', 'vaibhavjain14798@gmail.com', '221928122', 'vaibhav1.jpg'),
(12, 'admin', 'admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `cdescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`, `cdescription`) VALUES
(9, 'international', 'international news'),
(10, 'sports', 'it is sports'),
(11, 'technology', 'technology news'),
(12, 'science', 'sci-fi news'),
(14, 'bollywood', 'bollywood tadka'),
(15, 'hollywod', 'hollywood news'),
(16, 'Polytics', 'indian polytics');

-- --------------------------------------------------------

--
-- Table structure for table `newspost`
--

CREATE TABLE `newspost` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `category` varchar(30) NOT NULL,
  `newsimage` varchar(255) NOT NULL,
  `author` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newspost`
--

INSERT INTO `newspost` (`id`, `title`, `Description`, `category`, `newsimage`, `author`, `date`) VALUES
(29, 'When will Reliance Industries bring Jioâ€™s aggression to JioFiber tariffs?', '\r\nâ€¢	The total broadband of Jio subscriber base currently is less than 20 million subscribers\r\nâ€¢	Tariffs announced for JioFiber three months ago was more or less in line with prevailing market rates\r\nMumbai: Unlike the big bang launch of Reliance JioInfocommLtdâ€™s mobile broadband services three years ago, the companyâ€™s plans for its fixed broadband services, under the JioFiber tag, have been far more restrained. While tariffs for its mobile services were far below competition, the tariffs announced for JioFiber three months ago was more or less in line with prevailing market rates.\r\nAccording to some new reports, this is set to change, with the company reportedly offering a Rs351 monthly plan for fixed broadband services.\r\nBut a company official clarified that JioFiber offerings continue to start from Rs. 699 per month, adding that the Rs351 base cost is part of each of the plans announced three months ago. As such, there is no new lower-priced plan as of now. The confusion arose as a result of a Rs351 plan being filed with the regulator, although it must be noted that customers can buy only bundled offerings which start at Rs699 per month.\r\nNote that the total broadband subscriber base in India currently is less than 20 million subscribers, and Jioâ€™s target of reaching 20 million subscribers in the near-term, and 50 million subscribers eventually, has looked far too ambitious.\r\nUnless tariffs are brought down meaningfully, analysts expect growth to be sluggish in the segment. Even so, Reliance Jio has done well to garner about 0.7 million subscribers for its fixed broadband services by end-September, according to data collated by Telecom Regulatory Authority of India. Considering that competitor BhartiAirtel Ltd took years to reach its current subscriber base of 2.35 million in its home fixed broadband segment, Jioâ€™s feat is commendable.\r\nBut to achieve its stated goal, tariffs would need to come down. There is also the matter of reach. Challenges with last-mile connectivity act as a constraint on growth. Taking broadband services to residences involve multiple approvals from authorities, such as municipal corporations and housing societies, which arenâ€™t very easy to come by. Perhaps, Jio will be ready to offer lower tariffs when its reach, in terms of the number of homes it can connect to, reaches greater scale.', 'technology', 'image001.jpg', 'vaibhav', '2019-07-24'),
(30, '2 Army Soldiers Killed after Avalanche Hits Patrol Team in Southern Siachen Glacier', 'A statement from the Army said an Avalanche Rescue Team (ART) following the patrol immediately rushed and managed to locate and pull out all members, but two personnel succumbed to their injuriesNew Delhi: At least two soldiers of the Indian Army were killed after an avalanche struck a patrol team operating at an altitude of approximately 18,000 feet in the Southern Siachen Glacier sector in the Union Territory of Ladakh early on Saturday.\r\n\"An Avalanche Rescue Team (ART) following the patrol immediately rushed and managed to locate and pull out all members of the patrol,\" Srinagar-based defence spokesperson Colonel Rajesh Kalia said in a statement. \"Simultaneously, Army helicopters were pressed into service to evacuate the avalanche victims.\"\r\nHowever, the two personnel succumbed to injuries.\r\nThis is the second avalanche in Siachen in the past two weeks. On November 18, four Indian Army personnel and two civilian porters were killed in an avalanche in the northern part of the Siachen Glacier.\r\nSituated at a height of around 20,000 ft in the Karakoram range, the glacier is known as the highest militarised zone in the world where soldiers have to battle frostbite and high winds.\r\nAvalanches and landslides are common at the glacier during winters, with temperatures often dropping to as low as -60 degrees Celsius.\r\n', 'technology', 'image004.jpg', 'vaibhav', '2019-12-15'),
(31, 'Day After India\'s Sinking GDP Growth Rate, NirmalaSitharaman Keeps Alive Hope of $5 Trillion Economy', 'New Delhi: Amid the ongoing economic slowdown, Finance Minister NirmalaSitharaman said Modi government’s initiative to reduce corporate tax rate is a historic move.\r\n“To spur investment and industrial growth for fulfilling the target of 5 trillion dollar economy, the Modi government reduced Corporate Tax rates to among the lowest in the world in a historic move. #6MonthsOfIndiaFirst (sic),” NirmalaSitharaman tweeted.\r\nIn a series of tweets on PM Modi’s completion of six months in office for the second term, Sitharaman lauded the PM\'s initiatives for economy.\r\nHer tweets come a day after India’s Gross Domestic Product (GDP) growth rate for the second quarter of the ongoing financial year fell to six-year low of 4.5%.\r\nAhead of the release of the numbers, government data released showed that the output of eight core infrastructure industries contracted by 5.8% in October, indicating the severity of the economic slowdown.\r\nEarlier this week, Sitharaman, during a discussion on economic situation in the RajyaSabha, said even though economic growth may have slowed but there is no recession.\r\nSoon after the GDP numbers showed a dip in trend, opposition leaders slammed the BJP government over the state of economy. Leading the attack was former prime minister and senior Congress leader Manmohan Singh. He said the current state of the Indian economy was “unacceptable”.\r\nTerming the decline from 5% to 4.5% as worrisome, Singh said, “The sharp decline of GDP from 5% in Q1 to 4.5% in Q2 is worrisome. Mere changes in economic policies will not help revive the economy.”\r\nCongress spokesperson Randeep Singh Surjewala said the country\'s economy has collapsed and trade an employment have also taken a hit.\r\n\r\nCongress\' JaiveerShergill also trained guns at the BJP government and called for Finance Minister\'s resignation . \"Where there is a Will, there is a way. The BJP neither has the Will nor knows the Way to much needed economic reforms. The first step should be resignation of the finance minister and then she should do financial internship under Dr Manmohan Singh to learn the skill of Financial Management,\" he was quoted as saying by the ANI.\r\n', 'international', '', 'vaishali chauhan', '2019-07-24'),
(33, 'When will Reliance Industries bring Jioâ€™s aggression to JioFiber tariffs?', 'Mumbai: Unlike the big bang launch of Reliance JioInfocommLtdâ€™s mobile broadband services three years ago, the companyâ€™s plans for its fixed broadband services, under the JioFiber tag, have been far more restrained. While tariffs for its mobile services were far below competition, the tariffs announced for JioFiber three months ago was more or less in line with prevailing market rates.\r\n\r\nAccording to some new reports, this is set to change, with the company reportedly offering a Rs351 monthly plan for fixed broadband services.\r\n\r\nBut a company official clarified that JioFiber offerings continue to start from Rs. 699 per month, adding that the Rs351 base cost is part of each of the plans announced three months ago. As such, there is no new lower-priced plan as of now. The confusion arose as a result of a Rs351 plan being filed with the regulator, although it must be noted that customers can buy only bundled offerings which start at Rs699 per month.\r\n\r\nNote that the total broadband subscriber base in India currently is less than 20 million subscribers, and Jioâ€™s target of reaching 20 million subscribers in the near-term, and 50 million subscribers eventually, has looked far too ambitious.\r\n\r\nUnless tariffs are brought down meaningfully, analysts expect growth to be sluggish in the segment. Even so, Reliance Jio has done well to garner about 0.7 million subscribers for its fixed broadband services by end-September, according to data collated by Telecom Regulatory Authority of India. Considering that competitor BhartiAirtel Ltd took years to reach its current subscriber base of 2.35 million in its home fixed broadband segment, Jioâ€™s feat is commendable.\r\n\r\nBut to achieve its stated goal, tariffs would need to come down. There is also the matter of reach. Challenges with last-mile connectivity act as a constraint on growth. Taking broadband services to residences involve multiple approvals from authorities, such as municipal corporations and housing societies, which arenâ€™t very easy to come by. Perhaps, Jio will be ready to offer lower tariffs when its reach, in terms of the number of homes it can connect to, reaches greater scale.', 'international', 'image001.jpg', 'vaibhav', '2019-12-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newspost`
--
ALTER TABLE `newspost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `newspost`
--
ALTER TABLE `newspost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
