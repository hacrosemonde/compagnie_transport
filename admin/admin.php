<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
    <header>
        <h3>Compagnie de transport terrestre </h3>
    </header>
    <section class="slider">
        <div class="box">
            <h3 class="title">Espace Administrateur</h3>
            <span class="logo"></span>

            <?php include_once "script_login.php"?>
            <?php if(isset($erreur)){echo $erreur;}?>
            <form action="" method="post">
                <input class="urname" type="text" name="username" placeholder="Username">
                <input class="urname" type="password" name="password" placeholder="Username">
                <button type="submit" name="submit">Se connecter</button>
            </form>
        </div>
    </section>
</body>
</html>