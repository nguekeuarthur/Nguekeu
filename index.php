<?php 
//Création des variables
$profile =[
  ['nom' => 'Nguekeu Fonkeng Arthur'],
  ['metier' => 'Developpeur Web et Mobile'],
 ];
$infoNom=$profile [0];
$infoPrenom=$profile [1];

/*
Localisation Naissance
*/
$localisation = [

  [ 'nais' => 'Née le 23 juin 2000'],
  [ 'origine' => 'Originaire de l\ouest Cameroun'],
  [ 'etat' => 'Celibataire'],
];
$infoNais = $localisation[0];
$infoOrigine = $localisation[1];
$infoEtat = $localisation[2];
/*
Localisation GPS
*/
$localisationAdress = [
['lieu' => 'Residant a Bonamoussadi'],
['ville' => 'Douala - Cameroun'],
];
$infoLieu = $localisationAdress[0];
$infoVille = $localisationAdress[1];
/*
Localisation Téléphonique
*/
$localisationTelephone = [
['numero' => '(+237) 655480574'],
['apllication' => 'Mobile, Whatsapp, Telegram'],
];
$infoNumero = $localisationTelephone[0];
$infoApp = $localisationTelephone[1];
/*
Localisation Adresse e-mail
*/
$localisationMail = [
  ['email' => 'nguekeu96@gmail.com'],
  ['site' => 'Google+,Linke'],
];
$infoEmail = $localisationMail[0];
$infoSite = $localisationMail[1];
/*
Localisation Des projets effectués
*/
$localisationProject = [
  ['project' => '+ 2 PROJETS'],
  ['contrat' => '0 CONTRAT'],
 ['experience' => '23 ANS D EXP'],
];
$infoProjet = $localisationProject[0];
$infoContrat = $localisationProject[1];
$infoExperience = $localisationProject[2];

//Variable Compétence aquise

$competence = [ 
   ['competence1' => 'Developpement Front End'],
   ['competence2' => 'HTML5,JavaFx'],
   ['competence3' => 'Developpement Back End'],
   ['competence4' => 'PHP,Java'],
   ['competence5' => 'Base de donnée'],
   ['competence6' => 'SQl'],
   ['competence7' => 'Outils/Environnements'],
   ['competence8' => 'Visual Studio Code,Eclipse,Git'],
   ['competence9' => 'UI/ UX Design'],
   ['competence10' => 'Photoshop CC,Adobe XD'],
   ['competence11' => 'UI/ UX Design'],
   ['competence12' => 'Photoshop CC,Adobe XD'],
];
$competence1 = $competence[0];
$competence2 = $competence[1];
$competence3 = $competence[2];
$competence4 = $competence[3];
$competence5 = $competence[4];
$competence6 = $competence[5];
$competence7 = $competence[6];
$competence8 = $competence[7];
$competence9 = $competence[8];
$competence10 = $competence[9];
$competence11 = $competence[10];
$competence12 = $competence[11];

//Variable Expereience Professionnele
$experienceProf = ['Expérience Professionnelle'];
$experienceProf[0];
$contenuProf = [
    ['contenu1' => 'Experience professionelle'],
    ['contenu2' => 'Expertise en entreprise'],
    ['contenu3' => 'Stagiaire-', 'contenuA3' => '@GTIC Douala'],
    ['contenu4' => 'De Juin 2021 à Aout 2021 - lien'],
    ['contenu5' => 'Réalisation d une application web de gestion des étudiants'],

];
$contenu1 = $contenuProf[0];
$contenu2 = $contenuProf[1];
$contenu3 = $contenuProf[2];
$contenu4 = $contenuProf[3];
$contenu5 = $contenuProf[4];
//Variable cursus académique
$academi = [
  'Cursus académique'
];
$academi[0];
$academiList = [
    ['list1' => 'Attestation -', 'listA1' => '@GTIC Douala Bonamoussadi'],
    ['list2' => 'Août 2021 - '],
    ['list3' => 'Attestation en Marketing Digital'],
    ['list4' => 'Baccalauréat -', 'listA4' => '@Lycée Bilingue D Ambam'],
    ['list5' => 'Août 2019 - '],
    ['list6' => 'Série C , Mention Passable'],
    ['list7' => 'Probatoire -', 'listA7' => '@Lycée Bilingue D Ambam'],
    ['list8' => 'Août 2018 - '],
    ['list9' => 'Série C , Mention Passable'],

];
$list1 = $academiList[0];
$list2 = $academiList[1];
$list3 = $academiList[2];
$list4 = $academiList[3];
$list5 = $academiList[4];
$list6 = $academiList[5];
$list7 = $academiList[6];
$list8 = $academiList[7];
$list9 = $academiList[8];
//Création des classes
              /*
              Classe profile
              */
