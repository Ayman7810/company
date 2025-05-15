-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.4.3 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for company
-- CREATE DATABASE IF NOT EXISTS `company` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

-- CREATE DATABASE IF NOT EXISTS `company` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `if0_38870755_company`;


-- Dumping structure for table company.advisors
CREATE TABLE IF NOT EXISTS `advisors` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `advisors_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company.advisors: ~3 rows (approximately)
DELETE FROM `advisors`;
INSERT INTO `advisors` (`id`, `name`, `name_ar`, `slug`, `description`, `description_ar`, `image`, `insta`, `feac`, `twit`, `created_at`, `updated_at`) VALUES
	(3, 'Maya Roberts111', 'علي عبدالله', 'maya-roberts111', 'Eu sint laboris rer', 'ئيس مجلس الادارة', '1742501633-1.jpg', 'https://chatgpt.com', 'Perspiciatis exerci', 'Necessitatibus vitae', '2025-03-20 16:50:29', '2025-03-20 17:31:46'),
	(6, 'Vernon Kane', 'حمد حسن', 'vernon-kane', 'Consequatur ex sint', 'نائب رئيس مجلس الادارة', '1742501661-3.jpg', 'Reprehenderit omnis', 'Est alias suscipit v', 'Sint enim expedita', '2025-03-20 17:05:44', '2025-03-20 17:14:21'),
	(7, 'Ivor Knoxs', 'يوسف عباس', 'ivor-knoxs', 'Voluptatem Est tem', 'رئيس الشركة', '1742501701-2.jpg', 'Tempor officia illo', 'Laborum Rerum liber', 'Non consequatur Sed', '2025-03-20 17:15:01', '2025-04-04 00:29:05');

-- Dumping structure for table company.blogs
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint unsigned NOT NULL DEFAULT (0),
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint unsigned DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `blogs_title_unique` (`title`),
  KEY `blogs_user_id_foreign` (`user_id`),
  KEY `blogs_category_id_foreign` (`category_id`),
  CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category_blogs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company.blogs: ~12 rows (approximately)
DELETE FROM `blogs`;
INSERT INTO `blogs` (`id`, `title`, `title_ar`, `slug`, `description`, `description_ar`, `image`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(20, 'Ut magnam maiores vo', 'يسهل عليك العثور على القطع المتوافقة.', 'ut-magnam-maiores-vo', 'Natus qui in similiq', ' يتيح لك محرك البحث الذكي إدخال معلومات محددة حول سيارتك، مثل العلامة التجارية والموديل والسنة،', '1741902560-related-4.jpg', 11, 5, '2025-03-13 18:49:20', '2025-03-13 18:49:20'),
	(21, 'Architecto veritatis', 'التوصيل السريع', 'architecto-veritatis', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod iusto ipsum recusandae voluptatibus fuga ad ut eveniet incidunt voluptatem, deserunt, quia deleniti id, quam asperiores? Illo aliquam eveniet id porro. Voluptates nam eligendi provident itaque molestias temporibus exercitationem doloremque in. Eos cupiditate harum quo officia repellendus possimus quasi consequuntur commodi fuga fugit doloremque a, asperiores sint laudantium reiciendis soluta sit impedit autem eligendi voluptate omnis ut amet earum. Cum, repellendus sint. Excepturi non rerum eius recusandae est deleniti atque architecto sunt quod delectus qui provident accusantium fuga quisquam voluptatibus, placeat facilis molestias animi? Quod officia eius, iste repellat reprehenderit possimus?', 'نحن نفتخر بخدمة توصيل سريعة وفعّالة', '1741902581-related-3.jpg', 12, 5, '2025-03-13 18:49:41', '2025-03-13 22:09:23'),
	(22, 'Suscipit ullamco lab', 'بمجرد تحديد قطع الغيار التي تحتاجها وإكمال عملية الشراء،', 'suscipit-ullamco-lab', 'Est error molestias', ' يتم توجيه طلبك ليتم توصيله إلى باب منزلك في أقرب وقت ممكن', '1741902604-related-2.jpg', 12, 5, '2025-03-13 18:50:04', '2025-03-13 18:50:04'),
	(23, 'Molestiae modi ea do', ' مما يوفر لك الوقت والجهد.', 'molestiae-modi-ea-do', 'Dolorum consequuntur', ' يمكن لعملائنا استلام قطع الغيار عالية الجودة والموثوقية.', '1741902699-related-1.jpg', 9, 5, '2025-03-13 18:51:39', '2025-03-13 18:51:39'),
	(25, 'Sit animi adipisici', 'خدمة موثوقة', 'sit-animi-adipisici', 'Quidem dolor sequi p', '. يتم اختيار البائعين بدقة لضمان تقديم منتجات موثوقة وفعّالة', '1741928125-related-3.jpg', 9, 5, '2025-03-14 01:55:25', '2025-03-14 01:55:25'),
	(26, 'Nulla eiusmod velit', 'تحسين تجربتهم العامة.', 'nulla-eiusmod-velit', 'Temporibus doloremqu', '  يمكن يُضمن للعملاء أداءً متميزًا لسياراتهم ', '1741928143-9.jpg', 12, 5, '2025-03-14 01:55:43', '2025-03-14 01:55:43'),
	(27, 'At molestias accusam', 'مقارنة العروض', 'at-molestias-accusam', 'Ut magni non neque c', 'يمكن ميزة المقارنة للمساعدة في اتخاذ قرارات مستنيرة', '1741928158-8.jpg', 7, 5, '2025-03-14 01:55:59', '2025-03-14 01:55:59'),
	(28, 'Ut velit non labore', 'يتيح لهم اختيار العرض', 'ut-velit-non-labore', 'Dolor alias consequa', 'يمكن للعملاء مقارنة الأسعار والميزات بين البائعين المختلفين', '1741928168-7.jpg', 8, 5, '2025-03-14 01:56:08', '2025-03-14 01:56:08'),
	(29, 'Ducimus molestias a', 'الشراء بسهولة', 'ducimus-molestias-a', 'Quia quod ad delenit', 'الذي يناسب احتياجاتهم وميزانيتهم بشكل أفضل.', '1741928182-5.jpg', 9, 5, '2025-03-14 01:56:22', '2025-03-14 01:56:22'),
	(30, 'Deserunt necessitati', ' يمكن للمستخدمين تحديد القطع', 'deserunt-necessitati', 'Quia recusandae In', 'واجهة المستخدم تُصمم بعناية لتحقيق تجربة شراء سلسة', '1741928202-2.jpg', 12, 5, '2025-03-14 01:56:42', '2025-03-14 01:56:42'),
	(31, 'Inventore ut et dolo', ' يُسهّل هذا النهج العملية ويوفر وقت العميل', 'inventore-ut-et-dolo', 'Cillum facilis tempo', 'يمكن توفر القطعة يتم إكمال العملية بخطوات بسيطة وواضحة', '1741928213-4.jpg', 12, 5, '2025-03-14 01:56:53', '2025-03-14 01:56:53'),
	(34, 'Dicta nostrud molest', 'دعم العملاء', 'dicta-nostrud-molest', 'Molestiae iure aut a', 'يتيح فريق دعم العملاء المتخصص التفاعل مع العملاء في جميع المراحل. سواء كانوا بحاجة إلى مساعدة في اختيار القطع أو حل مشكلة محددة، يضمن الدعم الفوري والفعّال أن تظل تجربة العميل مميزة وراضية.', '1742414826-related-1.jpg', 11, 5, '2025-03-19 17:07:06', '2025-03-19 17:07:06');

-- Dumping structure for table company.category_blogs
CREATE TABLE IF NOT EXISTS `category_blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company.category_blogs: ~6 rows (approximately)
DELETE FROM `category_blogs`;
INSERT INTO `category_blogs` (`id`, `title`, `title_ar`, `created_at`, `updated_at`) VALUES
	(7, 'Accounting', 'المحاسبة', '2025-03-12 21:26:54', '2025-03-12 21:26:54'),
	(8, 'Budgets', 'الميزانيات', '2025-03-12 21:26:54', '2025-03-12 21:26:54'),
	(9, 'Business', 'الأعمال / التجارة', '2025-03-12 21:26:54', '2025-03-12 21:26:54'),
	(10, 'Business Plans', 'خطط الأعمال', '2025-03-12 21:26:54', '2025-03-12 21:26:54'),
	(11, 'Commodities', 'السلع / البضائع', '2025-03-12 21:26:54', '2025-03-12 21:26:54'),
	(12, 'Insurance', 'التأمين', '2025-03-12 21:26:54', '2025-03-12 21:26:54');

