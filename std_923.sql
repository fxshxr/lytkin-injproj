-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: std-mysql
-- Время создания: Июл 01 2020 г., 02:15
-- Версия сервера: 5.7.26-0ubuntu0.16.04.1
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `std_923`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bikes`
--

CREATE TABLE `bikes` (
  `title` varchar(255) NOT NULL,
  `par` text NOT NULL,
  `date` datetime NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bikes`
--

INSERT INTO `bikes` (`title`, `par`, `date`, `path`) VALUES
('Time Trial and Triathlon Bikes ', 'Read trusted triathlon bike reviews from the experts at BikeRadar. Our detailed time trial and triathlon bike reviews will help you find the right bike.', '2020-07-01 05:13:56', '');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `title` varchar(255) NOT NULL,
  `par` text NOT NULL,
  `date` datetime NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`title`, `par`, `date`, `path`) VALUES
('Santa Cruz collaborates with Cerv&eacute;lo for new range of Reserve carbon road and gravel wheels', 'Santa Cruz has announced it is collaborating with Cerv&eacute;lo to bring a range of aero, carbon road and gravel wheels to market in 2021, under the Reserve brand.', '2020-07-01 05:10:04', ''),
('2021 Commencal Clash 650b park bike wants you to venture out of bounds', 'Under-the-hood suspension and geometry adjustments should make this burly park shredder even more versatile', '2020-07-01 05:10:44', ''),
('Two new maps &ndash; including Mont Ventoux &ndash; to be added to Zwift as Virtual Tour de France is confirmed for July', 'Chris Froome, Geraint Thomas, Marianne Vos and Anna van der Breggen set to line up for first-ever virtual Tour', '2020-07-01 05:10:53', ''),
('Yeti&rsquo;s SB115 is built for all-day epics', '\r\n\r\nWith 115mm out back and 130mm up front the SB115\'s designed to tackle mile upon mile of singletrack\r\n', '2020-07-01 05:11:10', ''),
('Rapha&rsquo;s new sunglasses are for the racer, espresso sipper and adventurer', 'Four frame styles and ROSE lens technology for Rapha\'s latest Pro Team, Classic and Explore sunnies', '2020-07-01 05:11:19', ''),
('Favero power meter pedals, Katusha superlight kit, Tru-Tension tungsten lube and Verve aero chainrings', 'Plus all the best news and reviews from BikeRadar this week', '2020-07-01 05:11:27', ''),
('YT&rsquo;s 2021 alloy Capra goes full shred with Fox 38 fork and Fox DHX2 coil shock', 'Plus similar updates to YT\'s Decoy electric mountain bike', '2020-07-01 05:11:35', ''),
('Boardman launches new aggressively-priced 2021 road and gravel bike range', 'New SLR and ADV models for 2021', '2020-07-01 05:11:44', ''),
('Clean your bike for less with our bargain bike cleaning products', 'It\'s time to clean up your act', '2020-07-01 05:11:58', '');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `title` varchar(255) NOT NULL,
  `par` text NOT NULL,
  `date` datetime NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`title`, `par`, `date`, `path`) VALUES
('Fuji Touring Disc review', 'Pros: Everything you need from a touring bike without breaking the bank\r\nCons: Slightly stiff-feeling tyres and the bar-end shifters won&rsquo;t appeal to everybody', '2020-07-01 05:12:41', ''),
('Bianchi Infinito XE Ultegra review', 'Pros: Sporty yet comfortable position; quick, balanced handling\r\nCons: Middling wheels, tyres and seatpost dull performance', '2020-07-01 05:12:56', ''),
('Cannondale Synapse Carbon Disc Dura-Ace review', 'Pros: Lively handling, light chassis, smooth ride\r\nCons: Middleweight wheelset at odds with superbike chassis', '2020-07-01 05:13:11', '');

-- --------------------------------------------------------

--
-- Структура таблицы `store`
--

CREATE TABLE `store` (
  `title` varchar(255) NOT NULL,
  `par` text NOT NULL,
  `date` datetime NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `store`
--

INSERT INTO `store` (`title`, `par`, `date`, `path`) VALUES
('BMC TM01 review', '12000$', '2020-07-01 05:14:19', ''),
('GT Zaskar LT Expert ', '100000$', '2020-07-01 05:14:42', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
