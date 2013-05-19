CREATE TABLE IF NOT EXISTS task (
  taskID int NOT NULL AUTO_INCREMENT,
  name varchar(64) NOT NULL,
  description text NOT NULL,
  sprintID int NOT NULL,
  state varchar(10) NOT NULL,
  deadline DATE DEFAULT NULL,
  PRIMARY KEY(taskID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
