<?php

use ActiveRecord\Model as ActiveRecord;

class Etat extends ActiveRecord {

    static $table_name = 'etat';
    static $primary_key = 'id_etat';
    static $foreign_key  = 'id_etat';
}

 ?>