class profile {
  public $infoNom;
  public $infoPrenom;
  
  function __construct($infoNom, $infoPrenom) {
    $this->infoNom = $infoNom;
    $this->infoPrenom = $infoPrenom;
  }
  function get_infoNom(){
    return $this->infoNom;
  }
  function get_infoPrenom(){
    return $this->infoPrenom;
  }
}
$info = new profile("Nguekeu Fonkeng Arthur","Developpeur Web et Mobile");
                /*
              Classe localisation Naissance
              */
 class localisation{
   public $infoNais;
   public $infoOrigine;
   public $infoEtat;

  function __construct($infoNais,$infoOrigine,$infoEtat){
    $this-> infoNais = $infoNais;
    $this -> infoOrigine = $infoOrigine;
    $this -> infoEtat = $infoEtat;

    }
    function get_infoNais(){
      return $this->infoNais;
    }
    function get_infoOrigine(){
      return $this->infoOrigine;
    }
    function get_infoEtat(){
      return $this->infoEtat;
    }

  }
  $locali = new localisation("Née le 23 juin 2000","Originaire de l\ouest Cameroun","Celibataire");


      /*
        Classe localisation GPS      
      */  
      class GPS{
        public $infoLieu;
        public $infoVille;
        function __construct($infoLieu,$infoVille){
          $this -> infoLieu = $infoLieu;
          $this -> infoVille = $infoVille;
        }
        function get_infoLieu(){
          return $this->infoLieu;
        }
        function get_infoVille(){
          return $this->infoVille;
        }
      }
        $gps = new GPS("Residant a Bonamoussadi","Douala - Cameroun");

         /*
              Classe localisation Téléphonique
              */
      class Telephone {
        public $infoNumero;
        public $infoApp;
        function __construct($infoNumero,$infoApp){
          $this -> infoNumero = $infoNumero;
          $this -> infoApp = $infoApp;
        }
        function get_infoNumero(){
          return$this -> infoNumero;
        }
        function get_infoApp(){
          return $this -> infoApp;
        }
                 
      }
      $tel = new Telephone("(+237) 655480574","Mobile, Whatsapp, Telegram");

          /*
              Classe localisation Email
              */
              class Email {
                public $infoEmail;
                public $infoSite;
                function __construct($infoEmail,$infoSite){
                  $this -> infoEmail = $infoEmail;
                  $this -> infoSite = $infoSite;
                }
                function get_infoEmail(){
                  return$this -> infoEmail;
                }
                function get_infoSite(){
                  return $this -> infoSite;
                }
                         
              } 
              
              $mail = new Email("nguekeu96@gmail.com","Google+,Linke");
           /*
     Classe localisation projets
       */
              class Projet {
                public $infoProjet;
                public $infoContrat;
                public $infoExperience;

                function __construct($infoProjet,$infoContrat,$infoExperience){
                  $this -> infoProjet = $infoProjet;
                  $this -> infoContrat = $infoContrat;
                  $this -> infoExperience = $infoExperience;

                }
                function get_infoProjet(){
                  return$this -> infoProjet;
                }
                function get_infoContrat(){
                  return $this -> infoContrat;
                }
                function get_infoExperience(){
                  return $this -> infoExperience;
                }
                         
              } 
              
              $Pro = new Projet("+ 2 PROJETS","0 CONTRAT","23 ANS D EXP");
          
            /*
     Classe Compétence
       */
      class Competence {
        public $competence1;
        public $competence2;
        public $competence3;
        public $competence4;
        public $competence5;
        public $competence6;
        public $competence7;
        public $competence8;
        public $competence9;
        public $competence10;
        public $competence11;
        public $competence12;

        function __construct($competence1,$competence2,$competence3,$competence4,$competence5,$competence6,$competence7,$competence8,$competence9,$competence10,$competence11,$competence12){
          $this -> competence1 = $competence1;
          $this -> competence2 = $competence2;
          $this -> competence3 = $competence3;
          $this -> competence4 = $competence4;
          $this -> competence5 = $competence5;
          $this -> competence6= $competence6;
          $this -> competence7 = $competence7;
          $this -> competence8 = $competence8;
          $this -> competence9 = $competence9;
          $this -> competence10 = $competence10;
          $this -> competence11 = $competence11;
          $this -> competence12 = $competence12;

        }
        function get_competence1(){
          return $this -> competence1;
        }
        function get_competence2(){
          return $this -> competence2;
        }
        function get_competence3(){
          return $this -> competence3;
        }
        function get_competence4(){
          return $this -> competence4;
        }
        function get_competence5(){
          return $this -> competence5;
        }
        function get_competence6(){
          return $this -> competence6;
        }
        function get_competence7(){
          return $this -> competence7;
        }   
        function get_competence8(){
          return $this -> competence8;
        }    
        function get_competence9(){
          return $this -> competence9;
        } 
        function get_competence10(){
          return $this -> competence10;
        }
        function get_competence11(){
          return $this -> competence11;
        }
        function get_competence12(){
          return $this -> competence12;
        }
      } 
      
      $compe = new Competence("Developpement Front End","HTML5,JavaFx","Developpement Back End","PHP,Java","Base de donnée'","SQl","Outils/Environnements","Visual Studio Code,Eclipse,Git","UI/ UX Design","Photoshop CC,Adobe XD","UI/ UX Design","Photoshop CC,Adobe XD");
