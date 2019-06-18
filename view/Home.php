<!DOCTYPE html>

<head xmlns="http://www.w3.org/1999/html">
   <title>Tiwitter</title>
   <meta charset="utf-8" />
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   <link rel="stylesheet" href="../css/Home.css" />

</head>

<body>
    <div class="centered wrapper"><h1>Tiwitter</h1></div>

    <div class="centered"><h2>Identité : <a id="Name" href="/user" style="color:#fe5353"><?php  echo  $params['app']->getSessionParameters('user')['username']; ?></a></h2></div>
    <?php

    if(isset($params['tiwitPosted'])) {
        echo "
           <p style='color: green' align='center'>
           Tiwit posté !
           </p>
        ";
    }
?>

    <div class="blanc">
    <?php
    foreach ($params['user'] as $user) :?>
        <tr>
            <p class="tiwits">
               Utilisateur<p2 class="pseudo"><?=
                    $user->getId(); ?></a></p2>
                <?php echo ":"?>
                <br>
                <br>
                <?php echo "&nbsp;&nbsp;"?> <button class="LikeButton" href="" ">Like</button>
                <?php echo "&nbsp;&nbsp;"?> <form action="/home/userfollowed"><button class="FollowButton" href="" ">Follow <?= $tiwit->getUtilisateur(); ?></button></form>
            <br><br>
            </p>

        </tr>

    <?php endforeach; ?>
    </div>
    <form action="/home/tiwit" method="post">
    <div class="centeredTexteArea">

        <div class="group">
            <textarea type="text" rows="6" maxlength="140" name="tiwit" required/></textarea>
            <span class="highlight"></span><span class="bar"></span>
            <label>Entrez un texte à tiwiter (140 caractères max)</label>
        </div>

         </div>
         <div class="centeredButton formes">
         <!--<form action="/home/tiwit" method="post">-->

    <button class="buttonTiwiter">Tiwiter</button>
    </form>
    </div>
    <div class="centeredButton formes">
        <form action="/home/affiche">
            <button class="buttonTiwiter">Voir les tiwits</button>
        </form>
    </div>

</body>
<footer>
    <div class="centeredButton formes">
    <form action="/">
        <button class="button">Se déconnecter</button>
    </form>
    </div>
</footer>
</html>

