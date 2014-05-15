/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : xinshijie

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2014-05-11 11:53:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `xsj_category`
-- ----------------------------
DROP TABLE IF EXISTS `xsj_category`;
CREATE TABLE `xsj_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cname` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xsj_category
-- ----------------------------

-- ----------------------------
-- Table structure for `xsj_catepower`
-- ----------------------------
DROP TABLE IF EXISTS `xsj_catepower`;
CREATE TABLE `xsj_catepower` (
  `cateid` int(11) unsigned NOT NULL,
  `poid` int(11) unsigned NOT NULL,
  PRIMARY KEY (`cateid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8  ;

-- ----------------------------
-- Records of xsj_catepower
-- ----------------------------

-- ----------------------------
-- Table structure for `xsj_comment`
-- ----------------------------
DROP TABLE IF EXISTS `xsj_comment`;
CREATE TABLE `xsj_comment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `content` tinytext,
  `forumid` int(11) DEFAULT NULL,
  `ctime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rname` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xsj_comment
-- ----------------------------
INSERT INTO `xsj_comment` VALUES ('1', 'zhang', '11111', '2', '2014-04-24 11:15:24', '张三');

-- ----------------------------
-- Table structure for `xsj_docfile`
-- ----------------------------
DROP TABLE IF EXISTS `xsj_docfile`;
CREATE TABLE `xsj_docfile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `docname` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `docpath` varchar(200) DEFAULT NULL,
  `noticeid` int(11) unsigned DEFAULT NULL,
  `dtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rname` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xsj_docfile
-- ----------------------------
INSERT INTO `xsj_docfile` VALUES ('1', '我的一天.doc', 'zhang', null, '4', '2014-04-24 11:15:39', '张三');
INSERT INTO `xsj_docfile` VALUES ('2', '11.jpg', 'admin', './upload/doc/90/8987c65447397e2c7023535a21b51f7d.jpg', '1', '2014-04-25 16:50:57', '李四');
INSERT INTO `xsj_docfile` VALUES ('3', 'qq.jpg', 'admin', './upload/doc/99/8f1e7b87e3d0ff86194b535a227bcd67.jpg', '1', '2014-04-25 16:52:05', '李四');
INSERT INTO `xsj_docfile` VALUES ('4', 'qq.jpg', 'admin', './upload/doc/68/26dea756628e73aa6243535a285705dc.jpg', '3', '2014-04-25 17:17:38', '李四');

-- ----------------------------
-- Table structure for `xsj_follow`
-- ----------------------------
DROP TABLE IF EXISTS `xsj_follow`;
CREATE TABLE `xsj_follow` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `forumid` int(10) unsigned NOT NULL,
  `fotime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rname` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`,`username`,`forumid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xsj_follow
-- ----------------------------
INSERT INTO `xsj_follow` VALUES ('1', 'zhang', '2', '2014-04-24 11:15:54', '张三');

-- ----------------------------
-- Table structure for `xsj_forum`
-- ----------------------------
DROP TABLE IF EXISTS `xsj_forum`;
CREATE TABLE `xsj_forum` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text,
  `username` varchar(50) DEFAULT NULL,
  `ftime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `istop` tinyint(4) DEFAULT '0' COMMENT '0否，1是',
  `rname` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`,`title`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xsj_forum
-- ----------------------------
INSERT INTO `xsj_forum` VALUES ('1', '11111111', '11111', 'zhang', '2014-04-24 11:16:15', '0', '张三');
INSERT INTO `xsj_forum` VALUES ('2', '22222222', '2222222', 'zhang', '2014-04-24 11:16:18', '1', '张三');
INSERT INTO `xsj_forum` VALUES ('3', '33333', '3333333', 'wang', '2014-04-24 11:16:27', '0', '王五');
INSERT INTO `xsj_forum` VALUES ('4', '我的2014', '<img src=\"/upload/564/4fb2d27ceaefe46e9c8453526cee4384.jpg\" alt=\"\" />', 'wang', '2014-04-24 11:16:29', '0', '王五');

-- ----------------------------
-- Table structure for `xsj_notice`
-- ----------------------------
DROP TABLE IF EXISTS `xsj_notice`;
CREATE TABLE `xsj_notice` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text,
  `username` varchar(50) DEFAULT NULL,
  `ntime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isimportant` tinyint(3) DEFAULT '0' COMMENT '0否，1是',
  `rname` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`,`title`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xsj_notice
-- ----------------------------
INSERT INTO `xsj_notice` VALUES ('1', '我们要换届选举了', '财富和打击阿富汗deaf你街道办事处vbdsnzcbdsjfcdvcndbcjdscvnd', 'zhang', '2014-04-24 11:16:50', '0', '张三');
INSERT INTO `xsj_notice` VALUES ('3', '水水水水水水水水', '喜喜喜喜喜喜喜喜喜喜喜喜喜喜喜喜喜喜喜喜喜喜', 'zhang', '2014-04-24 11:16:52', '0', '张三');
INSERT INTO `xsj_notice` VALUES ('4', '啊啊啊', '啊啊啊', 'zhang', '2014-04-24 11:16:53', '0', '张三');

-- ----------------------------
-- Table structure for `xsj_power`
-- ----------------------------
DROP TABLE IF EXISTS `xsj_power`;
CREATE TABLE `xsj_power` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pname` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8  ;

-- ----------------------------
-- Records of xsj_power
-- ----------------------------

-- ----------------------------
-- Table structure for `xsj_psys`
-- ----------------------------
DROP TABLE IF EXISTS `xsj_psys`;
CREATE TABLE `xsj_psys` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) NOT NULL DEFAULT '',
  `cateid` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xsj_psys
-- ----------------------------

-- ----------------------------
-- Table structure for `xsj_users`
-- ----------------------------
DROP TABLE IF EXISTS `xsj_users`;
CREATE TABLE `xsj_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '' COMMENT '用户名',
  `userpwd` varchar(100) NOT NULL COMMENT '密码',
  `useremail` varchar(50) NOT NULL COMMENT '邮箱',
  `rname` varchar(10) DEFAULT NULL,
  `userpic` varchar(100) DEFAULT './image/cli/100.jpg' COMMENT '头像',
  `userlevel` varchar(10) DEFAULT 'ordinary' COMMENT 'ordinary普通，admin管理员',
  `islock` tinyint(3) DEFAULT '0' COMMENT '0否，1是',
  `isapply` tinyint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`id`,`username`,`useremail`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xsj_users
-- ----------------------------
INSERT INTO `xsj_users` VALUES ('1', 'zhang', 'd0cd2693b3506677e4c55e91d6365bff', '1230456@qq.com', '张三', './upload/header/zhang.jpg?1397969399', 'ordinary', '0', '0');
INSERT INTO `xsj_users` VALUES ('6', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1666904207@qq.com', '李四', './image/cli/100.jpg', 'admin', '0', '0');
