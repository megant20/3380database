CREATE DATABASE zoo;

USE 'classicmodels'

DROP TABLE IF EXISTS 'location';

CREATE TABLE 'location' (
    'locationID' INT NOT NULL AUTO_INCREMENT,
    'title' varchar(30),
    PRIMARY KEY ('locationID')
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS 'department';

CREATE TABLE 'department' (
    'departmentID' INT NOT NULL AUTO_INCREMENT,
    'title' varchar(30),
    PRIMARY KEY ('departmentID')
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS 'manager';

CREATE TABLE 'manager' (
    'departmentID' INT NOT NULL AUTO_INCREMENT,
    'locationID' INT NOT NULL AUTO_INCREMENT,
    'name' varchar(30) NOT NULL,
    'managerID' INT NOT NULL AUTO_INCREMENT,
    'ssn' INT NOT NULL, --do more with this later
    'data_hired' varchar(10), --do more with this later
    PRIMARY KEY ('managerID', 'ssn')
    CONSTRAINT 'manager_ibfk_1' FOREIGN KEY ('departmentID') REFERENCES 'department' ('departmentID'),
    CONSTRAINT 'manager_ibfk_2' FOREIGN KEY ('locationID') REFERENCES 'location' ('locationID')
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS 'attraction';

CREATE TABLE 'attraction' (
    'attractionID' INT NOT NULL AUTO_INCREMENT,
    'locationID' varchar(30),
    'purchases' DECIMAL(15, 2) NOT NULL DEFAULT 0,
    PRIMARY KEY ('attractionID'),
    CONSTRAINT 'attraction_ibfk_1' FOREIGN KEY ('locationID') REFERENCES 'location' ('locationID')
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS 'animal';

CREATE TABLE 'animal' (
    'animalID' INT NOT NULL AUTO_INCREMENT,
    'attractionID' INT NOT NULL AUTO_INCREMENT,
    'name' varchar(30),
    'species' varchar(15),
    'gender' varchar(15),
    'DOB' varchar(8), --do more with this later
    PRIMARY KEY ('animalID'),
    CONSTRAINT 'animal_ibfk_1' FOREIGN KEY ('attractionID') REFERENCES 'attraction' ('attractionID')
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS 'employee';

CREATE TABLE 'employee' (
    'attractionID' INT NOT NULL AUTO_INCREMENT,
    'locationID' INT NOT NULL AUTO_INCREMENT,
    'managerID' INT NOT NULL AUTO_INCREMENT,
    'employeeID' INT NOT NULL AUTO_INCREMENT,
    'name' varchar(30) NOT NULL,
    'ssn' INT NOT NULL, --do more with this later
    'data_hired' varchar(10), --do more with this later
    PRIMARY KEY ('employeeID', 'ssn'),
    CONSTRAINT 'employee_ibfk_1' FOREIGN KEY ('attractionID') REFERENCES 'attraction' ('attractionID'),
    CONSTRAINT 'employee_ibfk_2' FOREIGN KEY ('locationID') REFERENCES 'location' ('locationID'),
    CONSTRAINT 'employee_ibfk_3' FOREIGN KEY ('managerID') REFERENCES 'manager' ('managerID')
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS 'gift_shop';

CREATE TABLE 'gift_shop' (
    'giftshopID' INT NOT NULL AUTO_INCREMENT,
    'donations' DECIMAL(15,2) NOT NULL DEFAULT 0,
    'product_sales' DECIMAL(15,2) NOT NULL DEFAULT 0,
    PRIMARY KEY ('giftshopID')
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;
    
DROP TABLE IF EXISTS 'user';

CREATE TABLE 'user' (
    'name' varchar(30),
    'credit_card_info' varchar(16), --do more with this later
    'age' INT,
    'phone_number' varchar(10) NOT NULL, --do more with this later
    'email' varchar(45) NOT NULL,
    'gender' varchar(15),
    'tickets_purchased' INT NOT NULL DEFAULT 0,
    PRIMARY KEY ('phone_number', 'email')
 )  ENGINE=InnoDB DEFAULT CHARSET=latin1;

