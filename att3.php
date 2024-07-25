<?php

class Retangulo{

    //criando os atributos
    public $base;
    public $altura;

    //construct
    function __construct($b,$a){
        $this->base = $b;
        $this->altura = $a;
    }

    //criando os metodos
    function area(){
        $area = $this->base * $this->altura;
        return $area;
    }

    function perimetro(){
        $perimetro = $this->base * 2 + $this->altura * 2;
        return $perimetro;
    }
}

for ($i=0; $i < 3; $i++){ 

    $b = readline("Insira a base do retângulo " . $i+1 . ": ");
    $a = readline("Insira a altura do retângulo " . $i+1 . ": ");

    $retangulo = new Retangulo($b,$a);
    
    print "O valor da área é de: " . $retangulo->area() . "m² \n";
    print "O valor do perimetro é de: " . $retangulo->perimetro() . "m \n";
}
