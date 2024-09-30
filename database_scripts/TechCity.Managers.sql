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