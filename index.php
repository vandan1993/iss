<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Bi\Canvas;
use App\Bi\Contain;
use App\Bi\Cover;


/**
 * ==================================
 * For Contain Implementation
 * =================================
 * 
 */

$constructImage = new Canvas(new Contain);

$imageA = ['width' => 250, 'height' => 500];
$imageB = ['width' => 500, 'height' => 90];
$contain = $constructImage->checkForRezise($imageA , $imageB);
echo($contain );
die();
// $imageA = ['width' => 180, 'height' => 180];
// $imageB = ['width' => 360, 'height' => 200];
// $contain = $constructImage->checkForRezise($imageA , $imageB);
// echo($contain );

// $imageA = ['width' => 180, 'height' => 250];
// $imageB = ['width' => 100, 'height' => 500];
// $contain = $constructImage->checkForRezise($imageA , $imageB);
// echo($contain );

// $imageA = ['width' => 180, 'height' => 250];
// $imageB = ['width' => 150, 'height' => 245];
// $contain = $constructImage->checkForRezise($imageA , $imageB);
// echo($contain );


/**
 * ==================================
 * For Cover Implementation
 * =================================
 * 
 */

$constructImage = new Canvas(new Cover);

$imageA = ['width' => 250, 'height' => 500];
$imageB = ['width' => 500, 'height' => 90];
$cover = $constructImage->checkForRezise($imageA , $imageB);
echo($cover );

// $imageA = ['width' => 180, 'height' => 180];
// $imageB = ['width' => 360, 'height' => 200];
// $cover = $constructImage->checkForRezise($imageA , $imageB);
// echo($cover );

// $imageA = ['width' => 180, 'height' => 250];
// $imageB = ['width' => 100, 'height' => 500];
// $cover = $constructImage->checkForRezise($imageA , $imageB);
// echo($cover );

// $imageA = ['width' => 180, 'height' => 250];
// $imageB = ['width' => 150, 'height' => 245];
// $cover = $constructImage->checkForRezise($imageA , $imageB);
// echo($cover );

