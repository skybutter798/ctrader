-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `activities`;
CREATE TABLE `activities` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `device` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `activities` (`id`, `user`, `ip_address`, `created_at`, `updated_at`, `device`, `browser`, `os`) VALUES
(16444,	818,	'197.210.53.99',	'2023-06-19 20:29:30',	'2023-06-19 20:29:30',	'Macintosh',	'Chrome',	'OS X'),
(16445,	818,	'197.210.53.99',	'2023-06-19 20:29:30',	'2023-06-19 20:29:30',	'Macintosh',	'Chrome',	'OS X');

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_2fa_expiry` datetime DEFAULT current_timestamp(),
  `enable_2fa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disbaled',
  `token_2fa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass_2fa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboard_style` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dark',
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acnt_type_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `admins` (`id`, `firstName`, `lastName`, `email`, `email_verified_at`, `password`, `token_2fa_expiry`, `enable_2fa`, `token_2fa`, `pass_2fa`, `phone`, `dashboard_style`, `remember_token`, `password_token`, `acnt_type_active`, `status`, `type`, `created_at`, `updated_at`) VALUES
(3,	'New',	'Admin',	'admin@happ.com',	NULL,	'$2y$10$PGsUAafPq.Ova8IGfaQ4I.1BO7uu1EMCaZnfVBE4iOiIADgGjc3Vq',	'2021-05-05 12:39:11',	'disbaled',	NULL,	NULL,	'2344',	'light',	NULL,	NULL,	'active',	'active',	'Super Admin',	'2021-04-06 03:23:58',	'2023-05-12 12:14:55'),
(13,	'Super',	'Admin',	'super@happ.com',	NULL,	'$2y$10$61eT6JLpMZjrRkjdCvUM.eLgBZ6mMB1yxvIk0wR9ome/M.QUO3zDG',	'2021-05-05 12:39:11',	'disbaled',	NULL,	NULL,	'2344',	'light',	NULL,	'1684427819',	'active',	'active',	'Super Admin',	'2021-04-06 03:23:58',	'2023-05-23 11:42:41');

DROP TABLE IF EXISTS `agents`;
CREATE TABLE `agents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_refered` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total_activated` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `earnings` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `assets`;
CREATE TABLE `assets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `autologin_tokens`;
CREATE TABLE `autologin_tokens` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `autologin_tokens_token_unique` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `bnc_transactions`;
CREATE TABLE `bnc_transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `prepay_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_id` bigint(20) unsigned DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `contents`;
CREATE TABLE `contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `contents` (`id`, `ref_key`, `title`, `description`, `created_at`, `updated_at`) VALUES
(5,	'SMsJr1',	'What our Customer says!',	'Don\'t take our word for it, here\'s what some of our clients have to say about us',	'2020-08-22 11:13:00',	'2021-10-27 09:59:35'),
(11,	'anvs8c',	'About Us',	'About us header',	'2020-08-22 11:32:29',	'2021-10-27 10:21:22'),
(12,	'epJ4LI',	'Who we are',	'online trade \r\n                            is a solution for creating an investment management platform. It is suited for\r\n                            hedge or mutual fund managers and also Forex, stocks, bonds and cryptocurrency traders who\r\n                            are looking at runing pool trading system. Onlinetrader simplifies the investment,\r\n                            monitoring and management process. With a secure and compelling mobile-first design,\r\n                            together with a default front-end design, it takes few minutes to setup your own investment\r\n                            management or pool trading platform.',	'2020-08-22 11:33:32',	'2023-01-29 03:29:07'),
(13,	'5hbB6X',	'Get Started',	'How to get started ?',	'2020-08-22 11:33:55',	'2021-10-27 10:25:09'),
(14,	'Zrhm3I',	'Create an Account',	'Create an account with us using your preffered email/username',	'2020-08-22 11:34:11',	'2021-10-27 10:25:29'),
(15,	'yTKhlt',	'Make a Deposit',	'Make A deposit with any of your preffered currency',	'2020-08-22 11:34:26',	'2021-10-27 10:25:52'),
(16,	'u0Ervr',	'Start Trading/Investing',	'Start trading with Indices commodities e.tc',	'2020-08-22 11:34:56',	'2021-10-27 10:26:12'),
(23,	'vr6Xw0',	'Our Investment Packages',	'Choose how you want to invest with us',	'2020-08-22 11:37:43',	'2021-10-27 09:58:51'),
(30,	'52GPRA',	'Address',	'New York',	'2020-08-22 11:40:19',	'2023-02-20 18:43:05'),
(31,	'0EXbji',	'Phone Number',	'+234 95446',	'2020-08-22 11:40:36',	'2022-12-13 02:28:51'),
(32,	'HLgyaQ',	'Email',	'support@mywebsite.com',	'2020-08-22 11:41:14',	'2020-08-22 12:23:55'),
(35,	'Mnag31',	'The Better Way to Trade & Invest',	'Online Trade helps over 2 million customers achieve their financial goals by helping them trade and invest with ease',	'2021-10-27 09:42:23',	'2022-11-10 18:42:38'),
(36,	'rXJ7JQ',	'Trade Invest stock, and Bond',	'Home page text',	'2021-10-27 09:45:17',	'2021-10-27 09:45:17'),
(37,	'J23T0Y',	'Security Comes First',	'Security Comes first',	'2021-10-27 09:53:15',	'2021-10-27 09:54:52'),
(38,	'9HOR1z',	'Security',	'Online Trade uses the highest levels of Internet Security, and it is secured by 256 bits SSL security encryption to ensure that your information is completely protected from fraud.',	'2021-10-27 09:56:13',	'2021-10-27 09:56:13'),
(39,	'7DH2G9',	'Two Factor Auth',	'Two-factor authentication (2FA) by default on all Online Trade accounts, to securely protect you from unauthorised access and impersonation.',	'2021-10-27 09:56:26',	'2021-10-27 09:56:26'),
(40,	'5Vg32I',	'Explore Our Services',	'It’s our mission to provide you with a delightful and a successful trading experience!',	'2021-10-27 09:56:38',	'2021-10-27 09:56:38'),
(41,	'Vg6Gy7',	'Powerful Trading Platforms',	'Online Trade offers multiple platform options to cover the needs of each type of trader and investors .',	'2021-10-27 09:56:53',	'2021-10-27 09:56:53'),
(42,	'1Sx1dl',	'High leverage',	'Chance to magnify your investment and really win big with super-low spreads to further up your profits',	'2021-10-27 09:57:06',	'2021-10-27 09:57:06'),
(43,	'YYqKx3',	'Fast execution',	'Super-fast trading software, so you never suffer slippage.',	'2021-10-27 09:57:20',	'2021-10-27 09:57:20'),
(44,	'yGg8xI',	'Ultimate Security',	'With advanced security systems, we keep your account always protected.',	'2021-10-27 09:57:35',	'2021-10-27 09:57:35'),
(45,	'xEWMho',	'24/7 live chat Support',	'Connect with our 24/7 support and Market Analyst on-demand.',	'2021-10-27 09:57:48',	'2021-10-27 09:57:48'),
(46,	'9SOtK1',	'Always on the go? Mobile trading is easier than ever with Online Trade!',	'Get your hands on our customized Trading Platform with the comfort of freely trading on the move, to experience truly liberating trading sessions.',	'2021-10-27 09:58:05',	'2021-10-27 09:58:05'),
(47,	'wOS1ve',	'Cryptocurrency',	'Trade and invest Top Cryptocurrencyggg',	'2021-10-27 09:59:07',	'2023-04-01 10:32:04'),
(48,	'wuZlis',	'Hello!, How can we help you?',	'Hello!, How can we help you?',	'2021-10-27 10:32:12',	'2021-10-27 10:32:12'),
(49,	'1TYkw0',	'Find the help you need',	'Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.',	'2021-10-27 10:32:33',	'2021-10-27 10:32:33'),
(50,	'rK6Yhn',	'FAQs',	'Due to its widespread use as filler text for layouts, non-readability is of great importance.',	'2021-10-27 10:32:49',	'2021-10-27 10:32:49'),
(51,	'HBHBLo',	'Guides / Support',	'Due to its widespread use as filler text for layouts, non-readability is of great importance.',	'2021-10-27 10:33:03',	'2021-10-27 10:33:03'),
(52,	'rCTDQh',	'Support Request',	'Due to its widespread use as filler text for layouts, non-readability is of great importance.',	'2021-10-27 10:33:14',	'2021-10-27 10:33:14'),
(53,	'kMsswR',	'Get Started',	'Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.',	'2021-10-27 10:33:28',	'2021-10-27 10:33:28'),
(54,	'EOUU7R',	'Get in Touch !',	'This is required when, for text is not yet available.',	'2021-10-27 10:33:56',	'2021-10-27 10:33:56'),
(56,	'ROu4q6',	'Contact Us',	'Contact Us',	'2021-10-27 10:47:41',	'2023-01-03 01:45:57');

