<?php 

namespace  Classess;
require($_SERVER['DOCUMENT_ROOT'].'/Interface/ImageResize.php');

use  Interface\ImageResize;

class Canvas implements ImageResize
{
    public function contain() {
        echo __METHOD__;
      }
       public function cover() {
        echo __METHOD__;
      }
    
}
