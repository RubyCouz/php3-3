<?php
//définition des variable de départ
$firstNumber = 100;
$secondNumber = rand(1, 100);
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
     //définition de la boucle
      while ($firstNumber >= 10){// tant que firstNumber est inférieur à 10
      echo $firstNumber * $secondNumber . ' ' ; // affichage des résultats
       $firstNumber--; // décrémentation  de la variable $firstNumber
      }
//variante avec un boucle for
      for($firstNumber = 100; $firstNumber >= 10; $firstNumber--){ //pour fistnumber égale à 100, firstNumber inférieur à 100, décrémentation de $firstnumber
        echo $firstNumber * $secondNumber . ' '; //affichage des résultats
      }
      ?>
    </p>
   </body>
 </html>
