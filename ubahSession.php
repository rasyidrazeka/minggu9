<?php
    session_start();
?>
<html>
    <head></head>
    <body>
        <?php
            $_SESSION["makananfav"] = "Sate Padang";

            echo "Session makananfav telah diubah"
        ?>
    </body>
</html>