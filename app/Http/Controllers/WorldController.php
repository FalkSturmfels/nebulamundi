<?php

namespace App\Http\Controllers;

use App\Models\Core\User;
use App\Models\Core\World;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorldController extends Controller
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
        $worlds = World::ownWorlds();
        $users = User::all();
        $selectedUser = Auth::user();
        return view('entity.world.index', compact(['worlds', 'users', 'selectedUser']));
    }

    public function worldsByUser($id)
    {
        $worlds = World::byUserId($id);
        $users = User::all();
        $selectedUser = User::find($id);
        return view('entity.world.index', compact(['worlds', 'users', 'selectedUser']));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Core\World $world
     * @return \Illuminate\Http\Response
     */
    public function show(World $world)
    {
        return view('entity.world.show', compact('world'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
