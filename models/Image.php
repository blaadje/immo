<?php

use ActiveRecord\Model as ActiveRecord;

class Image extends ActiveRecord {

    static $table_name = 'image';
    static $foreign_key = 'num_bien';
}

 ?>
