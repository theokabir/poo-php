<?php

    class Pessoa{
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
