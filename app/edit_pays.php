<?php
$title = "Modification d'un pays";
include_once '../models/_header.php';
include_once '../models/_navbar.php';
?>
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Modifier un pays</h4>
                <h6>...........</h6>
            </div>
            <div class="page-btn">
                <a href="pays.php" class="btn btn-added"><img src="../vendors/assets/img/icons/return1.svg" class="me-2" alt="img">Retour</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
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
                                <button type="submit" name="modifier" class="btn btn-warning text-white">Modifier</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once '../models/_footer.php'; ?>