/*
 Navicat Premium Data Transfer

 Source Server         : XAMPP
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : yazilimegitim

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 18/01/2021 12:07:06
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `comments_post_id_foreign`(`post_id`) USING BTREE,
  CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES (1, 'test', 'test', 'test', 'test', 1, 6, 0, '2021-01-01 22:08:04', '2021-01-01 22:08:04');
INSERT INTO `comments` VALUES (2, 'cevap1', 'cevaop', 'cevap', 'cevap', 1, 6, 1, '2021-01-01 22:08:04', '2021-01-01 22:08:04');
INSERT INTO `comments` VALUES (3, 'cevap2', 'cevap2', 'cevap2', 'cevap2', 1, 6, 1, '2021-01-01 22:08:04', '2021-01-01 22:08:04');
INSERT INTO `comments` VALUES (5, 'test2', 'test2', 'test2', 'test2', 1, 6, 0, '2021-01-01 22:08:04', '2021-01-01 22:08:04');
INSERT INTO `comments` VALUES (6, 'cevap3', 'cevap3', 'cevap3', 'cevap3', 1, 6, 2, '2021-01-01 22:08:04', '2021-01-01 22:08:04');
INSERT INTO `comments` VALUES (8, 'cevap4', 'cevap4', 'cevap4', 'cevap4', 1, 6, 5, '2021-01-01 22:08:04', '2021-01-01 22:08:04');
INSERT INTO `comments` VALUES (9, 'cevap5', 'cevap5', 'cevap5', 'cevap5', 1, 6, 5, '2021-01-01 22:08:04', '2021-01-01 22:08:04');
INSERT INTO `comments` VALUES (10, 'sercan', 'sercan@juvenis.com.tr', 'test', 'tetss', 1, 6, 0, '2021-01-01 19:59:03', '2021-01-01 19:59:03');
INSERT INTO `comments` VALUES (11, 'sercan cevap', 'sercan@juvenis.com', 'dsadas', 'dadasdada dsa sadasd as das asd', 1, 6, 10, '2021-01-01 20:00:46', '2021-01-01 20:00:46');
INSERT INTO `comments` VALUES (12, 'test alt', 'admin@admin.com', 'dasdad', 'adadss dasd asd as das', 1, 6, 11, '2021-01-01 20:01:31', '2021-01-01 20:01:31');
INSERT INTO `comments` VALUES (13, 'test alt alt ', 'admin@admin.com', 'dasdad', 'adadss dasd asd as das', 1, 6, 11, '2021-01-01 20:01:31', '2021-01-01 20:01:31');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_type` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL DEFAULT 9999,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `menu_user_id_foreign`(`user_id`) USING BTREE,
  CONSTRAINT `menu_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES (1, 'Anasayfa', 'index', 1, 1, 11, 1, '2020-12-25 19:40:47', '2020-12-25 19:40:47');
INSERT INTO `menu` VALUES (2, 'İletişim', 'contact', 2, 1, 11, 4, '2020-12-25 19:56:43', '2020-12-25 19:56:43');
INSERT INTO `menu` VALUES (3, 'anasayfa', 'index', 1, 1, 11, 9999, '2020-12-26 18:26:09', '2020-12-26 18:26:09');
INSERT INTO `menu` VALUES (4, 'admin', 'admin.index', 1, 0, 11, 9999, '2020-12-26 18:26:50', '2020-12-26 18:26:50');
INSERT INTO `menu` VALUES (5, 'About', 'about', 1, 0, 11, 9999, '2020-12-26 18:33:08', '2020-12-26 18:33:08');
INSERT INTO `menu` VALUES (6, 'Blog', 'blog-index', 2, 0, 11, 9999, '2020-12-26 18:33:53', '2020-12-26 18:33:53');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2020_12_06_105643_create_tags_table', 1);
INSERT INTO `migrations` VALUES (5, '2020_12_06_110455_create_post_category_table', 1);
INSERT INTO `migrations` VALUES (6, '2020_12_06_111338_create_posts_table', 1);
INSERT INTO `migrations` VALUES (7, '2020_12_25_191922_create_menu_table', 2);
INSERT INTO `migrations` VALUES (8, '2021_01_01_190301_create_comments_table', 3);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for post_category
-- ----------------------------
DROP TABLE IF EXISTS `post_category`;
CREATE TABLE `post_category`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `post_category_user_id_foreign`(`user_id`) USING BTREE,
  CONSTRAINT `post_category_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of post_category
-- ----------------------------
INSERT INTO `post_category` VALUES (1, 'Frontend', NULL, 11, 'frontend', 1, '2020-12-18 20:19:09', '2020-12-18 20:19:09');
INSERT INTO `post_category` VALUES (2, 'Backend', NULL, 11, 'backend', 1, '2020-12-18 20:19:16', '2020-12-18 20:19:16');

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `publish_date` datetime(0) NULL DEFAULT NULL,
  `read_count` int(11) NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `posts_user_id_foreign`(`user_id`) USING BTREE,
  INDEX `posts_category_id_foreign`(`category_id`) USING BTREE,
  CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `post_category` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (1, 'TEest', '<p>PHPt</p>', 11, 1, 'sertet', 'test1', '\"2,3\"', 1, '2020-12-18 22:51:55', 5, '2020-12-18 22:51:55', '2020-12-20 18:33:03');
INSERT INTO `posts` VALUES (2, 'ahmet eren', '<p>PHPt</p>', 5, 1, 'sertet', 'test2', '\"2,3\"', 1, '2020-12-18 22:51:55', 10, '2020-12-18 22:51:55', '2020-12-20 18:33:03');
INSERT INTO `posts` VALUES (3, 'test', '<p>test</p>', 11, 0, 'postImage/1200px-Laravel_19-12-2020_18-31-18.png', 'test3', '\"2,3\"', 2, NULL, 0, '2020-12-19 18:31:18', '2020-12-25 17:38:34');
INSERT INTO `posts` VALUES (4, 'test', '<p>dasdada</p>', 5, 1, 'postImage/WhatsApp Image 2020-12-02 at 13_19-12-2020_18-33-20.jpeg', 'test4', '\"2,3\"', 2, '2020-12-25 18:33:20', 4, '2020-12-19 18:33:20', '2020-12-20 18:17:00');
INSERT INTO `posts` VALUES (5, 'test', '<p>test</p>', 5, 0, 'postImage/1200px-Laravel_19-12-2020_18-31-18.png', 'test5', '\"2,3\"', 2, NULL, 0, '2020-12-19 18:31:18', '2020-12-25 17:38:34');
INSERT INTO `posts` VALUES (6, 'test', '<p><b>dasdada</b></p>', 11, 1, 'postImage/WhatsApp Image 2020-12-02 at 13_19-12-2020_18-33-20.jpeg', 'test6', '\"2,3\"', 2, '2020-12-25 18:33:20', 0, '2020-12-19 18:33:20', '2020-12-20 18:17:00');
INSERT INTO `posts` VALUES (7, 'TEest', '<p>PHPt</p>', 11, 1, 'sertet', 'test7', '\"2,3\"', 1, '2020-12-18 22:51:55', 0, '2020-12-18 22:51:55', '2020-12-20 18:33:03');
INSERT INTO `posts` VALUES (8, 'test', '<p>test</p>', 11, 0, 'postImage/1200px-Laravel_19-12-2020_18-31-18.png', 'test8', '\"2,3\"', 2, NULL, 0, '2020-12-19 18:31:18', '2020-12-25 17:38:34');
INSERT INTO `posts` VALUES (9, 'test', '<p>dasdada</p>', 11, 1, 'postImage/WhatsApp Image 2020-12-02 at 13_19-12-2020_18-33-20.jpeg', 'test9', '\"2,3\"', 2, '2020-12-25 18:33:20', 0, '2020-12-19 18:33:20', '2020-12-20 18:17:00');
INSERT INTO `posts` VALUES (10, 'TEest', '<p>PHPt</p>', 11, 1, 'sertet', 'test10', '\"2,3\"', 1, '2020-12-18 22:51:55', 0, '2020-12-18 22:51:55', '2020-12-20 18:33:03');
INSERT INTO `posts` VALUES (11, 'test', '<p>test</p>', 11, 0, 'postImage/1200px-Laravel_19-12-2020_18-31-18.png', 'test11', '\"2,3\"', 2, NULL, 0, '2020-12-19 18:31:18', '2020-12-25 17:38:34');
INSERT INTO `posts` VALUES (12, 'test', '<p>dasdada</p>', 11, 1, 'postImage/WhatsApp Image 2020-12-02 at 13_19-12-2020_18-33-20.jpeg', 'test12', '\"2,3\"', 2, '2020-12-25 18:33:20', 0, '2020-12-19 18:33:20', '2020-12-20 18:17:00');

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `tags_user_id_foreign`(`user_id`) USING BTREE,
  CONSTRAINT `tags_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tags
-- ----------------------------
INSERT INTO `tags` VALUES (2, 'Html', 1, 11, '2020-12-18 22:35:39', '2020-12-18 22:35:39');
INSERT INTO `tags` VALUES (3, 'PHP', 1, 11, '2020-12-18 22:35:54', '2020-12-18 22:35:54');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `reset_password_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `reset_password_expired` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Kennith Bashirian', 'wking@hotmail.com', NULL, '$2y$10$gv9ofOFOQxmYtJKoL/3fKOgFs9qtLNFTUIOaDZwh6dsre/uthB5/e', NULL, NULL, NULL, '2020-12-18 20:18:32', '2020-12-18 20:18:32');
INSERT INTO `users` VALUES (2, 'Barry Hill', 'llittle@little.com', NULL, '$2y$10$LRXk1abABfS2JPh5S1J0y.rgIB3c2QwN8m6fXEZNwHOStjabWbyQe', NULL, NULL, NULL, '2020-12-18 20:18:32', '2020-12-18 20:18:32');
INSERT INTO `users` VALUES (3, 'Rey Murray PhD', 'magdalena.boyle@hotmail.com', NULL, '$2y$10$Xt9bhkklxS0h1gulUdbkG.AYPtZo.rhGPdQbFLWwuP5lYtLHvv15y', NULL, NULL, NULL, '2020-12-18 20:18:32', '2020-12-18 20:18:32');
INSERT INTO `users` VALUES (4, 'Junius Kautzer', 'iwunsch@greenfelder.org', NULL, '$2y$10$sZEszg3y4hi25EDAiqh/QO3Xx7RiHpdWz7XfEgWtc3nRNvH5A84wm', NULL, NULL, NULL, '2020-12-18 20:18:32', '2020-12-18 20:18:32');
INSERT INTO `users` VALUES (5, 'Avis Graham I', 'kuhlman.helen@yahoo.com', NULL, '$2y$10$7dYG7YeIHQafrpDHDtkpReZikB6Hc7lrmoZ.ZwBHYLrQ/8dJwxfK2', NULL, NULL, NULL, '2020-12-18 20:18:32', '2020-12-18 20:18:32');
INSERT INTO `users` VALUES (6, 'Juliana Kirlin', 'boyle.freeda@yahoo.com', NULL, '$2y$10$Y1L9uUqXimupIxKNk.nCtOVDgpQZm9K0bZiEaBAwDA1ZMASpNAtPu', NULL, NULL, NULL, '2020-12-18 20:18:32', '2020-12-18 20:18:32');
INSERT INTO `users` VALUES (7, 'Mr. Jarrell Balistreri IV', 'louie51@gmail.com', NULL, '$2y$10$6BvsTeDcnjKVl5qFbkezBeSy1Oq95jH7wkFlUPOHnH.J5VaHnTbnS', NULL, NULL, NULL, '2020-12-18 20:18:32', '2020-12-18 20:18:32');
INSERT INTO `users` VALUES (8, 'Lawrence Weimann DVM', 'erich99@yahoo.com', NULL, '$2y$10$AO8anP.usupxXikTbuK.uuk7A9KblPvMWTB0fPYJdkf8rP5d6OpHy', NULL, NULL, NULL, '2020-12-18 20:18:33', '2020-12-18 20:18:33');
INSERT INTO `users` VALUES (9, 'Kathryne Tremblay', 'collier.oma@gmail.com', NULL, '$2y$10$06uSJHeF48TVygRPQVbe3ugSHE7wD7.gsj./1DtFc9EXW2YFX1D36', NULL, NULL, NULL, '2020-12-18 20:18:33', '2020-12-18 20:18:33');
INSERT INTO `users` VALUES (10, 'Sercan Özen', 'sercanozennn@gmail.com', NULL, '$2y$10$su8GsG2BJoNlAAlyp6.4leePe3V9v8kO0rFMMVXB9O2q234kDs3IC', NULL, 'bnsjSF3DS7PKkMTHBNckw48Y5R967iLXjPBRh9da', '2020-12-25 20:04:37', '2020-12-18 20:18:33', '2020-12-25 18:04:37');
INSERT INTO `users` VALUES (11, 'admin', 'admin@admin.com', NULL, '$2y$10$.EtkHQVjJ/78nle7psVS2OnYQF7Jssg3X7sXspMTzYpilxa8DFTaO', NULL, NULL, NULL, '2020-12-18 20:18:33', '2020-12-18 20:18:33');

SET FOREIGN_KEY_CHECKS = 1;
