
<html>
<body>
    <?php
        function compare_two_numbers($number_A, $number_B){
            if ($number_A == $number_B){
                echo "Congratulations - You are right";
                $GLOBALS['b_match'] = true;        
            }
            if ($number_A > $number_B){
                echo "Your guess is too high.";
            }
            if ($number_A < $number_B){
                echo "Your guess is too low. ";
            }
        }
    ?>
    <?php
        $GLOBALS['b_match'] = false;
        
        if(isset($_GET['number_guess'])){
            setcookie('my_guess',$_GET['number_guess']);
            $_COOKIE['my_guess'] = $_GET['number_guess']; 
        }else{
            unset($_COOKIE['my_guess']);
            setcookie('my_guess', '', time() - 3600, '/'); 
        }
        
        if(isset($_GET['login'])){
            setcookie('my_login',$_GET['login']);
            setcookie('my_rand',rand(1,100));
            $_COOKIE['my_login'] = $_GET['login'];
            $GLOBALS['b_match'] = false;  
        }
        echo "<br>";
        echo "<br>";
        echo "<h3>";
        echo "<center>";
        echo "Welcome Player: " . $_COOKIE['my_login'] . "!";
        echo "</center>";
        echo "</h3>";
        if(isset($_COOKIE['my_guess'])){
            echo "</br>";
            if (is_numeric($_COOKIE['my_guess'])){
                echo "<center>";
                echo "You have chosen " . $_COOKIE['my_guess'] . ".</br>";
                echo "<center>";
            }else {
                echo "<center>";
                echo "Your guess is not a number!" . ".</br>";
                echo "</center>";
            }
                
            
           
            //echo "The random is " . $_COOKIE['my_rand'] . ".</br>";//
            echo "<center>";
            echo "<b>";
            compare_two_numbers($_COOKIE['my_guess'], $_COOKIE['my_rand']);
            echo "</br>";
            echo "</b>";
            echo "</center>";

        } else {
            echo "<center>";
            echo "</br>";
            echo "</br>";
            echo "Please guess 1 to 100";
            echo "</center>";
        }
        
        if (!$GLOBALS['b_match']){
            echo "</br>";
            echo "<center>";
            echo "Try to guess:";
            echo "</center>";
            echo "<center>";
            echo "</form>";
            echo "<form action='play.php' method='get'>";
            echo "Number: <input type = 'text' name = 'number_guess'>";
            echo "<input type='submit'>";
            echo "</form>"; 
            echo "</center>";  
        } else {
            echo "<form action='index.php'><br>";
            echo "<input type='submit' value='Dare to play again?'>";
        }
    ?>    
</body>
</html>