DROP TABLE IF EXISTS `cp_transactions`;
CREATE TABLE `cp_transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `txn_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Item_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_paid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_tele_id` int(11) DEFAULT NULL,
  `amount1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_p_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_pv_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_m_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_ipn_secret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_debug_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `cp_transactions` (`id`, `txn_id`, `item_name`, `Item_number`, `amount_paid`, `user_plan`, `user_id`, `user_tele_id`, `amount1`, `amount2`, `currency1`, `currency2`, `status`, `status_text`, `type`, `cp_p_key`, `cp_pv_key`, `cp_m_id`, `cp_ipn_secret`, `cp_debug_email`, `created_at`, `updated_at`) VALUES
(1,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'4714357675ft087a552138e6jkh766gtr549da4f1e',	'cEhg654rdfder348749D856d93fkjkhutyb876gt45417b69',	'26d76435gfgre43g76h777a5',	'2456460663',	'youremail@gmail.com',	'2021-03-11 07:46:45',	'2023-06-19 18:01:19');

DROP TABLE IF EXISTS `crypto_accounts`;
CREATE TABLE `crypto_accounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `btc` float DEFAULT NULL,
  `eth` float DEFAULT NULL,
  `ltc` float DEFAULT NULL,
  `xrp` float DEFAULT NULL,
  `link` float DEFAULT NULL,
  `bnb` float DEFAULT NULL,
  `aave` float DEFAULT NULL,
  `usdt` float DEFAULT NULL,
  `xlm` float DEFAULT NULL,
  `bch` float DEFAULT NULL,
  `ada` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `crypto_accounts` (`id`, `user_id`, `btc`, `eth`, `ltc`, `xrp`, `link`, `bnb`, `aave`, `usdt`, `xlm`, `bch`, `ada`, `created_at`, `updated_at`) VALUES
(661,	818,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2023-06-19 20:34:31',	'2023-06-19 20:34:31');

DROP TABLE IF EXISTS `crypto_records`;
CREATE TABLE `crypto_records` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double(8,2) DEFAULT NULL,
  `quantity` decimal(16,8) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `deposits`;
CREATE TABLE `deposits` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `txn_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proof` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `faqs`;
CREATE TABLE `faqs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ref_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `images` (`id`, `ref_key`, `title`, `description`, `img_path`, `created_at`, `updated_at`) VALUES
(8,	'DPd1Kn',	'Testimonial 1',	'Testimonial 1',	'photos/SfPzjexhoRf1e9VYQ3DtBpCj4cjujXG8GzHWiYT2.png',	'2020-08-23 12:24:52',	'2023-02-02 07:37:25'),
(9,	'ZqCgDz',	'Testimonial 2',	'Testimonial 2',	'photos/2O5A1PaPNEG6J92eybtWfyawbw8KYvCneD5VCZVM.jpg',	'2020-08-23 12:25:07',	'2022-02-17 10:01:28'),
(14,	'b9158B',	'Home Image',	'The image at the home page',	'photos/FQJ8Dwst7DiJ05zHT7rXeM9TaZOLYuYiksCMyaRI.jpg',	'2021-10-27 09:48:42',	'2023-06-02 20:32:09'),
(15,	'iAwfKe',	'About image',	'The image in the about page',	'photos/VYDXpZznR3RsuezQf1SQRcPwHOHZiiuHk2af7K16.jpg',	'2021-10-27 10:22:20',	'2023-06-02 20:24:33'),
(16,	'9ZFr6b',	'555',	'4444',	'photos/2ejspLEKSo3gI1k0Gv31Zz0gztIAmgCilzaLxx7y.png',	'2023-05-16 15:38:34',	'2023-05-16 15:38:34');

