<?php
class Tienda{
    private $tipo;
    private $inventario = ['Hamburguesas' => 200, 'Panchos' => 500, 'Gaseosas' => 1000, 'Agua'=> 2000];
    private $precios = ['Hamburguesas' => 10, 'Panchos' => 6, 'Gaseosas' => 5, 'Agua'=> 3];

    public function __construct($tipo) {
        $this->tipo = $tipo;
    }
    public function reponerProductos($porcentaje){
        foreach ($this->inventario as $producto => $cantidad){
            $reposicion = ceil($cantidad * $porcentaje);
            $this->inventario[$producto] += $reposicion;
        }
    }
}
?>