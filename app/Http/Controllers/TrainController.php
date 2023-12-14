<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
       
        $trains= Train::where('Orario_di_partenza', '>' , '16:00:00')->orderBy('Azienda','desc')->get();
         //dd($trains);
    
      
        return view('guest.index', compact('trains'));
    }
}
