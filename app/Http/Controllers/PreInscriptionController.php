<?php

namespace App\Http\Controllers;

use App\Models\PreInscription;
use Illuminate\Http\Request;

class PreInscriptionController extends Controller
{



    public function index()
    {
        $items = PreInscription::all();
        return view("preinscription.index" , compact('items'));
    }
}
