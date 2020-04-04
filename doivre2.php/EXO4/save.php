/*TARIQ JARRARI && KHALID BEN TAGUAR*/
<?php
function valider_email(string $va){/* fonction qui retourne un TRUE si le login est une adresse mail valide ( sous la forme tata@cocomail.com )*/
	
	if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $va))  

return true;
	
}


function valider_pass(string $var){/* une fonction qui retourne un TRUE  si le mot de passe est valide*/
	
if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $var) or strlen($var)>=8) 

return true;
	
}

?>

<?php

/* un script php qui permet de vérifier d’abord si   les deux fonctions function valider_pass(string $var) et function valider_email(string $va) ont retournées TRUE, ensuite il vérifie si une adresse et un mot de passe dans le fichier resultats.txt*/

if(valider_email($_POST["login"]) and valider_pass($_POST["pass"] )){
    $fd=fopen("resultats.txt","r");
       while (!feof($fd)) {
      $ligne=fgets($fd,255);
       if(!empty($ligne)) {
     $reponses=explode("|",$ligne);
      if($_POST["login"]==$reponses[0]) echo "<script>alert(\"Authentification réussie \")</script>";

                           }
                          }/* Fin while*/
if($_POST["login"]!=$reponses[0]){/* Dans un fichier resultats.txt est stocké une liste nouvelle login ( adresses mail) et mots de passe.*/

 $fd=fopen("resultats.txt","a");
fputs($fd,$_POST["login"]);
fputs($fd,"|");
fputs($fd,$_POST["pass"]);
fputs($fd,"\n");
 echo "<script>alert(\"bien enregistrés \")</script>";
                                  }/* Fin if*/
                                                         fclose($fd);}/* Fin if*/

else echo "<script>alert(\"email incorrecte ou Mot de passe invalid \")</script>";
?>

