-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2020 at 10:10 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinments`
--

CREATE TABLE `appoinments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointcat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appoinments`
--

INSERT INTO `appoinments` (`id`, `name`, `phone`, `email`, `date`, `time`, `appointcat`, `sample`, `report`, `address`, `comments`, `free`, `created_at`, `updated_at`) VALUES
(1, 'ferfde', '545454', 'a@Whgh', '2020-10-31', '14:18', '2', 'Home', 'Home', 'ghghgh', 'ghghgh', NULL, '2020-10-31 02:18:38', '2020-10-31 02:18:38'),
(2, 'Sayeed', '12345678', 'aa@ffff', '2020-10-31', '14:20', NULL, NULL, NULL, 'Lamanta-Uttraa,house-12', 'Hello', NULL, '2020-10-31 02:21:11', '2020-10-31 02:21:11'),
(5, 'hhjhj', '7686767', '76@dgfdgf', '2020-10-31', '03:15', '1', 'Home', 'Home', 'fggf', 'gf', NULL, '2020-10-31 03:15:45', '2020-10-31 03:15:45'),
(6, 'Saiful Islam', '01734657282', 'saifulislam@gmail.com', '2020-11-02', '09:08', '4', 'Hospital', 'Online', 'Mirpur-12, Road-12, Mirpur,Dhaka', 'Its Urgent For me', NULL, '2020-10-31 04:04:17', '2020-10-31 04:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image6` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `created_at`, `updated_at`) VALUES
(1, 'public/image/5f9fe6053b3a3covid-banner_0.jpg', 'public/image/5f9fe6053b556doctor-slider2.png', 'public/image/5fa62dfcbb86acontact-us.gif', 'public/image/5f9fe5d352a05sample.17f9c3b9.png', '1', '1', NULL, '2020-11-06 23:17:48');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details1` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details2` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details3` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `author`, `image`, `details`, `details1`, `details2`, `details3`, `free`, `created_at`, `updated_at`) VALUES
(4, 'competence to customers and regulatory and accreditation organizations', 'Admin', 'public/image/5f91794907815shutterstock_547748158.png', 'Proficiency testing (PT) is a valuable tool in the quality improvement process. PT provides one measure of objective evidence of laboratory competence to customers and regulatory and accreditation Proficiency testing (PT) is a valuable tool in the quality improvement process. PT provides one measure of objective evidence of laboratory competence to customers and regulatory and accreditation organizationsorganizations', 'Proficiency testing (PT) is a valuable tool in the quality improvement process. PT provides one measure of objective evidence of laboratory competence to customers and regulatory and accreditation Proficiency testing (PT) is a valuable tool in the quality improvement process. PT provides one measure of objective evidence of laboratory competence to customers and regulatory and accreditation organizationsorganizations', 'vv', NULL, NULL, '2020-10-22 06:21:29', '2020-10-28 22:33:05'),
(5, 'Haematology Test', 'Admin', 'public/image/5f9811b528fdeHome-3.png', 'return redirect()->back()->with(\'add\',\'add\');\r\nreturn redirect()->back()->with(\'add\',\'add\');\r\nreturn redirect()->back()->with(\'add\',\'add\');\r\nreturn redirect()->back()->with(\'add\',\'add\');', 'return redirect()->back()->with(\'add\',\'add\');\r\nreturn redirect()->back()->with(\'add\',\'add\');\r\nreturn redirect()->back()->with(\'add\',\'add\');\r\nreturn redirect()->back()->with(\'add\',\'add\');', 'return redirect()->back()->with(\'add\',\'add\');', NULL, NULL, '2020-10-27 06:25:25', '2020-10-28 22:32:57');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `free` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `address`, `mobile1`, `mobile2`, `email`, `image`, `free`, `free1`, `created_at`, `updated_at`) VALUES
(1, 'NEBL', 'La-Montana, House #33, Road: Gareeb-E-Newaz Avenue, Sector:11,Uttara,Dhaka-1230,Bangladesh.', '+88 01778311111', '+88 01778322222', 'info@ehealthcarebd.com', 'public/image/5f8fee73b8be8logo.png', 'Sat-Thurs: (9.am-10.pm), Friday: (8.am-5.pm)', NULL, NULL, '2020-10-21 22:45:42');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(2558) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(74, 'Abu Sayeed', '01318712782', 'Hello@gmail.com', 'Hello', 'World', '2020-10-26 23:52:18', '2020-10-26 23:52:18'),
(75, 'dd', '44', 's@rf', 'f', 'f', '2020-10-26 23:56:14', '2020-10-26 23:56:14'),
(76, 'Abu Sayeed', '01318712782', 'saueed@hello', 'ddddddd', 'ddd', '2020-10-26 23:56:58', '2020-10-26 23:56:58'),
(77, 'jahid choto', '01467896756', 'sayeed@gmail.com', 'After importing it in the component,', 'After importing it in the component, the loader component can be used by just placing it inside the container you want it to be in, or anywhere in your template if you want a full-page loader.', '2020-10-27 01:22:55', '2020-10-27 01:22:55'),
(78, 'ff', '3', 'a@ff', 'dfdf', 'df', '2020-10-29 03:12:10', '2020-10-29 03:12:10');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chamber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `specialty`, `degree`, `chamber`, `image`, `free`, `created_at`, `updated_at`) VALUES
(1, 'Mr.Shohel Rana', 'Associate Consultant, Neurology', 'MBBS, FCPS (Medicine), MD (Neurology)', 'Square Hospital Limited', 'public/image/5f9d5d75be547Sofia_Richie-6-canadian-tux-ed-picks-homepage-1280x720.jpg', NULL, '2020-10-31 06:26:45', '2020-10-31 06:49:57'),
(2, 'Dr. Rama Biswas', 'Associate Consultant, Neurology', 'MBBS, FCPS (Medicine), MD (Neurology)', 'CRL Diagnostics', 'public/image/5f9d582551aa8doctor-smiling-with-stethoscope_1154-36.jpg', NULL, '2020-10-31 06:27:17', '2020-10-31 06:41:06');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_appoinments`
--

