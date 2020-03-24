<?php
echo "<h1>Exercice 2</h1>";

class formulaire {

    public function __construct(){
        echo "<form action ='' method ='post'>";
    }

    public function ajouterzonetexte($string = NULL, $str2 = NULL){
        echo "<b>$string :";
        echo" <input type='text' name ='str2'>";
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

    public function ajouterselect($string =NULL){
        echo "<b>$string :";
//        echo "<select><option value='0-20'>--$string--</option></select>";
//        echo "<br>";
        echo "<select name='$string'>
    <option value=''>--Age--</option>
    <option value='0-20'>0-20</option>
    <option value='20-40'>24-40</option>
    <option value='41-60'>41-60</option>
    <option value='60+'>60 et +</option>
</select> <br> <br>";
    }

    public function ajoutergenre(){
        echo "<input type='radio' name ='genre' value ='male'><label for='male'>Homme</label>";
        echo "<input type='radio' name ='genre' value ='female'><label for='female'>Femme</label>";
        echo "<br>";
    }
}

class recup {
    public $nom;
    public $prenom;
    public $mail;
    public $age;
    public $gender;
    public function __construct(){
        $this->nom =$_POST['nom'];
        $this->prenom =$_POST['prenom'];
        $this->mail =$_POST['mail'];
        $this->age = $_POST['Age'];
        $this->gender = $_POST['genre'];
    }
}

include 'testformulaire.php';
?>