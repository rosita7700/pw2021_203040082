<!-- Nina Rosita 203040082 Kamis 08.00 -->

<?php
function hitungDeterminan($a,$b,$c,$d) 
    {
        // perhitungan Determinan
        $perhitunganDeterminan = (($a* $d) - ($b*$c));

        // Menampilkan matriks
        echo "<table style='border-left: 2px solid black; border-right: 2px solid black;' cellspacing='5' cellpadding='5'>
                <tr>
                    <td>$a</td>
                    <td>$b</td>
                </tr>
                <tr>
                    <td>$c</td>
                    <td>$d</td>
                </tr>
            </table>";

         echo "<p><b>Determinan dari matriks tersebut adalah $perhitunganDeterminan</b></p>"; //menampilkan teks dibawah matriks
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2d_203040082</title>
</head>
<body>
    <?= hitungDeterminan(1,2,3,4); ?>
</body>
</html>