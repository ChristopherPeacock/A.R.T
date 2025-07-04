<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function index(){
        $team = Team::where('id', 1)->first();
        $teamName = $team ? $team->name : 'Default Team';
        return Inertia::render('ContactUs', [
            'teamName' => $teamName,
        ]);
    }

    public function store(Request $request){
        dd($request->all());
    }
}
