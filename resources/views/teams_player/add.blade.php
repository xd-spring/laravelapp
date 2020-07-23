@extends('layouts.footballapp')

@section('title', 'Teams_player.Add')

@section('menubar')
    @parent
    選手登録ページ
@endsection

@section('content')
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/teams_player/add" method="post">
    <table>
        @csrf
        <tr><th>所属チーム:</th><td>
            <select name="football_teams_id">
            @foreach($football_teams as $football_team)
            <option value="{{ $football_team->football_teams_id }}">{{ $football_team->football_teams_name }}</option>
            @endforeach
            </select></td></tr>            
        <tr><th>選手名: </th><td><input type="text"  name="teams_players_name"
            value="{{old('teams_players_name')}}"></td></tr>
        <tr><th>背番号: </th><td><input type="text"  name="teams_players_number"
            value="{{old('teams_players_number')}}"></td></tr>
        <tr><th>備考: </th><td><input type="text"
            name="teams_players_memo"</td></tr>
        
        <tr><th></th><td><input type="submit"
            value="send"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
