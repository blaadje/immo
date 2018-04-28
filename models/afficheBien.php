<?php

class afficheBien{

	public function __construct(){
		$this -> biens = Bien::find('all', array('order' => 'id_bien desc'));
	}

	public function getBien(){
		foreach ($this->biens as $resultBien) {
			$image = $resultBien->image[0];
			echo '<a href="lien.php?id='.$resultBien->id_bien.'">';
			echo '<div class="bien">';
			echo '<div class="conteneurImg"><div class="image" style="background: url(images/'.$image->num_bien.'/'.$image->nom_img.')">'.$resultBien->typebien->libelle_tbien.'</div></div>';
			echo '<h2>'.cut($resultBien->commentaires_bien).'<h2>';
			echo '<h3>'.$resultBien->prix_bien.' $</h3>';
			echo '</div>';
			echo '</a>';
	    }
	}
}
 ?>
