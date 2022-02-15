
<?php

require_once "Utils/Validations.php";
require_once 'Controllers/CalculatorController.php';

use Validations\Validate;

$calculate = new CalculatorController(Validate::Year($argv[1]));
$calculate->GenerateData();
$calculate->CreateCsv();
