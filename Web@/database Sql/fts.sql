-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 11:44 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fts`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `pbrand` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `pbrand`) VALUES
(1, 'HP'),
(2, 'Samsung'),
(3, 'Vivo'),
(4, 'Whirlpool'),
(5, 'LG'),
(6, 'Dell'),
(7, 'Oppo'),
(8, 'Iphone'),
(9, 'Nokia'),
(10, 'One+'),
(11, 'Huwai'),
(12, 'Intex'),
(13, 'Sony'),
(14, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `pro_id` int(100) NOT NULL,
  `ip_add` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `seller_id` int(200) NOT NULL,
  `product_name` text NOT NULL,
  `product_image` text NOT NULL,
  `qty` int(100) NOT NULL,
  `offer` int(100) NOT NULL,
  `price` int(200) NOT NULL,
  `total_amt` int(200) NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `pro_id`, `ip_add`, `user_id`, `seller_id`, `product_name`, `product_image`, `qty`, `offer`, `price`, `total_amt`, `descr`) VALUES
(1, 18, 0, 2, 4, 'fast food', 'images.jpg', 1, 25, 250, 250, 'this is to tasty fast food'),
(2, 25, 0, 1, 4, 'VIVO  v11pro', '50.png', 2, 5, 25000, 50000, 'This is full screen new generation mobile .'),
(3, 3, 0, 6, 4, 'Samsung galaxy x6', '40.jpg', 1, 5, 25000, 25000, 'this is good product for you'),
(4, 25, 0, 6, 4, 'VIVO  v11pro', '50.png', 1, 5, 25000, 25000, 'This is full screen new generation mobile .'),
(6, 9, 0, 5, 4, 'sport shoes', 'sh1.jpg', 1, 20, 1500, 1500, 'this is good sport shoes for a sport man');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(100) NOT NULL,
  `pcategory` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `pcategory`) VALUES
(1, 'Electronics & Electrical'),
(2, 'Laptops'),
(3, 'Mobiles'),
(4, 'Clothes'),
(5, 'Milk_products'),
(6, 'Shoes'),
(7, 'Fashion'),
(8, 'Books'),
(9, 'Home_mart'),
(10, 'Sweets'),
(11, 'Fast_food'),
(12, 'Sports '),
(13, 'Ladies_fas');

-- --------------------------------------------------------

--
-- Table structure for table `gm_info`
--

CREATE TABLE `gm_info` (
  `gm_id` int(20) NOT NULL,
  `gm_name` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `refrence_id` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL,
  `ifsc` varchar(150) NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gm_info`
--

INSERT INTO `gm_info` (`gm_id`, `gm_name`, `email`, `address1`, `address2`, `password`, `mobile`, `refrence_id`, `account`, `ifsc`, `city`) VALUES
(1, 'Rajesh', 'rajeshrathore05011998@gmail.com', 'Mahavir nagar ', 'gwalior MP', 'e360bc13bcba071f4746adbb334cd78e', '9148002717', 'FTS5c1fe74f79db33.14326920', '12121210', '12121', ''),
(2, 'Rajeev Kumar', 'rk9057330@gmail.com', 'Katihar patna', 'Bihar', 'e360bc13bcba071f4746adbb334cd78e', '9148002121', 'FTS5c1ff3e3d88616.37796126', '12121212121212', '12121', ''),
(3, 'Bharat Rathore', 'bkthakur@gmail.com', 'BTI ROAD SHANTI NAGAR BHIND', 'BHIND MADHYA PRADESH 477001', 'e10adc3949ba59abbe56e057f20f883e', '3216547894', 'FTS5c288847a27648.95497523', '221212112121121', 'IFSC000SBI0', ''),
(4, 'Radhamohan shakya', 'radhamohan123@gmail.com', 'Mahavir nagar 3rd phase kota', 'Rajasthan pin- 342100', 'e360bc13bcba071f4746adbb334cd78e', '9141412125', 'FTS5c40bc4a7e7590.92273591', '12121000014', 'SBIN000125', ' Kota');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `Date1` varchar(50) NOT NULL,
  `seller_id` int(100) NOT NULL,
  `pro_id` int(100) NOT NULL,
  `p_image` text NOT NULL,
  `product_name` text NOT NULL,
  `color` text NOT NULL,
  `size` varchar(150) NOT NULL,
  `qty` int(100) NOT NULL,
  `main_p` int(150) NOT NULL,
  `trx_id` varchar(200) NOT NULL,
  `p_status` text NOT NULL,
  `pay_type` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `Date1`, `seller_id`, `pro_id`, `p_image`, `product_name`, `color`, `size`, `qty`, `main_p`, `trx_id`, `p_status`, `pay_type`, `username`, `mobile`, `address`) VALUES
