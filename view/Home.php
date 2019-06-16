<!DOCTYPE html>

<head>
   <title>Tiwitter</title>
   <meta charset="utf-8" />
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   <link rel="stylesheet" href="../css/Home.css" />

</head>

<body>
    <div class="centered wrapper"><h1>Tiwitter</h1></div>
	<!--<img id="logo" src="../images/logo.png" alt="image" title="icon_login"/>-->

    <div class="centered wrapper"><h2>Identité : <a id="Name" href="/user"><?php echo  $params['app']->getSessionParameters('user')['username']; ?></a></h2></div>

    <!--
	<img src="../images/TVr.png" id="TV" onclick="changeState('TV', ['TVr.png', 'TVg.png'])"/>
	-->
    <script type="text/javascript">
        var objectList = <?php echo $params['objectList'] ?>;
    </script>
    <div class="group">
        <textarea type="text" size="140" rows="4" cols="100" maxlength="140" name="tiwit" required></textarea>
        <span class="highlight"></span><span class="bar"></span>
        <label>Entrez un texte à tiwiter (140 caractères max)</label>
    </div>
    <form action="/home/tiwit">
    <button class="button">Tiwiter</button>
    </form>
    <!--<img src="../images/TVr.png" id="TV" onclick="changeState('TV', ['TVr.png', 'TVg.png'], objectList[0]);" />
	<img src="../images/PCr.png" id="PC" onclick="changeState('PC', ['PCr.png', 'PCg.png'], objectList[1]);"/>

    <script type="text/javascript">start(objectList);</script>
	<a href="../view/Favorites.php"><img src="../images/PLUS.png" id="Favoris"></a>-->


</body>
<footer>
    <form action="/">
        <br/>
        <button class="button">Se déconnecter</button>
    </form>
</footer>
</html>

