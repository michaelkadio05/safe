<?php
$title = "Pays";
include_once '../models/_header.php';
include_once '../models/_navbar.php';
?>
<div class="page-wrapper">
    <div class="content">
        <!-- Barre de recherche par année -->
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-12 d-flex">
                <form method="POST">
                    <div class="form-group">
                        <label>Rapport par année :</label>
                        <select class="form-control" name="etat" required value="<?= $_POST['etat']; ?>">
                            <option value="">2024</option>
                            <option value="1">2025</option>
                            <option value="2">Inactif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="Chercher" class="btn btn-primary">Chercher</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-sm-6 col-12">

            </div>
        </div>
        <!-- statistics -->
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count">
                    <div class="dash-counts">
                        <h4>100</h4>
                        <h5>Customers</h5>
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
                        <h5>Suppliers</h5>
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
                        <h5>Purchase Invoice</h5>
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
<!-- new model -->
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
                                            <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit"><img src="../vendors/assets/img/icons/edit.svg" class="me-2" alt="img">Modifier</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete"><img src="../vendors/assets/img/icons/delete1.svg" class="me-2" alt="img">Supprimer</a>
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

<!-- Modal add pays -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="create" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="#">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">First Name</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Blood Group</label>
                                    <div class="col-lg-9">
                                        <select class="form-group">
                                            <option>Select</option>
                                            <option value="1">A+</option>
                                            <option value="2">O+</option>
                                            <option value="3">B+</option>
                                            <option value="4">AB+</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal delete pays -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-12">
                        mika
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<?php include_once '../models/_footer.php'; ?>