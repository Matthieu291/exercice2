<?php
echo "<h1>Exercice 2</h1>";

class formulaire {

    public function __construct(){
        echo "
<form action ='/testformulaire.php'> "
;
    }

    public function ajouterzonetexte($string = NULL){
        echo "<b>$string :";
        echo" <input type='text'>";
        echo"<br>";
    }

    public function ajouterbouton(){
        echo "<input type='submit'> ";
    }

    public function getform() {

        $this->ajouterzonetexte();
        $this->ajouterbouton();
        echo "</form>";
    }
}
include 'testformulaire.php';
?>