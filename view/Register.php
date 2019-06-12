<!DOCTYPE html>

<head>
    <title>Sampl'é</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="../css/register.css" />
    <link rel="icon" href="../images/logo.ico"/>
</head>

<body>

<h1> Register </h1>

<?php if(isset($params['!registered'])) {
    echo "
           <p style='color: red' align='center'>
           Une erreur est survenue, veuillez réessayer.
           </p>
        ";
} ?>

<div class="container">
    <form action="/tryRegister" method="post">
        <input type="username" placeholder="Enter your first name" name="firstName" required>
        <br>
        <br>
        <input type="username" placeholder="Enter your family name" name="familyName" required>
        <br>
        <br>
        <input type="username" placeholder="Enter an username" name="username" required>
        <br>
        <br>
        <input type="password" placeholder="Enter a password" name="password" required>
        <br>
        <br>
        <input type="email" placeholder="Enter your email" name="email" required>

        <button type="submit">Submit</button>
    </form>
</div>

<footer>
    <p></p>
</footer>


</body>

</html>
