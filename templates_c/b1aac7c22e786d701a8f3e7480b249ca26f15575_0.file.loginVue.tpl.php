<?php
/* Smarty version 3.1.34-dev-7, created on 2022-09-24 13:16:54
  from '/Applications/MAMP/htdocs/BSMAT/mod_login/vue/loginVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_632f034693dcc1_40109594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1aac7c22e786d701a8f3e7480b249ca26f15575' => 
    array (
      0 => '/Applications/MAMP/htdocs/BSMAT/mod_login/vue/loginVue.tpl',
      1 => 1626775988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.tpl' => 1,
    'file:public/footer.tpl' => 1,
  ),
),false)) {
function content_632f034693dcc1_40109594 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
<?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section id="index">
    <div class="container-perso">
        <h2>Connexion</h2>
        <form class="login-form" action="index.php" method="post">
            <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                <div class="alert-error">
                    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                </div>
            <?php }?>
            <input type="hidden" name="gestion" value="authentification">
            <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
            <div class="form-group">
                <input type="text" class="" name="login" placeholder="Identifiant" value="<?php echo $_smarty_tpl->tpl_vars['unEmploye']->value->getLogin();?>
">
            </div>
            <div class="form-group">
                <input type="password" class="input-password" placeholder="Mot de passe" name="motdepasse">
            </div>
            <button type="submit" class="btn">Se connecter</button>
        </form>
    </div>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
