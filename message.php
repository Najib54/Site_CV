
<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


    </head>
    <body>
        <h1>Login</h1>

        <?php

        if (isset($_POST['Password']) AND $_POST['Password'] == 'siteCV')  
           
        { 
        ?>

            <p>Connexion réussie</p>

            <p>Vous pouvez désormais me laisser un message !</p>

            <form action="secret.php" method="POST">

                <p>Entrez votre nom :</p>

                <p><input type="text" name="nom" /></p>

                <p>Entrez votre prénom :</p>

                <p><input type="text" name="prenom" /></p>

                <p>votre commentaire : </p>

                <form action="secret.php" method="POST">

                <p><input type="text" name="commentaire" /></p>

                <p><input type="submit"/></p>
                </form>

        <?php   
            }
            else
            {
                echo '<p>Désolé, mot de passe incorrect</p>';
                ?>
                <p>Cliquez sur ce lien ici pour vous reconnecter <a href="contact.php">lien</a></p>
            <?php      
            }
            ?>
            

            <?php
                    try
                    {
                        // On se connecte à MySQL
                        $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', 'root');
                    }
                    catch(Exception $e)
                    {
                        // En cas d'erreur, on affiche un message et on arrête tout
                            die('Erreur : '.$e->getMessage());
                    }

                            // On ajoute une entrée dans la table cv
                            $requete = $bdd->prepare('INSERT INTO cv(nom, prenom, commentaire) VALUES(?,?,?)');
                            $requete -> execute(array($_POST['nom'], $_POST['prenom'], $_POST['commentaire']));


                    // Puis on se redirige vers contact.php comme ceci :
                    header('Location: contact.php');

                ?>
    </body>
</html>







