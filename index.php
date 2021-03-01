<?php

/**
 * Reprenez le code de l'exercice précédent et transformez vos requêtes pour utiliser les requêtes préparées
 * la méthode de bind du paramètre et du choix du marqueur de données est à votre convenance.
 */

//important fct
function secure($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = addslashes($data);
    return $data;
}

try {
    /**
     * Créez ici votre objet de connection PDO, et utilisez à chaque fois le même objet $pdo ici.
     */
    $dbname = "table_test_php";
    $server = "localhost";
    $password = "dev";
    $user = "root";

    $con = new PDO("mysql:host = $server;dbname=$dbname;charset=UTF8", $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /**
     * 1. Insérez un nouvel utilisateur dans la table utilisateur.
     */
    $nom = 'Cecile';
    $prenom = 'Bubulle';
    $email = 'Cebubulle@gmail.com';
    $password = 'password';
    $adresse = 'Rue du singe';
    $code_postal = '59132';
    $pays = 'France';

    // TODO votre code ici.
    $tadaam = $con->prepare("INSERT INTO utilisateur (nom, prenom, email, password, adresse, code_postal, pays)
                             VALUES (:nom, :prenom, :email, :password, :adresse, :code_postal, :pays)
     ");

    $tadaam->bindParam(':nom', $nom);
    $tadaam->bindParam(':prenom', $prenom);
    $tadaam->bindParam(':email', $email);
    $tadaam->bindParam(':password', $password);
    $tadaam->bindParam(':adresse', $adresse);
    $tadaam->bindParam(':code_postal', $code_postal);
    $tadaam->bindParam(':pays', $pays);

    $tadaam->execute();

    /**
     * 2. Insérez un nouveau produit dans la table produit
     */

    // TODO votre code ici.
    $titre = 'un produit';
    $price = '5.00';
    $description_courte = 'un super produit';
    $description_longue = 'un super produit tendance !';

    $tadaam = $con->prepare("INSERT INTO produit (titre, prix, description_courte, description_longue)
            VALUES (:titre, :prix, :description_courte, :description_longue)
    ");

    $tadaam->bindParam(':titre', $titre);
    $tadaam->bindParam(':prix', $price);
    $tadaam->bindParam(':description_courte', $description_courte);
    $tadaam->bindParam(':description_longue', $description_longue);

    $tadaam->execute();

    /**
     * 3. En une seule requête, ajoutez deux nouveaux utilisateurs à la table utilisateur.
     */

    // TODO Votre code ici.

    $name = 'Christophe';
    $names = 'Blabla';
    $email1 = 'blabla@gmail.com';
    $password1 = 'password';
    $adresse1 = 'Rue du Château';
    $code_postal1 = '59132';
    $pays1 = 'France';

    $nom2 = 'Victoire';
    $prenoom = 'Bubulle';
    $email2 = 'bubulle1@gmail.com';
    $password2 = 'azerty';
    $adresse2 = 'Rue du singe';
    $code_postal2 = '75000';
    $pays2 = 'France';


    $go= $con->prepare("INSERT INTO utilisateur (nom, prenom, email, password, adresse, code_postal, pays)
                         VALUES (:nom, :prenom, :email, :password, :adresse, :code_postal, :pays)
    ");

    $go->bindParam(':nom', $name);
    $go->bindParam(':prenom', $names);
    $go->bindParam(':email', $email1);
    $go->bindParam(':password', $password1);
    $go->bindParam(':adresse', $adresse1);
    $go->bindParam(':code_postal', $code_postal1);
    $go->bindParam(':pays', $pays1);


    $go->execute();

    $tadaam->bindParam(':nom', $nom2);
    $tadaam->bindParam(':prenom', $prenoom);
    $tadaam->bindParam(':email', $email2);
    $tadaam->bindParam(':password', $password2);
    $tadaam->bindParam(':adresse', $adresse2);
    $tadaam->bindParam(':code_postal', $code_postal2);
    $tadaam->bindParam(':pays', $pays2);

    $tadaam->execute();
    /**
     * 4. En une seule requête, ajoutez deux produits à la table produit.
     */

    // TODO Votre code ici.
   $tadaam = $con->prepare("INSERT INTO produit (titre, prix, description_courte, description_longue)
            VALUES (:titre, :prix, :description_courte, :description_longue)
    ");

    $titre1 = 'quelque chose';
    $price1 = '1.00';
    $description_courte1 = 'un super produit';
    $description_longue1 = 'un super produit tendance !';

    $titre2 = 'autre chose';
    $price2 = '3.00';
    $description_courte2 = 'un super produit';
    $description_longue2 = 'un super produit tendance !';

    $tadaam->bindParam(':titre', $titre1);
    $tadaam->bindParam(':prix', $price1);
    $tadaam->bindParam(':description_courte', $description_courte1);
    $tadaam->bindParam(':description_longue', $description_longue1);

    $tadaam->execute();

    $tadaam->bindParam(':titre', $titre2);
    $tadaam->bindParam(':prix', $price2);
    $tadaam->bindParam(':description_courte', $description_courte2);
    $tadaam->bindParam(':description_longue', $description_longue2);

    $tadaam->execute();

   /**
    * 5.ajoute 3 utilisateurs
    */
    $nom3 = 'Olivier';
    $prenom3 = 'Bubulle';
    $email3 = 'bubulle@gmail.com';
    $password3 = 'password';
    $adresse3 = 'Route de null part';
    $code_postal3 = '59132';
    $pays3 = 'France';
    $date_join3 = '';

    $nom4 = 'Baballe';
    $prenom4 = 'Bubulle';
    $email4 = 'bubulle2@gmail.com';
    $password4 = 'azerty';
    $adresse4 = 'Rue dans la vallée';
    $code_postal4 = '75000';
    $pays4 = 'France';
    $date_join4 = '';

    $nom5 = 'Victoria';
    $prenom5 = 'Poubelle';
    $email5 = 'poubelle@gmail.com';
    $password5 = 'azerty';
    $adresse5 = 'Rue du singe';
    $code_postal5 = '75000';
    $pays5 = 'France';
    $date_join5 = '';

    $tadaam = $con->prepare("INSERT INTO utilisateur (nom, prenom, email, password, adresse, code_postal, pays)
                         VALUES (:nom, :prenom, :email, :password, :adresse, :code_postal, :pays)
    ");

    $tadaam->bindParam(':nom', $nom3);
    $tadaam->bindParam(':prenom', $prenom3);
    $tadaam->bindParam(':email', $email3);
    $tadaam->bindParam(':password', $password3);
    $tadaam->bindParam(':adresse', $adresse3);
    $tadaam->bindParam(':code_postal', $code_postal3);
    $tadaam->bindParam(':pays', $pays3);

    $tadaam->execute();

    $tadaam->bindParam(':nom', $nom4);
    $tadaam->bindParam(':prenom', $prenom4);
    $tadaam->bindParam(':email', $email4);
    $tadaam->bindParam(':password', $password4);
    $tadaam->bindParam(':adresse', $adresse4);
    $tadaam->bindParam(':code_postal', $code_postal4);
    $tadaam->bindParam(':pays', $pays4);

    $tadaam->execute();

    $tadaam->bindParam(':nom', $nom5);
    $tadaam->bindParam(':prenom', $prenom5);
    $tadaam->bindParam(':email', $email5);
    $tadaam->bindParam(':password', $password5);
    $tadaam->bindParam(':adresse', $adresse5);
    $tadaam->bindParam(':code_postal', $code_postal5);
    $tadaam->bindParam(':pays', $pays5);

    $tadaam->execute();

    /**
    * 6. ajoute 3 produits
     */
    $tadaam = $con->prepare("INSERT INTO produit (titre, prix, description_courte, description_longue)
            VALUES (:titre, :prix, :description_courte, :description_longue)
    ");

    $titre3 = 'un truc';
    $price3 = '1.00';
    $description_courte3 = 'truc chouette';
    $description_longue3 = 'super cool tendance !';

    $titre4 = 'bidulle';
    $price4 = '1.00';
    $description_courte4 = 'bidulle cool';
    $description_longue4 = ' super tendance !';

    $titre5 = 'autre truc';
    $price5 = '3.00';
    $description_courte5 = 'quelque chose ici';
    $description_longue5 = 'super ici !';

    $tadaam->bindParam(':titre', $titre3);
    $tadaam->bindParam(':prix', $price3);
    $tadaam->bindParam(':description_courte', $description_courte3);
    $tadaam->bindParam(':description_longue', $description_longue3);

    $tadaam->execute();

    $tadaam->bindParam(':titre', $titre4);
    $tadaam->bindParam(':prix', $price4);
    $tadaam->bindParam(':description_courte', $description_courte4);
    $tadaam->bindParam(':description_longue', $description_longue4);

    $tadaam->execute();

    $tadaam->bindParam(':titre', $titre5);
    $tadaam->bindParam(':prix', $price5);
    $tadaam->bindParam(':description_courte', $description_courte5);
    $tadaam->bindParam(':description_longue', $description_longue5);

    $tadaam->execute();

}
catch(PDOException $exception) {
    echo " Une erreur est survenue ! " .$exception->getMessage();
}

