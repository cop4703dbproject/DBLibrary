<?php
if (isset($_POST['rent-submit'])){
    
    require 'dbh.inc.php';
    
    $isbn = $_POST['isbn'];

    $today=date('Y-m-d');

    // add 30 days to date
    $return_date = Date('Y-m-d', strtotime("+30 days"));

    $sql = "INSERT INTO Rents VALUES ('1234',$isbn,'$today','$return_date')";

    if (mysqli_query($connect, $sql)) {
        header("Location: ../main.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
}else{
    header("Location: ../main.php");
    exit();
}