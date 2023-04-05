-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 04:52 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion4u`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `item_category` varchar(50) NOT NULL,
  `item_price` varchar(6) NOT NULL,
  `item_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_name`, `gender`, `item_category`, `item_price`, `item_image`) VALUES
(1, 'Classic Belt', 'M', 'Accessories', '69.65', './assets/men/accessories/belt/1_men_belt.png'),
(2, 'Jaguar Black', 'M', 'Accessories', '59.55', './assets/men/accessories/belt/2_men_belt.png'),
(3, 'Royal Black', 'M', 'Accessories', '50.45', './assets/men/accessories/belt/3_men_belt.png'),
(4, 'Cobra Leather', 'M', 'Accessories', '155.65', './assets/men/accessories/belt/4_men_belt.png'),
(6, 'Brown Shade', 'M', 'Accessories', '89.99', './assets/men/accessories/sunglasses/1_men_sunglass.png'),
(7, 'Funky Tint', 'M', 'Accessories', '65.65', './assets/men/accessories/sunglasses/2_men_sunglass.png'),
(8, 'Foxy Brown Sunglass', 'M', 'Accessories', '125.65', './assets/men/accessories/sunglasses/3_men_sunglass.png'),
(9, 'Club Master Shades', 'M', 'Accessories', '110.55', './assets/men/accessories/sunglasses/4_men_sunglass.png'),
(10, 'Black Wayfarer Shades', 'M', 'Accessories', '63.65', './assets/men/accessories/sunglasses/5_men_sunglass.png'),
(11, 'Black Long Tie', 'M', 'Accessories', '63.65', './assets/men/accessories/tie/1_men_tie.png'),
(12, 'Blue Dotted Tie', 'M', 'Accessories', '63.65', './assets/men/accessories/tie/2_men_tie.png'),
(13, 'Maroon Tie', 'M', 'Accessories', '63.65', './assets/men/accessories/tie/3_men_tie.png'),
(14, 'Cream White Tie', 'M', 'Accessories', '165.66', './assets/men/accessories/tie/4_men_tie.png'),
(15, 'Fruit Cake Tie', 'M', 'Accessories', '65.75', './assets/men/accessories/tie/5_men_tie.png'),
(16, 'Loguex watch', 'M', 'Accessories', '44.95', './assets/men/accessories/watch/1_men_watch.png'),
(17, 'Tissot Prx 99', 'M', 'Accessories', '145.55', './assets/men/accessories/watch/2_men_watch.png'),
(18, 'Shinny Black Formal Pant', 'M', 'Bottom', '89.95', './assets/men/bottom/formal_pants/1_men_pant.png'),
(19, 'White Formal Pant', 'M', 'Bottom', '64.95', './assets/men/bottom/formal_pants/2_men_pant.png'),
(21, 'Royal black Formal Pant', 'M', 'Bottom', '64.95', './assets/men/bottom/formal_pants/4_men_pant.png'),
(22, 'Beije Formal Pant', 'M', 'Bottom', '64.95', './assets/men/bottom/formal_pants/5_men_pant.png'),
(23, 'Blue Washed Jean', 'M', 'Bottom', '64.95', './assets/men/bottom/jeans/1_men_jeans.png'),
(24, 'Black Straight Jean', 'M', 'Bottom', '95.95', './assets/men/bottom/jeans/2_men_jeans.png'),
(25, 'Blue ripped Jean', 'M', 'Bottom', '95.95', './assets/men/bottom/jeans/3_men_jeans.png'),
(26, 'Blue Skinny Jean', 'M', 'Bottom', '95.95', './assets/men/bottom/jeans/4_men_jeans.png'),
(27, 'Gray Ripped Jean', 'M', 'Bottom', '95.95', './assets/men/bottom/jeans/5_men_jeans.png'),
(28, 'Blue Denim Shorts', 'M', 'Bottom', '95.95', './assets/men/bottom/shorts/1_men_short.png'),
(29, 'Beach Shorts', 'M', 'Bottom', '95.95', './assets/men/bottom/shorts/2_men_short.png'),
(30, 'Swim Shorts', 'M', 'Bottom', '95.95', './assets/men/bottom/shorts/3_men_short.png'),
(31, 'Black Shorts', 'M', 'Bottom', '95.95', './assets/men/bottom/shorts/4_men_short.png'),
(32, 'Red Ze-ze Shoe', 'M', 'Shoes', '165.65', './assets/men/shoes/1_men_shoes.png'),
(33, 'White Peter Shoe', 'M', 'Shoes', '165.65', './assets/men/shoes/2_men_shoes.png'),
(34, 'Sand Storm Shoe', 'M', 'Shoes', '165.65', './assets/men/shoes/3_men_shoes.png'),
(35, 'Chunky Sneakers', 'M', 'Shoes', '165.65', './assets/men/shoes/4_men_shoes.png'),
(36, 'Summer Special Shirt', 'M', 'Upper', '165.65', './assets/men/upper/shirt/1_men_shirt.png'),
(37, 'Black Check Shirt', 'M', 'Upper', '165.65', './assets/men/upper/shirt/2_men_shirt.png'),
(38, 'Off-white Shirt', 'M', 'Upper', '165.65', './assets/men/upper/shirt/3_men_shirt.png'),
(39, 'Button Down Check Shirt', 'M', 'Upper', '165.65', './assets/men/upper/shirt/4_men_shirt.png'),
(40, 'Blue Checked Shirt', 'M', 'Upper', '165.65', './assets/men/upper/shirt/5_men_shirt.png'),
(41, 'Gray Suit', 'M', 'Upper', '165.65', './assets/men/upper/suit/1_men_suit.png'),
(42, 'Olive Suit', 'M', 'Upper', '165.65', './assets/men/upper/suit/2_men_suit.png'),
(43, 'Navy Blue Suit', 'M', 'Upper', '165.65', './assets/men/upper/suit/3_men_suit.png'),
(44, 'Blue Suit', 'M', 'Upper', '165.65', './assets/men/upper/suit/4_men_suit.png'),
(45, 'Black Strip Suit', 'M', 'Upper', '165.65', './assets/men/upper/suit/5_men_suit.png'),
(47, 'Powerlook Hoodie', 'M', 'Upper', '69.65', './assets/men/upper/sweatshirt/2_men_sweatshirt.png'),
(48, 'Locomotive Men Hoodie', 'M', 'Upper', '59.55', './assets/men/upper/sweatshirt/3_men_sweatshirt.png'),
(49, 'White Relaxed Hoodie', 'M', 'Upper', '50.45', './assets/men/upper/sweatshirt/4_men_sweatshirt.png'),
(50, 'Motorsports Hoodie', 'M', 'Upper', '155.65', './assets/men/upper/sweatshirt/5_men_sweatshirt.png'),
(51, 'Black Oversized Tshirt', 'M', 'Upper', '99.99', './assets/men/upper/tshirt/1_men_tshirt.png'),
(52, 'Street Orange Tshirt', 'M', 'Upper', '89.99', './assets/men/upper/tshirt/2_men_tshirt.png'),
(53, 'Technosmoke Tshirt', 'M', 'Upper', '65.65', './assets/men/upper/tshirt/3_men_tshirt.png'),
(54, 'TypoGraphy Tshirt', 'M', 'Upper', '125.65', './assets/men/upper/tshirt/4_men_tshirt.png'),
(55, 'Solid White Tshirt', 'M', 'Upper', '110.55', './assets/men/upper/tshirt/5_men_tshirt.png'),
(101, 'Crusset Belt', 'F', 'Accessories', '69.65', './assets/women/accessories/belt/1_women_belt.png'),
(102, 'BuckleUp Belt', 'F', 'Accessories', '59.55', './assets/women/accessories/belt/2_women_belt.png'),
(103, 'YouBella Belt', 'F', 'Accessories', '50.45', './assets/women/accessories/belt/3_women_belt.png'),
(104, 'Tick Wood belt', 'F', 'Accessories', '155.65', './assets/women/accessories/belt/4_women_belt.png'),
(105, 'Leather Belt', 'F', 'Accessories', '99.99', './assets/women/accessories/belt/5_women_belt.png'),
(106, 'Skinn Colonge', 'F', 'Accessories', '89.99', './assets/women/accessories/perfume/1_women_perfume.png'),
(107, 'London Colonge', 'F', 'Accessories', '65.65', './assets/women/accessories/perfume/2_women_perfume.png'),
(108, 'Plum Body Spray', 'F', 'Accessories', '125.65', './assets/women/accessories/perfume/3_women_perfume.png'),
(109, 'Fogg Metallic Spray', 'F', 'Accessories', '110.55', './assets/women/accessories/perfume/4_women_perfume.png'),
(110, 'Bella Vita Organic', 'F', 'Accessories', '63.65', './assets/women/accessories/perfume/5_women_perfume.png'),
(111, 'Euro Authentic Scarf', 'F', 'Accessories', '63.65', './assets/women/accessories/scarf/1_women_scarf.png'),
(112, 'DressBerry Scarf', 'F', 'Accessories', '63.65', './assets/women/accessories/scarf/2_women_scarf.png'),
(113, 'Polka Dot Scarf', 'F', 'Accessories', '63.65', './assets/women/accessories/scarf/3_women_scarf.png'),
(114, 'Cardgon Scarf', 'F', 'Accessories', '165.66', './assets/women/accessories/scarf/4_women_scarf.png'),
(115, 'Swiss Design Sunglasses', 'F', 'Accessories', '65.75', './assets/women/accessories/sunglasses/1_women_sunglasses.png'),
(116, 'Voyage Sunglasses', 'F', 'Accessories', '44.95', './assets/women/accessories/sunglasses/2_women_sunglasses.png'),
(117, 'Carlton Sunglasses', 'F', 'Accessories', '145.55', './assets/women/accessories/sunglasses/3_women_sunglasses.png'),
(118, 'HRX Sunglasses', 'F', 'Bottom', '89.95', './assets/women/accessories/sunglasses/4_women_sunglasses.png'),
(119, 'Ted Smith Limited Sunglasses', 'F', 'Bottom', '64.95', './assets/women/accessories/sunglasses/5_women_sunglasses.png'),
(120, 'WROGN Sunglasses', 'F', 'Bottom', '64.95', './assets/women/accessories/sunglasses/6_women_sunglasses.png'),
(121, 'Bootcut Formal Trouser', 'F', 'Bottom', '64.95', './assets/women/bottom/formal_pant/1_women_pant.png'),
(122, 'Blue Slim Cropped Trouser', 'F', 'Bottom', '64.95', './assets/women/bottom/formal_pant/2_women_pant.png'),
(123, 'Red Smarty Trouser', 'F', 'Bottom', '64.95', './assets/women/bottom/formal_pant/3_women_pant.png'),
(124, 'Ether Bootcut Trouser', 'F', 'Bottom', '95.95', './assets/women/bottom/formal_pant/4_women_pant.png'),
(125, 'Pleated Gray Trouser', 'F', 'Bottom', '95.95', './assets/women/bottom/formal_pant/5_women_pant.png'),
(126, 'Kotty Ripped Black Jeans', 'F', 'Bottom', '95.95', './assets/women/bottom/jeans/1_women_jeans.png'),
(127, 'Dolce Blue Jeans', 'F', 'Bottom', '95.95', './assets/women/bottom/jeans/2_women_jeans.png'),
(128, 'Mango Straight Fit Jeans', 'F', 'Bottom', '95.95', './assets/women/bottom/jeans/3_women_jeans.png'),
(129, 'Blue Mom Jeans', 'F', 'Bottom', '95.95', './assets/women/bottom/jeans/4_women_jeans.png'),
(130, 'Sienna Flared Jeans', 'F', 'Bottom', '95.95', './assets/women/bottom/jeans/5_women_jeans.png'),
(131, 'Elle Denim Shorts', 'F', 'Bottom', '95.95', './assets/women/bottom/shorts/1_women_shorts.png'),
(132, 'Belliskey Washed  Denim Shorts', 'F', 'Bottom', '165.65', './assets/women/bottom/shorts/2_women_shorts.png'),
(133, 'Olive Pyjamas', 'F', 'Bottom', '165.65', './assets/women/bottom/shorts/3_women_shorts.png'),
(134, 'Yellow Tights short', 'F', 'Bottom', '165.65', './assets/women/bottom/shorts/4_women_shorts.png'),
(135, 'UrSense Ripped Shorts', 'F', 'Bottom', '165.65', './assets/women/bottom/shorts/5_women_shorts.png'),
(136, 'Classic Black Converse Shoes', 'F', 'Shoes', '165.65', './assets/women/shoes/1_women_shoes.png'),
(137, 'Heel Pumps Black', 'F', 'Shoes', '165.65', './assets/women/shoes/2_women_shoes.png'),
(138, 'Corsica High Top Boots', 'F', 'Shoes', '165.65', './assets/women/shoes/3_women_shoes.png'),
(139, 'Biege Toe Hills', 'F', 'Shoes', '165.65', './assets/women/shoes/4_women_shoes.png'),
(140, 'Solid Baby Pink Confy Shoes', 'F', 'Shoes', '165.65', './assets/women/shoes/5_women_shoes.png'),
(141, 'Tulip Blue Dress', 'F', 'Upper', '165.65', './assets/women/upper/dress/1_women_dress.png'),
(142, 'Tokyo Floral Dress', 'F', 'Upper', '165.65', './assets/women/upper/dress/2_women_dress.png'),
(143, 'Aline Mexi Dress', 'F', 'Upper', '165.65', './assets/women/upper/dress/3_women_dress.png'),
(144, 'Tie & Dye Dress ', 'F', 'Upper', '165.65', './assets/women/upper/dress/4_women_dress.png'),
(145, 'Old Skool Red Top', 'F', 'Upper', '165.65', './assets/women/upper/dress/5_women_dress.png'),
(146, 'Violet Fleece Sweatshirt', 'F', 'Upper', '67.99', './assets/women/upper/hoodies/1_women_sweatshirt.png'),
(147, 'Chemistry Pink Sweatshirt', 'F', 'Upper', '165.65', './assets/women/upper/hoodies/2_women_sweatshirt.png'),
(148, 'Alan Gray Hoodie', 'F', 'Upper', '165.65', './assets/women/upper/hoodies/3_women_sweatshirt.png'),
(149, 'Zigo knit Cardigan', 'F', 'Upper', '165.65', './assets/women/upper/hoodies/4_women_sweatshirt.png'),
(150, 'Rib Knit Sandalwood Sweater', 'F', 'Upper', '165.65', './assets/women/upper/hoodies/5_women_sweatshirt.png'),
(151, 'Casual Shirt', 'F', 'Upper', '67.99', './assets/women/upper/shirt/1_women_shirt.png'),
(152, 'The Mummy Shirt', 'F', 'Upper', '165.65', './assets/women/upper/shirt/2_women_shirt.png'),
(153, 'Inky Pinky Shirt', 'F', 'Upper', '165.65', './assets/women/upper/shirt/3_women_shirt.png'),
(155, 'Solid Formal Shirt', 'F', 'Upper', '165.65', './assets/women/upper/shirt/5_women_shirt.png'),
(156, 'One Piece Suit', 'F', 'Upper', '69.65', './assets/women/upper/suit/1_women_suit.png'),
(157, 'Dlanxa 2 Piece Suit', 'F', 'Upper', '59.55', './assets/women/upper/suit/2_women_suit.png'),
(158, 'Black Kite Blazer', 'F', 'Upper', '50.45', './assets/women/upper/suit/3_women_suit.png'),
(159, 'Double Button Black Suit', 'F', 'Upper', '155.65', './assets/women/upper/suit/4_women_suit.png'),
(160, 'London White Suit', 'F', 'Upper', '99.99', './assets/women/upper/suit/5_women_suit.png'),
(161, 'Plain White Tshirt', 'F', 'Upper', '89.99', './assets/women/upper/tshirt/1_women_tshirt.png'),
(162, 'Baby Pink Oversized Tshirt', 'F', 'Upper', '65.65', './assets/women/upper/tshirt/2_women_tshirt.png'),
(163, 'Kook Black Tshirt', 'F', 'Upper', '125.65', './assets/women/upper/tshirt/3_women_tshirt.png'),
(164, 'Typography Tshirt', 'F', 'Upper', '110.55', './assets/women/upper/tshirt/4_women_tshirt.png'),
(165, 'Bright Pink Printed Tshirt', 'F', 'Upper', '63.65', './assets/women/upper/tshirt/5_women_tshirt.png'),
(201, 'Green Cargo Bag', 'U', 'Accessories', '69.65', './assets/common/bags/1_common_bag.png'),
(202, 'Wood Brown Bag', 'U', 'Accessories', '59.55', './assets/common/bags/2_common_bag.png'),
(203, 'Blue & Brown Stripped Bag', 'U', 'Accessories', '50.45', './assets/common/bags/3_common_bag.png'),
(204, 'US Military Bag', 'U', 'Accessories', '155.65', './assets/common/bags/4_common_bag.png'),
(205, 'Now United Bag', 'U', 'Accessories', '99.99', './assets/common/bags/5_common_bag.png'),
(206, 'Fjal Raven Kanken', 'U', 'Accessories', '99.99', './assets/common/bags/6_common_bag.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`) VALUES
(6, 'aksh', 'aksh'),
(22, 'Vedang', 'Vedang'),
(23, 'Niraj', 'Niraj'),
(24, 'Matt', 'Matt');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `user_id`, `item_id`) VALUES
(50, 2, 4),
(51, 5, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `product` (`item_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `product` (`item_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
