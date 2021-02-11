<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('front.pages.contact', compact('services'));
    }
}
