<!DOCTYPE html>

<head>
   <title>Tiwitter</title>
   <meta charset="utf-8" />
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   <!--<link rel="stylesheet" href="cssTest.css" />
   <link rel="stylesheet" href="../css/home.css" />
   <link rel="icon" href="../images/logo.ico"/>
   <script src="../js/states.js"></script>-->
</head>

<body>
	<h1>Tiwitter</h1>
	<!--<img id="logo" src="../images/logo.png" alt="image" title="icon_login"/>-->

    <h2>Identity : <?php echo $params['username']; ?></h2>

    <!--
	<img src="../images/TVr.png" id="TV" onclick="changeState('TV', ['TVr.png', 'TVg.png'])"/>
	-->
    <script type="text/javascript">
        var objectList = <?php echo $params['objectList'] ?>;
    </script>


    <!--<img src="../images/TVr.png" id="TV" onclick="changeState('TV', ['TVr.png', 'TVg.png'], objectList[0]);" />
	<img src="../images/PCr.png" id="PC" onclick="changeState('PC', ['PCr.png', 'PCg.png'], objectList[1]);"/>

    <script type="text/javascript">start(objectList);</script>
	<a href="../view/Favorites.php"><img src="../images/PLUS.png" id="Favoris"></a>-->

</body>
<footer>
    <form action="/">
        <br/>
        <button type="login">Déconnecter</button>
    </form>
</footer>
</html>

