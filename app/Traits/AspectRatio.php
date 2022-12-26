<?php
namespace  App\Traits;

/**
 * 
 */
trait AspectRatio
{
 
  public $color = "#00fa9a";

  public function aspectRatio($width ,$height)
  {
        return $width/$height;
  }

   public function pdump($value , $message = "" ){

      echo "<pre style='color:".$this->color.";background-color:black; padding:1px;'><p style='margin-left:5px'>Debug Message :- " . $message ."</p>"  ;
      
      $a = var_dump($value) ;
      echo  "<p style='margin-left:5px'>".$a."</p></pre>";
     // echo "<br>";
   }

   function printOuput($data , $arr)
{
      $name = $arr['name'] ?? __METHOD__ ;
      $colorString = $arr['colorString'] ?? "#fd5800";

      if($data['status']) {
            $preClass = "#177245";
            unset($data['status']);
      }else{
            $preClass = "#dc143c ";
            unset($data['status']); unset($data['data']);
      }  

    echo "<pre style='color:".$preClass.";background-color:white;'>
    <span style='color:".$colorString."'>
==============================================================
    Output For ".$name."
==============================================================</span><br>
";
    print_r($data);
    echo "</pre>";echo "<hr style='background-color:#0000cd;height:2px'>";
}
  
}
