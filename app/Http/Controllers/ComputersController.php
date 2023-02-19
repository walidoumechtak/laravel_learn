<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ComputersController extends Controller
{

    // array of static data

    private static function getData()
    {
        return [
            ['id' => 0, 'name' => 'Apple'],
            ['id' => 1, 'name' => 'Asuz'],
            ['id' => 2, 'name' => 'Samsung'],
            ['id' => 3, 'name' => 'Acer'],
            ['id' => 4, 'name' => 'HP']
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("computers.index", [
            'computers' => self::getData()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()//: Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)//: RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)//: Response
    {
        $computers = self::getData();
        $index = array_search($id, array_column($computers, 'id',));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)//: Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)//: RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)//: RedirectResponse
    {
        //
    }
}
