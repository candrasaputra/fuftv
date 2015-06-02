-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 27, 2015 at 11:26 AM
-- Server version: 5.5.43
-- PHP Version: 5.4.39-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fuftv_fuftv4`
--

-- --------------------------------------------------------

--
-- Table structure for table `fx_ci_sessions`
--

CREATE TABLE IF NOT EXISTS `fx_ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fx_ci_sessions`
--

INSERT INTO `fx_ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('93d422cd291b9b92cb3cb57d282e94209b5b7923', '66.249.75.90', 1432658405, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433323635383430353b),
('c20c29100795ed241e8a2464423cc069873d6359', '180.254.94.6', 1432658338, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433323635383332323b635f7573727c733a343a226f706368223b635f7077647c733a33323a226131393230303836323938663964616630316232393639323632393861353839223b635f69647c733a313a2239223b635f6c6173746c6f677c733a31393a22323031352d30352d32362032333a33313a3333223b635f69646c6576656c7c733a313a2231223b706c6174666f726d7c733a393a2257696e646f77732037223b62726f777365727c733a31323a2246697265666f782033382e30223b6c6f676765645f696e7c623a313b),
('c6acd9bb0b5b49cca58a40df9e75d1d4ef1e9974', '36.84.13.180', 1432658346, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433323635383334343b);

-- --------------------------------------------------------

--
-- Table structure for table `fx_episode`
--

