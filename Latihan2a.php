<!-- Nina Rosita 203040082 Kamis 08.00 -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Latihan2a_203040082</title>
        <style>
           .tulisan {
               font-size: 28px;
               font-family: Arial;
               color: #8c782d;
               font-style: italic;
               font-weight: bolder;
               padding-left: 20px;
            }

            .pembungkus {
                border: 1px solid black;
                box-shadow: 2px 2px 3px 3px;
                border-radius: 5px;

            }
        
        </style> 
    </head>
    <body>
        

        <?php
            
        function gantiStyle($tulisan, $style1, $style2)
        {
            echo "<div class='$style1'><h3 class='$style2'>$tulisan</h3></div>";    
        }
        ?>

        <?php 
            echo gantiStyle("Selamat datatang di praktikum PW", "pembungkus", "tulisan");
        ?>

        
    </body>
</html>