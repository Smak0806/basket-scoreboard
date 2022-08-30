<?php 

include "./globals.php";

function db_connect(){

    global $db_host, $db_user, $db_password, $db_name;

    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

    // Check connection
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    } else {
        return $mysqli;
    }

}

function mysqlQuery_select($query){
    
    $conn = db_connect();

    if ($result = mysqli_query($conn, $query)) {
        echo "Returned rows are: " . mysqli_num_rows($result);
        // Free result set
        return mysqli_free_result($result);
    }else{
        die("Error consulta");
    }
    
}

?>