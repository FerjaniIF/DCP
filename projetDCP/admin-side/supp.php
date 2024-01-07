<?php
require_once('../controllers/EnfController.php');

if (isset($_GET['cin'])) {
    $oid = $_GET['cin']; 
    $enfCtr = new EnfController();
    $enfCtr->delete($cin);
    header('Location: showDB.php');
    exit;
}
?>
