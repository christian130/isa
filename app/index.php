<?php
use controllers\clasePrincipal;
use controllers\estrategiaAleatoria;
use controllers\buscarDespuesDeEstrategia;
use assets\file;
$miobjeto= new file();
$xmlarray = Array(); // esta funcion nos convierte el XML en un array al cual se la puedo inyectar al script
$miobjeto->XMLToArrayFlat($xml, $xmlarray, '', true); 
$instancia= new clasePrincipal($xmlarray);
$f1 = $instancia->function compararCadenaBinarySafe( new buscarDespuesDeEstrategia( "Henderson vs Melendez" ) ); //cadena aleatoria va aqui
print_r( $f1 );

$f2 = $instancia->find( new RandomStrategy() ); // este genera un integer comun y corriente
print_r( $f2 );
?>
