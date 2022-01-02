<?php
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
$info = new profile("Nguekeu Fonkeng Arthur","Developpeur Web et Mobile");
echo $info->get_infoNom();
echo'<br>';
echo $info->get_infoPrenom();
echo'<br>';
$info1 = new localisation("Née le 23 juin 2000","Originaire de l\'ouest Cameroun","Celibataire");
echo $info1->get_infoNais();
echo'<br>';
echo $info1->get_infoOrigine();
echo'<br>';
echo $info1->get_infoEtat();
echo'<br>';
$info3 = new GPS("Residant a Bonamoussadi","Douala - Cameroun");
echo $info3->get_infoLieu();
echo'<br>';
echo $info3->get_infoVille();
$info4 = new Telephone("(+237) 655480574","Mobile, Whatsapp, Telegram");

echo $info4->get_infoNumero();
echo'<br>';
echo $info4->get_infoApp();
$info5 = new Email("nguekeu96@gmail.com","Google+,Linke");
echo $info5->get_infoEmail();
echo'<br>';
echo $info5->get_infoSite();
$info6 = new Projet("+ 2 PROJETS","0 CONTRAT","23 ANS D EXP"); 
echo $info6->get_infoProjet();
echo'<br>';
echo $info6->get_infoContrat();
echo'<br>';
echo $info6->get_infoExperience();
echo'<br>';
$info7 = new Competence("Developpement Front End","HTML5,JavaFx","Developpement Back End","PHP,Java","Base de donnée'","SQl","Outils/Environnements","Visual Studio Code,Eclipse,Git","UI/ UX Design","Photoshop CC,Adobe XD","UI/ UX Design","Photoshop CC,Adobe XD");

echo $info7->get_competence1();
echo'<br>';
echo $info7->get_competence2();
echo'<br>';
echo $info7->get_competence3();
echo'<br>';
echo $info7->get_competence4();
echo'<br>';
echo $info7->get_competence5();
echo'<br>';
echo $info7->get_competence6();
echo'<br>';
echo $info7->get_competence7();
echo'<br>';
echo $info7->get_competence8();
echo'<br>';
echo $info7->get_competence9();
echo'<br>';
echo $info7->get_competence10();
echo'<br>';
echo $info7->get_competence11();
echo'<br>';
echo $info7->get_competence12();
echo'<br>';
$info8 = new experience("Experience professionelle","Expertise en entreprise","Stagiaire- @GTIC Douala","De Juin 2021 à Aout 2021 - lien","Réalisation d une application web de gestion des étudiants");
echo $info8->get_experience1();
echo'<br>';
echo $info8->get_experience2();
echo'<br>';
echo $info8->get_experience3();
echo'<br>';
echo $info8->get_experience4();
echo'<br>';
$info9 = new academique("Attestation -","@GTIC Douala Bonamoussadi","Août 2021 -","Attestation en Marketing Digital","Baccalauréat -","@Lycée Bilingue D Ambam","Août 2019 - ","Série C , Mention Passable","Probatoire -","@Lycée Bilingue D Ambam","@Lycée Bilingue D Ambam","Août 2018 -","Série C , Mention Passable");
echo $info9->get_list1();
echo'<br>';
echo $info9->get_listA1();
echo'<br>';
echo $info9->get_list3();
echo'<br>';
echo $info9->get_list4();
echo'<br>';
echo $info9->get_list5();
echo'<br>';
echo $info9->get_list6();
echo'<br>';
echo $info9->get_list7();
echo'<br>';
echo $info9->get_list8();
echo'<br>';
echo $info9->get_list9();
echo'<br>';
echo $info9->get_list10();
echo'<br>';
echo $info9->get_list11();
echo'<br>';
echo $info9->get_list12();
echo'<br>';



































?>