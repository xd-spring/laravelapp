<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\FootballRequest;

class FootballController extends Controller
{

    public function index(Request $request)
    {
        $items = DB::table('football_teams')->get();
        return view('football.index',['items' => $items]);
    }

    public function post(Request $request)
    {
        $items = DB::select('select * from football_teams');
        return view('football.index',['items' => $items]);
    }

    public function add(Request $request)
    {   
        return view('football.add');
    }

    public function create(Request $request)
    {
        $validate_rule = [
            'football_teams_name' => 'required',
        ];
        $this->validate($request, $validate_rule);
        $param = [
            'football_teams_name' => $request->football_teams_name,
            'football_teams_memo' => $request->football_teams_memo,
        ];
        DB::table('football_teams')->insert($param);
        return redirect('/football');
    }
    
    public function edit(Request $request)
    {
        $item = DB::table('football_teams')->where('football_temas_id', $request->football_teams_id)->first();
        return view('football.edit', ['form' => $item[0]]);
    }

    public function update(Request $request)
    {
        $param = [
            'football_teams_id' => $request->football_teams_id,
            'football_teams_name' => $request->football_teams_name,
            'football_teams_memo' => $request->football_teams_memo,
        ];
        DB::table('football_teams')->where('football_teams_id', $request->football_teams_id)->update($param);
        return redirect('/football');
    }

    public function del(Request $request)
    {
        $item = DB::table('football_teams')->where('football_teams_id', $request->football_teams_id)->first();
        return view('football.del', ['form' => $item]);
    }
    
    public function remove(Request $request)
    {
        DB::table('football_teams')->where('football_teams_id', $request->football_teams_id)->delete();
        return redirect('/football');
    }
} 

    
