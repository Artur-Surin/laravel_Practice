<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
        ]);

        $category = new Category();
        $category->title = $data['title'];

        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required',
        ]);

        $category = Category::findOrFail($id);
        $category->title = $data['title'];

        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }

    public function destroy($id)
    {
        {
            $category = Category::findOrFail($id);
            $category->delete();

            return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
        }
    }
}
