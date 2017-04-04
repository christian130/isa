<?php
use estrategia_pdiseno/interfazEstrategia
class buscarDespuesDeEstrategia implements interfazEstrategia
{
  private $_nombre;

  public function __construct( $nombre )
  {
    $this->_nombre = $nombre;
  }
function compararCadenaBinarySafe  ($registro){ // compara campos de manera binaria... (retorna 0 si son iguales)
	return strcmp( $this->_nombre, $registro ) <= 0;
}
  
}
?>