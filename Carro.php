<?php
class Carro{
    private $marca;
    private $cor;
    private $placa;
    private $modelo;

    function __construct($marca, $cor, $placa, $modelo){
        $this->marca = (is_string($marca))?$marca:"marcaError";
        $this->cor = (is_string($cor))?$cor:"corError";
        $this->placa = (is_string($placa))?$placa:"placaError";
        $this->modelo = (is_int($modelo))?$modelo:"modeloError";
    }

    function getMarca(){
        return $this->marca;
    }

    function getCor(){
        return $this->cor;
    }

    function getPlaca(){
        return $this->placa;
    }

    function getModelo(){
        return $this->modelo;
    }

    function setMarca($marca){
        $this->marca = (is_string($marca))?$marca:"setMarcaError";
    }

    function setCor($cor){
        $this->cor = (is_string($cor))?$cor:"setCorError";
    }

    function setPlaca($placa){
        $this->placa = (is_string($placa))?$placa:"setPlacaError";
    }

    function setModelo($modelo){
        $this->modelo = (is_string($modelo))?$modelo:"setModeloError";
    }

    function show(){
        echo "<p>Marca: ".$this->getMarca()."</p>";
        echo "<p>Cor: ".$this->getCor()."</p>";
        echo "<p>Placa: ".$this->getPlaca()."</p>";
        echo "<p>Modelo: ".$this->getModelo()."</p>";
    }

}
