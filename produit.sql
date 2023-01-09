-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 20, 2022 at 04:39 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api`
--

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `title`, `description`, `logo`, `auteur`, `updated_at`, `created_at`) VALUES
(1, 'Article 1', 'DESC1', '', 'AM ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Bar Mix - Lime', 'Thoughtmix', 'http://dummyimage.com/205x100.png/5fa2dd/ffffff', 'Way', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Cheese - Havarti, Salsa', 'Dabshots', 'http://dummyimage.com/147x100.png/ff4444/ffffff', 'Meryl', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Bread - Bagels, Mini', 'Rooxo', 'http://dummyimage.com/224x100.png/5fa2dd/ffffff', 'Guinna', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'French Kiss Vanilla', 'Realpoint', 'http://dummyimage.com/163x100.png/cc0000/ffffff', 'Tyrus', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Cheese Cheddar Processed', 'Jazzy', 'http://dummyimage.com/157x100.png/5fa2dd/ffffff', 'Kippy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Tea - Camomele', 'Yakijo', 'http://dummyimage.com/126x100.png/cc0000/ffffff', 'Teena', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Carrots - Mini, Stem On', 'Gigaclub', 'http://dummyimage.com/118x100.png/dddddd/000000', 'Harlen', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Juice - Clamato, 341 Ml', 'Wordware', 'http://dummyimage.com/241x100.png/5fa2dd/ffffff', 'Wallis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Wine - White, Pinot Grigio', 'Pixoboo', 'http://dummyimage.com/123x100.png/ff4444/ffffff', 'Cara', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Snapple - Mango Maddness', 'Tazzy', 'http://dummyimage.com/205x100.png/5fa2dd/ffffff', 'Yulma', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Pork - Loin, Bone - In', 'Gigazoom', 'http://dummyimage.com/160x100.png/ff4444/ffffff', 'Risa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Flour Dark Rye', 'Demivee', 'http://dummyimage.com/118x100.png/ff4444/ffffff', 'Maia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Scallops - 20/30', 'Mita', 'http://dummyimage.com/246x100.png/ff4444/ffffff', 'Gris', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Taro Root', 'Jetpulse', 'http://dummyimage.com/174x100.png/5fa2dd/ffffff', 'Lishe', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Yogurt - Strawberry, 175 Gr', 'Quaxo', 'http://dummyimage.com/196x100.png/cc0000/ffffff', 'Maggie', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Napkin White - Starched', 'Tazz', 'http://dummyimage.com/189x100.png/cc0000/ffffff', 'Hewett', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Pasta - Linguini, Dry', 'Demivee', 'http://dummyimage.com/115x100.png/5fa2dd/ffffff', 'Cosmo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Ecolab Crystal Fusion', 'Skaboo', 'http://dummyimage.com/228x100.png/5fa2dd/ffffff', 'Scott', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Isomalt', 'Feedspan', 'http://dummyimage.com/133x100.png/cc0000/ffffff', 'Neely', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Cookie Dough - Double', 'Wikido', 'http://dummyimage.com/223x100.png/5fa2dd/ffffff', 'Laverna', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Chicken - Base', 'Jazzy', 'http://dummyimage.com/238x100.png/ff4444/ffffff', 'Carmen', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Island Oasis - Ice Cream Mix', 'Shuffledrive', 'http://dummyimage.com/185x100.png/5fa2dd/ffffff', 'Iggy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Juice - Pineapple, 341 Ml', 'Trudoo', 'http://dummyimage.com/151x100.png/dddddd/000000', 'Ainsley', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Lobak', 'Geba', 'http://dummyimage.com/143x100.png/5fa2dd/ffffff', 'Mohammed', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Beans - Fava Fresh', 'Thoughtstorm', 'http://dummyimage.com/114x100.png/dddddd/000000', 'Cynthia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Extract - Rum', 'Skiptube', 'http://dummyimage.com/195x100.png/dddddd/000000', 'Farly', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Tart - Pecan Butter Squares', 'Yombu', 'http://dummyimage.com/113x100.png/ff4444/ffffff', 'Garnet', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Butter - Unsalted', 'Ooba', 'http://dummyimage.com/240x100.png/ff4444/ffffff', 'Nonnah', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Water - Spring 1.5lit', 'Skaboo', 'http://dummyimage.com/238x100.png/5fa2dd/ffffff', 'Dottie', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Ocean Spray - Ruby Red', 'Vitz', 'http://dummyimage.com/183x100.png/cc0000/ffffff', 'Ximenez', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Pumpkin - Seed', 'Wikibox', 'http://dummyimage.com/239x100.png/5fa2dd/ffffff', 'Brian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Appetizer - Sausage Rolls', 'Dabvine', 'http://dummyimage.com/105x100.png/ff4444/ffffff', 'Sheffie', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Beef - Texas Style Burger', 'Kazio', 'http://dummyimage.com/157x100.png/ff4444/ffffff', 'Devy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Sugar - Crumb', 'Blognation', 'http://dummyimage.com/110x100.png/ff4444/ffffff', 'Mae', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Pastry - Banana Muffin - Mini', 'Yamia', 'http://dummyimage.com/163x100.png/cc0000/ffffff', 'Goran', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Bag Stand', 'Shuffletag', 'http://dummyimage.com/181x100.png/5fa2dd/ffffff', 'Dominique', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Sausage - Meat', 'Trudoo', 'http://dummyimage.com/200x100.png/5fa2dd/ffffff', 'Abbye', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Coke - Diet, 355 Ml', 'Tagpad', 'http://dummyimage.com/173x100.png/cc0000/ffffff', 'Mina', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Wine - Ej Gallo Sierra Valley', 'Yakijo', 'http://dummyimage.com/135x100.png/cc0000/ffffff', 'Irma', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Glaze - Clear', 'Gabcube', 'http://dummyimage.com/167x100.png/ff4444/ffffff', 'Jerry', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Buttons', 'Realmix', 'http://dummyimage.com/173x100.png/cc0000/ffffff', 'Lindsy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Pepper - Cayenne', 'Omba', 'http://dummyimage.com/212x100.png/5fa2dd/ffffff', 'Kaylee', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Tea - Orange Pekoe', 'Teklist', 'http://dummyimage.com/232x100.png/5fa2dd/ffffff', 'Gillan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Pail - 4l White, With Handle', 'Jabbersphere', 'http://dummyimage.com/220x100.png/cc0000/ffffff', 'Pavlov', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Wine - Harrow Estates, Vidal', 'Voonyx', 'http://dummyimage.com/235x100.png/cc0000/ffffff', 'Bryon', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Paste - Black Olive', 'Youbridge', 'http://dummyimage.com/176x100.png/cc0000/ffffff', 'Chad', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Salt - Sea', 'Thoughtblab', 'http://dummyimage.com/100x100.png/cc0000/ffffff', 'Bibby', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Dip - Tapenade', 'Katz', 'http://dummyimage.com/125x100.png/5fa2dd/ffffff', 'Barrie', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Foam Dinner Plate', 'Voonte', 'http://dummyimage.com/182x100.png/ff4444/ffffff', 'Donall', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'V8 - Tropical Blend', 'Rhynyx', 'http://dummyimage.com/125x100.png/cc0000/ffffff', 'Bettina', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Bread - Crusty Italian Poly', 'Camido', 'http://dummyimage.com/193x100.png/dddddd/000000', 'Cymbre', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Cheese Cloth No 60', 'Photofeed', 'http://dummyimage.com/129x100.png/5fa2dd/ffffff', 'Edan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Fiddlehead - Frozen', 'Ailane', 'http://dummyimage.com/137x100.png/ff4444/ffffff', 'Harri', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Cup - 8oz Coffee Perforated', 'Skimia', 'http://dummyimage.com/172x100.png/ff4444/ffffff', 'Jamill', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Lemon Balm - Fresh', 'Yakidoo', 'http://dummyimage.com/239x100.png/dddddd/000000', 'Rriocard', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Soup - Boston Clam Chowder', 'Eayo', 'http://dummyimage.com/199x100.png/cc0000/ffffff', 'Phelia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Lychee', 'Livetube', 'http://dummyimage.com/134x100.png/ff4444/ffffff', 'Barbaraanne', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Salmon - Atlantic, Skin On', 'Abatz', 'http://dummyimage.com/169x100.png/cc0000/ffffff', 'Collen', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Beer - Fruli', 'Eadel', 'http://dummyimage.com/203x100.png/5fa2dd/ffffff', 'Rufe', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Cake - Pancake', 'Gevee', 'http://dummyimage.com/237x100.png/5fa2dd/ffffff', 'Gauthier', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Salmon - Sockeye Raw', 'Teklist', 'http://dummyimage.com/136x100.png/cc0000/ffffff', 'Carline', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Triple Sec - Mcguinness', 'Minyx', 'http://dummyimage.com/108x100.png/cc0000/ffffff', 'Lizbeth', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Pineapple - Golden', 'Myworks', 'http://dummyimage.com/207x100.png/cc0000/ffffff', 'Devon', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Pate - Liver', 'Meedoo', 'http://dummyimage.com/185x100.png/cc0000/ffffff', 'Cly', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Grapes - Red', 'Topiczoom', 'http://dummyimage.com/173x100.png/dddddd/000000', 'Gabrila', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'Ostrich - Fan Fillet', 'Topdrive', 'http://dummyimage.com/136x100.png/ff4444/ffffff', 'Kerrill', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Coconut - Creamed, Pure', 'Edgeblab', 'http://dummyimage.com/107x100.png/cc0000/ffffff', 'Madelyn', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'Fennel', 'InnoZ', 'http://dummyimage.com/200x100.png/cc0000/ffffff', 'Roderich', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'Asparagus - White, Fresh', 'Zoomdog', 'http://dummyimage.com/227x100.png/cc0000/ffffff', 'Weber', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'External Supplier', 'Zooxo', 'http://dummyimage.com/202x100.png/cc0000/ffffff', 'Penelope', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'Bread - Pumpernickel', 'Mycat', 'http://dummyimage.com/170x100.png/5fa2dd/ffffff', 'Evvy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'Cafe Royale', 'Skynoodle', 'http://dummyimage.com/215x100.png/cc0000/ffffff', 'Dru', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'Schnappes - Peach, Walkers', 'Chatterpoint', 'http://dummyimage.com/157x100.png/cc0000/ffffff', 'Terrye', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'Pastry - Raisin Muffin - Mini', 'Fiveclub', 'http://dummyimage.com/118x100.png/5fa2dd/ffffff', 'Dory', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'Pear - Asian', 'Oba', 'http://dummyimage.com/219x100.png/5fa2dd/ffffff', 'Muire', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'Ecolab Silver Fusion', 'Zava', 'http://dummyimage.com/184x100.png/5fa2dd/ffffff', 'Liz', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'Radish - Pickled', 'Plajo', 'http://dummyimage.com/231x100.png/5fa2dd/ffffff', 'Moses', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'Pork - Backfat', 'Centidel', 'http://dummyimage.com/119x100.png/cc0000/ffffff', 'Chick', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Cookies - Oreo, 4 Pack', 'Jabbersphere', 'http://dummyimage.com/118x100.png/cc0000/ffffff', 'Lil', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'Wine - Trimbach Pinot Blanc', 'Innotype', 'http://dummyimage.com/106x100.png/5fa2dd/ffffff', 'Curt', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'Roe - Lump Fish, Black', 'Gabcube', 'http://dummyimage.com/205x100.png/ff4444/ffffff', 'Idell', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Vinegar - Sherry', 'Feedfish', 'http://dummyimage.com/113x100.png/ff4444/ffffff', 'Davina', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Chicken - Base, Ultimate', 'Rhynyx', 'http://dummyimage.com/231x100.png/ff4444/ffffff', 'Faith', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'Pail - 15l White, With Handle', 'Edgetag', 'http://dummyimage.com/191x100.png/cc0000/ffffff', 'Samuele', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'Liners - Banana, Paper', 'Fivebridge', 'http://dummyimage.com/160x100.png/5fa2dd/ffffff', 'Sherwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'Blueberries - Frozen', 'Flipstorm', 'http://dummyimage.com/135x100.png/cc0000/ffffff', 'Jessey', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'Veal - Eye Of Round', 'Zazio', 'http://dummyimage.com/225x100.png/ff4444/ffffff', 'Bowie', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'Lemonade - Mandarin, 591 Ml', 'Demizz', 'http://dummyimage.com/249x100.png/ff4444/ffffff', 'Jonas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'Cheese - Sheep Milk', 'Quinu', 'http://dummyimage.com/185x100.png/cc0000/ffffff', 'Jacky', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'Water - Spring Water 500ml', 'Quire', 'http://dummyimage.com/207x100.png/5fa2dd/ffffff', 'Asher', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'Bread - Bagels, Mini', 'Oyonder', 'http://dummyimage.com/230x100.png/ff4444/ffffff', 'Benjy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'Bar Mix - Lime', 'Snaptags', 'http://dummyimage.com/222x100.png/ff4444/ffffff', 'Randa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'Beef - Tongue, Cooked', 'Livetube', 'http://dummyimage.com/222x100.png/ff4444/ffffff', 'Mozes', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'Paper Cocktail Umberlla 80 - 180', 'Skipstorm', 'http://dummyimage.com/245x100.png/5fa2dd/ffffff', 'Matty', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'Bonito Flakes - Toku Katsuo', 'Innotype', 'http://dummyimage.com/231x100.png/cc0000/ffffff', 'Thatcher', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'Glove - Cutting', 'Jabbersphere', 'http://dummyimage.com/236x100.png/cc0000/ffffff', 'Chrissy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'Mussels - Cultivated', 'Miboo', 'http://dummyimage.com/125x100.png/5fa2dd/ffffff', 'Barry', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'Mousse - Banana Chocolate', 'Thoughtsphere', 'http://dummyimage.com/116x100.png/cc0000/ffffff', 'Masha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'Spice - Montreal Steak Spice', 'Kanoodle', 'http://dummyimage.com/167x100.png/cc0000/ffffff', 'Jo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'Macaroons - Homestyle Two Bit', 'Skivee', 'http://dummyimage.com/207x100.png/cc0000/ffffff', 'Gerrard', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'a', 'desc', 'logo', 'Alhader', '2022-12-20 15:55:19', '2022-12-20 15:55:19'),
(103, 'a', 'desc', 'logo', 'Alhader', '2022-12-20 15:56:32', '2022-12-20 15:56:32'),
(104, 'A', 'C', 'D', 'B', '2022-12-20 16:31:30', '2022-12-20 16:31:30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
