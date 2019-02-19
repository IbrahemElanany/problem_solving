<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProblemController extends Controller
{
    public function numOfSteps($input)
    {
    	if ($input > 0) {
	    	$output = ceil($input/5);
	    	return 'Min Num of steps = '.$output;
    	}else{
    		return 'input must be greater than 0';
    	}
    }
}
