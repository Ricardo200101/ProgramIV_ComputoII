<?php
// clase abstracta 
/*abstract class Mascota{
    public $nombre;

    public function saludar(){
        echo "funcion no abstracta";
    }
    //metodo abstracto
    abstract function getNombre();
}

//establecer herecia 
class Gato extends Mascota{
    public function getNombre(){
        return $this->nombre;
    }
}

$gato = new Gato();
$gato->nombre = "Michi";
echo $gato->saludar();
echo $gato->getNombre();*/



//interfaces 
interface IMascota{
    public function getNombre();
    public function getEdad();
}

interface Imamifero{
    public function sonido();

}

//implementacion de interfaces 
class Gato implements Imascota, Imamifero{
    public $nombre;
     public $edad;

     function _construct($_nombre, $_edad){
        $this->nombre = $_nombre;
        $this->edad = $edad;
     }
     public function getNombre(){
         return $this->nombre;
     }

     public function getEdad(){
         return $this->edad; 
     }
     public function sonido(){
        echo "miau";
    }
}

$gato = new Gato ("michi", 1);
echo $gato->getNombre();
echo $gato->getEdad();
$gato->sonido();

?>


