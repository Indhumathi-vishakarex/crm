<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    public function perfomanceIndicator(){

    return view('performances.performance.performance-indicator');

}

public function perfomanceReview(){
       return view('performances.performance.performance');
}

public function  perfomanceAppraisal(){
        return view('performances.performance.performance-appraisal');

}

public function goalList(){
    return view('performances.goals.goal-tracking');
}


public function goalType(){
      return view('performances.goals.goal-type');
}
public function trainingList(){
      return view('performances.training.training');
}

public function trainers(){
    return view('performances.training.trainers');
}

public function trainingType(){
    return view('performances.training.training-type');
}

public function promotion(){
        return view('performances.promotion');
}

public function resignation(){
    return view('performances.resignation');
}

public function termination(){
    return view('performances.termination');
}


}