<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Triangle;

class TriangleCntrl extends Controller
{   
    private $triangle;
    
    public function __construct(){
        $this->triangle = new Triangle;
        
    }
    
    public function index($a, $b, $c){
        
        if(!is_numeric($a) || !is_numeric($b) || !is_numeric($c)){
            echo json_encode(['error' => 'kindly provide numeric value']); die;
        }
        
        $calculate = [
            'type' => 'triangle',
            'a' => round($a,2),
            'b' => round($b,2),
            'c' => round($c,2),
            'surface' => round($this->triangle->surface($a, $b, $c),2),
            'circumference' => round($this->triangle->circumference($a, $b, $c),2)
        ];
        
        echo json_encode($calculate, JSON_PRESERVE_ZERO_FRACTION);
    }
    
}
