-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 10:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `audhunik_krishi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `agriculturetools`
--

CREATE TABLE `agriculturetools` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agriculturetools`
--

INSERT INTO `agriculturetools` (`id`, `name`, `type`, `brand`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(20, 'fgh', 'Garden Tools', 'gffdg', 54524.00, 'gfhjfj', 'uploads/5645-1622012611.jpg', '2023-09-04 20:06:55', '2023-09-04 20:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `disease_db`
--

CREATE TABLE `disease_db` (
  `id` int(11) NOT NULL,
  `disease_type` varchar(100) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `diagnosis_result` varchar(255) NOT NULL,
  `diagnosis_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `disease_db`
--

INSERT INTO `disease_db` (`id`, `disease_type`, `image_path`, `diagnosis_result`, `diagnosis_date`, `customer_id`) VALUES
(32, 'plant', 'C:/xampp/htdocs/Audhunik_Krishi/adminpanal/uploads/radhe radhe.png', 'radhe radhe radhe radhe', '2023-09-04 17:11:28', 15),
(33, 'plant', 'C:/xampp/htdocs/Audhunik_Krishi/adminpanal/uploads/images.jpg', 'radha radha rdaha radha', '2023-09-04 17:20:25', 15),
(34, 'fish', 'C:/xampp/htdocs/Audhunik_Krishi/adminpanal/uploads/5645-1622012611.jpg', '', '2023-09-04 17:21:14', 15),
(35, 'animal', 'C:/xampp/htdocs/Audhunik_Krishi/adminpanal/uploads/anthracnose-1.webp', '', '2023-09-04 17:41:02', 15),
(36, 'plant', 'C:/xampp/htdocs/Audhunik_Krishi/adminpanal/uploads/anthracnose-1.webp', '', '2023-09-04 20:19:53', 15);

-- --------------------------------------------------------

--
-- Table structure for table `experts_db`
--

CREATE TABLE `experts_db` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `expertise` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experts_db`
--

INSERT INTO `experts_db` (`id`, `name`, `expertise`, `experience`, `location`, `image`) VALUES
(3, 'Michael Johnson', 'Agriculture Expert', '10+ years', 'Biratnagar, Nepal', 'https://us.123rf.com/450wm/virtosmedia/virtosmedia2303/virtosmedia230311472/199667391-beautiful-young-woman-shopping-at-the-market-portrait-of-a-beautiful-young-woman.jpg?ver=6'),
(4, 'Emily Wilson', 'Horticulture Expert', '5-10 years', 'Lalitpur, Nepal', 'https://us.123rf.com/450wm/virtosmedia/virtosmedia2303/virtosmedia230311472/199667391-beautiful-young-woman-shopping-at-the-market-portrait-of-a-beautiful-young-woman.jpg?ver=6'),
(5, 'David Lee', 'Bee Expert', '1-5 years', 'Birgunj, Nepal', 'https://us.123rf.com/450wm/virtosmedia/virtosmedia2303/virtosmedia230311472/199667391-beautiful-young-woman-shopping-at-the-market-portrait-of-a-beautiful-young-woman.jpg?ver=6'),
(6, 'Sarah Miller', 'Agriculture Expert', '10+ years', 'Butwal, Nepal', 'https://us.123rf.com/450wm/virtosmedia/virtosmedia2303/virtosmedia230311472/199667391-beautiful-young-woman-shopping-at-the-market-portrait-of-a-beautiful-young-woman.jpg?ver=6'),
(7, 'Robert Davis', 'Fishery Expert', '5-10 years', 'Dharan, Nepal', 'https://us.123rf.com/450wm/virtosmedia/virtosmedia2303/virtosmedia230311472/199667391-beautiful-young-woman-shopping-at-the-market-portrait-of-a-beautiful-young-woman.jpg?ver=6'),
(8, 'Jennifer Anderson', 'Horticulture Expert', '1-5 years', 'Bharatpur, Nepal', 'https://us.123rf.com/450wm/virtosmedia/virtosmedia2303/virtosmedia230311472/199667391-beautiful-young-woman-shopping-at-the-market-portrait-of-a-beautiful-young-woman.jpg?ver=6'),
(9, 'Christopher Taylor', 'Agriculture Expert', '5-10 years', 'Nepalgunj, Nepal', 'https://us.123rf.com/450wm/virtosmedia/virtosmedia2303/virtosmedia230311472/199667391-beautiful-young-woman-shopping-at-the-market-portrait-of-a-beautiful-young-woman.jpg?ver=6'),
(10, 'Jessica Brown', 'Bee Expert', '10+ years', 'Janakpur, Nepal', 'https://us.123rf.com/450wm/virtosmedia/virtosmedia2303/virtosmedia230311472/199667391-beautiful-young-woman-shopping-at-the-market-portrait-of-a-beautiful-young-woman.jpg?ver=6'),
(12, 'ntc', 'agriculture', '12', 'kathmandu', '5645-1622012611.jpg'),
(13, 'userAdmin', 'agriculture', '12', 'kathmandu', 'img1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `order_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `product_id`, `quantity`, `order_date`, `order_status`) VALUES
(10, 15, 4, 1, '2023-09-04 22:20:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `register_db`
--

CREATE TABLE `register_db` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_db`
--

INSERT INTO `register_db` (`id`, `name`, `email`, `username`, `password`, `address`, `phone_number`) VALUES
(1, 'gf', 'gg', 'gg', '12345678', '', ''),
(2, 'lalit', 'lalitrajjoshi0@gmail.com', 'lrj', '12345678', '', ''),
(3, 'lalit', 'lalitrajjoshi0@gmail.com', 'lrj', '12345678', '', ''),
(4, 'bfh', 'fhfh', 'fhfh', 'ggggggggggggg', '', ''),
(5, 'bfh', 'fhfh', 'fhfh', 'ggggggggggggg', '', ''),
(6, 'bfh', 'fhfh', 'fhfh', 'ggggggggggggg', '', ''),
(7, 'sima', 'sima@gmail.com', 'sima', '12345678', '', ''),
(8, 'simapaudel', 'sima@gmail.com', 'ss', '12345678', '', ''),
(9, 'Ram', 'ram@gmail.com', 'ram', '12345678', '', ''),
(10, 'bhumi', 'bhumi@gmail.com', 'bhumi', '12345678', '', ''),
(11, 'bhumi', 'bhumi@gmail.com', 'bhumi', '12345678', '', ''),
(12, 'lalit', 'lalitrajjoshi0@gmail.com', 'lalit', '12345678', '', ''),
(13, 'admin', 'admin@gmail.com', 'admin', 'admin1234', '', ''),
(14, 'lalit', 'lalitrajjoshi0@gmail.com', 'lalitadmin', 'lalit9865', 'dhangadhi', '9865756580'),
(15, 'admin', 'admin4444@gmail.com', 'admin4444', 'admin4444', 'adminpur', '9865756580');

-- --------------------------------------------------------

--
-- Table structure for table `seeds_db`
--

CREATE TABLE `seeds_db` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `temperature` int(11) DEFAULT NULL,
  `soil_ph` float DEFAULT NULL,
  `humidity` int(11) DEFAULT NULL,
  `uv_index` int(11) DEFAULT NULL,
  `soil_type` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seeds_db`
--

INSERT INTO `seeds_db` (`id`, `name`, `description`, `location`, `temperature`, `soil_ph`, `humidity`, `uv_index`, `soil_type`, `price`, `brand`, `image`) VALUES
(4, 'Seed 4', 'Description of Seed 4', 'Location 4', 32, 6.2, 80, 7, 'Silt', 14.99, 'Brand 3', 'https://5.imimg.com/data5/ECOM/Default/2023/5/305579076/DM/MY/UF/33375621/don-250x250.jpg'),
(5, 'Seed 5', 'Description of Seed 5', 'Location 5', 27, 6.4, 70, 5, 'Loam', 11.99, 'Brand 2', 'https://5.imimg.com/data5/ECOM/Default/2023/5/305579076/DM/MY/UF/33375621/don-250x250.jpg'),
(6, 'Seed 6', 'Description of Seed 6', 'Location 6', 29, 7, 65, 6, 'Sand', 13.99, 'Brand 1', 'https://5.imimg.com/data5/ECOM/Default/2023/5/305579076/DM/MY/UF/33375621/don-250x250.jpg'),
(7, 'Seed 7', 'Description of Seed 7', 'Location 7', 26, 6.6, 75, 4, 'Clay', 12.99, 'Brand 3', 'https://5.imimg.com/data5/ECOM/Default/2023/5/305579076/DM/MY/UF/33375621/don-250x250.jpg'),
(8, 'Seed 8', 'Description of Seed 8', 'Location 8', 31, 6, 80, 7, 'Silt', 15.99, 'Brand 2', 'https://5.imimg.com/data5/ECOM/Default/2023/5/305579076/DM/MY/UF/33375621/don-250x250.jpg'),
(9, 'Seed 9', 'Description of Seed 9', 'Location 9', 24, 6.3, 70, 5, 'Loam', 11.99, 'Brand 1', 'https://5.imimg.com/data5/ECOM/Default/2023/5/305579076/DM/MY/UF/33375621/don-250x250.jpg'),
(10, 'Seed 10', 'Description of Seed 10', 'Location 10', 33, 7.5, 65, 6, 'Sand', 14.99, 'Brand 3', 'https://5.imimg.com/data5/ECOM/Default/2023/5/305579076/DM/MY/UF/33375621/don-250x250.jpg'),
(12, 'hjhj', 'jhgjhgj', 'jghjgh', 0, 0, 0, 0, 'fgnjf', 25254.00, 'jgyj', 'uploads/admit card.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seed_db`
--

CREATE TABLE `seed_db` (
  `id` int(11) NOT NULL,
  `seed_name` varchar(255) NOT NULL,
  `seed_type` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tool_orders`
--

CREATE TABLE `tool_orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `tool_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_status` enum('Processing','Shipped','Delivered','Cancelled') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tool_rentals`
--

CREATE TABLE `tool_rentals` (
  `id` int(11) NOT NULL,
  `tool_name` varchar(255) NOT NULL,
  `tool_type` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `rental_rate` decimal(10,2) NOT NULL,
  `contact_info` varchar(255) NOT NULL,
  `photo_path` varchar(255) NOT NULL,
  `verify_status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tool_rentals`
--

INSERT INTO `tool_rentals` (`id`, `tool_name`, `tool_type`, `description`, `rental_rate`, `contact_info`, `photo_path`, `verify_status`) VALUES
(1, 'Tractor', 'Agricultural Tool', 'Powerful tractor for various farm tasks.', 25.00, 'tractorowner@example.com', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/XTZ-243K.jpg/220px-XTZ-243K.jpg', 0),
(2, 'Shovel', 'Garden Tool', 'Sturdy shovel for gardening and landscaping.', 5.00, 'gardener@example.com', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/XTZ-243K.jpg/220px-XTZ-243K.jpg', 1),
(3, 'Combine Harvester', 'Harvesting Tool', 'Efficient combine harvester for crop harvesting.', 50.00, 'harvesterowner@example.com', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/XTZ-243K.jpg/220px-XTZ-243K.jpg', 1),
(4, 'Sprinkler System', 'Irrigation Tool', 'Automatic sprinkler system for efficient irrigation.', 15.00, 'irrigation@example.com', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/XTZ-243K.jpg/220px-XTZ-243K.jpg', 0),
(5, 'Hoe', 'Garden Tool', 'Traditional hoe for tilling and weeding.', 3.00, 'gardener@example.com', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/XTZ-243K.jpg/220px-XTZ-243K.jpg', 0),
(6, 'sds', 'irrigation', 'sdfsd', 100.00, '9898989898989', 'uploads/', 0),
(7, '', '', '', 0.00, '', 'uploads/', 0),
(8, '', '', '', 0.00, '', 'uploads/', 0),
(9, '', '', '', 0.00, '', 'uploads/', 0),
(10, '', '', '', 0.00, '', 'uploads/', 0),
(11, '', '', '', 0.00, '', 'uploads/', 0),
(12, '', '', '', 0.00, '', 'uploads/', 0),
(13, '', '', '', 0.00, '', '', 0),
(14, '', '', '', 0.00, '', 'uploads/', 0),
(15, '', '', '', 0.00, '', 'uploads/', 0),
(16, '', '', '', 0.00, '', 'uploads/', 0),
(17, '', '', '', 0.00, '', 'uploads/', 0),
(18, 'lalit', '', '', 0.00, '', 'uploads/', 0),
(19, 'lalit', '', '', 0.00, '', 'uploads/', 0),
(20, 'lalit', '', '', 0.00, '', 'uploads/', 0),
(21, 'lalit', '', '', 0.00, '', 'uploads/', 0),
(22, 'lalit', '', '', 0.00, '', 'uploads/', 0),
(23, 'dvvvvvvvvvvvvvv', '', '', 0.00, '', 'uploads/', 0),
(24, 'dvvvvvvvvvvvvvv', '', '', 0.00, '', 'uploads/', 0),
(25, 'dvvvvvvvvvvvvvv', '', '', 0.00, '', 'uploads/', 0),
(26, 'hello', 'garden', 'scs', 0.00, 'cz', 'uploads/', 0),
(27, 'ggggggg', 'agricultural', 'ggg', 0.00, '9898989898989', 'Audhunik_Krishiuploads/', 0),
(28, '', 'agricultural', '', 0.00, '', 'Audhunik_Krishi/uploads/', 0),
(29, '', 'agricultural', '', 0.00, '', 'uploads/6.PNG', 0),
(30, '', 'agricultural', '', 0.00, '', 'uploads/11.PNG', 0),
(31, 'kuto', 'agricultural', 'for godne ', 100.00, '98679854515', 'uploads/11.PNG', 0),
(32, 'kutalo', 'agricultural', 'hello', 1000.00, '54545645', 'uploads/adhunikkrishilogo.PNG', 0),
(33, 'sds', 'agricultural', 'cv', 0.00, 'vdcvd', 'uploads/', 0),
(34, 'lalit', 'agricultural', '1231', 11.00, '00000000000000000000', 'uploads/', 0),
(35, 'lalit', 'agricultural', '1231', 11.00, '00000000000000000000', 'uploads/', 0),
(36, 'lalit', 'agricultural', 'very good', 100.00, '9848', 'uploads/IOAASlogo_2022_03_30_11_09_25.png', 1),
(37, 'lalit', 'agricultural', 'very good', 100.00, '9848', 'uploads/IOAASlogo_2022_03_30_11_09_25.png', 0),
(38, 'lalit', 'agricultural', 'very good', 100.00, '9848', 'uploads/IOAASlogo_2022_03_30_11_09_25.png', 0),
(39, 'lalit', 'agricultural', 'very good', 100.00, '9848', 'uploads/IOAASlogo_2022_03_30_11_09_25.png', 0),
(40, 'lalit', 'agricultural', 'very good', 100.00, '9848', 'uploads/IOAASlogo_2022_03_30_11_09_25.png', 0),
(41, 'lalit', 'agricultural', 'very good', 100.00, '9848', 'uploads/IOAASlogo_2022_03_30_11_09_25.png', 0),
(42, 'lalit', 'agricultural', 'very good', 100.00, '9848', 'uploads/IOAASlogo_2022_03_30_11_09_25.png', 0),
(43, 'lalit', 'agricultural', 'very good', 100.00, '9848', 'uploads/IOAASlogo_2022_03_30_11_09_25.png', 0),
(44, 'lalit', 'agricultural', 'very good', 100.00, '9848', 'uploads/IOAASlogo_2022_03_30_11_09_25.png', 0),
(45, 'lalit', 'agricultural', 'very good', 100.00, '9848', 'uploads/IOAASlogo_2022_03_30_11_09_25.png', 0),
(46, 'lalit', 'agricultural', 'very good', 100.00, '9848', 'uploads/IOAASlogo_2022_03_30_11_09_25.png', 0),
(47, 'lalit', 'agricultural', 'very good', 100.00, '9848', 'uploads/IOAASlogo_2022_03_30_11_09_25.png', 0),
(48, 'lalit', 'agricultural', 'very good', 100.00, '9848', 'uploads/IOAASlogo_2022_03_30_11_09_25.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agriculturetools`
--
ALTER TABLE `agriculturetools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disease_db`
--
ALTER TABLE `disease_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experts_db`
--
ALTER TABLE `experts_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `register_db`
--
ALTER TABLE `register_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seeds_db`
--
ALTER TABLE `seeds_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seed_db`
--
ALTER TABLE `seed_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tool_orders`
--
ALTER TABLE `tool_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tool_rentals`
--
ALTER TABLE `tool_rentals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agriculturetools`
--
ALTER TABLE `agriculturetools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `disease_db`
--
ALTER TABLE `disease_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `experts_db`
--
ALTER TABLE `experts_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `register_db`
--
ALTER TABLE `register_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `seeds_db`
--
ALTER TABLE `seeds_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `seed_db`
--
ALTER TABLE `seed_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tool_orders`
--
ALTER TABLE `tool_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tool_rentals`
--
ALTER TABLE `tool_rentals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
