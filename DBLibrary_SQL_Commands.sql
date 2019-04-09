#Find user with a specified email.
SELECT * 
FROM Student 
WHERE Email = $email;


#Retrieve all unique book genres.
SELECT Genre 
FROM Books 
GROUP BY Genre;


#Retrieve all available books
SELECT * 
FROM Books 
WHERE Availability=1;


#Retrieve all available books of a specific genre
SELECT * 
FROM Books 
WHERE Availability=1 AND Genre = $genre;


#Retrieve all books rented by a specific user
SELECT B.Photo, B.Title, B.Author, B.ISBN, R.StudentID, R.Rental_Start, R.Rental_End 
FROM Books B, Rents R 
WHERE R.StudentID = $student_id AND B.ISBN = R.ISBN;


#Insert rental info into rents table
INSERT INTO Rents 
VALUES ($student_id, $isbn, $today, $return_date);


#Update book availibility to unavailable
UPDATE Books 
SET Availability = 0 
WHERE ISBN = $isbn;


#Remove rental information from rents table
DELETE FROM Rents 
WHERE ISBN = $isbn AND StudentID = $student_id;


#Update book availibility to available
UPDATE Books 
SET Availability = 1 
WHERE ISBN = $isbn;


