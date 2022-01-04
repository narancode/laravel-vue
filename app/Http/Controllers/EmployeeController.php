<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = $request->all();
        $response = Employee::create($data);
        return response()->json([
            'status' => 'success',
            'data' => $response
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eployee  $eployee
     * @return \Illuminate\Http\Response
     */
    public function show(Eployee $eployee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eployee  $eployee
     * @return \Illuminate\Http\Response
     */
    public function edit(Eployee $eployee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eployee  $eployee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eployee $eployee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eployee  $eployee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eployee $eployee)
    {
        //
    }
}
