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

    // fonction utilisateur
    function addPlainte($fullname,$username,$passwordHash,$statut,$etat)
    {
        global $db;
        $sql = "INSERT INTO users (fullname, username, pass, statut, etat, record_users) VALUES(:fullname, :username, :pass, :statut, :etat, NOW())";
        $req = $db->prepare($sql);
        $req ->bindValue(':fullname', $fullname, PDO::PARAM_STR);
        $req ->bindValue(':username', $username, PDO::PARAM_STR);
        $req ->bindValue(':pass', $passwordHash, PDO::PARAM_STR);
        $req ->bindValue(':statut', $statut, PDO::PARAM_STR);
        $req ->bindValue(':etat', $etat, PDO::PARAM_INT);
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