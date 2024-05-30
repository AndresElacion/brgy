<?php

namespace App\Http\Controllers\Permit;

use App\Models\Permit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permits = Permit::orderBy('created_at', 'desc')->get();

        return view('permit.index', [
            'permits' => $permits
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
    public function show(Permit $permit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permit $permit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permit $permit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permit $permit)
    {
        //
    }
}