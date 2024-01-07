<?php

class Enf {
private $cin,$nom,$pre,$tel,$adr,$nbenf,$ne,$stat,$form,$subv,$subvD;
function __construct($cin="",$nom="",$pre="",$tel="",$adr="", $nbenf="",$ne="",$stat="",$form="",$subv="",$subvD="") {
	
    $this->cin=$cin;
    $this->nom=$nom;
    $this->pre=$pre;
    $this->tel=$tel;
    $this->adr=$adr;
    $this->nbenf=$nbenf;
    $this->ne=$ne;
    $this->stat=$stat;
    $this->form=$form;
    $this->subv=$subv;
    $this->subvD=$subvD;
}

public function getCIN(){
	return $this->cin;
}

public function getNom(){
	return $this->nom;
}

public function getPre(){
	return $this->pre;
}

public function getTel(){
	return $this->tel;
}

public function getAdr(){
	return $this->adr;
}

public function getNbenf(){
	return $this->nbenf;
}

public function getNe(){
	return $this->ne;
}

public function getStat(){
	return $this->stat;
}

public function getForm(){
	return $this->form;
}

public function getSubv(){
	return $this->subv;
}

public function getSubvD(){
	return $this->subvD;
}

public function setCIN($cin){
	$this->cin = $cin;
}

public function setNom($nom){
	$this->nom = $nom;
}

public function setPre($pre){
	$this->pre = $pre;
}

public function setTel($tel){
	$this->tel = $tel;
}

public function setAdr($adr){
	$this->adr = $adr;
}

public function setNbenf($nbenf){
	$this->nbenf = $nbenf;
}

public function setNe($ne){
	$this->ne = $ne;
}

public function setStat($stat){
	$this->stat = $stat;
}

public function setForm($form){
    $this->form = $form; 
}

public function setSubv($subv){
	$this->subv = $subv;
}

public function setSubvD($subvD){
	$this->subvD = $subvD;
}
    

	
}?>