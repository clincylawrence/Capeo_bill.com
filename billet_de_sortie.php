<!DOCTYPE html>
<!-- saved from url=(0048)file:///E:/sublime%20text/billet%20de sortie.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="billet_de_sortie.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Billet de sortie</title>
</head>
<body > 
<center>
	<div class="diaporama">
	</div>

	
	<fieldset>
	<form method="post" action="file:///E:/sublime%20text/traitement.php"> 
		<!-- contenu du formulaire -->
		<p>
			       <label for="ID">ID</label><br>
			<input type="text" name="ID" placeholder="ID" maxlength="20"> 
		</p>
		<p>		<label for="nom"> nom</label><br>
		<input type="text" id="nom" name="nom" placeholder="OBAME AKUE" maxlength="30">
	</p>

<p>
		<label for="prenom"> prenom</label><br>
		<input type="text" id="prenom" name="prenom" placeholder="Clincy Lawrence" maxlength="30">
	</p>
	<p>
		<label for="classe">classe</label><br>
		<input type="text" id="classe" name="classe" placeholder="TLe DMW" maxlength="10"> <br>
		</p>
		<p>
		<label for="montext">Autorisation</label><br>
		<input type="checkbox" name="OUI" id="OUI">
		<label for="OUI">OUI</label><br>
		</p>
		<p>

		  <label for="text">date du jour</label><br>
		  <input type="text" id="date du jour" name="date du jour" placeholder="12/07/2010" maxlength="12"><br>
		  </p>
		  
		  
          <p>
          <label for="date de sortie">date de sortie</label><br>
          <input type="text" name="date de sortie" id="date de sortie" placeholder="12/07/2020" maxlength="12"> <br>
          </p>
          
          <p>
          
          	<label for="motif d&#39;entree">Motif de sortie</label><br>
			<textarea placeholder="ecrire" name="montext" id="montext" maxlength="100"></textarea> <br>
		
		</p></div>
		<p>
          
          	<label for="motif de sortie">heure de sortie</label><br>
			<input type="text" placeholder="14H00" name="heure de sortie"   maxlength="10"></input> <br>
		
		</p></div>
		<p1>
			

		   <label for="text">Fait a</label><br>
		   <input type="text" id="Fait a" name="Fait a" placeholder="libreville" maxlength="12"> <br>
		
		   </p1>
	
       <center>
       	
       	
			<p>
				
				<input type="reset" value="recommencer">  
				<input type="submit" name="Envoyer">
			</p>
			
		</center>

	</form>
</fieldset>
	

</body>

</html