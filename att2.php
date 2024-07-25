<?php

class Retangulo{

    //criando os atributos
    public $base;
    public $altura;

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

for ($i=0; $i < 3; $i++) { 
    
    $retangulo = new Retangulo();

    $retangulo -> base = readline("Insira a base do retângulo " . $i+1 . ": ");
    $retangulo -> altura = readline("Insira a altura do retângulo " . $i+1 . ": ");
    
    print "O valor da área é de: " . $retangulo->area() . "m² \n";
    print "O valor do perimetro é de: " . $retangulo->perimetro() . "m² \n";
}
