<?php
    $name = "mahasiswa";
    $value = "Rasyid Razeka Alamsyah";
    setcookie($name, $value, time()+600);

    setcookie("kelas", "MI-1E", time()+3600);
?>
<html>
    <head></head>
    <body>
        <?php
            echo "Cookies telah dibuat";
        ?>
    </body>
</html>