-- Dumping structure for table company.category_projects
CREATE TABLE IF NOT EXISTS `category_projects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company.category_projects: ~6 rows (approximately)
DELETE FROM `category_projects`;
INSERT INTO `category_projects` (`id`, `title`, `title_ar`, `created_at`, `updated_at`) VALUES
	(1, 'Business Consulting', 'اعمال', '2025-03-11 22:39:11', '2025-03-11 22:39:11'),
	(2, 'Marketing', 'تسويق', '2025-03-11 22:39:11', '2025-03-11 22:39:11'),
	(3, 'Strategy', 'منظمات', '2025-03-11 22:39:11', '2025-03-11 22:39:11'),
	(4, 'Online Marketing', 'تسويق مباشر', '2025-03-11 22:39:11', '2025-03-11 22:39:11'),
	(5, 'SEO Optimization', 'ارشفه الويب', '2025-03-11 22:39:11', '2025-03-11 22:39:11'),
	(6, 'Corporate Finance', 'فرنسا', '2025-03-11 22:39:11', '2025-03-11 22:39:11');

-- Dumping structure for table company.certificates
CREATE TABLE IF NOT EXISTS `certificates` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company.certificates: ~5 rows (approximately)
DELETE FROM `certificates`;
INSERT INTO `certificates` (`id`, `name`, `name_ar`, `slug`, `job`, `job_ar`, `description`, `description_ar`, `image`, `created_at`, `updated_at`) VALUES
	(2, 'Karinaxx', 'يوسف عباس', 'karinaxx', 'Accusamus occaecat q', 'سواق', 'Est minim officia a', 'أود أن أعرب عن ارتياحي الكامل بتعاملي مع شركة الأوزري للصرافة تجربتي معهم كانت رائعة، حيث قدموا خدمة عملاء استثنائية واستجابة فورية لجميع استفساراتي تمتلك الشركة سعرًا مناسبًا وإجراءات تبادل سريعة ومريحة بفضل شركة الأوزري للصرافة تم تسهيل عملياتي المالية بشكل كبير أوصي بشدة بهم لأي شخص يبحث عن خدمات صرافة ممتازة', '1742436243-4.jpg', '2025-03-12 20:12:20', '2025-03-19 23:04:03'),
	(3, 'Imani zz', 'سارة خالد', 'imani-zz', 'Rerum et eveniet eo', 'مديرة', 'Reprehenderit labor', 'انا عميله راضيه جدًا عن شركة الأوزري للصرافة لقد استفدت من خدماتهم عدة مرات وكانت الخدمة دائمًا استثنائية يتميزون بالمرونة في التعامل مع طلبات الصرافة المختلفة ويقدمون معلومات واضحة ودقيقة بشأن العملة والأسعار نحن نثق تمامًا في شركة الأوزري للصرافة ونوصي بهم بشدة لأي شخص يحتاج إلى خدمات صرافة متميزة.', '1742436257-avatar-01.jpg', '2025-03-13 18:12:31', '2025-03-19 23:04:17'),
	(4, 'Arden Cruz', 'محمد أحمد', 'arden-cruz', 'Non aut dolorem erro', 'تاجر', 'Aut duis deserunt pr', ' أود أن أعرب عن ارتياحي الكامل بتعاملي مع شركة الأوزري للصرافة تجربتي معهم كانت رائعة، حيث قدموا خدمة عملاء استثنائية واستجابة فورية لجميع استفساراتي تمتلك الشركة سعرًا مناسبًا وإجراءات تبادل سريعة ومريحة بفضل شركة الأوزري للصرافة تم تسهيل عملياتي المالية بشكل كبير أوصي بشدة بهم لأي شخص يبحث عن خدمات صرافة ممتازة', '1741900527-3.jpg', '2025-03-13 18:15:27', '2025-03-13 18:15:27'),
	(5, 'Alana Obrien', 'عمرو صالح', 'alana-obrien', 'Labore in iure Nam a', 'مالك محل', 'Unde placeat earum', '\r\n                  انا عميله راضيه جدًا عن شركة الأوزري للصرافة لقد استفدت من خدماتهم عدة مرات وكانت الخدمة دائمًا استثنائية يتميزون بالمرونة في التعامل مع طلبات الصرافة المختلفة ويقدمون معلومات واضحة ودقيقة بشأن العملة والأسعار نحن نثق تمامًا في شركة الأوزري للصرافة ونوصي بهم بشدة لأي شخص يحتاج إلى خدمات صرافة متميزة.\r\n                  ', '1741900537-avatar-02.jpg', '2025-03-13 18:15:37', '2025-03-13 18:15:37'),
	(6, 'Kennedy Hunter', 'فاطمة علي', 'kennedy-hunter', 'A omnis nulla irure', 'مديرة مركز', 'Itaque totam dolorib', 'بصفتي عميله لشركة الأوزري للصرافة أود أن أشهد بأن الشركة توفر خدمة صرافة رائعة قدمت لنا الشركة أسعارًا مناسبة وتبادل سريع وموثوق به فريق العمل كان محترفًا للغاية ودائمًا على استعداد لمساعدتنا في تلبية احتياجاتنا نحن سعداء جدًا بخدمة العملاء التي تلقيناها ونوصي بشدة بهم لأي شخص يحتاج إلى خدمات صرافة ممتازة', '1742436270-avatar-01.jpg', '2025-03-14 20:53:36', '2025-03-19 23:04:30');

-- Dumping structure for table company.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_blog_id_foreign` (`blog_id`),
  CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company.comments: ~20 rows (approximately)
