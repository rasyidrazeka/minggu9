<?php
    session_start();
?>
<html>
    <head></head>
    <body>
        <?php
            $_SESSION["makananfav"] = "Rujak";
            $_SESSION["minumanfav"] = "Es Teler";
            echo "Session telah diset";
        ?>
    </body>
</html>