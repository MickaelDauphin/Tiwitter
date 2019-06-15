<!DOCTYPE html>

<head>
    <title>Tiwitter</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="../css/Register.css" />
    <!--<link rel="icon" href="../images/logo.ico"/>-->
</head>

<body>

<h1> S'enregister </h1>

<?php if(isset($params['!registered'])) {
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

if (isset($params['userExist']))
{
    echo "
           <p style='color: red' align='center'>
           Cet utilisateur existe déjà.
           </p>
        ";
}
?>


    <form action="/tryRegister" method="post" autocomplete="off">

        <!-- Prénom -->
        <input type="text" id="input-1" name="firstName" minlength="3" maxlength="40" placeholder="Entrez votre prénom" required />
        <br>
        <!-- Nom -->
        <input type="text" id="input-2" name="familyName" minlength="3" maxlength="40" placeholder="Entrez votre nom" required/>
        <!-- Username -->
        <input class="input__field input__field--kaede" type="text" id="input-3" name="username" minlength="4" maxlength="40" placeholder="Entrez votre nom d'utilisateur" required />
        <br>
        <!-- Password -->
        <input class="input__field input__field--kaede" type="password" id="input-4" name="password" minlength="6" maxlength="80" placeholder="Entrez un mot de passe" required/>
        <!-- Password Re -->
        <input class="input__field input__field--kaede" type="password" id="input-5" name="passwordConfirm" minlength="6" maxlength="80" placeholder="Confirmez le mot de passe" required />
        <br>
        <!-- Email -->
        <input class="input__field input__field--kaede" type="text" id="input-6" name="email" minlength="4" maxlength="80" placeholder="Entrez un email" required/>
        <br>

        <!-- Button -->
        <button type="submit">Confirmer</button>
    </form>
    <form action="/">
        <button type="back">Retour</button>
    </form>

<footer>
    <p></p>
</footer>


</body>

</html>
