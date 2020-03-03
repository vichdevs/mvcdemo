<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Triangle extends Model
{
    public function surface($a, $b, $c){
        return (($a + $b + $c) / 2);
    }
    
    public function circumference($a, $b, $c){
        return ($a + $b + $c);
    }
}
