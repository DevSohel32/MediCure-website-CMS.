-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2026 at 03:19 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicure`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `biography` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `biography`, `photo`, `password`, `token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'admin@gmail.com', 'An experienced business strategist passionate about helping companies grow through smart planning and innovation. Focused on practical solutions, data-driven insights, and strategies that deliver real, measurable results.', 'admin_1761447760.jpg', '$2y$12$zmOPg93IS5..NdhYAExppO4GQd3An3fM4kYBrvxwwRQq/1NTluKNy', '', '2025-04-18 07:07:42', '2025-10-27 20:44:45');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('consultine_cache_captcha_145b53fe4640dd9ede9830329439e3ef', 'a:4:{i:0;s:1:\"r\";i:1;s:1:\"t\";i:2;s:1:\"y\";i:3;s:1:\"y\";}', 1761926774),
('consultine_cache_captcha_2ffb2c840149c06179eadbd77745fc19', 'a:4:{i:0;s:1:\"p\";i:1;s:1:\"4\";i:2;s:1:\"y\";i:3;s:1:\"f\";}', 1761919653),
('consultine_cache_captcha_39f35ea8416ec7ddf819627d6219a72e', 'a:4:{i:0;s:1:\"j\";i:1;s:1:\"m\";i:2;s:1:\"x\";i:3;s:1:\"f\";}', 1761914368),
('consultine_cache_captcha_5cef934328096c48ad0425353ec66997', 'a:4:{i:0;s:1:\"r\";i:1;s:1:\"2\";i:2;s:1:\"6\";i:3;s:1:\"c\";}', 1761919648),
('consultine_cache_captcha_97cfdd7b50309e01b09f2ba32b82eeb5', 'a:4:{i:0;s:1:\"r\";i:1;s:1:\"h\";i:2;s:1:\"n\";i:3;s:1:\"c\";}', 1761919130),
('consultine_cache_captcha_9ce7b60b1ba68af4c482de617109ae75', 'a:4:{i:0;s:1:\"h\";i:1;s:1:\"b\";i:2;s:1:\"g\";i:3;s:1:\"p\";}', 1761919737),
('consultine_cache_captcha_cafa9e6d5fecb5ed694c5ec91ddfc607', 'a:4:{i:0;s:1:\"d\";i:1;s:1:\"g\";i:2;s:1:\"y\";i:3;s:1:\"c\";}', 1761919573),
('demo_cache_captcha_0839d9bcb0b0faeafc96845f9e1c4d71', 'a:4:{i:0;s:1:\"8\";i:1;s:1:\"3\";i:2;s:1:\"9\";i:3;s:1:\"u\";}', 1767458410),
('demo_cache_captcha_100b124c9b872c1a76b6afa71efb5586', 'a:4:{i:0;s:1:\"n\";i:1;s:1:\"u\";i:2;s:1:\"z\";i:3;s:1:\"d\";}', 1767460830),
('demo_cache_captcha_19c22a2f81db3249e0eb4a53684e653f', 'a:4:{i:0;s:1:\"n\";i:1;s:1:\"7\";i:2;s:1:\"q\";i:3;s:1:\"3\";}', 1767454219),
('demo_cache_captcha_282e32d9a97897d0ed722b5e2abb9692', 'a:4:{i:0;s:1:\"b\";i:1;s:1:\"q\";i:2;s:1:\"t\";i:3;s:1:\"7\";}', 1767469579),
('demo_cache_captcha_3ffcf171c7059f90667ebdfcbf7534d7', 'a:4:{i:0;s:1:\"7\";i:1;s:1:\"h\";i:2;s:1:\"y\";i:3;s:1:\"n\";}', 1767459559),
('demo_cache_captcha_4b4ca1f54ba10434f0383d70836ccaf3', 'a:4:{i:0;s:1:\"b\";i:1;s:1:\"x\";i:2;s:1:\"j\";i:3;s:1:\"c\";}', 1767454257),
('demo_cache_captcha_4b9444190324bed750d098c09c9e3472', 'a:4:{i:0;s:1:\"y\";i:1;s:1:\"y\";i:2;s:1:\"y\";i:3;s:1:\"9\";}', 1767460810),
('demo_cache_captcha_54c001be344edd5e49bdad2391cf6d44', 'a:4:{i:0;s:1:\"p\";i:1;s:1:\"q\";i:2;s:1:\"u\";i:3;s:1:\"n\";}', 1767453596),
('demo_cache_captcha_562066d568735fbd3f2fe6cfbe7d7ef8', 'a:4:{i:0;s:1:\"g\";i:1;s:1:\"p\";i:2;s:1:\"2\";i:3;s:1:\"8\";}', 1767469586),
('demo_cache_captcha_5f5d1f77f90c9174e691816e27b64771', 'a:4:{i:0;s:1:\"3\";i:1;s:1:\"q\";i:2;s:1:\"7\";i:3;s:1:\"c\";}', 1767469738),
('demo_cache_captcha_6aa1c9a6dbc289379f7413f721fe7595', 'a:4:{i:0;s:1:\"p\";i:1;s:1:\"h\";i:2;s:1:\"z\";i:3;s:1:\"u\";}', 1767461869),
('demo_cache_captcha_94387d23f85cae5d4d872a2cc505b520', 'a:4:{i:0;s:1:\"q\";i:1;s:1:\"a\";i:2;s:1:\"a\";i:3;s:1:\"r\";}', 1767454708),
('demo_cache_captcha_9688d8555ae5d8400b4ddc047c28f935', 'a:4:{i:0;s:1:\"3\";i:1;s:1:\"c\";i:2;s:1:\"7\";i:3;s:1:\"x\";}', 1767461314),
('demo_cache_captcha_99bbf8520f3f0672ea47227e33cc043e', 'a:4:{i:0;s:1:\"g\";i:1;s:1:\"2\";i:2;s:1:\"f\";i:3;s:1:\"p\";}', 1767458177),
('demo_cache_captcha_9df6d0f71c0176fc930dd82130e80125', 'a:4:{i:0;s:1:\"7\";i:1;s:1:\"a\";i:2;s:1:\"6\";i:3;s:1:\"z\";}', 1767459566),
('demo_cache_captcha_a2b6dab1f21849ffade3423af0e8b485', 'a:4:{i:0;s:1:\"f\";i:1;s:1:\"z\";i:2;s:1:\"r\";i:3;s:1:\"t\";}', 1767456743),
('demo_cache_captcha_a7e1102cbecb4cc4ce6a92e9776699ff', 'a:4:{i:0;s:1:\"f\";i:1;s:1:\"a\";i:2;s:1:\"r\";i:3;s:1:\"3\";}', 1767454193),
('demo_cache_captcha_ac07e989a931844cae58cb0a7dbcbca7', 'a:4:{i:0;s:1:\"j\";i:1;s:1:\"u\";i:2;s:1:\"a\";i:3;s:1:\"u\";}', 1767454263),
('demo_cache_captcha_b0fde36dd5a4cd83d7acf07c4ae552ff', 'a:4:{i:0;s:1:\"g\";i:1;s:1:\"b\";i:2;s:1:\"8\";i:3;s:1:\"a\";}', 1767470256),
('demo_cache_captcha_be3cefc94f58b6e243edf2d8a36d64f3', 'a:4:{i:0;s:1:\"d\";i:1;s:1:\"b\";i:2;s:1:\"u\";i:3;s:1:\"e\";}', 1767458188),
('demo_cache_captcha_cfc89298c059c208fc4c06b8b152a4cb', 'a:4:{i:0;s:1:\"u\";i:1;s:1:\"r\";i:2;s:1:\"7\";i:3;s:1:\"e\";}', 1767469640),
('demo_cache_captcha_df988897f394682586e51bb7ff5392e9', 'a:4:{i:0;s:1:\"r\";i:1;s:1:\"n\";i:2;s:1:\"z\";i:3;s:1:\"h\";}', 1767458383),
('demo_cache_captcha_e9653483fb62c0d457e8da6271133490', 'a:4:{i:0;s:1:\"q\";i:1;s:1:\"h\";i:2;s:1:\"n\";i:3;s:1:\"r\";}', 1767460777),
('demo_cache_captcha_ebf310ac4ec84bb0d43a26ae5ab4a7b6', 'a:4:{i:0;s:1:\"2\";i:1;s:1:\"a\";i:2;s:1:\"e\";i:3;s:1:\"u\";}', 1767460823),
('demo_cache_captcha_f060fcdbb20897604bf34b7d20668dee', 'a:4:{i:0;s:1:\"c\";i:1;s:1:\"c\";i:2;s:1:\"z\";i:3;s:1:\"e\";}', 1767454238),
('demo_cache_captcha_f6c7877e7dd570b67d78987c7f9cf138', 'a:4:{i:0;s:1:\"c\";i:1;s:1:\"z\";i:2;s:1:\"e\";i:3;s:1:\"3\";}', 1767454891),
('demo_cache_captcha_fa59d925b6d9ae4822b7aee534e81558', 'a:4:{i:0;s:1:\"x\";i:1;s:1:\"p\";i:2;s:1:\"q\";i:3;s:1:\"a\";}', 1767457059);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` int NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(2, 7, 'Regina Ross', 'regina@mailinator.com', 'This is a nice post. I love it so much. Can you please provide me some samples like it. I want to publish it form my instagram.', 'Active', '2025-10-29 22:38:25', '2025-10-29 22:59:28'),
(3, 7, 'Ashton Pope', 'ashton@mailinator.com', 'I love this post for my parents. Thank you.', 'Active', '2025-10-29 23:00:36', '2025-10-29 23:03:14');

-- --------------------------------------------------------

--
-- Table structure for table `counter_items`
--

CREATE TABLE `counter_items` (
  `id` bigint UNSIGNED NOT NULL,
  `item1_number` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `item1_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `item1_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `item2_number` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `item2_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `item2_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `item3_number` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `item3_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `item3_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counter_items`
--

