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

    $result = $conn->query($query);

    // Associative array
    $row = $result->fetch_assoc();
    printf ("%s (%s)\n", $row["idEquipo"], $row["nombreEquipo"]);

    // Free result set
    $result -> free_result();

    return $result;

    $conn -> close();
    
}

?>