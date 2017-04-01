<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSimpleDefRequest;
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
     * @param  StoreSimpleDefRequest  $request
     * @param World $world
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSimpleDefRequest $request, World $world)
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
     * @param  World  $world
     * @param  Adventure  $adventure
     * @return \Illuminate\Http\Response
     */
    public function edit(World $world, Adventure $adventure)
    {
        return view('entity.adventure.edit', compact('world', 'adventure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreSimpleDefRequest $request
     * @param  World  $world
     * @param Adventure $adventure
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSimpleDefRequest $request, World $world, Adventure $adventure)
    {
        $adventure->update($request->all());
        return redirect()->action('AdventureController@index', $world);
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
