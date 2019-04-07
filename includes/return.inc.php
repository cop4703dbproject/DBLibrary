<?php
session_start();

if (isset($_POST['return-submit'])){
    
    require 'dbh.inc.php';
    
    $isbn = $_POST['isbn'];
    $student_id = $_SESSION["StudentID"];

    $sql_del = "DELETE FROM Rents WHERE ISBN = '$isbn' AND StudentID = $student_id";

    if (mysqli_query($connect, $sql_del)) {

        $sql_upd = "UPDATE Books SET Availability = 1 WHERE ISBN = '$isbn'";

        if (mysqli_query($connect, $sql_upd)) {
            header("Location: ../main.php");
            exit();           
        } else {
            echo "Error: " . $sql_upd . "<br>" . mysqli_error($connect);
        }
    } else {
        echo "Error: " . $sql_del . "<br>" . mysqli_error($connect);
    }
}else{
    header("Location: ../main.php");
    exit();
}