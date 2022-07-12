<!-- Stampare a schermo una decina di dischi musicali (vedi screenshot).Utilizzare:
Html, CSS, VueJS, axios, PHP

Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->

<?php 

include "discs_db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milestone 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    
    <div class="container py-5">
        <div class="row row-cols-6 gap-4">
            <?php 
                foreach ($discList as $disc) {
            ?>

            <div class="card mx-2 p-3">
                <img src="<?php echo $disc["poster"] ?>" alt="">
                <div class="card-body text-center">
                    <h4 class="card-title"><?php echo $disc["title"] ?></h4>
                    <span><?php echo $disc["author"] ?></span><br>
                    <span><?php echo $disc["year"] ?></span>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>

</body>
</html>