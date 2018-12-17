<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 9 exercice 1</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <div align="center">
                        <h1 align="center">PHP Partie 9 exercice 1</h1>
                        <h3 align="center">Exercice 1</h3>
                        <p class="text">Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)</p>
                        <p>Nous sommes le :<b><?= date('d/m/Y'); ?></b>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

