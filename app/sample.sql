DROP TABLE IF EXISTS `crm_parameter`;
CREATE TABLE `crm_parameter` (
  `para_id` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '参数ID',
  `para_name` varchar(128) NOT NULL DEFAULT '' COMMENT '参数名',
  `para_content` text NOT NULL  COMMENT '参数详情',
  PRIMARY KEY (`para_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='网站参数表';


DROP TABLE IF EXISTS `crm_operate_log`;
CREATE TABLE `crm_operate_log` (
  `log_id` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '日志ID',
  `aid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '后台用户ID',
  `log_content` text NOT NULL  COMMENT '日志内容',
  PRIMARY KEY (`log_id`),
  CONSTRAINT FOREIGN KEY (`aid`) REFERENCES `crm_admin` (`aid`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='操作日志表';



DROP TABLE IF EXISTS `crm_admin`;
CREATE TABLE `crm_admin` (
  `aid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '后台用户ID',
  `login_name` varchar(128) NOT NULL DEFAULT '' COMMENT '登录名',
  `login_passwd` varchar(128) NOT NULL DEFAULT '' COMMENT '密码',
  `email` varchar(128) NOT NULL,
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '用户性别0女1男',
  `admin_tel` varchar(48) NOT NULL DEFAULT '' COMMENT '手机',
  `real_name` varchar(128) NOT NULL DEFAULT '' COMMENT '后台用户姓名',
  `admin_status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '状态1可用0无效',
  `admin_group` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '后台用户等级',
  `reg_ip` char(15) NOT NULL DEFAULT '' COMMENT '创建时的IP',
  `reg_date` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `last_ip` char(15) NOT NULL DEFAULT '' COMMENT '最后IP',
  `last_visit` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登陆时间',
  PRIMARY KEY (`aid`),
  UNIQUE KEY `login_name` (`login_name`),
  KEY `email` (`email`),
  CONSTRAINT  FOREIGN KEY (`admin_group`) REFERENCES `crm_admin_group` (`ag_id`) ON UPDATE CASCADE,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='后台用户表';


DROP TABLE IF EXISTS `crm_admin_group`;
CREATE TABLE `crm_admin_group` (
  `ag_id` int  unsigned NOT NULL auto_increment  COMMENT '后台用户ID',
  `group_name` varchar(128) NOT NULL DEFAULT '' COMMENT '组名',
  `commission_scheme` text NOT NULL  COMMENT '佣金方案',
  PRIMARY KEY (`ag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='后台用户组表';



DROP TABLE IF EXISTS `crm_admin_bank`;
CREATE TABLE `crm_admin_bank` (
  `ab_id` bigint(16) unsigned NOT NULL COMMENT '后台用户银行表ID',
  `aid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '用户编号',
  `bank_type_id` int(10) unsigned NOT NULL COMMENT '银行类型编码',
  `area_id` int(10) unsigned DEFAULT '0' COMMENT '省份（地区）编码',
  `city_id` int(10) unsigned NOT NULL COMMENT '地级市编码',
  `bank_info` varchar(512) NOT NULL DEFAULT '' COMMENT '银行名称及分行',
  `card_num` varchar(20) NOT NULL DEFAULT '' COMMENT '银行卡号',
  `creat_time` int(10) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) NOT NULL DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`ab_id`),
  KEY `aid` (`aid`),
  KEY `bank_type_id` (`bank_type_id`),
  KEY `area_id` (`area_id`),
  KEY `city_id` (`city_id`),
  CONSTRAINT `crm_admin_bank_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `crm_admin` (`aid`) ON UPDATE CASCADE,
  CONSTRAINT `crm_admin_bank_ibfk_2` FOREIGN KEY (`bank_type_id`) REFERENCES `crm_withdrawal_banktype` (`bank_type_id`) ON UPDATE CASCADE,
  CONSTRAINT `crm_admin_bank_ibfk_3` FOREIGN KEY (`area_id`) REFERENCES `crm_withdrawal_area` (`area_id`) ON UPDATE CASCADE,
  CONSTRAINT `crm_admin_bank_ibfk_4` FOREIGN KEY (`city_id`) REFERENCES `crm_withdrawal_city` (`city_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='银行卡表';




DROP TABLE IF EXISTS `crm_admin_contain`;
CREATE TABLE `crm_admin_contain` (
  `aid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '后台用户ID',
  `son_container` text NOT NULL COMMENT '子ID的容器',
  PRIMARY KEY (`aid`),
  CONSTRAINT `crm_admin_contain_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `crm_admin` (`aid`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='后台用户包括子用户的表';




DROP TABLE IF EXISTS `crm_admin_fund`;
CREATE TABLE `crm_admin_fund` (
  `aid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '后台用户ID',
  `balance` decimal(12,4) NOT NULL DEFAULT '0.0000' COMMENT '账户余额',
  `withdrawals_fro_money` decimal(12,4) NOT NULL DEFAULT '0.0000' COMMENT '提现冻结金额',
  PRIMARY KEY (`aid`),
  CONSTRAINT `crm_admin_fund_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `crm_admin` (`aid`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='后台用户资金扩展表';




DROP TABLE IF EXISTS `crm_admin_relation`;
CREATE TABLE `crm_admin_relation` (
  `aid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '后台用户ID',
  `fid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '推荐人ID',
  PRIMARY KEY (`aid`),
  KEY `fid` (`fid`),
  CONSTRAINT `crm_admin_relation_ibfk_2` FOREIGN KEY (`fid`) REFERENCES `crm_admin` (`aid`) ON UPDATE CASCADE,
  CONSTRAINT `crm_admin_relation_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `crm_admin` (`aid`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='后台用户关系表';




DROP TABLE IF EXISTS `crm_auth_assignment`;
CREATE TABLE `crm_auth_assignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`),
  CONSTRAINT `crm_auth_assignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `crm_auth_item` (`name`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS `crm_auth_item`;
CREATE TABLE `crm_auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS `crm_auth_item_child`;
CREATE TABLE `crm_auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `crm_auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `crm_auth_item` (`name`) ON UPDATE CASCADE,
  CONSTRAINT `crm_auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `crm_auth_item` (`name`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS `crm_customer`;
CREATE TABLE `crm_customer` (
  `cid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '后台用户ID',
  `username` varchar(128) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '用户密码md5',
  `real_name` varchar(32) NOT NULL DEFAULT '' COMMENT '用户真实姓名',
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '用户性别0女1男',
  `email` varchar(64) NOT NULL DEFAULT '' COMMENT '用户邮箱',
  `telephone` varchar(11) NOT NULL DEFAULT '' COMMENT '手机号码',
  `cellphone` varchar(16) NOT NULL DEFAULT '' COMMENT '座机号码',
  `fax` varchar(16) NOT NULL DEFAULT '' COMMENT '传真',
  `address` varchar(64) NOT NULL DEFAULT '' COMMENT '联系地址',
  `company_add` varchar(128) NOT NULL DEFAULT '' COMMENT '公司地址',
  `avatar` varchar(48) NOT NULL DEFAULT '' COMMENT '头像',
  `id_number` varchar(32) NOT NULL DEFAULT '' COMMENT '证件号码',
  `reg_ip` char(15) NOT NULL DEFAULT '' COMMENT '创建时的IP',
  `reg_date` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `last_ip` char(15) NOT NULL DEFAULT '' COMMENT '最后IP',
  `last_visit` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登陆时间',
  `user_type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '用户类型1个人用户2表示企业用户',
  `email_active_p` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '邮箱类别0未认证1已经认证',
  `cellphone_active_p` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '手机类别0未认证1已经认证',
  PRIMARY KEY (`cid`),
  UNIQUE KEY `username` (`username`),
  KEY `cellphone` (`cellphone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='客户表信息表';




DROP TABLE IF EXISTS `crm_enchashment_record`;
CREATE TABLE `crm_enchashment_record` (
  `eid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '提现记录ID',
  `aid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '后台用户ID',
  `bank_info` varchar(128) NOT NULL DEFAULT '' COMMENT '银行名称及分行',
  `card_num` varchar(20) NOT NULL DEFAULT '' COMMENT '银行卡号',
  `enchash_amount` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '提现金额',
  `creat_time` int(10) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '提现状态',
  `update_time` int(10) NOT NULL DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`eid`),
  KEY `aid` (`aid`),
  CONSTRAINT `crm_enchashment_record_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `crm_admin` (`aid`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='提现记录表';




DROP TABLE IF EXISTS `crm_order`;
CREATE TABLE `crm_order` (
  `oid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '订单ID',
  `aid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '后台用户ID',
  `cid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '客户用户Id',
  `expect_time` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '期望完成时间',
  `budget_amount` tinyint(1) NOT NULL DEFAULT '0' COMMENT '预算金额',
  `order_demand` text NOT NULL COMMENT '订单需求',
  `real_amount` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '实际金额',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '订单状态',
  PRIMARY KEY (`oid`),
  KEY `aid` (`aid`),
  KEY `cid` (`cid`),
  CONSTRAINT `crm_order_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `crm_customer` (`cid`) ON UPDATE CASCADE,
  CONSTRAINT `crm_order_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `crm_admin` (`aid`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单表';




DROP TABLE IF EXISTS `crm_popularize_detail`;
CREATE TABLE `crm_popularize_detail` (
  `pid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '推广ID',
  `aid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '后台用户ID',
  `cid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '客户用户Id',
  `oid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '订单ID',
  `amount` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '推广收益',
  `remark` text NOT NULL COMMENT '说明，序列化后的值',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否已统计',
  PRIMARY KEY (`pid`),
  KEY `aid` (`aid`),
  KEY `cid` (`cid`),
  KEY `oid` (`oid`),
  CONSTRAINT `crm_popularize_detail_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `crm_admin` (`aid`) ON UPDATE CASCADE,
  CONSTRAINT `crm_popularize_detail_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `crm_customer` (`cid`) ON UPDATE CASCADE,
  CONSTRAINT `crm_popularize_detail_ibfk_3` FOREIGN KEY (`oid`) REFERENCES `crm_order` (`oid`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='推广明细表';




DROP TABLE IF EXISTS `crm_settlement`;
CREATE TABLE `crm_settlement` (
  `sid` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '订单结算记录ID',
  `aid` bigint(20) NOT NULL DEFAULT '0' COMMENT '推广人ID',
  `operator_id` bigint(16) unsigned NOT NULL DEFAULT '0' COMMENT '操作者ID',
  `amount` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '该月推广收益',
  `year_month` char(7) NOT NULL DEFAULT '' COMMENT '当月月份',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否已经结算',
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='结算明细表';




DROP TABLE IF EXISTS `crm_withdrawal_area`;
CREATE TABLE `crm_withdrawal_area` (
  `area_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '区域（省）级编码',
  `area_name` varchar(60) DEFAULT NULL COMMENT '区域（省）名称',
  `area_city_cnt` int(10) unsigned DEFAULT '0' COMMENT '下辖地级市数量',
  PRIMARY KEY (`area_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='省份表';




DROP TABLE IF EXISTS `crm_withdrawal_banktype`;
CREATE TABLE `crm_withdrawal_banktype` (
  `bank_type_id` int(10) unsigned NOT NULL COMMENT '银行类型编码',
  `bank_name` varchar(80) NOT NULL DEFAULT '' COMMENT '银行类型名称',
  PRIMARY KEY (`bank_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='银行类型表';




DROP TABLE IF EXISTS `crm_withdrawal_city`;
CREATE TABLE `crm_withdrawal_city` (
  `city_id` int(10) unsigned NOT NULL COMMENT '地级市编码',
  `city_name` varchar(60) NOT NULL DEFAULT '' COMMENT '地级市名称',
  `area_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上级区域(省）id',
  PRIMARY KEY (`city_id`),
  KEY `area_id` (`area_id`),
  CONSTRAINT `crm_withdrawal_city_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `crm_withdrawal_area` (`area_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='城市表';




DROP TABLE IF EXISTS `zf_withdrawal_area`;
CREATE TABLE `zf_withdrawal_area` (
  `area_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '区域（省）级编码',
  `area_name` varchar(60) DEFAULT NULL COMMENT '区域（省）名称',
  `area_city_cnt` int(11) unsigned DEFAULT '0' COMMENT '下辖地级市数量',
  PRIMARY KEY (`area_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='省份表';




DROP TABLE IF EXISTS `zf_withdrawal_banktype`;
CREATE TABLE `zf_withdrawal_banktype` (
  `bank_type` int(10) unsigned NOT NULL COMMENT '银行类型编码',
  `bank_name` varchar(80) NOT NULL DEFAULT '' COMMENT '银行类型名称',
  PRIMARY KEY (`bank_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='银行类型表';




DROP TABLE IF EXISTS `zf_withdrawal_city`;
CREATE TABLE `zf_withdrawal_city` (
  `city_id` int(10) unsigned NOT NULL COMMENT '地级市编码',
  `city_name` varchar(60) NOT NULL DEFAULT '' COMMENT '地级市名称',
  `city_area_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '地级市上级区域(省）id',
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='城市表';




