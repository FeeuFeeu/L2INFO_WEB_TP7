<?php

  require_once 'Manager.php';

  class ProduitManager extends Manager {

	public function getProduit($id_produit) {
		$db = $this->connectDatabase();

		//$res = ''; // TODO: récupérer les informations du produit dans $res
		$res = $db->query(
			"select nom,prix,description,specificite,img0,img1,img2,img3,libelle 
			from produits inner join catégories on catégories.id=produits.id_categorie
			where produits.id=" . $id_produit
			//"select nom from produits"
		);
		return $res;
	}

}
