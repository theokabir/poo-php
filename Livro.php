<?php

class Livro{
    private $titulo;
    private $autor;
    private $ano;
    private $edicao;

    function __construct($titulo, $autor, $ano, $edicao){
        $this->titulo = (is_string($titulo))?$titulo:"tituloError";
        $this->autor = (is_string($autor))?$autor:"autorError";
        $this->ano = (is_int($ano))?$ano:"anoError";
        $this->edicao = (is_int($edicao))?$edicao:"edicaoError";
    }

    function getTitulo(){
        return $this->titulo;
    }

    function getAutor(){
        return $this->autor;
    }

    function getAno(){
        return $this->ano;
    }

    function getEdicao(){
        return $this->edicao;
    }

    function setTitulo($titulo){
        $this->marca = (is_string($titulo))?$titulo:"setTituloError";
    }

    function setAutor($autor){
        $this->cor = (is_string($autor))?$autor:"setAutorError";
    }

    function setAno($ano){
        $this->ano = (is_string($ano))?$ano:"setAnoError";
    }

    function setEdicao($edicao){
        $this->modelo = (is_string($edicao))?$edicao:"setEdicaoError";
    }

    function show(){
        echo "<p>Titulo: ".$this->getTitulo()."</p>";
        echo "<p>Autor: ".$this->getAutor()."</p>";
        echo "<p>Ano: ".$this->getAno()."</p>";
        echo "<p>Edicao: ".$this->getEdicao()."</p>";
    }

}
