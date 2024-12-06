CREATE TABLE TechGadgetCategories(
TechCategoryID  INT(11)     NOT NULL,
TechCategoryCode    VARCHAR(255)    NOT NULL,
TechCategoryName    VARCHAR(255)    NOT NULL,
DateCreated     DATETIME    NOT NULL,
PRIMARY KEY (TechCategoryID)
);

ALTER TABLE TechGadgetCategories
ADD COLUMN ShelfNumber INT(11) NOT NULL;



DELETE FROM TechGadgetCategories WHERE `TechCategoryID` = 100;

INSERT INTO TechGadgetCategories
(`TechCategoryID`,`TechCategoryCode`,`TechCategoryName`,`ShelfNumber`,`DateCreated`)
VALUES
(100,"VR", "Virtual Reality",001, NOW());

INSERT INTO TechGadgetCategories
(`TechCategoryID`,`TechCategoryCode`,`TechCategoryName`,`ShelfNumber`,`DateCreated`)
VALUES
(200,"SMRT", "Smart Devices",002, NOW());

INSERT INTO TechGadgetCategories
(`TechCategoryID`,`TechCategoryCode`,`TechCategoryName`,`ShelfNumber`,`DateCreated`)
VALUES
(221,"SMRT", "Smart Devices",002, NOW());

INSERT INTO TechGadgetCategories
(`TechCategoryID`,`TechCategoryCode`,`TechCategoryName`,`ShelfNumber`,`DateCreated`)
VALUES
(300,"NOWIRE", "Wireless Devices",003, NOW());

INSERT INTO TechGadgetCategories
(`TechCategoryID`,`TechCategoryCode`,`TechCategoryName`,`ShelfNumber`,`DateCreated`)
VALUES
(400,"BLTH", "Bluetooth Devices",004, NOW());

INSERT INTO TechGadgetCategories
(`TechCategoryID`,`TechCategoryCode`,`TechCategoryName`,`ShelfNumber`,`DateCreated`)
VALUES
(500,"SMRTFTN", "Fitness Devices",005, NOW());

SELECT * FROM `TechGadgetCategories`

SELECT count(TechCategoryID) FROM TechGadgetCategories
