<?php

namespace Shape\Triangles;

use \Shape\ShapeInterface;


class EquilateralTriangle extends AbstractTriangle implements ShapeInterface
{
/*
|-------------------------------------------------------------------------------
| Class: EquilateralTriangle                                                       
|-------------------------------------------------------------------------------
| Purpose: 
| Performs basic calculations on 2-D Equilateral Triangles
|
||--> :Convention for Equilateral triangle sides:
|
|
|               $sideA /|\
|                     / | \ $sideC
|         $height------>|  \
|                   /___|___\
|                     $sideB 
*/  
    
       
    /**
    * Please, follow convention above when initializing
    * the fields(sides) of the triangle.
    * 
    * @param string/int $sideA
    * @param string/int $sideB
    * @param string/int $sideC
    */
    public function __construct($side)
    {
        
        $this->sideA = $side;
        $this->sideB = $side;
        $this->sideC = $side;
        $this->setHeight($side);
    }

    
   /**
    * Calculates height of shape.
    * Works in correlation to getArea().
    * 
    * @param string/int $side
    */
    private function setHeight($side)
    {
        $this->height = $side * sqrt(3) / 2;
    }
    
    
    
 
    
}