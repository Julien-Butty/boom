<?php $title = "Inscription"; ?>
<?php include 'partials/_header.php'; ?>

<div id="main-content">
    <div class="container">

        <h1 class="lead">Devenez dès à présent membre!</h1>

        <?php include 'partials/_errors.php'?>

        <form method="post" class="well col-md-6" autocomplete="off">

            <!-- Name field -->
            <div class="form-group">
                <label for="name" class="control-label">Nom:</label>
                <input type="text" class="form-control" id="name" name="name" required="required"/>
            </div>

            <!-- Pseudo field -->
            <div class="form-group">
                <label for="pseudo" class="control-label">Pseudo</label>
                <input type="text" class="form-control" id="pseudo" name="pseudo" required="required"/>
            </div>

            <!-- email field -->
            <div class="form-group">
                <label for="email" class="control-label">Adresse Email</label>
                <input type="text" class="form-control" id="email" name="email" required="required"/>
            </div>

            <!-- Password field -->
            <div class="form-group">
                <label for="password" class="control-label">Mot de passe:</label>
                <input type="password" class="form-control" id="password" name="password" required="required"/>
            </div>

            <!-- Password confirmation field -->
            <div class="form-group">
                <label for="password_confirm" class="control-label">Confirmer votre mot de passe:</label>
                <input type="password" class="form-control" id="password_confirm" name="password_confirm"
                       required="required"/>
            </div>

            <!-- Name field -->
            <input type="submit" class="btn btn-primary" value="Inscription" name="register"/>


        </form>

    </div><!-- /.container -->
</div>


<?php include 'partials/_footer.php'; ?>


