<?php

namespace App\Http\Controllers;

use App\Price;
use App\Service;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $services = Service::all();
        // $service = Service::where('id', '1')->first();
        return view('front.home', compact('services'));
        return view('front.layout', compact('services'));        
    }

    public function show($slug)
    {
        $services = Service::all();
        // $service = Service::find($id);
        $service = Service::where('slug', $slug)->first();
        // dd($service->title);
        // $prices = Price::where('service_id', $service->id)->get();
        $prices = $service->prices()->get();
        return view('front.service', compact(
            'prices',
            'services',
            'service'
        ));
    }
}
