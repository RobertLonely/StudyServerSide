/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 80017
 Source Host           : localhost:3306
 Source Schema         : demo

 Target Server Type    : MySQL
 Target Server Version : 80017
 File Encoding         : 65001

 Date: 30/07/2019 21:23:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `gender` tinyint(4) NULL DEFAULT NULL,
  `birthday` date NULL DEFAULT NULL,
  `avatar` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, '张三', 0, '1997-11-11', '/crud/assets/img/icon-08.png');
INSERT INTO `users` VALUES (2, '李四', 1, '2000-11-11', '/crud/assets/img/icon-40.png');
INSERT INTO `users` VALUES (3, '张三', 0, '1997-11-11', '/crud/assets/img/icon-08.png');
INSERT INTO `users` VALUES (4, '李四', 1, '2000-11-11', '/crud/assets/img/icon-40.png');
INSERT INTO `users` VALUES (5, '张三', 0, '1997-11-11', '/crud/assets/img/icon-08.png');
INSERT INTO `users` VALUES (6, '李四', 1, '2000-11-11', '/crud/assets/img/icon-40.png');
INSERT INTO `users` VALUES (7, '张三', 0, '1997-11-11', '/crud/assets/img/icon-08.png');
INSERT INTO `users` VALUES (8, '李四', 1, '2000-11-11', '/crud/assets/img/icon-40.png');
INSERT INTO `users` VALUES (9, '张三', 0, '1997-11-11', '/crud/assets/img/icon-08.png');

SET FOREIGN_KEY_CHECKS = 1;
