<?php

namespace  App\Bi;

use App\Interface\ImageResize;
use App\Traits\AspectRatio;
class Contain  implements ImageResize
{

    use AspectRatio;

    public function resize($imageA , $imageB)
    {
        // $this->pdump( $imageA , "iA");
        // $this->pdump( $imageB , "iB");

        $status = true;
        $message = "Success";
       
        $method = __METHOD__;
        //$this->pdump( $method , "Method Name");

        // $this->pdump($imageA , "Image A");
        // $this->pdump($imageB , "Image B");

        $newImageB = ["height" => 0 , "width" => 0] ;

        //check for aspect ration for b 
        $aspectRatioForImageA = $this->aspectRatio($imageA["width"] , $imageA["height"]);
        $aspectRatioForImageB = $this->aspectRatio($imageB["width"] , $imageB["height"]);
        $newImageB = ["height" =>  $imageB["height"] * $aspectRatioForImageA ,
         "width" => $imageB["width"] * $aspectRatioForImageA ];
/**         //if both are greater 
        if($imageB["height"] > $imageA["height"] &&  $imageB["width"] > $imageA["width"] )
        {
            $newImageB["height"] = round($imageA["width"] * $aspectRatioForImageB);
            $newImageB["width"]  = $imageA["width"];
        }
        //if both are lesser 
        elseif($imageB["height"] < $imageA["height"] &&  $imageB["width"] < $imageA["width"]){
            $newImageB = $imageB;
        }
        // if  height is bigger  and wisth is lesser 
        elseif($imageB["height"] > $imageA["height"] &&  $imageB["width"] < $imageA["width"]){
            $newImageB["height"] = $imageA["height"];
            $newImageB["width"] = round($imageA["height"] * $aspectRatioForImageB);
        }
        //if width is bigger adn height is lesser 
        elseif($imageB["height"] < $imageA["height"] &&  $imageB["width"] > $imageA["width"]){
            $newImageB["height"] = round($imageA["width"] * $aspectRatioForImageB);
            $newImageB["width"]  = $imageA["width"];
        }

        if($newImageB['height'] > $imageA['height'] || $newImageB['width'] > $imageA['width'] ){
            $status = false;
            $message = "Cannot Rezise using Contain condition";       
        }
*/
        $data =  ["status" => $status , "message" => $message , "data" => $newImageB];

        $arr = ["name" => "Contain"  , "colorString" => "#fd5800"];
       return  $this->printOuput($data , $arr);
    }

}
