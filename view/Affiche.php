<!DOCTYPE html>

<head>
    <title>Tiwitter</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="../css/Affiche.css" />

</head>

<body>
<div class="centered wrapper"><h1>Tiwitter</h1></div>

<div class="centered"><h2>Identité : <a id="Name" href="/user" style="color:#fe5353"><?php  echo  $params['app']->getSessionParameters('user')['username']; ?></a></h2></div><?php

if(isset($params['tiwitPosted'])) {
    echo "
           <p style='color: green' align='center'>
           Tiwit posté !
           </p>
        ";
}
?>
<script type="text/javascript">
    var objectList = <?php echo $params['objectList'] ?>;
</script>
<div class="blanc">
<table>
    <?php

    foreach ($params['tiwits'] as $tiwit) :?>
        <tr>
            <td>Tiwit de <?= $tiwit->getUtilisateur(); ?></a></td>
            <td><?php echo ":&nbsp;"?></td>
            <td><?= $tiwit->getContenu(); ?></td>
            <td><?php echo "&nbsp;&nbsp;"?> <a href="" style="color:#fe5353">Like</a></td>
            <td><?php echo "&nbsp;&nbsp;"?> <a href="" style="color:#febf53">Follow</a></td>
        </tr>

    <?php endforeach; ?>

</table>
</div>
<div class="centeredButton">
    <form action="/home">
        <button class="buttonTiwiter">Retour </button>
    </form>
</div>
</body>
<footer>
    <div class="centeredButton">
        <form action="/">
            <button class="button">Se déconnecter</button>
        </form>
    </div>
</footer>
</html>

