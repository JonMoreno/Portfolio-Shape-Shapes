<?php
  
namespace Shape\Quadrilaterals;

use \Shape\ShapeInterface;


class Parallelogram extends AbstractQuadrilateral implements ShapeInterface
{
/*
|-------------------------------------------------------------------------------
| Class: Parallelogram                                                          
|-------------------------------------------------------------------------------
| Purpose: 
| Performs basic calculations on 2-D Parallelograms.
|
| Convention for parallelogram sides:
| 
|
|                    $sideB
|                  __________________
|                 /|                /
|                / |<-- $height    /
|      $sideA   /  |              /
|              /___|_____________/
*/
    
    
    // Additional property
    protected $height;
    
    
    /**
    * Custom constructor needed.
    * Initialize fields.
    * 
    * @param string/int $sideA
    * @param string/int $sideB
    * @param string/int $height
    */
    public function __construct($sideA, $sideB, $height = null)
    {
        
        parent::__construct($sideA, $sideB);
        $this->height = $height;
    }
    
    
    /**
    * Calculate area.
    *
    * @return string
    */
    public function getArea()
    {
        if(is_null($this->height)) {
            throw new Exception(
                '$height property not initialized for getArea() to operate: '
               .'HINT: $height can be past via class constructor() as third arg'
                );
        }

        $area = $this->length * $this->height;
        
        return $area;
    }
     
    
}
  