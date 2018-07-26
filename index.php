<?php
$number = 100;
$number1 = 12;
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>Exercice 3</title>
   </head>
   <body>
     <p>
     <?php
while ($number > 10)
{
echo $number * $number1 . ' ' ;
 $number--;
}
      ?>
    </p>
   </body>
 </html>
