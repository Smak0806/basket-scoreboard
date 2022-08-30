<script>
let bebito = "Tu bebito";
console.log(bebito);
bebito += " FIU FIU";
console.log(bebito); 
</script>


<?php

//include "./control/config.php";

function db_connect(){

    $db_host = "localhost";
    $db_name = "basket_admin";
    $db_user = "root";
    $db_password = "";

    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

    // Check connection
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    } else {
        return $mysqli;
    }

}

function mysqlQuery_select(){
    
    $returnString = "";

    $conn = db_connect();

    $query = "SELECT * FROM equipos";
    $query .= " WHERE partidosssGanados=1";

    $result = $conn->query($query);

    
    if(!$result){
        die("Error en la consulta");
    }else{
        $returnString.= "<select>";

        while ($row = $result->fetch_assoc()) {
            $returnString.= "<option value='" . $row["idEquipo"] . "'>".$row["nombreEquipo"]."</option>";  
        }

        $returnString.= "</select>";
    }

    return $returnString;

    $conn -> close();

    
    
}

$cosa = mysqlQuery_select();

echo "<h1></h1>";
echo "<pre>";
print_r($cosa);
echo "</pre>";



?>