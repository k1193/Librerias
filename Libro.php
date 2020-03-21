<?php

// crear un libro que guarde la informacion de cada uno de los libros de una biblioteca.

class  Libro{
//atributos

public $titulo;
public $autores;
public $ejemplaresTotales;
public $ejemplaresPrestados;

// constructores


public  function __construct($nombre,$escritor,$numero,$prestamo){
        $this ->titulo = $nombre;
        $this ->autor =$escritor;
        $this ->ejemplaresTotales =$numero;

}


//metodos

public function prestamo(){
    if($this->ejemplaresTotales >0){

         $this->ejemplaresTotales =$this ->ejemplaresTotales-1;
         echo(" El libro:".$this->titulo." quedo con:".$this->ejemplaresTotales."disponibles");

    }else {
        echo(" Ya no hay ejemplares");
    }
}

}







?>