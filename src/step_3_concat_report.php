<?php declare(strict_types=1);

$count_string = array();

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

     $final_str = str_replace($search, $replace, $str . "\n");

     echo $final_str;

     $count_string[] = $final_str;
}

function only_integers($x){
    return $x>0; 
   }

echo "<br><br> -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- <br>";

echo "<br>"."Fizz appears: ".substr_count(implode( ',', $count_string), "fizz"). " time(s)."."\n";
echo "<br>"."Buzz appears: ".substr_count(implode( ',', $count_string), "buzz"). " time(s)."."\n";
echo "<br>"."FizzBuzz appears: ".substr_count(implode( ',', $count_string), "fizzbuzz"). " time(s)."."\n";
echo "<br>"."Lucky appears: ".substr_count(implode( ',', $count_string), "lucky"). " time(s)."."\n";
echo "<br>"."Integers appear: ".count( array_filter( $count_string, 'only_integers' ) )." time(s)."."\n";

echo "<br><br> -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- <br>";

?>