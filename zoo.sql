create database zoo;

CREATE TABLE 'location' (
    'locationID' INT NOT NULL AUTO_INCREMENT,
    'title' varchar(30),
    PRIMARY KEY ('locationID')
);

CREATE TABLE 'department' (
    'departmentID' INT NOT NULL AUTO_INCREMENT,
    'title' varchar(30),
    PRIMARY KEY ('departmentID')
);

CREATE TABLE 'manager' (
    'departmentID' INT NOT NULL AUTO_INCREMENT,
    'locationID' INT NOT NULL AUTO_INCREMENT,
    'name' varchar(30) NOT NULL,
    'managerID' INT NOT NULL AUTO_INCREMENT,
    'ssn' INT NOT NULL, --do more with this later
    'data_hired' varchar(10), --do more with this later
    PRIMARY KEY ('managerID', 'ssn')
    FOREIGN KEY ('departmentID') REFERENCES department('departmentID'),
    FOREIGN KEY ('locationID') REFERENCES location('locationID')

CREATE TABLE 'attraction' (
    'attractionID' INT NOT NULL AUTO_INCREMENT,
    'locationID' varchar(30),
    'purchases' DECIMAL(15, 2) NOT NULL DEFAULT 0,
    PRIMARY KEY ('attractionID'),
    FOREIGN KEY ('locationID') REFERENCES location('locationID')
);

CREATE TABLE 'animal' (
    'animalID' INT NOT NULL AUTO_INCREMENT,
    'attractionID' INT NOT NULL AUTO_INCREMENT,
    'name' varchar(30),
    'species' varchar(15),
    'gender' varchar(15),
    'DOB' varchar(8), --do more with this later
    PRIMARY KEY ('animalID'),
    FOREIGN KEY ('attractionID') REFERENCES attraction('attractionID')
);

CREATE TABLE 'employee' (
    'attractionID' INT NOT NULL AUTO_INCREMENT,
    'locationID' INT NOT NULL AUTO_INCREMENT,
    'managerID' INT NOT NULL AUTO_INCREMENT,
    'employeeID' INT NOT NULL AUTO_INCREMENT,
    'name' varchar(30) NOT NULL,
    'ssn' INT NOT NULL, --do more with this later
    'data_hired' varchar(10), --do more with this later
    PRIMARY KEY ('employeeID', 'ssn'),
    FOREIGN KEY ('attractionID') REFERENCES attraction('attractionID'),
    FOREIGN KEY ('locationID') REFERENCES location('locationID'),
    FOREIGN KEY ('managerID') REFERENCES manager('managerID')
);

CREATE TABLE 'gift_shops' (
    'giftshopID' INT NOT NULL AUTO_INCREMENT,
    'donations' DECIMAL(15,2) NOT NULL DEFAULT 0,
    'product_sales' DECIMAL(15,2) NOT NULL DEFAULT 0,
    PRIMARY KEY ('giftshopID')
);
    
CREATE TABLE 'users' (
    'name' varchar(30),
    'credit_card_info' varchar(16), --do more with this later
    'age' INT,
    'phone_number' varchar(10) NOT NULL, --do more with this later
    'email' varchar(45) NOT NULL,
    'gender' varchar(15),
    'tickets_purchased' INT NOT NULL DEFAULT 0,
    PRIMARY KEY ('phone_number', 'email')
 );
--users




