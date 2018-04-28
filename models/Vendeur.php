<?php

use ActiveRecord\Model as ActiveRecord;

class Vendeur extends ActiveRecord {

    static $table_name = 'vendeur';
    static $primary_key = 'mail_vendeur';
    static $foreign_key  = 'mail_vendeur';
}

 ?>
