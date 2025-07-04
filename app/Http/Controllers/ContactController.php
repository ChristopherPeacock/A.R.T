<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team;
use App\Models\Contact;
use Inertia\Inertia;
use Mews\Purifier\Facades\Purifier;



class ContactController extends Controller
{
    public function index(){
        $team = Team::where('id', 1)->first();
        $teamName = $team ? $team->name : 'Default Team';
        return Inertia::render('ContactUs', [
            'teamName' => $teamName,
        ]);
    }

    //store in the contacts table Untill I refactor it to call it Inbox table
    public function store(Request $request){
        dd($request->all());
        $validated = $request->validated([
            'name' => 'required | string | max:255 ',
            'email' => 'required | string | max:255',
            'companyName' => 'required | string | max:255',
            'message' => 'nullable | string | max:255'
        ]);

        $name = strip_tags($validated['name']);
        $email = strip_tags($validated['email']);
        $companyName = strip_tags($validated['companyName']);
        $message = Purifier::clean($validated['message']);

        Contact::create([
            'name' => $name,
            'email'=> $email,
            'companyName' => $companyName,
            'message'=> $message,
        ]);

        return redirect()->route('./')->with('success','Your details has been sent!');
    }
}
