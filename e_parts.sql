-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 03, 2025 at 02:55 PM
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
-- Database: `e_parts`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer_receipt`
--

CREATE TABLE `buyer_receipt` (
  `id` int(11) NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_added` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `seller_type` varchar(255) NOT NULL,
  `noofItem` int(11) NOT NULL,
  `buyer` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `date_added` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `category_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_image`, `category_type`) VALUES
(1, 'automotive', 'assets/images/background/automotive.jpg', 'car part'),
(2, 'belts', 'assets/images/background/belts.jpg', 'car part'),
(3, 'bike parts', 'assets/images/background/bike.jpg', 'car part'),
(4, 'back parts', 'assets/images/background/backpacks.jpg', 'car part'),
(5, 'helmets', 'assets/images/background/helmets.jpg', 'car part'),
(6, 'tires', 'assets/images/background/tires.jpg', 'car part'),
(7, 'blender', 'assets/images/background/blender.jpg', 'electronic part'),
(8, 'air conditioner', 'assets/images/background/air-conditioner.jpg', 'electronic part'),
(9, 'coffee maker', 'assets/images/background/coffee-maker.webp', 'electronic part'),
(10, 'drill', 'assets/images/background/drill.webp', 'electronic part'),
(11, 'kettle', 'assets/images/background/kettle.jpg', 'electronic part'),
(12, 'game controller', 'assets/images/background/game-controller.jpeg', 'electronic part'),
(13, 'headphone jacks', 'assets/images/background/headphone-jack.webp', 'phone part'),
(14, 'cell phone batteries', 'assets/images/background/phone-battery.jpeg\r\n', 'phone part'),
(15, 'mobile cameras', 'assets/images/background/mobile-camera.webp\r\n', 'phone part'),
(16, 'phone screens', 'assets/images/background/phone-screen.jpg\r\n', 'phone part'),
(17, 'speaker', 'assets/images/background/phone-speaker.webp\r\n', 'phone part'),
(18, 'charging port', 'assets/images/background/charging-port.webp\r\n', 'phone part');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `tracking_no` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `noofitem` int(11) NOT NULL,
  `buyer` int(11) NOT NULL,
  `seller` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `shipping_address` text NOT NULL,
  `lga` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pin_code` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `terms` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `mykey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `mykey`) VALUES
(1, 'pk_test_7580449c6abedcd79dae9c1c08ff9058c6618351');

-- --------------------------------------------------------

--
-- Table structure for table `member_message`
--

