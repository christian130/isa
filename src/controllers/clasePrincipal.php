<?php
class clasePrincipal
{
  private $_simpleList = Array();

  public function __construct( $nombres )
  {
    if ( $nombres != null )
    {
      foreach( $nombres as $nombre )
      {
        $this->_simpleList []= $nombre;
      }
    }
  }

  public function agregarLista( $nombre )
  {
    $this->_simpleList []= $nombre;
  }
public function compararCadenaBinarySafe  ($registro);  
  {
    $registros = array();
    foreach( $this->_simpleList as $needle )
    {
      if ( $registro->compararCadenaBinarySafe( $needle ) ) // aqui hacemos una inyeccion de dependencia a lo macho
        $registros []= $needle;
    }
    return $registros;
  }
}
?>