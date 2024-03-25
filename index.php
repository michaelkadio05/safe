<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Formulaire de plainte</title>

    <link rel="shortcut icon" type="image/x-icon" href="vendors/assets/img/favicon.jpg">

    <link rel="stylesheet" href="vendors/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="vendors/assets/css/animate.css">

    <link rel="stylesheet" href="vendors/assets/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="vendors/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="vendors/assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="vendors/assets/css/style.css">
</head>
<style>
    body{
        background-color: blue;
    }
    .header{
        background-color: blue;
        zone-index: 0;
    }
        .sidebar{
        background-color: yellow;
        background: url('vendors/assets/img/login.jpg');
        background-repeat: no-repeat;
        background-position: center;
    
    }
</style>
<body>


<div class="main-wrapper">

    <div class="header"></div>

    <div class="sidebar" id="sidebar"></div>

    <div class="page-wrapper">
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Bienvenue sur la plateforme de gestion de plainte</h1>
                            </div>
                        </div>
                    </div>
                    <form class="form-group" method="POST">
                        <div class="row">
                            <spam class=""> <h6>Informations personnelles ==========</h6> </spam>
                            <br/><br/><br/>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="form-label">Autorisation d'utilisation de donnée personnelle</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_male" value="option1">
                                        <label class="form-check-label" for="gender_male">
                                        Anonyme
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_female" value="option2">
                                        <label class="form-check-label" for="gender_female">
                                        Non anonyme
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="form-label">Autorisez-vous l'ONG Engage & Share à utiliser vos données ?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_male" value="option1">
                                        <label class="form-check-label" for="gender_male">
                                        Oui
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_female" value="option2">
                                        <label class="form-check-label" for="gender_female">
                                        Non (utiliser tout sauf mon nom)
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Nom et prénoms</label>
                                    <input type="text">
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Téléphone</label>
                                    <input type="text">
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Lieu d'habitation</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Pays</label>
                                    <select class="form-control">
                                        <option>Choose Category</option>
                                        <option>Computers</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Région</label>
                                    <select class="form-control">
                                        <option>Choose Category</option>
                                        <option>Computers</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Ville</label>
                                    <select class="form-control">
                                        <option>Choose Category</option>
                                        <option>Computers</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Commune</label>
                                    <select class="form-control">
                                        <option>Choose Category</option>
                                        <option>Computers</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Âge</label>
                                    <select class="form-control">
                                        <option>Choose Category</option>
                                        <option>Computers</option>
                                    </select>
                                </div>
                            </div>

                            <spam class=""> <h6>Cursus scolaire ==========</h6> </spam>
                            <br/><br/><br/>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Situation professionnelle</label>
                                    <select class="form-control">
                                    <option>Choose Sub Category</option>
                                    <option>Fruits</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Niveau scolaire</label>
                                    <select class="form-control">
                                    <option>Choose Brand</option>
                                    <option>Brand</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Nom de l' établissement scolaire</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Classe</label>
                                    <select class="form-control">
                                    <option>Choose Unit</option>
                                    <option>Unit</option>
                                    </select>
                                </div>
                            </div>

                            <spam class=""> <h6>Informations sur la plainte  ==========</h6> </spam>
                            <br/><br/><br/>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Thématique</label>
                                    <select class="form-control">
                                    <option>Choose Unit</option>
                                    <option>Unit</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Nom de l'agent qui vous a reçu</label>
                                    <input type="text">
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Lieu du SSSU-SAJ( ancien médico scolaire) où l'abus a eu lieu</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Date à laquelle l'abus a eu lieu</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Heure à laquelle l'abus a eu lieu</label>
                                    <input type="time" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Description de la plainte</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Recommandation</label>
                                    <p>
                                        toutes vos informations personnelles seront confidentielles. <strong>L'ONG Engage & Share</strong> vous garantit que vos informations seront protégées.
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="form-label">Autorisation d'utilisation de donnée personnelle</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_male" value="option1">
                                        <label class="form-check-label" for="gender_male">
                                        Je confirme l'exactitude des informations fournis.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Bouton submit -->
                            <div class="col-lg-12">
                                <input type="submit" name="plainte" class="btn btn-success me-2" value="Ajouter ma plainte">
                                <input type="reset" class="btn btn-danger" value="Annuler la plainte">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

    <script src="vendors/assets/js/jquery-3.6.0.min.js"></script>

    <script src="vendors/assets/js/feather.min.js"></script>

    <script src="vendors/assets/js/jquery.slimscroll.min.js"></script>

    <script src="vendors/assets/js/jquery.dataTables.min.js"></script>
    <script src="vendors/assets/js/dataTables.bootstrap4.min.js"></script>

    <script src="vendors/assets/js/bootstrap.bundle.min.js"></script>

    <script src="vendors/assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="vendors/assets/plugins/apexchart/chart-data.js"></script>

    <script src="vendors/assets/js/script.js"></script>
</body>

</html>