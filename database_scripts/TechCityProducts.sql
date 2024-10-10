--name, descrioption, categiry id, wholesale price, listprice, date created
CREATE TABLE TechGadgetProducts(
TechProductID     INT(11)   NOT NULL,
TechProductCode    VARCHAR(255) NOT NULL    UNIQUE,
TechName        VARCHAR(255)    NOT NULL,
TechDescription     TEXT    NOT NULL,
TechCategoryID  INT(11)     NOT NULL,
TechWholesalePrice  DECIMAL(10,2)   NOT NULL,
TechListPrice       DECIMAL(10,2)   NOT NULL,
DateCreated         DATETIME    NOT NULL,
PRIMARY KEY(TechProductID)
);

ALTER TABLE TechGadgetProducts
ADD COLUMN Color VARCHAR(255) NOT NULL;


DELETE FROM TechGadgetProducts WHERE TechProductID = 2005;

INSERT INTO `TechGadgetProducts`
(`TechProductID`,`TechProductCode`,`TechName`,`TechDescription`,`TechCategoryID`,`TechWholesalePrice`,
`TechListPrice`,`DateCreated`,`Color`)
VALUES
(2005,"OCLS", "Oculus Virtual Reality Headset", "A standalone VR headset that doesn't require a PC or console to run.",
100,500.00,650.00,NOW(), "Blue");

SELECT * FROM `TechGadgetProducts`;
