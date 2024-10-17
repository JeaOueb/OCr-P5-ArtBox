<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <!-- Header -->
    <?php include('header.php'); ?>
    <!-- Main -->
    <main>
        <!-- Ma 3éme tentative avec php ci-dessous -->
        <div id="liste-oeuvres">
        <?php include('oeuvres.php'); ?>
            <?php foreach ($oeuvres as $oeuvre){?>
                <article class="oeuvre">
                    <a href="oeuvre.php?id=<?=$oeuvre['id'] ?>">
                        <?php echo "<img src='{$oeuvre['image']}' alt='{$oeuvre['titre']}'>" ?>
                        <h2><?php echo "{$oeuvre['titre']}" ?></h2>
                        <p><?php echo "{$oeuvre['auteur']}"?></p>
                    </a>
                </article>
            <?php } ?>
        </div>
    </main>
    <!-- Footer -->
    <?php include('footer.php'); ?>
</body>
</html>