//Classe Expereience Professionnele
class experience {
  public $experience1;
  public $experience2;
  public $experience3;
  public $experience4;
  public $experience5;
 
  function __construct($experience1,$experience2,$experience3,$experience4,$experience5){
    $this-> experience1 = $experience1;
    $this-> experience2 = $experience2;
    $this-> experience3 = $experience3;
    $this-> experience5 = $experience4;
    $this-> experience6 = $experience5;
 
  }

  function get_experience1(){
    return $this -> experience1;
  }
  function get_experience2(){
    return $this -> experience2;
  }
  function get_experience3(){
    return $this -> experience3;
  }

  function get_experience4(){
    return $this -> experience5;
  }

function get_experience5(){
  return $this -> experience6;
}
}

$expe = new experience("Experience professionelle","Expertise en entreprise","Stagiaire- @GTIC Douala","De Juin 2021 à Aout 2021 - lien","Réalisation d une application web de gestion des étudiants");
//Classe  cursus académique
class academique{
  public $list1;
  public $listA1;
  public $list3;
  public $list4;
  public $list5;
  public $list6;
  public $list7;
  public $list8;
  public $list9;
  public $list10;
  public $list11;
  public $list12;

  function __construct($list1,$listA1,$list3,$list4,$list5,$list6,$list7,$list8,$list9,$list10,$list11,$list12){
    $this-> list1 = $list1;
    $this-> list1 = $listA1;
    $this-> list1 = $list3;
    $this-> list1 = $list4;
    $this-> list1 = $list5;
    $this-> list1 = $list6;
    $this-> list1 = $list7;
    $this-> list1 = $list8;
    $this-> list1 = $list9;
    $this-> list1 = $list10;
    $this-> list1 = $list11;
    $this-> list1 = $list12;


  }
  function get_list1(){
    return $this -> list1;
  }
  function get_listA1(){
    return $this -> listA1;
  }
  function get_list3(){
    return $this -> list3;
  }
  function get_list4(){
    return $this -> list4;
  }
  function get_list5(){
    return $this -> list5;
  }
  function get_list6(){
    return $this -> list6;
  }
  function get_list7(){
    return $this -> list7;
  }
  function get_list8(){
    return $this -> list8;
  }
  function get_list9(){
    return $this -> list9;
  }
  function get_list10(){
    return $this -> list10;
  }
  function get_list11(){
    return $this -> list11;
  }
  function get_list12(){
    return $this -> list12;
  }
}
$acad = new academique("Attestation -","@GTIC Douala Bonamoussadi","Août 2021 -","Attestation en Marketing Digital","Baccalauréat -","@Lycée Bilingue D Ambam","Août 2019 - ","Série C , Mention Passable","Probatoire -","@Lycée Bilingue D Ambam","@Lycée Bilingue D Ambam","Août 2018 -","Série C , Mention Passable");


?>
<!DOCTYPE html>
<html lang="en">          
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="boootstrap.css">

   <title>Mon CV </title>
</head>

<body>
      <div class="container">
  <div class="cv">
    <div class="left_Side">
      <?php 
      require 'profil.php';
      ?>

       <?php 
       require 'contenu.php';
       ?>
    </div>

    <?php
    require 'bas.php'
    ?>

    <div class=" right_Side">
      <?php 
            require 'experience.php'
      ?>
      
      <?php 
        require 'divertissement.php'
        ?>

      <?php 
      require 'academie.php'
      ?>
       
    </div>

  </div>

</div>
</body>

</html> 
 