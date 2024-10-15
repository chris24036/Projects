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

INSERT INTO `TechGadgetProducts`
(`TechProductID`,`TechProductCode`,`TechName`,`TechDescription`,`TechCategoryID`,`TechWholesalePrice`,
`TechListPrice`,`DateCreated`,`Color`)
VALUES
(3500, "GLENST", "Google Nest Smart Thermostat", "It is an electronic, programmable, and self-learning Wi-Fi-enabled thermostat
that optimizes heating and cooling of homes and businesses to conserve energy.", 200, 129.99, 199.99, NOW(), "Charcoal");

INSERT INTO `TechGadgetProducts`
(`TechProductID`,`TechProductCode`,`TechName`,`TechDescription`,`TechCategoryID`,`TechWholesalePrice`,
`TechListPrice`,`DateCreated`,`Color`)
VALUES
(4040,"ANKRCHG", "Anker Wireless Charger Pad", "Complete Charging Convenience: Instantly charge your phone or earbuds simply by placing them in the center of PowerWave Pad. Never fuss around with plugging and unplugging cables again, just set down and power up.",
300,49.99,59.99,NOW(), "Black");

INSERT INTO `TechGadgetProducts`
(`TechProductID`,`TechProductCode`,`TechName`,`TechDescription`,`TechCategoryID`,`TechWholesalePrice`,
`TechListPrice`,`DateCreated`,`Color`)
VALUES
(5505,"RYBNGLS", "Ray-Ban Smart Bluetooth Glasses", "Ready for the next generation of smart glasses? The Ray-Ban Meta collection combines the latest in wearable tech with authentic Ray-Ban design, to keep you connected wherever you go.",
400, 429.00, 499.99, NOW(), "Shiny Caramel"); 

INSERT INTO `TechGadgetProducts`
(`TechProductID`,`TechProductCode`,`TechName`,`TechDescription`,`TechCategoryID`,`TechWholesalePrice`,
`TechListPrice`,`DateCreated`,`Color`)
VALUES
(6066,"GRMNWTCH", "Garmin Forerunner 965", "Forerunner 965 is a premium running smartwatch with a touchscreen AMOLED display & buttons, built-in maps, & up to 23 days of battery life. Train for an event, achieve a milestone, or improve your fitness with Garmin.",
500, 599.99, 699.99, NOW(), "Carbon Gray"); 

SELECT * FROM `TechGadgetProducts`;

