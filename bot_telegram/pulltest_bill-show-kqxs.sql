-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2023 at 10:13 PM
-- Server version: 10.3.38-MariaDB-log-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pulltest_bill-show-kqxs`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_xskt_mb`
--

CREATE TABLE `data_xskt_mb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_dai` varchar(255) NOT NULL,
  `g8` varchar(255) DEFAULT NULL,
  `g7` varchar(255) DEFAULT NULL,
  `g6` varchar(255) DEFAULT NULL,
  `g5` varchar(255) DEFAULT NULL,
  `g4` varchar(255) DEFAULT NULL,
  `g3` varchar(255) DEFAULT NULL,
  `g2` varchar(255) DEFAULT NULL,
  `g1` varchar(255) DEFAULT NULL,
  `gdb` varchar(255) DEFAULT NULL,
  `mien` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_xskt_mb`
--

INSERT INTO `data_xskt_mb` (`id`, `name_dai`, `g8`, `g7`, `g6`, `g5`, `g4`, `g3`, `g2`, `g1`, `gdb`, `mien`, `created_at`, `updated_at`) VALUES
(1, 'Bac', NULL, '[\"02\",\"73\",\"58\",\"12\"]', '[\"469\",\"923\",\"443\"]', '[\"3716\",\"6641\",\"4419\",\"8431\",\"3158\",\"0433\"]', '[\"1316\",\"0902\",\"7909\",\"3442\"]', '[\"54568\",\"53998\",\"95807\",\"03990\",\"50571\",\"84713\"]', '[\"66574\",\"62714\"]', '76693', '10026', '1', '2023-04-08 16:00:00', NULL),
(3, 'Bac', NULL, '[\"97\",\"54\",\"39\",\"28\"]', '[\"309\",\"404\",\"166\"]', '[\"5756\",\"9121\",\"6244\",\"8253\",\"6810\",\"3857\"]', '[\"0142\",\"3462\",\"5629\",\"2596\"]', '[\"68319\",\"52423\",\"13233\",\"68277\",\"21169\",\"30216\"]', '[\"91410\",\"39454\"]', '88982', '37195', '1', '2023-04-11 16:00:00', NULL),
(4, 'Bac', NULL, '[\"63\",\"35\",\"38\",\"12\"]', '[\"919\",\"860\",\"899\"]', '[\"5496\",\"4857\",\"9907\",\"3867\",\"9046\",\"6692\"]', '[\"5199\",\"2649\",\"9460\",\"1408\"]', '[\"99466\",\"91198\",\"56803\",\"55404\",\"06860\",\"51761\"]', '[\"68989\",\"53011\"]', '59509', '44265', '1', '2023-04-12 16:00:00', NULL),
(5, 'Bac', NULL, '[\"88\",\"23\",\"60\",\"79\"]', '[\"029\",\"457\",\"562\"]', '[\"2632\",\"1938\",\"4351\",\"0270\",\"7609\",\"7302\"]', '[\"4943\",\"4300\",\"4803\",\"7938\"]', '[\"03717\",\"48451\",\"94184\",\"89449\",\"05832\",\"56081\"]', '[\"05720\",\"91578\"]', '88770', '57534', '1', '2023-04-13 16:00:00', NULL),
(6, 'Bac', NULL, '[\"11\",\"53\",\"81\",\"27\"]', '[\"777\",\"921\",\"304\"]', '[\"9035\",\"2575\",\"9988\",\"6255\",\"7699\",\"0135\"]', '[\"1080\",\"8991\",\"4942\",\"4123\"]', '[\"74505\",\"02583\",\"25729\",\"18319\",\"80920\",\"81572\"]', '[\"41330\",\"97277\"]', '11010', '27414', '1', '2023-04-14 16:00:00', NULL),
(7, 'Bac', NULL, '[\"26\",\"28\",\"70\",\"72\"]', '[\"803\",\"944\",\"321\"]', '[\"1337\",\"5356\",\"2412\",\"7235\",\"8435\",\"2100\"]', '[\"1141\",\"3622\",\"2677\",\"0520\"]', '[\"41224\",\"34610\",\"25369\",\"86403\",\"80143\",\"57669\"]', '[\"73986\",\"79480\"]', '17827', '41248', '1', '2023-04-15 16:00:00', NULL),
(8, 'Bac', NULL, '[\"07\",\"12\",\"63\",\"92\"]', '[\"013\",\"523\",\"323\"]', '[\"7707\",\"0739\",\"1301\",\"8058\",\"5604\",\"4191\"]', '[\"9274\",\"4850\",\"5518\",\"3111\"]', '[\"68199\",\"77368\",\"98075\",\"59580\",\"47734\",\"63176\"]', '[\"98341\",\"78733\"]', '21834', '65576', '1', '2023-04-16 16:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_xskt_mn`
--

