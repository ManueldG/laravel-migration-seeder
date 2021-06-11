<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voyage;

class VoyageController extends Controller
{
    public function index(){
        $voyages = Voyage::all();
        dump($voyages);
        return view('voyages');
    }
}
