<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <link href="design.css" rel="stylesheet">       
        <title>
            Post
        </title>
    </head>
    <body> 
        <div class="outter-container">       
            <div class="inner-container">      
                <center>
                    <h1>
                        PHP-Webseite
                    </h1> 
                </center>
            </div>
            <h3  class="header">
                Ausgabe    
            </h3>
            <div id="Ausgabe">
                <?php
                    $firstname = $_GET['FstName'];
                    $lastname = $_GET['LstName'];   
                    $gender = $_GET['gender'];
                    $age = $_GET['Age'];
                    $username = $_GET['UserName'];
                    $email = $_GET['Email'];
                    $password = $_GET['PassWord'];
                ?>   
                <p>Vorname <?= $firstname ?></p>
                <p>Nachname: <?= $lastname ?></p>
                <p>Geschlecht: <?= $gender ?></p>
                <p>Alter: <?= $age ?></p>
                <p>Nutzername: <?= $username ?></p>
                <p>E-Mail: <?= $email ?></p>
                <p>Passwort: <?= $password ?></p>
            </div>
        </div>
    </body>
</html>