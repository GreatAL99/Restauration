-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 05, 2018 at 03:20 AM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Spanish tortilla', '6.jpg', 5.90 ),
(2, 'Quick fish cakes', '7.jpg', 6.80 ),
(3, 'Wild rice salad', '8.jpg', 5.20 ),
(4, 'Chicken milanese with spaghetti', '4.jpg', 8.70 ),
(5, 'Mango lassi', '5.jpg', 3.10 ),
(9, 'Poached Eggs Acadia', '9.jpg', 6.70  ),
(10, 'The Healthy Riser', '10.jpg', 5.10 ),
(11, 'Eggs Benedict', '11.jpg', 5.20  ),
(12, 'Omelettes', '12.jpg', 5.50 ),


(13, 'Wraps', '13.jpg', 5.90  ),
(16, 'Grilled Cheese', '16.jpg', 3.20  ),
(14, 'Chili Vegetarian', '14.jpg', 4.70   ),
(15, 'Meat & Cheese', '15.jpg', 6.10  );


(17, 'Veggie Medley Shiskabob', '17.jpg', 5.90  );
(18, 'Cajun Turkey Burgers', '18.jpg', 6.80  );
(19, 'Tacos', '19.jpg', 5.20   );
(20, 'Foiled Fish', '20.jpg', 3.10  );




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
