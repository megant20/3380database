DROP DATABASE IF EXISTS zoo;
CREATE DATABASE zoo;

USE zoo;

CREATE TABLE location (
    locationID INT NOT NULL AUTO_INCREMENT,
    title varchar(30),
    PRIMARY KEY (locationID)
);
INSERT INTO location(title) VALUES 
('african forest'),
('australian wildland'),
('polar iceland'),
('south american jungle');

CREATE TABLE department (
    departmentID INT NOT NULL AUTO_INCREMENT,
    title varchar(30),
    PRIMARY KEY (departmentID)
);
INSERT INTO department(title) VALUES
('maintenance'),
('veterinary'),
('marketing'),
('tourism');

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
INSERT INTO manager(name,ssn,date_hired,departmentID,locationID) VALUES 
	('john smith',123456789,'01/01/2000',
		(SELECT departmentID FROM department WHERE title ='maintenance'),(SELECT locationID FROM location WHERE title = 'african forest')),
	('jane lowry',987654321,'10/10/2020',
		(SELECT departmentID FROM department WHERE title ='tourism'),(SELECT locationID FROM location WHERE title = 'australian wildland')),
	('matt powers',353243986,'02/04/2019',
		(SELECT departmentID FROM department WHERE title ='veterinary'),(SELECT locationID FROM location WHERE title = 'australian wildland')),
	('aaron withers',401912318,'05/15/2015',
		(SELECT departmentID FROM department WHERE title ='marketing'),(SELECT locationID FROM location WHERE title = 'polar iceland')),
	('luke berry',121495150,'12/04/2021',
		(SELECT departmentID FROM department WHERE title ='veterinary'),(SELECT locationID FROM location WHERE title = 'african forest')),
	('kyle jasser',345872351,'06/25/2018',
		(SELECT departmentID FROM department WHERE title ='tourism'),(SELECT locationID FROM location WHERE title = 'african forest')),
	('peter alaniz',543442341,'11/12/2019',
		(SELECT departmentID FROM department WHERE title ='marketing'),(SELECT locationID FROM location WHERE title = 'african forest')),
	('rebecca lux',157903218,'02/18/2012',
		(SELECT departmentID FROM department WHERE title ='tourism'),(SELECT locationID FROM location WHERE title = 'south american jungle')),
	('donna west',762352342,'07/19/2013',
		(SELECT departmentID FROM department WHERE title ='maintenance'),(SELECT locationID FROM location WHERE title = 'australian wildland'));

CREATE TABLE attraction (
    attractionID INT NOT NULL AUTO_INCREMENT,
    locationID INT NOT NULL,
    title varchar(30),
    purchases DECIMAL(15, 2) NOT NULL DEFAULT 0,
    PRIMARY KEY (attractionID),
    CONSTRAINT attraction_ibfk_1 FOREIGN KEY (locationID) REFERENCES location (locationID)
);
INSERT INTO attraction(title,purchases,locationID) VALUES
	('forest animals',152, (SELECT locationID FROM location WHERE title ='african forest')),
    ('jungle food court',1426.9, (SELECT locationID FROM location WHERE title ='south american jungle')),
    ('iceland animals',87, (SELECT locationID FROM location WHERE title ='polar iceland')),
    ('wildland animals',261, (SELECT locationID FROM location WHERE title ='australian wildland')),
    ('forest food court',6320.43, (SELECT locationID FROM location WHERE title ='african forest')),
    ('jungle food court',737.42, (SELECT locationID FROM location WHERE title ='south american jungle')),
    ('iceland food court',1145.31, (SELECT locationID FROM location WHERE title ='polar iceland'));
    
CREATE TABLE animal (
    animalID INT NOT NULL AUTO_INCREMENT,
    attractionID INT NOT NULL,
    name varchar(30),
    class ENUM('mammal','bird','amphibian','fish','reptile','invertebrate'),
    gender ENUM('male','female','other'),
    DOB varchar(10),
    PRIMARY KEY (animalID),
    CONSTRAINT animal_ibfk_1 FOREIGN KEY (attractionID) REFERENCES attraction (attractionID)
);
	INSERT INTO animal(name,class,gender,DOB,attractionID) VALUES
    ('percy', 'mammal', 'male', '04/27/2020', (SELECT attractionID FROM attraction WHERE title ='forest animals'));



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
