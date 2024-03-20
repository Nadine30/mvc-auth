<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap.min.css">   
    <title> Page d'Inscription </title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="" method="POST" class="border border-3 rounded rounded-3 my-5 p-3">
                    <input type="text" name="NomUtilisateur" placeholder="Nom" class="form-control">
                    <br>
                    <input type="email" name="EmailUtilisateur" placeholder="Email" class="form-control">
                    <br>
                    <input type="password" name="pwd1" placeholder="Mot de Passe" class="form-control">
                    <br>
                    <input type="password" name="pwd2" placeholder="Confirmer Mot de Passe" class="form-control">
                    <br>
                    <input type="submit" value="S'inscrire" class="btn btn-primary">
                    <a href="/connexion" class="mx-5"> Compte déja existant? </a>
                </form>

            </div>
        </div>
    </div>

    
</body>
</html>