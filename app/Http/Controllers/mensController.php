<?php

namespace App\Http\Controllers;

use App\Models\Mens;
use Illuminate\Http\Request;

class mensController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'This your index page';
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
    public function show(Mens $mens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mens $mens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mens $mens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mens $mens)
    {
        //
    }
}
