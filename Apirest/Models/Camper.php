<?php

require_once("../Config/Conectar.php");

class Psicologas extends Conectar{
    
    public function __construct(){
        parent::__construct();
    }

    public function get_Psicologas(){
        try {
            $sql = "SELECT * FROM psicologas";
            $stm = $this-> dbCnx -> prepare($sql);
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function insert_Psicologas($nombre_psicologas,$edad_psicologas,$especialidad,$cargo){
        try {
            $sql = "INSERT INTO psicologas (nombre_psicologas, edad_psicologas, especialidad, cargo) VALUES (:name, :age, :espe, :carg)"; 
            $stm = $this-> dbCnx -> prepare($sql);
            $stm->bindParam(":name",$nombre_psicologas);
            $stm->bindParam(":age",$edad_psicologas);
            $stm->bindParam(":espe",$especialidad);
            $stm->bindParam(":carg",$cargo);
            $stm->execute();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
/* 
class Psicologa extends Conectar{

    public function __construct(){
        parent::__construct();
    }

    public function get_Psychology() {
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM campers");
            $stm->execute();
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function insert_Psychology($id, $imagen, $nombre, $edad, $promedio, $nivelCAmpus, $nivelIngles, $especialidad, $direccion, $celular, $ingles, $Ser, $Review, $Skills, $Asitencia) {
        try {
            $stm = $this->dbCnx->prepare("INSERT INTO campers (id, imagen, nombre, edad, promedio, nivelCAmpus, nivelIngles, especialidad, direccion, celular, Ingles, Ser, Review, Skills, Asitencia) VALUES (:id, :imagen, :nombre, :edad, :promedio, :nivelCampus, :nivelIngles, :especialidad, :direccion, :celular, :ingles, :Ser, :Review, :Skills, :Asitencia)");
            $stm->bindParam(':id', $id);
            $stm->bindParam(':imagen', $imagen);
            $stm->bindParam(':nombre', $nombre);
            $stm->bindParam(':edad', $edad);
            $stm->bindParam(':promedio', $promedio);
            $stm->bindParam(':nivelCampus', $nivelCAmpus);
            $stm->bindParam(':nivelIngles', $nivelIngles);
            $stm->bindParam(':especialidad', $especialidad);
            $stm->bindParam(':direccion', $direccion);
            $stm->bindParam(':celular', $celular);
            $stm->bindParam(':ingles', $ingles);
            $stm->bindParam(':Ser', $Ser);
            $stm->bindParam(':Review', $Review);
            $stm->bindParam(':Skills', $Skills);
            $stm->bindParam(':Asitencia', $Asitencia);
            $stm->execute();
            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update_camper($id, $imagen, $nombre, $edad, $promedio, $nivelCAmpus, $nivelIngles, $especialidad, $direccion, $celular, $ingles, $Ser, $Review, $Skills, $Asitencia){
        try {
            $sql = "UPDATE campers SET imagen = :imagen, nombre = :nombre, edad = :edad, promedio = :promedio, nivelCAmpus = :nivelCampus, nivelIngles = :nivelIngles, especialidad = :especialidad, direccion = :direccion, celular = :celular, ingles = :ingles, Ser = :Ser, Review = :Review, Skills = :Skills, Asitencia = :Asistencia WHERE id = :id";
            $stm = $this->dbCnx->prepare($sql);
            $stm->bindParam(':id', $id,);
            $stm->bindParam(':imagen', $imagen);
            $stm->bindParam(':nombre', $nombre);
            $stm->bindParam(':edad', $edad);
            $stm->bindParam(':promedio', $promedio);
            $stm->bindParam(':nivelCampus', $nivelCAmpus);
            $stm->bindParam(':nivelIngles', $nivelIngles);
            $stm->bindParam(':especialidad', $especialidad);
            $stm->bindParam(':direccion', $direccion);
            $stm->bindParam(':celular', $celular);
            $stm->bindParam(':ingles', $ingles);
            $stm->bindParam(':Ser', $Ser);
            $stm->bindParam(':Review', $Review);
            $stm->bindParam(':Skills', $Skills);
            $stm->bindParam(':Asistencia', $Asitencia);
            $stm->execute();
            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function delete_camper($id){
        try {
            $sql = "DELETE FROM campers WHERE id = :id";
            $stm = $this->dbCnx->prepare($sql);
            $stm->bindParam(':id', $id);
            $stm->execute();
            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
} */
?>