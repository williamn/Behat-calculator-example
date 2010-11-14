<?php

require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';

$path = '/path/to/your/classes';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once 'Calculator.php';

