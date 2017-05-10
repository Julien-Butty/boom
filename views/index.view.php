<?php $title = "Acceuil"; ?>
<?php include 'includes/constants.php'; ?>
<?php include 'partials/_header.php'; ?>

<div id="main-content">
    <div class="container">

        <div class="jumbotron">
            <p>
            <h1><?= WEBSITE_NAME ;?> </h1>
            <?= WEBSITE_NAME ;?>  est le réseau social des développeurs . <br>
            Et qui dit développeurs, dit également code source!<br>
            Grâce à cette plateforme, vous avez la possibilité de tisser des liens d'amitiés avec d'autres développeurs,
            échanger des codes sources, recevoir de l'aide si vous rencontrez des problèmes sur l'un de vos projet et
            bien
            plus encore!<br>
            Alors n'hésitez plus et <a href="register.php">rejoignez dès maintenant la communauté Boom</a> !<br>
            </p>
            <a href="register.php" class="btn btn-primary btn-lg">Je m'inscris</a>
        </div>

    </div><!-- /.container -->
</div>


<?php include 'partials/_footer.php'; ?>


