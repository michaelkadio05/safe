<?php
    require_once 'routes/functions.php';
    if(isset($_POST['plainte']))
    {
        $anony = htmlspecialchars(trim(strip_tags($_POST['anony'])));

        $auth_data = htmlspecialchars(trim(strip_tags($_POST['auth_data'])));

        $fullname = htmlspecialchars(trim(strip_tags($_POST['fullname'])));

        $phone = htmlspecialchars(trim(strip_tags($_POST['phone'])));

        $email = htmlspecialchars(trim(strip_tags($_POST['email'])));

        $habitation = htmlspecialchars(trim(strip_tags($_POST['habitation'])));

        $id_pays = htmlspecialchars(trim(strip_tags($_POST['id_pays'])));

        $id_region = htmlspecialchars(trim(strip_tags($_POST['id_region'])));

        $id_ville = htmlspecialchars(trim(strip_tags($_POST['id_ville'])));

        $id_commune = htmlspecialchars(trim(strip_tags($_POST['id_commune'])));

        $id_age = htmlspecialchars(trim(strip_tags($_POST['id_age'])));

        $id_statut_pro = htmlspecialchars(trim(strip_tags($_POST['id_statut_pro'])));

        $id_nscolaire = htmlspecialchars(trim(strip_tags($_POST['id_nscolaire'])));

        $etab_scolaire = htmlspecialchars(trim(strip_tags($_POST['etab_scolaire'])));

        $id_classe = htmlspecialchars(trim(strip_tags($_POST['id_classe'])));

        $id_thematique = htmlspecialchars(trim(strip_tags($_POST['id_thematique'])));

        $name_agent = htmlspecialchars(trim(strip_tags($_POST['name_agent'])));

        $lieu_sssu = htmlspecialchars(trim(strip_tags($_POST['lieu_sssu'])));

        $temps = strtr($_REQUEST['lieu_date'], '/', '-');

        $date_lieu = date('Y-m-d', strtotime($temps));

        $lieu_heure = htmlspecialchars(trim(strip_tags($_POST['lieu_heure'])));

        $desc_plainte = htmlspecialchars(trim(strip_tags($_POST['desc_plainte'])));

        $confirmation = htmlspecialchars(trim(strip_tags($_POST['confirmation'])));
        
        if(!empty($_POST['anony']))
        {
            if(!empty($_POST['auth_data']))
            {
                if(!empty($_POST['fullname']))
                {
                    if(!empty($_POST['phone']))
                    {
                        if(!empty($_POST['email']))
                        {
                            if(!empty($_POST['habitation']))
                            {
                                if(!empty($_POST['id_pays']))
                                {
                                    if(!empty($_POST['id_region']))
                                    {
                                        if(!empty($_POST['id_ville']))
                                        {
                                            if(!empty($_POST['id_commune']))
                                            {
                                                if(!empty($_POST['id_age']))
                                                {
                                                    if(!empty($_POST['id_statut_pro']))
                                                    {
                                                        if(!empty($_POST['id_nscolaire']))
                                                        {
                                                            if(!empty($_POST['etab_scolaire']))
                                                            {
                                                                if(!empty($_POST['id_classe']))
                                                                {
                                                                    if(!empty($_POST['id_thematique']))
                                                                    {
                                                                        if(!empty($_POST['name_agent']))
                                                                        {
                                                                            if(!empty($_POST['lieu_sssu']))
                                                                            {
                                                                                if(!empty($_POST['lieu_date']))
                                                                                {
                                                                                    if(!empty($_POST['lieu_heure']))
                                                                                    {
                                                                                        if(!empty($_POST['desc_plainte']))
                                                                                        {
                                                                                            if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
                                                                                            {
                                                                                                $nombre = mb_strlen($phone);
                                                                                                if($nombre == 10)
                                                                                                {
                                                                                                    addPlainte($anony, $auth_data, $fullname, $phone, $email, $habitation, $id_pays, $id_region, $id_ville, $id_commune, $id_age, $id_statut_pro, $id_nscolaire, $etab_scolaire, $id_classe, $id_thematique, $name_agent, $lieu_sssu, $date_lieu, $lieu_heure, $desc_plainte, $confirmation);
                                                                                                    $message = 
                                                                                                        "
                                                                                                        <div class='card-body'>
                                                                                                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                                                                                                <strong>Enregistrement réussi !</strong>
                                                                                                                plainte ajouter avec succès succès.
                                                                                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        ";
                                                                                                }
                                                                                                else
                                                                                                {
                                                                                                    $erreur[] = 
                                                                                                        "
                                                                                                        <div class='card-body'>
                                                                                                            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                                                                                <strong>Erreur !</strong>
                                                                                                                'Numéro de téléphone incorrecte, exemple<b> 07 XX XX XX XX</b>.'
                                                                                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        ";
                                                                                                }      
                                                                                            } 
                                                                                            else
                                                                                            {
                                                                                                $erreur[] = "
                                                                                                    <div class='card-body'>
                                                                                                            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                                                                                <strong>Erreur !</strong>
                                                                                                                Adresse mail incorrecte <b>vide</b>.
                                                                                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    ";
                                                                                            }
                                                                                        }
                                                                                        else
                                                                                            {
                                                                                                $erreur[] = 
                                                                                                    "
                                                                                                    <div class='card-body'>
                                                                                                        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                                                                            <strong>Erreur !</strong>
                                                                                                            le champ description de la plainte est vide
                                                                                                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    ";
                                                                                            } 
                                                                                    }else
                                                                                        {
                                                                                            $erreur[] = 
                                                                                                "
                                                                                                <div class='card-body'>
                                                                                                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                                                                        <strong>Erreur !</strong>
                                                                                                        le champ heure est vide
                                                                                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                ";
                                                                                        } 
                                                                                }
                                                                                else
                                                                                        {
                                                                                            $erreur[] = 
                                                                                                "
                                                                                                <div class='card-body'>
                                                                                                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                                                                        <strong>Erreur !</strong>
                                                                                                        le champ date est vide
                                                                                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                ";
                                                                                        }  
                                                                            }
                                                                            else
                                                                                {
                                                                                    $erreur[] = 
                                                                                        "
                                                                                        <div class='card-body'>
                                                                                            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                                                                <strong>Erreur !</strong>
                                                                                                le champ lieu du SSSHU est vide
                                                                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                                                            </div>
                                                                                        </div>
                                                                                        ";
                                                                                } 
                                                                        }else
                                                                            {
                                                                                $erreur[] = 
                                                                                    "
                                                                                    <div class='card-body'>
                                                                                        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                                                            <strong>Erreur !</strong>
                                                                                            le champ nom de l'agent est vide
                                                                                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                                                        </div>
                                                                                    </div>
                                                                                    ";
                                                                            } 
                                                                    }else
                                                                        {
                                                                            $erreur[] = 
                                                                                "
                                                                                <div class='card-body'>
                                                                                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                                                        <strong>Erreur !</strong>
                                                                                        le champ thématique est vide
                                                                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                                                    </div>
                                                                                </div>
                                                                                ";
                                                                        } 
                                                                }else
                                                                        {
                                                                            $erreur[] = 
                                                                                "
                                                                                <div class='card-body'>
                                                                                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                                                        <strong>Erreur !</strong>
                                                                                        le champ classe est vide
                                                                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                                                    </div>
                                                                                </div>
                                                                                ";
                                                                        } 
                                                            }else
                                                                {
                                                                    $erreur[] = 
                                                                        "
                                                                        <div class='card-body'>
                                                                            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                                                <strong>Erreur !</strong>
                                                                                le champ nom de l'établissement scolaire est vide
                                                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                                            </div>
                                                                        </div>
                                                                        ";
                                                                }
                                                        }
                                                        else
                                                            {
                                                                $erreur[] = 
                                                                    "
                                                                    <div class='card-body'>
                                                                        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                                            <strong>Erreur !</strong>
                                                                            le champ niveau scolaire est vide
                                                                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                                        </div>
                                                                    </div>
                                                                    ";
                                                            } 
                                                    }
                                                    else
                                                        {
                                                            $erreur[] = 
                                                                "
                                                                <div class='card-body'>
                                                                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                                        <strong>Erreur !</strong>
                                                                        le champ situation professionnelle est vide
                                                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                                    </div>
                                                                </div>
                                                                ";
                                                        }
                                                }
                                                else
                                                    {
                                                        $erreur[] = 
                                                            "
                                                            <div class='card-body'>
                                                                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                                    <strong>Erreur !</strong>
                                                                    le champ âge est vide
                                                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                                </div>
                                                            </div>
                                                            ";
                                                    } 
                                            }
                                            else
                                                {
                                                    $erreur[] = 
                                                        "
                                                        <div class='card-body'>
                                                            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                                <strong>Erreur !</strong>
                                                                le champ commune est vide
                                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                            </div>
                                                        </div>
                                                        ";
                                                } 
                                        }
                                        else
                                            {
                                                $erreur[] = 
                                                    "
                                                    <div class='card-body'>
                                                        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                            <strong>Erreur !</strong>
                                                            le champ ville est vide
                                                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                        </div>
                                                    </div>
                                                    ";
                                            } 
                                    }else
                                        {
                                            $erreur[] = 
                                                "
                                                <div class='card-body'>
                                                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                        <strong>Erreur !</strong>
                                                        le champ région est vide
                                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                    </div>
                                                </div>
                                                ";
                                        }
                                }
                                else
                                    {
                                        $erreur[] = 
                                            "
                                            <div class='card-body'>
                                                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                    <strong>Erreur !</strong>
                                                    le champ pays est vide
                                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                </div>
                                            </div>
                                            ";
                                    }
                            }
                            else
                                {
                                    $erreur[] = 
                                        "
                                        <div class='card-body'>
                                            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                <strong>Erreur !</strong>
                                                le champ lieu d'habitation est vide
                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                            </div>
                                        </div>
                                        ";
                                }  
                        }
                        else
                            {
                                $erreur[] = 
                                    "
                                    <div class='card-body'>
                                        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                            <strong>Erreur !</strong>
                                            le champ email est vide
                                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                        </div>
                                    </div>
                                    ";
                            } 
                    }
                    else
                        {
                            $erreur[] = 
                                "
                                <div class='card-body'>
                                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                        <strong>Erreur !</strong>
                                        le champ téléphone est vide
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div>
                                </div>
                                ";
                        }
                }
                else
                    {
                        $erreur[] = 
                            "
                            <div class='card-body'>
                                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                    <strong>Erreur !</strong>
                                    le champ nom & prénoms est vide
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            </div>
                            ";
                    } 
            }
            else
                {
                    $erreur[] = 
                        "
                        <div class='card-body'>
                            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <strong>Erreur !</strong>
                                le champ autorisation d'utiliser voos données est vide
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                        </div>
                        ";
                } 
        }
        else
            {
                $erreur[] ="
                    <div class='card-body'>
                        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>Erreur !</strong>
                            le champ autorisation  de donnée anonyme ou non anonyme est vide
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>
                    ";
            } 
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

    <link rel="shortcut icon" type="image/x-icon" href="vendor/assets/img/favicon.jpg">

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
                            <?php 
                            if(!empty($erreur)){

                                foreach($erreur as $erreurs)
                                {
                                    echo $erreurs;
                                }
                            }
                            elseif (!empty($message)) 
                            {
                               echo $message;
                            } 
                            ?>
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
                                        <input class="form-check-input" type="radio" name="anony" id="anony" require value="Anonyme">
                                        <label class="form-check-label" for="anony">Anonyme</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="anony" id="anony_non" require value="Non-anonyme">
                                        <label class="form-check-label" for="anony_non">Non anonyme</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="form-label">Autorisez-vous l'ONG Engage & Share à utiliser vos données ?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="auth_data" id="gender_male" value="Oui">
                                        <label class="form-check-label" for="gender_male">
                                        Oui
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="auth_data" id="gender_female" value="Non, sauf nom">
                                        <label class="form-check-label" for="gender_female">
                                        Non (utiliser tout sauf mon nom)
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Nom et prénoms</label>
                                    <input type="text" class="form-control" name="fullname"  value="<?=$_POST['fullname']?>">
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Téléphone</label>
                                    <input type="text" class="form-control" name="phone"  value="<?=$_POST['phone']?>">
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email"  value="<?=$_POST['email']?>">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Lieu d'habitation</label>
                                    <textarea class="form-control"  name="habitation"><?=$_POST['habitation']?></textarea>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Pays</label>
                                    <select name="id_pays" class="form-control">
                                    <option value="">-- select pays --</option>
                                    <?php 
                                        global $db;
                                        $sql = 'SELECT * FROM pays';
                                        $query = $db->prepare($sql);
                                        $query->execute();
                                        $result = $query->fetchAll(PDO::FETCH_OBJ); 
                                        foreach($result as $results)       
                                        { 
                                    ?>
                                        <option value="<?= $results->id ?>"><?=$results->libelle ?></option>
                                    <?php 
                                        } 
                                    ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Région</label>
                                    <select name="id_region"  class="form-control">
                                    <option value="">-- select region --</option>
                                    <?php 
                                        global $db;
                                        $sql = 'SELECT * FROM region';
                                        $query = $db->prepare($sql);
                                        $query->execute();
                                        $result = $query->fetchAll(PDO::FETCH_OBJ); 
                                        foreach($result as $results)       
                                        { 
                                    ?>
                                        <option value="<?= $results->id ?>"><?=$results->libelle ?></option>
                                    <?php 
                                        } 
                                    ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Ville</label>
                                    <select name="id_ville"  class="form-control">
                                    <option value="">-- select ville --</option>
                                    <?php 
                                        global $db;
                                        $sql = 'SELECT * FROM ville';
                                        $query = $db->prepare($sql);
                                        $query->execute();
                                        $result = $query->fetchAll(PDO::FETCH_OBJ); 
                                        foreach($result as $results)       
                                        { 
                                    ?>
                                        <option value="<?= $results->id ?>"><?=$results->libelle ?></option>
                                    <?php 
                                        } 
                                    ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Commune</label>
                                    <select name="id_commune" class="form-control">
                                    <option value="">-- select commune --</option>
                                    <?php 
                                        global $db;
                                        $sql = 'SELECT * FROM commune';
                                        $query = $db->prepare($sql);
                                        $query->execute();
                                        $result = $query->fetchAll(PDO::FETCH_OBJ); 
                                        foreach($result as $results)       
                                        { 
                                    ?>
                                        <option value="<?= $results->id ?>"><?=$results->libelle ?></option>
                                    <?php 
                                        } 
                                    ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Âge</label>
                                    <select name="id_age" class="form-control">
                                    <option>-- select age --</option>
                                    <?php 
                                        global $db;
                                        $sql = 'SELECT * FROM age';
                                        $query = $db->prepare($sql);
                                        $query->execute();
                                        $result = $query->fetchAll(PDO::FETCH_OBJ); 
                                        foreach($result as $results)       
                                        { 
                                    ?>
                                        <option value="<?=$results->id ?>"><?=$results->libelle ?> ans</option>
                                    <?php 
                                        } 
                                    ?>
                                    </select>
                                </div>
                            </div>

                            <spam class=""> <h6>Cursus scolaire ==========</h6> </spam>
                            <br/><br/><br/>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Situation professionnelle</label>
                                    <select name="id_statut_pro" class="form-control">
                                        <option value="">-- select situation pro --</option>
                                        <?php 
                                            global $db;
                                            $sql = 'SELECT * FROM situation_pro';
                                            $query = $db->prepare($sql);
                                            $query->execute();
                                            $result = $query->fetchAll(PDO::FETCH_OBJ); 
                                            foreach($result as $results)       
                                            { 
                                        ?>
                                            <option value="<?= $results->id ?>"><?=$results->libelle ?></option>
                                        <?php 
                                            } 
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Niveau scolaire</label>
                                    <select name="id_nscolaire"  class="form-control">
                                        <option value="">-- select niveau scolaire --</option>
                                        <?php 
                                            global $db;
                                            $sql = 'SELECT * FROM nscolaire';
                                            $query = $db->prepare($sql);
                                            $query->execute();
                                            $result = $query->fetchAll(PDO::FETCH_OBJ); 
                                            foreach($result as $results)       
                                            { 
                                        ?>
                                            <option value="<?= $results->id ?>"><?=$results->libelle ?></option>
                                        <?php 
                                            } 
                                        ?>
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
                                    <select name="id_classe" class="form-control">
                                        <option value="">-- select classe --</option>
                                        <?php 
                                            global $db;
                                            $sql = 'SELECT * FROM classe';
                                            $query = $db->prepare($sql);
                                            $query->execute();
                                            $result = $query->fetchAll(PDO::FETCH_OBJ); 
                                            foreach($result as $results)       
                                            { 
                                        ?>
                                            <option value="<?= $results->id ?>"><?=$results->libelle ?></option>
                                        <?php 
                                            } 
                                        ?>    
                                    </select>
                                </div>
                            </div>

                            <spam class=""> <h6>Informations sur la plainte  ==========</h6> </spam>
                            <br/><br/><br/>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Thématique</label>
                                    <select name="id_thematique" class="form-control">
                                    <option value="">-- select thématique --</option>
                                        <?php 
                                            global $db;
                                            $sql = 'SELECT * FROM thematique';
                                            $query = $db->prepare($sql);
                                            $query->execute();
                                            $result = $query->fetchAll(PDO::FETCH_OBJ); 
                                            foreach($result as $results)       
                                            { 
                                        ?>
                                            <option value="<?= $results->id ?>"><?=$results->libelle?></option>
                                        <?php 
                                            } 
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Nom de l'agent qui vous a reçu</label>
                                    <input type="text" name="name_agent"  value="<?=$_POST['name_agent']?>" class="form-control">
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
                                    <input type="date" class="form-control" name="lieu_date"  value="<?=$_POST['lieu_date']?>">
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Heure à laquelle l'abus a eu lieu</label>
                                    <input type="time" class="form-control" name="lieu_heure"  value="<?=$_POST['lieu_heure']?>">
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
                                        Toutes vos informations personnelles seront confidentielles.<br/> <strong>L'ONG Engage & Share</strong> vous garantir que vos informations seront protégées.
                                    </p><br>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-6 col-12">
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" require type="radio" name="confirmation" id="confirme" value="oui">
                                        <label class="form-check-label" for="confirme">
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