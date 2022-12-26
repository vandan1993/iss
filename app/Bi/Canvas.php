<?php 
namespace  App\Bi;

use  App\Interface\ImageResize;


class Canvas
{
    private $stragey;

    public function __construct(ImageResize $stragey)
    {
        $this->stragey  = $stragey;
    }

    public function checkForRezise(array $imageA , array $imageB)
    {
         return $this->stragey->resize($imageA , $imageB);
    }
}
