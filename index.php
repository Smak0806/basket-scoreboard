<?php

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

function genera_select($id){
    
    $returnString = "";

    $conn = db_connect();

    $query = "SELECT * FROM equipos";

    $result = $conn->query($query);
    
    if(!$result){
        die("Error en la consulta");
    }else{
        echo "<select id='$id' name='$id'>";

        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row["idEquipo"] . "'>".$row["nombreEquipo"]."</option>";  
        }

        echo "</select>";
    }   

    $conn -> close();

    
    
}

?>

<!DOCTYPE html>
<html lang="en">
    <?php //include $rootDir.'/include/components/head.php'; ?>
<body>
    <div class="container">
        <div id="iniciarPartidaBanner">
            <h2>Iniciar nuevo partido </h2>
            <form id="formIndex">
                <fieldset>
                    <label for=""></label>                    
                    <?php genera_select("equipoA"); ?>                
                </fieldset>
                <fieldset>
                    <label for=""></label>                    
                    <?php genera_select("equipoB"); ?>                                                
                </fieldset>
                <button class="btn btn-primary" type="submit">Button</button>
                                
            </form>
            
        </div> 

        <div id="verEstadisticasBanner">
            <h2>Ver Estadisticas</h2>
            <form action="">
                <fieldset>
                    <input type="radio" id="" name="" value="">
                    <label for="t"></label> 
                    <input type="radio" id="" name="" value="">
                    <label for="t"></label> 
                </fieldset> 

                <fieldset>
                    <label for=""></label>
                    <select name="" id="" class="">
                        <option value="-1">Seleccionar equipo</option>
                    </select>
                </fieldset>
                
                <fieldset>
                    <label for=""></label>
                    <select name="" id="" class="">
                        <option value="-1">Seleccionar jugador</option>
                    </select>
                </fieldset>      

                <button class="btn btn-primary" type="submit">Button</button>
            </form>
        </div>

        <div class="results_banner">
            <div class="results_title">
                <h2>Ver Resultados</h2>
            </div>
            <div class="results_table">
            <button class="btn btn-primary" type="submit">Button</button>
            </div>
        </div>


    </div>
    <footer>

    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    
</body>
</html>