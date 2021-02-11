<?php

namespace App\Http\Controllers\admin;

use App\Service;
use App\Price;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PricesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = Price::all();
        return view('admin.prices.index', compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::pluck('title', 'id')->all();
        return view('admin.prices.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required',
            'service_id' => 'required'
        ]);

        $price = Price::create($request->all());
        $price->setService($request->get('service_id'));

        return redirect('admin/prices');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $price = Price::find($id);
        $services = Service::pluck('title', 'id')->all();
        return view('admin.prices.edit', compact(
            'price',
            'services'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $price = Price::find($id);
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required'
        ]);
        $price->edit($request->all());
        $price->setService($request->get('service_id'));

        return redirect('admin/prices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Price::find($id)->delete();

        return redirect()->back();
    }
}
