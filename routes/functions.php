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
    function addPlainte($anony,$auth_data,$fullname,$phone,$email,$habitation,$iDpays,$iDregion,$iDville,$iDcommune,$iDage,$iDstatut_pro,$iDnscolaire,$etab_scolaire,$iDclasse,$iDthematique,$name_agent,$lieu_sssu,$lieu_date,$lieu_heure,$desc_plainte,$confirmation)
    {
        global $db;
        $sql = "INSERT INTO plainte (anony,auth_data,fullname,phone,email,habitation,iDpays,iDregion,iDville,iDcommune,iDage,iDstatut_pro,iDnscolaire,etab_scolaire,iDclasse,iDthematique,name_agent,lieu_sssu,lieu_date,lieu_heure,desc_plainte,confirmation, record_plainte) VALUES(:anony,:auth_data,:fullname,:phone,:email,:habitation,:iDpays,:iDregion,:iDville,:iDcommune,:iDage,:iDstatut_pro,:iDnscolaire,:etab_scolaire,:iDclasse,:iDthematique,:name_agent,:lieu_sssu,:lieu_date,:lieu_heure,:desc_plainte; :confirmation, NOW())";
        $req = $db->prepare($sql);
        $req ->bindValue(':anony',$anony, PDO::PARAM_STR); 
        $req ->bindValue(':auth_data',$auth_data, PDO::PARAM_STR);     
        $req ->bindValue(':fullname',$fullname, PDO::PARAM_STR);    
        $req ->bindValue(':phone',$phone, PDO::PARAM_STR); 
        $req ->bindValue(':email',$email, PDO::PARAM_STR); 
        $req ->bindValue(':habitation',$habitation, PDO::PARAM_STR);      
        $req ->bindValue(':iDpays',$iDpays, PDO::PARAM_INT);  
        $req ->bindValue(':iDregion',$iDregion, PDO::PARAM_INT);    
        $req ->bindValue(':iDville',$iDville, PDO::PARAM_INT);   
        $req ->bindValue(':iDcommune',$iDcommune, PDO::PARAM_INT);     
        $req ->bindValue(':iDage',$iDage, PDO::PARAM_INT); 
        $req ->bindValue(':iDstatut_pro',$iDstatut_pro, PDO::PARAM_INT);      
        $req ->bindValue(':iDnscolaire',$iDnscolaire, PDO::PARAM_INT);       
        $req ->bindValue(':etab_scolaire',$etab_scolaire, PDO::PARAM_STR);
        $req ->bindValue(':iDclasse',$iDclasse, PDO::PARAM_INT);    
        $req ->bindValue(':iDthematique',$iDthematique, PDO::PARAM_INT);        
        $req ->bindValue(':name_agent',$name_agent, PDO::PARAM_STR);      
        $req ->bindValue(':lieu_sssu',$lieu_sssu, PDO::PARAM_STR);     
        $req ->bindValue(':lieu_date',$lieu_date, PDO::PARAM_STR);     
        $req ->bindValue(':lieu_heure',$lieu_heure, PDO::PARAM_STR);      
        $req ->bindValue(':desc_plaint',$desc_plaint, PDO::PARAM_STR);
        $req ->bindValue(':confirmation',$confirmation, PDO::PARAM_STR);
        $req->execute();  
    }

    function updatePlainte()
    {
        global $db;

    }

    // fonction Pays
    function addPays($libelles)
    {
        global $db;

        $sql = "INSERT INTO structure (libelles,libdate) VALUES(:libelles,NOW())";
        $req = $db->prepare($sql);
        $req ->bindValue(':libelles', $libelles, PDO::PARAM_STR);
        $req->execute();
            
    }

    function updatePays($id,$libelles)
    {
        global $db;

        $sql = "UPDATE structure SET libelles='$libelles' WHERE id='$id'";
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