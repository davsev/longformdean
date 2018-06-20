-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2018 at 04:10 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `achva_dean`
--

-- --------------------------------------------------------

--
-- Table structure for table `family_state`
--

CREATE TABLE `family_state` (
  `family_state_id` int(11) NOT NULL,
  `family_state_name` text CHARACTER SET utf8 NOT NULL,
  `family_state_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_state`
--

INSERT INTO `family_state` (`family_state_id`, `family_state_name`, `family_state_value`) VALUES
(1, 'רווק', 0),
(2, 'נשוי', 0),
(3, 'גרוש', 0),
(4, 'אלמן', 0);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `tz` varchar(9) NOT NULL,
  `submitted` int(1) NOT NULL DEFAULT '0',
  `datas` text NOT NULL,
  `tzfile` text,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `gender` text NOT NULL,
  `isalone` varchar(10) DEFAULT NULL,
  `isalonefile` text,
  `birth_country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `cellular` int(10) NOT NULL,
  `year` int(4) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `study_field` text NOT NULL,
  `study_year` text NOT NULL,
  `asked_schol` text,
  `received_schol` text NOT NULL,
  `is_army` text NOT NULL,
  `length_army` int(11) NOT NULL,
  `is_lochem` int(1) NOT NULL,
  `islochemfile` text,
  `is_army_ptor` text NOT NULL,
  `is_army_ptor_file` text,
  `is_miluim` text NOT NULL,
  `is_miluim_file` text,
  `lo_oved_files` text,
  `self_salary_files` text,
  `self_employ_files` text,
  `mezonot_files` text,
  `mezonot_height_files` text,
  `is_siua_file` text,
  `lo_oved_av_files` text,
  `self_av_salary_files` text,
  `self_av_employ_files` text,
  `lo_oved_em_files` text,
  `self_em_salary_files` text,
  `self_em_employ_files` text,
  `lo_oved_zug_files` text,
  `self_zug_salary_files` text,
  `self_zug_employ_files` text,
  `self_children_files` text,
  `self_soldier_files` text,
  `self_student_files` text,
  `social_harig_file` text,
  `medical_harig_file` text,
  `family_harig_file` text,
  `explanation_file` text,
  `created` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `tz`, `submitted`, `datas`, `tzfile`, `lname`, `fname`, `gender`, `isalone`, `isalonefile`, `birth_country`, `city`, `cellular`, `year`, `email`, `study_field`, `study_year`, `asked_schol`, `received_schol`, `is_army`, `length_army`, `is_lochem`, `islochemfile`, `is_army_ptor`, `is_army_ptor_file`, `is_miluim`, `is_miluim_file`, `lo_oved_files`, `self_salary_files`, `self_employ_files`, `mezonot_files`, `mezonot_height_files`, `is_siua_file`, `lo_oved_av_files`, `self_av_salary_files`, `self_av_employ_files`, `lo_oved_em_files`, `self_em_salary_files`, `self_em_employ_files`, `lo_oved_zug_files`, `self_zug_salary_files`, `self_zug_employ_files`, `self_children_files`, `self_soldier_files`, `self_student_files`, `social_harig_file`, `medical_harig_file`, `family_harig_file`, `explanation_file`, `created`) VALUES
(21314, '9999999', 1, 'a:40:{s:5:\"fname\";s:6:\"משה\";s:5:\"lname\";s:6:\"כהן\";s:8:\"cellular\";s:10:\"0548888888\";s:6:\"gender\";s:8:\"נקבה\";s:13:\"birth_country\";s:10:\"ישראל\";s:4:\"city\";s:8:\"חיפה\";s:5:\"email\";s:11:\"aaa@aaa.aaa\";s:12:\"family_state\";s:1:\"3\";s:7:\"isalone\";s:8:\"בודד\";s:11:\"study_field\";s:1:\"1\";s:10:\"study_year\";s:2:\"ב\";s:11:\"asked_schol\";s:1:\"1\";s:14:\"received_schol\";s:1:\"0\";s:9:\"is_lochem\";s:1:\"0\";s:7:\"is_army\";s:6:\"ללא\";s:11:\"length_army\";s:1:\"0\";s:12:\"is_army_ptor\";s:1:\"0\";s:9:\"is_miluim\";s:1:\"0\";s:11:\"mimun_nosaf\";s:1:\"0\";s:15:\"taasukati_state\";s:1:\"3\";s:15:\"self_salary_avg\";s:0:\"\";s:15:\"self_employ_avg\";s:0:\"\";s:13:\"mezonot_state\";s:1:\"2\";s:14:\"mezonot_height\";s:5:\"10000\";s:7:\"is_siua\";N;s:18:\"taasukati_av_state\";s:1:\"0\";s:18:\"self_av_salary_avg\";s:0:\"\";s:18:\"self_av_employ_avg\";s:0:\"\";s:18:\"taasukati_em_state\";s:1:\"0\";s:18:\"self_em_salary_avg\";s:0:\"\";s:18:\"self_em_employ_avg\";s:0:\"\";s:19:\"taasukati_zug_state\";s:1:\"0\";s:19:\"self_zug_salary_avg\";s:0:\"\";s:19:\"self_zug_employ_avg\";s:0:\"\";s:13:\"self_children\";s:0:\"\";s:12:\"self_soldier\";s:0:\"\";s:12:\"self_student\";s:0:\"\";s:12:\"social_harig\";s:1:\"1\";s:12:\"family_harig\";s:1:\"1\";s:13:\"medical_harig\";s:1:\"1\";}', '[\"3.pdf\"]', 'ss', 'aa', 'נקבה', 'בודד', '[]', 'Israel', 'ערד', 5478, 2018, 'sam@gmail.com', '4', '', 'לא', 'לא', 'לאומי', 25, 0, '[\"1.pdf\",\"2.pdf\"]', '', '[\"1.pdf\"]', '', '[\"4.pdf\"]', '[\"11_wa.jpg\"]', '[\"11_wa.jpg\"]', '[\"11_wa.jpg\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1528873846'),
(21315, '888888', 0, 'a:66:{s:5:\"fname\";s:8:\"אייל\";s:5:\"lname\";s:8:\"חיים\";s:8:\"cellular\";s:4:\"0547\";s:6:\"gender\";s:8:\"נקבה\";s:13:\"birth_country\";s:6:\"Israel\";s:4:\"city\";s:6:\"ערד\";s:5:\"email\";s:11:\"aaa@aaa.aaa\";s:12:\"family_state\";s:1:\"1\";s:7:\"isalone\";s:13:\"לא בודד\";s:11:\"study_field\";s:2:\"11\";s:10:\"study_year\";s:1:\"2\";s:11:\"asked_schol\";s:1:\"0\";s:14:\"received_schol\";s:1:\"0\";s:9:\"is_lochem\";s:1:\"0\";s:7:\"is_army\";s:6:\"ללא\";s:11:\"length_army\";s:1:\"0\";s:12:\"is_army_ptor\";s:1:\"1\";s:9:\"is_miluim\";s:1:\"1\";s:11:\"mimun_nosaf\";s:1:\"0\";s:15:\"taasukati_state\";s:1:\"3\";s:15:\"self_salary_avg\";s:4:\"3000\";s:15:\"self_employ_avg\";s:6:\"100000\";s:13:\"mezonot_state\";s:1:\"0\";s:14:\"mezonot_height\";s:0:\"\";s:7:\"is_siua\";s:1:\"0\";s:18:\"taasukati_av_state\";s:1:\"1\";s:18:\"self_av_salary_avg\";s:0:\"\";s:18:\"self_av_employ_avg\";s:6:\"555555\";s:18:\"taasukati_em_state\";s:1:\"2\";s:18:\"self_em_salary_avg\";s:0:\"\";s:18:\"self_em_employ_avg\";s:5:\"10000\";s:19:\"taasukati_zug_state\";s:1:\"3\";s:19:\"self_zug_salary_avg\";s:4:\"1000\";s:19:\"self_zug_employ_avg\";s:0:\"\";s:13:\"self_children\";s:0:\"\";s:12:\"self_soldier\";s:0:\"\";s:12:\"self_student\";s:0:\"\";s:12:\"social_harig\";s:1:\"1\";s:12:\"family_harig\";s:1:\"1\";s:13:\"medical_harig\";s:1:\"1\";s:6:\"tzfile\";a:2:{i:0;s:5:\"1.png\";i:1;s:5:\"2.png\";}s:11:\"isalonefile\";N;s:12:\"islochemfile\";N;s:17:\"is_army_ptor_file\";N;s:14:\"is_miluim_file\";N;s:17:\"self_employ_files\";a:2:{i:0;s:9:\"11_wa.jpg\";i:1;s:9:\"11_wa.jpg\";}s:17:\"self_salary_files\";N;s:13:\"lo_oved_files\";N;s:13:\"mezonot_files\";N;s:20:\"mezonot_height_files\";N;s:12:\"is_siua_file\";a:6:{i:0;s:5:\"1.png\";i:1;s:0:\"\";i:2;s:5:\"1.png\";i:3;s:5:\"1.png\";i:4;s:5:\"1.png\";i:5;s:5:\"1.png\";}s:16:\"lo_oved_av_files\";N;s:20:\"self_av_salary_files\";N;s:20:\"self_av_employ_files\";N;s:16:\"lo_oved_em_files\";N;s:20:\"self_em_salary_files\";N;s:20:\"self_em_employ_files\";N;s:17:\"lo_oved_zug_files\";N;s:21:\"self_zug_salary_files\";N;s:21:\"self_zug_employ_files\";N;s:19:\"self_children_files\";N;s:18:\"self_soldier_files\";N;s:18:\"self_student_files\";a:0:{}s:17:\"social_harig_file\";a:2:{i:0;s:5:\"1.png\";i:1;s:5:\"1.png\";}s:18:\"medical_harig_file\";a:1:{i:0;s:5:\"2.png\";}s:17:\"family_harig_file\";a:1:{i:0;s:5:\"1.png\";}}', NULL, 'black', 'james', 'זכר', 'בודד', NULL, 'Israel', 'ערד', 547, 2018, 'sam@gmail.com', '2', '', 'כן', '', 'לאומי', 0, 1, '[\"1.pdf\"]', '0', '[\"achva_english.conf\"]', '1', '[\"4.pdf\"]', '[\"4.pdf\"]', '[\"1.pdf\",\"2.pdf\",\"3.pdf\"]', '[\"3.pdf\"]', '[\"2.pdf\"]', '[\"2.pdf\",\"3.pdf\",\"2018-02-25_1321.png\"]', '[\"2.pdf\"]', NULL, '[\"2018-02-25_1320.png\"]', '[\"2018-02-12_0937.png\",\"2018-02-25_1320.png\"]', '[\"1.png\"]', '[\"2.png\",\"2018-02-25_1321.png\",\"2018-02-25_1321.png\",\"2018-02-25_1320.png\"]', '[\"2.png\"]', '[\"1.png\",\"2.png\",\"2018-02-12_0937.png\",\"chevronpre.png\"]', '[\"2018-02-25_1320.png\",\"chevron.png\"]', NULL, '[]', NULL, NULL, '[]', NULL, NULL, NULL, ''),
(21316, '555555555', 1, 'a:40:{s:5:\"fname\";s:6:\"משה\";s:5:\"lname\";s:6:\"כהן\";s:8:\"cellular\";s:5:\"05478\";s:6:\"gender\";s:8:\"נקבה\";s:13:\"birth_country\";s:6:\"Israel\";s:4:\"city\";s:6:\"ערד\";s:5:\"email\";s:18:\"asda@asdasd.asdasd\";s:12:\"family_state\";s:1:\"1\";s:7:\"isalone\";s:13:\"לא בודד\";s:11:\"study_field\";s:1:\"3\";s:10:\"study_year\";s:1:\"2\";s:11:\"asked_schol\";s:1:\"0\";s:14:\"received_schol\";s:1:\"0\";s:9:\"is_lochem\";s:1:\"0\";s:7:\"is_army\";s:10:\"לאומי\";s:11:\"length_army\";s:2:\"15\";s:12:\"is_army_ptor\";s:1:\"0\";s:9:\"is_miluim\";s:1:\"0\";s:11:\"mimun_nosaf\";s:1:\"0\";s:15:\"taasukati_state\";s:1:\"2\";s:15:\"self_salary_avg\";s:0:\"\";s:15:\"self_employ_avg\";s:5:\"15000\";s:13:\"mezonot_state\";s:1:\"2\";s:14:\"mezonot_height\";s:4:\"1000\";s:7:\"is_siua\";s:1:\"0\";s:18:\"taasukati_av_state\";s:1:\"0\";s:18:\"self_av_salary_avg\";s:0:\"\";s:18:\"self_av_employ_avg\";s:0:\"\";s:18:\"taasukati_em_state\";s:1:\"0\";s:18:\"self_em_salary_avg\";s:0:\"\";s:18:\"self_em_employ_avg\";s:0:\"\";s:19:\"taasukati_zug_state\";s:1:\"0\";s:19:\"self_zug_salary_avg\";s:0:\"\";s:19:\"self_zug_employ_avg\";s:0:\"\";s:13:\"self_children\";s:0:\"\";s:12:\"self_soldier\";s:0:\"\";s:12:\"self_student\";s:0:\"\";s:12:\"social_harig\";s:1:\"1\";s:12:\"family_harig\";s:1:\"1\";s:13:\"medical_harig\";s:1:\"1\";}', '[\"1.png\",\"2.png\"]', '', '', '', NULL, NULL, '', '', 0, 2018, NULL, '', '', NULL, '', '', 0, 0, NULL, '', NULL, '', NULL, NULL, NULL, '[\"11_wa.jpg\",\"11_wa.jpg\"]', NULL, NULL, '[\"1.png\",\"\",\"1.png\",\"1.png\",\"1.png\",\"1.png\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[]', '[\"1.png\",\"1.png\"]', '[\"2.png\"]', '[\"1.png\"]', NULL, ''),
(21317, '303748891', 0, 'a:41:{s:5:\"fname\";s:6:\"דוד\";s:5:\"lname\";s:6:\"לוי\";s:8:\"cellular\";s:4:\"0547\";s:6:\"gender\";s:8:\"נקבה\";s:13:\"birth_country\";s:10:\"דנמרק\";s:4:\"city\";s:6:\"ערד\";s:5:\"email\";s:11:\"aaa@aaa.aaa\";s:12:\"family_state\";s:1:\"1\";s:7:\"isalone\";s:13:\"לא בודד\";s:11:\"study_field\";s:1:\"2\";s:10:\"study_year\";s:1:\"3\";s:11:\"asked_schol\";s:1:\"0\";s:14:\"received_schol\";s:1:\"0\";s:9:\"is_lochem\";s:1:\"0\";s:7:\"is_army\";s:10:\"לאומי\";s:11:\"length_army\";s:2:\"15\";s:12:\"is_army_ptor\";s:1:\"0\";s:9:\"is_miluim\";s:1:\"0\";s:11:\"mimun_nosaf\";s:1:\"0\";s:15:\"taasukati_state\";s:1:\"2\";s:15:\"self_salary_avg\";s:0:\"\";s:15:\"self_employ_avg\";s:5:\"15000\";s:13:\"mezonot_state\";s:1:\"1\";s:14:\"mezonot_height\";s:0:\"\";s:7:\"is_siua\";s:1:\"0\";s:18:\"taasukati_av_state\";s:1:\"0\";s:18:\"self_av_salary_avg\";s:0:\"\";s:18:\"self_av_employ_avg\";s:0:\"\";s:18:\"taasukati_em_state\";s:1:\"0\";s:18:\"self_em_salary_avg\";s:0:\"\";s:18:\"self_em_employ_avg\";s:0:\"\";s:19:\"taasukati_zug_state\";s:1:\"0\";s:19:\"self_zug_salary_avg\";s:0:\"\";s:19:\"self_zug_employ_avg\";s:0:\"\";s:13:\"self_children\";s:0:\"\";s:12:\"self_soldier\";s:0:\"\";s:12:\"self_student\";s:0:\"\";s:12:\"social_harig\";s:1:\"1\";s:12:\"family_harig\";s:1:\"1\";s:13:\"medical_harig\";s:1:\"1\";s:11:\"explanation\";s:185:\" שדגכמךלדגשחךלחדג ךלחף דףגלכ ףךל,גד\r\nדשכשדגלכמךףדשגמכשדגחףכףשדגכ\r\nשדגכףשחדגכףלחנדגףלחנשףגלחכףשדגכ\";}', '[\"591555901000100490491no.jpg\"]', '', '', '', NULL, NULL, '', '', 0, 2018, NULL, '', '', NULL, '', '', 0, 0, NULL, '', NULL, '', NULL, NULL, NULL, '[\"1.pdf\",\"2.pdf\",\"3.pdf\",\"4.pdf\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[]', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(21318, '321321321', 0, 'a:66:{s:5:\"fname\";s:0:\"\";s:5:\"lname\";s:0:\"\";s:8:\"cellular\";s:0:\"\";s:6:\"gender\";N;s:13:\"birth_country\";s:0:\"\";s:4:\"city\";s:0:\"\";s:5:\"email\";s:0:\"\";s:12:\"family_state\";s:0:\"\";s:7:\"isalone\";s:13:\"לא בודד\";s:11:\"study_field\";s:0:\"\";s:10:\"study_year\";s:0:\"\";s:11:\"asked_schol\";N;s:14:\"received_schol\";s:1:\"0\";s:9:\"is_lochem\";s:1:\"0\";s:7:\"is_army\";s:0:\"\";s:11:\"length_army\";s:1:\"0\";s:12:\"is_army_ptor\";s:1:\"0\";s:9:\"is_miluim\";s:1:\"0\";s:11:\"mimun_nosaf\";s:1:\"0\";s:15:\"taasukati_state\";s:0:\"\";s:15:\"self_salary_avg\";s:0:\"\";s:15:\"self_employ_avg\";s:0:\"\";s:13:\"mezonot_state\";s:1:\"0\";s:14:\"mezonot_height\";s:0:\"\";s:7:\"is_siua\";N;s:18:\"taasukati_av_state\";s:1:\"0\";s:18:\"self_av_salary_avg\";s:0:\"\";s:18:\"self_av_employ_avg\";s:0:\"\";s:18:\"taasukati_em_state\";s:1:\"0\";s:18:\"self_em_salary_avg\";s:0:\"\";s:18:\"self_em_employ_avg\";s:0:\"\";s:19:\"taasukati_zug_state\";s:1:\"0\";s:19:\"self_zug_salary_avg\";s:0:\"\";s:19:\"self_zug_employ_avg\";s:0:\"\";s:13:\"self_children\";s:0:\"\";s:12:\"self_soldier\";s:0:\"\";s:12:\"self_student\";s:0:\"\";s:12:\"social_harig\";s:1:\"1\";s:12:\"family_harig\";s:1:\"1\";s:13:\"medical_harig\";s:1:\"1\";s:6:\"tzfile\";N;s:11:\"isalonefile\";N;s:12:\"islochemfile\";N;s:17:\"is_army_ptor_file\";N;s:14:\"is_miluim_file\";N;s:17:\"self_employ_files\";N;s:17:\"self_salary_files\";N;s:13:\"lo_oved_files\";N;s:13:\"mezonot_files\";N;s:20:\"mezonot_height_files\";N;s:12:\"is_siua_file\";N;s:16:\"lo_oved_av_files\";N;s:20:\"self_av_salary_files\";N;s:20:\"self_av_employ_files\";N;s:16:\"lo_oved_em_files\";N;s:20:\"self_em_salary_files\";N;s:20:\"self_em_employ_files\";N;s:17:\"lo_oved_zug_files\";N;s:21:\"self_zug_salary_files\";N;s:21:\"self_zug_employ_files\";N;s:19:\"self_children_files\";N;s:18:\"self_soldier_files\";N;s:18:\"self_student_files\";N;s:17:\"social_harig_file\";N;s:18:\"medical_harig_file\";N;s:17:\"family_harig_file\";N;}', '[\"11_wa.jpg\",\"4044958f-036c-48ea-9721-859dad9c1823.jpg\"]', '', '', '', NULL, NULL, '', '', 0, 2018, NULL, '', '', NULL, '', '', 0, 0, NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(21332, '032233223', 0, 'a:66:{s:5:\"fname\";s:0:\"\";s:5:\"lname\";s:0:\"\";s:8:\"cellular\";s:0:\"\";s:6:\"gender\";s:6:\"זכר\";s:13:\"birth_country\";s:0:\"\";s:4:\"city\";s:0:\"\";s:5:\"email\";s:0:\"\";s:12:\"family_state\";s:0:\"\";s:7:\"isalone\";s:13:\"לא בודד\";s:11:\"study_field\";s:0:\"\";s:10:\"study_year\";s:0:\"\";s:11:\"asked_schol\";N;s:14:\"received_schol\";s:1:\"0\";s:9:\"is_lochem\";s:1:\"0\";s:7:\"is_army\";s:0:\"\";s:11:\"length_army\";s:1:\"0\";s:12:\"is_army_ptor\";s:1:\"0\";s:9:\"is_miluim\";s:1:\"0\";s:11:\"mimun_nosaf\";s:1:\"0\";s:15:\"taasukati_state\";s:0:\"\";s:15:\"self_salary_avg\";s:0:\"\";s:15:\"self_employ_avg\";s:0:\"\";s:13:\"mezonot_state\";s:1:\"0\";s:14:\"mezonot_height\";s:0:\"\";s:7:\"is_siua\";N;s:18:\"taasukati_av_state\";s:1:\"0\";s:18:\"self_av_salary_avg\";s:0:\"\";s:18:\"self_av_employ_avg\";s:0:\"\";s:18:\"taasukati_em_state\";s:1:\"0\";s:18:\"self_em_salary_avg\";s:0:\"\";s:18:\"self_em_employ_avg\";s:0:\"\";s:19:\"taasukati_zug_state\";s:1:\"0\";s:19:\"self_zug_salary_avg\";s:0:\"\";s:19:\"self_zug_employ_avg\";s:0:\"\";s:13:\"self_children\";s:0:\"\";s:12:\"self_soldier\";s:0:\"\";s:12:\"self_student\";s:0:\"\";s:12:\"social_harig\";s:1:\"1\";s:12:\"family_harig\";s:1:\"1\";s:13:\"medical_harig\";s:1:\"1\";s:6:\"tzfile\";a:1:{i:0;s:5:\"3.pdf\";}s:11:\"isalonefile\";a:0:{}s:12:\"islochemfile\";a:2:{i:0;s:5:\"1.pdf\";i:1;s:5:\"2.pdf\";}s:17:\"is_army_ptor_file\";a:1:{i:0;s:5:\"1.pdf\";}s:14:\"is_miluim_file\";a:1:{i:0;s:5:\"4.pdf\";}s:17:\"self_employ_files\";a:1:{i:0;s:9:\"11_wa.jpg\";}s:17:\"self_salary_files\";a:1:{i:0;s:9:\"11_wa.jpg\";}s:13:\"lo_oved_files\";a:1:{i:0;s:9:\"11_wa.jpg\";}s:13:\"mezonot_files\";N;s:20:\"mezonot_height_files\";N;s:12:\"is_siua_file\";N;s:16:\"lo_oved_av_files\";N;s:20:\"self_av_salary_files\";N;s:20:\"self_av_employ_files\";N;s:16:\"lo_oved_em_files\";N;s:20:\"self_em_salary_files\";N;s:20:\"self_em_employ_files\";N;s:17:\"lo_oved_zug_files\";N;s:21:\"self_zug_salary_files\";N;s:21:\"self_zug_employ_files\";N;s:19:\"self_children_files\";N;s:18:\"self_soldier_files\";N;s:18:\"self_student_files\";N;s:17:\"social_harig_file\";N;s:18:\"medical_harig_file\";N;s:17:\"family_harig_file\";N;}', NULL, '', '', '', NULL, NULL, '', '', 0, 2018, NULL, '', '', NULL, '', '', 0, 0, NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1528876513'),
(21333, '889990099', 0, 'a:41:{s:5:\"fname\";s:6:\"דוד\";s:5:\"lname\";s:10:\"סבלוף\";s:8:\"cellular\";N;s:6:\"gender\";N;s:13:\"birth_country\";N;s:4:\"city\";N;s:5:\"email\";N;s:12:\"family_state\";N;s:7:\"isalone\";N;s:11:\"study_field\";N;s:10:\"study_year\";N;s:11:\"asked_schol\";N;s:14:\"received_schol\";N;s:9:\"is_lochem\";N;s:7:\"is_army\";N;s:11:\"length_army\";N;s:12:\"is_army_ptor\";N;s:9:\"is_miluim\";N;s:11:\"mimun_nosaf\";N;s:15:\"taasukati_state\";N;s:15:\"self_salary_avg\";N;s:15:\"self_employ_avg\";N;s:13:\"mezonot_state\";N;s:14:\"mezonot_height\";N;s:7:\"is_siua\";N;s:18:\"taasukati_av_state\";N;s:18:\"self_av_salary_avg\";N;s:18:\"self_av_employ_avg\";N;s:18:\"taasukati_em_state\";N;s:18:\"self_em_salary_avg\";N;s:18:\"self_em_employ_avg\";N;s:19:\"taasukati_zug_state\";N;s:19:\"self_zug_salary_avg\";N;s:19:\"self_zug_employ_avg\";N;s:13:\"self_children\";N;s:12:\"self_soldier\";N;s:12:\"self_student\";N;s:12:\"social_harig\";N;s:12:\"family_harig\";N;s:13:\"medical_harig\";N;s:11:\"explanation\";N;}', '[\"4.pdf\"]', '', '', '', NULL, NULL, '', '', 0, 2018, NULL, '', '', NULL, '', '', 0, 0, NULL, '', NULL, '', NULL, NULL, '[\"2.pdf\",\"1.pdf\"]', NULL, NULL, NULL, NULL, NULL, NULL, '[\"3.pdf\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1529478882');

-- --------------------------------------------------------

--
-- Table structure for table `study_field`
--

CREATE TABLE `study_field` (
  `study_field_id` int(11) NOT NULL,
  `study_field` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `study_field`
--

INSERT INTO `study_field` (`study_field_id`, `study_field`) VALUES
(1, 'לימודים רב תחומי'),
(2, 'מערכות מידע'),
(3, 'מדעי החיים'),
(4, 'פסיכולוגיה'),
(5, 'פסיכולוגיה בשילוב חינוך מיוחד'),
(6, 'גיל רך'),
(7, 'גיל רך לדוברי ערבית'),
(8, 'טבע לדוברי ערבית'),
(9, 'חינוך יסודי'),
(10, 'חינוך על יסודי'),
(11, 'חינוך מיוחד'),
(12, 'תואר שני'),
(13, 'הסבה להוראה'),
(14, 'הוראת אנגלית'),
(15, 'הוראת מתמטיקה'),
(16, 'קלינאות תקשורת'),
(17, 'אגרוטק');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `family_state`
--
ALTER TABLE `family_state`
  ADD PRIMARY KEY (`family_state_id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_field`
--
ALTER TABLE `study_field`
  ADD PRIMARY KEY (`study_field_id`),
  ADD KEY `study_field_id` (`study_field_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `family_state`
--
ALTER TABLE `family_state`
  MODIFY `family_state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21334;
--
-- AUTO_INCREMENT for table `study_field`
--
ALTER TABLE `study_field`
  MODIFY `study_field_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
