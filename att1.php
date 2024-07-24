<?php

class Pessoa{

    //definindo os atributos
    public $nome;
    public $endereco;
    public $cidade;
    public $uf;
    public $altura;

    //definindo os metodos
    function falarOla(){
        print "Olá mundo, sou " . $this -> nome . "! \n";
    }

    function falarEndereco(){
        print "Moro em " . $this -> endereco . ", " . $this -> cidade . "/" . $this -> uf . "\n";
    }

    function falarAltura(){
        print "Tenho " . $this -> altura . " metros \n";
    }

}

$pessoa0 = new Pessoa();

$pessoa0 -> nome = readline("Insira o nome da pessoa: ");
$pessoa0 -> endereco = readline("Insira o endereço: ");
$pessoa0 -> cidade = readline("Insira a cidade: ");
$pessoa0 -> uf = readline("Insira a sigla do estado: ");
$pessoa0 -> altura = readline("Insira a altura da pessoa: ");

$pessoa0->falarOla();
$pessoa0->falarEndereco();
$pessoa0->falarAltura();