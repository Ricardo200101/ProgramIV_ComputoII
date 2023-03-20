<?php

interface IInstru{
    public function getNombre();
    public function getTipo();
}

interface ISonido{
    public function sonido();
}

//implementando la  interfaces
class Guitarra1 implements IInstru, ISonido{
    public $nombre;
    public $tipo;

    function __construct($nombre, $tipo)
    {
        $this->nombre= $nombre;
        $this->tipo= $tipo;
    }


    public function getNombre()
    {
        return $this->nombre;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function sonido()
    {echo "Aventura les gustan tocar mucho";}
}

$instrumento = new Guitarra1("Guitarra","Electrica"); echo "Nombre: ". 
$instrumento->getNombre()."Tipo: ".
$instrumento->getTipo()."<br/>".
$instrumento->sonido();

//implementando la interfaces
class Saxofon1 implements IInstru, ISonido{
    public $nombre;
    public $tipo;

    function __construct($nombre, $tipo)
    {
        $this->nombre= $nombre;
        $this->tipo= $tipo;
    }


    public function getNombre()
    {
        return $this->nombre;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function sonido(){
    echo "Suena muy fuerte ";
    }
}

$instrumento = new Saxofon1("Saxofon","Aire"); echo "Nombre: ". 
$instrumento->getNombre()."Tipo: ".
$instrumento->getTipo()."<br/>".
$instrumento->sonido();

//implementando la  interfaces
class Violin1 implements IInstru, ISonido{
    public $nombre;
    public $tipo;

    function __construct($nombre, $tipo)
    {
        $this->nombre= $nombre;
        $this->tipo= $tipo;
    }


    public function getNombre()
    {
        return $this->nombre;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function sonido(){
    echo "Los miarachis tocan";
    }
}

$instrumento = new Violin1("Violin","Cuerda"); echo "Nombre: ". 
$instrumento->getNombre()."Tipo: ".
$instrumento->getTipo().
$instrumento->sonido();

?>