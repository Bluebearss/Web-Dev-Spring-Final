-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2016 at 02:04 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `brian_zhu`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `item` varchar(50) NOT NULL,
  `price` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grocerystoretable`
--

CREATE TABLE IF NOT EXISTS `grocerystoretable` (
  `item` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `price` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grocerystoretable`
--

INSERT INTO `grocerystoretable` (`item`, `type`, `price`) VALUES
('roses', 'flower', 10),
('tulips', 'flower', 15),
('daffodils', 'flower', 18),
('orchid', 'flower', 20),
('sunflower', 'flower', 10),
('poppy', 'flower', 20),
('dahlia', 'flower', 30),
('jasmine', 'flower', 25),
('lotus', 'flower', 40),
('periwinkle', 'flower', 100),
('tomato', 'produce', 2),
('green beans', 'produce', 2),
('corn', 'produce', 3),
('watermelon', 'produce', 3),
('peach', 'produce', 1),
('dragonfruit', 'produce', 4),
('pineapple', 'produce', 5),
('apple', 'produce', 1),
('pumpkin', 'produce', 4),
('eggplant', 'produce', 2),
('rice', 'bulk', 3),
('pasta', 'bulk', 4),
('beans', 'bulk', 3),
('cereal', 'bulk', 5),
('trail mix', 'bulk', 4),
('nut butter', 'bulk', 3),
('dried orange', 'bulk', 2),
('dried plum', 'bulk', 2),
('dried raisins', 'bulk', 2),
('dried banana', 'bulk', 2),
('squid', 'seafood', 30),
('snails', 'seafood', 10),
('lobster', 'seafood', 30),
('crab', 'seafood', 20),
('shrimp', 'seafood', 15),
('salmon', 'seafood', 30),
('tuna', 'seafood', 25),
('shark', 'seafood', 50),
('cod', 'seafood', 40),
('scallop', 'seafood', 15),
('bacon', 'meat', 8),
('steak', 'meat', 15),
('salami', 'meat', 7),
('sausage', 'meat', 6),
('lamb chop', 'meat', 13),
('prime rib', 'meat', 11),
('t-bone', 'meat', 16),
('sirloin', 'meat', 7),
('pork belly', 'meat', 2),
('meatloaf', 'meat', 10),
('milk', 'dairy', 13),
('cream cheese', 'dairy', 2),
('eggs', 'dairy', 3),
('yogurt', 'dairy', 5),
('butter', 'dairy', 2),
('cottage cheese', 'dairy', 2),
('ice cream', 'dairy', 10),
('whey', 'dairy', 60),
('pudding', 'dairy', 1),
('sour cream', 'dairy', 2),
('barbera d'' asti', 'wine', 15),
('gavi', 'wine', 30),
('piropo', 'wine', 10),
('baluarte verdejo', 'wine', 12),
('castano', 'wine', 9),
('the cork grove', 'wine', 13),
('alma', 'wine', 20),
('vivanco', 'wine', 16),
('monte faliesi', 'wine', 45),
('laurenz v.', 'wine', 25),
('loaf of bread', 'bakery', 26),
('tortilla', 'bakery', 2),
('pizza crust', 'bakery', 3),
('pie crust', 'bakery', 20),
('cinnamon buns', 'bakery', 6),
('breadsticks', 'bakery', 25),
('croutons', 'bakery', 2),
('taco shells', 'bakery', 2),
('strawberry cake', 'bakery', 3),
('chocolate muffins', 'bakery', 24),
('potato salad', 'deli', 5),
('sushi', 'deli', 10),
('fried chicken', 'deli', 10),
('sandwich', 'deli', 6),
('american cheese', 'deli', 5),
('bagel', 'deli', 3),
('pizza', 'deli', 4),
('hot dog', 'deli', 2),
('hamburger', 'deli', 6),
('meatballs', 'deli', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
