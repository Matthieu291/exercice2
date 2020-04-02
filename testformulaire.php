<?php

$f1 = new form2();
$f1->ajouterzonetexte("Votre nom", "nom");
echo"<br>";
$f1->ajouterzonetexte("Votre code", "prenom");
echo"<br>";
$f1->ajouterzonetexte("Mail", "mail");
echo"<br>";
$f1->ajouterselect("Age");
$f1->ajoutergenre();
echo"<br>";
$f1->ajouterbouton();
$f1->ajoutersport();
$r = new recup();
echo "$r->prenom , $r->nom, $r->mail, $r->age, $r->gender";
?>
