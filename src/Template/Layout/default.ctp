<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $this->fetch('title') ?></title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?= $this->fetch('css') ?>
    </head>
    <body>
        <div class="main">
            <div class="col-md-6 padding-block">
                <div class="col-lg-12 logo block">
                    <img src="img/gui-egas.jpg" alt="Guilherme Enoc Egas de Carvalho">
                    <div class="name">
                        Guilherme Enoc <span class="hidden-xs">Egas de Carvalho</span>
                    </div>
                    <div class="social-links">
                        <a href="http://fb.com/guiegas"><i class="fa fa-facebook"></i></a>
                        <a href="https://github.com/guiegas"><i class="fa fa-github"></i></a>
                    </div>

                </div>
            </div>
            <div class="col-md-3 padding-block">
                <div class="col-lg-12 block facebook">
                    <i class="fa fa-facebook"></i>
                </div>
            </div>
            <div class="col-md-3 padding-block">
                <div class="col-lg-12 block facebook">
                    Facebook
                </div>
            </div>
            <div class="col-md-3 padding-block">
                <div class="col-lg-12 block facebook">
                    Facebook
                </div>
            </div>
            <div class="col-md-3 padding-block">
                <div class="col-lg-12 block facebook">
                    Facebook
                </div>
            </div>
        </div>
        <?= $this->fetch('content') ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <?= $this->fetch('script') ?>
    </body>
</html>