(2, 1, '16/01/19', 8, 23, '31.jpg', 'Apple Laptop', ' default', 'default', 1, 12000, 'FTS5c3a21f6687c77.65711109', 'return product', 'COD', 'rajesh', ' 9148002717', 'BTI road shanti nagar \nBHIND (MP)-477001'),
(4, 1, '17/01/19', 4, 12, '27.jpg', 'Apple Laptop', ' default', 'default', 1, 135000, 'FTS5c3c822b0a0112.37762518', 'return product', 'COD', 'rajesh', ' 9148002717', 'BTI road shanti nagar \nBHIND (MP)-477001'),
(5, 1, '16/01/19', 6, 10, '15.jpg', 'man wear', ' default', 'default', 1, 1200, 'FTS5c3ebbdab74091.74096455', 'order cancle', 'COD', 'rajesh', ' 9148002717', 'BTI road shanti nagar \nBHIND (MP)-477001'),
(6, 1, '16/01/19', 4, 9, 'sh1.jpg', 'sport shoes', ' default', 'default', 1, 1200, 'FTS5c3ebcdf322341.38233841', 'return product', 'COD', 'rajesh', ' 9148002717', 'BTI road shanti nagar \nBHIND (MP)-477001'),
(8, 1, '17/01/19', 4, 3, '40.jpg', 'Samsung galaxy x6', ' default', 'default', 1, 23750, 'FTS5c40ee08474454.70474328', 'order cancle', 'COD', 'rajesh', ' 9148002717', 'BTI road shanti nagar \nBHIND (MP)-477001'),
(9, 1, '21/02/19', 4, 17, '41.jpg', 'iron', ' default', 'default', 1, 430, 'FTS5c45db367f2760.46503976', 'order cancle', 'COD', 'rajesh', ' 9148002717', 'BTI road shanti nagar \nBHIND (MP)-477001'),
(10, 1, '02/03/19', 4, 2, '8.jpg', 'home mart', ' default', 'default', 1, 18900, 'FTS5c6e2ae1749a82.99008267', 'Successfully delevered', 'COD', 'rajesh', ' 9148002717', 'BTI road shanti nagar \nBHIND (MP)-477001'),
(11, 1, '03/03/19', 4, 21, 'book.jpg', 'books', ' default', 'default', 1, 245, 'FTS5c7a2ee42cf335.32298053', 'Successfully delevered', 'COD', 'rajesh', ' 9148002717', 'BTI road shanti nagar \nBHIND (MP)-477001'),
(12, 1, '03/03/19', 4, 15, 'rasmalai.jpg', 'rasmali', ' default', 'default', 1, 200, 'FTS5c7b636f08d0e0.40461612', 'Successfully delevered', 'COD', 'rajesh', ' 9148002717', 'BTI road shanti nagar \nBHIND (MP)-477001'),
(13, 1, '03/04/19', 4, 13, '11.jpg', 'washing machine', ' default', 'default', 1, 12000, 'FTS5ca499db6d0f17.25929753', 'Ready to delivery', 'COD', 'rajesh', ' 9148002717', 'BTI road shanti nagar \nBHIND (MP)-477001'),
(14, 4, '03/04/19', 4, 25, '50.png', 'VIVO  v11pro', ' default', 'default', 1, 23750, 'FTS5ca49b62907cd0.52889937', 'On the way', 'COD', 'mannu', ' 9148002717', 'dbit\ndbit'),
(15, 5, '17/07/19', 4, 25, '50.png', 'VIVO  v11pro', ' default', 'default', 1, 23750, 'FTS5ce7f260808f47.10850155', 'order cancle', 'COD', 'rajesh', ' 9148002717', 'Madhya Pradesh\nGwalior'),
(16, 5, '17/07/19', 4, 12, '27.jpg', 'Apple Laptop', ' default', 'default', 1, 135000, 'FTS5d29a1445f90d7.81405473', 'order cancle', 'COD', 'rajesh', ' 9148002717', 'Madhya Pradesh\nGwalior'),
(17, 5, '29/09/19', 4, 3, '40.jpg', 'Samsung galaxy x6', ' default', 'default', 1, 23750, 'FTS5d3037c6e265e6.95010491', 'order cancle', 'COD', 'rajesh', ' 9148002717', 'Madhya Pradesh\nGwalior'),
(18, 5, '20/10/19', 4, 5, 'icon1.png', 'milk', ' default', 'default', 1, 22, 'FTS5d90cf10ad8f09.26722469', 'order cancle', 'COD', 'rajesh', ' 9148002717', 'Madhya Pradesh\nGwalior'),
(19, 5, '20/10/19', 4, 14, 'gulam.jpg', 'gulab', ' default', 'default', 1, 475, 'FTS5d9194c7290719.71012781', 'order cancle', 'COD', 'rajesh', ' 9148002717', 'Madhya Pradesh\nGwalior'),
(20, 5, '02/11/19', 8, 23, '31.jpg', 'Apple Laptop', ' default', 'default', 1, 12000, 'FTS5dbd8840dd58b2.16290900', 'On the way', 'COD', 'rajesh', ' 9148002717', 'Madhya Pradesh\nGwalior');

