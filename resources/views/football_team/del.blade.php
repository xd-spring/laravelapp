@extends('layouts.footballapp')

@section('title','Football_team.Delete')

@section('menubar')
    @parent
    削除ページ
@endsection

@section('content')
    <form action="/football_team/del" method="post">
    <table>
        @csrf
        <input type="hidden" name="football_teams_id" value="{{$form->football_teams_id}}">
        <tr><th>チーム名: </th><td>{{$form->football_teams_name}}</td></tr>
        <tr><th>備考: </th><td>{{$form->football_teams_memo}}</td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection


