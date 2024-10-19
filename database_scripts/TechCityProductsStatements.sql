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
(`TechProductID`, `TechProductCode`, `TechName`, `TechDescription`, `TechCategoryID`, `TechWholesalePrice`, 
`TechListPrice`, `DateCreated`, `Color`)
VALUES
(2006, "AIPD", "Apple iPad Pro", "A powerful tablet with a large display, perfect for productivity and entertainment.", 
100, 750.00, 899.00, NOW(), "Silver");

INSERT INTO `TechGadgetProducts`
(`TechProductID`, `TechProductCode`, `TechName`, `TechDescription`, `TechCategoryID`, `TechWholesalePrice`, 
`TechListPrice`, `DateCreated`, `Color`)
VALUES
(2007, "SMST", "Samsung Galaxy Tab S7", "A high-performance tablet with a stunning display and long battery life.", 
100, 650.00, 799.00, NOW(), "Black");


INSERT INTO `TechGadgetProducts`
(`TechProductID`,`TechProductCode`,`TechName`,`TechDescription`,`TechCategoryID`,`TechWholesalePrice`,
`TechListPrice`,`DateCreated`,`Color`)
VALUES
(3500, "GLENST", "Google Nest Smart Thermostat", "It is an electronic, programmable, and self-learning Wi-Fi-enabled thermostat
that optimizes heating and cooling of homes and businesses to conserve energy.", 200, 129.99, 199.99, NOW(), "Charcoal");

INSERT INTO `TechGadgetProducts`
(`TechProductID`, `TechProductCode`, `TechName`, `TechDescription`, `TechCategoryID`, `TechWholesalePrice`, 
`TechListPrice`, `DateCreated`, `Color`)
VALUES
(3505, "SMARTBULB", "Philips Hue Smart Bulb", "A smart LED bulb that can be controlled via smartphone app and voice commands, providing customizable lighting options.", 
200, 49.99, 69.99, NOW(), "White");

INSERT INTO `TechGadgetProducts`
(`TechProductID`, `TechProductCode`, `TechName`, `TechDescription`, `TechCategoryID`, `TechWholesalePrice`, 
`TechListPrice`, `DateCreated`, `Color`)
VALUES
(3506, "DOORBELL", "Ring Video Doorbell", "A smart doorbell that allows you to see and speak to visitors from your smartphone, with HD video and two-way audio.", 
200, 99.99, 149.99, NOW(), "Silver");

INSERT INTO `TechGadgetProducts`
(`TechProductID`, `TechProductCode`, `TechName`, `TechDescription`, `TechCategoryID`, `TechWholesalePrice`, 
`TechListPrice`, `DateCreated`, `Color`)
VALUES
(4041, "BLUETOOTH", "JBL Flip 5 Bluetooth Speaker", "Portable waterproof Bluetooth speaker with powerful sound and up to 12 hours of playtime.", 
300, 79.99, 99.99, NOW(), "Red");

INSERT INTO `TechGadgetProducts`
(`TechProductID`, `TechProductCode`, `TechName`, `TechDescription`, `TechCategoryID`, `TechWholesalePrice`, 
`TechListPrice`, `DateCreated`, `Color`)
VALUES
(4042, "AIRPODS", "Apple AirPods Pro", "Active Noise Cancellation, Transparency mode, and customizable fit with Adaptive EQ for an immersive audio experience.", 
300, 199.99, 249.99, NOW(), "White");

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
(`TechProductID`, `TechProductCode`, `TechName`, `TechDescription`, `TechCategoryID`, `TechWholesalePrice`, 
`TechListPrice`, `DateCreated`, `Color`)
VALUES
(5512, "KBMKIT", "Logitech MK270 Wireless Keyboard and Mouse Combo", "This combo includes a wireless keyboard and mouse that offers comfortable typing and precise control without cables, perfect for office or home use.",
400, 39.99, 59.99, NOW(), "Black");

INSERT INTO `TechGadgetProducts`
(`TechProductID`, `TechProductCode`, `TechName`, `TechDescription`, `TechCategoryID`, `TechWholesalePrice`, 
`TechListPrice`, `DateCreated`, `Color`)
VALUES
(5513, "USBCADPT", "Apple USB-C Digital AV Multiport Adapter", "Connect your Mac or iPad Pro to HDMI displays, while also providing a standard USB port and a USB-C charging port, all in a compact design.",
400, 49.99, 69.99, NOW(), "Silver");


INSERT INTO `TechGadgetProducts`
(`TechProductID`,`TechProductCode`,`TechName`,`TechDescription`,`TechCategoryID`,`TechWholesalePrice`,
`TechListPrice`,`DateCreated`,`Color`)
VALUES
(6066,"GRMNWTCH", "Garmin Forerunner 965", "Forerunner 965 is a premium running smartwatch with a touchscreen AMOLED display & buttons, built-in maps, & up to 23 days of battery life. Train for an event, achieve a milestone, or improve your fitness with Garmin.",
500, 599.99, 699.99, NOW(), "Carbon Gray"); 

INSERT INTO `TechGadgetProducts`
(`TechProductID`, `TechProductCode`, `TechName`, `TechDescription`, `TechCategoryID`, `TechWholesalePrice`, 
`TechListPrice`, `DateCreated`, `Color`)
VALUES
(6069, "WYSCLE", "Withings Body+ Smart Scale", "The Withings Body+ Smart Scale measures weight, body fat, water percentage, and muscle mass. It syncs with your smartphone to track your progress and integrates with various health apps.",
500, 99.95, 129.95, NOW(), "White");

INSERT INTO `TechGadgetProducts`
(`TechProductID`, `TechProductCode`, `TechName`, `TechDescription`, `TechCategoryID`, `TechWholesalePrice`, 
`TechListPrice`, `DateCreated`, `Color`)
VALUES
(6068, "WHOOP3", "WHOOP Strap 3.0", "The WHOOP Strap 3.0 is a fitness tracker that monitors heart rate, sleep, and recovery, providing personalized insights to improve your performance and overall health.",
500, 30.00, 40.00, NOW(), "Navy Blue");
SELECT * FROM `TechGadgetProducts`;