CREATE TABLE `member_message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `compose` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `compose` text NOT NULL,
  `receiver_email` varchar(255) NOT NULL,
  `has_read` tinyint(11) NOT NULL,
  `is_sender_deleted` tinyint(11) NOT NULL,
  `is_receiver_deleted` tinyint(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `picx`
--

CREATE TABLE `picx` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `pictures` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `picx`
--

INSERT INTO `picx` (`id`, `sid`, `pictures`) VALUES
(1, 1, 'uploads/more/showroom1.png,uploads/more/showroom2.png,uploads/more/showroom3.png,uploads/more/showroom4.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `poster_id` int(11) NOT NULL,
  `poster_type` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_details` text NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_condition` varchar(255) NOT NULL,
  `product_location` varchar(11) NOT NULL,
  `product_address` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `quantity_sold` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `gift_picks` tinyint(11) NOT NULL,
  `sold` tinyint(11) NOT NULL,
  `product_views` int(11) NOT NULL,
  `product_likes` int(11) NOT NULL,
  `product_rating` int(11) NOT NULL,
  `product_discount` int(11) NOT NULL,
  `featured_product` tinyint(11) NOT NULL,
  `date_added` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `poster_id`, `poster_type`, `product_name`, `product_price`, `product_image`, `product_details`, `product_category`, `product_condition`, `product_location`, `product_address`, `product_color`, `quantity_sold`, `product_quantity`, `gift_picks`, `sold`, `product_views`, `product_likes`, `product_rating`, `product_discount`, `featured_product`, `date_added`) VALUES
(1, 1, 'vendor', 'charger', 3500, 'uploads/charger.jpg', 'A phone charger is a ubiquitous device found in nearly every household, workplace, and public space. It is essential for powering and recharging mobile devices, ensuring that smartphones, tablets, and other electronic gadgets remain operational. The charger serves as a bridge between the power source, typically a wall socket or power bank, and the phone’s internal battery. This simple yet vital tool facilitates the replenishment of the phone\'s energy, allowing users to continue utilizing their devices for calls, messages, media, gaming, and internet browsing.\n\nPhone chargers come in a variety of forms, with the most common being the wall charger, car charger, wireless charger, and portable power bank charger. Each type has its unique use case, but all serve the same fundamental purpose: delivering electrical energy to a device’s battery.', 'phone part', 'new', 'lagos', '24 iyalla street alausa, ikeja', '', 0, -5, 0, 0, 116, 0, 0, 0, 0, 'jan 5, 2025'),
(2, 1, 'vendor', 'chip', 1500, 'uploads/chip.jpg', 'lorem ipsum', 'electronic part', 'used', 'lagos', '24 iyalla street alausa, ikeja', '', 0, -5, 0, 0, 0, 0, 0, 0, 0, 'jan 5, 2025'),
(3, 1, 'vendor', 'bumper', 10200, 'uploads/bumper.jpg', 'lorem ipsum', 'car part', 'new', 'lagos', '24 iyalla street alausa, ikeja', '', 3, 0, 0, 0, 0, 0, 0, 0, 0, 'jan 5, 2025'),
(4, 1, 'vendor', 'car tyre', 10200, 'uploads/car-tyre.jpg', 'lorem ipsum', 'car part', 'new', 'lagos', '24 iyalla street alausa, ikeja', '', 3, 0, 0, 0, 1, 0, 0, 0, 0, 'jan 5, 2025'),
(5, 1, 'vendor', 'exhaust', 16000, 'uploads/exhaust.jpg', 'lorem ipsum', 'car part', 'used', 'lagos', '24 iyalla street alausa, ikeja', '', 3, 0, 0, 0, 3, 0, 0, 0, 1, 'jan 5, 2025'),
(6, 1, 'vendor', 'wheel light', 8000, 'uploads/wheel-light.jpg', 'lorem ipsum', 'car part', 'new', 'lagos', '24 iyalla street alausa, ikeja', '', 3, 0, 0, 0, 1, 0, 0, 0, 1, 'jan 5, 2025'),
(7, 1, 'vendor', 'headphones', 10200, 'uploads/headphones.jpg', 'lorem ipsum', 'phone part', 'new', 'lagos', '24 iyalla street alausa, ikeja', '0', 3, 0, 0, 0, 0, 0, 0, 0, 1, 'jan 5, 2025'),
(8, 1, 'vendor', 'speaker', 10200, 'uploads/speaker.jpg', 'lorem ipsum', 'electronic part', 'used', 'lagos', '24 iyalla street alausa, ikeja', '0', 3, 0, 0, 0, 2, 0, 0, 0, 0, 'jan 5, 2025'),
(9, 1, 'vendor', 'ear buds', 16000, 'uploads/airpods.jpg', 'lorem ipsum', 'phone part', 'new', 'lagos', '24 iyalla street alausa, ikeja', '0', 3, 0, 0, 0, 1, 0, 0, 0, 1, 'jan 5, 2025'),
(10, 1, 'vendor', 'head light', 8000, 'uploads/headlight.jpg', 'lorem ipsum', 'car part', 'new', 'lagos', '24 iyalla street alausa, ikeja', '0', 3, 0, 0, 0, 1, 0, 0, 0, 0, 'jan 5, 2025'),
(11, 1, 'vendor', 'lamp light', 8000, 'uploads/lamp-light.jpg', 'lorem ipsum', 'car part', 'used', 'lagos', '24 iyalla street alausa, ikeja', '0', 3, 0, 0, 0, 0, 0, 0, 0, 0, 'jan 5, 2025'),
(12, 1, 'vendor', 'tyre', 8000, 'uploads/tyre.jpg', 'lorem ipsum', 'car part', 'new', 'lagos', '24 iyalla street alausa, ikeja', '0', 3, 0, 0, 0, 28, 0, 0, 0, 1, 'jan 5, 2025'),
(13, 1, 'vendor', 'bulletin tyre', 8000, 'uploads/bulletin-tyre.jpg', 'lorem ipsum', 'car part', 'used', 'lagos', '24 iyalla street alausa, ikeja', '0', 3, 0, 0, 0, 6, 0, 0, 0, 0, 'jan 5, 2025');

-- --------------------------------------------------------

--
-- Table structure for table `seller_comment`
--

CREATE TABLE `seller_comment` (
  `id` int(11) NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller_comment`
--

INSERT INTO `seller_comment` (`id`, `sender_email`, `sender_name`, `comment`, `product_name`, `date`) VALUES
(1, 'ngnimitech@gmail.com', 'neeyo', 'nice', 'charger', 'jan 5, 2025');

-- --------------------------------------------------------

--
-- Table structure for table `user_notifications`
--

CREATE TABLE `user_notifications` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `pending` tinyint(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_location` varchar(255) NOT NULL,
  `lga` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_rating` varchar(255) NOT NULL,
  `verified` tinyint(11) NOT NULL,
  `vkey` varchar(255) NOT NULL,
  `reset_token` varchar(255) NOT NULL,
  `reset_token_expiry` varchar(255) NOT NULL,
  `date_added` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_name`, `user_email`, `user_password`, `user_type`, `user_image`, `user_phone`, `user_location`, `lga`, `user_address`, `user_rating`, `verified`, `vkey`, `reset_token`, `reset_token_expiry`, `date_added`) VALUES
(1, 'Neeyo', 'ngnimitech@gmail.com', '$2y$10$HGiVDPgxxDNG.l49vYKXBe8ZLHEbVC.lk0VTmsn3ey9DQt42JMfcW', 'Vendor', 'uploads/neeyo.png', '09074456453', 'Lagos', '', 'iyalla street, Ikeja Alausa', '0', 1, 'a5ec3ee7fd2cab423930471f709ed1a5', '9489a247b2fff01dde8dd4e915d4f5397ac9d1ec8ebd76aa98daad04da658242', '2025-01-31 20:30:44', '2025-01-31 16:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `verify_seller`
--

CREATE TABLE `verify_seller` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `valid_id` int(11) NOT NULL,
  `verified` tinyint(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer_receipt`
--
ALTER TABLE `buyer_receipt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_message`
--
ALTER TABLE `member_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picx`
--
ALTER TABLE `picx`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `seller_comment`
--
ALTER TABLE `seller_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_notifications`
--
ALTER TABLE `user_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verify_seller`
--
ALTER TABLE `verify_seller`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer_receipt`
--
ALTER TABLE `buyer_receipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_message`
--
ALTER TABLE `member_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `picx`
--
ALTER TABLE `picx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `seller_comment`
--
ALTER TABLE `seller_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_notifications`
--
ALTER TABLE `user_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `verify_seller`
--
ALTER TABLE `verify_seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
