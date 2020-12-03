<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class pageController extends BaseController
{
     public function spa() {
        return view('pages.spa');
     }

 
}
