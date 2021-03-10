<!-- Nina Rosita 203040082 Kamis 08.00 -->

<?php
$jawabanIsset = "Isset merupakan sebuah fungsi yang digunakan untuk memeriksa suatu variabel sudah diatur atau belum.<br><br>";
$jawabanEmpty = "Empty merupakan sebuah fungsi yang akan menghasilkan nilai false atau true dalam sebuah isi variabel";

$GLOBALS["isset"] = $jawabanIsset;
$GLOBALS["empty"] = $jawabanEmpty;

function soal($style)
{
    echo"<div class = $style>
    <h1>" . $GLOBALS['isset'] . "</h1>
    <h1>" . $GLOBALS['empty'] . "</h1>
    </div>";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Latihan2b_203040082</title>
        <style>
           .center{
               border: 1px solid black;
               padding-left: 10px;
               font-size: 8px;
               color: goldenrod;
               font-family: monospace;
               background-color: #222222;
            }
        
        </style> 
    </head>
    <body>
        <?php
        echo soal("center");
        ?>
    </body>
</html>