-- --------------------------------------------------------

--
-- Table structure for table `order_p`
--

CREATE TABLE `order_p` (
  `id` int(100) NOT NULL,
  `pro_id` int(200) NOT NULL,
  `user_id` int(200) NOT NULL,
  `seller_id` int(200) NOT NULL,
  `product_name` text NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `offer` int(100) NOT NULL,
  `p_image` text NOT NULL,
  `size` varchar(200) NOT NULL,
  `color` text NOT NULL,
  `main_p` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_p`
--

INSERT INTO `order_p` (`id`, `pro_id`, `user_id`, `seller_id`, `product_name`, `qty`, `price`, `offer`, `p_image`, `size`, `color`, `main_p`) VALUES
(1, 3, 1, 4, 'Samsung galaxy x6', 1, 25000, 5, '40.jpg', 'default', 'default', 23750),
(2, 3, 6, 4, 'Samsung galaxy x6', 1, 25000, 5, '40.jpg', 'default', 'default', 23750),
(3, 25, 5, 4, 'VIVO  v11pro', 1, 25000, 5, '50.png', 'default', 'default', 23750),
(4, 12, 5, 4, 'Apple Laptop', 1, 150000, 10, '27.jpg', 'default', 'default', 135000),
(5, 3, 5, 4, 'Samsung galaxy x6', 1, 25000, 5, '40.jpg', 'default', 'default', 23750);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(100) NOT NULL,
  `seller_id` int(100) NOT NULL,
  `pcategory` varchar(200) NOT NULL,
  `pbrand` varchar(200) NOT NULL,
  `product_name` text NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(250) NOT NULL,
  `offer` int(100) NOT NULL,
  `p_image` text NOT NULL,
  `p1` text NOT NULL,
  `p2` text NOT NULL,
  `p3` text NOT NULL,
  `p4` text NOT NULL,
  `p5` text NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `seller_id`, `pcategory`, `pbrand`, `product_name`, `qty`, `price`, `offer`, `p_image`, `p1`, `p2`, `p3`, `p4`, `p5`, `descr`) VALUES
(2, 4, 'Home_mart', 'Other', 'home mart', 18, 20000, 10, '8.jpg', '9.jpg', '9.jpg', '6.jpg', '', '', 'this is good'),
(3, 4, 'Mobiles', 'Samsung', 'Samsung galaxy x6', 62, 25000, 5, '40.jpg', '29.jpg', '28.jpg', 'image-8.jpeg', '', '', 'this is good product for you'),
(5, 4, 'Milk_products', 'Other', 'milk', 19, 23, 2, 'icon1.png', '', '', '', '', '', 'this is good milk product'),
(8, 4, 'Clothes', 'Other', 'ldies wear', 35, 500, 10, '4.jpg', '18.jpg', '17.jpg', '', '', '', 'this is good ladies wear'),
(9, 4, 'Shoes', 'Other', 'sport shoes', 17, 1500, 20, 'sh1.jpg', 'sh1.jpg', '', '', '', '', 'this is good sport shoes for a sport man'),
(10, 6, 'Clothes', 'Other', 'man wear', 84, 1500, 20, '15.jpg', '3.jpg', '', '', '', '', 'this is good cloth for a office man'),
(11, 4, 'Fast_food', 'Other', 'noodle', 44, 50, 2, 'icon.jpg', '', '', '', '', '', 'this is good'),
(12, 4, 'Laptops', 'Other', 'Apple Laptop', 16, 150000, 10, '27.jpg', '', '', '', '', '', 'this is good product '),
(13, 4, 'Electronics & Electrical', 'Whirlpool', 'washing machine', 48, 15000, 20, '11.jpg', '', '', '', '', '', 'whirlpool washing machine .it is good in service'),
(14, 4, 'Sweets', 'Other', 'gulab', 12, 500, 5, 'gulam.jpg', '', '', '', '', '', 'this sweet is good'),
(15, 4, 'Sweets', 'Other', 'rasmali', 29, 250, 20, 'rasmalai.jpg', '', '', '', '', '', 'this is sweet is good'),
(16, 4, 'Fashion', 'Sony', 'watch', 26, 2500, 20, 'watch.jpg', '', '', '', '', '', 'this is a ladies watch'),
(17, 4, 'Electronics & Electrical', 'Whirlpool', 'iron', 22, 500, 14, '41.jpg', '', '', '', '', '', 'this is a good iron '),
(18, 4, 'Fast_food', 'Other', 'fast food', 57, 250, 25, 'images.jpg', '', '', '', '', '', 'this is to tasty fast food'),
(19, 4, 'Sports', 'Other', 'sport kit', 11, 25000, 20, 'kit.jpg', '', '', '', '', '', 'this is a good sport kit '),
(20, 4, 'Sweets', 'Other', 'milk chocolate', 47, 250, 15, 'ensure-high-protein-milk-chocolate-shake.jpg', '', '', '', '', '', 'this is good for health and mind'),
(21, 4, 'Books', 'Other', 'books', 28, 250, 2, 'book.jpg', '', '', '', '', '', 'this is good book'),
(22, 4, 'Ladies_fas', 'Other', 'Ladies Make Up kit', 9, 1230, 12, 'makeup.jpg', '', '', '', '', '', 'this is a good for ladies'),
(23, 8, 'Laptops', 'Other', 'Apple Laptop', 18, 15000, 20, '31.jpg', '', '', '', '', '', 'this product is good'),
(25, 4, 'Mobiles', 'Vivo', 'VIVO  v11pro', 7, 25000, 5, '50.png', '1. display is 5 inch and 1080 hd resulation', '2. Processor : intel CORE i3 (with grafic card 3 GB)', '3. operating system : Androide', '4. battery : 5000 Mah (six houres countinously one time charge)', '5. Ram : 6 GB and Rom : 64GB', 'This is full screen new generation mobile .'),
(26, 10, 'Ladies_fas', 'Other', 'Ladies makeup kit like a hand bag', 20, 450, 12, 'makeup.jpg', '1. display is 5 inch and 1080 hd resulation', '2. Processor : intel CORE i3 (with grafic card 3 GB)', '3. color : black (othe color is available same product)', '4. battery : 5000 Mah (six houres countinously one time charge)', '5. Ram : 6 GB and Rom : 64GB', 'This is full screen new generation mobile .');

-- --------------------------------------------------------

--
-- Table structure for table `seller_info`
--

CREATE TABLE `seller_info` (
  `seller_id` int(11) NOT NULL,
  `seller_name` varchar(100) NOT NULL,
  `store_name` varchar(200) NOT NULL,
  `email` text NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `b_account` varchar(250) NOT NULL,
  `ifsc` varchar(200) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `password` text NOT NULL,
  `refrence_id` varchar(200) NOT NULL,
  `GST` varchar(200) NOT NULL,
  `seller_type` text NOT NULL,
  `total_amt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_info`
--

INSERT INTO `seller_info` (`seller_id`, `seller_name`, `store_name`, `email`, `mobile`, `b_account`, `ifsc`, `address1`, `address2`, `password`, `refrence_id`, `GST`, `seller_type`, `total_amt`) VALUES
(4, 'rajesh', 'jai shree krishna store', 'rajeshrathore05011998@gmail.com', '9148002717', '12121212121212', 'IFSC000SBI0', 'dbit hostel', 'kumbalgodu', 'e360bc13bcba071f4746adbb334cd78e', '', '', '', '47854'),
(6, 'shubham', 'jai mahakal', 'shubham@gmail.com', '9148002717', '1313131313', 'IFSCCODE00', 'dbit hostel', 'kumbalgodu', '3b6beb51e76816e632a40d440eab0097', '', '', '', ''),
(7, 'Rajesh', 'Fashion Store', 'raj@gmail.com', '9148002112', '121212120202', '020201', 'bti road shanti nagar', 'bhind MP', 'e360bc13bcba071f4746adbb334cd78e', 'FTS@123', '', '', ''),
(8, 'Pradeep', 'jai shree krishna store', 'pradeep@gmail.com', '9148002715', '1212122', '12121', 'Mahavir nagar', 'gwalior MP', 'e360bc13bcba071f4746adbb334cd78e', 'FTS5c1ff3e3d88616.37796126', '', '', '10000'),
(9, 'Radhamohan shakya', 'New Fashion shop', 'radhamohan123@gmail.com', '9141412125', '121241414110001', 'SBIN000147', 'BTI ROAD SHANTI NAGAR BHIND', 'BHIND MADHYA PRADESH 477001', '9960a2a00b71927ee8419a79051e000e', 'FTS5c123:wwga3121.n3', '', '', ''),
(10, 'Neetu ', 'Ladies Fashion Shop', 'nsr@gmail.com', '8878871171', '100000146820', 'ICICI0IN147', 'Rathore dharm kanta Murena road', 'Gwalior MP (450012)', '2de2f82cbd741213e7189c08e62c9f9b', 'FTS5c1ff3e3d88616.37796126', '143gst12147', 'Ladies_fas', '25000');

-- --------------------------------------------------------

--
-- Table structure for table `sell_product`
--

CREATE TABLE `sell_product` (
  `id` int(100) NOT NULL,
  `pro_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `seller_id` int(100) NOT NULL,
  `gm_id` int(50) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `g_name` text NOT NULL,
  `qty` int(100) NOT NULL,
  `Date1` varchar(200) NOT NULL,
  `total_amt` int(200) NOT NULL,
  `pay_type` varchar(100) NOT NULL,
  `p_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sell_product`
--

INSERT INTO `sell_product` (`id`, `pro_id`, `user_id`, `seller_id`, `gm_id`, `product_name`, `g_name`, `qty`, `Date1`, `total_amt`, `pay_type`, `p_status`) VALUES
(1, 9, 1, 4, 0, 'sport shoes', 'null', 1, '12', 1200, 'COD', 'Successfully delevered'),
(2, 17, 1, 4, 0, 'iron', 'null', 1, '12', 430, 'COD', 'Successfully delevered'),
(3, 23, 1, 8, 2, 'Apple Laptop', 'Rajeev Kumar', 1, '12', 12000, 'COD', 'Successfully delevered'),
(4, 16, 1, 4, 0, 'watch', 'null', 1, '13', 2000, 'COD', 'Successfully delevered'),
(5, 11, 1, 4, 0, 'noodle', 'null', 1, '14', 49, 'COD', 'Successfully delevered'),
(7, 14, 1, 4, 0, 'gulab', 'null', 1, '14/01/19', 475, 'COD', 'Successfully delevered'),
(8, 2, 1, 4, 0, 'home mart', 'null', 1, '12/01/19', 21850, 'COD', 'Successfully delevered'),
(9, 2, 1, 4, 0, 'home mart', 'null', 1, '12/01/19', 21850, 'COD', 'Successfully delevered');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `password` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `username`, `email`, `mobile`, `address1`, `address2`, `password`, `city`) VALUES
(1, 'rajesh', 'rajeshrathore05011998@gmail.com', '9148002717', 'BTI road shanti nagar ', 'BHIND (MP)-477001', '8d959ed6e0109c03635b45921f9b17d9', ''),
(2, 'rajeev kumar', 'rk9057330@gmail.com', '9608472710', 'dbit hostel', 'kumbalgodu', 'e360bc13bcba071f4746adbb334cd78e', ''),
(3, 'Sapna Rathore', 'sapna@gmail.com', '9911923523', 'I-53 welcome ', 'seelampur delhi 110053', '907175e69298b3b6ce23e929159a7728', ''),
(4, 'mannu', 'mannu@123gmali.com', '9148002717', 'dbit', 'dbit', '3b53fb24e3a35944fe9c2bc6cac1773b', ''),
(5, 'rajesh', 'rajeshrathore05011998@gmail.com', '9148002717', 'Madhya Pradesh', 'Gwalior', 'e360bc13bcba071f4746adbb334cd78e', ''),
(6, 'Munish', 'gairola.munish@gmail.com', '9953559513', 'dsad', 'dasds', 'ceb6c970658f31504a901b89dcd3e461', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `gm_info`
--
ALTER TABLE `gm_info`
  ADD PRIMARY KEY (`gm_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_p`
--
ALTER TABLE `order_p`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `seller_info`
--
ALTER TABLE `seller_info`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `sell_product`
--
ALTER TABLE `sell_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gm_info`
--
ALTER TABLE `gm_info`
  MODIFY `gm_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order_p`
--
ALTER TABLE `order_p`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `seller_info`
--
ALTER TABLE `seller_info`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sell_product`
--
ALTER TABLE `sell_product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
