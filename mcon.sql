/*
Navicat MySQL Data Transfer

Source Server         : 本地服务器
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : mcon

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2018-01-24 15:22:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for designer
-- ----------------------------
DROP TABLE IF EXISTS `designer`;
CREATE TABLE `designer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designer_id` int(11) DEFAULT NULL,
  `designer_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of designer
-- ----------------------------

-- ----------------------------
-- Table structure for material
-- ----------------------------
DROP TABLE IF EXISTS `material`;
CREATE TABLE `material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` smallint(6) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of material
-- ----------------------------
INSERT INTO `material` VALUES ('1', '钾', '第一位元素', '12', '2', null, null);
INSERT INTO `material` VALUES ('5', '钙', '第二位元素', '1', '4', null, null);
INSERT INTO `material` VALUES ('6', '钾', '第一位元素', '12', '2', null, null);
INSERT INTO `material` VALUES ('7', '钙', '第二位元素', '1', '5', null, null);
INSERT INTO `material` VALUES ('9', '12', '12', '12', '12', '2018-01-23 13:42:45', '2018-01-23 13:42:45');
INSERT INTO `material` VALUES ('12', '钾', '第一位元素', '12', '0', '2018-01-24 06:55:11', '2018-01-23 14:07:48');

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `m_id` varchar(255) DEFAULT NULL,
  `m_quantity` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES ('1', '1', '5', null, null);
INSERT INTO `order` VALUES ('2', '213', '5', '2018-01-24 06:29:58', '2018-01-24 06:29:58');
INSERT INTO `order` VALUES ('3', '231', '5', '2018-01-24 06:29:58', '2018-01-24 06:29:58');
INSERT INTO `order` VALUES ('4', '12', '5', '2018-01-24 06:41:58', '2018-01-24 06:41:58');
INSERT INTO `order` VALUES ('5', '12', '5', '2018-01-24 06:41:58', '2018-01-24 06:41:58');
INSERT INTO `order` VALUES ('6', '12', '5', '2018-01-24 06:55:11', '2018-01-24 06:55:11');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `designer_id` varchar(255) NOT NULL,
  `material1_id` int(255) DEFAULT NULL,
  `material2_id` int(11) DEFAULT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `prime_cost` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('1', '蒙娜丽莎', '102', '1', '5', 'Tom', '25', '名画');
INSERT INTO `product` VALUES ('2', '最后的晚餐', '101', '1', '5', 'George', '25', '世界名画');
INSERT INTO `product` VALUES ('3', '1', '23', '31', '123', '123', null, '123');
INSERT INTO `product` VALUES ('4', '123', '12', '12', '12', '132', null, '123');
INSERT INTO `product` VALUES ('9', '213', '12', '12', '12', '123', null, '123');
INSERT INTO `product` VALUES ('10', '12', '12', '12', '12', '123', null, '123');
INSERT INTO `product` VALUES ('11', '213', '213', '213', '231', '123', null, '123');
INSERT INTO `product` VALUES ('12', '123', '12', '10', '10', '312', null, '123');
INSERT INTO `product` VALUES ('13', '213', '123', '12', '12', '123', '24', '132');
INSERT INTO `product` VALUES ('14', '234', '123', '12', '5', '123', '13', '132');