DROP TABLE IF EXISTS `ipaddresses`;
CREATE TABLE `ipaddresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ipaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `ipaddresses` (`id`, `ipaddress`, `created_at`, `updated_at`) VALUES
(6,	'21332123213213',	'2023-04-01 13:32:47',	'2023-04-01 13:32:47');

DROP TABLE IF EXISTS `kycs`;
CREATE TABLE `kycs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frontimg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `backimg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kycs_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2014_10_12_200000_add_two_factor_columns_to_users_table',	1),
(4,	'2019_08_19_000000_create_failed_jobs_table',	1),
(5,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(6,	'2021_03_09_142220_create_sessions_table',	1),
(7,	'2021_03_10_082445_create_admins_table',	2),
(8,	'2021_03_10_082519_create_agents_table',	2),
(9,	'2021_03_10_082715_create_assets_table',	2),
(10,	'2021_03_10_082817_create_contents_table',	2),
(11,	'2021_03_10_083110_create_cp_transactions_table',	2),
(12,	'2021_03_10_083324_create_deposits_table',	2),
(13,	'2021_03_10_083400_create_faqs_table',	2),
(14,	'2021_03_10_083510_create_images_table',	2),
(15,	'2021_03_10_083557_create_mt4_details_table',	2),
(16,	'2021_03_10_083627_create_notifications_table',	2),
(17,	'2021_03_10_083824_create_plans_table',	2),
(18,	'2021_03_10_083850_create_settings_table',	2),
(19,	'2021_03_10_083936_create_testimonies_table',	2),
(20,	'2021_03_10_084009_create_tp__transactions_table',	2),
(21,	'2021_03_10_084031_create_upgrades_table',	2),
(22,	'2021_03_10_084120_create_userlogs_table',	2),
(23,	'2021_03_10_084140_create_user_plans_table',	2),
(24,	'2021_03_10_084235_create_wdmethods_table',	2),
(25,	'2021_03_10_084300_create_withdrawals_table',	2),
(26,	'2021_04_06_083043_create_tasks_table',	3),
(27,	'2021_04_23_110006_create_exchanges_table',	4),
(28,	'2021_04_23_114622_create_coin_transactions_table',	5),
(29,	'2021_04_27_080945_create_currencies_table',	6),
(30,	'2021_04_29_110349_create_c_withdrawals_table',	7),
(31,	'2021_10_07_112653_create_ipaddresses_table',	8),
(32,	'2021_10_27_114829_create_terms_privacies_table',	9),
(33,	'2021_10_31_131124_create_crypto_accounts_table',	10),
(34,	'2021_10_31_132849_create_settings_conts_table',	11),
(35,	'2022_01_24_123921_create_copy_trade_accounts_table',	12),
(36,	'2022_02_03_131113_create_tasks_table',	13),
(37,	'2022_03_16_135903_create_adverts_table',	14),
(38,	'2022_03_17_114728_create_orders_p2ps_table',	15),
(39,	'2022_05_23_215802_create_crypto_records_table',	16),
(40,	'2022_06_13_220336_create_kycs_table',	17),
(41,	'2022_06_23_030303_create_bnc_transactions_table',	18),
(42,	'2022_09_02_074542_create_courses_table',	19),
(43,	'2022_09_02_074626_create_course_lessons_table',	20),
(44,	'2022_09_02_074608_create_course_categories_table',	21),
(45,	'2022_09_06_165000_create_user_courses_table',	22),
(46,	'2014_01_28_232217_create_autologin_tokens_table',	23),
(47,	'2014_02_07_004118_add_unique_index_to_autologin_tokens_table',	24),
(48,	'2014_03_02_162640_add_count_to_autologin_tokens_table',	25),
(53,	'2022_09_19_142955_create_master_accounts_table',	26),
(54,	'2022_09_29_153351_create_signal_tbs_table',	27),
(55,	'2022_09_29_175703_create_signal_subscribers_table',	28);

DROP TABLE IF EXISTS `mt4_details`;
CREATE TABLE `mt4_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) DEFAULT NULL,
  `mt4_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mt4_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mt_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leverage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `options` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `reminded_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `mt4_details` (`id`, `client_id`, `mt4_id`, `mt4_password`, `mt_type`, `account_name`, `account_type`, `currency`, `leverage`, `server`, `options`, `duration`, `status`, `start_date`, `end_date`, `reminded_at`, `created_at`, `updated_at`) VALUES
