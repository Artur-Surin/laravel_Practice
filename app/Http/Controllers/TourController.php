<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::all();

        return view('tours.index', compact('tours'));
    }

    public function create()
    {
        return view('tours.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'start_date' => 'required|date',
        ]);

        $tour = new Tour();
        $tour->title = $data['title'];
        $tour->description = $data['description'];
        $tour->price = $data['price'];
        $tour->start_date = $data['start_date'];

        $tour->save();

        return redirect()->route('tours.index')->with('success', 'Tour deleted successfully.');
    }

    public function show($id)
    {
        $tour = Tour::findOrFail($id);
        return view('tours.show', compact('tour'));
    }

    public function edit($id)
    {
        $tour = Tour::findOrFail($id);
        return view('tours.edit', compact('tour'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'start_date' => 'required|date',
        ]);

        $tour = Tour::findOrFail($id);
        $tour->title = $data['title'];
        $tour->description = $data['description'];
        $tour->price = $data['price'];
        $tour->start_date = $data['start_date'];

        $tour->save();

        return redirect()->route('tours.index')->with('success', 'Tour deleted successfully.');
    }

    public function destroy($id)
    {
       {
           $tour = Tour::findOrFail($id);
           $tour->delete();

           return redirect()->route('tours.index')->with('success', 'Tour deleted successfully.');
        }
    }
}

