<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index() {

        // Add Trains:

        // $padova = new Train();
        // $padova->azienda = "Trenitalia";
        // $padova->codice_treno = "8314";
        // $padova->stazione_partenza = "Bologna C.le";
        // $padova->stazione_arrivo = "Padova";
        // $padova->orario_partenza = '18:20:00';
        // $padova->orario_arrivo = '20:50:00';
        // $padova->carrozze = 9;
        // $padova->ritardo = 20;
        // $padova->cancellato = 0;
        // $padova->save();

        // $napoli = new Train();
        // $napoli->azienda = "Italo";
        // $napoli->codice_treno = "8934";
        // $napoli->stazione_partenza = "Bologna C.le";
        // $napoli->stazione_arrivo = "Napoli Afragola";
        // $napoli->orario_partenza = '17:00:15';
        // $napoli->orario_arrivo = '21:30:00';
        // $napoli->carrozze = 12;
        // $napoli->ritardo = 5;
        // $napoli->cancellato = 0;
        // $napoli->save();

        $trains = Train::all();

        return view('homepage', compact('trains'));
    }
}
