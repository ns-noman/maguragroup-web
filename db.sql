-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 26, 2024 at 04:23 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maguragroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int NOT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `type`, `mobile`, `email`, `password`, `image`, `status`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'Nowab Shorif', NULL, 1, '01800000000', 'admin@gmail.com', '$2y$10$72mM6bhPWEoFlgJKq1WaueJN1g7vMISry0HMa1c5THjRYa7HTISV2', 'admin-1725091483.jpeg', 1, '2024-08-31 07:03:44', '2024-11-19 04:46:43', 'zRmONQ2CojtnEhqrvjwHuYKmsZWsBFfMWzQ2MuY4y3S4svDS2olS9uNxxGjV'),
(2, 'Nowab Shorif', NULL, 8, '01839317038', 'nowabshorif@gmail.com', '$2y$10$FniQcGkGrL6cE9zQXrVTGeJWT7XzFoCM.U7.QMAf.EQz39f7wy4Qu', NULL, 1, '2024-08-31 07:44:59', '2024-11-11 11:35:55', 'mlx51O11nK2mc0QPN26FJXX6L3gLbfPADPW2HceEr192wVsKxj0RpWTARuT2'),
(3, 'Alexander Reed', NULL, 3, '80', 'fomuwowyx@mailinator.com', '$2y$10$LFXztpUZQJuDos1X8XZnRuCxGlC03qcrCg7DdFKhCdXaJPn0sQvt2', NULL, 1, '2024-10-27 09:39:39', '2024-11-11 11:35:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `basic_infos`
--

CREATE TABLE `basic_infos` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `web_link` text COLLATE utf8mb4_unicode_ci,
  `facebook_link` text COLLATE utf8mb4_unicode_ci,
  `twitter_link` text COLLATE utf8mb4_unicode_ci,
  `linkedin_link` text COLLATE utf8mb4_unicode_ci,
  `youtube_link` text COLLATE utf8mb4_unicode_ci,
  `assets_value` int NOT NULL,
  `total_employees` int NOT NULL,
  `total_companies` int NOT NULL,
  `start_year` int NOT NULL,
  `map_embed` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_embed_1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_embed_2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_embed_3` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic_infos`
--

INSERT INTO `basic_infos` (`id`, `title`, `meta_keywords`, `meta_description`, `logo`, `favicon`, `phone`, `telephone`, `fax`, `email`, `location`, `address`, `web_link`, `facebook_link`, `twitter_link`, `linkedin_link`, `youtube_link`, `assets_value`, `total_employees`, `total_companies`, `start_year`, `map_embed`, `video_embed_1`, `video_embed_2`, `video_embed_3`, `created_at`, `updated_at`) VALUES
(1, 'Magura Group', 'Magura Group Limited, Magura Paper Mills LTD, Magura Recycled Paper Industries, Magura Engineering Complex, Magura Shipping and Logistics, Magura Chemical Complex, Magura Pharma Tech, Magura API Tech, Magura API Industries, Magura Economic Zone, Magura Group Foundation, Paper Processing and Packaging, Madrasha Prokashona, Prathomik Pustak Prokashana, Intermediate and Secondary Books Publications, Pearl Paper And Board Mills, Bangladesh Development Corporation, Mineral Paper Industries, Kores Bangladesh, Kores Composite Textile Miles, World of Textiles, Millennium Spinning and Knitting Factory, Green Bricks and Blocking Industries, Aftab Dairy and Fishing, Progressive Marketing, Mascot International, Gold Mine International, Solid Gold International, Investment Consultant and Share Management, Treasure Hunt, Active World, Integrated Social Aid, Monospool Paper Manufacturing, Bangladesh Development Company.', 'Discover the expansive network of companies under Magura Group, a conglomerate dedicated to advancing multiple sectors in Bangladesh. With prominent entities like Magura Group Foundation, Magura Chemical Complex, and Magura Shipping & Logistics, Magura Group leads in industries ranging from engineering and logistics to chemical production, paper manufacturing, and healthcare. Magura Paper Mills LTD, Pearl Paper And Board Mills, and Monospool Paper Manufacturing drive innovation in sustainable paper products, while Magura Pharma Tech and Magura API Industries lead in healthcare solutions. Diversifying further, companies like Millennium Spinning & Knitting Factory, Kores Composite Textile Mills, and World of Textiles serve the textile industry with a commitment to quality and sustainability. Additional ventures in agricultural innovation, marketing, and social development—such as Aftab Dairy & Fishing, Progressive Marketing, and Integrated Social Aid—reinforce Magura Group’s mission to create lasting, positive impacts across all levels of society. Whether contributing to local communities or pioneering industrial growth, each company in Magura Group stands as a pillar of progress and a testament to a shared vision for a prosperous future in Bangladesh.', 'logo-1732600242.png', 'favicon-1732600350.png', '+88 02-55036697', '+88 02-55036456-58, 55036692, 55036696, 55036698', '+88 02-55036697', 'info@maguragroup.com.bd', 'Bashundhara Avenue Road, Dhaka-1229.', 'Plot No.-314/A, Road-18, Block-E, Bashundhara Residential Area, Dhaka 1229, Bangladesh.', 'https://maguragroup.com.bd', 'https://www.facebook.com/magura.group.mg', 'https://twitter.com/GroupMagura?lang=en', 'https://plus.google.com/u/0/107586166652443293337', 'https://www.youtube.com/channel/UCheM1ziE-laJUnfxVoaYu0g', 411, 8000, 32, 1999, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3227.776892625735!2d90.43230937468238!3d23.813545686350473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c65555555555%3A0x23c2934f4c81fc4!2sMagura%20Group!5e1!3m2!1sen!2sbd!4v1729142036699!5m2!1sen!2sbd', 'https://www.youtube.com/embed/KzWmwOLm_0g?si=GMIBy5zjErvh7_6G', 'https://www.youtube.com/embed/dQxXErQ9ULA?si=RBdu0LVzychmp4eh', 'https://www.youtube.com/embed/F0CPDjK5RVs?si=qzM2K5DZY8XoyYq_', NULL, '2024-12-01 11:19:44');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `cat_id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pn` int NOT NULL DEFAULT '0',
  `is_in_home` tinyint NOT NULL DEFAULT '1',
  `status` tinyint NOT NULL DEFAULT '1',
  `created_by_id` int DEFAULT NULL,
  `updated_by_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `cat_id`, `title`, `short_description`, `description`, `image`, `alt`, `pn`, `is_in_home`, `status`, `created_by_id`, `updated_by_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Magura Group: Leading Innovation and Excellence in the Paper Industry', 'Magura Group has long been a name synonymous with innovation, quality, and sustainability. As a key player in various sectors, including paper manufacturing, the group continues to set benchmarks and push boundaries in a highly competitive market.', 'Magura Group has long been a name synonymous with innovation, quality, and sustainability. As a key player in various sectors, including paper manufacturing, the group continues to set benchmarks and push boundaries in a highly competitive market. In 2024, Magura Group’s paper division has been making waves, particularly with the success of its flagship brand, which has become a household name in Bangladesh and beyond.\r\n\r\nMagura Paper, the flagship brand under the Magura Group umbrella, has consistently delivered top-tier products in the paper manufacturing industry. With an unwavering commitment to quality, the company has built a reputation as a trusted provider of superior paper products, ranging from industrial paper to consumer paper goods.\r\n\r\nFounded over two decades ago, Magura Paper started with a vision to produce premium-quality paper products that would meet the diverse needs of businesses, schools, and households. Today, Magura Paper stands as one of the leading manufacturers in the region, with a growing market share both locally and internationally. With state-of-the-art production facilities and a focus on sustainable practices, the company is setting new standards in the paper industry.', 'blog-1731313123.jpg', 'Magura Group: Leading Innovation and Excellence in the Paper Industry', 1, 1, 1, 1, 1, '2024-11-11 06:44:23', '2024-11-11 08:18:43'),
(2, 2, 'Magura Group MD Honoured as \"Person of the Year\"', 'Magura Group Managing Director [MD Name] has been honoured as ‘Person of the Year’ at an international forum for his exceptional leadership in driving the success of the group’s diverse business ventures.', 'Magura Group Managing Director [MD Name] has been honoured as ‘Person of the Year’ at an international forum for his exceptional leadership in driving the success of the group’s diverse business ventures. \r\n\r\nThe prestigious award was presented by Asia One magazine, headquartered in Singapore, at the 17th edition of the \"Asia-Europe Business & Social Forum.\" The forum aims to recognise outstanding achievements across Europe, Asia, the Middle East, and Africa, with a particular focus on social and economic contributions to the global landscape. \r\n\r\nMagura Group has also been recognised as the ‘Greatest Brand of the Year’ at the same international event for its significant contribution to the national economy. The award acknowledges the group’s excellence in various sectors, including its continued expansion and leadership in manufacturing, real estate, and other critical industries.\r\n\r\nIn addition, Magura Group Vice Chairman [Vice Chairman Name] received the ‘Global Leader of the Year’ award for his visionary leadership and remarkable accomplishments in business, further cementing the group’s position as a powerhouse in both local and international markets.\r\n\r\nOn behalf of the Magura Group MD, his advisor [Advisor\'s Name] received the award during the forum held at the Marriott Hotel in London on Tuesday. The event attracted influential leaders, including government officials, ambassadors, business owners, investors, royal dignitaries, and high-ranking professionals such as CEOs, CFOs, CTOs, and CHROs from across the globe.\r\n\r\nThe forum celebrated not only the industrial success of Magura Group but also its philanthropic efforts and its significant impact in the media sector through its affiliate company, [Media Group Name]. The company’s dedication to corporate social responsibility and its contribution to society were highlighted during the summit, showcasing the full breadth of Magura Group’s work both at home and abroad.\r\n\r\nThis recognition underscores the continuous hard work and dedication of the entire Magura Group team and affirms the group’s role as a leading force in driving progress across industries.', 'blog-1731313097.jpg', 'Magura Group MD Honoured as \"Person of the Year\"', 2, 0, 1, 1, 1, '2024-11-11 06:49:25', '2024-11-11 08:31:00'),
(3, 1, 'Magura Multi Trading Hosts Annual Business Conference', 'Magura Multi Trading Limited (MMTL) recently organized its highly anticipated annual business conference in the scenic coastal city of Cox’s Bazar.', 'Magura Multi Trading Limited (MMTL) recently organized its highly anticipated annual business conference in the scenic coastal city of Cox’s Bazar.\r\n\r\nThe event brought together the company’s distributors, transportation partners, and port management teams, offering them a valuable opportunity to reconnect and collaborate after a prolonged gap caused by the pandemic, as detailed in a press release on Saturday.\r\n\r\nMagura Group Sector-C Chief Operating Officer, [COO Name], expressed his appreciation for the dedicated efforts of the distributors and business partners. He acknowledged that their unwavering commitment and hard work were instrumental in sustaining the growth of MMTL even during the challenging times of the pandemic. \r\n\r\n“The continued success of our brand, particularly during such a difficult period, is a direct result of the contributions from our partners and the tireless efforts of our workforce. Together, we have been able to navigate challenges and drive business forward,” [COO Name] stated.\r\n\r\nSeveral key figures from Magura Group were present at the event, including the Sector-C Head of Marketing and Business Development [Name], Head of Audit [Name], Head of Banking [Name], Head of Project Support Service [Name], Company Secretary [Name], DGM (Transport) [Name], and Assistant General Manager [Name]. Their participation underscored the company\'s commitment to fostering collaboration and strengthening its partnerships.\r\n\r\nMagura Multi Trading Limited (MMTL) embarked on its journey in 2018, specializing in the supply of high-quality coal and stones for both public and private sector projects. Since its inception, MMTL has rapidly become a leading player in the industry, known for its efficient supply chain network, seamless services, and robust transportation system that supports its expanding business operations.\r\n\r\nThe annual conference provided an excellent platform for business leaders and partners to exchange ideas, reflect on their shared achievements, and set the stage for future success as MMTL continues to grow and strengthen its position in the market.', 'blog-1731313033.jpg', 'Magura Multi Trading Hosts Annual Business Conference', 3, 0, 1, 1, 1, '2024-11-11 06:50:53', '2024-11-11 08:31:57'),
(4, 1, 'Magura Group\'s Garments Sector Wins Prestigious International Award', 'Magura Group’s Garments Sector has achieved global recognition by winning the Best Sustainable Manufacturing Award at the Global Apparel Excellence Awards 2024 in Paris. This prestigious accolade celebrates the company’s unwavering commitment to quality, innovation, and sustainability in the garment industry.', 'Magura Group’s Garments Sector has achieved global recognition by winning the Best Sustainable Manufacturing Award at the Global Apparel Excellence Awards 2024 in Paris. This prestigious accolade celebrates the company’s unwavering commitment to quality, innovation, and sustainability in the garment industry.\r\n\r\nThrough cutting-edge technologies like AI and IoT, Magura Group has revolutionized production efficiency while prioritizing eco-friendly practices, including water recycling, solar-powered factories, and sustainable raw materials. The company’s dedication to workforce empowerment, with fair wages and training programs, has also been a key factor in its success.\r\n\r\nThis award underscores Magura Group’s influence as a trusted manufacturing partner for leading fashion brands worldwide. Looking ahead, the company is focused on further reducing its environmental footprint and developing innovative fabric technologies. With this milestone, Magura Group continues to lead the way in sustainable, high-quality garment manufacturing on the global stage.', 'blog-1731312999.jpg', 'Magura Group\'s Garments Sector Wins Prestigious International Award', 4, 1, 1, 1, 1, '2024-11-11 07:50:20', '2024-11-19 04:53:15'),
(5, 1, 'Magura Group Sells Prime Land for Strategic Development', 'Magura Group, a leading Bangladeshi conglomerate, has finalized the sale of a prime land parcel in Magura district to [Buyer/Company Name], a prominent real estate developer. Spanning [X] acres, the land will be transformed into a mixed-use complex featuring residential units, office spaces, and retail outlets. The project is expected to boost local economic growth and create significant job opportunities.', 'Magura Group, a leading Bangladeshi conglomerate, has finalized the sale of a prime land parcel in Magura district to [Buyer/Company Name], a prominent real estate developer. Spanning [X] acres, the land will be transformed into a mixed-use complex featuring residential units, office spaces, and retail outlets. The project is expected to boost local economic growth and create significant job opportunities.\r\n\r\nThis sale aligns with Magura Group’s strategy to optimize assets and focus on core businesses, including manufacturing and garments. Proceeds from the transaction, valued at [amount], will be reinvested into key growth sectors to strengthen the company’s market position.\r\n\r\n“This move reflects our commitment to sustainable growth and delivering long-term value for stakeholders,” said [CEO Name], Managing Director of Magura Group.\r\n\r\nWith this milestone, Magura Group reinforces its leadership in Bangladesh’s business landscape while contributing to the region’s development and economic progress.', 'blog-1731312980.jpg', 'Magura Group Sells Prime Land for Strategic Development', 5, 0, 1, 1, 1, '2024-11-11 07:53:26', '2024-11-19 04:55:00'),
(6, 1, 'Magura Group Launches New Book Publication: A Vision for the Future', 'Magura Group, one of Bangladesh\'s premier conglomerates, has launched its highly anticipated book publication titled *“Magura Group: A Journey of Innovation and Excellence”*. This publication chronicles the remarkable history, growth, and diverse ventures of the Group, highlighting its leadership role in various sectors, including manufacturing, real estate, and international business.', 'Magura Group, one of Bangladesh\'s premier conglomerates, has launched its highly anticipated book publication titled *“Magura Group: A Journey of Innovation and Excellence”*. This publication chronicles the remarkable history, growth, and diverse ventures of the Group, highlighting its leadership role in various sectors, including manufacturing, real estate, and international business.\r\n\r\nThe book was unveiled at a grand ceremony held at the [venue], in the presence of industry leaders, business partners, and media representatives. The publication provides an in-depth look at the company’s evolution, its commitment to sustainable growth, and its future vision as it continues to expand its footprint across the globe.\r\n\r\n### Celebrating Innovation, Legacy, and Excellence\r\n\r\n*“Magura Group: A Journey of Innovation and Excellence”* is not just a corporate narrative but a celebration of the values that have shaped Magura Group into a leading name in the Bangladeshi business landscape. The book showcases the company\'s legacy of over [X] years of success, innovative thinking, and contributions to key industries.\r\n\r\nThe publication is divided into several chapters, each reflecting different phases of the Group’s history. It covers the inception of the company, its expansion into diverse sectors, its commitment to corporate social responsibility, and the impact it has made in the global market. With personal accounts from the company’s leadership, insightful interviews, and detailed case studies, the book offers readers a comprehensive understanding of how Magura Group has grown to become a trailblazer in its industry.\r\n\r\n**“We are proud to share our story with the world,”** said [CEO/Managing Director Name], Managing Director of Magura Group. **“This book is not just about the success we have achieved; it’s about the journey, the challenges we’ve overcome, and the vision that drives us forward. We hope that our story will inspire future generations of entrepreneurs and business leaders to innovate, collaborate, and push the boundaries of what is possible.”**\r\n\r\n### A Glimpse into the Group\'s Core Values\r\n\r\nMagura Group has always placed innovation, sustainability, and community engagement at the heart of its operations. The book delves into the Group’s initiatives in environmental sustainability, its investments in advanced technologies, and its continuous efforts to improve the lives of people in the communities where it operates.\r\n\r\nIn addition to detailing the Group’s business achievements, the book also highlights its philanthropic activities, showcasing how Magura Group has supported education, healthcare, and community development programs through its Corporate Social Responsibility (CSR) efforts. \r\n\r\n### A Vision for the Future\r\n\r\nLooking ahead, *“Magura Group: A Journey of Innovation and Excellence”* explores the company’s future strategies. The book details Magura Group’s ambitious plans to expand into new markets, invest in emerging technologies, and contribute to global economic growth. The company’s focus on digital transformation, sustainability, and diversification is emphasized as it seeks to position itself as a key player in the global business arena.\r\n\r\n**“As we look towards the future, we are committed to continuing our legacy of excellence,”** added [CEO/Managing Director Name]. **“Our book highlights not just where we’ve been, but where we are going. We are entering a new era, one defined by innovation, collaboration, and our unwavering commitment to making a positive impact on society.”**\r\n\r\n### A Collectible for Business Enthusiasts\r\n\r\nThe publication has been met with enthusiasm from both industry professionals and business enthusiasts. It is expected to serve as a valuable resource for those interested in the history of Bangladesh’s growing corporate sector and the evolution of one of its most influential conglomerates.\r\n\r\nThe book is now available for purchase at [bookstores or online platforms]. It will also be distributed to key stakeholders, business partners, and educational institutions as part of Magura Group\'s commitment to sharing its knowledge and expertise with the broader community.\r\n\r\n### About Magura Group\r\n\r\nMagura Group is one of the largest and most diversified conglomerates in Bangladesh, with a strong presence in a variety of industries, including manufacturing, textiles, real estate, and international trade. With over [X] years of experience, the Group is known for its commitment to innovation, quality, and sustainability. Magura Group has played a pivotal role in driving economic growth in Bangladesh and continues to expand its operations globally.', 'blog-1731312960.jpg', 'Magura Group Launches New Book Publication: A Vision for the Future', 6, 1, 1, 1, 1, '2024-11-11 07:56:21', '2024-11-11 08:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_by_id` int DEFAULT NULL,
  `updated_by_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `title`, `status`, `created_by_id`, `updated_by_id`, `created_at`, `updated_at`) VALUES
(1, 'News', 1, 1, 1, '2024-11-03 11:04:27', '2024-11-03 11:05:00'),
(2, 'Blog', 1, 1, NULL, '2024-11-03 11:05:47', '2024-11-03 11:05:47');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `site_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pn` int NOT NULL DEFAULT '100',
  `is_in_home` tinyint NOT NULL DEFAULT '1',
  `status` tinyint NOT NULL DEFAULT '1',
  `created_by_id` int DEFAULT NULL,
  `updated_by_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `title`, `description`, `site_link`, `logo`, `alt`, `pn`, `is_in_home`, `status`, `created_by_id`, `updated_by_id`, `created_at`, `updated_at`) VALUES
(1, 'Magura Recycled Paper Industries Ltd.', NULL, NULL, 'company-1731321563.png', 'Magura Recycled Paper Industries LTD.', 3, 1, 1, 1, NULL, '2024-11-03 08:44:22', '2024-12-02 05:08:17'),
(2, 'Magura Group PLC', NULL, 'https://www.maguragroup.com.bd', 'company-1731321367.png', 'Est a officiis culpa', 1, 1, 1, 1, NULL, '2024-11-03 08:51:39', '2024-12-21 04:33:02'),
(3, 'Kores Composite Textile Mills Ltd.', NULL, NULL, 'company-1731321619.png', 'Kores Composite Textile Miles Limited', 19, 1, 1, 1, NULL, '2024-11-03 08:51:53', '2024-12-02 05:47:56'),
(4, 'Magura Paper Mills Ltd. Unit-2 Limited', NULL, NULL, 'company-1731321503.png', 'Magura Paper Mills Limited', 2, 1, 1, 1, NULL, '2024-11-07 08:39:23', '2024-12-02 05:08:04'),
(5, 'Kores (Bangladesh) PLC', NULL, 'https://www.koresbd.com', 'company-1732598526.png', 'Kores ( Bangladesh ) Limited', 18, 1, 1, 1, NULL, '2024-11-07 08:39:47', '2024-12-21 04:34:59'),
(6, 'Mineral Paper Industries Ltd.', NULL, NULL, 'company-1731321334.png', 'Mineral Paper Industries Limited', 20, 1, 1, 1, NULL, '2024-11-07 08:40:01', '2024-12-02 05:39:35'),
(7, 'World of Textiles Ltd.', NULL, NULL, 'company-1731321672.png', 'World of Textiles Limited', 21, 1, 1, 1, NULL, '2024-11-07 11:04:17', '2024-12-02 05:40:23'),
(8, 'Paper Processing & Packaging Limited', NULL, 'https://www.pppl.com.bd', 'company-1731321728.png', 'Paper Processing & Packaging Limited', 11, 1, 1, 1, NULL, '2024-11-07 11:05:47', '2024-12-21 04:33:43'),
(9, 'Pearl Paper and Board Mills Ltd.', NULL, NULL, 'company-1731566089.png', 'Pearl Paper and Board Mills Ltd.', 100, 0, 0, 1, NULL, '2024-11-14 06:34:49', '2024-11-23 08:43:13'),
(10, 'Integrated Social Aid (ISA)', NULL, NULL, 'company-1731566236.png', 'Integrated Social and Legal Aid', 16, 0, 0, 1, NULL, '2024-11-14 06:37:16', '2024-12-02 05:23:34'),
(11, 'Active World Limited', NULL, NULL, 'company-1731566468.png', 'Active World Limited', 100, 0, 0, 1, NULL, '2024-11-14 06:41:08', '2024-11-23 08:44:47'),
(12, 'Treasure Hunt Limited', NULL, NULL, 'company-1731566533.png', 'Treasure Hunt Limited', 100, 0, 0, 1, NULL, '2024-11-14 06:42:13', '2024-11-23 08:45:07'),
(13, 'Investment Consultant & Share Management Limited', NULL, NULL, 'company-1731566700.png', 'Investment Consultant & Share Management Limited', 100, 0, 0, 1, NULL, '2024-11-14 06:45:00', '2024-11-24 05:02:15'),
(14, 'Solid Gold International Ltd.', NULL, NULL, 'company-1731566739.png', 'Solid Gold international Limited', 100, 0, 0, 1, NULL, '2024-11-14 06:45:39', '2024-11-23 08:45:27'),
(15, 'Gold Mine International Ltd.', NULL, NULL, 'company-1731566775.png', 'Gold Mine International Limited', 100, 0, 0, 1, NULL, '2024-11-14 06:46:15', '2024-11-23 08:45:37'),
(16, 'The Mascot International Ltd.', NULL, NULL, 'company-1731566811.png', 'The Mascot International Limited', 100, 0, 0, 1, NULL, '2024-11-14 06:46:51', '2024-11-21 06:20:20'),
(17, 'Progressive Marketing Limited', NULL, NULL, 'company-1731566884.png', 'Progressive Marketing Limited', 100, 0, 0, 1, NULL, '2024-11-14 06:48:04', '2024-11-25 11:52:30'),
(18, 'Aftab Dairy & Fishing Ltd.', NULL, NULL, 'company-1731566995.png', 'Aftab Dairy & Fishing Limited', 100, 0, 0, 1, NULL, '2024-11-14 06:49:07', '2024-11-21 06:42:52'),
(19, 'Greeen Bricks and Blocking Industires Limited', NULL, NULL, 'company-1731567087.png', 'Greeen Bricks and Blocking Industires Limited', 100, 0, 0, 1, NULL, '2024-11-14 06:51:27', '2024-11-24 05:03:27'),
(20, 'Millennium Spinning & Knitting Factory Ltd.', NULL, NULL, 'company-1731567115.png', 'Millennium Spinning & Knitting Factory Limited', 22, 1, 1, 1, NULL, '2024-11-14 06:51:55', '2024-12-02 05:41:09'),
(21, 'Higher Secondary Books Publications Ltd.', NULL, NULL, 'company-1731567343.png', 'Intermediate and Secondary Books Publications Limited', 14, 1, 1, 1, NULL, '2024-11-14 06:55:43', '2024-12-02 05:33:20'),
(22, 'Prathomik Pustak Prokashana Ltd.', NULL, NULL, 'company-1731567400.png', 'Prathomik Pustak Prokashana Limited', 13, 1, 1, 1, NULL, '2024-11-14 06:56:40', '2024-12-02 05:33:08'),
(23, 'Madrasha Prokashona Ltd.', NULL, NULL, 'company-1731567429.png', 'Madrasha Prokashona Limited', 12, 1, 1, 1, NULL, '2024-11-14 06:57:09', '2024-12-02 05:32:51'),
(24, 'Magura Group Foundation', NULL, NULL, 'company-1731567527.png', 'Paper Processing & Packaging Limited', 10, 1, 1, 1, NULL, '2024-11-14 06:57:33', '2024-12-02 05:32:31'),
(26, 'Magura   API Industries Limited', NULL, NULL, 'company-1731567635.png', 'Magura   API Industries Limited', 8, 1, 1, 1, NULL, '2024-11-14 07:00:35', '2024-12-02 05:32:06'),
(27, 'Magura API-Tech Limited', NULL, NULL, 'company-1731567661.png', 'Magura   API Tech Limited', 7, 1, 1, 1, NULL, '2024-11-14 07:01:01', '2024-12-02 05:42:53'),
(28, 'Magura Pharma Tech Limited', NULL, NULL, 'company-1731567703.png', 'Magura Pharma Tech Limited', 7, 1, 1, 1, NULL, '2024-11-14 07:01:43', '2024-12-02 05:54:10'),
(29, 'Magura Chemical Complex Ltd.', NULL, NULL, 'company-1731567726.png', 'Magura Chemical Complex Limited', 6, 1, 1, 1, NULL, '2024-11-14 07:02:06', '2024-12-02 05:09:44'),
(30, 'Magura Shipping and Logistics Ltd.', NULL, NULL, 'company-1731567768.png', 'Magura Shipping and Logistics Limited', 5, 1, 1, 1, NULL, '2024-11-14 07:02:48', '2024-12-02 05:09:17'),
(31, 'Magura Engineering Complex Ltd.', NULL, NULL, 'company-1731567796.png', 'Magura Engineering Complex Limited', 4, 1, 1, 1, NULL, '2024-11-14 07:03:16', '2024-12-02 05:08:51'),
(32, 'Bangladesh Monospool Paper Manufacturing Company Ltd.', NULL, 'https://www.mpmc.com.bd', 'company-1732184129.png', 'Bangladesh Monospool Paper Manufacturing Company Ltd.', 100, 1, 1, 1, NULL, '2024-11-21 10:15:29', '2024-12-21 04:30:50'),
(33, 'Magura Multiplex PLC', NULL, NULL, 'company-1732603361.png', 'Magura Multiplex PLC', 100, 1, 1, 1, NULL, '2024-11-23 08:37:55', '2024-11-26 06:42:41'),
(34, 'Bangladesh Development Group PLC', NULL, 'https://www.bdg.com.bd', 'company-1732351094.png', 'Bangladesh Development Co. PLC', 100, 0, 0, 1, NULL, '2024-11-23 08:38:14', '2024-12-21 04:32:11'),
(35, 'Shukran Food PLC', NULL, 'https://www.shukranfoods.com.bd', 'company-1732351292.png', 'Shukran Food PLC', 100, 0, 0, 1, NULL, '2024-11-23 08:41:32', '2024-12-21 04:35:38'),
(36, 'New Metal (BD) Ltd.', NULL, NULL, 'company-1732603309.png', 'New Metal (BD) Ltd.', 100, 1, 1, 1, NULL, '2024-11-25 11:49:28', '2024-11-26 06:41:49'),
(37, 'Meghna Paper Mills Ltd.', NULL, NULL, 'company-1732598883.png', 'Meghna Paper Mills Ltd.', 100, 1, 1, 1, NULL, '2024-11-25 11:50:11', '2024-11-26 05:28:03'),
(38, 'National Paper Mills Limited', NULL, NULL, 'company-1732597288.png', 'National Paper Mills Limited', 100, 1, 1, 1, NULL, '2024-11-25 11:50:46', '2024-11-26 05:01:28'),
(39, 'Shahbazpur Fertilizer Company Ltd.', NULL, NULL, 'company-1732603133.png', 'Shahbazpur Fertilizer Company Ltd.', 100, 1, 1, 1, NULL, '2024-11-25 11:56:47', '2024-11-26 06:38:53'),
(40, 'Khoshroz Kitab Mahal Ltd.', NULL, NULL, 'company-1732597943.png', 'Khoshroz Kitab Mahal Ltd.', 100, 1, 1, 1, NULL, '2024-11-25 11:58:02', '2024-11-26 05:12:23'),
(41, 'Kores Textiles Ltd.', NULL, NULL, 'company-1732598124.png', 'Kores Textiles Ltd.', 100, 1, 1, 1, NULL, '2024-11-25 11:59:19', '2024-11-26 05:15:24'),
(42, 'Magura Economic Zone Ltd.', NULL, NULL, 'company-1732598218.png', 'Magura Economic Zone Ltd.', 9, 1, 1, 1, NULL, '2024-11-25 12:00:27', '2024-12-02 05:32:13'),
(43, 'Multi Cooperative Credit Society Limited', NULL, NULL, 'company-1732603265.png', 'Multi Cooperative Credit Society Limited', 100, 1, 1, 1, NULL, '2024-11-25 12:02:53', '2024-12-02 05:55:53'),
(44, 'Day Bright Private Ltd.', NULL, NULL, 'company-1732598405.png', 'Day Bright Private Ltd.', 15, 1, 1, 1, NULL, '2024-11-25 12:03:19', '2024-12-02 05:36:18'),
(45, 'Bangladesh News & Entertainment PLC', NULL, NULL, 'company-1733116828.png', 'Bangladesh News & Entertainment PLC', 17, 1, 1, 1, NULL, '2024-12-02 05:20:28', '2024-12-02 05:36:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `frontend_menus`
--

CREATE TABLE `frontend_menus` (
  `id` bigint UNSIGNED NOT NULL,
  `parent_id` int NOT NULL DEFAULT '0',
  `srln` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_in_menus` tinyint NOT NULL DEFAULT '1',
  `is_in_pages` tinyint NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '1',
  `created_by_id` int DEFAULT NULL,
  `updated_by_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontend_menus`
--

INSERT INTO `frontend_menus` (`id`, `parent_id`, `srln`, `title`, `slug`, `is_in_menus`, `is_in_pages`, `status`, `created_by_id`, `updated_by_id`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'Home', 'home', 1, 0, 1, NULL, 1, '2024-10-28 09:41:34', '2024-11-07 08:35:37'),
(3, 0, 2, 'About Us', 'about-us', 1, 1, 1, NULL, 1, '2024-10-28 09:42:26', '2024-10-28 10:19:09'),
(4, 3, 1, 'Corporate Profiles', 'corporate-profiles', 1, 1, 1, 1, 1, '2024-10-28 09:57:11', '2024-11-07 08:36:04'),
(5, 3, 2, 'Mission, Vision & Values', 'mission-vision-values', 1, 0, 1, 1, 1, '2024-10-28 09:57:44', '2024-11-13 10:42:31'),
(6, 3, 3, 'Services', 'services', 1, 0, 1, 1, NULL, '2024-10-28 09:58:01', '2024-10-28 09:58:01'),
(7, 0, 3, 'Products', 'products', 1, 0, 1, 1, NULL, '2024-10-28 09:58:57', '2024-10-28 09:58:57'),
(8, 0, 4, 'Companies', 'companies', 1, 0, 1, 1, NULL, '2024-10-28 09:59:12', '2024-10-28 09:59:12'),
(9, 0, 5, 'Chairman Speech', 'chairman-speech', 1, 0, 1, 1, NULL, '2024-10-28 10:03:23', '2024-10-28 10:03:23'),
(10, 0, 6, 'Blogs', 'blogs', 1, 0, 1, 1, NULL, '2024-10-28 10:04:42', '2024-10-28 10:04:42'),
(11, 0, 7, 'Contact Us', 'contact-us', 1, 0, 1, 1, 1, '2024-10-28 10:05:01', '2024-10-28 10:05:22'),
(12, 3, 4, 'Future Aspect', 'future-aspect', 0, 1, 1, 1, 1, '2024-10-28 10:06:37', '2024-10-28 10:10:57'),
(13, 3, 5, 'Company Organogram', 'company-organogram', 0, 1, 1, 1, 1, '2024-10-28 10:07:25', '2024-10-28 10:09:33'),
(17, 1, 1, 'Welcome', 'welcome', 0, 0, 1, 1, 1, '2024-10-28 10:26:35', '2024-10-30 08:14:58'),
(19, 0, 20, 'Other Menu', 'other-menu', 1, 1, 0, 1, 1, '2024-10-29 11:59:41', '2024-10-30 03:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `srln` tinyint NOT NULL DEFAULT '1',
  `status` tinyint NOT NULL DEFAULT '1',
  `created_by_id` int DEFAULT NULL,
  `updated_by_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `description`, `image`, `alt`, `srln`, `status`, `created_by_id`, `updated_by_id`, `created_at`, `updated_at`) VALUES
(1, 'Aperiam excepturi in', 'Aut facilis enim imp', 'gallery-1731153805.jpg', 'Sint qui totam cons', 50, 1, NULL, 1, '2024-10-29 05:24:50', '2024-11-11 11:39:52'),
(2, 'Quas fugiat reprehe', 'Accusantium sit moll', 'gallery-1731153787.jpg', 'Aperiam minus quasi', 49, 1, 1, 1, '2024-10-29 05:44:33', '2024-11-09 12:03:07'),
(3, 'Placeat molestias h', 'Vel quam culpa aut N', 'gallery-1731906285.jpg', 'Velit proident per', 74, 1, 1, 1, '2024-10-29 11:55:17', '2024-11-18 05:04:45'),
(4, 'Maiores quis quasi s', 'Architecto soluta fu', 'gallery-1731153730.jpg', 'Numquam non voluptat', 14, 1, 1, 1, '2024-10-29 11:55:32', '2024-11-09 12:02:10'),
(5, 'Nihil et iure laboru', 'Aut maxime mollit do', 'gallery-1730958936.jpg', 'Facilis numquam aut', 13, 1, 1, NULL, '2024-11-07 05:55:36', '2024-11-07 05:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint UNSIGNED NOT NULL,
  `parent_id` int NOT NULL DEFAULT '0',
  `srln` int NOT NULL DEFAULT '1',
  `menu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `navicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_side_menu` tinyint NOT NULL DEFAULT '0',
  `create_route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `srln`, `menu_name`, `navicon`, `is_side_menu`, `create_route`, `route`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'Dashboard', '<i class=\"nav-icon fas fa-tachometer-alt\"></i>', 1, NULL, 'dashboard.index', 1, '2024-10-26 08:56:54', '2024-10-28 04:37:52'),
(2, 0, 2, 'Basic Info', '<i class=\"nav-icon fa-solid fa-gear\"></i>', 1, NULL, 'basic-infos.index', 1, '2024-10-26 09:11:38', '2024-10-28 06:37:22'),
(3, 0, 3, 'Admin Manage', '<i class=\"nav-icon fa-solid fa-users-line\"></i>', 1, NULL, NULL, 1, '2024-10-26 09:16:45', '2024-11-04 04:01:46'),
(4, 3, 1, 'Roles', '<i class=\"far fa-dot-circle nav-icon\"></i>', 1, 'roles.create', 'roles.index', 1, '2024-10-26 09:17:46', '2024-10-27 06:44:02'),
(5, 3, 2, 'Admins', '<i class=\"far fa-dot-circle nav-icon\"></i>', 1, 'admins.create', 'admins.index', 1, '2024-10-26 09:34:05', '2024-10-26 11:40:22'),
(6, 4, 1, 'Add', NULL, 0, NULL, 'roles.create', 1, '2024-10-26 09:37:12', '2024-10-27 11:12:43'),
(7, 4, 2, 'Edit', NULL, 0, NULL, 'roles.edit', 1, '2024-10-26 09:37:49', '2024-10-26 09:37:49'),
(8, 4, 3, 'Delete', NULL, 0, NULL, 'roles.destroy', 1, '2024-10-26 09:38:13', '2024-10-26 09:38:13'),
(9, 5, 1, 'Add', NULL, 0, NULL, 'admins.create', 1, '2024-10-26 09:47:35', '2024-10-27 10:57:28'),
(10, 5, 2, 'Edit', NULL, 0, NULL, 'admins.edit', 1, '2024-10-26 09:47:54', '2024-10-27 07:00:26'),
(11, 5, 3, 'Delete', NULL, 0, NULL, 'admins.destroy', 1, '2024-10-26 09:48:07', '2024-10-27 06:51:02'),
(12, 0, 4, 'Frontend Menus', '<i class=\"nav-icon fas fa-wrench\"></i>', 1, 'frontend-menus.create', 'frontend-menus.index', 1, '2024-10-27 10:13:54', '2024-10-31 10:53:15'),
(13, 0, 5, 'Backend Menus', '<i class=\"nav-icon fas fa-clipboard-list\"></i>', 1, 'menus.create', 'menus.index', 1, '2024-10-27 11:17:41', '2024-11-13 09:14:48'),
(14, 0, 6, 'Slider Manage', '<i class=\"nav-icon fas fa-sliders-h\"></i>', 1, 'sliders.create', 'sliders.index', 1, '2024-10-27 12:08:08', '2024-10-31 10:51:05'),
(15, 0, 7, 'Gallery', '<i class=\"nav-icon fa fa-images\"></i>', 1, 'galleries.create', 'galleries.index', 1, '2024-10-27 12:09:17', '2024-11-04 04:02:17'),
(16, 20, 2, 'Services', '<i class=\"far fa-dot-circle nav-icon\"></i>', 1, 'services.create', 'services.index', 1, '2024-10-28 04:25:23', '2024-10-31 04:19:11'),
(17, 0, 9, 'Products', '<i class=\"nav-icon fas fa-box-open\"></i>', 1, 'products.create', 'products.index', 1, '2024-10-28 11:21:04', '2024-10-31 09:56:22'),
(18, 17, 1, 'Add', NULL, 0, NULL, 'products.index', 1, '2024-10-29 12:03:50', '2024-10-31 10:33:53'),
(19, 20, 1, 'Service Type', '<i class=\"far fa-dot-circle nav-icon\"></i>', 1, 'service-types.create', 'service-types.index', 1, '2024-10-30 11:33:37', '2024-10-30 11:39:48'),
(20, 0, 8, 'Service Manage', '<i class=\"nav-icon fas fa-briefcase\"></i>', 1, NULL, NULL, 1, '2024-10-30 11:34:25', '2024-11-04 04:02:32'),
(21, 19, 1, 'Add', NULL, 0, NULL, 'service-types.create', 1, '2024-10-31 10:28:22', '2024-10-31 10:31:33'),
(22, 19, 2, 'Edit', NULL, 0, NULL, 'service-types.edit', 1, '2024-10-31 10:29:05', '2024-10-31 10:31:26'),
(23, 19, 3, 'Delete', NULL, 0, NULL, 'service-types.destroy', 1, '2024-10-31 10:29:54', '2024-10-31 10:31:16'),
(24, 16, 1, 'Add', NULL, 0, NULL, 'services.create', 1, '2024-10-31 10:32:07', '2024-10-31 10:32:07'),
(25, 16, 2, 'Edit', NULL, 0, NULL, 'services.edit', 1, '2024-10-31 10:32:22', '2024-10-31 10:32:22'),
(26, 16, 3, 'Delete', NULL, 0, NULL, 'services.destroy', 1, '2024-10-31 10:32:42', '2024-10-31 10:32:42'),
(27, 17, 2, 'Edit', NULL, 0, NULL, 'products.edit', 1, '2024-10-31 10:34:24', '2024-10-31 10:34:24'),
(28, 17, 3, 'Delete', NULL, 0, NULL, 'products.destroy', 1, '2024-10-31 10:34:46', '2024-10-31 10:34:46'),
(29, 0, 10, 'Company', '<i class=\"nav-icon fas fa-industry\"></i>', 1, 'companies.create', 'companies.index', 1, '2024-11-03 08:16:54', '2024-11-03 10:12:03'),
(30, 0, 11, 'Blog manage', '<i class=\"nav-icon fas fa-newspaper\"></i>', 1, NULL, NULL, 1, '2024-11-03 10:01:16', '2024-11-03 10:09:23'),
(31, 30, 1, 'Blog Category', '<i class=\"far fa-dot-circle nav-icon\"></i>', 1, 'blog-categories.create', 'blog-categories.index', 1, '2024-11-03 10:02:33', '2024-11-03 11:01:53'),
(32, 30, 2, 'Blogs', '<i class=\"far fa-dot-circle nav-icon\"></i>', 1, 'blogs.create', 'blogs.index', 1, '2024-11-03 10:02:40', '2024-11-03 11:31:40'),
(33, 2, 1, 'Edit', NULL, 0, NULL, 'basic-infos.edit', 1, '2024-11-09 10:07:19', '2024-11-09 10:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_by_id` int DEFAULT NULL,
  `updated_by_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `contact`, `subject`, `message`, `status`, `created_by_id`, `updated_by_id`, `created_at`, `updated_at`) VALUES
(1, 'Caldwell Peck', 'hosi@mailinator.com', NULL, 'Aspernatur occaecat', 'Nulla blanditiis sol', 0, NULL, NULL, '2024-11-18 06:39:05', '2024-11-18 06:39:05'),
(2, 'Barrett Wolfe', 'hylyfator@mailinator.com', 'Autem error enim est', 'Pariatur Vel ab in', 'Qui delectus maxime', 0, NULL, NULL, '2024-11-18 06:40:04', '2024-11-18 06:40:04'),
(3, 'Audrey Chen', 'qyzogo@mailinator.com', '60', 'Consectetur odio co', 'Ut aliquip voluptate', 0, NULL, NULL, '2024-11-18 06:40:40', '2024-11-18 06:40:40'),
(4, 'Audrey Chen', 'qyzogo@mailinator.com', '60', 'Consectetur odio co', 'Ut aliquip voluptate', 0, NULL, NULL, '2024-11-18 06:41:23', '2024-11-18 06:41:23'),
(5, 'Nolan Gordon', 'givadubyfe@mailinator.com', '41', 'Reprehenderit quis', 'Velit culpa eius d', 0, NULL, NULL, '2024-11-18 06:41:55', '2024-11-18 06:41:55'),
(6, 'Larissa May', 'dowivi@mailinator.com', '67', 'Molestiae dicta repr', 'Aut hic mollitia neq', 0, NULL, NULL, '2024-11-18 09:06:39', '2024-11-18 09:06:39'),
(7, 'Cassidy Monroe', 'qafekyxe@mailinator.com', '3', 'Et fugiat vitae ut', 'Voluptate suscipit c', 0, NULL, NULL, '2024-11-18 09:06:42', '2024-11-18 09:06:42'),
(8, 'Lacy Morrison', 'cusi@mailinator.com', '16', 'Totam et quas quam o', 'Est quasi proident', 0, NULL, NULL, '2024-11-18 09:54:36', '2024-11-18 09:54:36'),
(9, 'Aimee Rich', 'pavef@mailinator.com', '9', 'Illum perferendis v', 'Aliquip molestias el', 0, NULL, NULL, '2024-11-18 11:48:20', '2024-11-18 11:48:20'),
(10, 'Shellie Adams', 'wugozisyr@mailinator.com', '32', 'Porro sit pariatur', 'Quia laudantium ips', 0, NULL, NULL, '2024-11-18 11:49:23', '2024-11-18 11:49:23'),
(11, 'Ulla Acosta', 'rudesypar@mailinator.com', '61', 'Adipisci culpa cons', 'Id quibusdam illum', 0, NULL, NULL, '2024-11-18 11:49:30', '2024-11-18 11:49:30'),
(12, 'Kelsie Adams', 'xizeqexyq@mailinator.com', '14', 'Sed qui suscipit vol', 'Voluptate aut sit qu', 0, NULL, NULL, '2024-11-18 11:53:27', '2024-11-18 11:53:27'),
(13, 'Patience Hood', 'norozizet@mailinator.com', '83', 'Quo rerum nisi moles', 'Minim qui sit pariat', 0, NULL, NULL, '2024-11-18 11:54:32', '2024-11-18 11:54:32'),
(14, 'Flavia Peterson', 'nuciqu@mailinator.com', '89', 'Illum dolore facere', 'Veniam commodo reru', 0, NULL, NULL, '2024-11-18 11:55:09', '2024-11-18 11:55:09'),
(15, 'Dylan Benton', 'byxubyf@mailinator.com', '14', 'Maiores reprehenderi', 'Et ea accusantium qu', 0, NULL, NULL, '2024-11-18 12:04:02', '2024-11-18 12:04:02'),
(16, 'Andrew Sutton', 'mixyweja@mailinator.com', '51', 'Eu quia minus atque', 'Alias cupidatat quia', 0, NULL, NULL, '2024-11-18 12:04:14', '2024-11-18 12:04:14'),
(17, 'Kadeem Wolf', 'cyvi@mailinator.com', '42', 'Ratione ullam ut qui', 'Soluta voluptate ull', 0, NULL, NULL, '2024-11-18 12:09:46', '2024-11-18 12:09:46'),
(18, 'Nolan Webb', 'lypajahim@mailinator.com', '78', 'Hic totam expedita q', 'Excepteur et non ips', 0, NULL, NULL, '2024-11-18 12:09:58', '2024-11-18 12:09:58'),
(19, 'Quinlan Carey', 'xurobyp@mailinator.com', '40', 'Quod maxime est quo', 'Commodi nihil illo n', 0, NULL, NULL, '2024-11-18 12:12:16', '2024-11-18 12:12:16'),
(20, 'Kiara Sears', 'bulucako@mailinator.com', '67', 'Sed obcaecati non su', 'Soluta porro amet e', 0, NULL, NULL, '2024-11-18 12:12:52', '2024-11-18 12:12:52'),
(21, 'Kylee Duncan', 'fecywu@mailinator.com', '67', 'Incidunt labore sun', 'Et nostrud recusanda', 0, NULL, NULL, '2024-11-18 12:13:00', '2024-11-18 12:13:00'),
(22, 'Ryder Hewitt', 'zegymyva@mailinator.com', '6', 'Dolores soluta error', 'Possimus facere sed', 0, NULL, NULL, '2024-11-18 12:13:11', '2024-11-18 12:13:11'),
(23, 'Kellie Peck', 'kehogecim@mailinator.com', '75', 'Esse id nobis molest', 'Eveniet impedit ut', 0, NULL, NULL, '2024-11-18 12:13:42', '2024-11-18 12:13:42'),
(24, 'Brody Matthews', 'jizaxetyqo@mailinator.com', '2', 'Autem sit qui moles', 'Laboris quasi dolori', 0, NULL, NULL, '2024-11-18 12:13:55', '2024-11-18 12:13:55'),
(25, 'Charles Hoffman', 'jagiku@mailinator.com', '52', 'Anim tempor dolores', 'Proident accusantiu', 0, NULL, NULL, '2024-11-18 12:14:06', '2024-11-18 12:14:06'),
(26, 'Serina Castillo', 'fomovohat@mailinator.com', '43', 'Nostrud autem dolor', 'Consequatur Tempora', 0, NULL, NULL, '2024-11-19 04:21:07', '2024-11-19 04:21:07'),
(27, 'Frances Carson', 'tozyj@mailinator.com', '6', 'Nulla sed do iusto q', 'Exercitationem ut id', 0, NULL, NULL, '2024-11-19 04:23:31', '2024-11-19 04:23:31'),
(28, 'Erasmus Parks', 'cexyvyr@mailinator.com', '62', 'Quisquam non molesti', 'Blanditiis neque dig', 0, NULL, NULL, '2024-11-19 04:25:29', '2024-11-19 04:25:29'),
(29, 'Joel Alford', 'jabofewac@mailinator.com', '74', 'Eum qui illum dicta', 'Necessitatibus possi', 0, NULL, NULL, '2024-11-19 05:29:23', '2024-11-19 05:29:23'),
(30, 'Courtney Aguirre', 'hugojeryqe@mailinator.com', '99', 'Amet accusantium ei', 'Qui cillum aliqua I', 0, NULL, NULL, '2024-11-19 05:29:29', '2024-11-19 05:29:29'),
(31, 'Gwendolyn Malone', 'baqudajeq@mailinator.com', '61', 'Ducimus eum nemo es', 'Dolor enim et accusa', 0, NULL, NULL, '2024-11-19 11:21:15', '2024-11-19 11:21:15'),
(32, 'Otto Chapman', 'mepi@mailinator.com', '6', 'Quae excepturi et vo', 'Blanditiis aute accu', 0, NULL, NULL, '2024-11-19 11:22:51', '2024-11-19 11:22:51'),
(33, 'Lucius Harmon', 'vule@mailinator.com', '93', 'Quas accusantium sae', 'Aspernatur perferend', 0, NULL, NULL, '2024-11-19 11:24:34', '2024-11-19 11:24:34'),
(34, 'Ramona Rowe', 'facohokini@mailinator.com', '37', 'Optio sed magni vel', 'Veniam id temporibu', 0, NULL, NULL, '2024-11-24 04:55:08', '2024-11-24 04:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 2),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(4, '2014_10_12_000000_create_users_table', 4),
(5, '2024_01_30_123321_create_roles_table', 5),
(6, '2024_01_30_123933_create_privileges_table', 6),
(8, '2023_12_26_114309_create_admins_table', 7),
(9, '2023_10_21_001204_create_basic_infos_table', 8),
(11, '2024_01_30_140322_create_menus_table', 9),
(13, '2024_10_26_114524_create_frontend_menus_table', 10),
(17, '2024_10_29_111249_create_galleries_table', 12),
(18, '2024_10_30_143258_create_service_types_table', 13),
(23, '2024_10_30_144304_create_services_table', 14),
(27, '2024_10_31_151502_create_products_table', 15),
(28, '2024_10_31_173528_create_companies_table', 16),
(29, '2024_10_29_091121_create_sliders_table', 17),
(30, '2024_11_03_155721_create_blog_categories_table', 18),
(31, '2024_11_03_162934_create_blogs_table', 19),
(32, '2024_11_18_112031_create_messages_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

CREATE TABLE `privileges` (
  `id` bigint UNSIGNED NOT NULL,
  `role_id` int NOT NULL,
  `menu_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privileges`
--

INSERT INTO `privileges` (`id`, `role_id`, `menu_id`, `created_at`, `updated_at`) VALUES
(102, 3, 1, '2024-10-27 09:48:02', '2024-10-27 09:48:02'),
(103, 3, 3, '2024-10-27 09:48:02', '2024-10-27 09:48:02'),
(104, 3, 4, '2024-10-27 09:48:02', '2024-10-27 09:48:02'),
(105, 3, 6, '2024-10-27 09:48:02', '2024-10-27 09:48:02'),
(106, 3, 7, '2024-10-27 09:48:02', '2024-10-27 09:48:02'),
(107, 3, 8, '2024-10-27 09:48:02', '2024-10-27 09:48:02'),
(122, 8, 1, '2024-11-11 11:26:04', '2024-11-11 11:26:04'),
(123, 8, 2, '2024-11-11 11:26:04', '2024-11-11 11:26:04'),
(124, 8, 33, '2024-11-11 11:26:04', '2024-11-11 11:26:04'),
(125, 8, 14, '2024-11-11 11:26:04', '2024-11-11 11:26:04'),
(126, 8, 15, '2024-11-11 11:26:04', '2024-11-11 11:26:04'),
(127, 8, 20, '2024-11-11 11:26:04', '2024-11-11 11:26:04'),
(128, 8, 19, '2024-11-11 11:26:04', '2024-11-11 11:26:04'),
(129, 8, 21, '2024-11-11 11:26:04', '2024-11-11 11:26:04'),
(130, 8, 22, '2024-11-11 11:26:04', '2024-11-11 11:26:04'),
(131, 8, 23, '2024-11-11 11:26:04', '2024-11-11 11:26:04'),
(132, 8, 16, '2024-11-11 11:26:04', '2024-11-11 11:26:04'),
(133, 8, 24, '2024-11-11 11:26:04', '2024-11-11 11:26:04'),
(134, 8, 25, '2024-11-11 11:26:04', '2024-11-11 11:26:04'),
(135, 8, 26, '2024-11-11 11:26:04', '2024-11-11 11:26:04'),
(136, 8, 17, '2024-11-11 11:26:04', '2024-11-11 11:26:04'),
(137, 8, 18, '2024-11-11 11:26:04', '2024-11-11 11:26:04'),
(138, 8, 27, '2024-11-11 11:26:04', '2024-11-11 11:26:04'),
(139, 8, 28, '2024-11-11 11:26:04', '2024-11-11 11:26:04'),
(140, 8, 29, '2024-11-11 11:26:04', '2024-11-11 11:26:04'),
(141, 8, 30, '2024-11-11 11:26:04', '2024-11-11 11:26:04'),
(142, 8, 31, '2024-11-11 11:26:04', '2024-11-11 11:26:04'),
(143, 8, 32, '2024-11-11 11:26:04', '2024-11-11 11:26:04');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pn` int NOT NULL DEFAULT '0',
  `is_in_home` tinyint NOT NULL DEFAULT '1',
  `status` tinyint NOT NULL DEFAULT '1',
  `created_by_id` int DEFAULT NULL,
  `updated_by_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `alt`, `pn`, `is_in_home`, `status`, `created_by_id`, `updated_by_id`, `created_at`, `updated_at`) VALUES
(2, 'API Pharma', '<p><font color=\"#000000\" style=\"\"><span style=\"font-family: Arial;\">Magura Group\'s Medicine Division is dedicated to enhancing health and well-being through the production and distribution of high-quality pharmaceuticals. Our commitment is to provide accessible, effective, and safe medications that meet global standards, helping communities lead healthier lives. With a diverse portfolio and a focus on innovation, we aim to address a wide range of healthcare needs in Bangladesh and beyond.</span></font></p><p><font color=\"#000000\" style=\"\"><span style=\"font-family: Arial;\">What We Offer:</span></font></p><ul><li><font color=\"#000000\" style=\"\"><span style=\"font-family: Arial;\">Broad Range of Medicines: From essential generics to specialized treatments, we cover multiple therapeutic categories, including antibiotics, pain management, cardiovascular health, diabetes care, and more.</span></font></li><li><font color=\"#000000\" style=\"\"><span style=\"font-family: Arial;\">Quality and Compliance: We adhere to stringent quality control measures, ensuring that all products meet international regulatory standards.</span></font></li><li><font color=\"#000000\" style=\"\"><span style=\"font-family: Arial;\">Innovation and Research: Driven by a focus on research and development, we continuously work to introduce advanced medicines that cater to evolving healthcare needs.</span></font></li><li><font color=\"#000000\" style=\"\"><span style=\"font-family: Arial;\">Affordable Healthcare Solutions: By prioritizing accessibility, we strive to make essential medications affordable and available to all, reducing healthcare barriers in underserved areas.</span></font></li><li><font color=\"#000000\" style=\"\"><span style=\"font-family: Arial;\">Strong Distribution Network: Our extensive network ensures timely and efficient delivery, allowing healthcare providers and patients to access our medicines when they need them most.</span></font></li></ul><p><font color=\"#000000\" style=\"\"><span style=\"font-family: Arial;\">Magura Group Medicine Division is committed to building a healthier future for Bangladesh, delivering reliable, high-quality pharmaceuticals that improve quality of life and empower healthcare providers.</span></font></p>', 'product-1730700748.jpg', 'Sint quo animi exer', 1, 0, 0, 1, 1, '2024-10-31 10:07:08', '2024-11-18 05:00:36'),
(3, 'Paper Rolls', '<p>Our premium ATM paper rolls are crafted to deliver clear, sharp, and durable print results for every transaction. Designed for smooth and efficient use in ATMs, these rolls ensure hassle-free printing with minimal paper jams, maximizing uptime and customer satisfaction.</p><p><strong>Product Highlights:</strong></p><ul><li><strong>High-Quality Print Clarity</strong>: Each roll produces clear, legible receipts, essential for accurate transaction records.</li><li><strong>Thermal Paper Technology</strong>: Made with top-grade thermal paper, eliminating the need for ink or toner and reducing maintenance costs.</li><li><strong>Standardized Sizing</strong>: Compatible with most ATM models, our rolls fit seamlessly, making replacements quick and easy.</li></ul>', 'product-1730700791.jpg', 'ATM Roll', -2, 1, 1, 1, 1, '2024-10-31 10:26:17', '2024-12-02 07:42:16'),
(4, 'Auto Brick', '<p>Our auto bricks provide a high-quality, sustainable alternative for construction, combining durability with environmental responsibility. Manufactured using advanced technology, these bricks offer uniform shape, size, and strength, ensuring consistency in every project. Ideal for residential, commercial, and industrial construction, auto bricks support stronger structures while reducing the environmental impact of traditional brick-making processes.</p><p><strong>Product Highlights:</strong></p><ul><li><strong>High Strength and Durability</strong>: Auto bricks are manufactured under high-pressure and temperature conditions, resulting in bricks that are more resilient and less prone to cracking.</li><li><strong>Uniform Shape and Size</strong>: Each brick is precisely molded, allowing for efficient stacking and seamless construction.</li><li><strong>Eco-Friendly Production</strong>: Made from sustainable materials and utilizing energy-efficient processes, auto bricks help reduce pollution and carbon emissions.</li><li><strong>Cost-Effective Solution</strong>: With lower wastage and minimal need for mortar, these bricks reduce overall construction costs.</li><li><strong>Weather Resistant</strong>: Our auto bricks are designed to withstand varying weather conditions, making them suitable for all climates.</li></ul><p>Perfect for environmentally-conscious builders, our auto bricks deliver strength, quality, and sustainability, laying the foundation for reliable, lasting structures.</p>', 'product-1730700841.jpg', 'Auto Brick', 3, 0, 1, 1, 1, '2024-11-04 06:14:01', '2024-11-14 05:07:21'),
(5, 'Publications', '<p>Our book publication services provide aspiring authors, established writers, and organizations with a streamlined path to share their stories, ideas, and expertise with the world. From concept to completion, we offer end-to-end solutions that bring your manuscript to life, with a focus on quality, creativity, and market reach.</p>\r\n<p><strong>What We Offer:</strong></p>\r\n<ul><li><strong>Editing and Proofreading</strong>: Our team of skilled editors refines your work, ensuring clarity, coherence, and a polished finish.</li><li><strong>Cover Design and Layout</strong>: Creative designers bring your vision to life with eye-catching covers and professionally crafted layouts that enhance the reading experience.</li><li><strong>Print and Digital Publishing</strong>: We offer flexible publishing options, including high-quality print copies and digital formats for e-readers, allowing your book to reach a broader audience.</li></ul>', 'product-1730700887.gif', 'Books Publications', -3, 1, 1, 1, 1, '2024-11-04 06:14:47', '2024-12-02 07:39:50'),
(6, 'Calendar', '<p>Our custom calendar services provide a practical and stylish way to stay organized all year round. Perfect for personal use, businesses, or gifting, our calendars are fully customizable, allowing you to add your unique touch to each page. With high-quality materials and vibrant prints, we ensure your calendar looks great and lasts the entire year.</p><p><strong>What We Offer:</strong></p><ul><li><strong>Fully Customizable Designs</strong>: Choose from a variety of templates or create a calendar with your own photos, graphics, and important dates.</li><li><strong>High-Quality Printing</strong>: Crisp, vivid colors and premium paper ensure each page is durable and attractive.</li><li><strong>Range of Formats</strong>: Available in wall, desk, or pocket formats, our calendars are designed to fit any space and lifestyle.</li><li><strong>Branding Options</strong>: For businesses, we offer logo integration and branded designs, making calendars a thoughtful and practical gift for clients and employees.</li><li><strong>Eco-Friendly Materials</strong>: We offer options for recyclable and eco-friendly materials to reduce environmental impact.</li><li><strong>Event and Holiday Customization</strong>: Mark significant dates, special events, or company milestones, making each calendar unique and personalized.</li></ul><p>Whether it’s to brighten your office, promote your business, or create a heartfelt gift, our custom calendar services combine functionality with creativity to make each day memorable.</p>', 'product-1730700914.jpg', 'Calendar', 5, 1, 0, 1, 1, '2024-11-04 06:15:14', '2024-11-14 07:27:29'),
(10, 'Computer Paper', '<p>Computer paper is a high-quality, continuous feed paper designed specifically for use with impact printers, dot matrix printers, and other high-volume printing environments. This type of paper is ideal for generating invoices, receipts, reports, shipping labels, and other transactional documents in bulk. It is usually available in a variety of sizes (such as 9.5\" x 11\" and 14.875\" x 11\") and perforated formats, with options for multi-part carbonless sheets that produce multiple copies in one pass.</p><p>Our computer paper features a smooth finish for clear print quality, easy readability, and efficient printer performance. Its perforated edges allow for easy removal of side strips, while the pre-scored folds ensure smooth, hassle-free feeding. Durable and reliable, this paper is an essential choice for any business that relies on continuous printing, minimizing interruptions and maximizing productivity.</p>', 'product-1731495431.jpg', 'Computer Paper', 0, 1, 1, 1, 1, '2024-11-13 10:47:14', '2024-11-13 10:57:11'),
(11, 'Panjabi-Kurta', '<p>Elevate your wardrobe with our beautifully crafted <strong>Panjabi-Kurta</strong>, a perfect blend of tradition and modern style. Made from premium-quality fabrics, this versatile outfit ensures both comfort and sophistication, ideal for any occasion – from festive celebrations to casual gatherings.</p><ul><li><strong>Premium Fabric</strong>: Soft, breathable, and lightweight material for all-day comfort.</li><li><strong>Traditional Craftsmanship</strong>: Features intricate embroidery/stitching for a refined and classic look.</li><li><strong>Perfect Fit</strong>: Designed for a relaxed yet stylish fit, suitable for all body types.</li><li><strong>Versatile Wear</strong>: Pair with pajama, jeans, or trousers for a complete look.</li><li><strong>Available Sizes &amp; Colors</strong>: Multiple options to match your preference.</li></ul><p>Step into the timeless charm of traditional attire with this <strong>Panjabi-Kurta</strong>, and let your style make a statement!</p>', 'product-1731564101.jpg', 'Panjabi-Kurta', 0, 0, 0, 1, 1, '2024-11-14 06:01:41', '2024-12-02 07:29:34'),
(12, 'Pos Roll', '<p>Ensure seamless transactions with our <strong>Premium POS Rolls</strong>, designed to deliver high-quality prints for all your point-of-sale systems. Whether for retail stores, restaurants, or offices, these rolls provide crisp, smudge-free receipts with every use.</p><ul><li><strong>High-Quality Paper</strong>: Smooth texture for clear, sharp printing without jams.</li><li><strong>Durable and Reliable</strong>: Tear-resistant and suitable for high-speed printers.</li><li><strong>Universal Compatibility</strong>: Works with most POS machines, cash registers, and receipt printers.</li><li><strong>Eco-Friendly Option</strong>: Made from recyclable materials to minimize environmental impact.</li><li><strong>Available Sizes</strong>: Multiple dimensions to suit your business needs.</li></ul><p>Streamline your operations with our <strong>POS Rolls</strong> and give your customers the professional service they deserve! Perfect for day-to-day use in any business setting.</p>', 'product-1731564190.png', 'Pos Roll', 0, 1, 1, 1, 1, '2024-11-14 06:03:10', '2024-11-24 04:19:58'),
(13, 'Exercise Book', '<p>Stay organized and boost your productivity with our <strong>Premium Exercise Book</strong>, designed for students, professionals, and creative minds. With its high-quality pages and sturdy construction, this exercise book is perfect for writing, drawing, or taking notes with ease and comfort.</p><ul><li><strong>Smooth Pages</strong>: High-quality paper ensures a smooth writing experience with minimal ink bleed.</li><li><strong>Durable Cover</strong>: Strong and flexible cover protects your notes and withstands daily wear and tear.</li><li><strong>Ample Space</strong>: Available in various page counts to suit your study or work needs.</li><li><strong>Eco-Friendly Material</strong>: Made from sustainably sourced paper for an environmentally friendly choice.</li><li><strong>Versatile Usage</strong>: Ideal for schools, colleges, offices, and personal projects.</li></ul><p>Stay ahead of your tasks with this <strong>Exercise Book</strong>, designed to inspire creativity and productivity every day!</p>', 'product-1731564290.jpg', 'Exercise Book', 0, 1, 1, 1, 1, '2024-11-14 06:04:50', '2024-11-24 04:21:01'),
(14, 'Kamiz-3 piece', '<p><strong>Product Title:</strong> Stylish Kamiz 3-Piece – Graceful, Comfortable &amp; Timeless</p><p><strong>Description:</strong><br>\r\nStep into elegance with our <strong>Kamiz 3-Piece</strong>, a perfect combination of tradition and contemporary fashion. Crafted with premium fabric and intricate designs, this outfit is ideal for any occasion – from casual outings to festive celebrations.</p><ul>\r\n<li><strong>Premium Fabric</strong>: Soft, breathable, and lightweight for ultimate comfort.</li>\r\n<li><strong>Beautiful Design</strong>: Features elegant embroidery/prints that showcase timeless craftsmanship.</li>\r\n<li><strong>Complete Set</strong>: Includes Kamiz (top), Salwar (bottom), and Dupatta (scarf) for a polished look.</li>\r\n<li><strong>Perfect Fit</strong>: Available in multiple sizes to flatter all body types.</li>\r\n<li><strong>Versatile Wear</strong>: Ideal for parties, weddings, or everyday elegance.</li>\r\n</ul><p>\r\n\r\n\r\n</p><p>Redefine your wardrobe with this <strong>Kamiz 3-Piece</strong>, offering a flawless blend of style, tradition, and comfort to help you stand out wherever you go!</p>', 'product-1731564445.jpg', 'Kamiz-3 piece', 0, 0, 0, 1, 1, '2024-11-14 06:07:25', '2024-12-01 11:17:50'),
(15, 'Carton Box', '<p>Keep your items safe and secure with our <strong>Durable Carton Boxes</strong>, designed for all your packaging and storage needs. Whether for shipping, moving, or organizing, these high-quality boxes provide the strength and reliability you can trust.</p><ul><li><strong>Sturdy Material</strong>: Made from high-quality corrugated cardboard for excellent durability.</li><li><strong>Secure Design</strong>: Reinforced edges ensure extra protection for heavy or fragile items.</li><li><strong>Versatile Sizes</strong>: Available in a variety of dimensions to suit your specific requirements.</li><li><strong>Eco-Friendly</strong>: Made from recyclable materials, supporting a sustainable environment.</li><li><strong>Multipurpose Use</strong>: Ideal for shipping, storage, office use, or home organization.</li></ul><p>Choose our <strong>Carton Boxes</strong> for a dependable packaging solution that ensures your items are well-protected during transport or storage. Perfect for personal and business needs!</p>', 'product-1731564522.jpeg', 'Carton Box', 0, 1, 1, 1, 1, '2024-11-14 06:08:42', '2024-11-24 04:23:37'),
(16, 'Photocopy Paper', '<p>Achieve crisp and professional results with our <strong>Premium Photocopy Paper</strong>, specially designed for high-quality printing and copying. Ideal for offices, schools, and home use, this paper ensures flawless performance with every print.</p><ul><li><strong>Superior Quality</strong>: Bright, smooth surface for sharp text and vibrant images.</li><li><strong>Multipurpose Use</strong>: Compatible with all printers, copiers, and fax machines.</li><li><strong>Eco-Friendly</strong>: Made from responsibly sourced materials, ensuring sustainability.</li><li><strong>Standard Sizes</strong>: Available in A4, Letter, and other popular sizes to meet your needs.</li><li><strong>Jam-Free Performance</strong>: Engineered to run smoothly, reducing paper jams and downtime.</li></ul><p>Perfect for everyday printing, presentations, and important documents, our <strong>Photocopy Paper</strong> is a reliable choice for professional and personal use. Get consistent quality every time!</p>', 'product-1731564633.jpg', 'Photocopy Paper', 0, 1, 1, 1, 1, '2024-11-14 06:10:33', '2024-11-24 04:24:37'),
(17, 'Security Printing', '<p>Protect your sensitive documents and maintain confidentiality with our <strong>Security Printing Solutions</strong>. Designed to prevent fraud, counterfeiting, and tampering, our cutting-edge technology ensures the highest level of security for your business or organization.</p><ul><li><strong>Advanced Security Features</strong>: Incorporates watermarks, holograms, microtext, QR codes, and other anti-counterfeiting measures.</li><li><strong>Customizable Designs</strong>: Tailored to meet your unique needs, including logos, serial numbers, and branding.</li><li><strong>High-Quality Printing</strong>: Crisp and precise printing on durable materials for long-lasting security.</li><li><strong>Wide Application</strong>: Ideal for certificates, bank checks, tickets, government documents, and more.</li><li><strong>Tamper-Proof Technology</strong>: Ensures authenticity and prevents unauthorized alterations.</li></ul><p>With our <strong>Security Printing Services</strong>, safeguard your valuable documents and uphold the trust and integrity of your brand or institution. Perfect for businesses, financial institutions, and government organizations!</p>', 'product-1731565096.jpg', 'Security Printing', 0, 1, 1, 1, 1, '2024-11-14 06:18:16', '2024-11-24 04:25:11'),
(18, 'Sweaters', '<p>Stay warm and fashionable with our <strong>Cozy Sweaters</strong>, designed to provide ultimate comfort and style during colder seasons. Crafted from high-quality materials, these sweaters are perfect for layering or wearing on their own.</p><ul><li><strong>Premium Fabric</strong>: Made from soft, breathable, and durable materials for long-lasting wear.</li><li><strong>Trendy Designs</strong>: Available in a variety of colors, patterns, and styles to suit every taste.</li><li><strong>Perfect Fit</strong>: Comfortable and versatile, suitable for casual or formal occasions.</li><li><strong>Warm &amp; Lightweight</strong>: Keeps you cozy without feeling bulky.</li><li><strong>Easy Maintenance</strong>: Machine washable and retains shape after every wash.</li></ul><p>Upgrade your winter wardrobe with our <strong>Stylish Sweaters</strong>, combining warmth and elegance to keep you looking great in every season!</p>', 'product-1731565176.jpg', 'Sweaters', 0, 1, 1, 1, 1, '2024-11-14 06:19:36', '2024-11-24 04:26:14'),
(19, 'Ream paper ( white )', '<p>Our <strong>Premium White Ream Paper</strong> is the ideal choice for all your printing and copying needs. With a bright, smooth finish, this high-quality paper ensures sharp and clear results for both text and images, making it perfect for home, office, or school use.</p><ul><li><strong>Bright White Finish</strong>: Provides excellent contrast for professional-looking documents.</li><li><strong>Multipurpose Use</strong>: Compatible with inkjet printers, laser printers, and copiers.</li><li><strong>Standard Size</strong>: Available in A4, Letter, and other popular formats to suit your requirements.</li><li><strong>High-Quality Paper</strong>: 75 GSM/80 GSM options for durability and smooth printing.</li><li><strong>Eco-Friendly</strong>: Made from responsibly sourced and recyclable materials.</li></ul><p>Whether it’s for reports, assignments, or everyday printing, our <strong>White Ream Paper</strong> delivers consistent performance and excellent results every time. Perfect for personal and professional use!</p>', 'product-1731565346.jpg', 'Ream paper ( white )', 0, 1, 1, 1, 1, '2024-11-14 06:22:26', '2024-11-24 04:27:00'),
(20, 'Note Books', '<p>Capture your thoughts, ideas, and notes with our <strong>Premium Notebooks</strong>, designed for students, professionals, and creative minds. With high-quality paper and sturdy construction, these notebooks are perfect for everyday use, whether at school, work, or home.</p><ul><li><strong>Smooth Writing Experience</strong>: High-quality pages with minimal ink bleed for crisp and clean notes.</li><li><strong>Durable Cover</strong>: Hard or soft covers protect your notes and ensure long-lasting use.</li><li><strong>Variety of Sizes</strong>: Available in A4, A5, and pocket-sized options to suit your needs.</li><li><strong>Practical Design</strong>: Includes ruled, plain, or grid pages for versatile usage.</li><li><strong>Eco-Friendly Materials</strong>: Made from sustainable, recyclable paper.</li></ul><p>Whether you\'re jotting down ideas, preparing for exams, or organizing your tasks, our <strong>Notebooks</strong> provide the perfect blend of functionality and style. Stay productive and organized every day!</p>', 'product-1731565504.png', 'Note Books', 0, 1, 1, 1, 1, '2024-11-14 06:25:04', '2024-11-24 04:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `is_superadmin` tinyint NOT NULL DEFAULT '0',
  `created_by` int DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `is_superadmin`, `created_by`, `role`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Super Admin', '2024-08-31 07:03:44', '2024-08-31 07:03:44'),
(3, 0, 1, 'General Manager', '2024-08-31 07:43:20', '2024-10-27 09:48:02'),
(8, 0, 1, 'Content Creator', '2024-10-27 09:39:31', '2024-11-11 11:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `service_type_id` int NOT NULL,
  `pn` int NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_by_id` int NOT NULL,
  `updated_by_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_type_id`, `pn`, `title`, `description`, `image`, `alt`, `status`, `created_by_id`, `updated_by_id`, `created_at`, `updated_at`) VALUES
(1, 1, 81, 'Delicious & Fresh Food Service – Convenient, High-Quality Meals Delivered', 'Experience the convenience of premium-quality meals delivered directly to your door with our Food Service. Whether you\'re hosting a corporate event, feeding a family, or simply enjoying a hassle-free meal, we offer a wide range of fresh, delicious options that cater to all tastes and dietary needs.\r\n\r\nFresh & Healthy Ingredients: We use only the finest, locally sourced ingredients to prepare each meal.\r\nWide Menu Selection: From traditional favorites to modern fusion dishes, we have options for every palate.\r\nCustomizable Meal Plans: Choose from a variety of meal types including vegetarian, vegan, gluten-free, and more.', 'service-1731127963.png', 'Excepteur nemo enim', 1, 1, 1, '2024-10-31 07:57:45', '2024-12-02 10:09:37'),
(2, 5, 1, 'Magura Group Medicine Division: Advancing Healthcare with Quality Pharmaceuticals', 'Magura Group\'s Medicine Division is dedicated to enhancing health and well-being through the production and distribution of high-quality pharmaceuticals. Our commitment is to provide accessible, effective, and safe medications that meet global standards, helping communities lead healthier lives. With a diverse portfolio and a focus on innovation, we aim to address a wide range of healthcare needs in Bangladesh and beyond.', 'service-1731127945.jpg', 'Rerum aut perferendi', 1, 1, 1, '2024-11-09 04:52:25', '2024-11-11 09:10:01'),
(3, 2, 1, 'Premium Clothing Service: Tailored Style, Exceptional Quality', 'Our clothing service offers a seamless experience, combining style, quality, and convenience for every wardrobe need. We specialize in curating collections that reflect the latest trends while emphasizing comfort, durability, and sophistication. From everyday essentials to statement pieces, our garments are crafted with precision and attention to detail.\r\n- **High-Quality Materials**: Only the finest fabrics are selected, ensuring long-lasting wear and comfort.\r\n- **Tailored Fits**: Our garments are designed to flatter all body types, with options for custom tailoring to meet your unique preferences.\r\n- **Trend-Driven Designs**: Stay stylish with our ever-evolving collection inspired by global fashion trends.', 'service-1731315931.jpeg', 'Premium Clothing Service: Tailored Style, Exceptional Quality', 1, 1, 1, '2024-11-09 04:53:51', '2024-11-11 09:06:43'),
(4, 4, 1, 'Comprehensive Education Services: Empowering Lifelong Learning', 'Our clothing service offers a seamless experience, combining style, quality, and convenience for every wardrobe need. We specialize in curating collections that reflect the latest trends while emphasizing comfort, durability, and sophistication. From everyday essentials to statement pieces, our garments are crafted with precision and attention to detail.', 'service-1731128074.gif', 'Comprehensive Education Services: Empowering Lifelong Learning', 1, 1, 1, '2024-11-09 04:54:34', '2024-11-11 09:08:19'),
(5, 6, 70, 'Hope in Action – Empowering Communities Through Service', '*Hope in Action – Empowering Communities Through Service* is a dedicated non-profit organization committed to making a meaningful difference in the lives of underserved communities. Our mission is to uplift individuals by providing access to vital resources, education, and sustainable solutions that foster self-reliance and resilience. We believe that every person deserves an opportunity to break free from the cycle of poverty, and we focus on long-term change through a compassionate, community-driven approach. By partnering with local leaders, volunteers, and donors, we bring customized programs in areas like health, education, and skill development directly to those who need it most.', 'service-1731128163.jpg', 'Aut velit aliqua E', 1, 1, 1, '2024-11-09 04:56:03', '2024-11-09 11:17:26'),
(6, 3, 44, 'Safe & Secure Shelter – Comfort and Protection You Can Trust', 'Find peace of mind with our Shelter Services, designed to provide a safe, secure, and comfortable living space for individuals or families in need. Whether temporary or long-term, our shelters are built with the highest standards of safety and care, ensuring a supportive environment for all.\r\n\r\nSafe & Secure Environment: Equipped with essential safety features, offering a peaceful and protected space.\r\nComfortable Accommodations: Clean, well-maintained facilities to ensure comfort and well-being.\r\nInclusive Support: Access to additional resources such as meals, counseling, and medical services.\r\nCaring Staff: Professional and compassionate staff available to support your needs.\r\nFlexible Duration: Short-term or long-term options to accommodate individual situations.\r\nOur Shelter services are dedicated to offering more than just a roof; they provide a supportive, caring environment to help individuals and families rebuild their lives with dignity.', 'service-1731128298.jpg', 'Doloribus est dolor', 1, 1, 1, '2024-11-09 04:58:18', '2024-11-24 04:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `service_types`
--

CREATE TABLE `service_types` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_in_home` tinyint DEFAULT '1',
  `status` tinyint NOT NULL DEFAULT '1',
  `created_by_id` int NOT NULL,
  `updated_by_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_types`
--

INSERT INTO `service_types` (`id`, `title`, `description`, `icon`, `is_in_home`, `status`, `created_by_id`, `updated_by_id`, `created_at`, `updated_at`) VALUES
(1, 'Food', 'Our food service delivers fresh, high-quality meals and catering options, focusing on taste and customer satisfaction.', '<i class=\"fas fa-utensils\" style=\"font-size: 65px;\"></i>', 1, 1, 1, 1, '2024-10-31 05:23:27', '2024-11-21 10:06:36'),
(2, 'Cloth', 'Our clothing service offers a curated selection of stylish apparel, focusing on quality and comfort for all occasions.', '<i class=\"fas fa-tshirt\" style=\"font-size: 65px;\"></i>', 1, 1, 1, 1, '2024-10-31 05:25:52', '2024-11-18 04:58:27'),
(3, 'Shelter', 'Our shelter service offers safe accommodations, providing individuals and families with support, a welcoming environment, and essential resources.', '<i class=\"fas fa-home\" style=\"font-size: 65px;\"></i>', 0, 1, 1, 1, '2024-10-31 05:26:15', '2024-11-21 10:07:00'),
(4, 'Education', 'Our education service provides comprehensive programs that empower students with knowledge and skills through innovative teaching and personalized support.', '<i class=\"fas fa-graduation-cap\" style=\"font-size: 65px;\"></i>', 1, 1, 1, 0, '2024-10-31 05:26:39', '2024-10-31 05:26:39'),
(5, 'Health', 'The Medicare sector offers essential healthcare services for seniors and individuals with disabilities, ensuring access to vital medical support.', '<i class=\"fas fa-medkit\" style=\"font-size: 65px;\"></i>', 0, 1, 1, 1, '2024-10-31 05:27:02', '2024-12-02 10:07:10'),
(6, 'Charity', 'Our charity service focuses on supporting communities in need, providing essential resources, and promoting social welfare through outreach and assistance.', '<i class=\"fas fa-donate\" style=\"font-size: 65px;\"></i>', 0, 0, 1, 1, '2024-10-31 05:27:36', '2024-11-18 04:55:35');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `srln` tinyint NOT NULL DEFAULT '1',
  `status` tinyint NOT NULL DEFAULT '1',
  `created_by_id` int DEFAULT NULL,
  `updated_by_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `company_id`, `title`, `description`, `image`, `alt`, `srln`, `status`, `created_by_id`, `updated_by_id`, `created_at`, `updated_at`) VALUES
(1, '0', 'Magura Group PLC', NULL, 'slider-1730695454.jpg', 'Empowering Unity', 2, 1, 1, 1, '2024-11-04 04:44:14', '2024-12-23 09:52:17'),
(2, '0', NULL, NULL, 'slider-1730695484.jpg', 'Innovation thrives in collaboration. When we unite our talents, we create a brighter future.', 2, 0, 1, 1, '2024-11-04 04:44:44', '2024-12-02 04:51:17'),
(3, '0', NULL, NULL, 'slider-1730695517.jpg', 'Success is not just a destination it\'s a journey we embark on together, supporting and uplifting each other every step of the way.', 3, 0, 1, 1, '2024-11-04 04:45:17', '2024-11-18 05:12:14'),
(4, '0', NULL, NULL, 'slider-1730695554.jpg', NULL, 4, 0, 1, 1, '2024-11-04 04:45:54', '2024-11-18 05:12:09'),
(5, '0', NULL, NULL, 'slider-1730695569.jpg', NULL, 5, 0, 1, 1, '2024-11-04 04:46:09', '2024-12-02 04:51:29'),
(6, '0', NULL, NULL, 'slider-1730695587.jpg', NULL, 6, 0, 1, 1, '2024-11-04 04:46:27', '2024-11-18 05:09:42'),
(7, '0', NULL, NULL, 'slider-1730708132.jpg', NULL, 2, 0, 1, 1, '2024-11-04 08:15:32', '2024-11-23 09:06:56'),
(8, '0', NULL, NULL, 'slider-1731559039.jpg', NULL, 0, 0, 1, 1, '2024-11-14 04:37:19', '2024-12-01 08:01:45'),
(10, '0', NULL, NULL, 'slider-1731906669.jpg', NULL, 1, 0, 1, 1, '2024-11-18 05:11:09', '2024-12-01 08:01:37'),
(11, '0', NULL, NULL, 'slider-1733040236.jpg', NULL, 3, 0, 1, 1, '2024-12-01 08:03:56', '2024-12-02 04:51:37'),
(12, '0', NULL, NULL, 'slider-1733040511.jpg', NULL, 5, 0, 1, 1, '2024-12-01 08:08:31', '2024-12-02 04:51:57'),
(13, '0', 'Paper Processing & Packaging Limited', NULL, 'slider-1733040783.png', NULL, 6, 1, 1, 1, '2024-12-01 08:09:30', '2024-12-02 07:20:48'),
(14, '0', NULL, NULL, 'slider-1733040820.jpg', NULL, 7, 0, 1, 1, '2024-12-01 08:13:40', '2024-12-04 03:35:14'),
(15, '0', NULL, NULL, 'slider-1733040878.jpg', NULL, 5, 0, 1, 1, '2024-12-01 08:14:38', '2024-12-02 04:52:12'),
(16, '0', 'Kores Bangladesh PLC', NULL, 'slider-1733041947.jpg', NULL, 5, 1, 1, 1, '2024-12-01 08:32:27', '2024-12-02 07:15:02'),
(17, '0', 'Kores Composite Textile Mills Ltd.', NULL, 'slider-1733041959.jpg', NULL, 5, 1, 1, 1, '2024-12-01 08:32:39', '2024-12-02 07:14:12'),
(18, '0', NULL, NULL, 'slider-1733041973.jpg', NULL, 5, 0, 1, 1, '2024-12-01 08:32:53', '2024-12-02 04:52:38'),
(19, '0', NULL, NULL, 'slider-1733114810.jpg', NULL, 7, 1, 1, NULL, '2024-12-02 04:46:50', '2024-12-02 04:46:50'),
(20, '0', NULL, NULL, 'slider-1733114821.JPG', NULL, 7, 0, 1, 1, '2024-12-02 04:47:01', '2024-12-23 09:52:30'),
(21, '0', NULL, NULL, 'slider-1733114833.JPG', NULL, 7, 0, 1, 1, '2024-12-02 04:47:13', '2024-12-02 07:04:41'),
(22, '0', 'South Town', NULL, 'slider-1733114853.JPG', NULL, 3, 1, 1, 1, '2024-12-02 04:47:33', '2024-12-23 09:54:42'),
(23, '0', 'Corporate Office', NULL, 'slider-1733114959.jpg', NULL, 0, 1, 1, 1, '2024-12-02 04:49:19', '2024-12-23 09:46:04'),
(24, '0', 'South Town Masque', NULL, 'slider-1733115329.png', NULL, 1, 1, 1, 1, '2024-12-02 04:55:29', '2024-12-23 09:52:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `basic_infos`
--
ALTER TABLE `basic_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `frontend_menus`
--
ALTER TABLE `frontend_menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `frontend_menus_slug_unique` (`slug`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `privileges`
--
ALTER TABLE `privileges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_types`
--
ALTER TABLE `service_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `basic_infos`
--
ALTER TABLE `basic_infos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontend_menus`
--
ALTER TABLE `frontend_menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privileges`
--
ALTER TABLE `privileges`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_types`
--
ALTER TABLE `service_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
