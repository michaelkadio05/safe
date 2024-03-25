<?php
$title = "Plainte";
include_once '../models/_header.php';
include_once '../models/_navbar.php';
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
                        <h5>Total plainte</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="file"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count das2">
                    <div class="dash-counts">
                        <h4>100</h4>
                        <h5>Total plainte en Côte d'Ivoire</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="file"></i>
                    </div>
                </div>
            </div>
            <!--<div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count das2">
                    <div class="dash-counts">
                        <h4>100</h4>
                        <h5>Total plainte inactif</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="file-text"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex"></div>-->
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
                <a href="javascript:void(0);" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#create"><img src="../vendors/assets/img/icons/plus-circle.svg" class="me-2" alt="img">Ajouter une plainte</a>
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
                <h5 class="modal-title">Ajouter une plainte</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
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
                                    <label class="form-label">Statut</label>
                                    <select class="form-control" name="statut" required value="<?=$_POST['statut']?>">
                                        <option value="">Select un statut</option>
                                        <option value="Actif">Actif</option>
                                        <option value="Inactif">Inactif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" name="ajouter" class="btn btn-primary">Ajouter une plainte</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="page-wrapper">
                        <div class="content">
                        <div class="page-header">
                            <div class="page-title">
                                <h4>Product Add</h4>
                                <h6>Create new product</h6>
                            </div>
                        </div>

                        <div class="card">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                <label>Product Name</label>
                                <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="select">
                                    <option>Choose Category</option>
                                    <option>Computers</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Sub Category</label>
                                    <select class="select">
                                    <option>Choose Sub Category</option>
                                    <option>Fruits</option>
                                    </select>
                                </div>
                            </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                        <label>Brand</label>
                        <select class="select">
                        <option>Choose Brand</option>
                        <option>Brand</option>
                        </select>
                        </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                        <label>Unit</label>
                        <select class="select">
                        <option>Choose Unit</option>
                        <option>Unit</option>
                        </select>
                        </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                        <label>SKU</label>
                        <input type="text">
                        </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                        <label>Minimum Qty</label>
                        <input type="text">
                        </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                        <label>Quantity</label>
                        <input type="text">
                        </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control"></textarea>
                        </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                        <label>Tax</label>
                        <select class="select">
                        <option>Choose Tax</option>
                        <option>2%</option>
                        </select>
                        </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                        <label>Discount Type</label>
                        <select class="select">
                        <option>Percentage</option>
                        <option>10%</option>
                        <option>20%</option>
                        </select>
                        </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                        <label>Price</label>
                        <input type="text">
                        </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                        <label> Status</label>
                        <select class="select">
                        <option>Closed</option>
                        <option>Open</option>
                        </select>
                        </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="form-group">
                        <label> Product Image</label>
                        <div class="image-upload">
                        <input type="file">
                        <div class="image-uploads">
                        <img src="assets/img/icons/upload.svg" alt="img">
                        <h4>Drag and drop a file to upload</h4>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="col-lg-12">
                        <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                        <a href="productlist.html" class="btn btn-cancel">Cancel</a>
                        </div>
                        </div>
                        </div>
                        </div>

                        </div>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal add pays -->
<?php include_once '../models/_footer.php'; ?>