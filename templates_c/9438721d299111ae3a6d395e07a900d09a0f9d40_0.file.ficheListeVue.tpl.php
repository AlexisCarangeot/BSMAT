<?php
/* Smarty version 3.1.34-dev-7, created on 2022-09-24 12:46:29
  from '/Applications/MAMP/htdocs/BSMAT-test/mod_fiche/vue/ficheListeVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_632efc259c7747_77400154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9438721d299111ae3a6d395e07a900d09a0f9d40' => 
    array (
      0 => '/Applications/MAMP/htdocs/BSMAT-test/mod_fiche/vue/ficheListeVue.tpl',
      1 => 1626784279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.tpl' => 1,
    'file:public/footer.tpl' => 1,
  ),
),false)) {
function content_632efc259c7747_77400154 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/BSMAT-test/include/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>12ème BSMAT - Fiches suiveuses</title>
    <meta name="description" content="12ème BSMAT - Fiches suiveuses">
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
<!-- Header -->

<?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Fin header -->

<section id="list">
    <div class="container-perso">
        <div class="content mt-3">
            <form method="post" action="index.php">
                <input type="hidden" name="gestion" value="fiche">
                <input type="hidden" name="action" value="form_fiche_ajouter">
                <button type="submit" class="btn redirect-create" href="">Créer une fiche</button>
            </form>
            <div class="animated fadeIn">

                <div class="row">

                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>N° fiche</th>
                                        <th>Type de fiche</th>
                                        <th>Véhicule</th>
                                        <th>N° Immatriculation</th>
                                        <th>Type de véhicule</th>
                                        <th>Kilométrage</th>
                                        <th>Opérateur</th>
                                        <th>Date</th>
                                        <th>N° IT Diagnostic</th>
                                        <th>N° IT REP</th>
                                        <th>N° IT Carrosserie</th>
                                        <th>N° IT Camion grue</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeFiches']->value, 'fiche');
$_smarty_tpl->tpl_vars['fiche']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fiche']->value) {
$_smarty_tpl->tpl_vars['fiche']->do_else = false;
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['fiche']->value['idfiche'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['fiche']->value['type_fiche'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['fiche']->value['vehicule'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['fiche']->value['immatriculation'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['fiche']->value['type_vehicule'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['fiche']->value['kilometrage'];?>
 km</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['fiche']->value['nomPrenom'];?>
</td>
                                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['fiche']->value['date_creation'],"%d-%m-%Y");?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['fiche']->value['iddiag'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['fiche']->value['idrep'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['fiche']->value['idcarrosserie'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['fiche']->value['idcamgrue'];?>
</td>
                                            <td>
                                                <form method="post" action="index.php" target="_blank">
                                                    <input type="hidden" name="gestion" value="fiche">
                                                    <input type="hidden" name="action" value="form_fiche_imprimer">
                                                    <input type="hidden" name="idfiche" value="<?php echo $_smarty_tpl->tpl_vars['fiche']->value['idfiche'];?>
">
                                                    <button type="submit" class="btn fiche-action">Imprimer</button>
                                                </form>
                                                 <form method="post" action="index.php">
                                                    <input type="hidden" name="gestion" value="fiche">
                                                    <input type="hidden" name="action" value="form_fiche_modifier">
                                                    <input type="hidden" name="idfiche" value="<?php echo $_smarty_tpl->tpl_vars['fiche']->value['idfiche'];?>
">
                                                     <button type="submit" class="btn2 fiche-action">Modifier</button>
                                                </form>
                                            </td>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div><!-- .animated -->
            </div><!-- .content -->


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
