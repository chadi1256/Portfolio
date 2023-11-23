<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('rooms.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'room_type' => 'required|string',
            'room_number' => 'required|integer',
            'room_area' => 'required|numeric',
            'minibar_available' => 'required|string',
             'bath_available' => 'required|string',
            'capacity' => 'required|integer',
            'price_per_night' => 'required|numeric',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        

        ]);

      
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos');
            $validatedData['photo'] = $path;
        }

        Room::create($validatedData);

        return redirect('/rooms')->with('success', 'Room added successfully.');
    }

    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    public function update(Request $request, Room $room)
    {
        $validatedData = $request->validate([
            'room_type' => 'required|string',
            'room_number' => 'required|integer',
            'room_area' => 'required|numeric',
            'minibar_available' => 'required|string',
            'bath_available' => 'required|string',
            'capacity' => 'required|integer',
            'price_per_night' => 'required|numeric',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

    
        if ($request->hasFile('photo')) {
            if ($room->photo) {
                Storage::delete($room->photo);
            }

            $path = $request->file('photo')->store('photos');
            $validatedData['photo'] = $path;
        }


        $room->update($validatedData);

        return redirect('/rooms')->with('success', 'Room updated successfully.');
    }

    public function destroy(Room $room)
    {
    
        if ($room->photo) {
            Storage::delete($room->photo);
        }

        $room->delete();
        return redirect('/rooms')->with('success', 'Room deleted successfully.');
    }
}
