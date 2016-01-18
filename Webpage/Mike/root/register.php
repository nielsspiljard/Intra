<!DOCTYPE html><html>
    <head>

        <link href="css/login3.css" rel="stylesheet" type="text/css" />
        <link href="css/login2.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

    </head>
    <body>
        
        <?php
            
            if (isset($_POST['verzenden']))    
            {      

                mysql_connect("localhost","root","usbw");
                mysql_select_db("bzet");

                
            
                $resultaat = mysql_query("SELECT MAX(ID) as maximum FROM klnat");
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
                
                
                
                
                $query = "INSERT INTO klnat(ID, Gebruikersnaam, Wachtwoord, Voornaam, Achternaam, Adres, Postcode, Plaats, Telefoon, Geslacht, Geboortedatum) VALUES ({$ID}, '{$Gebruikersnaam}', '{$Wachtwoord}', '{$Voornaam}', '{$Achternaam}', '{$Adres}', '{$Postcode}', '{$Plaats}', '{$Telefoon}', '{$Geslacht}', '{$Geboortedatum}')";
                


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

    	
        
        <div id="wrapper">
    	
            <form name="login-form" class="login-form" method="post">

            	
                <div class="header-log">
                	<h1>Register</h1>
                	<span></span>
                </div>
                
            	
                <div class="content-log">
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
                
                
                <div class="footer">
            		<input type="submit"      name="verzenden"    value="Register"    class="verzenden"   />
            		<input type="submit"      name="cancel"       value="cancel"      class="button-1"      />
                </div>
              

            </form>
        </div>
    </body>
</html>