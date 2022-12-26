<?php

namespace  App\Bi;

use App\Interface\ImageResize;
use App\Traits\AspectRatio;

class Cover  implements ImageResize
{

    use AspectRatio;
    
     public $imageA , $imageB = [];

    public function resize($imageA , $imageB)
    {   
        $status = true;
        $message = "Success";
       
        $method = __METHOD__;
        //$this->pdump( $method , "Method Name");

        // $this->pdump($imageA , "Image A");
        // $this->pdump($imageB , "Image B");

        $newImageB = ["height" => 0 , "width" => 0] ;


        if($imageB["height"] > $imageA["height"] ||  $imageB["width"] > $imageA["width"] )
        {
            $newImageB = $imageB;
        }
        else{
            $status = false;
            $message = "Cover condition for image B cannot be executed .";

        }

        $data =  ["status" => $status , "message" => $message , "data" => $newImageB];

        $arr = ["name" => "Cover"  , "colorString" => "#800080"];
       return  $this->printOuput($data , $arr);
    }

}