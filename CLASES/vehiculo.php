<?php 

// En php cuando antepone un $this -> ya no se pone el $ a la variable apra hacer referencia a una variable de la clase

class BaseDeDatos{
    private $ventas = array();

    public function agregarVenta($newVenta){
        array_push($this->ventas, $newVenta);
    }

    public function mostrarVentas(){
        foreach($this->ventas as $venta){
            echo $venta-> getCliente() . " -> " . $venta->getVehiculo() . "<br>";
        }
    }

}
class Venta{
    private $total;
    private $cliente;
    private $vehiculo;
    public function __construct($total,$cliente, $vehiculo){
        $this->total = $total;
        $this->cliente = $cliente;
        $this->vehiculo = $vehiculo;
    }

    public function setTotal($total){
        $this->total = $total;
    }
    public function getTotal(){
        return $this->total;
    }

    public function setCliente($cliente){
        $this->cliente = $cliente;
    }
    public function getCliente(){
        return $this->cliente;
    }

    public function getVehiculo(){
        return $this->vehiculo->toString();
    }

}
class Vehiculo {
    private $nroLlantas;
    private $marca;
    private $color;
    private $tamanio;

    public function __construct($nroLlantas,$marca,$color,$tamanio){
        $this->nroLlantas = $nroLlantas;
        $this->marca = $marca;
        $this->color = $color;
        $this->tamanio = $tamanio;
    }

    public function getNroLlantas(){
        return $this->nroLlantas;
    }
    public function setNroLlantas($newNro){
        $this->nroLlantas = $newNro;
    }
    
    public function getMarca(){
        return $this->marca;
    }

    public function setMarcas($newMarca){
        $this->marcas =$newMarca;
    }
    public function toString(){
        return "Nro llantas : " . $this->nroLlantas .", Marca : " . $this->marca . ", color : " . $this->color . ", Tamaño : " . $this->tamanio;
    }
}

class Mototaxi extends Vehiculo{
    private $diseñoCarpa;

    public function __construct($nroLlantas, $marca,$color, $tamanio, $newCarpa) {
        parent::__construct($nroLlantas, $marca,$color, $tamanio);
        $this->diseñoCarpa = $newCarpa;
    }

    public function getDiseñoCarpa(){
        return $this->diseñoCarpa;
    }
    
}

$v1 =  new Vehiculo(4,"Toyota","blue","12m");
$v2 =  new Vehiculo(6,"Toyota","red","42m");
$mtx1 = new Mototaxi(3, "Mavila", "negra","10m","flameada");
// echo "Nro de llantas: ". $v1->getNroLlantas().", Marca: ". $v1->getMarca(). "<br> Nro de llantas: ". $v2->getNroLlantas().", Marca: ". $v2->getMarca();

$venta1 = new Venta(1220.50,"David Tello", $v1);
$venta2 = new Venta(1323.50,"Paola Roncal", $v2);
$venta3 = new Venta(500.50,"Akane Sophia", $mtx1);
// echo "Cliente: ". $venta1->getCliente(). " Compro el vehiculo con las caracteristicas siguinetes : " . $venta1->getVehiculo();
$dbv = new BaseDeDatos();

$dbv->agregarVenta($venta1);
$dbv->agregarVenta($venta2);
$dbv->agregarVenta($venta3);

$dbv->mostrarVentas();

?>