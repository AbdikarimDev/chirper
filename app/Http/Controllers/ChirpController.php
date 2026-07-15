<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chirps = [
            [
                'Author' => 'Mohamed Ahemed',
                'Message' => 'working with my first try',
                'Time' => '1 Hour',
            ],
            [
                'Author' => 'Abdikarim Mohamed',
                'Message' => 'working with my second try',
                'Time' => '2 Hour',
            ],
            [
                'Author' => 'Ahmed Mohamed',
                'Message' => 'working with my third try',
                'Time' => '3 Hour',
            ],
        ];

        return view('home', ['chirps' => $chirps]);

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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
