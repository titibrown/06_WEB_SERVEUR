<?php
class Personnage
{
  private $_force;
  private $_experience;
  private $_degats;
}
    
$perso = new Personnage;
$perso->_experience = $perso->_experience + 1; // Une erreur fatale est levée suite à cette instruction.




/*Ici, on essaye d'accéder à un attribut privé hors de la classe. Ceci est interdit, donc PHP lève une erreur. Dans notre 
exemple (qui essaye en vain d'augmenter de 1 l'expérience du personnage),
 il faudra demander à la classe d'augmenter l'expérience. Pour cela, nous allons écrire une méthodegagnerExperience():*/


<?php
class Personnage
{
  private $_experience;
        
  public function gagnerExperience()
  {
    // Cette méthode doit ajouter 1 à l'expérience du personnage.
  }
}

$perso = new Personnage;
$perso->gagnerExperience();