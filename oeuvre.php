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
        <?php include('oeuvres.php'); ?>

        <?php 
            $id= $_GET['id'];

            $oeuvre = null;

            foreach($oeuvres as $item){
                if ($item['id'] === $id){
                    $oeuvre = $item;
                    break;
                }
            }
        ?>
        
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <?php echo "<img src='{$oeuvre['image']}' alt='{$oeuvre['titre']}'>" ?>
            </div>
            <div id="contenu-oeuvre">
                <h1><?php echo "{$oeuvre['titre']}" ?></h1>
                <p class="description"><?php echo "{$oeuvre['auteur']}"?></p>
                <p class="description-complete">
                <?php echo "{$oeuvre['description']}"?>
                </p>
            </div>
        </article>
        
    </main>
    <!-- Footer -->
    <?php include('footer.php'); ?>
</body>
</html>