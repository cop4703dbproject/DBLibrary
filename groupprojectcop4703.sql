CREATE DATABASE librarydb;
USE librarydb;

CREATE TABLE Student (
StudentID INTEGER,
Name VARCHAR(100),
Address VARCHAR(200),
PhoneNumber VARCHAR(20),
Email VARCHAR(50),
Password VARCHAR(20),
PRIMARY KEY (StudentID)
);

CREATE TABLE Books (
ISBN VARCHAR(30),
Title VARCHAR(100),
Author VARCHAR(50),
Year DATE,
Genre VARCHAR(50),
Descr VARCHAR(500),
Availability BIT,
Photo VARCHAR(250),
PRIMARY KEY (ISBN)
);

CREATE TABLE Rents (
StudentID INTEGER,
ISBN VARCHAR(30),
Rental_Start DATE,
Rental_End DATE,
PRIMARY KEY (StudentID, ISBN),
FOREIGN KEY (StudentID) REFERENCES Student(StudentID) ON DELETE CASCADE,
FOREIGN KEY (ISBN) REFERENCES Books(ISBN)
);


INSERT INTO Books 
VALUES ('‎9787806261279','Moby Dick','Herman Melville', '1851-10-18','Adventure', 'A epic story of a sailors quest to catch a great white whale.', 1, 'images/Moby_Dick.jpg');

INSERT INTO Books 
VALUES ('9783036991276','A Study in Scarlet','Arthur Conan Doyle', '1888-01-01','Detective', 'The first Sherlock Holmes novel.', 0, 'images/A_Study_in_Scarlet.jpg');

INSERT INTO Books 
VALUES ('9781438501734','Arsene Lupin, Gentleman Burglar','Maurice Leblanc', '1907-06-10','Crime', 'A story about one of the first gentleman theives.', 0, 'images/Arsene_Lupin_Gentleman_Burglar.jpg');

INSERT INTO Books 
VALUES ('9788497571838','Murder on the Orient Express','Agatha Christie', '1934-01-01','Crime', 'One of the greatest crime novels by the famed author Agatha Christie', 1, 'images/Murder_on_the_Orient_Express.jpg');

INSERT INTO Books 
VALUES ('9780061917707','The Lord of the Rings','J. R. R. Tolkein', '1955-10-20','Fantasy', 'A high fantasy epic that inspired countless other fantasy works.', 1, 'images/The_Lord_of_the_Rings.jpg');

INSERT INTO Books 
VALUES ('9781470106324','The Hunger Games','Suzanne Collins', '2008-09-14','Adventure', 'A Young Adult Dystopian Adventure novel where teenagers are placed into a killing game.', 1, 'images/The_Hunger_Games.jpg');

INSERT INTO Books 
VALUES ('9780006540106','The Once and Future King','T. H. White', '1958-01-01','Fantasy', 'The story of King Arther and the round table.', 1, 'images/The_Once_and_Future_King.jpg');

INSERT INTO Books 
VALUES ('9781899888221','And Then There Were None','Agatha Christie', '1939-11-06','Crime', 'The best selling crime novel of all time that is full of deceit and murder', 0, 'images/And_Then_There_Were_None.jpg');

INSERT INTO Student
VALUES ('1234','John Doe','123 Street USA','5555555555','johndoe@email.com','password');

INSERT INTO Student
VALUES ('2222','Edgar Wright','777 UK Lane','1111111111','edgarwright@email.com','notpassword');

INSERT INTO Student
VALUES ('4444','Quentin Tarantino','777 LA Circle','4545454545','quentint@email.com','pulpfiction');

INSERT INTO Rents
VALUES ('1234','9781438501734','2019-02-14','2019-03-5');

INSERT INTO Rents
VALUES ('1234','9783036991276','2019-02-14','2019-03-5');

INSERT INTO Rents
VALUES ('1234','9781899888221','2019-03-01','2019-03-22');




