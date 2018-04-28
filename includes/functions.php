<?php
function chargerClasse($classname)
{
	require 'models/'.$classname.'.php';
}
spl_autoload_register('chargerClasse');
require_once 'app/start.php';

function cut($commentaires){
	if (strlen($commentaires) > 25) {
		$stringCut = substr($commentaires, 0, 25);
		$commentaires = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
		return $commentaires;
	}
}

function countBiens(){
	$biens= Bien::count();
	echo $biens;
}

function jafficheById($id){

    $biens= Bien::all(array('conditions' => array('id_bien = ?', $id)));

	foreach ($biens as $resultBien) {
		$nbImage = count($resultBien->image);
		function nbImage($nbImage){
			if ($nbImage > 1){
				return $nbImage.' images';
			}
			else{
				return $nbImage.' image';
			}

		}
		echo '<div class="bien">';
		echo '<div class="content">';
        echo '<div class="nbImage"><img src="images/eye.svg"><span>'.nbImage($nbImage).'</span></div>';
		echo '<div class="images">';

		foreach ($resultBien->image as $image){
			echo '<div class="selectedFirst">';
				echo '<div class="image" style="background: url(images/'.$image->num_bien.'/'.$image->nom_img.');background-size: cover;"></div>';
			echo "</div>";
		}
		echo '</div>';

		echo '</div>';
		echo "<aside>";
			echo '<div class="telephone"><img src="images/phone.svg"><span>'.$resultBien->vendeur->telephone_vendeur.'</span></div>';
			echo '<form method="POST" action="">';
			echo '<h2>Reservez une visite</h2>';
			echo '<input type="text" placeholder="nom" required>';
			echo '<input type="text" placeholder="email" required>';
			echo '<input type="text" placeholder="telephone" required>';
			echo '<input type="date" min="'.date("Y-m-d").'">';
            echo '<input type="time" name="limittime" list="limittimeslist" step="0.001" min="09:00" required>';
            echo '<datalist id="limittimeslist">';
            echo '<option value="06:40">';
            echo '<option value="08:24">';
            echo '<option value="12:31:30">';
            echo '</datalist>';
			echo '<input type="submit" Value="Contacter">';
			echo '</form>';
			echo "<hr>";
			echo '<p>Ce bien est : '.$resultBien->statut->libelle_statut.'</p>';

		echo "</aside>";
        echo '<div class="infos">';
    	echo '<span>Etat : '.$resultBien->etat->libelle_etat.'</span>';
		echo '<span>'.$resultBien->meuble->libelle_meuble.'</span>';
		echo '<span>'.$resultBien->superficie_bien.' m2</span>';
		echo '<span>'.$resultBien->nbpieces_bien.' pieces</span>';
		echo '<h3>'.$resultBien->prix_bien.' $</h3>';
		echo '<p>'.$resultBien->commentaires_bien.'</p>';
		echo '</div>';
        echo '</div>';

    }

}

function connection($email, $password){
	$client = Client::find(array('conditions' => array('mail_client = ? and password = ?', $email, $password)));
	if ($client != null) {
		$_SESSION['email'] = $client->mail_client;
		$_SESSION['password'] = $client->password;
		$_SESSION['nom'] = $client->nom_client;
		echo'<script>location.href=\'index.php\'</script>';
	}
	else {
		echo 'Erreur d\'identification';
	}
}
?>
