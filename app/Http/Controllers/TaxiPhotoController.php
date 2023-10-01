<?php

namespace App\Http\Controllers;

use App\Models\Taxi;
use App\Models\TaxiPhotos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaxiPhotoController extends Controller
{
    public function index($id)
    {
        $Tixi=Taxi::find($id);
        return view('taxis.photos', compact('Tixi'));
    }

    public function store(Request $request,Taxi $Tixi)
    {
        // $restaurant_id=Auth::id();
        // $restaurant=Restaurant::find($restaurant_id); 
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('photos', 'public');

        $Tixi->photos()->create([
            'path' => $imagePath,
        ]);

        return redirect()->route('taxis.photos.index',$Tixi->id)->with('success', 'Photo added successfully.');
    }

    public function destroy(TaxiPhotos $photo)
    {
        
         $image_path=public_path('storage/' . $photo->path);
        if(file_exists($image_path)){
            unlink($image_path);
            $photo->delete();
            return redirect()->back()->with('success', 'Photo deleted successfully.');
          }
          return redirect()->back()->with('error', 'Photo not  deleted.');
        
    }
}
