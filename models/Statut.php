<?php

use ActiveRecord\Model as ActiveRecord;

class Statut extends ActiveRecord {

    static $table_name = 'statut';
    static $primary_key = 'id_statut';
    static $foreign_key  = 'id_statut';
}

 ?>