INSERT INTO `counter_items` (`id`, `item1_number`, `item1_title`, `item1_content`, `item2_number`, `item2_title`, `item2_content`, `item3_number`, `item3_title`, `item3_content`, `created_at`, `updated_at`) VALUES
(1, '16', 'Years Of Experience', 'Great long term experience becomes Extensive clinical expertise medicine, clinical  more weight and trust.', '400', 'Department Achievements', 'Over the years, we have completed several top-quality medical projects, earning client satisfaction.', '145', 'Dedicated Physicians', 'Our Doctor consists of highly skilled professionals who have been with overcoming medical.', NULL, '2026-01-31 23:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `department_date` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `client` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `location` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `website` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `quote_person` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `quote_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `seo_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `photo`, `title`, `slug`, `short_description`, `description`, `department_date`, `client`, `location`, `website`, `phone`, `quote_person`, `quote_text`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'department_1767555133.jpg', 'Cardiology', 'cardiology', 'Our clinic specializes in heart and cardiovascular health, providing comprehensive care for patients of all ages. We focus on the prevention, diagnosis, and treatment of heart-related.', '<p data-start=\"101\" data-end=\"534\">Our clinic specializes in heart and cardiovascular health, providing comprehensive care for patients of all ages. We focus on the prevention, diagnosis, and treatment of heart-related conditions, ensuring that every patient receives personalized attention tailored to their unique cardiovascular needs. From routine check-ups to advanced cardiac care, our doctor is dedicated to promoting long-term heart wellness.</p>\r\n<p data-start=\"101\" data-end=\"534\">We offer a wide range of services, including diagnostic tests such as ECG, echocardiograms, stress tests, and advanced imaging techniques to detect and monitor heart conditions. Our experienced cardiologists use the latest medical technologies and evidence-based practices to accurately assess cardiovascular health and develop effective treatment plans.</p>\r\n<p data-start=\"913\" data-end=\"1281\">Beyond treatment, we emphasize education and lifestyle management as key components of heart health. Patients receive guidance on diet, exercise, and stress management to reduce risk factors and improve overall cardiovascular function. Our preventive approach helps patients maintain optimal heart health and avoid complications before they arise.</p>', '2026-01-05', 'John Doe Clinic', 'Berlin, Germany', 'https://www.silverline101.com', '122-222-8888', 'Jonathan Wells', '“HEART HEALTH IS LIFE”', 'Corporate Renewal Plan', 'Corporate Renewal Plan', '2025-10-19 21:41:15', '2026-01-08 02:46:47'),
(2, 'department_1767555204.jpg', 'Neurology', 'neurology', 'Diagnosis is a critical part of a neurologist’s practice. Using a combination of patient history, physical examinations, and advanced diagnostic tools like MRI, CT scans, EEG tests.', '<p data-start=\"115\" data-end=\"601\">A neurologist is a medical specialist dedicated to the study, diagnosis, and treatment of disorders affecting the brain, spinal cord, and nervous system. These professionals play a crucial role in identifying complex neurological conditions that can significantly impact a person&rsquo;s quality of life. Their work involves careful evaluation of symptoms such as headaches, seizures, memory problems, and movement difficulties, which may indicate underlying brain or nervous system issues.</p>\r\n<p data-start=\"603\" data-end=\"1042\">Diagnosis is a critical part of a neurologist&rsquo;s practice. Using a combination of patient history, physical examinations, and advanced diagnostic tools like MRI, CT scans, EEG, and blood tests, neurologists can pinpoint the root causes of neurological symptoms. This process requires precision and expertise, as many brain disorders present with overlapping or subtle signs that can easily be misinterpreted without specialized knowledge.</p>\r\n<p>&nbsp;</p>\r\n<p data-start=\"1044\" data-end=\"1535\">Once a diagnosis is made, treatment plans are carefully tailored to each patient&rsquo;s specific condition and needs. Treatment may involve medication to manage symptoms, surgical interventions for certain brain or spinal conditions, and rehabilitation therapies such as physical, occupational, or speech therapy. Neurologists often work in collaboration with other healthcare professionals, including neurosurgeons, psychologists, and rehabilitation specialists, to provide comprehensive care.</p>', '2026-01-05', 'BrainCare Ltd', 'Kuala Lumpur, Malaysia', 'https://www.novatech101.com', '122-222-8844', 'Emily Sanchez', '“THINK CLEAR, LIVE STRONG\"', 'Neurology', 'Neurology', '2025-10-19 21:44:05', '2026-01-08 02:47:21'),
(3, 'department_1767613218.png', 'Pediatrics', 'pediatrics', 'As children grow, their physical, emotional, and cognitive needs evolve. Comprehensive pediatric care addresses not only common illnesses but also developmental milestones, nutrition.', '<p data-start=\"111\" data-end=\"549\">Comprehensive care for infants, children, and teens ensures that every stage of a child&rsquo;s growth is supported with expert medical guidance. From the earliest days of life, pediatric care focuses on preventive measures, routine checkups, and vaccinations to safeguard health and promote optimal development. Early identification of potential health issues allows for timely interventions, giving children the best possible start in life.</p>\r\n<p data-start=\"551\" data-end=\"1005\">As children grow, their physical, emotional, and cognitive needs evolve. Comprehensive pediatric care addresses not only common illnesses but also developmental milestones, nutrition, and behavioral guidance. Regular screenings and consultations with specialists help monitor growth patterns and ensure that children meet key health benchmarks. Families receive personalized advice and support to foster healthy habits and prevent future complications.</p>\r\n<p>&nbsp;</p>\r\n<p data-start=\"1007\" data-end=\"1457\">For teens, comprehensive care takes on added importance as they navigate the challenges of adolescence. Pediatric care for this age group emphasizes mental health, sexual and reproductive health, and risk prevention, including guidance on nutrition, exercise, and safe lifestyle choices. Open communication with healthcare providers ensures that teenagers feel supported and informed, helping them make responsible decisions about their well-being.</p>', '2026-01-05', 'KidsFirst', 'New York, USA', 'https://www.crestpoint101.com', '122-222-8111', 'Ethan Roy', '“LITTLE SMILES, BIG CARE.”', 'Pediatrics', 'Pediatrics', '2025-10-19 21:44:58', '2026-01-08 02:45:58'),
(4, 'department_1767613453.png', 'Orthopedics', 'orthopedics', 'Specializing in musculoskeletal care, this service focuses on diagnosing, managing, and treating a wide range of conditions affecting the muscles, bones, joints, and connective.', '<p data-start=\"168\" data-end=\"557\">Specializing in musculoskeletal care, this service focuses on diagnosing, managing, and treating a wide range of conditions affecting the muscles, bones, joints, and connective tissues. From chronic pain and postural issues to acute injuries, patients receive personalized care aimed at restoring mobility, reducing discomfort, and improving overall physical function.</p>\r\n<p data-start=\"168\" data-end=\"557\">Whether it&rsquo;s a sports-related injury, work-related strain, or age-related degeneration, treatments are designed to address the root cause of the problem, not just the symptoms. Utilizing a combination of physical therapy, manual techniques, exercise programs, and modern rehabilitation methods, the approach ensures long-term recovery and prevents recurring issues.</p>\r\n<p data-start=\"947\" data-end=\"1326\">Patient-centered care is at the heart of every treatment plan. Each session is tailored to the individual&rsquo;s needs, taking into account their lifestyle, activity level, and personal goals. This holistic approach ensures that recovery is effective, safe, and sustainable, helping patients regain strength, flexibility, and confidence in their daily activities.</p>', '2026-01-05', 'OrthoPro', 'Sydney, Australia', 'https://www.bluewave101.com', '122-224-1277', 'Olivia Karim', '“STRONG BONES, STRONG BODY”', 'Orthopedics', 'Orthopedics', '2025-10-19 21:45:40', '2026-01-08 02:45:29'),
(5, 'department_1767613530.png', 'Dermatology', 'dermatology', 'Skin health is not just about appearance—it reflects lifestyle, diet, and overall wellness. Regular consultations with skincare professionals allow individuals of all ages to recommendations.', '<p data-start=\"108\" data-end=\"483\">Healthy, radiant skin is essential at every stage of life. From young adults dealing with acne and early signs of aging to older individuals seeking to maintain firmness and glow, proper skin care lays the foundation for confidence and overall well-being. Tailored treatments and preventive measures can address specific skin concerns while promoting long-term skin health.</p>\r\n<p data-start=\"485\" data-end=\"893\">Modern cosmetic treatments offer safe and effective solutions for a wide range of skin issues. Procedures such as chemical peels, microdermabrasion, laser therapy, and non-invasive anti-aging treatments help reduce blemishes, improve texture, and restore natural luminosity. These interventions are designed to complement daily skincare routines, ensuring results that are both noticeable and long-lasting.</p>\r\n<p>&nbsp;</p>\r\n<p data-start=\"895\" data-end=\"1324\">Skin health is not just about appearance&mdash;it reflects lifestyle, diet, and overall wellness. Regular consultations with skincare professionals allow individuals of all ages to receive personalized recommendations, from hydrating therapies for dry skin to targeted treatments for hyperpigmentation or fine lines. Combining expert guidance with consistent at-home care can significantly enhance the skin&rsquo;s resilience and vitality.</p>', '2026-01-05', 'SkinClinic', 'Toronto, Canada', 'https://www.vertex101.com', '343-232-1112', 'Lucas Bennett', '“HEALTHY SKIN, HAPPY LIFE”', 'Dermatology', 'Dermatology', '2025-10-19 21:46:36', '2026-01-08 02:44:53'),
(6, 'department_1767613773.png', 'Radiology', 'radiology', 'Our medical imaging department offers a comprehensive range of diagnostic services, including X-rays, CT scans, MRI, and advanced imaging tests. Equipped with state-of-the-art technology.', '<p data-start=\"145\" data-end=\"586\">Our medical imaging department offers a comprehensive range of diagnostic services, including X-rays, CT scans, MRI, and advanced imaging tests. Equipped with state-of-the-art technology, we ensure accurate and timely imaging to support the diagnosis and treatment of a wide variety of medical conditions. Our doctor of skilled radiologists and technicians are dedicated to providing high-quality care with precision and attention to detail.</p>\r\n<p data-start=\"588\" data-end=\"931\">X-ray imaging is one of the most commonly used diagnostic tools in our facility. It allows for a quick and non-invasive assessment of bones, joints, and certain soft tissues. Whether it&rsquo;s for detecting fractures, monitoring healing, or screening for specific conditions, our X-ray services are designed to deliver clear and reliable results.</p>\r\n<p>&nbsp;</p>\r\n<p data-start=\"933\" data-end=\"1313\">CT (Computed Tomography) scans provide detailed cross-sectional images of the body, enabling doctors to see internal organs, blood vessels, and tissues with remarkable clarity. Our advanced CT technology ensures minimal radiation exposure while producing highly detailed images, aiding in the accurate diagnosis of conditions ranging from injuries to complex internal disorders.</p>', 'January 23, 2025', 'MedScan Ltd', 'London, United Kingdom', 'https://www.summit101.com', '122-342-1255', 'Daniel Crawford', '“SEE CLEARLY, DIAGNOSE ACCURATELY”', 'Radiology', 'Radiology', '2025-10-19 21:47:11', '2026-01-05 05:49:33'),
(7, 'department_1767586074.jpg', 'Psychiatry', 'psychiatry', 'Our counseling services are tailored to meet the unique needs of each client. We focus on helping individuals explore their thoughts and emotions, identify patterns  strategies.', '<p data-start=\"121\" data-end=\"600\">Our center is dedicated to providing comprehensive mental health care designed to support individuals through life&rsquo;s challenges. We understand that mental well-being is just as important as physical health, and we are committed to creating a safe, non-judgmental environment where every individual feels heard and understood. Whether you are facing stress, anxiety, depression, or other emotional struggles, our doctor is here to guide you toward a healthier, more balanced life.</p>\r\n<p data-start=\"602\" data-end=\"989\">Our counseling services are tailored to meet the unique needs of each client. We focus on helping individuals explore their thoughts and emotions, identify patterns, and develop effective coping strategies. Through one-on-one sessions or group counseling, clients gain insights and practical tools that empower them to overcome difficulties and improve their overall mental resilience.</p>\r\n<p>&nbsp;</p>\r\n<p data-start=\"991\" data-end=\"1431\">Therapy at our center is grounded in evidence-based approaches delivered by trained professionals. From cognitive-behavioral therapy (CBT) to mindfulness-based techniques, we utilize proven methods to help clients address the root causes of their challenges. Our therapists work collaboratively with clients to set achievable goals, track progress, and foster personal growth, ensuring that every session is meaningful and transformative.</p>', 'January 23, 2025', 'Atlas Trading Group', 'Dubai, UAE', 'https://www.atlas101.com', '122-342-5535', 'Ariana Mendez', '“MIND MATTERS, HEAL WITH CARE”', 'Psychiatry', 'Psychiatry', '2025-10-19 21:47:57', '2026-01-08 05:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `designation` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `biography` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `facebook` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `twitter` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `linkedin` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `instagram` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `seo_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `photo`, `name`, `slug`, `designation`, `biography`, `email`, `phone`, `facebook`, `twitter`, `linkedin`, `instagram`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'doctor_1781489618.png', 'Dr. John Smith', 'dr-john-smith', 'Chief Medical Officer', 'Dr. John Smith has over 20 years of experience in healthcare management. He specializes in developing medical protocols and ensuring patient safety. His leadership has improved hospital operations significantly.\r\n\r\nHe earned his MD from Harvard Medical School and completed multiple fellowships in internal medicine. Dr. Smith is passionate about patient-centered care and advancing medical research. He frequently speaks at international conferences. He combines clinical expertise with administrative excellence. His vision focuses on improving overall hospital performance.', 'johnsmith32@gmail.com', '111-222-3333', '#', '#', '#', '#', 'Dr. John Smith', 'Dr. John Smith', '2025-10-26 21:53:20', '2026-06-14 20:13:38'),
(2, 'doctor_1781489799.png', 'Dr. Sarah Ahmed', 'dr-sarah-ahmed', 'Senior Consultant', 'Dr. Sarah Ahmed is a highly experienced cardiologist with over 15 years in patient care. She specializes in treating complex heart conditions and guiding recovery plans. Her dedication ensures the highest quality of treatment for every patient.\r\n\r\nShe completed her residency at Johns Hopkins and a fellowship in interventional cardiology. Dr. Ahmed actively mentors young doctors and participates in clinical research. She emphasizes precision and compassion in all her work. Her approach integrates the latest medical advancements. She has authored several influential publications in cardiology.', 'sarah.ahmed@gmail.com', '111-222-4444', '#', '#', '#', '#', 'Dr. Sarah Ahmed', 'Dr. Sarah Ahmed', '2025-10-27 00:56:47', '2026-06-14 20:16:39'),
(3, 'doctor_1781489711.png', 'Dr. Michael Lee', 'dr-michael-lee', 'General Physician', 'Dr. Michael Lee has dedicated his career to providing comprehensive primary care. He focuses on preventive medicine and managing chronic conditions. His patients value his attentive and thoughtful approach.\r\n\r\nHe graduated from the University of California, San Francisco, and completed extensive clinical training. Dr. Lee emphasizes community health and patient education. He regularly updates his practice with evidence-based treatments. His philosophy centers on holistic care and well-being. He collaborates closely with specialists to ensure complete patient care.', 'michael.Lee@example.com', '111-222-5555', '#', '#', '#', '#', 'Dr. Michael Lee', 'Dr. Michael Lee', '2025-10-27 00:57:42', '2026-06-14 20:15:11'),
(4, 'doctor_1767674773.png', 'Dr. Emily Brown', 'dr-emily-brown', 'Health IT Manager', 'Dr. David Khan is a skilled surgeon with over 12 years of experience in advanced surgical procedures. He specializes in minimally invasive and complex surgeries. His careful approach ensures patient safety and successful outcomes.\r\n\r\nHe earned his MD from Stanford University and completed surgical fellowships in multiple specialties. Dr. Khan stays updated with the latest surgical techniques and technologies. He mentors young surgeons and supports clinical research initiatives. His focus is on precision, efficiency, and patient-centered care. He collaborates closely with medical doctors to optimize recovery and treatment plans.', 'davidKhan@email.com', '111-222-6666', '#', '#', '#', '#', 'Dr. Emily Brown', 'Dr. Emily Brown', '2025-10-27 04:29:34', '2026-01-05 22:46:13'),
(5, 'doctor_1767605078.png', 'Alex Martinez', 'michael-king', 'Hospital Administrator', 'Alex Martinez – Hospital Administrator\r\nAlex Martinez oversees hospital operations with a focus on efficiency and patient satisfaction. He manages multiple departments to ensure smooth daily functioning. His leadership strengthens doctorwork and service quality across the facility.\r\n\r\nHe holds an MBA in Healthcare Administration and has led several major hospital projects. Alex prioritizes staff development and effective patient services. He implements strategic policies to support long-term growth. His work ensures compliance with medical standards. He fosters collaboration among all hospital doctors to improve outcomes', 'alex.martinez@gmail.com', '111-222-7777', '#', '#', '#', '#', 'Alex Martinez', 'Alex Martinez', '2025-10-27 04:30:50', '2026-01-05 03:24:38'),
(6, 'doctor_1767675064.png', 'Daniel Thomas', 'daniel-thomas', 'Operations Manager', 'Daniel Thomas manages daily hospital operations to ensure smooth and efficient workflows. He coordinates between departments and supports both staff and patients. His organized approach improves overall service delivery and performance.\r\n\r\nHe earned his degree in Health Services Management and has extensive experience in healthcare operations. Daniel focuses on workflow optimization and operational efficiency. He ensures compliance with safety and quality standards. He works closely with hospital doctors to enhance patient experiences. His dedication strengthens both staff performance and organizational success.', 'danielthomas@gmail.com', '111-222-8888', '#', '#', '#', '#', 'Daniel Thomas', 'Daniel Thomas', '2025-10-27 04:31:46', '2026-01-05 22:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `question` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'How do I book an appointment?', 'You can book an appointment easily through our website. Visit the appointment section and choose your doctor. Select a suitable date and available time slot. Fill in your basic contact and medical details. Submit the request to confirm your booking. You will receive a confirmation by phone or email.', '2025-10-19 04:05:33', '2026-01-03 12:48:35'),
(3, 'Do you accept emergency patients?', 'Yes, we accept emergency patients during service hours. Our medical staff is trained for urgent care situations. Immediate attention is given based on medical priority. Emergency services are handled by experienced professionals. Advanced equipment supports rapid diagnosis and treatment.', '2025-10-19 04:06:20', '2026-01-03 12:48:42'),
(4, 'Are your doctors qualified and licensed?', 'All our doctors are fully qualified and licensed. They hold recognized medical degrees and certifications. Each specialist has extensive clinical experience. \r\nDoctors regularly attend training and medical workshops. Continuous education ensures updated medical practices.', '2025-10-19 04:06:31', '2026-01-03 12:46:52'),
(5, 'Do you accept health insurance?', 'We accept most major health insurance providers. Insurance coverage may vary depending on your plan. Our staff helps verify insurance details quickly. \r\nRequired documents should be provided during registration.Billing support is available for insurance-related queries.', '2025-10-19 04:06:41', '2026-01-03 12:47:00'),
(6, 'How can I access my medical reports?', 'Medical reports can be collected from our reception. Digital reports may be available through our system. Patients receive reports within the promised. \r\nIdentification is required when collecting reports. Authorized family members can collect reports if needed.', '2025-10-19 04:06:51', '2026-01-03 12:51:01'),
(7, 'What safety measures do you follow?', 'We follow strict hygiene and sanitation protocols. All medical areas are cleaned and disinfected regularly. Staff use protective equipment when necessary. \r\nPatient safety guidelines are followed at all times. Medical equipment is sterilized after each use.', '2025-10-19 04:07:01', '2026-01-03 12:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint UNSIGNED NOT NULL,
  `icon_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `icon_code`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, '<svg width=\"80\" height=\"80\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#3A9480\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\">\r\n  <path d=\"M19 14c1.49 0 2.5-1.01 2.5-2.5S20.49 9 19 9s-2.5 1.01-2.5 2.5c0 .62.2 1.19.55 1.65L14 16l-3-3-4 4\"></path>\r\n  <rect x=\"3\" y=\"4\" width=\"18\" height=\"16\" rx=\"2\"></rect>\r\n  <line x1=\"7\" y1=\"10\" x2=\"11\" y2=\"10\"></line>\r\n  <line x1=\"9\" y1=\"8\" x2=\"9\" y2=\"12\"></line>\r\n</svg>', 'Expertise & Medical', 'Years of clinical experience and a doctor of board-certified specialists ensure of that every patient receives  result.', '2025-10-27 06:20:52', '2026-01-08 03:45:11'),
(2, '<svg width=\"80\" height=\"80\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#3A9480\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\">\r\n  <path d=\"M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2\"></path>\r\n  <circle cx=\"9\" cy=\"7\" r=\"4\"></circle>\r\n  <path d=\"M22 21v-2a4 4 0 0 0-3-3.87\"></path>\r\n  <path d=\"M16 3.13a4 4 0 0 1 0 7.75\"></path>\r\n</svg>', 'Collaborative Care', 'Our multidisciplinary doctor of doctors, nurses, and specialists diverse medi-cal expertise to provide seamless care.', '2025-10-27 06:21:46', '2026-01-08 03:51:33'),
(3, '<svg width=\"80\" height=\"80\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#3A9480\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\">\r\n  <path d=\"M20.42 4.58a5.4 5.4 0 0 0-7.63 0L12 5.38l-.79-.8a5.4 5.4 0 0 0-7.63 7.63L12 20.59l8.42-8.38a5.4 5.4 0 0 0 0-7.63z\"></path>\r\n  <path d=\"M12 13v.01\"></path>\r\n  <path d=\"M18 10h.01\"></path>\r\n  <path d=\"M6 10h.01\"></path>\r\n</svg>', 'Patient-Focused', 'We prioritize understanding every patient\'s unique health concerns and goals to deliver personalized treatment.', '2025-10-27 06:22:08', '2026-01-08 03:52:16'),
(4, '<svg width=\"80\" height=\"80\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#3A9480\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\">\r\n  <circle cx=\"12\" cy=\"12\" r=\"3\"></circle>\r\n  <path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"></path>\r\n</svg>', 'Innovative Healthcare', 'Creative thinking and analytical insight help us design forward-looking and strategies that keep of insight change.', '2025-10-27 06:22:24', '2026-01-08 03:43:58');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'Show', NULL, '2026-01-04 08:25:06'),
(2, 'About', 'Show', NULL, '2026-01-04 08:25:06'),
(3, 'Services', 'Show', NULL, '2026-01-04 08:25:06'),
(4, 'FAQ', 'Show', NULL, '2026-01-04 08:25:06'),
(5, 'Departments', 'Show', NULL, '2026-01-04 08:25:06'),
(6, 'Doctors', 'Show', NULL, '2026-01-04 08:25:06'),
(7, 'Pricing', 'Show', NULL, '2026-01-04 08:25:06'),
(8, 'Photo Gallery', 'Show', NULL, '2026-01-04 08:25:06'),
(9, 'Video Gallery', 'Show', NULL, '2026-01-04 08:25:06'),
(10, 'Blog', 'Show', NULL, '2026-01-04 08:25:06'),
(11, 'Contact', 'Show', NULL, '2026-01-04 08:25:06'),
(12, 'Appointment', 'Show', NULL, '2026-01-04 08:25:06'),
(13, 'Terms', 'Show', NULL, '2026-01-04 08:25:06'),
(14, 'Privacy', 'Show', NULL, '2026-01-04 08:25:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_04_18_114235_create_admins_table', 1),
(5, '2025_10_19_054554_create_testimonials_table', 1),
(6, '2025_10_19_095734_create_faqs_table', 1),
(7, '2025_10_19_101703_create_photos_table', 1),
(8, '2025_10_19_110424_create_videos_table', 1),
(9, '2025_10_19_112350_create_posts_table', 1),
(10, '2025_10_21_092343_create_subscribers_table', 1),
(11, '2025_10_23_005328_create_settings_table', 1),
(12, '2025_10_27_105244_create_services_table', 1),
(13, '2025_10_27_121019_create_features_table', 1),
(14, '2025_10_27_173834_create_sliders_table', 1),
(15, '2025_10_28_000848_create_post_categories_table', 1),
(16, '2025_10_28_043551_create_page_items_table', 1),
(17, '2025_10_29_064210_create_counter_items_table', 1),
(18, '2025_10_29_071545_create_packages_table', 1),
(19, '2025_10_29_084405_create_package_features_table', 1),
(20, '2025_10_30_041838_create_comments_table', 1),
(21, '2025_10_30_042013_create_replies_table', 1),
(22, '2025_10_31_153938_create_menus_table', 1),
(23, '2026_01_04_103534_create_doctors_table', 1),
(24, '2026_01_04_121625_create_departments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `price` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `billing_cycle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `button_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `photo`, `price`, `billing_cycle`, `name`, `description`, `button_text`, `created_at`, `updated_at`) VALUES
(1, 'package_1767546238.jpg', '49', 'One-time', 'Basic Health Check', 'A fundamental health assessment package including general consultation, vital signs check, and basic blood tests to ensure early detection of potential issues.', 'Book Now', '2025-10-29 01:46:21', '2026-01-04 11:03:58'),
(2, 'package_1767546365.jpg', '139', 'One-time', 'Women’s  Package', 'Designed for women’s health, this package includes gynecological checkup, hormone level testing, and preventive screenings for reproductive health.', 'Book Appointment', '2025-10-29 01:52:41', '2026-01-06 12:37:22'),
(3, 'package_1767545444.jpg', '279', 'One-time', 'Advanced Diagnostic', 'In-depth diagnostic services including blood panels, imaging, and specialist consultations for early detection and management of chronic conditions.', 'Schedule Now', '2025-10-29 01:53:16', '2026-01-04 11:06:46'),
(5, 'package_1767546662.jpg', '179', 'One-time', 'Senior Health Screening', 'Tailored for seniors, this package focuses on cardiovascular, bone, and metabolic health. Includes consultations and preventive screenings to maintain a healthy lifestyle.', 'Get Screened', '2026-01-04 11:11:02', '2026-01-04 11:11:02'),
(6, 'package_1767546913.jpg', '399', 'One-time', 'Premium Body Checkup', 'The most comprehensive package, including all diagnostic tests, imaging, and specialist consultations. Ideal for those seeking complete health assurance', 'Book Premium', '2026-01-04 11:15:13', '2026-01-06 12:36:49'),
(7, 'package_1767547533.jpg', '99', 'On-time', 'Pediatric Care Package', 'A specialized package for children that includes growth monitoring, vaccination review, and preventive screenings to ensure healthy development.', 'Book for Child', '2026-01-04 11:25:33', '2026-01-04 11:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `package_features`
--

CREATE TABLE `package_features` (
  `id` bigint UNSIGNED NOT NULL,
  `package_id` bigint UNSIGNED NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_available` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_features`
--

INSERT INTO `package_features` (`id`, `package_id`, `name`, `is_available`, `created_at`, `updated_at`) VALUES
(17, 1, 'General physical examination', 'Yes', '2026-01-04 10:36:29', '2026-01-04 10:36:29'),
(18, 1, 'Blood pressure & BMI check', 'Yes', '2026-01-04 10:36:42', '2026-01-04 10:36:42'),
(19, 1, 'Basic blood tests (CBC, glucose)', 'Yes', '2026-01-04 10:36:58', '2026-01-04 10:36:58'),
(20, 1, 'Doctor consultation', 'Yes', '2026-01-04 10:37:07', '2026-01-04 10:37:07'),
(21, 3, 'Full blood panel', 'Yes', '2026-01-04 10:38:58', '2026-01-04 10:38:58'),
(23, 3, 'Cholesterol & lipid profile', 'Yes', '2026-01-04 10:39:18', '2026-01-04 10:39:18'),
(25, 2, 'Gynecological examination', 'Yes', '2026-01-04 10:41:18', '2026-01-04 10:41:18'),
(26, 2, 'Hormone & thyroid tests', 'Yes', '2026-01-04 10:41:30', '2026-01-04 10:41:30'),
(27, 2, 'Pap smear & breast examination', 'Yes', '2026-01-04 10:41:39', '2026-01-04 10:41:39'),
(28, 2, 'Personalized health counseling', 'Yes', '2026-01-04 10:41:45', '2026-01-04 10:41:45'),
(29, 5, 'Heart & blood vessel check', 'Yes', '2026-01-04 11:11:27', '2026-01-04 11:11:27'),
(30, 5, 'Bone density scan', 'No', '2026-01-04 11:11:37', '2026-01-04 11:11:37'),
(31, 5, 'Diabetes & cholesterol screening', 'Yes', '2026-01-04 11:11:49', '2026-01-04 11:11:49'),
(32, 5, 'Doctor consultation & report', 'Yes', '2026-01-04 11:12:01', '2026-01-04 11:12:01'),
(33, 6, 'Complete blood & urine panels', 'Yes', '2026-01-04 11:15:41', '2026-01-04 11:15:41'),
(34, 6, 'ECG, X-ray, and ultrasound scans', 'Yes', '2026-01-04 11:15:50', '2026-01-04 11:15:50'),
(37, 6, 'Specialist consultations', 'No', '2026-01-04 11:16:57', '2026-01-04 11:16:57'),
(38, 6, 'Detailed health report', 'Yes', '2026-01-04 11:17:21', '2026-01-04 11:17:21'),
(40, 7, 'Vaccination status check', 'Yes', '2026-01-04 11:25:55', '2026-01-04 11:25:55'),
(41, 7, 'Basic blood & urine tests', 'Yes', '2026-01-04 11:26:02', '2026-01-04 11:26:02'),
(42, 7, 'Pediatrician consultation', 'Yes', '2026-01-04 11:26:24', '2026-01-04 11:26:24'),
(43, 3, 'Doctor consultation and health.', 'Yes', '2026-01-06 13:22:21', '2026-01-06 13:22:21'),
(44, 3, 'Urine and kidney function .', 'Yes', '2026-01-06 13:22:39', '2026-01-06 13:22:39'),
(45, 7, 'Growth & development', 'Yes', '2026-01-06 13:23:12', '2026-01-06 13:23:12');

-- --------------------------------------------------------

--
-- Table structure for table `page_items`
--

CREATE TABLE `page_items` (
  `id` bigint UNSIGNED NOT NULL,
  `home_about_subheading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_about_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_about_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_about_list_items` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_about_phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_about_photo1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_about_photo2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_about_button_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_about_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_feature_subheading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_feature_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_feature_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_video_subheading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_video_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_video_photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_video_youtube` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_video_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_doctor_subheading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_doctor_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_doctor_total` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_doctor_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_counter_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_blog_subheading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_blog_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_blog_total` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_blog_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_seo_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_page_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_about_subheading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_about_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_about_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_about_list_items` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_about_phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_about_photo1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_about_photo2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_about_button_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_about_button_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_about_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_doctor_subheading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_doctor_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_doctor_total` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_doctor_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_counter_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_seo_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `services_page_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `services_per_page` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `services_seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `services_seo_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `service_widget_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `service_widget_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `service_widget_button_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `departments_page_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `departments_per_page` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `departments_seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `departments_seo_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `department_widget_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `department_widget_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `department_widget_button_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `department_cta_subheading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `department_cta_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `department_cta_button_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `department_cta_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `doctors_page_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `doctors_per_page` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `doctors_seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `doctors_seo_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `faq_page_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `faq_seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `faq_seo_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `pricing_page_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `pricing_seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `pricing_seo_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `photo_gallery_page_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `photo_gallery_seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `photo_gallery_seo_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `video_gallery_page_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `video_gallery_seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `video_gallery_seo_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contact_page_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contact_form_subheading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contact_form_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contact_form_button_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contact_map_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contact_map_photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contact_map_phone_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contact_map_phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contact_map_email_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contact_map_email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contact_map_address_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contact_map_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contact_map_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contact_seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contact_seo_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `appointment_page_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `appointment_form_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `appointment_form_photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `appointment_form_button_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `appointment_seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `appointment_seo_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_page_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_per_page` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_seo_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_category_page_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_category_per_page` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_category_seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_category_seo_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_tag_page_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_tag_per_page` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_tag_seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_tag_seo_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_search_page_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_search_per_page` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_search_seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_search_seo_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_detail_tag_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_detail_share_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_detail_author_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_detail_comment_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_sidebar_search_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_sidebar_category_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_sidebar_recent_post_total` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_sidebar_recent_post_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_sidebar_tag_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `terms_page_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `terms_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `terms_seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `terms_seo_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `privacy_page_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `privacy_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `privacy_seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `privacy_seo_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_items`
--

INSERT INTO `page_items` (`id`, `home_about_subheading`, `home_about_heading`, `home_about_text`, `home_about_list_items`, `home_about_phone`, `home_about_photo1`, `home_about_photo2`, `home_about_button_text`, `home_about_status`, `home_feature_subheading`, `home_feature_heading`, `home_feature_status`, `home_video_subheading`, `home_video_heading`, `home_video_photo`, `home_video_youtube`, `home_video_status`, `home_doctor_subheading`, `home_doctor_heading`, `home_doctor_total`, `home_doctor_status`, `home_counter_status`, `home_blog_subheading`, `home_blog_heading`, `home_blog_total`, `home_blog_status`, `home_seo_title`, `home_seo_meta_description`, `about_page_title`, `about_about_subheading`, `about_about_heading`, `about_about_text`, `about_about_list_items`, `about_about_phone`, `about_about_photo1`, `about_about_photo2`, `about_about_button_text`, `about_about_button_link`, `about_about_status`, `about_doctor_subheading`, `about_doctor_heading`, `about_doctor_total`, `about_doctor_status`, `about_counter_status`, `about_seo_title`, `about_seo_meta_description`, `services_page_title`, `services_per_page`, `services_seo_title`, `services_seo_meta_description`, `service_widget_title`, `service_widget_text`, `service_widget_button_text`, `departments_page_title`, `departments_per_page`, `departments_seo_title`, `departments_seo_meta_description`, `department_widget_title`, `department_widget_text`, `department_widget_button_text`, `department_cta_subheading`, `department_cta_heading`, `department_cta_button_text`, `department_cta_status`, `doctors_page_title`, `doctors_per_page`, `doctors_seo_title`, `doctors_seo_meta_description`, `faq_page_title`, `faq_seo_title`, `faq_seo_meta_description`, `pricing_page_title`, `pricing_seo_title`, `pricing_seo_meta_description`, `photo_gallery_page_title`, `photo_gallery_seo_title`, `photo_gallery_seo_meta_description`, `video_gallery_page_title`, `video_gallery_seo_title`, `video_gallery_seo_meta_description`, `contact_page_title`, `contact_form_subheading`, `contact_form_heading`, `contact_form_button_text`, `contact_map_code`, `contact_map_photo`, `contact_map_phone_title`, `contact_map_phone`, `contact_map_email_title`, `contact_map_email`, `contact_map_address_title`, `contact_map_address`, `contact_map_status`, `contact_seo_title`, `contact_seo_meta_description`, `appointment_page_title`, `appointment_form_heading`, `appointment_form_photo`, `appointment_form_button_text`, `appointment_seo_title`, `appointment_seo_meta_description`, `blog_page_title`, `blog_per_page`, `blog_seo_title`, `blog_seo_meta_description`, `blog_category_page_title`, `blog_category_per_page`, `blog_category_seo_title`, `blog_category_seo_meta_description`, `blog_tag_page_title`, `blog_tag_per_page`, `blog_tag_seo_title`, `blog_tag_seo_meta_description`, `blog_search_page_title`, `blog_search_per_page`, `blog_search_seo_title`, `blog_search_seo_meta_description`, `blog_detail_tag_status`, `blog_detail_share_status`, `blog_detail_author_status`, `blog_detail_comment_status`, `blog_sidebar_search_status`, `blog_sidebar_category_status`, `blog_sidebar_recent_post_total`, `blog_sidebar_recent_post_status`, `blog_sidebar_tag_status`, `terms_page_title`, `terms_content`, `terms_seo_title`, `terms_seo_meta_description`, `privacy_page_title`, `privacy_content`, `privacy_seo_title`, `privacy_seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Compassionate Care, Professional Insights', 'We’re Trusted\r\nProfessional Medical \r\nMediCure', 'We\'re a trusted partner in healthcare, offering expert guidance and innovative solutions to hospitals, clinics, and healthcare organizations. With experienced professionals, we provide strategic insights that help medical institutions improve patient care and operational efficiency.', '<li>Stay flexible and responsive to evolving healthcare needs and patient demands.</li>\r\n<li>Empower healthcare doctors through training, knowledge sharing, and fostering a culture of continuous improvement.</li>', '+525-3756-1523', 'home_about_photo1_1781490375.png', 'home_about_photo2_1781490095.png', 'Appointment', 'Show', 'Why Choose Us', 'Why Should You Choose Our  MediCure Services', 'Show', 'OUR CARE PHILOSOPHY', 'Compassionate care for a healthier, more active life', 'home_video_photo_1781490553.png', '_uxwo6rDzkc', 'Show', 'Doctors', 'Our Dedicated People', '4', 'Show', 'Show', 'Recent Posts', 'Latest News & Updates', '3', 'Show', 'MediCure - MediCure, healthcare and healthcare website CMS.', 'MediCure - MediCure, healthcare and healthcare website CMS.', 'About Us', 'Compassionate Care, Professional Insights', 'We’re Trusted\r\nProfessional Medical \r\nMediCure', 'We\'re a trusted partner in healthcare, offering expert guidance and innovative solutions to hospitals, clinics, and healthcare organizations. With a team of experienced professionals, we deliver strategic insights that help medical institutions achieve excellence in patient care and operational efficiency.', '<li>Remain flexible and adaptive to swiftly respond to changing market dynamics and client needs.</li>\r\n<li>Empower clients through knowledge transfer, skill-building, and fostering a culture of self-sufficiency.</li>', '+525-3756-1523', 'about_about_photo1_1767677628.png', 'about_about_photo2_1781490095.png', 'Appointment', NULL, 'Show', 'Doctors', 'Our Dedicated People', '3', 'Show', 'Show', 'About Page', 'About Page', 'Services', '6', 'Services', 'Services', 'Have any Questions? \r\nCall us Today!', 'Bichir sand dab chimaera glowlight danio bombay duck.', 'Make Appointment', 'Departments', '6', 'Departments', 'Departments', 'Have any Questions? \r\nCall us Today!', 'Bichir sand dab chimaera glowlight danio bombay duck.', 'Make Appointment', 'About Amazing Company', 'Do You Have Similar Service \r\nRequirements?', 'Contact With Us', 'Show', 'Doctors', '6', 'Doctors', 'Doctors', 'FAQ (Frequently Asked Questions)', 'FAQ', 'FAQ', 'Pricing', 'Pricing', 'Pricing', 'Photo Gallery', 'Photo Gallery', 'Photo Gallery', 'Video Gallery', 'Video Gallery', 'Video Gallery', 'Contact', 'Get In Touch', 'Needs Help? Let’s Get in Touch', 'Send Message', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48409.69813174607!2d-74.05163325136718!3d40.68264649999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bae694479a3%3A0xb9949385da52e69e!2sBarclays%20Center!5e0!3m2!1sen!2sbd!4v1684309529719!5m2!1sen!2sbd\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'contact_map_photo_1767454125.jpg', 'Call Us 24/7', '+584 (25) 21453', 'Make a Quote', 'info@example.com', 'Service Station', '25 Hilton Street, Aus.', 'Show', 'Contact', 'Contact', 'Appointment', 'Make An Appointment', 'appointment_form_photo_1761706412.png', 'Make An Appointment', 'Appointment', 'Appointment', 'Blog', '6', 'Blog', 'Blog', 'Category:', '6', 'Category', 'Category', 'Tag:', '6', 'Tag', 'Tag', 'Search By:', '6', 'Search', 'Search', 'Show', 'Show', 'Show', 'Show', 'Show', 'Show', '3', 'Show', 'Show', 'Terms of Use', '<h2>Heading Item</h2>\r\n<p>Omnes virtute ceteros est at, sale equidem eos ne. Ei eam populo iisque maluisset, id docendi dissentias mel, an impetus antiopam deterruisset nam. Dicat argumentum nec te, eu debitis tincidunt neglegentur vix. An nec sensibus appellantur. Mei postea periculis no, nihil copiosae rationibus eu per. Vis timeam admodum ne. Mea ea vide suavitate. An invenire iracundia vim.</p>\r\n<h3>Heading Item</h3>\r\n<p>Duo ne labore tamquam. Nam aeterno lobortis dissentias eu, eu virtute definiebas deterruisset vix. Commune scribentur ne vis. Et novum cetero facilisi eos, eam at minim dictas definitiones, ius bonorum vocibus ceteros ex. Per ad zril percipit platonem, mea euripidis vituperatoribus cu, admodum consulatu an vix. Nec et eleifend intellegam. Quo paulo veritus id. Nec docendi disputationi ea, has tale eius feugait ei. Posse tamquam efficiantur ut eum.</p>\r\n<h4>Heading Item</h4>\r\n<p>Eum minim exerci tincidunt at. Et cum doming scaevola. Viris dicunt eum ut. Usu ad numquam pertinacia, vel ad labore diceret laboramus. Luptatum intellegat ex mea, et sed modus quaerendum dissentiet, sea virtute principes complectitur ad. Eum vidit putant ea, cum quis autem ea. Est equidem mnesarchum ullamcorper te, qui rebum decore vituperata no, et laudem populo quo. Nec ut forensibus instructior. Clita philosophia comprehensam in mea, invidunt interesset disputando vim cu. Sint dicunt habemus in eam. Nam et oblique aliquid eligendi, summo clita quidam no quo.</p>\r\n<h5>Heading Item</h5>\r\n<p>Ut elit accusata vix, ei libris possit alienum qui. Labores suavitate ea duo, at pro everti corpora. Ut mucius vidisse prodesset mea. Ut quaeque reprehendunt nec, everti discere pericula cum ut. Nec an mazim melius singulis, at cum facer option. Sale fabulas adipisci ei sit, vel in unum pericula accusamus. Vel nonumy laoreet lobortis in, stet necessitatibus ei eum. Te malis dolorum mnesarchum sed. Et dicam iriure interesset cum, cum impedit efficiendi eu.</p>\r\n<h6>Heading Item</h6>\r\n<p>In ius nostrud legendos, debitis facilisi oportere qui at. Te eripuit qualisque definitionem vis, oratio aeterno neglegentur id nam, iudico splendide te nam. Te melius sensibus vis. Ea mea veri evertitur deterruisset, quas prima adhuc cum cu. Esse nusquam dissentiet est ei, commune partiendo tincidunt ne est. Appetere necessitatibus an per, usu omittantur philosophia in. Pri id omnium contentiones, oblique eligendi et eos, idque laoreet in mei. Dicunt verterem mea et. Usu id iriure appareat omittantur. Te impetus nostrud eam.</p>', 'Terms of Use', 'Terms of Use', 'Privacy Policy', '<h2>Heading Item</h2>\r\n<p>Omnes virtute ceteros est at, sale equidem eos ne. Ei eam populo iisque maluisset, id docendi dissentias mel, an impetus antiopam deterruisset nam. Dicat argumentum nec te, eu debitis tincidunt neglegentur vix. An nec sensibus appellantur. Mei postea periculis no, nihil copiosae rationibus eu per. Vis timeam admodum ne. Mea ea vide suavitate. An invenire iracundia vim.</p>\r\n<h3>Heading Item</h3>\r\n<p>Duo ne labore tamquam. Nam aeterno lobortis dissentias eu, eu virtute definiebas deterruisset vix. Commune scribentur ne vis. Et novum cetero facilisi eos, eam at minim dictas definitiones, ius bonorum vocibus ceteros ex. Per ad zril percipit platonem, mea euripidis vituperatoribus cu, admodum consulatu an vix. Nec et eleifend intellegam. Quo paulo veritus id. Nec docendi disputationi ea, has tale eius feugait ei. Posse tamquam efficiantur ut eum.</p>\r\n<h4>Heading Item</h4>\r\n<p>Eum minim exerci tincidunt at. Et cum doming scaevola. Viris dicunt eum ut. Usu ad numquam pertinacia, vel ad labore diceret laboramus. Luptatum intellegat ex mea, et sed modus quaerendum dissentiet, sea virtute principes complectitur ad. Eum vidit putant ea, cum quis autem ea. Est equidem mnesarchum ullamcorper te, qui rebum decore vituperata no, et laudem populo quo. Nec ut forensibus instructior. Clita philosophia comprehensam in mea, invidunt interesset disputando vim cu. Sint dicunt habemus in eam. Nam et oblique aliquid eligendi, summo clita quidam no quo.</p>\r\n<h5>Heading Item</h5>\r\n<p>Ut elit accusata vix, ei libris possit alienum qui. Labores suavitate ea duo, at pro everti corpora. Ut mucius vidisse prodesset mea. Ut quaeque reprehendunt nec, everti discere pericula cum ut. Nec an mazim melius singulis, at cum facer option. Sale fabulas adipisci ei sit, vel in unum pericula accusamus. Vel nonumy laoreet lobortis in, stet necessitatibus ei eum. Te malis dolorum mnesarchum sed. Et dicam iriure interesset cum, cum impedit efficiendi eu.</p>\r\n<h6>Heading Item</h6>\r\n<p>In ius nostrud legendos, debitis facilisi oportere qui at. Te eripuit qualisque definitionem vis, oratio aeterno neglegentur id nam, iudico splendide te nam. Te melius sensibus vis. Ea mea veri evertitur deterruisset, quas prima adhuc cum cu. Esse nusquam dissentiet est ei, commune partiendo tincidunt ne est. Appetere necessitatibus an per, usu omittantur philosophia in. Pri id omnium contentiones, oblique eligendi et eos, idque laoreet in mei. Dicunt verterem mea et. Usu id iriure appareat omittantur. Te impetus nostrud eam.</p>', 'Privacy Policy', 'Privacy Policy', NULL, '2026-06-14 20:29:13');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `caption` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `photo`, `caption`, `created_at`, `updated_at`) VALUES
(1, 'photo_1767551317.jpg', 'Advanced diagnostic services for accurate blood testing.', '2025-10-30 19:46:01', '2026-01-04 14:01:47'),
(2, 'photo_1767551432.jpg', 'Compassionate pediatric care for your little ones.', '2025-10-30 19:46:08', '2026-01-04 14:02:00'),
(3, 'photo_1767551452.jpg', 'Personalized consultation with our experienced  doctor.', '2025-10-30 19:46:15', '2026-01-04 14:05:37'),
(4, 'photo_1767551463.jpg', 'Comprehensive heart health assessment and cardiology.', '2025-10-30 19:46:21', '2026-01-04 14:06:11'),
(5, 'photo_1767551482.jpg', 'High-precision medical research and  analysis.', '2025-10-30 19:46:27', '2026-01-04 14:06:31'),
(6, 'photo_1767609711.png', 'Routine health screenings to keep your vitals in check', '2025-10-30 19:46:33', '2026-01-05 04:41:51'),
(7, 'photo_1767551598.jpg', 'State-of-the-art diagnostic imaging and MRI technology.', '2025-10-30 19:46:39', '2026-01-04 14:03:10'),
(8, 'photo_1767551609.jpg', 'Compassionate and expert pediatric care for children.', '2025-10-30 19:46:45', '2026-01-04 14:07:35'),
(9, 'photo_1767587355.jpg', 'Precision diagnostic imaging with advanced MRI/CT.', '2025-10-30 19:46:50', '2026-01-04 22:29:15'),
(10, 'photo_1767587455.jpg', 'Prioritize your health with regular medical check-ups.', '2025-10-30 19:46:56', '2026-01-04 22:30:55'),
(11, 'photo_1767609809.png', 'Our dedicated medical professionals top-quality care.', '2025-10-30 19:47:01', '2026-01-05 04:43:29'),
(12, 'photo_1767551807.jpg', 'Safe and hygienic blood sample collection for testing.', '2025-10-30 19:47:08', '2026-01-04 14:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `post_category_id` bigint UNSIGNED DEFAULT NULL,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tags` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `seo_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_category_id`, `photo`, `title`, `slug`, `short_description`, `description`, `tags`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 7, 'post_1781491111.jpg', 'HIV-AIDS', 'hiv-adis', 'Adequate sleep is crucial for physical and mental wellbeing. It helps the body repair tissues, boost immunity, and maintain cognitive function. Poor sleep can increase stress, weight gain, and health risks. Prioritizing restful sleep ensures energy, focus, and overall health improvement. Without it, daily tasks and overall health can suffer significantly.', '<p data-start=\"96\" data-end=\"431\">Adequate sleep is essential for both physical and mental wellbeing. It allows the body to repair tissues, restore energy, and maintain proper immune function. Regular, restful sleep supports memory, learning, and cognitive performance. Without it, daily tasks and overall health can suffer significantly.</p>\r\n<p data-start=\"96\" data-end=\"431\">Poor sleep increases stress levels, affects mood, and can lead to weight gain. It also raises the risk of chronic conditions like heart disease and diabetes. Ensuring sufficient rest helps the body recover and function optimally.</p>\r\n<p data-start=\"695\" data-end=\"1137\" data-is-only-node=\"\">Prioritizing good sleep habits is crucial for long-term health. This includes maintaining a consistent sleep schedule, creating a comfortable sleep environment, and reducing stimulants before bedtime. Quality sleep improves focus, energy, and emotional resilience. Over time, it supports better decision-making, productivity, and overall quality of life. Everyone benefits when restful sleep becomes a priority.</p>', 'sleep,health,mental wellbeing,recovery', 'HIV-AIDS', 'HIV-AIDS', '2025-10-19 05:33:55', '2026-06-14 20:38:31'),
(2, 9, 'post_1781491051.png', 'The Role of Exercise in Preventing Chronic Diseases', 'exercise-prevent-chronic-diseases', 'Regular physical activity reduces the risk of chronic diseases like diabetes and heart conditions. Exercise strengthens muscles, improves circulation, and supports mental health. Simple routines like walking, stretching, and cardio have long-term benefits. Staying active promotes longevity and a healthier, more energetic lifestyle.', '<p data-start=\"86\" data-end=\"426\">Regular physical activity is essential for maintaining overall health. It reduces the risk of chronic diseases such as diabetes and heart conditions. Exercise strengthens muscles and improves circulation throughout the body. Incorporating movement into daily life supports both physical and mental well-being.</p>\r\n<p data-start=\"86\" data-end=\"426\">Simple routines like walking, stretching, or light cardio can make a big difference. Consistency is key to achieving long-term health benefits. Even small amounts of activity contribute to a healthier lifestyle.</p>\r\n<p data-start=\"672\" data-end=\"1070\">Staying active promotes longevity and helps maintain energy levels throughout the day. Physical activity improves mood and reduces stress, supporting mental health. It also enhances flexibility, balance, and overall mobility. Engaging in regular exercise fosters healthy habits and discipline. Ultimately, an active lifestyle leads to a more vibrant, fulfilling life.</p>', 'exercise,fitnes,chronic disease prevention,wellbeing', '5 Proven Ways to Improve Operational Efficiency', '5 Proven Ways to Improve Operational Efficiency', '2025-10-19 05:35:26', '2026-06-14 20:37:31'),
(3, 6, 'post_1781490983.png', 'How Strategic Planning Boosts Long Term Profitability', 'strategic-planning-boosts-profitability', 'Effective strategic planning helps healthcare organizations align their goals, streamline operations, and improve patient outcomes over time. By setting clear priorities, hospitals and clinics can focus resources where they are most needed. This approach ensures better coordination among medical staff, reduces inefficiencies, and strengthens overall service quality.', '<p data-start=\"163\" data-end=\"533\">Effective strategic planning helps healthcare organizations align their goals, streamline operations, and improve patient outcomes over time. By setting clear priorities, hospitals and clinics can focus resources where they are most needed. This approach ensures better coordination among medical staff, reduces inefficiencies, and strengthens overall service quality.</p>\r\n<p data-start=\"535\" data-end=\"783\">Strategic planning also helps manage risks by anticipating challenges in patient care and regulatory compliance. Healthcare leaders can make informed decisions, prioritize initiatives, and respond quickly to changing medical or market conditions.</p>\r\n<p data-start=\"785\" data-end=\"1133\">With a well-designed roadmap, medical institutions can measure success through key performance indicators. This allows doctors to track progress, adjust strategies, and implement improvements continuously. Over time, strategic planning supports sustainable growth, enhanced patient satisfaction, and a strong reputation in the healthcare community.</p>', 'nutrition,immune system,healthy diet,vitamins', 'How Strategic Planning Boosts Long Term Profitability', 'How Strategic Planning Boosts Long Term Profitability', '2025-10-19 05:36:09', '2026-06-14 20:36:23'),
(4, 7, 'post_1781490857.png', 'Understanding Mental Health in Modern Society', 'mental-health-awareness', 'Mental health awareness is essential for overall wellbeing and happiness. Stress, anxiety, and depression are increasingly common today. Early intervention, counseling, and therapy improve outcomes. Prioritizing mental health strengthens individuals and society as a whole. Everyone benefits when mental health is prioritized in daily life.', '<p data-start=\"144\" data-end=\"448\">Mental health awareness is essential for overall wellbeing and happiness. Understanding the signs of stress, anxiety, and depression helps individuals seek help early. Promoting open conversations reduces stigma and encourages support. Everyone benefits when mental health is prioritized in daily life.</p>\r\n<p data-start=\"450\" data-end=\"700\">Early intervention, counseling, and therapy significantly improve mental health outcomes. Access to professional guidance allows individuals to manage challenges effectively. Communities that support mental wellness thrive emotionally and socially.</p>\r\n<p data-start=\"702\" data-end=\"1046\">Prioritizing mental health strengthens both individuals and society as a whole. It enhances productivity, relationships, and emotional resilience. Schools, workplaces, and families play a key role in awareness. Regular self-care, mindfulness, and support networks are vital. Investing in mental wellbeing creates a healthier, happier society.</p>', 'mental health,wellbeing,stress management,therapy', 'Why Customer Experience Is the New Competitive Advantage', 'Why Customer Experience Is the New Competitive Advantage', '2025-10-19 05:36:45', '2026-06-14 20:34:17'),
(5, 2, 'post_1781490774.png', 'Advances in Telemedicine', 'telemedicine-remote-care-advances', 'Telemedicine is transforming how patients access healthcare services. Remote consultations reduce the need for hospital visits and save time. Digital tools allow monitoring chronic conditions from home. These innovations improve patient engagement and ensure timely, effective care. Telemedicine is making healthcare more convenient and accessible for everyone.', '<p data-start=\"128\" data-end=\"492\">Telemedicine is transforming the way patients access healthcare services. By enabling remote consultations, patients can connect with doctors without the need to visit hospitals. This approach not only saves time but also reduces the risk of infections and travel-related stress. Telemedicine is making healthcare more convenient and accessible for everyone.</p>\r\n<p data-start=\"494\" data-end=\"818\">Remote monitoring and digital tools allow doctors to track chronic conditions from the comfort of patients&rsquo; homes. These technologies ensure timely interventions and support continuous health management, improving overall outcomes. Patients can receive guidance, reminders, and follow-ups without frequent hospital visits.</p>\r\n<p>&nbsp;</p>\r\n<p data-start=\"820\" data-end=\"1270\">The adoption of telemedicine enhances patient engagement and empowers individuals to take control of their health. Virtual consultations, online prescriptions, and health apps create a seamless care experience. By leveraging technology, healthcare providers can offer more personalized treatment plans. This approach strengthens communication, encourages preventive care, and ensures that medical attention is delivered efficiently and effectively.</p>', 'telemedicine,digital health,remote monitoring,patient care', 'Advances in Telemedicine', 'Advances in Telemedicine', '2025-10-19 05:37:32', '2026-06-14 20:32:54'),
(6, 1, 'post_1767608350.png', 'The Importance of Preventive', 'importance-of-preventive-healthcare', 'Preventive healthcare helps detect diseases early, reducing risks and improving long-term outcomes. Regular check-ups, vaccinations, and lifestyle management play a vital role in maintaining health. Patients who follow preventive measures are more likely to avoid serious complications. Early interventions save lives and reduce healthcare costs, while fostering a proactive approach to well-being.', '<p data-start=\"113\" data-end=\"473\">Preventive healthcare helps detect diseases early, reducing risks and improving long-term outcomes. Regular check-ups, vaccinations, and lifestyle management play a vital role in maintaining health. By staying proactive, patients can address potential issues before they become serious. Early attention ensures a healthier life and greater peace of mind.</p>\r\n<p data-start=\"475\" data-end=\"719\">Patients who follow preventive measures are more likely to avoid serious complications. Routine screenings and timely interventions keep health conditions under control. This approach promotes overall wellness and reduces hospital visits.</p>\r\n<p>&nbsp;</p>\r\n<p data-start=\"721\" data-end=\"1163\">Early interventions save lives and reduce healthcare costs while fostering a proactive approach to well-being. Educating patients about nutrition, exercise, and mental health strengthens their ability to maintain good health. Preventive care also builds trust between doctors and patients, encouraging adherence to treatment plans. With consistent attention, individuals can enjoy a higher quality of life and long-term health benefits.</p>', 'preventive care,wellness,healthy lifestyle,checkup', '7 Leadership Habits That Inspire High Performing doctors', '7 Leadership Habits That Inspire High Performing doctors', '2025-10-19 05:38:03', '2026-01-05 06:32:10'),
(7, 1, 'post_1781490679.png', 'What Are Diagnostic Kits?', 'what-are-diagnostic-kits', 'In modern healthcare, data-driven decisions help hospitals and clinics improve patient care and operational efficiency. By analyzing records, treatment trends, and workflows, medical doctors optimize resources, anticipate challenges, and deliver personalized, timely, and high-quality care while fostering continuous improvement.', '<p data-start=\"288\" data-end=\"666\">In modern healthcare, accurate data helps hospitals and clinics make smarter decisions. By analyzing patient records, treatment trends, and operational metrics, medical doctors can identify areas for improvement. Leveraging this information enhances efficiency and ensures higher-quality care. Data-driven strategies allow providers to respond quickly to changing patient needs.</p>\r\n<p data-start=\"668\" data-end=\"850\">These insights help optimize staff allocation, reduce wait times, and improve hospital workflows. Acting on reliable data allows clinics to anticipate challenges before they arise.</p>\r\n<p>&nbsp;</p>\r\n<p data-start=\"852\" data-end=\"1248\">Ultimately, data empowers personalized patient care and informed decision-making. From treatment planning to resource management, every aspect of healthcare benefits from analytics. Medical doctors can track outcomes, measure progress, and continually refine services. Patients receive more accurate diagnoses and timely interventions. Leveraging data fosters a culture of continuous improvement.</p>', 'Medical Technology,Hospital Management,Data-Driven Healthcare,Healthcare Analytics', 'What Are Diagnostic Kits', 'What Are Diagnostic Kits', '2025-10-19 05:38:41', '2026-06-14 20:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Health Tips & Advice', 'health-tips-advice', '2025-10-27 18:39:49', '2025-10-27 18:39:49'),
(2, 'Medical Research & Innovations', 'medical-research-innovations', '2025-10-27 18:40:12', '2025-10-27 18:40:12'),
(3, 'Hospital & Clinic Updates', 'hospital-clinic-updates', '2025-10-27 18:40:29', '2025-10-27 18:41:25'),
(4, 'Patient Stories & Testimonials', 'patient-stories-testimonials', '2025-10-27 18:40:58', '2025-10-27 18:40:58'),
(6, 'Nutrition & Wellness', 'nutrition-wellness', NULL, NULL),
(7, 'Mental Health & Counseling', 'mental-health-counseling', NULL, NULL),
(8, 'Healthcare Technology', 'healthcare-technology', NULL, NULL),
(9, 'Fitness & Health', 'fitness-health', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint UNSIGNED NOT NULL,
  `comment_id` int NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `reply` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `user_type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `comment_id`, `name`, `email`, `reply`, `user_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Cole Rivera', 'cole@mailinator.com', 'I do not think this is a nice post. You should not publish it on your instagram.', 'Visitor', 'Active', '2025-10-29 23:04:09', '2025-10-29 23:07:58'),
(2, 2, NULL, NULL, 'Hi Regina, Thank you so much.', 'Admin', 'Active', '2025-10-29 23:08:33', '2025-10-29 23:08:33'),
(3, 3, NULL, NULL, 'Best wishes for your parents.', 'Admin', 'Active', '2025-10-29 23:09:13', '2025-10-29 23:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `icon_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `seo_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `photo`, `name`, `slug`, `short_description`, `description`, `icon_code`, `phone`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'service_1781491307.png', 'Advanced Health Check', 'advanced-health-check', 'It involves a detailed evaluation of an individual’s physical, mental, and lifestyle-related health factors.', '<p data-start=\"0\" data-end=\"513\">A comprehensive health assessment plays a vital role in maintaining overall well-being by focusing on the early detection of potential illnesses before they develop into serious conditions. It involves a detailed evaluation of an individual&rsquo;s physical, mental, and lifestyle-related health factors, allowing healthcare providers to gain a complete picture of the patient&rsquo;s current health status. Early identification of risks enables timely intervention, which can significantly improve long-term health outcomes.</p>\r\n<p data-start=\"515\" data-end=\"894\">One of the key components of a comprehensive health assessment is the review of medical history. This includes past illnesses, surgeries, family medical history, and genetic predispositions that may increase the risk of certain diseases. Understanding these factors helps clinicians anticipate possible health concerns and design preventive strategies tailored to the individual.</p>\r\n<p>&nbsp;</p>\r\n<p data-start=\"896\" data-end=\"1293\">Physical examinations are another essential part of the assessment process. These examinations evaluate vital signs such as blood pressure, heart rate, respiratory function, and body mass index. Through careful observation and clinical tests, healthcare professionals can identify early signs of cardiovascular disease, respiratory issues, or metabolic disorders that might otherwise go unnoticed.</p>', '<svg width=\"80\" height=\"80\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#2F9D93\" stroke-width=\"1.0\" stroke-linecap=\"round\" stroke-linejoin=\"round\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">\r\n  <title>Strategic Growth</title>\r\n  <rect x=\"2.5\" y=\"4.5\" width=\"13\" height=\"15\" rx=\"1.2\"/>\r\n  <path d=\"M6 9v6\"/>\r\n  <path d=\"M9 11v4\"/>\r\n  <path d=\"M12 8v7\"/>\r\n  <path d=\"M16 7l4-1.5v11\"/>\r\n  <circle cx=\"19.2\" cy=\"9.5\" r=\"2.1\"/>\r\n</svg>\r\n\r\n  <rect x=\"2.5\" y=\"4.5\" width=\"13\" height=\"15\" rx=\"1.2\"/>\r\n  <path d=\"M6 9v6\"/>\r\n  <path d=\"M9 11v4\"/>\r\n  <path d=\"M12 8v7\"/>\r\n  <path d=\"M16 7l4-1.5v11\"/>\r\n  <circle cx=\"19.2\" cy=\"9.5\" r=\"2.1\"/>\r\n</svg>', '222-555-7777', 'Strategic Business Planning', 'Strategic Business Planning', '2025-10-27 05:11:06', '2026-06-14 20:41:47'),
(2, 'service_1781491433.png', 'Comprehensive Medical', 'comprehensive-medical-screening', 'In some cases, imaging tests such as X-rays, ultrasounds, or ECGs may be current based on age.', '<div class=\"text-base my-auto mx-auto pb-10 [--thread-content-margin:--spacing(4)] @w-sm/main:[--thread-content-margin:--spacing(6)] @w-lg/main:[--thread-content-margin:--spacing(16)] px-(--thread-content-margin)\">\r\n<div class=\"[--thread-content-max-width:40rem] @w-lg/main:[--thread-content-max-width:48rem] mx-auto max-w-(--thread-content-max-width) flex-1 group/turn-messages focus-visible:outline-hidden relative flex w-full min-w-0 flex-col agent-turn\" tabindex=\"-1\">\r\n<div class=\"flex max-w-full flex-col grow\">\r\n<div class=\"min-h-8 text-message relative flex w-full flex-col items-end gap-2 text-start break-words whitespace-normal [.text-message+&amp;]:mt-1\" dir=\"auto\" data-message-author-role=\"assistant\" data-message-id=\"568de979-e362-4d2b-b2b1-ab3d712abc37\" data-message-model-slug=\"gpt-5-2\">\r\n<div class=\"flex w-full flex-col gap-1 empty:hidden first:pt-[1px]\">\r\n<div class=\"markdown prose dark:prose-invert w-full break-words dark markdown-new-styling\">\r\n<p data-start=\"0\" data-end=\"492\">A full body examination is a comprehensive medical checkup designed to assess overall health and detect potential health issues at an early stage. It involves a series of physical assessments, laboratory tests, and diagnostic screenings that help identify hidden conditions before symptoms appear. By evaluating vital organs and body systems, a full body examination provides a clear picture of a person&rsquo;s current health status and helps prevent serious illnesses through timely intervention.</p>\r\n<p data-start=\"494\" data-end=\"897\">One of the key benefits of a full body examination is early detection of diseases such as diabetes, hypertension, heart disease, and certain types of cancer. Many of these conditions develop silently and show symptoms only in advanced stages. Regular health screenings allow doctors to identify risk factors early, making treatment more effective and reducing the chances of complications in the future.</p>\r\n<p data-start=\"899\" data-end=\"1288\">A full body examination typically includes measurements of blood pressure, body mass index (BMI), and heart rate, along with blood and urine tests. These tests help assess blood sugar levels, cholesterol, kidney and liver function, and overall metabolic health. In some cases, imaging tests such as X-rays, ultrasounds, or ECGs may be recommended based on age, gender, and medical history</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<svg width=\"80\" height=\"80\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#2F9D93\" stroke-width=\"1.0\" stroke-linecap=\"round\" stroke-linejoin=\"round\" xmlns=\"http://www.w3.org/2000/svg\">\r\n  <title>Medical Screening</title>\r\n  <rect x=\"3\" y=\"4\" width=\"18\" height=\"16\" rx=\"2\"/>\r\n  <path d=\"M3 10h18\"/>\r\n  <circle cx=\"12\" cy=\"14\" r=\"3\"/>\r\n</svg>', '222-444-9999', 'Financial Analysis & Forecasting', 'Financial Analysis & Forecasting', '2025-10-27 05:29:15', '2026-06-14 20:43:53'),
(3, 'service_1781491519.png', 'Pediatric Care Services', 'pediatric-care-services', 'Specialized healthcare support for children plays a vital role in ensuring healthy growth and proper.', '<p data-start=\"0\" data-end=\"454\">Specialized healthcare support for children plays a vital role in ensuring healthy growth and proper physical, mental, and emotional development. From infancy through adolescence, children require age-appropriate medical care that addresses their unique needs. Pediatric healthcare focuses not only on treating illnesses but also on monitoring developmental milestones, nutrition, and overall well-being to build a strong foundation for a healthy future.</p>\r\n<p data-start=\"456\" data-end=\"897\">Early detection and prevention are key components of specialized pediatric care. Regular health check-ups, vaccinations, and developmental screenings help identify potential health issues at an early stage, allowing timely intervention. Conditions such as growth delays, nutritional deficiencies, or developmental disorders can be managed more effectively when diagnosed early, reducing long-term complications and improving quality of life.</p>\r\n<p>&nbsp;</p>\r\n<p data-start=\"899\" data-end=\"1326\">Specialized healthcare also supports children&rsquo;s cognitive and emotional development. Pediatric specialists, including child psychologists and developmental therapists, work closely with families to address learning difficulties, behavioral challenges, and emotional well-being. A supportive healthcare environment helps children develop confidence, resilience, and healthy social skills essential for their overall development.</p>', '<svg width=\"80\" height=\"80\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#2F9D93\" stroke-width=\"1.0\" stroke-linecap=\"round\" stroke-linejoin=\"round\" xmlns=\"http://www.w3.org/2000/svg\">\r\n  <title>Pediatric Care</title>\r\n  <circle cx=\"12\" cy=\"6\" r=\"2\"/>\r\n  <path d=\"M5 20v-3a7 7 0 0114 0v3\"/>\r\n  <path d=\"M12 8v6\"/>\r\n</svg>', '222-333-2222', 'Corporate Risk Management', 'Corporate Risk Management', '2025-10-27 05:32:25', '2026-06-14 20:45:19'),
(4, 'service_1781491711.png', 'Cardiac Health Program', 'cardiac-health-program', 'Preventive heart monitoring is a proactive approach to safeguarding cardiovascular health potential.', '<p data-start=\"0\" data-end=\"511\">Preventive heart monitoring is a proactive approach to safeguarding cardiovascular health by identifying potential risks before they develop into serious conditions. Regular assessments such as blood pressure checks, cholesterol profiling, blood sugar monitoring, and heart rhythm evaluations help detect early warning signs of heart disease. When combined with family history and lifestyle analysis, these screenings provide a clear picture of an individual&rsquo;s heart health status and allow timely intervention.</p>\r\n<p data-start=\"513\" data-end=\"977\">Continuous or periodic heart monitoring also empowers individuals to understand how daily habits affect their cardiovascular system. Wearable devices and routine clinical tests can track heart rate patterns, physical activity levels, sleep quality, and stress responses. This data-driven insight encourages informed decisions and motivates positive behavior changes, making heart care an ongoing, manageable part of everyday life rather than a reaction to illness.</p>\r\n<p>&nbsp;</p>\r\n<p data-start=\"979\" data-end=\"1421\">Guidance based on preventive monitoring focuses strongly on lifestyle optimization. A heart-healthy diet rich in fruits, vegetables, whole grains, lean proteins, and healthy fats supports optimal blood vessel function and cholesterol balance. Regular physical activity, tailored to age and ability, strengthens the heart muscle, improves circulation, and helps maintain a healthy weight, all of which significantly reduce cardiovascular risk.</p>', '<svg width=\"80\" height=\"80\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#2F9D93\" stroke-width=\"1.0\" stroke-linecap=\"round\" stroke-linejoin=\"round\" xmlns=\"http://www.w3.org/2000/svg\">\r\n  <title>Cardiac Health</title>\r\n  <path d=\"M12 21s-6-4.5-6-10a6 6 0 0112 0c0 5.5-6 10-6 10z\"/>\r\n  <path d=\"M12 11v4\"/>\r\n</svg>', '222-555-6767', 'Tax Planning & Compliance', 'Tax Planning & Compliance', '2025-10-27 05:34:50', '2026-06-14 20:48:31'),
(5, 'service_1767608919.png', 'Women\'s Wellness Check', 'womens-wellness-check', 'This may include breast exams, pelvic exams, Pap smears, and screenings for cervical or breast cancer.', '<p data-start=\"74\" data-end=\"309\">Women&rsquo;s Wellness Check is a complete health check designed to support women&rsquo;s physical and emotional well-being at every stage of life. Regular wellness checks help detect health problems early and keep the body healthy and strong.</p>\r\n<p data-start=\"311\" data-end=\"623\">This check usually includes a general physical examination, such as measuring weight, blood pressure, and body mass index (BMI). These tests help identify risks related to heart disease, diabetes, and obesity. Blood and urine tests may also be done to check sugar levels, cholesterol, anemia, and infections.</p>\r\n<p data-start=\"625\" data-end=\"871\">A women&rsquo;s wellness check focuses on reproductive health. This may include breast exams, pelvic exams, Pap smears, and screenings for cervical or breast cancer. Early detection increases the chance of successful treatment and long-term health.Mental health is also important. Doctors may ask about stress, sleep, mood, and emotional well-being. Counseling or guidance is provided if needed.</p>\r\n<p>&nbsp;</p>\r\n<p data-start=\"1022\" data-end=\"1195\">Doctors also give advice on nutrition, exercise, family planning, and lifestyle habits. Vaccinations and hormone health may be reviewed based on age and medical history.</p>', '<svg width=\"80\" height=\"80\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#2F9D93\" stroke-width=\"1.0\" stroke-linecap=\"round\" stroke-linejoin=\"round\" xmlns=\"http://www.w3.org/2000/svg\">\r\n  <title>Women\'s Wellness</title>\r\n  <circle cx=\"12\" cy=\"7\" r=\"3\"/>\r\n  <path d=\"M12 10v7\"/>\r\n  <path d=\"M9 17h6\"/>\r\n</svg>', '222-555-7878', 'Women\'s Wellness Check', 'Women\'s Wellness Check', '2025-10-27 05:39:15', '2026-01-08 03:36:41'),
(6, 'service_1781491595.png', 'Diabetes Management', 'diabetes-management-plan', 'Medication and insulin must be taken exactly as prescribed by a doctor cause serious problems.', '<p data-start=\"343\" data-end=\"582\">The first step is healthy eating. Patients should eat balanced meals with vegetables, whole grains, lean protein, and healthy fats. Sugary foods and drinks should be limited. Eating at the same time every day helps control blood sugar.Regular physical activity is very important. Walking, cycling, or light exercise for 30 minutes a day helps the body use insulin better and lowers blood sugar levels. Exercise also helps control weight and improves heart health.</p>\r\n<p data-start=\"818\" data-end=\"1003\">Medication and insulin must be taken exactly as prescribed by a doctor. Skipping medicine can cause serious problems. Patients should never change their dose without medical advice.Blood sugar monitoring helps patients understand how food, exercise, and medicine affect their body. Regular checking allows early action if levels are too high or too low.</p>\r\n<p data-start=\"1183\" data-end=\"1430\">Finally, regular doctor visits are necessary. Doctors check blood sugar, blood pressure, eyes, kidneys, and feet. Proper diabetes management reduces the risk of heart disease, nerve damage.</p>', '<svg width=\"80\" height=\"80\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#2F9D93\" stroke-width=\"1.0\" stroke-linecap=\"round\" stroke-linejoin=\"round\" xmlns=\"http://www.w3.org/2000/svg\">\r\n  <title>Diabetes Management</title>\r\n  <rect x=\"4\" y=\"5\" width=\"16\" height=\"14\" rx=\"2\"/>\r\n  <path d=\"M8 12h8\"/>\r\n  <path d=\"M12 9v6\"/>\r\n</svg>', '222-333-5632', 'Diabetes Management Plan', 'Diabetes Management Plan', '2025-10-27 05:41:33', '2026-06-14 20:46:35'),
(7, 'service_1767707713.png', 'Timely Immunization', 'timely-immunization', 'The Timely Immunization Protection is dedicated to safeguarding individuals  by from ensuring.', '<p data-start=\"337\" data-end=\"805\">The Timely Immunization Protection Program is dedicated to safeguarding individuals from preventable infectious diseases by ensuring access to vaccines at the right time. This service follows nationally and internationally recommended immunization schedules to provide early and effective protection, particularly for infants, children, pregnant women, and older adults. By focusing on prevention, the program helps reduce illness, complications, and avoidable deaths.</p>\r\n<p data-start=\"807\" data-end=\"1233\">One of the key strengths of this service is its emphasis on timely vaccination. Receiving vaccines according to schedule allows the immune system to build strong defenses before exposure to harmful pathogens. Delays in immunization can leave individuals vulnerable, while timely doses ensure continuous protection during critical stages of life. The service also provides reminders and guidance to help families stay on track.</p>\r\n<p data-start=\"807\" data-end=\"1233\">Beyond individual protection, the program plays an important role in strengthening community health. Widespread immunization reduces the spread of contagious diseases and supports herd immunity, protecting those who cannot be vaccinated due to medical reasons. This collective approach helps prevent outbreaks and maintains a safer environment for everyone.</p>', '<svg width=\"80\" height=\"80\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#2F9D93\" stroke-width=\"1.0\" stroke-linecap=\"round\" stroke-linejoin=\"round\" xmlns=\"http://www.w3.org/2000/svg\">\r\n  <title>Orthopedic Care</title>\r\n  <path d=\"M6 21v-4h12v4\"/>\r\n  <path d=\"M12 3v14\"/>\r\n  <circle cx=\"12\" cy=\"3\" r=\"2\"/>\r\n</svg>', '222-666-7733', 'Timely Immunization Protection', 'Timely Immunization Protection', '2025-10-27 05:44:12', '2026-01-08 03:35:45'),
(8, 'service_1767678312.png', 'Mental Health Support', 'mental-health-support', 'Mental health is about how we think, feel, and act every day. It helps us handle stress, get along.', '<p data-start=\"85\" data-end=\"465\">Mental health support focuses on promoting emotional, psychological, and social well-being. It helps individuals cope with everyday stress, maintain healthy relationships, and make informed life choices. Seeking support is a proactive step toward understanding one&rsquo;s thoughts, feelings, and behaviors, creating a foundation for personal growth and resilience.</p>\r\n<p data-start=\"85\" data-end=\"465\">Professional mental health services include therapy, counseling, and psychiatric care, designed to address conditions such as anxiety, depression, stress, and trauma. These services provide a safe and confidential environment where individuals can express their emotions without judgment. Regular mental health care can improve mood, reduce symptoms, and enhance overall life satisfaction.</p>\r\n<p data-start=\"879\" data-end=\"1263\">Beyond professional care, mental health support also comes from family, friends, and community resources. Encouragement, active listening, and social connection play a crucial role in recovery and emotional stability. Peer support groups and educational programs can empower individuals with coping strategies and practical tools to manage challenges effectively.</p>', '<svg width=\"80\" height=\"80\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#2F9D93\" stroke-width=\"1.0\" stroke-linecap=\"round\" stroke-linejoin=\"round\" xmlns=\"http://www.w3.org/2000/svg\">\r\n  <title>Mental Health</title>\r\n  <path d=\"M12 21s-6-4.5-6-10a6 6 0 0112 0c0 5.5-6 10-6 10z\"/>\r\n  <path d=\"M9 12h6\"/>\r\n  <path d=\"M9 15h6\"/>\r\n</svg>', NULL, 'Mental Health Support', 'Mental Health Support', '2026-01-03 13:08:39', '2026-01-10 02:13:07'),
(9, 'service_1767550535.jpg', 'Immunization Vaccination', 'immunization-vaccination-program', 'Protecting individuals from preventable diseases through timely immunization schedules of public.', '<p data-start=\"0\" data-end=\"519\">Protecting individuals from preventable diseases through timely immunization schedules is a cornerstone of public health. Vaccines help the immune system recognize and fight harmful pathogens before they can cause serious illness. By following recommended immunization timelines, individuals&mdash;especially infants, children, and the elderly&mdash;gain early protection during the most vulnerable stages of life. This proactive approach significantly reduces the risk of outbreaks and saves millions of lives worldwide each year.</p>\r\n<p data-start=\"521\" data-end=\"968\">Timely immunization not only protects the person receiving the vaccine but also contributes to community-wide safety through herd immunity. When a large portion of the population is immunized, the spread of infectious diseases is limited, offering protection to those who cannot be vaccinated due to medical conditions. This collective defense is especially important in densely populated areas where diseases can spread rapidly if left unchecked.</p>\r\n<p>&nbsp;</p>\r\n<p data-start=\"970\" data-end=\"1394\">Another critical benefit of adhering to immunization schedules is the prevention of long-term health complications. Many vaccine-preventable diseases, such as measles, polio, and hepatitis, can lead to lifelong disabilities or even death. Vaccines reduce these risks by preventing infections before they occur, thereby lowering healthcare costs and reducing the emotional and financial burden on families and health systems.</p>', '<svg width=\"80\" height=\"80\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#2F9D93\" stroke-width=\"1.0\" stroke-linecap=\"round\" stroke-linejoin=\"round\" xmlns=\"http://www.w3.org/2000/svg\">\r\n  <title>Vaccination Program</title>\r\n  <rect x=\"6\" y=\"3\" width=\"12\" height=\"18\" rx=\"2\"/>\r\n  <path d=\"M12 7v10\"/>\r\n  <path d=\"M9 10h6\"/>\r\n</svg>', '880173686956', 'Immunization Vaccination', 'Immunization Vaccination', '2026-01-03 13:09:29', '2026-01-08 03:15:07');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('P8zqNUUERX2Gag6GPx9Sv7M9bP7u1vQbRJWWjZGe', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidmw0RW9aakZKUkR3WXgzVE5VUWpPZkRLRmthUWJleXdQZllweE1hTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHA6Ly95b3VyZG9jdG9ycy50ZXN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NzoiY2FwdGNoYSI7YTozOntzOjk6InNlbnNpdGl2ZSI7YjowO3M6Mzoia2V5IjtzOjYwOiIkMnkkMTIkTG42MS5UTVZjLk1PVWhFMkE3YWZqLjdnUHlNRTFkUEJCWE51ZENMRmI3akR4YWxSN3F6YVciO3M6NzoiZW5jcnlwdCI7YjowO319', 1781493476),
('Z3o0ABqEG9yjSFP1rwR8wMgSGMCBqlskoG67Ss7Q', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRXF5R09IUHhMdHlSWEtQcHdmNFVLWndDRHJjMWZETjYya1I4eGZndSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHA6Ly95b3VyZG9jdG9ycy50ZXN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1781489266);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `logo_white` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `favicon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `banner` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `not_found_photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `not_found_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `not_found_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `not_found_button_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `not_found_button_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `top_bar_phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `top_bar_email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `top_bar_faq_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `top_bar_contact_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `top_bar_facebook` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `top_bar_twitter` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `top_bar_linkedin` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `top_bar_instagram` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_address_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_phone_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_email_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_facebook` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_twitter` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_instagram` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_linkedin` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_copyright` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_column1_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_column1_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_column2_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_column3_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_column4_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_column4_subscriber_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_column4_subscriber_placeholder_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_column4_subscriber_button_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cookie_consent_message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cookie_consent_button_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cookie_consent_text_color` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cookie_consent_bg_color` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cookie_consent_button_text_color` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cookie_consent_button_bg_color` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cookie_consent_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `google_analytic_measurement_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `google_analytic_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tawk_live_chat_property_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tawk_live_chat_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `sticky_header_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `preloader_photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `preloader_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `layout_direction` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `theme_color_1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `theme_color_2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `theme_color_3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `currency_symbol` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `captcha_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `maintenance_mode_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `maintenance_mode_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `maintenance_mode_logo_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `maintenance_mode_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `maintenance_mode_countdown_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `maintenance_mode_countdown_date` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `maintenance_mode_countdown_time` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `maintenance_mode_countdown_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `logo_white`, `favicon`, `banner`, `not_found_photo`, `not_found_heading`, `not_found_text`, `not_found_button_text`, `not_found_button_status`, `top_bar_phone`, `top_bar_email`, `top_bar_faq_status`, `top_bar_contact_status`, `top_bar_facebook`, `top_bar_twitter`, `top_bar_linkedin`, `top_bar_instagram`, `footer_address_heading`, `footer_address`, `footer_phone_heading`, `footer_phone`, `footer_email_heading`, `footer_email`, `footer_facebook`, `footer_twitter`, `footer_instagram`, `footer_linkedin`, `footer_copyright`, `footer_column1_heading`, `footer_column1_text`, `footer_column2_heading`, `footer_column3_heading`, `footer_column4_heading`, `footer_column4_subscriber_text`, `footer_column4_subscriber_placeholder_text`, `footer_column4_subscriber_button_text`, `cookie_consent_message`, `cookie_consent_button_text`, `cookie_consent_text_color`, `cookie_consent_bg_color`, `cookie_consent_button_text_color`, `cookie_consent_button_bg_color`, `cookie_consent_status`, `google_analytic_measurement_id`, `google_analytic_status`, `tawk_live_chat_property_id`, `tawk_live_chat_status`, `sticky_header_status`, `preloader_photo`, `preloader_status`, `layout_direction`, `theme_color_1`, `theme_color_2`, `theme_color_3`, `currency_symbol`, `captcha_status`, `maintenance_mode_heading`, `maintenance_mode_text`, `maintenance_mode_logo_status`, `maintenance_mode_status`, `maintenance_mode_countdown_heading`, `maintenance_mode_countdown_date`, `maintenance_mode_countdown_time`, `maintenance_mode_countdown_status`, `created_at`, `updated_at`) VALUES
(1, 'logo_1781449032.png', 'logo_white_1781448984.png', 'favicon_1781451233.png', 'banner_1781492398.png', 'not_found_photo_1761892563.svg', 'Oops! Nothing Was Found.', '<p>Sorry, we couldn&rsquo;t find the page you where looking for.<br />We suggest that you return to homepage.</p>', 'Back to Home Page', 'Show', '+1 (234) 433-2356', 'info@example.com', 'Show', 'Show', 'https://www.facebook.com', 'https://www.x.com', 'https://www.linkedin.com', 'https://www.instagram.com', 'Location', '34 Antiger Lane, \r\nNYC, USA, 12937', 'Contact Us', '+1 (123) 235-4322\r\n+1 (123) 235-6755', 'Working Emails', 'contact@example.com\r\nsupport@example.com', '#', '#', '#', '#', 'Copyright © 2026, MediCure. All Rights Reserved.', 'About Us', 'We are one of the leading medical practices in the city. We are working from 2004 and provide exceptional healthcare to community.', 'Links', 'Explore', 'Get In Touch', 'If you want to get regular update from us, then please do not forget to subscribe.', 'Email Address', 'Subscribe', 'This website uses cookies to ensure you get the best experience on our website.', 'ACCEPT', 'D2FFE2', '000000', '000000', 'FFFFFF', 'Show', 'G-1A2BC3DE45', 'Show', '5a7c31ded7591465c7077c48', 'Hide', 'Show', 'preloader_photo_1781491877.png', 'Hide', 'LTR', '3969D3', '090B38', '344B8C', '$', 'Hide', 'Website is under maintenance', '<p>Sorry, our website is undermaintenance mode. We will come back to you very soon.<br />If you have any query, contact us here: <a title=\"info@example.com\" href=\"mailto:info@example.com\">info@example.com</a><br />You can also call us here: +1 (343) 433-2356</p>', 'Show', 'Disabled', 'We will be back in:', '2026-10-17', '09:00', 'Show', '2025-10-30 04:21:01', '2026-06-14 20:59:58');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `subheading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `button1_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `button1_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `button2_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `button2_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `photo`, `subheading`, `heading`, `button1_text`, `button1_link`, `button2_text`, `button2_link`, `created_at`, `updated_at`) VALUES
(1, 'slider_1781489059.png', 'Trusted Medical Experts Deliver Quality Healthcare', 'Compassionate \r\nCare for Every \r\nPatient', 'Get Consultancy', '#', 'Contact Us', '#', '2025-10-27 12:33:36', '2026-06-14 20:04:19'),
(2, 'slider_1781488755.png', 'Because Your Wellbeing Deserves The Best', 'Your Health \r\nOur Highest \r\nPriority', 'Get Consultancy', '#', 'Contact Us', '#', '2025-10-27 12:40:09', '2026-06-14 19:59:15'),
(3, 'slider_1781488642.png', 'Dedicated Doctors Providing Trusted Healthcare Services', 'Excellence in \r\nModern Medical \r\nCare', 'Get Consultancy', '#', 'Contact Us', '#', '2025-10-27 12:40:47', '2026-06-14 19:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint UNSIGNED NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `token` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sub1@example.com', '', 1, '2025-10-21 03:37:56', '2025-10-21 03:38:33'),
(3, 'sub2@example.com', '', 1, '2025-10-21 03:39:47', '2025-10-21 03:39:59'),
(5, 'sub4@example.com', '4cd564a02e5c70d1246c91b57999f3ceedf3905b13f03904539107648bb6e5c0', 0, '2025-10-21 03:40:16', '2025-10-21 03:40:16'),
(6, 'sub5@example.com', '', 1, '2025-10-29 07:20:27', '2025-10-29 07:23:17'),
(7, 'sub6@example.com', '', 1, '2025-10-29 07:21:29', '2025-10-29 07:23:21'),
(12, 'temofon@mailinator.com', 'a6f38bc539436292adcaf7304f8316812a95c663a53934e8be59973248c378bb', 0, '2026-01-03 10:11:00', '2026-01-03 10:11:00'),
(13, 'xinewer@mailinator.com', '9733e5db44fe8e126f494b8a01d903018afaede6e5fbda925b948b35b526ad9f', 0, '2026-01-06 08:15:01', '2026-01-06 08:15:01'),
(14, 'sujauddoulasohel352@gmail.com', '1d5818f7a9cdddd6d3da89efaab65ec3e3d930033f186e4ee9680ff2b6ef6448', 0, '2026-01-06 13:16:05', '2026-01-06 13:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint UNSIGNED NOT NULL,
  `video` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `caption` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video`, `caption`, `created_at`, `updated_at`) VALUES
(2, 'doL-x-to8uI', 'Advin Double J Stent White', '2025-10-30 19:58:30', '2026-01-05 05:59:23'),
(3, 'en7DYjp5UgI', 'Foley\'s catheter', '2025-10-30 19:59:00', '2026-01-06 12:41:25'),
(4, 'vjDlkPXHh7A', 'Acute and Chronic Pancreatitis:', '2025-10-30 19:59:19', '2026-01-08 04:57:00'),
(5, 'HPNJQi_b7NM', 'Understanding Pancreatitis', '2025-10-30 19:59:35', '2026-01-05 06:02:04'),
(6, 'w7Nq9uQJOXE', 'Chronic Pancreatitis', '2025-10-30 20:00:09', '2026-01-06 12:42:57'),
(7, 'tl7iYSl8HjE', 'Pancreatic Cancer', '2025-10-30 20:00:41', '2026-01-08 05:01:03'),
(8, 'sdWVGuJ0Iz0', 'Staging for Pancreatic Cancer', '2025-10-30 20:01:05', '2026-01-08 05:03:54'),
(9, 'GErcHVxxK5c', 'Gross Anatomy of Gallbladder:', '2025-10-30 20:01:26', '2026-01-06 12:46:37'),
(10, 'uT-iH-Y1CUs', 'Transcatheter Aortic Valve', '2025-10-30 20:01:42', '2026-01-06 12:48:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter_items`
--
ALTER TABLE `counter_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_features`
--
ALTER TABLE `package_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_items`
--
ALTER TABLE `page_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `counter_items`
--
ALTER TABLE `counter_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `package_features`
--
ALTER TABLE `package_features`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `page_items`
--
ALTER TABLE `page_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