CREATE TABLE `data_xskt_mn` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_dai` varchar(255) NOT NULL,
  `g8` varchar(255) DEFAULT NULL,
  `g7` varchar(255) DEFAULT NULL,
  `g6` varchar(255) DEFAULT NULL,
  `g5` varchar(255) DEFAULT NULL,
  `g4` varchar(255) DEFAULT NULL,
  `g3` varchar(255) DEFAULT NULL,
  `g2` varchar(255) DEFAULT NULL,
  `g1` varchar(255) DEFAULT NULL,
  `gdb` varchar(255) DEFAULT NULL,
  `mien` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_xskt_mn`
--

INSERT INTO `data_xskt_mn` (`id`, `name_dai`, `g8`, `g7`, `g6`, `g5`, `g4`, `g3`, `g2`, `g1`, `gdb`, `mien`, `created_at`, `updated_at`) VALUES
(1, 'Tiền Giang', '16', '123', '[\"3524\",\"7959\",\"8331\"]', '7124', '[\"53691\",\"60407\",\"63540\",\"56337\",\"88464\",\"58810\",\"28531\"]', '[\"48239\",\"28137\"]', '86576', '38601', '451321', '2', '2023-04-08 16:00:00', NULL),
(2, 'Kiên Giang', '48', '577', '[\"7094\",\"3251\",\"9045\"]', '1247', '[\"11477\",\"54113\",\"40505\",\"01162\",\"53668\",\"49585\",\"29987\"]', '[\"37576\",\"20063\"]', '55354', '99081', '735108', '2', '2023-04-08 16:00:00', NULL),
(3, 'Đà Lạt', '11', '556', '[\"4861\",\"9274\",\"5994\"]', '5380', '[\"66255\",\"21124\",\"88867\",\"27009\",\"08692\",\"23193\",\"72600\"]', '[\"64138\",\"00982\"]', '12957', '53059', '581143', '2', '2023-04-08 16:00:00', NULL),
(4, 'Äá»“ng Nai', '68', '657', '[\"1717\",\"1200\",\"4271\"]', '2642', '[\"44308\",\"60784\",\"51746\",\"68610\",\"22838\",\"07019\",\"46180\"]', '[\"05644\",\"45264\"]', '30929', '77043', '106508', '2', '2023-04-11 16:00:00', NULL),
(5, 'Cáº§n ThÆ¡', '72', '066', '[\"7394\",\"8241\",\"4500\"]', '1472', '[\"85830\",\"74070\",\"42828\",\"55308\",\"31277\",\"88729\",\"06138\"]', '[\"97369\",\"80176\"]', '36697', '58003', '921881', '2', '2023-04-11 16:00:00', NULL),
(6, 'SÃ³c TrÄƒng', '77', '826', '[\"4924\",\"7575\",\"3437\"]', '6874', '[\"32823\",\"46283\",\"92457\",\"74191\",\"02757\",\"36725\",\"26355\"]', '[\"85655\",\"71140\"]', '55089', '67297', '693423', '2', '2023-04-11 16:00:00', NULL),
(7, 'TÃ¢y Ninh', '90', '735', '[\"2380\",\"7547\",\"2789\"]', '6640', '[\"11653\",\"05424\",\"49437\",\"30190\",\"05221\",\"14719\",\"60387\"]', '[\"95114\",\"04353\"]', '23528', '88665', '919852', '2', '2023-04-12 16:00:00', NULL),
(8, 'An Giang', '49', '112', '[\"6264\",\"9041\",\"5310\"]', '9924', '[\"74032\",\"14990\",\"11826\",\"34693\",\"31829\",\"46929\",\"98537\"]', '[\"78505\",\"46564\"]', '20861', '29908', '323809', '2', '2023-04-12 16:00:00', NULL),
(9, 'BÃ¬nh Thuáº­n', '74', '145', '[\"4018\",\"1255\",\"2425\"]', '7353', '[\"29696\",\"83419\",\"69270\",\"01362\",\"98201\",\"22102\",\"80259\"]', '[\"94371\",\"36249\"]', '55647', '45847', '982076', '2', '2023-04-12 16:00:00', NULL),
(10, 'VÄ©nh Long', '44', '915', '[\"1223\",\"6527\",\"5288\"]', '9297', '[\"10258\",\"92006\",\"11193\",\"37211\",\"92212\",\"63434\",\"04247\"]', '[\"05368\",\"00829\"]', '99732', '00055', '625596', '2', '2023-04-13 16:00:00', NULL),
(11, 'BÃ¬nh DÆ°Æ¡ng', '84', '082', '[\"8368\",\"6099\",\"5359\"]', '4806', '[\"25755\",\"66730\",\"06863\",\"87059\",\"30283\",\"71582\",\"32541\"]', '[\"89724\",\"19633\"]', '08281', '11155', '871141', '2', '2023-04-13 16:00:00', NULL),
(12, 'TrÃ  Vinh', '61', '211', '[\"7445\",\"0600\",\"0635\"]', '3661', '[\"50543\",\"75994\",\"12050\",\"45369\",\"55946\",\"99582\",\"75559\"]', '[\"92567\",\"41706\"]', '87970', '17312', '206656', '2', '2023-04-13 16:00:00', NULL),
(13, 'TP. HCM', '88', '369', '[\"9317\",\"9206\",\"8238\"]', '5122', '[\"73399\",\"78479\",\"90799\",\"64227\",\"16650\",\"46520\",\"07524\"]', '[\"64500\",\"86620\"]', '94447', '30316', '423809', '2', '2023-04-14 16:00:00', NULL),
(14, 'Long An', '08', '019', '[\"9582\",\"4996\",\"7202\"]', '3245', '[\"94710\",\"09166\",\"42425\",\"66135\",\"24718\",\"28503\",\"81596\"]', '[\"01178\",\"06547\"]', '87080', '67465', '514982', '2', '2023-04-14 16:00:00', NULL),
(15, 'BÃ¬nh PhÆ°á»›c', '41', '694', '[\"2010\",\"9169\",\"3260\"]', '3086', '[\"05083\",\"69617\",\"61209\",\"35145\",\"02723\",\"57012\",\"72605\"]', '[\"18483\",\"03132\"]', '85647', '41561', '499979', '2', '2023-04-14 16:00:00', NULL),
(16, 'Háº­u Giang', '92', '552', '[\"9515\",\"9141\",\"2496\"]', '0766', '[\"50652\",\"92566\",\"66095\",\"52394\",\"15287\",\"08694\",\"88550\"]', '[\"05228\",\"45749\"]', '73771', '53484', '996093', '2', '2023-04-14 16:00:00', NULL),
(17, 'Tiá»n Giang', '28', '905', '[\"5123\",\"3820\",\"7111\"]', '8419', '[\"92780\",\"13704\",\"14842\",\"51297\",\"76456\",\"30579\",\"53191\"]', '[\"13933\",\"89434\"]', '97765', '66568', '069536', '2', '2023-04-15 16:00:00', NULL),
(18, 'KiÃªn Giang', '02', '727', '[\"0947\",\"5734\",\"8879\"]', '2011', '[\"08453\",\"28837\",\"93062\",\"23717\",\"04184\",\"50770\",\"43103\"]', '[\"42770\",\"79552\"]', '86496', '44975', '377984', '2', '2023-04-15 16:00:00', NULL),
(19, 'ÄÃ  Láº¡t', '35', '440', '[\"9579\",\"9576\",\"1121\"]', '7852', '[\"01472\",\"74733\",\"36506\",\"31394\",\"08479\",\"13857\",\"27672\"]', '[\"64615\",\"69451\"]', '87265', '01057', '645892', '2', '2023-04-15 16:00:00', NULL),
(20, 'TP. HCM', '03', '750', '[\"0454\",\"0224\",\"2955\"]', '0004', '[\"01538\",\"87676\",\"45195\",\"67521\",\"36264\",\"28251\",\"65530\"]', '[\"03634\",\"90742\"]', '70903', '82358', '376763', '2', '2023-04-16 16:00:00', NULL),
(21, 'Äá»“ng ThÃ¡p', '62', '882', '[\"2558\",\"7420\",\"0072\"]', '5206', '[\"42916\",\"54327\",\"60372\",\"20283\",\"10526\",\"37252\",\"67060\"]', '[\"24910\",\"30053\"]', '43456', '91114', '169373', '2', '2023-04-16 16:00:00', NULL),
(22, 'CÃ  Mau', '40', '782', '[\"7620\",\"2995\",\"5320\"]', '0910', '[\"76911\",\"23989\",\"19743\",\"98580\",\"67445\",\"06526\",\"23475\"]', '[\"73376\",\"12071\"]', '67603', '76004', '767426', '2', '2023-04-16 16:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_xskt_mt`
--

CREATE TABLE `data_xskt_mt` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_dai` varchar(255) NOT NULL,
  `g8` varchar(255) DEFAULT NULL,
  `g7` varchar(255) DEFAULT NULL,
  `g6` varchar(255) DEFAULT NULL,
  `g5` varchar(255) DEFAULT NULL,
  `g4` varchar(255) DEFAULT NULL,
  `g3` varchar(255) DEFAULT NULL,
  `g2` varchar(255) DEFAULT NULL,
  `g1` varchar(255) DEFAULT NULL,
  `gdb` varchar(255) DEFAULT NULL,
  `mien` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_xskt_mt`
--

INSERT INTO `data_xskt_mt` (`id`, `name_dai`, `g8`, `g7`, `g6`, `g5`, `g4`, `g3`, `g2`, `g1`, `gdb`, `mien`, `created_at`, `updated_at`) VALUES
(1, 'Kon Tum', '87', '563', '[\"8110\",\"3883\",\"4278\"]', '8871', '[\"35055\",\"29779\",\"06604\",\"26718\",\"55976\",\"68907\",\"81159\"]', '[\"17607\",\"07270\"]', '12214', '14043', '619438', '2', '2023-04-08 16:00:00', NULL),
(2, 'Khánh Hòa', '01', '691', '[\"9883\",\"9078\",\"3697\"]', '9126', '[\"38454\",\"69294\",\"77292\",\"92488\",\"25508\",\"41390\",\"53936\"]', '[\"20542\",\"01290\"]', '25191', '12062', '364910', '2', '2023-04-08 16:00:00', NULL),
(3, 'Thừa T. Huế', '92', '980', '[\"0353\",\"6871\",\"0469\"]', '5169', '[\"36270\",\"67656\",\"17242\",\"63689\",\"02998\",\"42686\",\"32688\"]', '[\"89791\",\"34009\"]', '50109', '86292', '380542', '2', '2023-04-08 16:00:00', NULL),
(4, 'ÄÃ  Náºµng', '22', '633', '[\"1045\",\"2985\",\"5226\"]', '5905', '[\"67998\",\"61489\",\"19030\",\"26588\",\"73600\",\"97860\",\"93490\"]', '[\"98856\",\"68973\"]', '31487', '97739', '197233', '2', '2023-04-11 16:00:00', NULL),
(5, 'KhÃ¡nh HÃ²a', '84', '979', '[\"2945\",\"3728\",\"7667\"]', '4047', '[\"71658\",\"74910\",\"88219\",\"30440\",\"91611\",\"05691\",\"73058\"]', '[\"05922\",\"49492\"]', '87233', '40373', '787288', '2', '2023-04-11 16:00:00', NULL),
(6, 'BÃ¬nh Äá»‹nh', '55', '167', '[\"6042\",\"2207\",\"6971\"]', '0536', '[\"90354\",\"70971\",\"89544\",\"37505\",\"06960\",\"40238\",\"27991\"]', '[\"42551\",\"44857\"]', '06025', '76051', '529523', '2', '2023-04-12 16:00:00', NULL),
(7, 'Quáº£ng Trá»‹', '05', '038', '[\"0563\",\"5759\",\"0565\"]', '0604', '[\"93855\",\"23947\",\"81167\",\"23254\",\"60961\",\"50865\",\"20895\"]', '[\"79643\",\"09007\"]', '93423', '09018', '665013', '2', '2023-04-12 16:00:00', NULL),
(8, 'Quáº£ng BÃ¬nh', '93', '343', '[\"1485\",\"6412\",\"6648\"]', '8737', '[\"88196\",\"45322\",\"82148\",\"32740\",\"59337\",\"62805\",\"92350\"]', '[\"16593\",\"34812\"]', '20001', '32887', '138218', '2', '2023-04-12 16:00:00', NULL),
(9, 'Gia Lai', '22', '796', '[\"0370\",\"6759\",\"8463\"]', '7119', '[\"22894\",\"37486\",\"89937\",\"56202\",\"69815\",\"54630\",\"44086\"]', '[\"33065\",\"01744\"]', '76065', '21668', '708726', '2', '2023-04-13 16:00:00', NULL),
(10, 'Ninh Thuáº­n', '81', '601', '[\"5930\",\"2854\",\"8478\"]', '1076', '[\"61216\",\"78048\",\"23497\",\"21843\",\"82950\",\"01871\",\"32094\"]', '[\"67650\",\"87462\"]', '85302', '64885', '298062', '2', '2023-04-13 16:00:00', NULL),
(11, 'ÄÃ  Náºµng', '79', '351', '[\"3703\",\"0716\",\"8344\"]', '2157', '[\"87444\",\"66045\",\"84977\",\"32901\",\"14640\",\"35908\",\"69911\"]', '[\"37409\",\"72771\"]', '15553', '68144', '415366', '2', '2023-04-14 16:00:00', NULL),
(12, 'Quáº£ng NgÃ£i', '09', '371', '[\"6023\",\"9402\",\"2904\"]', '9334', '[\"72219\",\"48425\",\"54687\",\"85708\",\"81597\",\"96244\",\"45175\"]', '[\"56233\",\"07927\"]', '38109', '99009', '287428', '2', '2023-04-14 16:00:00', NULL),
(13, 'Äáº¯k NÃ´ng', '34', '899', '[\"1007\",\"7101\",\"6952\"]', '5344', '[\"94058\",\"29882\",\"52435\",\"86454\",\"40734\",\"85625\",\"18934\"]', '[\"59734\",\"77023\"]', '33178', '02448', '461063', '2', '2023-04-14 16:00:00', NULL),
(14, 'Kon Tum', '75', '612', '[\"1144\",\"0643\",\"0635\"]', '4939', '[\"62946\",\"24542\",\"49681\",\"28319\",\"05716\",\"63438\",\"41193\"]', '[\"89821\",\"68768\"]', '12557', '04418', '889572', '2', '2023-04-15 16:00:00', NULL),
(15, 'KhÃ¡nh HÃ²a', '05', '253', '[\"3594\",\"5502\",\"7298\"]', '6198', '[\"06459\",\"07738\",\"43676\",\"43210\",\"71246\",\"32048\",\"15165\"]', '[\"92510\",\"88691\"]', '59626', '66228', '016849', '2', '2023-04-15 16:00:00', NULL),
(16, 'Thá»«a T. Huáº¿', '79', '173', '[\"6372\",\"8655\",\"9959\"]', '6100', '[\"59072\",\"44530\",\"66184\",\"43761\",\"62390\",\"22860\",\"61167\"]', '[\"28627\",\"24439\"]', '35983', '89952', '916634', '2', '2023-04-15 16:00:00', NULL),
(17, 'PhÃº YÃªn', '30', '583', '[\"5835\",\"1051\",\"1195\"]', '4805', '[\"04415\",\"53283\",\"02103\",\"76306\",\"92824\",\"12016\",\"40294\"]', '[\"99401\",\"66301\"]', '21073', '47885', '839403', '2', '2023-04-16 16:00:00', NULL),
(18, 'Thá»«a T. Huáº¿', '74', '820', '[\"6084\",\"2434\",\"0545\"]', '8254', '[\"10098\",\"39401\",\"93737\",\"53234\",\"54930\",\"46697\",\"16835\"]', '[\"75158\",\"05546\"]', '43851', '94515', '897580', '2', '2023-04-16 16:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `id_lay_cang`
--

CREATE TABLE `id_lay_cang` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `checked` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `id_lay_cang`
--

INSERT INTO `id_lay_cang` (`id`, `name`, `checked`, `created_at`) VALUES
('6168142336', 'random3cang', 1, '2023-04-16 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `id_lay_lode`
--

CREATE TABLE `id_lay_lode` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) NOT NULL,
  `checked` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `id_lay_stl`
--

CREATE TABLE `id_lay_stl` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `checked` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `image`) VALUES
(4, NULL, 'dg-baccarat-1.jpg'),
(6, NULL, 'dg-chan-le-1.jpg'),
(5, NULL, 'dg-baccarat-2.jpg'),
(7, NULL, 'dg-sicbo-1.jpg'),
(8, NULL, 'dg-sicbo-2.jpg'),
(9, NULL, 'nap-tien-chuyen-khoan.jpg'),
(10, NULL, 'nap-tien-internet-banking.jpg'),
(11, NULL, 'nap-tien-momo-pay.jpg'),
(15, NULL, 'nap-tien-zalo-pay.jpg'),
(13, NULL, 'nap-tien-qr-banking.jpg'),
(14, NULL, 'nap-tien-viettel-pay.jpg'),
(16, NULL, 'rut-tien.jpg'),
(17, NULL, 'wm-baccarat-1.jpg'),
(18, NULL, 'wm-baccarat-2.jpg'),
(19, NULL, 'wm-rong-ho-1.jpg'),
(20, NULL, 'wm-rong-ho-2.jpg'),
(21, NULL, 'wm-tai-xiu-2.jpg'),
(22, NULL, 'wm-thuat-ngu-casino.jpg'),
(23, NULL, 'wm-xoc-dia-1.jpg'),
(24, NULL, 'wm-xoc-dia-2.jpg'),
(25, NULL, 'wm-tai-xiu-1.jpg'),
(26, NULL, 'dg-chan-le-2.jpg'),
(37, NULL, 'mg-huong-dan-dat-keo-tai-xiu-1.jpg'),
(28, NULL, 'mg-thuat-ngu-bong-da.jpg'),
(29, NULL, 'mg-dat-cuoc-bong-da-1.jpg'),
(30, NULL, 'mg-dat-cuoc-bong-da-2.jpg'),
(31, NULL, 'mg-huong-dan-keo-chap-1.jpg'),
(32, NULL, 'mg-huong-dan-keo-chap-2.jpg'),
(33, NULL, 'mg-huong-dan-ket-keo-phu-1.jpg'),
(34, NULL, 'mg-huong-dan-ket-keo-phu-2.jpg'),
(35, NULL, 'mg-huong-dan-vao-san-1.jpg'),
(36, NULL, 'mg-huong-dan-vao-san-2.jpg'),
(38, NULL, 'mg-huong-dan-dat-keo-tai-xiu-2.jpg'),
(39, NULL, 'bov-huong-dan-dat-keo-chap-1.jpg'),
(40, NULL, 'bov-huong-dan-dat-keo-chap-2.jpg'),
(41, NULL, 'bov-huong-dan-dat-keo-dac-biet-1.jpg'),
(42, NULL, 'bov-huong-dan-dat-keo-dac-biet-2.jpg'),
(43, NULL, 'bov-huong-dan-dat-keo-tai-xiu-1.jpg'),
(44, NULL, 'bov-huong-dan-dat-keo-tai-xiu-2.jpg'),
(45, NULL, 'bov-huong-dan-dat-keo-xien-xau-1.jpg'),
(46, NULL, 'bov-huong-dan-dat-keo-xien-xau-2.jpg'),
(47, NULL, 'bov-huong-dan-vao-san-1.jpg'),
(48, NULL, 'bov-huong-dan-vao-san-2.jpg'),
(49, NULL, 'Bao-mat-telegram.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(47, '2014_10_12_000000_create_users_table', 1),
(48, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(49, '2019_08_19_000000_create_failed_jobs_table', 1),
(50, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(51, '2023_04_08_153819_create_data_xskt_mb_table', 1),
(52, '2023_04_09_104540_create_jobs_table', 1),
(53, '2023_04_09_162639_create_data_xskt_mt_table', 1),
(54, '2023_04_09_162643_create_data_xskt_mn_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_xskt_mb`
--
ALTER TABLE `data_xskt_mb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_xskt_mn`
--
ALTER TABLE `data_xskt_mn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_xskt_mt`
--
ALTER TABLE `data_xskt_mt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_xskt_mb`
--
ALTER TABLE `data_xskt_mb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_xskt_mn`
--
ALTER TABLE `data_xskt_mn`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `data_xskt_mt`
--
ALTER TABLE `data_xskt_mt`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
