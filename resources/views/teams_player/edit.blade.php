@extends('layouts.footballapp')

@section('title','Teams_player.Edit')

@section('menubar')
    @parent
    編集ページ
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
    <form action="/teams_player/edit" method="post">
    <table>
        @csrf
        <input type="hidden" name="teams_players_id" value="{{$form->teams_players_id}}">
        <tr><th>選手名: </th><td><input type="text" name="teams_players_name" value="{{$form->teams_players_name}}"></td></tr>
        <tr><th>背番号: </th><td><input type="text" name="teams_players_number" value="{{$form->teams_players_number}}"></td></tr>
        <tr><th>備考: </th><td><input type="text" name="teams_players_memo" value="{{$form->teams_players_memo}}"></td></tr>
        <tr><th></th><td><input type="submit"  value="send"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
