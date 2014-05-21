-- MySQL dump 10.14  Distrib 5.5.37-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: bairun
-- ------------------------------------------------------
-- Server version	5.5.37-MariaDB-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `br_admin`
--

DROP TABLE IF EXISTS `br_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `br_admin` (
  `aid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '后台用户ID',
  `login_name` varchar(128) NOT NULL DEFAULT '' COMMENT '登录名',
  `login_passwd` varchar(128) NOT NULL DEFAULT '' COMMENT '密码',
  `salt` char(4) NOT NULL DEFAULT '',
  `email` varchar(128) NOT NULL,
  `sex` tinyint(3) unsigned NOT NULL DEFAULT '2' COMMENT '用户性别0女1男',
  `admin_tel` varchar(48) NOT NULL DEFAULT '' COMMENT '手机',
  `real_name` varchar(128) NOT NULL DEFAULT '' COMMENT '后台用户姓名',
  `admin_status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '状态0冻结1可用',
  `admin_group` int(1) unsigned NOT NULL DEFAULT '0' COMMENT '后台用户等级',
  `reg_ip` char(15) NOT NULL DEFAULT '' COMMENT '创建时的IP',
  `reg_date` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `last_ip` char(15) NOT NULL DEFAULT '' COMMENT '最后IP',
  `last_visit` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登陆时间',
  `last_location` varchar(60) NOT NULL DEFAULT 'N/A',
  PRIMARY KEY (`aid`),
  UNIQUE KEY `login_name` (`login_name`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='后台用户表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `br_admin`
--

LOCK TABLES `br_admin` WRITE;
/*!40000 ALTER TABLE `br_admin` DISABLE KEYS */;
INSERT INTO `br_admin` VALUES (1400638807349600,'admin','141bd81b79e386a109bd5aeea7476805a3ce17ea','swL(','mike05@qq.com',2,'','',0,3,'',1400638807,'',1400638807,'N/A');
/*!40000 ALTER TABLE `br_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `br_article`
--

