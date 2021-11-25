<div>
    <?php
        $prenom = "Geoffrey";
        $nom = "Choisel";
        $note1 = 10;
        $note2 = 20;
        $moyenne = ($note1 + $note2) / 2;

        echo "Bonjour ". $prenom ." ". $nom ." vous avez eu " . (($note1 + $note2) / 2) . " de moyenne !"; 

        echo "\n Bonjour $prenom $nom vous avez eu $moyenne de moyenne !"
    ?>
</div>

<div>
    <?php
        $eleve = [
            'nom' => 'Choisel',
            'prenom' => 'Geoffrey',
            'notes' => [15, 20, 10]
        ];
        $eleve['notes'][3] = 16;
        echo $eleve['prenom'] . ' ' . $eleve['nom'];
        
        // print_r($eleve['notes']);
    ?>
</div>
    
<div>  
    <?php
        $note = 10;
        if ($note > 10) {
            echo 'Bravo vous avez la moyenne !';
        } elseif ($note == 10) {
            echo 'Vous avez juste la moyenne';
        } else {
            echo 'Dommage vous n\'avez pas la moyenne';
        }
    ?>
</div>

<div>
    <?php
        $action = (int)readline('Entrez votre action : (1: attaquer, 2:défendre, 3: passer mon tour)');
        if ($action === 1) {
            echo 'J\'attaque !';
        } elseif ($action === 2) {
            echo 'Je defends';
        } elseif ($action === 3) {
            echo 'Je ne fais rien';
        } else {
            echo 'Commande inconnue';
        }
    ?>
</div>

<div>
    <?php
        $action = (int)readline('Entrez votre action : (1: attaquer, 2:défendre, 3: passer mon tour)');
        
        switch ($action) {
            case 1:
                echo 'J\'attaque !';
                break;
            case 2:
                echo 'Je defends';
                break;
            case 3:
                echo 'Je ne fais rien';
            default:
                echo 'Commande inconnue';
        }
    ?>
</div>

<div>
    <?php
        $heure = (int)readline('Entrez une heure : ');

        if ((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17)) {
            echo 'Le magasin est ouvert';
        } else {
            echo 'Le magasin est fermé';
        }
    ?>
</div>

<div>
    <?php
        $chiffre = null;

        while ($chiffre !== 4) {
            $chiffre = (int)readline('Entrez un chiffre : ');
        }

        echo 'Bravo vous avez gagné !';
    ?>
</div>

<div>
    <?php
        for ($i = 0; $i < 10; $i ++) {
            echo "- $i \n";
        }
    ?>
</div>