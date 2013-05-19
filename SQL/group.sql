CREATE TABLE IF NOT EXISTS 'group';
'idgroup' int NOT NULL AUTO_INCREMENT,
'namegroup' varchar(150) NOT NULL,
'descriptiongroup' text DEFAULT 'not set',
'datecreatedgroup' date NOT NULL,
'dateclosedgroup' date DEFAULT NULL,
'statusgroup' varchar(20) NOT NULL,
PRIMARY KEY (´idgroup´)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;