<?php

use ActiveRecord\Model as ActiveRecord;

class Bien extends ActiveRecord {

    static $table_name = 'bien';
    static $primary_key = 'id_bien';
    static $foreign_key = 'mail_vendeur';
    static $has_one = array(
        array('vendeur', 'primary_key' => 'mail_vendeur', 'foreign_key' => 'mail_vendeur'),
        array('statut', 'primary_key' => 'id_statut', 'foreign_key' => 'id_statut'),
        array('etat', 'primary_key' => 'id_etat', 'foreign_key' => 'id_etat'),
        array('meuble', 'primary_key' => 'id_meuble', 'foreign_key' => 'id_meuble'),
        array('typebien', 'primary_key' => 'type_bien', 'foreign_key' => 'num_tbien')
    );
    static $has_many = array(
        array('image', 'foreign_key' => 'num_bien')
    );
}
 ?>
