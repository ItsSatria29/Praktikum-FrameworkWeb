<?php
namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $data = Game::all();
        return view('game.index', compact('data'));
    }

    public function create()
    {
        return view('game.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'platform'   => 'required',
            'genre'      => 'required',
            'release_year'=> 'required|digits:4|integer',
        ]);

        Game::create($request->all());
        return redirect()->route('game.index')->with('success','Game berhasil ditambahkan!');
    }

    public function edit(Game $game)
    {
        return view('game.edit', compact('game'));
    }
}