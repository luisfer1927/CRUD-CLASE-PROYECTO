<?php
class Cliente{
    //Definir los atributos.
    private $idCliente;
    private $idUsuario;
    private $nombre;
    private $apellido;
    private $peso;
    private $fechaNacimiento;
    private $genero;
    private $estatura;

    //Definir el constructor
    public function __construct(){

    }

    public function setidCliente($e_idCliente){
        $this->idCliente = $e_idCliente;
    }

    public function setidUsuario($e_idUsuario){
        $this->idUsuario = $e_idUsuario;
    }

    public function setnombre($e_nombre){
        $this->nombre = $e_nombre;
    }

    public function setapellido($e_apellido){
        $this->apellido = $e_apellido;
    }

    public function setpeso($e_peso){
        $this->peso = $e_peso;
    }

    public function setfechaNacimiento($e_fechaNacimiento){
        $this->fechaNacimiento = $e_fechaNacimiento;
    }

    public function setgenero($e_genero){
        $this->genero = $e_ge;
    }

    public function setestatura($e_estatura){
        $this->estatura = $e_estatura;
    }



    public function getidCliente(){
        return $this->idCliente;
    }

    public function getidUsuario(){
        return $this->idUsuario;
    }

    public function getnombre(){
        return $this->nombre;
    }

    public function getapellido(){
        return $this->apellido;
    }

    public function getpeso(){
        return $this->peso;
    }

    public function getfechaNacimiento(){
        return $this->fechaNacimiento;
    }

    public function getgenero(){
        return $this->genero;
    }

    public function getestatura(){
        return $this->estatura;
    }

}
?>