DROP TABLE IF EXISTS `br_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `br_article` (
  `id` bigint(16) unsigned NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '文章分类ID',
  `headline` varchar(128) NOT NULL DEFAULT '' COMMENT '标题',
  `author_id` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '后台用户ID',
  `date` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '日期',
  `isstatic` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否伪静态',
  `content` text COMMENT '正文',
  `clicount` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击数',
  `keyword` varchar(50) NOT NULL DEFAULT '' COMMENT '文章关键词',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '文章状态0草稿1公开',
  `order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `br_article_ibfk_2` (`author_id`),
  CONSTRAINT `br_article_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `br_category` (`cid`) ON UPDATE CASCADE,
  CONSTRAINT `br_article_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `br_admin` (`aid`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `br_article`
--

LOCK TABLES `br_article` WRITE;
/*!40000 ALTER TABLE `br_article` DISABLE KEYS */;
INSERT INTO `br_article` VALUES (1400661639588371,1400659988559299,'这是一篇测试的文章',1400638807349600,12212133,0,'wewerewwrerewrewrewre',0,'1212132231 121233232',0,0);
/*!40000 ALTER TABLE `br_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `br_brand`
--

DROP TABLE IF EXISTS `br_brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `br_brand` (
  `bid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '品牌ID',
  `brand_name` varchar(256) NOT NULL DEFAULT '' COMMENT '品牌名',
  `big_logo` varchar(128) NOT NULL DEFAULT '' COMMENT '大logo图的路径',
  `small_logo` varchar(128) NOT NULL DEFAULT '' COMMENT '小logo图的路径',
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='产品品牌表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `br_brand`
--

LOCK TABLES `br_brand` WRITE;
/*!40000 ALTER TABLE `br_brand` DISABLE KEYS */;
/*!40000 ALTER TABLE `br_brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `br_category`
--

DROP TABLE IF EXISTS `br_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `br_category` (
  `cid` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '文章分类ID',
  `name` varchar(30) NOT NULL DEFAULT '',
  `fid` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '父分类ID',
  `issingle` bigint(16) NOT NULL DEFAULT '0' COMMENT '是否单页显示',
  PRIMARY KEY (`cid`),
  KEY `issingle` (`issingle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章分类表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `br_category`
--

LOCK TABLES `br_category` WRITE;
/*!40000 ALTER TABLE `br_category` DISABLE KEYS */;
INSERT INTO `br_category` VALUES (1400659662321463,'Product',0,0),(1400659687133638,'Distribution Brands ',1400659662321463,0),(1400659735756668,'Applications ',1400659662321463,0),(1400659988559299,'All Manufacturers ',1400659999543388,0),(1400659999543388,'Manufacturers ',0,0);
/*!40000 ALTER TABLE `br_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `br_classify`
--

DROP TABLE IF EXISTS `br_classify`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `br_classify` (
  `cid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '分类ID',
  `classify_name` varchar(256) NOT NULL DEFAULT '' COMMENT '分类名',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='产品分类表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `br_classify`
--

LOCK TABLES `br_classify` WRITE;
/*!40000 ALTER TABLE `br_classify` DISABLE KEYS */;
/*!40000 ALTER TABLE `br_classify` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `br_lookup`
--

DROP TABLE IF EXISTS `br_lookup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `br_lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `type` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='lookup表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `br_lookup`
--

LOCK TABLES `br_lookup` WRITE;
/*!40000 ALTER TABLE `br_lookup` DISABLE KEYS */;
/*!40000 ALTER TABLE `br_lookup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `br_manufacturer`
--

DROP TABLE IF EXISTS `br_manufacturer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `br_manufacturer` (
  `mid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '分类ID',
  `manufacturer_name` varchar(256) NOT NULL DEFAULT '' COMMENT '分类名',
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='供应商表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `br_manufacturer`
--

LOCK TABLES `br_manufacturer` WRITE;
/*!40000 ALTER TABLE `br_manufacturer` DISABLE KEYS */;
/*!40000 ALTER TABLE `br_manufacturer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `br_order`
--

DROP TABLE IF EXISTS `br_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `br_order` (
  `oid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '订单ID',
  `company_name` int(11) NOT NULL DEFAULT '0' COMMENT '公司名',
  `email` varchar(128) NOT NULL DEFAULT '' COMMENT 'email',
  `tel` varchar(32) NOT NULL DEFAULT '' COMMENT '电话',
  `inquiry_content` text COMMENT '询价内容',
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `br_order`
--

LOCK TABLES `br_order` WRITE;
/*!40000 ALTER TABLE `br_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `br_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `br_order_detail`
--

DROP TABLE IF EXISTS `br_order_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `br_order_detail` (
  `od_id` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '订单详情ID',
  `oid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '订单详情ID',
  `model` varchar(64) NOT NULL DEFAULT '' COMMENT '型号',
  `quantity` int(11) NOT NULL DEFAULT '0' COMMENT '数量',
  `manufacturer` varchar(64) NOT NULL DEFAULT '' COMMENT '厂商',
  `price` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '价格',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '产品状态0显示1不显示',
  PRIMARY KEY (`od_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单详细表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `br_order_detail`
--

LOCK TABLES `br_order_detail` WRITE;
/*!40000 ALTER TABLE `br_order_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `br_order_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `br_product`
--

DROP TABLE IF EXISTS `br_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `br_product` (
  `pid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '产品ID',
  `cid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '产品分类',
  `bid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '产品品牌',
  `mid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '厂商',
  `model` varchar(64) NOT NULL DEFAULT '' COMMENT '型号',
  `package` varchar(64) NOT NULL DEFAULT '' COMMENT '封装',
  `RoHS` varchar(64) NOT NULL DEFAULT '' COMMENT 'RoHS',
  `datecode` varchar(64) NOT NULL DEFAULT '' COMMENT '批号',
  `quantity` int(11) NOT NULL DEFAULT '0' COMMENT '数量',
  `direction` varchar(64) NOT NULL COMMENT '注释',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '产品状态0显示1不显示',
  PRIMARY KEY (`pid`),
  KEY `cid` (`cid`),
  KEY `bid` (`bid`),
  KEY `mid` (`mid`),
  CONSTRAINT `br_product_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `br_classify` (`cid`) ON UPDATE CASCADE,
  CONSTRAINT `br_product_ibfk_2` FOREIGN KEY (`bid`) REFERENCES `br_brand` (`bid`) ON UPDATE CASCADE,
  CONSTRAINT `br_product_ibfk_3` FOREIGN KEY (`mid`) REFERENCES `br_manufacturer` (`mid`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='产品表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `br_product`
--

LOCK TABLES `br_product` WRITE;
/*!40000 ALTER TABLE `br_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `br_product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-21 16:43:27
