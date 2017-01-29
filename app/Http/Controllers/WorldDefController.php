<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreSimpleDefRequest;
use App\Models\Core\World;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorldDefController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $worlds = Auth::user()->worlds;
        return view('worlddef.index', compact('worlds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('worlddef.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSimpleDefRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSimpleDefRequest $request)
    {
        $user = Auth::user();
        $user->addWorld(new World($request->all()));

        return redirect()->action('WorldDefController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  World $world
     * @return \Illuminate\Http\Response
     */
    public function show(World $world)
    {
        return view('worlddef.show', compact('world'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  World $world
     * @return \Illuminate\Http\Response
     */
    public function edit(World $world)
    {
        return view('worlddef.edit', compact('world'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreSimpleDefRequest $request
     * @param  World $world
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSimpleDefRequest $request, World $world)
    {
        $world->update($request->all());
        return redirect()->action('WorldDefController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  World $world
     * @return \Illuminate\Http\Response
     */
    public function destroy(World $world)
    {
        $this->authorize('destroy', $world);
        $world->delete();
        return back();
    }

}
