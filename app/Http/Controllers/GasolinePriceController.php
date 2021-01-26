<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGasolinePriceRequest;
use App\Http\Requests\UpdateGasolinePriceRequest;
use App\Models\GasolinePrice;
use App\Models\Zipcode;
use Illuminate\Http\Request;

class GasolinePriceController extends Controller
{
    // GET Method to list records
    public function index(Request $request)
    {
        if($request->has('search')):
            $gasfilter = GasolinePrice::where('codigopostal', 'like', '%'.$request->search.'%')
                        ->orwhere('municipio', $request->search)
                        ->orwhere('estado', $request->search)
                        ->get();
        else:
            $gasfilter = ['success' => true,'results' => GasolinePrice::all()];
        endif;
        return $gasfilter;
    }
    // POST insert data
    public function store(CreateGasolinePriceRequest $request)
    {
        $input = $request->all();
        GasolinePrice::create($input);
        return response()->json([
            'success' => true,
            'message' => 'Successfully created record'
        ], 200);
    }
    // GET Method return one reocrd
    public function show(GasolinePrice $gasolinePrice)
    {
        return $gasolinePrice;
    }
    // PUT Method for update records
    public function update(UpdateGasolinePriceRequest $request, GasolinePrice $gasolinePrice)
    {
        $input = $request->all();
        $gasolinePrice->update($input);
        return response()->json([
            'success' => true,
            'message' => 'Successfully updated record'
        ], 200);
    }
    // DELETE Method for destroy records
    public function destroy($id)
    {
        GasolinePrice::destroy($id);
        return response()->json([
            'success' => true,
            'message' => 'Successfully destroy record'
        ], 200);
    }

    public function searchFuelStation(Request $request)
    {
        $latitude = $request->latitude;
        $longitude = $request->longitude;

        $fuelstation = GasolinePrice::whereBetween('latitude',[$latitude-0.1,$latitude+0.1])
                        ->whereBetween('longitude',[$longitude-0.1,$longitude+0.1])
                        ->get();
        return $fuelstation;
    }

    public function searchState(Request $request)
    {
        $state = $request->state;
        $matchedState = Zipcode::where('d_estado', $state)->pluck('d_mnpio','d_mnpio');
        return view('ajaxresult', compact('matchedState'));
    }

    public function locationCoords(Request $request)
    {
        // Save state and mun inputs values
        $stateValue = $request->stateValue;
        $munValue = $request->munValue;
        // Search in db columns the matched fields
        $matchColumns = GasolinePrice::where('estado', $stateValue)->where('municipio', $munValue)->first();
        // Extract coords of tamble
        /* $lat = $matchColumns->latitude;
        $lng = $matchColumns->longitude; */
        // Return coords array
        return ['19.58616', '-99.1973'];
    }
}
