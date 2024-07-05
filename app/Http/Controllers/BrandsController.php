<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Dotenv\Validator;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    
    public function index(){
        $brands = Brand::all();

        return view('brands', [
            'brands' => $brands,
        ]);
    }

    public function create(){
        $brand = New Brand();
        return view('brand', [
            'brand' => $brand,
        ]);
    }

    public function store(Request $request){

        $namefile = uniqid() . "." . $request->file('photo')->extension();
        $request->file('photo')->storeAs("public", $namefile);

        $brand = new Brand();

        $brand->photo = $namefile;
        $brand->name = $request->input('name');
        $brand->save();

        return redirect()->route('brands.index');
    }

    public function edit($id){

        $brand = Brand::find($id);
        return view('brand', [
            'brand' => $brand,
        ]);
    }

    public function update($id, Request $request){

        $brand = Brand::find($id);

        if ($request->hasFile('photo')){
            $namefile = uniqid() . "." . $request->file('photo')->extension();
            $request->file('photo')->storeAs('public', $namefile);
            $brand->photo = $namefile;
        }

        $brand->name = $request->input('name');
        $brand->save();

        return redirect()->route('brands.index');
    }

    public function destroy($id){

        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->route('brands.index');
    }
}
