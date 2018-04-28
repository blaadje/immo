<?php

use ActiveRecord\Model as ActiveRecord;

class Meuble extends ActiveRecord {

    static $table_name = 'meuble';
    static $primary_key = 'id_meuble';
    static $foreign_key  = 'id_meuble';
}

 ?>
