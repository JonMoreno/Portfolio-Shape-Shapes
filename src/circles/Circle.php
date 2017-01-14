<?php

namespace Shape\Circles;

use \Shape\ShapeInterface;


class Circle implements ShapeInterface
{
/*
|-------------------------------------------------------------------------------
| Class: Circle                                                          
|-------------------------------------------------------------------------------
| Purpose: 
| Performs basic calculations on 2-D Circles.
|
|
*/
    
    protected $radius;
    
    
    /**
    * Radius not the diameter must be given.
    * Class uses the radius for its calculations.
    *
    * @param string/int $radius
    */
    public function __construct($radius)
    {
        
        $this->radius = $radius;
    }
    
    /**
    * Calculate area. 
    *
    * @return type string
    */
    public function getArea()
    {
        
        $area = M_PI * pow($this->radius, 2);
        
        return $area;
    }
   
    
    /**
    * Calculate the Perimeter/Circumference. 
    *
    * @return type string
    */
    public function getPerimeter()
    {
        
        $circumference = 2 * M_PI * $this->radius;
        
        return $circumference;
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
        
        $shape['radius'] = $this->radius *= $scale;
        
        return $shape;
    }
    
       
    
}