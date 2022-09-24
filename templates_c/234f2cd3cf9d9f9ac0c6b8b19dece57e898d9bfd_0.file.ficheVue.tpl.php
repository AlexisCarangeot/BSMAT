<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-20 13:04:42
  from '/Applications/MAMP/htdocs/BSMAT RDC/BSMAT-RDC/Version-3/mod_fiche/vue/ficheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60f6c9ea0b2039_98924226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '234f2cd3cf9d9f9ac0c6b8b19dece57e898d9bfd' => 
    array (
      0 => '/Applications/MAMP/htdocs/BSMAT RDC/BSMAT-RDC/Version-3/mod_fiche/vue/ficheVue.tpl',
      1 => 1626786280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.tpl' => 1,
    'file:public/footer.tpl' => 1,
  ),
),false)) {
function content_60f6c9ea0b2039_98924226 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/BSMATRDC/BSMAT-RDC/Version-3/include/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/Applications/MAMP/htdocs/BSMATRDC/BSMAT-RDC/Version-3/include/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
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
<!-- Header -->

<?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Fin header -->

<!-- Body -->
<section id="listVu">
    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?><p class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><?php }?>
    <form method="post" action="index.php">
        <input type="hidden" name="gestion" value="fiche">
        <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
        <div class="container-perso">
            <div class="form-box">
                <div class="form-info">
                    <h2>Informations du véhicule</h2>
                    <?php if ($_smarty_tpl->tpl_vars['action']->value == 'fiche_modifier') {?>
                        <input type="hidden" name="idfiche" value="<?php echo $_smarty_tpl->tpl_vars['uneFiche']->value->getIdfiche();?>
" readonly>
                    <?php }?>
                    <div class="input-box">
                        <label for="vehicule">
                            Véhicule *
                        </label>
                        <input type="text" name="vehicule" value="<?php echo $_smarty_tpl->tpl_vars['uneFiche']->value->getVehicule();?>
">
                    </div>
                    <div class="input-box">
                        <label for="type_vehicule">
                            Type de véhicule
                        </label>
                        <input type="text" name="type_vehicule" value="<?php echo $_smarty_tpl->tpl_vars['uneFiche']->value->getType_vehicule();?>
">
                    </div>
                    <div class="input-box">
                        <label for="immatriculation">
                            Numéro d'immatriculation *
                        </label>
                        <input type="text" name="immatriculation" value="<?php echo $_smarty_tpl->tpl_vars['uneFiche']->value->getImmatriculation();?>
">
                    </div>
                    <div class="input-box">
                        <label for="kilometrage">
                            Kilométrage *
                        </label>
                        <input type="text" name="kilometrage" value="<?php echo $_smarty_tpl->tpl_vars['uneFiche']->value->getKilometrage();?>
">
                    </div>
                </div>
                <div class="form-info">
                    <h2>Informations complémentaires</h2>
                    <div class="input-box">
                        <label for="operateur">
                            Opérateur
                        </label>
                        <?php if ($_smarty_tpl->tpl_vars['action']->value == 'fiche_modifier') {?>
                            <input type="text" name="operateur" placeholder="<?php echo $_smarty_tpl->tpl_vars['operateur']->value;?>
" readonly>
                            <input type="hidden" name="idemploye" value="<?php echo $_smarty_tpl->tpl_vars['uneFiche']->value->getOperateur();?>
">
                        <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'fiche_ajouter') {?>
                            <input type="text" name="idemploye" placeholder="<?php echo $_smarty_tpl->tpl_vars['operateur']->value;?>
" readonly>
                            <input type="hidden" name="idemploye" value="<?php echo $_smarty_tpl->tpl_vars['idemploye']->value;?>
">
                        <?php }?>
                    </div>
                    <div class="input-box">
                        <label for="date_creation">
                            Date
                        </label>
                        <?php if ($_smarty_tpl->tpl_vars['action']->value == 'fiche_ajouter') {?>
                            <input type="text" name="date_creation" value="<?php echo smarty_modifier_date_format(time(),"%d-%m-%Y");?>
"
                                   readonly>
                        <?php } else { ?>
                            <input type="text" name="date_creation" value="<?php echo $_smarty_tpl->tpl_vars['uneFiche']->value->getDate_creation();?>
" readonly>
                        <?php }?>
                    </div>
                    <div class="input-box">
                        <label for="type_fiche">
                            Type de fiche
                        </label>
                        <?php echo smarty_function_html_options(array('name'=>'type_fiche','options'=>$_smarty_tpl->tpl_vars['options']->value,'selected'=>$_smarty_tpl->tpl_vars['selected']->value),$_smarty_tpl);?>

                    </div>
                    <div class="input-box">
                        <label for="iddiag">
                            Numéro IT Diagnostic
                        </label>
                        <input type="text" name="iddiag" value="<?php echo $_smarty_tpl->tpl_vars['uneFiche']->value->getIddiag();?>
">
                    </div>
                    <div class="input-box">
                        <label for="idrep">
                            Numéro IT Rep
                        </label>
                        <input type="text" name="idrep" value="<?php echo $_smarty_tpl->tpl_vars['uneFiche']->value->getIdrep();?>
">
                    </div>
                    <div class="input-box">
                        <label for="idcarrosserie">
                            Numéro IT Carrosserie
                        </label>
                        <input type="text" name="idcarrosserie" value="<?php echo $_smarty_tpl->tpl_vars['uneFiche']->value->getIdcarrosserie();?>
">
                    </div>
                    <div class="input-box">
                        <label for="idcamgrue">
                            Numéro IT Camion grue
                        </label>
                        <input type="text" name="idcamgrue" value="<?php echo $_smarty_tpl->tpl_vars['uneFiche']->value->getIdcamgrue();?>
">
                    </div>
                </div>
            </div>

            <div class="redirect-btn">
                <a href="index.php?gestion=fiche" class="btn2">Annuler</a>
                <input type="submit" class="btn"
                       value="<?php if ($_smarty_tpl->tpl_vars['action']->value == 'fiche_ajouter') {?>Ajouter<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'fiche_modifier') {?>Modifier<?php }?>">

            </div>

        </div>
    </form>
    <?php $_smarty_tpl->_subTemplateRender('file:public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</section>

<!-- Fin body -->

<!-- Script -->

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
