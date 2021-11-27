<?php namespace App\Models;

use CodeIgniter\Model;

class ProcedimientosModel extends Model
{
    public function getMedicos(){
        $sql = "SELECT * FROM medico_veterinario";
        $Medicos = $this->db->query($sql);
        return $Medicos->getResultArray();
    }
    public function getMedico($cmvp){
        $sql = "SELECT * FROM medico_veterinario WHERE cmvp = $cmvp";
        $Medicos = $this->db->query($sql);
        return $Medicos->getRowArray();
    }
    public function getDuenos(){
        $sql = "SELECT * FROM dueno";
        $Medicos = $this->db->query($sql);
        return $Medicos->getResultArray();
    }
    public function getMascotas(){
        $sql = "SELECT * FROM mascota";
        $Mascota = $this->db->query($sql);
        return $Mascota->getResultArray();
    }
    public function getHistorial(){
        $sql = "SELECT historial_clinico.*,mascota.nombre FROM historial_clinico INNER JOIN mascota ON mascota.codigo_mascota = historial_clinico.Cod_mascota";
        $Mascota = $this->db->query($sql);
        return $Mascota->getResultArray();
    }

    // ---------------PROCEDIMIENTOS-------------

    public function obtenerUsuario($usuario,$password){
        $sql = "CALL `get_login`('$usuario','$password')";
        $Login = $this->db->query($sql);
        return $Login->getRowArray();
    }

    public function saveMedico($cmvp,$nombre,$correo,$telefono){
        $sql = "CALL `add_veterinario`('$cmvp','$nombre','$correo','$telefono')";
        $this->db->query($sql);
        return true;
    }

    public function updMedico($cmvp,$nombre,$correo,$telefono){
        $sql = "CALL `upd_veterinario`('$cmvp','$nombre','$correo','$telefono')";
        $this->db->query($sql);
        return true;
    }
    
    public function saveMascota($codigo,$dueno,$nombre,$especie,$raza,$sexo,$peso,$fecha){
        $sql = "CALL `add_mascota`('$codigo','$dueno','$nombre','$especie','$raza','$sexo','$peso','$fecha')";
        $this->db->query($sql);
        return true;
    }

    public function delMedico($cmvp){
        $sql = "CALL `del_veterinario`('$cmvp')";
        $this->db->query($sql);
        return true;
    }

    public function repPublicidad(){
        $sql = "CALL `rep_publicidad`()";
        $reporte = $this->db->query($sql);
        return $reporte->getResultArray();
    }

    public function repEncargados(){
        $sql = "CALL `rep_encargados`()";
        $reporte = $this->db->query($sql);
        return $reporte->getResultArray();
    }

    public function repHVacunacion(){
        $sql = "CALL `rep_hvacunacion`()";
        $reporte = $this->db->query($sql);
        return $reporte->getResultArray();
    }

    public function repCRazas(){
        $sql = "CALL `rep_craza`()";
        $reporte = $this->db->query($sql);
        return $reporte->getResultArray();
    }

    public function repExamenes($minimo,$maximo){
        $sql = "CALL `rep_examenes`('$minimo','$maximo')";
        $reporte = $this->db->query($sql);
        return $reporte->getResultArray();
    }

    public function repFallecidos(){
        $sql = "CALL `rep_fallecidos`()";
        $reporte = $this->db->query($sql);
        return $reporte->getResultArray();
    }
    public function repRealizados($mes){
        $sql = "CALL `rep_realizados`('$mes')";
        $reporte = $this->db->query($sql);
        return $reporte->getResultArray();
    }
    public function repDuenos($duenos){
        $sql = "CALL `rep_duenos`('$duenos')";
        $reporte = $this->db->query($sql);
        return $reporte->getResultArray();
    }
    public function repTratamiento(){
        $sql = "CALL `rep_tratamiento`()";
        $reporte = $this->db->query($sql);
        return $reporte->getResultArray();
    }
    public function repVacunas(){
        $sql = "CALL `rep_vacunas`()";
        $reporte = $this->db->query($sql);
        return $reporte->getResultArray();
    }
}