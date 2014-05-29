


DROP TABLE IF EXISTS `br_admin`;
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




DROP TABLE IF EXISTS `br_article`;
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




DROP TABLE IF EXISTS `br_brand`;
CREATE TABLE `br_brand` (
  `bid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '品牌ID',
  `brand_name` varchar(256) NOT NULL DEFAULT '' COMMENT '品牌名',
  `logo` varchar(128) NOT NULL DEFAULT '' COMMENT '品牌logo',
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='产品品牌表';




DROP TABLE IF EXISTS `br_category`;
CREATE TABLE `br_category` (
  `cid` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '文章分类ID',
  `name` varchar(30) NOT NULL DEFAULT '',
  `fid` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '父分类ID',
  `issingle` bigint(16) NOT NULL DEFAULT '0' COMMENT '是否单页显示',
  PRIMARY KEY (`cid`),
  KEY `issingle` (`issingle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章分类表';




DROP TABLE IF EXISTS `br_classify`;
CREATE TABLE `br_classify` (
  `cid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '分类ID',
  `classify_name` varchar(256) NOT NULL DEFAULT '' COMMENT '分类名',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='产品分类表';




DROP TABLE IF EXISTS `br_lookup`;
CREATE TABLE `br_lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `type` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COMMENT='lookup表';




DROP TABLE IF EXISTS `br_manufacturer`;
CREATE TABLE `br_manufacturer` (
  `mid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '供应商ID',
  `manufacturer_name` varchar(256) NOT NULL DEFAULT '' COMMENT '供应商名',
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='供应商表';




DROP TABLE IF EXISTS `br_order`;
CREATE TABLE `br_order` (
  `oid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '订单ID',
  `company_name` varchar(256) NOT NULL DEFAULT '' COMMENT '公司名',
  `email` varchar(128) NOT NULL DEFAULT '' COMMENT 'email',
  `tel` varchar(32) NOT NULL DEFAULT '' COMMENT '电话',
  `inquiry_content` text COMMENT '询价内容',
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单表';




DROP TABLE IF EXISTS `br_order_detail`;
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




DROP TABLE IF EXISTS `br_product`;
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




