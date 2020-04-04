//TARIQ JARRARI && KHALID BEN TAGUAR

<html>
<head>
	<title></title>
</head>
<body>
	<h1> Validation de la date </h1>
	<p> La date saisie est : <?php print($_POST['jour']."/".$_POST['mois']."/".$_POST['annee']);?></p>
	<?php
		if($_POST['annee']%4==0)
			echo "<p> La date saisie  <span  style='color:lime' > est valide </span> . </p>";
		else
			echo "<p> L'annee ".$_POST['annee']." est non bissextile: <span  style='color:red' >Date invalide</span> </p>";

	?>

</body>
</html>
