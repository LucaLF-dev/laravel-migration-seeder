<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
       
        $builder = Train::where('Orario_di_partenza', '>' , '16:00:00');
         //dd($trains);
        $trains = $builder->orderBy('Azienda','desc')->get();
        // dd($trains);
        return view('guest.index', compact('trains'));
    }
}
