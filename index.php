<?php
    require_once 'routes/functions.php';

    $message = "";
    $erreur = "";

    if(isset($_POST['plainte']))
    {
        $anony = htmlspecialchars(trim(strip_tags($_POST['anony'])));
        $auth_data = htmlspecialchars(trim(strip_tags($_POST['auth_data'])));
        $fullname = htmlspecialchars(trim(strip_tags($_POST['fullname'])));
        $phone = htmlspecialchars(trim(strip_tags($_POST['phone'])));
        $email = htmlspecialchars(trim(strip_tags($_POST['email'])));
        $habitation = htmlspecialchars(trim(strip_tags($_POST['habitation'])));
        $pays = htmlspecialchars(trim(strip_tags($_POST['pays'])));
        $region = htmlspecialchars(trim(strip_tags($_POST['region'])));
        $ville = htmlspecialchars(trim(strip_tags($_POST['ville'])));
        $commune = htmlspecialchars(trim(strip_tags($_POST['commune'])));
        $age = htmlspecialchars(trim(strip_tags($_POST['age'])));
        $statut_pro = htmlspecialchars(trim(strip_tags($_POST['statut_pro'])));
        $nscolaire = htmlspecialchars(trim(strip_tags($_POST['nscolaire'])));
        $etab_scolaire = htmlspecialchars(trim(strip_tags($_POST['etab_scolaire'])));
        $classe = htmlspecialchars(trim(strip_tags($_POST['classe'])));
        $thematique = htmlspecialchars(trim(strip_tags($_POST['thematique'])));
        $name_agent = htmlspecialchars(trim(strip_tags($_POST['name_agent'])));
        $lieu_sssu = htmlspecialchars(trim(strip_tags($_POST['lieu_sssu'])));
        $temps = strtr($_REQUEST['lieu_date'], '/', '-');
        $lieu_date = date('Y-m-d', strtotime($temps));
        $lieu_heure = htmlspecialchars(trim(strip_tags($_POST['lieu_heure'])));
        $desc_plainte = htmlspecialchars(trim(strip_tags($_POST['desc_plainte'])));
        
        if(isset($_POST['anony']) && isset($_POST['auth_data']) && isset($_POST['fullname']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['habitation']) && isset($_POST['pays']) && isset($_POST['region']) && isset($_POST['ville']) && isset($_POST['commune']) && isset($_POST['age']) && isset($_POST['statut_pro']) && isset($_POST['nscolaire']) && isset($_POST['etab_scolaire']) && isset($_POST['classe']) && isset($_POST['thematique']) && isset($_POST['name_agent']) && isset($_POST['lieu_sssu']) && isset($_POST['lieu_date']) && isset($_POST['lieu_heure']) && isset($_POST['desc_plainte']))
        {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
                $nombre = mb_strlen($phone);
                if($nombre == 10)
                {
                    $message = 
                        "
                        <div class='card-body'>
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <strong>Enregistrement réussi!</strong>
                                plainte ajouter avec succès succès.
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                        </div>
                        ";
                }
                else
                    $erreur = 
                        "
                        <div class='card-body'>
                            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <strong>Erreur!</strong>
                                'Numéro de téléphone incorrecte, exemple<b> 07 XX XX XX XX</b>.'
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                        </div>
                        ";
            } 
            else
                $erreur = 
                    "
                    <div class='card-body'>
                            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <strong>Erreur!</strong>
                                Adresse mail incorrecte <b>vide</b>.
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                        </div>
                    ";
        } 
        else 
            $erreur = 
                "
                <div class='card-body'>
                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Erreur!</strong>
                        'Veuillez renseigner tous les champs <b>vide</b>.'
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                </div>
                
                ";
    }
