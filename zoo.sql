DROP DATABASE IF EXISTS zoo;
CREATE DATABASE zoo;

USE zoo;

CREATE TABLE location (
    locationID INT NOT NULL AUTO_INCREMENT,
    title varchar(30),
    PRIMARY KEY (locationID)
);

CREATE TABLE department (
    departmentID INT NOT NULL AUTO_INCREMENT,
    title varchar(30),
    PRIMARY KEY (departmentID)
);

CREATE TABLE manager (
    departmentID INT NOT NULL,
    locationID INT NOT NULL,
    name varchar(30) NOT NULL,
    managerID INT NOT NULL AUTO_INCREMENT,
    ssn INT NOT NULL,
    data_hired varchar(10),
    age INT,
    PRIMARY KEY (managerID, ssn),
    CONSTRAINT manager_ibfk_1 FOREIGN KEY (departmentID) REFERENCES department (departmentID),
    CONSTRAINT manager_ibfk_2 FOREIGN KEY (locationID) REFERENCES location (locationID)
);

CREATE TABLE attraction (
    attractionID INT NOT NULL AUTO_INCREMENT,
    locationID INT NOT NULL,
    purchases DECIMAL(15, 2) NOT NULL DEFAULT 0,
    PRIMARY KEY (attractionID),
    CONSTRAINT attraction_ibfk_1 FOREIGN KEY (locationID) REFERENCES location (locationID)
);

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

CREATE TABLE employee (
    attractionID INT NOT NULL,
    locationID INT NOT NULL,
    managerID INT NOT NULL,
    employeeID INT NOT NULL AUTO_INCREMENT,
    name varchar(30) NOT NULL,
    ssn INT NOT NULL,
    data_hired varchar(10),
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
