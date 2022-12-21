<?php
require(dirname(__FILE__) . '/Classes/Canvas.php');
use Classess\Canvas;

$constructImage = new Canvas();
$constructImage->contain();
$constructImage->cover();