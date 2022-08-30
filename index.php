<?php

//include "include/config.php";






?>

<!DOCTYPE html>
<html lang="en">
    <?php include $rootDir.'/include/components/head.php'; ?>
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
    <footer>

    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    
</body>
</html>