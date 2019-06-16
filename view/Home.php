<!DOCTYPE html>

<head>
   <title>Tiwitter</title>
   <meta charset="utf-8" />
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   <link rel="stylesheet" href="../css/Home.css" />

</head>

<body>
    <div class="centered wrapper"><h1>Tiwitter</h1></div>

    <div class="centered"><h2>Identité : <a id="Name" href="/user"><?php echo  $params['app']->getSessionParameters('user')['username']; ?></a></h2></div>

    <script type="text/javascript">
        var objectList = <?php echo $params['objectList'] ?>;
    </script>
    <form>
    <div class="group">
        <textarea type="text" rows="6" maxlength="140" name="tiwit" required></textarea>
        <span class="highlight"></span><span class="bar"></span>
        <label>Entrez un texte à tiwiter (140 caractères max)</label>
    </div>
    </form>
    <form action="/home/tiwit">
    <button class="button">Tiwiter</button>
    </form>

</body>
<footer>
    <form action="/">
        <button class="button">Se déconnecter</button>
    </form>
</footer>
</html>

