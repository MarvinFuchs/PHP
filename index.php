<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <link href="design.css" rel="stylesheet">       
        <title>
            Index
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
            <h3 class="header">
                Anmeldeormular
            </h3>
            <form action="post.php" class="Eingabefelder" >
                <label>
                    First name: 
                    <input name="FstName" type="text" >
                </label>
                <br>
                <label>
                    Last name:
                    <input name="LstName" type="text">
                </label>
                <br>
                <input type="radio" name="gender" value="male" checked> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other
                <br>
                <label>
                    Age: 
                    <input name="Age" type="number">
                </label>
                <br>
                <label>
                    Username: 
                    <input name="UserName" type="text">
                </label>
                <br>
                <label>
                    E-Mail: 
                    <input name="Email" type="email">
                </label>
                <br>                  
                <label>
                    Password: 
                    <input name="PassWord" type="password">
                </label>
                <br>
                <input type="submit" value="Submit"/>
                <input type="reset">
            </form>  
        </div>
    </body>
</html>