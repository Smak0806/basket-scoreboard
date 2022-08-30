<?php

include "../../control/config.php";

class Equipo {

    // Properties
    //public $idEquipo;
    //public $nombrEquipo;
    //public $puntosTemporada
    //public $faltasTemporada
    //public $partidosGanados
    //public $partidosPerdidos
  
    // Methods
    function ganaPartido($idEquipo) {
      //mete en base de datos una victoria mas al equipo.
    }

    function obtenerEquipos(){
        
        $query = "";

        $listadoEquipos = mysqlQuery_select($query);

        return json_encode($listadoEquipos);

    }

    function desplegableEquipos(){

        //db_connect($db_host, $db_user, $db_password, $db_name);

    }

}
  
  $equipo = new Equipo();
  




?>