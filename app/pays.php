<?php
require_once '../routes/functions.php';
$title = "Pays";
include_once '../models/_header.php';
include_once '../models/_navbar.php';

    if(isset($_POST['ajouter']))
    {
        $libelle = htmlspecialchars(trim(strip_tags($_POST['libelle'])));
        $etat = htmlspecialchars(trim(strip_tags($_POST['etat'])));

        if(!empty($_POST['libelle']))
        {
            if(!empty($_POST['etat']))
            {
                addPays($libelle, $etat);
                $message = 
                    "
                    <div class='card-body'>
                        <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>Enregistrement réussi !</strong>
                            Le pays a bien été ajouter.
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>
                    ";
            }else{
                $erreur[] = 
                    "
                    <div class='card-body'>
                        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>Erreur !</strong>
                            le champ etat est vide
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>
                    ";
            }
        }else{
                $erreur[] = 
                    "
                    <div class='card-body'>
                        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>Erreur !</strong>
                            le champ libellé est vide
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>
                    ";
            }

    }
?>
<div class="page-wrapper">
    <div class="content">
        <!-- Barre de recherche par année -->
        <!-- Script incrementation de date par annee -->
        <?php
            $default = date('Y');
            if(isset($_POST['search'])){
                $year = $_POST['year'];
            }else{
                $year = $default;
            }
        ?>
        <!-- end script -->
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-12 d-flex">
                <form method="POST" class="form-group">
                    <div class="form-group">
                        <label>Rapport par année :</label>
                        <select class="form-control" name="year" required value="<?= $_POST['year']; ?>">
                            <?php                                                       
                                while($default <= 2030){
                                    echo "<option value=".$default.">".$default.'</option>';
                                    $default++;
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="search" class="btn btn-primary">Chercher</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
                <p>
                    <blockquote>
                        <h3><code>Le rapport des données s'affiche en fonction de l'année choisi. Par default c'est l'année en cours.</code></h3>
                    </blockquote>
                </p>
            </div>
        </div>
        <!-- Barre de recherche par année -->
        <!-- statistics -->
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count">
                    <div class="dash-counts">
                        <h4>100</h4>
                        <h5>Total pays</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="user"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count das1">
                    <div class="dash-counts">
                        <h4>100</h4>
                        <h5>Total pays actif</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="user-check"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count das2">
                    <div class="dash-counts">
                        <h4>100</h4>
                        <h5>Total pays inactif</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="file-text"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">

            </div>
        </div>
    </div>
</div>
<!-- new model tableau d'affichage -->
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Tableau récapitulatif</h4>
                <h6>...........</h6>
            </div>
            <div class="page-btn">
                <a href="javascript:void(0);" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#create"><img src="../vendors/assets/img/icons/plus-circle.svg" class="me-2" alt="img">Ajouter un pays</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <!-- barre de recherche tableau -->
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-input">
                            <a class="btn btn-searchset"><img src="../vendors/assets/img/icons/search-white.svg" alt="img"></a>
                        </div>
                    </div>
                    <div class="wordset">
                        <!--<ul>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="../vendors/assets/img/icons/pdf.svg" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="../vendors/assets/img/icons/excel.svg" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="../vendors/assets/img/icons/printer.svg" alt="img"></a>
                            </li>
                        </ul>-->
                    </div>
                </div>
                <!-- Tableau -->
                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Libellé</th>
                                <th>Etat</th>
                                <th>Date d'ajout</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>civ</td>
                                <td>actif</td>
                                <td>hier</td>
                                <td class="text-center">
                                    <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!--<li>
                                            <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#create"><img src="../vendors/assets/img/icons/plus-circle.svg" class="me-2" alt="img">Voir</a>
                                        </li>-->
                                        <li>
                                            <a href="edit_pays.php?id=" class="dropdown-item"><img src="../vendors/assets/img/icons/edit.svg" class="me-2" alt="img">Modifier</a>
                                        </li>
                                        <li>
                                            <a href="del_pays.php?id=" class="dropdown-item"><img src="../vendors/assets/img/icons/delete1.svg" class="me-2" alt="img">Supprimer</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- new model tableau d'affichage -->





<!-- Modal add pays -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="create" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un pays</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="row">
                        <div class="col-12">
                            <?php 
                            if(!empty($erreur)){

                                foreach($erreur as $erreurs)
                                {
                                    echo $erreurs;
                                }
                            }elseif (!empty($message)){
                               echo $message;
                            } 
                            ?>
                        </div>
                    </div>
            <div class="modal-body">
                <div class="row">
                    <form method="POST" class="form-group">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="form-label">Libellé</label>
                                    <input type="text" name="libelle" required value="<?=$_POST['libelle']?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="form-label">Etat</label>
                                    <select class="form-control" name="etat" required value="<?=$_POST['etat']?>">
                                        <option value="">Select etat</option>
                                        <option value="Actif">Actif</option>
                                        <option value="Inactif">Inactif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" name="ajouter" class="btn btn-primary">Ajouter un pays</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal add pays -->
<?php include_once '../models/_footer.php'; ?>