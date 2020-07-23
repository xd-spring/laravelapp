@extends('layouts.footballapp')

@section('title','Delete')

@section('menubar')
    @parent
    削除ページ
@endsection

@section('content')
    <form action="/football/del" method="post">
    <table>
        @csrf
        <input type="hidden" name="football_teams_id" value="{{$form->football_teams_id}}">
        <tr><th>football_teams_name: </th><td>{{$form->football_teams_name}}</td></tr>
        <tr><th>football_teams_memo: </th><td>{{$form->football_teams_memo}}</td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
