<?php

namespace Shape\Quadrilaterals;
  
abstract class AbstractQuadrilateral
{
/*
|-------------------------------------------------------------------------------
| Class: AbstractQuadrilateral                                                         
|-------------------------------------------------------------------------------
| Purpose: 
| Performs common calculations among shapes that have four sides.
|
|
*/
    
    protected $length;
    
    protected $width;
    
    protected $shape =  [];
    
    
    /**
    * Initialize common fields
    *
    * @param string/int $width
    * @param string/int $length
    */ 
    public function __construct($width , $length)
    {
        
        $this->width = $width;
        $this->length = $length;
    }
    
    
    public abstract function getArea();

    
    /**
    * Calculate Perimeter
    * 
    * @return string
    */
    public function getPerimeter()
    {
        $perimeter = 2 * $this->length + 2 * $this->width;
        
        return $perimeter;
    }
    
    
    /**
    * Scale shape Up or Down. 
    * >1.0 is larger, <1.0 is smaller
    *
    * @param string $scale
    * @return array
    */ 
    public function scaleTo($scale)
    {
        
        $this->shape['width'] = $this->width *= $scale;
        $this->shape['length'] = $this->length *= $scale;
        
        return $this->shape;
    }
    
    
}