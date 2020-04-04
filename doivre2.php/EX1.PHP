
/*TARIQ JARRARI && KHALID BEN TAGUAR*/


<?php 
function mon_Explode(String $delimiter, String $string)
{  
  $tab = []; 
   
  
  while(strlen($string)>0)  
  {  
    $pos = strpos($string, $delimiter);   
  
	if($pos!=0)  
    {  
      $tab[] = substr($string, 0, $pos);  
      $string = ltrim(substr($string, $pos), $delimiter);  
    } else {$string = ltrim($string);}  
  }  
  return $tab;  
} 
$chaine = " Manipuler les chaines de caractères ";
   
print_r( Mon_Explode(' ',$chaine )); //il va afficher la même résultat de la fonction EXPLODE()---->print_r( explode( ' ', $chaine ) );

?>


      