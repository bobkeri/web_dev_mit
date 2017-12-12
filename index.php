
<html>
<head>
    <title>Bacus Bob keri Guessing Game</title>
    </head>
    <body>
        
        <center>
        <h1>GUESSING GAME</p></h1>
    </center>
        <?
            unset($_COOKIE['my_login']);
            setcookie('my_login', '', time() - 3600, '/'); 
        ?>
        <center>        
        <form action="play.php" method="GET"><br>
            Player name: <input type="text" name="login"><br><hr />
        <input type="submit" value="Start Game">
        </form>
    </center>
    </body>
</html>
