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
    function obtenerEquipos(){
        
        $query = "";

        $listadoEquipos = mysqlQuery_select($query);

        return $listadoEquipos;

    }

    function desplegableEquipos(){
        
        $listado = Equipo::obtenerEquipos();

        foreach ($listado as $key=>$value){

        }

    }
    function ganaPartido($idEquipo) {
        //mete en base de datos una victoria mas al equipo.
    }


}
  
  $equipo = new Equipo();
  




?>