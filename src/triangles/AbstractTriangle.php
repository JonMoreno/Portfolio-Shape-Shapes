<?php

namespace Shape\Triangles;
  

abstract class AbstractTriangle
{
/*
|-------------------------------------------------------------------------------
| Class: AbstractTriangle                                                       
|-------------------------------------------------------------------------------
| Purpose: 
| Performs common calculations among shapes that have three sides.
|
|
*/
    
    
    protected $sideA;   
    
    protected $sideB;//Base
    
    protected $sideC; 
    
    protected $height;
    
    protected $shape =  [];
    
    
    /**
    * All triangles.
    * Base and height must be given.
    * 
    * @return type string
    */
    public function getArea()
    {
        
        return $this->height * $this->sideB / 2;
    }
    
    
    /**
    * Calculate Perimeter
    * 
    * @return string
    */
    public function getPerimeter()
    {
                
        return $this->sideA + $this->sideB + $this->sideC;
    }
    
    
    /**
    * Sacle shape Up or Down. 
    * >1.0 is larger, <1.0 is smaller
    *
    * @param string $scale
    * @return array
    */
    public function scaleTo($scale)
    {
        
        $this->shape['sideA'] = $this->sideA *= $scale;
        $this->shape['sideB'] = $this->sideB *= $scale;
        $this->shape['sideC'] = $this->sideC *= $scale;
        
        return $this->shape;
    }
    
    
}