@extends('layouts.footballapp')

@section('title', 'Football_team.Add')

@section('menubar')
    @parent
    新規作成ページ
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
    <form action="/football_team/add" method="post">
    <table>
        @csrf
        <tr><th>チーム名: </th><td><input type="text" name="football_teams_name"
            value="{{old('football_teams_name')}}"></td></tr>
        <tr><th>備考: </th><td><input type="text" name="football_teams_memo"
            value="{{old('football_teams_memo')}}"></td></tr>
        <tr><th></th><td><input type="submit" 
            value="send"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
