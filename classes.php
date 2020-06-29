<?php

    class pessoa{
        private $nome;
        private $idade;
        private $peso;
        private $sexo;

        function __construct($nome, $idade, $peso, $sexo){
            $this->nome = (is_string($nome))?$nome:"nameError";
            $this->idade = (is_int($idade))?$idade:"idadeError";
            $this->peso = (is_int($peso))?$peso:"pesoError";
            $this->sexo = (is_int($sexo))?$sexo:"sexoError";
        }

        function getNome(){
            return $this->nome;
        }

        function getIdade(){
            return $this->idade;
        }

        function getPeso(){
            return $this->peso;
        }

        function getSexo(){
            return $this->sexo;
        }

        function setNome($nome){
            $this->nome = (is_string($nome))?$nome:"setNomeError";
        }

        function setIdade($idade){
            $this->idade = (is_string($idade))?$idade:"setIdadeError";
        }

        function setPeso($peso){
            $this->peso = (is_string($peso))?$peso:"setPesoError";
        }

        function setSexo($sexo){
            $this->sexo = (is_string($sexo))?$sexo:"setSexoError";
        }

        function show(){
            echo "<p>Nome: ".$this->getNome()."</p>";
            echo "<p>Idade: ".$this->getIdade()."</p>";
            echo "<p>Peso: ".$this->getPeso()."</p>";
            echo "<p>Sexo: ".(($this->getSexo() == 0)?"Masculino":(($this->getSexo()== 1)?"Feminino":"Erro"))."</p>";
        }

    }

    class carro{
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

    class livro{
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

?>