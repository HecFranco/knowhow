<!DOCTYPE html>
<html>

<body>

    <?php
        $x = 5;
        $y = 10;
        
        function myTest() {
          $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
        
        myTest();
        echo $y; // outputs 15
    ?>
    <br>
    <a href="./">volver al index </a>
</body>

</html>