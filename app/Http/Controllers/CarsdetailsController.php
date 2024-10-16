<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarsDetail;

class CarsdetailsController extends Controller
{
    public function index()
    {
        $carsDetails=CarsDetail::get();
        return view('cars.index',compact('carsDetails'));
    }
    public function create()
    {
        return view('cars.create');
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
            'image'=>'required',
        ]);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('carsDetail'), $imageName);
        $carsDetail=new CarsDetail;
        $carsDetail->title=$request->title;
        $carsDetail->yearofconstruction=$request->yearofconstruction;
        $carsDetail->fuel=$request->fuel;
        $carsDetail->transmission=$request->transmission;
        $carsDetail->bodywork=$request->bodywork;
        $carsDetail->price=$request->price;
        $carsDetail->image=$imageName;
        $carsDetail->save();
        return redirect()->route('carsdetail.index')->withCreate('Details added successfully!');
    }
    public function edit($id)
    {
        $carsDetail=CarsDetail::where('id',$id)->first();
        return view('cars.edit',compact('carsDetail'));
    }
    public function update(Request $request,$id)
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
        $carsDetail=CarsDetail::where('id',$id)->first();
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
        return redirect()->route('carsdetail.index')->withCreate('Details updated successfully!');
    }
    public function destroy($id)
    {
        $carsDetails=CarsDetail::where('id',$id)->first();
        $carsDetails->delete();
        return back()->withCreate('Deleted added successfully!');
    }
}
