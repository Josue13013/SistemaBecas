<?php
require_once("../Modelo/BusquedaGestion.php");
class LNBusquedaAsignacionBecaInstitucional{
    private $objBusquedaGestion;
    
    function __construct()
    {
        $this->objBusquedaGestion =  new BusquedaGestion();
    }

    public function buscarEstudianteGestion($idGestion,$idEstudiante){
        return $this->objBusquedaGestion->verificarEstudianteGestion($idGestion,$idEstudiante);
    }
    public function listarEstudiantesBecados(){
        return $this->objBusquedaGestion->listarEstudiantesBecados();
    }
    public function detalleEstudiante($id){
        return $this->objBusquedaGestion->detalleEstudiante($id);
    }
    public function mes($fechaInicio,$fechaFin,$idABI){
        return $this->objBusquedaGestion->mes($fechaInicio,$fechaFin,$idABI);
    }
    public function dia($idABI,$fecha){
        return $this->objBusquedaGestion->dia($idABI,$fecha);
    }
}

?>