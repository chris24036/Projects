--Christopher M. Rodriguez, IT202-001, Phase1 Assignment, cmr82@njit.edu

CREATE TABLE TechCityManagers (
TechCityManagerID     INT(11)        NOT NULL   AUTO_INCREMENT,
emailAddress           VARCHAR(255)   NOT NULL   UNIQUE,
password               VARCHAR(64)    NOT NULL,
pronouns               VARCHAR(60)    NOT NULL,
firstName              VARCHAR(60)    NOT NULL,
lastName               VARCHAR(60)    NOT NULL,
dateCreated            DATETIME       NOT NULL,
PRIMARY KEY (TechCityManagerID)
);

INSERT INTO TechCityManagers
(`emailAddress`,password,pronouns,`firstName`,`lastName`,`dateCreated`)
VALUES('xiara.rodriguez@techcity.net', SHA2('wh4t3ver',256),'She/her', 'Xiara', 'Rodriguez', NOW())

INSERT INTO TechCityManagers
(`emailAddress`,password,pronouns,`firstName`,`lastName`,`dateCreated`)
VALUES('aaron.judge@techcity.net', SHA2('pa55word', 256), 'He/him','Aaron', 'Judge', NOW());

INSERT INTO TechCityManagers
(`emailAddress`,password,pronouns,`firstName`,`lastName`,`dateCreated`)
VALUES('lamar.jackson@techcity.net', SHA2('notpa55word', 256), 'He/him', 'Lamar', 'Jackson', NOW());

INSERT INTO TechCityManagers
(`emailAddress`,password,pronouns,`firstName`,`lastName`,`dateCreated`)
VALUES('manager@techcity.net', SHA2('12345', 256), 'He/him', 'Chris', 'Rodriguez', NOW());

SELECT * FROM TechCityManagers



