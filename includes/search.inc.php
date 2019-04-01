<?php 

if (isset($_POST['search-submit'])){
    
    require 'dbh.inc.php';
    
    $bookname = $_POST['booktitle'];
    
    if(empty($bookname)){
        header("Location: ../search.php?error=emptyfields");
        exit();
    }
    else{
        $sql = "SELECT StudentID, S.Name FROM Students S, Books B WHERE S.StudentID=R.StudentID AND R.ISBN=B.ISBN AND B.Title=?;";
        $stmt = mysqli_stmt_init($connect);
        
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../search.php?error=sqlerror");
        exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $bookname);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["StudentIID"]. " - Name: " . $row["Name"]. "<br>";
                }
            }
            else{
                echo "0 results";
            }
        }
    }
}

?>