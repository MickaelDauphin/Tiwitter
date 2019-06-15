<!DOCTYPE html>

<head>
   <title>Tiwitter</title>
   <meta charset="utf-8" />
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   <link rel="stylesheet" href="css/Login.css" />
    <!--<link rel="icon" href="../images/logo.ico"/>-->
</head>


<body>
      
   	<h1> Tiwitter </h1>

   <!--<img src="images/icon_log.svg" alt="image" title="icon_login" width="30%"/>-->

    <?php

    if(isset($params['accessDenied'])) {
        echo "
           <p style='color: red' align='center'>
           Une erreur est survenue.
           </p>
        ";
    }

    if(isset($params['registered'])) {
        echo "
           <p style='color: green' align='center'>
           Vous avez bien été enregistré !
           </p>
        ";
    }
    ?>
<br><br>
       <form action="/login", method="post">
           <input type="username" placeholder="Entrez votre nom d'utilisateur" name="username" required>
           <br>
           <br>
           <input type="password" placeholder="Entrez votre mot de passe" name="password" required>
           <br>
           <br>
           <br>
           <button type="login">Se connecter</button>
       </form>
   <form action="/register">
      <button type="register">S'enregistrer</button>
    </form>

   <footer>
      <p></p>
   </footer>


</body>

</html>
