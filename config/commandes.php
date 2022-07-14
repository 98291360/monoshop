<?php
function ajouter( $image, $name, $prix, $desc){
	if(require("connect.php")){
		$req = $db->prepare("INSERT INTO Produits(image, name, prix, description) VALUES(?, ?, ?, ?) ");
		$params=array($image, $name, $prix, $desc);
		$req->execute($params);
		$req ->closeCursor();
	}

}
function afficher(){
		if(require("connect.php")){
			$req=$db->prepare("SELECT * FROM Produits ORDER BY id DESC");
			$req->execute();
			$data = $req->fetchAll(PDO::FETCH_OBJ);
			return $data;
			$req->closeCursor();
		}
}
function supprimer($id){

    if(require("connect.php")){
    	$req=$db->prepare("DELETE * FROM Produits WHERE id = ?");
    	$req->execute(array($id));
    }
}

 function query() {
 	if(require("connect.php")){
 if (isset($_GET['id'])) {
	$produit = $db->prepare(' select id from Produits where id = :id', array('id' => $_GET['id']));
	$produit = query($produit);
	var_dump($produit);
}else{
	die("vous n'avez selectionner de produit à ajouter au pannier");
}
}
}

?>