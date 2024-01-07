<?php
require_once('../controllers/EnfController.php');
require_once('../models/Enf.php');

    $cin = $_POST['cin'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel = $_POST['tel'];
    $adresse = $_POST['adresse'];
    $numEnf = $_POST['numEnf'];
    $nv = $_POST['nv'];
    $etat = $_POST['etat'];
    $form = $_POST['form'];
    $subv = $_POST['subv'];
    $subvD = $_POST['subvD'];

    
    $inscription = new Enf($cin, $nom, $prenom, $tel, $adresse, $numEnf, $nv, $etat, $form, $subv, $subvD);
    $enfCtr = new EnfController();

    $res = $enfCtr->insert($inscription);

?>
