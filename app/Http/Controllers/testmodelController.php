<?php

namespace App\Http\Controllers;

use App\Models\Testmodel;
use Illuminate\Http\Request;

class testmodelController extends Controller
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
    public function show(Testmodel $testmodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testmodel $testmodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testmodel $testmodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testmodel $testmodel)
    {
        //
    }
}
