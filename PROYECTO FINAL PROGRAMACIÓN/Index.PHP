<?php
include 'Persona.php';
include 'Tienda.php';


//ACA CREAMOS A LAS PERSONAS.
$persona1 = new Persona('Migdonio');
$persona2 = new Persona('RAM');

//ACA CREAMOS LAS TIENDAS.
$tiendaHamburguesas = new Tienda('Hamburguesas');
$tiedaPanchos = new Tienda('Panchos');
$tiendaGaseosas = new Tienda('Gaseosas');
$tiendaAgua = new Tienda('Agua');

//Aca se debe aplicar la logica para la simulacion de compras, reposiciones, etc.


//reposicion al final del concierto (si es necesario).
$tiendaHamburguesas->reponerProductos(0.1); //Aca pongo por ejemplo una reposicion del 10%
$tiedaPanchos->reponerProductos(0.2); // en esta es del 20%
$tiendaAgua->reponerProductos(0.1);
$tiendaGaseosas->reponerProductos(0.2);



//Aca hay un ejemplo de uso.
echo $persona1->getNombre() . 'tiene $' . $persona1->getDinero(); 

?>





?>