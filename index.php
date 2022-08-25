<?php

include "include/config.php";






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basketball League Admin</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <div class="container">
        <div id="iniciarPartidaBanner">
            <h2>Iniciar nuevo partido</h2>
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
    <script></script>
    <script></script>
    <script></script>
    
</body>
</html>