DELETE FROM `comments`;
INSERT INTO `comments` (`id`, `name`, `email`, `text`, `image`, `blog_id`, `created_at`, `updated_at`) VALUES
	(1, 'ayman', 'ayman@gmail.com', 'sdasdasdasd asdasdas  adsdas asd dasd ', 'asasdas', 25, '2025-03-20 21:01:18', '2025-03-20 21:01:20'),
	(2, 'ammen', 'ameen@gmail.com', 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisc', 'sdasd', 25, '2025-03-20 21:07:42', '2025-03-20 21:07:43'),
	(3, 'Maryam Vasquez', 'xupajutety@mailinator.com', 'Sit et illum conse', NULL, 25, '2025-03-20 18:44:51', '2025-03-20 18:44:51'),
	(4, 'Malachi Perry', 'kivi@mailinator.com', 'Dolorum facere est', NULL, 25, '2025-03-20 18:51:24', '2025-03-20 18:51:24'),
	(5, 'Malachi Perry', 'kivi@mailinator.com', 'Dolorum facere est', NULL, 25, '2025-03-20 18:52:01', '2025-03-20 18:52:01'),
	(6, 'Bell Huber', 'rerib@mailinator.com', 'Esse dolorem nesciu', NULL, 25, '2025-03-20 18:52:08', '2025-03-20 18:52:08'),
	(7, 'Patience Solomon', 'vohusybol@mailinator.com', 'Officia est nesciunt', NULL, 25, '2025-03-20 18:52:35', '2025-03-20 18:52:35'),
	(8, 'Melyssa Goodman', 'silirami@mailinator.com', 'Earum culpa officiis quas consectetur omnis aperiam voluptatem Voluptatibus soluta voluptas vitae', NULL, 25, '2025-03-20 18:54:23', '2025-03-20 18:54:23'),
	(9, 'Melyssa Goodman', 'silirami@mailinator.com', 'Earum culpa officiis quas consectetur omnis aperiam voluptatem Voluptatibus soluta voluptas vitae', NULL, 25, '2025-03-20 18:54:46', '2025-03-20 18:54:46'),
	(10, 'Teagan Edwards', 'funynu@mailinator.com', 'Reprehenderit ea corrupti temporibus sit sunt et qui laborum Esse corrupti facere similique eum', NULL, 25, '2025-03-20 18:54:58', '2025-03-20 18:54:58'),
	(11, 'Teagan Edwards', 'funynu@mailinator.com', 'Reprehenderit ea corrupti temporibus sit sunt et qui laborum Esse corrupti facere similique eum', NULL, 25, '2025-03-20 18:56:09', '2025-03-20 18:56:09'),
	(12, 'Lillith Vaughn', 'doreg@mailinator.com', 'Esse commodi blanditiis irure tenetur soluta corporis non ipsum', NULL, 25, '2025-03-20 18:56:18', '2025-03-20 18:56:18'),
	(13, 'Kalia Buckley', 'helyb@mailinator.com', 'Quis laboris atque dolorem id dolor tenetur numquam qui illo elit qui reiciendis ipsum ipsam aut in', NULL, 25, '2025-03-20 18:56:40', '2025-03-20 18:56:40'),
	(14, 'Yvette Fisher', 'pakiqo@mailinator.com', 'Ut sunt rerum veniam dignissimos proident voluptas amet repudiandae', NULL, 25, '2025-03-20 18:57:01', '2025-03-20 18:57:01'),
	(15, 'Yvette Fisher', 'pakiqo@mailinator.com', 'Ut sunt rerum veniam dignissimos proident voluptas amet repudiandae', NULL, 25, '2025-03-20 18:57:44', '2025-03-20 18:57:44'),
	(16, 'Hanna Maddox', 'gimoliq@mailinator.com', 'Ut laboriosam adipisci qui velit aliquam adipisci est non debitis ea perspiciatis dolore adipisic', NULL, 21, '2025-03-20 19:12:20', '2025-03-20 19:12:20'),
	(17, 'Katell Le', 'fujepykih@mailinator.com', 'Voluptatem sunt ducimus dolor voluptas eius aut laudantium lorem nihil est aut sed id iste', NULL, 31, '2025-03-20 19:39:09', '2025-03-20 19:39:09'),
	(18, 'Colton Valentine', 'viwyxiful@mailinator.com', 'Magna adipisci molestiae eligendi obcaecati obcaecati ratione exercitation tenetur reiciendis quod a', NULL, 31, '2025-03-20 21:13:10', '2025-03-20 21:13:10'),
	(19, 'Bradley Rosa', 'lipulod@mailinator.com', 'Aut modi eum non eius', NULL, 31, '2025-04-04 00:53:22', '2025-04-04 00:53:22'),
	(20, 'Price Terrell', 'qutinuvah@mailinator.com', 'Voluptatem sint reiciendis quisquam incididunt in occaecat sapiente non sit duis ut animi enim', NULL, 20, '2025-04-04 00:54:02', '2025-04-04 00:54:02');

-- Dumping structure for table company.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;

-- Dumping structure for table company.features
CREATE TABLE IF NOT EXISTS `features` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `features_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company.features: ~4 rows (approximately)
DELETE FROM `features`;
INSERT INTO `features` (`id`, `title`, `title_ar`, `slug`, `description`, `description_ar`, `icon`, `created_at`, `updated_at`) VALUES
	(3, 'Brand & Identity11', 'شراء وبيع العملات المحلية والأجنبية', 'brand-identity11', 'Mauris lacinia venenatis dolor sit amet viverra. Integer malesuada nulla neque. Sed rutrum ligula eu', 'الشفافية، الأمان، السرعة والخدمة العملاء الممتازة. عملات الصرف المتاحة: الدولار الأمريكي، اليورو، الجنيه الاسترليني', 'ti-announcement', '2025-03-13 20:03:44', '2025-03-13 20:07:28'),
	(4, 'Marketing Planning', ' تحويل الأموال الدولية.', 'marketing-planning', 'Etiam non varius justo, vel tempor mi. Nulla facilisi. Fusce at tortor arcu. Suspendisse maximus ac', ' الين الياباني وغيرها من العملات الرئيسية تعاونت الشركة مع العديد من البنوك', 'ti-headphone', '2025-03-13 20:04:18', '2025-03-13 20:04:18'),
	(5, 'Business Planning', 'قديم خدمات تحويل العملات', 'business-planning', 'Mauris lacinia venenatis dolor sit amet viverra. Integer malesuada nulla neque. Sed rutrum ligula eu', 'المؤسسات المالية الكبرى لتوفير خدمات الصرافة عالية الجودة.', 'ti-timer', '2025-03-13 20:04:51', '2025-03-13 20:04:51'),
	(6, 'Email Marketing', 'التجاريين والشركات.', 'email-marketing', 'Suspendisse ac elit vitae est lacinia interdum eu sit amet mauris. Phasellus aliquam nisi sit amet l', ' ذات كوادر مميزة وفروع متعددة ولدينا وؤكلاء في جميع انحاء العالم نتميز بالتالي', 'ti-briefcase', '2025-03-13 20:05:16', '2025-03-13 20:05:16');

-- Dumping structure for table company.feedback
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `feedback_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company.feedback: ~13 rows (approximately)
DELETE FROM `feedback`;
INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
	(1, 'dasd', 'e@gmail.com', 'cczx', '2025-03-12 20:51:05', '2025-03-12 20:51:05'),
	(2, 'Yolanda Conway', 'sabenin@mailinator.com', 'Consectetur maiores', '2025-03-12 20:51:14', '2025-03-12 20:51:14'),
	(3, 'Duncan Berger', 'kynevo@mailinator.com', 'Consequatur amet ne', '2025-03-12 20:52:14', '2025-03-12 20:52:14'),
	(4, 'Zoe Strong', 'pykizep@mailinator.com', 'Est eos autem sed lo', '2025-03-12 20:52:54', '2025-03-12 20:52:54'),
	(5, 'Bevis Blake', 'gyjynekyc@mailinator.com', 'Maiores perferendis', '2025-03-12 20:53:32', '2025-03-12 20:53:32'),
	(6, 'ايمن الاوزري', 'zudyqecaga@mailinator.com', 'Culpa et ullam et as', '2025-03-12 20:56:29', '2025-03-12 20:56:29'),
	(7, 'Igor Glover', 'naho@mailinator.com', 'Ad error qui ab aliq', '2025-03-12 21:01:13', '2025-03-12 21:01:13'),
	(8, 'Sharon Daniel', 'kubosowin@mailinator.com', 'In earum debitis eiu', '2025-03-13 18:00:09', '2025-03-13 18:00:09'),
	(9, 'Edward Conway', 'ludana@mailinator.com', 'Totam aute ad qui om', '2025-03-13 18:06:31', '2025-03-13 18:06:31'),
	(10, 'Kiara Mcconnell', 'woxydewoky@mailinator.com', 'Eveniet veritatis rerum ut tempora excepteur unde blanditiis quam architecto voluptas laborum ipsa', '2025-03-20 22:04:42', '2025-03-20 22:04:42'),
	(11, 'Cameran Wilkerson', 'qemumafy@mailinator.com', 'Modi sunt doloremque debitis laboriosam consectetur laboris sint autem id accusamus veritatis dolo', '2025-03-31 21:22:06', '2025-03-31 21:22:06'),
	(12, 'Scarlett Simon', 'lyhutiw@mailinator.com', 'Eligendi pariatur Expedita dolor est doloribus voluptates maiores neque mollitia saepe numquam quam', '2025-04-04 01:10:40', '2025-04-04 01:10:40'),
	(13, 'Mariam Preston', 'mifasufoc@mailinator.com', 'Nulla dolor ut enim voluptates dolorem magni pariatur Qui voluptatem Maxime nihil voluptas odit qu', '2025-04-19 10:01:20', '2025-04-19 10:01:20');

-- Dumping structure for table company.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company.migrations: ~35 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2025_03_10_204816_create_services_table', 2),
	(7, '2025_03_11_210727_add_slug_to_services_table', 3),
	(8, '2025_03_11_214223_create_blogs_table', 3),
	(9, '2025_03_11_231031_create_projects_table', 4),
	(17, '2025_03_12_003749_create_category_blogs_table', 5),
	(18, '2025_03_12_004801_create_category_projects_table', 5),
	(19, '2025_03_12_010124_add_category_id_to_project_table', 6),
	(20, '2025_03_12_010203_add_category_id_to_blogs_table', 6),
	(21, '2025_03_12_215601_create_partners_table', 7),
	(22, '2025_03_12_223202_add_slug_to_partners_table', 8),
	(23, '2025_03_12_224717_create_certificates_table', 9),
	(24, '2025_03_12_225520_add_description_to_certificates_table', 10),
	(25, '2025_03_12_225609_add_description_to_certificates_table', 11),
	(26, '2025_03_12_233144_create_feedback_table', 12),
	(27, '2025_03_13_000539_add_category_id_to_blogs_table', 13),
	(28, '2025_03_13_001816_add_category_id_to_projects_table', 14),
	(29, '2025_03_13_221049_create_features_table', 15),
	(30, '2025_03_18_011527_add_name_arabic_to_category_blogs_table', 16),
	(31, '2025_03_18_011815_add_title_arabic_to_category_blogs_table', 17),
	(32, '2025_03_19_000052_add_title_arabic_to_category_projects_table', 18),
	(33, '2025_03_19_003438_add_title_arabic_and_description_arabbic_to_blogs_table', 19),
	(34, '2025_03_19_203236_add_title_arabic_and_description_arabbic_to_projects_table', 20),
	(35, '2025_03_19_212552_add_title_arabic_and_description_arabbic_to_services_table', 21),
	(36, '2025_03_19_212650_add_name_arabbic_to_partners_table', 21),
	(37, '2025_03_19_213607_add_title_arabic_and_description_arabbic_to_features_table', 22),
	(38, '2025_03_19_214444_add_name_arabic_and_job_arabic_and_description_arabbic_to_certificates_table', 23),
	(39, '2025_03_20_191048_create_advisors_table', 24),
	(40, '2025_03_20_191726_add_image_to_advisors_table', 25),
	(41, '2025_03_20_204431_create_comments_table', 26),
	(42, '2025_03_20_204711_add_blog_id_to_comments_table', 27),
	(44, '2025_03_20_205744_add_email_to_comments_table', 28);

-- Dumping structure for table company.partners
CREATE TABLE IF NOT EXISTS `partners` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company.partners: ~5 rows (approximately)
DELETE FROM `partners`;
INSERT INTO `partners` (`id`, `name`, `name_ar`, `slug`, `image`, `created_at`, `updated_at`) VALUES
	(3, 'Tad Dominguez', 'الماجد ', 'tad-dominguez', '1741819397-1.png', '2025-03-12 19:43:17', '2025-03-14 20:54:01'),
	(4, 'Wayne Sutton', 'الروضة', 'wayne-sutton', '1741819411-2.png', '2025-03-12 19:43:31', '2025-03-12 19:43:31'),
	(5, 'Delilah Mcclure', 'النجم', 'delilah-mcclure', '1741819423-3.png', '2025-03-12 19:43:43', '2025-03-12 19:43:43'),
	(6, 'Quon Ingram', 'السعيد', 'quon-ingram', '1741819454-4.png', '2025-03-12 19:44:14', '2025-03-12 19:44:14'),
	(7, 'Kelly Koc', 'الراحل', 'kelly-koc', '1741819465-5.png', '2025-03-12 19:44:25', '2025-03-12 19:44:47');

-- Dumping structure for table company.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company.password_reset_tokens: ~0 rows (approximately)
DELETE FROM `password_reset_tokens`;

-- Dumping structure for table company.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;

-- Dumping structure for table company.projects
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `projects_title_unique` (`title`),
  KEY `projects_category_id_foreign` (`category_id`),
  CONSTRAINT `projects_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category_projects` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company.projects: ~7 rows (approximately)
DELETE FROM `projects`;
INSERT INTO `projects` (`id`, `title`, `title_ar`, `slug`, `description`, `description_ar`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
	(7, 'Dolore deserunt eius', '. سواء كانوا بحاجة إلى مساعدة في اختيار القطع', 'dolore-deserunt-eius', 'Natus anim minus off', 'أو حل مشكلة محددة، يضمن الدعم الفوري والفعّال أن تظل تجربة العميل مميزة وراضية.', '1741810465-hero-slide2.png', 5, '2025-03-12 17:14:25', '2025-03-13 21:26:18'),
	(8, 'Consequatur voluptas', 'هل لديك أي أسئلة أو شكاوى أو حتى اقتراحات', 'consequatur-voluptas', 'Animi tempor volupt', 'نضمن لعملائنا استلام قطع الغيار عالية الجودة والموثوقية. يتم اختيار', '1741828517-4.jpg', 2, '2025-03-12 22:15:17', '2025-03-12 22:19:26'),
	(9, 'Nostrum dolore atque', 'خدمة موثوقة 112', 'nostrum-dolore-atque', 'Nobis proident prae', 'المكان الأمثل للعثور على قطع غيار السيارات التي تحتاجها بكل سهولة نحن هنا لنقدم لك تجربة تسوق فريدة وموفرة للوقت، حيث يمكنك البحث عن القطع التي تحتاجها وشرائها بكبسة زرالمكان الأمثل للعثور على قطع غيار السيارات التي تحتاجها بكل سهولة نحن هنا لنقدم لك تجربة تسوق فريدة وموفرة للوقت، حيث يمكنك البحث عن القطع التي تحتاجها وشرائها بكبسة زرالمكان الأمثل للعثور على قطع غيار السيارات التي تحتاجها بكل سهولة نحن هنا لنقدم لك تجربة تسوق فريدة وموفرة للوقت، حيث يمكنك البحث عن القطع التي تحتاجها وشرائها بكبسة زرالمكان الأمثل للعثور على قطع غيار السيارات التي تحتاجها بكل سهولة نحن هنا لنقدم لك تجربة تسوق فريدة وموفرة للوقت، حيث يمكنك البحث عن القطع التي تحتاجها وشرائها بكبسة زرالمكان الأمثل للعثور على قطع غيار السيارات التي تحتاجها بكل سهولة نحن هنا لنقدم لك تجربة تسوق فريدة وموفرة للوقت، حيث يمكنك البحث عن القطع التي تحتاجها وشرائها بكبسة زرالمكان الأمثل للعثور على قطع غيار السيارات التي تحتاجها بكل سهولة نحن هنا لنقدم لك تجربة تسوق فريدة وموفرة للوقت، حيث يمكنك البحث عن القطع التي تحتاجها وشرائها بكبسة زرالمكان الأمثل للعثور على قطع غيار السيارات التي تحتاجها بكل سهولة نحن هنا لنقدم لك تجربة تسوق فريدة وموفرة للوقت، حيث يمكنك البحث عن القطع التي تحتاجها وشرائها بكبسة زرالمكان الأمثل للعثور على قطع غيار السيارات التي تحتاجها بكل سهولة نحن هنا لنقدم لك تجربة تسوق فريدة وموفرة للوقت، حيث يمكنك البحث عن القطع التي تحتاجها وشرائها بكبسة زرالمكان الأمثل للعثور على قطع غيار السيارات التي تحتاجها بكل سهولة نحن هنا لنقدم لك تجربة تسوق فريدة وموفرة للوقت، حيث يمكنك البحث عن القطع التي تحتاجها وشرائها بكبسة زرالمكان الأمثل للعثور على قطع غيار السيارات التي تحتاجها بكل سهولة نحن هنا لنقدم لك تجربة تسوق فريدة وموفرة للوقت، حيث يمكنك البحث عن القطع التي تحتاجها وشرائها بكبسة زرالمكان الأمثل للعثور على قطع غيار السيارات التي تحتاجها بكل سهولة نحن هنا لنقدم لك تجربة تسوق فريدة وموفرة للوقت، حيث يمكنك البحث عن القطع التي تحتاجها وشرائها بكبسة زرالمكان الأمثل للعثور على قطع غيار السيارات التي تحتاجها بكل سهولة نحن هنا لنقدم لك تجربة تسوق فريدة وموفرة للوقت، حيث يمكنك البحث عن القطع التي تحتاجها وشرائها بكبسة زرالمكان الأمثل للعثور على قطع غيار السيارات التي تحتاجها بكل سهولة نحن هنا لنقدم لك تجربة تسوق فريدة وموفرة للوقت، حيث يمكنك البحث عن القطع التي تحتاجها وشرائها بكبسة زرالمكان الأمثل للعثور على قطع غيار السيارات التي تحتاجها بكل سهولة نحن هنا لنقدم لك تجربة تسوق فريدة وموفرة للوقت، حيث يمكنك البحث عن القطع التي تحتاجها وشرائها بكبسة زر', '1741912158-related-4.jpg', 2, '2025-03-13 21:29:19', '2025-03-19 21:35:22'),
	(10, 'Incididunt ratione a', 'دعم العملاء', 'incididunt-ratione-a', 'Vel id perferendis m', 'يتيح فريق دعم العملاء المتخصص التفاعل مع العملاء في جميع', '1741912597-related-1.jpg', 6, '2025-03-13 21:36:37', '2025-03-13 21:36:37'),
	(11, 'Ut non sunt minima e', ',نحن في خدمتك على مدار الساع', 'ut-non-sunt-minima-e', 'Laborum Vel expedit', ' لضمان راحتك وتلبية احتياجاتك', '1741912612-related-3.jpg', 5, '2025-03-13 21:36:52', '2025-03-13 21:36:52'),
	(12, 'Et consequat Quia q', 'التوصيل السريع', 'et-consequat-quia-q', 'Dolorum qui non ab c', 'نحن نفتخر بخدمة توصيل سريعة وفعّالة. بمجرد تحديد قطع الغيار التي', '1741912622-related-2.jpg', 1, '2025-03-13 21:37:02', '2025-03-13 21:37:02'),
	(13, 'Impedit aut sequi es', 'نفتخر بهذه المميزات المقدمة لكم', 'impedit-aut-sequi-es', 'Magni nulla incidunt', 'المكان الأمثل للعثور على قطع غيار السيارات التي تحتاجها بكل سهولة نحن هنا لنقدم لك تجربة تسوق فريدة وموفرة للوقت، حيث يمكنك البحث عن القطع التي تحتاجها وشرائها بكبسة زر', '1742418540-8.jpg', 6, '2025-03-19 18:09:00', '2025-04-04 00:23:06');

-- Dumping structure for table company.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company.services: ~3 rows (approximately)
DELETE FROM `services`;
INSERT INTO `services` (`id`, `title`, `title_ar`, `slug`, `description`, `description_ar`, `icon`, `image`, `created_at`, `updated_at`) VALUES
	(32, 'Autem veniam veniam', 'تحويل الأموال الدولية', 'autem-veniam-veniam', 'Esse velit dolor sit', 'توفر خدمات تحويل الأموال الدولية، والتي تسمح لك بنقل الأموال بأمان وفي غضون فترة زمنية قصيرة.', 'Autem dolor recusand', '1741815911-blog3.png', '2025-03-12 18:45:11', '2025-03-12 18:45:11'),
	(33, 'Eum maxime ut odit l', 'البحث السهل', 'eum-maxime-ut-odit-l', 'At consequatur quid', 'البحث السهل البحث السهل البحث السهل البحث السهل البحث السهل البحث السهل البحث السهل البحث السهل البحث السهل البحث السهل البحث السهل البحث السهل البحث السهل البحث السهل البحث السهل البحث السهل البحث السهل البحث السهل البحث السهل البحث السهل البحث السهل', 'Duis dolore lorem do', '1742426749-1.jpg', '2025-03-19 20:25:49', '2025-03-19 21:24:42'),
	(35, 'Aliqua Quis est ip', 'شراء وبيع العملات الأجنبية', 'aliqua-quis-est-ip', 'Aliqua Pariatur Ex', 'يمكنك شراء العملات الأجنبية للسفر أو لاستثماراتك الدولية، ويمكنك أيضًا بيع العملات الأجنبية عند عودتك من السفر', 'Dolore laudantium d', '1742429706-5.jpg', '2025-03-19 21:15:06', '2025-04-04 00:25:10');

-- Dumping structure for table company.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company.users: ~1 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(5, 'admin', 'admin@gmail.com', NULL, '$2y$10$1boKSS7upxwp9sh45ukc.uenZZbGq/KPGVsC0AAftcZoBZc/LajNO', NULL, '2025-04-30 09:07:27', '2025-04-30 09:07:28');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
