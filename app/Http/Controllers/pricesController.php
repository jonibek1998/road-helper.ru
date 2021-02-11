<?php

namespace App\Http\Controllers;

use App\Price;
use App\Service;
use Illuminate\Http\Request;

class pricesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $prices = Price::all();

        // return view('front.layout', compact('services'));
        return view('front.pages.prices', compact('services', 'prices'));
    }
}
