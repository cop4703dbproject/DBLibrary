<?php
if (isset($_POST['login-submit'])){
    
    require 'dbh.inc.php';
    
    $student_email = $_POST['studentemail'];
    $pwd = $_POST['pwd'];
    
    if(empty($student_email) || empty($pwd)){
        header("Location: ../index.php?error=emptyfields");
        exit();
    }
    else{
        $sql = "SELECT * FROM Student WHERE Email=?;";
        $stmt = mysqli_stmt_init($connect);
        
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../index.php?error=sqlerror");
            exit();

        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $student_email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            
            if($row = mysqli_fetch_assoc($result)){
               // $pwdCheck = password_verify($pwd, $row['Password']);
                
                if($pwd != $row['Password'] /*false*/){
                   header("Location: ../index.php?error=incorrectPassword");
                    exit(); 
                }
                else if($pwd == $row['Password'] /*true*/){
                    session_start();
                    $_SESSION['StudentEmail'] = $row['Email'];
                    
                    header("Location: ../main.php?login=success");
                    exit(); 
                }
                else{
                    header("Location: ../index.php?error=incorrectPassword");
                    exit();
                }
            }
            else{
                header("Location: ../index.php?error=noUserFound");
                exit();
            }
        }
    }
    
}

else{
    header("Location: ../index.php");
    exit();
}