CREATE TABLE IF NOT EXISTS `fx_episode` (
  `idepisode` int(45) NOT NULL AUTO_INCREMENT,
  `idfilm` int(45) NOT NULL,
  `jdleps` varchar(45) DEFAULT NULL,
  `alias` varchar(255) NOT NULL,
  `deseps` text NOT NULL,
  `imgeps` varchar(200) DEFAULT NULL,
  `timeepisode` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `iduser` int(10) DEFAULT NULL,
  `epsview` int(11) NOT NULL,
  `visibility` varchar(10) NOT NULL DEFAULT 'publish',
  PRIMARY KEY (`idepisode`,`idfilm`),
  KEY `fk_fx_episode_fx_jdlfilm` (`idfilm`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=104 ;

--
-- Dumping data for table `fx_episode`
--

INSERT INTO `fx_episode` (`idepisode`, `idfilm`, `jdleps`, `alias`, `deseps`, `imgeps`, `timeepisode`, `iduser`, `epsview`, `visibility`) VALUES
(3, 28, 'Episode 1', 'dungeon-ni-deai-wo-motomeru-no-wa-machigattei-episode-1-subtitle-indonesia', 'perkenalan karekter dan jalan cerita', 'Screenshot_11_2_3_20150412.png', '2015-05-16 15:30:42', 3, 27, 'publish'),
(4, 27, 'Episode 1', 'arslan-senki-episode-1-subtitle-indonesia', 'perkenalan karakter dan jalan cerita', 'Screenshot_1_2_4_20150412.png', '2015-05-16 16:34:34', 3, 14, 'publish'),
(6, 30, 'episode 1', 'plastic-memories-episode-1-subtitle-indonesia', 'Perkenalan karakter dan jalan cerita', 'Screenshot_2_2_5_20150412.png', '2015-04-12 11:55:14', 2, 14, 'publish'),
(7, 16, 'episode 1', 'yahari-ore-no-seishun-season-2-episode-1-subtitle-indonesia', 'pemanasan, penjelasan sepintas tentang season sebelumnya, dan perkenalan ulang karakter dan jalan cerita', 'Screenshot_16_2_7_20150412.png', '2015-05-16 13:04:55', 3, 18, 'publish'),
(8, 11, 'Episode 12', 'ansatsu-kyoushitsu-episode-12-subtitle-indonesia', 'pertarungan antara kelas E dan Klub Football Sekolah', '27_2_8_20150412.png', '2015-04-12 14:26:50', 2, 7, 'publish'),
(9, 32, 'Episode 1', 'nagato-yuki-chan-no-shoushitsu-episode-1-subtitle-indonesia', 'perkenalan karakter dan jalan cerita film', 'Screenshot_3_2_9_20150412.png', '2015-04-12 14:34:56', 2, 8, 'publish'),
(12, 28, 'Episode 2', 'dungeon-ni-deai-wo-motomeru-no-wa-machigattei-episode-2-subtitle-indonesia', 'Naik level', 'Screenshot_4_2_12_20150412.png', '2015-04-12 14:44:48', 2, 8, 'publish'),
(15, 15, 'Episode 11', 'saenai-heroine-no-sodatekata-episode-11-subtitle-indonesia', 'Jebakan unutk sang sepupu', '15_2_15_20150412.png', '2015-04-12 14:49:48', 2, 8, 'publish'),
(18, 31, 'Episode 2', 'owari-no-seraph-episode-2-subtitle-indonesia', 'Peertemanan dan hukuman', 'screenshot_6-2-41-20150501-1430471616.png', '2015-04-12 14:56:13', 2, 10, 'publish'),
(19, 19, 'Episode 1', 'shokugeki-no-souma-episode-1-subtitle-indonesia', 'Perkenalan ', 'Screenshot_7_2_19_20150412.png', '2015-05-16 19:23:58', 3, 10, 'publish'),
(20, 25, 'Episode 2', 'kekkai-sensen-episode-2-subtitle-indonesia', 'matanya keren', 'Screenshot_8_2_20_20150413.png', '2015-04-13 11:27:45', 2, 8, 'publish'),
(21, 27, 'Episode 2', 'arslan-senki-episode-2-subtitle-indonesia', 'pertarungan baru Pangeran Arslan ', 'Screenshot_9_2_21_20150414.png', '2015-05-26 16:18:15', 4, 7, 'publish'),
(22, 32, 'Episode 2', 'nagato-yuki-chan-no-shoushitsu-episode-2-subtitle-indonesia', 'acara natal di ruang klub sastra', 'Screenshot_10_2_22_20150414.png', '2015-04-14 19:50:20', 2, 9, 'publish'),
(23, 33, 'Episode 1', 'hibike-euphonuim-episode-1-subtitle-indonesia', 'Perkenalan karakter dan jalan cerita', 'Screenshot_12_2_23_20150415.png', '2015-05-14 16:23:23', 3, 10, 'publish'),
(24, 33, 'Episode 2', 'hibike-euphonuim-episode-2-subtitle-indonesia', 'Pemeilihan alat Orkertra yang dimulai dari perkenalan alat dari masing masing kandidat/perwakilan pengguna alat', 'Screenshot_11_2_24_20150415.png', '2015-05-14 16:26:38', 3, 11, 'publish'),
(25, 34, 'Episode 1', 'migakura-gakuen-episode-1-subtitle-indonesia', 'perkenalan dan penjelasan jalan cerita', 'Screenshot_13_2_25_20150415_1429115251.png', '2015-04-15 16:27:32', 2, 9, 'publish'),
(26, 34, 'Episode 2', 'migakura-gakuen-episode-2-subtitle-indonesia', 'Menemukan kekuatan pertama kali dan kekuatan itu tidak memerlukan perantara seperti siswa pada umumnya', 'Screenshot_14_2_26_20150415_1429115367.png', '2015-04-15 16:29:27', 2, 7, 'publish'),
(28, 20, 'Episode 1', 'denpa-kyoushi-episode-1-subtitle-indonesia', 'Perkenalan karakter da jalan cerita', 'Screenshot_16_2_28_20150417.png', '2015-05-14 14:07:09', 3, 29, 'publish'),
(31, 33, 'Episode 3', 'hibike-euphonuim-episode-3-subtitle-indonesia', 'Persiapan menuju babak kualifikasi orkestra nasional', 'Screenshot_21_2_31_20150424.png', '2015-05-14 16:28:08', 3, 18, 'publish'),
(32, 34, 'Episode 3', 'migakura-gakuen-episode-3-subtitle-indonesia', 'pertarungan welawan gadis idaman', 'fuftv-migakura-gakuen-episode-3-2-46-20150507-1430978465.png', '2015-04-25 04:53:17', 2, 15, 'publish'),
(34, 28, 'Episode 3', 'dungeon-ni-deai-wo-motomeru-no-wa-machigattei-episode-3-subtitle-indonesia', 'Pisau legendaris', 'screenshot_23-2-34-20150426-1430026369.png', '2015-04-26 05:32:50', 2, 12, 'publish'),
(35, 28, 'Episode 4', 'dungeon-ni-deai-wo-motomeru-no-wa-machigattei-episode-4-subtitle-indonesia', 'Mendapatkan seorang Suporter', 'screenshot_24-2-35-20150426-1430026467.png', '2015-04-26 05:34:27', 2, 18, 'publish'),
(36, 39, 'Episode 1', 'grisaia-no-rakuen-episode-1-subtitle-indonesia', 'Perkenalan dan penjelasan jalan cerita', 'screenshot_25-2-36-20150427-1430140214.png', '2015-04-27 13:10:14', 2, 19, 'publish'),
(37, 27, 'Episode 3', 'arslan-senki-episode-3-subtitle-indonesia', 'Pengjianantan jendral', 'screenshot_26-2-37-20150428-1430222233.png', '2015-04-28 11:57:13', 2, 17, 'publish'),
(40, 33, 'Episode 4', 'hibike-euphonuim-episode-4-subtitle-indonesia', 'daftar latihan untu Sunfest', 'screenshot_28-2-40-20150429-1430304086.png', '2015-05-14 16:31:00', 3, 14, 'publish'),
(41, 25, 'Episode 3', 'kekkai-sensen-episode-3-subtitle-indonesia', 'pertermpuran', 'fuftv-kekkai-sensen-episode-3-2-42-20150501-1430472576.png', '2015-05-01 09:26:24', 2, 17, 'publish'),
(42, 25, 'Episode 4', 'kekkai-sensen-episode-4-subtitle-indonesia', 'kemunculan makhluk terkuat', 'fuftv-kekkai-sensen-episode-4-2-43-20150501-1430496780.png', '2015-05-01 09:45:16', 2, 11, 'publish'),
(43, 22, 'Episode 1', 'gunslinger-stratos-the-animation-episode-1-subtitle-indonesia', 'pereknalan karakter dan penjelasan tema', 'fuftv-gunslinger-stratos-the-animation-episode-1-2-43-20150501-1430497597.png', '2015-05-01 16:26:37', 2, 14, 'publish'),
(44, 22, 'Episode 2', 'gunslinger-stratos-the-animation-episode-2-subtitle-indonesia', 'Pilihan, bergabung atau lupakan', 'fuftv-gunslinger-stratos-the-animation-episode-2-2-45-20150501-1430497725.png', '2015-05-01 16:28:05', 2, 13, 'publish'),
(45, 22, 'Episode 3', 'gunslinger-stratos-the-animation-episode-3-subtitle-indonesia', 'Kematian rekan kerja seperjuangan', 'fuftv-gunslinger-stratos-the-animation-episode-3-2-45-20150501-1430497794.png', '2015-05-01 16:29:54', 3, 15, 'publish'),
(47, 25, 'Episode 5', 'kekkai-sensen-episode-5-subtitle-indonesia', 'pertarungan', 'fuftv-kekkai-sensen-episode-5-3-48-20150510-1431260462.png', '2015-05-10 12:21:02', 3, 16, 'publish'),
(49, 33, 'Episode 5', 'hibike-euphonuim-episode-5-subtitle-indonesia', 'penampilan saat vestifal', 'fuftv-hibike-euphonuim-episode-5-3-49-20150514-1431621412.png', '2015-05-14 16:36:52', 3, 21, 'publish'),
(50, 33, 'Episode 6', 'hibike-euphonuim-episode-6-subtitle-indonesia', 'motifasi bermain alatkmusik', 'fuftv-hibike-euphonuim-episode-6-3-52-20150516-1431760679.png', '2015-05-16 07:17:59', 3, 37, 'publish'),
(51, 44, 'Episode 1 Missing you', 'secret-love-kara-episode-1-missing-you-subtitle-indonesia', 'Han Seung Yeon dan Yun woo jin', 'fuftv-secret-love-kara-episode-1-missing-you-3-51-20150516-1431758606.jpg', '2015-05-16 06:55:55', 3, 25, 'publish'),
(52, 43, 'Episode 692', 'one-piece-692-subtitle-indonesia', 'Deresrosa Arc', 'fuftv-one-piece-episode-692-9-53-20150516-1431765886.jpg', '2015-05-16 08:45:36', 9, 37, 'publish'),
(53, 45, 'Episode 233', 'fairy-tail-episode-233-subtitle-indonesia', 'New', 'fuftv-fairy-tail-episode-233-9-53-20150516-1431766718.jpg', '2015-05-16 08:58:38', 9, 17, 'publish'),
(54, 16, 'Episode 2', 'yahari-ore-no-seishun-season-2-episode-2-subtitle-indonesia', 'yahari', 'fuftv-yahari-ore-no-seishun-season-2-episode-2-3-55-20150516-1431782342.png', '2015-05-16 13:19:02', 3, 12, 'publish'),
(55, 16, 'Episode 3', 'yahari-ore-no-seishun-season-2-episode-3-subtitle-indonesia', 'yahari episode 3', 'fuftv-yahari-ore-no-seishun-season-2-episode-3-3-55-20150516-1431782764.png', '2015-05-16 13:26:04', 3, 8, 'publish'),
(56, 16, 'Episode 4', 'yahari-ore-no-seishun-season-2-episode-4-subtitle-indonesia', 'Yahari episode 4', 'fuftv-yahari-ore-no-seishun-season-2-episode-4-3-56-20150516-1431783792.png', '2015-05-16 13:43:12', 3, 7, 'publish'),
(57, 16, 'Episode 5', 'yahari-ore-no-seishun-season-2-episode-5-subtitle-indonesia', 'Yahari episode 5', 'fuftv-yahari-ore-no-seishun-season-2-episode-5-3-57-20150516-1431784613.png', '2015-05-16 13:56:53', 3, 8, 'publish'),
(58, 16, 'Episode 6', 'yahari-ore-no-seishun-season-2-episode-6-subtitle-indonesia', 'Yahari episode 6', 'fuftv-yahari-ore-no-seishun-season-2-episode-6-3-58-20150516-1431785421.png', '2015-05-16 15:38:00', 9, 11, 'publish'),
(59, 16, 'Episode 7', 'yahari-ore-no-seishun-season-2-episode-7-subtitle-indonesia', 'Yahari episode 7', 'fuftv-yahari-ore-no-seishun-season-2-episode-7-3-59-20150516-1431785715.png', '2015-04-16 15:19:00', 9, 14, 'publish'),
(60, 46, 'Episode 1', 'producer-episode-1-subtitle-indonesia', 'Perkenalan dan penjelasan jalan cerita', 'fuftv-producer-episode-1-3-60-20150516-1431794353.jpg', '2015-05-22 17:10:16', 3, 31, 'publish'),
(61, 19, 'Episode 2', 'shokugeki-no-souma-episode-2-subtitle-indonesia', 'Episode 2 Sholuggeki no Shoma', 'fuftv-shokugeki-no-souma-episode-2-3-61-20150517-1431804856.png', '2015-05-21 12:06:03', 3, 12, 'publish'),
(62, 19, 'Episode 3', 'shokugeki-no-souma-episode-3-subtitle-indonesia', 'Episode 3 Shokugeki no Souma', 'fuftv-shokugeki-no-souma-episode-3-3-62-20150517-1431805398.png', '2015-05-16 19:43:18', 3, 10, 'publish'),
(63, 19, 'Episode 4', 'shokugeki-no-souma-episode-4-subtitle-indonesia', 'episode 4 Shokugeki no Souma', 'fuftv-shokugeki-no-souma-episode-4-3-63-20150517-1431805716.png', '2015-05-17 00:01:00', 3, 10, 'publish'),
(64, 19, 'Episode 5', 'shokugeki-no-souma-episode-5-subtitle-indonesia', 'Episode 5 Shokugeki no Souma', 'fuftv-shokugeki-no-souma-episode-5-3-64-20150517-1431806051.png', '2015-05-16 22:00:00', 3, 6, 'publish'),
(65, 19, 'Episode 6', 'shokugeki-no-souma-episode-6-subtitle-indonesia', 'Episode 6 Shokugeki no Souma', 'fuftv-shokugeki-no-souma-episode-6-3-65-20150517-1431806369.png', '2015-05-17 02:00:00', 3, 11, 'publish'),
(66, 31, 'Episode 7', 'owari-no-seraph-episode-7-subtitle-indonesia', 'Episode 7 Owari no Seraph\r\n', 'fuftv-owari-no-seraph-episode-7-3-67-20150517-1431808235.png', '2015-05-25 16:25:49', 3, 15, 'publish'),
(67, 47, 'Episode 19', 'kuroko-no-basket-season-3-episode-19-subtitle-indonesia', '-', 'fuftv-kuroko-no-basket-season-3-episode-19-9-68-20150517-1431848325.png', '2015-05-17 07:38:45', 9, 17, 'publish'),
(68, 43, 'Episode 693', 'one-piece-episode-693-subtitle-indonesia', '-', 'fuftv-one-piece-episode-693-9-68-20150517-1431848714.jpg', '2015-05-17 07:45:14', 9, 159, 'publish'),
(69, 27, 'Episode 7', 'arslan-senki-episode-7-subtitle-indonesia', 'Arslan Senki episode 7', 'fuftv-arslan-senki-episode-7-3-69-20150518-1431922371.png', '2015-05-18 04:12:50', 3, 16, 'publish'),
(70, 25, 'Episode 7', 'kekkai-sensen-episode-7-subtitle-indonesia', 'kekkai sensen episode 7', 'fuftv-kekkai-sensen-episode-7-3-70-20150518-1431958928.png', '2015-05-18 14:22:08', 3, 14, 'publish'),
(71, 48, 'Episode 7', 'ore-monigatari-episode-7-subtitle-indonesia', 'Ore Monogatari episode 7', 'fuftv-ore-monigatari-episode-7-3-71-20150521-1432211227.jpg', '2015-05-21 12:31:41', 3, 10, 'publish'),
(72, 34, 'Episode 7', 'migakura-gakuen-episode-7-subtitle-indonesia', 'Migakura gakuen episode 7', 'fuftv-mikagura-gakuen-episode-7-3-74-20150523-1432316193.png', '2015-05-22 17:36:33', 3, 17, 'publish'),
(73, 16, 'Episode 8', 'yahari-ore-no-seishun-season-2-episode-8-subtitle-indonesia', 'Yahari episode 8', 'fuftv-yahari-ore-no-seishun-season-2-episode-8-3-74-20150522-1432312177.png', '2015-05-22 16:29:37', 3, 39, 'publish'),
(74, 38, 'Episode 7', 'punchline-episode-7-subtitle-indonesia', 'Punchline Episode 7', 'fuftv-punchline-episode-7-3-74-20150523-1432317727.png', '2015-05-22 18:10:15', 3, 31, 'publish'),
(75, 49, 'Episode 1 ', 'ex-girlfriend-club-episode-1-subtitle-indonesia', 'It’s true that fiction is often based on fact. Bang Myeong Soo (Byun Yo Han) is a webtoon writer who has used his own personal experiences with his ex-girlfriends as source material for his popular webcomic. In fact, he has gone into great detail about the personalities and idiosyncrasies of all the women he has dated. When his webcomic is optioned to be made into a film, the producer assigned to the project at the film production company happens to be Kim Soo Jin (Song Ji Hyo), his most-recent ex-girlfriend. When the project requires that Soo Jin also gather Myeong Soo’s other ex-girlfriends – Jang Hwa Young (Lee Yoon Ji), Na Ji Ah (Jang Ji Eun) and Ra Ra (Hwa Young) – does the film project stand a chance at getting off the ground? “Ex-Girlfriend Club” is a 2015 South Korean drama series directed by Kwon Seok Jang.', 'fuftv-ex-girlfriend-club-ex-girlfriend-club-episode-1-subtitle-indonesia-6-75-20150523-1432317838.jpg', '2015-05-22 18:24:27', 3, 21, 'publish'),
(76, 46, 'Episode 2', 'producer-episode-2-subtitle-indonesia', 'Producer Episode 2 Subtitle Indonesia', 'fuftv-producer-episode-2-3-76-20150523-1432320645.png', '2015-05-22 19:49:41', 3, 31, 'publish'),
(78, 48, 'Episode 1', 'ore-monigatari-episode-1-subtitle-indonesia', 'perkenalan karakter dan jalan cerita', 'fuftv-ore-monigatari-episode-1-3-77-20150523-1432323289.png', '2015-05-23 06:00:00', 3, 5, 'publish'),
(79, 48, 'Episode 2', 'ore-monigatari-episode-2-subtitle-indonesia', 'Ore Monigatari !! episode 2', 'fuftv-ore-monigatari-episode-2-3-79-20150523-1432323735.png', '2015-05-23 09:32:32', 3, 8, 'publish'),
(80, 44, 'Episode 2', 'secret-love-kara-episode-2-subtitle-indonesia', 'Han Seung Yeon dan Yun woo jin', 'fuftv-secret-love-kara-episode-2-5-80-20150523-1432324719.png', '2015-05-26 05:13:43', 6, 16, 'publish'),
(81, 49, 'Episode 2', 'ex-girlfriend-club-episode-2-subtitle-indonesia', 'It’s true that fiction is often based on fact. Bang Myeong Soo (Byun Yo Han) is a webtoon writer who has used his own personal experiences with his ex-girlfriends as source material for his popular webcomic. In fact, he has gone into great detail about the personalities and idiosyncrasies of all the women he has dated. When his webcomic is optioned to be made into a film, the producer assigned to the project at the film production company happens to be Kim Soo Jin (Song Ji Hyo), his most-recent ex-girlfriend. When the project requires that Soo Jin also gather Myeong Soo’s other ex-girlfriends – Jang Hwa Young (Lee Yoon Ji), Na Ji Ah (Jang Ji Eun) and Ra Ra (Hwa Young) – does the film project stand a chance at getting off the ground? “Ex-Girlfriend Club” is a 2015 South Korean drama series directed by Kwon Seok Jang.', 'fuftv-ex-girlfriend-club-episode-2-6-81-20150523-1432325469.jpg', '2015-05-22 20:19:34', 6, 26, 'publish'),
(82, 28, 'Episode 8', 'dungeon-ni-deai-wo-motomeru-no-wa-machigattei-episode-8-subtitle-indonesia', 'Dungeon ni Deai wo Motomeru no wa Machigattei Episode 8', 'fuftv-dungeon-ni-deai-wo-motomeru-no-wa-machigattei-episode-8-3-82-20150523-1432326823.png', '2015-05-22 20:34:29', 3, 19, 'publish'),
(83, 29, 'Episode 7', 'nisekoi-season-2-episode-7-subtitle-indonesia', 'Nisekoi Season 2 Episode 7 "Munculnya adik Onodera"', 'fuftv-nisekoi-season-2-episode-7-3-83-20150523-1432327915.png', '2015-05-22 20:51:53', 3, 22, 'publish'),
(84, 49, 'Episode 4', 'ex-girlfriend-club-episode-4-subtitle-indonesia', 'Ex-Girlfriend Club Episode 4', 'fuftv-ex-girlfriend-club-episode-4-3-84-20150523-1432328641.png', '2015-05-22 21:58:31', 3, 29, 'publish'),
(85, 49, 'Episode 3', 'ex-girlfriend-club-episode-3-subtitle-indonesia', 'Ex-Girlfriend Club Episode 3', 'fuftv-ex-girlfriend-club-episode-3-3-85-20150523-1432331865.png', '2015-05-22 21:57:45', 3, 28, 'publish'),
(86, 19, 'Episode 8', 'shokugeki-no-souma-episode-8-subtitle-indonesia', 'Shokugeki no Souma Episode 8', 'fuftv-shokugeki-no-souma-episode-8-3-86-20150523-1432373818.png', '2015-05-23 09:36:57', 3, 35, 'publish'),
(87, 24, 'Episode 8', 're-kan-episode-8-subtitle-indonesia', 'Re-kan Episode 8', 'fuftv-re-kan-episode-8-3-87-20150523-1432392130.png', '2015-05-23 14:42:10', 3, 29, 'publish'),
(88, 45, 'Episode 234', 'fairy-tail-episode-234-subtitle-indonesia', 'Fairy Tail Episode 234', 'fuftv-fairy-tail-episode-234-3-88-20150523-1432393455.png', '2015-05-23 15:04:15', 3, 42, 'publish'),
(89, 25, 'Episode 8', 'kekkai-sensen-episode-8-subtitle-indonesia', 'Kekkai Sensen Episode 8', 'fuftv-kekkai-sensen-episode-8-3-89-20150524-1432453385.png', '2015-05-24 08:01:58', 3, 29, 'publish'),
(90, 43, 'Episode 694', 'one-piece-episode-694-subtitle-indonesia', '-', 'fuftv-one-piece-episode-694-9-90-20150524-1432480555.jpg', '2015-05-24 15:20:35', 9, 118, 'publish'),
(91, 26, 'Episode 20', 'fate-stay-night-unlimited-blade-works-episode-20-subtitle-indonesia', 'Fate Stay Night - Unlimited Blade Works Part 2 Episode 20', 'fuftv-fate-stay-night-unlimited-blade-works-episode-20-3-91-20150524-1432481929.png', '2015-05-24 15:38:49', 3, 33, 'publish'),
(92, 27, 'Episode 8', 'arslan-senki-episode-8-subtitle-indonesia', 'Arslan Senki Episode 8 ', 'fuftv-arslan-senki-episode-8-3-103-20150527-1432696841.png', '2015-05-27 03:20:41', 3, 34, 'publish'),
(93, 39, 'Episode 6', 'grisaia-no-rakuen-episode-6-subtitle-indonesia', 'Grisaia no Rakuen Episode 6', 'fuftv-grisaia-no-rakuen-episode-6-3-103-20150527-1432696866.png', '2015-05-27 03:21:06', 3, 13, 'publish'),
(94, 51, 'BluRay', 'kamisama-no-iu-toori-2014-live-action-bluray-subtitle-indonesia', 'Kamisama no iu toori (2014) - Live Action BluRay', 'fuftv-kamisama-no-iu-toori-2014-live-action-bluray-3-103-20150527-1432696888.png', '2015-05-27 03:21:28', 3, 36, 'publish'),
(95, 31, 'Episode 8', 'owari-no-seraph-episode-8-subtitle-indonesia', 'Owari no Seraph Episode 8\r\n', 'fuftv-owari-no-seraph-episode-8-3-103-20150527-1432696911.png', '2015-05-27 03:21:51', 3, 12, 'publish'),
(96, 56, 'Web-DL', 'the-spongebob-movie-sponge-out-of-water-2015-web-dl-subtitle-indonesia', 'During a fight between the Krusty Krab and Plankton, the secret formula disappears and all of Bikini Bottom goes into a terrible apocalypse. The Bikini Bottomites go crazy and they all believe that Spongebob and Plankton stole the secret formula. The two new teammates create a time machine to get the secret formula before it disappears and also go to some weird places along the way including a time paralex where they meet a time wizard named Bubbles who is a dolphin. The two later get to the time when the formula disappeared and take it back to the present day time. They then realized that it’s a fake formula Plankton made when he was taking the real one and the Bikini Bottomites try to destroy Spongebob (Plankton runs away) Spongebob smells Krabby patties and so does everyone else so the Bikini Bottomites follow it (instead of destroying Spongebob) and they arrive at the bank of the surface. Everyone except Spongebob, Patrick, Mr. Krabs, Squidward, Sandy, and a stowaway Plankton go back home while the six characters that stayed are greeted by Bubbles who takes them to the surface where a pirate is selling Krabby Patties. The team learns that they can write in a magic book and it’ll make whatever they write in it become true. They decide to turn themselves into superheroes and battle the pirate. Meanwhile, Plankton writes himself as a superhero too.', 'fuftv-the-spongebob-movie-sponge-out-of-water-2015-3-103-20150527-1432697097.jpg', '2015-05-27 03:25:11', 3, 14, 'publish'),
(97, 50, 'Episode 7', 'sidonia-no-kishi-daikyuu-wakusei-seneki-episode-7-subtitle-indonesia', 'Sidonia no Kishi: Daikyuu Wakusei Seneki Episode 7 Subtitle Indonesia', 'fuftv-sidonia-no-kishi-daikyuu-wakusei-seneki-episode-7-3-103-20150527-1432696938.png', '2015-05-27 03:22:18', 3, 18, 'publish'),
(98, 44, 'Episode 3', 'secret-love-kara-episode-3-subtitle-indonesia', 'Nicole Jung as Mary\r\nLee Kwang Soo as Tae Yang', 'fuftv-secret-love-kara-episode-3-3-103-20150527-1432697256.jpg', '2015-05-27 03:27:36', 3, 13, 'publish'),
(99, 44, 'Episode 4', 'secret-love-kara-episode-4-subtitle-indonesia', 'Nicole Jung as Mary \r\nLee Kwang Soo as Tae Yang', 'fuftv-secret-love-kara-episode-4-3-103-20150527-1432697351.jpg', '2015-05-27 03:29:34', 3, 6, 'publish'),
(100, 44, 'Episode 5', 'secret-love-kara-episode-5-subtitle-indonesia', 'Kang Ji Young as So Yul\r\nBae Soo Bin as Hyun Joon\r\nKim Seo Ra as So Yul’s mother', 'fuftv-secret-love-kara-episode-5-9-104-20150527-1432723698.png', '2015-05-27 10:48:18', 9, 3, 'publish'),
(101, 44, 'Episode 6', 'secret-love-kara-episode-6-subtitle-indonesia', 'Kang Ji Young as So Yul\r\nBae Soo Bin as Hyun Joon\r\nKim Seo Ra as So Yul’s mother', 'fuftv-secret-love-kara-episode-6-5-101-20150527-1432662845.png', '2015-05-27 14:00:00', 5, 0, 'berjadwal'),
(102, 44, 'Episode 2', 'secret-love-kara-episode-2-subtitle-indonesia', 'Ji Hye (Han Seung Yeon)\r\nHyun Woong (Yeon Woo Jin)', 'fuftv-secret-love-kara-episode-2-5-102-20150527-1432663632.png', '2015-05-26 18:07:12', 5, 16, 'publish'),
(103, 33, 'Episode 8', 'hibike-euphonuim-episode-8-subtitle-indonesia', 'Hibike! Euphonuim Episode 8', 'fuftv-hibike-euphonuim-episode-8-3-103-20150527-1432698831.png', '2015-05-27 03:53:51', 3, 17, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `fx_jdlfilm`
--

CREATE TABLE IF NOT EXISTS `fx_jdlfilm` (
  `idfilm` int(45) NOT NULL AUTO_INCREMENT,
  `idkategori` int(45) NOT NULL,
  `jdlfilm` varchar(100) DEFAULT 'Tidak diketahui',
  `alias` varchar(255) NOT NULL,
  `typefilm` varchar(45) DEFAULT 'Tidak diketahui',
  `statusfilm` varchar(45) DEFAULT 'Tidak diketahui',
  `productionfilm` varchar(45) DEFAULT 'Tidak diketahui',
  `airedfilm` varchar(45) DEFAULT 'Tidak diketahui',
  `totalepsfilm` varchar(45) DEFAULT 'Tidak diketahui',
  `durasifilm` varchar(45) DEFAULT 'Tidak diketahui',
  `btsusiafilm` varchar(45) DEFAULT 'Tidak diketahui',
  `posterfilm` varchar(200) DEFAULT 'default.jpg',
  `timefilm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `filmview` int(11) NOT NULL,
  `iduser` int(10) DEFAULT NULL,
  `deskripsifilm` text,
  PRIMARY KEY (`idfilm`),
  KEY `fk_fx_jdlfilm_fx_kategori1` (`idkategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `fx_jdlfilm`
--

INSERT INTO `fx_jdlfilm` (`idfilm`, `idkategori`, `jdlfilm`, `alias`, `typefilm`, `statusfilm`, `productionfilm`, `airedfilm`, `totalepsfilm`, `durasifilm`, `btsusiafilm`, `posterfilm`, `timefilm`, `filmview`, `iduser`, `deskripsifilm`) VALUES
(5, 1, 'Haikyuu!! Season 2', 'haikyuu-season-2', 'TV', 'On going', 'Aniplex, Kantai', 'tidak diketahui', 'tidak dikeahui', '24 menit per episode', '12 Tahun +', 'hakyouu Season 2_2_5_20150328_1427523401.jpg', '2015-03-28 06:16:41', 13, 3, 'In a fantasy world, fighter Tatsumi sets out for the Capitol to earn money for his starving village, and finds a world of unimaginable corruption, all spreading from the depraved Prime Minister who controls the child Emperor''s ear. After nearly becoming a victim of this corruption himself, Tatsumi is recruited by Night Raid, a group of assassins dedicated to eliminating the corruption plaguing the Capitol by mercilessly killing those responsible.On the surface Akame ga Kill does seem to be different from other shounens because of it''s dark theme and excessive gore. But when you look a little bit deeper Akame ga Kill is actually pretty similar to other stereotypical shounens. You have characters always blurting out the obvious. You have the naive yet strong protagonist that powers up over time. You have almost all of the female characters fall for the protagonist. Akame ga Kill tries to be different show with it''s dark theme, but looking at it closer there isn''t much difference.\r\n\r\nProbably one of the more prominent problems in Akame ga Kill is the comedy. The problem isn''t in the comedy itself. (Though I admit most of the humor was stale) but rather the execution. Apparently someone thought it was a good idea to slide in a petty joke in many emotional or dramatic scenes. Probably the best example of this would be a scene where Tatsumi finds out about the corruption in the capital and mourns over his loved ones that died to this corruption. This was supposed to be a very emotional scene but then Night Raid kidnaps Tatsumi and makes petty jokes along the way. It is scenes like this that make me unable to take the show very seriously.'),
(11, 1, 'Ansatsu Kyoushitsu', 'ansatsu-kyoushitsu', 'TV', 'Mengudara', 'Aniplex, AIC A.S.T.A., Atlus, Aniplex of Amer', '2015', '24 episode', '23 menit', 'Semua Umur', 'Ansatsu Classroom_2_11_20150329_1427606249.jpg', '2015-03-29 05:17:29', 20, 2, 'A humorous and action-packed story about a class of misfits who are trying to kill their new teacher—an alien octopus with bizarre powers and super strength! The teacher has just destroyed the moon and is threatening to destroy the earth—unless his students can destroy him first. What makes things more complicated is that he''s the best teacher they''ve ever had!'),
(14, 1, 'Persona 3 the Movie 2: Midsummer Knight''s Dream', 'persona-3-the-movie-2-midsummer-knights-dream', 'Movie', 'END', 'Aniplex, AIC A.S.T.A., Atlus, Aniplex of Amer', '2014', 'tidak di ketahui', '1 jam 38 menit', 'PG-13 - Teens 13 or older', 'Persona 3 the Movie 2  Midsummer Knight''s Dream_2_14_20150403_1428077069.jpg', '2015-04-03 16:04:29', 12, 2, 'A quick summary about this movie; SEES has found a way to erase the Dark Hour for good. Unfortunately, a clear objective always have obstacles. Strega, a three-people group of persona-users opposes to SEES''s objective, creating a clash between characters. That''s not all, as the story progresses, the team begins to create their own problems. Yuki faces a predicament against himself and two members of the team conflict that completely changes the course of the story into a more dark, serious story. But the main summary points aren''t the reason why the story in Persona 3- Midsummer Knight''s Dream deserves a 10/10. The reason is simple. The story is flawless. Reason, logic, motivation, pace, balance, everything that creates a flawless story line was incorporated within this movie. The movie balanced the humor and leisure of summertime with the dark reality hidden behind the shadows. The motivation and reason behind specific characters are not only well presented through their actions and words but also perfectly understandable and for some of you, are able to sympathize alongside them. The pace was very smooth and felt just like a jog down the park. It gave us time to ponder thoughts and opinions about the characters which I found to be very considerate since a lot of character development is displayed in this movie. For the reason Persona 3- Midsummer Knights Dream utilized comprehensible logic, reason, gentle pace, and perfect balance, I think the story deserves a 10/10, seeing how it has a flawless, clean story.\r\n\r\nAhem.... Moving on to sound. I have a lot to talk about sound. First, I should let everyone know that the music composer is Shoji Meguro. If you do not know this name, I am sorry, but really... You''re missing out... I have watched this man present music so fitting, so harmonizing along whatever is going on, be it a romantic first encounter or an intense, desperate situation, he freaking nails it every time and has never disappointed me in any of the games he worked as the music director. Long live Meguro-sensei! Fabulous music from the sexy rapper LJ aside, the voice acting in Midsummer Knight''s Dream was far more expressive than it was in Spring of Birth. True, the situation has called for dramatic lines and tones, but even so, it was impressive to hear characters talk in an unavoidable tragedies, or shout during battles. I have noticed how Akihiko had a lot of lines and heart-moving tones compared to the first movie, and his voice actor, Hikaru Midorikawa was golden. The words Akihiko spat when angry, the wails he cried when he found the world to be so unfair, and the shouts he screamed was amazing and top notch. Great respect to the voice actors and actresses, they have done their part perfectly. Due to the harmonic music and impressive voice acting, I would be crazy not to give 10/10 in sound. (I love Aigis''s voice actor, Maaya Sakamoto, the same VA for Shinobu in Monogatari, '),
(15, 1, 'Saenai Heroine no Sodatekata', 'saenai-heroine-no-sodatekata', 'TV', 'END', 'Aniplex, A-1 Pictures, Movic, Nitroplus, Anip', '2015', '12 Episode', '23 menit', 'PG-13 - Teens 13 or older', 'Saenai Heroine no Sodatekata_2_15_20150403_1428077244.jpg', '2015-04-03 16:07:25', 19, 2, 'The life of Tomoyo Aki, a highschool otaku working part time to support his BD hoarding. With remarkable luck, he bumps head-first into, Megumi Kato, the most beautiful girl he has ever seen. Naturally, the meeting twists his life into a complicated torrent of relationships. Eriri Spencer Sawamura, his half-foreigner childhood friend who''s always valued her relationship with MC. Kasumigaoka Utaha, a cold, composed renowned literary genius who shoves everyone aside from our protagonist. What is this? An eroge introduction?\r\n\r\nThe tale of a small not quite doujin circle, but not quite indie studio''s journey through the tough territory of comiket and beyond.\r\nIn reality, the 2 most popular girls in highschool would probably be fking the football player. But in our dreams, they are fighting for your attention. That is why this anime is appealing, our dreams are being put into animation, kind of. This anime offers everything you need to enjoy life. The music, character and plot seamlessly offer the viewer a breath-taking experience. The picture they use for this anime makes my pants tighter every time.'),
(16, 1, 'Yahari Ore no Seishun Season 2', 'yahari-ore-no-seishun-season-2', 'TV', 'Aired', 'Brains Base, TBS, Sentai FilmworksL, Atelier ', '2015', 'tidak di ketahui', '23 menit', 'PG-13 - Teens 13 or older', 'Yahari Ore no Seishun Season 2_2_16_20150408_1428457639.jpg', '2015-04-08 01:47:19', 142, 2, '“Yahari Ore no Seishun Love Comedy wa Machigatteiru” (“My Teen Romantic Comedy SNAFU”) adalah serial light novel yang ditulis oleh Wataru Watari dan diilustrasikan oleh Ponkan8. Light novels ini memulai debutnya pada Maret 2011 dan dipublikasikan pertama kali dalam majalah Gagaga Bunko, Shogakukan. Light novel ini jua telah mendapatkan 3 manga spin-off, adapatasi anime, dan visual novel.\r\n\r\nKisah komedi romantis yang menceritakan tentang kehidupan seorang murid antisosial bernama Hachiman Hikigaya yang menjalani hidupnya sendiri tanpa teman ataupun pacar. Ketika ia melihat teman kelas-nya berbicara antara satu dengan yang lain, ia pun bergumam, “Mereka adalah kumpulan pembohong.” Ketika ia di tanya akan cita – cita-nya, ia menjawab, “Aku tidak akan bekerja.” Oleh karena itu guru kelas-nya pun memaksa Hachiman untuk masuk ke dalam “Service Club” dan menjadi relawan, Dan tidak di sangka di dalam club itu juga ternyata terdapat gadis tercantik di sekolah yang bernama Yukino Yukinoshita.'),
(17, 1, 'Uta no Prince sama Maji Love Revolutions', 'uta-no-prince-sama-maji-love-revolutions', 'tidak di ketahu', 'tidak di ketahui', 'A-1 Pictures, Sentai FilmworksL, Showgate', '2015', 'tidak di ketahui', '24 menit per episode', 'PG-13 - Teens 13 or older', 'Uta no Prince sama Maji Love Revolutions_2_17_20150408_1428457977.jpg', '2015-04-08 01:52:57', 10, 2, 'The third anime adaptation of the otome game Uta no☆Prince-sama  Which fansubbers do you like the best? Click + to approve of their subs for this show. Click - if you don''t think they did such a great job The third anime adaptation of the otome game Uta no☆Prince-sama  Which fansubbers do you like the best? Click + to approve of their subs for this show. Click - if you don''t think they did such a great jobThe third anime adaptation of the otome game Uta no☆Prince-sama  Which fansubbers do you like the best? Click + to approve of their subs for this show. Click - if you don''t think they did such a great jobThe third anime adaptation of the otome game Uta no☆Prince-sama  Which fansubbers do you like the best? Click + to approve of their subs for this show. Click - if you don''t think they did such a great jobThe third anime adaptation of the otome game Uta no☆Prince-sama  Which fansubbers do you like the best? Click + to approve of their subs for this show. Click - if you don''t think they did such a great jobThe third anime adaptation of the otome game Uta no☆Prince-sama  Which fansubbers do you like the best? Click + to approve of their subs for this show. Click - if you don''t think they did such a great jobThe third anime adaptation of the otome game Uta no☆Prince-sama  Which fansubbers do you like the best? Click + to approve of their subs for this show. Click - if you don''t think they did such a great jobThe third anime adaptation of the otome game Uta no☆Prince-sama  Which fansubbers do you like the best? Click + to approve of their subs for this show. Click - if you don''t think they did such a great jobThe third anime adaptation of the otome game Uta no☆Prince-sama  Which fansubbers do you like the best? Click + to approve of their subs for this show. Click - if you don''t think they did such a great jobThe third anime adaptation of the otome game Uta no☆Prince-sama  Which fansubbers do you like the best? Click + to approve of their subs for this show. Click - if you don''t think they did such a great jobThe third anime adaptation of the otome game Uta no☆Prince-sama  Which fansubbers do you like the best? Click + to approve of their subs for this show. Click - if you don''t think they did such a great jobThe third anime adaptation of the otome game Uta no☆Prince-sama  Which fansubbers do you like the best? Click + to approve of their subs for this show. Click - if you don''t think they did such a great jobThe third anime adaptation of the otome game Uta no☆Prince-sama  Which fansubbers do you like the best? Click + to approve of their subs for this show. Click - if you don''t think they did such a great jobThe third anime adaptation of the otome game Uta no☆Prince-sama  Which fansubbers do you like the best? Click + to approve of their subs for this show. Click - if you don''t think they did such a great jobThe third anime adaptation of the otome game Uta no☆Prince-sama  Which fansubbers do you like the best? Click + to approve of their subs for this show. Click - if you don''t think they did such a great job.'),
(18, 1, 'Kyoukai no Rinne', 'kyoukai-no-rinne', 'TV', 'Mengudara', 'NHK, Brains Base, NHK Enterprises', '2015', 'tidak di ketahui', '24 menit per episode', 'PG-13 - Teens 13 or older', 'Kyoukai no Rinne_2_18_20150408_1428458226.jpg', '2015-04-08 01:57:06', 12, 2, 'As a child Sakura Mamiya mysteriously disappeared in the woods behind her grandma''s home. She returned whole and healthy, but since then she has had the power to see ghosts. Now a teenager, she just wishes the ghosts would leave her alone! At school, the desk next to Sakura''s has been empty since the start of the school year, then one day her always-absent classmate shows up, and he''s far more than what he seems!\r\n\r\nAs a child Sakura Mamiya mysteriously disappeared in the woods behind her grandma''s home. She returned whole and healthy, but since then she has had the power to see ghosts. Now a teenager, she just wishes the ghosts would leave her alone! At school, the desk next to Sakura''s has been empty since the start of the school year, then one day her always-absent classmate shows up, and he''s far more than what he seems!\r\nAs a child Sakura Mamiya mysteriously disappeared in the woods behind her grandma''s home. She returned whole and healthy, but since then she has had the power to see ghosts. Now a teenager, she just wishes the ghosts would leave her alone! At school, the desk next to Sakura''s has been empty since the start of the school year, then one day her always-absent classmate shows up, and he''s far more than what he seems!\r\nAs a child Sakura Mamiya mysteriously disappeared in the woods behind her grandma''s home. She returned whole and healthy, but since then she has had the power to see ghosts. Now a teenager, she just wishes the ghosts would leave her alone! At school, the desk next to Sakura''s has been empty since the start of the school year, then one day her always-absent classmate shows up, and he''s far more than what he seems!\r\nAs a child Sakura Mamiya mysteriously disappeared in the woods behind her grandma''s home. She returned whole and healthy, but since then she has had the power to see ghosts. Now a teenager, she just wishes the ghosts would leave her alone! At school, the desk next to Sakura''s has been empty since the start of the school year, then one day her always-absent classmate shows up, and he''s far more than what he seems!\r\nAs a child Sakura Mamiya mysteriously disappeared in the woods behind her grandma''s home. She returned whole and healthy, but since then she has had the power to see ghosts. Now a teenager, she just wishes the ghosts would leave her alone! At school, the desk next to Sakura''s has been empty since the start of the school year, then one day her always-absent classmate shows up, and he''s far more than what he seems!\r\n\r\nAs a child Sakura Mamiya mysteriously disappeared in the woods behind her grandma''s home. She returned whole and healthy, but since then she has had the power to see ghosts. Now a teenager, she just wishes the ghosts would leave her alone! At school, the desk next to Sakura''s has been empty since the start of the school year, then one day her always-absent classmate shows up, and he''s far more than what he seems! As a child Sakura Mamiya mysteriously disappeared in the woods behind her grandma''s home. She returned whole and healthy, but since then she has had the power to see ghosts. Now a teenager, she just wishes the ghosts would leave her alone! At school, the desk next to Sakura''s has been empty since the start of the school year, then one day her always-absent classmate shows up, and he''s far more than what he seems!\r\n\r\n'),
(19, 1, 'Shokugeki no Souma', 'shokugeki-no-souma', 'TV', 'Mengudara', 'J.C.Staff, Sentai Filmworks', '2015', 'tidak di ketahui', '24 menit per episode', 'PG-13 - Teens 13 or older', 'fuftv-shokugeki-no-souma-58-20150527-1432700586.jpg', '2015-04-08 02:02:32', 111, 2, 'adaptasi dari manga karya Yuuto Tsukuda dan Shun Saeki yang berjudul “Shokugeki no Souma” (“Food Wars: Shokugeki no Soma”)\r\n\r\nbermimpi untuk menjadi seorang chief profesional di restoran milik ayahnya dan melampaui kemampuan ayahnya. Ketika ia baru saja ingin mengapai mimpinya itu tiba – tiba ayahnya, Yukihira Jouichirou, menutup restorannya dan memutuskan untuk pergi berkerja ke Eropa. Walaupun banyak rintangan yang menghalangi perjuangannya, Semangat bertarung Souma tidaklah padam begitu saja. Ia pun menerima tantangan ayahnya (Jouichirou) yang mengharuskan ia untuk bertahan dalam dalam kehidupan sekolah masak elit yang dikenal dengan hanya meluluskan 10% siswa dari sekolah tersebut, apakah Souma dapat menyelesaikan tantang ayahnya itu?'),
(20, 1, 'Denpa Kyoushi', 'denpa-kyoushi', 'TV', 'Mengudara', 'A-1 Pictures, Yomiuri Telecasting Corporation', '2015', '24 episode', '25 menit perepisode', 'PG-13 - Teens 13 or older', 'Denpa Kyoushi_2_20_20150408_1428458872.jpg', '2015-04-08 02:07:52', 53, 2, 'Kagami Junichirou was known as a physics genius when he was a teenager, and he was even published in "Nature." However, after college, he suddenly lost all interest in science. As a NEET, he''s devoted himself to his anime blog and nerdy collecting habits. He claims he has a serious illness called "I can''t do anything I don''t want to do." Desperate to get him to do something with his life, his little sister manages to get him a job teaching physics at his old high school. He''s certainly an unconventional teacher, but he becomes fairly popular with the students. After helping a girl who''s being ruthlessly bullied, Kagami finds that he actually likes teaching. Will he continue his career as a weird teacher? Will he go back into physics? Or will he end up back where he started?\r\n\r\nKagami Junichirou was known as a physics genius when he was a teenager, and he was even published in "Nature." However, after college, he suddenly lost all interest in science. As a NEET, he''s devoted himself to his anime blog and nerdy collecting habits. He claims he has a serious illness called "I can''t do anything I don''t want to do." Desperate to get him to do something with his life, his little sister manages to get him a job teaching physics at his old high school. He''s certainly an unconventional teacher, but he becomes fairly popular with the students. After helping a girl who''s being ruthlessly bullied, Kagami finds that he actually likes teaching. Will he continue his career as a weird teacher? Will he go back into physics? Or will he end up back where he started?\r\n'),
(21, 1, 'Hello!! Kiniro Mosaic', 'hello-kiniro-mosaic', 'TV', 'Mengudara', 'Genco, Sentai FilmworksL, Studio Gokumi, flyi', '2015', '12 Episode', '24 menit per episode', 'PG-13 - Teens 13 or older', 'Hello!! Kiniro Mosaic2_2_21_20150408_1428459318.jpg', '2015-04-08 02:15:19', 12, 2, 'Second season of Kiniro Mosaic.A graceful, optimistic 15-year old girl, who is nicknamed Shino by her friends. She previously stayed over at Alice''s home in England, although she herself is rather bad at English and has generally bad grades. She loves western culture, especially blonde hair. As an airhead, she often misinterprets Alice''s advances towards her, but she shows that she cares more about Alice than others.Shinobu''s classmate and childhood friend since elementary school, who often serves as the tsukkomi character. Cheerful, boyish, and very energetic, she seems to be oblivious of Aya''s sentiment towards her. She has two younger siblings: a brother and sister.\r\n\r\nA 12-episode anime adaptation was produced Studio Gokumi, with direction by Tensho and character design by Kazuyuki Ueda.[1][4] The series aired in Japan on AT-X between July 6 and September 21, 2013 and was simulcast by Crunchyroll.[5][6][7] The respective opening and ending themes are "Jumping!!" and "Your Voice", both performed by Rhodanthe* (Asuka Nishi, Manami Tanaka, Risa Taneda, Nao Tōyama and Yumi Uchiyama).[8] The series is licensed in North America by Sentai Filmworks under the title Kinmoza!.[9] A second season, titled Hello!! Kin-iro Mosaic, began airing on April 5, 2015, once again simulcast by Crunchyroll and licensed by Sentai Filmworks.[10][11][12][13] The respective opening and ending themes are "Yumeiro Parade" (夢色パレード Dream-colored Parade?) and "My Best Friends", both performed by Rhodanthe*. As with the first season, the second season has been licensed by Sentai Filmworks under the title, Hello! Kinmoza'),
(22, 1, 'Gunslinger Stratos The Animation', 'gunslinger-stratos-the-animation', 'TV', 'Mengudara', 'A-1 Pictures, Square Enix, Nitroplus, Aniplex', '2015', 'tidak di ketahui', '24 menit per episode', 'PG-13 - Teens 13 or older', 'Gunslinger Stratos The Animation2_2_22_20150408_1428459602.jpg', '2015-04-08 02:20:02', 54, 2, 'Gunslinger Stratos (ガンスリンガー ストラトス Gansuringā sutoratosu?) is a series of third-person shooter video games developed by Byking (under Taito) and published by Square Enix, that debuted in arcades on July 12, 2012, with the scenario provided by Norimitsu Kaihō (from Nitroplus) based on a concept by Gen Urobuchi.[1] Its sequel, Gunslinger Stratos 2 (ガンスリンガー ストラトス2 Gansuringā sutoratosu 2?), was released on February 20, 2014, featuring new characters (Tetsuya Nomura and Akira Yasuda each creates two characters exclusively for the game[2]), new battle mechanics, and new stages.\r\n\r\nA sequel to the second game, titled Gunslinger Stratos: Reloaded (ガンスリンガー ストラトス リローデッド Gansuringā sutoratosu rirōdeddo?), was announced to be released in 2015 for Windows PC.[3]\r\n\r\nAn anime adaptation of the game, known under its expanded title, Gunslinger Stratos: THE ANIMATION (ガンスリンガー ストラトス -THE ANIMATION- Gansuringā sutoratosu Animēshon?), is announced and is set to premiere on April 4, 2015.[4] The opening theme is "Vanilla Sky" by Ayano Mashiro and the ending theme is "Mirai" by Garnidelia'),
(23, 1, 'Mahou Shoujo Lyrical Nanoha Vivid', 'mahou-shoujo-lyrical-nanoha-vivid', 'TV', 'Mengudara', 'Aniplex, A-1 Pictures', '2015', 'tidak di ketahui', '24 menit per episode', 'PG-13 - Teens 13 or older', 'Mahou Shoujo Lyrical Nanoha Vivid_2_23_20150408_1428459842.jpg', '2015-04-08 02:24:02', 12, 2, 'Magical Girl Lyrical Nanoha (魔法少女リリカルなのは Mahō Shōjo Ririkaru Nanoha?) is a Japanese anime television series directed by Akiyuki Shinbo, with screenplay written by Masaki Tsuzuki, and produced by Seven Arcs. It forms part of the Magical Girl Lyrical Nanoha series. The Japanese Association of Independent Television Stations broadcast 13 episodes between October and December 2004. The series is a spin-off of the Triangle Heart series and its story follows a girl named Nanoha Takamachi who decides to help a young mage named Yūno to recover a set of 21 artifacts named the "Jewel Seeds".\r\n\r\nMasaki Tsuzuki adapted the series into a novel, which Megami Bunko published in August 2005. King Records has adapted several soundtracks and drama CDs from the series. A sequel to the anime series titled Magical Girl Lyrical Nanoha A''s produced by Seven Arcs premiered in Japan on October 2005, broadcast on Chiba TV. A film adaptation of the anime series, also by Seven Arcs, was released in theaters on January 23, 2010,[1] accompanied by a manga series which was serialized in Megami Magazine between November 2009 and March 2011.\r\n\r\nGeneon Entertainment licensed the anime series for English-language dubbed release in North America at Anime Expo 2007 (June 29 to July 2). Due to Geneon switching distribution labels between September 2007 and July 2008, Funimation distributed the series (in a single DVD compilation-volume boxset) approximately one and a half years after the announcement of the licensing. Many production credits for the English-language dubbed release were missing.\r\n\r\nModerately well received by Japanese-language viewers, all DVD volumes peaked at 70 to 22 and below on the Oricon Animation DVD ranking and remained on the chart for at least two weeks. The series received mixed reviews from English-language critics, with some praising and others criticizing the pacing, visual style, and music. G. B. Smith criticized the English dubbed release for its inconsistency in direction.'),
(24, 1, 'Re-Kan!', 're-kan', 'TV', 'Mengudara', 'Sentai FilmworksL, Pierrot Plus', '2015', 'tidak di ketahui', '24 menit per episode', 'PG-13 - Teens 13 or older', 'Re-Kan!2_2_24_20150408_1428460259.jpg', '2015-04-08 02:31:00', 56, 2, 'Amami Hibiki is a girl who can see ghosts and other supernatural phenomena in her surroundings. The stories follow her daily life with both her friends and the otherworldly.Re-Kan! (Japanese: レーカン! Hepburn: Rēkan!?) is a Japanese four-panel manga series by Hinako Seta, serialized in Houbunsha''s Manga Time Jumbo magazine. Re-Kan! was first published as a one-shot in Manga Time Jumbo ''​s December 2009 issue, and it later began serialization with the February 2010 issue. It has been collected into four tankōbon volumes. An anime television series adaptation by Pierrot+ is scheduled to air from April 2, 2015.An anime television series adaptation by Pierrot+ is scheduled to air from April 2, 2015.[1][2] The opening theme, "Colorful Story" and the ending theme, "Kesaran Pasaran" are both performed by every♥ing, a unit composed of the voice actresses Ibuki Kido and Erii Yamazaki.[3]Crunchyroll announced that it will stream the anime, beginning on April 3, 2015.[4] Sentai Filmworks has licensed the anime for digital and home video release in North America.[5]'),
(25, 1, 'Kekkai Sensen', 'kekkai-sensen', 'TV', 'Mengudara', 'Bones, FUNimation Entertainment', '2015', 'tidak di ketahui', '24 menit per episode', 'R - 17+ (violence & profanity)', 'fuftv-kekkai-sensen-42-20150501-1430496711.jpg', '2015-04-08 02:54:23', 111, 2, 'Bercerita di New York, dimana sebuah “lubang” muncul dan menghubungkan kota tersebut dengan dunia lain. Tersegel dari dunia luar, New York dihuni oleh manusia dan penghuni dunia lain bertahun-tahun. Sekarang, tiba-tiba seseorang mengancam akan memutus semua itu, dan sekelompok manusia “super” yang stylish berusaha menghentikannya.\r\n\r\nSeiyuu yang sudah diumumkan antara lain adalah Akira Ishida, Unshou Ishizuka, Akio Ohtsuka, Shinji Ogawa, Ai Orikasa, Rie Kugimiya, Yu Kobayashi, Rikiya Koyama, Daisuke Sakaguchi, Kazuya Nakai, Keiji Fujiwara, Hikaru Midorikawa, Mamoru Miyano, dan Mitsuru Miyamoto.'),
(26, 1, 'Fate Stay Night - Unlimited Blade Works', 'fate-stay-night-unlimited-blade-works', 'TV', 'Mengudara', 'Aniplex, ufotable, Aniplex of AmericaL, Notes', '2015', 'tidak di ketahui', '24 menit per episode', 'R - 17+ (violence & profanity)', 'Fate Stay Night - Unlimited Blade Works_2_26_20150408_1428461776.jpg', '2015-04-08 02:56:16', 72, 2, 'Fuyuki City—a city surrounded by the ocean and the mountains becomes the setting for an age-old ritual. To realize the mythical Holy Grail, which is said to grant any wish from its possessor, seven masters are given seven heroic spirits chosen by the Grail. These heroic spirits or servants are: Saber, Lancer, Archer, Rider, Caster, Assassin, Berserker.\r\n\r\nEach master will enter into a contract with their assigned servants and battle the other masters and servants to the death until only one pair remains...\r\n\r\nThis is the "Holy Grail War."\r\n\r\nThis story focuses primarily on the heroine Rin Tohsaka. After her father''s death, Rin enters the Holy Grail War as the sole heir to the prestigious Tohsaka Household, with her servant Archer. But, she soon finds out that Shirou Emiya, a boy from her high school has gotten himself involved in the battles and unexpectedly saves him when he is fatally injured.\r\nFuyuki City—a city surrounded by the ocean and the mountains becomes the setting for an age-old ritual. To realize the mythical Holy Grail, which is said to grant any wish from its possessor, seven masters are given seven heroic spirits chosen by the Grail. These heroic spirits or servants are: Saber, Lancer, Archer, Rider, Caster, Assassin, Berserker.\r\nEach master will enter into a contract with their assigned servants and battle the other masters and servants to the death until only one pair remains...This is the "Holy Grail War."This story focuses primarily on the heroine Rin Tohsaka. After her father''s death, Rin enters the Holy Grail War as the sole heir to the prestigious Tohsaka Household, with her servant Archer. But, she soon finds out that Shirou Emiya, a boy from her high school has gotten himself involved in the battles and unexpectedly saves him when he is fatally injured.'),
(27, 1, 'Arslan Senki', 'arslan-senki', 'TV', 'Mengudara', 'FUNimation EntertainmentL, Magic Capsule, SAN', '2015', 'tidak di ketahui', '24 menit per episode', 'tidak di ketahui', 'Arslan Senki_2_27_20150408_1428461993.jpg', '2015-04-08 02:59:53', 103, 2, 'In the prosperous kingdom of Pars lies the Royal Capital of Ecbatana, a city of splendor and wonder, ruled by the undefeated and fearsome King Andragoras. Arslan is the young and curious prince of Pars who, despite his best efforts, doesn''t seem to have what it takes to be a proper king like his father.\r\n\r\nAt the age of 14, Arslan goes to his first battle and loses everything as the blood-soaked mist of war gives way to scorching flames, bringing him to face the demise of his once glorious kingdom. However, it is Arslan''s destiny to be a ruler, and despite the trials that face him, he must now embark on a journey to reclaim his fallen kingdom.\r\n\r\nThe Heroic Legend of Arslan (Japanese: アルスラーン戦記 Hepburn: Arusurān Senki?) is a Japanese fantasy novel series. The author, Yoshiki Tanaka, started writing the novel in 1986 and is still writing it as of 2008, with the current number of books at 14 novels and one side story in the official guidebook Arslan Senki Tokuhon. It was adapted into a manga, which caught up with the novel and then received an original ending, and ran from November 1991 to September 1996. It also received two anime film adaptations, and a four-part, unfinished anime OVA.[n 1] In 2013, a second manga adaptation started serializing at Bessatsu Shōnen Magazine, with illustrations by Hiromu Arakawa. An anime television series based on the Arakawa manga will premiere in 2015. Yoshiki Tanaka''s novels have no relation to the 1976 novel called Arslan written by M. J. Engh which is set in the present.'),
(28, 1, 'Dungeon ni Deai wo Motomeru no wa Machigattei', 'dungeon-ni-deai-wo-motomeru-no-wa-machigattei', 'TV', 'Mengudara', 'J.C.Staff, Genco, Sentai Filmworks', '2015', 'tidak di ketahui', '24 menit per episode', 'PG-13 - Teens 13 or older', 'dungeon-ni-deai-wo-37-20150426-1430025968.jpg', '2015-04-08 03:02:45', 104, 2, 'Umumnya dikenal sebagai “Dungeon,” kota Orario memiliki labirin besar di bawah tanah. Namanya aneh menarik semangat, ilusi kehormatan, dan harapan asmara dengan seorang gadis cantik. Di kota penuh dengan impian dan keinginan, Seorang petualang baru bernama Bell Cranel memiliki pertemuan yang menentukan dengan Dewi Hestia. Cerita dimulai ketika seorang anak yang berusaha untuk menjadi petualang terbaik dan dewi kesepian mencari pengikut kedua berharap untuk mencapai tujuan mereka dan mungkin memiliki beberapa asmara.'),
(29, 1, 'Nisekoi Season 2', 'nisekoi-season-2', 'TV', 'Mengudara', 'Shaft, Aniplex of America', '2015', 'tidak di ketahui', '24 menit per episode', 'PG-13 - Teens 13 or older', 'Nisekoi Season 2_2_29_20150408_1428462326.jpg', '2015-04-08 03:05:26', 44, 2, 'Nisekoi (ニセコイ?, lit. "Fake Love"), released in English as Nisekoi: False Love, is a Japanese romantic comedy manga series written and illustrated by Naoshi Komi. Nisekoi was first published as a one-shot manga in Shueisha''s seasonal Jump NEXT! magazine before being serialized in Weekly Shōnen Jump. Since November 26, 2012, Nisekoi has been published in English in Viz Media''s digital magazine, Weekly Shonen Jump. As of February 2015, the series has been compiled in 16 tankōbon volumes in Japan, and is also being released in English in digital and print volumes by Viz Media. The manga has inspired a novel series, titled Nisekoi: Urabana, written by Hajime Tanaka and published by Shueisha. There have been two volumes published, on June 4 and December 28, 2013.\r\n\r\nIn May 2013, it was announced that an anime adaptation of Nisekoi had been greenlit.[2] The anime is directed by Akiyuki Shinbo at Shaft,[3] and began airing from January 11, 2014.[4] Aniplex USA has licensed the series for streaming in North America.[5] Daisuki,[6] Crunchyroll,[4] and Hulu[7] have provided simulcast streams with English subtitles for audiences in the United States, Canada, South America and South Africa. A second season has been announced for April 2015.'),
(30, 1, 'Plastic Memories', 'plastic-memories', 'TV', 'Mengudara', 'Aniplex, Doga Kobo, Aniplex of AmericaL, Mage', '2015', 'tidak di ketahui', '24 menit per episode', 'PG-13 - Teens 13 or older', 'Plastic Memories2_2_30_20150408_1428463578.jpg', '2015-04-08 03:26:18', 33, 2, 'This story takes place in a future not too far away when androids that look exactly like humans begin to spread across the world. The android production company SA Corp. produced Giftia, a new kind of android that has the most amount of emotion and human-like qualities out of any other model ever seen.\r\n\r\nHowever, due to problems in technology, the androids have a service life, and once they pass that, they... Well, it gets pretty bad. For this sake, SA Corp. creates a terminal service in order to retrieve Giftia that have gone past their service life. A new employee at the terminal service named Tsukasa Mizugaki forms a team with the Giftia Isla to retrieve the other androids, but...This story takes place in a future not too far away when androids that look exactly like humans begin to spread across the world. The android production company SA Corp. produced Giftia, a new kind of android that has the most amount of emotion and human-like qualities out of any other model ever seen.'),
(31, 1, 'Owari no Seraph', 'owari-no-seraph', 'TV', 'Mengudara', 'Aiplex, Kodokawa, Bandai, Baidu, MSV Picture,', '2015', 'Tidak diketahui', '24 Menit per episode', 'PG- 13 or More', 'fuftv-owari-no-seraph-42-20150503-1430592779.jpg', '2015-04-11 04:16:00', 58, 3, 'Bercerita tentang dunia dimana penduduknya terbunuh oleh virus misterius kecuali anak-anak. Anak-anakitu kemudian diperbudak oleh vampir. Berpusat pada protagonis bernama Yuichiro Hyakuya, manusia yang bermimpi untuk menjadi kuat hingga dapat membunuh vampir.\r\nDitambah beberapa karakter lain yang baru diumumkan:\r\nNobuhiko Okamoto sebagai Yoichi Saotome\r\nKaito Ishikawa sebagai Shiho Kimizuki\r\nYuka Iguchi sebagai Mitsuba Sangu\r\nManga oleh novelis Takaya Kagami yang dibantu oleh Daisuke Furuya dan Yamato Yamamoto ini bercerita tentang virus misterius yang membunuh semua manusia kecuali anak-anak. Para anak-anak tersebut akhirnya diperbudak oleh vampir. Salah satu anak yang berhasil kabur, Yuuichiro Hyakuya bersumpah untuk menjadi kuat dan bergabung dengan pasukan pembasmi vampir untuk membalas dendam.'),
(32, 1, 'Nagato Yuki-chan no Shoushitsu', 'nagato-yuki-chan-no-shoushitsu', 'TV', 'Mengudara', 'Satelight, FUNimation EntertainmentL, Lantis,', '2015', 'Tidak di ketahui', '23 menit per episode', 'PG-13 tahun keatas', 'Nagato Yuki-chan no Shoushitsu_2_32_20150412_1428849162.jpg', '2015-04-12 14:32:42', 28, 2, 'Nagato Yuki, the shy president of the literature club, has never been very sure of herself around other people. But around Kyon, the only boy in the tiny, three-person club, Yuki finds herself faltering even more than usual. For Kyon, and for her precious club, Yuki must find her confidence and let her true personality shine! Really similar dynamics between the two main characters. Both anime feature a purple-haired shy girl who secretly have a feeling for the guy who always accompany them, try to be closer, and both also have a female friend who tries to matchmake them. These two shows'' genre are comedy with romance, but more in cute and fluffy way. Nagato Yuki, the shy president of the literature club, has never been very sure of herself around other people. But around Kyon, the only boy in the tiny, three-person club, Yuki finds herself faltering even more than usual. For Kyon, and for her precious club, Yuki must find her confidence and let Nagato Yuki, the shy president of the literature club, has never been very sure of herself around other people. But around Kyon, the only boy in the tiny, three-person club, Yuki finds herself faltering even more than usual. For Kyon, and for her precious club, Yuki must find her confidence and let '),
(33, 1, 'Hibike! Euphonuim', 'hibike-euphonuim', 'TV', 'Mengudara', 'Kyoto Animation, Lantis, Pony CanyonL, Rakuon', '2015', 'Tidak di ketahui', '23 menit per episode', 'PG-13 - Teens 13 or older', 'Hibike! Euphonuim_2_33_20150415_1429082132.jpg', '2015-04-15 07:15:32', 156, 2, 'Hibike! Euphonium begins when Kumiko Oumae, a girl who was in the brass band club in junior high school, visits her high school''s brass band club as a first year.Hibike! Euphonium begins when Kumiko Oumae, a girl who was in the brass band club in junior high school, visits her high school''s brass band club as a first year. Kumiko''s classmates Hazuki and Sapphire decide to join the club, but Kumiko sees her old classmate Reina there and hesitates. She remembers an incident she had with Reina at a brass band club contest in junior high school. Kumiko''s classmates Hazuki and Sapphire decide to join the club, but Kumiko sees her old classmate Reina there and hesitates. She remembers an incident she had with Reina at a brass band club contest in junior high school.\r\n\r\nBoth anime have similar atmosphere and feels.Hibike! Euphonium begins when Kumiko Oumae, a girl who was in the brass band club in junior high school, visits her high school''s brass band club as a first year. Kumiko''s classmates Hazuki and Sapphire decide to join the club, but Kumiko sees her old classmate Reina there and hesitates. She remembers an incident she had with Reina at a brass band club contest in junior high school. In comparison to other shows produced by Kyoto Animation, both have more substance and refined directions. The characters'' interaction and motivation feels very natural, animation are top notch and the art looks photographical. Some might compare Hibike! Euphonium to K-On!, but if you are not being lazy, you can see that it is closer to Hyouka than K-On!. '),
(34, 1, 'Mikagura Gakuen', 'migakura-gakuen', 'TV', 'Mengudara', 'Doga Kobo, FUNimation EntertainmentL, Media F', '2015', 'Tidak di ketahui', '23 menit per episode', 'PG-13 - Teens 13 or older', 'migakura gakuen_2_34_20150415_1429115040.jpg', '2015-04-15 16:24:00', 65, 2, 'Sebuah cerita berdasarkan seri lagu super populer dari NND. Eruna Ichinomiya, seorang mahasiswa yang bermimpi tentang kehidupan sekolah yang penuh dengan kelucuan, memasuki sekolah-Mikagura asrama Sekolah Swasta. Di sekolah ini, masing-masing perwakilan klub budaya harus berjuang satu sama lain, dengan kekuatan yang unik ... !! Apa yang akan terjadi Eruna, yang entah bagaimana akhirnya menjadi wakil dari klub tertentu ?!'),
(35, 1, 'Digimon Adventure Tri', 'digimon-adventure-tri', 'TV', 'On going', 'Toei Animation, Bandai', 'Tidak diketahui', 'tidak dikeahui', 'tidak diketahui', 'PG - Children', 'fuftv-digimon-adventure-tri-42-20150502-1430580369.png', '2015-04-17 12:45:38', 20, 2, 'Fifteen years after the summer vacation.\r\n\r\nIf we didn''t go to the Digital World. If I didn''t make this trip with others. If we didn''t change at all like this.\r\n\r\nThese Digimon were always with us. We''ve been friends all the time. We learned the importance of helping each other. All the things have made us what we are!\r\n\r\nNew stories for all the "DigiDestined" in the world. Taichi, seventeen, high school days.\r\n\r\nThe new series was first announced at a Digimon Adventure 15th anniversary event on August 1, 2014.[3] Basic story details were announced on September 7, 2014, after enough fans participated in a game on the official website.[4] On December 13, 2014, Toei announced the series full title and staff. The series is being directed by Keitaro Motonaga with scripts by Yuuko Kakihara and character design by Atsuya Uki.[5] The series will feature the returning cast of all eight main Digimon partners from the original series. Likewise, artists Kouji Wada and Ayumi Miyazaki return to perform the respective opening and insert themes, "Butter-Fly" and "Brave Heart".[6]'),
(37, 1, 'Triage X', 'triage-x', 'TV', 'Mengudara', 'Xebec, DAX Production, Nippon Columbia', '2015', '10', '23 menit per episode', 'R+ - Mild Nudity', 'triage-x-2-37-20150426-1430061580.jpg', '2015-04-26 15:19:41', 14, 2, 'Mochizuki General Hospital boasts some of the most well-trained (and well-endowed) nurses in town. But though these ladies spend much of their day battling sickness, their after-hours are spent fighting a very different sort of disease... Under the leadership of the hospital chairman, a handful of staff members and local teenagers form a group of mercenary assassins, targeting the "cancers" of society and excising those individuals before their wickedness spreads.\r\nTired? Stressed? You will feel better sitting on the couch watching fanservice (the source of all problems). Storylines play no important role in these two worlds where sexual attraction and pleasure conquers all.\r\n\r\n‘Highschool of the Dead’ puts you in a world of zombie filled with stench of death where hope is the furthest thing from one’s mind. In the depths of this crisis, a group of gorgeous females charms the city with both their look and appealing physiques. It is almost impossible to miss out on a potentially hot scene wherever you are. There is nothing more satisfying than seeing beautiful woman taking out zombies one after another and paradise is destined for the guys in the group.\r\n\r\n‘Triage X’ set its sight in a city filled with corruption and hidden in the shadows, lays a group of dark knights sworn to purge the city of this disease. Aside from the killing, it does not hurt to have woman with lustful bodies taking over the screen (fanservice style) regardless of their individual importance. Torture is used as an element to add another level of pleasure in the already sweet gratification. That alone is enough to divert a person’s attention away from the great songs and character development in the series.'),
(38, 1, 'Punchline', 'punchline', 'TV', 'Mengudara', 'Aniplex, Fuji TV, MAPPA, Mages', '2015', 'Tidak di ketahui', '23 min. per episode', 'PG-13 - Teens 13 or older', 'punchline-2-38-20150426-1430061769.jpg', '2015-04-26 15:22:49', 51, 3, 'Cerita dimulai ketika arwah lelaki bernama Iridatsu Yuuta keluar dari raganya dan harus mengambil kembali raganya dengan menggunakan buku keramat dari India yang bernama Nandala Gandala, tapi di mana buku Nandala Gandala itu berada?\r\n\r\n\r\nMinamoto no Yoshitomo (源 義 朝) adalah kepala klanKawachi Genji samurai pada akhir periode Heian. Ayah dari Minamoto no Yoritomoyang mendirikan Keshogunan Kamakura. Lahir sebagai anak sulungMinamoto tidak Tameyoshi, ibunya adalah putri dari Fujiwara no Tadakiyo.perjalanan hidupLahir dan menghabiskan masa kecilnya di Kyoto, Yoshitomo remaja dan orang dewasa tinggal di wilayah Kanto. Di sana, ia mendapat asa Shimotsuke pada tahun1153. Shimotsuke, Yoshitomo kembali membangun hubungan baik dengan Yoshikuni.Sementara itu, hubungan Yoshitomo dengan ayahnya tidak begitu baik. Yoshitomo seperti ayrikata (ayah dan saudara Yoshitomo) mendukung mantan Kaisar Sutoku. Di sisi berlawanan, Yoshitomo bersama Taira no Kiyomori berada di pihakKaisar Go-Shirakawa. Setelah mengalahkan pasukan yang dipimpin oleh ayahnya, Yoshitomo menolak promosi yang diberikan kepadanya. Dalam pertukaran untuk imbalan atas jsetelah belajar di penghargaan prestasi yang ia terima di bidang militer adalah kurang dari yang diterima oleh Kiyomori.Heiji pemberontakan'),
(39, 1, 'Grisaia no Rakuen', 'grisaia-no-rakuen', 'TV', 'Mengudara', 'Frontier Works, Sentai FilmworksL, 8bit', '2015', 'tidak dikeahui', '24 menit per episode', 'R - 17+ (violence & profanity)', 'fuftv-grisaia-no-rakuen-58-20150527-1432703708.jpg', '2015-04-27 13:06:14', 56, 3, 'The story picks up immediately after the events of Grisaia no Meikyuu, with Kazami Yuuji having been detained for suspected involvement with an international terrorist organization, lead by Heath Oslo, that has managed to enter Japan''s borders with a devastating new weapon of mass destruction in hand. Meanwhile, at Mihama Academy, the remaining students find themselves with time running out. Due to financial issues, the school is set to close within the month. Over the past year, though, the girls of Mihama have finally begun to find their own legs, thanks to Yuuji''s involvement. Are they really just going to bury their heads in the sand and let the world change around them? And are they really willing to let the man who changed their lives slip away without so much as trying to win him back? As the end of their time at Mihama Academy approaches, Amane, Makina, Sachi, Yumiko, and Michiru find themselves arriving at a single conclusion.\r\n\r\nHow much a group of students can do in the face of countries and organizations far bigger than any individual could hope to be remains to be seen. In the first place, Yuuji''s position is far more complicated than any of them could have imagined, as he finds himself embroiled in an elaborate game of super-political chess revolving around both himself and an inconceivable new system slumbering in the depths of CIRS—a system that Yuuji may have more of a connection to than he thinks. One thing is for certain, though—the girls of Mihama are no longer willing to let the world steal things away from them without at least a bit of resistance first. And with help from a mysterious individual known only as Thanatos, they may just achieve their goal...'),
(43, 1, 'one piece', 'one-piece', 'TV', 'Mengudara', 'Toei Animation, FUNimation EntertainmentL, Fu', '1999', 'unknow', '24', '13 tahun keatas', 'fuftv-one-piece-58-20150527-1432704786.jpg', '2015-05-15 09:45:51', 397, 9, 'Gol D. Roger was known as the Pirate King, the strongest and most infamous being to have sailed the Grand Line. The capture and death of Roger by the World Government brought a change throughout the world. His last words before his death revealed the location of the greatest treasure in the world, One Piece. It was this revelation that brought about the Grand Age of Pirates, men who dreamed of finding One Piece (which promises an unlimited amount of riches and fame), and quite possibly the most coveted of titles for the person who found it, the title of the Pirate King.\r\n\r\nEnter Monkey D. Luffy, a 17-year-old boy that defies your standard definition of a pirate. Rather than the popular persona of a wicked, hardened, toothless pirate who ransacks villages for fun, Luffy’s reason for being a pirate is one of pure wonder; the thought of an exciting adventure and meeting new and intriguing people, along with finding One Piece, are his reasons of becoming a pirate. Following in the footsteps of his childhood hero, Luffy and his crew travel across the Grand Line, experiencing crazy adventures, unveiling dark mysteries and battling strong enemies, all in order to reach One Piece.'),
(44, 3, 'Secret Love (KARA)', 'secret-love-kara', 'TV', 'END', 'Mays Entertaintment', '2014', '10 Episode', 'tidak diketahui', 'PG-13 - Teens 13 or older', 'fuftv-secret-love-kara-58-20150527-1432697456.jpg', '2015-05-16 06:28:29', 98, 3, 'Drama Korea ini pertama kali rilis pada tanggal 13 Juni tahun 2014, drama ini ber Genre Romance, dan berjumlah 5 Episode, tayang setiap hari Jum''at Pkl.22:00 KST di siarkan di Stasiun TV DRAMAcube (Korea), Drama ini di perankan oleh aktor dan aktris yang berbakat serta ganteng dan cantik yaitu ada: Han Seung Yeon sebagai Ji Hye, Yun Woo Jin sebagai Jung Hyun Jin, Goo Ha Ra sebagai Hyun Jung, Kim Young Kwang sebagai Joon Moon, Kang Ji Young sebagai So Yul, Bae Soo Bin sebagai Hyun Joon, Kim Seo Ra sebagai So Yul’s mother, Nicole Jung sebagai Mary, Lee Kwang Soo sebagai Tae Yang, Park Gyu Ri sebagai Park Sun Woo, Ji Chang Wook sebagai Guardian Angel...\r\n\r\nKabar gembira untuk fans girl band KARA, bahwa akan ada mini seri drama "Secret Love" yang akan dibintangi oleh seluruh personel KARA, Dan akan mulai tayang pada tanggal 13 Juni 2014, setelah beberapa lama drama ini tertunda. Drama lima episode ini bercerita tentang kisah cinta lima wanita yang saling berhubungan. Tiap episode akan menampilkan kisah yang berbeda dari lima pasang sejoli. Saat ini masih dalam proses shooting, dan Lee Kwang Soo baru saja terlihat shooting untuk salah satu episode Secret Love...');
INSERT INTO `fx_jdlfilm` (`idfilm`, `idkategori`, `jdlfilm`, `alias`, `typefilm`, `statusfilm`, `productionfilm`, `airedfilm`, `totalepsfilm`, `durasifilm`, `btsusiafilm`, `posterfilm`, `timefilm`, `filmview`, `iduser`, `deskripsifilm`) VALUES
(45, 1, 'Fairy Tail', 'fairy-tail', 'TV', 'Mengudara', 'TV Tokyo, Satelight, Dentsu, A-1 Pictures, FU', '2009', 'Unknow', '24m', '13 Tahun keatas', 'fuftv-fairy-tail-9-45-20150516-1431766463.jpg', '2015-05-16 08:54:23', 88, 9, 'Set in an imaginary world, the Earth Land, there exists a Mage Guild called "Fairy Tail." Fairy Tail is stationed in the town Magnolia, residing in the Kingdom of Fiore, and is currently governed by Makarov, Guild''s master.\r\n\r\nLucy Heartfilia, a 17-year-old girl, wishes to become a full-fledged mage and join one of the most prestigious Mage Guilds in the world, Fairy Tail.\r\n\r\nOne day, out of pure coincidence, she meets Natsu Dragneel, a boy who is transportation-sick, but very cheerful in nature. However, the thing she does not know is that Natsu is the closest connection to Fairy Tail, as he is a Mage in Fairy Tail.\r\n'),
(46, 3, 'Producer', 'producer', 'TV', 'Menudara', 'KBS2', '2015', 'tidak dikeahui', 'tidak diketahui', 'PG-13 - Teens 13 or older', 'fuftv-producer-3-46-20150516-1431780515.jpg', '2015-05-16 12:48:36', 108, 3, 'Drama Korea ini pertama kali rilis pada tanggal 8 Mei tahun 2015, drama ini berGenre Romance, Comedy, dan berjumlah 12 Episode, tayang setiap hari Jum''at & Sabtu Pkl.23:00 KST di siarkan di Stasiun TV KBS2 (Korea), Drama ini di perankan oleh: Kim Soo-Hyun sebagai Baek Seung-Chan, Kong Hyo-Jin sebagai Tak Ye-Ji, IU sebagai Cindy, Cha Tae-Hyun sebagai Ra Joon-Mo, Na Young-Hee sebagai Byeon Mi-Sook... Dan masih banyak juaga yang lainnya... Di bawah ini detail drama yang lebih lengkapnya...\r\n\r\n Drama ini akan bercerita di sekitar sebuah divisi hiburan yang berada di perusahaan penyaran yang akan diperankan oleh Cha Tae Hyun, dan kini Kong Hyo-Jin sedang mempertimbangakn akan berpean dalam drama ini...'),
(47, 1, 'Kuroko no Basket Season 3', 'kuroko-no-basket-season-3', 'TV', 'Mengudara', 'Production I.G, Bandai Visual, Lantis, NAS, B', '2015', '26', '24m', '13 Tahun keatas', 'fuftv-kuroko-no-basket-season-3-9-47-20150517-1431847867.jpg', '2015-05-17 07:31:07', 35, 9, 'The third season of Kuroko no Basket.\r\n\r\nAfter winning a fierce game against Yosen High, Seirin High successfully advances on to the semifinals of the Winter Cup. They continue to aim to become the champions, but have to face many powerful opponents along the way.'),
(48, 1, 'Ore Monigatari !!', 'ore-monigatari', 'TV', 'Mengudara', 'Madhouse, VAP, Sentai FilmworksL, Nippon Tele', '2015', 'tidak di ketahui', '24 menit per episode', 'PG-13 - Teens 13 or older', 'fuftv-ore-monigatari-3-48-20150521-1432210884.jpg', '2015-05-21 12:21:24', 44, 3, 'Gouda Takeo is a freshman in high school. (Both estimates) Weight: 120kg, Height: 2 meters. He spends his days peacefully with his super-popular-with-girls, yet insensitive childhood friend, Sunakawa. One morning, on the train to school, Takeo saves a girl, Yamato, from being molested by a pervert. Could this be the beginning of spring for Takeo?\r\n'),
(49, 3, 'Ex-Girlfriend Club', 'ex-girlfriend-club', 'TV', 'Mengudara', 'JS Pictures', '2015', '16 Episode', '60 Menit', 'PG-13 - Teens 13 or older', 'fuftv-ex-girlfriend-club-6-49-20150522-1432313710.jpg', '2015-05-22 16:55:10', 137, 6, 'Soo-Jin (Song Ji-Hyo) is a producer at a film production company. Her company decides to make a film based on a popular webcomic by Myeong-Soo’s (Byun Yo-Han). The webcomic is about Myeong-Soo’s ex-girlfriends. It just so happens, Soo-Jin is also an ex-girlfriend of Myeong-Soo. Now, Soo-Jin has to interact with her ex-boyfriend and his 3 ex-girlfriends: Hwa-Young (Lee Yoon-Ji), Ji-A (Jang Ji-Eun) and Ra-Ra (Hwa Young).'),
(50, 1, 'Sidonia no Kishi: Daikyuu Wakusei Seneki', 'sidonia-no-kishi-daikyuu-wakusei-seneki', 'TVa', 'Mengudara', ' Starchild Records, Studio Mausu, Polygon Pic', '2015', 'tidak di ketahui', '24 menit per episode', 'PG-13 - Teens 13 or older', 'fuftv-sidonia-no-kishi-daikyuu-wakusei-seneki-58-20150527-1432662012.jpg', '2015-05-24 15:26:04', 28, 3, 'Nyaris menghindari tabrakan dengan asteroid, Sidonia menetapkan kursus untuk sistem Lem untuk menghancurkan sarang Gauna\r\n\r\nManga karangan Tsutomu Nihei yang mulai diserialisasikan di Majalah Afternoon sejak tahun 2009 dan telah memiliki 9 volume ini, telah mendapat lampu hijau untuk produksi animenya. Meskipun demikian masih belum diumumkan akan dibuat dalam format apa anime tersebut.\r\n\r\nSidonia no Kishi merupakan manga dengan genre petualangan sci-fi, menceritakan mengenai perjalanan pesawat luar angkasa Sidonia, sepuluh abad setelah sistem tata surya musnah. Tidak hanya harus kehilangan planet mereka, umat manusia juga harus berjuang untuk bertahan hidup di bawah ancaman Alien.'),
(51, 2, 'Kamisama no iu toori (2014) - Live Action', 'kamisama-no-iu-toori-2014-live-action', 'Movie', 'End', 'TOHO Animation', '2014', 'tidak di ketahui', '3 jam', 'R - 17+ (violence & profanity)', 'fuftv-kamisama-no-iu-toori-2014-live-action-58-20150527-1432663298.jpg', '2015-05-25 16:06:10', 54, 3, 'seorang pelajar SMA bernama Senichi Aoyama. Sama seperti prequelnya, kisah ini diawali dengan munculnya daruma di kelas Senichi yang melakukan permainan darumasan ga koronda dan dilancutkan dengan permainan maneki neko. Saat ini Kamisama no Iutoori masih diserialisasikan di Weekly Shonen Magazine terbitan Kodansha.\r\n\r\nCerita diawali dengan karakter seorang anak SMA bernama Shun Takahata yang bosan dengan kehidupan yang biasa-biasa saja dan tenang. Suatu ketika kehidupan tenangnya tersebut berubah ketika di sekolah saat ia belajar di kelas, guru yang sedang mengajar tiba-tiba kepalanya pecah sehingga suasana kelas menjadi panik. Kemudian muncul boneka daruma yang bisa berbicara dan mengajak mereka mengikuti sebuah permainan sehingga seluruh teman sekelas Shun tewas. Ia harus melewati serangkaian berbahaya selama 3 bulan. Ternyata sosok yang ada di balik semua permainan tersebut adalah seseorang bernama Kamimaro. Dapatkan Shun dan kawan-kawan berhenti dari rangkaian permainan berbahaya ini?\r\nDalam manga Kamisama no Iutoori ini, rata-rata permainan yang muncul adalah permainan yang berkaitan dengan permainan tradisional Jepang, seperti DARUMA, KOKESHI, maneki neko, dan lain-lain. Uniknya, tahapan permainan maut tersebut juga disesuikan dengan permainan khas Jepang lainnya, yaitu shiritori. '),
(56, 2, 'The SpongeBob Movie: Sponge Out of Water (2015)', 'the-spongebob-movie-sponge-out-of-water-2015', 'Movie', 'END', 'Paramount Animation, Nickelodeon Movies, Unit', '2015', '', '92 Menit', '', 'fuftv-the-spongebob-movie-sponge-out-of-water-2015-58-20150527-1432696781.jpg', '2015-05-26 05:54:10', 28, 6, 'During a fight between the Krusty Krab and Plankton, the secret formula disappears and all of Bikini Bottom goes into a terrible apocalypse. The Bikini Bottomites go crazy and they all believe that Spongebob and Plankton stole the secret formula. The two new teammates create a time machine to get the secret formula before it disappears and also go to some weird places along the way including a time paralex where they meet a time wizard named Bubbles who is a dolphin. The two later get to the time when the formula disappeared and take it back to the present day time. They then realized that it’s a fake formula Plankton made when he was taking the real one and the Bikini Bottomites try to destroy Spongebob (Plankton runs away) Spongebob smells Krabby patties and so does everyone else so the Bikini Bottomites follow it (instead of destroying Spongebob) and they arrive at the bank of the surface. Everyone except Spongebob, Patrick, Mr. Krabs, Squidward, Sandy, and a stowaway Plankton go back home while the six characters that stayed are greeted by Bubbles who takes them to the surface where a pirate is selling Krabby Patties. The team learns that they can write in a magic book and it’ll make whatever they write in it become true. They decide to turn themselves into superheroes and battle the pirate. Meanwhile, Plankton writes himself as a superhero too.'),
(57, 2, 'Kingsman: The Secret Service1', 'kingsman-the-secret-service', 'Movie', 'END', 'Marv Films Cloudy Productions', '2014', 'Tidak di ketahui', '2 jam 45 menit', 'PG-13 - Teens 13 or older', 'fuftv-kingsman-the-secret-service1-58-20150527-1432663269.jpg', '2015-05-26 13:38:46', 10, 4, 'During a raid in the Middle East in 1997, a probationary secret agent sacrifices himself to save his team. Feeling guilt over the loss of his colleague, Harry Hart (Colin Firth), code-named "Galahad," personally delivers a bravery medal to the agent''s widow, Michelle Unwin (Samantha Womack), and her young son, Gary "Eggsy" (Taron Egerton), saying that if they ever need help, they should call the phone number on the back of the medal and deliver a coded message.\r\n\r\nSeventeen years later, Professor James Arnold (Mark Hamill) is kidnapped by unknown assailants, led by Internet billionaire Richmond Valentine (Samuel L. Jackson) and his henchwoman Gazelle (Sofia Boutella). One of Hart''s fellow agents, "Lancelot" (Jack Davenport), attempts to stage a rescue, but fails as he is cut in half by Gazelle. Valentine, known for his philanthropy, continues to meet with various heads of state and VIPs; some of whom go missing afterwards. He also announces a giveaway of SIM cards, granting free cellular and Internet access.');

-- --------------------------------------------------------

--
-- Table structure for table `fx_kategori`
--

CREATE TABLE IF NOT EXISTS `fx_kategori` (
  `idkategori` int(45) NOT NULL AUTO_INCREMENT,
  `jdlkategori` varchar(45) DEFAULT NULL,
  `katalias` varchar(200) NOT NULL,
  `deskat` varchar(200) DEFAULT 'Tidak diketahui',
  PRIMARY KEY (`idkategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `fx_kategori`
--

INSERT INTO `fx_kategori` (`idkategori`, `jdlkategori`, `katalias`, `deskat`) VALUES
(1, 'Anime', 'anime', 'animasi khas Jepang singkatan dari animeshon(pelafalan orang Jepang untuk animation).Yang biasa dicirikan dg gambar-gambar bergerak yang berwarna warni yang menampilkan tokoh-tokoh dalam berbagai maca'),
(2, 'Box Office', 'box-office', 'Film dengan jumlah penton terbanyak dan pendapatan terbanyak'),
(3, 'K-Drama', 'k-drama', 'Drama yang berasala dari negara Korea'),
(4, 'J-Drama', 'j-drama', 'J-Drama'),
(5, 'Indonesia', 'indonesia', 'Film drama series dan movie asal negara Indon'),
(8, 'Thailand', 'thailand', 'Film drama series dan movie asal negara Thail');

-- --------------------------------------------------------

--
-- Table structure for table `fx_level`
--

CREATE TABLE IF NOT EXISTS `fx_level` (
  `idlevel` int(45) NOT NULL AUTO_INCREMENT,
  `namalevel` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idlevel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fx_level`
--

INSERT INTO `fx_level` (`idlevel`, `namalevel`) VALUES
(1, 'admin'),
(2, 'publisher'),
(3, 'viewer');

-- --------------------------------------------------------

--
-- Table structure for table `fx_linkdownload`
--

CREATE TABLE IF NOT EXISTS `fx_linkdownload` (
  `idlinkdownload` int(45) NOT NULL AUTO_INCREMENT,
  `jdllinkdownload` varchar(45) DEFAULT NULL,
  `fx_episode_idfilm` int(45) NOT NULL,
  `fx_episode_idepisode` int(45) NOT NULL,
  `quality` varchar(45) DEFAULT NULL,
  `codelinkdownload` varchar(250) DEFAULT 'Belum ada',
  PRIMARY KEY (`idlinkdownload`,`fx_episode_idepisode`,`fx_episode_idfilm`),
  KEY `fk_fx_linkdownload_fx_episode1` (`fx_episode_idepisode`,`fx_episode_idfilm`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1325 ;

--
-- Dumping data for table `fx_linkdownload`
--

INSERT INTO `fx_linkdownload` (`idlinkdownload`, `jdllinkdownload`, `fx_episode_idfilm`, `fx_episode_idepisode`, `quality`, `codelinkdownload`) VALUES
(137, 'tusfile', 11, 8, '720', 'tusfile'),
(138, 'tusfile', 11, 8, '480', 'tusfile'),
(145, '', 15, 15, '720', ''),
(146, 'sedvev', 15, 15, '720', 'Edvv'),
(147, 'aergare', 15, 15, '480', 'zvzv'),
(148, 'wefevrz', 15, 15, '480', 'zrggz'),
(177, 'ffSEfE', 25, 20, '1080', 'dszdvzd'),
(178, 'sfzd', 25, 20, '720', 'dvzdzdv'),
(179, 'sdfFSD', 25, 20, '480', 'SDfdsff'),
(192, 'e4tgee', 28, 12, '480', 'dcsdfs'),
(193, 'fgfhf', 28, 12, '480', 'fthf'),
(194, 'ghjghj', 28, 12, '480', 'ghjghj'),
(201, 'link3', 30, 6, '720', 'link3'),
(202, 'link2', 30, 6, '480', 'link2'),
(203, 'link1', 30, 6, '480', 'link1'),
(208, 'kumpulbagi', 32, 9, '720', 'kumpulbagi'),
(209, 'acefile', 32, 9, '720', 'acefile'),
(210, 'acefile', 32, 9, '720', 'acefile'),
(211, 'acefile', 32, 9, '1080', 'acefile'),
(212, 'tusfile', 32, 9, '1080', 'tusfile'),
(213, 'tusfile', 32, 9, '720', 'tusfile'),
(214, 'tusfile', 32, 9, '480', 'tusfile'),
(223, 'aisfile', 32, 22, '480', 'aisfile'),
(224, 'aisfile', 32, 22, '720', 'aisfile'),
(225, 'tusfie', 32, 22, '720', 'tusfie'),
(226, 'tusfie', 32, 22, '480', 'tusfie'),
(236, 'dddasdasd', 34, 25, '1080', 'aasdasd'),
(237, 'asdasda', 34, 25, '480', 'asdadasd'),
(238, 'adsad', 34, 25, '480', 'asdsadasd'),
(239, 'exrgxrbxrt', 34, 26, '1080', 'dfgbxbxtbx'),
(240, 'yjjygj', 34, 26, '720', 'hshshst'),
(241, 'sdasdaAF', 34, 26, '480', 'asdasd'),
(287, 'otakushared', 28, 34, '720', 'otakushared'),
(288, 'otakushared', 28, 34, '720', 'otakushared'),
(289, 'otakushared', 28, 34, '1080', 'otakushared'),
(290, 'kumpulbagi', 28, 34, '1080', 'kumpulbagi'),
(291, 'kumpulbagi', 28, 34, '720', 'kumpulbagi'),
(292, 'kumpulbagi', 28, 34, '480', 'kumpulbagi'),
(293, 'mirrorcreator', 28, 34, '480', 'mirrorcreator'),
(294, 'mirrorcreator', 28, 34, '720', 'mirrorcreator'),
(295, 'mirrorcreator', 28, 34, '1080', 'mirrorcreator'),
(296, 'aisfile', 28, 34, '1080', 'aisfile'),
(297, 'aisfile', 28, 34, '720', 'aisfile'),
(298, 'aisfile', 28, 34, '480', 'aisfile'),
(299, 'acefile', 28, 34, '480', 'acefile'),
(300, 'acefile', 28, 34, '720', 'acefile'),
(301, 'acefile', 28, 34, '1080', 'acefile'),
(302, 'tusfule', 28, 34, '1080', 'tusfule'),
(303, 'tusfule', 28, 34, '720', 'tusfule'),
(304, 'tusfule', 28, 34, '480', 'tusfule'),
(305, 'tusfile', 28, 35, '1080', 'tusfile'),
(306, 'tusfile', 28, 35, '720', 'tusfile'),
(307, 'tusfile', 28, 35, '480', 'tusfile'),
(308, 'kumpulbagi', 39, 36, '480', 'kumpulbagi'),
(309, 'kumpulbagi', 39, 36, '720', 'kumpulbagi'),
(310, 'kumpulbagi', 39, 36, '1080', 'kumpulbagi'),
(311, 'usercloud', 39, 36, '1080', 'usercloud'),
(312, 'usercloud', 39, 36, '720', 'usercloud'),
(313, 'usercloud', 39, 36, '480', 'usercloud'),
(314, 'mirrorcreator', 39, 36, '480', 'mirrorcreator'),
(315, 'mirrorcreator', 39, 36, '720', 'mirrorcreator'),
(316, 'mirrorcreator', 39, 36, '1080', 'mirrorcreator'),
(317, 'aisfile', 39, 36, '1080', 'aisfile'),
(318, 'aisfile', 39, 36, '720', 'aisfile'),
(319, 'aisfile', 39, 36, '480', 'aisfile'),
(320, 'acefile', 39, 36, '480', 'acefile'),
(321, 'acefile', 39, 36, '720', 'acefile'),
(322, 'acefile', 39, 36, '1080', 'acefile'),
(323, 'tusfile', 39, 36, '1080', 'tusfile'),
(324, 'tusfile', 39, 36, '720', 'tusfile'),
(325, 'tusfile', 39, 36, '480', 'tusfile'),
(331, 'kumpulbagi', 27, 37, '720', 'kumpulbagi'),
(332, 'kumpulbagi', 27, 37, '720', 'kumpulbagi'),
(333, 'kumpulbagi', 27, 37, '1080', 'kumpulbagi'),
(334, 'acefile', 27, 37, '1080', 'acefile'),
(335, 'acefile', 27, 37, '720', 'acefile'),
(336, 'acefile', 27, 37, '480', 'acefile'),
(337, 'aisfile', 27, 37, '480', 'aisfile'),
(338, 'aisfile', 27, 37, '720', 'aisfile'),
(339, 'aisfile', 27, 37, '1080', 'aisfile'),
(340, 'tusfile', 27, 37, '1080', 'tusfile'),
(341, 'tusfile', 27, 37, '720', 'tusfile'),
(342, 'tusfile', 27, 37, '480', 'tusfile'),
(386, 'kkuyju', 31, 18, '720', 'kgukguk'),
(387, 'zdfd', 31, 18, '1080', 'fszfsf'),
(388, 'fzsdfzfd', 31, 18, '480', 'zdfzfdzdff'),
(389, 'zdfzdz', 31, 18, '480', 'zdfdfzdf'),
(396, 'tusfile', 25, 41, '1080', 'tusfile'),
(397, 'tusfile', 25, 41, '720', 'tusfile'),
(398, 'tusfile', 25, 41, '480', 'tusfile'),
(414, 'mirrorcreator', 25, 42, '1080', 'mirrorcreator'),
(415, 'mirrorcreator', 25, 42, '720', 'mirrorcreator'),
(416, 'mirrorcreator', 25, 42, '480', 'mirrorcreator'),
(417, 'kumpulbagi', 25, 42, '480', 'kumpulbagi'),
(418, 'kumpulbagi', 25, 42, '720', 'kumpulbagi'),
(419, 'kumpulbagi', 25, 42, '1080', 'kumpulbagi'),
(420, 'aisfile', 25, 42, '1080', 'aisfile'),
(421, 'aisfile', 25, 42, '720', 'aisfile'),
(422, 'aisfile', 25, 42, '480', 'aisfile'),
(423, 'acefile', 25, 42, '480', 'acefile'),
(424, 'acefile', 25, 42, '720', 'acefile'),
(425, 'acefile', 25, 42, '1080', 'acefile'),
(426, 'tusfile', 25, 42, '1080', 'tusfile'),
(427, 'tusfile', 25, 42, '720', 'tusfile'),
(428, 'tusfile', 25, 42, '480', 'tusfile'),
(436, 'useranime', 22, 44, '480', 'a'),
(437, 'kumpulbagi', 22, 44, '480', 'kumpulbagi'),
(438, 'mirrorcreator', 22, 44, '480', 'mirrorcreator'),
(439, 'acefile', 22, 44, '480', 'acefile'),
(440, 'tusfile', 22, 44, '1080', 'tusfile'),
(441, 'tusfile', 22, 44, '720', 'tusfile'),
(442, 'tusfile', 22, 44, '480', 'tusfile'),
(610, 'otakushare', 34, 32, '1080', 'otakushare'),
(611, 'otakushare', 34, 32, '720', 'otakushare'),
(612, 'otakushare', 34, 32, '480', 'otakushare'),
(613, 'kumpulbagi', 34, 32, '1080', 'kumpulbagi'),
(614, 'kumpulbagi', 34, 32, '480', 'kumpulbagi'),
(615, 'kumpulbagi', 34, 32, '720', 'kumpulbagi'),
(616, 'mirrorcreator', 34, 32, '480', 'mirrorcreator'),
(617, 'mirrorcreator', 34, 32, '720', 'mirrorcreator'),
(618, 'mirrorcreator', 34, 32, '1080', 'mirrorcreator'),
(619, 'aisfile', 34, 32, '1080', 'aisfile'),
(620, 'aisfile', 34, 32, '720', 'aisfile'),
(621, 'aisfile', 34, 32, '480', 'aisfile'),
(622, 'acefile', 34, 32, '480', 'acefile'),
(623, 'acefile', 34, 32, '720', 'acefile'),
(624, 'acefile', 34, 32, '1080', 'acefile'),
(625, 'Tusfile', 34, 32, '1080', 'Tusfile'),
(626, 'Tusfile', 34, 32, '720', 'Tusfile'),
(627, 'Tusfile', 34, 32, '480', 'Tusfile'),
(646, 'mirror', 22, 45, '480', 'http://manteb.in/96mtg'),
(647, 'akme', 22, 45, '480', 'akme'),
(648, 'tusfile', 22, 45, '480', 'tusfile'),
(649, 'acefile', 22, 45, '480', 'acefile'),
(671, 'mirror-awsub', 20, 28, '480', 'http://mir.cr/YKNG9LUJ'),
(672, 'Solidfile -awsub', 20, 28, '480', 'http://manteb.in/xd201'),
(673, 'tusile - Awsub', 20, 28, '480', 'http://manteb.in/fiyki'),
(677, 'Uploadboy-part2', 44, 51, '720', 'http://adf.ly/1Deeqe'),
(678, 'uptobox-part 2', 44, 51, '720', 'http://adf.ly/sjp9Y'),
(679, 'IDWL-part2', 44, 51, '720', 'http://adf.ly/pjEgz'),
(680, 'Uploadboy-part 1', 44, 51, '720', 'http://adf.ly/1Dee90'),
(681, 'Uptobox-part1', 44, 51, '720', 'http://adf.ly/sjpBZ'),
(682, 'IDWL-part1', 44, 51, '720', 'http://adf.ly/pjEk8'),
(685, 'Oploverz', 43, 52, '1080', 'http://www.oploverz.net/one-piece-episode-692-subtitle-indonesia/'),
(686, 'otakushare-awsub', 16, 7, '720', 'http://manteb.in/pTKAc'),
(687, 'MIrror-awsub', 16, 7, '720', 'http://mir.cr/ZP6QDJLJ'),
(688, 'solid-awsub', 16, 7, '720', 'http://manteb.in/y8YcS'),
(689, 'tusfile', 16, 7, '720', 'http://manteb.in/zPYi0'),
(690, 'otakushare-awsub', 16, 7, '480', 'http://manteb.in/bMd72'),
(691, 'mirror-awsub', 16, 7, '480', 'http://mir.cr/OCDQR0ZI'),
(692, 'solid-awsub', 16, 7, '480', 'http://manteb.in/PLMUS'),
(693, 'Tusfile-awsub', 16, 7, '480', 'http://manteb.in/fqiX0'),
(704, 'otakushare-awsub', 16, 54, '720', 'http://manteb.in/SiFbS'),
(705, 'mirror-awsub', 16, 54, '720', 'http://mir.cr/CN9XQYUF'),
(706, 'solid-awsub', 16, 54, '720', 'http://manteb.in/On6g8'),
(707, 'tusfile-awsub', 16, 54, '720', 'http://manteb.in/gu2LZ'),
(708, 'otakushare-awsub', 16, 54, '480', 'http://manteb.in/nesy5'),
(709, 'aisfile-awsub', 16, 54, '480', 'http://manteb.in/pVCst'),
(710, 'acefile-awsub', 16, 54, '480', 'http://manteb.in/r1oMi'),
(711, 'Mirror-awsub', 16, 54, '480', 'http://mir.cr/0WGSNL3I'),
(712, 'tusfile-awsub', 16, 54, '480', 'http://manteb.in/JHY0p'),
(713, 'solid-awsub', 16, 54, '480', 'http://manteb.in/hSUt1'),
(714, 'otakushare-awsub', 16, 55, '720', 'http://manteb.in/5UtaS'),
(715, 'solid-awsub', 16, 55, '720', 'http://manteb.in/4elkW'),
(716, 'tusfile-awsub', 16, 55, '720', 'http://manteb.in/mlFje'),
(717, 'otakushare-awsub', 16, 55, '480', 'http://manteb.in/GfO0c'),
(718, 'mirror-awsub', 16, 55, '480', 'http://st.wardhanime.net/i/2652'),
(719, 'solid-awsub', 16, 55, '480', 'http://manteb.in/SHBPd'),
(720, 'tusfile-awsub', 16, 55, '480', 'http://manteb.in/DE9PI'),
(721, 'otakushare-awsub', 16, 56, '720', 'http://manteb.in/uLd15'),
(722, 'mirror-awsub', 16, 56, '720', 'http://st.wardhanime.net/i/2753'),
(723, 'solid-awsub', 16, 56, '720', 'http://manteb.in/Xb1BA'),
(724, 'tusfile-awsub', 16, 56, '720', 'http://manteb.in/jv8HC'),
(725, 'otakushare-awsub', 16, 56, '480', 'http://manteb.in/95erM'),
(726, 'mirror-aawsub', 16, 56, '480', 'http://st.wardhanime.net/i/2752'),
(727, 'solid-awsub', 16, 56, '480', 'http://manteb.in/IYdtc'),
(728, 'tusfile-awsub', 16, 56, '480', 'http://manteb.in/peUZd'),
(729, 'otakushare-awsub', 16, 57, '720', 'http://manteb.in/zJx2l'),
(730, 'mirror-awsub', 16, 57, '720', 'http://st.wardhanime.net/i/2849'),
(731, 'solid-awsub', 16, 57, '720', 'http://manteb.in/3ZPkK'),
(732, 'tusfile-awsub', 16, 57, '720', 'http://manteb.in/4cxUV'),
(733, 'otakushare-awsub', 16, 57, '480', 'http://manteb.in/k8WpD'),
(734, 'mirror-awsub', 16, 57, '480', 'http://st.wardhanime.net/i/2848'),
(735, 'solid-awsub', 16, 57, '480', 'http://manteb.in/Vy9x6'),
(736, 'tusfile-awsub', 16, 57, '480', 'http://manteb.in/Oa0ul'),
(777, 'otakushare-awsub', 16, 59, '720', 'http://manteb.in/T3cF4'),
(778, 'mirror-awsub', 16, 59, '720', 'http://st.wardhanime.net/i/3033'),
(779, 'solid-awsub', 16, 59, '720', 'http://manteb.in/7ByT3'),
(780, 'tusfile-awsub', 16, 59, '720', 'http://manteb.in/ATRRT'),
(781, 'otakushare-awsub', 16, 59, '480', 'http://manteb.in/N7vDd'),
(782, 'mirror-awsub', 16, 59, '480', 'http://st.wardhanime.net/i/3032'),
(783, 'solid-awsub', 16, 59, '480', 'http://manteb.in/YPoPj'),
(784, 'tusfile-awsub', 16, 59, '480', 'http://manteb.in/Gv321'),
(793, 'otakushare-awsub', 28, 3, '720', 'http://manteb.in/qVbvS'),
(794, 'mirror-awsub', 28, 3, '720', 'http://mir.cr/1UKRMO0Z'),
(795, 'solid-awsub', 28, 3, '720', 'http://manteb.in/CFRXL'),
(796, 'tusfile-awsub', 28, 3, '720', 'http://manteb.in/fQzQJ'),
(797, 'otakuhsare-awsub', 28, 3, '480', 'http://manteb.in/ucGx6'),
(798, 'mirror-awsub', 28, 3, '480', 'http://mir.cr/0KXGMQ15'),
(799, 'solid-awsub', 28, 3, '480', 'http://manteb.in/J6uUH'),
(800, 'tusfile-awsub', 28, 3, '480', 'http://manteb.in/nDgFv'),
(825, 'otakushare-awsub', 16, 58, '720', 'http://manteb.in/T3cF4'),
(826, 'mirror-awsub', 16, 58, '720', 'http://st.wardhanime.net/i/3033'),
(827, 'solid-awsub', 16, 58, '720', 'http://manteb.in/7ByT3'),
(828, 'tusfile-awsub', 16, 58, '720', 'http://manteb.in/ATRRT'),
(829, 'otakuhsare-awsub', 16, 58, '480', 'http://manteb.in/N7vDd'),
(830, 'mirror-awsub', 16, 58, '480', 'http://st.wardhanime.net/i/3032'),
(831, 'solid-awsub', 16, 58, '480', 'http://manteb.in/YPoPj'),
(832, 'tusfile-awsub', 16, 58, '480', 'http://manteb.in/Gv321'),
(833, 'mirror-awsub', 27, 4, '480', 'http://mir.cr/0LAEXPYG'),
(834, 'solid-awsub', 27, 4, '480', 'http://manteb.in/WB9Yq'),
(835, 'tusfile-awsub', 27, 4, '480', 'http://manteb.in/Dacge'),
(836, 'mirror-oploverz', 19, 19, '720', 'http://susut.in/AU8g4'),
(837, 'tusfile-oploverz', 19, 19, '720', 'http://susut.in/vV7ud'),
(838, 'usercloud-oploverz', 19, 19, '720', 'http://susut.in/882RD'),
(839, 'Elsfile-oploverz', 19, 19, '720', 'http://susut.in/TCfWa'),
(840, 'mirror', 19, 19, '480', 'http://susut.in/AU8g4'),
(841, 'tusfile', 19, 19, '480', 'http://susut.in/UUJuj'),
(842, 'usercloud', 19, 19, '480', 'http://susut.in/QQkPC'),
(843, 'acefile-oploverz', 19, 19, '480', 'http://susut.in/TnwxI'),
(852, 'mirror-ooploverz', 19, 62, '720', 'http://sortir.in/TzVuN'),
(853, 'solid-oploverz', 19, 62, '720', 'http://sortir.in/h1tFN'),
(854, 'tusfile-oploverz', 19, 62, '720', 'http://sortir.in/gfi9j'),
(855, 'elfile-oploverz', 19, 62, '720', 'http://sortir.in/WAHnJ'),
(856, 'mirror-oploverz', 19, 62, '480', 'http://sortir.in/SSPOx'),
(857, 'solid-oploverz', 19, 62, '480', 'http://sortir.in/z5tH5'),
(858, '', 19, 62, '480', ''),
(859, 'tusfile-oploverz', 19, 62, '480', 'http://sortir.in/sUbd1'),
(860, 'elfile-oploverz', 19, 62, '480', 'http://sortir.in/BUzdq'),
(861, 'mirror-oploverz', 19, 63, '720', 'http://sortir.in/fKddE'),
(862, 'solid-oploverz', 19, 63, '720', 'http://sortir.in/3a63T'),
(863, 'tusfile-oploverz', 19, 63, '720', 'http://sortir.in/gxPw9'),
(864, 'elsfile-oploverz', 19, 63, '720', 'http://sortir.in/0MlFm'),
(865, 'mirror-oploverz', 19, 63, '480', 'http://sortir.in/WQDO1'),
(866, 'solid-oploverz', 19, 63, '480', 'http://sortir.in/ma9IS'),
(867, 'tusfile-oploverz', 19, 63, '480', 'http://sortir.in/wSmXl'),
(868, 'elfile', 19, 63, '480', 'http://sortir.in/53MEj'),
(869, 'mirror-oploverz', 19, 64, '720', 'http://sortir.in/9WprZ'),
(870, 'zxcfiles-oploverz', 19, 64, '720', 'http://sortir.in/e4Dgg'),
(871, 'usercloud-oploverz', 19, 64, '720', 'http://sortir.in/VuYVX'),
(872, 'elfile-oploverz', 19, 64, '720', 'http://sortir.in/rtYTP'),
(873, 'mirorr-oploverz', 19, 64, '480', 'http://sortir.in/9WprZ'),
(874, 'zxcfiles-oploverz', 19, 64, '480', 'http://sortir.in/FZSkF'),
(875, 'usercloud-oploverz', 19, 64, '480', 'http://sortir.in/HCffy'),
(876, 'elfile-oploverz', 19, 64, '480', 'http://sortir.in/mHLrL'),
(877, 'mirror-oploverz', 19, 65, '720', 'http://susut.in/Mu7VC'),
(878, 'usercloud-oploverz', 19, 65, '720', 'http://susut.in/yV8YC'),
(879, 'tusfile-oploverz', 19, 65, '720', 'http://susut.in/PWRDx'),
(880, 'elsfile-oploverz', 19, 65, '720', 'http://susut.in/W6fsR'),
(881, 'mirror-oploverz', 19, 65, '480', 'http://susut.in/Mu7VC'),
(882, 'usercloud-oploverz', 19, 65, '480', 'http://susut.in/Y8LNY'),
(883, 'tusfile-oploverz', 19, 65, '480', 'http://susut.in/AeBvM'),
(884, 'elsfile-oploverz', 19, 65, '480', 'http://susut.in/Nlx9S'),
(894, 'oploverz', 47, 67, '1080', 'http://anilink.me/3MSBA'),
(895, 'oploverz', 43, 68, '1080', 'http://anilink.me/UZ1Q1'),
(896, 'mirror', 27, 69, '720', 'https://link.safelinkconverter.com/review.php?id=aHR0cDovL3d3dy5taXJyb3JjcmVhdG9yLmNvbS9maWxlcy81VzRHSUtTUC9fR2FudHpfSURfX0Fyc2xhbl9TZW5raV8tXzA3X183MjBwXzEwX2JpdF94MjY0X2NyZl8xOV8ubWt2X2xpbmtz&c=0&user=40640'),
(897, 'usercloud', 27, 69, '720', 'https://link.safelinkconverter.com/review.php?id=aHR0cHM6Ly8qcylyc2NsKCpkLmMobS8hITI1Z3oyYil2eTM=&c=1&user=40640'),
(898, 'solid-GantzID', 27, 69, '720', 'https://link.safelinkconverter.com/review.php?id=aHR0cDovL3d3dy5zb2xpZGZpbGVzLmNvbS9kLzZlODY5YWViNjAvX0dhbnR6X0lEX19BcnNsYW5fU2Vua2lfLV8wN19fNzIwcF8xMF9iaXRfeDI2NF9jcmZfMTlfLm1rdg==&c=0&user=40640'),
(899, 'mirror', 27, 69, '480', 'https://link.safelinkconverter.com/review.php?id=aHR0cDovL3d3dy5taXJyb3JjcmVhdG9yLmNvbS9maWxlcy8xQjdCTkRVVy9fR2FudHpfSURfX0Fyc2xhbl9TZW5raV8tXzA3X180ODBwXzhfYml0X3gyNjRfY3JmXzI4Xy5ta3ZfbGlua3M=&c=0&user=40640'),
(900, 'usercloud', 27, 69, '480', 'https://link.safelinkconverter.com/review.php?id=aHR0cHM6Ly8qcylyc2NsKCpkLmMobS93ajZ2ITgoeXooKSo=&c=1&user=40640'),
(901, 'solid-Gantzid', 27, 69, '480', 'https://link.safelinkconverter.com/review.php?id=aHR0cDovL3d3dy5zb2xpZGZpbGVzLmNvbS9kLzIyZTY1NmU5NWYvX0dhbnR6X0lEX19BcnNsYW5fU2Vua2lfLV8wN19fNDgwcF8xMF9iaXRfeDI2NF9jcmZfMjRfLm1rdg==&c=0&user=40640'),
(902, 'mirror-GantzID', 25, 70, '720', 'https://link.safelinkconverter.com/review.php?id=aHR0cDovL3d3dy5taXJyb3JjcmVhdG9yLmNvbS9maWxlcy8xRkczV1hVUC9fR2FudHpfSURfX0tla2thaV9TZW5zZW5fLV8wN19fNzIwcF8xMF9iaXRfeDI2NF9jcmZfMTlfLm1rdl9saW5rcw==&c=0&user=40640'),
(903, 'usercloud-GantzID', 25, 70, '720', 'https://link.safelinkconverter.com/review.php?id=aHR0cHM6Ly8qcylyc2NsKCpkLmMobS8hcnEwMzgwITBwNzE=&c=1&user=40640'),
(904, 'solid-GantzID', 25, 70, '720', 'https://link.safelinkconverter.com/review.php?id=aHR0cDovL3d3dy5zb2xpZGZpbGVzLmNvbS9kL2Y3MDBmZmE1YmYvX0dhbnR6X0lEX19LZWtrYWlfU2Vuc2VuXy1fMDdfXzcyMHBfMTBfYml0X3gyNjRfY3JmXzE5Xy5ta3Y=&c=0&user=40640'),
(905, 'mirror-GantzID', 25, 70, '480', 'https://link.safelinkconverter.com/review.php?id=aHR0cDovL3d3dy5taXJyb3JjcmVhdG9yLmNvbS9maWxlcy8xWDNLU1ZCVS9fR2FudHpfSURfX0tla2thaV9TZW5zZW5fLV8wN19fNDgwcF8xMF9iaXRfeDI2NF9jcmZfMjZfLm1rdl9saW5rcw==&c=0&user=40640'),
(906, 'usercloud-GantzID', 25, 70, '480', 'https://link.safelinkconverter.com/review.php?id=aHR0cHM6Ly8qcylyc2NsKCpkLmMobS9iZjYxZjYybilfcXE=&c=1&user=40640'),
(907, 'solid-GantzID', 25, 70, '480', 'https://link.safelinkconverter.com/review.php?id=aHR0cDovL3d3dy5zb2xpZGZpbGVzLmNvbS9kLzQ3MDdiMjUxMDEvX0dhbnR6X0lEX19LZWtrYWlfU2Vuc2VuXy1fMDdfXzQ4MHBfMTBfYml0X3gyNjRfY3JmXzI2Xy5ta3Y=&c=0&user=40640'),
(908, 'mirror-oploverz', 19, 61, '720', 'http://st.oploverz.net/1J984'),
(909, 'kumpulbagi-oploverz', 19, 61, '720', 'http://st.oploverz.net/cjR6f'),
(910, 'tusfile-oploverz', 19, 61, '720', 'http://www.tusfiles.net/9z5w7ifgs8cm'),
(911, 'elsfile-oploverz', 19, 61, '720', 'http://st.oploverz.net/GsRLq'),
(912, 'mirror-oploverz', 19, 61, '480', 'http://st.oploverz.net/qfT5x'),
(913, 'kumpulbagi-oploverz', 19, 61, '480', 'http://st.oploverz.net/ubNYr'),
(914, 'tusfile-oploverz', 19, 61, '480', 'http://st.oploverz.net/QYHjZ'),
(915, 'elfile-oploverz', 19, 61, '480', 'http://st.oploverz.net/dPRDA'),
(936, 'savefile-awsub', 48, 71, '720', 'https://link.safelinkconverter.com?id=aHR0cDovL3d3dy5zYXZlZmlsZS5jby91Z2sxZHd5NWtpZTY=&c=0&user=16753'),
(937, 'otakushare-awsub', 48, 71, '720', 'http://manteb.in/C3L3P'),
(938, 'mirror-awsub', 48, 71, '720', 'https://link.safelinkconverter.com?id=aHR0cDovL21pci5jci9PQVkxWUVKRQ==&c=0&user=16753'),
(939, 'solid-awsub', 48, 71, '720', 'http://manteb.in/6bUmI'),
(940, 'tusfile-awsub', 48, 71, '720', 'http://manteb.in/Lwb8D'),
(941, 'savefile-awsub', 48, 71, '480', 'https://link.safelinkconverter.com?id=aHR0cDovL3d3dy5zYXZlZmlsZS5jby8yYms5b2Z1dXZuNGw=&c=0&user=16753'),
(942, 'otakushare-aawsub', 48, 71, '480', 'http://manteb.in/OlFtn'),
(943, 'mirrorr-awsub', 48, 71, '480', 'https://link.safelinkconverter.com?id=aHR0cDovL21pci5jci8xRU8wT1BBSA==&c=0&user=16753'),
(944, 'solid-awsub', 48, 71, '480', 'http://manteb.in/0mQXR'),
(945, 'tusfile-awsub', 48, 71, '480', 'http://manteb.in/HY51a'),
(985, 'clikcnupload-oploverz', 16, 73, '1080', 'http://susut.in/vRsmb'),
(986, 'tusfile-oploverz', 16, 73, '1080', 'http://susut.in/pbhhK'),
(987, 'elsfile-oploverz', 16, 73, '1080', 'http://susut.in/JQnBj'),
(988, 'mirror-oploverz', 16, 73, '720', 'http://susut.in/KqUWL'),
(989, 'cliknupload-oploverz', 16, 73, '720', 'http://susut.in/kqNqH'),
(990, 'tusfile-oploverz', 16, 73, '720', 'http://susut.in/lnE6m'),
(991, 'elfile-oploverz', 16, 73, '720', 'http://susut.in/1kvVs'),
(992, 'mirror-oploverz', 16, 73, '480', 'http://susut.in/KqUWL'),
(993, 'clikcnupload-oploverz', 16, 73, '480', 'http://susut.in/IJLLk'),
(994, 'tusfile-oploverz', 16, 73, '480', 'http://susut.in/QtHpl'),
(995, 'elsfile-oploverz', 16, 73, '480', 'http://susut.in/WVoUv'),
(996, 'tusfile-tontonanime', 34, 72, '720', 'http://tontonanime.com/?id=2209'),
(997, 'mirror-tontonanime', 34, 72, '720', 'http://tontonanime.com/?id=2207'),
(998, 'solid-tontonanime', 34, 72, '720', 'http://tontonanime.com/?id=2208'),
(999, 'tusfile-tontonanime', 34, 72, '480', 'http://tontonanime.com/?id=2212'),
(1000, 'mirror-tontonanime', 34, 72, '480', 'http://tontonanime.com/?id=2210'),
(1001, 'solid-tontonanime', 34, 72, '480', 'http://tontonanime.com/?id=2211'),
(1017, 'solid-tonansubs', 38, 74, '1080', 'http://www.solidfiles.com/d/95a9e75688/Tonansub_Punchline-07_1080.mkv'),
(1018, 'tusfile-tonansubs', 38, 74, '720', 'http://tontonanime.com/?id=2251'),
(1019, 'mirror-tonansubs', 38, 74, '720', 'http://tontonanime.com/?id=2249'),
(1020, 'solid-tonansubs', 38, 74, '720', 'http://tontonanime.com/?id=2250'),
(1021, 'tusfile-tonansubs', 38, 74, '480', 'http://tontonanime.com/?id=2254'),
(1022, 'mirror-tonansubs', 38, 74, '480', 'http://tontonanime.com/?id=2252'),
(1023, 'solid-tonansubs', 38, 74, '480', 'http://tontonanime.com/?id=2253'),
(1039, 'indowebster', 49, 75, '480', 'http://maknyos.indowebster.com/bd04bshvy66x.html'),
(1040, 'usercloud', 49, 75, '480', 'https://userscloud.com/bfdlleszma5z'),
(1041, 'solidfiles', 49, 75, '480', 'http://www.solidfiles.com/d/e7bb3820bd/Ex-Girlfriends.Club.E01.150508.HDTV.H264.540p-SS-Kshowsubindo.Net.mkv'),
(1042, 'mega', 49, 75, '480', 'https://mega.co.nz/#!qkIgRZxC!UTtgBRSMLcj2Ma1O-5L7OnFwpEmYWsKgqYTUTCDntTc'),
(1043, 'tusfile', 49, 75, '480', 'http://www.tusfiles.net/767zfm93o1zw'),
(1065, 'otakushare', 48, 78, '720', 'http://manteb.in/YWXdn'),
(1066, 'mirror-awsub', 48, 78, '720', 'https://link.safelinkconverter.com?id=aHR0cDovL21pci5jci9DQlJZWEdWWQ==&c=0&user=16753'),
(1067, 'solid-awsub', 48, 78, '720', 'http://manteb.in/eHvEU'),
(1068, 'tusfile-awsub', 48, 78, '720', 'http://manteb.in/qK4it'),
(1069, 'otakushare-awsub', 48, 78, '480', 'http://manteb.in/mNFjH'),
(1070, 'mirror-awsub', 48, 78, '480', 'https://link.safelinkconverter.com?id=aHR0cDovL21pci5jci9EUjVQRk9PVw==&c=0&user=16753'),
(1071, 'solid-awsub', 48, 78, '480', 'http://manteb.in/EPQuE'),
(1072, 'tusfile-awsub', 48, 78, '480', 'http://manteb.in/AGZ5a'),
(1073, 'otakushare-awsub', 48, 79, '720', 'http://manteb.in/H7EwA'),
(1074, 'mirror-awsub', 48, 79, '720', 'http://st.wardhanime.net/i/2644'),
(1075, 'solid-awsub', 48, 79, '720', 'http://manteb.in/GcDJJ'),
(1076, 'tusfile-awsub', 48, 79, '720', 'http://manteb.in/KHHL0'),
(1077, 'otakushare-awsub', 48, 79, '480', 'http://manteb.in/YjT13'),
(1078, 'mirror-awsub', 48, 79, '480', 'http://st.wardhanime.net/i/2643'),
(1079, 'solid-awsub', 48, 79, '480', 'http://manteb.in/fTope'),
(1080, 'tusfile', 48, 79, '480', 'http://manteb.in/l9cCV'),
(1081, 'uploadboy', 46, 76, '480', 'http://uploadboy.com/lezsu7ds5lv3.html'),
(1082, 'uploadboy', 46, 76, '720', 'http://uploadboy.com/lezsu7ds5lv3.html'),
(1083, 'tusfile', 46, 76, '720', 'http://www.tusfiles.net/8gpklib50geh'),
(1084, 'tusfile', 46, 76, '480', 'http://www.tusfiles.net/8gpklib50geh'),
(1085, 'solid', 46, 76, '480', 'http://www.solidfiles.com/d/f1c840bf4e/'),
(1086, 'solid', 46, 76, '720', 'http://www.solidfiles.com/d/f1c840bf4e/'),
(1087, 'hugefile', 46, 76, '720', 'http://hugefiles.net/wy3fhnkd03uq'),
(1088, 'hugefile', 46, 76, '480', 'http://hugefiles.net/wy3fhnkd03uq'),
(1089, 'usercloud', 46, 76, '480', 'https://userscloud.com/9f8pad5zupes'),
(1090, 'usercloud', 46, 76, '720', 'https://userscloud.com/9f8pad5zupes'),
(1091, 'uptobox', 46, 76, '720', 'http://uptobox.com/gno8usdzfodn'),
(1092, 'uptobox', 46, 76, '480', 'http://uptobox.com/gno8usdzfodn'),
(1093, 'Mega', 46, 76, '480', 'https://mega.co.nz/#!SZ9BBKra!_c2aJASrMs1fyPLti9-JgBrPPWmb9WV5igoCc7Vl4dc'),
(1104, 'tusfiles', 49, 81, '480', 'http://www.tusfiles.net/huxjlaf2hndu'),
(1105, 'solidfiles', 49, 81, '480', 'http://www.solidfiles.com/d/50c8fe99b4/Ex-Girlfriends.Club.E02.150509.HDTV.H264.540p-SS-Kshowsubindo.Net.mkv'),
(1106, 'usercloud', 49, 81, '480', 'https://userscloud.com/exs42dtkl9ep'),
(1107, 'mega', 49, 81, '480', 'https://mega.co.nz/#!3wxTFRLC!JJW08zVtknKVulOpzYyF3ddsm4St4FKE3D_-3R8OXz4'),
(1108, 'indowebster', 49, 81, '480', 'http://maknyos.indowebster.com/apq05pglqqtc.html'),
(1115, 'tusfile-tonansubs', 28, 82, '720', 'http://tontonanime.com/?id=2271'),
(1116, 'mirror-tonansubs', 28, 82, '720', 'http://tontonanime.com/?id=2269'),
(1117, 'solid-tonansubs', 28, 82, '720', 'http://tontonanime.com/?id=2270'),
(1118, 'tusfile-tonansubs', 28, 82, '480', 'href='),
(1119, 'mirror-tonansubs', 28, 82, '480', 'http://tontonanime.com/?id=2272'),
(1120, 'solid-tonansubs', 28, 82, '480', 'http://tontonanime.com/?id=2273'),
(1121, 'solid-tonansubs', 29, 83, '1080', 'http://tontonanime.com/?id=2265'),
(1122, 'tusfile-tonansubs', 29, 83, '720', 'http://tontonanime.com/?id=2264'),
(1123, 'mirror-tonansubs', 29, 83, '720', 'http://tontonanime.com/?id=2262'),
(1124, 'solid-tonansubs', 29, 83, '720', 'http://tontonanime.com/?id=2263'),
(1125, 'tusfile-tonansubs', 29, 83, '480', 'http://tontonanime.com/?id=2268'),
(1126, 'mirror-tonansubs', 29, 83, '480', 'http://tontonanime.com/?id=2266'),
(1127, 'solid-tonansubs', 29, 83, '480', 'http://tontonanime.com/?id=2267'),
(1128, 'usercloud', 49, 84, '720', 'http://sh.st/ktOtR'),
(1129, 'uptobox', 49, 84, '720', 'http://sh.st/ktI3o'),
(1130, 'tusfile', 49, 84, '720', 'http://sh.st/ktISF'),
(1131, 'solidfile', 49, 84, '480', 'http://sh.st/ktO5F'),
(1132, 'hugefile', 49, 84, '480', 'http://sh.st/ktOVu'),
(1133, 'mega', 49, 84, '480', 'http://sh.st/ktODN'),
(1134, 'inafile', 49, 84, '480', 'http://sh.st/ktOQN'),
(1135, 'usercloud', 49, 85, '720', 'http://sh.st/ktOtR'),
(1136, 'uptobox', 49, 85, '720', 'http://sh.st/ktI3o'),
(1137, 'tusfile', 49, 85, '720', 'http://sh.st/ktISF'),
(1138, 'hugefile', 49, 85, '480', 'http://sh.st/ktIWB'),
(1139, 'mega', 49, 85, '480', 'http://sh.st/ktIiu'),
(1140, 'infile', 49, 85, '480', 'http://sh.st/ktU3Z'),
(1141, 'otakushare-awsubs', 19, 86, '720', 'http://manteb.in/H2Y5I'),
(1142, 'mirror-awsubs', 19, 86, '720', 'https://link.safelinkconverter.com?id=aHR0cDovL21pci5jci8wTVZLVVFMVQ==&c=0&user=16753'),
(1143, 'tusfile', 19, 86, '720', 'http://manteb.in/uV3Q9'),
(1144, 'otakushare-awsubs', 19, 86, '480', 'http://manteb.in/OlRCj'),
(1145, 'mirror-awsubs', 19, 86, '480', 'https://link.safelinkconverter.com?id=aHR0cDovL21pci5jci8wVkNCS1FUQQ==&c=0&user=16753'),
(1146, 'solid-awsubs', 19, 86, '480', 'http://manteb.in/JexaU'),
(1147, 'tusfile', 19, 86, '480', 'http://manteb.in/lAaSQ'),
(1148, 'tusfile-tonansubs', 24, 87, '1080', 'http://tontonanime.com/?id=2295'),
(1149, 'tusfile-tonansubs', 24, 87, '720', 'http://tontonanime.com/?id=2293'),
(1150, 'mirror-tonansubs', 24, 87, '720', 'http://tontonanime.com/?id=2292'),
(1151, 'solid-tonansubs', 24, 87, '720', 'http://tontonanime.com/?id=2294'),
(1152, 'tusfile-tonansubs', 24, 87, '480', 'http://tontonanime.com/?id=2289'),
(1153, 'mirror-tonansubs', 24, 87, '480', 'http://tontonanime.com/?id=2291'),
(1154, 'solid-tonansubs', 24, 87, '480', 'http://tontonanime.com/?id=2291'),
(1155, 'mirror-oploverz', 45, 88, '720', 'http://susut.in/MTf1N'),
(1156, 'solid-oploverz', 45, 88, '720', 'http://susut.in/VuOQn'),
(1157, 'tusfile-oploverz', 45, 88, '720', 'http://susut.in/MX7ao'),
(1158, 'elsfile-oploverz', 45, 88, '720', 'http://susut.in/EqFyk'),
(1159, 'mirror-oploverz', 45, 88, '480', 'http://susut.in/2FfFd'),
(1160, 'solid-oploverz', 45, 88, '480', 'http://susut.in/teH0A'),
(1161, 'elsfile-oplloverz', 45, 88, '480', 'http://susut.in/hWXpm'),
(1162, 'tusfile-oploverz', 45, 88, '480', 'http://susut.in/VMwhE'),
(1168, 'usercloud-GantzID', 25, 89, '720', 'https://link.safelinkconverter.com/review.php?id=aHR0cHM6Ly8qcylyc2NsKCpkLmMobS9xeWoyMnR5Njk1YjU=&c=1&user=40640'),
(1169, 'solid-GantzID', 25, 89, '720', 'https://link.safelinkconverter.com/review.php?id=aHR0cDovL3d3dy5zb2xpZGZpbGVzLmNvbS9kL2E5NzM0NTk1NjIvJTVCR2FuenRfSUQlNURfS2Vra2FpX1NlbnNlbl8tXzA4XyU1QjcyMHBfMTBfYml0X3gyNjRfY3JmXzE5JTVELm1rdg==&c=0&user=40640'),
(1170, 'mirror-GantzID', 25, 89, '480', 'https://link.safelinkconverter.com/review.php?id=aHR0cDovL3d3dy5taXJyb3JjcmVhdG9yLmNvbS9maWxlcy8wQlFZTEozTS9fR2FudHpfSURfX0tla2thaV9TZW5zZW5fLV8wOF9fNzIwcF84X2JpdF94MjY0X2NyZl8yM18ubWt2X2xpbmtz&c=0&user=40640'),
(1171, 'usercloud-GantzID', 25, 89, '480', 'https://link.safelinkconverter.com/review.php?id=aHR0cHM6Ly8qcylyc2NsKCpkLmMobS9tbThoNTJsanN6al8=&c=1&user=40640'),
(1172, 'solid-GantzID', 25, 89, '480', 'https://link.safelinkconverter.com/review.php?id=aHR0cDovL3d3dy5zb2xpZGZpbGVzLmNvbS9kL2QzNWRjMDEwNDAvX0dhbnR6X0lEX19LZWtrYWlfU2Vuc2VuXy1fMDhfXzcyMHBfOF9iaXRfeDI2NF9jcmZfMjNfLm1rdg==&c=0&user=40640'),
(1174, 'oploverz', 43, 90, '1080', 'http://anilink.me/Ohhpb'),
(1175, 'mirror-awsubs', 26, 91, '720', 'https://link.safelinkconverter.com?id=aHR0cDovL3N0LndhcmRoYW5pbWUubmV0L2kvMzA4Nw==&c=0&user=16753'),
(1176, 'otakuhsatre-awsubs', 26, 91, '720', 'http://manteb.in/KVhm6'),
(1177, 'solid-awsubs', 26, 91, '720', 'http://manteb.in/LuNyQ'),
(1178, 'tusfile-awsubs', 26, 91, '720', 'http://manteb.in/ylb5p'),
(1179, 'mirror-creator', 26, 91, '480', 'https://link.safelinkconverter.com?id=aHR0cDovL3N0LndhcmRoYW5pbWUubmV0L2kvMzA4OA==&c=0&user=16753'),
(1180, 'otakushare-awsubs', 26, 91, '480', 'http://manteb.in/IhME7'),
(1181, 'solid-awsubs', 26, 91, '480', 'http://manteb.in/SqN2b'),
(1182, 'tusfile-awsubs', 26, 91, '480', 'http://manteb.in/zU8dS'),
(1222, 'miriror-oploverz', 31, 66, '720', 'http://susut.in/Hf5F6'),
(1223, 'tusfile-oploverz', 31, 66, '720', 'http://susut.in/Rx0u4'),
(1224, 'usercloud-oploverz', 31, 66, '720', 'http://susut.in/Wshjk'),
(1225, 'elsfile-oploverz', 31, 66, '720', 'http://susut.in/CqeDb'),
(1226, 'mirror-oploverz', 31, 66, '480', 'http://susut.in/Hf5F6'),
(1227, 'tusfile-oploverz', 31, 66, '480', 'http://susut.in/t5zDq'),
(1228, 'usercloud-oploverz', 31, 66, '480', 'http://susut.in/zobny'),
(1229, 'elsfile-oploverz', 31, 66, '480', 'http://susut.in/26kwB'),
(1257, 'mirror-GantzID', 27, 21, '720', 'https://link.safelinkconverter.com/review.php?id=aHR0cDovL3d3dy5taXJyb3JjcmVhdG9yLmNvbS9maWxlcy8xQVNFR0RWUC9fR2FudHpfSURfX0Fyc2xhbl9TZW5raV8tXzAyX183MjBwX18ubWt2X2xpbmtz&c=0&user=40640'),
(1258, 'tusfile-GantzID', 27, 21, '720', 'https://link.safelinkconverter.com/review.php?id=aHR0cDovL3d3dy50KnNmX2wpcy5uKXQvKGhteXcxbXpfIXli&c=1&user=40640'),
(1259, 'solid-GantzID', 27, 21, '720', 'https://link.safelinkconverter.com/review.php?id=aHR0cDovL3d3dy5zb2xpZGZpbGVzLmNvbS9kLzI1MzViODMzZWQvX0dhbnR6X0lEX19BcnNsYW5fU2Vua2lfLV8wMl9fNzIwcF9fLm1rdg==&c=0&user=40640'),
(1260, 'mirror-GantID', 27, 21, '480', 'https://link.safelinkconverter.com/review.php?id=aHR0cHM6Ly8qcHQoYih4LmMobS9wNSg3NGJtamxzbnc=&c=1&user=40640'),
(1261, 'Sharedbeast-GantzID', 27, 21, '480', 'https://link.safelinkconverter.com/review.php?id=aHR0cDovL3d3dy5zaCFyKWIpIXN0LmMobS9fZjE0bHR0dGRyeHE=&c=1&user=40640'),
(1262, 'tusfie-GantzID', 27, 21, '480', 'https://link.safelinkconverter.com/review.php?id=aHR0cDovL3d3dy50KnNmX2wpcy5uKXQvNXF4aDA5dmhiKng2&c=1&user=40640'),
(1263, 'solid-GantziD', 27, 21, '480', 'https://link.safelinkconverter.com/review.php?id=aHR0cDovL3d3dy5zb2xpZGZpbGVzLmNvbS9kL2Y4ZWEyMjdmYzUvX0dhbnR6X0lEX19BcnNsYW5fU2Vua2lfLV8wMl9fNDgwcF9fLm1rdg==&c=0&user=40640'),
(1264, 'mirror-gantzid', 27, 92, '720', 'https://link.safelinkconverter.com/review.php?id=aHR0cDovL3d3dy5taXJyb3JjcmVhdG9yLmNvbS9maWxlcy8wN0hQNUNVSS9fR2FudHpfSURfX0Fyc2xhbl9TZW5raV8tXzA4X183MjBwXzEwX2JpdF94MjY0X2NyZl8xOV8ubWt2X2xpbmtz&c=0&user=40640'),
(1265, 'usercloud-gantzid', 27, 92, '720', 'https://link.safelinkconverter.com/review.php?id=aHR0cHM6Ly8qcylyc2NsKCpkLmMobS9qZDdzbnc2NHYhcm0=&c=1&user=40640'),
(1266, 'solid-gantzid', 27, 92, '720', 'https://link.safelinkconverter.com/review.php?id=aHR0cDovL3d3dy5zb2xpZGZpbGVzLmNvbS9kLzk2MDUyOTYwZDMvX0dhbnR6X0lEX19BcnNsYW5fU2Vua2lfLV8wOF9fNzIwcF8xMF9iaXRfeDI2NF9jcmZfMTlfLm1rdg==&c=0&user=40640'),
(1267, 'mirror-gantzid', 27, 92, '480', 'https://link.safelinkconverter.com/review.php?id=aHR0cDovL3d3dy5taXJyb3JjcmVhdG9yLmNvbS9maWxlcy84SE9LRVQ1NC9fR2FudHpfSURfX0Fyc2xhbl9TZW5raV8tXzA4X180ODBwXzEwX2JpdF94MjY0X2NyZl8yNF8ubWt2X2xpbmtz&c=0&user=40640'),
(1268, 'usercloud-gantzid', 27, 92, '480', 'https://link.safelinkconverter.com/review.php?id=aHR0cHM6Ly8qcylyc2NsKCpkLmMobS9nZ3FmNV9oX3dxKnc=&c=1&user=40640'),
(1269, 'solid-gantzid', 27, 92, '480', 'https://link.safelinkconverter.com/review.php?id=aHR0cDovL3d3dy5zb2xpZGZpbGVzLmNvbS9kLzUzZDc3MjI4MTYvX0dhbnR6X0lEX19BcnNsYW5fU2Vua2lfLV8wOF9fNDgwcF8xMF9iaXRfeDI2NF9jcmZfMjRfLm1rdg==&c=0&user=40640'),
(1270, 'tusfile-tonan', 39, 93, '1080', 'http://tontonanime.com/?id=2347'),
(1271, 'tusfile-tonan', 39, 93, '720', 'http://tontonanime.com/?id=2345'),
(1272, 'mirror-tonan', 39, 93, '720', 'http://tontonanime.com/?id=2344'),
(1273, 'solid-tonan', 39, 93, '720', 'http://tontonanime.com/?id=2346'),
(1274, 'tusfile-tonan', 39, 93, '480', 'http://tontonanime.com/?id=2342'),
(1275, 'mirror-tonan', 39, 93, '480', 'http://tontonanime.com/?id=2341'),
(1276, 'solid-tonan', 39, 93, '480', 'http://tontonanime.com/?id=2343'),
(1277, 'Subtitle Only', 51, 94, '1080', 'https://link.safelinkconverter.com?id=aHR0cDovL21fbl9kcihfZC5uKXQvViFjWHg=&c=1&user=26892'),
(1278, 'DDL-nekonime', 51, 94, '720', 'https://link.safelinkconverter.com?id=aHR0cDovL2RkbC5uKWsobl9tKS5jKG0vX25kKXgucGhwP2Rfcj1LIW1fcyFtISUyMG4oJTIwXyolMjB0KChyXyUyMCUyODIwMTQlMjkvJiFtcDtmX2wpPSU1Qk4payhuX20pJTVEJTIwSyFtX3MhbSElMjBuKCUyMEkqJTIwVCgocl8lMjBTKmJ0X3RsKSUyMEluZChuKXNfISUyMCU1'),
(1279, 'usercloud-nekonime', 51, 94, '720', 'https://link.safelinkconverter.com?id=aHR0cDovL21fbl9kcihfZC5uKXQvMVlWVzA=&c=1&user=26892'),
(1280, 'mega-nekonime', 51, 94, '720', 'https://link.safelinkconverter.com?id=aHR0cDovL21fbl9kcihfZC5uKXQvbGZPQXQ=&c=1&user=26892'),
(1281, 'tusfile-nekonime', 51, 94, '720', 'https://link.safelinkconverter.com?id=aHR0cDovL21fbl9kcihfZC5uKXQvZEhVa20=&c=1&user=26892'),
(1282, 'solid-nekonime', 51, 94, '480', 'https://link.safelinkconverter.com?id=aHR0cDovL21fbl9kcihfZC5uKXQvNzREeW4=&c=1&user=26892'),
(1283, 'DDL-nekonime', 51, 94, '480', 'https://link.safelinkconverter.com?id=aHR0cDovL2RkbC5uKWsobl9tKS5jKG0vX25kKXgucGhwP2Rfcj1LIW1fcyFtISUyMG4oJTIwXyolMjB0KChyXyUyMCUyODIwMTQlMjkvJiFtcDtmX2wpPSU1Qk4payhuX20pJTVEJTIwSyFtX3MhbSElMjBuKCUyMEkqJTIwVCgocl8lMjBTKmJ0X3RsKSUyMEluZChuKXNfISUyMCU1'),
(1284, 'usercloud-nekonime', 51, 94, '480', 'https://link.safelinkconverter.com?id=aHR0cDovL21fbl9kcihfZC5uKXQvbF9qVEc=&c=1&user=26892'),
(1285, 'mega-nekonime', 51, 94, '480', 'https://link.safelinkconverter.com?id=aHR0cDovL21fbl9kcihfZC5uKXQvMDgpQXk=&c=1&user=26892'),
(1286, 'tusfile-nekonime', 51, 94, '480', 'https://link.safelinkconverter.com?id=aHR0cDovL21fbl9kcihfZC5uKXQvcGtZR3k=&c=1&user=26892'),
(1287, 'Clicknupload', 31, 95, '1080', 'http://susut.in/bMbCM'),
(1288, 'tusfile-oploverz', 31, 95, '1080', 'http://susut.in/v7f6E'),
(1289, 'elsfile-oploverz', 31, 95, '1080', 'http://susut.in/yk3Om'),
(1290, 'clicknupload-oploverz', 31, 95, '720', 'http://susut.in/787Zt'),
(1291, 'mirror-oploverz', 31, 95, '720', 'http://susut.in/BCKIa'),
(1292, 'tusfile-oploverz', 31, 95, '720', 'http://susut.in/JoZzL'),
(1293, 'elsfile-oploverz', 31, 95, '720', 'http://susut.in/Zb6l8'),
(1294, 'mirror-oploverz', 31, 95, '480', 'http://susut.in/BCKIa'),
(1295, 'clicknupload-oploverz', 31, 95, '480', 'http://susut.in/7bMmp'),
(1296, 'tusfile-oploverz', 31, 95, '480', 'http://susut.in/aH6vg'),
(1297, 'elsfie-oploverz', 31, 95, '480', 'http://susut.in/2AWK6'),
(1298, 'mirror-awsubs', 50, 97, '720', 'https://link.safelinkconverter.com?id=aHR0cDovL3N0LndhcmRoYW5pbWUubmV0L2kvMzEwNA==&c=0&user=16753'),
(1299, 'otakushare-awsubs', 50, 97, '720', 'http://manteb.in/nPjlP'),
(1300, 'solid-awsubs', 50, 97, '720', 'http://manteb.in/pEGxz'),
(1301, 'tusfile-awsubs', 50, 97, '720', 'http://manteb.in/Go9kp'),
(1302, 'mirror-awsubs', 50, 97, '480', 'https://link.safelinkconverter.com?id=aHR0cDovL3N0LndhcmRoYW5pbWUubmV0L2kvMzEwMw==&c=0&user=16753'),
(1303, 'otakushare-awsubs', 50, 97, '480', 'http://manteb.in/wpZLd'),
(1304, 'tusfile-awsubs', 50, 97, '480', 'http://manteb.in/Urd8T'),
(1314, 'tusfiles', 56, 96, '480', 'https://www.tusfiles.net/m17n8q6iwml0'),
(1315, 'usercloud', 56, 96, '480', 'https://userscloud.com/pmwsxpkj917i'),
(1316, 'solidfiles', 56, 96, '480', 'http://www.solidfiles.com/d/75a8a87477/Shinokun.The.SpongeBob.Movie.Sponge.Out.of.Water.WEBRip.360p.mp4'),
(1317, 'mirror-oploverz', 33, 103, '720', 'http://susut.in/jXcjz'),
(1318, 'usercloud-oploverz', 33, 103, '720', 'http://susut.in/XLnLZ'),
(1319, 'tusfile-oploverz', 33, 103, '720', 'http://susut.in/kVDvo'),
(1320, 'elsfile-oploverz', 33, 103, '720', 'http://susut.in/PbNGS'),
(1321, 'mirror-oploverz', 33, 103, '480', 'http://susut.in/jXcjz'),
(1322, 'usercloud-oploverz', 33, 103, '480', 'http://susut.in/VfA8Y'),
(1323, 'tusfile-oploverz', 33, 103, '480', 'href='),
(1324, 'elsfile-oploverz', 33, 103, '480', 'http://susut.in/zPDTD');

-- --------------------------------------------------------

--
-- Table structure for table `fx_linkstreaming`
--

CREATE TABLE IF NOT EXISTS `fx_linkstreaming` (
  `idlinkstreaming` int(45) NOT NULL AUTO_INCREMENT,
  `fx_episode_idfilm` int(45) NOT NULL,
  `fx_episode_idepisode` int(45) NOT NULL,
  `jdllinkstreaming` varchar(45) DEFAULT NULL,
  `codelinkstreaming` text,
  PRIMARY KEY (`idlinkstreaming`,`fx_episode_idepisode`,`fx_episode_idfilm`),
  KEY `fk_fx_linkstreaming_fx_episode1` (`fx_episode_idepisode`,`fx_episode_idfilm`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=539 ;

--
-- Dumping data for table `fx_linkstreaming`
--

INSERT INTO `fx_linkstreaming` (`idlinkstreaming`, `fx_episode_idfilm`, `fx_episode_idepisode`, `jdllinkstreaming`, `codelinkstreaming`) VALUES
(97, 11, 8, 'asdasdaaa', 'asdasdasdd'),
(98, 11, 8, 'asdasd', 'asdasdasd'),
(104, 15, 15, 'hhxa', 'efawfa'),
(105, 15, 15, 'asdasd', 'asdasd'),
(121, 25, 20, 'dfsdefze', 'sedfsdezzre'),
(122, 25, 20, 'zsczdfd', 'dgzgzrgz'),
(133, 28, 12, 'dsa', 'dsa'),
(134, 28, 12, 'asd', 'asd'),
(140, 30, 6, 'kitacoba1', 'kitacoba1'),
(141, 30, 6, 'kitacoba', 'kitacoba'),
(146, 32, 9, 'kumpulbagi', 'kumpulbagi'),
(147, 32, 9, 'solidfile', 'solidfile'),
(148, 32, 9, 'acefile', 'acefile'),
(155, 32, 22, 'asdasd', 'asdasdasd'),
(156, 32, 22, 'asdasdasaa', 'asdasdasd'),
(162, 34, 25, 'asdasd', 'asdasdasd'),
(163, 34, 25, 'asdasd', 'sdasdad'),
(164, 34, 26, 'aaasdasd', 'asdadasdads'),
(165, 34, 26, 'asdasd', 'sdasdsad'),
(166, 34, 26, 'sdasdad', 'asdsadasd'),
(167, 34, 26, 'sadsad', 'asdsadasd'),
(183, 28, 34, 'Kumpulbagi', 'Kumpulbagi'),
(184, 28, 34, 'Mp4', 'Mp4'),
(185, 28, 34, 'acefile', 'acefile'),
(186, 28, 34, 'tusfile', 'tusfile'),
(187, 28, 35, 'acefile', 'acefile'),
(188, 28, 35, 'tusfile', 'tusfile'),
(189, 28, 35, 'MP4', 'MP4'),
(190, 28, 35, 'IDWL', 'IDWL'),
(191, 39, 36, 'idwl', 'idwl'),
(192, 39, 36, 'acefile', 'acefile'),
(193, 39, 36, 'mp4', 'mp4'),
(194, 39, 36, 'tusfile', 'tusfile'),
(199, 27, 37, 'acrol', 'acrol'),
(200, 27, 37, 'idwl', 'idwl'),
(201, 27, 37, 'aisfile', 'aisfile'),
(202, 27, 37, 'tusfile', 'tusfile'),
(219, 31, 18, 'szfdzd', 'zfdzsfdzf'),
(220, 31, 18, 'afdsz', 'dsfzsfzsf'),
(221, 31, 18, 'gzrgz', 'sddcs'),
(222, 31, 18, 'dasdad', 'dadad'),
(225, 25, 41, 'tusfile', 'tusfile'),
(229, 25, 42, 'kumpulbagi', 'tusfile'),
(230, 25, 42, 'acefile', 'tusfile'),
(231, 25, 42, 'tusfile', 'tusfile'),
(236, 22, 44, 'tusfile', 'tusfile'),
(237, 22, 44, 'tusfile', 'tusfile'),
(238, 22, 44, 'tusfile', 'tusfile'),
(239, 22, 44, 'tusfile', 'tusfile'),
(313, 34, 32, 'kumpulbagi', 'kumpulbagi'),
(314, 34, 32, 'mp4', 'mp4'),
(315, 34, 32, 'acefile', 'acefile'),
(316, 34, 32, 'tusfile', 'tusfile'),
(326, 22, 45, 'acefile', ''),
(327, 22, 45, 'acefile', ''),
(328, 22, 45, 'acefile', ''),
(369, 25, 47, 'asdasd', '<IFRAME SRC=''http://aisfile.com/embed-lmk3pke90uh0.html'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480px></IFRAME>'),
(370, 25, 47, 'asd', '<IFRAME SRC=''http://www.mp4upload.com/embed-8q4a9t7g9uhs.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(373, 20, 28, 'Dailymotion', '<iframe frameborder=''0'' width=''100%'' height=''480'' src=''//www.dailymotion.com/embed/video/x2q2ooh'' allowfullscreen></iframe><br /><a href=''http://www.dailymotion.com/video/x2q2ooh_denpa-kyoushi-episode-01_shortfilms'' target=''_blank''>Denpa Kyoushi Episode 01</a> <i>oleh <a href=''http://www.dailymotion.com/reza-rafiq-mz'' target=''_blank''>reza-rafiq-mz</a></i>'),
(375, 33, 23, 'Mp4 (GantzID)', '<IFRAME SRC=''http://www.mp4upload.com/embed-ooju0nq3avle.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(376, 33, 24, 'mp4 (tonan)', '<IFRAME SRC=''http://www.mp4upload.com/embed-qv2z5c8ew9ak.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(377, 33, 31, 'mp4(tonansubs)', '<IFRAME SRC=''http://www.mp4upload.com/embed-cm14556gegn4.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(378, 33, 40, 'mp4(tonansubs)', '<IFRAME SRC=''http://www.mp4upload.com/embed-45dkxq3sjjuv.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(380, 33, 49, 'mp4(tonan)', '<IFRAME SRC=''http://www.mp4upload.com/embed-tsjj59f8e1rx.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(384, 44, 51, 'youtube - cumi-cumi channel', '<iframe width=''100%'' height=''480'' src=''https://www.youtube.com/embed/IG8M9LOxRpo'' frameborder=''0'' allowfullscreen></iframe>'),
(385, 33, 50, 'Mp4 (tonansubs)', '<IFRAME SRC=''http://www.mp4upload.com/embed-1eiqxnegrhbb.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(389, 43, 52, 'Ap', '<iframe src=''http://aniplayer.tv/embed.php?u=129c2d24ceb13da6&w=650&h=370'' frameborder=''0'' scrolling=''no'' style=''width: 100%; height: 370px; overflow: hidden;'' webkitAllowFullScreen=''true'' mozallowfullscreen=''true'' allowFullScreen=''true''></iframe>'),
(390, 43, 52, 'mp4', '<IFRAME SRC=''http://www.mp4upload.com/embed-fx4b73v1p0qu.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=360></IFRAME>'),
(391, 45, 53, 'Mp4', '<IFRAME SRC=''http://www.mp4upload.com/embed-y0v02xdi5sdf.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=360></IFRAME>'),
(392, 45, 53, 'Ap', '<iframe src=''http://aniplayer.tv/embed.php?u=f44e3e008f9a1d7e&w=650&h=370'' frameborder=''0'' scrolling=''no'' style=''width: 100%; height: 370px; overflow: hidden;'' webkitAllowFullScreen=''true'' mozallowfullscreen=''true'' allowFullScreen=''true''></iframe>'),
(393, 16, 7, 'Mp4-anti', '<IFRAME SRC=''http://www.mp4upload.com/embed-kxqc8oo1zj33.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(395, 16, 54, 'mp4-oploverz', '<IFRAME SRC=''http://www.mp4upload.com/embed-c65z26ro6ruu.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(396, 16, 55, 'mp4-oploverz', '<IFRAME SRC=''http://www.mp4upload.com/embed-v4gdrpf2l3di.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(397, 16, 56, 'mp4-oploverz', '<IFRAME SRC=''http://www.mp4upload.com/embed-2l224tsgnm0j.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(398, 16, 57, 'mp4-oploverz', '<IFRAME SRC=''http://www.mp4upload.com/embed-k0m5fdz3c7of.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(405, 16, 59, 'mp4-oploverz', '<IFRAME SRC=''http://www.mp4upload.com/embed-zpcn72l7n1gj.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(407, 28, 3, 'mp4-bknime', '<IFRAME SRC=''http://www.mp4upload.com/embed-lept3nvmhotl.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(411, 16, 58, 'mp4-oploverz', '<IFRAME SRC=''http://www.mp4upload.com/embed-rcjs3xddt2ld.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(412, 27, 4, 'Mp4-GantsID', '<IFRAME SRC=''http://www.mp4upload.com/embed-no5062gnpme0.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(418, 19, 19, 'mp4-oploverz', '<IFRAME SRC=''http://www.mp4upload.com/embed-18ookwjwx0v3.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(420, 19, 62, 'mp4-oploverz', '<IFRAME SRC=''http://www.mp4upload.com/embed-rjism5ak99sr.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=460></IFRAME>'),
(421, 19, 63, 'mp4-oploverz', '<IFRAME SRC=''http://www.mp4upload.com/embed-tslon57xqeht.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=460></IFRAME>'),
(422, 19, 64, 'mp4-bknime', '<IFRAME SRC=''http://www.mp4upload.com/embed-htzxuqe6g3rw.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(423, 19, 65, 'mp4-Bknime', '<IFRAME SRC=''http://www.mp4upload.com/embed-l5d6ok8z17gm.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(427, 47, 67, 'MP4', '<IFRAME SRC=''http://www.mp4upload.com/embed-xr51kkapixmc.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(428, 47, 67, 'AP', '<iframe src=''http://aniplayer.tv/embed.php?u=a537c283a43975f3&w=650&h=370'' frameborder=''0'' scrolling=''no'' style=''width: 650px; height: 370px; overflow: hidden;'' webkitAllowFullScreen=''true'' mozallowfullscreen=''true'' allowFullScreen=''true''></iframe>'),
(429, 43, 68, 'MP4', '<IFRAME SRC=''http://www.mp4upload.com/embed-xfd5lfh4rdh8.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(430, 43, 68, 'AP', '<iframe src=''http://aniplayer.tv/embed.php?u=00bb4d4bf7587389&w=650&h=370'' frameborder=''0'' scrolling=''no'' style=''width: 100%; height: 370px; overflow: hidden;'' webkitAllowFullScreen=''true'' mozallowfullscreen=''true'' allowFullScreen=''true''></iframe>'),
(431, 27, 69, 'mp4-GantiD', '<IFRAME SRC=''http://www.mp4upload.com/embed-hqzcwr8rthn4.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(432, 25, 70, 'Mp4-GantzID', '<IFRAME SRC=''http://www.mp4upload.com/embed-7i26exgdicna.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(433, 19, 61, 'Mp4-AW', '<IFRAME SRC=''http://www.mp4upload.com/embed-mq8y1hv3yxjq.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(436, 48, 71, 'mp4-bknime', '<IFRAME SRC=''http://www.mp4upload.com/embed-hjju75jp9r2e.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(441, 16, 73, 'mp4-oploverz', '<IFRAME SRC=''//www.mp4upload.com/embed-bxnc7uj6r16m.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(442, 46, 60, 'vidme', '<iframe src=''https://vid.me/e/6pNu'' frameborder=''0'' allowfullscreen webkitallowfullscreen mozallowfullscreen scrolling=''no'' height=''480'' width=''100%''></iframe>'),
(443, 46, 60, 'mp4', '<iframe width=''100%'' height=''480'' scrolling=''no'' frameborder=''0'' src=''http://videomega.tv/view.php?ref=076066073079073071083078053050050053078083071073079073066076&width=100&height=480'' allowFullScreen></iframe>'),
(444, 34, 72, 'Mp4-tonansub', '<IFRAME SRC=''http://www.mp4upload.com/embed-39ddx41dt6dp.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(449, 38, 74, 'mp4-tonansubs', '<IFRAME SRC=''http://www.mp4upload.com/embed-3kt1qrdwwuyi.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(453, 49, 75, 'vidme', '<iframe src=''https://vid.me/e/guJf'' width=''100%'' height=''480'' frameborder=''0'' allowfullscreen webkitallowfullscreen mozallowfullscreen scrolling=''no''></iframe>'),
(457, 48, 78, 'ais-bknime', '<IFRAME SRC=''http://www.mp4upload.com/embed-4by3ezsinvze.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(458, 48, 79, 'Ais-bknime', '<iframe src=''http://aisfile.com/embed-akov55og6vd0-650x368.html'' frameborder=''0'' marginwidth=''0'' marginheight=''0'' scrolling=''NO'' width=''100%'' height=''460''></iframe>'),
(459, 46, 76, 'vidme', '<iframe src=''https://vid.me/e/Ywup'' width=''100%'' height=''480'' frameborder=''0'' allowfullscreen webkitallowfullscreen mozallowfullscreen scrolling=''no''></iframe>'),
(463, 49, 81, 'vidme', '<iframe src=''https://vid.me/e/by1W'' width=''100%'' height=''480'' frameborder=''0'' allowfullscreen webkitallowfullscreen mozallowfullscreen scrolling=''no''></iframe>'),
(465, 28, 82, 'ais-tonansubs', '<iframe src=''http://aisfile.com/embed-107ev4bputpn-650x368.html'' frameborder=''0'' marginwidth=''0'' marginheight=''0'' scrolling=''NO'' width=''100%'' height=''480''></iframe>'),
(466, 29, 83, 'mp4-tonansubs', '<IFRAME SRC=''http://www.mp4upload.com/embed-rswqmr0bdk7f.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(467, 49, 84, 'vidme', '<iframe src=''https://vid.me/e/78iy'' width=''100%'' height=''480'' frameborder=''0'' allowfullscreen webkitallowfullscreen mozallowfullscreen scrolling=''no''></iframe>'),
(468, 49, 85, 'vedme', '<iframe src=''https://vid.me/e/VhQ0'' width=''100%'' height=''480'' frameborder=''0'' allowfullscreen webkitallowfullscreen mozallowfullscreen scrolling=''no''></iframe>'),
(469, 19, 86, 'mp4-oploverz', '<IFRAME SRC=''http://www.mp4upload.com/embed-mtvhtyub3pc6.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(470, 24, 87, 'mp4-tonansubs', '<IFRAME SRC=''http://www.mp4upload.com/embed-mq08inhde7b6.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(471, 45, 88, 'mp4-oploverz', '<IFRAME SRC=''http://www.mp4upload.com/embed-qlt2sjzilpjs.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(472, 45, 88, 'ais-oploverz', '<iframe width=''100%'' height=''368'' frameborder=''0'' scrolling=''NO'' marginheight=''0'' marginwidth=''0'' src=''http://aisfile.com/embed-1xhd4yi05igd-650x368.html''></iframe>'),
(474, 25, 89, 'vidme', '<iframe src=''https://vid.me/e/326L'' width=''100%'' height=''480'' frameborder=''0'' allowfullscreen webkitallowfullscreen mozallowfullscreen scrolling=''no''></iframe>'),
(475, 25, 89, 'ais-GantzID', '<iframe src=''http://aisfile.com/embed-9je9814am79v-650x368.html'' frameborder=''0'' marginwidth=''0'' marginheight=''0'' scrolling=''NO'' width=''100%'' height=''480''></iframe>'),
(476, 43, 90, 'MP4', '<IFRAME SRC=''http://www.mp4upload.com/embed-3c1wzvqz6wtx.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(477, 26, 91, 'mp4-tonan', '<IFRAME SRC=''http://www.mp4upload.com/embed-fbn02nn4xhsw.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(478, 26, 91, 'ais-tonan', '<iframe src=''http://aisfile.com/embed-yw2w4jp4mrj5-650x368.html'' frameborder=''0'' marginwidth=''0'' marginheight=''0'' scrolling=''NO'' width=''100%'' height=''460''></iframe>'),
(487, 31, 66, 'ais-oploverz', '<iframe src=''http://aisfile.com/embed-5pvynz6xy195-650x368.html'' frameborder=''0'' marginwidth=''0'' marginheight=''0'' scrolling=''NO'' width=''100%'' height=''480''></iframe>'),
(491, 44, 80, 'Vid.me', '<iframe src=''https://vid.me/e/Ywep'' width=''100%'' height=''480'' frameborder=''0'' allowfullscreen webkitallowfullscreen mozallowfullscreen scrolling=''no''></iframe>'),
(504, 27, 21, 'mp4-GantzID', '<IFRAME SRC=''http://www.mp4upload.com/embed-urx1eic9sjd9.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(505, 27, 21, 'ais-GantzID', '<iframe src=''http://aisfile.com/embed-2bb1mov1zzvu-650x368.html'' frameborder=''0'' marginwidth=''0'' marginheight=''0'' scrolling=''NO'' width=''100%'' height=''480''></iframe>'),
(506, 44, 101, 'vid.me', '<iframe src=''https://vid.me/e/P4HJ'' width=''100%'' height=''352'' frameborder=''0'' allowfullscreen webkitallowfullscreen mozallowfullscreen scrolling=''no''></iframe>'),
(507, 44, 102, 'vid.me', '<iframe src=''https://vid.me/e/ED4l'' width=''100%'' height=''352'' frameborder=''0'' allowfullscreen webkitallowfullscreen mozallowfullscreen scrolling=''no''></iframe>'),
(508, 27, 92, 'AP-GantzID', '<iframe src=''http://aniplayer.tv/embed.php?u=51f16471ad845084&w=100% &h=480'' frameborder=''0'' scrolling=''no'' style=''width: 100%; height: 480px; overflow: hidden;'' webkitallowfullscreen=''true'' mozallowfullscreen=''true'' allowfullscreen=''true''></iframe>'),
(509, 27, 92, 'mp4-GatnzID', '<IFRAME SRC=''http://www.mp4upload.com/embed-0805jhi8nfvi.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(510, 27, 92, 'ais-GantzID', '<iframe src=''http://aisfile.com/embed-cive3zh6oe8s-650x368.html'' frameborder=''0'' marginwidth=''0'' marginheight=''0'' scrolling=''NO'' width=''100%'' height=''480''></iframe>'),
(511, 39, 93, 'AP-tonan', '<iframe src=''http://aniplayer.tv/embed.php?u=f5979e5d5b35c5c8&w=100% &h=480'' frameborder=''0'' scrolling=''no'' style=''width: 100%; height: 480px; overflow: hidden;'' webkitallowfullscreen=''true'' mozallowfullscreen=''true'' allowfullscreen=''true''></iframe>'),
(512, 39, 93, 'ais-tonan', '<iframe src=''http://aisfile.com/embed-1eftfwlsazb4-650x368.html'' frameborder=''0'' marginwidth=''0'' marginheight=''0'' scrolling=''NO'' width=''100%'' height=''480''></iframe>'),
(513, 51, 94, 'ais-nekonime', '<iframe src=''http://aisfile.com/embed-qbz59538sm7e-650x368.html'' frameborder=''0'' marginwidth=''0'' marginheight=''0'' scrolling=''NO'' width=''100%'' height=''480''></iframe>'),
(514, 31, 95, 'mp4-oploverz', '<IFRAME SRC=''http://www.mp4upload.com/embed-k3sylhio726x.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(515, 31, 95, 'ais-oploverz', '<iframe src=''http://aisfile.com/embed-9sbk3qa4325w-650x368.html'' frameborder=''0'' marginwidth=''0'' marginheight=''0'' scrolling=''NO'' width=''100%'' height=''480''></iframe>'),
(516, 50, 97, 'mp4-awsubs', '<IFRAME SRC=''http://www.mp4upload.com/embed-204nfjcjqimp.html'' allowfullscreen=''true'' FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=480></IFRAME>'),
(517, 50, 97, 'ais-awsubs', '<iframe src=''http://aisfile.com/embed-v0punpp7fnbt-650x368.html'' frameborder=''0'' marginwidth=''0'' marginheight=''0'' scrolling=''NO'' width=''100%'' height=''480''></iframe>'),
(521, 56, 96, 'vidme', '<iframe src=''https://vid.me/e/E86l'' width=''100%'' height=''480'' frameborder=''0'' allowfullscreen webkitallowfullscreen mozallowfullscreen scrolling=''no''></iframe>'),
(522, 44, 98, 'vid.me', '<iframe src=''https://vid.me/e/46tc'' width=''100%'' height=''352'' frameborder=''0'' allowfullscreen webkitallowfullscreen mozallowfullscreen scrolling=''no''></iframe>'),
(536, 44, 99, 'vid.me', '<iframe src=''https://vid.me/e/runP'' width=''100%'' height=''352'' frameborder=''0'' allowfullscreen webkitallowfullscreen mozallowfullscreen scrolling=''no''></iframe>'),
(537, 33, 103, 'vidme', '<iframe src=''https://vid.me/e/ix62'' width=''100%'' height=''480'' frameborder=''0'' allowfullscreen webkitallowfullscreen mozallowfullscreen scrolling=''no''></iframe>'),
(538, 44, 100, 'vid.me', '<iframe src=''https://vid.me/e/kTcO'' width=''100%'' height=''352'' frameborder=''0'' allowfullscreen webkitallowfullscreen mozallowfullscreen scrolling=''no''></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `fx_relasitag`
--

CREATE TABLE IF NOT EXISTS `fx_relasitag` (
  `idtag` int(45) NOT NULL,
  `idfilm` int(45) NOT NULL,
  `idrelasi` int(45) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idrelasi`),
  KEY `fk_fx_tag_has_fx_jdlfilm_fx_jdlfilm1` (`idfilm`),
  KEY `FK_fx_relasitag` (`idtag`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=427 ;

--
-- Dumping data for table `fx_relasitag`
--

INSERT INTO `fx_relasitag` (`idtag`, `idfilm`, `idrelasi`) VALUES
(1, 11, 1),
(1, 14, 2),
(1, 22, 3),
(1, 23, 4),
(1, 26, 6),
(1, 27, 7),
(1, 37, 13),
(4, 14, 15),
(4, 27, 17),
(5, 11, 22),
(5, 15, 24),
(5, 17, 26),
(5, 18, 27),
(5, 21, 29),
(5, 24, 30),
(5, 29, 32),
(5, 30, 33),
(5, 32, 34),
(6, 11, 36),
(6, 14, 37),
(6, 15, 38),
(6, 18, 40),
(6, 21, 43),
(6, 24, 44),
(6, 33, 45),
(6, 37, 47),
(8, 15, 48),
(8, 17, 49),
(8, 29, 51),
(9, 15, 53),
(9, 21, 54),
(9, 30, 55),
(10, 15, 58),
(10, 24, 59),
(10, 32, 61),
(11, 14, 62),
(11, 18, 63),
(11, 26, 65),
(11, 27, 66),
(12, 17, 68),
(12, 18, 69),
(12, 29, 72),
(12, 32, 73),
(13, 17, 74),
(13, 33, 75),
(14, 17, 76),
(15, 18, 77),
(15, 26, 80),
(15, 29, 81),
(15, 37, 82),
(16, 37, 84),
(17, 22, 86),
(17, 30, 87),
(18, 23, 90),
(18, 27, 92),
(18, 37, 95),
(19, 23, 96),
(19, 26, 97),
(22, 27, 101),
(23, 27, 102),
(1, 35, 209),
(4, 35, 210),
(18, 35, 211),
(24, 35, 212),
(5, 20, 229),
(6, 20, 230),
(8, 20, 231),
(12, 20, 232),
(15, 20, 233),
(1, 45, 251),
(4, 45, 252),
(15, 45, 253),
(18, 45, 254),
(22, 45, 255),
(5, 46, 256),
(12, 46, 257),
(5, 47, 269),
(6, 47, 270),
(15, 47, 271),
(31, 47, 272),
(1, 25, 273),
(4, 25, 274),
(10, 25, 275),
(11, 25, 276),
(18, 25, 277),
(20, 25, 278),
(21, 25, 279),
(5, 48, 280),
(12, 48, 281),
(14, 48, 282),
(1, 34, 286),
(6, 34, 287),
(11, 34, 288),
(5, 49, 289),
(12, 49, 290),
(5, 38, 291),
(9, 38, 292),
(16, 38, 293),
(1, 28, 294),
(4, 28, 295),
(5, 28, 296),
(12, 28, 297),
(18, 28, 298),
(5, 16, 299),
(6, 16, 300),
(12, 16, 301),
(1, 31, 312),
(4, 31, 313),
(17, 31, 314),
(19, 31, 315),
(1, 50, 374),
(3, 50, 375),
(10, 50, 376),
(17, 50, 377),
(1, 57, 390),
(5, 57, 391),
(18, 57, 392),
(1, 51, 393),
(2, 51, 394),
(6, 51, 395),
(15, 51, 396),
(22, 51, 397),
(30, 51, 398),
(5, 56, 409),
(18, 56, 410),
(9, 44, 413),
(12, 44, 414),
(6, 19, 415),
(15, 19, 416),
(16, 19, 417),
(6, 39, 418),
(8, 39, 419),
(12, 39, 420),
(22, 39, 421),
(1, 43, 422),
(4, 43, 423),
(12, 43, 424),
(15, 43, 425),
(18, 43, 426);

-- --------------------------------------------------------

--
-- Table structure for table `fx_reqfilm`
--

CREATE TABLE IF NOT EXISTS `fx_reqfilm` (
  `idreqfilm` int(45) NOT NULL AUTO_INCREMENT,
  `isireqfilm` text NOT NULL,
  `timereqfilm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idreqfilm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fx_tag`
--

CREATE TABLE IF NOT EXISTS `fx_tag` (
  `idtag` int(45) NOT NULL AUTO_INCREMENT,
  `jdltag` varchar(45) DEFAULT NULL,
  `tagalias` varchar(50) NOT NULL,
  `destag` varchar(255) DEFAULT 'TIdak diketahui',
  PRIMARY KEY (`idtag`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `fx_tag`
--

INSERT INTO `fx_tag` (`idtag`, `jdltag`, `tagalias`, `destag`) VALUES
(1, 'Action', 'action', 'laga, pertarungan'),
(2, 'Horror', 'horror', 'Horror'),
(3, 'Mecha', 'mecha', 'Anime/manga yang berunsur robot & perang.Awalnya diperuntukan untuk shonen tapi shojo sudah mengambil bagiannya juga. (misal : magic knight rayeart, gundam series'),
(4, 'Fantasy', 'fantasy', 'Fantasy'),
(5, 'Comedy', 'comedy', 'Comedy'),
(6, 'School', 'school', 'School'),
(8, 'Harem', 'harem', 'Harem'),
(9, 'Slice of life', 'slice-of-life', 'Slice of life'),
(10, 'Seinen', 'seinen', 'Seinen'),
(11, 'Supranatural', 'supranatural', 'Supranatural'),
(12, 'Romance', 'romance', 'Kisah Romantis'),
(13, 'Music', 'music', 'Cerita yang memiliki latar belakang yang berk'),
(14, 'Shoujo', 'shoujo', 'Cerita tentang anak perempuan'),
(15, 'Shounen', 'shounen', 'Pejuang supranatra'),
(16, 'Ecchi', 'ecchi', 'hal-hal mesum'),
(17, 'Sci-Fi', 'sci-fi', 'Peerangkat masa depan, teknologi canggih'),
(18, 'Adventured', 'adventured', 'kisah petualangan'),
(19, 'Magic', 'magic', 'Sihir, paranormal, pesulap'),
(20, 'Super Power', 'super-power', 'Kekuatan super dari tuhan'),
(21, 'Vampire', 'vampire', 'Makhluk halus pengisap darah yg kekal'),
(22, 'Drama', 'drama', 'Kisah sebenarnya yg di adaptasi ulang dan rem'),
(23, 'Historikal', 'historikal', 'Berdasarkan dari kisah sebenarnya'),
(24, 'Kids', 'kids', 'Untuk anak anak'),
(30, 'Psicology', 'psicology', 'Psicology'),
(31, 'sport', 'sport', 'sport');

-- --------------------------------------------------------

--
-- Table structure for table `fx_user`
--

CREATE TABLE IF NOT EXISTS `fx_user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `longname` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `handphone` varchar(45) DEFAULT NULL,
  `pwd` varchar(45) DEFAULT NULL,
  `lastlog` varchar(45) DEFAULT NULL,
  `timesigup` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `idlevel` int(45) NOT NULL,
  `tw` varchar(20) DEFAULT 'unknow',
  `fb` varchar(20) DEFAULT 'unknow',
  `imguser` text NOT NULL,
  PRIMARY KEY (`iduser`,`idlevel`),
  KEY `fk_fx_user_fx_level1` (`idlevel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `fx_user`
--

INSERT INTO `fx_user` (`iduser`, `username`, `longname`, `gender`, `email`, `handphone`, `pwd`, `lastlog`, `timesigup`, `idlevel`, `tw`, `fb`, `imguser`) VALUES
(3, 'ejhayoe', 'Reza Rafiq MZ', 'L', 'rezarafiqmz@gmail.com', '082395606666', '73bfdfd5eb92443d8e5a884eb4fc18cd', '2015-05-27 13:22:01', '2015-04-24 04:54:20', 1, '@Reza_rafiqMZ', 'reza rafiq mandati z', 'my_20150424.png'),
(4, 'setozart', 'sebastian seto weigel', 'L', 'setozart@gmail.com', '123456789', '5f4dcc3b5aa765d61d8327deb882cf99', '2015-05-27 00:21:09', '2015-05-14 09:10:38', 2, '@seto_plontoz', 'seto hernandez', 'sebastian seto weigel__4_20150514.png'),
(5, 'fahmistery', 'fahmi seteri', 'L', 'fahmi@gmail.com', '123456789101', '7c799788b5efdf1bae6b05d333d500dc', '2015-05-27 00:48:34', '2015-05-14 10:27:08', 2, '@see_pamee', 'fahmi razak', 'avatar.png'),
(6, 'oppayudi', 'yudiman', 'L', 'yudi@gmail.com', '12345678980', '7c799788b5efdf1bae6b05d333d500dc', '2015-05-26 11:20:13', '2015-05-14 10:29:09', 2, '@yudii', 'yudi', 'avatar.png'),
(7, 'reichinakai', 'reichi', 'L', 'reichi@gmail.com', '1234545468436', '7c799788b5efdf1bae6b05d333d500dc', NULL, '2015-05-14 10:30:17', 2, '@nakai_reichi', 'reichi nakai', 'avatar.png'),
(8, 'kayashie', 'Yasir M Arif', 'L', 'kayashie11@gmail.com', '', '7c799788b5efdf1bae6b05d333d500dc', '2015-05-26 20:33:56', '2015-05-14 10:32:00', 2, '@kayashie11', 'Yasir M Arif', 'tumblr_nf1f39k2h71qe6juqo1_500__8_20150515.jpg'),
(9, 'opch', 'opch', 'L', 'candrasaputra@live.com', '081373961140', 'a1920086298f9daf01b296926298a589', '2015-05-27 17:06:26', '2015-05-15 09:29:38', 1, '', '/pirateschannel', 'Luffy-one-piece-25736835-1920-1080_20150515.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fx_episode`
--
ALTER TABLE `fx_episode`
  ADD CONSTRAINT `fk_fx_episode_fx_jdlfilm` FOREIGN KEY (`idfilm`) REFERENCES `fx_jdlfilm` (`idfilm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fx_jdlfilm`
--
ALTER TABLE `fx_jdlfilm`
  ADD CONSTRAINT `fk_fx_jdlfilm_fx_kategori1` FOREIGN KEY (`idkategori`) REFERENCES `fx_kategori` (`idkategori`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `fx_linkdownload`
--
ALTER TABLE `fx_linkdownload`
  ADD CONSTRAINT `fk_fx_linkdownload_fx_episode1` FOREIGN KEY (`fx_episode_idepisode`, `fx_episode_idfilm`) REFERENCES `fx_episode` (`idepisode`, `idfilm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fx_linkstreaming`
--
ALTER TABLE `fx_linkstreaming`
  ADD CONSTRAINT `fk_fx_linkstreaming_fx_episode1` FOREIGN KEY (`fx_episode_idepisode`, `fx_episode_idfilm`) REFERENCES `fx_episode` (`idepisode`, `idfilm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fx_relasitag`
--
ALTER TABLE `fx_relasitag`
  ADD CONSTRAINT `FK_fx_relasitag` FOREIGN KEY (`idtag`) REFERENCES `fx_tag` (`idtag`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_fx_relasitag1` FOREIGN KEY (`idfilm`) REFERENCES `fx_jdlfilm` (`idfilm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fx_user`
--
ALTER TABLE `fx_user`
  ADD CONSTRAINT `fk_fx_user_fx_level1` FOREIGN KEY (`idlevel`) REFERENCES `fx_level` (`idlevel`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