?>
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
                        <div class="col-12">
                            <?php echo $message; echo $erreur; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Bienvenue sur la plateforme de gestion de plainte "Safe"</h1>
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
                                        <input class="form-check-input" type="radio" name="anony" id="anony" require value="<?=$_POST['anony']?>">
                                        <label class="form-check-label" for="anony">Anonyme</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="anony" id="anony_non" require value="<?=$_POST['anony']?>">
                                        <label class="form-check-label" for="anony_non">Non anonyme</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="form-label">Autorisez-vous l'ONG Engage & Share à utiliser vos données ?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="auth_data" id="gender_male" value="<?=$_POST['auth_data']?>">
                                        <label class="form-check-label" for="gender_male">
                                        Oui
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="auth_data" id="gender_female" value="<?=$_POST['auth_data']?>">
                                        <label class="form-check-label" for="gender_female">
                                        Non (utiliser tout sauf mon nom)
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Nom et prénoms</label>
                                    <input type="text" class="form-control" name="fullname" required value="<?=$_POST['fullname']?>">
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Téléphone</label>
                                    <input type="number" class="form-control" name="phone" required value="<?=$_POST['phone']?>">
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" required value="<?=$_POST['email']?>">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Lieu d'habitation</label>
                                    <textarea class="form-control" required name="habitation"><?=$_POST['habitation']?></textarea>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Pays</label>
                                    <select name="pays" required value="<?=$_POST['pays']?>" class="form-control">
                                        <option>Choose Category</option>
                                        <option>Computers</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Région</label>
                                    <select name="region" required value="<?=$_POST['region']?>" class="form-control">
                                        <option>Choose Category</option>
                                        <option>Computers</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Ville</label>
                                    <select name="ville" required value="<?=$_POST['ville']?>" class="form-control">
                                        <option>Choose Category</option>
                                        <option>Computers</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Commune</label>
                                    <select name="commune" required value="<?=$_POST['commune']?>" class="form-control">
                                        <option>Choose Category</option>
                                        <option>Computers</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Âge</label>
                                    <select name="age" required value="<?=$_POST['age']?>" class="form-control">
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
                                    <select name="statut_pro" required value="<?=$_POST['statut_pro']?>" class="form-control">
                                    <option>Choose Sub Category</option>
                                    <option>Fruits</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Niveau scolaire</label>
                                    <select name="nscolaire" required value="<?=$_POST['nscolaire']?>" class="form-control">
                                    <option>Choose Brand</option>
                                    <option>Brand</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Nom de l' établissement scolaire</label>
                                    <textarea class="form-control" name="etab_scolaire"><?=$_POST['etab_scolaire']?></textarea>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Classe</label>
                                    <select name="classe" required value="<?=$_POST['classe']?>" class="form-control">
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
                                    <select name="thematique" required value="<?=$_POST['thematique']?>" class="form-control">
                                    <option>Choose Unit</option>
                                    <option>Unit</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Nom de l'agent qui vous a reçu</label>
                                    <input type="text" name="name_agent" required value="<?=$_POST['name_agent']?>" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Lieu du SSSU-SAJ( ancien médico scolaire) où l'abus a eu lieu</label>
                                    <textarea class="form-control" require name="lieu_sssu"><?=$_POST['lieu_sssu']?></textarea>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Date à laquelle l'abus a eu lieu</label>
                                    <input type="date" class="form-control" name="lieu_date" required value="<?=$_POST['lieu_date']?>">
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Heure à laquelle l'abus a eu lieu</label>
                                    <input type="time" class="form-control" name="lieu_heure" required value="<?=$_POST['lieu_heure']?>">
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Description de la plainte</label>
                                    <textarea class="form-control" require name="desc_plainte"><?=$_POST['desc_plainte']?></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-6 col-12">
                                <div class="text-info">
                                    <label><strong>Recommandations</strong></label>
                                    <p>
                                        Toutes vos informations personnelles seront confidentielles. <strong>L'ONG Engage & Share</strong> vous garantir que vos informations seront protégées.
                                    </p><br>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-6 col-12">
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" require type="radio" name="confirmation" id="gender_male" value="oui">
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