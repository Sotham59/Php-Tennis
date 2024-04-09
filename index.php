<?php
require_once('./Joueur.php');
require_once ('TennisMatch.php');
require_once ('Tournoi.php');

$joueur1 = new Joueur("Roddick", "Andy");
$joueur2 = new Joueur("Lecoeuvre", "Benoit");
$match = new TennisMatch($joueur1, $joueur2);
$match->getVainqueur();

 //Tournoi::ajouterJoueur($joueur1);
 //Tournoi::ajouterJoueur($joueur2);

// Tournoi::getJoueurs();

//$index = (int)readline("Veuillez taper le numéro du joueur");
//$joueur = Tournoi::getJoueur($index);
//
//Tournoi::modifierJoueur($index, $joueur);
//Tournoi::supprimerJoueur($index);
//Tournoi::getJoueurs();

// Tournoi::creerMatch($joueur1, $joueur2);
// Tournoi::listerMatchs();


function afficherMenu() {
    echo "=== MENU ===\n
     1. Ajouter un joueur
     2. Modifier un joueur
     3. Supprimer un joueur
     4. Lister les joueurs
     5. Créer un match
     6. Lister les matchs
     0. Quitter\n";
}

while (true) {
    afficherMenu();
    $choix = readline("Tapez votre choix: ");
    switch ($choix) {
        case 0:
            echo"A bientôt !";
            exit;
        case 1:
            $nom = readline("Entrez le nom du joueur: ");
            $prenom = readline("Entrez le prénom du joueur: ");
            $joueur = new Joueur("$nom","$prenom");
            Tournoi::ajouterJoueur($joueur);
            echo"Le joueur $prenom $nom à bien été ajouter\n";
            break;
            ;
        case 2:
            $index = (int)readline("Veuillez taper le numéro du joueur: ");
            $joueur = Tournoi::getJoueur($index);
            Tournoi::modifierJoueur($index, $joueur);
            break;
    
        case 3:
            $index = (int)readline("Veuillez taper le numéro du joueur: ");
            $joueur = Tournoi::getJoueur($index);
            Tournoi::supprimerJoueur($index);
            break; 
        case 4:
            Tournoi::getJoueurs();
            break;
        case 5:;
        case 6:
            Tournoi::listerMatchs()
            ;

    }

}