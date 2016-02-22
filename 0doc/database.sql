#数据库说明

create database paperassist;
use paperassist;
create table role(
	id				INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name			VARCHAR(20),
	PRIMARY KEY(id)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;
create table user(
	id				INT UNSIGNED NOT NULL AUTO_INCREMENT,
	user_name		VARCHAR(40) NOT NULL,
	email			VARCHAR(20) NOT NULL,
	password		VARCHAR(100) NOT NULL,
	gender			INT,
	university		VARCHAR(80),
	major			VARCHAR(80),
	degree			VARCHAR(20),
	role_id			INT UNSIGNED NOT NULL,
	points			INT,
	reg_time		DATETIME,
	is_logined		INT,
	last_login_time		DATETIME,
	last_login_location		VARCHAR(20),
	PRIMARY KEY(id),
	FOREIGN KEY(role_id) references role(id)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;
create table semantic(
	id				INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name			VARCHAR(30),
	PRIMARY KEY(id)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;
create table template(
	id				INT UNSIGNED NOT NULL AUTO_INCREMENT,
	user_id			INT UNSIGNED,
	topic			VARCHAR(50),
	statement		TEXT,
	#language		VARCHAR(20),
	semantic_id		INT UNSIGNED,
	is_checked		TINYINT NOT NULL DEFAULT '0',
	points			DECIMAL(4,2),
	PRIMARY KEY(id),
	FOREIGN KEY(semantic_id) references semantic(id),
	FOREIGN KEY(user_id) REFERENCES user(id)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;
create table sentence(
	id				INT UNSIGNED NOT NULL AUTO_INCREMENT,
	user_id			INT UNSIGNED,
	statement		TEXT,
	language		VARCHAR(20),
	semantic_id		INT UNSIGNED,
	is_checked		TINYINT NOT NULL DEFAULT '0',
	points			DECIMAL(4,2),
	PRIMARY KEY(id),
	FOREIGN KEY(user_id) REFERENCES user(id)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;
create table word(
	id				INT UNSIGNED NOT NULL AUTO_INCREMENT,
	user_id			INT UNSIGNED,
	statement		TEXT,
	#language		VARCHAR(20),
	semantic_id		INT UNSIGNED,
	rank					INT UNSIGNED, #用法：高级用0表示，低级用1表示。
	is_checked		TINYINT NOT NULL DEFAULT '0',
	points			DECIMAL(4,2),
	PRIMARY KEY(id),
	FOREIGN KEY(user_id) REFERENCES user(id)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;

INSERT INTO `paperassist`.`role` VALUES ('1', '用户');
INSERT INTO `paperassist`.`role` VALUES ('2','内容审核员');
INSERT INTO `paperassist`.`role` VALUES ('3','管理员');

INSERT INTO `paperassist`.`user` VALUES (NULL, '胡江鹭', '123456789@qq.com', md5('123456'), '0', '哈尔滨工业大学深圳研究生院', '计算机科学与技术', '硕士', '1', '1', '2015-07-23 12:00:00', '1', '2015-07-23 12:00:00', '深圳');
INSERT INTO `paperassist`.`user` VALUES (NULL, '郑志辉', '987654321@qq.com', md5('123456'), '0', '哈尔滨工业大学深圳研究生院', '计算机科学与技术', '硕士', '2', '1', '2015-07-23 12:00:00', '1', '2015-07-23 12:00:00', '深圳');
INSERT INTO `paperassist`.`user` VALUES (NULL, '陈静', '123454321@qq.com', md5('123456'), '0', '哈尔滨工业大学深圳研究生院', '计算机科学与技术', '硕士', '3', '1', '2015-07-23 12:00:00', '1', '2015-07-23 12:00:00', '深圳');
INSERT INTO `paperassist`.`user` VALUES (NULL, 'jeff', '123404321@qq.com', md5('123456'), '0', '哈尔滨工业大学深圳研究生院', '计算机科学与技术', '硕士', '2', '1', '2015-07-23 12:00:00', '1', '2015-07-23 12:00:00', '深圳');
INSERT INTO `paperassist`.`user` VALUES (NULL, 'admin', '123414321@qq.com', md5('123456'), '0', '哈尔滨工业大学深圳研究生院', '计算机科学与技术', '硕士', '3', '1', '2015-07-23 12:00:00', '1', '2015-07-23 12:00:00', '深圳');

INSERT INTO `paperassist`.`semantic` VALUES ('1', '推荐信');
INSERT INTO `paperassist`.`semantic` VALUES ('2', 'SCI投稿信件');

INSERT INTO `paperassist`.`template` VALUES (NULL, '1', '最初投稿', 'Dear Editors:
We would like to submit the enclosed manuscript entitled “Paper Title”, which we wish to be considered for publication in “Journal Name”. No conflict of interest exits in the submission of this manuscript, and manuscript is approved by all authors for publication. I would like to declare on behalf of my co-authors that the work described was original research that has not been published previously, and not under consideration for publication elsewhere, in whole or in part. All the authors listed have approved the manuscript that is enclosed.
In this work, we evaluated …… (简要介绍一下论文的创新性). I hope this paper is suitable for “Journal Name”.
The following is a list of possible reviewers for your consideration:
1) Name A   E-mail: ××××@××××
2) Name B   E-mail: ××××@××××
We deeply appreciate your consideration of our manuscript, and we look forward to receiving comments from the reviewers. If you have any queries, please don’t hesitate to contact me at the address below.
Thank you and best regards.
Yours sincerely,
××××××
Corresponding author:
Name: ×××
E-mail: ××××@××××', '2', '1', '0');
INSERT INTO `paperassist`.`template` VALUES (NULL, '1', '催稿信', 'Dear Prof. ×××:
Sorry for disturbing you. I am not sure if it is the right time to contact you to inquire about the status of my submitted manuscript titled “Paper Title”. (ID: 文章稿号), although the status of “With Editor” has been lasting for more than two months, since submitted to journal three months ago. I am just wondering that my manuscript has been sent to reviewers or not?
I would be greatly appreciated if you could spend some of your time check the status for us. I am very pleased to hear from you on the reviewer’s comments.
Thank you very much for your consideration.
Best regards!
Yours sincerely,
××××××
Corresponding author:
Name: ×××
E-mail: ××××@××××', '2', '1', '0');