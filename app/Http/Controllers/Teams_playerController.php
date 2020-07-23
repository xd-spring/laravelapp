<?php

namespace App\Http\Controllers;

use App\Teams_player;
use App\Football_team;
use Illuminate\Http\Request;

class Teams_playerController extends Controller
{
    
    public function index(Request $request)
    {
        $items = Teams_player::all();
        return view('teams_player.index', ['items' => $items]);
    }

    public function add(Request $request)
    {   
        $football_teams = Football_team::all();
        return view('teams_player.add',compact('football_teams'));
    }

    public function create(Request $request)
    {
        $this->validate($request, Teams_player::$rules);
        $teams_player = new Teams_player;       
        $form = $request->all();
        unset($form['_token']);
        $teams_player->fill($form)->save();
        return redirect('/football_team');
    }

    public function edit(Request $request)
    {
        $teams_player = Teams_player::find($request->teams_players_id);
        return view('teams_player.edit', ['form' => $teams_player]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Teams_player::$rules);
        $teams_player = Teams_player::find($request->teams_players_id);
        $form = $request->all();
        unset($form['_token']);
        $teams_player->fill($form)->save();
        return redirect('/football_team');
    }

    public function delete(Request $request)
    {
        $teams_player = Teams_player::find($request->teams_players_id);
        return view('teams_player.del', ['form' => $teams_player]);
    }

    public function remove(Request $request)
    {
        Teams_player::find($request->teams_players_id)->delete();
        return redirect('/football_team');
    }
}
