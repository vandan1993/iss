<?php 
namespace  Classess;

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
