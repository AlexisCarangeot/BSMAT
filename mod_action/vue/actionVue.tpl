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

{include file='public/header.tpl'}

<!-- FIN : header -->

<section id="listVu">
    {if !empty($error)}<p class="alert alert-danger">{$error}</p>{/if}
    <div class="container-perso action-container-perso">
        <div class="form-info form-actions">
            <h2>Opérations à effectuer</h2>
            <form method="post" action="index.php">
                <input type="hidden" name="gestion" value="action">
                <input type="hidden" name="action" value="{$action}">
                <div class="actionInput-container">
                    <div class="actionInput-box">
                        <label for="actionName">Opération</label>
                        <input type="text" placeholder="Saisir l'opération à effectuer" name="intitule" value='{if isset($post) && !empty($error)}{$post}{/if}'>
                    </div>
                    <div class="actionInput-box actionInput-box2">
                        <label for="idtype_rep">Type de réparation</label>
                        {html_options name=idtype_rep options=$options selected=$selected}
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
                {foreach from=$listeActions item=action}
                    <tr>
                        <td>{$action.action}</td>
                        <td>{$action.type_rep}</td>
                        <td>
                            <form method="post" action="index.php">
                                <input type="hidden" name="gestion" value="action">
                                <input type="hidden" name="action" value="{$supprimer}">
                                <input type="hidden" name="idaction" value="{$action.idaction}">
                                <button type="submit" class="btn fiche-action">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>

        <div class="redirect-btn redirect-action">
            <a href="index.php?gestion=fiche" class="btn">Valider</a>
        </div>

    </div>
    {include file='public/footer.tpl'}
</section>

<!-- Right Panel -->
<script src="public/assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="public/assets/js/popper.min.js"></script>
<script src="public/assets/js/plugins.js"></script>
<script src="public/assets/js/main.js"></script>


<script src="public/assets/js/lib/data-table/datatables.min.js"></script>
<script src="public/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="public/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="public/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="public/assets/js/lib/data-table/jszip.min.js"></script>
<script src="public/assets/js/lib/data-table/pdfmake.min.js"></script>
<script src="public/assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="public/assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="public/assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="public/assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="public/assets/js/lib/data-table/datatables-init.js"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#bootstrap-data-table-export').DataTable();
    });
</script>

</body>
</html>
