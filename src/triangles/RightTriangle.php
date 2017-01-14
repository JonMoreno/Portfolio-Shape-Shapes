<?php

namespace Shape\Triangles;

use \Shape\ShapeInterface;


class RightTriangle extends AbstractTriangle implements ShapeInterface
{
/*
|-------------------------------------------------------------------------------
| Class: RightTriangle                                                     
|-------------------------------------------------------------------------------
| Purpose: 
| Performs basic calculations on 2-D right triangles.
|
|--> :Convention for Right triangle sides:
|
|               |\
| height -----> | \
|               |  \
|        $sideA |   \  $sideC
|               |____\
|
|                $sideB
*/  
   
    
    protected $hypotenuse; 
    
    
    /**
    * Please, follow convention above when initializing
    * the fields(sides) of the triangle.
    * 
    * @param string/int $sideA
    * @param string/int $sideB
    * @param string/int $sideC
    */
    public function __construct($height, $base)
    {
        
        $this->sideA  = $height;
        $this->sideB  = $base;
        $this->setHypotenuse($height, $base); // sideC
        $this->height = $height;
    }
    
    
    /**
    * Calculates hypotenuse of right triangle
    * Works in correlation to getPerimeter().
    *
    * @param string/int $height
    * @param string/int $base
    */
    private function setHypotenuse($height, $base)
    {
        
        $this->sideC = hypot($height, $base);
    }
    
    
    
    
}
  