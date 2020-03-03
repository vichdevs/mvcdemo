<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Circle extends Model
{
    private $pi = 3.14159;
    
    public function surface($a){
        return ($this->pi*pow($a,2));
    }
    
    public function circumference($a){
        return (2*$this->pi*$a);
    }
}
