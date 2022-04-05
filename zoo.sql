DROP DATABASE IF EXISTS zoo;
CREATE DATABASE zoo;

USE zoo;

CREATE TABLE location (
    locationID INT NOT NULL AUTO_INCREMENT,
    title varchar(30),
    PRIMARY KEY (locationID)
);
INSERT INTO location(title) VALUES 
('African Forest'),
('Primate Land'),
('Feline Enclosures'),
('South American Jungle');

CREATE TABLE department (
    departmentID INT NOT NULL AUTO_INCREMENT,
    title varchar(30),
    PRIMARY KEY (departmentID)
);
INSERT INTO department(title) VALUES
('Maintenance'),
('Zoology'),
('Marketing'),
('Tourism');

CREATE TABLE manager (
    departmentID INT NOT NULL,
    locationID INT NOT NULL,
    name varchar(30) NOT NULL,
    managerID INT NOT NULL AUTO_INCREMENT,
    ssn INT NOT NULL,
    date_hired varchar(10),
    age INT,
    PRIMARY KEY (managerID, ssn),
    CONSTRAINT manager_ibfk_1 FOREIGN KEY (departmentID) REFERENCES department (departmentID),
    CONSTRAINT manager_ibfk_2 FOREIGN KEY (locationID) REFERENCES location (locationID)
);
INSERT INTO manager(name,ssn,date_hired,age,departmentID,locationID) VALUES 
	('John Smith',123456789,'01/01/2000',40,
		(SELECT departmentID FROM department WHERE title ='Maintenance'),(SELECT locationID FROM location WHERE title = 'African Forest')),
	('Jane Lowry',987654321,'10/10/2020',20,
		(SELECT departmentID FROM department WHERE title ='Zoology'),(SELECT locationID FROM location WHERE title = 'Primate Land')),
	('Aaron Withers',401912318,'05/15/2015',29,
		(SELECT departmentID FROM department WHERE title ='Marketing'),(SELECT locationID FROM location WHERE title = 'Feline Enclosures')),
	('Luke Berry',121495150,'12/04/2021',35,
		(SELECT departmentID FROM department WHERE title ='Zoology'),(SELECT locationID FROM location WHERE title = 'African Forest')),
	('Rebecca Lux',157903218,'02/18/2012',48,
		(SELECT departmentID FROM department WHERE title ='Tourism'),(SELECT locationID FROM location WHERE title = 'South American Jungle'));	

CREATE TABLE attraction (
    attractionID INT NOT NULL AUTO_INCREMENT,
    locationID INT NOT NULL,
    purchases DECIMAL(15, 2) NOT NULL DEFAULT 0,
    PRIMARY KEY (attractionID),
    CONSTRAINT attraction_ibfk_1 FOREIGN KEY (locationID) REFERENCES location (locationID)
);
INSERT INTO attraction(purchases,locationID) VALUES
	(1234.56, (SELECT locationID FROM location WHERE title ='African Forest')),
    (426.90, (SELECT locationID FROM location WHERE title ='South American Jungle')),
    (3424.15, (SELECT locationID FROM location WHERE title ='Feline Enclosures')),
    (5612.54, (SELECT locationID FROM location WHERE title ='Primate Land')),
    (15320, (SELECT locationID FROM location WHERE title ='African Forest')),
    (234.36, (SELECT locationID FROM location WHERE title ='South American Jungle')),
    (1145.31, (SELECT locationID FROM location WHERE title ='Feline Enclosures'));

CREATE TABLE animal (
    animalID INT NOT NULL AUTO_INCREMENT,
    attractionID INT NOT NULL,
    name varchar(30),
    class ENUM('Mammal','Bird','Amphibian','Fish','Reptile','Invertebrate'),
    gender ENUM('Male','Female','Other'),
    DOB varchar(8),
    PRIMARY KEY (animalID),
    CONSTRAINT animal_ibfk_1 FOREIGN KEY (attractionID) REFERENCES attraction (attractionID)
);
	INSERT INTO animal(name,class,gender,DOB,attractionID) VALUES
    ('Percy', 'Mammal', 'Male', '04/27/2020', (SELECT attracactionID FROM attraction WHERE title ='African Forest'));



CREATE TABLE employee (
    attractionID INT NOT NULL,
    locationID INT NOT NULL,
    managerID INT NOT NULL,
    employeeID INT NOT NULL AUTO_INCREMENT,
    name varchar(30) NOT NULL,
    ssn INT NOT NULL,
    date_hired varchar(10),
    age INT,
    PRIMARY KEY (employeeID, ssn),
    CONSTRAINT employee_ibfk_1 FOREIGN KEY (attractionID) REFERENCES attraction (attractionID),
    CONSTRAINT employee_ibfk_2 FOREIGN KEY (locationID) REFERENCES location (locationID),
    CONSTRAINT employee_ibfk_3 FOREIGN KEY (managerID) REFERENCES manager (managerID)
);

CREATE TABLE gift_shop (
    giftshopID INT NOT NULL AUTO_INCREMENT,
    donations DECIMAL(15,2) NOT NULL DEFAULT 0,
    product_sales DECIMAL(15,2) NOT NULL DEFAULT 0,
    PRIMARY KEY (giftshopID)
);

CREATE TABLE user (
    user_name varchar(30),
    credit_card_info varchar(16),
    age INT,
    phone_number varchar(10) NOT NULL,
    email varchar(45) NOT NULL,
    gender ENUM('Male','Female','Other'),
    tickets_purchased INT NOT NULL DEFAULT 0,
    PRIMARY KEY (phone_number, email)
 );
#SELECT title FROM location;
#SELECT * FROM manager;
#SELECT * FROM attraction;
