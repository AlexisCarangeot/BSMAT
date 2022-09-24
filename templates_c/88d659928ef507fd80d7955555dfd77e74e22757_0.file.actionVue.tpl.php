<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-23 08:50:24
  from '/Applications/MAMP/htdocs/BSMAT RDC/BSMAT-RDC/Version-3/mod_action/vue/actionVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60fa82d088e317_08238856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88d659928ef507fd80d7955555dfd77e74e22757' => 
    array (
      0 => '/Applications/MAMP/htdocs/BSMAT RDC/BSMAT-RDC/Version-3/mod_action/vue/actionVue.tpl',
      1 => 1627030223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.tpl' => 1,
    'file:public/footer.tpl' => 1,
  ),
),false)) {
function content_60fa82d088e317_08238856 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/BSMATRDC/BSMAT-RDC/Version-3/include/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>12ème BSMAT - Fiches suiveuses - Création</title>
    <meta name="description" content="12ème BSMAT - Fiches suiveuses - Création">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="public/assets/css/normalize.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/css/themify-icons.css">
    <link rel="stylesheet" href="public/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="public/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="public/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/scss/style.css">
    <link rel="stylesheet" href="public/assets/css/qd.css">
    <link rel="stylesheet" href="public/assets/css/lib/vector-map/jqvmap.min.css">
    <link rel="stylesheet" href="public/style/AC-app.css">
    <link rel="stylesheet" href="public/style/QD-app.css">
    <link rel="stylesheet" href="public/style/app.css">
    <link rel="stylesheet" href="public/style/responsive.css">
    <link rel="icon" type="image/png" href="public/images/logo.png"/>


</head>
<body>
<!--Header -->

<?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- FIN : header -->

<section id="listVu">
    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?><p class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><?php }?>
    <div class="container-perso action-container-perso">
        <div class="form-info form-actions">
            <h2>Opérations à effectuer</h2>
            <form method="post" action="index.php">
                <input type="hidden" name="gestion" value="action">
                <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
                <div class="actionInput-container">
                    <div class="actionInput-box">
                        <label for="actionName">Opération</label>
                        <input type="text" placeholder="Saisir l'opération à effectuer" name="intitule">
                    </div>
                    <div class="actionInput-box actionInput-box2">
                        <label for="idtype_rep">Type de réparation</label>
                        <?php echo smarty_function_html_options(array('name'=>'idtype_rep','options'=>$_smarty_tpl->tpl_vars['options']->value),$_smarty_tpl);?>

                    </div>
                    <button class="btn" value="ajouter">Ajouter</button>
                </div>
            </form>
            <table id="tableActions">
                <thead>
                <tr>
                    <th>Liste des opérations</th>
                    <th>Type de réparation</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeActions']->value, 'action');
$_smarty_tpl->tpl_vars['action']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['action']->value['action'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['action']->value['type_rep'];?>
</td>
                        <td>
                            <form method="post" action="index.php">
                                <input type="hidden" name="gestion" value="action">
                                <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['supprimer']->value;?>
">
                                <input type="hidden" name="idaction" value="<?php echo $_smarty_tpl->tpl_vars['action']->value['idaction'];?>
">
                                <button type="submit" class="btn fiche-action">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>

        <div class="redirect-btn redirect-action">
            <a href="index.php?gestion=fiche" class="btn">Valider</a>
        </div>

    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</section>

<!-- Right Panel -->
<?php echo '<script'; ?>
 src="public/assets/js/vendor/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/plugins.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/main.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/datatables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/jszip.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/pdfmake.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/vfs_fonts.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.html5.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.print.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.colVis.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/datatables-init.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        $('#bootstrap-data-table-export').DataTable();
    });
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
