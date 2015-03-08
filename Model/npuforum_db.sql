DROP DATABASE IF EXISTS npuforumdb;

CREATE DATABASE npuforumdb;

USE npuforumdb;

-- -----------------------------------------------------
-- Table users
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS users (
  userID INT NOT NULL AUTO_INCREMENT,
  firstName VARCHAR(45) NOT NULL,
  lastName VARCHAR(45) NOT NULL,
  emailID VARCHAR(45) NOT NULL,
  password VARCHAR(45) NOT NULL,
  phoneNumber VARCHAR(45) NULL,
  address VARCHAR(100) NULL,
  city VARCHAR(45) NULL,
  state VARCHAR(45) NULL,
  country VARCHAR(45) NULL,
  status VARCHAR(45) NULL,
  dateRegistered DATE NULL,
  lastUpdatedBy VARCHAR(45) NULL,
  lastUpdatedDate DATE NULL,
  PRIMARY KEY (userID),
  UNIQUE INDEX emailID_UNIQUE (emailID ASC));

INSERT INTO users (firstName, lastName, emailID, password, phoneNumber, address, city, state, 
country, status, dateRegistered, lastUpdatedBy, lastUpdatedDate) 
VALUES('John','Smith','jsmith@mail.npu.edu','npu','408-408-4084','47671 Westinghouse Drive',
'Fremont', 'CA','USA','Active',now(),'1000',now());

INSERT INTO users (firstName, lastName, emailID, password, phoneNumber, address, city, state, 
country, status, dateRegistered, lastUpdatedBy, lastUpdatedDate) 
VALUES('Bob','Hice','bob@mail.npu.edu','npu','408-408-4084','47671 Westinghouse Drive',
'Fremont', 'CA','USA','Active',now(),'1000',now());

-- -----------------------------------------------------
-- Table posts
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS posts (
  postID INT NOT NULL AUTO_INCREMENT,
  userID INT NOT NULL,
  course VARCHAR(45) NOT NULL,
  description VARCHAR(500) NOT NULL,
  status VARCHAR(45) NULL,
  datePosted DATE NULL,
  PRIMARY KEY (postID),
  INDEX post_userID_idx (userID ASC),
  CONSTRAINT post_userID
    FOREIGN KEY (userID)
    REFERENCES users (userID)
    ON DELETE CASCADE
    ON UPDATE CASCADE);

INSERT INTO posts (userID, course, description, status, datePosted) 
VALUES(1,'CS480','How to reverse a String in Java?','Active', now());

INSERT INTO posts (userID, course, description, status, datePosted) 
VALUES(2,'CS480','Difference between interface and pure abstract class?','Active', now());

INSERT INTO posts (userID, course, description, status, datePosted) 
VALUES(2,'CS464','How to reverse a String in C language?','Active', now());

INSERT INTO posts (userID, course, description, status, datePosted) 
VALUES(1,'CS526','How to integrate reCAPTCHA in an application?','Active', now());

-- -----------------------------------------------------
-- Table replies
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS replies (
  replyID INT NOT NULL AUTO_INCREMENT,
  postID INT NOT NULL,
  userID INT NOT NULL,
  content VARCHAR(500) NOT NULL,
  status VARCHAR(45) NULL,
  dateReplied DATE NULL,
  PRIMARY KEY (replyID),
  INDEX replies_postID_idx (postID ASC),
  INDEX replied_userID_idx (userID ASC),
  CONSTRAINT replies_postID
    FOREIGN KEY (postID)
    REFERENCES posts (postID)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT replied_userID
    FOREIGN KEY (userID)
    REFERENCES users (userID)
    ON DELETE CASCADE
    ON UPDATE CASCADE);

INSERT INTO replies (userID, postID, content, status, dateReplied) 
VALUES(2, 1, 'Easiest way is to follow below: 
int length = str.length(); 
for ( int i = length - 1 ; i >= 0 ; i-- ) reverse = reverse + str.charAt(i);', 'Active', now());

GRANT SELECT, INSERT, DELETE, UPDATE
ON npuforumdb.*
TO admin@localhost
IDENTIFIED BY 'pass@word';