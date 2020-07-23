@extends('layouts.footballapp')

@section('title','Edit')

@section('menubar')
    @parent
    更新ページ
@endsection

@section('content')
    <form action="/football/edit" method="post">
    <table>
        @csrf
        <input type="hidden" name="football_teams_id" value="{{$form->football_teams_id}}">
        <tr><th>チーム名: </th><td><input type="text" name="football_teams_name" value="{{$form->football_teams_name}}"></td></tr>
        <tr><th>備考: </th><td><input type="text" name="football_teams_memo" value="{{$form->football_teams_memo}}"></td></tr>
        <tr><th></th><td><input type="submit"  value="send"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
