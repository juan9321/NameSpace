<?php

require 'vendor/autoload.php';

use Implements\Login_Implements;
use Extends\Login_Extends;

$login = new Login_Implements();
$login->executar('implements', '123');

$login2 = new Login_Extends();
$login2->executar('extends', '123');