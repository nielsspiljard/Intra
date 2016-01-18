<HTML>

<HEAD>
	<TITLE>Pizzeria Villaggio Verde</TITLE>
	<LINK HREF="css/main.css" REL="stylesheet" TYPE="text/css">
</HEAD>

<BODY>
	<?php
		if (isset($_POST['verzenden']))
		{			
			mysql_connect("localhost","root","usbw");
			mysql_select_db("villaggioverde");
		
			$resultaat = mysql_query("SELECT MAX(bezorger_code) as maximum FROM bezorger");
			$data = mysql_fetch_assoc($resultaat);
			$b_code = $data["maximum"]+1;
			$b_naam = $_POST['naam'];
			$b_gebdatum = $_POST['jaar']."-".$_POST['maand']."-".$_POST['dag'];
			$b_telefoon = $_POST['telnr'];
			
			$query = "INSERT INTO bezorger(bezorger_code, bezorger_naam, bezorger_gebdatum, bezorger_telefoon) VALUES ('".$b_code."', '".$b_naam."', '".$b_gebdatum."', '".$b_telefoon."');";
			if (mysql_query($query))
			{
				echo "De nieuwe gegevens zijn toegevoegd.";
			}
			else
			{
				echo "Er is iets fout gegaan tijdens het toevoegen.";
			}
			
			
			mysql_close();
		
		}
	?>
	
		<legend>
			registreren:
		</legend>
			
			<form method="post" action=""><br/>
			

				
				<input name="username" 		type="text"		placeholder="Gebruikers Naam" 			class="input" /><br/><br/>
				<input name="wachtwoord" 	type="text"		placeholder="Wachtwoord" 				class="input" /><br/>
				<input name="c_wachtwoord" 	type="text"		placeholder="Herhaal wachtwoord"		class="input" /><br/><br/>
				<input name="naam"			type="text" 	placeholder="Naam" 						class="input" /><br/>
				<input name="adres"			type="text"		placeholder="Adres"						class="input" size="44,5"	 /><br/>
				<input name="postcode"		type="text" 	placeholder="Postcode" 					class="input" />
				<input name="plaats" 		type="text" 	placeholder="Plaats"					class="input" /><br/>	
				<input name="telefoon" 		type="text" 	placeholder="Telefoonnummer"			class="input" /><br/><br/> 


				



				<input type="submit" name="verzenden" value="Verzenden" />
			</form>
	
	
	<a href="http://localhost:8080/VillaggioVerde/VillaggioVerde.php">Terug naar index</a>
		
</BODY>

</HTML>