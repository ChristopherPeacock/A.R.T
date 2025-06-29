<?php

namespace App\Http\Controllers;

use App\Models\EditPage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Team;
use App\Models\User;

class EditPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::where('id', 1)->first();

        return Inertia::render('EditPages', [
            'teamName' => $teams->name
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EditPage $editPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EditPage $editPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EditPage $editPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EditPage $editPage)
    {
        //
    }
}
