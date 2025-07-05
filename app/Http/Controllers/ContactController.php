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
   public function store(Request $request)
{
    dd($request->all());
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'companyName' => 'required|string|max:255',
        'message' => 'nullable|string|max:255'
    ]);

    

}

}
