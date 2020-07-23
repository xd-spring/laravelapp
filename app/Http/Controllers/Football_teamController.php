<?php

namespace App\Http\Controllers;

use App\Football_team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Football_teamController extends Controller
{
    public function index(Request $request)
    {   
        // ログインしていたら、test/menuを表示
        if (Auth::check()) {
            $items = Football_team::all();
        return view('football_team.index', ['items' => $items]);
        } else {
            // ログインしていなかったら、Login画面を表示
            return view('auth/login');
        }
    }

    public function find(Request $request)
    {
        return view('football_team.find', ['input' => '']);
    }
   
    public function search(Request $request)
    {
        $item = Football_team::find($request->input);
        $param = ['input' => $request->input, 'item' => $item];
        return view('football_team.find', $param);
    }
    
    public function add(Request $request)
    {
        return view('football_team.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Football_team::$rules);
        $football_team = new Football_team;
        $form = $request->all();
        unset($form['_token']);
        $football_team->timestamps = false;
        $football_team->fill($form)->save();
        return redirect('/football_team');
    }

    public function edit(Request $request)
    {
        $football_team = Football_team::find($request->football_teams_id);
        return view('football_team.edit', ['form' => $football_team]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Football_team::$rules);
        $football_team = Football_team::find($request->football_teams_id);
        $form = $request->all();
        unset($form['_token']);
        $football_team->fill($form)->save();
        return redirect('/football_team');
    }

    public function delete(Request $request)
    {
        $football_team = Football_team::find($request->football_teams_id);
        return view('football_team.del', ['form' => $football_team]);
    }

    public function remove(Request $request)
    {
        Football_team::find($request->football_teams_id)->delete();
        return redirect('/football_team');
    }
}

