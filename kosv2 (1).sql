-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2015 at 06:36 PM
-- Server version: 5.6.24-0ubuntu2
-- PHP Version: 5.6.4-4ubuntu6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kosv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `kosv2_appconfigs`
--

CREATE TABLE IF NOT EXISTS `kosv2_appconfigs` (
`config_id` int(11) NOT NULL,
  `config_name` varchar(255) NOT NULL,
  `config_value` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kosv2_appconfigs`
--

INSERT INTO `kosv2_appconfigs` (`config_id`, `config_name`, `config_value`) VALUES
(1, 'item_per_page', '50'),
(2, 'shop_name', 'សេវា​កម្ម​ខ្មែរ'),
(3, 'shop_address', 'រាជធានី ភ្នំពេញ'),
(4, 'shop_contact', '070 730 067, 089 478 368');

-- --------------------------------------------------------

--
-- Table structure for table `kosv2_category`
--

CREATE TABLE IF NOT EXISTS `kosv2_category` (
`category_id` int(11) NOT NULL,
  `category_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kosv2_category`
--

INSERT INTO `kosv2_category` (`category_id`, `category_name`) VALUES
(1, 'ស្រាបៀរ'),
(2, 'ទឹកក្រូច'),
(3, 'នំ​កញ្ចប់'),
(4, 'នំធុង'),
(5, 'ទឹក​ផ្លែឈើ');

-- --------------------------------------------------------

--
-- Table structure for table `kosv2_customer`
--

CREATE TABLE IF NOT EXISTS `kosv2_customer` (
`customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `customer_company` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `customer_address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `customer_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `customer_note` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kosv2_customer`
--

INSERT INTO `kosv2_customer` (`customer_id`, `customer_name`, `customer_company`, `customer_address`, `customer_phone`, `customer_email`, `customer_note`) VALUES
(1, 'សូន វណ្ណា', 'កម្ពុជាវណ្ណះ', 'ភ្នំពេញ', '070 700 700', 'test@gmail.com', 'test'),
(2, 'ចប ចល្លា', 'កម្ពុជាឡាយ', 'បាត់ដំបង', '010 808 808', 'chola@gmail.com', 'so');

-- --------------------------------------------------------

--
-- Table structure for table `kosv2_item`
--

CREATE TABLE IF NOT EXISTS `kosv2_item` (
`item_id` int(11) NOT NULL,
  `item_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `item_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `item_cost` decimal(10,2) NOT NULL,
  `item_price` decimal(10,2) NOT NULL,
  `item_qty` int(11) NOT NULL,
  `item_reorder` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `item_note` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kosv2_item`
--

INSERT INTO `kosv2_item` (`item_id`, `item_code`, `item_name`, `category_id`, `supplier_id`, `item_cost`, `item_price`, `item_qty`, `item_reorder`, `unit_id`, `item_note`) VALUES
(1, 'IT000001', 'លីអូ-កំប៉ុង', 1, 2, 0.50, 0.60, 100, 6, 1, 'អូ!!'),
(2, 'IT000002', '7up-កំប៉ុង', 2, 1, 10.00, 12.00, 100, 10, 1, 'សាក\n');

-- --------------------------------------------------------

--
-- Table structure for table `kosv2_module`
--

CREATE TABLE IF NOT EXISTS `kosv2_module` (
`module_id` int(11) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `module_lang` varchar(255) NOT NULL,
  `module_icon` varchar(100) NOT NULL,
  `sort` int(11) NOT NULL,
  `active` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kosv2_module`
--

INSERT INTO `kosv2_module` (`module_id`, `module_name`, `module_lang`, `module_icon`, `sort`, `active`) VALUES
(1, 'customers', 'customer', 'icon-briefcase', 2, 1),
(2, 'suppliers', 'supplier', ' icon-download-alt', 5, 1),
(3, 'employees', 'employee', ' icon-user', 8, 1),
(4, 'giftcards', 'giftcard', 'icon-file', 9, 0),
(5, 'items', 'item', 'icon-barcode', 0, 1),
(6, 'item_kits', 'item_kit', ' icon-inbox', 1, 0),
(7, 'reports', 'report', 'icon-book', 10, 0),
(8, 'sales', 'sale', 'icon-shopping-cart', 6, 1),
(9, 'purchases', 'purchase', 'icon-circle-arrow-down', 7, 0),
(10, 'settings', 'setting', 'icon-wrench', 11, 1),
(11, 'categories', 'category', 'icon-tasks', 3, 1),
(12, 'units', 'unit', 'icon-tint', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kosv2_permission`
--

CREATE TABLE IF NOT EXISTS `kosv2_permission` (
  `module_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kosv2_sale`
--

CREATE TABLE IF NOT EXISTS `kosv2_sale` (
`sale_id` int(11) NOT NULL,
  `sale_no` varchar(255) NOT NULL,
  `sale_times` datetime NOT NULL,
  `is_credit` int(3) NOT NULL,
  `is_delivery` int(11) NOT NULL,
  `delivery_amount` decimal(18,2) NOT NULL,
  `uid` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `sale_type` varchar(100) NOT NULL,
  `suspended` tinyint(2) NOT NULL,
  `sale_discount` decimal(10,2) NOT NULL,
  `sale_comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `payment_get_d` decimal(10,2) NOT NULL,
  `payment_get_r` int(11) NOT NULL,
  `payment_return` decimal(10,2) NOT NULL,
  `show_comment_on_receipt` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kosv2_sale_items`
--

CREATE TABLE IF NOT EXISTS `kosv2_sale_items` (
  `sale_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `sale_item_cost` decimal(10,2) NOT NULL,
  `sale_item_price` decimal(10,2) NOT NULL,
  `sale_item_qty` int(11) NOT NULL,
  `sale_item_discount` decimal(10,2) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kosv2_sessions`
--

CREATE TABLE IF NOT EXISTS `kosv2_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kosv2_sessions`
--

INSERT INTO `kosv2_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('62c8f3e517368974712492895021fbe6', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/41.0.2272.76 Chrome/41.0.2272.76 ', 1432015283, 'a:5:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"2";s:8:"username";s:19:"សេង សាន";s:4:"lang";s:5:"khmer";s:7:"item_id";s:1:"1";}'),
('6f579127f7aab7adc6d22256c8fadd7c', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/41.0.2272.76 Chrome/41.0.2272.76 ', 1432105857, 'a:4:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"2";s:8:"username";s:19:"សេង សាន";s:4:"lang";s:5:"khmer";}');

-- --------------------------------------------------------

--
-- Table structure for table `kosv2_supplier`
--

CREATE TABLE IF NOT EXISTS `kosv2_supplier` (
`supplier_id` int(11) NOT NULL,
  `supplier_contact` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `supplier_company` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `supplier_address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `supplier_phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `supplier_email` varchar(255) DEFAULT NULL,
  `supplier_note` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kosv2_supplier`
--

INSERT INTO `kosv2_supplier` (`supplier_id`, `supplier_contact`, `supplier_company`, `supplier_address`, `supplier_phone`, `supplier_email`, `supplier_note`) VALUES
(1, 'ចន ចរិយា', 'Khmer Blue Berry', 'ផ្លូវ២៧១ ភ្នំពេញ', '012 456 789', 'chakriya@gmail.com', 'Test1'),
(2, 'វង្ស សង្ហា', 'Blue Caritas', 'ផ្លូវនរោត្តម ភ្នំពេញ', '070 756 954', 'songha@gmail.com', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `kosv2_unit`
--

CREATE TABLE IF NOT EXISTS `kosv2_unit` (
`unit_id` int(11) NOT NULL,
  `unit_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kosv2_unit`
--

INSERT INTO `kosv2_unit` (`unit_id`, `unit_name`) VALUES
(1, 'កំប៉ុង'),
(2, 'ដប'),
(3, 'ធុង'),
(4, 'កេស'),
(5, 'ប្រអប់'),
(6, 'កន្លះ​កេស'),
(7, 'កន្លះ​ប្រអប់');

-- --------------------------------------------------------

--
-- Table structure for table `kosv2_user`
--

CREATE TABLE IF NOT EXISTS `kosv2_user` (
`uid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(255) NOT NULL,
  `note` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kosv2_user`
--

INSERT INTO `kosv2_user` (`uid`, `username`, `password`, `name`, `phone`, `email`, `address`, `lang`, `note`) VALUES
(1, 'admin', '439a6de57d475c1a0ba9bcb1c39f0af6', 'សេង សុភ័ក្ត្រ', '070730067', 'sopheaks60@gmail.com', 'Phnom Penh', 'khmer', 'Test'),
(2, 'sopheak', '439a6de57d475c1a0ba9bcb1c39f0af6', 'សេង សាន', '089 478 368', 'sopheaks60@gmail.com', '', 'khmer', ''),
(4, 'vichka', 'pointofsale', 'គង់ ច័ន្ទវិច្ឆិកា', '010 545 968', '0', 'Phnom Penh', 'khmer', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kosv2_appconfigs`
--
ALTER TABLE `kosv2_appconfigs`
 ADD PRIMARY KEY (`config_id`);

--
-- Indexes for table `kosv2_category`
--
ALTER TABLE `kosv2_category`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `kosv2_customer`
--
ALTER TABLE `kosv2_customer`
 ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `kosv2_item`
--
ALTER TABLE `kosv2_item`
 ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `kosv2_module`
--
ALTER TABLE `kosv2_module`
 ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `kosv2_sale`
--
ALTER TABLE `kosv2_sale`
 ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `kosv2_sale_items`
--
ALTER TABLE `kosv2_sale_items`
 ADD UNIQUE KEY `sale_id` (`sale_id`), ADD UNIQUE KEY `item_id` (`item_id`);

--
-- Indexes for table `kosv2_sessions`
--
ALTER TABLE `kosv2_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `kosv2_supplier`
--
ALTER TABLE `kosv2_supplier`
 ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `kosv2_unit`
--
ALTER TABLE `kosv2_unit`
 ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `kosv2_user`
--
ALTER TABLE `kosv2_user`
 ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kosv2_appconfigs`
--
ALTER TABLE `kosv2_appconfigs`
MODIFY `config_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kosv2_category`
--
ALTER TABLE `kosv2_category`
MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kosv2_customer`
--
ALTER TABLE `kosv2_customer`
MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kosv2_item`
--
ALTER TABLE `kosv2_item`
MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kosv2_module`
--
ALTER TABLE `kosv2_module`
MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kosv2_sale`
--
ALTER TABLE `kosv2_sale`
MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kosv2_supplier`
--
ALTER TABLE `kosv2_supplier`
MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kosv2_unit`
--
ALTER TABLE `kosv2_unit`
MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kosv2_user`
--
ALTER TABLE `kosv2_user`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kosv2_sale_items`
--
ALTER TABLE `kosv2_sale_items`
ADD CONSTRAINT `FK_ITEM_SALE_ITEM_ID` FOREIGN KEY (`item_id`) REFERENCES `kosv2_item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_SALE_ITEM_SALE_ID` FOREIGN KEY (`sale_id`) REFERENCES `kosv2_sale` (`sale_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
