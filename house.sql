/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : u+

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-05-30 16:06:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for house
-- ----------------------------
DROP TABLE IF EXISTS `house`;
CREATE TABLE `house` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) DEFAULT NULL,
  `h_address` varchar(255) DEFAULT NULL,
  `t_id` int(11) DEFAULT NULL,
  `h_area` decimal(10,0) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `in_time` date DEFAULT NULL,
  `out_time` date DEFAULT NULL,
  `receive_time` datetime DEFAULT NULL,
  `deposit` decimal(10,0) DEFAULT NULL,
  `pay` decimal(10,0) DEFAULT NULL,
  `content` text,
  `photo` varchar(255) DEFAULT NULL,
  `phone` varchar(60) DEFAULT NULL,
  `linkman` varchar(60) DEFAULT NULL,
  `is_hot` tinyint(4) DEFAULT NULL,
  `is_best` tinyint(4) DEFAULT NULL,
  `is_cheap` tinyint(4) DEFAULT NULL,
  `x_postion` varchar(60) DEFAULT NULL,
  `y_postion` varchar(60) DEFAULT NULL,
  `zoom` varchar(10) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `h_time` date DEFAULT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of house
-- ----------------------------
INSERT INTO `house` VALUES ('1', '1', '北京朝阳a小区', '1', '200', '1', '2016-05-12', '2016-07-30', '2016-05-27 14:37:49', '3000', '1500', '*房子是2室1厅1厨1卫1阳台的舒适好户型，装修风格大气温馨，卧室内部是全木地板，房间南北通透，宜居舒适。\r\n*屋内设施齐全：电视、空调、洗衣机、WIFI、冰箱、24小时热水、餐桌以及锅碗瓢盆……一应俱全！\r\n*屋内共有两个房间，均为可睡2人的1.8米双人床、主卧有一个单独的衣帽间, 次卧有大壁橱, 行李衣服完全可以轻松收纳，在此小住可谓完全的舒适自在~关上房门，可尽享私密空间哦。\r\n*厨房、客厅设施的齐全，您可以看电视、上网、下厨做一顿大餐，饭后闲聊，这一切就像在您自己家里一样，；\r\n*我为您提供免费的洗发水、沐浴露、纸巾、拖鞋。但是牙具、毛巾、护肤品等请自备。\r\n*额，如若还要有其他啥我没提到的，您可以在线与我沟通咨询哟。', '2016-05-27/b1e97654e8f1b0b097d185270153a931.jpg', '15100146754', '孙辉', '1', '0', '0', '114.755301', '38.288893', null, '1', '2016-05-27');
INSERT INTO `house` VALUES ('2', '1', '河北石家庄b区', '2', '100', '2', '2016-05-14', '2016-07-10', '2016-05-28 12:00:00', '1200', '1200', '                         高 很好           ', '2016-05-28/134895dd1fc2c62258967213a41a00de.jpg', '010-12345678', '孙辉', '1', '0', '0', '111.013379', '35.032587', null, '1', '2016-05-29');
INSERT INTO `house` VALUES ('3', '1', '河南郑州c小区', '3', '150', '3', '2016-05-22', '2016-08-31', '2016-05-24 00:00:00', '1500', '2000', '这是个很好的房子', '2016-05-28/638d706b1be7820353987172ae2b309f.jpg', '010-12345678', '辉哥哥', '0', '1', '0', '116.413554', '39.911013', null, '1', '2016-05-30');
INSERT INTO `house` VALUES ('4', '2', '山西运城d小区', '4', '130', '4', '2016-05-12', '2016-08-31', '2016-05-25 07:00:00', '1000', '1000', '    这是一个很好的房子哦                                ', '2016-05-28/23a3307f24142818d2ed75c11b9f2440.jpg', '0438-0016987', '孙辉', '0', '1', '0', '117.205914', '39.090908', null, '1', '2016-05-30');
INSERT INTO `house` VALUES ('5', '1', '北京海淀e小区', '1', '90', '5', '2016-05-31', '2016-07-30', '2016-05-16 00:00:00', '1200', '1200', '                                    很好的一间房子', '2016-05-30/e9d6590cf691cb469be45c2a9b948640.jpg', '0010-12345678', '董芳哼', '0', '0', '1', '118.802891', '32.064735', null, '1', '2016-05-28');
INSERT INTO `house` VALUES ('6', '1', '上海浦东f小区', '6', '120', '6', '2016-05-30', '2016-08-31', '2016-05-30 00:00:00', '2000', '1800', '                                   jhihijhjhjsaKJFn', '2016-05-30/4e6e71ab75a1fc6b09003b8f9bc17de5.jpg', '010-12345678', '切沃', '0', '0', '1', '112.989982', '28.118301', null, '1', '2016-05-27');
