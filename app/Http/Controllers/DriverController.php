<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::orderBy('id', 'desc')->simplePaginate(10);
        return view('driver.index', compact('drivers'));
    }

    public function create(Driver $driver)
    {
        return view('driver.create', compact('driver'));
    }

    public function store(Request $request)
    {
        $driver = new Driver($request->all());
        $driver->save();
        return redirect()->route('driver.index');
    }

    public function destroy(Driver $driver)
    {
        $driver->delete();
        return redirect()->route('driver.index');
    }

    public function edit(Driver $driver)
    {
        return view('driver.edit', compact('driver'));
    }

    public function update(Driver $driver, Request $request)
    {
        $driver->update($request->all());
        return redirect()->route('driver.index');
    }
}

