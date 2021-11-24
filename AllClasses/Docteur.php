<!DOCTYPE html>
<html>
    <head>
        <title>RDV : les classes</title>
        <meta charset="utf-8" />
    </head>
    <body>   


    <?php
  class Doc extends Personne
   {
       public $spec ;

        public function __construct($Id,$nom,$prenom,$numTel,$email,$adresse,$spec) {
          
            $this->spec = $spec;
   }}
   

   $doc = new Doc(1,"mohamed","salah",0102030405,"doc@doc.com","France","genral") ;
   $doc->get_person();

   ?>

</body>
</html>
