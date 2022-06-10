CREATE SCHEMA IF NOT EXISTS project;

USE project;

CREATE TABLE `tbperson` (
  `prsid`   serial      NOT NULL AUTO_INCREMENT,
  `prsname` varchar(45) NOT NULL       	       ,
  `prsbirthdate` date   NOT NULL			   ,
  PRIMARY KEY (`prsid`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;

INSERT INTO `tbperson` (prsname, prsbirthdate)
             VALUES ('Carlos'   , '2001-08-10'),
                    ('Lucas'    , '2006-07-09'),
                    ('Gabriela' , '2004-11-12'),
                    ('Matheus'  , '2009-10-28'),
                    ('Luisa'    , '2013-01-11'),
                    ('Franciele', '2007-06-24'),
                    ('Eduardo'  , '2004-10-09'),
                    ('Fernando' , '2011-12-21');