(1,	818,	'7865567',	'nsg%gd761',	'MT5',	'test trade',	'Standard',	'USD',	'1:100',	'exness-real',	NULL,	'Monthly',	'pending',	NULL,	NULL,	NULL,	'2023-06-19 19:22:51',	'2023-06-19 19:22:51');

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) unsigned NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `paystacks`;
CREATE TABLE `paystacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `paystack_public_key` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paystack_secret_key` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paystack_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paystack_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `paystacks` (`id`, `created_at`, `updated_at`, `paystack_public_key`, `paystack_secret_key`, `paystack_url`, `paystack_email`) VALUES
(1,	'2023-06-19 17:47:54',	'2023-06-19 18:02:33',	'Nxncnmnhjjnssnbsbnsns',	'Xbnndhjhkagsgshshhh',	'https://api.paystack.co',	'hytg6g@gmail.com');

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `plans`;
CREATE TABLE `plans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expected_return` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `increment_interval` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `increment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `increment_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('NWPyDgfdswdWQfbY4tQwL1FlSLHCe8FJqNNfF5lT',	NULL,	'197.210.76.188',	'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',	'YTozOntzOjY6Il90b2tlbiI7czo0MDoidTlsNTRvN1RldmhJczJCa1pJT2VmRWM5anJGekxPcGk1elEybGJRbCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vYnVpbGQuZ2V0b25saW5ldHJhZGVyLmNvbSI7fX0=',	1687207079),
('tbKehRaftQ1M74WXTYLkpjqP0CL1tfrciyHV6sym',	NULL,	'77.111.247.58',	'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36 OPR/99.0.0.0',	'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidm9wN1BYc0V6eGlad0RxN3VhMDBGUjlOTUdvMlh4QUFZTm82REVEcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjY6Imh0dHBzOi8vYnVpbGQuZ2V0b25saW5ldHJhZGVyLmNvbS9hZG1pbi9kYXNoYm9hcmQvdHJhZGluZy1zZXR0aW5ncyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTM7fQ==',	1687205747);

DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capt_secret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capt_sitekey` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_s_k` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_p_k` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pp_cs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pp_ci` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trade_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_translate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weekend_trade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_server` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'sendmail',
  `emailfrom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailfromname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_host` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_port` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_encrypt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_secret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_redirect` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signup_bonus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_bonus` int(11) DEFAULT NULL,
  `tawk_to` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_2fa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `enable_kyc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `enable_kyc_registration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_with` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_verification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `enable_social_login` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `withdrawal_option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'auto',
  `deposit_option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auto_merchant_option` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Coinpayment',
  `dashboard_option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_annoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscription_service` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `captcha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_capital` tinyint(1) DEFAULT 1,
  `should_cancel_plan` tinyint(1) DEFAULT 1,
  `commission_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monthlyfee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quarterlyfee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yearlyfee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newupdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modules` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`modules`)),
  `redirect_url` varchar(192) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_theme` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'purpose.css',
  `referral_proffit_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deposit',
  `theme` varchar(192) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit_card_provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Paystack',
  `deduction_option` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'userRequest',
  `welcome_message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `install_type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_key` varchar(192) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `settings` (`id`, `site_name`, `description`, `currency`, `s_currency`, `capt_secret`, `capt_sitekey`, `payment_mode`, `location`, `s_s_k`, `s_p_k`, `pp_cs`, `pp_ci`, `keywords`, `site_title`, `site_address`, `logo`, `favicon`, `trade_mode`, `google_translate`, `weekend_trade`, `contact_email`, `timezone`, `mail_server`, `emailfrom`, `emailfromname`, `smtp_host`, `smtp_port`, `smtp_encrypt`, `smtp_user`, `smtp_password`, `google_secret`, `google_id`, `google_redirect`, `referral_commission`, `referral_commission1`, `referral_commission2`, `referral_commission3`, `referral_commission4`, `referral_commission5`, `signup_bonus`, `deposit_bonus`, `tawk_to`, `enable_2fa`, `enable_kyc`, `enable_kyc_registration`, `enable_with`, `enable_verification`, `enable_social_login`, `withdrawal_option`, `deposit_option`, `auto_merchant_option`, `dashboard_option`, `enable_annoc`, `subscription_service`, `captcha`, `return_capital`, `should_cancel_plan`, `commission_type`, `commission_fee`, `monthlyfee`, `quarterlyfee`, `yearlyfee`, `newupdate`, `modules`, `redirect_url`, `website_theme`, `referral_proffit_from`, `theme`, `credit_card_provider`, `deduction_option`, `welcome_message`, `install_type`, `merchant_key`, `created_at`, `updated_at`) VALUES
(1,	'yourSiteName',	NULL,	'$',	'USD',	'6Leer20jAAAAAKDNcsXxJDUHNY9swJvDyA9DZeo3',	'6Leer20jAAAAANjbqEMMSHP8cncYF7okDzKEoL7l',	'123567',	NULL,	'sk_test_51JP8qpSBWKZBQRLPWqHkFM8oqFEhjh6g3S8byZF73X0UycxijVyfebcyu6OVoZ8eeAelr3js3ADYIGU22Dk2Vo00kGkdE9xP',	'pk_test_51JP8qpSBWKZBQRLPUIfQVYfUGly6jhj6hbajKy1nVM9Rvly3v3hQLvXnRqrWCrnUNz1qPQHNSxE689tSAoL00B1iOTNfd',	'jijdjkdkdk',	'iidjdjdj',	'online trade, forex, cfd',	'Welcome to yourwebsite name',	'https://yourwebsiteur.tld',	'photos/Jo4SZ9GGvtk7CDprfhKVphNeTxsA5G7J0hx5mRFZ.png',	'photos/bI5AwoIzm1foshdpb21VVPNIxTRc0oYjt4GGs1uG.png',	'off',	'on',	'off',	'support@yoursite.com',	'America/New_York',	'sendmail',	'Contact@mywebsite.com',	'yourwebsite',	'smtp.mailtrap.io',	'2525',	'tls',	'd86c1847af22b9',	'a8737251d23474',	NULL,	NULL,	NULL,	'7',	'3',	'2',	'1',	'1',	'1',	NULL,	5,	'',	'no',	'yes',	'no',	NULL,	'false',	'yes',	'auto',	'auto',	'Coinpayment',	'dark',	'on',	'on',	'false',	1,	1,	NULL,	NULL,	'5',	'10',	'15',	NULL,	'{\"signal\":true,\"cryptoswap\":true,\"investment\":true,\"membership\":true,\"subscription\":true}',	NULL,	'purpose.css',	'deposit',	'purposeTheme',	'Stripe',	'userRequest',	'Welcome to OnlineTraderpro',	'Sub-Domain',	NULL,	NULL,	'2023-06-19 20:36:26');

DROP TABLE IF EXISTS `settings_conts`;
CREATE TABLE `settings_conts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `use_crypto_feature` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `fee` float DEFAULT 0,
  `btc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `eth` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `ltc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `link` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `bnb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `aave` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT 'enabled',
  `usdt` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `bch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `xlm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `xrp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `ada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `currency_rate` int(11) DEFAULT NULL,
  `minamt` int(11) DEFAULT NULL,
  `use_transfer` tinyint(1) DEFAULT 1,
  `min_transfer` int(11) DEFAULT 0,
  `purchase_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'xxxxxx',
  `old_version` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '5',
  `transfer_charges` int(11) DEFAULT 0,
  `bnc_secret_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bnc_api_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flw_secret_hash` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flw_secret_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flw_public_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_currency` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission_p2p` float DEFAULT NULL,
  `enable_p2p` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_currency` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chat_id` varchar(192) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram_bot_api` varchar(192) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram_link` varchar(192) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signal_yearly_fee` varchar(192) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signal_quartly_fee` varchar(192) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signal_monthly_fee` varchar(192) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `webhook` varchar(192) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `settings_conts` (`id`, `use_crypto_feature`, `fee`, `btc`, `eth`, `ltc`, `link`, `bnb`, `aave`, `usdt`, `bch`, `xlm`, `xrp`, `ada`, `currency_rate`, `minamt`, `use_transfer`, `min_transfer`, `purchase_code`, `old_version`, `transfer_charges`, `bnc_secret_key`, `bnc_api_key`, `flw_secret_hash`, `flw_secret_key`, `flw_public_key`, `local_currency`, `commission_p2p`, `enable_p2p`, `base_currency`, `chat_id`, `telegram_bot_api`, `telegram_link`, `signal_yearly_fee`, `signal_quartly_fee`, `signal_monthly_fee`, `webhook`, `created_at`, `updated_at`) VALUES
(1,	'false',	1,	'enabled',	'enabled',	'enabled',	'enabled',	'enabled',	'enabled',	'enabled',	'enabled',	'enabled',	'enabled',	'enabled',	NULL,	5,	0,	50,	NULL,	'5',	2,	'jhjbhgtujkjkjuom5qzlgaf0g',	'xu2sxamvpp6f7ojjtyhjgq9ghq5alkjk3phem',	'-bendnnhffdbdjd',	'-hhhdnndns,jkdbbdbsbb',	'-uhdhdbdhjjanansnsnbddd',	'NGN',	0,	'false',	NULL,	'-1001828101632',	'46f20e8a-0d94-4515-b668-7fa880277656',	NULL,	'200',	'100',	'50',	'https://onlinetrader.sharedwithexpose.com/get-started',	'2021-10-31 08:32:30',	'2023-06-19 20:36:26');

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `terms_privacies`;
CREATE TABLE `terms_privacies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `useterms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `terms_privacies` (`id`, `description`, `useterms`, `created_at`, `updated_at`) VALUES
(1,	'<p><strong>Our Commitment to You:</strong></p>\r\n\r\n<p>Thank you for showing interest in our service. In order for us to provide you with our service, we are required to collect and process certain personal data about you and your activity.</p>\r\n\r\n<p>By entrusting us with your personal data, we would like to assure you of our commitment to keep such information private and to operate in accordance with all regulatory laws and all EU data protection laws, including General Data Protection Regulation (GDPR) 679/2016 (EU).</p>\r\n\r\n<p>We have taken measurable steps to protect the confidentiality, security and integrity of this data. We encourage you to review the following information carefully.</p>\r\n\r\n<p><strong>Grounds for data collection:</strong></p>\r\n\r\n<p>Processing of your personal information (meaning, any data which may potentially allow your identification with reasonable means; hereinafter &ldquo;Personal Data&rdquo;) is necessary for the performance of our contractual obligations towards you and providing you with our services, to protect our legitimate interests and for compliance with legal and financial regulatory obligations to which we are subject.</p>\r\n\r\n<p>When you use our services, you consent to the collection, storage, use, disclosure and other uses of your Personal Data as described in this Privacy Policy.</p>\r\n\r\n<p><strong>How do we receive data about you?</strong></p>\r\n\r\n<p>We receive your Personal Data from various sources:</p>\r\n\r\n<ol>\r\n	<li>When you voluntarily provide us with your personal details in order to create an account (for example, your name and email address)</li>\r\n	<li>When you use or access our site and services, in connection with your use of our services (for example, your financial transactions)</li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p><strong>What type of data we collect?</strong></p>\r\n\r\n<p>In order to open an account, and in order to provide you with our services we will need you to collect the following data:</p>\r\n\r\n<p><strong>Personal Data<br />\r\nWe collect the following Personal Data about you:</strong></p>\r\n\r\n<ul>\r\n	<li><em>Registration data</em>&nbsp;&ndash; your name, email address, phone number, occupation, country of residence, and your age (in order to verify you are over 18 years of age and eligible to participate in our service).</li>\r\n	<li><em>Voluntary data</em>&nbsp;&ndash; when you communicate with us (for example when you send us an email or use a &ldquo;contact us&rdquo; form on our site) we collect the personal data you provided us with.</li>\r\n	<li><em>Financial data</em>&nbsp;&ndash; by its nature, your use of our services includes financial transactions, thus requiring us to obtain your financial details, which includes, but not limited to your payment details (such as bank account details and financial transactions performed through our services).</li>\r\n	<li><em>Technical data</em>&nbsp;&ndash; we collect certain technical data that is automatically recorded when you use our services, such as your IP address, MAC address, device approximate location</li>\r\n	<li>Non Personal Data</li>\r\n</ul>\r\n\r\n<p>We record and collect data from or about your device (for example your computer or your mobile device) when you access our services and visit our site. This includes, but not limited to: your login credentials, UDID, Google advertising ID, IDFA, cookie identifiers, and may include other identifiers such your operating system version, browser type, language preferences, time zone, referring domains and the duration of your visits. This will facilitate our ability to improve our service and personalize your experience with us.<br />\r\nIf we combine Personal Data with non-Personal Data about you, the combined data will be treated as Personal Data for as long as it remains combined.</p>\r\n\r\n<p><strong>Tracking Technologies</strong></p>\r\n\r\n<p>When you visit or access our services we use (and authorize 3rd parties to use) pixels, cookies, events and other technologies (&ldquo;Tracking Technologies&ldquo;). Those allow us to automatically collect data about you, your device and your online behavior, in order to enhance your navigation in our services, improve our site&rsquo;s performance, perform analytics and customize your experience on it. In addition, we may merge data we have with data collected through said tracking technologies with data we may obtain from other sources and, as a result, such data may become Personal Data.<br />\r\nCookie Policy page.</p>\r\n\r\n<p><strong>How do we use the data We collect?</strong></p>\r\n\r\n<ul>\r\n	<li>Provision of service &ndash; we will use your Personal Data you provide us for the provision and improvement of our services to you.</li>\r\n	<li>Marketing purposes &ndash; we will use your Personal Data (such as your email address or phone number). For example, by subscribing to our newsletter you will receive tips and announcements straight to your email account. We may also send you promotional material concerning our services or our partners&rsquo; services (which we believe may interest you), including but not limited to, by building an automated profile based on your Personal Data, for marketing purposes. You may choose not to receive our promotional or marketing emails (all or any part thereof) by clicking on the &ldquo;unsubscribe&rdquo; link in the emails that you receive from us. Please note that even if you unsubscribe from our newsletter, we may continue to send you service-related updates and notifications or reply to your queries and feedback you provide us.</li>\r\n	<li>Opt-out of receiving marketing materials &ndash; If you do not want us to use or share your personal data for marketing purposes, you may opt-out in accordance with this &ldquo;Opt-out&rdquo; section. Please note that even if you opt-out, we may still use and share your personal information with third parties for non-marketing purposes (for example to fulfill your requests, communicate with you and respond to your inquiries, etc.). In such cases, the companies with whom we share your personal data are authorized to use your Personal Data only as necessary to provide these non-marketing services.</li>\r\n	<li>Analytics, surveys and research &ndash; we are always trying to improve our services and think of new and exciting features for our users. From time to time, we may conduct surveys or test features, and analyze the information we have to develop, evaluate and improve these features.</li>\r\n	<li>Protecting our interests &ndash; we use your Personal Data when we believe it&rsquo;s necessary in order to take precautions against liabilities, investigate and defend ourselves against any third-party claims or allegations, investigate and protect ourselves from fraud, protect the security or integrity of our services and protect the rights and property of the company, its users and/or partners.</li>\r\n	<li>Enforcing of policies &ndash; we use your Personal Data in order to enforce our policies, including but limited to our Terms &amp; Conditions.</li>\r\n	<li>Compliance with legal and regulatory requirements &ndash; we also use your Personal Data to investigate violations and prevent money laundering and perform due-diligence checks, and as required by law, regulation or other governmental authority, or to comply with a subpoena or similar legal process.</li>\r\n</ul>\r\n\r\n<p><strong>With whom do we share your Personal Data</strong></p>\r\n\r\n<ul>\r\n	<li>Internal concerned parties &ndash; we share your data with companies in our group, as well as our employees limited to those employees or partners who need to know the information in order to provide you with our services.</li>\r\n	<li>Financial providers and payment processors &ndash; we share your financial data about you for purposes of accepting deposits or performing risk analysis.</li>\r\n	<li>Business partners &ndash; we share your data with business partners, such as storage providers and analytics providers who help us provide you with our service.</li>\r\n	<li>Legal and regulatory entities &ndash; we may disclose any data in case we believe, in good faith, that such disclosure is necessary in order to enforce our Terms &amp; Conditions take precautions against liabilities, investigate and defend ourselves against any third party claims or allegations, protect the security or integrity of the site and our servers and protect the rights and property, our users and/or partners. We may also disclose your personal data where requested any other regulatory authority having control or jurisdiction over us, you or our associates or in the territories we have clients or providers, as a broker.</li>\r\n	<li>Merger and acquisitions &ndash; we may share your data if we enter into a business transaction such as a merger, acquisition, reorganization, bankruptcy, or sale of some or all of our assets. Any party that acquires our assets as part of such a transaction may continue to use your data in accordance with the terms of this Privacy Policy.</li>\r\n</ul>\r\n\r\n<p><strong>Transfer of data outside the EEA</strong></p>\r\n\r\n<p>Please note that some data recipients may be located outside the EEA. In such cases, we will transfer your data only to such countries as approved by the European Commission as providing an adequate level of data protection or enter into legal agreements ensuring an adequate level of data protection.</p>\r\n\r\n<p><strong>How we protect your data</strong></p>\r\n\r\n<p>We have implemented administrative, technical, and physical safeguards to help prevent unauthorized access, use, or disclosure of your personal data. Your data is stored on secure servers and isn&rsquo;t publicly available. We limit access of your data only to those employees or partners that need to know the information in order to enable the carrying out of the agreement between us.</p>\r\n\r\n<p>You need to help us prevent unauthorized access to your account by protecting your password appropriately and limiting access to your account (for example, by signing off after you have finished accessing your account). You will be solely responsible for keeping your password confidential and for all use of your password and your account, including any unauthorized use.</p>\r\n\r\n<p>While we seek to protect your data to ensure that it is kept confidential, we cannot absolutely guarantee its security. You should be aware that there is always some risk involved in transmitting data over the internet. While we strive to protect your Personal Data, we cannot ensure or warrant the security and privacy of your personal Data or other content you transmit using the service, and you do so at your own risk.</p>\r\n\r\n<p><strong>Retention</strong></p>\r\n\r\n<p>We will retain your personal data for as long as necessary to provide our services, and as necessary to comply with our legal obligations, resolve disputes, and enforce our policies. Retention periods will be determined taking into account the type of data that is collected and the purpose for which it is collected, bearing in mind the requirements applicable to the situation and the need to destroy outdated, unused data at the earliest reasonable time. Under applicable regulations, we will keep records containing client personal data, trading information, account opening documents, communications and anything else as required by applicable laws and regulations.</p>\r\n\r\n<p><strong>User Rights</strong></p>\r\n\r\n<ol>\r\n	<li>Receive confirmation as to whether or not personal data concerning you is being processed, and access your stored personal data, together with supplementary data.</li>\r\n	<li>Receive a copy of personal data you directly volunteer to us in a structured, commonly used and machine-readable format.</li>\r\n	<li>Request rectification of your personal data that is in our control.</li>\r\n	<li>Request erasure of your personal data.</li>\r\n	<li>Object to the processing of personal data by us.</li>\r\n	<li>Request to restrict processing of your personal data by us.</li>\r\n</ol>\r\n\r\n<p>However, please note that these rights are not absolute, and may be subject to our own legitimate interests and regulatory requirements.</p>\r\n\r\n<p><strong>How to Contact us?</strong></p>\r\n\r\n<p>If you wish to exercise any of the aforementioned rights, or receive more information, please contact our General Data Protection Officer (&ldquo;GDPO&rdquo;) using the details provided below:</p>\r\n\r\n<p>Email: support@onlintrade.com</p>\r\n\r\n<p>Attn. GDPO Compliance Officer</p>\r\n\r\n<p>If you decide to terminate your account, you may do so by emailing us at support@onlintrade.com. If you terminate your account, please be aware that personal information that you have provided us may still be maintained for legal and regulatory reasons (as described above), but it will no longer be accessible via your account.</p>\r\n\r\n<p><strong>Updates to this Policy</strong></p>\r\n\r\n<p>This Privacy Policy is subject to changes from time to time, at our sole discretion. The most current version will always be posted on our website (as reflected in the &ldquo;Last Updated&rdquo; heading). You are advised to check for updates regularly. In the event of material changes, we will provide you with a notice. By continuing to access or use our services after any revisions become effective, you agree to be bound by the updated Privacy Policy.</p>',	'no',	'2020-12-14 04:39:57',	'2022-07-05 01:23:49');

DROP TABLE IF EXISTS `testimonies`;
CREATE TABLE `testimonies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ref_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `what_is_said` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `testimonies` (`id`, `ref_key`, `position`, `name`, `what_is_said`, `picture`, `created_at`, `updated_at`) VALUES
(4,	'OmGVEU',	NULL,	NULL,	NULL,	'photos/wUfpRaNA8gytjKtryYFilvkPLwbkTN8lHf6d5fKa.png',	'2023-01-03 01:45:00',	'2023-04-20 17:16:10'),
(5,	'yCpnAt',	NULL,	NULL,	NULL,	'photos/2ejspLEKSo3gI1k0Gv31Zz0gztIAmgCilzaLxx7y.png',	'2023-05-29 21:01:02',	'2023-05-29 21:01:02');

