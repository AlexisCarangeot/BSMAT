<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>12ème BSMAT - Authentification</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="public/images/logo.png" />

    <link rel="stylesheet" href="public/style/app.css">
    <link rel="stylesheet" href="public/style/QD-app.css">
    <link rel="stylesheet" href="public/style/AC-app.css">
    <link rel="stylesheet" href="public/style/responsive.css">
</head>

<body>
{include file='public/header.tpl'}
<section id="index">
    <div class="container-perso">
        <h2>Connexion</h2>
        <form class="login-form" action="index.php" method="post">
            {if !empty($error)}
                <div class="alert-error">
                    {$error}
                </div>
            {/if}
            <input type="hidden" name="gestion" value="authentification">
            <input type="hidden" name="action" value="{$action}">
            <div class="form-group">
                <input type="text" class="" name="login" placeholder="Identifiant" value="{$unEmploye->getLogin()}">
            </div>
            <div class="form-group">
                <input type="password" class="input-password" placeholder="Mot de passe" name="motdepasse">
            </div>
            <button type="submit" class="btn">Se connecter</button>
        </form>
    </div>
</section>

{include file='public/footer.tpl'}


</body>
</html>
