<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Circle;

class CircleCntrl extends Controller
{
    private $circle;
    
    public function __construct(){
        $this->circle = new Circle;
    }
    
    public function index($a){
        
        if(!is_numeric($a)){
            echo json_encode(['error' => 'kindly provide numeric value']); die;
        }
        
        $calculate = [
            'type' => 'circle',
            'radius' => round($a,2),
            'surface' => round($this->circle->surface($a),2),
            'circumference' => round($this->circle->circumference($a),2)
        ];
        
        echo json_encode($calculate, JSON_PRESERVE_ZERO_FRACTION);
    }
}
