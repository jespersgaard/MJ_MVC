CREATE TABLE IF NOT EXISTS sprint (
	sprintID	INT NOT NULL AUTO_INCREMENT,
	idGroup		INT NOT NULL,
	date_from	DATE NOT NULL,
	date_to		DATE NOT NULL,
	PRIMARY KEY(sprintID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
