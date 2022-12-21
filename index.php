<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Bi\Canvas;

$constructImage = new Canvas();
$constructImage->contain();
$constructImage->cover();