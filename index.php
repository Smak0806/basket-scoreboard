<?php

//include "include/config.php";






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Basketball League Admin</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <div class="container">
        <div id="iniciarPartidaBanner">
            <h2>Iniciar nuevo partido </h2>
            <form id="formIndex">
                <fieldset>
                    <label for=""></label>
                    <select name="" id="" class="form-control"></select>
                </fieldset>
                <fieldset>
                    <label for=""></label>
                    <select name="" id="" class="form-control"></select>
                    <?php 

                        $equipos=getEquipos();

                        
                    
                    ?>
                </fieldset>
                <button type="submit">Iniciar partida</button>
                                
            </form>
            
        </div>    
        <div id="verEstadisticasBanner">
            <button>Ver Estadisticas</button>
        </div>
        <div id="editarEquiposBanner">
            <button>Ver Estadisticas</button>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script></script>
    <script></script>
    <script></script>
    
</body>
</html>