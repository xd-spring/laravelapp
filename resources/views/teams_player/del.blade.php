@extends('layouts.footballapp')

@section('title','Teams_player.Delete')

@section('menubar')
    @parent
    削除ページ
@endsection

@section('content')
    <form action="/teams_player/del" method="post">
    <table>
        @csrf
        <input type="hidden" name="teams_players_id" value="{{$form->teams_players_id}}">
        <tr><th>選手名: </th><td>{{$form->teams_players_name}}</td></tr>
        <tr><th>背番号: </th><td>{{$form->teams_players_number}}</td></tr>
        <tr><th>備考: </th><td>{{$form->teams_players_memo}}</td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection

