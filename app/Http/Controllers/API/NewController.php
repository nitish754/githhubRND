<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\NewFeatureService;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function __construct(private NewFeatureService $newFeatureService)
    {
        
    }
    public function glucose()
    {
        //working on changes of new feature controller 
        $this->newFeatureService->scheduleFeature();

        // finishing improvement development 
    }

    public function addMore(){

    }


}
