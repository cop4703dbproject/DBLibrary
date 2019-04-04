<?php
session_start();

if (isset($_POST['rent-submit'])){
    
    require 'dbh.inc.php';
    
    $isbn = $_POST['isbn'];
    $student_id = $_SESSION["StudentID"];

    $today=date('Y-m-d');

    // add 30 days to date
    $return_date = Date('Y-m-d', strtotime("+30 days"));

    $sql_ins = "INSERT INTO Rents VALUES ($student_id,'$isbn','$today','$return_date')";

    if (mysqli_query($connect, $sql_ins)) {

        $sql_upd = "UPDATE Books SET Availability = 0 WHERE ISBN = '$isbn'";

        if (mysqli_query($connect, $sql_upd)) {
            header("Location: ../main.php");
            exit();           
        } else {
            echo "Error: " . $sql_upd . "<br>" . mysqli_error($connect);
        }
    } else {
        echo "Error: " . $sql_ins . "<br>" . mysqli_error($connect);
    }
}else{
    header("Location: ../main.php");
    exit();
}