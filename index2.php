<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="design.css" rel="stylesheet">       
        <title>
            Webseite2
        </title>
    </head>
    <body>
        <div class="outter-container">
            
            <div class="inner-container">
                <center> 
                    <h1>
                        PHP-Beispielwebseite2
                    </h1>
                </center>
            </div>
            
            <?php echo 'Dies soll ein Link zu <a href="index.php">Webseite1</a> sein'; ?>
            <?php echo $_GET['q']; ?>
            <ul>
                <li>Thema 1</li>
                <li>Theam 2</li>
                <li>Thema 3</li>
                <li>Thema 4</li>
            </ul>

            <p> Außerdem findet man hier noch ein ...</p>
            </br>
            <h3> Anmeldeformular </h3>
            
            <form action="index.php">
                <label>
                    Eingabe 
                    <input name="q">
                </label>
                
                <button>
                    eingeben
                </button>
            </form>
            </br>

        </div>
    </body>
</html>