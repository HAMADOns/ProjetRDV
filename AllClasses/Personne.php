<!DOCTYPE html>
<html>
    <head>
        <title>RDV : les classes</title>
        <meta charset="utf-8" />
    </head>
    <body>   
    <?php  date_default_timezone_set('Europe/Paris'); 
        echo date('l jS  F Y h:i:s A');
        echo "<br><br>";
    ?>
    
      
 <?php  
 
 
 class Personne{
  public $Id ;
  public $nom;
  public $prenom;
  public $genre;
  public $numTel;
  public $email;
  public $adresse;  

    public function __construct($Id,$nom,$prenom,$numTel,$email,$adresse) {
    $this->Id = $Id;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->numTel = $numTel;
    $this->email = $email;
    $this->adresse = $adresse;
 }

   public function get_Id(){
    return $this->Id ;
   }
    public function get_nom(){
        return $this->nom ;
    }

    public function get_prenom(){
        return $this->prenom ;
    }

    public function get_numTel(){
        return $this->numTel ;
    }

    public function get_email(){
        return $this->email ;
    }

    public function get_adresse(){
        return $this->adresse ;
    }

    public function get_person(){
        echo "The name is ".$this->nom." ".$this->prenom."<br> Téléphone : ".$this->numTel."<br>
        E-mail : ".$this->email."<br> Adresse : ".$this->adresse;
    }

}


class Docteur extends Personne
 {
     public $specialite ;
     public function __construct($Id,$nom,$prenom,$numTel,$email,$adresse,$specialite) {
        $this->Id = $Id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numTel = $numTel;
        $this->email = $email;
        $this->adresse = $adresse;     
         $this->specialite = $specialite;
     }
     public function get_specialite(){
         return $this->specialite;
     }

  
 }
 
 $pers = new Personne (1,"HAMAD","Ons",0102030405,"test@test.com","Tunisia");
 $pers-> get_person();
 echo "<br><br>";

 $doc = new Docteur(1,"mohamed","salah",0102030405,"doc@doc.com","France","generaliste") ;
 $doc->get_person();
 echo "<br>";
echo "specialité : ".$doc->get_specialite();
 
 
 ?>

</body>
</html>
