<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PlantsController extends Controller
{
    public function index()
    {
        //fetch all data
        $plants = plants::all();
        return view('plants/index')->with('plants',$plants);
    }
    public function show(plants $plantId)
    {
        return view('plants/show')->with('plants',$plantId);
    }
    public function create()
    {
        return view('plants/create');
    }
    public function store()
    {
        $this->validate(request(),[
            'name' => 'required',
            'description' => 'required'
        ]);

        $data = request()->all();

        $plants = new plants();
        $plants->name = $data['name'];
        $plants->description = $data['description'];
        $plants->completed = false;

        $plants->save();

        session()->flash('message','Plant Added Successfully!');

        return redirect('/plants');
    }
    public function edit(plants $plantId)
    {
        return view('plants/edit')->with('plants',$plantId);
    }
    public function update(plants $plantId)
    {
        $this->validate(request(),[
            'name' => 'required',
            'description' => 'required'
        ]);

        $data = request()->all();

        $plantId->name = $data['name'];
        $plantId->description = $data['description'];
        $plantId->save();

        session()->flash('message','Plant Updated Successfully!');

        return redirect('/plants');
    }
    public function destroy(plants $plantId)
    {
        $plantId->delete();

        session()->flash('message','Plant Deleted Successfully!');

        return redirect('/plants');
    }
    public function complete(plants $plantId)
    {
        $plantId->completed = true;
        $plantId->save();

        session()->flash('message','Plant Completed Successfully!');
        return redirect('/completed');
    }
}
