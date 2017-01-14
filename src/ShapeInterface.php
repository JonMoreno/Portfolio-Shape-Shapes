<?php

namespace Shape;

interface  ShapeInterface
{
/*
|-------------------------------------------------------------------------------
| Class: ShapeInterface                                                       
|-------------------------------------------------------------------------------
| Purpose: 
| Force implementation on classes being build as 2-D Shapes.
|
|
*/  
    
    public function getArea();
    
    
    public function getPerimeter();
    
    
    public function scaleTo($scale);
    
    
}
  