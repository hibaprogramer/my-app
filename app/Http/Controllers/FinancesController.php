<?php

namespace App\Http\Controllers;

use App\Models\finances;
use Illuminate\Http\Request;

class FinancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        function index(){
            return view('finances');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\finances  $finances
     * @return \Illuminate\Http\Response
     */
    public function show(finances $finances)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\finances  $finances
     * @return \Illuminate\Http\Response
     */
    public function edit(finances $finances)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\finances  $finances
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, finances $finances)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\finances  $finances
     * @return \Illuminate\Http\Response
     */
    public function destroy(finances $finances)
    {
        //
    }
}
