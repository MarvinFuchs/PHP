<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <link href="design.css" rel="stylesheet">       
        <title>
            Webseite1
        </title>
    </head>
    <body> 
        <div class="outter-container">       
            <div class="inner-container">      
                <center>
                    <h1>
                        PHP-Beispielwebseite1
                    </h1> 
                </center>
            </div>
            <h3> Link: </h3>
            <?php echo 'Dies soll ein Link zu <a href="index2.php">Webseite2</a> sein'; ?>
            <ul>
                <li>Thema 1</li>
                <li>Theam 2</li>
                <li>Thema 3</li>
                <li>Thema 4</li>
            </ul>
            <p> Außerdem findet man hier noch ein ...</p>
            <br>
            <h3> Formular </h3>
            <form action="index.php">
                <label>
                    Eingabe 
                    <input name="q">
                </label> 
                <button>
                    eingeben
                </button>
            </form>
            <br>
            
            <p> Ausgabe: </p>
            <br>
            <?php echo $_GET[Herzlich Willkommen +'q'+, schön, dass Du Dich in das Seminar eingetragen hast!]; ?>
            <br>
        </div>
    </body>
</html>