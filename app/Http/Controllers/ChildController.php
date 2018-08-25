<?php

namespace App\Http\Controllers;

use App\Models\Child;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    public function index()
    {
        $data = Child::all();
        return response()->json(Child::all());
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Child $child)
    {
    }

    public function edit(Child $child)
    {
    }

    public function update(Request $request, Child $child)
    {
        //
    }

    public function destroy(Child $child)
    {
        //
    }
}
