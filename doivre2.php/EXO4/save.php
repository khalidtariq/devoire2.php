/*TARIQ JARRARI && KHALID BEN TAGUAR*/
<?php
function valider_email(string $va){
	
	if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $va))  

return true;
	
}


function valider_pass(string $var){
	
if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $var) or strlen($var)>=8) 

return true;
	
}

?>

<?php



if(valider_email($_POST["login"]) and valider_pass($_POST["pass"] )){
	$fd=fopen("resultats.txt","r");
while (!feof($fd)) {
$ligne=fgets($fd,255);
if(!empty($ligne)) {
$reponses=explode("|",$ligne);
if($_POST["login"]==$reponses[0]) echo "<script>alert(\"Authentification réussie \")</script>";

}
}
if($_POST["login"]!=$reponses[0]){
 $fd=fopen("resultats.txt","a+");
fputs($fd,$_POST["login"]);
fputs($fd,"|");
fputs($fd,$_POST["pass"]);
fputs($fd,"\n");
 echo "<script>alert(\"bien enregistrés \")</script>";
}
fclose($fd);}
else echo "<script>alert(\"email incorrecte ou Mot de passe invalid \")</script>";
?>

