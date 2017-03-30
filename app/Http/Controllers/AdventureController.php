<?php

namespace App\Http\Controllers;

use App\Models\Core\Adventure;
use App\Models\Core\World;
use Illuminate\Http\Request;

class AdventureController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param World $world
     * @return \Illuminate\Http\Response
     */
    public function index(World $world)
    {
        $adventures = $world->adventures;
        return view('entity.adventure.index', compact('world', 'adventures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param World $world
     * @return \Illuminate\Http\Response
     */
    public function create(World $world)
    {
        return view('entity.adventure.create', compact('world'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param World $world
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(World $world, Request $request)
    {
        $world->addAdventure(new Adventure($request->all()));
        return redirect()->action('AdventureController@index', compact('world'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Adventure  $adventure
     * @return \Illuminate\Http\Response
     */
    public function destroy(World $world, Adventure $adventure)
    {
        $this->authorize('destroyAdventure', $adventure);
        $adventure->delete();
        return back();
    }
}
