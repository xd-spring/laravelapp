@extends('layouts.footballapp')

@section('title','Football_team.index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
   
    <th><a href="/football_team/add">チーム新規追加</a></th>
    <th><a href="/teams_player/add">選手を追加</a></th>
    <table>
    <tr><th>Football_teams</th><th>Teams_players</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>
            {{$item->getData()}}<br>
            <a href="/football_team/del?football_teams_id={{$item->football_teams_id}}">チームを削除</a>
            <a href="/football_team/edit?football_teams_id={{$item->football_teams_id}}">チームを編集</a>
            </td>
            <td>
            @if ($item->teams_player != null)
                <table width="100%">
                @foreach ($item->teams_player as $obj)
                    <tr><td>{{$obj->getData()}}</td></tr>
                    <td>
                    <a href="/teams_player/edit?teams_players_id={{$obj->teams_players_id}}">編集</a>
                    <a href="/teams_player/del?teams_players_id={{$obj->teams_players_id}}">削除</a>
                    </td>
                @endforeach
                </table>
            @endif
            </td>
         </tr>
     @endforeach
    </table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection

