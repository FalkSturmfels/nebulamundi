<?php

namespace App\Http\Controllers;

use App\Models\Core\World;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

use App\Http\Requests;

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
        $worldGrid = $this->createWorldGrid();
        return view('worlddef.index', compact('worldGrid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'Create new World';
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    // ============================================
    //
    //   Helper methods
    //
    // ============================================

    private function createWorldGrid()
    {
        $worlds = World::ownWorlds();

        $grid = new Collection();
        $offset = 0;
        $length = 5;
        $slice = $worlds->slice($offset, $length);
        $offset += 5;
        $length = 6;

        while (!$slice->isEmpty())
        {
            $grid->add($slice);
            $slice = $worlds->slice($offset, $length)->values();
            $offset += 6;
        }

        return $grid;
    }
}
