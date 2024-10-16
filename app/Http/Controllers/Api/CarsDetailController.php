<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarsDetail;

class CarsDetailController extends Controller
{
    public function index()
    {
        $carsDetails=CarsDetail::get();
        return response()->json($carsDetails);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'yearofconstruction'=>'required',
            'fuel'=>'required',
            'transmission'=>'required',
            'bodywork'=>'required',
            'price'=>'required',
            'image'=>'nullable',
        ]);
        $carsDetail=new CarsDetail;
        if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('carsDetail'), $imageName);
        $carsDetail->image=$imageName;
        }
        $carsDetail->title=$request->title;
        $carsDetail->yearofconstruction=$request->yearofconstruction;
        $carsDetail->fuel=$request->fuel;
        $carsDetail->transmission=$request->transmission;
        $carsDetail->bodywork=$request->bodywork;
        $carsDetail->price=$request->price;
        
        $carsDetail->save();
        return response()->json($carsDetail);
    }
}
