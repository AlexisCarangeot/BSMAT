<?php
/* Smarty version 3.1.34-dev-7, created on 2022-09-24 12:46:17
  from '/Applications/MAMP/htdocs/BSMAT-test/mod_accueil/vue/accueilVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_632efc19328d15_54262241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2344e18e9aa6f2fedc937b35b2befe0790f945b' => 
    array (
      0 => '/Applications/MAMP/htdocs/BSMAT-test/mod_accueil/vue/accueilVue.tpl',
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
function content_632efc19328d15_54262241 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>12ème BSMAT - Accueil</title>
    <meta name="description" content="Fiche suiveuses - Catalogue - Accueil">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="public/images/logo.png"/>

    <link rel="stylesheet" href="public/style/app.css">
    <link rel="stylesheet" href="public/style/QD-app.css">
    <link rel="stylesheet" href="public/style/AC-app.css">
    <link rel="stylesheet" href="public/style/responsive.css">

</head>
<body>

<!-- Header -->
<?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section id="accueil">
    <div class="container-perso">


        <div class="acces">
            <a href="index.php?gestion=fiche">
                <div class="acces-box">
                    <img src="public/images/fiches-suiveuses.jpg" class="acces-image">
                    <svg version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="m116.59.099-63.536 63.536h63.536z" fill="#ffffff" data-original="#000000" style="" class=""/><path d="m383.843 0h-237.253v93.635h-93.635v343.163h330.889v-436.798zm-61.787 289.838h-207.313v-30h207.313zm0-63.734h-207.313v-30h207.313zm0-63.735h-207.313v-30h207.313z" fill="#ffffff" data-original="#000000" style="" class=""/><path d="m413.843 75.202v391.596h-285.686v45.202h330.888v-436.798z" fill="#ffffff" data-original="#000000" style="" class=""/></g></g></svg>
                    <h2>Gestionnaire<br>des<br>fiches suiveuses</h2>
                </div>
            </a>

            <form method="post" action="index.php">
                <input type="hidden" name="gestion" value="fiche">
                <button class="btn">Accéder
                    <svg version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 512 512" xml:space="preserve"><g>
                            <path xmlns="http://www.w3.org/2000/svg" style="" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111  C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587  c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z" fill="#ffffff" data-original="#1e201d"/></svg></button>
            </form>
        </div>
        <div class="acces">
            <a href="index.php?gestion=catalogue">
                <div class="acces-box">
                    <img src="public/images/catalogue.jpg" class="acces-image">
                    <svg version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512.00033 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="m166 300.003906h271.003906c6.710938 0 12.597656-4.4375 14.414063-10.882812l60.003906-210.003906c1.289063-4.527344.40625-9.390626-2.433594-13.152344-2.84375-3.75-7.265625-5.964844-11.984375-5.964844h-365.632812l-10.722656-48.25c-1.523438-6.871094-7.617188-11.75-14.648438-11.75h-91c-8.289062 0-15 6.710938-15 15 0 8.292969 6.710938 15 15 15h78.960938l54.167968 243.75c-15.9375 6.929688-27.128906 22.792969-27.128906 41.253906 0 24.8125 20.1875 45 45 45h271.003906c8.292969 0 15-6.707031 15-15 0-8.289062-6.707031-15-15-15h-271.003906c-8.261719 0-15-6.722656-15-15s6.738281-15 15-15zm0 0" fill="#ffffff" data-original="#000000" style="" class=""/><path d="m151 405.003906c0 24.816406 20.1875 45 45.003906 45 24.8125 0 45-20.183594 45-45 0-24.8125-20.1875-45-45-45-24.816406 0-45.003906 20.1875-45.003906 45zm0 0" fill="#ffffff" data-original="#000000" style="" class=""/><path d="m362.003906 405.003906c0 24.816406 20.1875 45 45 45 24.816406 0 45-20.183594 45-45 0-24.8125-20.183594-45-45-45-24.8125 0-45 20.1875-45 45zm0 0" fill="#ffffff" data-original="#000000" style="" class=""/></g></svg>
                    <h2>Catalogue<br>des<br>commandes</h2>
                </div>
            </a>
            <form method="post" action="index.php">
                <input type="hidden" name="gestion" value="catalogue">
                <button class="btn">Accéder
                    <svg version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 512 512" xml:space="preserve"><g>
                        <path xmlns="http://www.w3.org/2000/svg" style="" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111  C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587  c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z" fill="#ffffff" data-original="#1e201d"/></svg></button>
            </form>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['role']->value == "Admin") {?>
            <div class="acces">
                <a href="index.php?gestion=admin">
                    <div class="acces-box">
                        <img src="public/images/admin.jpg" class="acces-image">
                        <svg version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 404 404.93" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m237.738281 158.375c0 19.226562-15.582031 34.8125-34.808593 34.8125-19.226563 0-34.8125-15.585938-34.8125-34.8125s15.585937-34.8125 34.8125-34.8125c19.226562 0 34.808593 15.585938 34.808593 34.8125zm0 0" fill="#ffffff" data-original="#000000" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m202.90625 75.410156c-70.058594 0-127.074219 57-127.074219 127.054688.015625 34.59375 14.136719 67.6875 39.097657 91.640625v-37.101563c.066406-25.699218 20.898437-46.507812 46.597656-46.539062 2.546875 0 4.941406 1.214844 6.449218 3.265625 8.171876 11.125 21.148438 17.699219 34.953126 17.699219 13.804687 0 26.785156-6.574219 34.957031-17.699219 1.503906-2.050781 3.898437-3.261719 6.441406-3.265625 25.699219.03125 46.535156 20.839844 46.601563 46.539062v37.101563c24.957031-23.953125 39.074218-57.046875 39.085937-91.640625 0-70.058594-57.050781-127.054688-127.109375-127.054688zm.023438 133.777344c-28.0625 0-50.8125-22.75-50.8125-50.8125s22.75-50.8125 50.8125-50.8125 50.8125 22.75 50.8125 50.8125c-.03125 28.050781-22.761719 50.78125-50.8125 50.8125zm0 0" fill="#ffffff" data-original="#000000" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m248.046875 226.695312c-13.394531 15.539063-33.828125 23.109376-54.109375 20.050782-14.070312-2.105469-26.902344-9.226563-36.136719-20.050782-15.316406 1.886719-26.832031 14.878907-26.871093 30.308594v50.144532c21 14.101562 45.324218 22.371093 72 22.371093 26.675781 0 51-8.269531 72-22.371093v-50.144532c-.042969-15.433594-11.566407-28.421875-26.882813-30.308594zm0 0" fill="#ffffff" data-original="#000000" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m380.71875 227.152344c2.480469-19.03125 1.980469-38.328125-1.476562-57.207032-.484376-2.644531.390624-5.351562 2.332031-7.210937l21.175781-20.3125-20.699219-47.316406-29.335937 2.160156c-2.738282.199219-5.386719-1.015625-7.019532-3.222656-11.359374-15.375-25.308593-28.660157-41.21875-39.257813-2.296874-1.527344-3.640624-4.132812-3.5625-6.890625l.863282-29.328125-48.105469-18.566406-18.957031 21.972656c-1.757813 2.035156-4.421875 3.054688-7.089844 2.707032-19.03125-2.480469-38.335938-1.980469-57.214844 1.476562-2.644531.484375-5.351562-.390625-7.210937-2.332031l-20.3125-21.175781-47.316407 20.699218 2.15625 29.335938c.203126 2.738281-1.015624 5.386718-3.222656 7.019531-15.375 11.359375-28.660156 25.308594-39.257812 41.21875-1.527344 2.292969-4.132813 3.640625-6.890625 3.5625l-29.328125-.863281-18.5625 48.109375 21.972656 18.957031c2.035156 1.757812 3.054688 4.421875 2.707031 7.089844-2.476562 19.03125-1.980469 38.328125 1.476563 57.207031.484375 2.644531-.390625 5.351563-2.332032 7.210937l-21.175781 20.3125 20.699219 47.316407 29.335938-2.15625c2.738281-.199219 5.386718 1.015625 7.019531 3.222656 11.359375 15.375 25.308593 28.65625 41.222656 39.253906 2.292969 1.53125 3.636719 4.136719 3.554687 6.890625l-.859374 29.324219 48.109374 18.570313 18.953126-21.972657c1.757812-2.035156 4.421874-3.054687 7.089843-2.707031 19.03125 2.476562 38.328125 1.976562 57.207031-1.476562 2.644532-.484376 5.351563.390624 7.210938 2.332031l20.3125 21.175781 47.316406-20.699219-2.15625-29.339843c-.199218-2.734376 1.015625-5.386719 3.222656-7.015626 15.375-11.363281 28.660157-25.308593 39.257813-41.21875 1.523437-2.300781 4.132813-3.648437 6.890625-3.5625l29.324219.863282 18.566406-48.109375-21.960937-18.960938c-2.039063-1.753906-3.054688-4.417969-2.710938-7.085937zm-177.789062 118.367187c-78.882813 0-143.054688-64.171875-143.054688-143.054687 0-78.878906 64.171875-143.054688 143.054688-143.054688 78.878906 0 143.054687 64.175782 143.054687 143.054688 0 78.882812-64.175781 143.054687-143.054687 143.054687zm0 0" fill="#ffffff" data-original="#000000" style="" class=""/></g></svg>
                        <h2>Accès<br>administrateur</h2>
                    </div>
                </a>
                <form method="post" action="index.php">
                    <input type="hidden" name="gestion" value="admin">
                    <button class="btn">Accéder
                        <svg version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 512 512" xml:space="preserve"><g>
                                <path xmlns="http://www.w3.org/2000/svg" style="" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111  C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587  c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z" fill="#ffffff" data-original="#1e201d"/></svg></button>
                </form>
            </div>
        <?php }?>

    </div>

</section>

<?php $_smarty_tpl->_subTemplateRender('file:public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>

<?php }
}
