
<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css">
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

                <p>
                    Entrez votre nom :
                </p>

                <p>
                    <input type="text" name="nom" />
                    
                </p>

                <p>
                    Entrez votre prénom :
                </p>

                <p>
                    <input type="text" name="prenom" />
                    
                </p>


                <p>
                    votre commentaire :
                </p>

                <form action="secret.php" method="POST">
                <p>
                    <input type="text" name="commentaire" />
                    
                </p>

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


    </body>
</html>







