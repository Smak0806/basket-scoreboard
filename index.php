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
                    <select name="" id="" class="form-control">
                        <option value="-1">Seleccionar equipo</option>
                        
                    </select>
                </fieldset>
                <fieldset>
                    <label for=""></label>
                    <select name="" id="" class="form-control"></select>
                    <?php 

                       // $equipos=getEquipos();

                        
                    
                    ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script></script>
    <script></script>
    <script></script>
    
</body>
</html>