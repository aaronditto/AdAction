<?php declare(strict_types=1);

for ( $i = 1; $i <= 20; ++$i )
{
     $str = "";
 
     if (!($i % 3 ) )
          $str .= "fizz";
 
     if (!($i % 5 ) )
          $str .= "buzz";
 
     if ( empty( $str ) )
          $str = $i;
 
     echo $str . "\n";
}

?>