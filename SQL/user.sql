CREATE TABLE IF NOT EXISTS user(
userid int NOT NULL AUTO_INCREMENT,
login varchar(25) NOT NULL,
password varchar(64) NOT NULL,
username varchar(100) NOT NULL,
role enum('default','admin','owner') NOT NULL DEFAULT 'default',
email varchar(100) NOT NULL,
skype varchar(50) DEFAULT 'not set',
telefonnr varchar(11) DEFAULT 'not set',
PRIMARY KEY(userid)
)
ENGINE InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=20;
