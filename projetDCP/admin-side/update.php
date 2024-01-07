<?php
require_once('../controllers/EnfController.php');
require_once('../models/Enf.php');
$enfCtr=new EnfController();
$mere=new Enf();

$mere->setCIN($_POST['cin']);
$mere->setNom($_POST['nom']);
$mere->setPre($_POST['pre']);
$mere->setTel($_POST['tel']);
$mere->setAdr($_POST['adr']);
$mere->setNbenf($_POST['nbrenf']);
$mere->setNe($_POST['ne']);
$mere->setStat($_POST['stat']);
$mere->setForm($_POST['form']);
$mere->setSubv($_POST['subv']);
$mere->setSubvD($_POST['subvD']);

$enfCtr->edit($mere);
header('Location:showDB.php');

?>