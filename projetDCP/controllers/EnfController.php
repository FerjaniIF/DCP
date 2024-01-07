<?php
include_once('../database/config.php');

class EnfController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(Enf $a) {
    try {
        $query = "INSERT INTO inscri(cin,nom,pre,tel,adr,nbenf,ne,stat,form,subv,subvD) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);
        $aryy = array($a->getCin(), $a->getNom(), $a->getPre(), $a->getTel(), $a->getAdr(), $a->getNbenf(), $a->getNe(), $a->getStat(), $a->getForm(), $a->getSubv(), $a->getSubvD());
        $res->execute($aryy);
        
            header("Location: showDB.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage(); 
        if ($e->getCode() == '23000') { // 23000:violation du contraint pour cin  
            echo '<script>alert("Oops! CIN deja existe.");';
            echo 'window.location.href = "form.html";</script>';
            exit();
        } 
    }
}


function getEnf($cin){
    $query = "SELECT * FROM inscri WHERE cin = ?";
    $res = $this->pdo->prepare($query);
    $res->execute([$cin]);
    $array = $res->fetch();
    return $array;
}

function delete($cin) {
    $query = "DELETE FROM inscri WHERE cin=?";
    $res = $this->pdo->prepare($query);
    return $res->execute([$cin]);
}

function liste(){
$query = "select * from inscri";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}

function edit(Enf $a){
    $query = "UPDATE inscri SET nom=?,pre=?,tel=?,adr=?,nbenf=?,ne=?,stat=?,form=?,subv=?,subvD=? WHERE cin=?";
    $res = $this->pdo->prepare($query);
    $res->execute([$a->getCin(),$a->getNom(),$a->getPre(),$a->getTel(),$a->getAdr(),$a->getNbenf(),$a->getNe(),$a->getStat(),$a->getForm(),$a->getSubv(),$a->getSubvD()]);
}


function cinExiste($cin) {
    $query = "SELECT COUNT(*) as count FROM inscri WHERE cin = ?";
    $prepq = $this->pdo->prepare($query);
    $prepq->execute([$cin]);
    $result = $prepq->fetch();

    return ($result['count'] > 0);
}

function Nsearch() {
    if(isset($_GET['searchN'])) {
        $n = $_GET['searchN'];
        $query = "SELECT * FROM inscri WHERE cin = :n";
        $result = $this->pdo->prepare($query);
        $result->bindParam(':n', $n); // Use $n instead of $cin
        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        return $result->fetchAll();
    }
    return []; 
}




}
?>


	