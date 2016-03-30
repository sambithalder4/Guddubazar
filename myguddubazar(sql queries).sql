-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2016 at 11:01 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myguddubazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartdetails`
--

CREATE TABLE IF NOT EXISTS `cartdetails` (
  `ser_no` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  PRIMARY KEY (`ser_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `S.no` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(200) NOT NULL,
  `address` varchar(5000) NOT NULL,
  `phone_no` varchar(200) NOT NULL,
  `mobile_no` varchar(200) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  PRIMARY KEY (`S.no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `ser_no` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`ser_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ser_no`, `user_name`, `password`) VALUES
(1, 'sambit', '2345');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ser_no` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `pro_cat` varchar(200) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `features` varchar(200) NOT NULL,
  `plateform` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `display` varchar(200) NOT NULL,
  `waranty` varchar(200) NOT NULL,
  `shipping_time` varchar(300) NOT NULL,
  `price` varchar(100) NOT NULL,
  `offer_price` varchar(100) NOT NULL,
  `save` varchar(200) NOT NULL,
  `quantity` int(200) NOT NULL,
  `image1` varchar(200) NOT NULL,
  PRIMARY KEY (`ser_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1001 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ser_no`, `product_code`, `product_name`, `pro_cat`, `product_price`, `description`, `brand`, `category`, `features`, `plateform`, `model`, `type`, `display`, `waranty`, `shipping_time`, `price`, `offer_price`, `save`, `quantity`, `image1`) VALUES
(26, 'LAP01', 'Apple Macbook air', 'laptop', '60000', 'Apple laptop', 'Apple', 'laptop', 'core i7 processors', 'Apple', 'Apple', 'Laptop', '17 inch LED', '1 year warranty ', 'within 5-7 working days', '60000', '55000', '5000', 19, 'macbook.jpg'),
(2, 'MOB01', 'Samsung Galaxy Note 5', 'mobile', '25000', 'Sales Package Handset, USB Cable, Charger, Battery', 'Samsung', 'Galaxy Note ', 'Super AMOLED Display\r\n4GB RAM | 32GB ROM\r\n16MP | 5 MP Camera\r\nAndroid v5.1 OS ', 'Galaxy Note ', 'GalaxyN22j9', 'HD Mobile', 'Full HD', '1 year warranty ', 'within 15-20 working days', '25000', '24000', '1000', 30, 'galaxy_note_5.jpe'),
(4, 'MOB02', 'IPhone 6S', 'mobile', '49000', 'Sales Package Handset, USB Cable, Charger, Battery', 'Apple', 'mobile', 'iOS 9\r\n4.7 inch Touchscreen\r\n12 MP Primary Camera\r\n3D Touch & Live Photos', 'iOS 9', 'Internal Memory Capacity 32 GB', 'Apple', ' 17 inch Full HD', '1 year warranty ', 'within 15-20 working days', '49000', '48500', '500', 11, 'iphone_6s.jpe'),
(5, 'MOB03', 'Nokia Lumia', 'mobile', '15000', 'Sales Package Handset, USB Cable, Charger, Battery', 'Nokia', 'Lumia Series', 'Love Your Lumia\r\nSnap On Panel\r\nCandy Colors\r\nAccurate Buttons', 'Nokia', 'Lumia 520', 'smartphone', 'HD display with 1024*720 resolution', '2 years', 'within 15-20 working days', '15000', '14500', '500', 46, 'lumia_1.jpg'),
(6, 'MOB04', 'HTC Desire', 'mobile', '18000', 'Sales Package Handset, USB Cable, Charger, Battery', 'HTC', 'smartphone', '5 MP Secondary Camera\r\nAndroid v4.4 OS\r\nDual Sim (GSM + UMTS)\r\n8 MP Primary Camera', 'android lollipop v5.1', 'HTC Desire 620G', 'mobile', 'Full HD 1920*1080 resolution', '1 year warranty ', 'within 15-20 working days', '18000', '17500', '500', 32, 'htc_desire_620G.jpg'),
(7, 'CAM01', 'CANON Powershot', 'camera', '12000', 'CANON ', 'CANON ', 'CANON ', 'Effective Pixels - 20.3Megapixels\r\nOptical Zoom - 30\r\nCMOS Image Sensor\r\n3 inch LCD Screen', 'CANON ', 'CANON ', 'CANON ', '7 inch Full HD', '1 year warranty ', 'within 5-7 working days', '12000', '10500', '1500', 59, 'canon_powershot.jpe'),
(8, 'CAM02', 'CANON Ixus', 'camera', '15000', 'CANON', 'CANON', 'CANON', 'Effective Pixels - 20Megapixels\r\nOptical Zoom - 8\r\n2.7 inch LCD Screen\r\nWiFi Connected', 'CANON', 'CANON', 'LED ', '2.7 inch LED Display', '1 years', '20-25 dayd', '15000', '12000', '3000', 54, 'canon_ixus.jpe'),
(11, 'CAM03', 'SAMSUNG PLCam', 'camera', '14000', 'SAMSUNG', 'samsung', 'SAMSUNG', 'Effective Pixels - 14.2Megapixels\r\nOptical Zoom - 10\r\nCCD Image Sensor\r\n3 inch LCD Screen', 'SAMSUNG', 'SAMSUNG', 'LED ', '3 inch LCD Display', '1 year', 'within 10-15 days', '14000', '13700', '300', 42, 'camera3.png'),
(12, 'CAM04', 'NIKON D3200', 'camera', '16700', 'NIKON', 'NIKON', 'NIKON', 'Effective Pixels - 24.2 Megapixels\r\nSensor Type - CMOS\r\nwith 3 inch LCD\r\nWARRANTY', 'NIKON', 'NIKON', 'camera', '3 inch LCD Display', '2 year', 'within 20 days', '16700', '16000', '700', 25, 'camera4.png'),
(15, 'SNM1', 'SONYMUSIC1', 'music', '39000', 'SONYMUSIC', 'SONYMUSIC', 'SONYMUSIC', 'SONYMUSIC', 'SONYMUSIC', 'SONYMUSIC', 'Home Theater', 'Display Type LED', '1 year warranty ', 'within 15-20 working days', '39000', '35000', '4000', 46, 'music1.png'),
(16, 'SNM2', 'LGMUSIC2', 'music', '30000', 'LGMUSIC', 'LGMUSIC', 'LGMUSIC', 'LGMUSIC', 'LGMUSIC', 'LGMUSIC', 'LGMUSIC', 'LGMUSIC', '2 years', 'within 21 days', '30000', '28000', '2000', 50, 'music2.png'),
(17, 'SNM3', 'PANASONIC SNM3', 'music', '28000', 'PANASONIC ', 'PANASONIC ', 'PANASONIC ', 'PANASONIC ', 'PANASONIC ', 'PANASONIC ', 'Home Theater', 'PANASONIC ', '2 years', '20 days', '28000', '27000', '1000', 50, 'music3.png'),
(18, 'SNM4', 'SAMSUNGMUSIC4', 'music', '25000', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', '5 year', '15-20 days', '25000', '24000', '1000', 50, 'music4.png'),
(20, 'TAB01', 'MI Pad 2', 'tablet', '16000', 'Sales Package Handset, USB Cable, Charger, Battery', 'MI', 'MI', 'Processor A6X Quad Core', 'MI', 'MI', 'Tablet', 'Display Type HD', '5 years', '20 days', '16000', '14500', '1500', 50, 'mi_pad_2.jpg'),
(21, 'TAB02', 'Apple IPad', 'tablet', '20000', 'Handset,Battery,Charger,USB Cable', 'Apple', 'tablet', 'octa core processor', 'Apple', 'IPad', 'LED TV', 'Full HD', '1 year warranty ', 'within 15-20 working days', '20000', '18000', '2000', 0, 'ipad.png'),
(22, 'TAB03', 'Samsung Galaxy Tab 5', 'tablet', '25000', 'Samsung', 'Samsung', 'tablet', 'pentium 2.4 Ghz octa core processor', 'Samsung', 'Galaxy04G', 'Tab', 'Full hD Amoled display', '1 year warranty', 'within 30 days', '25000', '24000', '1000', 50, 'galaxy.jpe'),
(23, 'TV01', 'SAMSUNG ', 'tv', '12700', 'HD Ready LED TV', 'SAMSUNG', 'television', 'HD Ready, 1366 x 768\r\n1 x HDMI, 1 x USB', 'SAMSUNG', 'ST980dg', 'LED TV', 'Display Type LED', '2 years', '15 days', '12700', '12000', '700', 39, 'samsung_tv.jpeg'),
(24, 'TV02', 'SONY SmartTV', 'tv', '30000', 'Full HD Smart LED TV', 'SONY', 'Smart TV', 'Full HD, 1920 x 1080\r\nSmart TV\r\n2 x HDMI, 2 x USB\r\nBuilt-in Wi-Fi', 'Android TV os', 'MH09LGJ0', 'Smart TV', 'Full HD LED', '2 years ', '20 days', '30000', '29000', '1000', 27, 'sony_tv.jpeg'),
(27, 'LAP02', 'SONY VAIO', 'laptop', '40000', ' USB Cable, Charger, Battery', 'SONY', 'Laptop', 'core i5 processor', 'SONY LAPTOP', 'SONY VAIO', 'SONY LAPTOP', 'Display Type LED', '1 year warranty ', 'within 15-20 working days', '42000', '39000', '3000', 40, 'sony_vaio_4.jpg'),
(28, 'LAP03', 'HP Laptop', 'laptop', '35000', 'HP Laptop', 'HP', 'HP Laptop', 'core i3 processor', 'HP Laptop', 'HP Laptop', 'Laptop', 'Display Type LED 15 inches', '1 year warranty ', 'within 15-20 working days', '35000', '34000', '1000', 30, 'hp_2.jpg'),
(29, 'TAB04', 'LG Pad', 'tablet', '14000', 'LG Pad', 'LG', 'Pad', 'Qualcomm octa core processor,2.4 Ghz', 'LG', 'LGP62jh9', 'tablet', 'QUAD HD Display', '1 year warranty ', 'within 15-20 working days', '14000', '12000', '2000', 27, 'lg_pad.jpe'),
(30, 'G01', 'SONY PLAY STATION PSP-1004E WH', 'game', '6000', 'dsfrsetfgrdgtrdhtyh', 'sony', 'GFRDTG', 'gftgh', 'ghfth', 'Internal Memory Capacity 16 GB', 'LED TV', 'hjkuhk', '1 year warranty ', 'within 5-7 working days', '6000', '5200', '800', 50, 'game2.jpg'),
(31, 'G02', 'SONY PLAY STATION PS2 DUAL PAC', 'game', '12000', '#D game', 'sony', 'rtgrg', 'tygty', 'ygtyt', 'ytygr', 'htyhutf', 'tyhtfyh', '1 year warranty ', 'within 15-20 working days', '12000', '10000', '2000', 50, 'game3.jpg'),
(32, 'LAP04', 'LENOVO laptop', 'laptop', '40000', 'Laptop', 'LENOVO', 'Laptop', 'corei5 processor', 'Laptop', 'Internal Memory Capacity 16 GB', '15 inch LED display', 'Display Type LED', '1 year warranty ', 'within 15-20 working days', '40000', '36000', '4000', 40, 'laptop2.png'),
(40, 'G03', 'Street Cricket ', 'game', '2000', 'Street Cricket ', 'EA Sport', 'Game', 'Game', 'Windows', 'CKT16', 'Game', 'CKT16', '1 Year', 'within 5-7 working days', '2000', '1800', '200', 10, 'game5.jpg'),
(123, 'TV03', 'Videocon TV', 'tv', '12500', '54.6cm (22) Full HD LED TV', 'Videocon', 'LED tv', 'Full HD, 1920 x 1080\r\n2 x HDMI, 1 x USB', 'LED', 'VJ765t', 'LED TV', '22 inch LED', '2 years', '15 days', '12500', '12000', '500', 43, 'vid_tv.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE IF NOT EXISTS `shopping_cart` (
  `ser_no` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(500) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `txn_status` varchar(255) NOT NULL,
  PRIMARY KEY (`ser_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=145 ;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`ser_no`, `email`, `product_code`, `product_name`, `image1`, `quantity`, `price`, `txn_status`) VALUES
(144, 'sambithalder270@gmail.com', 'CAM02', 'CANON Ixus', 'canon_ixus.jpe', '1', '12000', ''),
(143, 'sambithalder270@gmail.com', 'MOB01', 'Samsung Galaxy Note 5', 'galaxy_note_5.jpe', '1', '24000', ''),
(142, 'sambithalder270@gmail.com', 'LAP01', 'Apple Macbook air', 'macbook.jpg', '1', '55000', '');

-- --------------------------------------------------------

--
-- Table structure for table `static`
--

CREATE TABLE IF NOT EXISTS `static` (
  `static_id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(200) NOT NULL,
  `details` longtext NOT NULL,
  PRIMARY KEY (`static_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `static`
--

INSERT INTO `static` (`static_id`, `page`, `details`) VALUES
(1, 'aboutus', '\r\n <p align="center"><b><font color="#2A3FAA" size="6" >Launched in March 2016</font></b><br><br>\r\n	<font color="#0099FF" size="5" face="Garamond">guddubazar.com</font><font size="3" face="Garamond"> is a e-commerce marketplace with over </font><font color="#0099FF" size="5" face="Garamond">1000+</font><font size="3" face="Garamond"> of products across </font><font color="#0099FF" size="5" face="Garamond">25+ categories</font><br>\r\n	<font size="3" face="Garamond">Founded by </font><font color="#0099FF" size="5" face="Garamond">SAMBIT HALDER</font><br><br><br></p>\r\n\r\n\r\n\r\n\r\n\r\n'),
(2, 'contact', '<p>\r\n<h3><font color="#843f8b"><p align=center>Contact Us</p></font></h3>\r\n<hr bgcolor="#843f8b" width=300>\r\n<p align=center>11 K.N.C.Road,Ashoke Market-1,Barasat\r\n<br><br>E-Mail: info@guddubazar.com\r\n<br><br>Ph:9836499127,9836953226</p>\r\n\r\n\r\n\r\n'),
(3, 'Privacy&Policy', ''),
(4, 'Terms&Condition', '');

-- --------------------------------------------------------

--
-- Table structure for table `txn_status`
--

CREATE TABLE IF NOT EXISTS `txn_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `txn_status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `ser_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`ser_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`ser_no`, `name`, `email`, `contact`, `password`) VALUES
(16, 'anuvob', 'anuvob10@gmail.com', '9836953227', '2345'),
(14, 'Shamik Kundu', 'shamikkundu13@gmail.com', '7059468697', 'qwerty'),
(15, 'sambit', 'sambithalder270@gmail.com', '9836499127', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