DROP TABLE IF EXISTS `tp__transactions`;
CREATE TABLE `tp__transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `plan` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_plan_id` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kyc_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `cstatus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userupdate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assign_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboard_style` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'light',
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swift_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acnt_type_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eth_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ltc_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usdt_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_bal` float DEFAULT NULL,
  `p2p_balance` float NOT NULL DEFAULT 0,
  `instructions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `roi` float DEFAULT NULL,
  `bonus` float DEFAULT NULL,
  `ref_bonus` float DEFAULT NULL,
  `signup_bonus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auto_trade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus_released` int(11) NOT NULL DEFAULT 0,
  `ref_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_verify` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entered_at` datetime DEFAULT NULL,
  `activated_at` datetime DEFAULT NULL,
  `last_growth` datetime DEFAULT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `trade_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'on',
  `act_session` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `withdrawotp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sendotpemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `sendroiemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `sendpromoemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `sendinvplanemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `kyc_id`, `name`, `email`, `username`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `dob`, `cstatus`, `userupdate`, `assign_to`, `address`, `country`, `phone`, `dashboard_style`, `bank_name`, `account_name`, `account_number`, `swift_code`, `acnt_type_active`, `btc_address`, `eth_address`, `ltc_address`, `usdt_address`, `plan`, `user_plan`, `account_bal`, `p2p_balance`, `instructions`, `roi`, `bonus`, `ref_bonus`, `signup_bonus`, `auto_trade`, `bonus_released`, `ref_by`, `ref_link`, `id_card`, `passport`, `account_verify`, `entered_at`, `activated_at`, `last_growth`, `status`, `trade_mode`, `act_session`, `remember_token`, `current_team_id`, `profile_photo_path`, `withdrawotp`, `sendotpemail`, `sendroiemail`, `sendpromoemail`, `sendinvplanemail`, `created_at`, `updated_at`) VALUES
