<?php

namespace App\Http\Controllers;

use App\Models\Taxi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyMail;


class TaxiController extends Controller
{
    public function index()
    {
        $taxis = Taxi::get();
        return view('taxis.index', compact('taxis'));  
    }
    
    public function create()
    {
        return view('taxis.store');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'name' => 'required',
        'capacity' => 'required',
        'price' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $imagePath = $request->file('image')->store('photos', 'public');
    $validatedData['image'] = $imagePath;

    $Taxi = Taxi::create($validatedData);

    return redirect()->route('taxis.index', $Taxi->id)
        ->with('success', 'Taxi added successfully.');
}
    public function booking(Request $request)
    {
        $details="Name:".$request['name'].",\nPick up:".$request['from'].",\nDrop:".$request['destination'].",\nDate Time:".$request['datetime'];
        // Define the phone number and message
        $phoneNumber = '+923155395245'; // Replace with the recipient's phone number
        $message = $details;

        // Encode the phone number and message for the URL
        $encodedPhoneNumber = urlencode($phoneNumber);
        $encodedMessage = urlencode($message);

        // Create the WhatsApp URL
        $whatsappUrl = "whatsapp://send?phone={$encodedPhoneNumber}&text={$encodedMessage}";

        // Redirect the user to the WhatsApp URL
        return redirect()->away($whatsappUrl);
}

}
