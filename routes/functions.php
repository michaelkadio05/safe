<?php
    require_once 'config.php';
    require_once 'connexion.php';

    // fonction utilisateur
    function getConnxeion($username)
    {
        global $db;
        $sql = 'SELECT * FROM users WHERE username = :username';
        $req = $db->prepare($sql);
        $req ->bindValue(':username', $username, PDO::PARAM_STR);
        $req->execute();
        $results = $req->fetch(PDO::FETCH_ASSOC);

        if($results)
        {
            $pass = $_POST['pass'];
            $passwordHash = $results['pass'];
            if(password_verify($pass, $passwordHash))
            {
                if($req->rowCount() > 0)
                {
                    if($results['etat'] == 'Activé')
                    {
                        if($results['statut'] == 'Actif')
                        {
                            $_SESSION['message'] =
                            "
                            <div class='card-body'>
                                <div class='alert alert-success alert-dismissible'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                <h5><i class='icon fas fa-check'></i> Réussite!</h5>
                                Connexion validée avec succès.<br/>😃😃🥳🥳👏<br/>
                                Redirection dans 3 secondes.
                                </div>
                            </div>
                            ";
                            $_SESSION['visitor_id'] = $results['id'];
                            header('refresh: 3 url=sp-visitor/');
                        }
                        elseif($results['statut'] == 'Inactif')
                        {
                            $_SESSION['erreur'] =
                            "
                            <div class='card-body'>
                                <div class='alert alert-danger alert-dismissible'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                <h5><i class='icon fas fa-ban'></i> Erreur!</h5>
                                Votre compte est inactif, merci de contacter votre supérieur.
                                </div>
                            </div>
                            ";
                        }
                    }
                    else
                    {
                        $_SESSION['erreur'] =
                    "
                    <div class='card-body'>
                        <div class='alert alert-danger alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <h5><i class='icon fas fa-ban'></i> Erreur!</h5>
                        Compte désactivé.
                        </div>
                    </div>
                    ";
                    }

                }
                else
                {
                    $_SESSION['erreur'] =
                    "
                    <div class='card-body'>
                        <div class='alert alert-danger alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <h5><i class='icon fas fa-ban'></i> Erreur!</h5>
                        Identifiant invalide.
                        </div>
                    </div>
                    ";
                }
            }
            else
            {
                $_SESSION['erreur'] =
                "
                  <div class='card-body'>
                    <div class='alert alert-danger alert-dismissible'>
                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                      <h5><i class='icon fas fa-ban'></i> Erreur!</h5>
                      Identifiant invalide.
                    </div>
                  </div>
                ";
            }
        }
        else
        {
            $_SESSION['erreur'] =
            "
              <div class='card-body'>
                <div class='alert alert-danger alert-dismissible'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  <h5><i class='icon fas fa-ban'></i> Erreur!</h5>
                  Identifiant introuvable.
                </div>
              </div>
            ";
        }
    }

    function updateUsers($id,$fullname,$username,$passwordHash,$statut,$etat)
    {
        global $db;

        $sql = "UPDATE users SET fullname='$fullname', username='$username', pass='$passwordHash', statut='$statut', etat='$etat' WHERE id='$id'";
        $req = $db->prepare($sql);
        $req->execute();

    }

    function updatePass($id,$passwordHash)
    {
        global $db;

        $sql = "UPDATE users SET pass='$passwordHash' WHERE id='$id'";
        $req = $db->prepare($sql);
        $req->execute();

    }

    // fonction plainte
    function addPlainte($anony, $auth_data, $fullname, $phone, $email, $habitation, $id_pays, $id_region, $id_ville, $id_commune, $id_age, $id_statut_pro, $id_nscolaire, $etab_scolaire, $id_classe, $id_thematique, $name_agent, $lieu_sssu, $date_lieu, $lieu_heure, $desc_plainte, $confirmation)
    {
        global $db;
        $sql = "INSERT INTO plainte (anony, auth_data, fullname, phone, email, habitation, id_pays, id_region, id_ville, id_commune, id_age, id_statut_pro, id_nscolaire, etab_scolaire, id_classe, id_thematique, name_agent, lieu_sssu, lieu_date, lieu_heure, desc_plainte, confirmation, record_plainte) 
        VALUES 
        (:anony, :auth_data, :fullname, :phone, :email, :habitation, :id_pays, :id_region, :id_ville, :id_commune, :id_age, :id_statut_pro, :id_nscolaire, :etab_scolaire, :id_classe, :id_thematique, :name_agent, :lieu_sssu, :lieu_date, :lieu_heure, :desc_plainte; :confirmation, NOW())";
        $req = $db->prepare($sql);
        $req ->bindValue(':anony',$anony, PDO::PARAM_STR); 
        $req ->bindValue(':auth_data',$auth_data, PDO::PARAM_STR);     
        $req ->bindValue(':fullname',$fullname, PDO::PARAM_STR);    
        $req ->bindValue(':phone',$phone, PDO::PARAM_STR); 
        $req ->bindValue(':email',$email, PDO::PARAM_STR); 
        $req ->bindValue(':habitation',$habitation, PDO::PARAM_STR);      
        $req ->bindValue(':id_pays',$id_pays, PDO::PARAM_INT);  
        $req ->bindValue(':id_region',$id_region, PDO::PARAM_INT);    
        $req ->bindValue(':id_ville',$id_ville, PDO::PARAM_INT);   
        $req ->bindValue(':id_commune',$id_commune, PDO::PARAM_INT);     
        $req ->bindValue(':id_age',$id_age, PDO::PARAM_INT); 
        $req ->bindValue(':id_statut_pro',$id_statut_pro, PDO::PARAM_INT);      
        $req ->bindValue(':id_nscolaire',$id_nscolaire, PDO::PARAM_INT);       
        $req ->bindValue(':etab_scolaire',$etab_scolaire, PDO::PARAM_STR);
        $req ->bindValue(':id_classe',$id_classe, PDO::PARAM_INT);    
        $req ->bindValue(':id_thematique',$id_thematique, PDO::PARAM_INT);        
        $req ->bindValue(':name_agent',$name_agent, PDO::PARAM_STR);      
        $req ->bindValue(':lieu_sssu',$lieu_sssu, PDO::PARAM_STR);     
        $req ->bindValue(':lieu_date',$date_lieu, PDO::PARAM_STR);     
        $req ->bindValue(':lieu_heure',$lieu_heure, PDO::PARAM_STR);      
        $req ->bindValue(':desc_plainte',$desc_plainte, PDO::PARAM_STR);
        $req ->bindValue(':confirmation',$confirmation, PDO::PARAM_STR);
        $req->execute();  
    }

    function updatePlainte()
    {
        global $db;

    }

    // fonction Pays
    function addPays($libelle, $etat)
    {
        global $db;
        $sql = "INSERT INTO pays (libelle, etat, record_pays) VALUES(:libelle, :etat, NOW())";
        $req = $db->prepare($sql);
        $req ->bindValue(':libelle', $libelle, PDO::PARAM_STR);
        $req ->bindValue(':etat', $etat, PDO::PARAM_STR);
        $req->execute();
            
    }

    function updatePays($id, $libelle)
    {
        global $db;

        $sql = "UPDATE pays SET libelle='$libelle' WHERE id='$id'";
        $req = $db->prepare($sql);
        $req->execute();
    }

    function getPays()
    {
        global $db;
        $sql = 'SELECT * FROM pays';
        $query = $db->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
    }