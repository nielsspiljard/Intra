<!DOCTYPE HTML>
<!--
	Linear by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Linear by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />

			
		</noscript>
	</head>
	<body>
		<?php
	        
	        if (isset($_POST['verzenden']))    
	        {      

	            mysql_connect("localhost","root");
	            mysql_select_db("bzet");

	            
	        
	            $resultaat = mysql_query("SELECT MAX(ID) as maximum FROM Klant");
	            $data = mysql_fetch_assoc($resultaat);
	            $ID = $data["maximum"] + 1;
	            $Gebruikersnaam = html_entity_decode($_POST['Username']);
	            $Voornaam = html_entity_decode($_POST['Voornaam']);
	            $Achternaam = html_entity_decode($_POST['Achternaam']);
	            $Adres = html_entity_decode($_POST['Adres']);
	            $Postcode = html_entity_decode($_POST['Postcode']);
	            $Plaats = html_entity_decode($_POST['Plaats']);
	            $Telefoon = html_entity_decode($_POST['Telefoon']);
	            $Geslacht = html_entity_decode($_POST['Geslacht']);
	            $Wachtwoord = html_entity_decode($_POST['Password']);
	            $Geboortedatum = html_entity_decode($_POST['Jaar']) . "-" . html_entity_decode($_POST['Maand']) . "-" . html_entity_decode($_POST['Dag']);
	            
	            
	            
	            
	            $query = "INSERT INTO klant(ID, Gebruikersnaam, Wachtwoord, Voornaam, Achternaam, Adres, Postcode, Plaats, Telefoon, Geslacht, Geboortedatum) VALUES ('".$ID."', '".$Gebruikersnaam."', '".$Wachtwoord."', '".$Voornaam."', '".$Achternaam."', '".$Adres."', '".$Postcode."', '".$Plaats."', '".$Telefoon."', '".$Geslacht."', '".$Geboortedatum."');";
	            


	           if (mysql_query($query))
	           {
	           }
	           else
	           {
	               echo error_reporting("q13");
	               echo "Er is iets fout gegaan tijdens het toevoegen.";
	           }
	           
	           echo "<br />";
	           
	           mysql_close();
	        
	        }
	    ?>
	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="active"><a href="index.php">Homepage</a></li>
						<li><a href="#">presatie index</a></li>
						<li><a href="#">advies</a></li>
						<li><a href="gegevens.php">gegevens wijzigen</a></li>
						<li><a href="#">Uitloggen</a></li>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Linear</a></h1>
					<span class="tag">By TEMPLATED</span>
				</div>
			</div>
		</div>
	<!-- Header --> 

	<!-- Main -->
		<div id="main">
			<div id="content" class="container">
				<div class="log">
					<section>
											
						<header>
							
							<div class="logo">
								<h2>Gegevens Wijzigen</h2>
								
							</div>

						</header>        
	   			            	
		                <div>
		                    <input name="Username"      type="text"     class="input "      placeholder="Username" />           </br>
		                    <input name="Password"      type="password" class="input "      placeholder="Password" />
		                    <input name="PasswordA"     type="password" class="input "      placeholder="Password Again" />     </br>
		                    <input name="Voornaam"      type="text"     class="input "      placeholder="Voornaam" />
		                    <input name="Achternaam"    type="text"     class="input "      placeholder="Achternaam" />         </br>
		                    <input name="Adres"         type="text"     class="input_adres" placeholder="Adres" />              </br>
		                    <input name="Postcode"      type="text"     class="input "      placeholder="Postcode" />
		                    <input name="Plaats"        type="text"     class="input "      placeholder="Plaats" />             </br>
		                    <input name="Telefoon"      type="text"     class="input "      placeholder="Telefoon Nummer" />
		                    <input name="Dag"           type="text"     class="input "      placeholder="Dag" />                </br>
		                    <input name="Maand"         type="text"     class="input "      placeholder="Maand" />              </br>
		                    <input name="Jaar"          type="text"     class="input "      placeholder="Jaar" />               </br>
		                    <input name="Geslacht"      type="text"     class="input "      placeholder="Geslacht" />           </br>
		                </div>
		                
		                
		               
		                
		                <div class="log_button">	
		                	<input type="submit"      name="cancel"       value="cancel"      class="button-1"      />         		
		                   	<input type="submit"      name="verzenden"    value="Aanpassen"    class="button"   />
				        </div>  
					</section>
				</div>
			</div>
		</div>
				
		
	<!-- /Main -->

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;‘Some People Dream Of Success, While You’re Gonna Wake Up And Work Hard At It.’ -- shia labeouf.&rdquo;</blockquote>
				</section>
			</div>
		</div>


	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> </a>)
			</div>
		</div>

	</body>
</html>