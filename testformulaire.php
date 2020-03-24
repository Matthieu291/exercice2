<?php

$f1 = new formulaire();
$f1->ajouterzonetexte("Votre nom");
echo"<br>";
$f1->ajouterzonetexte("Votre code");
echo"<br>";
$f1->ajouterzonetexte("Mail");
echo"<br>";
$f1->ajouterselect("Age");
$f1->ajoutergenre();
echo"<br>";
$f1->ajouterbouton();
?>
