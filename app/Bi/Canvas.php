<?php 
namespace  App\Bi;

use  App\Interface\ImageResize;

class Canvas implements ImageResize
{
    public function contain() {
        echo __METHOD__;
      }
       public function cover() {
        echo __METHOD__;
      }
    
}
