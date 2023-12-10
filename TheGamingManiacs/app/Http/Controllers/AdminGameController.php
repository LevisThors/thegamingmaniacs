<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class AdminGameController extends Controller
{
    public function show()
    {
        $games = Game::all();

        return view(
            'admin/games/admin-games',
            [
                'games' => $games,
            ]
        );
    }

    public function add()
    {
        return view('admin/games/admin-add-games');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'slug' => 'required|unique:games,slug|max:255',
            'image' => 'required|image|max:2048',
        ]);


        $game = new Game;
        $game->name = $validatedData['name'];
        $game->description = $validatedData['description'];
        $game->slug = $validatedData['slug'];
        $game->image = $validatedData['image']->store('images', 'public');

        $game->save();

        return redirect('/admin/games')->with('success', 'Game created successfully.');
    }
}
