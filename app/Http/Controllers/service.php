<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class service extends Controller
{
    public function services() {
        $services = \App\Service::all();

        // dd($services);

        return view('services', compact('services'));
    }
}
