<?php

namespace App\Http\Controllers;

use App\Models\Cars; // Make sure the model is correctly referenced
use Illuminate\Http\Request;

class CarStatusController extends Controller
{
    // Mark a car as "Not Available" (Check-Out)
    public function checkOut($id)
{
    $car = Cars::findOrFail($id); // Find the car by its ID
    $car->status = 'not available'; // Mark the car as not available
    $car->save(); // Save the changes

    return redirect()->route('carstatus.index')->with('success', 'Car checked out successfully!');
}

public function checkIn($id)
{
    $car = Cars::findOrFail($id); // Find the car by its ID
    $car->status = 'available'; // Mark the car as available
    $car->save(); // Save the changes

    return redirect()->route('carstatus.index')->with('success', 'Car checked in successfully!');
}

    // Inside CarStatusController
// Inside CarStatusController
public function index()
{
    $cars = Cars::all();
    return view('cars.carstatus', compact('cars')); // Use the new view name
}


}