CREATE TABLE `doctor_appoinments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `free` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_appoinments`
--

INSERT INTO `doctor_appoinments` (`id`, `doctor`, `patient`, `phone`, `age`, `date`, `time`, `free`, `free2`, `created_at`, `updated_at`) VALUES
(1, '1', 'Amzad', '2', NULL, '2020-11-05', '23:59', NULL, NULL, '2020-11-04 23:59:15', '2020-11-04 23:59:15'),
(2, '1', 'Amzad', '1111111111111111111111111111111111', '3454', '2020-11-05', '00:02', NULL, NULL, '2020-11-05 00:02:37', '2020-11-05 00:02:37'),
(3, '1', 'Amzad', '2', '2', '2020-11-05', '00:09', NULL, NULL, '2020-11-05 00:21:39', '2020-11-05 00:21:39'),
(4, '1', 'Amzad', '2', '2', '2020-11-05', '00:23', NULL, NULL, '2020-11-05 00:23:38', '2020-11-05 00:23:38'),
(5, '1', 'Amzad', '3', '3', '2020-11-07', '00:49', NULL, NULL, '2020-11-07 00:49:09', '2020-11-07 00:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_09_26_060456_create_sessions_table', 1),
(7, '2020_10_03_061519_create_companies_table', 2),
(8, '2020_10_21_083351_create_test_categories_table', 3),
(9, '2020_10_21_105943_create_sliders_table', 4),
(10, '2020_10_22_051347_create_missions_table', 5),
(11, '2020_10_22_105420_create_blogs_table', 6),
(12, '2020_10_25_095337_create_contacts_table', 7),
(13, '2020_10_27_101825_create_tests_table', 8),
(14, '2020_10_31_060429_create_appoinments_table', 9),
(15, '2020_10_31_103459_create_doctors_table', 10),
(16, '2020_11_02_053844_create_services_table', 11),
(17, '2020_11_02_102113_create_banners_table', 12),
(18, '2020_11_03_053246_create_testappoinments_table', 13),
(19, '2020_11_04_092207_create_doctor_appoinments_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE `missions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uniquenes` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quoto` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quotoname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `missions`
--

INSERT INTO `missions` (`id`, `about`, `mission`, `uniquenes`, `quoto`, `quotoname`, `image`, `banner`, `created_at`, `updated_at`) VALUES
(1, 'Healthcare  is the first Dhaka based speciality lab to make advanced testing service available and affordable in Bangladesh. Here, a group of experienced pathologists, PhD scientists & clinicians work together to ensure quality report with proper clinical relevance. Until we started, lots of lab investigations were being outsourced to foreign labs causing communication gap or delay in service. We introduced many uncommon investigations not available in your neighborhood lab and we set the trend of early reporting on advanced blood tests. By virtue of our specialized services, we\'re relevant to all sections of society including general citizens, medical institutions, corporates and research organizations. Our services are useful in diagnosing deep-set disorders related to child growth, debility, sleep, sex, weight, mood swings, stress etc. Our extensive Quality Assurance Program ensures services that match global standards. As a mid-size set-up, with all our focus only on lab services, you can expect best of care from us.', 'Our mission is to empower clinical decision making of doctors that saves & improves patient\'s lives. Our vision is to be the laboratory of choice for speciality tests & clinical research by combining scientific leadership, carefully chosen technology & talented people.', 'Dedicated Team of Experienced Pathologist, SClinical Biochemist & Molecular Biologist Collectively Ensure Test Quality Most Recent Practicing Guidelines are Being Followed Carefully Chosen Technology & Instruments Suitable for the Country Patients Wide Range of Specialty Molecular Test Affordable Price & Short Turn Around Time (TAT) Keen Interest in Clinical Research', '“ Physicians require advance diagnostic test for appropriate treatment decision But specialty tests are not generally available in local labs. Therefore, lots of investigations are being outsourced to foreign labs causing delay in Service and higher cost per test. Realizing the problem, a group of Pathologists and Laboratory Scientists has established CRL Diagnostics. We are the First Dhaka Based Specialty Laboratory making Specialty Molecular Testing service available and affordable”', 'DR.HN Ashikur Rahaman ( Chairman )', 'public/image/5f912626cbcf6chairman.jpeg', 'public/image/5f91261b54820image1.jpg', NULL, '2020-10-22 00:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('kitesfashionnebl@gmail.com', '$2y$10$UaWE15yI8v4Orw9KkF5EI.hPskIjg/m1BmjdFJXQ2sENtNV0TqLIK', '2020-09-26 03:33:38');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `header2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `header3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `header4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `header5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bannerimage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `free` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service`, `header1`, `details1`, `header2`, `details2`, `header3`, `details3`, `header4`, `details4`, `header5`, `details5`, `bannerimage`, `image`, `free`, `free1`, `free2`, `created_at`, `updated_at`) VALUES
(1, '1', 'Choosing Your Test Category', 'The decision of which statistical test to use depends on the research design, the distribution of the data, and the type of variable. In general, if the data is normally distributed, parametric tests should be used. If the data is non-normal, non-parametric tests should be used', 'Choosing Your Test Category', 'The decision of which statistical test to use depends on the research design, the distribution of the data, and the type of variable. In general, if the data is normally distributed, parametric tests should be used. If the data is non-normal, non-parametric tests should be used', 'Choosing Your Test Category', 'The decision of which statistical test to use depends on the research design, the distribution of the data, and the type of variable. In general, if the data is normally distributed, parametric tests should be used. If the data is non-normal, non-parametric tests should be used', 'Choosing Your Test Category', 'The decision of which statistical test to use depends on the research design, the distribution of the data, and the type of variable. In general, if the data is normally distributed, parametric tests should be used. If the data is non-normal, non-parametric tests should be used', 'Patient Hospitalization? Make a Appoinment To Easy Process', 'The decision of which statistical test to use depends on the research design, the distribution of the data, and the type of variable. In general, if the data is normally distributed, parametric tests should be used. If the data is non-normal, non-parametric tests should be used', 'public/image/5f9fabd09c312sample.17f9c3b9.png', 'public/image/5f9fbd2ed399dunnamed.gif', NULL, NULL, NULL, '2020-11-01 23:56:26', '2020-11-02 02:02:54'),
(2, '2', 'Your Test Report', 'The decision of which statistical test to use depends on the research design, the distribution of the data, and the type of variable. In general, if the data is normally distributed, parametric tests should be used. If the data is non-normal, non-parametric tests should be used.', 'Your Test Report', 'The decision of which statistical test to use depends on the research design, the distribution of the data, and the type of variable. In general, if the data is normally distributed, parametric tests should be used. If the data is non-normal, non-parametric tests should be used.', 'Your Test Report', 'The decision of which statistical test to use depends on the research design, the distribution of the data, and the type of variable. In general, if the data is normally distributed, parametric tests should be used. If the data is non-normal, non-parametric tests should be used.', 'Your Test Report', 'The decision of which statistical test to use depends on the research design, the distribution of the data, and the type of variable. In general, if the data is normally distributed, parametric tests should be used. If the data is non-normal, non-parametric tests should be used.', 'Urgently Want Test Report? Downlod Your Test Report', 'The decision of which statistical test to use depends on the research design, the distribution of the data, and the type of variable. In general, if the data is normally distributed, parametric tests should be used. If the data is non-normal, non-parametric tests should be used.', 'public/image/5f9fa36397492EIG1.gif', 'public/image/5f9fa36397610medical-board-clip-doctor-hold-hand-clipboard-clinic-report-document-patient-check-medicine-prescription-treatment-179813493.jpg', NULL, NULL, NULL, '2020-11-02 00:12:51', '2020-11-02 00:12:51'),
(3, '3', 'Find Your Report', 'The decision of which statistical test to use depends on the research design, the distribution of the data, and the type of variable. In general, if the data is normally distributed, parametric tests should be used. If the data is non-normal, non-parametric tests should be used.', 'Find Your Report', 'The decision of which statistical test to use depends on the research design, the distribution of the data, and the type of variable. In general, if the data is normally distributed, parametric tests should be used. If the data is non-normal, non-parametric tests should be used.', 'Find Your Report', 'The decision of which statistical test to use depends on the research design, the distribution of the data, and the type of variable. In general, if the data is normally distributed, parametric tests should be used. If the data is non-normal, non-parametric tests should be used.', 'Find Your Report', 'The decision of which statistical test to use depends on the research design, the distribution of the data, and the type of variable. In general, if the data is normally distributed, parametric tests should be used. If the data is non-normal, non-parametric tests should be used.', 'Missing Your Report? If You Cannot find Your Online Report', 'The decision of which statistical test to use depends on the research design, the distribution of the data, and the type of variable. In general, if the data is normally distributed, parametric tests should be used. If the data is non-normal, non-parametric tests should be used.', 'public/image/5f9fa3e2b89e4Banner-Doctors.png', 'public/image/5f9fa3e2b8b71stethoscope-top-view-doctor-s-desk-table-blank-paper-white-background-view-doctor-work-tools-white-stethoscope-laptop-eyeglass-medical-drug-white-background-medical-doctor_11358-1583.jpg', NULL, NULL, NULL, '2020-11-02 00:14:58', '2020-11-02 00:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Yzt1kL8LFqSAV2YUNDIx8DiN1iYGzL1jGfLnulXq', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.183 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiNkFIUWprNE5oaUFBbFhnb1U1UW5xV2sxRzBMZG8yR1JhS1ZZaG15SCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJEplZWdMTEw2ZFBCai5ELnlkUDA4TGVXR3VBOHZ1WmxTTHdkVmI2WC91d2xRcE1sSm1yelU2IjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRKZWVnTExMNmRQQmouRC55ZFAwOExlV0d1QTh2dVpsU0x3ZFZiNlgvdXdsUXBNbEptcnpVNiI7fQ==', 1604748960);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(2, 'ehealthcare', 'public/image/5f9fb3c72a8b8unnamed.gif', '2020-10-21 05:43:20', '2020-11-02 01:22:47'),
(3, 'NEBL', 'public/image/5f9face847fd8EIG1.gif', '2020-10-21 05:45:22', '2020-11-02 00:53:28'),
(4, 'Covid-19 Test', 'public/image/5f9fb3468dc22ee84e6c4f71311cac5b0624e31ea9b51.gif', '2020-10-21 06:22:29', '2020-11-02 01:20:38');

-- --------------------------------------------------------

--
-- Table structure for table `testappoinments`
--

CREATE TABLE `testappoinments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bookingid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `report` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sample` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `free` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testappoinments`
--

INSERT INTO `testappoinments` (`id`, `bookingid`, `testid`, `patient`, `phone`, `age`, `address`, `date`, `time`, `report`, `sample`, `free`, `created_at`, `updated_at`) VALUES
(1, '4398', NULL, 'hhhhhhhhh', '28', '2', 'hhhhhhhhh', '2020-11-03', '00:29', 'Hospital', 'Home', NULL, '2020-11-03 00:29:51', '2020-11-03 00:29:51'),
(19, '7659', NULL, 'Amzad', '3', '3', 'Amzad', '2020-11-03', '02:53', 'Online', 'Home', NULL, '2020-11-03 02:53:27', '2020-11-03 02:53:27'),
(20, '2271', NULL, 'Amzad', '2', '3', 'hhhhhhhhh', '2020-11-03', '02:54', 'Online', 'Home', NULL, '2020-11-03 02:54:34', '2020-11-03 02:54:34'),
(21, '3065', NULL, 'Amzad', '3', '3', 'uiyuiy', '2020-11-03', '02:55', 'Online', 'Home', NULL, '2020-11-03 02:55:36', '2020-11-03 02:55:36'),
(22, '2815', NULL, 'Amzad', '11', '1', 'Amzad', '2020-11-03', '03:07', 'Hospital', 'Home', NULL, '2020-11-03 03:07:27', '2020-11-03 03:07:27'),
(23, '5194', '5', 'Amzad', '3', '2', '5454', '2020-11-03', '03:08', 'Hospital', 'Home', NULL, '2020-11-03 03:08:15', '2020-11-03 03:08:15'),
(24, '5546', NULL, 'Amzad', '2', '2', 'Amzad', '2020-11-03', '03:11', 'Hospital', 'Home', NULL, '2020-11-03 03:11:49', '2020-11-03 03:11:49'),
(25, '4136', NULL, 'Amzad', '2', '2', 'dfsdfs', '2020-11-03', '03:27', 'Home', 'Home', NULL, '2020-11-03 03:27:47', '2020-11-03 03:27:47'),
(26, '7787', '1', 'Amzad', '2', '2', 'Amzad', '2020-11-03', '03:42', 'Hospital', 'Home', NULL, '2020-11-03 03:42:57', '2020-11-03 03:42:57'),
(27, '6766', NULL, 'Sayeed', '01318712782', '26', 'Mirpur-13,Dhaka,', '2020-11-05', '10:00', 'Home', 'Hospital', NULL, '2020-11-03 05:05:58', '2020-11-03 05:05:58'),
(28, '9628', NULL, 'Amzad', '4', '4', 'Amzad', '2020-11-07', '00:35', 'Hospital', 'Home', NULL, '2020-11-07 00:35:23', '2020-11-07 00:35:23'),
(29, '7231', NULL, 'Amzad', '2', '2', 'Amzad', '2020-11-07', '12:44', 'Home', 'Home', NULL, '2020-11-07 00:44:53', '2020-11-07 00:44:53'),
(30, '1123', NULL, 'Amzad', '2', '2', 'Amzad', '2020-11-07', '12:46', 'Home', 'Home', NULL, '2020-11-07 00:46:52', '2020-11-07 00:46:52'),
(31, '620', '5', 'Amzad', '3', '2', 'Amzad', '2020-11-05', '00:58', 'Hospital', 'Hospital', NULL, '2020-11-07 00:59:03', '2020-11-07 00:59:03'),
(32, '6939', NULL, 'Amzad', '3', '2', 'Amzad', '2020-11-07', '16:21', 'Hospital', 'Home', NULL, '2020-11-07 04:21:56', '2020-11-07 04:21:56'),
(33, '4773', '5', 'Amzad', '3', '2', 'Amzad', '2020-11-07', '16:25', 'Online', 'Home', NULL, '2020-11-07 04:25:43', '2020-11-07 04:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `report` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(2558) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `free` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `category`, `name`, `price`, `duration`, `report`, `appointment`, `details`, `image`, `free`, `created_at`, `updated_at`) VALUES
(2, '2', 'All Type Blood Test', '4000', '2', 'Home And Online', '01318712782', 'If you’re a CSS aspirant and passed the written exam, then you’re ready to take other tests which are aforementioned by the authorities of CSS. After passing the written exam, the candidates are called for a medical test, psychological test followed by viva voce. Each of the exams has been explained in detail', 'public/image/5f98000db3e37Medical-Test-Doctor-CSS.jpg', NULL, '2020-10-27 05:10:05', '2020-10-27 05:10:05'),
(3, '2', 'Test Of Blood', '3000', '3', 'Home And Online', '01318712782', 'If you’re a CSS aspirant and passed the written exam, then you’re ready to take other tests which are aforementioned by the authorities of CSS. After passing the written exam, the candidates are called for a medical test, psychological test followed by viva voce. Each of the exams has been explained in detail', 'public/image/5f980055ee805image1.jpg', NULL, '2020-10-27 05:11:17', '2020-10-27 05:11:17'),
(4, '3', 'Haematology Test', '2300', '1', 'Home And Online', '01318712782', 'return redirect()->back()->with(\'update\',\'add\');\r\n        return redirect()->back()->with(\'update\',\'add\');\r\n        return redirect()->back()->with(\'update\',\'add\');', 'public/image/5f98062e26671Medical-Anatomy-Blood-Cells-Health-Red-Medicine-1813410.jpg', NULL, '2020-10-27 05:36:14', '2020-11-03 03:20:39'),
(5, '1', 'Covid-19 Test', '5000', '3', 'Home And Online', '01318712782', 'Healthcare is the first Dhaka based speciality lab to make advanced testing service available and affordable in Bangladesh. Here, a group of experienced pathologists, PhD scientists & clinicians work together to ensure quality report with proper clinical relevance. Until we started, lots of lab investigations were being outsourced to foreign labs causing communication gap or delay in service.', 'public/image/5f9a61778ae99C14AD6EB-9E04-45D6-9E95763D4D4DC5DD.jpg', NULL, '2020-10-29 00:30:15', '2020-10-29 00:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `test_categories`
--

CREATE TABLE `test_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `test_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_categories`
--

INSERT INTO `test_categories` (`id`, `test_category`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Covid-19 Test', 'public/image/5f900b0b96f4csam.jpg', '2020-10-21 04:18:51', '2020-10-21 04:18:51'),
(2, 'Blood Test', 'public/image/5f900b1a770efanimated-house-128517-8268779.png', '2020-10-21 04:19:06', '2020-10-21 04:19:06'),
(3, 'Haematology', 'public/image/5f97e1ee090b9Medical-Anatomy-Blood-Cells-Health-Red-Medicine-1813410.jpg', '2020-10-27 03:01:34', '2020-10-27 03:01:34'),
(4, 'Micronutrients & Eleements', 'public/image/5f97e2731d6c8C14AD6EB-9E04-45D6-9E95763D4D4DC5DD.jpg', '2020-10-27 03:03:47', '2020-10-27 03:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Sayeed', 'kitesfashionnebl@gmail.com', NULL, '$2y$10$JeegLLL6dPBj.D.ydP08LeWGuA8vuZlSLwdVb6X/uwlQpMlJmrzU6', '', '', NULL, NULL, 'profile-photos/UXkQEw1PtCYzRd5FQOg9JYFhfzYKhWXvgLGA9rmn.png', '2020-09-26 00:34:59', '2020-09-26 04:07:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinments`
--
ALTER TABLE `appoinments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_appoinments`
--
ALTER TABLE `doctor_appoinments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testappoinments`
--
ALTER TABLE `testappoinments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_categories`
--
ALTER TABLE `test_categories`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `appoinments`
--
ALTER TABLE `appoinments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctor_appoinments`
--
ALTER TABLE `doctor_appoinments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testappoinments`
--
ALTER TABLE `testappoinments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `test_categories`
--
ALTER TABLE `test_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
