create database zoo;

CREATE TABLE location (
    locationID INT NOT NULL AUTO_INCREMENT,
    title varchar(30),
    PRIMARY KEY (`locationID`)
);

CREATE TABLE department (
    departmentID INT NOT NULL AUTO_INCREMENT,
    title varchar(30),
    PRIMARY KEY (departmentID)
);

CREATE TABLE attractions (
    attractionID INT NOT NULL AUTO_INCREMENT,
    locationID varchar(30),
    purchases DECIMAL(15, 2) NOT NULL DEFAULT 0,
    PRIMARY KEY (attractionID)
    FOREIGN KEY (locationID) REFERENCES location(locationID)
);

CREATE TABLE animals (
    animalID INT NOT NULL AUTO_INCREMENT,
    attractionID INT NOT NULL AUTO_INCREMENT,
    species varchar(15),
    gender varchar(15),
    DOB varchar(10),
    PRIMARY KEY (animalID)
    FOREIGN KEY (attractionID) REFERENCES location(locationID)
);







