<?php

namespace Shape\Quadrilaterals;

use \Shape\ShapeInterface;


class Square extends AbstractQuadrilateral implements ShapeInterface
{   
/*
|-------------------------------------------------------------------------------
| Class: Square                                                    
|-------------------------------------------------------------------------------
| Purpose: 
| Performs basic calculations on 2-D squares.
|
|
*/
    
    /**
    * Custom constructor needed.
    * Field $width & $length irrelevant for this class.
    * All sides are equal.
    * 
    * @param string/int $side
    */
    public function __construct($side)
    {
        
        parent::__construct($side, $side);   
    }   

    
    /**
    * Calculate area.
    *
    * @return string
    */
    
    public function getArea()
    {
        
        $area = pow($this->length, 2);
        
        return $area;
    }
      
    
}
  