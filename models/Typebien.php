<?php

use ActiveRecord\Model as ActiveRecord;

class Typebien extends ActiveRecord {

    static $table_name = 'typebien';
    static $primary_key = 'num_tbien';
    static $foreign_key  = 'type_bien';
}

 ?>
