<?php declare(strict_types=1);

for ( $i = 1; $i <= 20; ++$i )
{
     $str = "";
 
     if ($i == 3 || $i == 13)
          $str .= "lucky";

     if (!($i % 3 ) )
          $str .= "fizz";
 
     if (!($i % 5 ) )
          $str .= "buzz";
 
     if ( empty( $str ) )
          $str = $i;
 
     $search = array("fizzlucky","luckyfizz");
     $replace = array("lucky","lucky");

     echo str_replace($search, $replace, $str . "\n");
}
?>