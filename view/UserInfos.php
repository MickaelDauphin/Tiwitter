<!DOCTYPE html>

<head>
    <title>Tiwitter</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="../css/User.css" />
</head>

<body>
<h1>Tiwitter - Infos utilisateur</h1>


<?php if(isset($params['error'])) {
    echo "
           <p style='color: red' align='center'>
           Une erreur est survenue, veuillez réessayer.
           </p>
        ";
}

if (isset($params['passwordError']))
{
    echo "
           <p style='color: red' align='center'>
           Les mots de passes sont différents, veuillez vérifier votre saisie.
           </p>
        ";
}

if (isset($params['success']))
{
    echo "
           <p style='color: green' align='center'>
           Modifications correctement prises en comptes !
           </p>
        ";
}
?>

<br/>
<h2 align="center">Identité : <?php $user = $params['app']->getSessionParameters('user'); echo $user['username']; ?> </h2>

<form action="/user/update" method="post">
    <!-- Username -->
    <input type="text" id="input-1" value="<?php echo $user['username']; ?>" name="username" minlength="4" maxlength="40" placeholder="Entrez votre nom d'utilisateur" required />
    <br>
    <!-- Nom -->
    <input type="text" id="input-2" value="<?php echo $user['familyName']; ?>" name="familyName" minlength="3" maxlength="40" placeholder="Entrez votre nom" required/>
    <!-- Prénom -->
    <input type="text" id="input-3" value="<?php echo $user['firstName']; ?>" name="firstName" minlength="3" maxlength="40" placeholder="Entrez votre prénom" required/>
    <!-- Email -->
    <input type="text" id="input-4" value="<?php echo $user['email']; ?>" name="email" minlength="4" maxlength="80" placeholder="Entrez votre email" required />
    <br>
    <!-- Password -->
    <input type="password" id="input-5" value="" name="password" minlength="6" maxlength="80" placeholder="Entrez votre nouveau mot de passe (si changement)"/>
    <!-- Password Re -->
    <input type="password" id="input-6" value="" name="passwordConfirm" minlength="6" maxlength="80" placeholder="Confirmez votre nouveau mot de passe (si changement)" />
    <br><br>

    <button type="save">Enregistrer les modifications</button>
</form>

<form action="/home">
    <button type="return">Retour</button>
</form>


<footer>
    <p></p>
</footer>


</body>

</html>

