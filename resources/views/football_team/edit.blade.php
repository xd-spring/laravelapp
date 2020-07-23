@extends('layouts.footballapp')

@section('title','Football_team.Edit')

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
    <form action="/football_team/edit" method="post">
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

