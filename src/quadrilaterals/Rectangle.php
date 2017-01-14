<?php

namespace Shape\Quadrilaterals;

use \Shape\ShapeInterface;


class Rectangle extends AbstractQuadrilateral implements ShapeInterface
{
/*
|-------------------------------------------------------------------------------
| Class: Rectangle                                                        
|-------------------------------------------------------------------------------
| Purpose: 
| Performs basic calculations on 2-D Rectangles.
|
|
*/  
    
    /**
    * Calculate area.
    * 
    * @return string
    */
    public function getArea()
    {

        $area = $this->length * $this->width;
        
        return $area;
    }
   
    
}
  