(818,	NULL,	'test user',	'test1234@happ.com',	'test1234',	'2023-06-19 17:57:55',	'$2y$10$U5ZiPNJisoAPGvTWldBtaO.v8NFIVhz93/njK9hfW3YlRhWvVDlnG',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'light',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	0,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	0,	NULL,	'https://demo.getonlinetrader.pro/ref/test1234',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'active',	'on',	NULL,	NULL,	NULL,	NULL,	NULL,	'Yes',	'Yes',	'Yes',	'Yes',	'2023-06-19 17:57:55',	'2023-06-19 17:57:55'),
(819,	NULL,	'test user2',	'test12345@happ.com',	'test12345',	NULL,	'$2y$10$61eT6JLpMZjrRkjdCvUM.eLgBZ6mMB1yxvIk0wR9ome/M.QUO3zDG',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'light',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	0,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	0,	NULL,	'https://demo.getonlinetrader.pro/ref/test12345',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'active',	'on',	NULL,	NULL,	NULL,	NULL,	NULL,	'Yes',	'Yes',	'Yes',	'Yes',	'2023-06-19 20:27:31',	'2023-06-19 20:27:31');

DROP TABLE IF EXISTS `user_plans`;
CREATE TABLE `user_plans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `plan` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inv_duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expire_date` datetime DEFAULT NULL,
  `activated_at` datetime DEFAULT NULL,
  `last_growth` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profit_earned` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `wdmethods`;
CREATE TABLE `wdmethods` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maximum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charges_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charges_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swift_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barcode` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `network` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `methodtype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `defaultpay` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `wdmethods` (`id`, `name`, `minimum`, `maximum`, `charges_amount`, `charges_type`, `duration`, `img_url`, `bankname`, `account_name`, `account_number`, `swift_code`, `wallet_address`, `barcode`, `network`, `methodtype`, `type`, `status`, `defaultpay`, `created_at`, `updated_at`) VALUES
(1,	'Bitcoin',	'10',	'10000',	'0',	'percentage',	'Instant',	NULL,	NULL,	NULL,	NULL,	NULL,	'ksjhhjhdjd',	NULL,	'Erc',	'crypto',	'both',	'enabled',	'yes',	'2021-03-11 06:53:32',	'2023-05-01 13:07:17'),
(2,	'Ethereum',	'10',	'2100',	'0',	'percentage',	'Instant',	'https://lulo.com',	NULL,	NULL,	NULL,	NULL,	'dddddddddddddddddddddddd',	'938893993',	'Erc',	'crypto',	'both',	'enabled',	'yes',	'2021-03-22 05:36:03',	'2023-06-04 11:46:03'),
(3,	'Litecoin',	'100',	'10000',	'0',	'0',	'Instant',	'https://lulo.com',	NULL,	NULL,	NULL,	NULL,	'hhhhhhhhhhhhhhhhhhhhhhh',	'hhhhhhhhhhh',	'Erc',	'crypto',	'both',	'enabled',	'yes',	'2021-03-22 05:36:33',	'2023-05-25 13:46:07'),
(10,	'Paypal',	'10',	'10000',	'0',	'percentage',	'Instant Payment',	'https://lulo.com',	'Automatic',	'Automatic',	'99388383',	NULL,	NULL,	NULL,	NULL,	'currency',	'deposit',	'enabled',	'yes',	'2021-10-07 03:56:14',	'2023-05-26 20:45:09'),
(12,	'Bank Transfer',	'10',	'10000',	'0',	'percentage',	'manual',	NULL,	'Mining Bank',	'Miller lauren',	'99388383',	'3222ASD',	'sfdsfdfdjfkdsjfk5482475845',	NULL,	'tr5',	'currency',	'both',	'enabled',	'yes',	'2021-10-11 06:35:35',	'2023-03-26 10:25:52'),
(21,	'USDT',	'0',	'100',	'0',	'percentage',	'Instant Payment',	NULL,	NULL,	NULL,	NULL,	NULL,	'enter your correct wallet address here',	NULL,	'TRC20',	'crypto',	'both',	'enabled',	'yes',	'2021-04-14 04:45:06',	'2023-06-14 10:56:23'),
(23,	'BUSD',	'0',	'1000',	'0',	'percentage',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'Enter your correct wallet address here',	NULL,	'ERC20',	'crypto',	'both',	'enabled',	'yes',	'2022-06-27 18:25:41',	'2023-05-16 04:52:05'),
(24,	'Credit Card',	'10',	'10000',	'0',	'percentage',	'Instant Payment',	NULL,	'-',	'-',	'0',	NULL,	NULL,	NULL,	NULL,	'currency',	'both',	'enabled',	'yes',	'2022-07-20 07:02:29',	'2023-05-16 04:51:53');

DROP TABLE IF EXISTS `withdrawals`;
CREATE TABLE `withdrawals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `txn_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `columns` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_deduct` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paydetails` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 2023-06-19 20:57:48
