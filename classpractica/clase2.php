<?php 

interface ICoche{
    public function getTipo();
    public function getMarca();
}

interface IVolante{
    public function volante();
}

interface IPito{
    public function pito();
}

class Carro implements ICoche, IVolante, IPito{
    public  $tipo;
    public $marca;

    function _construct($tipo, $marca){
        $this->tipo = $tipo;
        $this->marca = $marca;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function volante(){
        echo "Gire hacia la derecha";
    }

    public function pito(){
        echo "Pite por precaucion ";
    }
}

$coche = new Carro(); echo "Nombre: Volante ".
$coche->getTipo()."Tipo: Deportivo ".
$coche->volante();

$coche = new Carro(); echo "Nombre: Pito".
$coche ->getTipo()."Tipo: Trompeta".
$coche ->pito();

?>