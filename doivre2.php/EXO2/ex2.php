/*TARIQ JARRARI && KHALID BEN TAGUAR*/

Example :<br />
<?php
$fp1 = fopen("pscde01_CLI1001.txt","a+");
$fp2 = fopen("psccl01_CLI1004.txt","a+");
if (!$fp = fopen("fichier.txt","r"))
{echo "Echec de l'ouverture du fichier";}
else {
while(!feof($fp)) {
    $motTrouve1="CLI1001";
     $motTrouve2="CLI1004";
//  récupère une ligne
$Ligne = fgets($fp);

 
if (strpos($Ligne, $motTrouve1) !== FALSE)
{
   fputs($fp1, $Ligne);
   echo $Ligne;
   
}
if (strpos($Ligne, $motTrouve2) !== FALSE)
{
   fputs($fp2, $Ligne);
}


 echo $Ligne;
 echo "\n";

}
fclose($fp); //Fermeture du fichie
}



 //Fermeture du fichie

 fclose($fp1);
 fclose($fp2);
    

?>