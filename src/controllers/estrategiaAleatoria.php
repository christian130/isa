<?php
use estrategia_pdiseno/interfazEstrategia
class estrategiaAleatoria implements interfazEstrategia
{
  public function compararCadenaBinarySafe  ($registro);
  {
    return random_int( 0, 31416 ) > 0;

     /*int random_int ( int $min , int $max )

     Generates cryptographic random integers that are suitable for use where unbiased 
     results are critical, such as when shuffling a deck of cards for a poker game. */
  }
}
?>