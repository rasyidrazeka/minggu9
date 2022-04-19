<?php
    session_start();
?>
<html>
    <head></head>
    <body>
        <?php
            //menghapus semua variabel session
            session_unset();

            //menghapus session
            session_destroy();

            echo "Session telah dihapus";
        ?>
    </body>
</html>